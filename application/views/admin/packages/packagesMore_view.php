<?php
$asset_path = base_url().'assets/frontend/';
$asset_path_backend = base_url().'assets/backend/';

$image_path = base_url().'images/';
//var_dump($packages);exit();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

	<!-- START head -->
	
<!-- Mirrored from extracoding.com/html/travelhub/deals-detail.html by HTTrack Website Copier/3.x [XR&CO'2013], Thu, 12 Jun 2014 06:03:59 GMT -->
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
								<h1 class="text-upper"><?php echo $packagesMore[''];?></h1>
							</section>
							
							<!-- breadcrumbs -->
							<section class="col-sm-6">
								<ol class="breadcrumb">
									<li class="home"><a href="#">Home</a></li>
									<li><a href="#">Top Deals</a></li>
									<li class="active">Vancouver, BC</li>
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
					<!-- START #page -->
					<div id="page">
						<!-- START .tour-plans -->
						<div class="tour-plans">
							<div class="plan-image">
								<img class="img-responsive" src="<?php echo $asset_path;?>img/list-view/top-deals-listview1.jpg" alt="Vancouver, BC" />
								<div class="offer-box">
									<div class="offer-top">
										<span class="ft-temp alignright">19&#730;c</span>
										<span class="featured-cr text-upper">Spain</span>
										<h2 class="featured-cy text-upper">Barcelona</h2>
									</div>
									
									<div class="offer-bottom">
										<span class="featured-stf">Starting From </span>
										<span class="featured-spe">250 $</span>
									</div>
								</div>
							</div>
							
							<div class="featured-btm box-shadow1">
								<a class="ft-hotel text-upper" href="#">6 nights VIP/Luxurious Hotel</a>
								<a class="ft-plane text-upper" href="#">Return Air Ticket</a>
								<a class="ft-tea text-upper" href="#">Complimentary Break Fast</a>
							</div>
							
							<h2 class="text-upper">Tour Information</h2>
							<p>Amet turpis tristique, nec in aliquet dis amet, proin egestas in tempor, cras et dapibus, lectus pellentesque enim odio elementum eu tincidunt diam a et. Dapibus sed cum, aliquam cras egestas enim elit in mattis? Scelerisque, ultrices mid! Lorem. Scelerisque? Pid cras, mattis vel, porta, quis! Porttitor turpis cras, odio ultricies parturient pulvinar tempor, eu turpis enim dapibus diam tristique cursus egestas quis phasellus montes! Parturient porta purus quis scelerisque? Vel proin, ac odio cras penatibus magnis non? Aliquam elementum, dis? Elementum ac.</p>
						</div>
						<!-- END .tour-plans -->
						
						<!-- START TABS -->
						<ul class="nav nav-tabs text-upper">
							<li class="active"><a href="#tourPlan" data-toggle="tab">Tour Plan</a></li>
							<li><a href="#flightSchedule" data-toggle="tab">Flight Schedule</a></li>
							<li><a href="#additionalInfo" data-toggle="tab">Additional Information</a></li>
						</ul>
						<!-- END TABS -->
						
						<!-- START TAB CONTENT -->
						<div class="tab-content gray box-shadow1 clearfix marb30">
							<!-- START TAB 1 -->
							<div class="tab-pane active" id="tourPlan">
								<ul class="plans-list list-unstyled detail-plans-list">
									<li>
										<img class="img-responsive" src="img/plan-image1.jpg" alt="Day 1" />
										<div class="plan-info">
											<h4 class="text-upper">Day 1</h4>
											<p>Amet turpis tristique, nec in aliquet dis amet, proin egestas in tempor, cras et dapibus.</p>
										</div>
									</li>
									
									<li>
										<img class="img-responsive" src="img/plan-image2.jpg" alt="Day 2" />
										<div class="plan-info">
											<h4 class="text-upper">Day 2</h4>
											<p>Amet turpis tristique, nec in aliquet dis amet, proin egestas in tempor, cras et dapibus.</p>
										</div>
									</li>
									
									<li>
										<img class="img-responsive" src="img/plan-image3.jpg" alt="Day 3" />
										<div class="plan-info">
											<h4 class="text-upper">Day 3</h4>
											<p>Amet turpis tristique, nec in aliquet dis amet, proin egestas in tempor, cras et dapibus.</p>
										</div>
									</li>
									
									<li>
										<img class="img-responsive" src="img/plan-image2.jpg" alt="Day 2" />
										<div class="plan-info">
											<h4 class="text-upper">Day 2</h4>
											<p>Amet turpis tristique, nec in aliquet dis amet, proin egestas in tempor, cras et dapibus.</p>
										</div>
									</li>
									
									<li>
										<img class="img-responsive" src="img/plan-image3.jpg" alt="Day 3" />
										<div class="plan-info">
											<h4 class="text-upper">Day 3</h4>
											<p>Amet turpis tristique, nec in aliquet dis amet, proin egestas in tempor, cras et dapibus.</p>
										</div>
									</li>
								</ul>
							</div>
							<!-- END TAB 1 -->
							
							<!-- START TAB 2 -->
							<div class="tab-pane" id="flightSchedule">
								<div class="table-responsive">
									<table class="table">
										<thead>
											<tr>
												<th>FLIGHT FROM</th>
												<th>DESTINATION</th>
												<th>DATE</th>
												<th>DEPARTS</th>
												<th>ARRIVES</th>
											</tr>
										</thead>
										<tbody>
											<tr class="dark-gray">
												<td>Seattle</td>
												<td>Paris</td>
												<td>20 DEC 2013</td>
												<td>10:00</td>
												<td>12:00</td>
											</tr>
											<tr>
												<td>Paris</td>
												<td>Colosseum</td>
												<td>21 DEC 2013</td>
												<td>09:00</td>
												<td>10:00</td>
											</tr>
											<tr class="dark-gray">
												<td>Colosseum</td>
												<td>London</td>
												<td>22 DEC 2013</td>
												<td>05:00</td>
												<td>06:30</td>
											</tr>
											<tr>
												<td>London</td>
												<td>Verona</td>
												<td>23 DEC 2013</td>
												<td>08:15</td>
												<td>09:30</td>
											</tr>
											<tr class="dark-gray">
												<td>Verona</td>
												<td>Seattle</td>
												<td>24 DEC 2013</td>
												<td>10:00</td>
												<td>03:40</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							<!-- END TAB 2 -->
							
							<!-- START TAB 3 -->
							<div class="tab-pane" id="additionalInfo">
								<div class="inside-pane">
									<p>Amet turpis tristique, nec in aliquet dis amet, proin egestas in tempor, cras et dapibus, lectus pellentesque enim odio elementum eu tincidunt diam a et. Dapibus sed cum, aliquam cras egestas enim elit in mattis? Scelerisque, ultrices mid! Lorem. Scelerisque? Pid cras, mattis vel, porta, quis! Porttitor turpis cras, odio ultricies parturient pulvinar tempor.</p>
									<p>eu turpis enim dapibus diam tristique cursus egestas quis phasellus montes! Parturient porta purus quis scelerisque? Vel proin, ac odio cras penatibus magnis non? Aliquam elementum, dis? Elementum ac.</p>
								</div>
							</div>
							<!-- END TAB 3 -->
						</div>
						<!-- END TAB CONTENT -->
					</div>
					<!-- END #page -->
				</div>
			</div>
			<!-- END .main-contents -->
			
			<!-- START footer -->
			