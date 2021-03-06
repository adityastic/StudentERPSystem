<!doctype html>
<html class="no-js " lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">
    <title>
      <?php echo $title;?>
    </title>
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <!-- Favicon-->
    <link rel="stylesheet" href="../assets/plugins/bootstrap/css/bootstrap.min.css">
    <!-- Dropzone Css -->
    <!-- <link href="../assets/plugins/dropzone/dropzone.css" rel="stylesheet"> -->
    <link href="../assets/plugins/valid/valid.css" rel="stylesheet">
    <!-- Bootstrap Material Datetime Picker Css -->
    <link href="../assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet" />
    <!-- Bootstrap Select Css -->
    <link href="../assets/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />
    <!-- Custom Css -->
    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="stylesheet" href="../assets/css/color_skins.css">
  </head>
  <body class="<?php echo $theme;?>">
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
            <a class="navbar-brand" href="<?php echo site_url('dashboard');?>">
              <img src="../assets/images/logo.svg" width="30" alt="Oreo">
              <span class="m-l-10">
                <?php echo $company_name;?>
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
        <!--        <li class="hidden-md-down"><a href="events.html" title="Events"><i class="zmdi zmdi-calendar"></i></a></li>-->
        <!--        <li class="hidden-md-down"><a href="mail-inbox.html" title="Inbox"><i class="zmdi zmdi-email"></i></a></li>-->
        <li>
          <a href="contact.html" title="Contact List">
            <i class="zmdi zmdi-account-box-phone">
            </i>
          </a>
        </li>
        <!--        <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button"><i class="zmdi zmdi-notifications"></i>-->
        <!--            <div class="notify"><span class="heartbit"></span><span class="point"></span></div>-->
        <!--            </a>-->
        <!--            <ul class="dropdown-menu pullDown">-->
        <!--                <li class="body">-->
        <!--                    <ul class="menu list-unstyled">-->
        <!--                        <li>-->
        <!--                            <a href="javascript:void(0);">-->
        <!--                                <div class="media">-->
        <!--                                    <img class="media-object" src="../assets/images/xs/avatar2.jpg" alt="">-->
        <!--                                    <div class="media-body">-->
        <!--                                        <span class="name">Sophia <span class="time">30min ago</span></span>-->
        <!--                                        <span class="message">There are many variations of passages</span>-->
        <!--                                    </div>-->
        <!--                                </div>-->
        <!--                            </a>-->
        <!--                        </li>-->
        <!--                        <li>-->
        <!--                            <a href="javascript:void(0);">-->
        <!--                                <div class="media">-->
        <!--                                    <img class="media-object" src="../assets/images/xs/avatar3.jpg" alt="">-->
        <!--                                    <div class="media-body">-->
        <!--                                        <span class="name">Sophia <span class="time">31min ago</span></span>-->
        <!--                                        <span class="message">There are many variations of passages of Lorem Ipsum</span>-->
        <!--                                    </div>-->
        <!--                                </div>-->
        <!--                            </a>-->
        <!--                        </li>-->
        <!--                        <li>-->
        <!--                            <a href="javascript:void(0);">-->
        <!--                                <div class="media">-->
        <!--                                    <img class="media-object" src="../assets/images/xs/avatar4.jpg" alt="">-->
        <!--                                    <div class="media-body">-->
        <!--                                        <span class="name">Isabella <span class="time">35min ago</span></span>-->
        <!--                                        <span class="message">There are many variations of passages</span>-->
        <!--                                    </div>-->
        <!--                                </div>-->
        <!--                            </a>-->
        <!--                        </li>-->
        <!--                        <li>-->
        <!--                            <a href="javascript:void(0);">-->
        <!--                                <div class="media">-->
        <!--                                    <img class="media-object" src="../assets/images/xs/avatar5.jpg" alt="">-->
        <!--                                    <div class="media-body">-->
        <!--                                        <span class="name">Alexander <span class="time">35min ago</span></span>-->
        <!--                                        <span class="message">Contrary to popular belief, Lorem Ipsum random</span>-->
        <!--                                    </div>-->
        <!--                                </div>-->
        <!--                            </a>-->
        <!--                        </li>-->
        <!--                        <li>-->
        <!--                            <a href="javascript:void(0);">-->
        <!--                                <div class="media">-->
        <!--                                    <img class="media-object" src="../assets/images/xs/avatar6.jpg" alt="">-->
        <!--                                    <div class="media-body">-->
        <!--                                        <span class="name">Grayson <span class="time">1hr ago</span></span>-->
        <!--                                        <span class="message">There are many variations of passages</span>-->
        <!--                                    </div>-->
        <!--                                </div>-->
        <!--                            </a>-->
        <!--                        </li>-->
        <!--                    </ul>-->
        <!--                </li>-->
        <!--                <li class="footer"> <a href="javascript:void(0);">View All</a> </li>-->
        <!--            </ul>-->
        <!--        </li>-->
        <!--        <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button"><i class="zmdi zmdi-flag"></i>-->
        <!--            <div class="notify">-->
        <!--                <span class="heartbit"></span>-->
        <!--                <span class="point"></span>-->
        <!--            </div>-->
        <!--            </a>-->
        <!--            <ul class="dropdown-menu pullDown">-->
        <!--                <li class="header">Department</li>-->
        <!--                <li class="body">-->
        <!--                    <ul class="menu tasks list-unstyled">-->
        <!--                        <li>-->
        <!--                            <a href="javascript:void(0);">-->
        <!--                                <div class="progress-container progress-primary">-->
        <!--                                    <span class="progress-badge">Computer</span>-->
        <!--                                    <div class="progress">-->
        <!--                                        <div class="progress-bar" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100" style="width: 86%;">-->
        <!--                                            <span class="progress-value">86%</span>-->
        <!--                                        </div>-->
        <!--                                    </div>                        -->
        <!--                                    <ul class="list-unstyled team-info">-->
        <!--                                        <li class="m-r-15"><small class="text-muted">Team</small></li>-->
        <!--                                        <li>-->
        <!--                                            <img src="../assets/images/xs/avatar2.jpg" alt="Avatar">-->
        <!--                                        </li>-->
        <!--                                        <li>-->
        <!--                                            <img src="../assets/images/xs/avatar3.jpg" alt="Avatar">-->
        <!--                                        </li>-->
        <!--                                        <li>-->
        <!--                                            <img src="../assets/images/xs/avatar4.jpg" alt="Avatar">-->
        <!--                                        </li>                            -->
        <!--                                    </ul>-->
        <!--                                </div>-->
        <!--                            </a>-->
        <!--                        </li>-->
        <!--                        <li>-->
        <!--                            <a href="javascript:void(0);">-->
        <!--                                <div class="progress-container progress-info">-->
        <!--                                    <span class="progress-badge">Medical</span>-->
        <!--                                    <div class="progress">-->
        <!--                                        <div class="progress-bar" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%;">-->
        <!--                                            <span class="progress-value">45%</span>-->
        <!--                                        </div>-->
        <!--                                    </div>-->
        <!--                                    <ul class="list-unstyled team-info">-->
        <!--                                        <li class="m-r-15"><small class="text-muted">Team</small></li>-->
        <!--                                        <li>-->
        <!--                                            <img src="../assets/images/xs/avatar10.jpg" alt="Avatar">-->
        <!--                                        </li>-->
        <!--                                        <li>-->
        <!--                                            <img src="../assets/images/xs/avatar9.jpg" alt="Avatar">-->
        <!--                                        </li>-->
        <!--                                        <li>-->
        <!--                                            <img src="../assets/images/xs/avatar8.jpg" alt="Avatar">-->
        <!--                                        </li>-->
        <!--                                        <li>-->
        <!--                                            <img src="../assets/images/xs/avatar7.jpg" alt="Avatar">-->
        <!--                                        </li>-->
        <!--                                        <li>-->
        <!--                                            <img src="../assets/images/xs/avatar6.jpg" alt="Avatar">-->
        <!--                                        </li>-->
        <!--                                    </ul>-->
        <!--                                </div>-->
        <!--                            </a>-->
        <!--                        </li>-->
        <!--                        <li>-->
        <!--                            <a href="javascript:void(0);">-->
        <!--                                <div class="progress-container progress-warning">-->
        <!--                                    <span class="progress-badge">Art & Design</span>-->
        <!--                                    <div class="progress">-->
        <!--                                        <div class="progress-bar" role="progressbar" aria-valuenow="29" aria-valuemin="0" aria-valuemax="100" style="width: 29%;">-->
        <!--                                            <span class="progress-value">29%</span>-->
        <!--                                        </div>-->
        <!--                                    </div>-->
        <!--                                    <ul class="list-unstyled team-info">-->
        <!--                                        <li class="m-r-15"><small class="text-muted">Team</small></li>-->
        <!--                                        <li>-->
        <!--                                            <img src="../assets/images/xs/avatar5.jpg" alt="Avatar">-->
        <!--                                        </li>-->
        <!--                                        <li>-->
        <!--                                            <img src="../assets/images/xs/avatar2.jpg" alt="Avatar">-->
        <!--                                        </li>-->
        <!--                                        <li>-->
        <!--                                            <img src="../assets/images/xs/avatar7.jpg" alt="Avatar">-->
        <!--                                        </li>                            -->
        <!--                                    </ul>-->
        <!--                                </div>-->
        <!--                            </a>-->
        <!--                        </li>                    -->
        <!--                    </ul>-->
        <!--                </li>-->
        <!--                <li class="footer"><a href="javascript:void(0);">View All</a></li>-->
        <!--            </ul>-->
        <!--        </li>-->
        <!--        <li class="hidden-sm-down">-->
        <!--            <div class="input-group">                -->
        <!--                <input type="text" class="form-control" placeholder="Search...">-->
        <!--                <span class="input-group-addon">-->
        <!--                    <i class="zmdi zmdi-search"></i>-->
        <!--                </span>-->
        <!--            </div>-->
        <!--        </li>        -->
        <li class="float-right">
          <a href="javascript:void(0);" class="fullscreen hidden-sm-down" data-provide="fullscreen" data-close="true">
            <i class="zmdi zmdi-fullscreen">
            </i>
          </a>
          <!--            <a href="sign-in.html" class="mega-menu" data-close="true"><i class="zmdi zmdi-power"></i></a>-->
          <!--            <a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i class="zmdi zmdi-settings zmdi-hc-spin"></i></a>-->
        </li>
      </ul>
    </nav>
    <!-- Left Sidebar -->
    <?php
