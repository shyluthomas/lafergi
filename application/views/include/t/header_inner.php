 <?php	
	$css_path = base_url()."css/";
	$js_path = base_url()."js/";
	$js1_path = base_url()."js1/";
	$js2_path = base_url()."js2/";
	$image_path = base_url()."images/";
	$path=base_url();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Imyrtle Real Estate</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="" />
<meta name="keywords" content="" />
<meta name="description" content="imyrtle" />
<meta name="generator" content="dreamweaver" />
<meta name="abstract" content="" />
<meta name="key-phrases" content="" />
<meta name="rating" content="General" />
<meta name="copyright" content="imyrtle - 2013" />
<meta name="author" content="imyrtle" />
<meta name="designer" content="Sajid Sulaiman" />
<link rel="shortcut icon" href="images/favicon.ico">
<link href='http://fonts.googleapis.com/css?family=Lato:400,100,300,300italic,700,400italic,700italic,900,900italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Fjalla+One' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Scada:400italic,400,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Roboto:400,300italic,300,900,700,500italic,400italic,500' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,400italic,300' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Yesteryear' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Bitter:400,400italic,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Merriweather+Sans:400,300,300italic,400italic,700' rel='stylesheet' type='text/css'>
 <!--[if lt IE 9]>
          <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<link rel="stylesheet" href="<?php echo $css_path;?>main.css" type="text/css"/>
<link href="<?php echo $css_path;?>empty.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="<?php echo $css_path;?>tabs.css" type="text/css"/>
<link rel="stylesheet" href="<?php echo $css_path;?>jquery-ui.css" />
 

<!-- jquery -->
<script src="http://code.jquery.com/jquery-1.7.1.js"></script>
<script type="text/javascript" src="<?php echo $js1_path;?>jquery.js"></script>





<script  type="text/javascript" src="<?php echo $js_path;?>page.js"></script>
<!-- jquery end-->

<link rel="stylesheet" href="<?php echo $css_path;?>general.css" type="text/css" media="screen" />
<script src="<?php echo $js2_path;?>popup_detail1.js" type="text/javascript"></script>
<script src="<?php echo $js2_path;?>popup_detail2.js" type="text/javascript"></script>
<script src="<?php echo $js2_path;?>popup_detail3.js" type="text/javascript"></script>
<script src="<?php echo $js2_path;?>popup_detail4.js" type="text/javascript"></script>
<script src="<?php echo $js2_path;?>popup_detail5.js" type="text/javascript"></script>
<script src="<?php echo $js2_path;?>popup_detail6.js" type="text/javascript"></script>





<!--Gallery-->
	<link rel='stylesheet' id='camera-css'  href='<?php echo $css_path;?>camera.css' type='text/css' media='all'>
    <style>
		#back_to_camera {
			clear: both;
			display: block;
			height: 80px;
			line-height: 40px;
			padding: 20px;
		}
		.fluid_container {
			margin: 0 auto;
			max-width: 652px;
			width: 90%;
		}
		#tab2 {min-width:100%; max-width:#100%;}
		#map-canvas  {width:100% !important; height:800px !important; }
	</style>
    
	<script type='text/javascript' src='<?php echo $js2_path;?>gallery/jquery.mobile.customized.min.js'></script>
    <script type='text/javascript' src='<?php echo $js2_path;?>gallery/jquery.easing.1.3.js'></script> 
    <script type='text/javascript' src='<?php echo $js2_path;?>gallery/camera.min.js'></script>
    <script>
		jQuery(function(){
			jQuery('#camera_wrap_2').camera({
				height: '400px',
				loader: 'bar',
				pagination: false,
				thumbnails: true
			});
		});
	</script>
<!--Gallery Ends Here--> 



<!--------- search ------------------------>

<link rel="stylesheet" href="<?php echo $css_path;?>search.css">






