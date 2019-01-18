<?php	
	$admin_css_path = base_url()."assets/backend/css/admin/";
	$admin_js_path = base_url()."assets/backend/js/admin/";
	$admin_image_path = base_url()."assets/backend/images/admin/";
	$admin_form_path = base_url()."assets/backend/images/forms/";
	
?>
<?php $this->load->view('admin/include/header');?>
<script type="text/javascript" src="<?php echo $admin_js_path?>tinymce/tinymce.min.js"></script>
<script type="text/javascript">
tinymce.init({
    selector: "#tiny"
 });
</script> 

<td class="contentArea"><!--Pages Content Area Start-->

   	<div class="contentArea_inn">

        	<div class="pageWise_TTL">

            	<div class="pageName"><img src="<?php echo $admin_image_path; ?>bsns_icon1.png" alt=""> Add packages</div>
                <div class="pageName" style="float:right;"> <a href="<?php  echo site_url(); ?>/backend/packages/">Packages</a></div>

               <!-- <ul>

                	<li><a href="business_businessList.html">See Full Listing</a></li>

                    <li><a href="business_addNewBussiness.html" class="active">Add New Business</a></li>

                    <li><a href="business_addNewCategory.html">Business Categories</a></li>

                </ul>-->

            </div>

           			 <div class="clearfix">
                                   <h3 style="margin:5px 0px 15px 210px; color:#F00;"><?php if(isset($alert)){ echo $alert; } ?></h3>
                                </div>
			<form name="add_properties" method="post" enctype="multipart/form-data">
            
            <div class="frmFieldTTL"><span>Add packages</span></div>

            <div class="frmFieldContent">

            	<div class="frmFieldContentInn">

					<div class="frmFieldItem">

                    	<span>Title </span>

                     <input value="" type="text" class="txtbx" placeholder="Enter  here." name="title" required="required">
                    </div>
                    
                    <div class="frmFieldItem">

                    	<span>Package Catagory Type </span>

                    <select name="catagory_type" class="txtbx" >
                      <option value="">Select</option>
                    <option value="Minivan Packages">Minivan Packages</option>
                       <option value="Pilgrim Packages">Pilgrim Packages</option>
                      <option value="Leisure Packages">Leisure Packages</option>
                         
                    </select>
                    </div>
                    
                    <div class="frmFieldItem">

                    	<span>Package Catagory </span>

                    <select name="catagory" class="txtbx" >
                     <?php foreach($package_cat as $req):?>
                    	<option value="<?php echo $req['catagory'];?>"><?php echo $req['catagory'];?></option>
                        
                         <?php endforeach;?>
                    </select>
                    </div>
                    
                    <div class="frmFieldItem">

                    	<span>Order </span>

                     <input value="1" type="text" class="txtbx" placeholder="Enter  here." name="order" required="">
                    </div>
                    
                    <div class="frmFieldItem">

                    	<span>Prize </span>

                     <input value="" type="text" class="txtbx" placeholder="Enter  here." name="prize" required="required">
                    </div>
                    
                    <div class="frmFieldItem">

                    	<span>Hotel Facility </span>
					YES<input type="radio" value="yes"  name="hotel"/>   NO<input type="radio" value="no"  name="hotel"/>
                  
                    </div>
                    <div class="frmFieldItem">

                    	<span>Air Ticket </span>

                    YES<input type="radio" value="yes"  name="airticket"/>   NO<input type="radio" value="no"  name="airticket"/>
                  
                    </div>
                    
                    <div class="frmFieldItem">

                    	<span>Breakfast combo </span>

                    YES<input type="radio" value="yes"  name="breakfast"/>   NO<input type="radio" value="no"  name="breakfast"/>
                  
                    </div>

                    <div class="frmFieldItemExtraLarge">

                    	<div class="tiny_label"> Content</div>

                        <div class="tiny_text"><textarea name="content" id="tiny"></textarea></div>

                    </div>
                    
                      <div class="frmFieldItem" style="height:auto">

                    	<span>Package Details </span>

                    <textarea name="packageDetails" rows="10" cols="50"></textarea>
                    </div>
                    
                      <div class="frmFieldItem" style="height:auto">

                    	<span>Additional Information </span>

                    <textarea name="additional_info" rows="10" cols="50"></textarea>
                    </div>
                    
                      <div class="frmFieldItem" style="height:auto">

                    	<span>Inclusion/Exclusion </span>

                    <textarea name="inclusion_exclusion" rows="10" cols="50"></textarea>
                    </div>
                      <div class="frmFieldItem" style="height:auto">

                    	<span>Highlights </span>

                    <textarea name="highlights" rows="10" cols="50"></textarea>
                    </div>
                    
                    <div class="frmFieldItem">

                    	<span>Image </span>

                    <input type="file" name="image" />
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