include "LeftSide.php";
?>
    <section class="content profile-page">
      <form method="post" action="<?php echo site_url('Batches/add_batch');?>" enctype="multipart/form-data">
        <div class="block-header">
          <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
              <h2>Add Batches
                <small>
                  <?php echo $welcome_string;?>
                </small>
              </h2>
            </div>
            <!-- <div class="col-lg-5 col-md-6 col-sm-12">
<button class="btn btn-white btn-icon btn-round hidden-sm-down float-right m-l-10" type="button">
<i class="zmdi zmdi-plus"></i>
</button>
<ul class="breadcrumb float-md-right">
<li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Oreo</a></li>
<li class="breadcrumb-item"><a href="javascript:void(0);">Student</a></li>
<li class="breadcrumb-item active">Add</li>
</ul>
</div> -->
          </div>
        </div>
        <div class="container-fluid">
          <div class="row clearfix">
            <div class="col-md-12">
              <div class="card">
                <div class="header">
                  <h2>
                    <strong>Courses and Batch
                    </strong> Details 
                    <small>Joining Batch Information
                    </small> 
                  </h2>
                </div>
                <div class="body">
                  <div class="row clearfix">
                    <div class="col-lg-6 col-md-12">
                      <select class="form-control show-tick" name="field_class_id">
                        <?php
