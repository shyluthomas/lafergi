<?php	
	$css_path = base_url()."css/";
	$js_path = base_url()."js/";
	$js1_path = base_url()."js1/";
	$image_path = base_url()."images/";	
?>

<?php
//chk user log in or not
	if($this->session->userdata('user_id')!='')
	{$chk=1;}	
	else
	{$chk=0;}
	$url=site_url().'/user/signin';
	$curr_url=$this->uri->uri_string();
	$this->session->set_userdata('curr_url',$curr_url);
	
?>

	

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
<style>
.msg_div{
	color:#F00;
	font:Verdana, Geneva, sans-serif;
	font-weight:bold;
	padding:2px 2px 2px 2px;	
}
#val_signin{
color:#F00;	
}
#val_signup{
color:#F00;	
}
#val_ask{
color:#F00;

}
#val_request{
color:#F00;
width: 318px	
margin: 5px auto;
}
#val_ask_agent{

width: 318px
}

</style>


<script type="text/javascript">
	function validate_signin()
	{
		var error='';
		document.getElementById("val_signin").innerHTML='';
		if($('#sign_email').val()==''){error+='Email Required\n';}if($('#sign_password').val()==''){error+='Password Required\n';}
		if(error)
		{
			document.getElementById("val_signin").innerHTML='<div class="message_box_red">'+error+'</div>';
		}
		else
		{
		
		var form_data = {                           
                            email: $('#sign_email').val() , password: $('#sign_password').val()							                       
                        };
						//alert($('#sign_password').val());
						
		$.ajax({
                            url: "<?php echo base_url();?>index.php/ajax/val_signin/",
                            type: "post",
                            data: form_data,
                            success: function(msg) {
								
								if(msg==1)
									{
										
											document.forms['sign'].submit();									
									}
									else
									{										
										document.getElementById("val_signin").innerHTML='<div class="message_box_red">Invalid Email or password. Please try again!</div>';
									}									
                                /*$('txtHint').prepend('<h5 class="good">Message sent!</h5>');
                                $('h5.good').delay(3000).fadeOut(500);*/
                               //alert('fi'+msg);
                            }
                        });
                        // prevents from refreshing the page
						
						
		}//else ends here
                        return false;  
		
		
	}
	
	
	function validate_signup()
	{
		document.getElementById("val_signup").innerHTML='';
		var error='';
		var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		 var ema=$('#signup_email').val();
		
		if($('#signup_fname').val()=="")
		{
			error+=' Name Required,\n';	
		}
		if (!filter.test(ema)) {
							error+=' Invalid Email,\n';
		}
		if($('#signup_password').val()==""){error+=' Password Required,\n';}		
		if($('#signup_conf_password').val()==''){error+=' Confirm Password Required,\n';}
		if(($('#signup_password').val())!=($('#signup_conf_password').val())){error+='password and Confirm Password not equal,\n';}
		if($('#signup_phone').val()==""){error+=' Phone Required,\n';}
		if($('#user_captcha').val()!=$('#captcha_code').val()){error+=' Invalid Captcha,';}		
		
		var form_data = {                           
                            email: $('#signup_email').val()							                       
                        };						
						
		            $.ajax({
                            url: "<?php echo base_url();?>index.php/ajax/val_signup/",
                            type: "post",
                            data: form_data,
                            success: function(msg) {
								
							if(msg==1)
								{																					
								document.getElementById("val_signup").innerHTML='<div class="message_box_red">You have already Registered with Us!</div>';							
								}
								else
								{	
								
									if(error)
									{
										
									document.getElementById("val_signup").innerHTML='<div class="message_box_red"> '+error+'..</div>';						
									}
									else
									{
										$("#loading").css("visibility","visible")
										document.forms['signup'].submit();
									}
								}							
                               
                            }
                        });
                        // prevents from refreshing the page
                        return false;  
		
		
	}
	
	function create_captcha_share()
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
										document.getElementById("captcha_share").innerHTML='<input type="hidden" id="share_captcha_code" name="captcha_code" value="'+mystr[0]+'" >'+mystr[1];	
										//alert(msg); 
									 }
									 else
									 {
										 document.getElementById("captcha_share").innerHTML='<center><div clas="msg_div">captcha...</div></center>';
									 }
								
							}
							
					 });
					 return false;
					 
		
	}
	function create_captcha()
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
										document.getElementById("captchaa").innerHTML='<input type="hidden" id="captcha_code" name="captcha_code" value="'+mystr[0]+'" >'+mystr[1];	
										//alert(msg); 
									 }
									 else
									 {
										 document.getElementById("captchaa").innerHTML='<center><div clas="msg_div">captcha...</div></center>';
									 }
								
							}
							
					 });
					 return false;
					 
		
	}
	function create_captcha_qote()
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
										document.getElementById("captchaa_qote").innerHTML='<input type="hidden" id="captcha_code_qote" name="captcha_code" value="'+mystr[0]+'" >'+mystr[1];	
										//alert(msg); 
									 }
									 else
									 {
										 document.getElementById("captchaa_qote").innerHTML='<center><div clas="msg_div">captcha...</div></center>';
									 }
								
							}
							
					 });
					 return false;
					 
		
	}
	function create_captcha_newsletter()
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
										document.getElementById("captchaa_news").innerHTML='<input type="hidden" id="captcha_code_news" name="captcha_code_news" value="'+mystr[0]+'" >'+mystr[1];	
										//alert(msg); 
									 }
									 else
									 {
										 document.getElementById("captchaa_news").innerHTML='<center><div clas="msg_div">captcha...</div></center>';
									 }
								
							}
							
					 });
					 return false;
					 
		
	}
	
	
	
	
	
	function request_submit()
	{
		document.getElementById("val_request").innerHTML='<div class="walid" >Wait.</div>';
		var error1='';
		if($('#req_date').val()==''){document.getElementById("val_request").innerHTML='<div class="walid" >Date Required.</div>';error1=1}
		if($('#req_name').val()==''){document.getElementById("val_request").innerHTML='<div class="walid" >Name Required.</div>';error1=1}
		if($('#req_email').val()==''){document.getElementById("val_request").innerHTML='<div class="walid" >Email Required.</div>';error1=1}
		if($('#req_captcha').val()!=$('#captcha_code').val()){document.getElementById("val_request").innerHTML='<div class="walid" >Invalid Captcha.</div>';error1=1}
		var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		 var ema=$('#req_email').val();
		 if (!filter.test(ema)) {
							document.getElementById("val_request").innerHTML='<div class="walid" >Invalid Email..</div>';
							return false; 
			}
		
		if(error1)
		{
			
		}
		else
		{
			var form_data = {                           
                            date: $('#req_date').val(),name: $('#req_name').val(),email: $('#req_email').val(),property_id: $('#prop_id').val()							                       
                        };	
			 $.ajax({
                            url: "<?php echo site_url();?>/user/request_property/",
                            type: "post",
                            data: form_data,
                            success: function(msg) {
									if(msg==1)
									 {
										document.getElementById("val_request").innerHTML='<div class="walid" >Request sent......</div>';	 
									 }
									 else
									 {
										 document.getElementById("val_request").innerHTML='<div class="walid">Request not sent...</div>';
									 }
								
							}
							
					 });
					 
				setTimeout(disablePopup3,6000);
		}			
		
          return false; 		
		
	}
	
	function Ask_agent()
	{
		
		document.getElementById("val_ask_agent").innerHTML='<div class="walid">Wait.</div>';
		var error1='';
		if($('#fname').val()==''){document.getElementById("val_ask_agent").innerHTML='<div class="" style="width: 399px;  margin: 0px 0 10px 0;background: #FFE2E2;padding: 5px;line-height: 25px;text-align: left;border: 1px solid #FDB8B8;">First Name Required</div>';error1=1;}
		if($('#lname').val()==''){document.getElementById("val_ask_agent").innerHTML='<div class="" style="width: 399px;  margin: 0px 0 10px 0;background: #FFE2E2;padding: 5px;line-height: 25px;text-align: left;border: 1px solid #FDB8B8;">Last Name Required</div>';error1=1;}
		if($('#email').val()==''){document.getElementById("val_ask_agent").innerHTML='<div class="" style="width: 399px;  margin: 0px 0 10px 0;background: #FFE2E2;padding: 5px;line-height: 25px;text-align: left;border: 1px solid #FDB8B8;">Email Required</div>';error1=1;}
		else{
			var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
			 var ema=$('#email').val();
			 if (!filter.test(ema)) {
								document.getElementById("val_ask_agent").innerHTML='<div class="" style="width: 399px;  margin: 0px 0 10px 0;background: #FFE2E2;padding: 5px;line-height: 25px;text-align: left;border: 1px solid #FDB8B8;"> Invalid Email</div>';error1=1;
				}
		}
		if($('#phone').val()==''){document.getElementById("val_ask_agent").innerHTML='<div class="" style="width: 399px;  margin: 0px 0 10px 0;background: #FFE2E2;padding: 5px;line-height: 25px;text-align: left;border: 1px solid #FDB8B8;">Phone Required</div>';error1=1;}
		
		if(error1)
		{
			
			
		}
		else
		{
			var form_data = {                           
                            fname: $('#fname').val(),lname: $('#lname').val(),email: $('#email').val(),phone: $('#phone').val(),msg: $('#msg').val()							                       
                        };	
			 $.ajax({
                            url: "<?php echo base_url();?>index.php/user/ask_an_agent/",
                            type: "post",
                            data: form_data,
                            success: function(msg) {								
									if(msg==1)
									 {
										document.getElementById("val_ask_agent").innerHTML='<div class="" style="width: 399px;  margin: 0px 0 10px 0;background: #FFE2E2;padding: 5px;line-height: 25px;text-align: left;border: 1px solid #FDB8B8;color:#090;">Request Sent...</div>';
										
										document.getElementById("fname").value='';
										document.getElementById("lname").value='';
										document.getElementById("email").value='';
										document.getElementById("phone").value='';
										document.getElementById("msg").value='';	 
										
									 }
									 else
									 {
										 document.getElementById("val_ask_agent").innerHTML='<div class="walid" style="width: 399px;  margin: 0px 0 10px 0;background: #FFE2E2;padding: 5px;line-height: 25px;text-align: left;border: 1px solid #FDB8B8;" >Request not Sent...</div>';
									 }
								
							}
							
					 });
					 
					
		}	//else ends her		
		
          return false; 
		
	}

