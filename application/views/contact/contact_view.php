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
		<title>Gallery | Travel Hub HTML5 Template</title>
		
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
        
        <script>
		function validatemail(){
			
		if(document.getElementById('name').value == ''){
			//$('$validat').html('Please fill the Name');
			alert('Please fill the Name');
			return false;
		}
		}
		
		</script>
		
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
									
									<li class="active">Contact</li>
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
							<!-- GOOGLE MAP -->
							<section id="contactMap">
								<iframe src="https://www.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=uk&amp;aq=&amp;sll=18.312811,-4.306641&amp;sspn=46.292419,86.572266&amp;ie=UTF8&amp;hq=&amp;hnear=United+Kingdom&amp;ll=52.352119,-2.647705&amp;spn=0.685471,1.352692&amp;t=p&amp;z=10&amp;output=embed"></iframe>							
							</section>
							
							<!-- START #contactForm -->
							<section id="contactForm">
								<h2 class="ft-heading text-upper">If You need further details - Please write us</h2>
                                <h3 style="color:#093;" id="validat"><?php if(@$sent){echo 'Mail has been Sent..';}?></h3>
								<form action="" method="post" name="contact" onSubmit="return validatemail();">
									<fieldset>
										<ul class="formFields list-unstyled">
											<li class="row">
												<div class="col-md-6">
													<label>Name <span class="required small">(Required)</span></label>
													<input type="text" class="form-control" name="name" value="" id="name" />
												</div>
												<div class="col-md-6">
													<label>Email <span class="required small">(Required)</span></label>
													<input type="text" class="form-control" name="email" value="" id="email"/>
												</div>
											</li>
											<li class="row">
												<div class="col-md-12">
													<label>Subject <span class="required small">(Required)</span></label>
													<input type="text" class="form-control" name="subject" value="" />
												</div>
											</li>
											<li class="row">
												<div class="col-md-12">
													<label>Message <span class="required small">(Required)</span></label>
													<textarea class="form-control" name="message"></textarea>
												</div>
											</li>
											<li class="row">
												<div class="col-md-12">
													<input type="submit" class="btn btn-primary btn-lg text-upper" name="submit" value="Submit" />
													<span class="required small">*Your email will never published.</span>
												</div>
											</li>
										</ul>
									</fieldset>
								</form>
							</section>
							<!-- END #contactForm -->
						</div>
						<!-- END #page -->
						
						<!-- START #sidebar -->
						<aside id="sidebar" class="col-md-4">
							<div class="sidebar-widget">
								<!-- Sidebar Social Icons -->
								<ul class="sidebar-social list-unstyled">
									<li class="facebook">
										<a href="https://www.facebook.com/VacanzaMondiale">
											<span class="sc-count text-center">28,096</span>
											<span class="sc-text text-center">fans &amp; likes</span>
										</a>
									</li>
									<li class="twitter">
										<a href="https://twitter.com/vacanzamondiale">
											<span class="sc-count text-center">8,096</span>
											<span class="sc-text text-center">Followers</span>
										</a>
									</li>
									<li class="rss">
										<a href="https://www.youtube.com/user/VacanzaMondiale">
											<span class="sc-count text-center">12,096</span>
											<span class="sc-text text-center">Viewers</span>
										</a>
									</li>
								</ul>
							</div>
							
							<div class="sidebar-widget">
								<!-- Sidebar Contact info -->
								<div class="styled-box gray">
									<h3 class="text-upper">Contact Us</h3>
									<p>We're very approachable and would love to speak to you. Feel free to call, send us an email, Tweet us or simply complete the enquiry form.</p>
									<ul class="contact-info list-unstyled">
										<li class="ct-phone">+44 - 123 - 4567890</li>
										<li class="ct-email">info@vacanzamondiale.com</li>
										<li class="ct-facebook">www.facebook.com/vacanzamondiale</li>
										<li class="ct-twitter">#vacanzamondiale</li>
									</ul>
								</div>
							</div>
							
							<?php /*?><div class="sidebar-widget">
								<!-- Sidebar Search -->
								<div class="styled-box gray">
									<h3 class="text-upper">Search</h3>
									<form action="#" method="get">
										<input type="text" name="s" class="form-control input-style1 marb20" value="Enter keyword for search" onFocus="if (this.value == 'Enter keyword for search') { this.value = ''; }" onBlur="if (this.value == '') { this.value = 'Enter keyword for search'; }" />
										<input type="submit" name="submit" class="btn btn-primary text-upper marb20" value="Search" />
									</form>
								</div>
							</div><?php */?>
						</aside>
						<!-- END #sidebar -->
					</div>
					<!-- END .row -->
				</div>
			</div>
		
		
		
		<!-- Analytics -->