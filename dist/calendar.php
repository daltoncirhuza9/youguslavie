<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description" content="Sleek Dashboard - Free Bootstrap 4 Admin Dashboard Template and UI Kit. It is very powerful bootstrap admin dashboard, which allows you to build products like admin panels, content management systems and CRMs etc.">


  <title>calendar - Sleek Admin Dashboard Template</title>

  <!-- GOOGLE FONTS -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500|Poppins:400,500,600,700|Roboto:400,500" rel="stylesheet" />
  <link href="https://cdn.materialdesignicons.com/4.4.95/css/materialdesignicons.min.css" rel="stylesheet" />


  <!-- PLUGINS CSS STYLE -->
  <link href="assets/plugins/nprogress/nprogress.css" rel="stylesheet" />



  <link href='assets/plugins/fullcalendar/core-4.3.1/main.min.css' rel='stylesheet' />
  <link href='assets/plugins/fullcalendar/daygrid-4.3.0/main.min.css' rel='stylesheet' />



  <link href="assets/plugins/daterangepicker/daterangepicker.css" rel="stylesheet" />



  <!-- SLEEK CSS -->
  <link id="sleek-css" rel="stylesheet" href="assets/css/sleek.css" />

  <!-- FAVICON -->
  <link href="assets/img/favicon.png" rel="shortcut icon" />



  <!--
    HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries
  -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <script src="assets/plugins/nprogress/nprogress.js"></script>
</head>


