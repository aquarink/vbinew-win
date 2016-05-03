<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Vespa Balap Indonesia - Indonesian Vespa Racing</title>
        <link rel="icon" href="{{URL::asset('favicon.ico')}}">

        <!-- Bootstrap core CSS -->
        {!! Html::style('/layout/admin/css/bootstrap.min.css') !!}

        {!! Html::style('/layout/admin/css/AdminLTE.min.css') !!}
        {!! Html::style('/layout/font-awesome-4.6.1/css/font-awesome.min.css') !!}
        {!! Html::style('/layout/ionicons-2.0.1/css/ionicons.min.css') !!}

        {!! Html::style('/layout/admin/css/skins/_all-skins.min.css') !!}
        {!! Html::style('/layout/admin/plugins/iCheck/flat/blue.css') !!}
        {!! Html::style('/layout/admin/plugins/morris/morris.css') !!}
        {!! Html::style('/layout/admin/plugins/jvectormap/jquery-jvectormap-1.2.2.css') !!}
        {!! Html::style('/layout/admin/plugins/datepicker/datepicker3.css') !!}
        {!! Html::style('/layout/admin/plugins/daterangepicker/daterangepicker-bs3.css') !!}
        {!! Html::style('/layout/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') !!}
        {!! Html::style('/layout/admin/plugins/morris/morris.css') !!}

        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->


    </head>

    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">

            <header class="main-header">
                <a href="index2.html" class="logo">
                    <span class="logo-mini"><b>VBI</b>GP</span>
                    <span class="logo-lg"><b>VBI</b> GP admin</span>
                </a>
                <nav class="navbar navbar-static-top" role="navigation">
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                        <span class="sr-only">Toggle navigation</span>
                    </a>
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <li class="dropdown messages-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-envelope-o"></i>
                                    <span class="label label-success">4</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="header">You have 4 messages</li>
                                    <li>
                                        <ul class="menu">
                                            <li>
                                                <a href="#">
                                                    <div class="pull-left">
                                                        {!! Html::image('/layout/admin/img/user2-160x160.jpg') !!}
                                                    </div>
                                                    <h4>
                                                        Support Team
                                                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                                    </h4>
                                                    <p>Why not buy a new awesome theme?</p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <div class="pull-left">
                                                        {!! Html::image('/layout/admin/img/user3-128x128.jpg') !!}
                                                    </div>
                                                    <h4>
                                                        AdminLTE Design Team
                                                        <small><i class="fa fa-clock-o"></i> 2 hours</small>
                                                    </h4>
                                                    <p>Why not buy a new awesome theme?</p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <div class="pull-left">
                                                        {!! Html::image('/layout/admin/img/user4-128x128.jpg') !!}
                                                    </div>
                                                    <h4>
                                                        Developers
                                                        <small><i class="fa fa-clock-o"></i> Today</small>
                                                    </h4>
                                                    <p>Why not buy a new awesome theme?</p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <div class="pull-left">
                                                        {!! Html::image('/layout/admin/img/user3-128x128.jpg') !!}
                                                    </div>
                                                    <h4>
                                                        Sales Department
                                                        <small><i class="fa fa-clock-o"></i> Yesterday</small>
                                                    </h4>
                                                    <p>Why not buy a new awesome theme?</p>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <div class="pull-left">
                                                        {!! Html::image('/layout/admin/img/user4-128x128.jpg') !!}
                                                    </div>
                                                    <h4>
                                                        Reviewers
                                                        <small><i class="fa fa-clock-o"></i> 2 days</small>
                                                    </h4>
                                                    <p>Why not buy a new awesome theme?</p>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="footer"><a href="#">See All Messages</a></li>
                                </ul>
                            </li>
                            <li class="dropdown notifications-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-bell-o"></i>
                                    <span class="label label-warning">10</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="header">You have 10 notifications</li>
                                    <li>
                                        <ul class="menu">
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-users text-aqua"></i> 5 new members joined today
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the page and may cause design problems
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-users text-red"></i> 5 new members joined
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-user text-red"></i> You changed your username
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="footer"><a href="#">View all</a></li>
                                </ul>
                            </li>
                            <li class="dropdown tasks-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-flag-o"></i>
                                    <span class="label label-danger">9</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="header">You have 9 tasks</li>
                                    <li>
                                        <ul class="menu">
                                            <li>
                                                <a href="#">
                                                    <h3>
                                                        Design some buttons
                                                        <small class="pull-right">20%</small>
                                                    </h3>
                                                    <div class="progress xs">
                                                        <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                            <span class="sr-only">20% Complete</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <h3>
                                                        Create a nice theme
                                                        <small class="pull-right">40%</small>
                                                    </h3>
                                                    <div class="progress xs">
                                                        <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                            <span class="sr-only">40% Complete</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <h3>
                                                        Some task I need to do
                                                        <small class="pull-right">60%</small>
                                                    </h3>
                                                    <div class="progress xs">
                                                        <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                            <span class="sr-only">60% Complete</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <h3>
                                                        Make beautiful transitions
                                                        <small class="pull-right">80%</small>
                                                    </h3>
                                                    <div class="progress xs">
                                                        <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                            <span class="sr-only">80% Complete</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="footer">
                                        <a href="#">View all tasks</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown user user-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <span class="hidden-xs">Alexander Pierce</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="user-header">    
                                        <p>
                                            Alexander Pierce - Web Developer
                                            <small>Member since Nov. 2012</small>
                                        </p>
                                    </li>
                                    <li class="user-footer">
                                        <div class="pull-left">
                                            <a href="#" class="btn btn-default btn-flat">Profile</a>
                                        </div>
                                        <div class="pull-right">
                                            <a href="#" class="btn btn-default btn-flat">Sign out</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <aside class="main-sidebar">
                <section class="sidebar">
                    <div class="user-panel">
                        <div class="pull-left image">
                            {!! Html::image('/layout/admin/img/user3-128x128.jpg', 'a picture', array('class' => 'img-circle')) !!}
                        </div>
                        <div class="pull-left info">
                            <p>Alexander Pierce</p>
                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>
                    <ul class="sidebar-menu">
                        <li class="header">MENU ADMIN</li>
                        <li>
                            <a href="pages/widgets.html">
                                <i class="fa fa-dashboard"></i> <span>Home Dashboard</span>
                            </a>
                        </li>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-pie-chart"></i>
                                <span>Race</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="pages/charts/chartjs.html"><i class="fa fa-circle-o"></i> Hasil</a></li>
                                <li><a href="pages/charts/morris.html"><i class="fa fa-circle-o"></i> Jadwal</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-camera"></i>
                                <span>Galeri</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="pages/charts/chartjs.html"><i class="fa fa-circle-o"></i> Video</a></li>
                                <li><a href="pages/charts/morris.html"><i class="fa fa-circle-o"></i> Photo</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-bullhorn"></i> <span>Berita</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="pages/forms/general.html"><i class="fa fa-circle-o"></i> Berita Baru</a></li>
                                <li><a href="pages/forms/advanced.html"><i class="fa fa-circle-o"></i> List Berita</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-gear"></i> <span>Team & Reader</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="pages/tables/simple.html"><i class="fa fa-circle-o"></i> Team Baru</a></li>
                                <li><a href="pages/tables/data.html"><i class="fa fa-circle-o"></i> List Team</a></li>
                                <li><a href="pages/tables/simple.html"><i class="fa fa-circle-o"></i> Reader Baru</a></li>
                                <li><a href="pages/tables/data.html"><i class="fa fa-circle-o"></i> List Reader</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-map"></i> <span>Region</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="pages/tables/simple.html"><i class="fa fa-circle-o"></i> Region Baru</a></li>
                                <li><a href="pages/tables/data.html"><i class="fa fa-circle-o"></i> List Region</a></li>
                            </ul>
                        </li>
                        <li class="header">LOGS USER</li>
                        <li>
                            <a href="pages/calendar.html">
                                <i class="fa fa-hand-pointer-o"></i> <span>Hit Website</span>
                                <small class="label pull-right bg-red">3</small>
                            </a>
                        </li>
                        <li>
                            <a href="pages/mailbox/mailbox.html">
                                <i class="fa fa-comment"></i> <span>Filter Komentar</span>
                                <small class="label pull-right bg-yellow">12</small>
                            </a>
                        </li>
                        <li>
                            <a href="pages/mailbox/mailbox.html">
                                <i class="fa fa-user"></i> <span>Filter Member</span>
                                <small class="label pull-right bg-yellow">12</small>
                            </a>
                        </li>
                        <li>
                            <a href="pages/mailbox/mailbox.html">
                                <i class="fa fa-heart"></i> <span>Pengaduan</span>
                                <small class="label pull-right bg-yellow">12</small>
                            </a>
                        </li>
                        <li class="header">?</li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-share"></i> <span>Multilevel</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
                                <li>
                                    <a href="#"><i class="fa fa-circle-o"></i> Level One <i class="fa fa-angle-left pull-right"></i></a>
                                    <ul class="treeview-menu">
                                        <li><a href="#"><i class="fa fa-circle-o"></i> Level Two</a></li>
                                        <li>
                                            <a href="#"><i class="fa fa-circle-o"></i> Level Two <i class="fa fa-angle-left pull-right"></i></a>
                                            <ul class="treeview-menu">
                                                <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                                                <li><a href="#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
                            </ul>
                        </li>
                        <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>?</span></a></li>
                        <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>?</span></a></li>
                        <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>?</span></a></li>
                    </ul>
                </section>
            </aside>

            @yield('admin')

            <footer class="main-footer">
                <div class="pull-right hidden-xs">
                    <b>Version</b> 2.0.1
                </div>
                <strong>Copyright &copy; 2016 <a href="http://pebriant.pe.hu">Pebriant Labs</a>. and VBI Project</strong> All rights reserved.
            </footer>

            <aside class="control-sidebar control-sidebar-dark">
                <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
                    <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
                    <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane" id="control-sidebar-home-tab">
                        <h3 class="control-sidebar-heading">Recent Activity</h3>
                        <ul class="control-sidebar-menu">
                            <li>
                                <a href="javascript::;">
                                    <i class="menu-icon fa fa-birthday-cake bg-red"></i>
                                    <div class="menu-info">
                                        <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>
                                        <p>Will be 23 on April 24th</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript::;">
                                    <i class="menu-icon fa fa-user bg-yellow"></i>
                                    <div class="menu-info">
                                        <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>
                                        <p>New phone +1(800)555-1234</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript::;">
                                    <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>
                                    <div class="menu-info">
                                        <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>
                                        <p>nora@example.com</p>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript::;">
                                    <i class="menu-icon fa fa-file-code-o bg-green"></i>
                                    <div class="menu-info">
                                        <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>
                                        <p>Execution time 5 seconds</p>
                                    </div>
                                </a>
                            </li>
                        </ul>

                        <h3 class="control-sidebar-heading">Tasks Progress</h3>
                        <ul class="control-sidebar-menu">
                            <li>
                                <a href="javascript::;">
                                    <h4 class="control-sidebar-subheading">
                                        Custom Template Design
                                        <span class="label label-danger pull-right">70%</span>
                                    </h4>
                                    <div class="progress progress-xxs">
                                        <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript::;">
                                    <h4 class="control-sidebar-subheading">
                                        Update Resume
                                        <span class="label label-success pull-right">95%</span>
                                    </h4>
                                    <div class="progress progress-xxs">
                                        <div class="progress-bar progress-bar-success" style="width: 95%"></div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript::;">
                                    <h4 class="control-sidebar-subheading">
                                        Laravel Integration
                                        <span class="label label-warning pull-right">50%</span>
                                    </h4>
                                    <div class="progress progress-xxs">
                                        <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript::;">
                                    <h4 class="control-sidebar-subheading">
                                        Back End Framework
                                        <span class="label label-primary pull-right">68%</span>
                                    </h4>
                                    <div class="progress progress-xxs">
                                        <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
                                    </div>
                                </a>
                            </li>
                        </ul>

                    </div>
                    <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div><!-- /.tab-pane -->
                    <div class="tab-pane" id="control-sidebar-settings-tab">
                        <form method="post">
                            <h3 class="control-sidebar-heading">General Settings</h3>
                            <div class="form-group">
                                <label class="control-sidebar-subheading">
                                    Report panel usage
                                    <input type="checkbox" class="pull-right" checked>
                                </label>
                                <p>
                                    Some information about this general settings option
                                </p>
                            </div>

                            <div class="form-group">
                                <label class="control-sidebar-subheading">
                                    Allow mail redirect
                                    <input type="checkbox" class="pull-right" checked>
                                </label>
                                <p>
                                    Other sets of options are available
                                </p>
                            </div>

                            <div class="form-group">
                                <label class="control-sidebar-subheading">
                                    Expose author name in posts
                                    <input type="checkbox" class="pull-right" checked>
                                </label>
                                <p>
                                    Allow the user to show his name in blog posts
                                </p>
                            </div>

                            <h3 class="control-sidebar-heading">Chat Settings</h3>

                            <div class="form-group">
                                <label class="control-sidebar-subheading">
                                    Show me as online
                                    <input type="checkbox" class="pull-right" checked>
                                </label>
                            </div>

                            <div class="form-group">
                                <label class="control-sidebar-subheading">
                                    Turn off notifications
                                    <input type="checkbox" class="pull-right">
                                </label>
                            </div>

                            <div class="form-group">
                                <label class="control-sidebar-subheading">
                                    Delete chat history
                                    <a href="javascript::;" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
                                </label>
                            </div>>
                        </form>
                    </div>
                </div>
            </aside>
            <div class="control-sidebar-bg"></div>
        </div>


        {!! Html::script('/layout/admin/plugins/jQuery/jQuery-2.1.4.min.js') !!}
        {!! Html::script('/layout/admin/js/jquery-ui.min.js') !!}
        <script>
            $.widget.bridge('uibutton', $.ui.button);
        </script>
        {!! Html::script('/layout/admin/js/raphael-min.js') !!}
        {!! Html::script('/layout/admin/js/moment.min.js') !!}

        {!! Html::script('/layout/admin/plugins/sparkline/jquery.sparkline.min.js') !!}
        {!! Html::script('/layout/admin/plugins/sparkline/jquery.sparkline.min.js') !!}
        {!! Html::script('/layout/admin/js/bootstrap.min.js') !!}
        {!! Html::script('/layout/admin/plugins/morris/morris.min.js') !!}

        {!! Html::script('/layout/admin/plugins/sparkline/jquery.sparkline.min.js') !!}
        {!! Html::script('/layout/admin/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') !!}
        {!! Html::script('/layout/admin/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') !!}
        {!! Html::script('/layout/admin/plugins/knob/jquery.knob.js') !!}
        {!! Html::script('/layout/admin/plugins/daterangepicker/daterangepicker.js') !!}
        {!! Html::script('/layout/admin/plugins/datepicker/bootstrap-datepicker.js') !!}
        {!! Html::script('/layout/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') !!}
        {!! Html::script('/layout/admin/plugins/slimScroll/jquery.slimscroll.min.js') !!}
        {!! Html::script('/layout/admin/plugins/fastclick/fastclick.min.js') !!}
        {!! Html::script('/layout/admin/js/app.min.js') !!}
        {!! Html::script('/layout/admin/js/pages/dashboard.js') !!}
        {!! Html::script('/layout/admin/js/demo.js') !!}
    </body>
</html>
