<?php
require_once '../php/admin_session.php';
?>
<!DOCTYPE html>
<?php require '../php/connection.php'; ?>
<html lang="en">

<head>
    <title></title>
     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
      <!-- Favicon icon -->
      <link rel="icon" href="../files/assets/images/favicon.ico" type="image/x-icon">
      <!-- Google font-->
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
      <!-- waves.css -->
      <link rel="stylesheet" href="../files/assets/pages/waves/css/waves.min.css" type="text/css" media="all">
      <!-- feather icon -->
      <link rel="stylesheet" type="text/css" href="../files/assets/icon/feather/css/feather.css">
      <!-- Required Fremwork -->
      <link rel="stylesheet" type="text/css" href="../files/bower_components/bootstrap/css/bootstrap.min.css">
      <!-- themify-icons line icon -->
      <link rel="stylesheet" type="text/css" href="../files/assets/icon/themify-icons/themify-icons.css">
      <!-- ico font -->
      <link rel="stylesheet" type="text/css" href="../files/assets/icon/icofont/css/icofont.css">
      <!-- Font Awesome -->
      <link rel="stylesheet" type="text/css" href="../files/assets/icon/font-awesome/css/font-awesome.min.css">
      <!-- Data Table Css -->
      <link rel="stylesheet" type="text/css" href="../files/bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
      <link rel="stylesheet" type="text/css" href="../files/assets/pages/data-table/css/buttons.dataTables.min.css">
      <link rel="stylesheet" type="text/css" href="../files/bower_components/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css">
      <!-- Style.css -->
      <link rel="stylesheet" type="text/css" href="../files/assets/css/style.css">
      <link rel="stylesheet" type="text/css" href="../files/assets/css/pages.css">
            <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.4.1/css/all.css' integrity='sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz' crossorigin='anonymous'>    
        <style>
            .main-menu-header{
                margin-top:40px;
            }
        </style>
  </head>

  <body>
            <?php require_once('header.php'); ?>
                    <div class="pcoded-content">
                        <!-- [ breadcrumb ] start -->
                      <div class="page-header"  style="background-color:#160e3f;">
                          <div class="page-block">
                              <div class="row align-items-center">
                                  <div class="col-md-8">
                                      <div class="page-header-title">
                                          <h4 class="m-b-10">Admin</h4>
                                      </div>
                                      <ul class="breadcrumb">
                                          <li class="breadcrumb-item">
                                              <a href="index.php">
                                                  <i class="feather icon-home"></i>
                                              </a>
                                          </li>
                                          <li class="breadcrumb-item"><a href="#!">Subcontractors Details</a>
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
                                    <div class="page-body">
                                        <!-- [ page content ] start -->
                                        <div class="row">
                                        	<div class="col-md-12">
                                                <!-- Individual Column Searching (Select Inputs) start -->
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>All Subcontractors Detials of Smart Cleaning</h5>
                                             
                                                    </div>
                                                    <div class="card-block">
                                                        <div class="dt-responsive table-responsive">
                                                            <table id="footer-select" class="table table-striped table-bordered nowrap">
                                                                <thead>
                                                                    <tr>
                                                                        <th>S. No.</th>
                                                                        <th>Client ID</th>
                                                                        <th>Client Name</th>
                                                                        <th>SubContractors Business Name</th>
                                                                        <th>SubContractors Contact Name</th>
                                                                        <th>SubContractors Email</th>
                                                                        <th>SubContractors Mobile</th>
                                                                        <th>Account Managers Email</th>
                                                                        <th>Account Manager Mobile</th>
                                                                        <th>Operations Manager Email</th>
                                                                        <th>Operations Manager Mobile</th>
                                                                        <th>Directors Email</th>
                                                                        <th>Directors Mobile</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php
                                                                    $data=mysqli_query($conn,"select * from `subcontractordetails` INNER JOIN `Clients` ON subcontractordetails.clientID=Clients.ClientId;");
                                                                    $counter = 0;
                                                                    while($row=mysqli_fetch_array($data)){
                                                                    ?>
                                                                    <tr>
                                                                        <td><?php echo ++$counter; ?></td>
                                                                        <td><?php echo $row[1]; ?></td>
                                                                        <td><?php echo $row['Name']; ?></td>
                                                                        <td><?php echo $row[2]; ?></td>
                                                                        <td><?php echo $row[8]; ?></td>
                                                                        <td><?php echo $row[7]; ?></td>
                                                                        <td><?php echo $row[6]; ?></td>
                                                                        <td><?php echo $row[3]; ?></td>
                                                                        <td><?php echo $row[9]; ?></td>
                                                                        <td><?php echo $row[5]; ?></td>
                                                                        <td><?php echo $row[11]; ?></td>
                                                                        <td><?php echo $row[4]; ?></td>
                                                                        <td><?php echo $row[10]; ?></td>
                                                                    </tr>
                                                                    <?php
                                                                    }
                                                                    ?>
                                                                </tbody>
                                                               <!-- <tfoot>
                                                                    <tr>
                                                                        <th>Name</th>
                                                                        <th>Position</th>
                                                                        <th>Office</th>
                                                                        <th>Age</th>
                                                                        <th>Start date</th>
                                                                        <th>Salary</th>
                                                                    </tr>
                                                                </tfoot>-->
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Individual Column Searching (Select Inputs) end -->
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


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
<script src="../files/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="../files/assets/pages/data-table/js/jszip.min.js"></script>
<script src="../files/assets/pages/data-table/js/pdfmake.min.js"></script>
<script src="../files/assets/pages/data-table/js/vfs_fonts.js"></script>
<script src="../files/bower_components/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="../files/bower_components/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="../files/bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../files/bower_components/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="../files/bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>
<!-- Custom js -->
<script src="../files/assets/pages/data-table/js/data-table-custom.js"></script>
<script src="../files/assets/js/pcoded.min.js"></script>
<script src="../files/assets/js/vertical/vertical-layout.min.js"></script>
<script src="../files/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script type="text/javascript" src="../files/assets/js/script.js"></script>

</body>

</html>
