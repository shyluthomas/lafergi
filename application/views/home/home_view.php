<?php
$asset_path = base_url().'assets/frontend/';
$asset_path_backend = base_url().'assets/backend/';

$image_path = base_url().'images/';
//var_dump($twitterFeed);exit();
?>


<!--header-->

<!DOCTYPE html>
<html lang="en" dir="ltr">

	<!-- START head -->
	
<!-- Mirrored from extracoding.com/html/travelhub/index.html by HTTrack Website Copier/3.x [XR&CO'2013], Thu, 12 Jun 2014 06:00:36 GMT -->
<head>
		<!-- Site meta charset -->
		<meta charset="UTF-8">
		
		<!-- title -->
		<title>VACANZA MONDIAL</title>
		
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

		<link rel="stylesheet" href="<?php echo $asset_path;?>css/flexslider.css" type="text/css" media="screen" />
		<!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
		<link rel="stylesheet" type="text/css" href="<?php echo $asset_path;?>js/rs-plugin/css/settings.css" media="all" />
		<!-- responsive stylesheet -->
		<link rel="stylesheet" type="text/css" href="<?php echo $asset_path;?>css/responsive.css" media="all" />

		<!-- color scheme -->
		<link rel="stylesheet" type="text/css" href="<?php echo $asset_path;?>css/colors/color1.css" title="color1" />
		<link rel="alternate stylesheet" type="text/css" href="<?php echo $asset_path;?>css/colors/color2.css" title="color2" />
		<link rel="alternate stylesheet" type="text/css" href="<?php echo $asset_path;?>css/colors/color3.css" title="color3" />
		<link rel="alternate stylesheet" type="text/css" href="<?php echo $asset_path;?>css/colors/color4.css" title="color4" />

		<!-- Load Fonts via Google Fonts API -->
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Karla:400,700,400italic,700italic" />

	</head>
	<!-- END head -->

	<!-- START body -->
	<body>
		<!-- START #wrapper -->
		<div id="wrapper">
			<!-- START header -->
			<?php $this->load->view('include/header');?>
			<!-- END header -->
			
			<!-- START #main-slider -->
			<div id="main-slider">
				<div id="content-slider">
					<ul>
						<!-- START Slide 1 -->
						<li data-transition="fade" data-slotamount="5" data-masterspeed="700">
							<img src="<?php echo $asset_path;?>banner/amsterdam.jpg" alt="Slider Image 1" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat" />
							
							<!-- LAYER NR. 1 -->
							<div class="caption caption-yellow sft stt headline text-upper"
								data-x="20"
								data-y="150"
								data-speed="600"
								data-start="2000"
								data-easing="Power3.easeOut"
								data-endspeed="400"
								data-endeasing="Power4.easeIn"
								data-captionhidden="off"
								style="z-index:6;font-size:18px;">...</div>
							
							<!-- LAYER NR. 2 -->
							<div class="caption caption-white sfr stl slider-heading text-upper"
								data-x="20"
								data-y="185"
								data-speed="1000"
								data-start="1800"
								data-easing="Power2.easeOut"
								data-endspeed="600"
								data-endeasing="Power3.easeIn"
								data-captionhidden="off"
								style="z-index:6;font-size:48px; ">Amsterdam
							</div>
							
							<!-- LAYER NR. 3 -->
							<div class="caption caption-black sfb stb headline text-upper"
								data-x="20"
								data-y="263"
								data-speed="600"
								data-start="1500"
								data-easing="Power4.easeOut"
								data-endspeed="500"
								data-endeasing="Power1.easeIn"
								data-captionhidden="off"
								style="z-index:6">...</div>
						</li>
						<!-- END Slide 1 -->
						
						<!-- START Slide 2 -->
						<li data-transition="fade" data-slotamount="7" data-masterspeed="1000">
							<img src="<?php echo $asset_path;?>banner/athence.jpg" alt="Slider Image 2"  data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat" />
							
							<!-- LAYER NR. 1 -->
							<div class="caption caption-yellow sfl str headline text-upper"
								data-x="20"
								data-y="150"
								data-speed="600"
								data-start="2000"
								data-easing="Bounce.easeInOut"
								data-endspeed="400"
								data-endeasing="Bounce.easeOut"
								data-captionhidden="off"
								style="z-index:6;font-size:18px;">...</div>
							
							<!-- LAYER NR. 2 -->
							<div class="caption caption-white sft stb slider-heading text-upper"
								data-x="20"
								data-y="185"
								data-speed="500"
								data-start="800"
								data-easing="Expo.easeIn"
								data-endspeed="600"
								data-endeasing="Expo.easeInOut"
								data-captionhidden="off"
								style="z-index:6;font-size:48px; ">Athence
							</div>
							
							<!-- LAYER NR. 3 -->
							<div class="caption caption-black sfr stl headline text-upper"
								data-x="20"
								data-y="263"
								data-speed="600"
								data-start="1500"
								data-easing="Power0.easeOut"
								data-endspeed="500"
								data-endeasing="Back.easeOut"
								data-captionhidden="off"
								style="z-index:6">...</div>
						</li>
						
						<!-- START Slide 3 -->
						<li data-transition="fade" data-slotamount="6" data-masterspeed="800">
							<img src="<?php echo $asset_path;?>banner/blue-mosqe.jpg" alt="Slider Image 3"  data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat" />
							
							<!-- LAYER NR. 1 -->
							<div class="caption caption-yellow sft stt headline text-upper"
								data-x="20"
								data-y="150"
								data-speed="600"
								data-start="2000"
								data-easing="Power3.easeOut"
								data-endspeed="400"
								data-endeasing="Power4.easeIn"
								data-captionhidden="off"
								style="z-index:6;font-size:18px;">...</div>
							
							<!-- LAYER NR. 2 -->
							<div class="caption caption-white sfr stl slider-heading text-upper"
								data-x="20"
								data-y="185"
								data-speed="1000"
								data-start="1800"
								data-easing="Power2.easeOut"
								data-endspeed="600"
								data-endeasing="Power3.easeIn"
								data-captionhidden="off"
								style="z-index:6;font-size:48px; ">Blue Mosqe
							</div>
							
							<!-- LAYER NR. 3 -->
							<div class="caption caption-black sfb stb headline text-upper"
								data-x="20"
								data-y="263"
								data-speed="600"
								data-start="1500"
								data-easing="Power4.easeOut"
								data-endspeed="500"
								data-endeasing="Power1.easeIn"
								data-captionhidden="off"
								style="z-index:6">...</div>
						</li>
						<!-- END Slide 3 -->
                        
                        <!-- START Slide 4 -->
						<li data-transition="fade" data-slotamount="6" data-masterspeed="800">
							<img src="<?php echo $asset_path;?>banner/budhapest.jpg" alt="Slider Image 3"  data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat" />
							
							<!-- LAYER NR. 1 -->
							<div class="caption caption-yellow sft stt headline text-upper"
								data-x="20"
								data-y="150"
								data-speed="600"
								data-start="2000"
								data-easing="Power3.easeOut"
								data-endspeed="400"
								data-endeasing="Power4.easeIn"
								data-captionhidden="off"
								style="z-index:6;font-size:18px;">...</div>
							
							<!-- LAYER NR. 2 -->
							<div class="caption caption-white sfr stl slider-heading text-upper"
								data-x="20"
								data-y="185"
								data-speed="1000"
								data-start="1800"
								data-easing="Power2.easeOut"
								data-endspeed="600"
								data-endeasing="Power3.easeIn"
								data-captionhidden="off"
								style="z-index:6;font-size:48px; ">Budhapest
							</div>
							
							<!-- LAYER NR. 3 -->
							<div class="caption caption-black sfb stb headline text-upper"
								data-x="20"
								data-y="263"
								data-speed="600"
								data-start="1500"
								data-easing="Power4.easeOut"
								data-endspeed="500"
								data-endeasing="Power1.easeIn"
								data-captionhidden="off"
								style="z-index:6">...</div>
						</li>
						<!-- END Slide 4 -->
                        
                        <!-- START Slide 5 -->
						<li data-transition="fade" data-slotamount="6" data-masterspeed="800">
							<img src="<?php echo $asset_path;?>banner/greece.jpg" alt="Slider Image 3"  data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat" />
							
							<!-- LAYER NR. 1 -->
							<div class="caption caption-yellow sft stt headline text-upper"
								data-x="20"
								data-y="150"
								data-speed="600"
								data-start="2000"
								data-easing="Power3.easeOut"
								data-endspeed="400"
								data-endeasing="Power4.easeIn"
								data-captionhidden="off"
								style="z-index:6;font-size:18px;">...</div>
							
							<!-- LAYER NR. 2 -->
							<div class="caption caption-white sfr stl slider-heading text-upper"
								data-x="20"
								data-y="185"
								data-speed="1000"
								data-start="1800"
								data-easing="Power2.easeOut"
								data-endspeed="600"
								data-endeasing="Power3.easeIn"
								data-captionhidden="off"
								style="z-index:6;font-size:48px; ">Greece
							</div>
							
							<!-- LAYER NR. 3 -->
							<div class="caption caption-black sfb stb headline text-upper"
								data-x="20"
								data-y="263"
								data-speed="600"
								data-start="1500"
								data-easing="Power4.easeOut"
								data-endspeed="500"
								data-endeasing="Power1.easeIn"
								data-captionhidden="off"
								style="z-index:6">...</div>
						</li>
						<!-- END Slide 5 -->
                        
                        <!-- START Slide 6 -->
						<li data-transition="fade" data-slotamount="6" data-masterspeed="800">
							<img src="<?php echo $asset_path;?>banner/lake-bled.jpg" alt="Slider Image 3"  data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat" />
							
							<!-- LAYER NR. 1 -->
							<div class="caption caption-yellow sft stt headline text-upper"
								data-x="20"
								data-y="150"
								data-speed="600"
								data-start="2000"
								data-easing="Power3.easeOut"
								data-endspeed="400"
								data-endeasing="Power4.easeIn"
								data-captionhidden="off"
								style="z-index:6;font-size:18px;">...</div>
							
							<!-- LAYER NR. 2 -->
							<div class="caption caption-white sfr stl slider-heading text-upper"
								data-x="20"
								data-y="185"
								data-speed="1000"
								data-start="1800"
								data-easing="Power2.easeOut"
								data-endspeed="600"
								data-endeasing="Power3.easeIn"
								data-captionhidden="off"
								style="z-index:6;font-size:48px; ">Lake Bled
							</div>
							
							<!-- LAYER NR. 3 -->
							<div class="caption caption-black sfb stb headline text-upper"
								data-x="20"
								data-y="263"
								data-speed="600"
								data-start="1500"
								data-easing="Power4.easeOut"
								data-endspeed="500"
								data-endeasing="Power1.easeIn"
								data-captionhidden="off"
								style="z-index:6">...</div>
						</li>
						<!-- END Slide 6 -->
                        
                        <!-- START Slide 7 -->
						<li data-transition="fade" data-slotamount="6" data-masterspeed="800">
							<img src="<?php echo $asset_path;?>banner/lisbon.jpg" alt="Slider Image 3"  data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat" />
							
							<!-- LAYER NR. 1 -->
							<div class="caption caption-yellow sft stt headline text-upper"
								data-x="20"
								data-y="150"
								data-speed="600"
								data-start="2000"
								data-easing="Power3.easeOut"
								data-endspeed="400"
								data-endeasing="Power4.easeIn"
								data-captionhidden="off"
								style="z-index:6;font-size:18px;">...</div>
							
							<!-- LAYER NR. 2 -->
							<div class="caption caption-white sfr stl slider-heading text-upper"
								data-x="20"
								data-y="185"
								data-speed="1000"
								data-start="1800"
								data-easing="Power2.easeOut"
								data-endspeed="600"
								data-endeasing="Power3.easeIn"
								data-captionhidden="off"
								style="z-index:6;font-size:48px; ">Lisbon
							</div>
							
							<!-- LAYER NR. 3 -->
							<div class="caption caption-black sfb stb headline text-upper"
								data-x="20"
								data-y="263"
								data-speed="600"
								data-start="1500"
								data-easing="Power4.easeOut"
								data-endspeed="500"
								data-endeasing="Power1.easeIn"
								data-captionhidden="off"
								style="z-index:6">...</div>
						</li>
						<!-- END Slide 7 -->
                        
                        <!-- START Slide 8 -->
						<li data-transition="fade" data-slotamount="6" data-masterspeed="800">
							<img src="<?php echo $asset_path;?>banner/mt-titlis.jpg" alt="Slider Image 3"  data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat" />
							
							<!-- LAYER NR. 1 -->
							<div class="caption caption-yellow sft stt headline text-upper"
								data-x="20"
								data-y="150"
								data-speed="600"
								data-start="2000"
								data-easing="Power3.easeOut"
								data-endspeed="400"
								data-endeasing="Power4.easeIn"
								data-captionhidden="off"
								style="z-index:6;font-size:18px;">...</div>
							
							<!-- LAYER NR. 2 -->
							<div class="caption caption-white sfr stl slider-heading text-upper"
								data-x="20"
								data-y="185"
								data-speed="1000"
								data-start="1800"
								data-easing="Power2.easeOut"
								data-endspeed="600"
								data-endeasing="Power3.easeIn"
								data-captionhidden="off"
								style="z-index:6;font-size:48px; ">Mt Titlis
							</div>
							
							<!-- LAYER NR. 3 -->
							<div class="caption caption-black sfb stb headline text-upper"
								data-x="20"
								data-y="263"
								data-speed="600"
								data-start="1500"
								data-easing="Power4.easeOut"
								data-endspeed="500"
								data-endeasing="Power1.easeIn"
								data-captionhidden="off"
								style="z-index:6">...</div>
						</li>
						<!-- END Slide 8 -->
                        
                        <!-- START Slide 9 -->
						<li data-transition="fade" data-slotamount="6" data-masterspeed="800">
							<img src="<?php echo $asset_path;?>banner/parague.jpg" alt="Slider Image 3"  data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat" />
							
							<!-- LAYER NR. 1 -->
							<div class="caption caption-yellow sft stt headline text-upper"
								data-x="20"
								data-y="150"
								data-speed="600"
								data-start="2000"
								data-easing="Power3.easeOut"
								data-endspeed="400"
								data-endeasing="Power4.easeIn"
								data-captionhidden="off"
								style="z-index:6;font-size:18px;">...</div>
							
							<!-- LAYER NR. 2 -->
							<div class="caption caption-white sfr stl slider-heading text-upper"
								data-x="20"
								data-y="185"
								data-speed="1000"
								data-start="1800"
								data-easing="Power2.easeOut"
								data-endspeed="600"
								data-endeasing="Power3.easeIn"
								data-captionhidden="off"
								style="z-index:6;font-size:48px; ">Parague
							</div>
							
							<!-- LAYER NR. 3 -->
							<div class="caption caption-black sfb stb headline text-upper"
								data-x="20"
								data-y="263"
								data-speed="600"
								data-start="1500"
								data-easing="Power4.easeOut"
								data-endspeed="500"
								data-endeasing="Power1.easeIn"
								data-captionhidden="off"
								style="z-index:6">...</div>
						</li>
						<!-- END Slide 9 -->
                        
                        <!-- START Slide 10 -->
						<li data-transition="fade" data-slotamount="6" data-masterspeed="800">
							<img src="<?php echo $asset_path;?>banner/poland.jpg" alt="Slider Image 3"  data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat" />
							
							<!-- LAYER NR. 1 -->
							<div class="caption caption-yellow sft stt headline text-upper"
								data-x="20"
								data-y="150"
								data-speed="600"
								data-start="2000"
								data-easing="Power3.easeOut"
								data-endspeed="400"
								data-endeasing="Power4.easeIn"
								data-captionhidden="off"
								style="z-index:6;font-size:18px;">...</div>
							
							<!-- LAYER NR. 2 -->
							<div class="caption caption-white sfr stl slider-heading text-upper"
								data-x="20"
								data-y="185"
								data-speed="1000"
								data-start="1800"
								data-easing="Power2.easeOut"
								data-endspeed="600"
								data-endeasing="Power3.easeIn"
								data-captionhidden="off"
								style="z-index:6;font-size:48px; ">Poland
							</div>
							
							<!-- LAYER NR. 3 -->
							<div class="caption caption-black sfb stb headline text-upper"
								data-x="20"
								data-y="263"
								data-speed="600"
								data-start="1500"
								data-easing="Power4.easeOut"
								data-endspeed="500"
								data-endeasing="Power1.easeIn"
								data-captionhidden="off"
								style="z-index:6">...</div>
						</li>
						<!-- END Slide 10 -->
                        
                        <!-- START Slide 11 -->
						<li data-transition="fade" data-slotamount="6" data-masterspeed="800">
							<img src="<?php echo $asset_path;?>banner/spainmandrid.jpg" alt="Slider Image 3"  data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat" />
							
							<!-- LAYER NR. 1 -->
							<div class="caption caption-yellow sft stt headline text-upper"
								data-x="20"
								data-y="150"
								data-speed="600"
								data-start="2000"
								data-easing="Power3.easeOut"
								data-endspeed="400"
								data-endeasing="Power4.easeIn"
								data-captionhidden="off"
								style="z-index:6;font-size:18px;">...</div>
							
							<!-- LAYER NR. 2 -->
							<div class="caption caption-white sfr stl slider-heading text-upper"
								data-x="20"
								data-y="185"
								data-speed="1000"
								data-start="1800"
								data-easing="Power2.easeOut"
								data-endspeed="600"
								data-endeasing="Power3.easeIn"
								data-captionhidden="off"
								style="z-index:6;font-size:48px; ">Spain Mandrid
							</div>
							
							<!-- LAYER NR. 3 -->
							<div class="caption caption-black sfb stb headline text-upper"
								data-x="20"
								data-y="263"
								data-speed="600"
								data-start="1500"
								data-easing="Power4.easeOut"
								data-endspeed="500"
								data-endeasing="Power1.easeIn"
								data-captionhidden="off"
								style="z-index:6">...</div>
						</li>
						<!-- END Slide 11 -->
						
						<!-- START Slide 12 -->
						<li data-transition="fade" data-slotamount="6" data-masterspeed="800">
							<img src="<?php echo $asset_path;?>banner/atlanticroad.jpg" alt="Slider Image 3"  data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat" />
							
							<!-- LAYER NR. 1 -->
							<div class="caption caption-yellow sft stt headline text-upper"
								data-x="20"
								data-y="150"
								data-speed="600"
								data-start="2000"
								data-easing="Power3.easeOut"
								data-endspeed="400"
								data-endeasing="Power4.easeIn"
								data-captionhidden="off"
								style="z-index:6;font-size:18px;">...</div>
							
							<!-- LAYER NR. 2 -->
							<div class="caption caption-white sfr stl slider-heading text-upper"
								data-x="20"
								data-y="185"
								data-speed="1000"
								data-start="1800"
								data-easing="Power2.easeOut"
								data-endspeed="600"
								data-endeasing="Power3.easeIn"
								data-captionhidden="off"
								style="z-index:6;font-size:48px; ">Norway
							</div>
							
							<!-- LAYER NR. 3 -->
							<div class="caption caption-black sfb stb headline text-upper"
								data-x="20"
								data-y="263"
								data-speed="600"
								data-start="1500"
								data-easing="Power4.easeOut"
								data-endspeed="500"
								data-endeasing="Power1.easeIn"
								data-captionhidden="off"
								style="z-index:6">...</div>
						</li>
						<!-- END Slide 12 -->

                        
					</ul>
				</div>
				<div id="slider-overlay"></div>
			</div>
			<!-- END #main-slider -->
			

			<!-- START .main-contents -->
			<div class="main-contents">
				<div class="container" id="home-page">

					<!-- START .tour-plan -->
					<form class="plan-tour" style="display:none;">
						<div class="plan-banner"><span>vACANZA</span><h4>MONDIAL <span>TOUR</span></h4></div>
						<div class="top-fields">
							<div class="input-field col-md-3"><input type="text" placeholder="1. Where to go?" /></div>
							<div class="input-field col-md-3"><input type="text" placeholder="2. What to do?" /></div>
							<div class="input-field col-md-6 schedule">
								<input type="text" class="date-picker" value="" placeholder="3. From When?" data-date="11-12-2012" data-date-format="dd-mm-yyyy" />
								<i class="calendar-icon"></i>
								<input type="text" class="date-picker" value="" placeholder="4. Till When?" data-date="12-12-2012" data-date-format="dd-mm-yyyy" />
							</div>
						</div>
						<div class="bottom-fields">
							<div class="input-field select col-md-3">
								<label>5. With Adults</label>
								<select id="adults">
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
									<option value="6">6</option>
									<option value="7">7</option>
								</select>
							</div>
							<div class="input-field select col-md-3">
								<label>6. With Kids</label>
								<select id="kids">
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
									<option value="6">6</option>
									<option value="7">7</option>
								</select>
							</div>
							<div class="input-field col-md-4">
								<label>6. Including</label>
								<label><input class="input-cb" type="checkbox" name="inc_hotel" value="1" checked="checked" /> Hotel</label>
								<label><input class="input-cb" type="checkbox" name="inc_flight" value="1" checked="checked" /> Flight</label>
								<label><input class="input-cb" type="checkbox" name="inc_car" value="1" /> Car</label>
							</div>
							<div class="submit-btn col-md-2">
								<input type="submit" value="Search" />
							</div>
						</div>
					</form>
					<!-- END .tour-plan -->
					
					<h2 class="ft-heading text-upper">TOUR PACKEGES</h2>

					<div class="carousel">
						<ul class="slides">
							<li>
								<div class="row">
                                <div class="col-md-3">
                                <?php $i=0;  foreach($package as $packages): ?>
									
										<div class="ft-item">
											<span class="ft-image">
                                            <a href="<?php echo site_url().'/packages/packagesMore/'.$packages['id']?>">
											<img src="<?php echo $asset_path_backend;?>images/packages/<?php echo $packages['image'];?>" alt="<?php echo $packages['title'];?>" style="height:137px;" />
                                            </a>
											</span>
											<div class="ft-data">
                                            <p>Minivan tour package (8 pax) <span class="ft-offer text-upper colour"><?php echo $packages['prize'];?> &euro;</span></p>
											<?php /*?>
											<?php if($packages['hotel']){?><a class="ft-hotel text-upper" href="#">Hotel</a><?php }?>
											<?php if($packages['airticket']){?><a class="ft-plane text-upper" href="#">Air Ticket</a><?php } ?>
											<?php if($packages['breakfast']){?><a class="ft-tea text-upper" href="#">Break Fast</a><?php } ?>
											<?php */?>
                                            </div>
											<div class="ft-foot">
												<h4 class="ft-title text-upper"><a href="<?php echo site_url().'/packages/packagesMore/'.$packages['id']?>"><?php echo substr($packages['title'],0,30);?></a></h4>
												<?php /*?><span class="ft-offer text-upper">Starting From <?php echo $packages['prize'];?> $</span><?php */?>
											</div>
											<div class="ft-foot-ex">
												<span class="ft-date text-upper alignleft"><?php echo $packages['createtime'];?></span>
												<!--<span class="ft-temp alignright">17&#730;c</span>-->
											</div>
										</div>
										  <?php
										  $i++;
										  if($i % 2 == 0){
											  if(count($package) != $i){
											echo '</div>';
											echo ' <div class="col-md-3">';  
											  }
										  }
										  
										   endforeach;?>
										
                                     </div>
                                  
								</div>
							</li>
							<li>
								<div class="row">
									<div class="col-md-3">
										 <?php $i=0;  foreach($package as $packages): ?>
									
										<div class="ft-item" style="height:257px">
											<span class="ft-image">
								<a href="<?php echo site_url().'/packages/packagesMore/'.$packages['id']?>">
                                <img src="<?php echo $asset_path_backend;?>images/packages/<?php echo $packages['image'];?>" alt="featured Scroller" style="height:137px;" />
                                </a>
											</span>
											<div class="ft-data">
                                            <p>Minivan tour package (8 pax) <span class="ft-offer text-upper colour"><?php echo $packages['prize'];?> &euro;</span></p>
                                            <?php /*?>
											<?php if($packages['hotel']){?><a class="ft-hotel text-upper" href="#">Hotel</a><?php }?>
											<?php if($packages['airticket']){?><a class="ft-plane text-upper" href="#">Air Ticket</a><?php } ?>
											<?php if($packages['breakfast']){?><a class="ft-tea text-upper" href="#">Break Fast</a><?php } ?>
											<?php */?>
                                            </div>
											<div class="ft-foot">
												<h4 class="ft-title text-upper"><a href="<?php echo site_url().'/packages/packagesMore/'.$packages['id']?>"><?php echo substr($packages['title'],0,30);?></a></h4>
												<?php /*?><span class="ft-offer text-upper">Starting From <?php echo $packages['prize'];?> $</span><?php */?>
											</div>
											<div class="ft-foot-ex">
												<span class="ft-date text-upper alignleft"><?php echo $packages['createtime'];?></span>
												<!--<span class="ft-temp alignright">17&#730;c</span>-->
											</div>
										</div>
										  <?php
										  $i++;
										  if($i % 2 == 0){
											echo '</div>';
											echo ' <div class="col-md-3">';  
										  }
										  
										   endforeach;?>
										</div>
									</div>
									
									
									
							
							</li>
						</ul>  	
					</div>
                    
                    
                    
                    
                    
                    
                    <h2 class="ft-heading text-upper">TOUR DESTINATIONS</h2>
                    <div class="carousel">
						<ul class="slides">
							<li>
								<div class="row">
									<div class="col-md-3">
                                    
                                     <?php $i=0;  foreach($destination as $destinations): ?>
										<div class="ft-item" style="height:257px">
											<span class="ft-image">
										<a href="<?php echo site_url().'/destination/destinationMore/'.$destinations['id']?>" title="<?php echo $destinations['title']?>" >
                                        <img src="<?php echo $asset_path_backend;?>images/destination/<?php echo $destinations['image'];?>" height="137px" alt="<?php echo $destinations['title']?>" />
                                        </a>
											</span>
											<div class="ft-data">
                                            <p><a href="<?php echo site_url().'/destination/destinationMore/'.$destinations['id']?>"><?php echo substr($destinations['description'],0,100);?>
                                            </a></p>
                                            
                                            </div>
											
											<div class="ft-foot-ex">
												<span class="ft-date text-upper alignleft"><?php echo $destinations['createtime'];?></span>
												<span class="ft-temp alignright"><?php echo $destinations['temperature'];?></span>
											</div>
										</div>
                                        
                                         <?php
										  $i++;
										  if($i % 2 == 0){
											echo '</div>';
											echo ' <div class="col-md-3">';  
										  }
										  
										   endforeach;?>
										
										
									</div>
									
								</div>
							</li>
							<li>
								<div class="row">
									<div class="col-md-3">
                                    
                                     <?php $i=0;  foreach($destination as $destinations): ?>
										<div class="ft-item">
											<span class="ft-image">
                                            <a href="<?php echo site_url().'/destination/destinationMore/'.$destinations['id']?>">
												<img src="<?php echo $asset_path_backend;?>images/destination/<?php echo $destinations['image'];?>" alt="" height="137px" />
                                                </a>
											</span>
											<div class="ft-data">
                                            <p>
											<a href="<?php echo site_url().'/destination/destinationMore/'.$destinations['id']?>"><?php echo substr($destinations['description'],0,100);?>
                                            </a>
                                            </p>
                                            
                                            </div>
											
											<div class="ft-foot-ex">
													<span class="ft-date text-upper alignleft"><?php echo $destinations['createtime'];?></span>
												<span class="ft-temp alignright"><?php echo $destinations['temperature'];?></span>
											</div>
										</div>
                                        
                                         <?php
										  $i++;
										  if($i % 2 == 0){
											echo '</div>';
											echo ' <div class="col-md-3">';  
										  }
										  
										   endforeach;?>
										
										
									</div>
									
								</div>
							</li>
						</ul>  	
					</div>
                    
                    
                    

				</div>
                
                
                
                
                
                
			</div>
			<!-- END .main-contents -->
			
			<!-- START .main-contents .bom-contents -->
			<div class="main-contents bom-contents">
				<div class="container">
					<h2 class="text-center text-upper">Tracy Arm Fjord</h2>
					<p class="headline text-center">A piece of heaven in the summer of 2013 brought ten small art houses enlivn the street scene in Tracy Arm FJord</p>
					
					<div class="row">
						<!-- START featured destination 1 -->
                        <?php foreach($pack_catagory as $catgory):?>
                        
						<section class="col-md-3 fd-column">
							<div class="featured-dest">
								<span class="fd-image">
									<img class="img-circle" src="<?php echo $asset_path_backend;?>/images/packages/thump/<?php echo $catgory['image'];?>" alt="" height="150" width="150" />
                                   
								</span>
								<h3 class="text-center text-upper"><?php echo $catgory['catagory'];?></h3>
								<p class="text-center"><?php echo $catgory['description'];?></p>
								<span class="btn-center">
                                <a class="btn btn-primary text-upper" href="<?php echo site_url().'/packages/search/'.$catgory['catagory'];?>" title="Search">Search</a></span>
							</div>
						</section>
						<!-- END featured destination 1 -->
                        
                        <?php endforeach;?>
						
						<?php /*?><!-- START featured destination 2 -->
						<section class="col-md-3 fd-column">
							<div class="featured-dest">
								<span class="fd-image">
									<img class="img-circle" src="<?php echo $asset_path;?>img/featured-image-2.jpg" alt="Featured Destination" />
								</span>
								<h3 class="text-center text-upper">Romantic</h3>
								<p class="text-center">Egestas dignissim a enim lorem a mus egestas risus porta? Sed. Scelerisque, in nec velit augue aenean a, vut velit nec! Phasellus aliquam odio.</p>
								<span class="btn-center"><a class="btn btn-primary text-upper" href="<?php echo site_url().'/packages/search/romantic'?>" title="Search">Search</a></span>
							</div>
						</section>
						<!-- END featured destination 2 -->
						
						<!-- START featured destination 3 -->
						<section class="col-md-3 fd-column">
							<div class="featured-dest">
								<span class="fd-image">
									<img class="img-circle" src="<?php echo $asset_path;?>img/featured-image-3.jpg" alt="Featured Destination" />
								</span>
								<h3 class="text-center text-upper">Amazing</h3>
								<p class="text-center">Egestas dignissim a enim lorem a mus egestas risus porta? Sed. Scelerisque, in nec velit augue aenean a, vut velit nec! Phasellus aliquam odio.</p>
								<span class="btn-center"><a class="btn btn-primary text-upper" href="<?php echo site_url().'/packages/search/amazing'?>" title="Search">Search</a></span>
							</div>
						</section>
						<!-- END featured destination 3 -->
						
						<!-- START featured destination 4 -->
						<section class="col-md-3 fd-column">
							<div class="featured-dest">
								<span class="fd-image">
									<img class="img-circle" src="<?php echo $asset_path;?>img/featured-image-4.jpg" alt="Featured Destination" />
								</span>
								<h3 class="text-center text-upper">Fun</h3>
								<p class="text-center">Egestas dignissim a enim lorem a mus egestas risus porta? Sed. Scelerisque, in nec velit augue aenean a, vut velit nec! Phasellus aliquam odio.</p>
								<span class="btn-center"><a class="btn btn-primary text-upper" href="<?php echo site_url().'/packages/search/fun'?>" title="Search">Search</a></span>
							</div>
						</section><?php */?>
						<!-- END featured destination 4 -->
					</div>
				</div>
			</div>
			<!-- END .main-contents .bom-contents -->
			
		
        
   <?php
  
   ?>