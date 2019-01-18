<?php	
	$admin_css_path = base_url()."css/admin/";
	$admin_js_path = base_url()."js/admin/";
	$admin_image_path = base_url()."images/admin/";
?>
<?php $this->load->view('admin/include/header');?>
<td class="contentArea"><!--Pages Content Area Start-->

   	<div class="contentArea_inn">

        	<div class="pageWise_TTL">

            	<div class="pageName"><img src="<?php echo $admin_image_path; ?>bsns_icon1.png" alt=""> Form Details</div>             

            </div>

           			 <div class="clearfix">
                                   <h3 style="margin:5px 0px 15px 210px; color:#F00;"><?php if(isset($alert)){ echo $alert; } ?></h3>
                                </div>
			<form name="add_properties" method="post" enctype="multipart/form-data">
            <div class="frmFieldTTL"><span>Add Blog Details</span></div>

            <div class="frmFieldContent">

            	<div class="frmFieldContentInn">
					<div class="frmFieldItem">

                    	<span>Blog Category </span>
						
                        <select class="txtbx"  name="blog_category" required>
                        <option value="">--SELECT--</option>
                        <option value="Category 1">Category 1</option>
                        <option value="Category 2">Category 2</option>
                        <option value="Category 3">Category 3</option>
                        <option value="Category 4">Category 4</option>
                        <option value="Category 5">Category 5</option>
                        </select>

                    </div>
					<div class="frmFieldItem">

                    	<span>Title </span>
						
                        <input value="" type="text" class="txtbx" placeholder="Enter  here." name="blog_title" required="required">

                    </div>

                    <div class="frmFieldItem">

                    	<span>Blog Content</span>
 
                        <textarea name="blog_content" class="txtbx" style="height:300px;"></textarea>

                    </div>
                     <div style="clear:both;"></div>
                    <div class="frmFieldItem">

                    	<span>Choose file</span>
						<p>
                        <input name="blog_image" type="file" class="btnNew" title="Upload Photo" value="Upload Photo" >
                       
                                    <!--<input type="checkbox" name="img1" value="1">Remove Image-->
                               
						</p>
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