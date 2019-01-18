<?php
$asset_path = base_url().'assets/frontend/';
$asset_path_backend = base_url().'assets/backend/';

$image_path = base_url().'images/';
//var_dump($package);exit();
?>

<header>
				<!-- START #top-header -->
				<div id="top-header">
					<div class="container">
						<div class="row top-row">
							<div class="col-md-6">
								<div class="left-part alignleft">
									<span class="contact-email small">info@vacanzamondiale.com</span>
									<span class="contact-phone small">+393293323644 </span>
									<ul class="social-media header-social">
										<li><a class="sm-yahoo" href="https://www.youtube.com/user/VacanzaMondiale"><span>youtube</span></a></li>
										<li><a class="sm-facebook" href="https://www.facebook.com/VacanzaMondiale"><span>Twitter</span></a></li>
                                        	
                                        <li><a class="sm-flickr" href="https://twitter.com/vacanzamondiale"><span>Facebook</span></a></li>
										<!--<li><a class="sm-rss" href="#"><span>RSS</span></a></li>
										<li><a class="sm-flickr" href="#"><span>Flicker</span></a></li>
										<li><a class="sm-windows" href="#"><span>Windows</span></a></li>
										<li><a class="sm-stumble" href="#"><span>Stumbleupon</span></a></li>-->
									</ul>
								</div>
							</div>
							<div class="col-md-6">
								<!--<div class="right-part alignright">
									<form action="#" method="get">
										<fieldset class="alignright">
											<input type="text" name="s" class="search-input" value="Search..." onFocus="if (this.value == 'Search...') { this.value = ''; }" onBlur="if (this.value == '') { this.value = 'Search...'; }" />
											<input type="submit" name="submit" class="search-submit" value="" />
										</fieldset>
									</form>
									<span class="top-link small">Tell a Friend</span>
									<span class="top-link small">Bookmark</span>
								</div>-->
							</div>
						</div>
					</div>
				</div>
				<!-- END #top-header -->
				
				<!-- START #main-header -->
				<div id="main-header">
					<div class="container">
						<div class="row">
							<div class="col-md-3">
								<a id="site-logo" href="<?php echo base_url();?>">
									<img src="<?php echo $asset_path;?>img/logo.png" alt="Travel Hub" />
								</a>
							</div>
							<div class="col-md-9">
								<nav class="main-nav">
									<span>MENU</span>
									<ul id="main-menu">
										<li><a href="<?php echo site_url();?>" title="">HOME</a></li>
											
										
										<li><a href="<?php echo site_url();?>/about">ABOUT US</a>
											<!--<ul>
												<li><a href="blog.html" title="">DESTINATION</a></li>
												<li><a href="blog-sidebar.html" title="">BLOG PAGE WITH SIDEBAR</a></li>
												<li><a href="blog-detail.html" title="">BLOG DETAIL</a></li>
												<li><a href="blog-detail-sidebar.html" title="">BLOG DETAIL SIDEBAR</a></li>
												<li><a href="blog-listview.html" title="">LIST VIEW</a></li>
												<li><a href="blog-listview-sidebar.html" title="">LIST VIEW SIDEBAR</a></li>
												<li><a href="single.html" title="">SINGLE POST</a></li>
											</ul>-->
										</li>
										<li><a href="<?php echo site_url();?>/destination/">DESTINATION</a>
											<!--<ul>
												<li><a href="contact.html" title="">CONTACT PAGE 1</a></li>
												<li><a href="contact-us.html" title="">CONTACT PAGE 2</a></li>
											</ul>-->
										</li>
										<li><a href="<?php echo site_url();?>/packages">PACKAGES</a>
                                      
											<ul>
												<li><a href="<?php echo site_url();?>/packages/package_search/Minivan Packages" title="">Minivan Packages</a></li>
												<li><a href="<?php echo site_url();?>/packages/package_search/Pilgrim Packages" title="">Pilgrim with Leisure Packages</a></li>
                                                <li><a href="<?php echo site_url();?>/packages/package_search/Leisure Packages" title="">Leisure Packages</a></li>
											</ul>
										</li>
                                       
										<li><a href="http://vacanzamondiale.blogspot.in/" target="_blank">BLOG</a>
											<!--<ul>
												<li><a href="widget.html" title="">WIDGETS</a></li>
												<li><a href="shortcodes.html" title="">SHORTCODES</a></li>
												<li><a href="404page.html" title="">404 ERROR PAGE</a></li>
												<li><a href="booking-form.html" title="">BOOKING FORM</a></li>
												<li><a href="order-confirmation.html" title="">ORDER CONFIRMATION</a></li>
												<li><a href="price-table.html" title="">PRICE TABLES</a></li>
												<li><a href="sign-in.html" title="">SIGN IN</a></li>
												<li><a href="sign-up.html" title="">SIGN UP</a></li>
												<li><a href="tour-plan.html" title="">TOUR PLAN</a></li>
												<li><a href="user-profile.html" title="">USER PROFILE</a></li>
											</ul>-->
										</li>										
										<li><a href="http://vacanzamondiale.com/index.php/gallery">GALLERY</a>
											<!--<ul>
												<li><a href="deals.html" title="">DEALS PAGE</a></li>
												<li><a href="deals-sidebar.html" title="">DEALS PAGE WITH SIDEBAR</a></li>
												<li><a href="deals-detail.html" title="">DEALS DETAIL</a></li>
												<li><a href="deals-detail-sidebar.html" title="">DEALS DETAIL SIDEBAR</a></li>
												<li><a href="deals-listview.html" title="">LIST VIEW</a></li>
												<li><a href="deals-listview-sidebar.html" title="">LIST VIEW SIDEBAR</a></li>
											</ul>-->
										</li>
										<li><a href="http://vacanzamondiale.com/index.php/contact">CONTACT US</a>
											<!--<ul>
												<li><a href="top-activities.html" title="">TOP ACTIVITIES</a></li>
												<li><a href="top-activities-sidebar.html" title="">TOP ACTIVITIES WITH SIDEBAR</a></li>
												<li><a href="top-activities-listview.html" title="">LIST VIEW</a></li>
												<li><a href="top-activities-listview-sidebar.html" title="">LIST VIEW SIDEBAR</a></li>
											</ul>-->
										</li>
									</ul>
								</nav>
							</div>
						</div>
					</div>
				</div>
				<!-- END #main-header -->
			</header>