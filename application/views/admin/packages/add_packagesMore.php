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

            	<div class="pageName"><img src="<?php echo $admin_image_path; ?>bsns_icon1.png" alt=""> Add Details</div>

                <ul>

                	
                    <li><a href="<?php echo site_url().'/backend/packages/'?>">Packages</a></li>

                </ul>

            </div>

           			 <div class="clearfix">
                                   <h3 style="margin:5px 0px 15px 210px; color:#F00;"><?php if(isset($alert)){ echo $alert; } ?></h3>
                                </div>
			<form name="add_properties" method="post" enctype="multipart/form-data">
            <?php //foreach ($arr_view as $view):?>
            <div class="frmFieldTTL"><span><?php echo $packageDetail['title'];?> details</span></div>

            <div class="frmFieldContent">

            	<div class="frmFieldContentInn">

					<div class="frmFieldItem">

                    	<span>Day </span>

                     <input value="<?php echo $packageDetail['title']; ?>" type="text" class="txtbx" placeholder="Enter  here." name="title" required="required">
                    </div>
                    
                    

                    <div class="frmFieldItemExtraLarge">

                    	<div class="tiny_label">Details</div>

                        <div class="tiny_text"><textarea name="content" id="tiny"><?php echo $packageDetail['content'];?></textarea></div>

                    </div>
                    
                    <div class="frmFieldItem">

                    	<span>Image </span>

                    <input type="file" name="image" />
                    <input type="hidden" value="<?php echo $packageDetail['image'];?>" name="imageid1"/>
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
                            <?php foreach($package_all as $req):?>
                            
								<tr class="<?php if(($div_count % 2)==0){echo "even"; }else{echo "odd";}?>">
    								<td><?php echo stripslashes($row_count); ?></td>
    								<td><?php echo ucfirst(stripslashes($req['title']));?></td>
                                    
    								
     								
                                     										
                                     <td style="text-align:center">     
                                     
                                     <div class="view_butt">
                                     
                                     <a title="View detail" href="
				 <?php  echo site_url(); ?>/backend/packages/addPackageDetail/<?php echo stripslashes($req['package_id']);?>/<?php echo stripslashes($req['id']);?>">
									<img border="0" src="<?php echo $admin_image_path;?>view.png">
								</a>
                                     
                                     
                                     
                                     
                                     	
                                </div>
                                
                                
                                <div class="btnAddCatDlt">
                                <a onclick="return confirm('Do ypu really want to delete this item?')" href="<?php echo site_url(); ?>/backend/packages/deleteDetail/<?php echo stripslashes($req['id']).'/'.$req['package_id']; ?>">
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
            
      
            <!--End-->

            

    </div>
    

    </td><!--Pages Content Area Ends Here-->
<?php $this->load->view('admin/include/footer');?>