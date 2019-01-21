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
         <?php $i=0;  foreach($home_banner as $banner): ?>
        <!-- slider -->
        <div class="slider-img"><img src="<?php echo $asset_path_backend; ?>images/home_banner/<?php echo $banner['image'];?>" alt="Qatar Readymix LLC" class="">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                        <div class="slider-captions">
                            <!-- slider-captions -->
                            <h1 class="slider-title"><?php echo $banner['title']; ?> </h1>
                            <p class="slider-text d-none d-xl-block d-lg-block d-sm-block"> <?php echo $banner['content']; ?></p>
                                
                                 </div>
                        <!-- /.slider-captions -->
                    </div>
                </div>
            </div>
        </div>
     <?php endforeach;?>
        
    </div>
   
    <div class="section-space80">
        <div class="container">
            <div class="row">
                <div class="offset-xl-2 col-xl-8 offset-md-2 col-md-8 offset-md-2 col-md-8 col-sm-12 col-12">
                    <div class="mb60 text-center section-title">
                        <!-- section title start-->
                        <h1><?php echo $home_content['title']?>Welcome To Readymix Qatar LLC</h1>
                        <p class="text-justify"> <?php echo $home_content['content']?> </p>
                    </div>
                    
                    <div class="mb60 text-center section-title">
                        <!-- section title start-->
                        <h1>Our Solutions</h1>
                        <p class="text-justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, Lorem Ipsum is simply</p>
                    </div>
                    <!-- /.section title start-->
                </div>
            </div>
            <div class="row">
             
                <div class="service" id="service">
                    
                     <?php $i=0;  foreach($solutions as $solution): ?>
                    
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="bg-white pinside40 service-block outline mb30">
            <div class="icon mb40"> <img src="<?php echo $asset_path_backend; ?>images/solutions/thump/<?php echo $solution['image'];?>" alt="Mixed-use Developments"> </div>
                            <h2><a href="#" class="title"><?php echo $solution['title'];?></a></h2>
                            <p> <?php echo $solution['description']?> </p>
                            <a href="#" class="btn-link">Read More</a> </div>
                    </div>
                    
                  <?php endforeach; ?>  
                  
                  
                  
                 
                </div>
            </div>
        </div>
    </div>
    
        <?php $this->load->view('include/footer');?>
    
     
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    
</body>


</html>
