<?php	
	$css_path = base_url()."css/";
	$js_path = base_url()."js/";
	$image_path = base_url()."images/";
?>

<?php  $this->load->view('include/header_inner'); ?>

<script>

$( document ).ready(function() {
	

  createcontact_captcha();
});
</script>

<script type="text/javascript">

function createcontact_captcha()
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
										document.getElementById("captchaa_cont").innerHTML='<input type="hidden" id="captcha_code" name="captcha_code" value="'+mystr[0]+'" >'+mystr[1];	
										//alert(msg); 
									 }
									 else
									 {
										 document.getElementById("captchaa_cont").innerHTML='<center><div clas="msg_div">captcha...</div></center>';
									 }
								
							}
							
					 });
					 return false;
					 
		
	}
	function validate_carrer()
	{
		if($('#captcha_cod_dream').val() != $('#captcha_code').val())
		{
			 document.getElementById("vali").innerHTML='<div class="message_box_red">Invalid captcha...</div>';
			 scroll(0,100);
			 return false;
		}
			
	}
	
	</script>

<!---------Featured Properties------------>
<div class="clr"></div>
<div class="innerPageHdr">
   	<div class="innerPageHdrSec">
    	<div class="left"><h1>Career</h1><h2>Get in touch</h2></div>
    	<div class="right"><h1>You are Here At</h1><h2><a href="#">Home</a> / Career</h2></div>
    </div>
    </div>

<div class="carrer">
<h2>Career</h2>
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>

	 <form name="contact" method="post" enctype="multipart/form-data" action="<?php echo site_url();?>/career/save_application" 
     onclick="window.scroll(0,200);" >
      <h3 style="margin:5px 0px 15px 210px; color:#F00;"><?php //echo $this->session->flashdata('alert_flash'); if(isset($alert)){ echo $alert; } echo validation_errors();?></h3>
	<?php if(isset($alert)){ echo '<div class="message_box_green">'.$alert.'</div>';}?>
    <?php if($this->session->flashdata('alert_flash')){ echo '<div class="message_box_green">'.$this->session->flashdata('alert_flash').'</div>';}?>
        	
            
            <div class="registItem9">
            	<span>Name</span>
                <input type="text" placeholder="Enter your first name here!" class="txtbx" name="name" required  id="nam" >
            </div>
            
             <div class="registItem9">
            	<span>Phone</span>
                <input type="text" placeholder="Enter your phone number here!" class="txtbx" name="phone" required>
            </div>
            
         
            
            <div class="registItem9">
            	<span>My Email</span>
                <input type="email" placeholder="Enter your email here!" class="txtbx" name="email" required>
            </div>
            
            <div class="registItem9">
            	<span>Gender</span>
               <select  class="txtdn" required name="gender">
                <option value="">--</option>
                <option value="">-- SELECT --</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
                </select>
            </div>
            <div class="registItem9">
            	<span>Marital status</span>
               <select  class="txtdn" required name="marital">
                <option value="">--</option>
                    <option value="">-- SELECT --</option>
            <option value="Married">Married</option>
            <option value="Unmarried">Unmarried</option>
                </select>
            </div>
            
            
              
              <div class="registItem9">
            	<span>Experince</span>
               <select name="experience" class="txtdn" required >
                <option value="">-- SELECT --</option>
                <option value="0">Fresher</option>
                <option value="1">1</option>
                <option value="5">5</option>
                <option value="10">10</option>
                <option value="20">above 20</option>
                </select>
            </div>
            <div class="registItem9">
            	<span>Course</span>
                <input type="text" placeholder="Enter course here!" class="txtbx" name="course" >
            </div>
            <div class="registItem9">
            	<span>Salary</span>
                <input type="text" placeholder="Enter your Salary here!" class="txtbx" name="salary" >
            </div>
           <div class="registItem9">
            	<span>Applying for </span>
                <input type="text" placeholder="Applying for!" class="txtbx" name="applying" required>
            </div>
            <div class="registItem9">
            	<span>Employer</span>
                <input type="text" placeholder="Applying for!" class="txtbx" name="employer" >
            </div>
            <div class="registItem9">
            	<span>Current designation</span>
                <input type="text" placeholder="Current designation" class="txtbx" name="designation" >
            </div>
            <div class="registItem9">
            	<span>address</span>
               <textarea name="address" placeholder="address" class="txtar" required></textarea>
            </div>
            
            <div class="registItem9">
            	<span>Photo</span>
                 <div class="edtprofilePhoto9">
                    <input name="resume" type="file" class="sellerItembtn9">
                    </div>
              </div>


<div class="registItem9">
            	<span>capcha</span>
                 <div id="captchaa_cont" style="float:left" class="capc2"><img src="<?php echo base_url().'images/captcha/1377600760.1257.jpg';?>" 
 style="margin-left:0px;" /></div>
                <a href="#" class="cap_img2" onclick="return createcontact_captcha()" >
                <img src="<?php echo $image_path; ?>lod.png" /></a>
        <div class="cap_text2" style="margin-left:-7px"> 
    
    <input type="text" name="captcha_cod_dream" placeholder="Enter Captcha" class="cap_text_filed2" required="required" id="captcha_cod_dream"/>
    </div> 
              </div>	
            
            
            <div class="registBtn9">
            	<div class="btn1">               
                <input type="submit" class="sbmtSrch registBtnWidth9" value="Save & Submit" name="career"></div>
            </div>
            
            
        </div>
		</form>
</div>

<!---------End of Featured Properties------------>
<?php  $this->load->view('include/footer'); ?>