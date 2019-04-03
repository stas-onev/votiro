<?php $page_title = 'Solutions by industry'; ?>
<?php include('header.php'); ?>
	<div class="page">
		<?php include('sidebar.php'); ?>
		<div class="page-content">
			<section class="page-first-screen md-no-image" style="background-image: url(img/pages-images/solutions-pattern.png);">
				<div class="page-first-screen-inner">
					<ol class="breadcrumbs" itemscope itemtype="http://schema.org/BreadcrumbList">
						<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
							<a itemprop="item" href="index.php">
								<span itemprop="name">Home</span>
							</a>
							<meta itemprop="position" content="1" />
						</li>
						<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
							<a itemprop="item" href="solutions-by-industry.php">
								<span itemprop="name"><?= $page_title ?></span>
							</a>
							<meta itemprop="position" content="2" />
						</li>
					</ol>
					<div class="pfs-content-wrapper">
						<div class="section-content tpg">
							<h1>Securing digital data flow is a business imperative and a competitive advantage</h1>
							<br>
							<p>Going digital is a business imperative today, and the reason is simple – customers, users, employees, and citizens expect a faster, easier interaction with authorities, caretakers and service providers. Every government agency, healthcare institute, bank, or any other service-oriented organization is already in the midst of its digital journey. But alongside business advantages, rises a huge risk of exposure to malware infected documents entering the organization via content files. We work with the most data-sensitive institutes in the world to seal their security ecosystem, making sure every single file is cleansed before entering the network.</p>
						</div>
						<div class="section-image">
							<img src="img/pages-images/solutions-by-industry.png" alt="">
						</div>
					</div>
				</div>
			</section>
			<section class="subcategories-nav-section">
				<div class="section-inner">
					<div class="subcategories-nav-wrapper">
						<div class="subcategories-nav">
							<div class="item">
								<div class="item-image">
									<img src="img/pages-images/critical.png" alt="">
								</div>
								<div class="item-text">
									<h4 class="item-caption">Critical infrastructure</h4>
									<a href="government-agencies.php" class="learn-more">Learn More</a>
								</div>
							</div>
							<div class="item">
								<div class="item-image">
									<img src="img/pages-images/building.png" alt="">
								</div>
								<div class="item-text">
									<h4 class="item-caption">Financial services</h4>
									<a href="#" class="learn-more">Learn More</a>
								</div>
							</div>
							<div class="item">
								<div class="item-image">
									<img src="img/pages-images/insurance.png" alt="">
								</div>
								<div class="item-text">
									<h4 class="item-caption">Insurance</h4>
									<a href="#" class="learn-more">Learn More</a>
								</div>
							</div>
							<div class="item">
								<div class="item-image">
									<img src="img/pages-images/healthcare.png" alt="">
								</div>
								<div class="item-text">
									<h4 class="item-caption">Healthcare</h4>
									<a href="#" class="learn-more">Learn More</a>
								</div>
							</div>
							<div class="item">
								<div class="item-image">
									<img src="img/pages-images/critical.png" alt="">
								</div>
								<div class="item-text">
									<h4 class="item-caption">Government agencies</h4>
									<a href="#" class="learn-more">Learn More</a>
								</div>
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