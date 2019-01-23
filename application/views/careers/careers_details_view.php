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
    
    <div class="page-header" style="background-image:url(<?php echo $asset_path;?>images/career-header.jpg);">
        <div class="container">
            <div class="row">
               <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li><a href="index.html">Home</a></li>
                            <li class="active">Career Details</li>
                        </ol>
                    </div>
                </div>
               <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="bg-white pinside30" style="opacity: 0.5;">
                        <div class="row">
                           <div class="col-xl-4 col-lg-4 col-md-9 col-sm-12 col-12">
                                <h1 class="page-title">Career Details</h1>
                            </div>
                            
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- content start -->
    
   
    <div class=" ">
        <!-- content start -->
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="wrapper-content bg-white">
                        <div class="section-scroll pinside60" id="section-about">
                            <h1>About Job</h1>
                            <p class="lead">
                                <?php echo $arr_view['content'];?>
                            </p>
                           
                            <a href="#" class="btn btn-default">Apply for Job</a> </div>
                        
                        
                        
                        
                        
                        
                        <div class="widget-share">
                            <ul class="listnone">
                                <li><a href="#" class="btn-share btn-facebook" title="Share on Facebook"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#" class="btn-share btn-twitter" title="Share on Twitter"><i class="fa fa-twitter"></i></a></li>
                                <li>
                                    <a href="#" class="btn-share btn-google" title="Share on Google"> <i class="fa fa-google"></i></a>
                                </li>
                                <li><a href="#" class="btn-share btn-linkedin" title="Share on Linkedin"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.content end -->
    <!-- /.content end -->
    
    <?php $this->load->view('include/footer');?>
    
     
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    
</body>


</html>
