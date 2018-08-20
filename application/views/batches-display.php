<!doctype html>
<html class="no-js " lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">
    <title>
      <?php echo $title; ?>
    </title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../assets/plugins/bootstrap/css/bootstrap.min.css">
    <!-- JQuery DataTable Css -->
    <link rel="stylesheet" href="../assets/plugins/jquery-datatable/dataTables.bootstrap4.min.css">
    <!-- Custom Css -->
    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="stylesheet" href="../assets/css/color_skins.css">
  </head>
  <body class="<?php echo $theme; ?>">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
      <div class="loader">
        <div class="m-t-30">
          <img class="zmdi-hc-spin" src="../assets/images/logo.svg" width="48" height="48" alt="Oreo">
        </div>
        <p>Please wait...
        </p>
      </div>
    </div>
    <!-- Overlay For Sidebars -->
    <div class="overlay">
    </div>
    <!-- Top Bar -->
    <nav class="navbar p-l-5 p-r-5">
      <ul class="nav navbar-nav navbar-left">
        <li>
          <div class="navbar-header">
            <a href="javascript:void(0);" class="bars">
            </a>
            <a class="navbar-brand" href="<?php echo site_url('dashboard'); ?>">
              <img src="../assets/images/logo.svg" width="30" alt="Oreo">
              <span class="m-l-10">
                <?php echo $company_name; ?>
              </span>
            </a>
          </div>
        </li>
        <li>
          <a href="javascript:void(0);" class="ls-toggle-btn" data-close="true">
            <i class="zmdi zmdi-swap">
            </i>
          </a>
        </li>
        <li>
          <a href="contact.html" title="Contact List">
            <i class="zmdi zmdi-account-box-phone">
            </i>
          </a>
        </li>
        <li class="float-right">
          <a href="javascript:void(0);" class="fullscreen hidden-sm-down" data-provide="fullscreen" data-close="true">
            <i class="zmdi zmdi-fullscreen">
            </i>
          </a>
        </li>
      </ul>
    </nav>
    <!-- Left Sidebar -->
    <?php include 'leftside.php';?>
    <!-- Main Content -->
    <?php $badgeArray = array('primary','warning','info','default','success');?>
    <section class="content profile-page">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>Class : <?php echo $batchInfo->class?><br>Section :  <?php echo $batchInfo->section?><br>Year :  <?php echo $batchInfo->year?>
                <small><?php echo $schoolname;?></small>
                </h2>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-md-12">
                <div class="card student-list">
                    <div class="header">
                        <h2><strong>Student</strong> List</h2>
                        <ul class="header-dropdown">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                <ul class="dropdown-menu dropdown-menu-right slideUp">
                                    <li><a href="javascript:void(0);">2017 Year</a></li>
                                    <li><a href="javascript:void(0);">2016 Year</a></li>
                                    <li><a href="javascript:void(0);">2015 Year</a></li>
                                </ul>
                            </li>
                            <li class="remove">
                                <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-hover m-b-0">
                                <thead>
                                    <tr>                                       
                                        <th>Photo</th>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Father Name</th>
                                        <th>Father Number</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        foreach ($batchStudentsInfo as $row) {
                                    ?>
                                    <tr>
                                        <td><span class="list-icon"><img class="rounded" src="../uploads/<?php echo $row->photo; ?>" alt=""></span></td>
                                        <td><span class="badge badge-<?php echo $badgeArray[rand(0,4)]?>"><?php echo $row->id; ?></span></td>
                                        <td><?php echo $row->name; ?></td>
                                        <td><?php echo $row->email; ?></td>
                                        <td><?php echo $row->father_number; ?></td>
                                        <td><?php echo $row->father_name; ?></td>
                                    </tr>
                                    <?php
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    <!-- Jquery Core Js -->
    <script src="../assets/bundles/libscripts.bundle.js">
    </script> 
    <!-- Lib Scripts Plugin Js -->
    <script src="../assets/bundles/vendorscripts.bundle.js">
    </script> 
    <!-- Lib Scripts Plugin Js -->
    <!-- Jquery DataTable Plugin Js -->
    <script src="../assets/bundles/datatablescripts.bundle.js">
    </script>
    <script src="../assets/bundles/mainscripts.bundle.js">
    </script>
    <script src="../assets/js/pages/tables/jquery-datatable.js">
    </script>
    <script type="text/javascript">
      jQuery(document).ready(function($) {
        $(".clickable-row").click(function() {
          window.location = $(this).data("href");
        }
                                 );
      }
                            );
    </script>
  </body>
</html>