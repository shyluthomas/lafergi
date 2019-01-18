<?php
$asset_path = base_url().'assets/frontend/';
$asset_path_backend = base_url().'assets/backend/';

$test = @mysql_query("select * from tbl_testimonial limit 1");
if(@mysql_num_rows($test)>0){
	
	$testDt = @mysql_fetch_object($test);	
}
?>
	<!-- START footer -->
			<footer>
				<!-- START #ft-footer -->
				<div id="ft-footer">
					<div class="footer-overlay">
						<div class="container">
							<div class="row">
								<!-- testimonials -->
								<section class="col-md-6">
									<h3>Testimonials</h3>
									<p><?php echo substr($testDt->content,0,200);?></p>
									<div class="tl-author">
										<span class="tl-author-img">
											<img class="img-circle" src="<?php echo $asset_path_backend;?>images/testimonials/<?php echo $testDt->image;?>" alt="Testimonial Author" height="55px" />
										</span>
										<span class="tl-author-title"><?php echo $testDt->title;?></span>
										<span class="tl-author-desc"></span>
									</div>
								</section>
								
								<!-- twitter -->
								<section class="col-md-6">
									<h3 class="tw-feeds">Twitter Feeds</h3>
									<p>
                                    
                                    <?php 
									
									if(count($twitterFeed)== 0){
									echo 'Twitter feed Not available..';	
									}
									else
									echo @$twitterFeed[0];?>
                                    </p>
									
								  <a href="#"></a></p>
							  </section>
							</div>
						</div>
					</div>
				</div>
				<!-- END #ft-footer -->
				
				<!-- START #ex-footer -->
				<div id="#ex-footer">
					<div class="container">
						<div class="row">
							<nav class="col-md-12">
								<ul class="footer-menu">
									<li><a href="http://europe-tourism.org/">Beast Europe</a></li>
									<li><a href="http://www.visiteurope.com/home.aspx">visit Europe</a></li>
									<li><a href="http://www.myswitzerland.com/en-in/accommodation/hotels.html">Hotel Directory</a></li>
									<li><a href="#">Website Terms of Use</a></li>
									<li><a href="#">Privacy Statement</a></li>
									
									<li class="last-item"><a href="http://vacanzamondiale.com/index.php/destination/">Top Destinations</a></li>
								</ul>
							</nav>
							
							<div class="foot-boxs">
								<div class="foot-box col-md-4 text-right">
									<span>Stay Connected</span>
									<ul class="social-media footer-social">
										<li><a class="sm-yahoo" href="https://www.youtube.com/user/VacanzaMondiale"><span>Youtube</span></a></li>
										<li><a class="sm-facebook" href="https://www.facebook.com/VacanzaMondiale"><span>Facebook</span></a></li>
									<!--	<li><a class="sm-rss" href="#"><span>RSS</span></a></li>-->
										<li><a class="sm-flickr" href="https://twitter.com/vacanzamondiale"><span>Twitter</span></a></li>
										<!--<li><a class="sm-windows" href="#"><span>Windows</span></a></li>
										<li><a class="sm-stumble" href="#"><span>Stumbleupon</span></a></li>-->
									</ul>
								</div>
								<div class="foot-box foot-box-md col-md-4">
									<span class="contact-email"> info@vacanzamondiale.com</span>
									<span class="contact-phone"> +39-329-3323644</span>
								</div>
								<div class="foot-box col-md-4">
									<span class="">&copy; 2014 vacanzamondiale. All Rights Reserved.</span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- END #ex-footer -->
			</footer>
			<!-- END footer -->
		</div>
		<!-- END #wrapper -->

		



		<!-- javascripts -->
		<script type="text/javascript" src="<?php echo $asset_path;?>js/modernizr.custom.17475.js"></script>

		<script type="text/javascript" src="<?php echo $asset_path;?>js/jquery.min.js"></script>
		<script type="text/javascript" src="<?php echo $asset_path;?>bs3/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="<?php echo $asset_path;?>js/bootstrap-datepicker.js"></script>
		<script src="<?php echo $asset_path;?>js/jquery.flexslider-min.js"></script>
		<script src="<?php echo $asset_path;?>js/script.js"></script>
		<script src="<?php echo $asset_path;?>js/jquery.minimalect.min.js" type="text/javascript"></script>

		<script src="<?php echo $asset_path;?>js/styleswitcher.js"></script>
		
		<!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
		<script type="text/javascript" src="<?php echo $asset_path;?>js/rs-plugin/js/jquery.plugins.min.js"></script>
		<script type="text/javascript" src="<?php echo $asset_path;?>js/rs-plugin/js/jquery.revolution.min.js"></script>

		<!--[if lt IE 9]>
			<script type="text/javascript" src="js/html5shiv.js"></script>
		<![endif]-->


		<script type="text/javascript">
		$(document).ready(function() {
			// revolution slider
			revapi = $("#content-slider").revolution({
				delay: 15000,
				startwidth: 1170,
				startheight: 920,
				hideThumbs: 10,
				fullWidth: "on",
				fullScreen: "off",
				fullScreenOffsetContainer: "",
				navigationVOffset: 320
			});
			
			// initilize datepicker
			$(".date-picker").datepicker();
		});


	    $(window).load(function(){
	      $('.carousel').flexslider({
			animation: "fade",
			animationLoop: true,
			controlNav: false,	
		    maxItems: 1,
			pausePlay: false,
			mousewheel:true,
			start: function(slider){
			  $('body').removeClass('loading');
			}
	      });
	    });


		</script>
		<script>
		$(document).ready(function(){
			$("#adults").minimalect({ theme: "bubble", placeholder: "Select" });
			$("#kids").minimalect({ theme: "bubble", placeholder: "Select" });
		});
		</script><!--- SELECT BOX -->
		
		<!-- Analytics -->
        
        <script type="text/javascript" src="<?php echo $asset_path;?>js/jquery.easing.js"></script>
		<script type="text/javascript" src="<?php echo $asset_path;?>js/jquery.fancybox.js"></script>
		<script type="text/javascript" src="<?php echo $asset_path;?>js/script.js"></script>
		<script src="<?php echo $asset_path;?>js/styleswitcher.js"></script>
		<!--[if lt IE 9]>
			<script type="text/javascript" src="js/html5shiv.js"></script>
		<![endif]-->

		<script type="text/javascript">
		$(document).ready(function() {
			
			// initilize fancybox
			$(".item-overlay").fancybox({
				overlayShow: true,
				overlayOpacity: .7,
				overlayColor: "#000000", // background overlay color
				transitionIn: "fade", // transition type 'elastic', 'fade' or 'none'
				transitionOut: "fade",
				easingIn: "easeInCubic", // Easing used for elastic animations
				easingOut: "easeOutCubic",
				cyclic: true
			});
		});
		</script>
		
	</body>

<!-- Mirrored from extracoding.com/html/travelhub/index.html by HTTrack Website Copier/3.x [XR&CO'2013], Thu, 12 Jun 2014 06:00:36 GMT -->
</html>