<!-- Start Robots Meta Tags -->

        <script>
            window.bt = {
                config: {
                    ajaxUrl: '',
                    apiUrl: '',
                    baseUrl: '',
                    dataCookieName: 'BoomTownData',
                    authCookieName: 'BoomTownAuth',
                    tempCookieName: '',
                    defaultLat: 32.797087301581,
                    defaultLng: -79.946136474609,
                    defaultZoom: 12,
                    pageCount: 10,
                    maxviews: 1,
                    nonce: '',
                    suggestApiUrl: 'http://suggest.boomtownroi.com',
                    templateUrl: '',
                    baseThemeUrl: '',
                    themeUrl: '',
                    token: '1D342f1t1F001e0R1B3M1w0A3l0w3W0e260-0l0V3l3J1V1R1202320B0X2e1O0N',
                    viewCookieName: 'PropCount',
                    searchCookieName: 'LastSearch',
                    boardAlias: 'charleston'
                },
                compliance:{
                    HideLocalPics: false,
                    RestrictMLS: '',
                    MaxListingResults: 0
                },
                tenant: {
                    id: 14,
                    formVersion: 1,
                    showAgentDDL: '',
                    lenderChecked: true,
                    conversionID: '1049747993',
                    signupLabel: 'signup'
                },
                visitorDetails: {"_ID":143089683,"Username":"","Password":"","IsRegistered":true,"TenantID":14,"FirstName":"Sajid","LastName":"Sulaiman","FavoriteCount":0,"FavoriteSearchCount":1,"AgentID":1328,"BestPhone":"","City":"Bangalore","State":"19","ZipCode":"","Favorites":[]}
            };
        </script>
       
       <script>
	   
	   function update_price_max(price_max)
	   {
		  var tx1=document.getElementById('search-min-price-input').value.replace('$', '');
		  var tx2 = tx1.replace(',', '');
		  var price_min=parseInt(tx2,10);
		 // alert(price_min);		 
		   var price_ma=parseInt(price_max,10);
		    //alert(price_ma);
		   if(price_ma < price_min)
		   {
			  // alert('keri');		   
		   //	var val=(price_ma-10000);
		   var val=0;
		   var sel='<input value="$'+val+'" class="js-placeholder search-price-input" id="search-min-price-input" placeholder="$ No Min" type="text"  name="adv_min_price" onChange="return update_price_min(this.value)">';		 
		  	document.getElementById("price_max_sel").innerHTML=sel;
		   }	  
		   
			return false; 
	   }
	   
	    function update_price_min(price_min)
	   {
		  
		  if(document.getElementById('search-max-price-input').value!='')
		  {
			  var tx1=document.getElementById('search-max-price-input').value.replace('$', '');
			  var tx2 = tx1.replace(',', '');
			  var price_max=parseInt(tx2,10);
			  //alert(tx2);			 
			   var price_mi=parseInt(price_min,10);
				//alert(price_mi);
			   if(price_max < price_mi)
			   {
				  // alert('keri');		   
				var val=(price_mi+25000);
				//var val=0;
			   var sel='<input value="$'+val+'" class="js-placeholder search-price-input" id="search-max-price-input" placeholder="$ No Max" type="text" name="adv_max_price" onChange="return update_price_max(this.value)">';			 
				document.getElementById("price_min_sel").innerHTML=sel;
			   }
			  
		 }
		 return false;
	   }
	   
	   </script>
       
       
<!--------- search end ------------------------>
<?php

	$autocomp=@mysql_query("select distinct(keyword_short) from keywords");
	$key_fact='';
	while($autocomp_dt=@mysql_fetch_array($autocomp))
	{
		$key_fact.='"'.$autocomp_dt['keyword_short'].'",';	
	}
	

?>

  <script src="<?php echo $js_path;?>jquery-ui.js"></script>
  <script>
  $(function() {
    var availableTags = [
       <?php echo $key_fact;?>    
	];
    $( "#tags" ).autocomplete({
      source: availableTags
    });
  });
  </script>

<!--Map-->


<script>
var mls='<?php if(isset($onlinepro[0]['L_ListingID'])){echo $onlinepro[0]['L_ListingID'];}else echo 0;?>';
$( document ).ready(function() {
  Favorite_count(mls);
  
});


function Favorite_count(mls)
	{
				
		$.ajax({
                                
                                type: 'post',
                                dataType: 'json',
                                url: "<?php echo site_url().'/user/favorite_count/';?>/"+mls,
                                data:{mls: $('#favourite_pro_id').val()},
                                
                                success: function(data) {
                                    
                					//alert(data.act);
                                    if(data.act == 'A'){
										if(data.flag==1){
												$('#fav_id').addClass('fav_active_ritle');
											}
										$( "#favrite" ).fadeOut("slow").fadeIn("slow").html('<a href="<?php echo site_url().'/user/favorite_list';?>" >favorite('+data.favcount+')</a>');
										 
                                    }
                                    
                                    
                                    if(data.act == 'I'){
										$( "#favrite" ).fadeOut("slow").fadeIn("slow").html('<a href="<?php echo site_url().'/user/favorite_list';?>" >favorite('+data.favcount+')</a>');
                                    }
                                } 
                                
                                
                            });

		
		
	}
</script>




<script type="text/javascript">
function show()
{
	//alert("hai");
	$('.tog').slideToggle();

}

</script>




</head>

<body onLoad="">
<!------Start Header------->
<div class="header">
<div class="headerInn">
	<div class="left">
    	<ul>
       <li><a href="<?php echo base_url();?>" <?php if(isset($page) && ($page=='home')){ ?>class="active" <?php }?> >Home</a></li>
       <li><a href="<?php echo site_url();?>/map/" <?php if(isset($page) && ($page=='map')){ ?>class="active" <?php }?>>Map</a></li>
        <li><a href="<?php echo site_url();?>/search" <?php if(isset($page) && ($page=='search')){ ?>class="active" <?php }?>>Search Homes</a></li>
        <li><a href="<?php echo site_url();?>/newhomes" <?php if(isset($page) && ($page=='new_home')){ ?>class="active" <?php }?>>New Homes</a></li>       
        <li><a href="<?php echo site_url();?>/property" <?php if(isset($page) && ($page=='property_management')){ ?>class="active" <?php }?>>Property Mgmt.</a></li>
      
        <li><a href="<?php echo site_url();?>/aboutus" <?php if(isset($page) && ($page=='about')){ ?>class="active" <?php }?>>About Us</a></li>
        <li><a href="<?php echo site_url();?>/career" <?php if(isset($page) && ($page=='career')){ ?>class="active" <?php }?>>Careers</a></li>
        <li><a href="<?php echo site_url();?>/blog" <?php if(isset($page) && ($page=='blog')){ ?>class="active" <?php }?>>Blog</a></li>
         <li><a href="<?php echo site_url();?>/contact" <?php if(isset($page) && ($page=='contact')){ ?>class="active" <?php }?>>Contact</a></li>
          
         <?php
		 $link=site_url();
		 $menu=@mysql_query("select * from tbl_pages where (page_status='A')");
		 if(@mysql_num_rows($menu)>0)
		 {
			while($menu_dt=@mysql_fetch_array($menu))
			{
				
				echo "<li><a href='$link/pages/view/".$menu_dt['page_id']."'>".$menu_dt['page_title']."</a></li>";
			}
		 }
		 ?>
        </ul>
    </div>
    
    <div class="right">
    	<ul>
        <?php if($this->session->userdata('user_id')){?>
       		 <li><a href="<?php echo site_url();?>/user/signout" >Sign Out</a></li>
              <li><a href="<?php echo site_url();?>/user/" >My Account</a></li>
        <?php }else {//end if?>
        
        <li><a href="<?php echo site_url();?>/user/signin" >Sign In</a></li>
        <li><a href="<?php echo site_url();?>/user/signup" >Sign up</a></li>
        <?php } //else ends here?>
         <li id="favrite"><a href="#" >Favorite(0)</a></li>
        </ul>
    </div>