<body class="header-fixed sidebar-fixed sidebar-dark header-light" id="body">

  <script>
    NProgress.configure({ showSpinner: false });
    NProgress.start();
  </script>



  <div class="wrapper">
    <!-- Github Link -->
    <a href="https://github.com/tafcoder/sleek-dashboard"  target="_blank" class="github-link">
      <svg width="70" height="70" viewBox="0 0 250 250" aria-hidden="true">
        <defs>
          <linearGradient id="grad1" x1="0%" y1="75%" x2="100%" y2="0%">
            <stop offset="0%" style="stop-color:#896def;stop-opacity:1" />
            <stop offset="100%" style="stop-color:#482271;stop-opacity:1" />
          </linearGradient>
        </defs>
        <path d="M 0,0 L115,115 L115,115 L142,142 L250,250 L250,0 Z" fill="url(#grad1)"></path>
      </svg>
      <i class="mdi mdi-github-circle"></i>
    </a>

            <!--
          ====================================
          ——— LEFT SIDEBAR WITH FOOTER
          =====================================
        -->
        <aside class="left-sidebar bg-sidebar">
          <div id="sidebar" class="sidebar sidebar-with-footer">
            <!-- Aplication Brand -->
            <div class="app-brand">
              <a href="/index.html" title="Sleek Dashboard">
                <svg
                  class="brand-icon"
                  xmlns="http://www.w3.org/2000/svg"
                  preserveAspectRatio="xMidYMid"
                  width="30"
                  height="33"
                  viewBox="0 0 30 33"
                >
                  <g fill="none" fill-rule="evenodd">
                    <path
                      class="logo-fill-blue"
                      fill="#7DBCFF"
                      d="M0 4v25l8 4V0zM22 4v25l8 4V0z"
                    />
                    <path class="logo-fill-white" fill="#FFF" d="M11 4v25l8 4V0z" />
                  </g>
                </svg>
                <span class="brand-name text-truncate">Sleek Dashboard</span>
              </a>
            </div>
            <!-- begin sidebar scrollbar -->
            <div class="sidebar-scrollbar">

              <!-- sidebar menu -->
              <ul class="nav sidebar-inner" id="sidebar-menu">



                  <li  class="has-sub" >
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#dashboard"
                      aria-expanded="false" aria-controls="dashboard">
                      <i class="mdi mdi-view-dashboard-outline"></i>
                      <span class="nav-text">Dashboard</span> <b class="caret"></b>
                    </a>
                    <ul  class="collapse"  id="dashboard"
                      data-parent="#sidebar-menu">
                      <div class="sub-menu">



                            <li >
                              <a class="sidenav-item-link" href="index.html">
                                <span class="nav-text">Ecommerce</span>

                              </a>
                            </li>






                            <li >
                              <a class="sidenav-item-link" href="analytics.html">
                                <span class="nav-text">Analytics</span>

                                <span class="badge badge-success">new</span>

                              </a>
                            </li>




                      </div>
                    </ul>
                  </li>





                  <li  class="has-sub active expand" >
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#app"
                      aria-expanded="false" aria-controls="app">
                      <i class="mdi mdi-pencil-box-multiple"></i>
                      <span class="nav-text">App</span> <b class="caret"></b>
                    </a>
                    <ul  class="collapse show"  id="app"
                      data-parent="#sidebar-menu">
                      <div class="sub-menu">



                            <li >
                              <a class="sidenav-item-link" href="chat.html">
                                <span class="nav-text">Chat</span>

                              </a>
                            </li>






                            <li >
                              <a class="sidenav-item-link" href="contacts.html">
                                <span class="nav-text">Contacts</span>

                              </a>
                            </li>






                            <li >
                              <a class="sidenav-item-link" href="team.html">
                                <span class="nav-text">Team</span>

                              </a>
                            </li>






                            <li  class="active" >
                              <a class="sidenav-item-link" href="calendar.html">
                                <span class="nav-text">Calendar</span>

                              </a>
                            </li>




                      </div>
                    </ul>
                  </li>





                  <li  class="has-sub" >
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#components"
                      aria-expanded="false" aria-controls="components">
                      <i class="mdi mdi-folder-multiple-outline"></i>
                      <span class="nav-text">Components</span> <b class="caret"></b>
                    </a>
                    <ul  class="collapse"  id="components"
                      data-parent="#sidebar-menu">
                      <div class="sub-menu">



                            <li >
                              <a class="sidenav-item-link" href="alert.html">
                                <span class="nav-text">Alert</span>

                              </a>
                            </li>






                            <li >
                              <a class="sidenav-item-link" href="badge.html">
                                <span class="nav-text">Badge</span>

                              </a>
                            </li>






                            <li >
                              <a class="sidenav-item-link" href="breadcrumb.html">
                                <span class="nav-text">Breadcrumb</span>

                              </a>
                            </li>






                            <li >
                              <a class="sidenav-item-link" href="button-default.html">
                                <span class="nav-text">Button Default</span>

                              </a>
                            </li>






                            <li >
                              <a class="sidenav-item-link" href="button-dropdown.html">
                                <span class="nav-text">Button Dropdown</span>

                              </a>
                            </li>






                            <li >
                              <a class="sidenav-item-link" href="button-group.html">
                                <span class="nav-text">Button Group</span>

                              </a>
                            </li>






                            <li >
                              <a class="sidenav-item-link" href="button-social.html">
                                <span class="nav-text">Button Social</span>

                              </a>
                            </li>






                            <li >
                              <a class="sidenav-item-link" href="button-loading.html">
                                <span class="nav-text">Button Loading</span>

                              </a>
                            </li>






                            <li >
                              <a class="sidenav-item-link" href="card.html">
                                <span class="nav-text">Card</span>

                              </a>
                            </li>






                            <li >
                              <a class="sidenav-item-link" href="carousel.html">
                                <span class="nav-text">Carousel</span>

                              </a>
                            </li>






                            <li >
                              <a class="sidenav-item-link" href="collapse.html">
                                <span class="nav-text">Collapse</span>

                              </a>
                            </li>






                            <li >
                              <a class="sidenav-item-link" href="list-group.html">
                                <span class="nav-text">List Group</span>

                              </a>
                            </li>






                            <li >
                              <a class="sidenav-item-link" href="modal.html">
                                <span class="nav-text">Modal</span>

                              </a>
                            </li>






                            <li >
                              <a class="sidenav-item-link" href="pagination.html">
                                <span class="nav-text">Pagination</span>

                              </a>
                            </li>






                            <li >
                              <a class="sidenav-item-link" href="popover-tooltip.html">
                                <span class="nav-text">Popover & Tooltip</span>

                              </a>
                            </li>






                            <li >
                              <a class="sidenav-item-link" href="progress-bar.html">
                                <span class="nav-text">Progress Bar</span>

                              </a>
                            </li>






                            <li >
                              <a class="sidenav-item-link" href="spinner.html">
                                <span class="nav-text">Spinner</span>

                              </a>
                            </li>






                            <li >
                              <a class="sidenav-item-link" href="switcher.html">
                                <span class="nav-text">Switcher</span>

                              </a>
                            </li>






                            <li >
                              <a class="sidenav-item-link" href="tab.html">
                                <span class="nav-text">Tab</span>

                              </a>
                            </li>




                      </div>
                    </ul>
                  </li>





                  <li  class="has-sub" >
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#icons"
                      aria-expanded="false" aria-controls="icons">
                      <i class="mdi mdi-diamond-stone"></i>
                      <span class="nav-text">Icons</span> <b class="caret"></b>
                    </a>
                    <ul  class="collapse"  id="icons"
                      data-parent="#sidebar-menu">
                      <div class="sub-menu">



                            <li >
                              <a class="sidenav-item-link" href="material-icon.html">
                                <span class="nav-text">Material Icon</span>

                              </a>
                            </li>






                            <li >
                              <a class="sidenav-item-link" href="flag-icon.html">
                                <span class="nav-text">Flag Icon</span>

                              </a>
                            </li>




                      </div>
                    </ul>
                  </li>





                  <li  class="has-sub" >
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#forms"
                      aria-expanded="false" aria-controls="forms">
                      <i class="mdi mdi-email-mark-as-unread"></i>
                      <span class="nav-text">Forms</span> <b class="caret"></b>
                    </a>
                    <ul  class="collapse"  id="forms"
                      data-parent="#sidebar-menu">
                      <div class="sub-menu">



                            <li >
                              <a class="sidenav-item-link" href="basic-input.html">
                                <span class="nav-text">Basic Input</span>

                              </a>
                            </li>






                            <li >
                              <a class="sidenav-item-link" href="input-group.html">
                                <span class="nav-text">Input Group</span>

                              </a>
                            </li>






                            <li >
                              <a class="sidenav-item-link" href="checkbox-radio.html">
                                <span class="nav-text">Checkbox & Radio</span>

                              </a>
                            </li>






                            <li >
                              <a class="sidenav-item-link" href="form-validation.html">
                                <span class="nav-text">Form Validation</span>

                              </a>
                            </li>






                            <li >
                              <a class="sidenav-item-link" href="form-advance.html">
                                <span class="nav-text">Form Advance</span>

                              </a>
                            </li>




                      </div>
                    </ul>
                  </li>





                  <li  class="has-sub" >
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#tables"
                      aria-expanded="false" aria-controls="tables">
                      <i class="mdi mdi-table"></i>
                      <span class="nav-text">Tables</span> <b class="caret"></b>
                    </a>
                    <ul  class="collapse"  id="tables"
                      data-parent="#sidebar-menu">
                      <div class="sub-menu">



                            <li >
                              <a class="sidenav-item-link" href="basic-tables.html">
                                <span class="nav-text">Basic Tables</span>

                              </a>
                            </li>





                        <li  class="has-sub" >
                          <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#data-tables"
                            aria-expanded="false" aria-controls="data-tables">
                            <span class="nav-text">Data Tables</span> <b class="caret"></b>
                          </a>
                          <ul  class="collapse"  id="data-tables">
                            <div class="sub-menu">

                              <li >
                                <a href="basic-data-table.html">Basic Data Table</a>
                              </li>

                              <li >
                                <a href="responsive-data-table.html">Responsive Data Table</a>
                              </li>

                              <li >
                                <a href="hoverable-data-table.html">Hoverable Data Table</a>
                              </li>

                              <li >
                                <a href="expendable-data-table.html">Expendable Data Table</a>
                              </li>

                            </div>
                          </ul>
                        </li>



                      </div>
                    </ul>
                  </li>





                  <li  class="has-sub" >
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#maps"
                      aria-expanded="false" aria-controls="maps">
                      <i class="mdi mdi-google-maps"></i>
                      <span class="nav-text">Maps</span> <b class="caret"></b>
                    </a>
                    <ul  class="collapse"  id="maps"
                      data-parent="#sidebar-menu">
                      <div class="sub-menu">



                            <li >
                              <a class="sidenav-item-link" href="google-map.html">
                                <span class="nav-text">Google Map</span>

                              </a>
                            </li>






                            <li >
                              <a class="sidenav-item-link" href="vector-map.html">
                                <span class="nav-text">Vector Map</span>

                              </a>
                            </li>




                      </div>
                    </ul>
                  </li>





                  <li  class="has-sub" >
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#widgets"
                      aria-expanded="false" aria-controls="widgets">
                      <i class="mdi mdi-widgets"></i>
                      <span class="nav-text">Widgets</span> <b class="caret"></b>
                    </a>
                    <ul  class="collapse"  id="widgets"
                      data-parent="#sidebar-menu">
                      <div class="sub-menu">



                            <li >
                              <a class="sidenav-item-link" href="general-widget.html">
                                <span class="nav-text">General Widget</span>

                              </a>
                            </li>






                            <li >
                              <a class="sidenav-item-link" href="chart-widget.html">
                                <span class="nav-text">Chart Widget</span>

                              </a>
                            </li>




                      </div>
                    </ul>
                  </li>





                  <li  class="has-sub" >
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#charts"
                      aria-expanded="false" aria-controls="charts">
                      <i class="mdi mdi-chart-pie"></i>
                      <span class="nav-text">Charts</span> <b class="caret"></b>
                    </a>
                    <ul  class="collapse"  id="charts"
                      data-parent="#sidebar-menu">
                      <div class="sub-menu">



                            <li >
                              <a class="sidenav-item-link" href="chartjs.html">
                                <span class="nav-text">ChartJS</span>

                              </a>
                            </li>




                      </div>
                    </ul>
                  </li>





                  <li  class="has-sub" >
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#pages"
                      aria-expanded="false" aria-controls="pages">
                      <i class="mdi mdi-image-filter-none"></i>
                      <span class="nav-text">Pages</span> <b class="caret"></b>
                    </a>
                    <ul  class="collapse"  id="pages"
                      data-parent="#sidebar-menu">
                      <div class="sub-menu">



                            <li >
                              <a class="sidenav-item-link" href="user-profile.html">
                                <span class="nav-text">User Profile</span>

                              </a>
                            </li>





                        <li  class="has-sub" >
                          <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#authentication"
                            aria-expanded="false" aria-controls="authentication">
                            <span class="nav-text">Authentication</span> <b class="caret"></b>
                          </a>
                          <ul  class="collapse"  id="authentication">
                            <div class="sub-menu">

                              <li >
                                <a href="sign-in.html">Sign In</a>
                              </li>

                              <li >
                                <a href="sign-up.html">Sign Up</a>
                              </li>

                            </div>
                          </ul>
                        </li>




                        <li  class="has-sub" >
                          <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#others"
                            aria-expanded="false" aria-controls="others">
                            <span class="nav-text">Others</span> <b class="caret"></b>
                          </a>
                          <ul  class="collapse"  id="others">
                            <div class="sub-menu">

                              <li >
                                <a href="invoice.html">Invoice</a>
                              </li>

                              <li >
                                <a href="404.html">404 Page</a>
                              </li>

                            </div>
                          </ul>
                        </li>



                      </div>
                    </ul>
                  </li>





                  <li  class="has-sub" >
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#documentation"
                      aria-expanded="false" aria-controls="documentation">
                      <i class="mdi mdi-book-open-page-variant"></i>
                      <span class="nav-text">Documentation</span> <b class="caret"></b>
                    </a>
                    <ul  class="collapse"  id="documentation"
                      data-parent="#sidebar-menu">
                      <div class="sub-menu">



                            <li class="section-title">
                              Getting Started
                            </li>






                            <li >
                              <a class="sidenav-item-link" href="introduction.html">
                                <span class="nav-text">Introduction</span>

                              </a>
                            </li>






                            <li >
                              <a class="sidenav-item-link" href="quick-start.html">
                                <span class="nav-text">Quick Start</span>

                              </a>
                            </li>






                            <li >
                              <a class="sidenav-item-link" href="customization.html">
                                <span class="nav-text">Customization</span>

                              </a>
                            </li>






                            <li class="section-title">
                              Layouts
                            </li>





                        <li  class="has-sub" >
                          <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#headers"
                            aria-expanded="false" aria-controls="headers">
                            <span class="nav-text">Header Variations</span> <b class="caret"></b>
                          </a>
                          <ul  class="collapse"  id="headers">
                            <div class="sub-menu">

                              <li >
                                <a href="header-fixed.html">Header Fixed</a>
                              </li>

                              <li >
                                <a href="header-static.html">Header Static</a>
                              </li>

                              <li >
                                <a href="header-light.html">Header Light</a>
                              </li>

                              <li >
                                <a href="header-dark.html">Header Dark</a>
                              </li>

                            </div>
                          </ul>
                        </li>




                        <li  class="has-sub" >
                          <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#sidebar-navs"
                            aria-expanded="false" aria-controls="sidebar-navs">
                            <span class="nav-text">Sidebar Variations</span> <b class="caret"></b>
                          </a>
                          <ul  class="collapse"  id="sidebar-navs">
                            <div class="sub-menu">

                              <li >
                                <a href="sidebar-fixed-default.html">Sidebar Fixed Default</a>
                              </li>

                              <li >
                                <a href="sidebar-fixed-minified.html">Sidebar Fixed Minified</a>
                              </li>

                              <li >
                                <a href="sidebar-fixed-offcanvas.html">Sidebar Fixed Offcanvas</a>
                              </li>

                              <li >
                                <a href="sidebar-static-default.html">Sidebar Static Default</a>
                              </li>

                              <li >
                                <a href="sidebar-static-minified.html">Sidebar Static Minified</a>
                              </li>

                              <li >
                                <a href="sidebar-static-offcanvas.html">Sidebar Static Offcanvas</a>
                              </li>

                              <li >
                                <a href="sidebar-with-footer.html">Sidebar With Footer</a>
                              </li>

                              <li >
                                <a href="sidebar-without-footer.html">Sidebar Without Footer</a>
                              </li>

                              <li >
                                <a href="right-sidebar.html">Right Sidebar</a>
                              </li>

                            </div>
                          </ul>
                        </li>





                            <li >
                              <a class="sidenav-item-link" href="rtl.html">
                                <span class="nav-text">RTL Direction</span>

                              </a>
                            </li>




                      </div>
                    </ul>
                  </li>



              </ul>

            </div>

            <div class="sidebar-footer">
              <hr class="separator mb-0" />
              <div class="sidebar-footer-content">
                <h6 class="text-uppercase">
                  Cpu Uses <span class="float-right">40%</span>
                </h6>
                <div class="progress progress-xs">
                  <div
                    class="progress-bar active"
                    style="width: 40%;"
                    role="progressbar"
                  ></div>
                </div>
                <h6 class="text-uppercase">
                  Memory Uses <span class="float-right">65%</span>
                </h6>
                <div class="progress progress-xs">
                  <div
                    class="progress-bar progress-bar-warning"
                    style="width: 65%;"
                    role="progressbar"
                  ></div>
                </div>
              </div>
            </div>
          </div>
        </aside>


    <div class="page-wrapper">
                <!-- Header -->
          <header class="main-header " id="header">
            <nav class="navbar navbar-static-top navbar-expand-lg">
              <!-- Sidebar toggle button -->
              <button id="sidebar-toggler" class="sidebar-toggle">
                <span class="sr-only">Toggle navigation</span>
              </button>
              <!-- search form -->
              <div class="search-form d-none d-lg-inline-block">
                <div class="input-group">
                  <button type="button" name="search" id="search-btn" class="btn btn-flat">
                    <i class="mdi mdi-magnify"></i>
                  </button>
                  <input type="text" name="query" id="search-input" class="form-control" placeholder="'button', 'chart' etc."
                    autofocus autocomplete="off" />
                </div>
                <div id="search-results-container">
                  <ul id="search-results"></ul>
                </div>
              </div>

              <div class="navbar-right ">
                <ul class="nav navbar-nav">
                  <li class="dropdown notifications-menu">
                    <button class="dropdown-toggle" data-toggle="dropdown">
                      <i class="mdi mdi-bell-outline"></i>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-right">
                      <li class="dropdown-header">You have 5 notifications</li>
                      <li>
                        <a href="#">
                          <i class="mdi mdi-account-plus"></i> New user registered
                          <span class=" font-size-12 d-inline-block float-right"><i class="mdi mdi-clock-outline"></i> 10 AM</span>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="mdi mdi-account-remove"></i> User deleted
                          <span class=" font-size-12 d-inline-block float-right"><i class="mdi mdi-clock-outline"></i> 07 AM</span>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="mdi mdi-chart-areaspline"></i> Sales report is ready
                          <span class=" font-size-12 d-inline-block float-right"><i class="mdi mdi-clock-outline"></i> 12 PM</span>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="mdi mdi-account-supervisor"></i> New client
                          <span class=" font-size-12 d-inline-block float-right"><i class="mdi mdi-clock-outline"></i> 10 AM</span>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="mdi mdi-server-network-off"></i> Server overloaded
                          <span class=" font-size-12 d-inline-block float-right"><i class="mdi mdi-clock-outline"></i> 05 AM</span>
                        </a>
                      </li>
                      <li class="dropdown-footer">
                        <a class="text-center" href="#"> View All </a>
                      </li>
                    </ul>
                  </li>
                  <li class="right-sidebar-in right-sidebar-2-menu">
                    <i class="mdi mdi-settings mdi-spin"></i>
                  </li>
                  <!-- User Account -->
                  <li class="dropdown user-menu">
                    <button href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                      <img src="assets/img/user/user.png" class="user-image" alt="User Image" />
                      <span class="d-none d-lg-inline-block">Abdus Salam</span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-right">
                      <!-- User image -->
                      <li class="dropdown-header">
                        <img src="assets/img/user/user.png" class="img-circle" alt="User Image" />
                        <div class="d-inline-block">
                          Abdus Salam <small class="pt-1">iamabdus@gmail.com</small>
                        </div>
                      </li>

                      <li>
                        <a href="user-profile.html">
                          <i class="mdi mdi-account"></i> My Profile
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="mdi mdi-email"></i> Message
                        </a>
                      </li>
                      <li>
                        <a href="#"> <i class="mdi mdi-diamond-stone"></i> Projects </a>
                      </li>
                      <li class="right-sidebar-in">
                        <a href="javascript:0"> <i class="mdi mdi-settings"></i> Setting </a>
                      </li>

                      <li class="dropdown-footer">
                        <a href="index.html"> <i class="mdi mdi-logout"></i> Log Out </a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </div>
            </nav>


          </header>


      <div class="content-wrapper">
        <div class="content"><div class="breadcrumb-wrapper d-flex justify-content-between align-items-center">
  <div>
    <h1>Calendar</h1>

        <nav aria-label="breadcrumb">
          <ol class="breadcrumb p-0">
            <li class="breadcrumb-item">
              <a href="index.html">
                <span class="mdi mdi-home"></span>
              </a>
            </li>
            <li class="breadcrumb-item">
              app
            </li>
            <li class="breadcrumb-item" aria-current="page">calendar</li>
          </ol>
        </nav>

  </div>

  <div>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-add-event">
      <i class="mdi mdi-plus mr-1"></i> Add New Event
    </button>
  </div>
