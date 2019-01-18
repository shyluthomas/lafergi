<?php	
	$css_path = base_url()."css/";
	$js_path = base_url()."js/";
	$js1_path = base_url()."js1/";
	$image_path = base_url()."images/";
	
	
	
	//var_dump($onlinepro);
	
?>

<?php  $this->load->view('include/header_inner',$this->data); ?>



<!---------Featured Properties------------>
<div class="searchResult" id="layout_grid" style="margin:auto;">
<div class="searchResultInn">
	<div class="ttl">
        <div class="ttl">
    	<h1><?php if(isset($pagination['from'])) { echo $pagination['from']; } ?> - <?php if(isset($pagination['to'])) { echo $pagination['to']; } ?> of <?php if(isset($pagination['total'])) { echo $pagination['total']; } ?> Search result <?php if(isset($search_key)) { echo " for ".$search_key; } ?></h1>
       <!-- <div class="flRight"><input type="button" name="grid" value="grid" id="grid_btn" onclick="grid_view_call()" /><input type="button" name="map" value="map" id="map_btn" onclick="map_view_call()" /></div>
        -->
        
    </div>
       
        
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