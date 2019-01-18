<?php	
	$css_path = base_url()."css/";
	$js_path = base_url()."js/";
	$image_path = base_url()."images/";
?>

<?php  $this->load->view('include/header_inner'); ?>


<script>

function ajax_foreclosure()
	{
		 
		 if($('#email').val()==""){document.getElementById("foreclosure_id").innerHTML='<div class="walid">Email Required..</div>';return false; 
									exit();
			}
			var ema = $('#email').val();
			var phon =$('#phone').val();
			var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
			if (!filter.test(ema)) {
					  document.getElementById("foreclosure_id").innerHTML='<div class="walid">Valid Email Required..</div>';return false;
			}
				  
			 if($('#fname').val()==""){document.getElementById("foreclosure_id").innerHTML='<div class="walid">Name Required..</div>';return false; 
									exit();
			}
			 if($('#phone').val()==""){document.getElementById("foreclosure_id").innerHTML='<div class="walid">Phone Required..</div>';return false; 
									exit();
			}
			if(isNaN(phon))
			{
				document.getElementById("foreclosure_id").innerHTML='<div class="walid">Valid Phone Required..</div>';return false;
			}
			 if($('#msg').val()==""){document.getElementById("foreclosure_id").innerHTML='<div class="walid">Message Required..</div>';return false; 
									exit();
			}
		
		 var form_data = {                           
                            fname: $('#fname').val(),lname: $('#lname').val(),email: $('#email').val(),phone: $('#phone').val(),msg: $('#msg').val()                         
                        };
						
		$.ajax({
                            url: "<?php echo base_url();?>index.php/ajax/ajax_foreclosure/",
                            type: "post",
                            data: form_data,
                            success: function(msg) {
																
									if(msg==1)
										{
										document.getElementById("foreclosure_id").innerHTML='<div class="walid">Request Sent..</div>';
										}
										else
										{
											document.getElementById("foreclosure_id").innerHTML='<div class="walid">Request  Not Sent..</div>';
										}
									
                                /*$('txtHint').prepend('<h5 class="good">Message sent!</h5>');
                                $('h5.good').delay(3000).fadeOut(500);*/
                               //alert(msg);
                            }
                        });
                        // prevents from refreshing the page
                        return false;  
		
	}


	

</script>



<div class="clr"></div>
<div class="innerPageHdr">
   	<div class="innerPageHdrSec wid_02">
    	<div class="left"><h1>Foreclosures List</h1><h2>Get in touch</h2></div>
    	<div class="right"><h1>You are Here At</h1><h2><a href="#">Home</a> / Foreclosures List</h2></div>
    </div>
    </div>

<!---------Featured Properties------------>



<div class="ftrdProprtyssl">
	<div class="ttl">
    	<h1>Foreclosures / Short Sales Real Estate  <br />
<?php if(isset($pagination['from'])) { echo $pagination['from']; } ?> - <?php if(isset($pagination['to'])) { if($pagination['to']<20){ echo $pagination['total']; }else{ echo $pagination['to'];} } ?>
         of <?php if(isset($pagination['total'])) { echo $pagination['total']; } ?> </h1>
        
       
		
         <div class="clear"></div>
    </div>
    <ul>
    
    <?php if($nodata==''){?>
    	<?php  foreach($onlinepro as $view): ?>
    <a href="<?php echo site_url(); ?>/property/details/<?php echo stripslashes($view['L_ListingID']); ?>/<?php echo $view['L_AddressNumber']; ?>/<?php echo stripslashes($view['L_AddressStreet']); ?>/<?php echo stripslashes($view['L_City']); ?>">
    <li>
         <div class="outter_top">
         <h1></h1>
            <h2><?php echo stripslashes($view['L_AddressNumber']).' '; ?><?php echo stripslashes($view['L_AddressStreet']); ?>
            <br />
            <?php echo stripslashes($view['L_City']); ?>
			</h2></div>
        	<img src="<?php echo 'data:image/jpeg;base64,' . base64_encode($view['images'][0]); ?>" alt="">
           
            <div class="item">
            	<span class="lft"><?php if($view['L_Keyword1']!="") { echo stripslashes($view['L_Keyword1']); } else { echo '0'; ?><?php }?> Beds,
                 <?php if($view['L_Keyword2']!="") { echo stripslashes($view['L_Keyword2']); } else { echo '0';?><?php }?> full, 
                 <?php if($view['L_Keyword3']!="") { echo stripslashes($view['L_Keyword3']); } else { echo '0';?><?php }?> part baths
</span>
            	
            </div>
            
            <div class="item">
            	<span class="lft">
Foreclosure: <?php if($view['LM_Char25_21']!="") { echo stripslashes($view['LM_Char25_21']); } else { echo 'No';?><?php }?>
			</span>
            	
                <h4>$ <?php if(@$view['L_AskingPrice']){echo number_format($view['L_AskingPrice'],2);}else
				{echo number_format($view['L_OriginalPrice'],2); } ?></h4>
            </div>
            
            
        </li>
        </a>
        <?php endforeach;
		}
		?>
       
        
    </ul>
 
  
 
 
 
 
 
<!-- contact ---->


<div class="quote">
	<div class="green">
    
    	<h2>Contact Us Now</h2>
        
         </div>
         <div id="foreclosure_id"></div>
         <form name="" method="post" enctype="multipart/form-data" action="">
         <div class="text_bg">
         	<input type="text" name="fname" placeholder="Name" class="text_field" autocomplete="off" required="required" id="fname"/>
         </div>
         
          <div class="text_bg">
         	<input type="text" name="lname" placeholder="last Name" class="text_field" autocomplete="off" required="required" id="lname"/>
         </div>
         
          <div class="text_bg">
         	<input type="text" name="email" placeholder="Email" class="text_field" autocomplete="off" required="required" id="email"/>
         </div>
         
          <div class="text_bg">
         	<input type="text" name="phone" placeholder="Phone" class="text_field" autocomplete="off" required="required" id="phone"/>
         </div>
         
         <div class="text_bg">
         	<textarea name="message" placeholder="Questions, Comments and feedback" class="text_area" autocomplete="off" required="required" id="msg"></textarea>
         </div>
         <div class="sub_outter">
         	<div class="submit_outter"><input type="button" name="submit" value="Submit" class="submit" onclick="return ajax_foreclosure();"/></div>
         </div>
         </form>
    </div>
</div>

 
 <!--Pagination-->
   <div class="paginationInn"><div class="new_pagi"><?php echo $this->pagination->create_links();?></div></div>
 <!--Pagination--> 
 
 
 
 
 </div>

</div>

<!---------End of Featured Properties------------>



<?php  $this->load->view('include/footer'); ?>