</div>

<div class="card card-default">
  <div class="card-body p-0">
    <div class="full-calendar">
      <div id='calendar'></div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col">
    <div class="card card-default">
      <div class="card-header card-header-border-bottom d-flex justify-content-between">
        <h2>How to use</h2>

        <a href="https://codepen.io/iamabdus/pen/OJPZxMg" target="_blank" class="btn btn-outline-primary btn-sm text-uppercase">
          <i class="mdi mdi-codepen mr-1"></i> Open with codepen
        </a>
      </div>

      <div class="card-body">
        <div class="mb-5">
          <h5 class="text-dark mb-3">FullCalendar</h5>

          <p>We are using the FullCalendar plugin for this calendar app. This is a great plugin for displaying events with details in a tooltip. You can change an event's name or other associated data and add a new event. It is up to you to add this functionality through FullCalendar's event hooks. Check <a href="http://fullcalendar.io/" target="_blank">FullCalendar documentation</a> for more details.</p>
        </div>

        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Javascript</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">HTML</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">CSS</a>
          </li>
        </ul>
        <div class="tab-content" id="myTabContent1">
          <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

<pre class="mt-4 m-0 pre-code">
document.addEventListener('DOMContentLoaded', function() {
  var calendarEl = document.getElementById('calendar');
  var calendar = new FullCalendar.Calendar(calendarEl, {
    plugins: [ 'dayGrid' ],
    defaultView: 'dayGridMonth',
    eventRender: function(info) {
      var ntoday = moment().format('YYYYMMDD');
      var eventStart = moment( info.event.start ).format('YYYYMMDD');
      info.el.setAttribute("title", info.event.extendedProps.description);
      info.el.setAttribute("data-toggle", "tooltip");
      if (eventStart &lt; ntoday){
        info.el.classList.add("fc-past-event");
      } else if (eventStart == ntoday){
        info.el.classList.add("fc-current-event");
      } else {
        info.el.classList.add("fc-future-event");
      }
    },

    events: [
      {
        title: 'All Day Event',
        description: 'description for All Day Event',
        start: '2020-01-01'
      }
      // more events here
    ]
  });
  calendar.render();
});
</pre>