function validate_quote()
	{
		document.getElementById("val_quote").innerHTML='<div class="walid" >Wait.</div>';
		var error1='';
		if($('#quote_email').val()==''){document.getElementById("val_quote").innerHTML=' <div class="walid" >Email Required</div><div style="clear:both;"></div> ';error1=1;}
		else
		{
			var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
			 var ema=$('#quote_email').val();
			 if (!filter.test(ema)) {
						document.getElementById("val_quote").innerHTML=' <div class="walid" >Invalid Email </div><div style="clear:both;"></div> ';error1=1;
				}	
		}
		if($('#quote_name').val()==''){document.getElementById("val_quote").innerHTML=' <div class="walid" >Name Required</div><div style="clear:both;"></div> ';error1=1;}
		
		/*if($('#quote_captcha').val()!=$('#captcha_code_qote').val()){document.getElementById("val_quote").innerHTML=' <div class="walid" >Invalid Captcha.</div><div style="clear:both;"></div> ';error1=1;}*/
		if(error1)
		{
			
		}
		else
		{
			var form_data = {                           
                            email: $('#quote_email').val(),name: $('#quote_name').val()							                       
                        };	
			 $.ajax({
                            url: "<?php echo base_url();?>index.php/user/get_quote/",
                            type: "post",
                            data: form_data,
                            success: function(msg) {
									if(msg==1)
									 {
										document.getElementById("val_quote").innerHTML='<div class="walid">Quote sent......</div>';	 
									 }
									 else
									 {
										 document.getElementById("val_quote").innerHTML='<div class="walid" >Quote not sent...</div>';
									 }
								
							}
							
					 });
					 
				setTimeout(disablePopup,5000);	
		}			
		
		
          return false; 		
		
	}
	
	
	
	function share_submit()
	{
		document.getElementById("val_share").innerHTML='<div class="walid" >Wait.</div>';
		var error1='';
		if($('#share_to_name').val()==''){document.getElementById("val_share").innerHTML=' <div class="walid" >To Name Required</div> ';error1=1;}
		if($('#share_email').val()==''){document.getElementById("val_share").innerHTML=' <div class="walid" >To Email Required</div> ';error1=1;}
		else
		{
			var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
			 var ema=$('#share_email').val();
			 if (!filter.test(ema)) {
				document.getElementById("val_share").innerHTML=' <div class="walid" >Invalid Email </div><div style="clear:both;"></div> ';error1=1;
				}		
		}
		if($('#share_fname').val()==''){document.getElementById("val_share").innerHTML=' <div class="walid" >From Fname Required</div> ';error1=1;}
		if($('#share_lname').val()==''){document.getElementById("val_share").innerHTML=' <div class="walid" >From Lname Required</div> ';error1=1;}
		if($('#share_frm_email').val()==''){document.getElementById("val_share").innerHTML=' <div class="walid" >From Email Required</div> ';error1=1;}
		else
		{
			var filter1 = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
			 var ema1=$('#share_frm_email').val();
			 if (!filter1.test(ema1)) {
				document.getElementById("val_share").innerHTML=' <div class="walid" >Invalid Email </div><div style="clear:both;"></div> ';error1=1;
				}		
		}
			
		
		if($('#share_captcha').val()!=$('#share_captcha_code').val()){document.getElementById("val_share").innerHTML=' <div class="walid" >Invalid Captcha</div> ';error1=1;}
		if(error1)
		{
			
		}
		else
		{
			var form_data = {                           
                            name: $('#share_to_name').val(),email: $('#share_email').val(),property: $('#share_prop').val(),share_fname: $('#share_fname').val(),share_lname: $('#share_lname').val(),share_frm_email: $('#share_frm_email').val(),msg: $('#shar_msg').val()							                       
                        };	
			 $.ajax({
                            url: "<?php echo base_url();?>index.php/user/share/",
                            type: "post",
                            data: form_data,
                            success: function(msg) {								
									if(msg==1)
									 {
										document.getElementById("val_share").innerHTML='<div class="walid">Property shared......</div>';	 
									 }
									 else
									 {
										 document.getElementById("val_share").innerHTML='<div class="walid">Property not shared...</div>';
									 }
								
							}
							
					 });
					 
				//setTimeout(disablePopup1,5000);
		}			
		
          return false; 		
		
	}
	
	
		function email_list()
		{
		 var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		 var ema=$('#sub_email').val();
		
		 var form_data = {                           
                            email: $('#sub_email').val()                           
                        };
						if( $('#sub_email').val()==""){
									document.getElementById("txtHint").innerHTML='<div class="walid">Email Required..</div>';
									exit();
									}
					if( $('#captcha_code_news').val()!= $('#news_captcha').val()){
						document.getElementById("txtHint").innerHTML='<div class="walid">Invalid Captcha..</div>';
						exit();
						
						}	
						if (!filter.test(ema)) {
							document.getElementById("txtHint").innerHTML='<div class="walid">Invalid Email..</div>';
									exit();
							
						}
		$.ajax({
                            url: "<?php echo base_url();?>index.php/ajax/checkuser/",
                            type: "post",
                            data: form_data,
                            success: function(msg) {
																
									if(msg==1)
										{
										document.getElementById("txtHint").innerHTML='<div class="walid">User Already Exist..</div>';
										}
										else
										{
											document.getElementById("txtHint").innerHTML='<div class="walid">You are subscribed to our newsletter</div>';
											disablePopupFav();
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


<!--------Footer Section----------->
<div class="footerSection">
	<!---Top--->
    <div class="top">
    <div class="ftr_topInn">
		<!--Left-->
   		
    	
        <!--right-->
    	<div class="righter">
        	
    	

   
   
   

	<!---Bottom--->
    <div class="bottom">
    
    	<ul>
        <div class="lefter">
        	<a href="#"><img src="<?php echo $image_path;?>logo2.png" alt=""></a>
        </div>
			<li><a href="<?php echo site_url();?>/pages/advertise/">Advertise With Us</li>
        	<li><a href="#">Agent Information</a></li>
        	<li><a href="<?php echo site_url();?>/contact/">Contact Us</a></li>
        </ul>
        <p>
       <?php 
	   $con=@mysql_query("select * from tbl_footer_content");
	   $con_dt=@mysql_fetch_object($con);
	    echo stripslashes($con_dt->footer_content); ?>
        </p>
        
        <h4>©2013 imyrle - <a href="<?php echo site_url();?>/pages/terms/" >Terms of Service</a> - <a href="<?php echo site_url();?>/pages/privacy/">Privacy Policy</a> - <a href="<?php echo site_url();?>/pages/program_policy/" >Program Policies</a></h4>
    </div>
    <!---End Bottom--->
    
    
    </div>
    
    <div class="box5">
            	<h1>Get Social</h1>
                <div class="socialise">
                	<ul>
                    	<li><a href="https://www.facebook.com/" target="_blank"><img src="<?php echo $image_path;?>icon_fb.png" alt="Facebook"></a></li>
                        <li><a href="http://www.linkedin.com/" target="_blank"><img src="<?php echo $image_path;?>icon_linked.png" alt="LinkedIn"></a></li>
                        <li><a href="https://www.youtube.com/" target="_blank"><img src="<?php echo $image_path;?>icon_yt.png" alt="Youtube"></a></li>
                        <li><a href="https://twitter.com/" target="_blank"><img src="<?php echo $image_path;?>icon_twtr.png" alt="Twitter"></a></li>
                        <li><a href="#" target="_blank"><img src="<?php echo $image_path;?>icon_skype.png" alt="Skype"></a></li>
                        <li><a href="https://plus.google.com/" target="_blank"><img src="<?php echo $image_path;?>icon_gplus.png" alt="Google Plus"></a></li>
                        <li><a href="http://www.flickr.com/" target="_blank"><img src="<?php echo $image_path;?>icon_flicker.png" alt="Flicker"></a></li>
                        <li><a href="https://www.pinterest.com/" target="_blank"><img src="<?php echo $image_path;?>icon_pin.png" alt="Pinterest"></a></li>
                    </ul>
                </div>
            </div>
    
    </div>    
    <!--End of Top-->
	
    
</div>    
    <!--End of Top-->
	
    
</div>
<!------End of Footer Section-------->





<!--Popup--->
<div id="popupContact">
		<a id="popupContactClose"></a>
        <div class="ppUpttl">
			<h1>Get a free quote</h1>
        </div>
		<div id="val_quote"></div>
		<div class="ppUpContent">
        <form name="free" method="post" enctype="multipart/form-data">
        	<div class="ppItem">
        		<span class="ppupName">Name :</span>
                <div class="ppupAns">
                	<input name="name" type="text" placeholder="Enter your name here." class="ppuptxtbx" id="quote_name">
                </div>
            </div>
            
            <div class="ppItem">
        		<span class="ppupName">Email :</span>
                <div class="ppupAns">
                	<input name="email" type="text" placeholder="Enter your email here." class="ppuptxtbx" id="quote_email">
                </div>
            </div>
            
            <?php /*?><div class="ppItem">
        		<span class="ppupName">Captcha
                </span>
                <div id="captchaa_qote" style="width:157px;float:left;padding-left:7px;padding-bottom:5px;"><img src="<?php echo base_url().'images/captcha/1377600760.1257.jpg';?>" /></div>
                <div><a href="#" onclick="return create_captcha_qote()" ><img src="<?php echo $image_path; ?>lod.png" /></a></div>
                <div class="ppupAns" style="padding:0px 2px 0px 0px;">
                        
                	<input type="text" placeholder="Enter Captcha here." class="ppuptxtbx" name="quote_captcha" id="quote_captcha">
                   
                </div>
            </div><?php */?>
            
            
            <div class="ppItem3">
            <div class="con">
        		<input type="button" value="Submit" class="btnblue" onclick="return validate_quote();">
            </div>
            </div>
            
            </form>
		</div>
        
        
	</div>
	<div id="backgroundPopup"></div>
<!--End of Popup-->




<!--Popup 3--->
<div id="popup_showing" class="popup_outer" style="z-index:17;">
		<a id="popup3_close" class="popUp_close"></a>
        <div class="ppUpttl">
			<h1>Request a Showing</h1>
        </div>
	<form name="request" method="post" enctype="multipart/form-data">
    <div id="val_request" ></div>
		<div class="ppUpContent">
        
        	<div class="ppItem">
        		<span class="ppupName">Name :</span>
                <div class="ppupAns">
                	<input type="text" placeholder="Enter your name here." class="ppuptxtbx" name="req_name" id="req_name">
                </div>
            </div>
            
                      
            <div class="ppItem">
        		<span class="ppupName">Email :</span>
                <div class="ppupAns">
                	<input type="text" placeholder="Enter your Email here." class="ppuptxtbx" name="req_email" id="req_email">
                </div>
            </div>

			<div class="ppItem">
        		<span class="ppupName">Date & time :</span>
                <div class="ppupAns">
                        
                	<input type="text" placeholder="Enter your date" class="tcal ppuptxtbx" name="req_date" id="req_date" >
                    <input type="hidden" name="prop_id" value="<?php echo stripslashes($onlinepro[0]['L_ListingID']);?>" id="prop_id" />
                </div>
            </div>
            <div class="ppItem">
        		<span class="ppupName">Captcha
                </span>
                <div id="captchaa" style="width:157px;float:left;padding-left:7px;padding-bottom:5px;"><img src="<?php echo base_url().'images/captcha/1377600760.1257.jpg';?>" /></div>
                <div><a href="#" onclick="return create_captcha()" ><img src="<?php echo $image_path; ?>lod.png" /></a></div>
                <div class="ppupAns" style="padding:0px 2px 0px 0px;">
                        
                	<input type="text" placeholder="Enter Captcha here." class="ppuptxtbx" name="req_captcha" id="req_captcha">
                   
                </div>
            </div>
            
            
            <div class="ppItem3">
            <div class="con">
        		<input type="button" name="submit" value="Submit" class="btnblue" onclick="return request_submit()">
            </div>
            </div>
            
		</div>
        </form>
        
        
	</div>
	<div id="popup3_bg" class="popup_black"></div>
<!--End of Popup 3-->




<!--Popup 5--->
<div id="popup_fav" class="popup_outer">
		<a id="popupFav_close" class="popUp_close" ></a>
       
        <div class="ppUpttl">
			<h1>Subscribe this property</h1>
            
        </div>
         <div  id="txtHint" ></div>
        <form name='first'>
        <div class="ppItem">
        <span class="ppupName">Email :</span>
                <div class="ppupAns">
                <input type="text" placeholder="Enter your mail here" class="ppuptxtbx" name="sub_email" value="" id="sub_email">
                </div>
            </div>

		<div class="ppItem">
        		<span class="ppupName">Captcha
                </span>
                <div id="captchaa_news" style="width:157px;float:left;padding-left:7px;padding-bottom:5px;"><img src="<?php echo base_url().'images/captcha/1377600760.1257.jpg';?>" /></div>
                <div><a href="#" onclick="return create_captcha_newsletter()" ><img src="<?php echo $image_path; ?>lod.png" /></a></div>
                <div class="ppupAns" style="padding:0px 2px 0px 0px;">
                        
                	<input type="text" placeholder="Enter Captcha here." class="ppuptxtbx" name="news_captcha" id="news_captcha">
                   
                </div>
            </div>
            
			<div class="ppItem3">
            <div class="con">
        <input type="button" value="Subscribe" class="calc btnblue" name="subscribe" onclick='return email_list();'>
            </div>
            </div>
        </form>
        
	</div>
	<div id="popupFav_bg" class="popup_black"></div>
<!--End of Popup 5->



                   
 
 
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
 
<link rel="stylesheet" type="text/css" href="<?php echo $css_path;?>tcal.css" />
	<script type="text/javascript" src="<?php echo $js_path;?>tcal.js"></script>
<!------------------------  search end ------------------------------->    

</body>
</html>