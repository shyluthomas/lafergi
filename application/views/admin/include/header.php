
	<?php	
	$assetpath 		=  base_url().'assets/backend/';
	$admin_css_path   = $assetpath."css/admin/";
	$admin_js_path    = $assetpath."js/admin/";
	$admin_image_path = $assetpath."images/admin/";
?>


<!DOCTYPE html>

<html lang="en">

<html>

<head>

<meta charset="utf-8" />

<!--[if IE]>

	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>

<![endif]-->

<title><?php if(isset($pagetitle)){ echo ucfirst(stripslashes($pagetitle)); } ?> -  Admin</title>

<meta name="viewport" content="width=device-width">

<link rel="shortcut icon" href="<?php echo $admin_image_path;?>favicon.ico" type="image/x-icon" >

<link rel="stylesheet" type="text/css" href="<?php echo $admin_css_path;?>admin.css">

<script src="<?php echo $admin_js_path;?>jquery-1.8.3.min.js" type="text/javascript"></script>

<script src="<?php echo $admin_js_path;?>ddaccordion.js" type="text/javascript"></script>

<script src="<?php echo $admin_js_path;?>ddaccordionPage.js" type="text/javascript"></script>

<script src="<?php echo $admin_js_path;?>min.js" type="text/javascript"></script>

<script src="<?php echo $admin_js_path;?>file-upload.js" type="text/javascript"></script>

<link rel="stylesheet" type="text/css" href="<?php echo $admin_css_path;?>glossyMenu.css">

<link rel="stylesheet" type="text/css" href="<?php echo $admin_css_path;?>table.css">

<?php if(isset($map['js'])) { echo $map['js']; } ?>

<!--/* calender */-->

<link href="<?php echo $admin_css_path;?>jquery-ui-1.10.3.custom.css" rel="stylesheet">
	<script src="<?php echo $admin_js_path;?>jquery-1.9.1.js"></script>
	<script src="<?php echo $admin_js_path;?>jquery-ui-1.10.3.custom.js"></script>
	<script>
	$(function() {
		
		$( "#datepicker" ).datepicker({
			inline: true
		});
		
	});
	</script>
    
    <!--/* calender */-->

</head>

<body>

<script src="<?php echo $admin_js_path;?>menuTooltip.js" type="text/javascript"></script>

<script src="<?php echo $admin_js_path;?>menutool.js" type="text/javascript"></script>



<!--Content Frome here-->

<header id="mainhead">

	<div class="masterHead"><a href="#"><img src="<?php echo $admin_image_path;?>logo.png" alt="vacanzamondiale"></a></div>

    <div class="pageMainHead">

    	<h1>Master Admin CMS</h1>

        <div class="pageMainTTL">

        	<img src="<?php echo $admin_image_path;?>iconDashboard.png" alt=""><span>Dashboard</span>

        </div>

        <div class="leftButton">

        	<a href="<?php echo site_url(); ?>/admin/logout"><img src="<?php echo $admin_image_path;?>iconLogOut_over.png" title="Log out" alt="Log out" class="freeClass"></a>

         	<a href="<?php echo site_url(); ?>/admin/change_password"><img src="<?php echo $admin_image_path;?>iconViewSite_over.png" title="Change Password" alt="Change Password" class="freeClass"></a>

        </div>

    </div>

</header>



<div class="container1">

