<?php	
	$admin_css_path = base_url()."assets/backend/css/admin/";
	$admin_js_path = base_url()."assets/backend/js/admin/";
	$admin_image_path = base_url()."assets/backend/images/admin/";
	$admin_form_path = base_url()."assets/backend/images/forms/";
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

            	<div class="pageName"><img src="<?php echo $admin_image_path; ?>bsns_icon1.png" alt=""> Add Packages Catagory</div>
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
            
            <div class="frmFieldTTL"><span>Add Package Catagory</span></div>

            <div class="frmFieldContent">

            	<div class="frmFieldContentInn">

					<div class="frmFieldItem">

                    	<span>Catagory </span>

                     <input value="<?php echo $arr_view['catagory'];?>" type="text" class="txtbx" placeholder="Enter  here." name="catagory" required="required">
                    </div>
                    
                      <div class="frmFieldItemExtraLarge">

                    	<div class="tiny_label"> Description</div>

                        <div class="tiny_text"><textarea name="description" id="tiny"><?php echo $arr_view['description'];?></textarea></div>

                    </div>
                    
                    <div class="frmFieldItem">

                    	<span>Image </span>

                     <input type="file" name="image" />
                     <input type="hidden" value="<?php echo $arr_view['image'];?>" name="imageid1" />
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
    
    
    
    
    
     <div class="dataTables_wrapper" id="example_wrapper">
                 <table id="example" class="display"> 
                                <thead> 
                                    <tr> 
                                        <th class="" style="text-align:left"  >Sl. No</th> 
                                        <th style="text-align:left"  >Title</th>                                                                           
                                                                               
                                        <th>Actions</th> 
                                    </tr> 
                                </thead> 
                                 
                            <tbody>
                             <?php 
								if($this->uri->segment(4))
									{
										$row_count=$this->uri->segment(4);
										$page = $this->uri->segment(4);
									}
								else
									{
										$row_count=0;
										$page = 0;
									}
											
								$row_count=$row_count+1;
								$div_count=1;
							?>
                            <?php foreach($package_cat as $req):?>
                            
								<tr class="<?php if(($div_count % 2)==0){echo "even"; }else{echo "odd";}?>">
    								<td><?php echo stripslashes($row_count); ?></td>
    								<td><?php echo ucfirst(stripslashes($req['catagory']));?></td>
                                    
    								
     								
                                     										
                                     <td style="text-align:center">     
                                     
                                     <div class="view_butt">
                                     
                                     <a title="View detail" href="
				 <?php  echo site_url(); ?>/backend/packageCatagory/add/<?php echo stripslashes($req['id']);?>/<?php echo stripslashes($req['id']);?>">
									<img border="0" src="<?php echo $admin_image_path;?>view.png">
								</a>
                                     
                                     
                                     
                                     
                                     	
                                </div>
                                
                                
                                <div class="btnAddCatDlt">
                                <a onclick="return confirm('Do ypu really want to delete this item?')" href="<?php echo site_url(); ?>/backend/packageCatagory/deleteDetail/<?php echo stripslashes($req['id']); ?>">
									<img border="0" src="<?php echo $admin_image_path;?>btnAddCat_Dlt.png">
                                     
                                   </div>  
                                                                                    
                                        
                                    </td>         
                                    
                                                                                   
                                     
                                     
                                     
 								 </tr>
                                 <?php $div_count++; $row_count++;?>
                               <?php endforeach;?>
  
								
 			 		</tbody>
     	</table>
        <div class="pagin" style="float:right;"><?php echo $this->pagination->create_links();?></div>
  </div>

    </td><!--Pages Content Area Ends Here-->
<?php $this->load->view('admin/include/footer');?>