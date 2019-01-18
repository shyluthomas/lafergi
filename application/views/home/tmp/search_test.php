<?php	
	$css_path = base_url()."css/";
	$js_path = base_url()."js/";
	$js1_path = base_url()."js1/";
	$image_path = base_url()."images/";
	
	
	
	//var_dump($onlinepro);
	
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
 
 
 
<!--------- search ------------------------>




<link rel="stylesheet" href="<?php echo $css_path;?>search.css">

<script type="text/javascript" src="<?php echo $js1_path;?>jquery.js"></script>

<!-- Start Robots Meta Tags -->

        <script>
		
		
		function keyword(str)
		{
			if(str=='city')
			{
					
			}
			
		}
		
		
		
		
		
		
		
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
<script type="text/javascript">


</script>
 
</head>

<body>
<!------Start Header------->
<div class="header">
<div class="headerInn">
	<div class="left">
    	<ul>
        <li><a href="#" class="active">Home</a></li>
        <li><a href="#">Search Homes</a></li>
        <li><a href="#">New Homes</a></li>
        <li><a href="#">Relocation</a></li>
        <li><a href="#">Property Mgmt.</a></li>
        <li><a href="#">Services</a></li>
        <li><a href="#">About Us</a></li>
        <li><a href="#">Careers</a></li>
        <li><a href="#">Blog</a></li>
        </ul>
    </div>
    
    <div class="right">
    	<ul>
        <li><a href="#">Sign In</a></li>
        <li><a href="#">Sign up</a></li>
        <li><a href="#">Notes  0</a></li>
        <li><a href="#">Saved Searches  0</a></li>
        <li><a href="#">Favorites  0 </a></li>
        </ul>
    </div>

</div>
</div>
<!-----End of Header------->

<!------Inner Banner---->
<div class="subBanner">
<div class="subBannerInn">
	<div class="logo"><a href="#"><img src="<?php echo $image_path;?>era_inn.png" alt="ERA Real Estate"></a></div>
    
    <form name="advanced_search" method="post" enctype="multipart/form-data" action="<?php echo site_url();?>/search/inner">
    <div class="right">
     <!-----------------------------------------Search Bar Here--------------------------------------------------------> 
<div class="src_outter">
        