</div>
</div>
<!-----End of Header------->
<!------Inner Banner---->
<div class="subBanner">
<div class="subBannerInn">
	<div class="logo"><a href="<?php echo base_url();?>"><img src="<?php echo $path;?>images/era_inn.png" alt="Imyrtle Real Estate"></a></div>
    <div class="right">
    <!-----------------------------------------Search Bar Here--------------------------------------------------------> 
    <form name="advanced_search" method="post" enctype="multipart/form-data" action="<?php echo site_url();?>/search/inner">
<div class="src_outter">
        
<div class="global-header-inner">

        <div class="oth_bar">
        	<input type="text" class="oth_bar_filed" name="ser_keyword" placeholder="Type Any Area ,City ,Zip..." id="tags" >
            
        </div>

        <!-- Search Dropdowns -->

        <div class="search-dropdowns ui-dropdowns-inverted">

            <!-- Price Search Dropdown -->

            <div class="price-dropdown ui-dropdown ui-sbar-mega-gradient">

                <h2 title="Price">Price <b class="ui-caret"></b></h2>

                <div class="ui-dropdown-menu">

                    <div class="price-dd-input">

                        <label class="search-min-price">
							<div id="price_max_sel">
                           <input value="" class="js-placeholder search-price-input" id="search-min-price-input" placeholder="$ No Min" type="text" onChange="return update_price_min(this.value)" name="adv_min_price" >
							</div>
                        </label>

                 <select style="z-index: 10; opacity: 0;" class="search-price-select btn-select-dropdown selected"    onChange="return update_price_min(this.value)" name="adv_min_price1"> 
                 				<option value="" >Select</option>
                            		 <?php
										for($i=25000; ($i<=10000000);)
										{
											?>
                                            <option value="<?php echo $i; ?>">$ <?php echo number_format($i); ?></option>
                                            <?php
											$i=$i+25000;
										}
									?>
                          
                        </select><span class="btn btn-select-span"><b class="ui-caret"></b></span>

                    </div>

                    <b><i>to</i></b>

                    <div class="price-dd-input">

                        <label class="search-max-price">
							<div id="price_min_sel">
                          <input value="" class="js-placeholder search-price-input" id="search-max-price-input" placeholder="$ No Max" type="text" onChange="return update_price_max(this.value)" name="adv_max_price" >
