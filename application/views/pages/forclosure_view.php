<?php	
	$css_path = base_url()."css/";
	$js_path = base_url()."js/";
	$image_path = base_url()."images/";
	//var_dump($onlinepro);exit();
?>

<?php  $this->load->view('include/header_inner'); ?>


<style>

.ss_riben{position:absolute; width:150px; height:150px;z-index:999; background-image:url(<?php echo $image_path;?>ss_riben.png); background-position:center;}
.ss_riben p{ margin:0px; text-align:center; font:normal 12px 'Arial', sans-serif; color:#fff; text-transform:uppercase;
transform:rotate(316deg);
-ms-transform:rotate(316deg); /* IE 9 */
-webkit-transform:rotate(316deg); /* Safari and Chrome */
 padding:25px 10px 108px 0px; letter-spacing:1px;
}

</style>


<!---------Featured Properties------------>



 <div style="clear:both;"></div>
<div class="listing">
<div class="ftrdProprtysInn">
	
    <ul>
    <?php
	if(@$nodata!=''){
		
	?>
   
    <div class="ttl" style="min-height: 500px;text-align:center;"><h1 style="text-align:center;">Foreclosures / Short Sales Real Estate  <br /><?php echo $nodata;?> </h1><div class="clear"></div>
     <?php if(isset($keyword)) { echo $keyword; } ?>
    </div>
    <?php
	}
    else
	{
    ?>
	<div class="ttl">
    	<h1>
		Foreclosures / Short Sales Real Estate  <br />
		<?php if(isset($pagination['from'])) { echo $pagination['from']; } ?> - <?php if(isset($pagination['to'])) { if($pagination['to']<20){ echo $pagination['total']; }else{ echo $pagination['to'];} } ?>
         of <?php if(isset($pagination['total'])) { echo $pagination['total']; } ?> </h1>
         <div class="clear"></div>
      
         <?php if(isset($keyword)) { echo $keyword; } ?>
    </div>
    <div class="clear"></div>
    <?
		$i=1;
		
		
		
		if(isset($onlinepro))
		{
		foreach($onlinepro as $view)
		{
			//var_dump($view); exit();
			?>
            <a href="<?php echo site_url(); ?>/property/details/<?php if(isset($view['details']['listing_id'])){ echo stripslashes(@$view['details']['listing_id']);} ?><?php if(isset($view['details']['address_no'])) { echo "/".url_title(stripslashes(@$view['details']['address_no'])); }?><?php if(isset($view['details']['address_street'])) { echo "/".url_title(stripslashes(@$view['details']['address_street'])); }?>
			<?php if(isset($view['details']['l_city'])) { echo "/".url_title(stripslashes(@$view['details']['l_city'])); }?>">
            <li <?php if($i==4) { ?> class="no_mar" <?php } ?>>
           <?php if(@$view['details']['foreclasure']!=''){ if(@$view['details']['foreclasure']=='Potential Short Sale'){
			   $view['details']['foreclasure']='Short sales';
			   }?>
                             <div class="ss_ho_strip"><i><?php echo @$view['details']['foreclasure'];?></i><span></span></div>
                            <?php } ?>
            	<div class="outter_top">
                	<h1><?php if(isset($view['details']['address_no'])) { echo stripslashes(@$view['details']['address_no']).' '; }?>
					<?php if(isset($view['details']['address_street'])) { echo stripslashes(@$view['details']['address_street']); } else { ?>Not Provided<?php }?></h1>
                    <h2><?php if(isset($view['details']['l_city'])) { echo ucfirst(stripslashes(@$view['details']['l_city'])); } else { ?>No Name<?php }?></h2>
                </div>
                    <img  src="<?php if(isset($view['img'])){echo $image_path.'property/RES/'.$view['details']['listing_id'].'/Meduim/'.$view['img']; }
					else {echo $image_path.'default.jpg';} ?>"  alt="" />
                  
                   
                <div class="item">
                    <span class="lft">
                      	<?php if(isset($view['details']['beds'])) { echo stripslashes(@$view['details']['beds']); } else { ?> 0 <?php }?> Beds, 
                        <?php if(isset($view['details']['baths_full'])) { echo stripslashes(@$view['details']['baths_full']); } else { ?> 0 <?php }?> full, 
                        <?php if(isset($view['details']['baths_half'])) { echo stripslashes(@$view['details']['baths_half']); } else { ?> 0 <?php }?> half baths,
                       
        			</span>                        
                </div>
                    
                <div class="item">
                     <span class="lft">                     
        				 <?php if(@$view['details']['squre_feet']!='') { echo stripslashes(@$view['details']['squre_feet'])." sqft"; } 
						else {
							if(isset($view['details']['style'])) { echo'Style:'.@$view['style']."";} 
							}?>
                     </span> 
                     <h4> 
<?php if(@$view['details']['asking_price']!=0) { echo "$ ".number_format(stripslashes(@$view['details']['asking_price']),2); } else { echo "$ ".number_format(stripslashes(@$view['details']['l_original_price']),2); }?>  </h4>                    
                </div>
            
        	</li>
            </a>
            <?php
			
			if($i==4) { $i=0; }
			$i++;
		}
	} //if ends here
	else
	echo 'Rets Not Connected';
	
	}
	?>
    
    
   
    </ul>
    
</div>
</div>
</div>






<!--- Map view - End -->


<!---------End of Featured Properties------------>

 <!--Pagination-->
   <div class="paginationInn"><div class="new_pagi"><?php echo $this->pagination->create_links();?></div></div>
 <!--Pagination--> 
<style>
.lazy {
  display: none;
}
</style>
<script src="http://code.jquery.com/jquery-1.10.2.min.js" type="text/javascript"></script>
 <script src="<?php echo base_url();?>js/lazy/jquery.lazyload.js" type="text/javascript"></script>
<script>
$("img.lazy").show().lazyload();
</script>
<script type="text/javascript">
var jQuery_1_10_2 = $.noConflict(true);
</script>

<?php  $this->load->view('include/footer'); ?>