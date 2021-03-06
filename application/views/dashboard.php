<!doctype html>
<html class="no-js " lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

    <title><?php echo $title;?></title>
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <!-- Favicon-->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
    <!-- Custom Css -->
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/color_skins.css">
</head>
<body class="<?php echo $theme;?>">
<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="m-t-30"><img class="zmdi-hc-spin" src="assets/images/logo.svg" width="48" height="48" alt="Oreo"></div>
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
                <a class="navbar-brand" href="index.html"><img src="assets/images/logo.svg" width="30" alt="Oreo"><span class="m-l-10"><?php echo $company_name;?></span></a>
            </div>
        </li>
        <li><a href="javascript:void(0);" class="ls-toggle-btn" data-close="true"><i class="zmdi zmdi-swap"></i></a></li>
        <!--        <li class="hidden-md-down"><a href="events.html" title="Events"><i class="zmdi zmdi-calendar"></i></a></li>-->
        <!--        <li class="hidden-md-down"><a href="mail-inbox.html" title="Inbox"><i class="zmdi zmdi-email"></i></a></li>-->
        <li><a href="contact.html" title="Contact List"><i class="zmdi zmdi-account-box-phone"></i></a></li>
        <!--        <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button"><i class="zmdi zmdi-notifications"></i>-->
        <!--            <div class="notify"><span class="heartbit"></span><span class="point"></span></div>-->
        <!--            </a>-->
        <!--            <ul class="dropdown-menu pullDown">-->
        <!--                <li class="body">-->
        <!--                    <ul class="menu list-unstyled">-->
        <!--                        <li>-->
        <!--                            <a href="javascript:void(0);">-->
        <!--                                <div class="media">-->
        <!--                                    <img class="media-object" src="assets/images/xs/avatar2.jpg" alt="">-->
        <!--                                    <div class="media-body">-->
        <!--                                        <span class="name">Sophia <span class="time">30min ago</span></span>-->
        <!--                                        <span class="message">There are many variations of passages</span>                                        -->
        <!--                                    </div>-->
        <!--                                </div>-->
        <!--                            </a>-->
        <!--                        </li>-->
        <!--                        <li>-->
        <!--                            <a href="javascript:void(0);">-->
        <!--                                <div class="media">-->
        <!--                                    <img class="media-object" src="assets/images/xs/avatar3.jpg" alt="">-->
        <!--                                    <div class="media-body">-->
        <!--                                        <span class="name">Sophia <span class="time">31min ago</span></span>-->
        <!--                                        <span class="message">There are many variations of passages of Lorem Ipsum</span>                                        -->
        <!--                                    </div>-->
        <!--                                </div>-->
        <!--                            </a>-->
        <!--                        </li>-->
        <!--                        <li>-->
        <!--                            <a href="javascript:void(0);">-->
        <!--                                <div class="media">-->
        <!--                                    <img class="media-object" src="assets/images/xs/avatar4.jpg" alt="">-->
        <!--                                    <div class="media-body">-->
        <!--                                        <span class="name">Isabella <span class="time">35min ago</span></span>-->
        <!--                                        <span class="message">There are many variations of passages</span>                                        -->
        <!--                                    </div>-->
        <!--                                </div>-->
        <!--                            </a>-->
        <!--                        </li>-->
        <!--                        <li>-->
        <!--                            <a href="javascript:void(0);">-->
        <!--                                <div class="media">-->
        <!--                                    <img class="media-object" src="assets/images/xs/avatar5.jpg" alt="">-->
        <!--                                    <div class="media-body">-->
        <!--                                        <span class="name">Alexander <span class="time">35min ago</span></span>-->
        <!--                                        <span class="message">Contrary to popular belief, Lorem Ipsum random</span>                                        -->
        <!--                                    </div>-->
        <!--                                </div>-->
        <!--                            </a>-->
        <!--                        </li>-->
        <!--                        <li>-->
        <!--                            <a href="javascript:void(0);">-->
        <!--                                <div class="media">-->
        <!--                                    <img class="media-object" src="assets/images/xs/avatar6.jpg" alt="">-->
        <!--                                    <div class="media-body">-->
        <!--                                        <span class="name">Grayson <span class="time">1hr ago</span></span>-->
        <!--                                        <span class="message">There are many variations of passages</span>                                        -->
        <!--                                    </div>-->
        <!--                                </div>-->
        <!--                            </a>-->
        <!--                        </li>                        -->
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
        <!--                                            <img src="assets/images/xs/avatar2.jpg" alt="Avatar">-->
        <!--                                        </li>-->
        <!--                                        <li>-->
        <!--                                            <img src="assets/images/xs/avatar3.jpg" alt="Avatar">-->
        <!--                                        </li>-->
        <!--                                        <li>-->
        <!--                                            <img src="assets/images/xs/avatar4.jpg" alt="Avatar">-->
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
        <!--                                            <img src="assets/images/xs/avatar10.jpg" alt="Avatar">-->
        <!--                                        </li>-->
        <!--                                        <li>-->
        <!--                                            <img src="assets/images/xs/avatar9.jpg" alt="Avatar">-->
        <!--                                        </li>-->
        <!--                                        <li>-->
        <!--                                            <img src="assets/images/xs/avatar8.jpg" alt="Avatar">-->
        <!--                                        </li>-->
        <!--                                        <li>-->
        <!--                                            <img src="assets/images/xs/avatar7.jpg" alt="Avatar">-->
        <!--                                        </li>-->
        <!--                                        <li>-->
        <!--                                            <img src="assets/images/xs/avatar6.jpg" alt="Avatar">-->
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
        <!--                                            <img src="assets/images/xs/avatar5.jpg" alt="Avatar">-->
        <!--                                        </li>-->
        <!--                                        <li>-->
        <!--                                            <img src="assets/images/xs/avatar2.jpg" alt="Avatar">-->
        <!--                                        </li>-->
        <!--                                        <li>-->
        <!--                                            <img src="assets/images/xs/avatar7.jpg" alt="Avatar">-->
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
            <a href="javascript:void(0);" class="fullscreen hidden-sm-down" data-provide="fullscreen" data-close="true"><i class="zmdi zmdi-fullscreen"></i></a>
            <!--            <a href="sign-in.html" class="mega-menu" data-close="true"><i class="zmdi zmdi-power"></i></a>-->
            <!--            <a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i class="zmdi zmdi-settings zmdi-hc-spin"></i></a>-->
        </li>
    </ul>
