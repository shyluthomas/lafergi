<?php
$asset_path = base_url().'assets/frontend/';
?>

<?php  $this->load->view('include/header'); ?>



<div class="top-image">

	<img src="<?php echo $asset_path;?>images/single-page-top1.jpg" alt="" />

</div><!-- Page Top Image -->

	

<section class="page">

	<div class="container">

		<div class="page-title">

			<h1> <span><?php echo $abt_details['title'];?></span></h1>

		</div><!-- Page Title -->

		<div class="left-content nine-column">

        <div class="post">

			<p>

				<div class="post-image-list">

				
					<a href="<?php echo base_url().'images/associations/'.$abt_details['image'];?>" class="html5lightbox post-image" >

						<img src="<?php echo base_url().'images/associations/'.$abt_details['image'];?>" alt="" />

					</a>											
			<?php echo $abt_details['content'];?>
            </p>
				</div><!-- Post Images -->

			

         </div>       

                

		</div>

		

		<div class="sidebar three-column pull-right">

			<!-- Sidebar Search -->

			

			<div class="sidebar-widget">

				<div class="sidebar-title">

					<h4>Popular <span>Posts</span></h4>

				</div>
                
                <?php
						$con = @mysql_query("select * from tbl_activities limit 2");
						if(@mysql_num_rows($con)>0)
						{
							while($act_dt=@mysql_fetch_array($con))
							{
						?>

				<div class="popular-post">

					<img src="<?php echo base_url().'images/activities/'.$act_dt['image'];?>" alt="" />

					<div class="popular-post-title">

						<h6><a href="<?php echo site_url().'/activities/index/'.$act_dt['id'];?>" title=""><?php echo $act_dt['title'];?></a></h6>
						

					</div>

				</div>
                
                 <?php
							}
						}
						?>

				



			</div><!-- Popular Posts -->

			<div class="sidebar-widget">

				<div class="sidebar-title">

					<h4>Welfare <span>Societies</span></h4>

				</div>

				<ul class="sidebar-list">

					 <?php
						$con = @mysql_query("select * from tbl_associations");
						if(@mysql_num_rows($con)>0)
						{
							while($abt_dt=@mysql_fetch_array($con))
							{
						?>
						<li><a href="<?php echo site_url().'/associations/index/'.$abt_dt['id'];?>"><?php echo $abt_dt['title'];?></a></li>
                        
                        <?php
							}
						}
						?>
				</ul>

			</div><!-- Meta Data -->

			<!-- Sidebar Video -->

		

			

		</div>

	</div>





</section>

</div>



<?php  $this->load->view('include/footer'); ?>