if (isset($classes)) {
    foreach ($classes->result() as $row) {
        echo "<option value=$row->id>$row->class</option>";
    }
}
?>
                      </select>
                    </div>
                    <div class="col-lg-6 col-md-12">
                      <select class="form-control show-tick" name="field_year_id">
                        <?php
if (isset($years)) {
    foreach ($years->result() as $row) {
        echo "<option value=$row->id>$row->year</option>";
    }
}
?>
                      </select>
                    </div>
                    <br>
                    <br>
                    <br>
                    <div class="col-sm-12">
                      <select class="form-control show-tick" name="field_section_id">
                        <?php
if (isset($sections)) {
    foreach ($sections->result() as $row) {
        echo "<option value=$row->id>$row->section</option>";
    }
}
?>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php 
          if (isset($errorstring)) {
              echo '<div class="alert alert-danger">
                            <strong>Oh snap!</strong> Change a few things up and try submitting again.<br>
                            ' . $errorstring . '
                        </div>';
          }
          if (isset($done)) {
            echo '<div class="alert alert-success" role="alert">
                            <div class="container">
                                <div class="alert-icon">
                                    <i class="zmdi zmdi-thumb-up"></i>
                                </div>
                                <strong>Success!</strong> Batch Added Successfully.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">
                                        <i class="zmdi zmdi-close"></i>
                                    </span>
                                </button>
                            </div>
                        </div>';
        }
        ?>
          <div class="row clearfix">
            <div class="col-md-12">
              <div class="card">
                <div class="header">
                  <h2>
                    <strong>Select
                    </strong> Coordinator 
                    <small>Monitoring Teacher Information
                    </small> 
                  </h2>
                </div>
                <div class="body">
                  <div class="row clearfix">
                    <div class="col-lg-5">
                      <div class="form-group">
                        <select class='form-control show-tick' name='field_coordinator'>
                            <?php