</nav>
<!-- Left Sidebar -->
<?php include 'LeftSide.php';?>
<!-- Right Sidebar -->
<!-- <aside id="rightsidebar" class="right-sidebar">
    <ul class="nav nav-tabs">
        <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#setting"><i class="zmdi zmdi-settings zmdi-hc-spin"></i></a></li>
        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#chat"><i class="zmdi zmdi-comments"></i></a></li>
        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#activity">Activity</a></li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane slideRight active" id="setting">
            <div class="slim_scroll">                                
                <div class="card">
                    <h6>Skins</h6>
                    <ul class="choose-skin list-unstyled">
                        <li data-theme="purple">
                            <div class="purple"></div>
                        </li>                   
                        <li data-theme="blue">
                            <div class="blue"></div>
                        </li>
                        <li data-theme="cyan">
                            <div class="cyan"></div>                    
                        </li>
                        <li data-theme="green">
                            <div class="green"></div>
                        </li>
                        <li data-theme="orange">
                            <div class="orange"></div>
                        </li>
                        <li data-theme="blush" class="active">
                            <div class="blush"></div>                    
                        </li>
                    </ul>                    
                </div>
                <div class="card theme-light-dark">
                    <h6>Left Menu</h6>
                    <button class="t-light btn btn-default btn-simple btn-round">Light Menu</button>
                    <button class="t-dark btn btn-default btn-round">Dark Menu</button>
					<button class="m_img_btn btn btn-primary btn-round btn-block">Sidebar Image</button>                    
                </div>
                <div class="card">
                    <h6>General Settings</h6>
                    <ul class="setting-list list-unstyled">
                        <li>
                            <div class="checkbox">
                                <input id="checkbox1" type="checkbox">
                                <label for="checkbox1">Report Panel Usage</label>
                            </div>
                        </li>
                        <li>
                            <div class="checkbox">
                                <input id="checkbox2" type="checkbox" checked="">
                                <label for="checkbox2">Email Redirect</label>
                            </div>
                        </li>
                        <li>
                            <div class="checkbox">
                                <input id="checkbox3" type="checkbox" checked="">
                                <label for="checkbox3">Notifications</label>
                            </div>                        
                        </li>
                        <li>
                            <div class="checkbox">
                                <input id="checkbox4" type="checkbox" checked="">
                                <label for="checkbox4">Auto Updates</label>
                            </div>
                        </li>
                        <li>
                            <div class="checkbox">
                                <input id="checkbox5" type="checkbox" checked="">
                                <label for="checkbox5">Offline</label>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="card">
                    <h6>Information Summary</h6>
                    <div class="row m-b-20">
                        <div class="col-7">                            
                            <small class="displayblock">MEMORY USAGE</small>
                            <h5 class="m-b-0 h6">512</h5>
                        </div>
                        <div class="col-5">
                            <div class="sparkline" data-type="bar" data-width="97%" data-height="25px" data-bar-Width="5" data-bar-Spacing="3" data-bar-Color="#00ced1">8,7,9,5,6,4,6,8</div>
                        </div>
                    </div>
                    <div class="row m-b-20">
                        <div class="col-7">                            
                            <small class="displayblock">CPU USAGE</small>
                            <h5 class="m-b-0 h6">90%</h5>
                        </div>
                        <div class="col-5">
                            <div class="sparkline" data-type="bar" data-width="97%" data-height="25px" data-bar-Width="5" data-bar-Spacing="3" data-bar-Color="#F15F79">6,5,8,2,6,4,6,4</div>
                        </div>
                    </div>
                    <div class="row m-b-20">
                        <div class="col-7">                            
                            <small class="displayblock">DAILY TRAFFIC</small>
                            <h5 class="m-b-0 h6">25 142</h5>
                        </div>
                        <div class="col-5">
                            <div class="sparkline" data-type="bar" data-width="97%" data-height="25px" data-bar-Width="5" data-bar-Spacing="3" data-bar-Color="#78b83e">7,5,8,7,4,2,6,5</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-7">                            
                            <small class="displayblock">DISK USAGE</small>
                            <h5 class="m-b-0 h6">60.10%</h5>
                        </div>
                        <div class="col-5">
                            <div class="sparkline" data-type="bar" data-width="97%" data-height="25px" data-bar-Width="5" data-bar-Spacing="3" data-bar-Color="#457fca">7,5,2,5,6,7,6,4</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>       
        <div class="tab-pane right_chat stretchLeft" id="chat">
            <div class="slim_scroll">
                <div class="card">
                    <div class="search">                        
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="input-group-addon">
                                <i class="zmdi zmdi-search"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <h6>Recent</h6>
                    <ul class="list-unstyled">
                        <li class="online">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object " src="assets/images/xs/avatar4.jpg" alt="">
                                    <div class="media-body">
                                        <span class="name">Sophia</span>
                                        <span class="message">There are many variations of passages of Lorem Ipsum available</span>
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>                            
                        </li>
                        <li class="online">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object " src="assets/images/xs/avatar5.jpg" alt="">
                                    <div class="media-body">
                                        <span class="name">Grayson</span>
                                        <span class="message">All the Lorem Ipsum generators on the</span>
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>                            
                        </li>
                        <li class="offline">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object " src="assets/images/xs/avatar2.jpg" alt="">
                                    <div class="media-body">
                                        <span class="name">Isabella</span>
                                        <span class="message">Contrary to popular belief, Lorem Ipsum</span>
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>                            
                        </li>
                        <li class="me">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object " src="assets/images/xs/avatar1.jpg" alt="">
                                    <div class="media-body">
                                        <span class="name">John</span>
                                        <span class="message">It is a long established fact that a reader</span>
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>                            
                        </li>
                        <li class="online">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object " src="assets/images/xs/avatar3.jpg" alt="">
                                    <div class="media-body">
                                        <span class="name">Alexander</span>
                                        <span class="message">Richard McClintock, a Latin professor</span>
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>                            
                        </li>                        
                    </ul>
                </div>
                <div class="card">
                    <h6>Contacts</h6>
                    <ul class="list-unstyled">
                        <li class="offline inlineblock">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object " src="assets/images/xs/avatar10.jpg" alt="">
                                    <div class="media-body">
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="offline inlineblock">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object " src="assets/images/xs/avatar6.jpg" alt="">
                                    <div class="media-body">
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="offline inlineblock">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object " src="assets/images/xs/avatar7.jpg" alt="">
                                    <div class="media-body">
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="offline inlineblock">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object " src="assets/images/xs/avatar8.jpg" alt="">
                                    <div class="media-body">
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="offline inlineblock">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object " src="assets/images/xs/avatar9.jpg" alt="">
                                    <div class="media-body">
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="online inlineblock">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object " src="assets/images/xs/avatar5.jpg" alt="">
                                    <div class="media-body">
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="offline inlineblock">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object " src="assets/images/xs/avatar4.jpg" alt="">
                                    <div class="media-body">
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="offline inlineblock">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object " src="assets/images/xs/avatar3.jpg" alt="">
                                    <div class="media-body">
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="online inlineblock">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object " src="assets/images/xs/avatar2.jpg" alt="">
                                    <div class="media-body">
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="offline inlineblock">
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object " src="assets/images/xs/avatar1.jpg" alt="">
                                    <div class="media-body">
                                        <span class="badge badge-outline status"></span>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="tab-pane slideLeft" id="activity">
            <div class="slim_scroll">
                <div class="card user_activity">
                    <h6>Recent Activity</h6>
                    <div class="streamline b-accent">
                        <div class="sl-item">
                            <img class="user rounded-circle" src="assets/images/xs/avatar4.jpg" alt="">
                            <div class="sl-content">
                                <h5 class="m-b-0">Admin Birthday</h5>
                                <small>Jan 21 <a href="javascript:void(0);" class="text-info">Sophia</a>.</small>
                            </div>
                        </div>
                        <div class="sl-item">
                            <img class="user rounded-circle" src="assets/images/xs/avatar5.jpg" alt="">
                            <div class="sl-content">
                                <h5 class="m-b-0">Add New Contact</h5>
                                <small>30min ago <a href="javascript:void(0);">Alexander</a>.</small>
                                <small><strong>P:</strong> +264-625-2323</small>
                                <small><strong>E:</strong> maryamamiri@gmail.com</small>
                            </div>
                        </div>
                        <div class="sl-item">
                            <img class="user rounded-circle" src="assets/images/xs/avatar6.jpg" alt="">
                            <div class="sl-content">
                                <h5 class="m-b-0">Code Change</h5>
                                <small>Today <a href="javascript:void(0);">Grayson</a>.</small>
                                <small>The standard chunk of Lorem Ipsum used since the 1500s is reproduced</small>
                            </div>
                        </div>
                        <div class="sl-item">
                            <img class="user rounded-circle" src="assets/images/xs/avatar7.jpg" alt="">
                            <div class="sl-content">
                                <h5 class="m-b-0">New Email</h5>
                                <small>45min ago <a href="javascript:void(0);" class="text-info">Fidel Tonn</a>.</small>
                            </div>
                        </div>                        
                    </div>
                </div>
                <div class="card">
                    <h6>Recent Attachments</h6>
                    <ul class="list-unstyled activity">
                        <li>
                            <a href="javascript:void(0)">
                                <i class="zmdi zmdi-collection-pdf l-blush"></i>                    
                                <div class="info">
                                    <h4>info_258.pdf</h4>                    
                                    <small>2MB</small>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <i class="zmdi zmdi-collection-text l-amber"></i>                    
                                <div class="info">
                                    <h4>newdoc_214.doc</h4>                    
                                    <small>900KB</small>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <i class="zmdi zmdi-image l-parpl"></i>                    
                                <div class="info">
                                    <h4>MG_4145.jpg</h4>                    
                                    <small>5.6MB</small>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <i class="zmdi zmdi-image l-parpl"></i>                    
                                <div class="info">
                                    <h4>MG_4100.jpg</h4>                    
                                    <small>5MB</small>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <i class="zmdi zmdi-collection-text l-amber"></i>                    
                                <div class="info">
                                    <h4>Reports_end.doc</h4>                    
                                    <small>780KB</small>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <i class="zmdi zmdi-videocam l-turquoise"></i>                    
                                <div class="info">
                                    <h4>movie2018.MKV</h4>                    
                                    <small>750MB</small>
                                </div>
                            </a>
                        </li>                        
                    </ul>
                </div>
            </div>
        </div>
    </div>
