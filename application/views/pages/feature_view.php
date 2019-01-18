<?php	
	$css_path = base_url()."css/";
	$js_path = base_url()."js/";
	$image_path = base_url()."images/";
	$feature_path =base_url()."images/feature_prop/";
?>

<?php  $this->load->view('include/header_inner'); ?>

<style>
.new_cls{
	min-width:100px;
	background-color:#C8E9F3;
	min-height:30px;
	padding:2px 2px 2px 2px;
	text-align:center;
	margin-bottom:10px;	
}

</style>
<script type="text/javascript">

$( document ).ready(function() {

 create_captcha_feature();
  
});

function create_captcha_feature()
	{
		
			var form_data1 = {                           
                            name: 'qq'							                       
                        };	
			 $.ajax({
                            url: "<?php echo base_url();?>index.php/user/create_captcha/",
                            type: "post",
                            data: form_data1,
                            success: function(msg) {
									if(msg)
									 {
										 
										 var mystr=msg.split("-");
										 //alert(mystr[]);
										document.getElementById("captcha_feat").innerHTML='<input type="hidden" id="feature_captcha_code" name="captcha_code" value="'+mystr[0]+'" >'+mystr[1];	
										//alert(msg); 
									 }
									 else
									 {
										 document.getElementById("captcha_feat").innerHTML='<center><div clas="msg_div">captcha...</div></center>';
									 }
								
							}
							
					 });
					 return false;
					 
		
	}

	function ajax_newsletter()
	{
		 var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		 var ema=$('#sub_email').val();
		
		 var form_data = {                           
                            email: $('#sub_email').val()                           
                        };
						if( $('#sub_email').val()==""){
									document.getElementById("txtHint").innerHTML='<div class="new_cls">Email Required..</div>';
									//$( "#txtHint" ).fadeOut( "slow" );
									
									return false;  
									exit();
									}	
						if (!filter.test(ema)) {
							document.getElementById("txtHint").innerHTML='<div class="message_box_red">Invalid Email..</div>';
							return false; 
									exit();
							
						}
		$.ajax({
                            url: "<?php echo base_url();?>index.php/ajax/checkuser/",
                            type: "post",
                            data: form_data,
                            success: function(msg) {
																
									if(msg==1)
										{
										document.getElementById("txtHint").innerHTML='<div class="message_box_red">User Already Exist..</div>';
										}
										else
										{
											document.getElementById("txtHint").innerHTML='<div class="new_cls" style="color: rgb(4, 77, 4);">You are subscribed to our newsletter</div>';
										}
									
                                /*$('txtHint').prepend('<h5 class="good">Message sent!</h5>');
                                $('h5.good').delay(3000).fadeOut(500);*/
                               //alert(msg);
                            }
                        });
                        // prevents from refreshing the page
                        return false;  
		
	}

	function ajax_feature()
	{
		var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		 var ema=$('#email').val();
		 document.getElementById("feature").innerHTML='<div class="walid" >Wait..</div>';
		 if($('#email').val()==""){document.getElementById("feature").innerHTML='<div class="walid" >Email Required..</div>';return false; 
								
			}
			if (!filter.test(ema)) {
							document.getElementById("feature").innerHTML='<div class="walid" >Invalid Email..</div>';
							return false; 
									exit();
							
						}
			if($('#feature_captcha_code').val()!= $('#feature_captcha').val()){document.getElementById("feature").innerHTML='<div class="walid" >Invalid Captcha..</div>';return false; 
									
			}
		
		 var form_data = {                           
                            fname: $('#fname').val(),lname: $('#lname').val(),email: $('#email').val(),phone: $('#phone').val(),msg: $('#msg').val()                         
                        };
						
		$.ajax({
                            url: "<?php echo base_url();?>index.php/ajax/ajax_feature/",
                            type: "post",
                            data: form_data,
                            success: function(msg) {
																
									if(msg==1)
										{
										document.getElementById("feature").innerHTML='<div class="walid">Request  Sent..</div>';
										
										document.getElementById("fname").value='';
										document.getElementById("lname").value='';
										document.getElementById("email").value='';
										document.getElementById("phone").value='';
										document.getElementById("msg").value='';
										}
										else
										{
											document.getElementById("feature").innerHTML='<div class="walid">Request Not Sent..</div>';
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


<!---------Featured Properties------------>

<!--Common--->
<div class="commonPg">
	
    <h1>Feature Your Property</h1>
    
    <!--Left-->
	<div class="left">
    	
        <ul>
         <?php foreach ($view as $dreams):?>
        
        	<li>
            	<img src="<?php echo $feature_path.$dreams['image_name'];?>" alt="">
                <div class="right">
                	<div class="ttl">
                    	<div class="lf">
                        <h2><?php echo $dreams['title']?></h2>
                    	<h3></h3>
                        </div>
                    </div>
                    <div class="desc">
                    	<p><?php echo $dreams['description']?></p>
                    </div>
                </div>
            </li>
           <?php endforeach;?>
            
            
        </ul>
		
		<!--  how can we reach -->
        	<div class="nhow_outter">

            	
                <h2>How can we reach you?</h2>
                <p>Submit Your Details</p>
                
                <div id="feature"> </div>
                <div class="nhow_field_outter">
<form name="check" method="post" enctype="multipart/form-data" action="" onsubmit="">
<div class="nhow_qtxt_bg1">
<input type="text" name="fname" placeholder="First Name" class="nhow_qtxt_filed1"  required="required" id="fname"/>
</div>

 <div class="nhow_qtxt_bg1">
<input type="text" name="lname" placeholder="Last Name" class="nhow_qtxt_filed1" required="required" id="lname"/>
</div>

<div class="nhow_qtxt_bg1">
<input type="text" name="email" placeholder="Email" class="nhow_qtxt_filed1" required="required" id="email"/>
</div>

<div class="nhow_qtxt_bg1">
<input type="text" name="phone" placeholder="Phone" class="nhow_qtxt_filed1" required="required" id="phone"/>
</div>

<div class="nhow_area_bg1">
<textarea name="message" class="nhow_area_filed1" placeholder="Message" required="required" id="msg"></textarea>
</div>


<div class="nhow_qc_sub_outter1">
 <div id="captcha_feat" class="capc"><img src="<?php echo base_url().'images/captcha/1377600760.1257.jpg';?>" /></div>
                <a href="#" class="cap_img" onclick="return create_captcha_feature()" ><img src="<?php echo $image_path; ?>lod.png" /></a>   
                
    <div class="cap_text"> 
    
    <input type="text" name="feature_captcha" placeholder="Enter Captcha" class="cap_text_filed" required="required" id="feature_captcha"/>
    </div>
		<input type="button" name="submit" value="Submit Now" class="nhow_qc_submit1" onclick="return ajax_feature();" />
</div>

</form>


                </div></div>
        <!--  how can we reach-->
		
    </div>
    <!--Left Ends Here-->
    
    <!--Right-->
    <div class="right">
    	<!--Item2-->
        <div class="item2">
        	<div class="ttl"><h1>subscribe newsletter</h1></div>
            <div class="content">
        	<p>Get up to date latest news from us</p>
             <div id="txtHint" style="color:#F00;font-weight:bold;"></div>
            <div class="itemSub">
            <form action="" method="post" id="email_sub_form" enctype="multipart/form-data" name="newsletter">
            	<div class="name"><input type="text" class="txtbox" placeholder="Enter Your Email Address" type="email" name="sub_email" id="sub_email"></div>
                <div class="ansr"><input type="submit" type="button" name="sub_submit" class="btnSubmit" value="Subscribe" onClick="return ajax_newsletter()"></div>
                </form>
            </div>
        </div>
        </div>
        <!--Item2 Ends Here-->
        
        <!--agent-->
      
	  
	  <div class="ag">
            	<img src="<?php echo $image_path; ?>thmb4.jpg" alt="">
                <h1>Name Here</h1>
                <h2>owner/broker</h2>
                <div class="phone">000-000-0000</div>
                <div class="social">
                	<a href="#" target="_blank"><img src="<?php echo $image_path; ?>fb.png" alt="Follow me on facebook"></a>
                	<a href="#" target="_blank"><img src="<?php echo $image_path; ?>ttr.png" alt="Follow me on twitter"></a>
                </div>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
				
            </div>
        
        
        <!--agent Ends Here-->
        
    </div>
    <!--Right Ends Here-->
	
    <div class="clear"></div>
    
    
         


    
    
</div></div>
<!--Common Ends Here--->


<?php  $this->load->view('include/footer',$this->data); ?>