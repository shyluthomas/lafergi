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

            	<div class="pageName"><img src="<?php echo $admin_image_path; ?>bsns_icon1.png" alt=""> Edit careers</div>
                <div class="pageName" style="float:right;"> <a href="<?php  echo site_url(); ?>/backend/careers/add">Add New</a></div>

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
            
            <div class="frmFieldTTL"><span>Edit Careers</span></div>

            <div class="frmFieldContent">

            	<div class="frmFieldContentInn">

					<div class="frmFieldItem">

                    	<span>Title </span>

                     <input  value="<?php echo $arr_view['title'];?>" type="text" class="txtbx" placeholder="Enter  here." name="title" required="required">
                    </div>
                    
                    <div class="frmFieldItem">

                    	<span>Qualification </span>

                     <input  value="<?php echo $arr_view['qualification'];?>" type="text" class="txtbx" placeholder="Enter  here." name="qualification" required="required">
                    </div>
                    
                    <div class="frmFieldItem">

                    	<span>Description </span>

                     <textarea name="description" ><?php echo $arr_view['description'];?></textarea>
                    </div>
                    
                    
						 <input value="<?php echo $arr_view['temperature'];?>" type="hidden" class="txtbx"  name="temperature" >
                  
                   
                    
                   

                    <div class="frmFieldItemExtraLarge">

                    	<div class="tiny_label"> Content</div>

                        <div class="tiny_text"><textarea name="content" id="tiny"><?php echo $arr_view['content'];?></textarea></div>

                    </div>
                    
                    <div class="frmFieldItem">

                    	<span>Image </span>

                    <input type="file" name="image" />
                     <input type="hidden" value="<?php echo $arr_view['image'];?>" name="imageid1"/>
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