<?php	
	$admin_css_path = base_url()."css/admin/";
	$admin_js_path = base_url()."js/admin/";
	$admin_image_path = base_url()."images/admin/";
	//var_dump($req);
?>


<?php $this->load->view('admin/include/header');?>
 <td class="contentArea"><!--Pages Content Area Start-->

   	<div class="contentArea_inn">

        	<div class="pageWise_TTL">

            	<div class="pageName"><img src="<?php echo $admin_image_path; ?>bsns_icon1.png" alt=""> Enquiry Details</div>

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
            <div class="frmFieldTTL"><span>Enquiry Details</span></div>

            <div class="frmFieldContent">

            	<div class="frmFieldContentInn">

					<div class="frmFieldItem">

                    	<span>Name</span>

                        <p><?php echo ucfirst(stripslashes($enquiry['enq_name'])); ?></p>

                    </div>

                    <div class="frmFieldItem">

                    	<span>Email</span>
						<p><?php echo stripslashes($enquiry['enq_email']); ?></p>
                        
                    </div>

                    

                    

                    <div class="frmFieldItem">

                    	<span>Phone</span>
						<p><?php echo stripslashes($enquiry['enq_phone']); ?></p>
                        

                    </div>
					
                    <div class="frmFieldItem">

                    	<span>Property</span>
						<p><a href="<?php echo site_url(); ?>/backend/properties/view/<?php echo $enquiry['property_id']; ?>">Link</a></p>
                       
                    </div>
                    
                    
                    
                    <div class="frmFieldItem">

                    	<span>Message</span>
						<p><?php echo stripslashes($enquiry['enq_message']); ?></p>
                       
                    </div>

                   

                    

                  
                  <div class="frmFieldItem">

                    	<span>Time</span>
						<p><?php echo stripslashes($enquiry['enq_time']); ?></p>
                        
                    </div>
                    
                  

                    

              </div>

            </div>
       <!---------------------------->
            </div>
            </div>
            </div>
            <div class="frmFieldBtnSave_here">

				<!--<input name="save" type="submit" class="btnSave1" title="Save" >-->
				<input type="button" value="Cancel" class="btnSave02" onclick="history.go(-1)" style="color:transparent;" >
                
<!--<input type="hidden" name="id" id="id" value="">
            </div>-->

            

            <!--End-->
		</form>
            

    </div>

<!--Pages Content Area Ends Here--><?php $this->load->view('admin/include/footer');?>



