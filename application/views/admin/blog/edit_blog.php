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
            <div class="frmFieldTTL"><span>Edit Form Details</span></div>

            <div class="frmFieldContent">

            	<div class="frmFieldContentInn">
					<div class="frmFieldItem">

                    	<span>Blog Category </span>
						 
                        <select class="txtbx"  name="blog_category" required>
                        <option value="">--SELECT--</option>
                        <option value="Category 1" <?php if($arr_view[0]['blog']['blog_category']=='Category 1') echo "selected='selected'"  ?>>Category 1</option>
                        <option value="Category 2" <?php if($arr_view[0]['blog']['blog_category']=='Category 2') echo "selected='selected'"  ?>>Category 2</option>
                        <option value="Category 3" <?php if($arr_view[0]['blog']['blog_category']=='Category 3') echo "selected='selected'"  ?>>Category 3</option>
                        <option value="Category 4" <?php if($arr_view[0]['blog']['blog_category']=='Category 4') echo "selected='selected'"  ?>>Category 4</option>
                        <option value="Category 5" <?php if($arr_view[0]['blog']['blog_category']=='Category 5') echo "selected='selected'"  ?>>Category 5</option>
                        </select>

                    </div>
					<div class="frmFieldItem">

                    	<span>Title </span>

                        <input value="<?php echo $arr_view[0]['blog']['blog_title']; ?>" type="text" class="txtbx" placeholder="Enter  here." name="title" required="required">

                    </div>
                    <div class="frmFieldItem" >

                    	<span>Content </span>

                        <textarea name="blog_content" class="txtbx"  style="height:300px;"> <?php echo $arr_view[0]['blog']['blog_content'];?></textarea>

                    </div>
					<div style="clear:both;"></div>

                    <div class="frmFieldItem">

                    	<span>Choose file</span>
						<p>
                        <input name="blog_image" type="file" class="btnNew" title="Upload Photo" value="Upload Photo" >
                        <?php if($arr_view['blog_img1']!=""){?>
                                        <br /><a href="<?php echo base_url();?>/images/blog/<?php echo stripslashes($arr_view['blog_img1']); ?>" target="_blank" >Download</a>
                                        
                                    <input type="hidden" name="imageid1" id="imageid1" value="<?php echo $arr_view['blog_img1'];?>"><br />
                                    <!--<input type="checkbox" name="img1" value="1">Remove Image-->
                                    <?php } ?>
						</p>
                    </div><br />

                    <table align="center" style="border:#09C solid;">
                   <thead style="text-align:center;"> <strong>View All Comments</strong></thead>
                   <tr>
                   		<td>Sl No</td><td width="400px">Comments</td><td>User</td><td>Action</td>
                   
                   </tr>
                   
                   <?php $i=1;
				   if(!count($arr_view[0]['blog_comment']))
				   {
					  echo "<tr style='text-align:center;'><td >No Comments</td></tr>"; 
				   }
				   else
				   {
				    foreach($arr_view[0]['blog_comment'] as $comment):?>
                       <tr>
                       <td><?php echo $i;?></td>
                       	<td><?php echo $comment['comment_content'];?></td>
                        <td><?php echo $comment['user_fname'];?></td>
                        <td><a href="<?php echo site_url(); ?>/backend/blog/comment_status/<?php echo $comment['comment_id'];?>/<?php echo $comment['comment_status'];?>/<?php echo $comment['blog_id'];?>"><?php echo $comment['comment_status'];?></a> | <a href="<?php echo site_url(); ?>/backend/blog/comment_delete/<?php echo $comment['comment_id'];?>/<?php echo $comment['blog_id'];?>">Delete</a></td>
                       
                       </tr>
                       <?php $i++; endforeach;
				   }
					   ?>
                   
                   </table>
                    
                  
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