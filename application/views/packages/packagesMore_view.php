<?php
$asset_path = base_url().'assets/frontend/';
$asset_path_backend = base_url().'assets/backend/';

$image_path = base_url().'images/';
//echo "<pre>";print_r($packagesMoreData);exit();
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
							<section class="col-sm-12">
								<h1 class="text-upper"><?php echo $packagesData['title'];?></h1>
							</section>
							
							<!-- breadcrumbs -->
							<?php /*?><section class="col-sm-6">
								<ol class="breadcrumb">
									<li class="home"><a href="<?php echo site_url();?>">Home</a></li>
                                    <li ><a href="<?php echo site_url().'/packages'?>">Packages</a></li>

									<li><a href="#"><?php echo $packagesData['title'];?></a></li>
									
								</ol>
							</section><?php */?>
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
								<img class="img-responsive" src="<?php echo $asset_path_backend;?>images/packages/thump/<?php echo $packagesData['image'];?>" alt="Vancouver, BC" height="321" style="height:321px;"/>
								<div class="offer-box">
									<div class="offer-top">
										<?php /*?><span class="ft-temp alignright">19&#730;c</span><?php */?>
										<span class="featured-cr text-upper"><?php echo $packagesData['catagory'];?></span>
										
									</div>
									
									<div class="offer-bottom">
										<span class="featured-stf">Starting From </span>
										<span class="featured-spe"><?php echo $packagesData['prize'];?> &euro;</span>
									</div>
								</div>
							</div>
							
							<div class="featured-btm box-shadow1">
                            Minivan tour package (8 pax) 
							<?php /*?>
							<?php if(@$packagesData['hotel']){?><a href="#" class="ft-hotel text-upper">Hotel</a><?php }?>
							<?php if(@$packagesData['airticket']){?>	<a href="#" class="ft-plane text-upper">Air Ticket</a> <?php }?>
							<?php if(@$packagesData['breakfast']){?>	<a href="#" class="ft-tea text-upper">Break Fast</a><?php }?>
                            <?php */?>
							</div>
							
							<h2 class="text-upper">Tour Information</h2>
							<p><?php echo $packagesData['content'];?></p>
						</div>
						<!-- END .tour-plans -->
						
						<!-- START TABS -->
						<ul class="nav nav-tabs text-upper">
							<li class="active"><a href="#highlights" data-toggle="tab">Highlights</a></li>
                            <li><a href="#tourPlan" data-toggle="tab">Itenary</a></li>
							<li><a href="#flightSchedule" data-toggle="tab">Prize Details</a></li>
							<li><a href="#additionalInfo" data-toggle="tab">Additional Information</a></li>
                            <li><a href="#inclusion" data-toggle="tab">Inclusion/Exclusion</a></li>
                            <li><a href="#bookonline" data-toggle="tab">Book Online</a></li>
						</ul>
						<!-- END TABS -->
					
						<!-- START TAB CONTENT -->
						<div class="tab-content gray box-shadow1 clearfix marb30">
							<!-- START TAB 0 -->
							<div class="tab-pane active" id="highlights">
								<div class="inside-pane">
									<p><?php echo nl2br($packagesData['highlights']);?></p>
								</div>
							</div>
							<!-- END TAB 0 -->
                        
							<!-- START TAB 1 -->
							<div class="tab-pane" id="tourPlan">
								<ul class="plans-list list-unstyled detail-plans-list">
                                <?php foreach ($packagesMoreData as $packData):
								 if($packData['image']){
									
									$imageData = $asset_path_backend.'images/packages/'. $packData['image'];
								}else{
										$imageData = $asset_path.'img/plan-image1.jpg';
									}
								?>
                                
									<li>
										<img class="img-responsive" src="<?php echo $imageData;?>" alt="Day 1"  />
										<div class="plan-info" style="min-height:200px;">
											<h4 class="text-upper"><?php echo substr($packData['title'],0,25);?></h4>
											<button type="button" class="popup"  data-toggle="modal" data-target="#myModal<? echo $packData['id'];?>" ><p><?php 
											$cont = stripslashes(strip_tags($packData['content']));
											echo substr($cont,0,100);?></p></button>
                                            
