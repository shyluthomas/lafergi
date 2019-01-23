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
    
  <div class="page-header" style="background-image:url(<?php echo $asset_path; ?>images/contact-header.jpg);">
        <div class="container">
            <div class="row">
                 <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li><a href="index.html">Home</a></li>
                            <li class="active">Contact us</li>
                        </ol>
                    </div>
                </div>
                 <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="bg-white pinside30" style="opacity: 0.5;">
                        <div class="row">
                           <div class="col-xl-4 col-lg-4 col-md-9 col-sm-12 col-12">
                                <h1 class="page-title">Contact Us</h1>
                            </div>
                            
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <div class="">
        <!-- content start -->
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="wrapper-content bg-white pinside40">
                        <div class="contact-form mb60">
                            <div class=" ">
                                <div class="offset-xl-2 col-xl-8 offset-lg-2 col-lg-8 col-md-12 col-sm-12 col-12">
                                    <div class="mb60  section-title text-center  ">
                                        <!-- section title start-->
                                        <h1>Get In Touch</h1>
                                        <p>Reach out to us &amp; we will respond as soon as we can.</p>
                                    </div>
                                </div>
                                
                                <form class="contact-us" method="post" action="<?php echo base_url();?>index.php/contact">
                                        <div class=" ">
                                            <!-- Text input-->
                                            <div class="row">
                                            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label class="sr-only control-label" for="name">name<span class=" "> </span></label>
                                                    <input id="name" name="name" type="text" placeholder="Name" class="form-control input-md" required>
                                                </div>
                                            </div>
                                            <!-- Text input-->
                                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label class="sr-only control-label" for="email">Email<span class=" "> </span></label>
                                                    <input id="email" name="email" type="email" placeholder="Email" class="form-control input-md" required>
                                                </div>
                                            </div>
                                            <!-- Text input-->
                                            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label class="sr-only control-label" for="phone">Phone<span class=" "> </span></label>
                                                    <input id="phone" name="phone" type="text" placeholder="Phone" class="form-control input-md" required>
                                                </div>
                                            </div>
                                            <!-- Select Basic -->
                                           <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                <div class="form-group">
                                                    <label class="control-label" for="message"> </label>
                                                    <textarea class="form-control" id="message" rows="7" name="message" placeholder="Message"></textarea>
                                                </div>
                                            </div>
                                            <!-- Button -->
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                <button type="submit" class="btn btn-default">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- /.section title start-->
                        </div>
                        <div class="contact-us mb60">
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="mb60  section-title">
                                        <!-- section title start-->
                                        <h1>We are here to help you </h1>
                                        <p class="lead"> <?php echo $contact['content'];?></p>
                                    </div>
                                    <!-- /.section title start-->
                                </div>
                            </div>
                            <div class="row">
                               <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                                    <div class="bg-boxshadow pinside60 outline text-center mb30">
                                        <div class="mb40"><i class="icon-briefcase icon-2x icon-default"></i></div>
                                        <h2 class="capital-title">Office Address</h2>
                                        <p><?php echo nl2br($contact['office_address']);?>
                                            </p>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                                    <div class="bg-boxshadow pinside60 outline text-center mb30">
                                        <div class="mb40"><i class="icon-phone-call icon-2x icon-default"></i></div>
                                        <h2 class="capital-title">Call us at </h2>
                                        <h1 class="text-big"><?php echo nl2br($contact['contact']);?></h1>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                                    <div class="bg-boxshadow pinside60 outline text-center mb30">
                                        <div class="mb40"> <i class="icon-letter icon-2x icon-default"></i></div>
                                        <h2 class="capital-title">Email Address</h2>
                                        <p><?php echo nl2br($contact['email']);?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="map" id="googleMap">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d3606.088130867346!2d51.47361211448711!3d25.334823532321337!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sBuilding+No+385+Street+no+380++Zone+no+32+Al+Markhyia+Street+Madinet+Khalifa!5e0!3m2!1sen!2sin!4v1548271785040" width="1000" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.content end -->
    
        <?php $this->load->view('include/footer');?>
    
     
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
     <script>
    function initMap() {
//        var myLatLng = {
//            lat: 23.0225,
//            lng: 72.5714
//        };
//
//        var map = new google.maps.Map(document.getElementById('googleMap'), {
//            zoom: 8,
//            center: myLatLng,
//            scrollwheel: false,
//
//        });
//        var image = 'images/map-pin.png';
//        var marker = new google.maps.Marker({
//            position: myLatLng,
//            map: map,
//            icon: image,
//            title: 'Hello World!'
//
//        });
    }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?&amp;callback=initMap" async defer></script>
    
</body>


</html>
