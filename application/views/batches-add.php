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
            <div class="m-t-30"><img class="zmdi-hc-spin" src="../assets/images/logo.svg" width="48" height="48" alt="Oreo"></div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- Top Bar -->
    <nav class="navbar p-l-5 p-r-5">
        <ul class="nav navbar-nav navbar-left">
            <li>
                <div class="navbar-header">
                    <a href="javascript:void(0);" class="bars"></a>
                    <a class="navbar-brand" href="<?php echo site_url('dashboard');?>"><img src="../assets/images/logo.svg" width="30" alt="Oreo"><span class="m-l-10"><?php echo $company_name;?></span></a>
                </div>
            </li>
            <li><a href="javascript:void(0);" class="ls-toggle-btn" data-close="true"><i class="zmdi zmdi-swap"></i></a></li>
            <li><a href="contact.html" title="Contact List"><i class="zmdi zmdi-account-box-phone"></i></a></li>
            <li class="float-right">
                <a href="javascript:void(0);" class="fullscreen hidden-sm-down" data-provide="fullscreen" data-close="true"><i class="zmdi zmdi-fullscreen"></i></a>
            </li>
        </ul>
    </nav>
    <!-- Left Sidebar -->
<?php
    include "leftside.php";
?>
        <section class="content profile-page">
            <form method="post" action="<?php echo site_url('batches/add_batch');?>">
                <div class="block-header">
                    <div class="row">
                        <div class="col-lg-7 col-md-6 col-sm-12">
                            <h2>Add Student
                <small><?php echo $welcome_string;?></small>
                </h2>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row clearfix">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="header">
                                    <h2><strong>Courses and Batch</strong> Details <small>Joining Batch Information</small> </h2>
                                </div>
                                <div class="body">
                                    <div class="row clearfix">
                                        <div class="col-lg-6 col-md-12">
                                            <select class="form-control show-tick" name="field_class_id">
                                                <?php
                                    foreach ($classes->result() as $row) {
                                        if (isset($_reEntry) && strcmp($row->id, $_reEntry['field_class_id']) == 0) {
                                            echo "<option value=$row->id selected>$row->class</option>";
                                        } else {
                                            echo "<option value=$row->id>$row->class</option>";
                                        }
                                    }
                                    ?>
                                            </select>
                                        </div>
                                        <div class="col-lg-6 col-md-12">
                                            <select class="form-control show-tick" name="field_year_id">
                                                <?php
                                    foreach ($years->result() as $row) {
                                        if (isset($_reEntry) && strcmp($row->id, $_reEntry['field_year_id']) == 0) {
                                            echo "<option value=$row->id selected>$row->year</option>";
                                        } else {
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

                                    foreach ($sections->result() as $row) {
                                        if (isset($_reEntry) && strcmp($row->id, $_reEntry['field_section_id']) == 0) {
                                            echo "<option value=$row->id selected>$row->section</option>";
                                        } else {
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
                    <div class="row clearfix">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="card">
                                <div class="header">
                                    <h2><strong>Subject Teachers's</strong> Information <small>Enter Subject Teachers</small> </h2>
                                </div>
                                <div class="body">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <input type="number" value="" placeholder="Enter Total Subjects" class="form-control" id="subjectcount">
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                                <button type="button" class="btn btn-primary btn-icon btn-sm btn-icon-mini btn-round" id="addFields">
                                                    <div class='demo-google-material-icon'> <i class='material-icons'>add</i></div>
                                                </button>
                                        </div>
                                    </div>
                                    <div id="teacherSubject">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <button type="submit" class="btn btn-raised btn-round btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </section>
        <!-- Jquery Core Js -->
        <script src="../assets/bundles/libscripts.bundle.js"></script>
        <!-- Bootstrap JS and jQuery v3.2.1 -->
        <script src="../assets/bundles/vendorscripts.bundle.js"></script>
        <!-- slimscroll, waves Scripts Plugin Js -->

        <script src="../assets/plugins/autosize/autosize.js"></script>
        <!-- Autosize Plugin Js -->
        <script src="../assets/plugins/momentjs/moment.js"></script>
        <!-- Moment Plugin Js -->
        <!-- <script src="../assets/plugins/dropzone/dropzone.js"></script> Dropzone Plugin Js -->
        <!-- <script src="../assets/plugins/valid/valid.js"></script> -->
        <!-- valid Plugin Js -->
        <!-- Bootstrap Material Datetime Picker Plugin Js -->
        <script src="../assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>

        <script src="../assets/bundles/mainscripts.bundle.js"></script>
        <!-- Custom Js -->
        <script src="../assets/js/pages/forms/basic-form-elements.js"></script>
        <script type="text/javascript">
            $("#addFields").click(function () {
                for ( var i = 0 ; i < document.getElementById('subjectcount').value ; i++)
                {
                    $("#teacherSubject").append("<div class='row'>\
                                            <div class='col-sm-5'>\
                                                <div class='form-group'>\
                                                <select class='form-control show-tick' name='subjects[]'>\
                                                <?php
                                    foreach ($allsubjects->result() as $row) {
                                            echo "<option value=$row->id>$row->subject</option>";
                                    }
                                    ?>
                                            </select>\
                                                </div>\
                                            </div>\
                                            <div class='col-sm-5'>\
                                                <div class='form-group'>\
                                                    <select class='form-control show-tick' name='subjects[]'>\
                                                <?php
                                    foreach ($allteachers->result() as $row) {
                                            echo "<option value=$row->id>$row->prof_name</option>";
                                    }
                                    ?>
                                            </select>\
                                                </div>\
                                            </div>\
                                            <div class='col-sm-2'>\
                                                <button type='button' class='btn btn-primary btn-icon btn-sm btn-icon-mini btn-round' id='addFields' onclick='removeObject(this)'>\
                                                    <div class='demo-google-material-icon'> <i class='material-icons'>remove</i></div> \
                                                </button>\
                                            </div>\
                                        </div>");
                }
            });

            function removeObject(e)
            {
                e.parentNode.parentNode.parentNode.removeChild(e.parentNode.parentNode);
            }
        </script>
</body>

</html>