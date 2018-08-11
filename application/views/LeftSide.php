<aside id="leftsidebar" class="sidebar">
    <ul class="nav nav-tabs">
        <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#dashboard"><i class="zmdi zmdi-home"></i></a></li>
        <!-- <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#user">Administrator</a></li> -->
    </ul>
    <div class="tab-content">
        <div class="tab-pane stretchRight active" id="dashboard">
            <div class="menu">
                <ul class="list">
                    <li>
                        <div class="user-info">
                            <div class="image"><a href="profile.html"><img src="http://via.placeholder.com/80x80" alt="User"></a></div>
                            <div class="detail">
                                <h4><?php echo $schoolname;?></h4>
                                <small><?php echo $schoollocation;?></small>
                            </div>
                        </div>
                    </li>
                    <li class="header">MAIN</li>
                    <li <?php if( strcmp(basename($_SERVER['PHP_SELF']) ,'dashboard') ==0 )
                            echo 'class="active open"'; ?>  >
                        <a href="<?php echo site_url('dashboard') ?>"><i class="zmdi zmdi-home"></i><span>Dashboard</span></a>
                    </li>

                    <li <?php if( strcmp(basename($_SERVER['PHP_SELF']) ,'all_students') ==0 || strcmp(basename($_SERVER['PHP_SELF']) ,'add_students') ==0)
                        echo 'class="active open"'; ?> >
                        <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-accounts-outline"></i><span>Students</span> </a>
                        <ul class="ml-menu">
                            <li <?php if( strcmp(basename($_SERVER['PHP_SELF']) ,'all_students') ==0 )
                                echo 'class="active"'; ?> >
                                <a href="<?php echo site_url('students/all_students');?>">All Students</a>
                            </li>
                            <li <?php if( strcmp(basename($_SERVER['PHP_SELF']) ,'add_students') ==0 )
                                echo 'class="active"'; ?> >
                                <a href="<?php echo site_url('students/add_students');?>">Add Students</a>
                            </li>
                        </ul>
                    </li>
                    <li <?php if( strcmp(basename($_SERVER['PHP_SELF']) ,'all_professor') ==0 || strcmp(basename($_SERVER['PHP_SELF']) ,'add_professor') ==0)
                        echo 'class="active open"'; ?> >
                        <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-accounts-outline"></i><span>Professors</span> </a>
                        <ul class="ml-menu">
                            <li <?php if( strcmp(basename($_SERVER['PHP_SELF']) ,'all_professor') ==0)
                                echo 'class="active"'; ?> >
                                <a href="<?php echo site_url('professors/all_professor');?>">All Professors</a>
                            </li>
                            <li <?php if( strcmp(basename($_SERVER['PHP_SELF']) ,'add_professor') ==0)
                                echo 'class="active"'; ?> >
                                <a href="<?php echo site_url('professors/add_professor');?>">Add Professors</a>
                            </li>
                        </ul>
                    </li>
                    <!-- <li><a href="parents.html"><i class="zmdi zmdi-account"></i><span>Parents</span> </a></li>   -->          <!--         
                    <li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-lock"></i><span>Authentication</span> </a>
                        <ul class="ml-menu">
                            <li><a href="sign-in.html">Sign In</a> </li>
                            <li><a href="sign-up.html">Sign Up</a> </li>
                            <li><a href="forgot-password.html">Forgot Password</a> </li>
                            <li><a href="404.html">Page 404</a> </li>
                            <li><a href="500.html">Page 500</a> </li>
                            <li><a href="page-offline.html">Page Offline</a> </li>
                            <li><a href="<?php echo site_url('errorstatic/locked') ?>">Locked Screen</a> </li>
                        </ul>
                    </li> -->
                    <li class="header">UNIVERSITY</li>
                    <li <?php if( strcmp(basename($_SERVER['PHP_SELF']) ,'event') ==0)
                        echo 'class="active"'; ?>>
                        <a href="<?php echo site_url('Events/event');?>"><i class="zmdi zmdi-calendar-check"></i><span>Events</span> </a>
                    </li>
                    <li <?php if( strcmp(basename($_SERVER['PHP_SELF']) ,'Departments') ==0 || strcmp(basename($_SERVER['PHP_SELF']) ,'add_department') ==0 )
                        echo 'class="active open"'; ?> >
                        <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-city-alt"></i><span>Departments</span> </a>
                        <ul class="ml-menu">
                            <li <?php if( strcmp(basename($_SERVER['PHP_SELF']) ,'Departments') ==0 )
                                echo 'class="active"'; ?>>
                                <a href="<?php echo site_url('Departments') ?>">All Departments</a>
                            </li>
                            <li <?php if( strcmp(basename($_SERVER['PHP_SELF']) ,'Departments') ==0 )
                                echo 'class="active"'; ?>>
                                <a href="<?php echo site_url('Departments/add_department');?>">Add Departments</a>
                            </li>
                        </ul>
                    </li>
                    <li <?php if( strcmp(basename($_SERVER['PHP_SELF']) ,'courses') ==0 || strcmp(basename($_SERVER['PHP_SELF']) ,'add_courses') ==0 || strcmp(basename($_SERVER['PHP_SELF']),'courses_info') ==0 )
                        echo 'class="active open"'; ?> >
                        <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-graduation-cap"></i><span>Courses</span> </a>
                        <ul class="ml-menu">
                            <li <?php if( strcmp(basename($_SERVER['PHP_SELF']) ,'courses') ==0 )
                                echo 'class="active"'; ?>>
                                <a href="<?php echo site_url('courses') ?>">All Courses</a>
                            </li>
                            <li <?php if( strcmp(basename($_SERVER['PHP_SELF']) ,'add_courses') ==0)
                                echo 'class="active"'; ?>>
                                <a href="<?php echo site_url('courses/add_courses');?>">Add Courses</a>
                            </li>
                            <li <?php if( strcmp(basename($_SERVER['PHP_SELF']),'courses_info') ==0 )
                                echo 'class="active"'; ?> >
                                <a href="<?php echo site_url('courses/courses_info');?>">Courses Info</a>
                            </li>
                        </ul>
                    </li>
                    <li <?php if( strcmp(basename($_SERVER['PHP_SELF']),'Library') ==0 )
                        echo 'class="active"'; ?>>
                        <a href="<?php echo site_url('Library/Lib');?>"><i class="zmdi zmdi-book"></i><span>Library</span> </a>
                    </li>
                    <li <?php if( strcmp(basename($_SERVER['PHP_SELF']),'Classroom') ==0 )
                        echo 'class="active"'; ?>>
                        <a href="<?php echo site_url('Classroom') ?>"><i class="zmdi zmdi-device-hub"></i><span>Class</span> </a>
                    </li>
                    <li <?php if( strcmp(basename($_SERVER['PHP_SELF']),'noticeboard') ==0 )
                        echo 'class="active"'; ?>>
                        <a href="<?php echo site_url('noticeboard') ?>"><i class="zmdi zmdi-alert-circle"></i><span>Noticeboard</span> </a>
                    </li>
                    <!-- li><a href="centres.html"><i class="zmdi zmdi-pin"></i><span>University Centres</span></a></li>  -->     
                    <!-- <li class="header">EXTRA COMPONENTS</li>
                    <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-blogger"></i><span>Blog</span></a>
                        <ul class="ml-menu">
                            <li><a href="blog-dashboard.html">Blog Dashboard</a></li>
                            <li><a href="blog-post.html">New Post</a></li>
                            <li><a href="blog-list.html">Blog List</a></li>
                            <li><a href="blog-grid.html">Blog Grid</a></li>
                            <li><a href="blog-details.html">Blog Single</a></li>
                        </ul>
                    </li>
                    <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-folder"></i><span>File Manager</span> </a>
                        <ul class="ml-menu">
                            <li><a href="file-dashboard.html">All File</a></li>
                            <li><a href="file-documents.html" >Documents</a></li>
                            <li><a href="file-media.html">Media</a></li>
                            <li><a href="file-images.html">Images</a></li>
                        </ul>
                    </li>
                    <li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-apps"></i><span>App</span> </a>
                        <ul class="ml-menu">
                            <li><a href="mail-inbox.html">Inbox</a></li>
                            <li><a href="chat.html">Chat</a></li>                                                        
                            <li><a href="contact.html">Contact list</a></li>                            
                        </ul>
                    </li>                    
                    <li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-delicious"></i><span>Widgets</span> </a>
                        <ul class="ml-menu">
                            <li><a href="widgets-app.html">Apps Widgetse</a></li>
                            <li><a href="widgets-data.html">Data Widgetse</a></li>
                        </ul>
                    </li>                    
                    <li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-copy"></i><span>Sample Pages</span> </a>
                        <ul class="ml-menu">
                            <li><a href="blank.html">Blank Page</a> </li>
                            <li><a href="dashboard-rtl.html">RTL Support</a> </li>
                            <li><a href="index2.html">Horizontal Menu</a> </li>
                            <li><a href="image-gallery.html">Image Gallery</a> </li>
                            <li><a href="profile.html">Profile</a></li>
                            <li><a href="timeline.html">Timeline</a></li>                            
                            <li><a href="invoice.html">Invoices</a></li>
                            <li><a href="search-results.html">Search Results</a></li>
                        </ul>
                    </li>
                    <li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-swap-alt"></i><span>User Interface (UI)</span> </a>
                        <ul class="ml-menu">
                            <li><a href="ui_kit.html">UI KIT</a></li>
                            <li><a href="alerts.html">Alerts</a></li>
                            <li><a href="collapse.html">Collapse</a></li>
                            <li><a href="colors.html">Colors</a></li>
                            <li><a href="dialogs.html">Dialogs</a></li>
                            <li><a href="icons.html">Icons</a></li>
                            <li><a href="list-group.html">List Group</a></li>
                            <li><a href="media-object.html">Media Object</a></li>
                            <li><a href="modals.html">Modals</a></li>
                            <li><a href="notifications.html">Notifications</a></li>                    
                            <li><a href="progressbars.html">Progress Bars</a></li>
                            <li><a href="range-sliders.html">Range Sliders</a></li>
                            <li><a href="sortable-nestable.html">Sortable & Nestable</a></li>
                            <li><a href="tabs.html">Tabs</a></li>
                            <li><a href="waves.html">Waves</a></li>
                        </ul>
                    </li>
                    <li class="header">Extra</li>
                    <li>
                        <div class="progress-container progress-primary m-t-10">
                            <span class="progress-badge">Traffic this Month</span>
                            <div class="progress">
                                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="67" aria-valuemin="0" aria-valuemax="100" style="width: 67%;">
                                    <span class="progress-value">67%</span>
                                </div>
                            </div>
                        </div>
                        <div class="progress-container progress-info">
                            <span class="progress-badge">Server Load</span>
                            <div class="progress">
                                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100" style="width: 86%;">
                                    <span class="progress-value">86%</span>
                                </div>
                            </div>
                        </div>
                    </li> -->
                </ul>
            </div>
        </div>
        <div class="tab-pane stretchLeft" id="user">
            <div class="menu">
                <ul class="list">
                    <li>
                        <div class="user-info m-b-20 p-b-15">
                            <div class="image"><a href="profile.html"><img src="http://via.placeholder.com/80x80" alt="User"></a></div>
                            <div class="detail">
                                <h4>Pro. Charlotte</h4>
                                <small>UI UX Designer</small>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <a title="facebook" href="javascript:void(0);"><i class="zmdi zmdi-facebook"></i></a>
                                    <a title="twitter" href="javascript:void(0);"><i class="zmdi zmdi-twitter"></i></a>
                                    <a title="instagram" href="javascript:void(0);"><i class="zmdi zmdi-instagram"></i></a>
                                </div>
                                <div class="col-4 p-r-0">
                                    <h5 class="m-b-5">13</h5>
                                    <small>Exp</small>
                                </div>
                                <div class="col-4">
                                    <h5 class="m-b-5">33</h5>
                                    <small>Awards</small>
                                </div>
                                <div class="col-4 p-l-0">
                                    <h5 class="m-b-5">237</h5>
                                    <small>Class</small>
                                </div>                                
                            </div>
                        </div>
                    </li>
                    <li>
                        <small class="text-muted">Location: </small>
                        <p>795 Folsom Ave, Suite 600 San Francisco, CADGE 94107</p>
                        <hr>
                        <small class="text-muted">Email address: </small>
                        <p>Charlotte@example.com</p>
                        <hr>
                        <small class="text-muted">Phone: </small>
                        <p>+ 202-555-0191</p>
                        <hr>                        
                        <ul class="list-unstyled">
                            <li>
                                <div>Photoshop</div>
                                <div class="progress m-b-20">
                                    <div class="progress-bar l-blue " role="progressbar" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100" style="width: 89%"> <span class="sr-only">89% Complete</span> </div>
                                </div>
                            </li>
                            <li>
                                <div>Illustrator</div>
                                <div class="progress m-b-20">
                                    <div class="progress-bar l-amber" role="progressbar" aria-valuenow="56" aria-valuemin="0" aria-valuemax="100" style="width: 56%"> <span class="sr-only">56% Complete</span> </div>
                                </div>
                            </li>
                            <li>
                                <div>Art & Design</div>
                                <div class="progress m-b-20">
                                    <div class="progress-bar l-green" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100" style="width: 78%"> <span class="sr-only">78% Complete</span> </div>
                                </div>
                            </li>
                            <li>
                                <div>HTML</div>
                                <div class="progress m-b-20">
                                    <div class="progress-bar l-blush" role="progressbar" aria-valuenow="43" aria-valuemin="0" aria-valuemax="100" style="width: 56%"> <span class="sr-only">56% Complete</span> </div>
                                </div>
                            </li>
                            <li>
                                <div>CSS</div>
                                <div class="progress m-b-20">
                                    <div class="progress-bar l-parpl" role="progressbar" aria-valuenow="43" aria-valuemin="0" aria-valuemax="100" style="width: 50%"> <span class="sr-only">50% Complete</span> </div>
                                </div>
                            </li>
                        </ul>                        
                    </li>                    
                </ul>
            </div>
        </div>
    </div>    
</aside>