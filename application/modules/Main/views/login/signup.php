<!--
Author: SME4ME
Author URL: www.sme4.me
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>SME4ME   |   Sign-Up </title>
<link href="<?php echo site_url();?>assets/css/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href='http://fonts.googleapis.com/css?family=Rokkitt' rel='stylesheet' type='text/css'>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<div class="row">
<!-- Favicon and touch icons -->
       <link rel="apple-touch-icon" sizes="60x60" href="http://www.sme4.me/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="http://www.sme4.me/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="http://www.sme4.me/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="http://www.sme4.me/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="http://www.sme4.me/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="http://www.sme4.me/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="http://www.sme4.me/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="http://www.sme4.me/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="http://www.sme4.me/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="http://www.sme4.me/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="http://www.sme4.me/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="http://www.sme4.me/favicon-16x16.png">
    <link rel="manifest" href="http://www.sme4.me/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="http://www.sme4.me/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

	</head>
<body>

<div class="header">
  <img src="<?php echo site_url();?>assets/css/images/logo.png" alt="logo" />
					                         
                    </div>
	
<div class="wrap">
<!-- strat-contact-form -->	
<div class="contact-form">
<!-- start-form -->
	<form class="contact_form" action="<?php echo site_url('Main/Login/signup');?>" method="post" name="contact_form">
		<h1>Sign up now</h1>
		 <ul>

          <?php echo show_notification(); ?>
              <span style="<?= $displayData ?>" >
              <?php echo show_valnotif(); ?>
              </span>
        
	        <li>
		 <input type="text" class="textbox1" name="signup[fullname]" placeholder="Name" required />
	            <span class="form_hint">Enter full name</span>
	             <p><img src="<?php echo site_url();?>assets/css/images/contact.png" alt=""></p>
	        </li>
			<li>
		 <input type="email" class="textbox1" name="signup[username]" placeholder="Email" required />
	            <span class="form_hint">Enter a valid email</span>
	             <p><img src="<?php echo site_url();?>assets/css/images/contact.png" alt=""></p>
	        </li>
	        <li>
	            <input type="password" name="signup[password]" class="textbox2" placeholder="password">
	            <p><img src="<?php echo site_url();?>assets/css/images/lock.png" alt=""></p>
	        </li>
			<!-- <li>
	            <input type="password" name="website" class="textbox2" placeholder="Confirm password">
	            <p><img src="<?php echo site_url();?>assets/css/images/lock.png" alt=""></p>
	        </li> -->
         </ul>
       	 	<input type="submit" name="Sign Up" value="Sign up Now"/>
			<div class="clear"></div>	
			
		<div class="clear"></div>	
	</form>
<!-- end-form -->
<!-- start-account -->
<div class="account">
	<h2><a href="<?= site_url() ?>">Already have an Acount? Sign in </a></h2>
    <div class="span"><a href="#"><img src="<?php echo site_url();?>assets/css/images/facebook.png" alt=""/><i>Sign up with Facebook</i><div class="clear"></div></a></div>	
    <div class="span1"><a href="#"><img src="<?php echo site_url();?>assets/css/images/twitter.png" alt=""/><i>Sign up with Twitter</i><div class="clear"></div></a></div>
    <div class="span2"><a href="#"><img src="<?php echo site_url();?>assets/css/images/gplus.png" alt=""/><i>Sign up with Google+</i><div class="clear"></div></a></div>
</div>	

<!-- end-account -->
<div class="clear"></div>	
</div>
<!-- end-contact-form -->
<div class="footer">
	
</div>
</div>
</body>
<footer class="main-footer">
        <div class="pull-right ">
          <strong>Copyright &copy; 2015-2016 <a href="#">JoshLaw</a>.</strong> All rights reserved.
        </div>
        
      </footer>
</html>