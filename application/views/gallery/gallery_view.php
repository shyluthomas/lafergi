<?php
$asset_path = base_url().'assets/frontend/';
$asset_path_backend = base_url().'assets/backend/';

$image_path = base_url().'images/';
//var_dump($package);exit();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

	<!-- START head -->
	
<!-- Mirrored from extracoding.com/html/travelhub/gallery.html by HTTrack Website Copier/3.x [XR&CO'2013], Thu, 12 Jun 2014 06:01:32 GMT -->
<head>
		<!-- Site meta charset -->
		<meta charset="UTF-8">
		
		<!-- title -->
		<title>Gallery</title>
		
		<!-- meta description -->
		<meta name="description" content="YOUR META DESCRIPTION GOES HERE" />
		
		<!-- meta keywords -->
		<meta name="keywords" content="YOUR META KEYWORDS GOES HERE" />
		
		<!-- meta viewport -->
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
		
		<!-- favicon -->
		<link rel="icon" href="favicon.html" type="image/x-icon" />
		<link rel="shortcut icon" href="favicon.html" type="image/x-icon" />
		
		<!-- bootstrap 3 stylesheets -->
		<link rel="stylesheet" type="text/css" href="<?php echo $asset_path; ?>bs3/css/bootstrap.css" media="all" />
		<!-- template stylesheet -->
		<link rel="stylesheet" type="text/css" href="<?php echo $asset_path; ?>css/styles.css" media="all" />
		<!-- fancybox stylesheet -->
		<link rel="stylesheet" type="text/css" href="<?php echo $asset_path; ?>css/fancybox/jquery.fancybox.css" media="all" />
		<!-- responsive stylesheet -->
		<link rel="stylesheet" type="text/css" href="<?php echo $asset_path; ?>css/responsive.css" media="all" />
		<!-- Load Fonts via Google Fonts API -->
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Karla:400,700,400italic,700italic" />
		<!-- color scheme -->
		<link rel="stylesheet" type="text/css" href="<?php echo $asset_path; ?>css/colors/color1.css" title="color1" />
		<link rel="alternate stylesheet" type="text/css" href="<?php echo $asset_path; ?>css/colors/color2.css" title="color2" />
		<link rel="alternate stylesheet" type="text/css" href="<?php echo $asset_path; ?>css/colors/color3.css" title="color3" />
		<link rel="alternate stylesheet" type="text/css" href="<?php echo $asset_path; ?>css/colors/color4.css" title="color4" />
		
	</head>
	<!-- END head -->

	<!-- START body -->
	<body>
		<!-- START #wrapper -->
		<div id="wrapper">
			<!-- START header -->
			
				
				<!-- START #main-header -->
				<?php $this->load->view('include/header');?>
				<!-- END #main-header -->
			
			<!-- END header -->
			
			<!-- START #page-header -->
			<div id="header-banner">
				<div class="banner-overlay">
					<div class="container">
						<div class="row">
							<section class="col-sm-6">
								<h1 class="text-upper">Gallery</h1>
							</section>
							
							<!-- breadcrumbs -->
							<section class="col-sm-6">
								<ol class="breadcrumb">
									<li class="home"><a href="<?php echo site_url();?>">Home</a></li>
									
									<li class="active">Gallery</li>
								</ol>
							</section>
						</div>
					</div>
				</div>
			</div>
			<!-- END #page-header -->
			
			<!-- START .main-contents -->
			<div class="main-contents">
				<div class="container">
					
					<!-- END .row -->
					
					
					<!-- END .row -->
					
					<div class="row">
						<!-- START 4 columns gallery -->
						<ul class="gallery-list list-unstyled">
                        
                         <?php foreach ($gallery as $galle): ?>
							<li class="col-md-3">
								<div class="gal-item">
									<img class="img-responsive" src="<?php echo $asset_path_backend.'images/gallery/thump/'.$galle['image'];?>" alt="Gallery Image" />
									<a class="item-overlay" href="<?php echo $asset_path_backend.'images/gallery/'.$galle['image'];?>">
										<img src="<?php echo $asset_path;?>img/icons/gal-zoom-icon.png" alt="" />
										<span class="item-text text-center"><?php echo $galle['title'];?></span>
									</a>
								</div>
							</li>
							
                            <?php endforeach;?>
							
							
						
							
						</ul>
						<!-- END 4 columns gallery -->
					</div>
					<!-- END .row -->
					
					<!-- START .pagination -->
					<?php /*?><ul class="pagination">
						<li><a href="#">&lsaquo;</a></li>
						<li class="active"><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#">5</a></li>
						<li><a href="#">6</a></li>
						<li><a href="#">7</a></li>
						<li><a href="#">&rsaquo;</a></li>
					</ul><?php */?>
					<!-- END .pagination -->
				</div>
			</div>
			<!-- END .main-contents -->
			
				<!-- javascripts -->
		

		
		
		
		
		<!-- Analytics -->