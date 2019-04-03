<?php $page_title = 'Technology'; ?>
<?php include('header.php'); ?>
	<div class="page">
		<?php include('sidebar.php'); ?>
		<div class="page-content">
			<section class="page-first-screen md-no-image sm-no-corner technology-page" style="background-image: url(img/pages-images/technology-pattern.png);">
				<div class="page-first-screen-inner">
					<ol class="breadcrumbs" itemscope itemtype="http://schema.org/BreadcrumbList">
						<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
							<a itemprop="item" href="index.php">
								<span itemprop="name">Home</span>
							</a>
							<meta itemprop="position" content="1" />
						</li>
						<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
							<a itemprop="item" href="technology.php">
								<span itemprop="name"><?= $page_title ?></span>
							</a>
							<meta itemprop="position" content="2" />
						</li>
					</ol>
					<div class="pfs-content-wrapper">
						<div class="section-content tpg">
							<h1>Award-Winning Patented Content Disarm and Reconstruction Technology</h1>
							<br>
							<p>You’re probably well protected against identifiable threats. But what about undisclosed and zero-day exploits?</p>
							<a href="#" class="btn">Get a free trial</a>
						</div>
						<div class="section-image">
							<img src="img/pages-images/technology.png" alt="">
						</div>
					</div>
				</div>
			</section>
			<section class="tech-section-1">
				<div class="section-inner">
					<div class="section-caption no-uppercase small-padding">
						<h3 class="sc-title">Votiro’s Content Disarm and Reconstruction Technology Takes Cybersecurity to the Next-Generation</h3>
					</div>
					<div class="section-columns">
						<div class="column">
							<ul class="solutions-list">
								<li>Zero day file protection</li>
							</ul>
							<p>Votiro’s patented CDR technology is a proactive, signature-less technology that targets the most commonly exploited file formats and protects against the most advanced, persistent cyber-attacks.</p>
						</div>
						<div class="column">
							<ul class="solutions-list">
								<li>Original content and functionality guaranteed</li>
							</ul>
							<p>The Votiro Disarmer neutralizes exploit attempts before they’re disclosed, and before any other security system can provide protection against them.</p>
						</div>
					</div>
				</div>
			</section>
			<section class="tech-stages-section">
				<div class="section-inner">
					<div class="column">
						<div class="section-caption small small-padding">
							<h3 class="sc-title text-uppercase">3 stages to neutralization</h3>
						</div>
						<div class="steps-list with-arrows">
							<div class="item">
								<div class="item-number">01</div>
								<div class="item-text">
									<p><strong>Recive file</strong></p>
									<p>The recived file is scanned for know threats</p>
								</div>
								<div class="item-icon">
									<img src="img/pages-images/neutralization-1.png" alt="">
								</div>
							</div>
							<div class="item">
								<div class="item-number">02</div>
								<div class="item-text">
									<p><strong>Disarm</strong></p>
									<p>The file is being broken down into its basic objects and analyzes each individual section and metadata while neutralizing any threat.</p>
								</div>
								<div class="item-icon">
									<img src="img/pages-images/neutralization-2.png" alt="">
								</div>
							</div>
							<div class="item">
								<div class="item-number">03</div>
								<div class="item-text">
									<p><strong>Reconstruct</strong></p>
									<p>The cleansed file is reconstructes while preserving the integrity and functionality of the original file. now safe to save and edit.</p>
								</div>
								<div class="item-icon">
									<img src="img/pages-images/neutralization-3.png" alt="">
								</div>
							</div>
						</div>
					</div>
					<div class="column">
						<div class="section-caption small small-padding">
							<h3 class="sc-title text-uppercase">File journey</h3>
						</div>
						<div class="steps-list-wrapper">
							<div class="steps-list">
								<div class="item">
									<div class="item-number">01</div>
									<div class="item-text">
										<p><strong>Anti-spam</strong></p>
									</div>
									<div class="item-icon">
										<img src="img/pages-images/anti-spam.png" alt="">
									</div>
								</div>
								<div class="item">
									<div class="item-number">02</div>
									<div class="item-text">
										<p><strong>True file type</strong></p>
									</div>
									<div class="item-icon">
										<img src="img/pages-images/file-type.png" alt="">
									</div>
								</div>
								<div class="item">
									<div class="item-number">03</div>
									<div class="item-text">
										<p><strong>Anti-virus</strong></p>
									</div>
									<div class="item-icon">
										<img src="img/pages-images/anti-virus.png" alt="">
									</div>
								</div>
								<div class="item">
									<div class="item-number">04</div>
									<div class="item-text">
										<p><strong>Sandbox</strong></p>
									</div>
									<div class="item-icon">
										<img src="img/pages-images/sandbox.png" alt="">
									</div>
								</div>
								<div class="item">
									<div class="item-number">05</div>
									<div class="item-text">
										<p><strong>Votiro’s CDR</strong></p>
									</div>
									<div class="item-icon">
										<img src="img/pages-images/cdr.png" alt="">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="patents-section">
				<div class="section-inner">
					<div class="section-caption small small-padding">
						<h3 class="sc-title">Patents</h3>
					</div>
					<p>Votiro products listed below are protected by patents in the Unites States. This web page is provided to satisfy the virtual patent marking provisions of various jurisdictions including the virtual patent marking provisions of the America Invents Act.</p>
					<div class="patents-list-wrapper">
						<ul class="patents-list">
							<li><strong>9,047,293</strong><br>granted on December 2015</li>
							<li><strong>9,858,424</strong><br>granted on January 2018</li>
							<li><strong>9,922,191</strong><br>granted on March 2018</li>
							<li><strong>9,923,921</strong><br>granted on March 2018</li>
						</ul>
					</div>
				</div>
			</section>
			<?php include('footer.php'); ?>
			<?php // include('notifications.php'); ?>
			<?php include('page-parts/fullpage-tabs.inc.php'); ?>
		</div>
	</div>
<?php include('footer-scripts.php'); ?>