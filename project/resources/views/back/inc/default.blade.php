<!DOCTYPE html>
<html lang="en" >

  @include ('back.inc.head')
  <body>  
                 


        <div id="page-wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
                    <div class="">
                        <a href="index-2.html" class="logo">
                            <img src="{{ asset('project/resources/assets/images/logo.png')}}"" alt="logo" class="logo-lg" />
                            <img src="assets/images/logo_sm.png" alt="logo" class="logo-sm hidden" />
                        </a>
                    </div>
                </div>

                <!-- Top navbar -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">
                        <div class="">

                            <!-- Mobile menu button -->
                            <div class="pull-left">
                                <button type="button" class="button-menu-mobile visible-xs visible-sm">
                                    <i class="fa fa-bars"></i>
                                </button>
                                <span class="clearfix"></span>
                            </div>

                            <!-- Top nav left menu -->
                            <ul class="nav navbar-nav hidden-sm hidden-xs top-navbar-items">
                                <li><h3>Winou etrottoir</h3></li>
        
                            </ul>

                            <!-- Top nav Right menu -->
                            <ul class="nav navbar-nav navbar-right top-navbar-items-right pull-right">
                                <li class="hidden-xs">
                                    <form role="search" class="navbar-left app-search pull-left">
                                         <input type="text" placeholder="Search..." class="form-control">
                                         <a href="#"><i class="fa fa-search"></i></a>
                                    </form>
                                </li>
                                <li class="dropdown top-menu-item-xs">
                                    <a href="#" data-target="#" class="dropdown-toggle menu-right-item" data-toggle="dropdown" aria-expanded="true">
                                        <i class="mdi mdi-bell"></i> <span class="label label-danger">3</span>
                                    </a>
                                    <ul class="dropdown-menu p-0 dropdown-menu-lg">
                                        <!--<li class="notifi-title"><span class="label label-default pull-right">New 3</span>Notification</li>-->
                                        
                                        <!--<li>-->
                                            <!--<a href="javascript:void(0);" class="list-group-item text-right">-->
                                                <!--<small class="font-600">See all notifications</small>-->
                                            <!--</a>-->
                                        <!--</li>-->
                                    </ul>
                                </li>

                                <li class="dropdown top-menu-item-xs">
                                    <a href="#" class="dropdown-toggle menu-right-item profile" data-toggle="dropdown" aria-expanded="true"><i class="mdi mdi-account img-circle"></i>  </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="ti-power-off m-r-10"></i>
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>

                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div> <!-- end container -->
                </div> <!-- end navbar -->
            </div>
            <!-- Top Bar End -->


            <!-- Page content start -->
            <div class="page-contentbar">

                <!--left navigation start-->
                <aside class="sidebar-navigation">
                    <div class="scrollbar-wrapper">
                        <div>
                            <button type="button" class="button-menu-mobile btn-mobile-view visible-xs visible-sm">
                                <i class="mdi mdi-close"></i>
                            </button>
                            <!-- User Detail box -->
                            <div class="user-details">
                                <div class="pull-left">
                                   <img src="{{asset('project/resources/assets/images/user-icon.png')}}" alt="" class="thumb-md img-circle">
                                </div>
                                <div class="user-info">
                                    <a href="#">Stanley Jones</a>
                                    <p class="text-muted m-0">Administrator</p>
                                </div>
                            </div>
                            <!--- End User Detail box -->

                            <!-- Left Menu Start -->
                            <ul class="metisMenu nav" id="side-menu">
                                <li><a href="index-2.html"><i class="ti-home"></i> Dashboard </a></li>

                                <li><a href="ui-elements.html"><span class="label label-custom pull-right">11</span> <i class="ti-comment-alt"></i> New Réclamations </a></li>

                                <li>
                                    <a href="javascript: void(0);" aria-expanded="true"><i class="ti-files"></i> Réclamations <span class="fa arrow"></span></a>
                                    <ul class="nav-second-level nav" aria-expanded="true">
                                        <li><a href="components-range-slider.html">Range Slider</a></li>
                                        <li><a href="components-alerts.html">Alerts</a></li>
                                        <li><a href="components-icons.html">Icons</a></li>
                                        <li><a href="components-widgets.html">Widgets</a></li>
                                    </ul>
                                </li>

                                <li><a href="typography.html"><i class="ti-user"></i> Utilisateurs </a></li>                                
                            </ul>
                        </div>
                    </div><!--Scrollbar wrapper-->
                </aside>
                <!--left navigation end-->

                <!-- START PAGE CONTENT -->
                <div id="page-right-content">

                    <div class="container">
                        <div class="row">
                          <div class="col-sm-6 col-sm-offset-6">
                            <div class="card-box widget-inline">
                              <div class="row">
                                

                                <div class="col-lg-6 col-sm-6">
                                  <div class="widget-inline-box text-center">
                                    <h3 class="m-t-10"><i class="mdi mdi-account text-info"></i> <b data-plugin="counterup">6521</b></h3>
                                    <p class="text-muted">Total users</p>
                                  </div>
                                </div>

                                <div class="col-lg-6 col-sm-6">
                                  <div class="widget-inline-box text-center b-0">
                                    <h3 class="m-t-10"><i class="text-danger mdi mdi-message-text"></i> <b data-plugin="counterup">325</b></h3>
                                    <p class="text-muted">Total réclamation</p>
                                  </div>
                                </div>

                              </div>
                            </div>
                          </div>
                        </div>
                        <!--end row -->
                        <div class="row">
                            <div class="col-lg-12">
                                  @yield('content')
                            </div> <!-- end col -->
                        </div> <!-- end row -->


                        


                    </div>
                    <!-- end container -->

                    <div class="footer">
                        <div class="pull-right hidden-xs">
                            Project Completed <strong class="text-custom">39%</strong>.
                        </div>
                        <div>
                            <strong>Simple Admin</strong> - Copyright &copy; 2016
                        </div>
                    </div> <!-- end footer -->

                </div>
                <!-- End #page-right-content -->

            </div>
            <!-- end .page-contentbar -->
        </div>
        <!-- End #page-wrapper -->


  @include('back.inc.js')
  
  </body>
</html>