</div>
                        </label>
						
                        <select style="z-index: 10; opacity: 0;" class="search-price-select btn-select-dropdown selected"   onChange="return update_price_max(this.value)" name="adv_max_price1">
                        
                        			<option value="">Select</option>
                         			 <?php
										for($i=10000000; ($i>=25000);)
										{
											?>
                                            <option value="<?php echo $i; ?>">$ <?php echo number_format($i); ?></option>
                                            <?php
											$i=$i-25000;
										}
									?>
                                 
                                     
                        </select>
                          
                        <span class="btn btn-select-span"><b class="ui-caret"></b></span>

                    </div>

                    <div class="btn-shell">

                        <button class="btn btn-primary" id="search-price-apply-btn">OK</button>

                    </div>

                </div><!-- .ui-dropdown-menu -->
            </div><!-- .price-dropdown -->

            <!-- Type Search Dropdown -->


            <div class="type-dropdown ui-dropdown home-hide">

                <h2 title="Type">Type <b class="ui-caret"></b></h2>

                <div class="ui-dropdown-menu">

                    <fieldset class="type-fieldset" id="type-fieldset">
                        <script>
                        window.bt.config.proptypes = jQuery.parseJSON('{"SF":{"key":"SF","DDName":"Homes (single-family)","TagName":"Homes","AboveFold":true},"C":{"key":"C","DDName":"Condos","TagName":"Condos","AboveFold":true},"VT":{"key":"VT","DDName":"Townhouses","TagName":"Townhouses","AboveFold":true},"VC":{"key":"VC","DDName":"Land & Lots","TagName":"Land & Lots","AboveFold":true},"M":{"key":"M","DDName":"Manufactured Home","TagName":"Manufactured Home","AboveFold":false},"MF":{"key":"MF","DDName":"Multi-Family","TagName":"Multi-Family","AboveFold":false},"CM":{"key":"CM","DDName":"Commercial","TagName":"Commercial","AboveFold":false},"B":{"key":"B","DDName":"Boat Slip","TagName":"Boat Slip","AboveFold":false},"SI":{"key":"SI","DDName":"Shared Interest","TagName":"Shared Interest","AboveFold":false},"CL":{"key":"CL","DDName":"Commercial-Lease","TagName":"Commercial-Lease","AboveFold":false}}');
                        </script>
                        <div class="wrapped-checkbox-set wrapped-input-set wrapped-stacked-set">
                        
                          
                        <label  >
                                    <input name="prop_type"  value="" type="radio" checked="checked" >
                                    <span>Any</span>
                                </label>
                                                            <label >
                                    <input name="prop_type"  value="DETACHED" type="radio" >
                                    <span>DETACHED</span>
                                </label>
                                                            <label>
                                    <input name="prop_type" value="MODULAR" type="radio">
                                    <span>MODULAR</span>
                                </label>
                                                            <label >
                                    <input name="prop_type"  value="MANUFACTURED WITH LAND" type="radio">
                                    <span>MANUFACTURED WITH LAND</span>
                                </label>
                                                            <label >
                                    <input name="prop_type"  value="SEMI-DETACHED" type="radio">
                                    <span>SEMI-DETACHED</span>
                                </label>
                         </div>
                         
                          <div class="wrapped-set-section">
                           <!-- <a class="fieldset-toggle" href="#additional-types" id="toggle-type-fieldset" title="More Types">
                                More Types
                            </a>-->
                        </div>

                    </fieldset>

                    
                    <div class="btn-shell">
                        <button class="btn btn-primary" id="search-type-apply-btn">OK</button>
                        <!-- <button class="btn clear-menu" id="search-type-clear-btn">Clear</button> -->
                    </div>

                </div><!-- .ui-dropdown-menu -->
            </div><!-- .type-dropdown -->

            <!-- Beds Search Dropdown -->

            <div class="beds-dropdown ui-dropdown ui-sbar-mega-gradient autoclose">

                <h2 title="Beds">Beds <b class="ui-caret"></b></h2>

                <div class="ui-dropdown-menu">

                    <fieldset class="wrapped-radio-set wrapped-input-set wrapped-stacked-set">

                        <label class="checked">
                            <input checked="checked" name="minbeds" value="" type="radio">
                            <span>Any</span>
                        </label>

                        <label>
                            <input name="minbeds" value="2" type="radio">
                            <span>2+</span>
                        </label>

                        <label>
                            <input name="minbeds" value="3" type="radio">
                            <span>3+</span>
                        </label>

                        <label>
                            <input name="minbeds" value="4" type="radio">
                            <span>4+</span>
                        </label>

                        <label>
                            <input name="minbeds" value="5" type="radio">
                            <span>5+</span>
                        </label>

                    </fieldset>

                </div><!-- .ui-dropdown-menu -->

            </div><!-- .beds-dropdown -->

            <!-- Baths Search Dropdown -->

            <div class="baths-dropdown ui-dropdown ui-sbar-mega-gradient autoclose home-hide">

                <h2 title="Baths">Baths <b class="ui-caret"></b></h2>

                <div class="ui-dropdown-menu">

                <fieldset class="wrapped-radio-set wrapped-input-set wrapped-stacked-set">

                    <label class="checked">
                        <input checked="checked" name="minbaths" value="" type="radio">
                        <span>Any</span>
                    </label>

                    <label>
                        <input name="minbaths" value="2" type="radio">
                        <span>2+</span>
                    </label>

                    <label>
                        <input name="minbaths" value="3" type="radio">
                        <span>3+</span>
                    </label>

                    <label>
                        <input name="minbaths" value="4" type="radio">
                        <span>4+</span>
                    </label>

                    <label>
                        <input name="minbaths" value="5" type="radio">
                        <span>5+</span>
                    </label>

                </fieldset>

                </div><!-- .ui-dropdown-menu -->

            </div><!-- .baths-dropdown -->

            <!-- PowerSearch Dropdown -->

            <div class="powersearch-dropdown ui-dropdown home-hide" id="powersearch-dropdown">

                <h2 title="More">More <b class="ui-caret"></b></h2>

            </div><!-- #powersearch-dropdown -->

            <div class="ui-search-mega-action ui-sbar-mega-gradient home-show">

                <a class="btn btn-primary" href="#show-me-the-results" id="gobutton" title="View properties for sale">Go!</a>

            </div>

            <a class="home-more-options-link" href="#more-options" id="search-more-options" title="More Options"><span class="link-text">more options</span> <i class="link-arrow">&gt;</i></a>

        </div><!-- .search-dropdowns -->

        <div class="powersearch-menu ui-dropdown-menu ui-dropdown-menu-right ps-popular-submenu-open" id="powersearch-menu">

        

