<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Dashboard  @yield('title')</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    
    
    <!-- Bootstrap core CSS     -->
    <link href="{{ assets('admin/css/bootstrap.min.css') }}" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="{{assets('admin/css/animate.min.css')}}" rel="stylesheet"/>
    
    <!--  Light Bootstrap Table core CSS    -->
    <link href="{{assets('admin/css/light-bootstrap-dashboard.css')}}" rel="stylesheet"/>
    
    
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="{{assets('admin/css/demo.css')}}" rel="stylesheet" />
    
        
    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="{{assets('admin/css/pe-icon-7-stroke.css')}}" rel="stylesheet" />
    
</head>
<body> 

<div class="wrapper">
    <div class="sidebar" data-color="blue" data-image="{{assets('admin/img/sidebar-5.jpg')}}">
    
    <!--   
        
        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple" 
        Tip 2: you can also add an image using data-image tag
        
    -->
    
        <div class="sidebar-wrapper">
            <div class="logo">
                <a href="{{route('welcome_path')}}" class="simple-text">
                    Blog
                </a>
            </div>
                       
            <ul class="nav">
                <li class="<?= (!empty($menu)&&($menu == 'dashboard'))? 'active' : '' ?>">
                    <a href="{{route('admin_dashboard_path')}}">
                        <i class="pe-7s-graph"></i> 
                        <p>Dashboard</p>
                    </a>            
                </li>
                <li class="<?= (!empty($menu)&&($menu == 'users'))? 'active' : '' ?>">
                    <a href="{{route('admin_users_path')}}">
                        <i class="pe-7s-users"></i>
                        <p>Users</p>
                    </a>
                </li>
                <li class="<?= (!empty($menu)&&($menu == 'blog'))? 'active' : '' ?>">
                    <a href="{{route('admin_blog_path')}}">
                        <i class="pe-7s-note2"></i>
                        <p>Blog</p>
                    </a>
                </li>
            </ul> 
        </div>
    </div>
    
    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">    
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">@yield('pg')</a>
                </div>
                <div class="collapse navbar-collapse">       
                    <ul class="nav navbar-nav navbar-left">
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-globe"></i>
                                    <b class="caret"></b>
                                    <span class="notification">5</span>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Notification 1</a></li>
                                <li><a href="#">Notification 2</a></li>
                                <li><a href="#">Notification 3</a></li>
                                <li><a href="#">Notification 4</a></li>
                                <li><a href="#">Another notification</a></li>
                              </ul>
                        </li>
                    </ul>
                    
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                  {{ Auth::user()->name }}
                                    <b class="caret"></b>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something</a></li>
                                <li class="divider"></li>
                                <li><a href="{{url('/logout')}}">Log out</a></li>
                              </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
                     
                     
        <div class="content">
            <div class="container-fluid">    
                 @yield('content')       
            </div>    
        </div>
        
        
        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>
                        <li>
                            <a href="{{route('home_path')}}">
                                Home
                            </a>
                        </li>
                    </ul>
                </nav>
                <p class="copyright pull-right">&copy; {{date('Y')}} </p>
            </div>
        </footer>
        
    </div>   
</div>


</body>

    <!--   Core JS Files   -->
    <script src="{{assets('admin/js/jquery-1.10.2.js')}}" type="text/javascript"></script>
    <script src="{{assets('admin/js/bootstrap.min.js')}}" type="text/javascript"></script>
    
    <!--  Checkbox, Radio & Switch Plugins -->
    <script src="{{assets('admin/js/bootstrap-checkbox-radio-switch.js')}}"></script>
    
    <!--  Charts Plugin -->
    <script src="{{assets('admin/js/chartist.min.js')}}"></script>

    <!--  Notifications Plugin    -->
    <script src="{{assets('admin/js/bootstrap-notify.js')}}"></script>
    
    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
    
    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
    <script src="{{assets('admin/js/light-bootstrap-dashboard.js')}}"></script>
    
    <!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
    <script src="{{assets('admin/js/demo.js')}}"></script>
    
    <script type="text/javascript">
        $(document).ready(function(){
            
            demo.initChartist();
            
            $.notify({
                icon: 'pe-7s-gift',
                message: "Welcome to <b>Light Bootstrap Dashboard</b> - a beautiful freebie for every web developer."
                
            },{
                type: 'info',
                timer: 4000
            });
            
        });
    </script>
    
</html>