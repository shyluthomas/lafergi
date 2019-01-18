<?php	
	$asset_path = base_url().'assets/frontend/';
?>

<?php  $this->load->view('include/header'); ?>

<div class="top-image">

	<img src="<?php echo $asset_path;?>images/single-page-top3.jpg" alt="" />

</div><!-- Page Top Image -->

	

<section class="page">

	<div class="container">

		<div class="page-title">

			<h1>Contact <span>Us</span></h1>

		</div><!-- Page Title -->

		<div class="six-column">

			<div class="contact-info">

				<h3 class="sub-head">CONTACT INFORMATION</h3>

				<iframe src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=australia&amp;aq=&amp;sll=-25.274398,133.775136&amp;sspn=41.490127,85.166016&amp;ie=UTF8&amp;hq=&amp;hnear=Australia&amp;t=m&amp;z=4&amp;ll=-25.274398,133.775136&amp;output=embed"></iframe>

				<p>Aenean sit a ametlandit a urna. Sed vehicula rhoncus tellus, quis accumsan nunc dicti quiis enean sit amet nibh ut magna malesuada convallis. Quisque pulvinar odio et justo convalis mollis.Aenean elit eros, molestie ac viverra nec, blandit a urna.</p>

				<ul class="contact-details">

					<li>

						<span><i class="icon-home"></i>ADDRESS</span>

						<p>#8901 Marmora Road Chi Minh City, Vietnam</p>

					</li>

					<li>

						<span><i class="icon-phone-sign"></i>PHONE NO</span>

						<p>+00 035 835 282 / +00 034 965 353</p>

					</li>

					<li>

						<span><i class="icon-envelope-alt"></i>EMAIL ID</span>

						<p>#8901 Marmora Road Chi Minh City, Vietnam</p>

					</li>

					<li>

						<span><i class="icon-link"></i>WEB ADDRESS</span>

						<p>http://www.yourwebsite.com</p>

					</li>

				</ul>

			</div>

		</div>	<!-- Contact Info -->

		<div class="six-column pull-right">

			<div class="form">

				<h3 class="sub-head">CONTACT US BY MESSAGE</h3>

				<p><?php if(@$error_msg){echo $error_msg;}?> <span>*</span></p>

				<form name="contact" method="post" enctype="multipart/form-data" action="<?php echo base_url().'index.php/contact/contact_form/'?>">

					<label>Full name <span>*</span></label>

					<input type="text" class="form-control input-field" name="name" />

					<label>Email Address <span>*</span></label>

					<input type="email" class="form-control input-field" name="email" />

					<label>Message <span>*</span></label>

					<textarea rows="7" class="form-control input-field" name="message"></textarea>

					<input type="submit" class="form-button" value="SEND MESSAGE" />

				</form>

			

			</div>

		</div>	<!-- Message Form -->

	</div>	

		

	<!-- Social Media Bar -->

	

	<!-- Working -->

</section>

</div>


<?php  $this->load->view('include/footer'); ?>