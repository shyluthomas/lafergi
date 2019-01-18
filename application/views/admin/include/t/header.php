<?php	
	$admin_css_path = base_url()."css/admin/";
	$admin_js_path = base_url()."js/admin/";
    $admin_image_path = base_url()."images/admin/";
?>

<!DOCTYPE html>

<html lang="en">

<html>

<head>

<meta charset="utf-8" />

<!--[if IE]>

	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>

<![endif]-->

<title><?php if(isset($pagetitle)){ echo ucfirst(stripslashes($pagetitle)); } ?> - iMRTLE Admin</title>

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

	<div class="masterHead"><a href="#"><img src="<?php echo $admin_image_path;?>logo.png" alt="meandmywedding"></a></div>

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

					

                	<a class="menuitem submenuheader" href="" ><img src="<?php echo $admin_image_path;?>menuicon_Offers.png" alt="">&nbsp  CRM</a>

						<div class="submenu">

						<ul>

						<li><a href="<?php echo site_url(); ?>/backend/enquiries/">Enquiries</a></li>
						<li><a href="<?php echo site_url(); ?>/backend/askqn/">Asked questions</a></li>
						<li><a href="<?php echo site_url(); ?>/backend/callbacks/">Callbacks</a></li>
                        <li><a href="<?php echo site_url(); ?>/backend/meetings/">Meetings</a></li>
                        <li><a href="<?php echo site_url(); ?>/backend/foreclosure/">Foreclosure</a></li>
						<li><a href="<?php echo site_url(); ?>/backend/career/form_list">Career</a></li>
						</ul>

						</div>

                    <a class="menuitem submenuheader" href="" ><img src="<?php echo $admin_image_path;?>menuicon_HomeMangment.png" alt="">&nbsp Property Management</a>

						<div class="submenu">

						<ul>

						<li><a href="<?php echo site_url(); ?>/backend/properties/">Our Property</a></li>

						<li><a href="<?php echo site_url(); ?>/backend/onlineproperty/">Online Property</a></li>

						</ul>

						</div>
                        
                        
                         <a class="menuitem submenuheader" href="" ><img src="<?php echo $admin_image_path;?>menuicon_HomeMangment.png" alt="">&nbsp Forms</a>

						<div class="submenu">

						<ul>

						<li><a href="<?php echo site_url(); ?>/backend/forms/">Manage Contarct Forms</a></li>					

						</ul>

						</div>
                        
                        
                        <a class="menuitem submenuheader" href="" ><img src="<?php echo $admin_image_path;?>menuicon_HomeMangment.png" alt="">&nbsp User Management</a>

						<div class="submenu">

						<ul>

						<li><a href="<?php echo site_url(); ?>/backend/users/">Manage User</a></li>
						</ul>

						</div>
                        
                        <a class="menuitem submenuheader" href="" ><img src="<?php echo $admin_image_path;?>menuicon_HomeMangment.png" alt="">&nbsp CMS </a>

						<div class="submenu">

						<ul>

						<li><a href="<?php echo site_url(); ?>/backend/aboutus/">Manage About us</a></li>
						<li><a href="<?php echo site_url(); ?>/backend/footer/">Manage Footer</a></li>
						<li><a href="<?php echo site_url(); ?>/backend/services/">Manage Services</a></li>
                        <li><a href="<?php echo site_url(); ?>/backend/career/">Manage Career</a></li>
                        <li><a href="<?php echo site_url(); ?>/backend/dream_home/">Manage Dream Home Page</a></li>
                         <li><a href="<?php echo site_url(); ?>/backend/feature_prop/">Manage Feature Page</a></li>
                        <li><a href="<?php echo site_url(); ?>/backend/pages/">Manage Pages</a></li>

						</ul>

						</div>
                        
                      <a class="menuitem submenuheader" href="" ><img src="<?php echo $admin_image_path;?>menuicon_HomeMangment.png" alt="">&nbsp 
                      Manage Blog </a>

						<div class="submenu">

						<ul>

						<li><a href="<?php echo site_url(); ?>/backend/blog/">Manage Blog</a></li>

						

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

                © <a href="<?php echo base_url();?>" target="_blank">www.iMyrtleBeachRealEstate.Com</a> - 2013 <br>

				Powered by <a href="http://www.spaniac.com" target="_blank">Spaniac</a>

                </td>

            </tr>            

        </table>

    </td><!--Left Menu Ends here-->