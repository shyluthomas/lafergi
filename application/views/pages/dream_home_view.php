<?php	
	$css_path = base_url()."css/";
	$js_path = base_url()."js/";
	$image_path = base_url()."images/";
	$dream_path=base_url()."images/dream_home/";
?>

<?php  $this->load->view('include/header_inner'); ?>
<style>
.walid{margin-bottom: 7px;}
.how_qc_sub_outter1 img{display:block;
width: auto !important;
height: auto !important;
margin: 0px 20px 0px 0px;background:none;

}

</style>
<script>

$( document ).ready(function() {

 create_captcha_dream();
  
});

function create_captcha_dream()
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
										document.getElementById("captcha_dream").innerHTML='<input type="hidden" id="dream_captcha_code" name="captcha_code" value="'+mystr[0]+'" >'+mystr[1];	
										//alert(msg); 
									 }
									 else
									 {
										 document.getElementById("captcha_dream").innerHTML='<center><div clas="msg_div">captcha...</div></center>';
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
									document.getElementById("txtHint").innerHTML='<div style="color: rgb(248, 13, 41);">Please fill the field..</div>';
									
									return false;  
									exit();
									}	
						if (!filter.test(ema)) {
							document.getElementById("txtHint").innerHTML='<div style="color: rgb(248, 13, 41);">Invalid Email..</div>';
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
										document.getElementById("txtHint").innerHTML='<div style="color: rgb(10, 129, 15);">User Already Exist..<div>';
										}
										else
										{
											document.getElementById("txtHint").innerHTML='<div style="color: rgb(10, 129, 15);">You are subscribed to our newsletter</div>';
										}
									
                                /*$('txtHint').prepend('<h5 class="good">Message sent!</h5>');
                                $('h5.good').delay(3000).fadeOut(500);*/
                               //alert(msg);
                            }
                        });
                        // prevents from refreshing the page
                        return false;  
		
	}

function ajax_dream()
	{
		
		 if($('#fname').val()==""){document.getElementById("dream_contact").innerHTML='<div class="walid" >Fname Required..</div>';return false; 
									exit();
			}
			if($('#lname').val()==""){document.getElementById("dream_contact").innerHTML='<div class="walid" >Lname Required..</div>';return false; 
									exit();
			}
			if($('#msg').val()==""){document.getElementById("dream_contact").innerHTML='<div class="walid" >Message Required..</div>';return false; 
									exit();
			}
		
		var ema = $('#email').val();
			var phon =$('#phone').val();
			var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
			if (!filter.test(ema)) {
					  document.getElementById("dream_contact").innerHTML='<div class="walid">Valid Email Required..</div>';return false;
			}
			if(isNaN(phon))
			{
				document.getElementById("dream_contact").innerHTML='<div class="walid">Valid Phone Required..</div>';return false;
			}
		 
		 if($('#email').val()==""){document.getElementById("dream_contact").innerHTML='<div class="walid" >Email Required..</div>';return false; 
									exit();
			}
			if($('#dream_captcha_code').val() != $('#captcha_cod_dream').val()){document.getElementById("dream_contact").innerHTML='<div class="walid" >Invalid Captcha..</div>';return false; 
									exit();
			}
		
		 var form_data = {                           
                            fname: $('#fname').val(),lname: $('#lname').val(),email: $('#email').val(),phone: $('#phone').val(),msg: $('#msg').val()                         
                        };
						
		$.ajax({
                            url: "<?php echo base_url();?>index.php/ajax/dream_contact/",
                            type: "post",
                            data: form_data,
                            success: function(msg) {
																
									if(msg==1)
										{
										document.getElementById("dream_contact").innerHTML='<div class="walid">Request  Sent..</div>';
										document.getElementById("fname").value='';
										document.getElementById("lname").value='';
										document.getElementById("email").value='';
										document.getElementById("phone").value='';
										document.getElementById("msg").value='';
										
										}
										else
										{
											document.getElementById("dream_contact").innerHTML='<div class="walid">Request Not Sent..</div>';
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

<!--Common--->
<div class="commonPg">
	
    <h1>Your Dream Home</h1>
    
    <!--Left-->
	<div class="left">
    	
        <ul>
        
        <?php foreach ($view as $dreams):?>
        	<li>
            	<img src="<?php echo $dream_path.$dreams['image_name'];?>" alt="">
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
    </div>
    <!--Left Ends Here-->
    
    <!--Right-->
    <div class="right">
    	<!--Item2-->
        <div class="item2">
        	<div class="ttl"><h1>subscribe newsletter</h1></div>
            <div class="content">
        	<p>Get up to date latest news from us</p>
            <div id="txtHint"></div>
            <div class="itemSub">
            <form action="" method="post" id="email_sub_form" enctype="multipart/form-data" name="newsletter">
            	<div class="name"><input type="text" class="txtbox" placeholder="Enter Your Email Address" type="email" name="sub_email" id="sub_email"></div>
                <div class="ansr"><input type="submit" type="button" name="sub_submit" class="btnSubmit" value="Subscribe" onClick="return ajax_newsletter()"></div>
                </form>
            </div>
        </div>
        </div>
        <!--Item2 Ends Here-->
        
        <!--Ad-->
      
        <div class="ad">
        <img src="<?php echo $image_path;?>ad2.jpg" alt="">
        </div>
        
        <!--Ad Ends Here-->
        
    </div>
    <!--Right Ends Here-->
	
    <div class="clear"></div>
    
    
         <!--  Ask an Agent showing -->
        	<div class="how_outter">

            	<img src="images/req_image.png">
                <h2>How can we reach you?</h2>
                <p>Submit Your Details</p>
                <div class="how_field_outter">
<div id="dream_contact"></div>
<form name="dream" method="post" enctype="multipart/form-data">
<div class="how_qtxt_bg1">
<input type="text" name="fname" placeholder="Name" class="how_qtxt_filed1" id="fname"/>
</div>

 <div class="how_qtxt_bg1">
<input type="text" name="lname" placeholder="Last Name" class="how_qtxt_filed1" id="lname"/>
</div>

<div class="how_qtxt_bg1">
<input type="text" name="email" placeholder="Email" class="how_qtxt_filed1" id="email"/>
</div>

<div class="how_qtxt_bg1">
<input type="text" name="phone" placeholder="Phone" class="how_qtxt_filed1" id="phone"/>
</div>

<div class="how_area_bg1">
<textarea name="message" class="how_area_filed1" placeholder="Message" id="msg"></textarea>
</div>
<div class="how_qc_sub_outter1" style="float:left">
 <div id="captcha_dream" style="float:left" class="capc1"><img src="<?php echo base_url().'images/captcha/1377600760.1257.jpg';?>" 
 style="margin-left:0px;" /></div>
                <a href="#" class="cap_img1" onclick="return create_captcha_dream()" >
                <img src="<?php echo $image_path; ?>lod.png" /></a>
        <div class="cap_text1" style="margin-left:-7px"> 
    
    <input type="text" name="captcha_cod_dream" placeholder="Enter Captcha" class="cap_text_filed1" required="required" id="captcha_cod_dream"/>
    </div> 

<input type="button" name="submit" value="Let's Go See It" class="how_qc_submit1" onclick="return ajax_dream();" />         
                
</div>


</form>



                </div>
        <!--  Ask an Agent end-->


    
    
</div></div>
<!--Common Ends Here--->


<?php  $this->load->view('include/footer'); ?>