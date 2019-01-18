<?php	
	$css_path = base_url()."css/";
	$js_path = base_url()."js/";
	$image_path = base_url()."images/";
?>
<?php 
//var_dump($arr_view);exit();
?>
<?php  $this->load->view('include/header_inner'); ?>



<!---------Featured Properties------------>
<div class="carrer">
<img src="<?php echo $image_path;?>career.png">
<h2> <?php echo ucfirst(stripslashes($arr_view[0]['career_title']));?></h2>
<p><?php echo ucfirst(stripslashes($arr_view[0]['career_content']));?></p>
</div>

<!---------End of Featured Properties------------>

<div class="contactInn">
    
    
    
    
    <div class="ttl"><h1>Apply for career</h1></div>
    <h3 style="margin:5px 0px 15px 210px; color:#F00;"><?php echo $this->session->flashdata('alert_flash'); if(isset($alert)){ echo $alert; } ?></h3>
    <form name="contact" method="post" enctype="multipart/form-data" action="<?php echo site_url();?>/career/save_application">	
    
    <div class="fdbck">
    	<div class="itemC">
            <div class="name">Name</div>
            <input type="text" class="textBoxC" placeholder="Enter your  name" name="name" required="required">
        </div>
        <div class="itemC">
            <div class="name">Mobile Phone</div>
            <input type="number" class="textBoxC" placeholder="Enter your mobile" name="phone" required="required">
        </div>
        <div class="itemC">
            <div class="name">Email</div>
            <input type="email" class="textBoxC" placeholder="Enter your email" name="email" required="required">
        </div>
        <div class="itemC">
            <div class="name">Gender</div>
            <select type="text" class="textBoxC"  name="gender" required>
            <option value="">-- SELECT --</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            
            </select>
        </div>
        
        <div class="itemC">
            <div class="name">Marital status</div>
            <select type="text" class="textBoxC"  name="marital" required>
            <option value="">-- SELECT --</option>
            <option value="Married">Married</option>
            <option value="Unmarried">Unmarried</option>
            
            </select>
        </div>
        

        <div class="itemC">
            <div class="name">Address</div>
            <input type="text" class="textBoxC" placeholder="Enter your email" name="address" required="required">
        </div>        
        <div class="itemC">
            <div class="name">Experience</div>
            <select type="text" class="textBoxC"  name="experience" required>
            <option value="">-- SELECT --</option>
            <option value="1">1</option>
            <option value="5">5</option>
            <option value="10">10</option>
            <option value="20">above 20</option>
            
            
            </select>
        </div>
        
        <div class="itemC">
            <div class="name">Course</div>
            <input type="text" class="textBoxC" placeholder="Enter your course" name="course" required>
        </div>
        <div class="itemC">
            <div class="name">Job applying for</div>
            <input type="text" class="textBoxC" placeholder="Applying for" name="applying" required>
        </div>
                <div class="itemC">
            <div class="name">Current employer</div>
            <input type="text" class="textBoxC" placeholder="Enter your employer" name="employer" required>
        </div>
        <div class="itemC">
            <div class="name">Current designation</div>
            <input type="text" class="textBoxC" placeholder="designation" name="designation" required>
        </div>
        <div class="itemC">
            <div class="name">salary</div>
            <input type="number" class="textBoxC" placeholder="Enter your annual salary" name="salary" required>
        </div>

        <div class="itemC">
            <div class="name">Resume</div>
            <input name="resume" type="file" class="btnNew" title="Upload Resume" value="Upload Resume" >
        </div>

        
        <div class="itemC">
        <input type="submit" class="search_con" value="Submit" name="career">
         </div>
       
        
        <div class="itemC">
        <?php if(isset($error_msg)){ ?>
            <div class="name2"><?php echo $error_msg;?></div>
            <?php } ?>
             </form>
        </div>
        
    
</div>
</div>

<?php  $this->load->view('include/footer'); ?>