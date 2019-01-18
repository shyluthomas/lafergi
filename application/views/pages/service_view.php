<?php	
	$css_path = base_url()."css/";
	$js_path = base_url()."js/";
	$image_path = base_url()."images/";
?>

<?php  $this->load->view('include/header_inner'); ?>



<!---------Featured Properties------------>
<div class="aboutUs">
<div class="aboutUsInn">
	<div class="ttl"><h1>Services</h1></div>	
    <div class="bnr"><img src="<?php echo $image_path;?>about.jpg" alt="Era"></div>
    
    <div class="content">
    
    <div class="left">
    <p>
    <?php foreach($arr_view as $view):?>
     <?php echo ucfirst(stripslashes($view['service_content']));?>
   <br><br>
   <?php endforeach;?>
    </p>
    </div>
    
    <div class="right">
    	<h1>Featured Property</h1>
        
        <div class="ftrdP_item">
        	<img src="<?php echo $image_path;?>img04.jpg" alt="">
            <h3>Luxurious Penthouse Suitea</h3>
            <h2>Aurora, Colorado</h2>
            <div class="item">
            	<span class="lft">Price</span>
            	<span class="rgt">$450000</span>
            </div>
            <div class="item">
            	<span class="lft">Building Area</span>
            	<span class="rgt">1200 sqft</span>
            </div>
            <div class="item">
            	<span class="lft">Property Area</span>
            	<span class="rgt">2acres</span>
            </div>
            <div class="item">
            	<span class="lft">Property Types</span>
            	<span class="rgt">Apartment</span>
            </div>
            	<a href="#">View Details</a>
        </div>
    
    </div>
</div>
</div>
<!---------End of Featured Properties------------>

<?php  $this->load->view('include/footer'); ?>