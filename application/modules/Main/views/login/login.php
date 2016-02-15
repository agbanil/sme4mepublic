
<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>SME4ME | Personlized Opportunities at your desk</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="<?php echo site_url();?>assets/assets-for-login/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo site_url();?>assets/assets-for-login/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo site_url();?>assets/assets-for-login/css/form-elements.css">
        <link rel="stylesheet" href="<?php echo site_url();?>assets/assets-for-login/css/style.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

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

        <!-- Top content -->
        <div class="top-content">
        <div class="header-navbar" id="header-navbar">

                    <nav class="navbar header-nav" id="myNavbar">
                        <div class="container">
                            <div class="navbar-header">

                                <!-- Menu Button show Mobile view -->
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>

                                <!-- TEMPLATE LOGO LIGHT -->
                                <a class="navbar-brand light-logo" href="http://sme4.me"><img src="<?php echo site_url();?>assets/assets-for-login/img/logo.png" alt="" class="img-responsive"></a>
                                <!-- TEMPLATE LOGO DARK -->
                                <a class="navbar-brand dark-logo" href="http://sme4.me"><img src="<?php echo site_url();?>assets/assets-for-login/img/logo.png" alt="" class="img-responsive"></a>

                            </div>
                            
                            <!-- Main Menu List
                            <div class="collapse navbar-collapse" id="navbar-collapse">
                                <ul id="navbar-nav" class="nav navbar-nav navbar-right">
                                    <li><a class="navbar-nav-hover" href="#header">HOME</a></li>
                                    <li><a class="navbar-nav-hover" href="#some-feature">FEATURES</a></li>
                                    <li><a class="navbar-nav-hover" href="#pricing-table">PRICINGS</a></li>
                                    <li><a class="navbar-nav-hover" href="#client-feedback">CLIENTS</a></li>
                                    <li><a class="navbar-nav-hover" href="#collapse-area">FAQ</a></li>
                                </ul>
                            </div>
                             -->
                        </div>
                    </nav>

                </div>
          
            <div class="inner-bg">
                <div class="container">
                  
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1><strong>Over 300,000 </strong> Opportunities Showcased</h1>
                            <div class="description">
                              <p>
                                You are one step away from fulfilling your dreams. Signup below or Sign in if you have an account already with us. We have Amazing Opportunities awaiting you.
                              </p>
                            </div>
                        </div>
                    </div>

                    <?php echo show_notification(); ?>
                    <span style="<?= $displayData ?>" >
                    <?php echo show_valnotif(); ?>
                    </span>
                    
                    <div class="row">
                        <div class="col-sm-5">
                          
                          <div class="form-box">
                            <div class="form-top">
                              <div class="form-top-left">
                                <h3>Login to our site</h3>
                                  <p>Enter username and password to log on:</p>
                              </div>
                              <div class="form-top-right">
                                <i class="fa fa-key"></i>
                              </div>
                              </div>
                              <div class="form-bottom">
                            <form role="form" action="" method="post" class="login-form">
                              <div class="form-group">
                                <label class="sr-only" for="form-username">Username</label>
                                  <input type="text" name="txtusername" placeholder="Username..." class="form-username form-control" id="form-username">
                                </div>
                                <div class="form-group">
                                  <label class="sr-only" for="form-password">Password</label>
                                  <input type="password" name="txtpassword" placeholder="Password..." class="form-password form-control" id="form-password">
                                </div>
                                <button type="submit" class="btn">Sign in!</button>
                            </form>
                          </div>
                        </div>
                    
                      <div class="social-login">
                            <h3>...or login with:</h3>
                            <div class="social-login-buttons">
                              <a class="btn btn-link-1 btn-link-1-facebook" href="#">
                                <i class="fa fa-facebook"></i> Facebook
                              </a>
                              <a class="btn btn-link-1 btn-link-1-twitter" href="#">
                                <i class="fa fa-twitter"></i> Twitter
                              </a>
                              <a class="btn btn-link-1 btn-link-1-google-plus" href="#">
                                <i class="fa fa-google-plus"></i> Google Plus
                              </a>
                            </div>
                          </div>
                          
                        </div>
                        
                        <div class="col-sm-1 middle-border"></div>
                        <div class="col-sm-1"></div>
                          
                        <div class="col-sm-5">
                          
                          <div class="form-box">
                            <div class="form-top">
                              <div class="form-top-left">
                                <h3>Sign up now</h3>
                                  <p>Fill in the form below to get instant access:</p>
                              </div>
                              <div class="form-top-right">
                                <i class="fa fa-pencil"></i>
                              </div>
                              </div>
                              <div class="form-bottom">
                            <form role="form" action="" method="post" class="registration-form">
                                <div class="form-group">
                                  <label class="sr-only" for="form-email">Email</label>
                                  <input type="text" name="signup[username]" placeholder="Email..." class="form-email form-control" id="form-email">
                                </div>
                                         <div class="form-group">
                                            <label class="sr-only" for="form-password"> Desired Password</label>
                                            <input type="password" name="signup[username]" placeholder="Desired Password..." class="form-password form-control" id="form-password">
                                        </div>
                                        <div class="form-group">
                                            <label class="sr-only" for="form-email">Join COde</label>
                                            <input type="text" name="form-email" placeholder="Enter your join code...(Optional)" class="form-email form-control" id="form-email">
                                        </div>
                                <button type="submit" class="btn">Sign me up!</button>
                            </form>
                          </div>
                          </div>
                          
                        </div>
                    </div>
                    
                </div>
            </div>
            
        </div>

      
        <!-- Javascript -->
        <script src="<?php echo site_url();?>assets/assets-for-login/js/jquery-1.11.1.min.js"></script>
        <script src="<?php echo site_url();?>assets/assets-for-login/bootstrap/js/bootstrap.min.js"></script>
        <script src="<?php echo site_url();?>assets/assets-for-login/js/jquery.backstretch.min.js"></script>
        <script src="<?php echo site_url();?>assets/assets-for-login/js/scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="assets-for-login/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>
