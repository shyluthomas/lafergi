<?php
$asset_path = base_url().'assets/frontend/';
$asset_path_backend = base_url().'assets/backend/';

$image_path = base_url().'images/';
//var_dump($package);exit();
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">

	<!-- START head -->
	
<!-- Mirrored from extracoding.com/html/travelhub/tour-plan.html by HTTrack Website Copier/3.x [XR&CO'2013], Thu, 12 Jun 2014 06:03:52 GMT -->
<head>
		<!-- Site meta charset -->
		<meta charset="UTF-8">
		
		<!-- title -->
		<title>Vacanza Mondiale</title>
		
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
		<link rel="stylesheet" type="text/css" href="<?php echo $asset_path;?>bs3/css/bootstrap.css" media="all" />
		<!-- template stylesheet -->
		<link rel="stylesheet" type="text/css" href="<?php echo $asset_path;?>css/styles.css" media="all" />
		<!-- responsive stylesheet -->
		<link rel="stylesheet" type="text/css" href="<?php echo $asset_path;?>css/responsive.css" media="all" />
		<!-- Load Fonts via Google Fonts API -->
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Karla:400,700,400italic,700italic" />
		<!-- color scheme -->
		<link rel="stylesheet" type="text/css" href="<?php echo $asset_path;?>css/colors/color1.css" title="color1" />
		<link rel="alternate stylesheet" type="text/css" href="<?php echo $asset_path;?>css/colors/color2.css" title="color2" />
		<link rel="alternate stylesheet" type="text/css" href="<?php echo $asset_path;?>css/colors/color3.css" title="color3" />
		<link rel="alternate stylesheet" type="text/css" href="<?php echo $asset_path;?>css/colors/color4.css" title="color4" />
	</head>
	<!-- END head -->

	<!-- START body -->
	<body>
		<!-- START #wrapper -->
		<div id="wrapper">
			<!-- START header -->
				<?php $this->load->view('include/header');?>
			<!-- END header -->
			
			<!-- START #page-header -->
			<div id="header-banner">
				<div class="banner-overlay">
					<div class="container">
						<div class="row">
							<section class="col-sm-6">
								<h1 class="text-upper">About us</h1>
							</section>
							
							<!-- breadcrumbs -->
							<section class="col-sm-6">
								<ol class="breadcrumb">
									<li class="home"><a href="<?php echo site_url();?>">Home</a></li>
								
									<li class="active">About us</li>
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
					<div class="row">
						<!-- START #page -->
						<div id="page" class="col-md-8">
							<!-- START .tour-plans -->
							<div class="tour-plans">
						
								
								<h2 class="text-upper"><?php echo $aboutData[0]['title'];?></h2>
								<p>
                                <?php echo $aboutData[0]['content'];?>
                                </p>
							</div>
							<!-- END .tour-plans -->
							
							<!-- START TABS -->
							
							<!-- END TABS -->
							
							<!-- START TAB CONTENT -->
							<?php //echo var_dump($twitterFeed);exit();?>
							<!-- END TAB CONTENT -->
						</div>
						<!-- END #page -->
						
						<!-- START #sidebar -->
						<aside id="sidebar" class="col-md-4">
							<div class="sidebar-widget">
								<!-- Sidebar Twitter -->
								<div class="styled-box gray">
									<h3 class="text-upper">Latest Tweets</h3>
									<ul class="tweets-list list-unstyled">
                                   <?php 
									if(count(@$tweetsData) == 0)
										{
											echo '<li>No tweet Fetched..</li>';
										}
										else
										{
									$i=0; foreach($tweetsData as $tweet):
									?>
										<li>
											<a class="tweet-link" href="#"><?php echo $tweet->user->name;?> (<?php echo $tweet->created_at;?>)</a>
											<p><?php echo $tweet->text;?></p>
										</li>
										<?php
										$i++;
										if($i >=3){break;}
										 endforeach;
										}
										 ?>
									</ul>
									<a class="twitter-follow" href="#">Follow us on twitter</a>
								</div>
							</div>
							
							<div class="sidebar-widget">
								<!-- Sidebar Recent Posts -->
								<div class="styled-box gray">
									<h3 class="text-upper">Destinations</h3>
									<ul class="rc-posts-list list-unstyled">
                                    
                                     <?php  foreach($destination as $destin){?>
										<li>
											<span class="rc-post-image">
	<img class="img-responsive" src="<?php echo $asset_path_backend.'images/destination/'.$destin['image'];?>" alt="" />
											</span>
											<h5><a href="#"><?php echo substr($destin['description'],0,50);?></a></h5>
											<span class="rc-post-date small"><a href="#">More</a></span>
										</li>
									<?php }?>
									</ul>
								</div>
							</div>
							
							
						</aside>
						<!-- END #sidebar -->
					</div>
					<!-- END .row -->
				</div>
			</div>
			<!-- END .main-contents -->
			
			