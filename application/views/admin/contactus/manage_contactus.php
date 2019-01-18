<?php $this->load->view('admin/include/header');?>


<section><div style="height: 0px;" class="scrollbar-vertical"><div class="scrollbar-button-start"></div><div class="scrollbar-track-piece"><div class="scrollbar-thumb" style="top: 0pt; height: 0px; display: none;"></div></div><div class="scrollbar-button-end"></div></div>
		<div class="viewport">
                <header class="container_12 clearfix">
                    <div class="grid_12" >
                        <h1>Contact Us</h1>
                        <div class="search" style="float:right;">
                        	<form action="" method="post" >
                                <input type="text" name="search" id="search" value="" />
                                <input type="submit" value="Search" class="buttonss" name="search-btn"  onclick=""  >
                            </form>
                        </div>
                    </div>
                </header>
                <section class="container_12 clearfix" style="min-height:400px;"> 
                
                      <style>
 .homemenu{
 float:left;
 border: 1px solid #CCC;
background: url(images/menu-bg.jpg) left top no-repeat gainsboro;
width: 200px;
height: 170px;
padding: 10px;
margin: 10px;
text-align: center;
padding-top: 20px;
 }
 .homemenu a{
 font-size:16px;
 }
 </style>
                
                      <div style="color:#0C0; text-align:center;"><h4><?php echo $this->session->flashdata('success'); ?></h4></div>
 					  <div style="color:#F00; text-align:center;"><h4><?php echo $this->session->flashdata('fail'); ?></h4></div>
                      <div class="clearfix" id="demo">
                        
                        <div class="pagin" style="float:right;"><?php echo $this->pagination->create_links();?></div>
                            <div class="dataTables_wrapper" id="example_wrapper">
                            <table id="example" class="display"> 
                                <thead> 
                                    <tr> 
                                        <th class="" style="text-align:left"  >Sl. No</th> 
                                        <th style="text-align:left"  >Name</th> 
                                        
                                        
                                        <th style="text-align:center"  >Last Updated Date</th>

                                        
                                        
                                        <th style="text-align:center">Status</th>
                                        <th>Actions</th> 
                                    </tr> 
                                </thead> 
                                 
                            <tbody>
								<?php
									$row_count=1;
    								if(count($arr_view)!=0)
									{
										foreach($arr_view as $view)
										{
											
											?>
												<tr <?php if($row_count%2==0) {echo 'class="odd"';} else {echo 'class="even"'; }?>>
    												<td><?php echo $row_count?></td>
    												<td><?php echo ucfirst(stripslashes($view['contact_name']));?></td>
                                                    
    												
    												
                                                    <td style="text-align:center" ><?php echo stripslashes($view['contact_updateddate']);?></td>
     						                  
                                                    <td style="text-align:center">
                                                    	<?php
                                                    	switch($view['contact_active'])
                                                        {
															case 'A': $sb="status_a.png"; $st="Active"; break;
															case 'I': $sb="status_i.png"; $st="Inactive"; break;
															case 'P': $sb="status_p.png"; $st="Pending"; break;
                                                        }	
														?>
                                                        <a href="" >
                                                        	<img src="<?php echo base_url();?>images/admin/<?php echo $sb; ?>" title="<?php echo $st; ?>" border="0">
                                                        </a>
                                                    </td>
                                                    
                                                    <td style="text-align:center">
       
                                                       <a href="<?php echo site_url();?>/backend/contact/view/<?php echo $view['contact_id']; ?>" title="View" >
                                                    	<img src="<?php echo base_url();?>images/admin/view_source.png" border="0">    </a>
                                                    
                                                    <a href="<?php echo site_url();?>/backend/contact/edit/<?php echo $view['contact_id']; ?>" title="Edit" >
                                                    <img src="<?php echo base_url();?>images/admin/document-pencil-icon.png" border="0">    </a>
                                                   
                                                  
                                                       
    
    
    												</td>
       
       
  </tr>
  
<?php
	$row_count++;
	}
	}else{
?>
<tr>
  <td colspan="11" align="center" class="error_txt">No content for Contact Us page is added yet!</td>
</tr>
<?php }
?>
									
  							</tbody>
						</table>
                        </div> 

						
						<div class="pagin" style="float:right;"><?php echo $this->pagination->create_links();?></div>
                        </div>
 
                    <div class="clear"></div>

                     
 
                      
                    
                    <div class="clear"></div>
                
                     
        </section>
<?php $this->load->view('admin/include/footer');?>