<pre class="mt-4 m-0">
<code>&lt;script src="assets/plugins/fullcalendar/core-4.3.1/main.min.js"&gt;&lt;/script&gt;</code>
<code>&lt;script src="assets/plugins/fullcalendar/daygrid-4.3.0/main.min.js"&gt;&lt;/script&gt;</code>
<code>&lt;script src="assets/app/app.calendar.js"&gt;&lt;/script&gt;</code>
</pre>
          </div>

          <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
<pre class="mt-4 m-0">
&lt;div class="full-calendar"&gt;
 &lt;div id="calendar"&gt;
  &lt;a href="#" data-toggle="modal" data-target="#modal-add-event" class="btn btn-primary"&gt;
   &lt;span class="fc-icon fc-icon-plus-squar&gt;&lt;/span&gt; Add New Event
  &lt;/a&gt;
 &lt;/div&gt;
&lt;/div&gt;
</pre>
          </div>

          <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
<pre class="mt-4 m-0">
<code>&lt;link href="assets/plugins/fullcalendar/core-4.3.1/main.min.css" rel="stylesheet"&gt;</code>
<code>&lt;link href="assets/plugins/fullcalendar/daygrid-4.3.0/main.min.css" rel="stylesheet"&gt;</code>
</pre>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- Add Event Button  -->
<div class="modal fade" id="modal-add-event" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <form>
        <div class="modal-header px-4">
          <h5 class="modal-title" id="exampleModalCenterTitle">Add New Event</h5>

          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <div class="modal-body px-4">

          <div class="form-group">
            <label for="firstName">Title</label>
            <input type="text" class="form-control" value="Meeting">
          </div>

          <div class="row">
            <div class="col-lg-6">
              <div class="form-group">
                <label for="firstName">Date</label>
                <div class="input-group mb-2">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="mdi mdi-calendar-range"></i>
                    </span>
                  </div>
                  <input type="text" class="form-control date-range" name="dateRange" value="" placeholder="Date"/>
                </div>
              </div>
            </div>

            <div class="col-lg-6">
              <div class="form-group">
                <label for="exampleFormControlSelect3">Time</label>
                <select class="form-control" id="exampleFormControlSelect3">
                  <option>10:00am</option>
                  <option>10:30am</option>
                  <option>11am</option>
                  <option>11:30am</option>
                  <option>12:00pm</option>
                </select>
              </div>
            </div>
          </div>

          <div class="form-group mb-0">
            <label for="firstName">Description</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
          </div>
        </div>

        <div class="modal-footer border-top-0 px-4 pt-0">
          <button type="button" class="btn btn-primary btn-pill m-0">Creat Event</button>
        </div>
      </form>
    </div>
  </div>