<div class="global-header-inner">

        <div class="search-keyword ui-sbar-mega-gradient" id="search-keyword">
            <div class="search-bar-qry-wrap">


                
            <select name="" class="search-bar-qry search-bar-input ie-emptysearch" id="search-bar-qry">
            <option>Type any Area, Address, ZIP, School, etc…</option>
            </select>


                <span class="search-keyword-select-span">SEARCH: All</span><b class="ui-caret ui-caret-large"></b>

         <select style="z-index: 10; opacity: 0;" class="search-keyword-select" id="search-keyword-select" title="All" name="catagory" 
         onChange="return keyword();">
                    <option selected="selected" value="all">SEARCH: All</option>                 
                    <option value="city">Cities</option>                    
                    <option value="address">Address</option>
                    <option value="listingmls" class="mls-instance">MLS #</option>
                    <option value="school">Schools</option>                    
                    <option value="postalcode">ZIP</option> 
                    <option value="keyword">Keyword</option>
                    <option value="feature">Feature</option>
                </select>

            </div>

            
           
            <select name="" class="">
            <option>Type any Area, Address, ZIP, School, etc…</option>
            </select>
             
          

          

        </div>

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

                 <select style="z-index: 10; opacity: 0;" class="search-price-select btn-select-dropdown selected"  id="" name="adv_min_price">
                 				<option value="">Select</option>
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

                            <input value="" class="js-placeholder search-price-input" id="search-max-price-input" placeholder="$ No Max" type="text">

                        </label>

                        <select style="z-index: 10; opacity: 0;" class="search-price-select btn-select-dropdown selected" id="" name="adv_max_price">
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
                        </select><span class="btn btn-select-span"><b class="ui-caret"></b></span>

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

                  
                        
                        <div class="wrapped-checkbox-set wrapped-input-set wrapped-stacked-set">
                        
                          
                        <label  >
                                    <input name="prop_type"  value="" type="radio" checked="checked">
                                    <span>Any</span>
                                </label>
                                                            <label >
                                    <input name="prop_type"  value="1" type="radio" >
                                    <span>DETACHED</span>
                                </label>
                                                            <label>
                                    <input name="prop_type" value="2" type="radio">
                                    <span>MODULAR</span>
                                </label>
                                                            <label >
                                    <input name="prop_type"  value="3" type="radio">
                                    <span>MANUFACTURED WITH LAND</span>
                                </label>
                                                            <label >
                                    <input name="prop_type"  value="4" type="radio">
                                    <span>SEMI-DETACHED</span>
                                </label>
                                                    </div>


                        <div class="wrapped-set-section">
                           <!-- <a class="fieldset-toggle" href="#additional-types" id="toggle-type-fieldset" title="More Types">
                                More Types
                            </a>-->
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

        <select name="minsqft" class="ps-select">
            			<option  value="">Any</option>                      
                        <option value="1000">1,000</option>
                        <option value="1250">1,250</option>
                        <option value="1500">1,500</option>
                        <option value="1750">1,750</option>
                        <option value="2000">2,000</option>
                        <option value="2250">2,250</option>
                        <option value="2500">2,500</option>
                        <option value="2750">2,750</option>
                        <option value="3000">3,000</option>
                        <option value="3500">3,500</option>
                        <option value="4000">4,000</option>
                        <option value="5000">5,000</option>
                    </select>

        <b><i>to</i></b>

        <select name="maxsqft" class="ps-select">
            			<option  value="">Any</option>                       
                        <option value="1000">1,000</option>
                        <option value="1250">1,250</option>
                        <option value="1500">1,500</option>
                        <option value="1750">1,750</option>
                        <option value="2000">2,000</option>
                        <option value="2250">2,250</option>
                        <option value="2500">2,500</option>
                        <option value="2750">2,750</option>
                        <option value="3000">3,000</option>
                        <option value="3500">3,500</option>
                        <option value="4000">4,000</option>
                        <option value="5000">5,000</option>
                    </select>

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

        <label class="ps-select-label"># Construction Status</label>

        <select name="construction_status" class="ps-select">
            <option selected="selected" value="">Any</option>
                        <option value="Never Occ">Never Occupied</option>
                        <option value="TBB">To Be Built</option>
                        <option value="Resale">Resale</option>                       
                    </select>

        <br>

        <label class="ps-select-label">Style</label>

        <select name="style" class="ps-select">
            <option selected="selected" value="">Any</option>
                        <option value="0">Ranch</option>
                        <option value="1">Raised Beach</option>
                        <option value="2">Split Level</option>
                        <option value="3">Contemporary</option>
                        <option value="4">Colonial</option>
                        <option value="5">Low Country</option>
                        <option value="6">Traditional</option>
                        <option value="7">Patio Home</option>
                    </select>

    </fieldset>

    <div class="popular-features">

        <h4>Popular Features</h4>

        <fieldset class="powersearch-checkbox-set wrapped-checkbox-set wrapped-input-set ps-fieldset">

            <label title="Has Photos">
                <input name="balcony" value="137" type="checkbox">
                Balcony
            </label>

            		
                      <label title="Waterfront">
                    <input name="waterfront" value="143" type="checkbox">
                    Waterfront                </label>
                                <label title="New Construction">
                    <input name="elevator" value="157" type="checkbox">
                    Elevator                </label>
                                <label title="Garage">
                    <input name="pool" value="144" type="checkbox">
                    Pool               </label>
                                <label title="Pool">
                    <input name="boat" value="146" type="checkbox">
                    Boat Parking                </label>
                                <label title="Fireplace">
                    <input name="outside" value="148" type="checkbox">
                    Outside Storag                </label>
                     <label title="none">
                    <input name="none" value="" type="checkbox" checked>
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

