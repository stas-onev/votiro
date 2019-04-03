<?php $page_title = 'Contact Us'; ?>
<?php include('header.php'); ?>
	<div class="page">
		<?php include('sidebar.php'); ?>
		<div class="page-content">
			<section class="page-first-screen contacts-page sm-no-corner" style="background-image: url(img/pages-images/envelope-pattern.png);">
				<div class="page-first-screen-inner">
					<ol class="breadcrumbs" itemscope itemtype="http://schema.org/BreadcrumbList">
						<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
							<a itemprop="item" href="index.php">
								<span itemprop="name">Home</span>
							</a>
							<meta itemprop="position" content="1" />
						</li>
						<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
							<a itemprop="item" href="contacts.php">
								<span itemprop="name"><?= $page_title ?></span>
							</a>
							<meta itemprop="position" content="2" />
						</li>
					</ol>
					<div class="pfs-content-wrapper">
						<div class="section-content tpg">
							<h1>Contact Us</h1>
							<br>
							<p>We would love to hear from you</p>
						</div>
						<div class="section-image">
							<img src="img/pages-images/contacts.png" alt="">
						</div>
					</div>
				</div>
			</section>
			<section class="lets-talk-section">
				<div class="section-inner">
					<div class="section-caption no-uppercase centered">
						<h3 class="sc-title">Let’s Talk!</h3>
						<br>
						<p class="sc-subtitle">We will be happy to assist you with any question!</p>
					</div>
					<div class="section-form">
						<form action="#" class="form lets-talk-form">
							<div class="form-row with-columns">
								<div class="form-column">
									<div class="form-field">
										<div class="input-field">
											<input type="text" id="contacts-first-name">
											<label for="contacts-first-name">First Name*</label>
										</div>
									</div>
									<div class="form-field">
										<div class="input-field">
											<input type="text" id="contacts-last-name">
											<label for="contacts-last-name">Last Name*</label>
										</div>
									</div>
									<div class="form-field">
										<div class="input-field">
											<input type="text" id="contacts-email">
											<label for="contacts-email">Email*</label>
										</div>
									</div>
									<div class="form-field">
										<div class="input-field">
											<input type="tel" id="contacts-phone">
											<label for="contacts-phone">Phone</label>
										</div>
									</div>
								</div>
								<div class="form-column">
									<div class="form-field">
										<div class="input-field">
											<input type="text" id="contacts-company-name">
											<label for="contacts-company-name">Company*</label>
										</div>
									</div>
									<div class="form-field">
										<div class="input-field">
											<input type="text" id="contacts-title">
											<label for="contacts-title">Title*</label>
										</div>
									</div>
									<div class="form-field">
										<div class="select-field">
											<select name="contacts-employees" id="contacts-employees">
												<option value="0" class="hideme">Select</option>
												<option value="1">1 - 99</option>
												<option value="2">100 - 249</option>
												<option value="3">250 - 499</option>
												<option value="4">500 - 999</option>
												<option value="5">1,000 – 9,999</option>
												<option value="6">10,000 – 49,999</option>
												<option value="7">50,000 or more</option>
											</select>
											<label for="contacts-employees">No. of Employees</label>
										</div>
									</div>
									<div class="form-field">
										<div class="input-field">
											<input type="text" id="contacts-country">
											<label for="contacts-country">Country*</label>
										</div>
									</div>
								</div>
							</div>
							<div class="form-row big-margin">
								<div class="input-field">
									<textarea name="" id="contacts-message"></textarea>
									<label for="contacts-message">Message*</label>
								</div>
							</div>
							<div class="form-row small-margin">
								<div class="checkbox">
									<input type="checkbox" id="contacts-newsletter">
									<label for="contacts-newsletter">Yes, I want to learn more about CDR threats and file-based exploits and how peotect against them. <br>Share your knowledge with me via email!</label>
								</div>
							</div>
							<div class="form-row items-right">
								<button type="submit" class="btn btn-blue">Submit</button>
							</div>
						</form>
					</div>
				</div>
			</section>
			<section class="contacts-section">
				<div class="section-inner">
					<div class="contacts-grid">
						<div class="item">
							<div class="contacts-card">
								<div class="card-caption">North America office</div>
								<ul class="contacts-list">
									<li>
										<a href="tel:+14152313725" class="phone-link">+1 415 231 3725</a>
									</li>
									<li>
										<a href="mailto:sales-us@votiro.com" class="email-link">sales-us@votiro.com</a>
									</li>
								</ul>
								<p class="card-location">1325 Avenue of the Americas, 28th Floor <br>New York, New York</p>
							</div>
						</div>
						<div class="item">
							<div class="contacts-card">
								<div class="card-caption">EMEA office</div>
								<ul class="contacts-list">
									<li>
										<a href="tel:+972737374102" class="phone-link">+972 73 737 4102</a>
									</li>
									<li>
										<a href="mailto:sales-emea@votiro.com" class="email-link">sales-emea@votiro.com</a>
									</li>
								</ul>
								<p class="card-location">126 Yigal Alon Street, 3rd Floor <br>Tel Aviv, 67443, Israel</p>
							</div>
						</div>
						<div class="item">
							<div class="contacts-card">
								<div class="card-caption">Australia office</div>
								<ul class="contacts-list">
									<li>
										<a href="tel:+61292393165" class="phone-link">+61 2 9239 3165</a>
									</li>
									<li>
										<a href="mailto:sales-au@votiro.com" class="email-link">sales-au@votiro.com</a>
									</li>
								</ul>
								<p class="card-location">20 Martin Place, Level 10 <br>Sydney, NSW 2000, Australia</p>
							</div>
						</div>
						<div class="item">
							<div class="contacts-card">
								<div class="card-caption">APAC office</div>
								<ul class="contacts-list">
									<li>
										<a href="tel:+6531591224" class="phone-link">+65 3159 1224</a>
									</li>
									<li>
										<a href="mailto:sales-apac@votiro.com" class="email-link">sales-apac@votiro.com</a>
									</li>
								</ul>
								<p class="card-location">WeWork 60 Anson Road <br>079914, Singapore</p>
							</div>
						</div>
					</div>
				</div>
			</section>
			<?php include('footer.php'); ?>
			<?php // include('notifications.php'); ?>
			<?php include('page-parts/fullpage-tabs.inc.php'); ?>
		</div>
	</div>
<?php include('footer-scripts.php'); ?>