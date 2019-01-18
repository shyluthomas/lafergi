<?php	
	$admin_css_path = base_url()."css/admin/";
	$admin_js_path = base_url()."js/admin/";
	$admin_image_path = base_url()."images/admin/";
?>
<?php $this->load->view('admin/include/header');?>
<td class="contentArea"><!--Pages Content Area Start-->

   	<div class="contentArea_inn">

        	<div class="pageWise_TTL">

            	<div class="pageName"><img src="<?php echo $admin_image_path; ?>bsns_icon1.png" alt=""> Change Password</div>             

            </div>

           			 <div class="clearfix">
                                   <h3 style="margin:5px 0px 15px 210px; color:#F00;"><?php if(isset($error_msg)){ echo $error_msg; } ?></h3>
                                </div>
			<form name="" method="post" enctype="multipart/form-data">
            <div class="frmFieldTTL"><span>Change Password</span></div>

            <div class="frmFieldContent">

            	<div class="frmFieldContentInn">

					<div class="frmFieldItem">

                    	<span>Old Password </span>

                        <input type="password" class="txtbx" placeholder="Old password." name="old_pass" id="opass"  required="required">

                    </div>
                    
                    <div class="frmFieldItem">

                    	<span>New Password  </span>

                        <input class="txtbx" placeholder="New Password ." name="new_pass" id="npass"  required="required" type="password">

                    </div>
                    
                    <div class="frmFieldItem">

                    	<span>Retype New Password </span>

                        <input class="txtbx" placeholder="Retype New Password ." name="confirm_pass" id="rpass"  type="password" required="required">

                    </div>

                    
                    
                    
                    
                    


              </div>

            </div>
       <!---------------------------->
            </div>
            </div>
            </div>
            <div class="frmFieldBtnSave_here">

				<input name="save" type="submit" class="btnSave1" title="Save" style="color:transparent;" value="ll">
				<input type="button" value="" class="btnSave02" onclick="history.go(-1)" >
			<input type="hidden" name="id" id="id" value="">
            </div>

            

            <!--End-->
		</form>
            

    </div>

    </td><!--Pages Content Area Ends Here-->
<?php $this->load->view('admin/include/footer');?>