</div></div>



        <div class="right-sidebar-2">
    <div class="right-sidebar-container-2">
      <div class="slim-scroll-right-sidebar-2">

      <div class="right-sidebar-2-header">
        <h2>Layout Settings</h2>
        <p>User Interface Settings</p>
        <div class="btn-close-right-sidebar-2">
          <i class="mdi mdi-window-close"></i>
        </div>
      </div>

      <div class="right-sidebar-2-body">
        <span class="right-sidebar-2-subtitle">Header Layout</span>
        <div class="no-col-space">
          <a href="javascript:void(0);" class="btn-right-sidebar-2 header-fixed-to btn-right-sidebar-2-active">Fixed</a>
          <a href="javascript:void(0);" class="btn-right-sidebar-2 header-static-to">Static</a>
        </div>

        <span class="right-sidebar-2-subtitle">Sidebar Layout</span>
        <div class="no-col-space">
          <select class="right-sidebar-2-select" id="sidebar-option-select">
            <option value="sidebar-fixed">Fixed Default</option>
            <option value="sidebar-fixed-minified">Fixed Minified</option>
            <option value="sidebar-fixed-offcanvas">Fixed Offcanvas</option>
            <option value="sidebar-static">Static Default</option>
            <option value="sidebar-static-minified">Static Minified</option>
            <option value="sidebar-static-offcanvas">Static Offcanvas</option>
          </select>
        </div>

        <span class="right-sidebar-2-subtitle">Header Background</span>
        <div class="no-col-space">
          <a href="javascript:void(0);" class="btn-right-sidebar-2 btn-right-sidebar-2-active header-light-to">Light</a>
          <a href="javascript:void(0);" class="btn-right-sidebar-2 header-dark-to">Dark</a>
        </div>

        <span class="right-sidebar-2-subtitle">Navigation Background</span>
        <div class="no-col-space">
          <a href="javascript:void(0);" class="btn-right-sidebar-2 btn-right-sidebar-2-active sidebar-dark-to">Dark</a>
          <a href="javascript:void(0);" class="btn-right-sidebar-2 sidebar-light-to">Light</a>
        </div>

        <span class="right-sidebar-2-subtitle">Direction</span>
        <div class="no-col-space">
          <a href="javascript:void(0);" class="btn-right-sidebar-2 btn-right-sidebar-2-active ltr-to">LTR</a>
          <a href="javascript:void(0);" class="btn-right-sidebar-2 rtl-to">RTL</a>
        </div>

        <div class="d-flex justify-content-center" style="padding-top: 30px">
          <div id="reset-options" style="width: auto; cursor: pointer" class="btn-right-sidebar-2 btn-reset">Reset
            Settings</div>
        </div>

      </div>

    </div>
  </div>

