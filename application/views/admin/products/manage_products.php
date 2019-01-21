<?php	
	$admin_css_path = base_url()."assets/backend/css/admin/";
	$admin_js_path = base_url()."assets/backend/js/admin/";
	$admin_image_path = base_url()."assets/backend/images/admin/";
	$admin_form_path = base_url()."assets/backend/images/forms/";
	
?>

<?php $this->load->view('admin/include/header');?>


<td class="contentArea"><!--Pages Content Area Start-->

   	<div class="contentArea_inn">

        	<div class="pageWise_TTL">

            	<div class="pageName"><img src="<?php echo $admin_image_path;?>bsns_icon3.png" alt=""> Manage Products</div>
                <div class="pageName" style="float:right;"> <a href="<?php  echo site_url(); ?>/backend/products/add">Add New</a></div>
                <?php
					if($this->session->flashdata('success'))
					{
						?>
                        <div class="msg_success"><?php echo ucfirst(stripslashes($this->session->flashdata('success'))); ?></div>
                        <?php
					}
					if($this->session->flashdata('fail'))
					{
						?>
                        <div class="msg_fail"><?php echo ucfirst(stripslashes($this->session->flashdata('fail'))); ?></div>
                        <?php
					}
				?>
				
                

            </div>

            
            
            
            

            <!--Lists-->
			
            
             
            
           <div class="dataTables_wrapper" id="example_wrapper">
                 <table id="example" class="display"> 
                                <thead> 
                                    <tr> 
                                        <th class="" style="text-align:left"  >Sl. No</th> 
                                        <th style="text-align:left"  >Title</th>                                                                            
                                        <th style="text-align:left"  >Time</th>
                                        
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
                            <?php foreach($arr_view as $req):?>
                            
								<tr class="<?php if(($div_count % 2)==0){echo "even"; }else{echo "odd";}?>">
    								<td><?php echo stripslashes($row_count); ?></td>
    								<td><?php echo ucfirst(stripslashes($req['title']));?></td>
                                    
    								
     								
                                     <td><?php echo stripslashes($req['createtime']); ?></td>      												
                                     <td style="text-align:center">     
                                     
                                     <div class="view_butt">
                                     
                                     <a title="View detail" href="
									 <?php  echo site_url(); ?>/backend/products/edit/<?php echo stripslashes($req['id']);?>">
									<img border="0" src="<?php echo $admin_image_path;?>view.png">
								</a>
                                     
                                     
                                     
                                     
                                     	
                                </div>
                                
                                
                                <div class="btnAddCatDlt">
                                <a onclick="return confirm('Do ypu really want to delete this item?')" href="<?php echo site_url(); ?>/backend/products/delete/<?php echo stripslashes($req['id']); ?>">
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
    
   <!--- Footer Include ------>
<?php $this->load->view('admin/include/footer'); ?>
<!--- Footer Include End------>



