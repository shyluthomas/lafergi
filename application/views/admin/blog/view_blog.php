<?php	
	$admin_css_path = base_url()."css/admin/";
	$admin_js_path = base_url()."js/admin/";
	$admin_image_path = base_url()."images/admin/";
	$admin_form_path = base_url()."images/forms/";
?>
<?php $this->load->view('admin/include/header');?>
<td class="contentArea"><!--Pages Content Area Start-->

   	<div class="contentArea_inn">

        	<div class="pageWise_TTL">

            	<div class="pageName"><img src="<?php echo $admin_image_path; ?>bsns_icon1.png" alt=""> Form Details</div>

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
            <div class="frmFieldTTL"><span>view Blog Details</span></div>

            <div class="frmFieldContent">

            	<div class="frmFieldContentInn">

					<div class="frmFieldItem">

                    	<span>Blog Title </span>
						<p><?php echo ucfirst(stripslashes($arr_view['blog_title'])); ?></p>
                        
                    </div>

                    <div class="frmFieldItem" >
						<span>Blog Content </span>
                    	<p><?php echo ucfirst(stripslashes($arr_view['blog_content'])); ?></p>

                    </div>
                    <div style="clear:both;"></div>
                   
                     <div class="frmFieldItem">
						<span>Blog Created </span>
                    	<p><?php echo ucfirst(stripslashes($arr_view['blog_created'])); ?></p>

                    </div>
                     <div class="frmFieldItem">
						<span>Blog Updated </span>
                    	<p><?php echo ucfirst(stripslashes($arr_view['blog_updated'])); ?></p>

                    </div>
                    
                    


              </div>

            </div>
            <div class="frmFieldTTL"><span>Blog Comments</span></div>
            <table id="example" class="display"> 
                            <thead> 
                                    <tr> 
                                        <th class="" style="text-align:left"  >Sl. No</th> 
                                        <th style="text-align:left"  >Blog content</th>                                        
                                        <th style="text-align:center"  >Blog user</th>
> 
                                    </tr>
                                </thead>     

                            
                            <?php $row_count =1; 
							 foreach($comments as $view):?>
								<tr class="<?php if(($row_count % 2)==0){echo "even"; }else{echo "odd";}?>">
    								<td><?php echo stripslashes($row_count); ?></td>
    								<td><?php echo stripslashes($view->comment_content); ?></td>
                                    <td><?php echo stripslashes($view->user_name); ?></td>
                                   
                                      
 								 </tr>
                                 <?php $div_count++; $row_count++;?>
                              
   					<?php endforeach;  ?>
								
 			 		</tbody>
     	</table>
       <!---------------------------->
            </div>
            </div>
            </div>
            <div class="frmFieldBtnSave_here">

				
				<input type="button" value="" class="btnSave02" onclick="history.go(-1)" style="color:transparent;" >
		
            </div>

            

            <!--End-->
		</form>
            

    </div>

    </td><!--Pages Content Area Ends Here-->
<?php $this->load->view('admin/include/footer');?>