<div class="ps-submenu ps-popular-submenu" id="ps-submenu1">

    <fieldset class="ps-fieldset ps-select-set uno">

        <label class="ps-select-label">SqFt</label>

        <select name="minsqft" class="ps-select" style="width: 140px;">
            			<option  value="">Any</option>  
                        <?php
						$i=1001;
						while($i<10000)
						{
							$k=($i+99);
							$val=($i.'-'.$k);
						?>
							 <option value="<?php echo $val;?>"><?php echo $val;?></option>
						<?
							$i=($k+1); 
						}
						?>                    
                       
                    </select>

        <b><i></i></b>
		<input type="hidden" name="maxsqft" value="">
        <!--<select name="maxsqft" class="ps-select">
        <option  value="">Any</option>
            			<option value="1001-1100">1001-1100</option>
                        <option value="1101-1200">1101-1200</option>
                        <option value="1201-1300">1201-1300</option>
                        <option value="1301-1400">1301-1400</option>
                        <option value="1401-1500">1401-1500</option>
                        <option value="2250">2,250</option>
                        <option value="2500">2,500</option>
                        <option value="2750">2,750</option>
                        <option value="3000">3,000</option>
                        <option value="3500">3,500</option>
                        <option value="4000">4,000</option>
                        <option value="5000">5,000</option>
                    </select>-->

        <br>

        <label class="ps-select-label">Acres</label>

        <select name="minacres" class="ps-select">
           				 <option  value="">Any</option>
                        <option value="0.15">1/8</option>
                        <option value="0.25">1/4</option>
                        <option value="0.5">1/2</option>
                        <option value="0.75">3/4</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="5">5</option>
                        <option value="10">10</option>
                        <option value="20">20</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                    </select>

        <b><i>to</i></b>

        <select name="maxacres" class="ps-select">
            			<option  value="">Any</option>
                        <option value="0.15">1/8</option>
                        <option value="0.25">1/4</option>
                        <option value="0.5">1/2</option>
                        <option value="0.75">3/4</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="5">5</option>
                        <option value="10">10</option>
                        <option value="20">20</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                    </select>

        <br>

       

    </fieldset>

    <fieldset class="ps-fieldset ps-select-set dos">

        <label class="ps-select-label">Year Built</label>

        <select name="min_year" class="ps-select">
            			<option  value="">Any</option>
                        <option value="2013">2013</option>
                        <option value="2012">2012</option>
                        <option value="2011">2011</option>
                        <option value="2010">2010</option>
                        <option value="2009">2009</option>
                        <option value="2008">2008</option>
                        <option value="2007">2007</option>
                        <option value="2006">2006</option>
                        <option value="2005">2005</option>
                        <option value="2000">2000</option>
                        <option value="1995">1995</option>
                        <option value="1990">1990</option>
                        <option value="1980">1980</option>
                        <option value="1970">1970</option>
                        <option value="1960">1960</option>
                        <option value="1950">1950</option>
                        <option value="1940">1940</option>
                        <option value="1930">1930</option>
                        <option value="1920">1920</option>
                        <option value="1900">1900</option>
                    </select>

        <b><i>to</i></b>

        <select name="max_year" class="ps-select">
            			<option  value="">Any</option>
                        <option value="2013">2013</option>
                        <option value="2012">2012</option>
                        <option value="2011">2011</option>
                        <option value="2010">2010</option>
                        <option value="2009">2009</option>
                        <option value="2008">2008</option>
                        <option value="2007">2007</option>
                        <option value="2006">2006</option>
                        <option value="2005">2005</option>
                        <option value="2000">2000</option>
                        <option value="1995">1995</option>
                        <option value="1990">1990</option>
                        <option value="1980">1980</option>
                        <option value="1970">1970</option>
                        <option value="1960">1960</option>
                        <option value="1950">1950</option>
                        <option value="1940">1940</option>
                        <option value="1930">1930</option>
                        <option value="1920">1920</option>
                        <option value="1900">1900</option>
                    </select>

        <br>

               
        
    </fieldset>

    <fieldset class="ps-fieldset ps-select-set tres">
    
    <label class="ps-select-label"># Days on Site</label>

        <select name="construction_status" class="ps-select">
            <option selected="selected" value="">Any</option>
                        <option value="New listing">New Listing</option>
                        <option value="">Less than 3days</option>
                        <option value="">Less than 7days</option>    
                        <option value="">Less than 14days</option>    
                        <option value="">Less than 30days</option>                       
                    </select>

       <!-- <label class="ps-select-label"># Construction Status</label>

        <select name="construction_status" class="ps-select">
            <option selected="selected" value="">Any</option>
                        <option value="Never Occupied">Never Occupied</option>
                        <option value="To Be Built">To Be Built</option>
                        <option value="Resale">Resale</option>                       
                    </select>-->
	<input type="hidden" name="construction_status" value="">
        <br>

        <label class="ps-select-label">Style</label>

        <select name="style" class="ps-select">
            <option selected="selected" value="">Any</option>
                        <option value="Ranch">Ranch</option>
                        <option value="Raised Beach">Raised Beach</option>
                        <option value="Split Level">Split Level</option>
                        <option value="Contemporary">Contemporary</option>
                        <option value="Colonial">Colonial</option>
                        <option value="Low Country">Low Country</option>
                        <option value="Traditional">Traditional</option>
                        <option value="Patio Home">Patio Home</option>
                    </select>

    </fieldset>

    <div class="popular-features">

        <h4>Popular Features</h4>

        <fieldset class="powersearch-checkbox-set wrapped-checkbox-set wrapped-input-set ps-fieldset">

            <label title="Has Photos">
                <input name="balcony" value="Photos" type="checkbox">
                Has Photos
            </label>

            		
                      <label title="Waterfront">
                    <input name="waterfront" value="Waterfront" type="checkbox">
                    Waterfront                </label>
                                <label title="New Construction">
                    <input name="elevator" value="Oceanfront" type="checkbox">
                    Oceanfront               </label>
                                <label title="Garage">
                    <input name="pool" value="Pool" type="checkbox">
                    Pool               </label>
                                <label title="Pool">
                    <input name="boat" value="yes" type="checkbox">
                    Possession               </label>
                                <label title="Fireplace">
                    <input name="outside" value="For Sale" type="checkbox">
                    Sale               </label>
                     <label title="none">
                    <input name="none" value="" type="checkbox" checked disabled>
                    None
                    </label>
                               
                            

        </fieldset>
    </div>
