<?php	
	$css_path = base_url()."css/";
	$js_path = base_url()."js/";
	$js1_path = base_url()."js1/";
	$image_path = base_url()."images/";
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
 <!--[if lt IE 9]>
          <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<link rel="stylesheet" href="<?php echo $css_path;?>main.css" type="text/css"/>
<link rel="stylesheet" href="<?php echo $css_path;?>jquery-ui.css" />


  
<!------ bottom up slider --->
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script  type="text/javascript" src="<?php echo $js_path;?>page.js"></script>
<script src="<?php echo $js_path;?>jquery.cycle.all.js" type="text/javascript"></script>

<!------ bottom up slider --->



<!------ hover effect --->
    <link type="text/css" rel="stylesheet" href="<?php echo $css_path;?>hom.css" media="all">
		<script type="text/javascript" src="<?php echo $js_path;?>mootools.js"></script>
		<script type="text/javascript">
	    Res_j =  "#";
	    Res_i =  "#";
	  </script>
<!------ hover effect End--->

<!--------- search ------------------------>

<link rel="stylesheet" href="<?php echo $css_path;?>search_hom.css">

<script type="text/javascript" src="<?php echo $js1_path;?>jquery.js"></script> 

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
       
<!--------- search end ------------------------>
<script src="js/jquery-ui.js"></script>
<script>
  $(function() {
    var availableTags = [
      "Aiken","Alcolu","Alderson","Alexandria","Allendale","Anderson","Andrews","Arlington","Ash","AtlanticB","Augusta","Awendaw","Aynor","BaldHead","BannerElk","Bath","Beaufort","Bennetsvil","Benson","Bethune","Bishopvill","Blenheim","Blythewood","Bolivia","Bolton","Bonneau","BrittonsN",      
      "Cades","Calabash","Camden","Candler","CarolinaS","Cashiers","CaswellBe","Centenary","Chadbourn",
      "Charlotte","Cheraw","CherryGro","Chester","Chesterfie","Chicago","Chocowinit","Clarendon",
	  "Chesterfield","Chicago","Chocowinity","Clarendon","Clarkton","Clinton","Columbia","Columbus","Concord",
	  "Conover","Conway","Cordova","Coward","Currie","Damascus","Darlington","Daufuskie Island","Duncan",
	  "Easley","Eastover","Effingham","Elizabetht","Elliott","Elloree","ElmCity","EmeraldIs","Eutawville",
	  "Evergreen","Fairbluff","Fairmont","Fayettevil","Florence","Floydale","ForestCit","Fork","FortMill",
	  "Franklin","FraziersB","FrippIsla","FulksRun","FuquayVar","Galivants","Gary","Georgetown","Gilbert",
	  "GlendaleS","GooseCree","GreanSea","Greasham","GreatFall","Greeleyvil","Greensboro","GreenSea","Greenville",
      "27B Murrells Inlet - Horry Count",  "25A Myrtle Beach Area--west of S","54A Andrews Are--includes city o","11D North Myrtle Beach Area--Atl","17A Aynor Area--central includes","10C North Myrtle Beach Area--Bar","48A Georgetown Area--Belle Isle","52A Georgetown Area--Black River","25B Conway Area--between Wacc. R","10A Conway to Myrtle Beach Area-","10B Myrtle Beach Area--Carolina","53A Georgetown Area--Carvers Bay","11A North Myrtle Beach Area--Che","02A Loris Area--central includes","21A Conway central between 501 &","21B Conway central between 701 &","21D Conway central between 501&","21C Conway central between Long","21E Conway central--East edge of","11C North Myrtle Beach Area--Cre","14A Conway Area--Northern edge o","07A Loris to Longs Area--South o","12A Aynor Area--North of Aynor b","24A Myrtle Beach Area--south of","03A Longs to Little River Area--", "09A Conway to Longs Area--Betwee","15A Conway Area--East edge of Co","23A Conway Area--South of Conway","27A Garden City Mainland & Penni","28C Garden City Extension to mer","40A Murrells Inlet - Georgetown","46A Georgetown Area--includes ci","28B Surfside Area-Glensbay to GC","45A Pawleys Island Area","06A Loris to Conway Area--South","26A Myrtle Beach Area--south of","50A Georgetown Area--Kensington/","41A Pawleys Island Area-Litchfie","42A Pawleys Island Area-Litchfie","05A Loris Area--West of Loris &","47A Georgetown Area--Maryville/s","16F Myrtle Beach Area--10th Ave","16E Myrtle Beach Area--29th Ave","16D Myrtle Beach Area--48th Ave","16C Myrtle Beach Area--79th Ave","16B Myrtle Beach Area--Arcadian","16A Myrtle Beach Area--Briarclif","16G Myrtle Beach Area--Southern","20A Conway Area--West edge of Co","18A Conway Area--North edge of C","13A Aynor Area--North of Rt 22 &","22A Conway Area--Southwest side","26B Myrtle Beach Area--north of","04B Little River Area--North of","29A Surfside Beach--East of 17 &","08A Loris to Conway Area--South","31B North Carolina","01A Loris Area--West of Loris &","11B North Myrtle Beach Area--Oce","11F North Myrtle Beach Area--bet","31A Other counties in South Caro","43A Pawleys Island Beaches","44A Pawleys Island Mainland","45B Pawleys Island Area-Pawleys","16J Myrtle Beach Area--includes","29B Surfside Beach--East of 17 a","49A Georgetown Area--Santee/belo","19A Myrtle Beach Area--Socastee","04A Little River Area--South of","28A Surfside Area--Surfside Tria","24B Myrtle Beach Area-- south of","03B Loris to Longs Area--North o","15B Conway Area--East edge of Co","23B Conway Area-South of Conway","09B Conway to Longs Area--Betwee","51A Georgetown Area--Wedgefield/","11E North Myrtle Beach Area--Win","31C Not in South Carolina or Nor",
      
    ];
    $( "#tags" ).autocomplete({
      source: availableTags
    });
  });
  </script>