</aside> -->
<!-- Chat-launcher -->
<!-- <div class="chat-launcher"></div>
<div class="chat-wrapper">
    <div class="card">
        <div class="header">
            <ul class="list-unstyled team-info margin-0">
                <li class="m-r-15"><h2>Pro. Team</h2></li>
                <li>
                    <img src="assets/images/xs/avatar2.jpg" alt="Avatar">
                </li>
                <li>
                    <img src="assets/images/xs/avatar3.jpg" alt="Avatar">
                </li>
                <li>
                    <img src="assets/images/xs/avatar4.jpg" alt="Avatar">
                </li>
                <li>
                    <img src="assets/images/xs/avatar6.jpg" alt="Avatar">
                </li>
                <li>
                    <a href="javascript:void(0);" title="Add Member"><i class="zmdi zmdi-plus-circle"></i></a>
                </li>
            </ul>                       
        </div>
        <div class="body">
            <div class="chat-widget">
            <ul class="chat-scroll-list clearfix">
                <li class="left float-left">
                    <img src="assets/images/xs/avatar3.jpg" class="rounded-circle" alt="">
                    <div class="chat-info">
                        <a class="name" href="javascript:void(0);">Alexander</a>
                        <span class="datetime">6:12</span>                            
                        <span class="message">Hello, John </span>
                    </div>
                </li>
                <li class="right">
                    <div class="chat-info"><span class="datetime">6:15</span> <span class="message">Hi, Alexander<br> How are you!</span> </div>
                </li>
                <li class="right">
                    <div class="chat-info"><span class="datetime">6:16</span> <span class="message">There are many variations of passages of Lorem Ipsum available</span> </div>
                </li>
                <li class="left float-left"> <img src="assets/images/xs/avatar2.jpg" class="rounded-circle" alt="">
                    <div class="chat-info"> <a class="name" href="javascript:void(0);">Elizabeth</a> <span class="datetime">6:25</span> <span class="message">Hi, Alexander,<br> John <br> What are you doing?</span> </div>
                </li>
                <li class="left float-left"> <img src="assets/images/xs/avatar1.jpg" class="rounded-circle" alt="">
                    <div class="chat-info"> <a class="name" href="javascript:void(0);">Michael</a> <span class="datetime">6:28</span> <span class="message">I would love to join the team.</span> </div>
                </li>
                    <li class="right">
                    <div class="chat-info"><span class="datetime">7:02</span> <span class="message">Hello, <br>Michael</span> </div>
                </li>
            </ul>
            </div>
            <div class="input-group p-t-15">
                <input type="text" class="form-control" placeholder="Enter text here...">
                <span class="input-group-addon">
                    <i class="zmdi zmdi-mail-send"></i>
                </span>
            </div>
        </div>
    </div>