</div>

<div class="ps-submenu ps-comprehensive-submenu" id="ps-submenu2">

    <a class="js-toggle-ps-submenu btn btn-block hide-small-min ps-submenu-toggle" href="#see-popular" title="Back to Popular Features">Back to Popular Features</a>

                            <h4 class="first-of-type">Community Features</h4>
            <fieldset class="powersearch-checkbox-set wrapped-checkbox-set wrapped-input-set ps-fieldset">

                                <label title="Community Pool">
                    <input name="feature" value="HCPOOL" type="checkbox">
                    Community Pool                </label>
                                <label title="Gated Community">
                    <input name="feature" value="GT" type="checkbox">
                    Gated Community                </label>
                                <label title="Golf Community">
                    <input name="feature" value="GOLFC" type="checkbox">
                    Golf Community                </label>
                                <label title="Horse Property">
                    <input name="feature" value="HP" type="checkbox">
                    Horse Property                </label>
                            </fieldset>
                                <h4 class="first-of-type">Property Features</h4>
            <fieldset class="powersearch-checkbox-set wrapped-checkbox-set wrapped-input-set ps-fieldset">

                                <label title="Cul-De-Sac">
                    <input name="feature" value="ICDS" type="checkbox">
                    Cul-De-Sac                </label>
                                <label title="Green / LEED">
                    <input name="feature" value="G" type="checkbox">
                    Green / LEED                </label>
                                <label title="Handicap Equipped">
                    <input name="feature" value="HC" type="checkbox">
                    Handicap Equipped                </label>
                                <label title="Historic Property">
                    <input name="feature" value="H" type="checkbox">
                    Historic Property                </label>
                                <label title="InLaw Suite">
                    <input name="feature" value="HMTIL" type="checkbox">
                    InLaw Suite                </label>
                                <label title="New Construction">
                    <input name="feature" value="N" type="checkbox">
                    New Construction                </label>
                                <label title="On Golf Course">
                    <input name="feature" value="GC" type="checkbox">
                    On Golf Course                </label>
                            </fieldset>
                                <h4 class="first-of-type">Waterfront</h4>
            <fieldset class="powersearch-checkbox-set wrapped-checkbox-set wrapped-input-set ps-fieldset">

                                <label title="Beach (On or Near)">
                    <input name="feature" value="B" type="checkbox">
                    Beach (On or Near)                </label>
                                <label title="Creek Front">
                    <input name="feature" value="ICF" type="checkbox">
                    Creek Front                </label>
                                <label title="Deep Water">
                    <input name="feature" value="D" type="checkbox">
                    Deep Water                </label>
                                <label title="Lake Front">
                    <input name="feature" value="L" type="checkbox">
                    Lake Front                </label>
                                <label title="River Front">
                    <input name="feature" value="R" type="checkbox">
                    River Front                </label>
                                <label title="Waterfront">
                    <input name="feature" value="W" type="checkbox">
                    Waterfront                </label>
                            </fieldset>
                                <h4 class="first-of-type">View</h4>
            <fieldset class="powersearch-checkbox-set wrapped-checkbox-set wrapped-input-set ps-fieldset">

                                <label title="Lagoon View">
                    <input name="feature" value="ILAGV" type="checkbox">
                    Lagoon View                </label>
                                <label title="Lake View">
                    <input name="feature" value="ILKV" type="checkbox">
                    Lake View                </label>
                                <label title="Marsh View">
                    <input name="feature" value="IMRSHV" type="checkbox">
                    Marsh View                </label>
                                <label title="Ocean View">
                    <input name="feature" value="IOV" type="checkbox">
                    Ocean View                </label>
                                <label title="River View">
                    <input name="feature" value="RV" type="checkbox">
                    River View                </label>
                            </fieldset>
                                <h4 class="first-of-type">Exterior Features</h4>
            <fieldset class="powersearch-checkbox-set wrapped-checkbox-set wrapped-input-set ps-fieldset">

                                <label title="Carport">
                    <input name="feature" value="HCARP" type="checkbox">
                    Carport                </label>
                                <label title="Dock">
                    <input name="feature" value="HDOCK" type="checkbox">
                    Dock                </label>
                                <label title="Fenced">
                    <input name="feature" value="ISFENCE" type="checkbox">
                    Fenced                </label>
                                <label title="Garage">
                    <input name="feature" value="GR" type="checkbox">
                    Garage                </label>
                                <label title="Pool">
                    <input name="feature" value="P" type="checkbox">
                    Pool                </label>
                                <label title="Pool - Above Ground">
                    <input name="feature" value="HPAGP" type="checkbox">
                    Pool - Above Ground                </label>
                                <label title="Pool - Below Ground">
                    <input name="feature" value="HPIGP" type="checkbox">
                    Pool - Below Ground                </label>
                            </fieldset>
                                <h4 class="first-of-type">Interior Features</h4>
            <fieldset class="powersearch-checkbox-set wrapped-checkbox-set wrapped-input-set ps-fieldset">

                                <label title="Basement">
                    <input name="feature" value="HBASE" type="checkbox">
                    Basement                </label>
                                <label title="Elevator">
                    <input name="feature" value="HE" type="checkbox">
                    Elevator                </label>
                                <label title="Fireplace">
                    <input name="feature" value="F" type="checkbox">
                    Fireplace                </label>
                                <label title="Master Downstairs">
                    <input name="feature" value="MD" type="checkbox">
                    Master Downstairs                </label>
                            </fieldset>
                                    </div>





