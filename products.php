<?php $page_title = 'Products'; ?>
<?php include('header.php'); ?>
	<div class="page">
		<?php include('sidebar.php'); ?>
		<div class="page-content">
			<section class="page-first-screen md-no-image no-corner" style="background-image: url(img/pages-images/locker-pattern.jpg);">
				<div class="page-first-screen-inner">
					<ol class="breadcrumbs" itemscope itemtype="http://schema.org/BreadcrumbList">
						<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
							<a itemprop="item" href="index.php">
								<span itemprop="name">Home</span>
							</a>
							<meta itemprop="position" content="1" />
						</li>
						<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
							<a itemprop="item" href="government-agencies.php">
								<span itemprop="name"><?= $page_title ?></span>
							</a>
							<meta itemprop="position" content="2" />
						</li>
					</ol>
					<div class="pfs-content-wrapper">
						<div class="section-content tpg">
							<h1>Secure all Channels of Incoming Data with Votiro’s Award-Winning Disarmer</h1>
							<br>
							<p>Disarm known and undisclosed threats before they reach your organization. Our patented CDR-based technology is easily integrated with any data workflow, proven to neutralize external malicious content threats, with full data functionality restored.</p>
						</div>
						<div class="section-image">
							<img src="img/pages-images/3d-lock.png" alt="">
						</div>
					</div>
				</div>
			</section>
			<section class="products-page-section light">
				<div class="section-inner">
					<div class="tech-cards-wrapper">
						<div class="tech-cards-list big">
							<div class="item">
								<div class="tech-card">
									<div class="card-image">
										<img src="img/big-icons/email-disarmer.png" alt="">
									</div>
									<a href="#" class="card-name">Disarmer for email</a>
									<p>The Votiro Disarmer for Email keeps your emails and attachments secure from malicious attacks such as identity theft, banking scams, spear phishing, zero-day, and ransomware – while keeping emails’ full functionality intact. Deployed anywhere within minutes, Votiro Disarmer for email is the most advanced email protection available to keep your organization protected.</p>
									<div class="learn-more">Learn More</div>
								</div>
							</div>
							<div class="item">
								<div class="tech-card">
									<div class="card-image">
										<img src="img/big-icons/web-disarmer.png" alt="">
									</div>
									<a href="#" class="card-name">Disarmer for web</a>
									<p>Secure all file downloads with Votiro Disarmer for Web. Enforcing browsing compliance with a powerful filter against web-borne malware, the Votiro Disarmer for Web is a robust solution for eliminating zero-day threats from any file, document or data downloaded from any web browser.</p>
									<div class="learn-more">Learn More</div>
								</div>
							</div>
							<div class="item">
								<div class="tech-card">
									<div class="card-image">
										<img src="img/big-icons/ccp-disarmer.png" alt="">
									</div>
									<a href="#" class="card-name">Disarmer for content collaboration platforms</a>
									<p>With Votiro Disarmer for Content Collaboration Platforms, employees can send, receive, and share clean files in the cloud, using their favorite file sharing applications like Dropbox and OneDrive. The Votiro solution provides a necessary security layer to ensure all shared files do not contain malware, preventing targeted content threats such as ransomware and phishing attacks.</p>
									<div class="learn-more">Learn More</div>
								</div>
							</div>
							<div class="item">
								<div class="tech-card">
									<div class="card-image">
										<img src="img/big-icons/file-transfer-disarmer.png" alt="">
									</div>
									<a href="#" class="card-name">Disarmer for file transfer</a>
									<p>The Votiro Disarmer for File Transfer disarms known and unknown file threats coming from the external network before they enter your internal network. Designated to work in a complete network separation environment, it automates the file sharing process and sanitizes files on local or remote servers, using Votiro’s patented CDR technology.</p>
									<div class="learn-more">Learn More</div>
								</div>
							</div>
							<div class="item">
								<div class="tech-card">
									<div class="card-image">
										<img src="img/big-icons/removable-devices-disarmer.png" alt="">
									</div>
									<a href="#" class="card-name">Disarmer for removable devices</a>
									<p>Votiro Disarmer for Removable Devices allows employees to use any USB, Hard-drive, CD or Flash Drive, protecting your organization from any device-borne malware. The imported files are not accessible until disarmed from external threats by Votiro Disarmer's CDR process, and fully restored to enable full functionality.</p>
									<div class="learn-more">Learn More</div>
								</div>
							</div>
							<div class="item">
								<div class="tech-card">
									<div class="card-image">
										<img src="img/big-icons/disarmer-api.png" alt="">
									</div>
									<a href="#" class="card-name">Disarmer API</a>
									<p>Secure your files across all of your applications with Votiro Disarmer API, providing you with advanced CDR protection against all known and unknown malicious content threats. Enjoy full functionality of safe files, without intercepting data flow or hurting work productivity. </p>
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