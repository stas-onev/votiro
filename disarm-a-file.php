<?php $page_title = 'Disarm a File'; ?>
<?php include('header.php'); ?>
	<div class="page">
		<?php include('sidebar.php'); ?>
		<div class="page-content">
			<section class="page-first-screen sm-no-corner">
				<div class="page-first-screen-inner">
					<ol class="breadcrumbs" itemscope itemtype="http://schema.org/BreadcrumbList">
						<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
							<a itemprop="item" href="index.php">
								<span itemprop="name">Home</span>
							</a>
							<meta itemprop="position" content="1" />
						</li>
						<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
							<a itemprop="item" href="disarm-a-file.php">
								<span itemprop="name"><?= $page_title ?></span>
							</a>
							<meta itemprop="position" content="2" />
						</li>
					</ol>
					<div class="pfs-content-wrapper">
						<div class="section-content tpg">
							<h1>Disarm a File</h1>
							<h4 class="text-uppercase">Secure Your Files</h4>
							<p>We Disarm Malicious Files and Turn Them into Healthy Files in Less than a Second With Our Advanced Patented CDR Technology</p>
						</div>
					</div>
				</div>
			</section>
			<section class="disarm-section">
				<div class="section-inner">
					<div class="column">
						<div class="section-caption no-uppercase">
							<h3 class="sc-title">Don't Want to Test The Votiro Engine On Your File?</h3>
							<p class="sc-subtitle">Test it On One of These Malicious Demo Files:</p>
						</div>
						<!-- <div class="disarm-files-list">
							<div class="item">
								<div class="file-sample-block">
									<div class="block-image">
										<img src="img/big-icons/avi.png" alt="">
									</div>
									<div class="block-caption">PowerPoint sample.pptx</div>
								</div>
							</div>
							<div class="item">
								<div class="file-sample-block">
									<div class="block-image">
										<img src="img/big-icons/acrobat.png" alt="">
									</div>
									<div class="block-caption">PDF sample.pdf</div>
								</div>
							</div>
							<div class="item">
								<div class="file-sample-block">
									<div class="block-image">
										<img src="img/big-icons/docx.png" alt="">
									</div>
									<div class="block-caption">Word sample.docx</div>
								</div>
							</div>
							<div class="item">
								<div class="file-sample-block">
									<div class="block-image">
										<img src="img/big-icons/excel.png" alt="">
									</div>
									<div class="block-caption">Excel sample.xlsx</div>
								</div>
							</div>
						</div> -->
					</div>
					<div class="column">
						<div class="tpg">
							<p><strong>Supported file types:</strong>
								<br>pdf, jpg/jpeg, png, bmp, tif/tiff, gif, wmf/emf, doc/docx/docm/dotx, xls/xlsx, ppt/pptx, vsdx
							</p>
							<p><strong>Maximum file size:</strong>
								<br>16MB
							</p>
						</div>
						<!-- <div class="upload-area">
							<div class="area-inner">
								<p><span>Drag File Here <br>OR <br></span>Upload File</p>
								<button class="btn">Try me!</button>
							</div>
						</div> -->
					</div>
				</div>
			</section>
			<section class="sanitize-demo-section">
				<div class="section-inner">
					<iframe class="saf" style="border: 0;" src="https://filescan.votiro.com/iframe" width="100%" height="800"></iframe>
				</div>
			</section>
			<?php include('footer.php'); ?>
			<?php // include('notifications.php'); ?>
			<?php include('page-parts/fullpage-tabs.inc.php'); ?>
		</div>
	</div>
<?php include('footer-scripts.php'); ?>