<?php $page_title = 'Financial Services'; ?>
<?php include('header.php'); ?>
	<div class="page">
		<?php include('sidebar.php'); ?>
		<div class="page-content">
			<section class="page-first-screen financial-services-page" style="background-image: url(img/pages-images/solutions-pattern.png);">
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
							<a itemprop="item" href="financial-services.php">
								<span itemprop="name"><?= $page_title ?></span>
							</a>
							<meta itemprop="position" content="3" />
						</li>
					</ol>
					<div class="pfs-content-wrapper">
						<div class="section-content tpg">
							<h1>Financial services</h1>
							<br>
							<p>Hundreds of ransomware attacks and a 130% increase in fraud incidents in 2017 alone! [pwc]</p>
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
							<p>A prime prey for cybercriminals, the financial institutes’ transition to digital services is paved with ransomware attacks and fraud incidents. From KYC (Know Your Customer) processes, through check clearings, to downloaded documents – banks and financial services depend on online transactions and constant online communication with their customers on a daily basis. This handling of immense amounts of incoming documents (such as check scans, ID copies, or image files) constantly exposes financial institutes to malicious file-borne attacks, most of them easily bypassing standard security systems, such as sandbox.</p>
							<p>Ending Ransomware by Securing Digital Transactions</p>
							<p>Whether a scanned PDF or an uploaded document sent from the customer’s personal mobile, once Votiro Disarmer is deployed, every single file coming in via any digital transaction is automatically routed to Votiro’s File Disarmer There, every document is dissected and recursively cleaned from any known or unknown potential exploit, and then sent back to the local server, completely reconstructed, now safe to open, save, and edit. With every file entering the organization neutralized from potential exploits, banks and other financial services can put file-borne ransomware behind them.</p>
							<img src="img/pages-images/video.png" alt="" class="img-responsive">
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