if (isset($allProfs)) {
            foreach ($allProfs->result() as $row) {
                echo '<option value='.$row->id.'>'.$row->prof_name.'</option>';
            }
        }
?>
                          </select>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row clearfix">
            <div class="col-md-12">
              <div class="card">
                <div class="header">
                  <h2>
                    <strong>Subject Teacher
                    </strong> Details 
                    <small>Subject Teachers Information
                    </small> 
                  </h2>
                </div>
                <div class="body">
                  <div class="row clearfix">
                    <div class="col-lg-5">
                      <div class="form-group">
                        <input type="number"class="form-control" placeholder="Number of Subjects" id="numberofsubjects" value="">
                      </div>
                    </div>
                    <div class="col-lg-5">
                      <button type="button" class="btn btn-primary btn-icon btn-sm btn-icon-mini btn-round" id="buttonAdd">
                        <div class="demo-google-material-icon"> 
                          <i class="material-icons">add
                          </i>
                        </div>
                      </button>
                    </div>
                  </div>
                  <div id="teachersSubjectList">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-12">
            <button type="submit" class="btn btn-raised btn-round btn-primary">Submit
            </button>
          </div>
        </div>
      </form>
    </section>
    <!-- Jquery Core Js --> 
    <script src="../assets/bundles/libscripts.bundle.js">
    </script> 
    <!-- Bootstrap JS and jQuery v3.2.1 -->
    <script src="../assets/bundles/vendorscripts.bundle.js">
    </script> 
    <!-- slimscroll, waves Scripts Plugin Js -->  
    <script src="../assets/plugins/autosize/autosize.js">
    </script> 
    <!-- Autosize Plugin Js --> 
    <script src="../assets/plugins/momentjs/moment.js">
    </script> 
    <!-- Moment Plugin Js --> 
    <!-- <script src="../assets/plugins/dropzone/dropzone.js"></script> Dropzone Plugin Js -->
    <!-- <script src="../assets/plugins/valid/valid.js"> -->
    </script> 
    <!-- valid Plugin Js -->
    <!-- Bootstrap Material Datetime Picker Plugin Js --> 
    <script src="../assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js">
    </script>
    <script src="../assets/bundles/mainscripts.bundle.js">
    </script>
    <!-- Custom Js -->
    <script src="../assets/js/pages/forms/basic-form-elements.js">
    </script>
    <script type="text/javascript">
        $("#buttonAdd").click(function () {
            for(var i = 0 ; i < document.getElementById('numberofsubjects').value ; i++)
                {
                  $('#teachersSubjectList').append("<div class='row'>\
                      <div class='col-lg-5'>\
                        <div class='form-group'>\
                          <select class='form-control show-tick' name='subjects[]'>\
                            <?php
if (isset($allSubjects)) {
    foreach ($allSubjects->result() as $row) {
        echo '<option value='.$row->id.'>'.$row->subject.'</option>';
    }
}
?>
                          </select>\
                        </div>\
                      </div>\
                      <div class='col-lg-5'>\
                        <div class='form-group'>\
                          <select class='form-control show-tick' name='teachers[]'>\
                            <?php
if (isset($allProfs)) {
    foreach ($allProfs->result() as $row) {
        echo '<option value='.$row->id.'>'.$row->prof_name.'</option>';
    }
}
?>
                          </select>\
                        </div>\
                      </div>\
                      <div class='col-lg-2'>\
                        <button type='button' class='btn btn-primary btn-icon btn-icon-mini btn-round' onclick='buttonDelete(this)'>\
                          <div class='demo-google-material-icon'> \
                            <i class='material-icons'>remove\
                            </i>\
                          </div>\
                        </button>\
                      </div>\
                    </div>");
                }
            }
        );
        function buttonDelete(e)
        {
            e.parentNode.parentNode.remove(e.parentNode.parentNode);
        }
    </script>
  </body>
</html>

