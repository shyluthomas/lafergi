<?php
$asset_path = base_url().'assets/frontend/';
$asset_path_backend = base_url().'assets/backend/';

$image_path = base_url().'images/';
//var_dump($twitterFeed);exit();
?>


<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Qatar Readymix LLC">
    <meta name="keywords" content="Financial Website Template, Bootstrap Template, Loan Product, Personal Loan">
    <title>Home | Qatar Readymix LLC</title>
    <!-- Bootstrap -->
    <link href="<?php echo $asset_path; ?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo $asset_path; ?>css/style.css" rel="stylesheet">
    <link href="<?php echo $asset_path; ?>css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo $asset_path; ?>css/fontello.css" rel="stylesheet">
   
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700%7CMerriweather:300,300i,400,400i,700,700i" rel="stylesheet">
    <!-- owl Carousel Css -->
    <link href="<?php echo $asset_path; ?>css/owl.carousel.css" rel="stylesheet">
    <link href="<?php echo $asset_path; ?>css/owl.theme.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    
    <?php $this->load->view('include/header');?>
    
     <div class="slider" id="slider">
        <!-- slider -->
        <div class="slider-img"><img src="<?php echo $asset_path;?>images/health-banner.jpg" class="">
            <div class="container">;
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">

                    </div>
                </div>
            </div>
        </div>
        
        
    </div>
   
    <div class="section-space80">
        <div class="container">
            <div class="row">
                <div class="offset-xl-2 col-xl-8 offset-lg-2 col-lg-8 col-md-12 col-sm-12 col-12">
                    <div class="section-title text-center mb60">
                        <h1>Health and Saftey</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                    <div class="mb30">
                        <div class="circle-outline-icon">
                       <a data-toggle="modal" href="#health">  <img src="<?php echo $asset_path;?>images/ico-health.png" alt="Health" class="icon-svg-1x">
                            </a>
                        </div>
                        <h3 class="mb10">Health</h3>
                        <p><?php echo $Health[0]['description'];?></p>
                    </div>
                </div>
                
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                    <div class="mb30">
                        <div class="circle-outline-icon">
                            <a data-toggle="modal" href="#Safty"> <img src="<?php echo $asset_path;?>images/ico-safty.png" alt="Safty" class="icon-svg-1x"></a>
                            </div>
                        <h3 class="mb10">Saftey</h3>
                        <p><?php echo $Safty[0]['description'];?></p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                    <div class="mb30">
                        <div class="circle-outline-icon">
                            <a data-toggle="modal" href="#Road"> <img src="<?php echo $asset_path;?>images/ico-road.png" alt="Road" class="icon-svg-1x"></a>
                           </div>
                        <h3 class="mb10">Road</h3>
                        <p><?php echo $Road[0]['description'];?></p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                    <div class="mb30">
                        <div class="circle-outline-icon">
                            <a data-toggle="modal" href="#Environment"><img src="<?php echo $asset_path;?>images/ico-environment.png" alt="Environment" class="icon-svg-1x"></a>
                            </div>
                        <h3 class="mb10">Environment</h3>
                        <p><?php echo $Environment[0]['description'];?></p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                    <div class="mb30">
                        <div class="circle-outline-icon">
                            <a data-toggle="modal" href="#Welfare"> <img src="<?php echo $asset_path;?>images/ico-welfare.png" alt="Welfare" class="icon-svg-1x"></a>
                           </div>
                        <h3 class="mb10">Welfare</h3>
                        <p><?php echo $Welfare[0]['description'];?></p>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                    <div class="mb30">
                        <div class="circle-outline-icon">
                        <a data-toggle="modal" href="#Policy"> <img src="<?php echo $asset_path;?>images/ico-policy.png" alt="Policy" class="icon-svg-1x">
                            </a></div>
                        <h3 class="mb10">Policy</h3>
                        <p><?php echo $Policy[0]['description'];?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    <!-- Modal Health -->

<div class="modal fade" id="health" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

  <div class="modal-dialog modal-dialog-centered" role="document">

    <div class="modal-content">

      <div class="modal-header">

	  <h4 class="modal-title">Health</h4>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

      </div>

      <div class="modal-body">

        <img src="<?php echo $asset_path_backend.'images/health_saftey/'.$Health[0]['image'];?>" style="width:100% !important;" >

        <p><?php echo $Health[0]['content'];?>

</p>


      </div>

    </div>

  </div>

</div>
    
    <div class="modal fade" id="Welfare" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

  <div class="modal-dialog modal-dialog-centered" role="document">

    <div class="modal-content">

      <div class="modal-header">

	  <h4 class="modal-title">Welfare</h4>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

      </div>

      <div class="modal-body">

        <img src="<?php echo $asset_path_backend.'images/health_saftey/'.$Welfare[0]['image'];?>" style="width:100% !important;" >

        <p><?php echo $Welfare[0]['content'];?>

</p>


      </div>

    </div>

  </div>

</div>
    
     <div class="modal fade" id="Policy" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

  <div class="modal-dialog modal-dialog-centered" role="document">

    <div class="modal-content">

      <div class="modal-header">

	  <h4 class="modal-title">Policy</h4>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

      </div>

      <div class="modal-body">

        <img src="<?php echo $asset_path_backend.'images/health_saftey/'.$Policy[0]['image'];?>" style="width:100% !important;" >

        <p><?php echo $Policy[0]['content'];?>

</p>


      </div>

    </div>

  </div>

</div>
    
    <div class="modal fade" id="Safty" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

  <div class="modal-dialog modal-dialog-centered" role="document">

    <div class="modal-content">

      <div class="modal-header">

	  <h4 class="modal-title">Safty</h4>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

      </div>

      <div class="modal-body">

        <img src="<?php echo $asset_path_backend.'images/health_saftey/'.$Safty[0]['image'];?>" style="width:100% !important;" >

        <p><?php echo $Safty[0]['content'];?>

</p>


      </div>

    </div>

  </div>

</div>
    
    
    <div class="modal fade" id="Road" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

  <div class="modal-dialog modal-dialog-centered" role="document">

    <div class="modal-content">

      <div class="modal-header">

	  <h4 class="modal-title">Road</h4>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

      </div>

      <div class="modal-body">

        <img src="<?php echo $asset_path_backend.'images/health_saftey/'.$Road[0]['image'];?>" style="width:100% !important;" >

        <p><?php echo $Road[0]['content'];?>

</p>


      </div>

    </div>

  </div>

</div>
    
    <div class="modal fade" id="Environment" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

  <div class="modal-dialog modal-dialog-centered" role="document">

    <div class="modal-content">

      <div class="modal-header">

	  <h4 class="modal-title">Environment</h4>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

      </div>

      <div class="modal-body">

        <img src="<?php echo $asset_path_backend.'images/health_saftey/'.$Environment[0]['image'];?>" style="width:100% !important;" >

        <p><?php echo $Environment[0]['content'];?>

</p>


      </div>

    </div>

  </div>

</div>
    
        <?php $this->load->view('include/footer');?>
    
     
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    
</body>


</html>