</head>

<body id="hom" data-widgets="">
<!------Start Header------->
<div class="header">
<div class="headerInn">
	<div class="left">
    	<ul>
         <li><a href="<?php echo site_url();?>" <?php if(isset($page) && ($page=='home')){ ?>class="active" <?php }?> >Home</a></li>
        <li><a href="<?php echo site_url();?>/search" <?php if(isset($page) && ($page=='search')){ ?>class="active" <?php }?>>Search Homes</a></li>
        <li><a href="<?php echo site_url();?>/newhomes" <?php if(isset($page) && ($page=='new_home')){ ?>class="active" <?php }?>>New Homes</a></li>       
        <li><a href="<?php echo site_url();?>/property" <?php if(isset($page) && ($page=='property_management')){ ?>class="active" <?php }?>>Property Mgmt.</a></li>
        <li><a href="<?php echo site_url();?>/services" <?php if(isset($page) && ($page=='services')){ ?>class="active" <?php }?>>Services</a></li>
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
        </ul>
    </div>

</div>
</div>
<!-----End of Header------->


<!---------Banner------------>
<div class="banner">
	<script type="text/javascript">
		$('.slides').cycle({ 
		fx:     'fade', 
		speed:   1000, 
		timeout: 3000, 
		next:   '.slides', 
		pause:   0 
		});
	</script>
<div class="slides" id="sg">
	<img  class="lazy" src="<?php echo $image_path;?>blank.png" data-original="images/banner.png" alt="">
    <noscript><img src="images/banner.png" alt=""></noscript>
    <img  class="lazy" src="<?php echo $image_path;?>blank.png" data-original="images/banner2.png" alt="">
    <noscript><img src="images/banner2.png" alt=""></noscript>
    <img  class="lazy" src="<?php echo $image_path;?>blank.png" data-original="images/banner3.png" alt="">
    <noscript><img src="images/banner3.png" alt=""></noscript>
</div>

<div class="bannerInn">
<div class="logo"><a href="#"><img src="images/era.png" alt="ERA Real Estate"></a></div>
    <div class="hmBannerSearch">
      <!-----------------------------------------Search Bar Here-------------------------------------------------------->
      <form name="search" enctype="multipart/form-data" method="post" action="<?php echo site_url();?>/search/home/"> 
<div class="src_outter_hom">
       