<div class="powersearch-controls" id="powersearch-controls">

    <!--<a class="js-toggle-ps-submenu ps-submenu-toggle ps-comprehensive-submenu-toggle btn btn-large" id="ps-submenu-toggle1" title="See All Features">
        See All Features</a>-->
    <a class="js-toggle-ps-submenu ps-submenu-toggle ps-popular-submenu-toggle btn btn-large" id="ps-submenu-toggle2" title="Back to Popular Features">
        Back to Popular Features</a>

    <div class="controls-right">
        <button class="powersearch-btn apply- search-btn btn btn-primary btn-large">
            <b class="results-count">281</b> Results
        </button>
    </div>
</div>

        </div>

  </div>

        </div>
        
        <input type="submit" value="search" name="adv_ser_search">
     
     <!-----------------------------------------Search Bar Ends Here--------------------------------------------------------> 
    </div>
    
    </form>
</div>
</div>
<!------End of Inner Banner--->



<!---------Featured Properties------------>
<div class="searchResult">
<div class="searchResultInn">
	<div class="ttl">
    	<h1>Search result</h1>
        <a href="#" class="flRight" id="sortby_btn">Sort By</a>
        <div class="sortBy" id="sortby_con">
						<label>
                            <input checked="checked" name="sort" type="radio" value="listprice">
                            <span>Price (Highest)</span>
                        </label>

                        <label>
                            <input name="sort" type="radio" value="listprice_asc">
                            <span>Price (Lowest)</span>
                        </label>

                        <label>
                            <input name="sort" type="radio" value="popularity">
                            <span>Most Popular</span>
                        </label>

                        <label>
                            <input name="sort" type="radio" value="bedrooms">
                            <span>Bedrooms (Most)</span>
                        </label>

                        <label>
                            <input name="sort" type="radio" value="fullbaths">
                            <span>Bathrooms (Most)</span>
                        </label>

                        <label>
                            <input name="sort" type="radio" value="acreage">
                            <span>Acreage (Highest)</span>
                        </label>

                        <label>
                            <input name="sort" type="radio" value="acreage_asc">
                            <span>Acreage (Lowest)</span>
                        </label>

                        <label>
                            <input name="sort" type="radio" value="yearbuilt">
                            <span>Year Built (Newest)</span>
                        </label>

                        <label>
                            <input name="sort" type="radio" value="yearbuilt_asc">
                            <span>Year Built (Oldest)</span>
                        </label>

                        <label>
                            <input name="sort" type="radio" value="importdate">
                            <span>Days on Site (Newest)</span>
                        </label>

                        <label>
                            <input name="sort" type="radio" value="importdate_asc">
                            <span>Days on Site (Oldest)</span>
                        </label>
                       
        </div>
         <input type="submit" value="search">
        
    </div>
    <ul>
    
    <?php foreach($onlinepro as $view):?>
    	<li class="flLeft">
        	<img src="<?php echo $image_path;?>img01.jpg" alt="">
            <h1><?php  echo $view['L_Area'];?></h1>
            <h2><?php  echo $view['L_City'];?></h2>
            <div class="item">
            	<span class="lft">Price</span>
            	<span class="rgt">$<?php  echo $view['L_OriginalPrice'];?></span>
            </div>
            <div class="item">
            	<span class="lft">Building Area</span>
            	<span class="rgt"><?php  echo $view['L_SquareFeet'];?> sqft</span>
            </div>
            <div class="item">
            	<span class="lft">Property Area</span>
            	<span class="rgt"><?php  echo $view['L_NumAcres'];?>acres</span>
            </div>
            <div class="item">
            	<span class="lft">Property Types</span>
            	<span class="rgt"><?php  echo $view['L_Keyword5'];?></span>
            </div>
            	<a href="<?php echo site_url(); ?>/property/details/<?php echo stripslashes($view['L_ListingID']); ?>">View Details</a>
        </li>
       
      <?php endforeach;?>  
        
    </ul>
   
