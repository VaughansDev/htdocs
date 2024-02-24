<?php
require 'inc/header.php';
?>
<div class="career-details pt-100 pb-100">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="career-details__wrapper">
					<div class="career-details__info">
						<ul>
							<li>
								<div class="d-flex item">
									<span>Reseller Tiers:</span> <span class="content">5</span>
								</div>
							</li>
							<li>
								<div class="d-flex item">
									<span>Discount:</span> <span class="content">5%-25%</span>
								</div>
							</li>
							<li>
								<div class="d-flex item">
									<span>Addons:</span> <span class="content">Cloud Hosting</span>
								</div>
							</li>
							<li>
								<div class="d-flex item">
									<span>Support:</span> <span class="content">By Khaos</span>
								</div>
							</li>
							<li>
								<div class="d-flex item">
									<span>New Applications:</span> <span class="content">Closed</span>
								</div>
							</li>
						</ul>
					</div>
					<div class="career__thumb">
						<img src="<?php echo $_CONFIG['domain']; ?>/assets/img/reseller-chart.png" alt="career details" title="career details">

					</div>
					<div class="career-details__text  pt-5" style="margin-top:50px;">
						<div class="career__tab tab__element">
							<button class="tab__button active" data-tab="description">Program Description</button>
							<button class="tab__button" data-tab="requirements">Program Requirements</button>
							<button class="tab__button" data-tab="application">Reseller Program Application</button>
						</div>

						<!-- description content -->
						<div class="career__tab-content tab__content open" id="description">
							<p>The Khaos Development: Reseller Program is a way for our customers to grow our brand<br>
								while also making some cash on the side. We offer discounts on licenses for you to resell<br>
								to your customers, you can set the cost of your licenses, as long as they are within our<br>
								minimum and maximum limits. We have developed a whmcs plugin that integrates with<br>
								our server using our reseller api, accepted members to the reseller program will be given<br>
								api credentials to be used with the WHMCS addon or the reseller api which can be used<br>
								for custom integration.
							</p>
							<ul class="bullet-list">
								<li>As a Member of our Reseller Program you get Tiered Discounts on our licenses</li>
								<li>Optional Paid Cloud Hosting Addon to allow you to sell our cloud hosted apps as well</li>
								<li>We handle all the support for your clients, just link them to our reseller support portal</li>
								<li>You must have your own website and domain, as well as hosting to be eligible</li>
							</ul>

							<h4>How to apply</h4>
							<ul class="bullet-list">
								<li>Have your own Domain, Hosting, and Website (WHMCS License required for WHMCS Addon)</li>
								<li>Reag and Agree to the Reseller Terms & Conditions, and Reseller Pricing Policy</li>
								<li>Sign the Reseller Agreement, Reseller Pricing Agreement, and Collections Agreement</li>
								<li>Fill out the Reseller Program Application and wait for a member of our team to reach <output></output></li>
							</ul>

							<div class="career__faq pt-2">
								<div class="faq__accordion">
									<div class="accordion accordion-flush" id="accordion">
										<div class="accordion-item">
											<div class="accordion-header">
												<div class="accordion-button" data-bs-toggle="collapse" data-bs-target="#one" aria-expanded="false" aria-controls="one" role="button">
													<h6>What is the Reseller Agreement?</h6>
												</div>
											</div>
											<div id="one" class="accordion-collapse collapse show" data-bs-parent="#accordion">
												<div class="accordion-text">
													The Reseller Agreement outline all the terms and conditions you are bound by and the rules you must follow as a reseller
												</div>
											</div>
										</div>

										<div class="accordion-item">
											<div class="accordion-header">
												<div class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#two" aria-expanded="false" aria-controls="two" role="button">
													<h6>What is the Reseller Pricing Agreement?</h6>
												</div>
											</div>
											<div id="two" class="accordion-collapse collapse" data-bs-parent="#accordion">
												<div class="accordion-text">
													The Reseller Pricing Agreement outline the minimum and maximum prices you can charge dor the products you resell and the disiplinary actions taken when they are not followed
												</div>
											</div>
										</div>

										<div class="accordion-item">
											<div class="accordion-header">
												<div class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#three" aria-expanded="false" aria-controls="three" role="button">
													<h6>What is the Collection Agreement?</h6>
												</div>
											</div>
											<div id="three" class="accordion-collapse collapse" data-bs-parent="#accordion">
												<div class="accordion-text">
													The Collections Agreement outlines the steps and methods used to collect unpaid balances from resellers who choose not to make their monthly payments
												</div>
											</div>
										</div>
										<div class="accordion-item">
											<div class="accordion-header">
												<div class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#four" aria-expanded="false" aria-controls="four" role="button">
													<h6>What is the Reseller Program Application??</h6>
												</div>
											</div>
											<div id="four" class="accordion-collapse collapse" data-bs-parent="#accordion">
												<div class="accordion-text">
													The Reseller Program Application is a form you must fill out to apply to the program, as this program has minimum requirements and conditions that must be met for eligibility. We use an application process to verify potential resellers and prevent missues and fraud from our resellers
												</div>
											</div>
										</div>

									</div>
								</div>
							</div>
						</div>
						<div class="career__tab-content tab__content" id="requirements">
							<p>Failure to meet the requirements or if they are not continuously met your access to the<br>
							program may be denied or terminated
							</p>
							<ul class="bullet-list mb-0">
								<li>You MUST maintain a minimum number of active licenses</li>
								<li>You MUST have your own Domain</li>
								<li>You MUST have your own hosting</li>
								<li>You MUST integrate the Reseller API with your system OR</li>
								<li>OPTIONAL: Have your own WHMCS License Key and use our Addon</li>
							</ul>
						</div>
						<div class="career__tab-content tab__content" id="application">
							<p>If you believe you meet the requirements and want to proceed with your application,<br>
							look at the list below and verify you have everything required.
							<br><br>
							Then just hit the Start Application button to proceed.</p>
							<ul class="bullet-list mb-0">
								<li>You MUST maintain a minimum number of active licenses</li>
								<li>You MUST have your own Domain</li>
								<li>You MUST have your own hosting</li>
								<li>You MUST integrate the Reseller API with your system OR</li>
								<li>OPTIONAL: Have your own WHMCS License Key and use our Addon</li>
							</ul>
							<div class="pricing__item--btn" style="margin-top:100px; width:30%;">
								<a class="btn pricing-btn" href="javascript:;">Appliactions Closed</a>
							</div>
							<!--<div class="pricing__item--btn" style="margin-top:100px; width:30%;">
								<a class="btn pricing-btn" href="<?php //echo $_CONFIG['domain']; ?>/reseller-application.php">Start Appliaction</a>
							</div>-->
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Career details end -->


<?php
require 'inc/footer.php';
?>