<div class="global-header-inner">

        <div class="hm_nw"><input type="text" class="hm_nw_field" name="ser_keyword" placeholder="Search Here.." id="tags"></div>

        <!-- Search Dropdowns -->

        <div class="search-dropdowns ui-dropdowns-inverted">

            <!-- Price Search Dropdown -->

            <div class="price-dropdown ui-dropdown ui-sbar-mega-gradient">

                <h2 title="Price">Price <b class="ui-caret"></b></h2>

                <div class="ui-dropdown-menu">

                    <div class="price-dd-input">

                        <label class="search-min-price">

                            <input value="" class="js-placeholder search-price-input" id="search-min-price-input" placeholder="$ No Min" type="text">

                        </label>

                        <select style="z-index: 10; opacity: 0;" class="search-price-select btn-select-dropdown selected" id="minprice" name="minprice">
                            <option value="">$ No Min</option>
                            <option value="50000">$50,000</option>
                            <option value="60000">$60,000</option>
                            <option value="70000">$70,000</option>
                            <option  value="80000">$80,000</option>
                            <option value="90000">$90,000</option>
                            <option value="100000">$100,000</option>
                            <option value="125000">$125,000</option>
                            <option value="150000">$150,000</option>
                            <option value="175000">$175,000</option>
                            <option value="200000">$200,000</option>
                            <option value="225000">$225,000</option>
                            <option value="250000">$250,000</option>
                            <option value="275000">$275,000</option>
                            <option value="300000">$300,000</option>
                            <option value="325000">$325,000</option>
                            <option value="350000">$350,000</option>
                            <option value="375000">$375,000</option>
                            <option value="400000">$400,000</option>
                            <option value="425000">$425,000</option>
                            <option value="450000">$450,000</option>
                            <option value="475000">$475,000</option>
                            <option value="500000">$500,000</option>
                            <option value="550000">$550,000</option>
                            <option value="600000">$600,000</option>
                            <option value="650000">$650,000</option>
                            <option value="700000">$700,000</option>
                            <option value="750000">$750,000</option>
                            <option value="800000">$800,000</option>
                            <option value="850000">$850,000</option>
                            <option value="900000">$900,000</option>
                            <option value="950000">$950,000</option>
                            <option value="1000000">$1,000,000</option>
                            <option value="1250000">$1,250,000</option>
                            <option value="1500000">$1,500,000</option>
                            <option value="1750000">$1,750,000</option>
                            <option value="2000000">$2,000,000</option>
                            <option value="2250000">$2,250,000</option>
                            <option value="2500000">$2,500,000</option>
                            <option value="2750000">$2,750,000</option>
                            <option value="3000000">$3,000,000</option>
                            <option value="3500000">$3,500,000</option>
                            <option value="4000000">$4,000,000</option>
                            <option value="4500000">$4,500,000</option>
                            <option value="5000000">$5,000,000</option>
                            <option value="0" class="other">other</option>
                        </select><span class="btn btn-select-span"><b class="ui-caret"></b></span>

                    </div>

                    <b><i>to</i></b>

                    <div class="price-dd-input">

                        <label class="search-max-price">

                            <input value="" class="js-placeholder search-price-input" id="search-max-price-input" placeholder="$ No Max" type="text">

                        </label>

                        <select style="z-index: 10; opacity: 0;" class="search-price-select btn-select-dropdown selected" id="maxprice" name="maxprice">
                            <option value="">$ No Max</option>
                            <option value="50000">$50,000</option>
                            <option value="60000">$60,000</option>
                            <option value="70000">$70,000</option>
                            <option value="80000">$80,000</option>
                            <option  value="90000">$90,000</option>
                            <option value="100000">$100,000</option>
                            <option value="125000">$125,000</option>
                            <option value="150000">$150,000</option>
                            <option value="175000">$175,000</option>
                            <option value="200000">$200,000</option>
                            <option value="225000">$225,000</option>
                            <option value="250000">$250,000</option>
                            <option value="275000">$275,000</option>
                            <option value="300000">$300,000</option>
                            <option value="325000">$325,000</option>
                            <option value="350000">$350,000</option>
                            <option value="375000">$375,000</option>
                            <option value="400000">$400,000</option>
                            <option value="425000">$425,000</option>
                            <option value="450000">$450,000</option>
                            <option value="475000">$475,000</option>
                            <option value="500000">$500,000</option>
                            <option value="550000">$550,000</option>
                            <option value="600000">$600,000</option>
                            <option value="650000">$650,000</option>
                            <option value="700000">$700,000</option>
                            <option value="750000">$750,000</option>
                            <option value="800000">$800,000</option>
                            <option value="850000">$850,000</option>
                            <option value="900000">$900,000</option>
                            <option value="950000">$950,000</option>
                            <option value="1000000">$1,000,000</option>
                            <option value="1250000">$1,250,000</option>
                            <option value="1500000">$1,500,000</option>
                            <option value="1750000">$1,750,000</option>
                            <option value="2000000">$2,000,000</option>
                            <option value="2250000">$2,250,000</option>
                            <option value="2500000">$2,500,000</option>
                            <option value="2750000">$2,750,000</option>
                            <option value="3000000">$3,000,000</option>
                            <option value="3500000">$3,500,000</option>
                            <option value="4000000">$4,000,000</option>
                            <option value="4500000">$4,500,000</option>
                            <option value="5000000">$5,000,000</option>
                            <option value="10000000">$10,000,000</option>
                            <option value="0" class="other">other</option>
                        </select><span class="btn btn-select-span"><b class="ui-caret"></b></span>

                    </div>

                    <div class="btn-shell">

                        <button class="btn btn-primary" id="search-price-apply-btn">OK</button>

                    </div>

                </div><!-- .ui-dropdown-menu -->
            </div><!-- .price-dropdown -->

           

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
</div>
                </div><!-- .ui-dropdown-menu -->


<div class="hom_src_outter">
<input type="submit" name="ser_search" value="FIND IT" class="hom_src" />
</div>
            </div><!-- .beds-dropdown -->

	
 
  </div>

        </div>
     </form>
     <!-----------------------------------------Search Bar Ends Here--------------------------------------------------------> 
    </div>
</div>
</div>
<!------End of Banner-------->