<table width="100%" border="0" cellspacing="0" cellpadding="0">

  <tr>

    <td class="leftSideButton"><!--left Menu Starts From here-->

		<table border="0" cellspacing="0" cellpadding="0">

        	<tr class="td1">

            	<td class="td2">

                <div class="glossymenu">

					<a class="menuitem" href="<?php echo site_url();?>/admin"><img src="<?php echo $admin_image_path;?>menuicon_Home.png" alt="">&nbsp Dashboard</a>

						 
                        <a class="menuitem submenuheader" href="" ><img src="<?php echo $admin_image_path;?>menuicon_Offers.png" alt="">&nbsp 
                    Home Page Banner</a>

						<div class="submenu">

						<ul>

						<li><a href="<?php echo site_url(); ?>/backend/home_banner/">Manage Banner</a></li>
						
						</ul>

						</div>
                        
                        <a class="menuitem submenuheader" href="" ><img src="<?php echo $admin_image_path;?>menuicon_Offers.png" alt="">&nbsp 
                    Home</a>

						<div class="submenu">

						<ul>

						<li><a href="<?php echo site_url(); ?>/backend/home/">Manage Home</a></li>
						
						</ul>

						</div>
                    
                    <a class="menuitem submenuheader" href="" ><img src="<?php echo $admin_image_path;?>menuicon_Offers.png" alt="">&nbsp 
                    About us</a>

						<div class="submenu">

						<ul>

						<li><a href="<?php echo site_url(); ?>/backend/who_we_are/">Manage who we are</a></li>
                        <li><a href="<?php echo site_url(); ?>/backend/what_we_offer/">Manage what we offer</a></li>
                        <li><a href="<?php echo site_url(); ?>/backend/vision_mission/">Manage vision and mission</a></li>
						
						</ul>
                            

						</div>
                        
                        
                        
                        
                         <a class="menuitem submenuheader" href="" ><img src="<?php echo $admin_image_path;?>menuicon_Offers.png" alt="">&nbsp 
                    Products</a>

						<div class="submenu">

						<ul>

						<li><a href="<?php echo site_url(); ?>/backend/products/">Manage Prodcuts</a></li>
						
						</ul>

						</div>
                     
                    <a class="menuitem submenuheader" href="" ><img src="<?php echo $admin_image_path;?>menuicon_Offers.png" alt="">&nbsp 
                    Solutions</a>

						<div class="submenu">

						<ul>

						<li><a href="<?php echo site_url(); ?>/backend/solutions/">Manage Solutions</a></li>
						
						</ul>

						</div>
                        
                          <a class="menuitem submenuheader" href="" ><img src="<?php echo $admin_image_path;?>menuicon_Offers.png" alt="">&nbsp 
                    Manage Careers</a>

						<div class="submenu">

						<ul>

						<li><a href="<?php echo site_url(); ?>/backend/Careers/">Manage Careers</a></li>
						
						</ul>

						</div>
                    
                     <a class="menuitem submenuheader" href="" ><img src="<?php echo $admin_image_path;?>menuicon_Offers.png" alt="">&nbsp 
                    Manage Contact</a>

						<div class="submenu">

						<ul>

						<li><a href="<?php echo site_url(); ?>/backend/contact/">Manage Contact</a></li>
						
						</ul>

						</div>
                        
                        
                        <a class="menuitem submenuheader" href="" ><img src="<?php echo $admin_image_path;?>menuicon_Offers.png" alt="">&nbsp 
                    Packages</a>

						<div class="submenu">

						<ul>

						<li><a href="<?php echo site_url(); ?>/backend/packages">Manage Packages</a></li>
                        
                         <?php
						$test = @mysql_query("select * from tbl_packages");
						if(@mysql_num_rows($test)>0){
							while($test_dt = @mysql_fetch_array($test))
							{
						?>
								<li><a href="<?php echo site_url(); ?>/backend/packages/addPackageDetail/<?php echo $test_dt['id'];?>">
								Itenary : <?php echo $test_dt['title'];?></a></li>
                    
                  	  <?php
							}
						}
							?>
						
						</ul>

						</div>
                        
                        <a class="menuitem submenuheader" href="" ><img src="<?php echo $admin_image_path;?>menuicon_Offers.png" alt="">&nbsp 
                    Gallery</a>

						<div class="submenu">

						<ul>

						<li><a href="<?php echo site_url(); ?>/backend/gallery/">Manage Gallery</a></li>
						
						</ul>

						</div>
                        
                        

                	<?php /*?><a class="menuitem submenuheader" href="" ><img src="<?php echo $admin_image_path;?>menuicon_Offers.png" alt="">&nbsp 
                    Blog</a>

						<div class="submenu">

						<ul>

						<li><a href="<?php echo site_url(); ?>/backend/enquiries/">Manage Blog</a></li>
						
						</ul>

						</div><?php */?>

                        
                        <?php /*?>
                        <a class="menuitem submenuheader" href="" ><img src="<?php echo $admin_image_path;?>menuicon_HomeMangment.png" alt="">&nbsp Contact Request</a>

						<div class="submenu">

						<ul>

						<li><a href="<?php echo site_url(); ?>/backend/users/">Enquiries</a></li>
						</ul>

						</div><?php */?>
                        
                        
                        <a class="menuitem submenuheader" href="" ><img src="<?php echo $admin_image_path;?>menuicon_HomeMangment.png" alt="">&nbsp Testimonial </a>

						<div class="submenu">

						<ul>

						<li><a href="<?php echo site_url(); ?>/backend/testimonials/">Manage Testimonial</a></li>
						</ul>

						</div>
                        
                        <a class="menuitem submenuheader" href="" ><img src="<?php echo $admin_image_path;?>menuicon_HomeMangment.png" alt="">&nbsp Hotel Directory </a>

						<div class="submenu">

						<ul>
						<li><a href="<?php echo site_url(); ?>/backend/hoteldirectory/">Manage Hotel Directory</a></li>
						
						

						</ul>

						</div>
                        
                     
                        
                         <a class="menuitem submenuheader" href="" ><img src="<?php echo $admin_image_path;?>menuicon_HomeMangment.png" alt="">&nbsp 
                      Terms & use </a>

						<div class="submenu">

						<ul>

					
						<li><a href="<?php echo site_url(); ?>/backend/privacy/">Privacy Statement</a></li>
                        <li><a href="<?php echo site_url(); ?>/backend/terms/">Terms & use</a></li>
						

						</ul>

						</div>
                        
                        
                         
                        <!--<div class="cal">
                         <div id="datepicker"></div>
                         </div>-->

				</div>

                </td>

            </tr>

        	<tr>

            	<td class="tblFooter">

                © <a href="<?php echo base_url();?>" target="_blank">www.vacanzamondiale.com</a> - 2013 <br>

				Powered by <a href="#" target="_blank">Qatar Readymix LLC</a>

                </td>

            </tr>            

        </table>

    </td><!--Left Menu Ends here-->