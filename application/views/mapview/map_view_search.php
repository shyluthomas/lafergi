<?php	
	$css_path = base_url()."css/";
	$js_path = base_url()."js/";
	$image_path = base_url()."images/";
	//echo $nodata;exit();
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
   
    <h1>Related Properties</h1>
    <ul id="content_1">
   		<?php if($nodata ==''){?>
    	<?php  foreach($onlinepro as $view): ?>
     <li><a href="<?php echo site_url(); ?>/property/details/<?php echo stripslashes($view['L_ListingID']); ?>/<?php echo $view['L_AddressNumber']; ?>/<?php echo stripslashes($view['L_AddressStreet']); ?>/<?php echo stripslashes($view['L_City']); ?>">
     <div class="photo"><img src="<?php echo 'data:image/jpeg;base64,' . base64_encode($view['images'][0]); ?>" alt='rel pro'></div>
					
						<h2><?php echo $view['L_AddressNumber'].' '; ?><?php echo $view['L_AddressStreet']; ?></h2>
						 <p>
							<?php echo $view['L_City']; ?><br>
							$ <?php echo number_format($view['L_OriginalPrice'],2); ?>
						 </p>
     </a></li>
    
    <?php endforeach;?>  
      <?php }else{?>
      <h4><?php echo $nodata;?>,Click the Properties in Map to Search Nearest Properties</h4>
      <?php } ?>
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

<!------------------------  search ------------------------------->

<script type="text/javascript" src="<?php echo base_url();?>js1/underscore.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js1/backbone.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js1/bt.js"></script>
<?php if(isset($map['js'])) { echo $map['js']; } ?>

<script>
 function setDirections(fromAddress, toAddress, locale) {
      gdir.load("from: " + fromAddress + " to: " + toAddress,
                { "locale": locale });
    }
 
    function handleErrors(){
	   if (gdir.getStatus().code == G_GEO_UNKNOWN_ADDRESS)
	     alert("No corresponding geographic location could be found for one of the specified addresses. This may be due to the fact that the address is relatively new, or it may be incorrect.\nError code: " + gdir.getStatus().code);
	   else if (gdir.getStatus().code == G_GEO_SERVER_ERROR)
	     alert("A geocoding or directions request could not be successfully processed, yet the exact reason for the failure is not known.\n Error code: " + gdir.getStatus().code);
	   
	   else if (gdir.getStatus().code == G_GEO_MISSING_QUERY)
	     alert("The HTTP q parameter was either missing or had no value. For geocoder requests, this means that an empty address was specified as input. For directions requests, this means that no query was specified in the input.\n Error code: " + gdir.getStatus().code);
 
	//   else if (gdir.getStatus().code == G_UNAVAILABLE_ADDRESS)  <--- Doc bug... this is either not defined, or Doc is wrong
	//     alert("The geocode for the given address or the route for the given directions query cannot be returned due to legal or contractual reasons.\n Error code: " + gdir.getStatus().code);
	     
	   else if (gdir.getStatus().code == G_GEO_BAD_KEY)
	     alert("The given key is either invalid or does not match the domain for which it was given. \n Error code: " + gdir.getStatus().code);
 
	   else if (gdir.getStatus().code == G_GEO_BAD_REQUEST)
	     alert("A directions request could not be successfully parsed.\n Error code: " + gdir.getStatus().code);
	    
	   else alert("An unknown error occurred.");
	   
	}
 
	function onGDirectionsLoad(){ 
      // Use this function to access information about the latest load()
      // results.
 
      // e.g.
      // document.getElementById("getStatus").innerHTML = gdir.getStatus().code;
	  // and yada yada yada...
	}
    </script>
 

<!------------------------  search end ------------------------------->  