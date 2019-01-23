<?php
$asset_path = base_url().'assets/frontend/';
$asset_path_backend = base_url().'assets/backend/';

$image_path = base_url().'images/';
//var_dump($package);exit();
?>

<div class="collapse searchbar" id="searchbar">
        <div class="search-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search for...">
                            <span class="input-group-btn">
            <button class="btn btn-default" type="button">Go!</button>
            </span> </div>
                        <!-- /input-group -->
                    </div>
                    <!-- /.col-lg-6 -->
                </div>
            </div>
        </div>
    </div>
    <div class="top-bar">
        <!-- top-bar -->
        <div class="container">
            <div class="row">
                <div class="col-md-7 ms-text-align">
                    <p class="mail-text">Have any questions? +974 44341798    RMQ.SALES@LAFARGEHOLCIM.COM</p>
                </div>
                
            </div>
        </div>
    </div>
    <!-- /.top-bar -->
    <div class="header">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-6 col-6">
                    <!-- logo -->
                    <div class="logo">
                        <a href="<?php echo base_url();?>"><img src="<?php echo $asset_path; ?>images/logo.png" alt="Qatar Readymix LLC"/></a>
                    </div>
                </div>
                <!-- logo -->
                <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12 col-12">
                      <div id="navigation">
                        <!-- navigation start-->
                        <ul>
                            <li class="active"><a href="<?php echo base_url();?>index.php/home" class="animsition-link">Home</a>
                                
                            </li>
                            <li><a href="<?php echo base_url();?>index.php/about" class="animsition-link">About Us</a>
                                
                            </li>
                            <li><a href="<?php echo base_url();?>index.php/products" class="animsition-link">Product & Solutions</a>
                                <ul>
                                    <li><a href="<?php echo base_url();?>index.php/products" title="About us" class="animsition-link">Products</a></li>
                                    <li><a href="<?php echo base_url();?>index.php/solutions" title="Team" class="animsition-link">Solutions</a></li>
                                </ul>
                            </li>
                            
                               </li>
                            <li><a href="<?php echo base_url();?>index.php/health_saftey" class="animsition-link">Health & Safety</a>
                            <li><a href="<?php echo base_url();?>index.php/careers" class="animsition-link">Career</a>
                                
                            </li>
                            <li><a href="<?php echo base_url();?>index.php/contact" class="animsition-link">Contact</a>
                                </li>
                        </ul>
                    </div>
                    <!-- /.navigation start-->
                </div>
                <div class="col-xl-l col-lg-1 col-md-1 col-sm-1 col-12 d-none d-xl-block d-lg-block">
                    <!-- search start-->
                    <div class="search-nav"> <a class="search-btn" role="button" data-toggle="collapse" href="#searchbar" aria-expanded="false"><i class="fa fa-search"></i></a> </div>
                </div>
                <!-- /.search start-->
            </div>
        </div>
    </div>