<!-- hidden --->

<div class="tog" id="cnt" style="display:none; height: 200px;
overflow-y: scroll;">



<div class="ps-submenu ps-popular-submenu" id="ps-submenu1">

    <div class="popular-features">

        <h4>COMMUNITY FEATURES</h4>

        <fieldset class="powersearch-checkbox-set wrapped-checkbox-set wrapped-input-set ps-fieldset">

           
                      <label title="Adult">
                    <input name="amenities_adult" value="Restrictions" type="checkbox">
                    Adult Community                </label>
                                <label title="New Community">
                    <input name="amenities_pool" value="Pool" type="checkbox">
                    Community Pool               </label>
                                <label title="Gated">
                    <input name="amenities_gated" value="Gated Community" type="checkbox">
                    Gated Community               </label>
                                
                                <label title="Has HOA ">
                    <input name="amenities_hoa" value="Home Owners Assoc. Fees" type="checkbox">
                    Has HOA               </label>
                     <label title="HOA" class="checked">
                    <input name="amenities_no_hoa" value="" type="checkbox" >
                    No HOA
                    </label>
                    
                    <label title="Tennis" class="checked">
                    <input name="amenities_tennis" value="Tennis Court" type="checkbox" >
                     Tennis Community
                    </label>
                               
                            

        </fieldset>
    </div>
</div>





<div class="ps-submenu ps-popular-submenu" id="ps-submenu1">

    <div class="popular-features">

        <h4>PROPERTY FEATURES</h4>

        <fieldset class="powersearch-checkbox-set wrapped-checkbox-set wrapped-input-set ps-fieldset">

           
            		
                      <label title="Cul-De-Sac">
                    <input name="Cul_De_Sac" value="Cul-De-Sac  " type="checkbox">
                    Cul-De-Sac                </label>
                                <label title="Handicap">
                    <input name="exterior_fet_handicaped" value="Handicap Access" type="checkbox">
                     Handicap Equiped               </label>
                                <label title="Historic1">
                    <input name="" value="sss" type="checkbox">
                    Historic Property               </label>
                               
                                <label title="Construction">
                    <input name="construction_sta" value="Never Occupied" type="checkbox">
                     New Construction               </label>
                     
                   <!-- 
                    <label title="PetsAllowed" >
                    <input name="Pets" value="Pets" type="checkbox" >
                    Pets Allowed
                    </label>
                    
                    <label title="PublicWater" >
                    <input name="PublicWater" value="PublicWater" type="checkbox" >
                    Public Water
                    </label>
                    
                    <label title="Septic" >
                    <input name="Septic" value="Septic" type="checkbox" >
                    Septic
                    </label>
                    <label title="Sewer" >
                    <input name="Septic" value="Septic" type="checkbox" >
                    Sewer
                    </label>-->
                               
                            

        </fieldset>
    </div>
</div>





<div class="ps-submenu ps-popular-submenu" id="ps-submenu1">

    <div class="popular-features">

        <h4>WATERFRONT</h4>

        <fieldset class="powersearch-checkbox-set wrapped-checkbox-set wrapped-input-set ps-fieldset">

            <label title="Channel">
                <input name="waterfront_channel" value="Channel" type="checkbox">
                Channel Front
            </label>

            		
                     <label title="waterfront_det11">
                    <input name="waterfront_icw" value="On ICW" type="checkbox">
                    Intracoastal Front               </label>
                                <label title="waterfront_det12">
                    <input name="waterfront_lake" value="Lake" type="checkbox">
                    Lake Front              </label>
                                <label title="waterfront_det13">
                    <input name="waterfront_ocean" value="Oceanfront" type="checkbox">
                    Ocean Front               </label>
                                <label title="waterfront_det14">
                    <input name="waterfront_river" value="River" type="checkbox">
                    River Front              </label>
                                <label title="waterfront_de1t">
                    <input name="waterfront" value="waterfront" type="checkbox">
                    Waterfront               </label>
                     
                               
                            

        </fieldset>
    </div>
</div>

