<link rel='stylesheet' href='../assets/css/app.css'>
<link rel='stylesheet' href='../assets/css/dark-mode.css'>
<script type="text/javascript" src="https://sandbox.web.squarecdn.com/v1/square.js"></script>
<script>
const darkModeCardStyle = {
  '.input-container': {
    borderColor: '#999999',
    borderRadius: '6px',
  },
  '.input-container.is-focus': {
    borderColor: '#26d847',
  },
  '.input-container.is-error': {
    borderColor: '#ff1600',
  },
  '.message-text': {
    color: '#999999',
  },
  '.message-icon': {
    color: '#999999',
  },
  '.message-text.is-error': {
    color: '#ff1600',
  },
  '.message-icon.is-error': {
    color: '#ff1600',
  },
  input: {
    backgroundColor: '#13182D',
    color: '#FFFFFF',
    fontFamily: 'helvetica neue, sans-serif',
  },
  'input::placeholder': {
    color: '#999999',
  },
  'input.is-error': {
    color: '#ff1600',
  },
  '@media screen and (max-width: 600px)': {
     'input': {
        'fontSize': '12px',
     }
  }
};

const appId = 'sandbox-sq0idb-8rWtL89J2vAmZsspZkMJAA';
const locationId = 'L0P9EDJKGVHYG';

async function initializeCard(payments) {
  const card = await payments.card({
    style: darkModeCardStyle,
  });
  await card.attach('#card-container');

  return card;
}

async function createPayment(token, verificationToken) {
  const body = JSON.stringify({
    locationId,
    sourceId: token,
    verificationToken,
    idempotencyKey: window.crypto.randomUUID(),
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
    amount: '<?php $_SESSION['amount']; ?>',
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

document.addEventListener('DOMContentLoaded', async function () {
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
  cardButton.addEventListener('click', async function (event) {
    await handlePaymentMethodSubmission(event, card);
  });
});
</script>
<form id="payment-form" style="height: 100px;">
  <div id="card-container"></div>
  <button id="card-button" class="payment" type="button">Place Order</button>
</form>
<div id="payment-status-container"></div>
