<?php	
	$css_path = base_url()."css/";
	$js_path = base_url()."js/";
	$image_path = base_url()."images/";
?>

<?php  $this->load->view('include/header_inner'); ?>



<!---------Featured Properties------------>
<div class="errorPage">
<div class="errorPageInn">
	<h3>This is the message from Imyrtle Site</h3>
    <h1><?php echo $this->session->flashdata('msg');?></h1>
    
	<h1>Your Sign In Not done</h1>
    <h2>Please fill the fields carefully</h2>
    
</div>
</div>
<!---------End of Featured Properties------------>

<?php  $this->load->view('include/footer'); ?>