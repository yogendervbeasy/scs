<?php
session_start();

if($_SESSION['Id']!=NULL) {

 echo "<script>window.location.href='admin/index';</script>";
}
else if($_SESSION['ClientID']!=NULL) {

 echo "<script>window.location.href='index';</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
    

<head>
    <title>Smart Cleanings</title>
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      
      <!-- Favicon icon -->

      <link rel="icon" href="files/assets/images/favicon.ico" type="image/x-icon">
      <!-- Google font-->     
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
      <!-- Required Fremwork -->
      <link rel="stylesheet" type="text/css" href="files/bower_components/bootstrap/css/bootstrap.min.css">
      <!-- waves.css -->
      <link rel="stylesheet" href="files/assets/pages/waves/css/waves.min.css" type="text/css" media="all"><!-- feather icon --> <link rel="stylesheet" type="text/css" href="files/assets/icon/feather/css/feather.css">
      <!-- themify-icons line icon -->
      <link rel="stylesheet" type="text/css" href="files/assets/icon/themify-icons/themify-icons.css">
      <!-- ico font -->
      <link rel="stylesheet" type="text/css" href="files/assets/icon/icofont/css/icofont.css">
      <!-- Font Awesome -->
      <link rel="stylesheet" type="text/css" href="files/assets/icon/font-awesome/css/font-awesome.min.css">
      <!-- Style.css -->
      <link rel="stylesheet" type="text/css" href="files/assets/css/style.css">
      <link rel="stylesheet" type="text/css" href="files/assets/css/pages.css">
  </head>

  
  <body themebg-pattern="theme1" style="background-color:#150d3f; background-image: linear-gradient(rgba(255,255,255,0) 107px, rgba(255,255,255,0.9) 10%); height:100%;">

  

    <section class="login-block" style=margin:0px auto;>
        <!-- Container-fluid starts -->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <!-- Authentication card start -->
                    
                        <form action = "php/login.php" method = "post" class="md-float-material form-material">
                            <div class="text-left">
                                <img src="files/assets/image/logo/download.jpg" class="img-responsive" alt="logo.png" width="15%" height="100px">
                            </div>
                            <div class="auth-box card">
                                <div class="card-block">
                                    <div class="row m-b-20">
                                        <div class="col-md-12">
                                            <h3 class="text-center">Sign In</h3>
                                        </div>
                                    </div>
                                    <div class="form-group form-primary">
                                        <input type="text" name = "username" class="form-control" required="" placeholder="Username">
                                       
                                       
                                    </div>
                                    <div class="form-group form-primary">
                                        <input type="password" name="password" class="form-control" required="" placeholder="Password">
                                        
                                        
                                    </div>
                                    <div class="row m-t-25 text-left">
                                        <div class="col-12">
                                            <!--<div class="checkbox-fade fade-in-primary d-">
                                                <label>
                                                    <input type="checkbox" value="">
                                                    <span class="cr"><i class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
                                                    <span class="text-inverse">Remember me</span>
                                                </label>
                                            </div>-->
                                            <!--div class="forgot-phone text-right float-right">
                                                <a href="auth-reset-password.html" class="text-right f-w-600"> Forgot Password?</a>
                                            </div-->
                                        </div>
                                    </div>
                                    <div class="row m-t-30">
                                        <div class="col-md-12">
                                            <button type="submit" value="Sign" class="btn btn-primary btn-md btn-block waves-effect waves-light text-center m-b-20" style="background-color:#150d3f;">Sign in</button>
                                        </div>
                                    </div>
                                    <hr/>
                                    <div class="row">
                                        <div class="col-md-10">
                                            <p class="text-inverse text-left m-b-0">Thank You !</p>
                                            <!--<p class="text-inverse text-left"><a href="index.html"><b>Back to website</b></a></p>-->
                                        </div>
                                        <div class="col-md-2">
                                            <img src="files/assets/image/logo/smartclean46x46.png" alt="small-logo.png">
                                            <!--p class="text-inverse text-center " style="margin-bottom:10px;"></p>
                                            <a href="https://play.google.com/store/apps/details?id=com.smarter.portal.smarterportal" target="_blank"><img src="files/assets/image/app/googleplay.png" alt="" width="70px"/></a>&nbsp;&nbsp;
                                            <a href="#" ><img src="files/assets/image/app/appstore.png" alt="" width="70px"/></a-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!-- end of form -->
                </div>
                <!-- end of col-sm-12 -->
                
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container-fluid -->
    </section>
    </div>
    
<!-- Required Jquery -->
<script type="text/javascript" src="files/bower_components/jquery/js/jquery.min.js"></script>
<script type="text/javascript" src="files/bower_components/jquery-ui/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="files/bower_components/popper.js/js/popper.min.js"></script>
<script type="text/javascript" src="files/bower_components/bootstrap/js/bootstrap.min.js"></script>
<!-- waves js -->
<script src="files/assets/pages/waves/js/waves.min.js"></script>
<!-- jquery slimscroll js -->
<script type="text/javascript" src="files/bower_components/jquery-slimscroll/js/jquery.slimscroll.js"></script>
<!-- modernizr js -->
<script type="text/javascript" src="files/bower_components/modernizr/js/modernizr.js"></script>
<script type="text/javascript" src="files/bower_components/modernizr/js/css-scrollbars.js"></script>
<!-- i18next.min.js -->
<script type="text/javascript" src="files/bower_components/i18next/js/i18next.min.js"></script>
<script type="text/javascript" src="files/bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js"></script>
<script type="text/javascript" src="files/bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js"></script>
<script type="text/javascript" src="files/bower_components/jquery-i18next/js/jquery-i18next.min.js"></script>
<script type="text/javascript" src="files/assets/js/common-pages.js"></script>
</body>

</html>
