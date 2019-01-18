<?php	
	$css_path = base_url()."css/";
	$js_path = base_url()."js/";
	$js1_path = base_url()."js1/";
	$image_path = base_url()."images/";
	$rets_img_path=base_url()."images/property/RES/";
	//var_dump($onlinepro);exit();
	//error_reporting(0);
?>

<?php  $this->load->view('include/header_inner'); ?>

<script type="text/javascript">

function numberWithCommas(x) {
    return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}

function load_property(listing_id)
{
	
	var form_data = {                           
                            mls_id: listing_id				                       
                        };
	$.ajax({
                            url: "<?php echo base_url();?>index.php/map/get_marker/"+listing_id,
                            type: "post",
                            data: form_data,
                            success: function(msg) {
								if(msg==0)
									{	
									  	           
									
										google.maps.event.trigger(markers[msg], 'click');
										 map.setCenter(markers[msg].getPosition());
										map.setZoom(15);					
									}
									else
									{										
										//alert(msg);									
										 google.maps.event.trigger(markers[msg], 'click');
										 map.setCenter(markers[msg].getPosition());
										map.setZoom(15);
									}
                            	}
                        });
	
	return false;	
}

	function load_property1(price,listing_id)
	{

		
		  $.ajax({
                                type: 'post',
                                dataType: 'json',
                                url: "<?php echo base_url();?>index.php/ajax/load_neigbour/",
                                data:{price: price,listing_id: listing_id},
                                success: function( data ) {
                                    var html = '';
                                    var fadd = '<ul id="content_1" >';
                                    var ladd = '</ul>';
                                   
                                    if(data.status){
                                        var i = 1;
                                        $.each(data.pro, function(index, value) {
											var price=numberWithCommas(value.detail.asking_price);
											var li_cls='';
											if(value.img=='')
                                            { 
											
											
												if(value.detail.listing_id==listing_id){
													li_cls+=' class="ss_sct_maplist"';
												}
												else{
														li_cls+=' class=""';
												}
												
											
											 var anders='return load_property('+value.detail.listing_id+')';
                                            html = html+'<li'+li_cls+'><a href="#" onclick="'+anders+'"><div class="photo"><img src="<?php echo $image_path;?>'+'default.jpg" alt=""></div><h2> $ '+price+'</h2><p>'+value.detail.l_city+'<br>'+value.addr+'<br>'+value.features+'</p></a></li>';
											}else
											{
												
												 
												if(value.detail.listing_id==listing_id){
													li_cls+=' class="ss_sct_maplist"';
												}
												else{
														li_cls+=' class=""';
												}
												 var anders='return load_property('+value.detail.listing_id+')';
												 html = html+'<li'+li_cls+'><a href="#" onclick="'+anders+'"><div class="photo"><img src="<?php echo $rets_img_path;?>'+value.detail.listing_id+'/Meduim/'+value.img+'" alt=""></div><h2> $ '+price+'</h2><p>'+value.detail.l_city+'<br>'+value.addr+'<br>'+value.features+'</p></a></li>';
											}
                                            
                                        });
										
										 
                                    }else{
                                        html = '<li><h2>No Similar property</h2></li>';
                                    }
                                    
                                    html = fadd+html+ladd;
                                    
                                    $( "#ajx_left" ).fadeOut("slow").fadeIn("slow").html(html);
									
										
									    contentString = '<div class="map_cust_info">';
										if(data.info_w.image_inf.image_name)
										{
											contentString += '<img src="<?php echo $image_path;?>property/RES/'+data.info_w.details_inf.listing_id+'/Meduim/'+data.info_w.image_inf.image_name+'" >';	
										}else
										{
										 contentString += '<img src="<?php echo $image_path;?>/default.jpg" >';		
										}
										
										contentString +='<h1><a href="<?php echo site_url();?>/property/details/'+
										data.info_w.details_inf.listing_id+'/'+data.info_w.details_inf.address_no+'/'+data.info_w.details_inf.address_street+'/'+data.info_w.details_inf.l_city+'">'+data.info_w.details_inf.address+'</a></h1>';
										contentString +='<h3>Price : $ '+numberWithCommas(data.info_w.details_inf.asking_price)+'</h3><br>';
										contentString +=' Beds : '+data.info_w.details_inf.beds+'';
										contentString +=' Full Baths : '+data.info_w.details_inf.baths_full+'';
										contentString +=' Half Beds : '+data.info_w.details_inf.baths_half+'';
										contentString +='</div>';
										
									    iw.setContent(contentString);
									   
										iw.open(map, markers[data.marker_no]);										
										 map.setCenter(markers[data.marker_no].getPosition());
										map.setZoom(15);
										
										
									
                                } 
                            });
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
    
    <div class="left" id="ajx_left">
   
    <h1>Related Properties</h1>
    <ul id="content_1">
   		<?php if($nodata!=''){?>
    	<?php $k=0;  foreach($onlinepro as $view): ?>
     <li><a href="#" onclick="return load_property(<?php echo $view['details']['listing_id'];?>)">
     <div class="photo">
     	<?php if($view['img']==''){?>
     		<img src="<?php echo $image_path;?>default.jpg" alt='rel pro'>
         <?php }else{ ?>
         <img src="<?php echo $rets_img_path.$view['details']['listing_id'].'/Meduim/'.$view['img'];?>" alt='rel pro'>
         <?php } ?>
     </div>
					
						<h2>$ <?php echo number_format($view['details']['l_original_price'],2); ?>
						</h2>
						 <p>
						 <?php echo $view['details']['address_no'].' '; ?><?php echo $view['details']['address_street']; ?><br>
							<?php echo $view['details']['l_city']; ?><br>
							Baths:<?php if($view['details']['baths_half']!=''){echo $view['details']['baths_half'].'Half';}else{ echo '0 Half';} ?>
                            , <?php if($view['details']['baths_full']!=''){echo $view['details']['baths_full'].'Full,';}else{ echo '0 Full,';} ?>
                            Beds: <?php if($view['details']['beds']!=''){echo $view['details']['beds'];}else{ echo '0';} ?>
                            
						 </p>
     </a></li>
    
    <?php $k++; if($k==9){break;}endforeach;?>  
      <?php }else{?>
      <h4><?php echo $nodata;?>Click the Properties in Map to Search Nearest Properties</h4>
      <?php } ?>
    </ul>
    </div>	
  <div class="map_display"  style="background:url(<?php echo $image_path; ?>page-loader.gif) no-repeat center;">
    	 <?php echo $map['html']; ?>
    </div>
    
 
    <!----Left Ends Here---->
    
    
    <!-----Right Section------>
  <!--  <div class="map_view">-->
   
   
    <!-----Right Section Ends Here---->
    
    
   </div> 
    


<!---------End of Featured Properties------------>
<!---------End of Featured Properties------------>

<!------------------------  search ------------------------------->
<script type="text/javascript">
var jQuery_1_7_1 = $.noConflict(true);
</script>
<script type="text/javascript" src="<?php echo base_url();?>js1/underscore.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js1/backbone.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js1/bt.js"></script>

<script type="text/javascript" src="<?php echo $js_path;?>123.js?crv2.5.132"></script>
<script type="text/javascript">//<![CDATA[
var Gv = Gv || [];
Gv = Object.merge(Gv, {
  env: 'dev',
  url: {
    ext: 'http://www.myrtlebeachhomesforsale.tv/imyrtlebeach/'
  }
});
//]>
</script>
<?php if(isset($map['js'])) { echo $map['js']; } ?>



<!------------------------  search end ------------------------------->  