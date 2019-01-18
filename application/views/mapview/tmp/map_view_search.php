<?php	
	$css_path = base_url()."css/";
	$js_path = base_url()."js/";
	$image_path = base_url()."images/";
	//var_dump($onlinepro2);exit();
?>

<?php  $this->load->view('include/header_inner'); ?>

<script type="text/javascript">
	function load_property1(price)
	{
		//alert(price);
    $("#wait").css("display","block");

		//var data='positions:'+lat+' :'+long;		
		
		var form_data = {                           
                            price: price						                       
                        };
						//alert($('#sign_password').val());
				window.location='<?php echo base_url();?>index.php/property/load_neigbour/'+price+'/';
						
		
                        return false;  
		
	}

</script>

<style>
#map_canvas{
	
height:800px !important;	
}

</style>
<!---------Featured Properties------------>

<div class="mapPage">

	<!----Left---->
    <div class="left">
   
    
    <ul id="content_1">
    	<?php  foreach($onlinepro as $view): ?>
     <li><a href="<?php echo site_url(); ?>/property/details/<?php echo stripslashes($view['L_ListingID']); ?>/<?php echo $view['L_AddressNumber']; ?>/<?php echo stripslashes($view['L_Area']); ?>/<?php echo stripslashes($view['L_City']); ?>">
     <div class="photo"><img src="<?php echo 'data:image/jpeg;base64,' . base64_encode($view['images'][0]); ?>" alt='rel pro'></div>
					
						<h2>$<?php echo $view['L_OriginalPrice']; ?></h2>
						 <p>
							<?php echo $view['L_City']; ?><br>
							<?php echo $view['L_AddressNumber']; ?>
						 </p>
     </a></li>
    
    <?php endforeach;?>       
    </ul>
    </div>
    <!----Left Ends Here---->
    
    
    <!-----Right Section------>
    <div class="map_display" style="background:url(<?php echo $image_path; ?>page-loader.gif) no-repeat center;">
     <?php echo $map['html']; ?>
    </div>
    <!-----Right Section Ends Here---->
    
 
    

</div>
<!---------End of Featured Properties------------>
<!---------End of Featured Properties------------>