<div class="modal fade" id="myModal<? echo $packData['id'];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><?php echo substr($packData['title'],0,50);?></h4>
      </div>
      <div class="modal-body">
        <? echo nl2br($cont);?>
      </div>
    </div>
  </div>
</div>                                            
                                            
										</div>
									</li>
									
								<?php endforeach;?>
									
								</ul>
							</div>
							<!-- END TAB 1 -->
							
							<!-- START TAB 2 -->
							<div class="tab-pane" id="flightSchedule">
								<div class="inside-pane">
									<p><?php echo nl2br($packagesData['packageDetails']);?></p>
								</div>
							</div>
							<!-- END TAB 2 -->
							
							<!-- START TAB 3 -->
							<div class="tab-pane" id="additionalInfo">
								<div class="inside-pane">
									<p><?php echo nl2br($packagesData['additional_info']);?></p>
								</div>
							</div>
							<!-- END TAB 3 -->
                            <div class="tab-pane" id="inclusion">
								<div class="inside-pane">
									<p><?php echo nl2br($packagesData['inclusion_exclusion']);?></p>
								</div>
							</div>
							<!-- START TAB 4 -->
							<div class="tab-pane" id="bookonline">
								<div class="inside-pane">
                                <form name="book" method="post" enctype="multipart/form-data" 
                                action="<?php echo site_url().'/packages/book_online/'.$packagesMoreData[0]['package_id'];?>">
									<table>
                                    <tr>Enter Your Details</tr>
                                    
                                     <tr>
                                    <td width="100px">Title</td><td width="200px">
                                    <select name="title">
                                    <option value="Mr">Mr</option>
                                     <option value="Miss">Miss</option>
                                      <option value="Mrs">Mrs</option>
                                    </select>
                                    </td>
                                    
                                    </tr>
                                    
                                    <tr>
                                    <td width="100px">Name</td><td width="200px"><input name="name" type="text" style="width:300px;"></td>
                                    
                                    </tr>
                                     <tr >
                                    <td>Email</td><td><input name="email" type="text" style="width:300px;"></td>
                                    
                                    </tr>
                                     <tr>
                                    <td>Phone</td><td><input name="phone" type="text" style="width:300px;"></td>
                                    
                                    </tr>
                                    
                                     <tr>
                                    <td>Address</td><td><textarea name="address" rows="7" cols="40" style="width:300px;"></textarea></td>
                                    
                                    </tr>
                                    
                                     <tr>
                                    <td width="100px">Nationnality</td><td width="200px">
                                   
                                   <select name="ecountry" id="ecountry" class="input1" style="width:150px;">
                            <option selected="selected" value="">Select</option>
                            <option value="Albania">Albania</option>
                            <option value="Algeria">Algeria</option>
                            <option value="American Samoa">American Samoa</option>
                            <option value="Angola">Angola</option>
                            <option value="Antartica">Antartica</option>
                            <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                            <option value="Argentina">Argentina</option>
                            <option value="Armenia">Armenia</option>
                            <option value="Aruba">Aruba</option>
                            <option value="Australia">Australia</option>
                            <option value="Austria">Austria</option>
                            <option value="Azerbaijan">Azerbaijan</option>
                            <option value="Bahamas">Bahamas</option>
                            <option value="Bahrain">Bahrain</option>
                            <option value="Bangladesh">Bangladesh</option>
                            <option value="Barbados">Barbados</option>
                            <option value="Belarus">Belarus</option>
                            <option value="Belgium">Belgium</option>
                            <option value="Belize">Belize</option>
                            <option value="Bermuda">Bermuda</option>
                            <option value="Bhutan">Bhutan</option>
                            <option value="Bolivia">Bolivia</option>
                            <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                            <option value="Botswana">Botswana</option>
                            <option value="Brazil">Brazil</option>
                            <option value="British Virgin Islands">British Virgin Islands</option>
                            <option value="Brunei">Brunei</option>
                            <option value="Bulgaria">Bulgaria</option>
                            <option value="Burkina Faso">Burkina Faso</option>
                            <option value="Burma">Burma</option>
                            <option value="Burundi">Burundi</option>
                            <option value="Cambodia">Cambodia</option>
                            <option value="Cameroon">Cameroon</option>
                            <option value="Canada">Canada</option>
                            <option value="Cape Verde">Cape Verde</option>
                            <option value="Cayman Islands">Cayman Islands</option>
                            <option value="Central African Republic">Central African Republic</option>
                            <option value="Chad">Chad</option>
                            <option value="Chile">Chile</option>
                            <option value="China">China</option>
                            <option value="Christmas Island">Christmas Island</option>
                            <option value="Clipperton Island">Clipperton Island</option>
                            <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                            <option value="Colombia">Colombia</option>
                            <option value="Comoros">Comoros</option>
                            <option value="Congo, Democratic Republic of the">Congo, Democratic Republic of the</option>
                            <option value="Congo, Republic of the">Congo, Republic of the</option>
                            <option value="Cook Islands">Cook Islands</option>
                            <option value="Costa Rica">Costa Rica</option>
                            <option value="Cote d'Ivoire">Cote d'Ivoire</option>
                            <option value="Croatia">Croatia</option>
                            <option value="Cuba">Cuba</option>
                            <option value="Cyprus">Cyprus</option>
                            <option value="Czeck Republic">Czeck Republic</option>
                            <option value="Denmark">Denmark</option>
                            <option value="Djibouti">Djibouti</option>
                            <option value="Dominica">Dominica</option>
                            <option value="Dominican Republic">Dominican Republic</option>
                            <option value="Ecuador">Ecuador</option>
                            <option value="Egypt">Egypt</option>
                            <option value="El Salvador">El Salvador</option>
                            <option value="Equatorial Guinea">Equatorial Guinea</option>
                            <option value="Eritrea">Eritrea</option>
                            <option value="Estonia">Estonia</option>
                            <option value="Ethiopia">Ethiopia</option>
                            <option value="Europa Island">Europa Island</option>
                            <option value="Falkland Islands (Islas Malvinas)">Falkland Islands (Islas Malvinas)</option>
                            <option value="Faroe Islands">Faroe Islands</option>
                            <option value="Fiji">Fiji</option>
                            <option value="Finland">Finland</option>
                            <option value="France">France</option>
                            <option value="French Guiana">French Guiana</option>
                            <option value="French Polynesia">French Polynesia</option>
                            <option value="French Southern and Antarctic Lands">French Southern and Antarctic Lands</option>
                            <option value="Gambia, The">Gambia, The</option>
                            <option value="Gaza Strip">Gaza Strip</option>
                            <option value="Georgia">Georgia</option>
                            <option value="Germany">Germany</option>
                            <option value="Ghana">Ghana</option>
                            <option value="Gibraltar">Gibraltar</option>
                            <option value="Glorioso  Islands">Glorioso  Islands</option>
                            <option value="Greece">Greece</option>
                            <option value="Greenland">Greenland</option>
                            <option value="Grenada">Grenada</option>
                            <option value="Guadeloupe">Guadeloupe</option>
                            <option value="Guam">Guam</option>
                            <option value="Guatemala">Guatemala</option>
                            <option value="Guernsey">Guernsey</option>
                            <option value="Guinea">Guinea</option>
                            <option value="Guinea-Bissau">Guinea-Bissau</option>
                            <option value="Guyana">Guyana</option>
                            <option value="Haiti">Haiti</option>
                            <option value="Heard Island and McDonald Islands">Heard Island and McDonald Islands</option>
                            <option value="Holy See (Vatican City)">Holy See (Vatican City)</option>
                            <option value="Honduras">Honduras</option>
                            <option value="Hong  Kong">Hong  Kong</option>
                            <option value="Howland Island">Howland Island</option>
                            <option value="Hungary">Hungary</option>
                            <option value="Iceland">Iceland</option>
                            <option value="India">India</option>
                            <option value="Indonesia">Indonesia</option>
                            <option value="Iran">Iran</option>
                            <option value="Iraq">Iraq</option>
                            <option value="Ireland">Ireland</option>
                            <option value="Ireland, Northern">Ireland, Northern</option>
                            <option value="Israel">Israel</option>
                            <option value="Italy">Italy</option>
                            <option value="Jamaica">Jamaica</option>
                            <option value="Jan Mayen">Jan Mayen</option>
                            <option value="Japan">Japan</option>
                            <option value="Jarvis Island">Jarvis Island</option>
                            <option value="Jersey">Jersey</option>
                            <option value="Johnston Atoll">Johnston Atoll</option>
                            <option value="Jordan">Jordan</option>
                            <option value="Juan de Nova Island">Juan de Nova Island</option>
                            <option value="Kazakhstan">Kazakhstan</option>
                            <option value="Kenya">Kenya</option>
                            <option value="Kiribati">Kiribati</option>
                            <option value="Korea, North">Korea, North</option>
                            <option value="Korea, South">Korea, South</option>
                            <option value="Kuwait">Kuwait</option>
                            <option value="Kyrgyzstan">Kyrgyzstan</option>
                            <option value="Laos">Laos</option>
                            <option value="Latvia">Latvia</option>
                            <option value="Lebanon">Lebanon</option>
                            <option value="Lesotho">Lesotho</option>
                            <option value="Liberia">Liberia</option>
                            <option value="Libya">Libya</option>
                            <option value="Liechtenstein">Liechtenstein</option>
                            <option value="Lithuania">Lithuania</option>
                            <option value="Luxembourg">Luxembourg</option>
                            <option value="Macau">Macau</option>
                            <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                            <option value="Madagascar">Madagascar</option>
                            <option value="Malawi">Malawi</option>
                            <option value="Malaysia">Malaysia</option>
                            <option value="Maldives">Maldives</option>
                            <option value="Mali">Mali</option>
                            <option value="Malta">Malta</option>
                            <option value="Man, Isle of">Man, Isle of</option>
                            <option value="Marshall Islands">Marshall Islands</option>
                            <option value="Martinique">Martinique</option>
                            <option value="Mauritania">Mauritania</option>
                            <option value="Mauritius">Mauritius</option>
                            <option value="Mayotte">Mayotte</option>
                            <option value="Mexico">Mexico</option>
                            <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                            <option value="Midway Islands">Midway Islands</option>
                            <option value="Moldova">Moldova</option>
                            <option value="Monaco">Monaco</option>
                            <option value="Mongolia">Mongolia</option>
                            <option value="Montserrat">Montserrat</option>
                            <option value="Morocco">Morocco</option>
                            <option value="Mozambique">Mozambique</option>
                            <option value="Namibia">Namibia</option>
                            <option value="Nauru">Nauru</option>
                            <option value="Nepal">Nepal</option>
                            <option value="Netherlands">Netherlands</option>
                            <option value="Netherlands Antilles">Netherlands Antilles</option>
                            <option value="New Caledonia">New Caledonia</option>
                            <option value="New 	Zealand">New 	Zealand</option>
                            <option value="Nicaragua">Nicaragua</option>
                            <option value="Niger">Niger</option>
                            <option value="Nigeria">Nigeria</option>
                            <option value="Niue">Niue</option>
                            <option value="Norfolk Island">Norfolk Island</option>
                            <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                            <option value="Norway">Norway</option>
                            <option value="Oman">Oman</option>
                            <option value="Pakistan">Pakistan</option>
                            <option value="Palau">Palau</option>
                            <option value="Panama">Panama</option>
                            <option value="Papua New Guinea">Papua New Guinea</option>
                            <option value="Paraguay">Paraguay</option>
                            <option value="Peru">Peru</option>
                            <option value="Philippines">Philippines</option>
                            <option value="Pitcaim 	Islands">Pitcaim 	Islands</option>
                            <option value="Poland">Poland</option>
                            <option value="Portugal">Portugal</option>
                            <option value="Puerto Rico">Puerto Rico</option>
                            <option value="Qatar">Qatar</option>
                            <option value="Reunion">Reunion</option>
                            <option value="Romainia">Romainia</option>
                            <option value="Russia">Russia</option>
                            <option value="Rwanda">Rwanda</option>
                            <option value="Saint Helena">Saint Helena</option>
                            <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                            <option value="Saint Lucia">Saint Lucia</option>
                            <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                            <option value="Saint Vincent and the  Grenadines">Saint Vincent and the  Grenadines</option>
                            <option value="Samoa">Samoa</option>
                            <option value="San Marino">San Marino</option>
                            <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                            <option value="Saudi Arabia">Saudi Arabia</option>
                            <option value="Scotland">Scotland</option>
                            <option value="Senegal">Senegal</option>
                            <option value="Seychelles">Seychelles</option>
                            <option value="Sierra Leone">Sierra Leone</option>
                            <option value="Singapore">Singapore</option>
                            <option value="Slovakia">Slovakia</option>
                            <option value="Slovenia">Slovenia</option>
                            <option value="Solomon Islands">Solomon Islands</option>
                            <option value="Somalia">Somalia</option>
                            <option value="South Africa">South Africa</option>
                            <option value="South Georgia and the South Sandwich Islandss">South Georgia and the South Sandwich Islandss</option>
                            <option value="Spain">Spain</option>
                            <option value="Spratly Islands">Spratly Islands</option>
                            <option value="Sri Lanka">Sri Lanka</option>
                            <option value="Sudan">Sudan</option>
                            <option value="Suriname">Suriname</option>
                            <option value="Svalbard">Svalbard</option>
                            <option value="Swaziland">Swaziland</option>
                            <option value="Sweden">Sweden</option>
                            <option value="Switzerland">Switzerland</option>
                            <option value="Syria">Syria</option>
                            <option value="Taiwan">Taiwan</option>
                            <option value="Tajikistan">Tajikistan</option>
                            <option value="Tanzania">Tanzania</option>
                            <option value="Thailand">Thailand</option>
                            <option value="Tobago">Tobago</option>
                            <option value="Toga">Toga</option>
                            <option value="Tokelau">Tokelau</option>
                            <option value="Tonga">Tonga</option>
                            <option value="Trinidad">Trinidad</option>
                            <option value="Tunisia">Tunisia</option>
                            <option value="Turkey">Turkey</option>
                            <option value="Turkmenistan">Turkmenistan</option>
                            <option value="Tuvalu">Tuvalu</option>
                            <option value="Uganda">Uganda</option>
                            <option value="Ukraine">Ukraine</option>
                            <option value="United Arab Emirates">United Arab Emirates</option>
                            <option value="United Kingdom">United Kingdom</option>
                            <option value="Uruguay">Uruguay</option>
                            <option value="USA">USA</option>
                            <option value="Uzbekistan">Uzbekistan</option>
                            <option value="Vanuatu">Vanuatu</option>
                            <option value="Venezuela">Venezuela</option>
                            <option value="Vietnam">Vietnam</option>
                            <option value="Virgin Islands">Virgin Islands</option>
                            <option value="Wales">Wales</option>
                            <option value="Wallis and Futuna">Wallis and Futuna</option>
                            <option value="West Bank">West Bank</option>
                            <option value="Western Sahara">Western Sahara</option>
                            <option value="Yemen">Yemen</option>
                            <option value="Yugoslavia">Yugoslavia</option>
                            <option value="Zambia">Zambia</option>
                            <option value="Zimbabwe">Zimbabwe</option>
                          </select>
                                    
                                    </td>
                                    
                                    </tr>
                                    
                                     <tr>
                                    <td>Arrival date</td><td><input name="arrival_Date" placeholder="dd/mm/yyyy" type="text" style="width:300px;"></td>
                                    
                                    </tr>
                                    
                                     <tr>
                                    <td>Departue date</td><td><input name="departure_Date" type="text" placeholder="dd/mm/yyyy" style="width:300px;"></td>
                                    
                                    </tr>
                                    
                                     <tr>
                                    <td>Number of Adults:</td><td><input name="no_adults" type="text"  style="width:300px;"></td>
                                    
                                    </tr>
                                    
                                     <tr>
                                    <td>Number of childrens:</td><td><input name="no_child" type="text"  style="width:300px;"></td>
                                    
                                    </tr>
                                    
                                     <tr>
                                    <td>Describe Travel plan</td><td><textarea name="travel_plan" rows="7" cols="40" style="width:300px;"></textarea></td>
                                    
                                    </tr>
                                    
                                     <tr>
                                    <td></td><td><input type="submit" name="submit" value="submit"></td>
                                    
                                    </tr>
                                    </table>
                                    
                                    </form>
								</div>
							</div>
							<!-- END TAB 4 -->
                            
						</div>
						<!-- END TAB CONTENT -->
					</div>
					<!-- END #page -->
				</div>
			</div>
			<!-- END .main-contents -->
			
			<!-- START footer -->
			