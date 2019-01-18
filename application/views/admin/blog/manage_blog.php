<?php	
	$admin_css_path = base_url()."css/admin/";
	$admin_js_path = base_url()."js/admin/";
	$admin_image_path = base_url()."images/admin/";
	$admin_form_path = base_url()."images/forms/";
?>
<?php $this->load->view('admin/include/header');?>
<?php
//var_dump($arr_view);exit();
?>


<td class="contentArea"><!--Pages Content Area Start-->

	
   	<div class="contentArea_inn">

        	<div class="pageWise_TTL">

            	<div class="pageName"><img src="<?php echo $admin_image_path;?>bsns_icon3.png" alt=""> Manage Forms</div>
                
                <?php
					if($this->session->flashdata('success'))
					{
						?>
                        <div class="msg_success_add"><?php echo ucfirst(stripslashes($this->session->flashdata('success'))); ?></div>
                        <?php
					}
					if($this->session->flashdata('fail'))
					{
						?>
                        <div class="msg_fail_add"><?php echo ucfirst(stripslashes($this->session->flashdata('fail'))); ?></div>
                        <?php
					}
				?>
                
                <ul>
                	<li><a href="<?php echo site_url().'/backend/blog/add'; ?>"  class="active">ADD NEW</a></li> 
                </ul>


            </div>

            
            
            
            

            <!--Lists-->
			
            
             
            
           <div class="dataTables_wrapper" id="example_wrapper">
                 <table id="example" class="display"> 
                                <thead> 
                                    <tr> 
                                        <th class="" style="text-align:left"  >Sl. No</th> 
                                        <th style="text-align:left"  >Blog title</th>                                        
                                        <th style="text-align:center"  >Blog Created</th>
                                        <th style="text-align:center"  >Status</th>                                        
                                        <th style="text-align:center">Actions</th> 
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
                            <?php foreach($arr_view as $view):?>
                            
								<tr class="<?php if(($div_count % 2)==0){echo "even"; }else{echo "odd";}?>">
    								<td><?php echo stripslashes($row_count); ?></td>
    								<td><?php echo ucfirst(stripslashes($view['blog']['blog_title'])); ?></td>
                                    <td style="text-align:center"> <?php echo $view['blog']['blog_created'];?></td>
    								
    								
     																	
                                     <td style="text-align:center">                                                    
                                       <a href="<?php echo site_url();?>/backend/blog/status/<?php echo $view['blog']['blog_id']; ?>/<?php echo $view['blog_status']; ?>" >
                                            <div class="ic5">
                                            <?php
												if($view['blog']['status']=='I')
												{
														?>
													<img src="<?php echo $admin_image_path;?>ic5.png" border="0">
													<?php
												}
															
												else
												{
													?>
													<img src="<?php echo $admin_image_path;?>ic5_hov.png" border="0">
												   <?php
												}
											?>             
                                           
                                             </a>  
                                    </td>         
                                    
                                   
                                                                              
                                    
                                   
                                      <td style="text-align:center">       
                                        <div class="view_butt">
                                        <a href="<?php echo site_url(); ?>/backend/blog/view/<?php echo $view['blog']['blog_id']; ?>"><img src="<?php echo $admin_image_path;?>view.png" class="freeClass" title="View">
                                        </a></div>
                   						 <div class="btnAddCatEdit" >
                                         <a href="<?php echo site_url(); ?>/backend/blog/edit/<?php echo $view['blog']['blog_id']; ?>">
                                         <img src="<?php echo $admin_image_path;?>btnAddCat_Edit.png" class="freeClass" title="edit">
                                         </a>
                                         </div>
                   						 <div class="btnAddCatDlt">
                                          <a onclick="return confirm('Do ypu really want to delete this item?')" href="<?php echo site_url(); ?>/backend/blog/delete/<?php echo $view['blog']['blog_id']; ?>/<?php echo $page; ?>">
                                         <img src="<?php echo $admin_image_path;?>btnAddCat_Dlt.png" class="freeClass" title="delete">
                                         </a>
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
<?php $this->load->view('admin/include/footer');?>