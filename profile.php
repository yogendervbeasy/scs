<?php
require_once 'php/session.php';
?>
<?php require 'php/connection.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
      <!-- Favicon icon -->
      <link rel="icon" href="files/assets/images/favicon.ico" type="image/x-icon">
      <!-- Google font-->
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
      <!-- waves.css -->
      <link rel="stylesheet" href="files/assets/pages/waves/css/waves.min.css" type="text/css" media="all">
      <!-- feather icon -->
      <link rel="stylesheet" type="text/css" href="files/assets/icon/feather/css/feather.css">
      <!-- Required Fremwork -->
      <link rel="stylesheet" type="text/css" href="files/bower_components/bootstrap/css/bootstrap.min.css">
      <!-- themify-icons line icon -->
      <link rel="stylesheet" type="text/css" href="files/assets/icon/themify-icons/themify-icons.css">
      <!-- ico font -->
      <link rel="stylesheet" type="text/css" href="files/assets/icon/icofont/css/icofont.css">
      <!-- Font Awesome -->
      <link rel="stylesheet" type="text/css" href="files/assets/icon/font-awesome/css/font-awesome.min.css">
      <!-- Data Table Css -->
      <link rel="stylesheet" type="text/css" href="files/bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
      <link rel="stylesheet" type="text/css" href="files/assets/pages/data-table/css/buttons.dataTables.min.css">
      <link rel="stylesheet" type="text/css" href="files/bower_components/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css">
      <!-- Style.css -->
      <link rel="stylesheet" type="text/css" href="files/assets/css/style.css">
      <link rel="stylesheet" type="text/css" href="files/assets/css/pages.css">
      <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.4.1/css/all.css' integrity='sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz' crossorigin='anonymous'>
        <style>
            .main-menu-header{
                margin-top:40px;
            }
        </style>
  </head>

  <body>
        <?php require('header.php'); ?>
                    <div class="pcoded-content">
                        <!-- [ breadcrumb ] start -->
                      <div class="page-header" style="background-color:#160e3f;">
                          <div class="page-block">
                              <div class="row align-items-center">
                                  <div class="col-md-8">
                                      <div class="page-header-title">
                                          <h4 class="m-b-10">Smart Cleaning Solutions</h4>
                                      </div>
                                      <ul class="breadcrumb">
                                          <li class="breadcrumb-item">
                                              <a href="index">
                                                  <i class="feather icon-home"></i>
                                              </a>
                                          </li>
                                          <li class="breadcrumb-item"><a href="#!">Profile</a>
                                          </li>
                                      </ul>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <!-- [ breadcrumb ] end -->
                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <!-- Page-body start -->
                                    <div class="page-body">
                                        <!--profile cover start-->
                                        <?php 
                            			$data=mysqli_query($conn,"select * from `Clients` where ClientID = '".$_SESSION['ClientID']."'  LIMIT 1");
                                		while($row=mysqli_fetch_array($data)){
                                		?>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="cover-profile">
                                                    <div class="profile-bg-img">
                                                        <img class="profile-bg-img img-fluid" src="files/assets/images/user-profile/bg-img1.jpg" alt="bg-img">
                                                        <div class="card-block user-info">
                                                            <div class="col-md-12">
                                                                <div class="media-left">
                                                                    <abbr title="Change Your Profile Image">
                                                                        <a href="#" class="profile-image">
                                                                            <?php
                                                                            if($row[3] != NULL){
                                                                            ?>
                                                                            <img data-toggle="modal" data-target="#myModal" class="user-img img-radius" src="files/assets/image/profile/<?php  echo $row[3]; ?>" width="100px" height="100px" style="background-color:white;">                                                                    </a>
                                                                            <?php
                                                                            }
                                                                            else{
                                                                            ?>
                                                                            <img data-toggle="modal" data-target="#myModal" class="user-img img-radius" src="files/assets/image/user-male-icon.jpg" width="100px" height="100px">
                                                                            <?php    
                                                                            }
                                                                            ?>
                                                                        </a>
                                                                    </abbr>
                                                                </div>

                                                                <div class="media-body row">
                                                                    <div class="col-lg-12">
                                                                        <div class="user-title">
                                                                            <h2><?php echo $row['Name']; ?></h2>
                                                                            <span class="text-white"><?php echo $row['StreetAddress']." ".$row['City']." ".$row['State']." ".$row['Country']; ?></span>
                                                                        </div>
                                                                    </div>
                                                                <!--    <div>
                                                                        <div class="pull-right cover-btn">
                                                                            <button type="button" class="btn btn-primary m-r-10 m-b-10"><i class="icofont icofont-plus"></i> Follow</button>
                                                                            <button type="button" class="btn btn-primary m-b-10"><i class="icofont icofont-ui-messaging"></i> Message</button>
                                                                        </div>
                                                                    </div>-->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                    	}
                                    	?>
                                        <!--profile cover end-->
                                        <!--<div class="row">
                                            <div class="col-lg-12">
                                                <!-- tab header start 
                                                <div class="tab-header card">
                                                    <ul class="nav nav-tabs md-tabs tab-timeline" role="tablist" id="mytab">
                                                        <li class="nav-item">
                                                            <a class="nav-link active" data-toggle="tab" href="#personal" role="tab">Information</a>
                                                            <div class="slide"></div>
                                                        </li>
                                                       <!-- <li class="nav-item">
                                                            <a class="nav-link" data-toggle="tab" href="#binfo" role="tab">User's Services</a>
                                                            <div class="slide"></div>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" data-toggle="tab" href="#contacts" role="tab">User's Contacts</a>
                                                            <div class="slide"></div>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" data-toggle="tab" href="#review" role="tab">Reviews</a>
                                                            <div class="slide"></div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!-- tab header end -->
                                                
                                                <!-- tab content start -->
                                                <div class="tab-content">
                                                    <!-- tab panel personal start -->
                                                    <div class="tab-pane active" id="personal" role="tabpanel">
                                                        <!-- personal card start -->
                                                        <div class="card">
                                                            <div class="card-header">
                                                                <h5 class="card-header-text">About</h5>
                                                                <button id="edit-btn" type="button" class="btn btn-sm btn-primary waves-effect waves-light float-right">
                                                                    <i class="icofont icofont-edit"></i>
                                                                </button>
                                                            </div>
                                                            
                                                            <div class="card-block">
                                                                <?php 
                            					                $data=mysqli_query($conn,"select * from `Clients` where ClientID = '".$_SESSION['ClientID']."'  LIMIT 1");
                                				                while($row=mysqli_fetch_array($data)){
                                				                ?>
                                                                <div class="view-info">
                                                                    <div class="row">
                                                                        <div class="col-lg-12">
                                                                            <div class="general-info">
                                                                                <div class="row">
                                                                                    <div class="col-lg-12 col-xl-6">
                                                                                        <div class="table-responsive">
                                                                                            <table class="table m-0">
                                                                                                <tbody>
                                                                                                    <tr>
                                                                                                        <th scope="row">Full Name</th>
                                                                                                        <td><?php echo $row['Name'] ?></td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <th scope="row">Client ID</th>
                                                                                                        <td><?php echo $row[6] ?></td>
                                                                                                    </tr>
                                                                                                    
                                                                                                    <tr>
                                                                                                        <th scope="row">Location</th>
                                                                                                        <td><?php echo $row['StreetAddress']."  ".$row['City']."  ".$row['State']."  ".$row['Country']; ?></td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <th scope="row">Phone Number</th>
                                                                                                        <td><?php echo $row['Phone'] ?></td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <th scope="row">Mobile Number</th>
                                                                                                        <td><?php echo $row[21] ?></td>
                                                                                                    </tr>
                                                                                                </tbody>
                                                                                            </table>
                                                                                        </div>
                                                                                    </div>
                                                                                    <!-- end of table col-lg-6 -->
                                                                                    <div class="col-lg-12 col-xl-6">
                                                                                        <div class="table-responsive">
                                                                                            <table class="table">
                                                                                                <tbody>
                                                                                                    <tr>
                                                                                                        <th scope="row">Email</th>
                                                                                                        <td><?php echo $row['Email'] ?></td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <th scope="row">GPS Latitude</th>
                                                                                                        <td><?php echo $row['28'] ?></td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <th scope="row">GPS Longitude</th>
                                                                                                        <td><?php echo $row['29'] ?></td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <th scope="row">Representative Name</th>
                                                                                                        <td><?php echo $row[12] ?></td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <th scope="row">Representative Code</th>
                                                                                                        <td><?php echo $row[11] ?></td>
                                                                                                    </tr>
                                                                                                </tbody>
                                                                                            </table>
                                                                                        </div>
                                                                                    </div>
                                                                                    <!-- end of table col-lg-6 -->
                                                                                </div>
                                                                                <!-- end of row -->
                                                                            </div>
                                                                            <!-- end of general info -->
                                                                        </div>
                                                                        <!-- end of col-lg-12 -->
                                                                    </div>
                                                                    <!-- end of row -->
                                                                </div>
                                                                <?php
                                                            	}
                                                            	?>
                                                            	<form action="php/update_profile" method="post" enctype="multipart/form-data">
                                                            	<div class="edit-info">
                                                                    <div class="row">
                                                                        <div class="col-lg-12">
                                                                            <div class="general-info form-material">
                                                                                <div class="row">
                                                                                    <div class="col-lg-6 "><div class="material-group">
                                                                                            <div class="material-addone">
                                                                                                <i class="icofont icofont-user"></i>
                                                                                            </div>
                                                                                            <div class="form-group form-primary">
                                                                                                <input type="text" name="name" class="form-control" required="">
                                                                                                <span class="form-bar"></span>
                                                                                                <label class="float-label">Full Name</label>
                                                                                            </div>
                                                                                        </div>
                                                                                        
                                                                                        <div class="material-group">
                                                                                            <div class="material-addone">
                                                                                                <i class="icofont icofont-mobile-phone"></i>
                                                                                            </div>
                                                                                            <div class="form-group form-primary">
                                                                                                <input type="text" name="mobile" class="form-control" required="">
                                                                                                <span class="form-bar"></span>
                                                                                                <label class="float-label">Mobile Number</label>
                                                                                            </div>
                                                                                        </div>
                                                                                    
                                                                                        <!--<div class="material-group">
                                                                                            <div class="material-addone">
                                                                                                <i class="fa fa-birthday-cake"></i>
                                                                                            </div>
                                                                                            <div class="form-group form-primary">
                                                                                                <input type="text" name="footer-email" class="form-control" required="">
                                                                                                <span class="form-bar"></span>
                                                                                                <label class="float-label"></label>
                                                                                            </div>
                                                                                        </div>


                                                                                        <div class="material-group">
                                                                                            <div class="material-addone">
                                                                                                <i class="fa fa-heart"></i>
                                                                                            </div>
                                                                                            <div class="form-group form-primary">
                                                                                             <select id="hello-single" class="form-control">
                                                                                                <option value="">---- Marital Status ----</option>
                                                                                                <option value="married">Married</option>
                                                                                                <option value="unmarried">Unmarried</option>
                                                                                            </select>
                                                                                            <span class="form-bar"></span>

                                                                                        </div>
                                                                                    </div>



                                                                                    <div class="material-group">
                                                                                        <div class="material-addone">
                                                                                            <i class="icofont icofont-location-pin"></i>
                                                                                        </div>
                                                                                        <div class="form-group form-primary">
                                                                                            <input type="text" name="footer-email" class="form-control" required="">
                                                                                            <span class="form-bar"></span>
                                                                                            <label class="float-label">Address</label>
                                                                                        </div>
                                                                                    </div>--->


                                                                                </div>
                                                                                <!-- end of table col-lg-6 -->
                                                                                <div class="col-lg-6">

                                                                                    <div class="material-group">
                                                                                        <div class="material-addone">
                                                                                            <i class="icofont icofont-earth"></i>
                                                                                        </div>
                                                                                        <div class="form-group form-primary">
                                                                                            <input type="text" name="latitude" class="form-control" required="">
                                                                                            <span class="form-bar"></span>
                                                                                            <label class="float-label">Latitude</label>
                                                                                        </div>
                                                                                    </div>


                                                                                    <div class="material-group">
                                                                                        <div class="material-addone">
                                                                                            <i class="icofont icofont-earth"></i>
                                                                                        </div>
                                                                                        <div class="form-group form-primary">
                                                                                            <input type="text" name="longitude" class="form-control" required="">
                                                                                            <span class="form-bar"></span>
                                                                                            <label class="float-label">Longitude</label>
                                                                                        </div>
                                                                                    </div>



                                                                                    <!---<div class="material-group">
                                                                                        <div class="material-addone">
                                                                                            <i class="icofont icofont-social-skype"></i>
                                                                                        </div>
                                                                                        <div class="form-group form-primary">
                                                                                            <input type="text" name="footer-email" class="form-control" required="">
                                                                                            <span class="form-bar"></span>
                                                                                            <label class="float-label">Skype Id</label>
                                                                                        </div>
                                                                                    </div>




                                                                                    <div class="material-group">
                                                                                        <div class="material-addone">
                                                                                            <i class="icofont icofont-earth"></i>
                                                                                        </div>
                                                                                        <div class="form-group form-primary">
                                                                                            <input type="text" name="footer-email" class="form-control" required="">
                                                                                            <span class="form-bar"></span>
                                                                                            <label class="float-label">website</label>
                                                                                        </div>
                                                                                    </div>-->



                                                                                </div>
                                                                                <!-- end of table col-lg-6 -->
                                                                            </div>
                                                                            <!-- end of row -->
                                                                            <div class="text-center">
                                                                                <button type="submit" class="btn btn-primary waves-effect waves-light m-r-20">Save</button>
                                                                                <a href="#!" id="edit-cancel" class="btn btn-default waves-effect">Cancel</a>
                                                                            </div>
                                                                        </div>
                                                                        <!-- end of edit info -->
                                                                        </form>
                                                                    </div>
                                                                    <!-- end of col-lg-12 -->
                                                                </div>
                                                                <!-- end of row -->
                                                            </div>
                                                            	
                                                            </div>
                                                        </div>
                                                    </div> 
                                                    
                                                </div>
                                                </div
                                                    <!-- tab content start -->
                                                <div class="tab-content">
                                                    <!-- tab panel personal start -->
                                                    <div class="tab-pane active" id="personal" role="">
                                                        <!-- personal card start -->
                                                        <div class="card">
                                                            <div class="card-header">
                                                                <h5 class="card-header-text">More Details</h5>
                                                                <!--<button id="edit-btn" type="button" class="btn btn-sm btn-primary waves-effect waves-light float-right">
                                                                    <i class="icofont icofont-edit"></i>
                                                                </button>-->
                                                            </div>
                                                            <?php
                                                            $data=mysqli_query($conn,"select * from `subcontractordetails` where clientID = '".$_SESSION['ClientID']."'  LIMIT 1");
                                                            while($row=mysqli_fetch_array($data)){
                                                            ?>
                                                            <div class="card-block">
                                                                
                                                                <div class="view-info">
                                                                    <div class="row">
                                                                        <div class="col-lg-12">
                                                                            <div class="general-info">
                                                                                <div class="row">
                                                                                    <div class="col-lg-12 col-xl-6">
                                                                                        <div class="table-responsive">
                                                                                            <table class="table m-0">
                                                                                                <tbody>
                                                                                                    <tr>
                                                                                                        <th scope="row">SubContractors Business Name</th>
                                                                                                        <td><?php echo $row[2] ?></td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <th scope="row">SubContractors Contact Name</th>
                                                                                                        <td><?php echo $row[8] ?></td>
                                                                                                    </tr>
                                                                                                    
                                                                                                    <tr>
                                                                                                        <th scope="row">SubContractors Email</th>
                                                                                                        <td><?php echo $row[7] ?></td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <th scope="row">SubContractors Mobile</th>
                                                                                                        <td>
                                                                                                            <?php
                                                                                                                $str = $row[6];
                                                                                                                if($str[0]=='?' && $str[strlen($str)-1]=='?'){
                                                                                                                    $str= substr ($str,'1',-1);
                                                                                                                    echo $str;
                                                                                                                }
                                                                                                                else if($str[0]=='?'){
                                                                                                                    $str= substr ($str,'1');
                                                                                                                    echo $str;
                                                                                                                }
                                                                                                                else if($str[strlen($str)-1]=='?'){
                                                                                                                    $str= substr ($str,'-1');
                                                                                                                    echo $str;
                                                                                                                }
                                                                                                                else{
                                                                                                                    echo $row[6];
                                                                                                                }
                                                                                                            ?>
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <th scope="row">Directors Email</th>
                                                                                                        <td><?php echo $row[4] ?></td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <th scope="row">Directors Mobile</th>
                                                                                                        <td>
                                                                                                            <?php
                                                                                                                $str = $row[10];
                                                                                                                if($str[0]=='?' && $str[strlen($str)-1]=='?'){
                                                                                                                    $str= substr ($str,'1',-1);
                                                                                                                    echo $str;
                                                                                                                }
                                                                                                                else if($str[0]=='?'){
                                                                                                                    $str= substr ($str,'1');
                                                                                                                    echo $str;
                                                                                                                }
                                                                                                                else if($str[strlen($str)-1]=='?'){
                                                                                                                    $str= substr ($str,'-1');
                                                                                                                    echo $str;
                                                                                                                }
                                                                                                                else{
                                                                                                                    echo $row[10];
                                                                                                                }
                                                                                                            ?>
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                </tbody>
                                                                                            </table>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-lg-12 col-xl-6">
                                                                                        <div class="table-responsive">
                                                                                            <table class="table m-0">
                                                                                                <tbody>
                                                                                                    <tr>
                                                                                                        <th scope="row">Account Manager Name</th>
                                                                                                        <td><?php echo $row['AccountManagerName'] ?></td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <th scope="row">Account Manager Email</th>
                                                                                                        <td><?php echo $row[3] ?></td>
                                                                                                    </tr>
                                                                                                    
                                                                                                    <tr>
                                                                                                        <th scope="row">Account Manager Mobile</th>
                                                                                                        <td>
                                                                                                            <?php
                                                                                                                $str = $row[9];
                                                                                                                if($str[0]=='?' && $str[strlen($str)-1]=='?'){
                                                                                                                    $str= substr ($str,'1',-1);
                                                                                                                    echo $str;
                                                                                                                }
                                                                                                                else if($str[0]=='?'){
                                                                                                                    $str= substr ($str,'1');
                                                                                                                    echo $str;
                                                                                                                }
                                                                                                                else if($str[strlen($str)-1]=='?'){
                                                                                                                    $str= substr ($str,'-1');
                                                                                                                    echo $str;
                                                                                                                }
                                                                                                                else{
                                                                                                                    echo $row[9];
                                                                                                                }
                                                                                                            ?>
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <th scope="row">Operations Manager Email</th>
                                                                                                        <td><?php echo $row[5] ?></td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <th scope="row">Operations Manager Mobile</th>
                                                                                                        <td>
                                                                                                            <?php
                                                                                                                $str = $row[11];
                                                                                                                if($str[0]=='?' && $str[strlen($str)-1]=='?'){
                                                                                                                    $str= substr ($str,'1',-1);
                                                                                                                    echo $str;
                                                                                                                }
                                                                                                                else if($str[0]=='?'){
                                                                                                                    $str= substr ($str,'1');
                                                                                                                    echo $str;
                                                                                                                }
                                                                                                                else if($str[strlen($str)-1]=='?'){
                                                                                                                    $str= substr ($str,'-1');
                                                                                                                    echo $str;
                                                                                                                }
                                                                                                                else{
                                                                                                                    echo $row[11];
                                                                                                                }
                                                                                                            ?>
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                    
                                                                                                    
                                                                                                </tbody>
                                                                                            </table>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <!-- end of general info -->
                                                                        </div>
                                                                        <!-- end of col-lg-12 -->
                                                                    </div>
                                                                    <!-- end of row -->
                                                                </div>
                                                                
                                                            	
                                                            	
                                                            </div>
                                                            <?php
                                                            }
                                                            ?>
                                                        </div>
                                                    </div> 
                                                    
                                                </div>
                                            </div>
                                            <!-- Page-body end -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Main body end -->
                            <div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <!-- Warning Section Starts -->
            <!-- Older IE warning message -->
        <!--[if lt IE 10]>
    <div class="ie-warning">
        <h1>Warning!!</h1>
        <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
        <div class="iew-container">
            <ul class="iew-download">
                <li>
                    <a href="http://www.google.com/chrome/">
                        <img src="../files/assets/images/browser/chrome.png" alt="Chrome">
                        <div>Chrome</div>
                    </a>
                </li>
                <li>
                    <a href="https://www.mozilla.org/en-US/firefox/new/">
                        <img src="../files/assets/images/browser/firefox.png" alt="Firefox">
                        <div>Firefox</div>
                    </a>
                </li>
                <li>
                    <a href="http://www.opera.com">
                        <img src="../files/assets/images/browser/opera.png" alt="Opera">
                        <div>Opera</div>
                    </a>
                </li>
                <li>
                    <a href="https://www.apple.com/safari/">
                        <img src="../files/assets/images/browser/safari.png" alt="Safari">
                        <div>Safari</div>
                    </a>
                </li>
                <li>
                    <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                        <img src="../files/assets/images/browser/ie.png" alt="">
                        <div>IE (9 & above)</div>
                    </a>
                </li>
            </ul>
        </div>
        <p>Sorry for the inconvenience!</p>
    </div>
    <![endif]-->
    <!-- Warning Section Ends -->
    <!-- Required Jquery -->
    <script type="text/javascript" src="../files/bower_components/jquery/js/jquery.min.js"></script>
    <script type="text/javascript" src="../files/bower_components/jquery-ui/js/jquery-ui.min.js"></script>
    <script type="text/javascript" src="../files/bower_components/popper.js/js/popper.min.js"></script>
    <script type="text/javascript" src="../files/bower_components/bootstrap/js/bootstrap.min.js"></script>
    <!-- waves js -->
    <script src="../files/assets/pages/waves/js/waves.min.js"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="../files/bower_components/jquery-slimscroll/js/jquery.slimscroll.js"></script>
    <!-- modernizr js -->
    <script type="text/javascript" src="../files/bower_components/modernizr/js/modernizr.js"></script>
    <script type="text/javascript" src="../files/bower_components/modernizr/js/css-scrollbars.js"></script>
    <!-- data-table js -->
    <script src="../files/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../files/bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="../files/bower_components/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../files/bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>
    <!-- ck editor -->
    <script src="../files/assets/pages/ckeditor/ckeditor.js"></script>
    <!-- echart js -->
    <script src="../files/assets/pages/chart/echarts/js/echarts-all.js" type="text/javascript"></script>
    <script src="../files/assets/pages/user-profile.js"></script>
    <script src="../files/assets/js/pcoded.min.js"></script>
    <script src="../files/assets/js/vertical/vertical-layout.min.js"></script>
    <script src="../files/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- Custom js -->
    <script type="text/javascript" src="../files/assets/js/script.js"></script>
    
    <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Select Your Profile Image</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
            <form action="php/update_profile_image" method="post" enctype="multipart/form-data">
                <input type="file" name="img"/>
                <button type="submit" class="btn btn-info">Update</button>
            </form>
        </div>
        
      </div>
    </div>
  </div>
</body>

</html>
