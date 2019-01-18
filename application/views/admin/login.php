<?php
$asset_path = base_url().'assets/backend/';

$image_path = base_url().'images/';
?>

<!DOCTYPE html>

<html lang="en">

<html>

<head>

<meta charset="utf-8" />

<!--[if IE]>

	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>

<![endif]-->

<title>Login to Master Admin - vaddychurch</title>

<meta name="viewport" content="width=device-width">

<link rel="shortcut icon" href="<?php echo $asset_path;?>images/admin/favicon.ico" type="image/x-icon" >

<link rel="stylesheet" type="text/css" href="<?php echo $asset_path;?>css/admin/login.css">

<style type="text/css">

#SignIn {
	color:transparent;
}

.login_error_msg {
	color:#930;
	text-align:center;
}

</style>


</head>

<body>

<div class="wrapper">

<!--Content Frome here-->

<header id="mainhead">

	<a href="<?php echo site_url();?>/admin/login"><img src="<?php echo $asset_path;?>images/admin/logo.jpg" alt="Gladtechnologies"></a>

</header>





<div class="loginBand">

	<h1>Master Admin CMS - Login</h1>

    <div class="content">
	
	<div class="fullContent">
    
    		<?php if(isset($error_msg)){;?>
                <div class="login_error_msg"><?php echo $error_msg; ?></div>
			<?php }?>
    		
    		<form action="" method="post"/>
				
                <input name="username" required type="text" class="username" placeholder="Username"  />
        
                <input name="password" required class="password" placeholder="Password" type="password" />
        
                <div class="loginOtherItems">
                    <input name="login" type="submit" class="btnSignIn" value="save" id="SignIn" />
               </div>
			</form>
    </div>

    </div>

</div>









</div>



<!--Footer-->

<footer id="loginFooter">

	© <a href="<?php echo base_url();?>" target="_blank">Gladtechnologies.com</a> - 2013 <br>Powered by <a href="http://www.gladtechnologies.com/" target="_blank">Gladtechnologies/</a>

</footer>

</body>

</html>