<div class="ps-submenu ps-popular-submenu" id="ps-submenu1">

    <div class="popular-features">

        <h4>VIEW</h4>

        <fieldset class="powersearch-checkbox-set wrapped-checkbox-set wrapped-input-set ps-fieldset">

            <label title="city1 limit">
                <input name="view_outside" value="Outside City Limits" type="checkbox">
                Outside City Limits
            </label>

            		
                      <label title="view_det1">
                    <input name="view_crek" value="Inlet/Creek" type="checkbox">
                    Creek View               </label>
                                <label title="view_det11">
                    <input name="view_golf" value="On Golf Course" type="checkbox">
                     Golf Course View             </label>
                                <label title="view_det11">
                    <input name="view_lake" value="Lakes" type="checkbox">
                    Lake View              </label>
                                <label title="view_det111">
                    <input name="view_marsh" value="Marsh View" type="checkbox">
                    Marsh View             </label>
                                <label title="view_det1111">
                    <input name="view_ocean" value="Ocean View" type="checkbox">
                    Ocean View               </label>
                     
                               
                            

        </fieldset>
    </div>
</div>


<div class="ps-submenu ps-popular-submenu" id="ps-submenu1">

    <div class="popular-features">

        <h4>EXTERIOR FEATURES</h4>

        <fieldset class="powersearch-checkbox-set wrapped-checkbox-set wrapped-input-set ps-fieldset">

            <label title="Carport">
                <input name="exterior_fet_carport" value="Front Porch" type="checkbox">
                Carport
            </label>

            		
                      <label title="Deck">
                    <input name="exterior_fet_deck" value="Deck" type="checkbox">
                    Deck               </label>
                                <label title="Dock">
                    <input name="exterior_fet_dock" value="Boat Dock" type="checkbox">
                     Dock             </label>
                                <label title="Fenced">
                    <input name="exterior_fet_fence" value="Fencing" type="checkbox">
                    Fenced             </label>
                                <label title="Garage">
                    <input name="exterior_fet_garage" value="Other" type="checkbox">
                    Garage            </label>
                                <label title=" Garage - Attached  ">
                    <input name="exterior_fet_garage_attac" value="Outside Storage Attached" type="checkbox">
                     Garage - Attached               </label>
                      <label title="Garage - Dettached">
                    <input name="exterior_fet_garage_dettach" value="Outside Storage Detached" type="checkbox">
                     Garage - Dettached               </label>
                     <label title="Hot Tub   ">
                    <input name="exterior_fet_tub" value="Spa/Hot Tub" type="checkbox">
                     Hot Tub              </label>
                     <label title="Patio ">
                    <input name="exterior_patio" value="Patio" type="checkbox">
                     Patio              </label>
                      <label title="exterior-pool">
                    <input name="exterior_fet_pool" value="Pool-Outdoor on Property" type="checkbox">
                     Pool              </label> 
                     <label title="Sprinkler">
                    <input name="exterior_fet_sprinkler" value="Lawn Sprinkler" type="checkbox">
                     Sprinkler System              </label>
                               
                             

        </fieldset>
    </div>
</div>

<div class="ps-submenu ps-popular-submenu" id="ps-submenu1">

    <div class="popular-features">

        <h4>INTERIOR FEATURES</h4>

        <fieldset class="powersearch-checkbox-set wrapped-checkbox-set wrapped-input-set ps-fieldset">

            <label title="interior_fet">
                <input name="interior_fet_air" value="Electric Air Filter" type="checkbox">
                 Central Air Condition
            </label>

            		
                      <label title="Elevatoree">
                    <input name="interior_fet_elevator" value="Elevator" type="checkbox">
                    Elevators               </label>
                                <label title="view_det56">
                    <input name="interior_fet_fire" value="Fireplace" type="checkbox">
                     Fireplace             </label>
                                <label title="view_det6">
                    <input name="interior_fet_furnish" value="Furnished" type="checkbox">
                    Furnished             </label>
                                
                                <label title="view_det1">
                    <input name="interior_fet_hrd_flor" value="" type="checkbox">
                     Hardwood Floors               </label>
                      <label title="view_det51">
                    <input name="interior_fet_jacuzi" value="Spa/Hot Tub" type="checkbox">
                     Jacuzzi              </label>
                     <label title="view_det26">
                    <input name="interior_fet_master" value="Sauna Room" type="checkbox">
                      Master Downs              </label>
                     <label title="view_det67">
                    <input name="interior_fet_sky" value="Skylights" type="checkbox">
                     Skylights              </label>
                      <label title="view_det78">
                    <input name="interior_fet_dryer" value="Washer/Dryer" type="checkbox">
                      Washer / Dryer             </label> 
                     <label title="view_det65">
                    <input name="interior_fet_wetbar" value="Central Vacuum" type="checkbox">
                     Wet Bar             </label>
                               
                             

        </fieldset>
    </div>
</div>







</div>

<!-- hidden end --->








<!-- button toggle --->

<div class="powersearch-controls" id="powersearch-controls">

    <a class="btn btn-default btn-lg" onclick="show()">
        See All Features
    </a>
    <a class="btn btn-default btn-lg" title="Back to Popular Features" style="display:none;">
        Back to Popular Features
    </a>

</div>


<!-- button toggle --->





        </div>

  

        </div>
        </div>
     <div class="other_src_outter">
 <input type="submit" value="FIND IT"  name="adv_ser_search" class="other_src">
</div>

</form>
     <!-----------------------------------------Search Bar Ends Here--------------------------------------------------------> 
    </div>
</div>
</div>
<!------End of Inner Banner--->