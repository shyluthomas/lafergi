<?php	
	$css_path = base_url()."css/";
	$js_path = base_url()."js/";
	$js1_path = base_url()."js1/";
	$js2_path = base_url()."js2/";
	$image_path = base_url()."images/";
	$cluster_image_path=base_url()."images/cluster/";
	$rets_img_path=base_url()."images/property/RES/";
	//echo '<pre>';var_dump($map_data);echo '</pre>';exit();
	//error_reporting(0);
?>

<?php  $this->load->view('include/header_inner'); ?>


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
    	 <?php //echo $map['html']; ?><div id="map_canvas"></div>
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
<?php //if(isset($map['js'])) { echo $map['js']; } ?>




<style>
 .labels {
     color: #069;
     background-color: #fff;
     font-family: "Lucida Grande", "Arial", sans-serif;
     font-size: 30px;
     font-weight: bold;
     text-align: center;
     width: auto;
     border: 1px solid #ccc;
     white-space: nowrap;
	 padding:5px;
	 webkit-border-radius:5px;
	 moz-border-radius:5px;
	 border-radius:5px;
   }
 </style>

<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?v=3&amp;sensor=false"></script>
<script type="text/javascript" src="http://google-maps-utility-library-v3.googlecode.com/svn/trunk/markerclusterer/src/markerclusterer.js"></script>
 <script type="text/javascript" src="<?php echo $js2_path; ?>markerwithlabel.js"></script>
 <script type="text/javascript" src="<?php echo $js2_path; ?>infobox.js"></script>
<script type="text/javascript">

function numberWithCommas(x) {
    return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}