</div>

      </div>

                <footer class="footer mt-auto">
            <div class="copyright bg-white">
              <p>
                &copy; <span id="copy-year">2019</span> Copyright Sleek Dashboard Bootstrap Template by
                <a
                  class="text-primary"
                  href="http://www.iamabdus.com/"
                  target="_blank"
                  >Abdus</a
                >.
              </p>
            </div>
            <script>
                var d = new Date();
                var year = d.getFullYear();
                document.getElementById("copy-year").innerHTML = year;
            </script>
          </footer>

    </div>
  </div>

  <script src="assets/plugins/jquery/jquery.min.js"></script>
<script src="assets/plugins/slimscrollbar/jquery.slimscroll.min.js"></script>
<script src="assets/plugins/jekyll-search.min.js"></script>



<script src='assets/plugins/fullcalendar/core-4.3.1/main.min.js'></script>
<script src='assets/plugins/fullcalendar/daygrid-4.3.0/main.min.js'></script>
<script src='assets/app/app.calendar.js'></script>



<script src="assets/plugins/daterangepicker/moment.min.js"></script>
<script src="assets/plugins/daterangepicker/daterangepicker.js"></script>
<script>
  jQuery(document).ready(function() {
    jQuery('input[name="dateRange"]').daterangepicker({
    autoUpdateInput: false,
    singleDatePicker: true,
    locale: {
      cancelLabel: 'Clear'
    }
  });
    jQuery('input[name="dateRange"]').on('apply.daterangepicker', function (ev, picker) {
      jQuery(this).val(picker.startDate.format('MM/DD/YYYY'));
    });
    jQuery('input[name="dateRange"]').on('cancel.daterangepicker', function (ev, picker) {
      jQuery(this).val('');
    });
  });
</script>



<script src="assets/js/sleek.bundle.js"></script>
</body>

</html>
