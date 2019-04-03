<?php $page_title = 'Government Agencies'; ?>
<?php include('header.php'); ?>
	<div class="page">
		<?php include('sidebar.php'); ?>
		<div class="page-content">
			<section class="page-first-screen" style="background-image: url(img/pages-images/solutions-pattern.png);">
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
								<span itemprop="name">Solutions by industry</span>
							</a>
							<meta itemprop="position" content="2" />
						</li>
						<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
							<a itemprop="item" href="government-agencies.php">
								<span itemprop="name"><?= $page_title ?></span>
							</a>
							<meta itemprop="position" content="3" />
						</li>
					</ol>
					<div class="pfs-content-wrapper">
						<div class="section-content tpg">
							<h1>Government agencies</h1>
							<br>
							<p>Digitalizing bureaucracy comes with a great risk of malware penetration and spread within government agencies</p>
						</div>
						<div class="section-image">
							<img src="img/pages-images/solutions-by-industry.png" alt="">
						</div>
					</div>
				</div>
			</section>
			<section class="tech-section light">
				<div class="section-inner">
					<div class="section-text tpg">
						<div class="section-text-inner">
							<h3 class="text-uppercase">Next generation CDR technology</h3>
							<p>From tax authorities to transport agencies, through local municipalities to immigration offices – government agencies provide the most basic and vital services to citizens around the world. And, although not yet at the forefront of digital transformation, more and more government services and processes are being done online, relieving the citizens of long queues, traffic jams and lost working hours. Processes such as fine payments, driving license renewal, passport issuing, taxes payments, certificates of approval from other agencies, and so many more, are mostly done online through the upload and download, sharing and sending of ID copies, picture scans, e-forms, et cetera.</p>
							<p>However, along with growing efficiency and improvement in services, digitalizing standard bureaucratic processes comes with a price – the more digital access external users get, the more breach points into the organization, and government agencies in the age of digital services find themselves exposed to the most sophisticated types of document-borne attacks penetrating every standard security scan.</p>
							<p>Enabling government agencies to provide efficient digital services with no risk of malware penetration</p>
							<p>Neutralizing incoming documentation across all channels of communication with the outside world is the only viable solution to stop file-borne exploits from penetrating government agencies. By automatically disarming every incoming document, no matter the source or type, Votiro File Disarmer ensures all data flow within the government agency is completely safe to open and use. Whether incoming scanned documents, copies of personal papers, PDF or image files, whether by email, file transfers, KYC transactions or any other channel of incoming data – any single document received at the agency is automatically directed to Votiro’s File Disarmer, where it is cleansed from threats and reconstructed for full functionality and safe use. Securing the overwhelming amount of incoming data enables government agencies to continue their journey of improving everyday services for citizens around the world.  </p>
						</div>
					</div>
					<div class="section-cards-wrapper">
						<div class="tech-cards-list">
							<div class="item">
								<div class="tech-card">
									<div class="card-image">
										<img src="img/big-icons/email-disarmer.png" alt="">
									</div>
									<a href="#" class="card-name">Disarmer for email</a>
									<div class="learn-more">Learn More</div>
								</div>
							</div>
							<div class="item">
								<div class="tech-card">
									<div class="card-image">
										<img src="img/big-icons/web-disarmer.png" alt="">
									</div>
									<a href="#" class="card-name">Disarmer for web</a>
									<div class="learn-more">Learn More</div>
								</div>
							</div>
							<div class="item">
								<div class="tech-card">
									<div class="card-image">
										<img src="img/big-icons/ccp-disarmer.png" alt="">
									</div>
									<a href="#" class="card-name">Disarmer for content collaboration platforms</a>
									<div class="learn-more">Learn More</div>
								</div>
							</div>
							<div class="item">
								<div class="tech-card">
									<div class="card-image">
										<img src="img/big-icons/file-transfer-disarmer.png" alt="">
									</div>
									<a href="#" class="card-name">Disarmer for file transfer</a>
									<div class="learn-more">Learn More</div>
								</div>
							</div>
							<div class="item">
								<div class="tech-card">
									<div class="card-image">
										<img src="img/big-icons/removable-devices-disarmer.png" alt="">
									</div>
									<a href="#" class="card-name">Disarmer for removable devices</a>
									<div class="learn-more">Learn More</div>
								</div>
							</div>
							<div class="item">
								<div class="tech-card">
									<div class="card-image">
										<img src="img/big-icons/disarmer-api.png" alt="">
									</div>
									<a href="#" class="card-name">Disarmer API</a>
									<div class="learn-more">Learn More</div>
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