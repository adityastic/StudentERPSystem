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
    <section class="content">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>All Batches
                <small><?php echo $welcome_string; ?></small>
                </h2>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="header">
                        <h2><strong>Batch</strong> Details</h2>
                        <ul class="header-dropdown">                            
                            <li class="remove">
                                <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <ul class="nav nav-tabs padding-0">
                            <?php 
                                foreach ($batchDetails as $key => $value)
                                {?>
                                    <li class="nav-item"><a class="nav-link <?php echo (strcmp($key,'ALL')==0)?'active':'';?>" data-toggle="tab" href="#tab<?php echo $key;?>"><?php echo $key;?></a></li>
                                <?php
                                }
                            ?>
                        </ul>                        
                    </div>
                </div>
                <div class="tab-content">  
                    <?php 
                        foreach ($batchDetails as $key => $value)
                        {
                    ?>                 
                    <div class="tab-pane <?php echo (strcmp($key,'ALL')==0)?'active':'';?>" id="tab<?php echo $key;?>">
                        <div class="card">
                            <div class="body table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Year</th>
                                            <th>Class</th>
                                            <th>Section</th>
                                            <th>Coordinator</th>
                                        </tr>
                                    </thead>                            
                                    <tbody>
                                        <?php
                                            foreach ($value as $row)
                                            {
                                        ?>
                                            <tr>
                                                <td><?php echo $row->id;?></td>
                                                <td><?php echo $row->year;?></td>
                                                <td><?php echo $row->class;?></td>
                                                <td><?php echo $row->section;?></td>
                                                <td><?php echo $row->prof_name;?></td>
                                            </tr>
                                        <?php
                                            }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <?php 
                        }
                    ?>
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