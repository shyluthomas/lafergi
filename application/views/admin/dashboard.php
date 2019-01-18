<?php	
	$assetpath 		=  base_url().'assets/backend/';
	$admin_css_path   = $assetpath."css/admin/";
	$admin_js_path    = $assetpath."js/admin/";
	$admin_image_path = $assetpath."images/admin/";
?>
<!--- Header Include ------>
<?php $this->load->view('admin/include/header'); ?>
<!--- Header Include End------>

<td class="contentArea"><!--Pages Content Area Start-->

    	<div class="mmbrExpire"><!--Member to Expire from here-->

        	<div class="mmbrExpireTTL"><h1>Members</h1></div>

            <div class="mmbrExpireCon">

            	<div class="mmbrExpireConTTL"><span class="mmbrname">Users</span><span class="mmbrDate"> Count</span></div>

                <!--Member Expire Listing from here-->
                	
                <div class="Item"><!--Item 1-->
                	<div class="mmberName">
                    	<span>Logined members</span>
                    </div>
                    <div class="mmbrDate"><?php if(@$residential_count!=''){echo number_format($residential_count,2);}else{echo '0'; }?></div>

                </div><!--End of Item 1-->
                
                 <div class="Item"><!--Item 1-->
                	<div class="mmberName">
                    	<span>Cms pages</span>
                    </div>
                    <div class="mmbrDate"><?php if(@$commercial_count!=''){echo number_format($commercial_count,2);}else{echo '0'; }?></div>

                </div><!--End of Item 1-->
                
                <div class="Item"><!--Item 1-->
                	<div class="mmberName">
                    	<span>application pages</span>
                    </div>
                    <div class="mmbrDate"><?php if(@$condo_count!=''){echo number_format($condo_count,2);}else{echo '0'; }?></div>

                </div><!--End of Item 1-->
                
                    <div class="Item"><!--Item 1-->
                	<div class="mmberName">
                    	<span>Contact Requests</span>
                    </div>
                    <div class="mmbrDate"><?php if(@$rentel_count!=''){echo number_format($rentel_count,2);}else{echo '0'; }?></div>

                </div><!--End of Item 1-->
           
            </div>

        </div>

        

        

        

        <!--End of Offers Expire-->

       

       

        

    </td><!--Pages Content Area Ends Here-->
    
    
<!--- Footer Include ------>
<?php $this->load->view('admin/include/footer'); ?>
<!--- Footer Include End------>