</div> -->

<!-- Main Content -->
<section class="content home">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-12">
                <h2>Dashboard
                <small><?php echo $welcome_string;?></small>
                </h2>
            </div>            
            <!-- <div class="col-lg-7 col-md-7 col-sm-12 text-right">
                <div class="inlineblock text-center m-r-15 m-l-15 hidden-md-down">
                    <div class="sparkline" data-type="bar" data-width="97%" data-height="25px" data-bar-Width="2" data-bar-Spacing="5" data-bar-Color="#fff">3,2,6,5,9,8,7,9,5,1,3,5,7,4,6</div>
                    <small class="col-white">Visitors</small>
                </div>
                <div class="inlineblock text-center m-r-15 m-l-15 hidden-md-down">
                    <div class="sparkline" data-type="bar" data-width="97%" data-height="25px" data-bar-Width="2" data-bar-Spacing="5" data-bar-Color="#fff">1,3,5,7,4,6,3,2,6,5,9,8,7,9,5</div>
                    <small class="col-white">Operations</small>
                </div>
                <button class="btn btn-white btn-icon btn-round hidden-sm-down float-right m-l-10" type="button">
                    <i class="zmdi zmdi-plus"></i>
                </button>
                <ul class="breadcrumb float-md-right">
                    <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Oreo</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ul>
            </div> -->
        </div>
    </div>
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-8 col-md-12">
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-6">
                        <div class="card top_counter">
                            <div class="body">
                                <div class="icon xl-slategray"><i class="zmdi zmdi-account-o"></i> </div>
                                <div class="content">
                                    <div class="text">Student</div>
                                    <h5 class="number count-to" data-from="0" data-to="2049" data-speed="2500" data-fresh-interval="700">2049</h5>
                                </div>
                            </div>                    
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="card top_counter">
                            <div class="body">
                                <div class="icon xl-slategray"><i class="zmdi zmdi-account-circle"></i> </div>
                                <div class="content">
                                    <div class="text">Teacher</div>
                                    <h5 class="number count-to" data-from="0" data-to="39" data-speed="4000" data-fresh-interval="700">39</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="card top_counter">
                            <div class="body">
                                <div class="icon xl-slategray"><i class="zmdi zmdi-label"></i> </div>
                                <div class="content">
                                    <div class="text">Attendance</div>
                                    <h5 class="number count-to" data-from="0" data-to="798" data-speed="3000" data-fresh-interval="700">798</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="card top_counter">
                            <div class="body">
                                <div class="icon xl-slategray"><i class="zmdi zmdi-graduation-cap"></i> </div>
                                <div class="content">
                                    <div class="text">Courses</div>
                                    <h5 class="number count-to" data-from="0" data-to="43" data-speed="2500" data-fresh-interval="700">43</h5>
                                </div>
                            </div>                    
                        </div>
                    </div>
                    <!-- <div class="col-lg-4 col-md-6">
                        <div class="card top_counter">
                            <div class="body">
                                <div class="icon xl-slategray"><i class="zmdi zmdi-balance-wallet"></i> </div>
                                <div class="content">
                                    <div class="text">Expense</div>
                                    <h5 class="m-b-0">$<span class="number count-to" data-from="0" data-to="2154" data-speed="2500" data-fresh-interval="700">2154</span></h5>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <div class="col-lg-4 col-md-6">
                        <div class="card top_counter">
                            <div class="body">
                                <div class="icon xl-slategray"><i class="zmdi zmdi-balance"></i> </div>
                                <div class="content">
                                    <div class="text">Income</div>
                                    <h5 class="m-b-0">₹ <span class="number count-to" data-from="0" data-to="5478" data-speed="2500" data-fresh-interval="700">5478</span></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <!-- <div class="header">
                        <h2><strong>University</strong> Survey <small>Description text here...</small></h2>
                        <ul class="header-dropdown">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                <ul class="dropdown-menu dropdown-menu-right slideUp float-right">
                                    <li><a href="javascript:void(0);">Edit</a></li>
                                    <li><a href="javascript:void(0);">Delete</a></li>
                                    <li><a href="javascript:void(0);">Report</a></li>
                                </ul>
                            </li>
                            <li class="remove">
                                <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                            </li>
                        </ul>
                    </div>           -->          
                    <!-- <div class="body"> -->
                        <!-- Nav tabs -->
                       <!--  <ul class="nav nav-tabs padding-0">
                            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#chart-view">Chart View</a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#table-view">Table View</a></li>
                        </ul> -->
                            
                        <!-- Tab panes -->
                        <!-- <div class="tab-content m-t-10">
                            <div class="tab-pane active" id="chart-view">
                                <div id="m_bar_chart" class="graph"></div>
                                <div class="xl-slategray">
                                    <div class="body">
                                        <div class="row text-center">
                                            <div class="col-sm-3 col-6">
                                                <h4 class="margin-0">$106</h4>
                                                <p class="text-muted margin-0"> Today's</p>
                                            </div>
                                            <div class="col-sm-3 col-6">
                                                <h4 class="margin-0">$907</h4>
                                                <p class="text-muted margin-0">This Week's</p>
                                            </div>
                                            <div class="col-sm-3 col-6">
                                                <h4 class="margin-0">$4210</h4>
                                                <p class="text-muted margin-0">This Month's</p>
                                            </div>
                                            <div class="col-sm-3 col-6">
                                                <h4 class="margin-0">$7,000</h4>
                                                <p class="text-muted margin-0">This Year's</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>                                
                            </div>
                            <div class="tab-pane" id="table-view">
                                <div class="table-responsive">
                                    <table class="table m-b-0 table-hover">
                                        <thead>
                                            <tr>                                                
                                                <th>Name</th>
                                                <th class="hidden-sm-down">Address</th>
                                                <th>Earning</th>
                                                <th class="hidden-md-down">Reviews</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>                                                
                                                <td>University Name</td>
                                                <td class="hidden-sm-down">Porterfield 508 Virginia Street Chicago, IL 60653</td>
                                                <td>$2,325</td>
                                                <td class="hidden-md-down">
                                                    <i class="zmdi zmdi-star col-amber"></i>
                                                    <i class="zmdi zmdi-star col-amber"></i>
                                                    <i class="zmdi zmdi-star col-amber"></i>
                                                    <i class="zmdi zmdi-star col-amber"></i>
                                                    <i class="zmdi zmdi-star col-amber"></i>
                                                </td>
                                                <td>
                                                    <button class="btn btn-sm btn-neutral"><i class="zmdi zmdi-chart"></i></button>
                                                </td>
                                            </tr>
                                            <tr>                                                
                                                <td>University Name</td>
                                                <td class="hidden-sm-down">2595 Pearlman Avenue Sudbury, MA 01776 </td>
                                                <td>$3,325</td>
                                                <td class="hidden-md-down">
                                                    <i class="zmdi zmdi-star col-amber"></i>
                                                    <i class="zmdi zmdi-star col-amber"></i>
                                                    <i class="zmdi zmdi-star col-amber"></i>
                                                    <i class="zmdi zmdi-star col-amber"></i>
                                                    <i class="zmdi zmdi-star col-amber"></i>
                                                </td>
                                                <td>
                                                    <button class="btn btn-sm btn-neutral"><i class="zmdi zmdi-chart"></i></button>
                                                </td>
                                            </tr>
                                            <tr>                                                
                                                <td>University Name</td>
                                                <td class="hidden-sm-down">Porterfield 508 Virginia Street Chicago, IL 60653</td>
                                                <td>$5,021</td>
                                                <td class="hidden-md-down">
                                                    <i class="zmdi zmdi-star col-amber"></i>
                                                    <i class="zmdi zmdi-star col-amber"></i>
                                                    <i class="zmdi zmdi-star col-amber"></i>
                                                    <i class="zmdi zmdi-star col-amber"></i>
                                                    <i class="zmdi zmdi-star col-amber"></i>
                                                </td>
                                                <td>
                                                    <button class="btn btn-sm btn-neutral"><i class="zmdi zmdi-chart"></i></button>
                                                </td>
                                            </tr>
                                            <tr>                                                
                                                <td>University Name</td>
                                                <td class="hidden-sm-down">508 Virginia Street Chicago, IL 60653</td>
                                                <td>$1,325</td>
                                                <td class="hidden-md-down">
                                                    <i class="zmdi zmdi-star col-amber"></i>
                                                    <i class="zmdi zmdi-star col-amber"></i>
                                                    <i class="zmdi zmdi-star col-amber"></i>
                                                    <i class="zmdi zmdi-star col-amber"></i>
                                                    <i class="zmdi zmdi-star-outline"></i>
                                                </td>
                                                <td>
                                                    <button class="btn btn-sm btn-neutral"><i class="zmdi zmdi-chart"></i></button>
                                                </td>
                                            </tr>
                                            <tr>                                                
                                                <td>University Name</td>
                                                <td class="hidden-sm-down">1516 Holt Street West Palm Beach, FL 33401</td>
                                                <td>$2,325</td>
                                                <td class="hidden-md-down">
                                                    <i class="zmdi zmdi-star col-amber"></i>
                                                    <i class="zmdi zmdi-star col-amber"></i>
                                                    <i class="zmdi zmdi-star col-amber"></i>
                                                    <i class="zmdi zmdi-star col-amber"></i>
                                                    <i class="zmdi zmdi-star-outline"></i>
                                                </td>
                                                <td>
                                                    <button class="btn btn-sm btn-neutral"><i class="zmdi zmdi-chart"></i></button>
                                                </td>
                                            </tr>
                                            <tr>                                                
                                                <td>University Name</td>
                                                <td class="hidden-sm-down">508 Virginia Street Chicago, IL 60653</td>
                                                <td>$2,325</td>
                                                <td class="hidden-md-down">
                                                    <i class="zmdi zmdi-star col-amber"></i>
                                                    <i class="zmdi zmdi-star col-amber"></i>
                                                    <i class="zmdi zmdi-star col-amber"></i>
                                                    <i class="zmdi zmdi-star col-amber"></i>
                                                    <i class="zmdi zmdi-star-outline"></i>
                                                </td>
                                                <td>
                                                    <button class="btn btn-sm btn-neutral"><i class="zmdi zmdi-chart"></i></button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div> -->
                    <!-- </div>                     -->
                </div>
                <!-- <div class="card student-list">
                    <div class="header">
                        <h2><strong>New</strong> Admission List <small>Description text here...</small></h2>
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
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Age</th>
                                        <th>Address</th>
                                        <th>Number</th>
                                        <th>Department</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><span class="list-name">OU 00456</span></td>
                                        <td>Joseph</td>
                                        <td>25</td>
                                        <td>70 Bowman St. South Windsor, CT 06074</td>
                                        <td>404-447-6013</td>
                                        <td><span class="badge badge-primary">MCA</span></td>
                                    </tr>
                                    <tr>
                                        <td><span class="list-name">KU 00789</span></td>
                                        <td>Cameron</td>
                                        <td>27</td>
                                        <td>123 6th St. Melbourne, FL 32904</td>
                                        <td>404-447-4569</td>
                                        <td><span class="badge badge-warning">Medical</span></td>
                                    </tr>
                                    <tr>
                                        <td><span class="list-name">KU 00987</span></td>
                                        <td>Alex</td>
                                        <td>23</td>
                                        <td>123 6th St. Melbourne, FL 32904</td>
                                        <td>404-447-7412</td>
                                        <td><span class="badge badge-info">M.COM</span></td>
                                    </tr>
                                    <tr>
                                        <td><span class="list-name">OU 00951</span></td>
                                        <td>James</td>
                                        <td>23</td>
                                        <td>44 Shirley Ave. West Chicago, IL 60185</td>
                                        <td>404-447-2589</td>
                                        <td><span class="badge badge-default">MBA</span></td>
                                    </tr>
                                    <tr>
                                        <td><span class="list-name">OU 00456</span></td>
                                        <td>Joseph</td>
                                        <td>25</td>
                                        <td>70 Bowman St. South Windsor, CT 06074</td>
                                        <td>404-447-6013</td>
                                        <td><span class="badge badge-primary">MCA</span></td>
                                    </tr>
                                    <tr>
                                        <td><span class="list-name">OU 00953</span></td>
                                        <td>charlie</td>
                                        <td>21</td>
                                        <td>123 6th St. Melbourne, FL 32904</td>
                                        <td>404-447-9632</td>										
                                        <td><span class="badge badge-success">BBA</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div> -->
                <!-- <div class="card visitors-map">
                    <div class="header">
                        <h2><strong>Our</strong> Location <small>Contrary to popular belief, Lorem Ipsum is not simply random text</small></h2>
                        <ul class="header-dropdown">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                <ul class="dropdown-menu dropdown-menu-right slideUp">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else</a></li>
                                </ul>
                            </li>
                            <li class="remove">
                                <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div class="row">
                            <div class="col-lg-6 col-md-12">
                                <div id="world-map-markers" style="height:280px;"></div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="body">
                                    <ul class="row location_list list-unstyled">
                                        <li class="col-lg-4 col-md-4 col-6">
                                            <div class="body xl-turquoise">
                                                <i class="zmdi zmdi-pin"></i>
                                                <h4 class="number count-to" data-from="0" data-to="53" data-speed="2500" data-fresh-interval="700">53</h4>
                                                <span>America</span>
                                            </div>
                                        </li>
                                        <li class="col-lg-4 col-md-4 col-6">
                                            <div class="body xl-khaki">
                                                <i class="zmdi zmdi-pin"></i>
                                                <h4 class="number count-to" data-from="0" data-to="24" data-speed="2500" data-fresh-interval="700">24</h4>
                                                <span>Australia</span>
                                            </div>
                                        </li>
                                        <li class="col-lg-4 col-md-4 col-6">
                                            <div class="body xl-parpl">
                                                <i class="zmdi zmdi-pin"></i>
                                                <h4 class="number count-to" data-from="0" data-to="15" data-speed="2500" data-fresh-interval="700">15</h4>
                                                <span>Canada</span>
                                            </div>
                                        </li>
                                        <li class="col-lg-4 col-md-4 col-6">
                                            <div class="body xl-salmon">
                                                <i class="zmdi zmdi-pin"></i>
                                                <h4 class="number count-to" data-from="0" data-to="33" data-speed="2500" data-fresh-interval="700">33</h4>
                                                <span>India</span>
                                            </div>
                                        </li>
                                        <li class="col-lg-4 col-md-4 col-6">
                                            <div class="body xl-blue">
                                                <i class="zmdi zmdi-pin"></i>
                                                <h4 class="number count-to" data-from="0" data-to="8" data-speed="2500" data-fresh-interval="700">8</h4>
                                                <span>UK</span>
                                            </div>
                                        </li>
                                        <li class="col-lg-4 col-md-4 col-6">
                                            <div class="body xl-slategray">
                                                <i class="zmdi zmdi-pin"></i>
                                                <h4 class="number count-to" data-from="0" data-to="5" data-speed="2500" data-fresh-interval="700">5</h4>
                                                <span>Other</span>
                                            </div>
                                        </li>                      
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
            <div class="col-lg-4 col-md-12">
                <!-- <div class="card tasks_report">
                    <div class="header">
                        <h2><strong>Total</strong> Revenue</h2>                        
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
                    <div class="body text-center">
                        <h4 class="margin-0">$ <span class="number count-to" data-from="0" data-to="8923" data-speed="2500" data-fresh-interval="700">8923</span></h4>
                        <h6 class="m-b-20">Total Income</h6>
                        <input type="text" class="knob dial1" value="66" data-width="100" data-height="100" data-thickness="0.3" data-fgColor="#4caf50" readonly>
                        <h6 class="m-t-20">Satisfaction Rate</h6>
                        <small class="displayblock">47% Average <i class="zmdi zmdi-trending-up"></i></small>
                        <div class="sparkline m-t-20" data-type="bar" data-width="97%" data-height="32px" data-bar-Width="2" data-bar-Spacing="8" data-bar-Color="#212121">3,2,6,5,9,8,7,8,4,5,1,2,9,5,1,3,5,7,4,6</div>
                    </div>
                </div> -->
                <!-- <div class="card bg-dark">
                    <div class="body">
                        <div class="sparkline m-b-10" data-type="bar" data-width="97%" data-height="38px" data-bar-Width="2" data-bar-Spacing="6" data-bar-Color="#cccccc">2,8,5,3,1,7,9,5,6,4,2,3,1,2,8,5,3,1,7,9,5,6,4,2,3,1</div>
                        <h6 class="text-center m-b-25 col-white">New Students in USA</h6>
                        <div id="usa_map" style="height: 200px"></div>
                        <div class="table-responsive m-t-20">
                            <table class="table table-striped m-b-0">
                                <thead>
                                    <tr>
                                        <th>City</th>                                        
                                        <th>New Student</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>New York</td>
                                        <td>215<i class="zmdi zmdi-trending-up m-l-10"></i></td>
                                    </tr>
                                    <tr>
                                        <td>Los Angeles</td>
                                        <td>189<i class="zmdi zmdi-trending-up m-l-10"></i></td>
                                    </tr>
                                    <tr>
                                        <td>Chicago</td>
                                        <td>408<i class="zmdi zmdi-trending-down m-l-10"></i></td>
                                    </tr>
                                    <tr>
                                        <td>Houston</td>
                                        <td>78<i class="zmdi zmdi-trending-down m-l-10"></i></td>
                                    </tr>
                                    <tr>
                                        <td>Phoenix</td>
                                        <td>148<i class="zmdi zmdi-trending-up m-l-10"></i></td>
                                    </tr>                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div> --><!-- 
                <div class="card">
                    <div class="body text-center">
                        <input type="text" class="knob" value="65" data-width="100" data-height="100" data-thickness="0.25" data-fgColor="#cb8fe7" readonly>
                        <p class="text-muted m-b-0">READ-ONLY</p>
                    </div>
                </div>           -->      <!-- 
                <div class="card">
                    <div class="header">
                        <h2><strong>Pro.</strong> Timeline</h2>
                        <ul class="header-dropdown">                            
                            <li class="remove">
                                <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div class="new_timeline">
                            <div class="header">
                                <div class="color-overlay">
                                    <div class="day-number">8</div>
                                    <div class="date-right">
                                    <div class="day-name">Monday</div>
                                    <div class="month">February 2018</div>
                                    </div>
                                </div>                                
                            </div>
                            <ul>
                                <li>
                                    <div class="bullet pink"></div>
                                    <div class="time">11am</div>
                                    <div class="desc">
                                        <h3>Attendance</h3>
                                        <h4>Computer Class</h4>
                                    </div>
                                </li>
                                <li>
                                    <div class="bullet green"></div>
                                    <div class="time">12pm</div>
                                    <div class="desc">
                                        <h3>Design Team</h3>
                                        <h4>Hangouts</h4>
                                        <ul class="list-unstyled team-info margin-0 p-t-5">                                            
                                            <li><img src="http://via.placeholder.com/35x35" alt="Avatar"></li>
                                            <li><img src="http://via.placeholder.com/35x35" alt="Avatar"></li>
                                            <li><img src="http://via.placeholder.com/35x35" alt="Avatar"></li>
                                            <li><img src="http://via.placeholder.com/35x35" alt="Avatar"></li>                                            
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <div class="bullet orange"></div>
                                    <div class="time">1:30pm</div>
                                    <div class="desc">
                                        <h3>Lunch Break</h3>
                                    </div>
                                </li>
                                <li>
                                    <div class="bullet green"></div>
                                    <div class="time">2pm</div>
                                    <div class="desc">
                                        <h3>Finish</h3>
                                        <h4>Go to Home</h4>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>        
    </div>
</section>
<!-- Jquery Core Js --> 
<script src="assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js ( jquery.v3.2.1, Bootstrap4 js) --> 
<script src="assets/bundles/vendorscripts.bundle.js"></script> <!-- slimscroll, waves Scripts Plugin Js -->
<script src="assets/bundles/mainscripts.bundle.js"></script>
<script src="assets/js/pages/index.js"></script>
</body>
</html>