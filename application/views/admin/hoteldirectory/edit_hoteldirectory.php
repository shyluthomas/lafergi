<?php	
	$admin_css_path = base_url()."css/admin/";
	$admin_js_path = base_url()."js/admin/";
	$admin_image_path = base_url()."images/admin/";
	$admin_form_path = base_url()."images/forms/";
	//var_dump($arr_view);exit();
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

            	<div class="pageName"><img src="<?php echo $admin_image_path; ?>bsns_icon1.png" alt=""> Edit About us</div>
<div class="pageName" style="float:right;"> <a href="<?php  echo site_url(); ?>/backend/aboutus/add">Add New</a></div>
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
            <?php //foreach ($arr_view as $view):?>
            <div class="frmFieldTTL"><span>Edit gallery</span></div>

            <div class="frmFieldContent">

            	<div class="frmFieldContentInn">

					<div class="frmFieldItem">

                    	<span>Title </span>

                     <input value="<?php echo $arr_view['title']; ?>" type="text" class="txtbx" placeholder="Enter  here." name="title" required="required">
                    </div>
                    
                    <div class="frmFieldItem">

                    	<span>Catagory </span>
					<select name="catagory" value="" class="txtbx">
                     <option value="<?php echo $arr_view['catagory']; ?>">select</option>
                   		 <option value="events">events</option>
                         <option value="associations">associations</option>
                         <option value="meetings">meetings</option>
                         <option value="activities">activities</option>
                    </select>
                    
                    </div>

                    
                    <div class="frmFieldItem">

                    	<span>Image </span>

                    <input type="file" name="aboutusimg" />
                    <input type="hidden" value="<?php echo $arr_view['image'];?>" name="imageid1"/>
                    </div>
                    
                    

              </div>

            </div>
       <!---------------------------->
            </div>
            </div>
            </div>
            <?php //endforeach;?>
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