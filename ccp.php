<?php $page_title = 'Securing your collaboration platforms'; ?>
<?php include('header.php'); ?>
	<div class="page">
		<?php include('sidebar.php'); ?>
		<div class="page-content">
			<section class="page-first-screen ccp-page">
				<div class="page-first-screen-inner">
					<ol class="breadcrumbs" itemscope itemtype="http://schema.org/BreadcrumbList">
						<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
							<a itemprop="item" href="index.php">
								<span itemprop="name">Home</span>
							</a>
							<meta itemprop="position" content="1" />
						</li>
						<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
							<a itemprop="item" href="#">
								<span itemprop="name">Knowledge Base</span>
							</a>
							<meta itemprop="position" content="2" />
						</li>
						<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
							<a itemprop="item" href="ccp.php">
								<span itemprop="name"><?= $page_title ?></span>
							</a>
							<meta itemprop="position" content="3" />
						</li>
					</ol>
					<div class="pfs-content-wrapper">
						<div class="section-content tpg">
							<h1>Download our latest webinar</h1>
							<h4>Securing Your Collaboration Platforms</h4>
							<p>In our digital age when we prefer the use of digital data rather than paper, it is important to know how to protect your organization from all threats including threats to your Collaboration Platforms. </p>
						</div>
						<div class="section-image">
							<img src="img/pages-images/ccp.png" alt="">
						</div>
					</div>
				</div>
			</section>
			<section class="gray-section ccp-section">
				<div class="section-inner">
					<div class="column">
						<div class="section-caption no-uppercase">
							<h3 class="sc-title">Which File Formats are Especially Vulnerable?</h3>
						</div>
						<div class="steps-list-wrapper">
							<div class="steps-list with-bg">
								<div class="item">
									<div class="item-number">01</div>
									<div class="item-text">
										<p><strong>Recive file</strong></p>
										<p>The recived file is scanned for know threats</p>
									</div>
									<div class="item-icon">
										<img src="img/pages-images/removable-devices-disarmer.png" alt="">
									</div>
								</div>
								<div class="item">
									<div class="item-number">02</div>
									<div class="item-text">
										<p><strong>Recive file</strong></p>
										<p>The recived file is scanned for know threats</p>
									</div>
									<div class="item-icon">
										<img src="img/pages-images/removable-devices-disarmer.png" alt="">
									</div>
								</div>
								<div class="item">
									<div class="item-number">03</div>
									<div class="item-text">
										<p><strong>Recive file</strong></p>
										<p>The recived file is scanned for know threats</p>
									</div>
									<div class="item-icon">
										<img src="img/pages-images/removable-devices-disarmer.png" alt="">
									</div>
								</div>
								<div class="item">
									<div class="item-number">04</div>
									<div class="item-text">
										<p><strong>Recive file</strong></p>
										<p>The recived file is scanned for know threats</p>
									</div>
									<div class="item-icon">
										<img src="img/pages-images/removable-devices-disarmer.png" alt="">
									</div>
								</div>
								<div class="item">
									<div class="item-number">05</div>
									<div class="item-text">
										<p><strong>Recive file</strong></p>
										<p>The recived file is scanned for know threats</p>
									</div>
									<div class="item-icon">
										<img src="img/pages-images/removable-devices-disarmer.png" alt="">
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="column">
						<div class="section-caption">
							<h3 class="sc-title">Fill out the form and watch our free webinar</h3>
						</div>
						<form action="#" class="form ccp-form">
							<div class="form-row">
								<div class="form-field">
									<div class="input-field">
										<input type="text" id="ccp-first-name">
										<label for="ccp-first-name">First Name*</label>
									</div>
								</div>
							</div>
							<div class="form-row">
								<div class="form-field">
									<div class="input-field">
										<input type="text" id="ccp-last-name">
										<label for="ccp-last-name">Last Name*</label>
									</div>
								</div>
							</div>
							<div class="form-row">
								<div class="form-field">
									<div class="input-field">
										<input type="text" id="ccp-email">
										<label for="ccp-email">Email*</label>
									</div>
								</div>
							</div>
							<div class="form-row">
								<div class="form-field">
									<div class="input-field">
										<input type="text" id="ccp-country">
										<label for="ccp-country">Country*</label>
									</div>
								</div>
							</div>
							<div class="form-row small-margin">
								<div class="checkbox">
									<input type="checkbox" id="ccp-newsletter">
									<label for="ccp-newsletter">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra</label>
								</div>
							</div>
							<br>
							<br>
							<div class="form-row">
								<button type="submit" class="btn btn-azure fullwidth">Watch Now</button>
							</div>
						</form>
					</div>
				</div>
			</section>
			<section class="video-section">
				<div class="section-inner">
					<img src="img/pages-images/video-big.png" alt="">
				</div>
			</section>
			<?php include('footer.php'); ?>
			<?php // include('notifications.php'); ?>
			<?php include('page-parts/fullpage-tabs.inc.php'); ?>
		</div>
	</div>
<?php include('footer-scripts.php'); ?>