var ib = new InfoBox();
	var markers = [];
	var map ='';

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
										//map.setZoom(10);					
									}
									else
									{										
										//alert(msg);									
										 google.maps.event.trigger(markers[msg], 'click');
										 map.setCenter(markers[msg].getPosition());
										//map.setZoom(10);
									}
                            	}
                        });
	
	return false;	
}

	function load_property1(marker_no,price,listing_id)
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
									
										
										
										
									    contentString = '<div class="ss_popup_container">';
										if(data.info_w.image_inf.image_name)
										{
											contentString += '<div class="ss_popup_img"><img src="<?php echo $image_path;?>property/RES/'+data.info_w.details_inf.listing_id+'/Meduim/'+data.info_w.image_inf.image_name+'" width="297" height="240">';	
										}else
										{
										 contentString += '<div class="ss_popup_img"><img src="<?php echo $image_path;?>/default.jpg" height="240" width="297">';		
										}
										contentString +='<div class="ss_popup_detail">';
										contentString +='<div class="ss_pull_left"> <a href="<?php echo site_url();?>/property/details/'+
										data.info_w.details_inf.listing_id+'/'+data.info_w.details_inf.address_no+'/'+data.info_w.details_inf.address_street+'/'+data.info_w.details_inf.l_city+'"><button class="ss_bt_popup">Details</button></a></div>';
										contentString +='<div class="ss_pull_s">';
										contentString +='<h1>'+data.info_w.details_inf.address_no+'</h1>';
										contentString +='<h1>'+data.info_w.details_inf.address_street+'</h1>';
										contentString +='<h1>$'+numberWithCommas(data.info_w.details_inf.asking_price)+'</h1>';
										contentString +='</div></div></div>';
										contentString +='<div class="ss_popup_detai2">';
										contentString +='<ul>';
										contentString +='<li><span class="ss_span2"> Beds : '+data.info_w.details_inf.beds+'</span></li>';
										contentString +='<li><span class="ss_span2"> Baths Full : '+data.info_w.details_inf.baths_full+'</span></li>';
										contentString +='<li><span class="ss_span2"> Baths Half : '+data.info_w.details_inf.baths_half+'</span></li>';
										contentString +='</ul>';										
										contentString +='</div></div>';
										
										
											var boxText = document.createElement("div");
											//boxText.style.cssText = "border: 1px solid black; margin-top: 8px; background: yellow; padding: 5px;";
											//boxText.innerHTML = "City Hall, Sechelt<br>British Columbia<br>Canada";
											boxText.innerHTML = contentString;
									
											var myOptions = {
												 content: boxText
												,disableAutoPan: false
												,maxWidth: 0
												,pixelOffset: new google.maps.Size(-140, 0)
												,zIndex: null
												,boxStyle: { 
												  background: "url('<?php echo $image_path; ?>tipbox.gif') no-repeat"
												  ,opacity: 0.9
												  ,width: "auto"
												 }
												,closeBoxMargin: "10px 7px -13px 2px"
												,closeBoxURL: "http://www.google.com/intl/en_us/mapfiles/close.gif"
												,infoBoxClearance: new google.maps.Size(1, 1)
												,isHidden: false
												,pane: "floatPane"
												,enableEventPropagation: false
											};
		
		
											ib.setOptions(myOptions);
        									ib.open(map, markers[marker_no]);
											 map.setCenter(markers[marker_no].getPosition());
											//map.setZoom(10);
									   /* iw.setContent(contentString);
									   
										iw.open(map, markers[data.marker_no]);										
										 map.setCenter(markers[data.marker_no].getPosition());
										map.setZoom(15);*/
										
										
									
                                } 
                            });
		return false;
		
	}
	
	function initMap() {
	   //alert("hai");
     var latLng = new google.maps.LatLng(33.68996,-78.889241);
     var homeLatLng = new google.maps.LatLng(33.68996,-78.889241);
	 

     map = new google.maps.Map(document.getElementById('map_canvas'), {
       zoom: 12,
       center: latLng,
       mapTypeId: google.maps.MapTypeId.ROADMAP
     });
	 
	 
	 
	 <?php
	 
	 	 $pro_mls_index = 0;
		 $marker_icon = base_url().'images/marker/marker_default.png';		
		 foreach($map_data as $value)
		 { 		 	
			 $lat = $value['latitude'];
		     $long = $value['longitude'];			 
			 $pro_map_mls = $value['listing_id'];			 
			 $pro_s_r = 'ji';			 
			 $pro_price = 0;
			 if(@$value['asking_price']!=''){$pro_price=number_format($value['asking_price']);}else{$pro_price=number_format($value['l_original_price']);}
			 $marker_position = $lat.','.$long;	 
			
			 $marker_price = "$ ".$pro_price;
			 
			 $pro_map_area = '';
			 if(@$value['l_city']!='')
			 {
				  $pro_map_area = $value['l_city'];
			 }							 
		     ?>
			 var marker_<?php echo $pro_map_mls; ?> = new MarkerWithLabel({
											 position: new google.maps.LatLng(<?php echo $marker_position; ?>),										 
											 draggable: false,
											 raiseOnDrag: false,
											 map: map,
											 labelContent: "$ <?php echo $pro_price;?>",
											 //labelContent: "$425K",
											 labelAnchor: new google.maps.Point(22, 0),
											 labelClass: "labels", // the CSS class for the label
											 labelStyle: {opacity: 0.75},
											 icon: "<?php echo $marker_icon; ?>"
										  });
			 
			 markers.push(marker_<?php echo $pro_map_mls; ?>);
			 google.maps.event.addListener(marker_<?php echo $pro_map_mls; ?>, "click", function(e) {
					return load_property1('<?php echo $pro_mls_index; ?>','<?php echo $pro_map_area; ?>','<?php echo $pro_map_mls; ?>')
				});
			 <?php
			 
			 $pro_mls_index=$pro_mls_index+1;
		 }//foreach ends here
	 ?>
	 	
		var clusterOptions = {
				gridSize: 60,
				maxZoom: 14,
				minimumClusterSize: 5,
				
				styles: [{
							height: 53,
							url: "<?php echo $cluster_image_path; ?>m1.png",
							width: 53
							},
						 {
							height: 56,
							url: "<?php echo $cluster_image_path; ?>m2.png",
							width: 56
							},
						{
							height: 66,
							url: "<?php echo $cluster_image_path; ?>m3.png",
							width: 66
							},
						{
							height: 78,
							url: "<?php echo $cluster_image_path; ?>m4.png",
							width: 78
							},
						{
							height: 90,
							url: "<?php echo $cluster_image_path; ?>m5.png",
							width: 90
						}]
			};
			
			markerCluster = new MarkerClusterer(map, markers, clusterOptions);
	 	//var mcOptions = {gridSize: 50, maxZoom: 15};
	 	//var mc = new MarkerClusterer(map, markers, mcOptions);
		
			
			
		

     
	 
   }
   
   //initMap();
   google.maps.event.addDomListener(window, "load", initMap);
	

</script>


</body>
</html>



<!------------------------  search end ------------------------------->  