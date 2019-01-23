<?php
$asset_path = base_url().'assets/frontend/';
$asset_path_backend = base_url().'assets/backend/';

$test = @mysql_query("select * from tbl_contact");
if(@mysql_num_rows($test)>0){
	
	$testDt = @mysql_fetch_object($test);	
}
?>
<div class="footer section-space50">
        <!-- footer -->
        <div class="container">

            <hr class="dark-line">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="widget-text mt40">
                        <!-- widget text -->
                        
                        
                <div class="footer-logo">
                        <!-- Footer Logo -->
                        <img src="<?php echo $asset_path; ?>images/ft-logo.png" alt="Qatar Readymix LLCs">
                    <!-- /.Footer Logo -->
                </div>
                        
                        
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                                <p class="address-text"><span><i class="icon-placeholder-3 icon-1x"></i> </span>
                                  <?php echo nl2br($testDt->office_address);?>  
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                                <p class="call-text"><span><i class="icon-phone-call icon-1x"></i></span><?php echo $testDt->contact;?></p>
                            </div>
                        </div>
                    </div>
                    <!-- /.widget text -->
                </div>
                <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 col-6">
                    <div class="widget-footer mt40">
                        <!-- widget footer -->
                        <ul class="listnone">
                            <li><a href="<?php echo base_url();?>index.php/home">Home</a></li>
                            <li><a href="<?php echo base_url();?>index.php/about">About Us</a></li>
                            <li><a href="<?php echo base_url();?>index.php/solutions">Our Solution</a></li>
                            <li><a href="<?php echo base_url();?>index.php/products">Our Products</a></li>
                            <li><a href="<?php echo base_url();?>index.php/careers">Career</a></li>
                            <li><a href="<?php echo base_url();?>index.php/contact">Contact Us</a></li>
                        </ul>
                    </div>
                    <!-- /.widget footer -->
                </div>
                <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 col-6">
                    <div class="widget-footer mt40">
                        <!-- widget footer -->
                        <ul class="listnone">
                            <li><a href="<?php echo base_url();?>index.php/health_saftey">Health</a></li>
                            <li><a href="<?php echo base_url();?>index.php/health_saftey">Safety</a></li>
                            <li><a href="<?php echo base_url();?>index.php/health_saftey">Environment</a></li>
                            <li><a href="<?php echo base_url();?>index.php/health_saftey">Road Transport</a></li>
                            <li><a href="<?php echo base_url();?>index.php/health_saftey">Policy</a></li>
                            <li><a href="<?php echo base_url();?>index.php/health_saftey">Welfare</a></li>
                        </ul>
                    </div>
                    <!-- /.widget footer -->
                </div>
                <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 col-6">
                    <div class="widget-social mt40">
                        <!-- widget footer -->
                        <ul class="listnone">
                            <li><a href="#"><i class="fa fa-facebook"></i>Facebook</a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i>Google Plus</a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i>Twitter</a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i>Linked In</a></li>
                        </ul>
                    </div>
                    <!-- /.widget footer -->
                </div>
            </div>
        </div>
    </div>
    <!-- /.footer -->
    <div class="tiny-footer">
        <!-- tiny footer -->
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                    <p>© Copyright 2019 | Qatar Readymix LLC</p>
                </div>
                
            </div>
        </div>
    </div>
    <!-- back to top icon -->
    <a href="#0" class="cd-top" title="Go to top">Top</a>
<script src="<?php echo $asset_path; ?>js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo $asset_path; ?>js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo $asset_path; ?>js/menumaker.js"></script>
  
    <!-- sticky header -->
    <script type="text/javascript" src="<?php echo $asset_path; ?>js/jquery.sticky.js"></script>
    <script type="text/javascript" src="<?php echo $asset_path; ?>js/sticky-header.js"></script>
    <!-- slider script -->
    <script type="text/javascript" src="<?php echo $asset_path; ?>js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="<?php echo $asset_path; ?>js/slider-carousel.js"></script>
    <script type="text/javascript" src="<?php echo $asset_path; ?>js/service-carousel.js"></script>
    <!-- Back to top script -->
    <script src="<?php echo $asset_path; ?>js/back-to-top.js" type="text/javascript"></script>