</div>
</div>
<!---------End of Featured Properties------------>

 <!--Pagination-->
    <div class="paginationInn">
			<div id="pagination" class="pagination"></div>

    <script type="text/javascript">
	$(function() {
		$('#pagination').pagination({
			items: 100,
			itemsOnPage: 10,
			cssStyle: 'light-theme'
		});
	});
    </script>
    </div>
<!---Pagination Ends Here-->

<!--Pagination-->
   <div class="paginationInn"><div class="new_pagi"><?php echo $this->pagination->create_links();?></div></div>
 <!--Pagination-->    


<!--------Footer Section----------->
<div class="footerSection">
	<!---Top--->
    <div class="top">
    <div class="ftr_topInn">
		<!--Left-->
   		<div class="lefter">
        	<a href="#"><img src="images/logo2.png" alt=""></a>
        </div>
    	
        <!--right-->
    	<div class="righter">
        	<div class="box5">
            	<h1>Company</h1>
                <ul>
                	<li><a href="#">New Homes</a></li>
                    <li><a href="#">Relocation</a></li>
                    <li><a href="#">Property Mgmt.</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Careers</a></li>
                    <li><a href="#">Blog</a></li>
                </ul>
            </div>
            
            <div class="box5">
            	<h1>Resources</h1>
                <ul>
                	<li><a href="#">Buy Homes</a></li>
                    <li><a href="#">Sell Your Home</a></li>
                    <li><a href="#">Finance</a></li>
                </ul>

            </div>
            
            <div class="box5">
            	<h1>Get Social</h1>
                <div class="socialise">
                	<ul>
                    	<li><a href="#"><img src="images/icon_fb.png" alt="Facebook"></a></li>
                        <li><a href="#"><img src="images/icon_linked.png" alt="LinkedIn"></a></li>
                        <li><a href="#"><img src="images/icon_yt.png" alt="Youtube"></a></li>
                        <li><a href="#"><img src="images/icon_twtr.png" alt="Twitter"></a></li>
                        <li><a href="#"><img src="images/icon_skype.png" alt="Skype"></a></li>
                        <li><a href="#"><img src="images/icon_gplus.png" alt="Google Pluse"></a></li>
                        <li><a href="#"><img src="images/icon_flicker.png" alt="Flicker"></a></li>
                        <li><a href="#"><img src="images/icon_pin.png" alt="Pinterest"></a></li>
                    </ul>
                </div>
            </div>
            
            <div class="box5">
            	<h1>Contact</h1>
                <p>
                 1445 Kempsville Road<br>
                 Virginia Beach, VA 23464<br>
                 Phone: 757-424-0646<br>
                 Fax: 757-366-5546 
                </p>
            </div>
        </div>
    	<!--Right ends here--->

   

	<!---Bottom--->
    <div class="bottom">
    	<ul>
			<li><a href="#">imyrtle.com</a> © 2013</li>
        	<li><a href="#">Terms of Use</a></li>
        	<li><a href="#">Privacy Policy</a></li>
        </ul>
        <p>
        Real estate listing marked with the CTMLS logo or an abbreviated logo are provided courtesy of the Charleston Trident MLS Broker Reciprocity Database. Information Deemed Reliable But Not Guaranteed.<br>

IDX information is provided exclusively for consumers' personal, non-commercial use and may not be used for any purpose other than to identify prospective properties consumers may be interested in purchasing. 
        </p>
    </div>
    <!---End Bottom--->
    
    
    </div>
    </div>    
    <!--End of Top-->
	
    
</div>
<!------End of Footer Section-------->


<!------------------------  search ------------------------------->

<script type="text/javascript" src="<?php echo $js1_path;?>underscore.js"></script>
<script type="text/javascript" src="<?php echo $js1_path;?>backbone.js"></script>
<script type="text/javascript" src="<?php echo $js1_path;?>bt.js"></script>


<!------------------------  search end ------------------------------->
</body>
</html>