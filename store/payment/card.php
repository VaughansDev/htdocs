<link rel='stylesheet' href='../assets/css/app.css'>
<link rel='stylesheet' href='../assets/css/dark-mode.css'>
<script type="text/javascript" src="https://sandbox.web.squarecdn.com/v1/square.js"></script>
<script>
  const appId = 'sandbox-sq0idb-Mc0SPnKWQ3cYVJ-0EGnoiQ';
  const locationId = 'LWGA1R7B2E4WY';

  async function initializeCard(payments) {
    const card = await payments.card();
    await card.attach('#card-container');

    return card;
  }

  <?php
    session_start();
    $_SESSION['idempotencyKey'] = uniqid();
    ?>
  async function createPayment(token, verificationToken) {
    const body = JSON.stringify({
      locationId,
      sourceId: token,
      verificationToken,
      idempotencyKey: <?php echo $_SESSION['idempotencyKey']; ?>,
    });
    const paymentResponse = await fetch('payment/process-payment.php', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
      },
      body,
    });

    if (paymentResponse.ok) {
      return paymentResponse.json();
    }

    const errorBody = await paymentResponse.text();
    throw new Error(errorBody);
  }

  async function tokenize(paymentMethod) {
    const tokenResult = await paymentMethod.tokenize();
    if (tokenResult.status === 'OK') {
      return tokenResult.token;
    } else {
      let errorMessage = `Tokenization failed with status: ${tokenResult.status}`;
      if (tokenResult.errors) {
        errorMessage += ` and errors: ${JSON.stringify(
        tokenResult.errors
      )}`;
      }

      throw new Error(errorMessage);
    }
  }

  //Required in SCA Mandated Regions: Learn more at https://developer.squareup.com/docs/sca-overview
  async function verifyBuyer(payments, token) {
    const verificationDetails = {
      amount: '97.99',
      billingContact: {
        <?php if (!empty($_SESSION['address2'])) { ?>
          addressLines: ['<?php $_SESSION['address1']; ?>', '<?php $_SESSION['address2']; ?>'],
        <?php } else { ?>
          addressLines: ['<?php $_SESSION['address1']; ?>'],
        <?php } ?>
        familyName: '<?php $_SESSION['lastname']; ?>',
        givenName: '<?php $_SESSION['firstname']; ?>',
        email: '<?php $_SESSION['email']; ?>',
        country: '<?php $_SESSION['country']; ?>',
        phone: '<?php $_SESSION['phone']; ?>',
        region: '<?php $_SESSION['state']; ?>',
        city: '<?php $_SESSION['city']; ?>',
      },
      currencyCode: 'CAD',
      intent: 'CHARGE',
    };

    const verificationResults = await payments.verifyBuyer(
      token,
      verificationDetails
    );
    return verificationResults.token;
  }

  // status is either SUCCESS or FAILURE;
  function displayPaymentResults(status) {
    const statusContainer = document.getElementById(
      'payment-status-container'
    );
    if (status === 'SUCCESS') {
      statusContainer.classList.remove('is-failure');
      statusContainer.classList.add('is-success');
    } else {
      statusContainer.classList.remove('is-success');
      statusContainer.classList.add('is-failure');
    }

    statusContainer.style.visibility = 'visible';
  }

  document.addEventListener('DOMContentLoaded', async function() {
    if (!window.Square) {
      throw new Error('Square.js failed to load properly');
    }

    let payments;
    try {
      payments = window.Square.payments(appId, locationId);
    } catch {
      const statusContainer = document.getElementById(
        'payment-status-container'
      );
      statusContainer.className = 'missing-credentials';
      statusContainer.style.visibility = 'visible';
      return;
    }

    let card;
    try {
      card = await initializeCard(payments);
    } catch (e) {
      console.error('Initializing Card failed', e);
      return;
    }

    async function handlePaymentMethodSubmission(event, card) {
      event.preventDefault();

      try {
        // disable the submit button as we await tokenization and make a payment request.
        cardButton.disabled = true;
        const token = await tokenize(card);
        const verificationToken = await verifyBuyer(payments, token);
        const paymentResults = await createPayment(
          token,
          verificationToken
        );
        displayPaymentResults('SUCCESS');

        console.debug('Payment Success', paymentResults);
      } catch (e) {
        cardButton.disabled = false;
        displayPaymentResults('FAILURE');
        console.error(e.message);
      }
    }

    const cardButton = document.getElementById('card-button');
    cardButton.addEventListener('click', async function(event) {
      await handlePaymentMethodSubmission(event, card);
    });
  });
</script>
<form action="process-payment.php" id="payment-form" style="height: 100px;">
  <div id="card-container"></div>
  <button id="card-button" class="kd-btn kd-btn-xl kd-btn-block payment" type="button">Purchase $98</button>
</form>
<div id="payment-status-container"></div>