<?php
$asset_path = base_url().'assets/frontend/';
$asset_path_backend = base_url().'assets/backend/';

$image_path = base_url().'images/';
//var_dump($packages);exit();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

	<!-- START head -->
	
<!-- Mirrored from extracoding.com/html/travelhub/top-activities-sidebar.html by HTTrack Website Copier/3.x [XR&CO'2013], Thu, 12 Jun 2014 06:04:13 GMT -->
<head>
		<!-- Site meta charset -->
		<meta charset="UTF-8">
		
		<!-- title -->
		<title>Vancouver, BC | Travel Hub HTML5 Template</title>
		
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
								<h1 class="text-upper">Packages : <?php echo $keyword;?></h1>
							</section>
							
							<!-- breadcrumbs -->
							<section class="col-sm-6">
								<ol class="breadcrumb">
									<li class="home"><a href="#">Home</a></li>
									
									<li class="active">Destinations</li>
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
						<div class="col-md-8">
							<div class="row">
                            
                            <?php foreach ($packages as $pack): ?>
								<div class="col-md-6">
									<div class="ft-item">
										<span class="ft-image">
								<a href="<?php echo site_url().'/packages/packagesMore/'.$pack['id']?>">
                                <img alt="featured Scroller" style="height: 200px;" src="<?php echo $asset_path_backend.'images/packages/'.$pack['image'];?>" draggable="false"></a>
										</span>
										<div class="ft-data">
											
						<?php if(@$pack['hotel']){?><a href="#" class="ft-hotel text-upper">Hotel</a><?php }?>
						<?php if(@$pack['airticket']){?>	<a href="#" class="ft-plane text-upper">Air Ticket</a> <?php }?>
						<?php if(@$pack['breakfast']){?>	<a href="#" class="ft-tea text-upper">Break Fast</a><?php }?>
										
										</div>
										<div class="ft-foot">
											<h4 class="ft-title text-upper"><a href="<?php echo site_url().'/packages/packagesMore/'.$pack['id']?>"><?php echo $pack['title'];?></a></h4>
											<span class="ft-offer text-upper">Starting From <?php echo $pack['prize'];?> $</span>
										</div>
										<div class="ft-foot-ex">
											<span class="ft-date text-upper alignleft"><?php echo $pack['createtime'];?></span>
											
										</div>
									</div>
								</div>
								<?php  endforeach;?>
								
								<div class="clearfix"></div>
							</div>
						</div>
						<!-- START #sidebar -->
						<aside id="sidebar" class="col-md-4">
							<div class="sidebar-widget">
								<!-- Sidebar recent popular posts -->
								<!-- START TABS -->
								<ul class="nav nav-tabs text-upper">
									<li class="active"><a href="#popular-posts" data-toggle="tab">Destinations</a></li>
									<li><a href="#recent-posts" data-toggle="tab">Hotels</a></li>
									
								</ul>
								<!-- END TABS -->
								
								<!-- START TAB CONTENT -->
								<div class="tab-content gray box-shadow1 clearfix marb30">
									<!-- START TAB 1 -->
									<div class="tab-pane active" id="popular-posts">
										<ul class="rc-posts-list list-unstyled">
                                        
                                        <?php foreach($destination as $dest):?>
											<li>
												<span class="rc-post-image">
								<img class="img-responsive" src="<?php echo $asset_path_backend.'images/destination/'.$dest['image'];?>" alt="Recent Post 2" />
												</span>
												<h5><a href="<?php echo site_url().'/destination/destinationMore/'.$dest['id']?>"><?php echo substr($dest['title'],0,50);?>.</a></h5>
												<span class="rc-post-date small"><?php echo $dest['createtime'];?></span>
											</li>
											
											<?php endforeach;?>
											
										</ul>
									</div>
									<!-- END TAB 1 -->
									
									<!-- START TAB 2 -->
									<div class="tab-pane" id="recent-posts">
										<ul class="rc-posts-list list-unstyled">
                                        
                                          <?php foreach($hotels as $hot):?>
											<li>
												<span class="rc-post-image">
													<img class="img-responsive" src="<?php echo $asset_path_backend.'images/hoteldirectory/'.$hot['image'];?>" alt="Recent Post 1" />
												</span>
												<h5><a href="#"><?php echo substr($hot['title'],0,50);?></a></h5>
												<span class="rc-post-date small"><?php echo $hot['createtime'];?></span>
											</li>
											<?php endforeach;?>
											
											
										</ul>
									</div>
									<!-- END TAB 2 -->
									
									<!-- START TAB 3 -->
									<div class="tab-pane" id="recent-comments">
										<div class="inside-pane">
											<p>Amet turpis tristique, nec in aliquet dis amet, proin egestas in tempor, cras et dapibus, lectus pellentesque enim odio elementum eu tincidunt diam a et. Dapibus sed cum, aliquam cras egestas enim elit in mattis? Scelerisque, ultrices mid! Lorem. Scelerisque? Pid cras, mattis vel, porta, quis! Porttitor turpis cras, odio ultricies parturient pulvinar tempor.</p>
											<p>eu turpis enim dapibus diam tristique cursus egestas quis phasellus montes! Parturient porta purus quis scelerisque? Vel proin, ac odio cras penatibus magnis non? Aliquam elementum, dis? Elementum ac.</p>
										</div>
									</div>
									<!-- END TAB 3 -->
								</div>
								<!-- END TAB CONTENT -->
							</div>
							
							<?php /*?><div class="sidebar-widget">
								<!-- Sidebar facebook widget -->
								<!-- START TABS -->
								<ul class="nav nav-tabs social-tabs text-upper">
									<li class="active"><a class="facebook-tab" href="#facebook-tab" data-toggle="tab">Facebook</a></li>
									<li><a class="twitter-tab" href="#twitter-tab" data-toggle="tab">Twitter</a></li>
									<li><a class="share-tab" href="#share-tab" data-toggle="tab">Follow Us</a></li>
								</ul>
								<!-- END TABS -->
								
								<!-- START TAB CONTENT -->
								<div class="tab-content clearfix marb30">
									<!-- START TAB 1 -->
									<div class="tab-pane active" id="facebook-tab">
										<div id="fb-widget">
											<iframe src="http://www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2FFacebookDevelopers&amp;width&amp;height=290&amp;colorscheme=light&amp;show_faces=true&amp;header=true&amp;stream=false&amp;show_border=true" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:290px;" allowTransparency="true"></iframe>
										</div>
									</div>
									<!-- END TAB 1 -->
									
									<!-- START TAB 2 -->
									<div class="tab-pane" id="twitter-tab">
										
									</div>
									<!-- END TAB 2 -->
									
									<!-- START TAB 3 -->
									<div class="tab-pane" id="share-tab">
										
									</div>
									<!-- END TAB 3 -->
								</div>
								<!-- END TAB CONTENT -->
							</div><?php */?>
							
							<?php /*?><div class="sidebar-widget">
								<!-- Post Tags -->
								<div class="styled-box gray">
									<h3 class="text-upper">Tags</h3>
									<ul class="post-tags list-unstyled">
										<li><a class="btn btn-primary btn-sm" href="#">aliquet</a></li>
										<li><a class="btn btn-primary btn-sm" href="#">tristique</a></li>
										<li><a class="btn btn-primary btn-sm" href="#">diam</a></li>
										<li><a class="btn btn-primary btn-sm" href="#">egestas</a></li>
										<li><a class="btn btn-primary btn-sm" href="#">montes</a></li>
										<li><a class="btn btn-primary btn-sm" href="#">dapibus</a></li>
										<li><a class="btn btn-primary btn-sm" href="#">turpis</a></li>
										<li><a class="btn btn-primary btn-sm" href="#">tempor</a></li>
										<li><a class="btn btn-primary btn-sm" href="#">cursus</a></li>
										<li><a class="btn btn-primary btn-sm" href="#">enim</a></li>
										<li><a class="btn btn-primary btn-sm" href="#">lectus</a></li>
										<li><a class="btn btn-primary btn-sm" href="#">elementum</a></li>
									</ul>
								</div>
							</div><?php */?>
							
							
							
							
							
							<div class="sidebar-widget">
								<!-- Sidebar Newsletter -->
								<div class="styled-box gray">
									<h3 class="text-upper">Subscribe Newsletter</h3>
									<form action="#" method="post">
										<label>Email Address</label>
										<input type="text" name="email" class="form-control input-style1 marb20" value="Enter Email Address" onFocus="if (this.value == 'Enter Email Address') { this.value = ''; }" onBlur="if (this.value == '') { this.value = 'Enter Email Address'; }" />
										<input type="submit" name="submit" class="btn btn-primary text-upper marb20" value="Subscribe" />
									</form>
								</div>
							</div>
							
							<?php /*?><div class="sidebar-widget">
								<!-- Sidebar Flickr Gallery -->
								<h3 class="text-upper">Gallery</h3>
								<ul class="flickr-gal list-unstyled">
									<li><img class="img-responsive" src="<?php echo $asset_path;?>img/flickr/img1.jpg" alt="Flickr Photo" /></li>
									<li><img class="img-responsive" src="<?php echo $asset_path;?>img/flickr/img2.jpg" alt="Flickr Photo" /></li>
									<li><img class="img-responsive" src="<?php echo $asset_path;?>img/flickr/img3.jpg" alt="Flickr Photo" /></li>
									<li><img class="img-responsive" src="<?php echo $asset_path;?>img/flickr/img4.jpg" alt="Flickr Photo" /></li>
									<li><img class="img-responsive" src="<?php echo $asset_path;?>img/flickr/img5.jpg" alt="Flickr Photo" /></li>
									<li><img class="img-responsive" src="<?php echo $asset_path;?>img/flickr/img6.jpg" alt="Flickr Photo" /></li>
									<li><img class="img-responsive" src="<?php echo $asset_path;?>img/flickr/img7.jpg" alt="Flickr Photo" /></li>
									<li><img class="img-responsive" src="<?php echo $asset_path;?>img/flickr/img8.jpg" alt="Flickr Photo" /></li>
									<li><img class="img-responsive" src="<?php echo $asset_path;?>img/flickr/img9.jpg" alt="Flickr Photo" /></li>
									<li><img class="img-responsive" src="<?php echo $asset_path;?>img/flickr/img10.jpg" alt="Flickr Photo" /></li>
									<li><img class="img-responsive" src="<?php echo $asset_path;?>img/flickr/img11.jpg" alt="Flickr Photo" /></li>
									<li><img class="img-responsive" src="<?php echo $asset_path;?>img/flickr/img12.jpg" alt="Flickr Photo" /></li>
								</ul>
							</div><?php */?>
						</aside>
						<!-- END #sidebar -->
					</div>
					<!-- START .pagination -->
					<!--<ul class="pagination">
						<li><a href="#">&lsaquo;</a></li>
						<li class="active"><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#">5</a></li>
						<li><a href="#">6</a></li>
						<li><a href="#">7</a></li>
						<li><a href="#">&rsaquo;</a></li>
					</ul>-->
					<!-- END .pagination -->
				</div>
			</div>
			<!-- END .main-contents -->
			
			<!-- START footer -->
			