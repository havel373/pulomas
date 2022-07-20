<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from coderthemes.com/hyper_2/saas/ui-notifications.html by HTTrack Website Copier/3.x [XR&CO'2017], Sun, 19 Dec 2021 00:32:11 GMT -->
<head>
    <meta charset="utf-8" />
    <title>Notifications | Hyper - Responsive Bootstrap 5 Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- App css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" id="light-style" />
    <link href="assets/css/app-dark.min.css" rel="stylesheet" type="text/css" id="dark-style" />

</head>

<body class="loading"
    data-layout-config='{"leftSideBarTheme":"dark","layoutBoxed":false, "leftSidebarCondensed":false, "leftSidebarScrollable":false,"darkMode":false, "showRightSidebarOnStart": true}'>
    <!-- Begin page -->
    <div class="wrapper">
        <!-- ========== Left Sidebar Start ========== -->
        <div class="leftside-menu">
    
            <!-- LOGO -->
            <a href="index.html" class="logo text-center logo-light">
                <span class="logo-lg">
                    <img src="assets/images/logo.png" alt="" height="16">
                </span>
                <span class="logo-sm">
                    <img src="assets/images/logo_sm.png" alt="" height="16">
                </span>
            </a>

            <!-- LOGO -->
            <a href="index.html" class="logo text-center logo-dark">
                <span class="logo-lg">
                    <img src="assets/images/logo-dark.png" alt="" height="16">
                </span>
                <span class="logo-sm">
                    <img src="assets/images/logo_sm_dark.png" alt="" height="16">
                </span>
            </a>
    
            <div class="h-100" id="leftside-menu-container" data-simplebar>

                <!--- Sidemenu -->
                <ul class="side-nav">

                    <li class="side-nav-title side-nav-item">Navigation</li>

                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarDashboards" aria-expanded="false" aria-controls="sidebarDashboards" class="side-nav-link">
                            <i class="uil-home-alt"></i>
                            <span class="badge bg-success float-end">4</span>
                            <span> Dashboards </span>
                        </a>
                        <div class="collapse" id="sidebarDashboards">
                            <ul class="side-nav-second-level">
                                <li>
                                    <a href="dashboard-analytics.html">Analytics</a>
                                </li>
                                <li>
                                    <a href="dashboard-crm.html">CRM</a>
                                </li>
                                <li>
                                    <a href="index.html">Ecommerce</a>
                                </li>
                                <li>
                                    <a href="dashboard-projects.html">Projects</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="side-nav-title side-nav-item">Apps</li>

                    <li class="side-nav-item">
                        <a href="apps-calendar.html" class="side-nav-link">
                            <i class="uil-calender"></i>
                            <span> Calendar </span>
                        </a>
                    </li>

                    <li class="side-nav-item">
                        <a href="apps-chat.html" class="side-nav-link">
                            <i class="uil-comments-alt"></i>
                            <span> Chat </span>
                        </a>
                    </li>

                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarEcommerce" aria-expanded="false" aria-controls="sidebarEcommerce" class="side-nav-link">
                            <i class="uil-store"></i>
                            <span> Ecommerce </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarEcommerce">
                            <ul class="side-nav-second-level">
                                <li>
                                    <a href="apps-ecommerce-products.html">Products</a>
                                </li>
                                <li>
                                    <a href="apps-ecommerce-products-details.html">Products Details</a>
                                </li>
                                <li>
                                    <a href="apps-ecommerce-orders.html">Orders</a>
                                </li>
                                <li>
                                    <a href="apps-ecommerce-orders-details.html">Order Details</a>
                                </li>
                                <li>
                                    <a href="apps-ecommerce-customers.html">Customers</a>
                                </li>
                                <li>
                                    <a href="apps-ecommerce-shopping-cart.html">Shopping Cart</a>
                                </li>
                                <li>
                                    <a href="apps-ecommerce-checkout.html">Checkout</a>
                                </li>
                                <li>
                                    <a href="apps-ecommerce-sellers.html">Sellers</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarEmail" aria-expanded="false" aria-controls="sidebarEmail" class="side-nav-link">
                            <i class="uil-envelope"></i>
                            <span> Email </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarEmail">
                            <ul class="side-nav-second-level">
                                <li>
                                    <a href="apps-email-inbox.html">Inbox</a>
                                </li>
                                <li>
                                    <a href="apps-email-read.html">Read Email</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarProjects" aria-expanded="false" aria-controls="sidebarProjects" class="side-nav-link">
                            <i class="uil-briefcase"></i>
                            <span> Projects </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarProjects">
                            <ul class="side-nav-second-level">
                                <li>
                                    <a href="apps-projects-list.html">List</a>
                                </li>
                                <li>
                                    <a href="apps-projects-details.html">Details</a>
                                </li>
                                <li>
                                    <a href="apps-projects-gantt.html">Gantt <span class="badge rounded-pill badge-light-lighten font-10 float-end">New</span></a>
                                </li>
                                <li>
                                    <a href="apps-projects-add.html">Create Project <span class="badge rounded-pill badge-success-lighten font-10 float-end">New</span></a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="side-nav-item">
                        <a href="apps-social-feed.html" class="side-nav-link">
                            <i class="uil-rss"></i>
                            <span> Social Feed </span>
                        </a>
                    </li>

                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarTasks" aria-expanded="false" aria-controls="sidebarTasks" class="side-nav-link">
                            <i class="uil-clipboard-alt"></i>
                            <span> Tasks </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarTasks">
                            <ul class="side-nav-second-level">
                                <li>
                                    <a href="apps-tasks.html">List</a>
                                </li>
                                <li>
                                    <a href="apps-tasks-details.html">Details</a>
                                </li>
                                <li>
                                    <a href="apps-kanban.html">Kanban Board</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="side-nav-item">
                        <a href="apps-file-manager.html" class="side-nav-link">
                            <i class="uil-folder-plus"></i>
                            <span> File Manager </span>
                        </a>
                    </li>

                    <li class="side-nav-title side-nav-item">Custom</li>

                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarPages" aria-expanded="false" aria-controls="sidebarPages" class="side-nav-link">
                            <i class="uil-copy-alt"></i>
                            <span> Pages </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarPages">
                            <ul class="side-nav-second-level">
                                <li>
                                    <a href="pages-profile.html">Profile</a>
                                </li>
                                <li>
                                    <a href="pages-profile-2.html">Profile 2</a>
                                </li>
                                <li>
                                    <a href="pages-invoice.html">Invoice</a>
                                </li>
                                <li>
                                    <a href="pages-faq.html">FAQ</a>
                                </li>
                                <li>
                                    <a href="pages-pricing.html">Pricing</a>
                                </li>
                                <li>
                                    <a href="pages-maintenance.html">Maintenance</a>
                                </li>
                                <li class="side-nav-item">
                                    <a data-bs-toggle="collapse" href="#sidebarPagesAuth" aria-expanded="false" aria-controls="sidebarPagesAuth">
                                        <span> Authentication </span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <div class="collapse" id="sidebarPagesAuth">
                                        <ul class="side-nav-third-level">
                                            <li>
                                                <a href="pages-login.html">Login</a>
                                            </li>
                                            <li>
                                                <a href="pages-login-2.html">Login 2</a>
                                            </li>
                                            <li>
                                                <a href="pages-register.html">Register</a>
                                            </li>
                                            <li>
                                                <a href="pages-register-2.html">Register 2</a>
                                            </li>
                                            <li>
                                                <a href="pages-logout.html">Logout</a>
                                            </li>
                                            <li>
                                                <a href="pages-logout-2.html">Logout 2</a>
                                            </li>
                                            <li>
                                                <a href="pages-recoverpw.html">Recover Password</a>
                                            </li>
                                            <li>
                                                <a href="pages-recoverpw-2.html">Recover Password 2</a>
                                            </li>
                                            <li>
                                                <a href="pages-lock-screen.html">Lock Screen</a>
                                            </li>
                                            <li>
                                                <a href="pages-lock-screen-2.html">Lock Screen 2</a>
                                            </li>
                                            <li>
                                                <a href="pages-confirm-mail.html">Confirm Mail</a>
                                            </li>
                                            <li>
                                                <a href="pages-confirm-mail-2.html">Confirm Mail 2</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="side-nav-item">
                                    <a data-bs-toggle="collapse" href="#sidebarPagesError" aria-expanded="false" aria-controls="sidebarPagesError">
                                        <span> Error </span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <div class="collapse" id="sidebarPagesError">
                                        <ul class="side-nav-third-level">
                                            <li>
                                            <a href="pages-404.html">Error 404</a>
                                        </li>
                                        <li>
                                            <a href="pages-404-alt.html">Error 404-alt</a>
                                        </li>
                                        <li>
                                            <a href="pages-500.html">Error 500</a>
                                        </li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <a href="pages-starter.html">Starter Page</a>
                                </li>
                                <li>
                                    <a href="pages-preloader.html">With Preloader</a>
                                </li>
                                <li>
                                    <a href="pages-timeline.html">Timeline</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="side-nav-item">
                        <a href="landing.html" target="_blank" class="side-nav-link">
                            <i class="uil-globe"></i>
                            <span class="badge bg-secondary text-light float-end">New</span>
                            <span> Landing </span>
                        </a>
                    </li>

                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarLayouts" aria-expanded="false" aria-controls="sidebarLayouts" class="side-nav-link">
                            <i class="uil-window"></i>
                            <span> Layouts </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarLayouts">
                            <ul class="side-nav-second-level">
                                <li>
                                    <a href="layouts-horizontal.html">Horizontal</a>
                                </li>
                                <li>
                                    <a href="layouts-detached.html">Detached</a>
                                </li>
                                <li>
                                    <a href="layouts-full.html">Full</a>
                                </li>
                            </ul>
                        </div>
                    </li>
            
                    <li class="side-nav-title side-nav-item mt-1">Components</li>

                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarBaseUI" aria-expanded="false" aria-controls="sidebarBaseUI" class="side-nav-link">
                            <i class="uil-box"></i>
                            <span> Base UI </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarBaseUI">
                            <ul class="side-nav-second-level">
                                <li>
                                    <a href="ui-accordions.html">Accordions</a>
                                </li>
                                <li>
                                    <a href="ui-alerts.html">Alerts</a>
                                </li>
                                <li>
                                    <a href="ui-avatars.html">Avatars</a>
                                </li>
                                <li>
                                    <a href="ui-badges.html">Badges</a>
                                </li>
                                <li>
                                    <a href="ui-breadcrumb.html">Breadcrumb</a>
                                </li>
                                <li>
                                    <a href="ui-buttons.html">Buttons</a>
                                </li>
                                <li>
                                    <a href="ui-cards.html">Cards</a>
                                </li>
                                <li>
                                    <a href="ui-carousel.html">Carousel</a>
                                </li>
                                <li>
                                    <a href="ui-dropdowns.html">Dropdowns</a>
                                </li>
                                <li>
                                    <a href="ui-embed-video.html">Embed Video</a>
                                </li>
                                <li>
                                    <a href="ui-grid.html">Grid</a>
                                </li>
                                <li>
                                    <a href="ui-list-group.html">List Group</a>
                                </li>
                                <li>
                                    <a href="ui-modals.html">Modals</a>
                                </li>
                                <li>
                                    <a href="ui-notifications.html">Notifications</a>
                                </li>
                                <li>
                                    <a href="ui-offcanvas.html">Offcanvas</a>
                                </li>
                                <li>
                                    <a href="ui-placeholders.html">Placeholders</a>
                                </li>
                                <li>
                                    <a href="ui-pagination.html">Pagination</a>
                                </li>
                                <li>
                                    <a href="ui-popovers.html">Popovers</a>
                                </li>
                                <li>
                                    <a href="ui-progress.html">Progress</a>
                                </li>
                                <li>
                                    <a href="ui-ribbons.html">Ribbons</a>
                                </li>
                                <li>
                                    <a href="ui-spinners.html">Spinners</a>
                                </li>
                                <li>
                                    <a href="ui-tabs.html">Tabs</a>
                                </li>
                                <li>
                                    <a href="ui-tooltips.html">Tooltips</a>
                                </li>
                                <li>
                                    <a href="ui-typography.html">Typography</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarExtendedUI" aria-expanded="false" aria-controls="sidebarExtendedUI" class="side-nav-link">
                            <i class="uil-package"></i>
                            <span> Extended UI </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarExtendedUI">
                            <ul class="side-nav-second-level">
                                <li>
                                    <a href="extended-dragula.html">Dragula</a>
                                </li>
                                <li>
                                    <a href="extended-range-slider.html">Range Slider</a>
                                </li>
                                <li>
                                    <a href="extended-ratings.html">Ratings</a>
                                </li>
                                <li>
                                    <a href="extended-scrollbar.html">Scrollbar</a>
                                </li>
                                <li>
                                    <a href="extended-scrollspy.html">Scrollspy</a>
                                </li>
                                <li>
                                    <a href="extended-treeview.html">Treeview</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="side-nav-item">
                        <a href="widgets.html" class="side-nav-link">
                            <i class="uil-layer-group"></i>
                            <span> Widgets </span>
                        </a>
                    </li>

                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarIcons" aria-expanded="false" aria-controls="sidebarIcons" class="side-nav-link">
                            <i class="uil-streering"></i>
                            <span> Icons </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarIcons">
                            <ul class="side-nav-second-level">
                                <li>
                                    <a href="icons-dripicons.html">Dripicons</a>
                                </li>
                                <li>
                                    <a href="icons-mdi.html">Material Design</a>
                                </li>
                                <li>
                                    <a href="icons-unicons.html">Unicons</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarForms" aria-expanded="false" aria-controls="sidebarForms" class="side-nav-link">
                            <i class="uil-document-layout-center"></i>
                            <span> Forms </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarForms">
                            <ul class="side-nav-second-level">
                                <li>
                                    <a href="form-elements.html">Basic Elements</a>
                                </li>
                                <li>
                                    <a href="form-advanced.html">Form Advanced</a>
                                </li>
                                <li>
                                    <a href="form-validation.html">Validation</a>
                                </li>
                                <li>
                                    <a href="form-wizard.html">Wizard</a>
                                </li>
                                <li>
                                    <a href="form-fileuploads.html">File Uploads</a>
                                </li>
                                <li>
                                    <a href="form-editors.html">Editors</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarCharts" aria-expanded="false" aria-controls="sidebarCharts" class="side-nav-link">
                            <i class="uil-chart"></i>
                            <span> Charts </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarCharts">
                            <ul class="side-nav-second-level">
                                <li class="side-nav-item">
                                    <a data-bs-toggle="collapse" href="#sidebarApexCharts" aria-expanded="false" aria-controls="sidebarApexCharts">
                                        <span> Apex Charts </span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <div class="collapse" id="sidebarApexCharts">
                                        <ul class="side-nav-third-level">
                                            <li>
                                                <a href="charts-apex-area.html">Area</a>
                                            </li>
                                            <li>
                                                <a href="charts-apex-bar.html">Bar</a>
                                            </li>
                                            <li>
                                                <a href="charts-apex-bubble.html">Bubble</a>
                                            </li>
                                            <li>
                                                <a href="charts-apex-candlestick.html">Candlestick</a>
                                            </li>
                                            <li>
                                                <a href="charts-apex-column.html">Column</a>
                                            </li>
                                            <li>
                                                <a href="charts-apex-heatmap.html">Heatmap</a>
                                            </li>
                                            <li>
                                                <a href="charts-apex-line.html">Line</a>
                                            </li>
                                            <li>
                                                <a href="charts-apex-mixed.html">Mixed</a>
                                            </li>
                                            <li>
                                                <a href="charts-apex-pie.html">Pie</a>
                                            </li>
                                            <li>
                                                <a href="charts-apex-radar.html">Radar</a>
                                            </li>
                                            <li>
                                                <a href="charts-apex-radialbar.html">RadialBar</a>
                                            </li>
                                            <li>
                                                <a href="charts-apex-scatter.html">Scatter</a>
                                            </li>
                                            <li>
                                                <a href="charts-apex-sparklines.html">Sparklines</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li>
                                    <a href="charts-brite.html">Britecharts</a>
                                </li>
                                <li>
                                    <a href="charts-chartjs.html">Chartjs</a>
                                </li>
                                <li>
                                    <a href="charts-sparkline.html">Sparklines</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarTables" aria-expanded="false" aria-controls="sidebarTables" class="side-nav-link">
                            <i class="uil-table"></i>
                            <span> Tables </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarTables">
                            <ul class="side-nav-second-level">
                                <li>
                                    <a href="tables-basic.html">Basic Tables</a>
                                </li>
                                <li>
                                    <a href="tables-datatable.html">Data Tables</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarMaps" aria-expanded="false" aria-controls="sidebarMaps" class="side-nav-link">
                            <i class="uil-location-point"></i>
                            <span> Maps </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarMaps">
                            <ul class="side-nav-second-level">
                                <li>
                                    <a href="maps-google.html">Google Maps</a>
                                </li>
                                <li>
                                    <a href="maps-vector.html">Vector Maps</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarMultiLevel" aria-expanded="false" aria-controls="sidebarMultiLevel" class="side-nav-link">
                            <i class="uil-folder-plus"></i>
                            <span> Multi Level </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarMultiLevel">
                            <ul class="side-nav-second-level">
                                <li class="side-nav-item">
                                    <a data-bs-toggle="collapse" href="#sidebarSecondLevel" aria-expanded="false" aria-controls="sidebarSecondLevel">
                                        <span> Second Level </span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <div class="collapse" id="sidebarSecondLevel">
                                        <ul class="side-nav-third-level">
                                            <li>
                                                <a href="javascript: void(0);">Item 1</a>
                                            </li>
                                            <li>
                                                <a href="javascript: void(0);">Item 2</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="side-nav-item">
                                    <a data-bs-toggle="collapse" href="#sidebarThirdLevel" aria-expanded="false" aria-controls="sidebarThirdLevel">
                                        <span> Third Level </span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <div class="collapse" id="sidebarThirdLevel">
                                        <ul class="side-nav-third-level">
                                            <li>
                                                <a href="javascript: void(0);">Item 1</a>
                                            </li>
                                            <li class="side-nav-item">
                                                <a data-bs-toggle="collapse" href="#sidebarFourthLevel" aria-expanded="false" aria-controls="sidebarFourthLevel">
                                                    <span> Item 2 </span>
                                                    <span class="menu-arrow"></span>
                                                </a>
                                                <div class="collapse" id="sidebarFourthLevel">
                                                    <ul class="side-nav-forth-level">
                                                        <li>
                                                            <a href="javascript: void(0);">Item 2.1</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript: void(0);">Item 2.2</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>

                <!-- Help Box -->
                <div class="help-box text-white text-center">
                    <a href="javascript: void(0);" class="float-end close-btn text-white">
                        <i class="mdi mdi-close"></i>
                    </a>
                    <img src="assets/images/help-icon.svg" height="90" alt="Helper Icon Image" />
                    <h5 class="mt-3">Unlimited Access</h5>
                    <p class="mb-3">Upgrade to plan to get access to unlimited reports</p>
                    <a href="javascript: void(0);" class="btn btn-outline-light btn-sm">Upgrade</a>
                </div>
                <!-- end Help Box -->
                <!-- End Sidebar -->

                <div class="clearfix"></div>

            </div>
            <!-- Sidebar -left -->

        </div>
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">
            <div class="content">
                <!-- Topbar Start -->
                <div class="navbar-custom">
                    <ul class="list-unstyled topbar-menu float-end mb-0">
                        <li class="dropdown notification-list d-lg-none">
                            <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <i class="dripicons-search noti-icon"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-animated dropdown-lg p-0">
                                <form class="p-3">
                                    <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                </form>
                            </div>
                        </li>
                        <li class="dropdown notification-list topbar-dropdown">
                            <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <img src="assets/images/flags/us.jpg" alt="user-image" class="me-0 me-sm-1" height="12"> 
                                <span class="align-middle d-none d-sm-inline-block">English</span> <i class="mdi mdi-chevron-down d-none d-sm-inline-block align-middle"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated topbar-dropdown-menu">

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <img src="assets/images/flags/germany.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">German</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <img src="assets/images/flags/italy.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Italian</span>
                                </a>
                
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <img src="assets/images/flags/spain.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Spanish</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <img src="assets/images/flags/russia.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Russian</span>
                                </a>

                            </div>
                        </li>

                        <li class="dropdown notification-list">
                            <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <i class="dripicons-bell noti-icon"></i>
                                <span class="noti-icon-badge"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated dropdown-lg">

                                <!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h5 class="m-0">
                                        <span class="float-end">
                                            <a href="javascript: void(0);" class="text-dark">
                                                <small>Clear All</small>
                                            </a>
                                        </span>Notification
                                    </h5>
                                </div>

                                <div style="max-height: 230px;" data-simplebar>
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-primary">
                                            <i class="mdi mdi-comment-account-outline"></i>
                                        </div>
                                        <p class="notify-details">Caleb Flakelar commented on Admin
                                            <small class="text-muted">1 min ago</small>
                                        </p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-info">
                                            <i class="mdi mdi-account-plus"></i>
                                        </div>
                                        <p class="notify-details">New user registered.
                                            <small class="text-muted">5 hours ago</small>
                                        </p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon">
                                            <img src="assets/images/users/avatar-2.jpg" class="img-fluid rounded-circle" alt="" /> </div>
                                        <p class="notify-details">Cristina Pride</p>
                                        <p class="text-muted mb-0 user-msg">
                                            <small>Hi, How are you? What about our next meeting</small>
                                        </p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-primary">
                                            <i class="mdi mdi-comment-account-outline"></i>
                                        </div>
                                        <p class="notify-details">Caleb Flakelar commented on Admin
                                            <small class="text-muted">4 days ago</small>
                                        </p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon">
                                            <img src="assets/images/users/avatar-4.jpg" class="img-fluid rounded-circle" alt="" /> </div>
                                        <p class="notify-details">Karen Robinson</p>
                                        <p class="text-muted mb-0 user-msg">
                                            <small>Wow ! this admin looks good and awesome design</small>
                                        </p>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-info">
                                            <i class="mdi mdi-heart"></i>
                                        </div>
                                        <p class="notify-details">Carlos Crouch liked
                                            <b>Admin</b>
                                            <small class="text-muted">13 days ago</small>
                                        </p>
                                    </a>
                                </div>

                                <!-- All-->
                                <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all">
                                    View All
                                </a>

                            </div>
                        </li>

                        <li class="dropdown notification-list d-none d-sm-inline-block">
                            <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <i class="dripicons-view-apps noti-icon"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated dropdown-lg p-0">

                                <div class="p-2">
                                    <div class="row g-0">
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#">
                                                <img src="assets/images/brands/slack.png" alt="slack">
                                                <span>Slack</span>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#">
                                                <img src="assets/images/brands/github.png" alt="Github">
                                                <span>GitHub</span>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#">
                                                <img src="assets/images/brands/dribbble.png" alt="dribbble">
                                                <span>Dribbble</span>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="row g-0">
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#">
                                                <img src="assets/images/brands/bitbucket.png" alt="bitbucket">
                                                <span>Bitbucket</span>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#">
                                                <img src="assets/images/brands/dropbox.png" alt="dropbox">
                                                <span>Dropbox</span>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#">
                                                <img src="assets/images/brands/g-suite.png" alt="G Suite">
                                                <span>G Suite</span>
                                            </a>
                                        </div>
                                    </div> <!-- end row-->
                                </div>

                            </div>
                        </li>

                        <li class="notification-list">
                            <a class="nav-link end-bar-toggle" href="javascript: void(0);">
                                <i class="dripicons-gear noti-icon"></i>
                            </a>
                        </li>

                        <li class="dropdown notification-list">
                            <a class="nav-link dropdown-toggle nav-user arrow-none me-0" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false"
                                aria-expanded="false">
                                <span class="account-user-avatar"> 
                                    <img src="assets/images/users/avatar-1.jpg" alt="user-image" class="rounded-circle">
                                </span>
                                <span>
                                    <span class="account-user-name">Dominic Keller</span>
                                    <span class="account-position">Founder</span>
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated topbar-dropdown-menu profile-dropdown">
                                <!-- item-->
                                <div class=" dropdown-header noti-title">
                                    <h6 class="text-overflow m-0">Welcome !</h6>
                                </div>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="mdi mdi-account-circle me-1"></i>
                                    <span>My Account</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="mdi mdi-account-edit me-1"></i>
                                    <span>Settings</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="mdi mdi-lifebuoy me-1"></i>
                                    <span>Support</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="mdi mdi-lock-outline me-1"></i>
                                    <span>Lock Screen</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="mdi mdi-logout me-1"></i>
                                    <span>Logout</span>
                                </a>
                            </div>
                        </li>

                    </ul>
                    <button class="button-menu-mobile open-left">
                        <i class="mdi mdi-menu"></i>
                    </button>
                    <div class="app-search dropdown d-none d-lg-block">
                        <form>
                            <div class="input-group">
                                <input type="text" class="form-control dropdown-toggle"  placeholder="Search..." id="top-search">
                                <span class="mdi mdi-magnify search-icon"></span>
                                <button class="input-group-text btn-primary" type="submit">Search</button>
                            </div>
                        </form>

                        <div class="dropdown-menu dropdown-menu-animated dropdown-lg" id="search-dropdown">
                            <!-- item-->
                            <div class="dropdown-header noti-title">
                                <h5 class="text-overflow mb-2">Found <span class="text-danger">17</span> results</h5>
                            </div>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="uil-notes font-16 me-1"></i>
                                <span>Analytics Report</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="uil-life-ring font-16 me-1"></i>
                                <span>How can I help you?</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="uil-cog font-16 me-1"></i>
                                <span>User profile settings</span>
                            </a>

                            <!-- item-->
                            <div class="dropdown-header noti-title">
                                <h6 class="text-overflow mb-2 text-uppercase">Users</h6>
                            </div>

                            <div class="notification-list">
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="d-flex">
                                        <img class="d-flex me-2 rounded-circle" src="assets/images/users/avatar-2.jpg" alt="Generic placeholder image" height="32">
                                        <div class="w-100">
                                            <h5 class="m-0 font-14">Erwin Brown</h5>
                                            <span class="font-12 mb-0">UI Designer</span>
                                        </div>
                                    </div>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="d-flex">
                                        <img class="d-flex me-2 rounded-circle" src="assets/images/users/avatar-5.jpg" alt="Generic placeholder image" height="32">
                                        <div class="w-100">
                                            <h5 class="m-0 font-14">Jacob Deo</h5>
                                            <span class="font-12 mb-0">Developer</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end Topbar -->

                <!-- Start Content-->
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box">
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Hyper</a></li>
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Base UI</a></li>
                                        <li class="breadcrumb-item active">Notifications</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Notifications</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">

                                    <h4 class="header-title">Bootstrap Toasts</h4>
                                    <p class="text-muted font-14">Push notifications to your visitors with a toast, a
                                        lightweight and easily customizable alert message.</p>

                                    <ul class="nav nav-tabs nav-bordered mb-3">
                                        <li class="nav-item">
                                            <a href="#bootstrap-toasts-preview" data-bs-toggle="tab"
                                                aria-expanded="false" class="nav-link active">
                                                Preview
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#bootstrap-toasts-code" data-bs-toggle="tab" aria-expanded="true"
                                                class="nav-link">
                                                Code
                                            </a>
                                        </li>
                                    </ul> <!-- end nav-->
                                    <div class="tab-content">
                                        <div class="tab-pane show active" id="bootstrap-toasts-preview">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <h5 class="mb-2">Basic</h5>
                                                    <p class="text-muted font-14">Toasts are as flexible as you need and
                                                        have very little required markup. At a minimum, we
                                                        require a single element to contain your “toasted” content and
                                                        strongly encourage a dismiss button.</p>
                                                    <div class="p-3">

                                                        <div class="toast fade show" role="alert" aria-live="assertive"
                                                            aria-atomic="true">
                                                            <div class="toast-header">
                                                                <img src="assets/images/logo_sm_dark.png"
                                                                    alt="brand-logo" height="12" class="me-1" />
                                                                <strong class="me-auto">Hyper</strong>
                                                                <small>11 mins ago</small>
                                                                <button type="button" class="ms-2 mb-1 btn-close"
                                                                    data-bs-dismiss="toast" aria-label="Close"></button>
                                                            </div>
                                                            <div class="toast-body">
                                                                Hello, world! This is a toast message.
                                                            </div>
                                                        </div>
                                                        <!--end toast-->

                                                    </div>
                                                </div> <!-- end col-->
                                                <div class="col-md-6">
                                                    <h5 class="mb-2">Translucent</h5>
                                                    <p class="text-muted font-14">Toasts are slightly translucent, too,
                                                        so they blend over whatever they might appear over.
                                                        For browsers that support the backdrop-filter CSS property,
                                                        we’ll also attempt to blur the elements under a toast.</p>

                                                    <div class="p-3 bg-light">
                                                        <div class="toast fade show" role="alert" aria-live="assertive"
                                                            aria-atomic="true">
                                                            <div class="toast-header">
                                                                <img src="assets/images/logo_sm_dark.png"
                                                                    alt="brand-logo" height="12" class="me-1" />
                                                                <strong class="me-auto">Hyper</strong>
                                                                <small>11 mins ago</small>
                                                                <button type="button" class="ms-2 mb-1 btn-close"
                                                                    data-bs-dismiss="toast" aria-label="Close"></button>
                                                            </div>
                                                            <div class="toast-body">
                                                                Hello, world! This is a toast message.
                                                            </div>
                                                        </div>
                                                        <!--end toast-->
                                                    </div>
                                                </div> <!-- end col-->
                                            </div>
                                            <!-- end row-->

                                            <div class="row">
                                                <div class="col-md-6 mt-4">
                                                    <h5 class="mb-2">Stacking</h5>
                                                    <p class="text-muted font-14">When you have multiple toasts, we
                                                        default to vertiaclly stacking them in a readable manner.</p>
                                                    <div class="p-3">
                                                        <div aria-live="polite" aria-atomic="true"
                                                            style="position: relative; min-height: 200px;">
                                                            <!-- Position it -->
                                                            <div class="toast-container"
                                                                style="position: absolute; top: 0; right: 0;">

                                                                <!-- Then put toasts within -->
                                                                <div class="toast fade show" role="alert"
                                                                    aria-live="assertive" aria-atomic="true">
                                                                    <div class="toast-header">
                                                                        <img src="assets/images/logo_sm_dark.png"
                                                                            alt="brand-logo" height="12" class="me-1" />
                                                                        <strong class="me-auto">Hyper</strong>
                                                                        <small class="text-muted">just now</small>
                                                                        <button type="button"
                                                                            class="ms-2 mb-1 btn-close"
                                                                            data-bs-dismiss="toast"
                                                                            aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="toast-body">
                                                                        See? Just like this.
                                                                    </div>
                                                                </div>
                                                                <!--end toast-->

                                                                <div class="toast fade show" role="alert"
                                                                    aria-live="assertive" aria-atomic="true">
                                                                    <div class="toast-header">
                                                                        <img src="assets/images/logo_sm_dark.png"
                                                                            alt="brand-logo" height="12" class="me-1" />
                                                                        <strong class="me-auto">Hyper</strong>
                                                                        <small class="text-muted">2 seconds ago</small>
                                                                        <button type="button"
                                                                            class="ms-2 mb-1 btn-close"
                                                                            data-bs-dismiss="toast"
                                                                            aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="toast-body">
                                                                        Heads up, toasts will stack automatically
                                                                    </div>
                                                                </div>
                                                                <!--end toast-->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> <!-- end col-->
                                                <div class="col-md-6 mt-4">
                                                    <h5 class="mb-2">Placement</h5>
                                                    <p class="text-muted font-14">Place toasts with custom CSS as you
                                                        need them. The top right is often used for
                                                        notifications, as is the top middle. If you’re only ever going
                                                        to show one toast at a time, put the positioning
                                                        styles right on the <code>.toast</code>.</p>
                                                    <div class="p-3">
                                                        <div aria-live="polite" aria-atomic="true"
                                                            class="d-flex justify-content-center align-items-center"
                                                            style="min-height: 200px;">

                                                            <!-- Then put toasts within -->
                                                            <div class="toast fade show" role="alert"
                                                                aria-live="assertive" aria-atomic="true"
                                                                data-bs-toggle="toast">
                                                                <div class="toast-header">
                                                                    <img src="assets/images/logo_sm_dark.png"
                                                                        alt="brand-logo" height="12" class="me-1" />
                                                                    <strong class="me-auto">Hyper</strong>
                                                                    <small>11 mins ago</small>
                                                                    <button type="button" class="ms-2 mb-1 btn-close"
                                                                        data-bs-dismiss="toast"
                                                                        aria-label="Close"></button>
                                                                </div>
                                                                <div class="toast-body">
                                                                    Hello, world! This is a toast message.
                                                                </div>
                                                            </div>
                                                            <!--end toast-->
                                                        </div>
                                                    </div>
                                                </div> <!-- end col-->
                                            </div>
                                            <!-- end row-->
                                        </div> <!-- end preview-->

                                        <div class="tab-pane" id="bootstrap-toasts-code">
                                            <pre class="mb-0">
                                                <span class="html escape">
                                                    &lt;!-- Basic Toast --&gt;
                                                    &lt;div class=&quot;toast fade show&quot; role=&quot;alert&quot; aria-live=&quot;assertive&quot; aria-atomic=&quot;true&quot;&gt;
                                                        &lt;div class=&quot;toast-header&quot;&gt;
                                                            &lt;img src=&quot;assets/images/logo_sm_dark.png&quot; alt=&quot;brand-logo&quot; height=&quot;12&quot; class=&quot;me-1&quot; /&gt;
                                                            &lt;strong class=&quot;me-auto&quot;&gt;Hyper&lt;/strong&gt;
                                                            &lt;small&gt;11 mins ago&lt;/small&gt;
                                                            &lt;button type=&quot;button&quot; class=&quot;ms-2 mb-1 btn-close&quot; data-bs-dismiss=&quot;toast&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
                                                        &lt;/div&gt;
                                                        &lt;div class=&quot;toast-body&quot;&gt;
                                                            Hello, world! This is a toast message.
                                                        &lt;/div&gt;
                                                    &lt;/div&gt; &lt;!--end toast--&gt;
                                                    
                                                    &lt;!-- Translucent Toast --&gt;
                                                    &lt;div class=&quot;toast fade show&quot; role=&quot;alert&quot; aria-live=&quot;assertive&quot; aria-atomic=&quot;true&quot;&gt;
                                                        &lt;div class=&quot;toast-header&quot;&gt;
                                                            &lt;img src=&quot;assets/images/logo_sm_dark.png&quot; alt=&quot;brand-logo&quot; height=&quot;12&quot; class=&quot;me-1&quot; /&gt;
                                                            &lt;strong class=&quot;me-auto&quot;&gt;Hyper&lt;/strong&gt;
                                                            &lt;small&gt;11 mins ago&lt;/small&gt;
                                                            &lt;button type=&quot;button&quot; class=&quot;ms-2 mb-1 btn-close&quot; data-bs-dismiss=&quot;toast&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
                                                        &lt;/div&gt;
                                                        &lt;div class=&quot;toast-body&quot;&gt;
                                                            Hello, world! This is a toast message.
                                                        &lt;/div&gt;
                                                    &lt;/div&gt; &lt;!--end toast--&gt;
                                                    
                                                    &lt;!-- Stacking Toast --&gt;
                                                    &lt;div aria-live=&quot;polite&quot; aria-atomic=&quot;true&quot; style=&quot;position: relative; min-height: 200px;&quot;&gt;
                                                        &lt;!-- Position it --&gt;
                                                        &lt;div class=&quot;toast-container&quot; style=&quot;position: absolute; top: 0; right: 0;&quot;&gt;
                                                        
                                                            &lt;!-- Then put toasts within --&gt;
                                                            &lt;div class=&quot;toast fade show&quot; role=&quot;alert&quot; aria-live=&quot;assertive&quot; aria-atomic=&quot;true&quot;&gt;
                                                                &lt;div class=&quot;toast-header&quot;&gt;
                                                                    &lt;img src=&quot;assets/images/logo_sm_dark.png&quot; alt=&quot;brand-logo&quot; height=&quot;12&quot; class=&quot;me-1&quot; /&gt;
                                                                    &lt;strong class=&quot;me-auto&quot;&gt;Hyper&lt;/strong&gt;
                                                                    &lt;small class=&quot;text-muted&quot;&gt;just now&lt;/small&gt;
                                                                    &lt;button type=&quot;button&quot; class=&quot;ms-2 mb-1 btn-close&quot; data-bs-dismiss=&quot;toast&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
                                                                &lt;/div&gt;
                                                                &lt;div class=&quot;toast-body&quot;&gt;
                                                                    See? Just like this.
                                                                &lt;/div&gt;
                                                            &lt;/div&gt; &lt;!--end toast--&gt;
                                                        
                                                            &lt;div class=&quot;toast fade show&quot; role=&quot;alert&quot; aria-live=&quot;assertive&quot; aria-atomic=&quot;true&quot;&gt;
                                                                &lt;div class=&quot;toast-header&quot;&gt;
                                                                    &lt;img src=&quot;assets/images/logo_sm_dark.png&quot; alt=&quot;brand-logo&quot; height=&quot;12&quot; class=&quot;me-1&quot; /&gt;
                                                                    &lt;strong class=&quot;me-auto&quot;&gt;Hyper&lt;/strong&gt;
                                                                    &lt;small class=&quot;text-muted&quot;&gt;2 seconds ago&lt;/small&gt;
                                                                    &lt;button type=&quot;button&quot; class=&quot;ms-2 mb-1 btn-close&quot; data-bs-dismiss=&quot;toast&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
                                                                &lt;/div&gt;
                                                                &lt;div class=&quot;toast-body&quot;&gt;
                                                                    Heads up, toasts will stack automatically
                                                                &lt;/div&gt;
                                                            &lt;/div&gt; &lt;!--end toast--&gt;
                                                        &lt;/div&gt;
                                                    &lt;/div&gt;
                                                    
                                                    &lt;!-- Placement Toast --&gt;
                                                    &lt;div aria-live=&quot;polite&quot; aria-atomic=&quot;true&quot; class=&quot;d-flex justify-content-center align-items-center&quot; style=&quot;min-height: 200px;&quot;&gt;
                                                        &lt;!-- Then put toasts within --&gt;
                                                        &lt;div class=&quot;toast fade show&quot; role=&quot;alert&quot; aria-live=&quot;assertive&quot; aria-atomic=&quot;true&quot;&gt;
                                                            &lt;div class=&quot;toast-header&quot;&gt;
                                                                &lt;img src=&quot;assets/images/logo_sm_dark.png&quot; alt=&quot;brand-logo&quot; height=&quot;12&quot; class=&quot;me-1&quot; /&gt;
                                                                &lt;strong class=&quot;me-auto&quot;&gt;Hyper&lt;/strong&gt;
                                                                &lt;small&gt;11 mins ago&lt;/small&gt;
                                                                &lt;button type=&quot;button&quot; class=&quot;ms-2 mb-1 btn-close&quot; data-bs-dismiss=&quot;toast&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
                                                            &lt;/div&gt;
                                                            &lt;div class=&quot;toast-body&quot;&gt;
                                                                Hello, world! This is a toast message.
                                                            &lt;/div&gt;
                                                        &lt;/div&gt; &lt;!--end toast--&gt;
                                                    &lt;/div&gt;
                                                </span>
                                            </pre> <!-- end highlight-->
                                        </div> <!-- end preview code-->
                                    </div> <!-- end tab-content-->
                                </div> <!-- end card-body-->
                            </div> <!-- end card-->
                        </div> <!-- end col-->
                    </div><!-- end row-->

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title">Custom content</h4>
                                    <p class="text-muted font-14">Alternatively, you can also add additional controls
                                        and components to toasts.</p>
                    
                                    <ul class="nav nav-tabs nav-bordered mb-3">
                                        <li class="nav-item">
                                            <a href="#custom-toast-preview" data-bs-toggle="tab" aria-expanded="false"
                                                class="nav-link active">
                                                Preview
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#custom-toast-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                                Code
                                            </a>
                                        </li>
                                    </ul> <!-- end nav-->
                                    <div class="tab-content">
                                        <div class="tab-pane show active" id="custom-toast-preview">
                                            <div class="toast show d-flex align-items-center mb-4" role="alert" aria-live="assertive"
                                                aria-atomic="true">
                                                <div class="toast-body">
                                                    Hello, world! This is a toast message.
                                                </div>
                                                <button type="button" class="btn-close ms-auto me-2" data-bs-dismiss="toast"
                                                    aria-label="Close"></button>
                                            </div>
                    
                                            <div class="toast show d-flex align-items-center text-white bg-primary border-0 mb-4"
                                                role="alert" aria-live="assertive" aria-atomic="true">
                                                <div class="toast-body">
                                                    Hello, world! This is a toast message.
                                                </div>
                                                <button type="button" class="btn-close btn-close-white ms-auto me-2" data-bs-dismiss="toast"
                                                    aria-label="Close"></button>
                                            </div>
                    
                                            <div class="toast show mb-4" role="alert" aria-live="assertive" aria-atomic="true">
                                                <div class="toast-body">
                                                    Hello, world! This is a toast message.
                                                    <div class="mt-2 pt-2 border-top">
                                                        <button type="button" class="btn btn-primary btn-sm">Take action</button>
                                                        <button type="button" class="btn btn-secondary btn-sm"
                                                            data-bs-dismiss="toast">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                    
                                            <div class="toast bg-primary show" role="alert" aria-live="assertive" aria-atomic="true">
                                                <div class="toast-body text-white">
                                                    Hello, world! This is a toast message.
                                                    <div class="mt-2 pt-2 border-top">
                                                        <button type="button" class="btn btn-light btn-sm">Take action</button>
                                                        <button type="button" class="btn btn-secondary btn-sm"
                                                            data-bs-dismiss="toast">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="custom-toast-code">
                                            <pre class="mb-0">
                                                <span class="html escape">
                                                    &lt;div class=&quot;toast show d-flex align-items-center&quot; role=&quot;alert&quot; aria-live=&quot;assertive&quot; aria-atomic=&quot;true&quot;&gt;
                                                        &lt;div class=&quot;toast-body&quot;&gt;
                                                            Hello, world! This is a toast message.
                                                        &lt;/div&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn-close ms-auto me-2&quot; data-bs-dismiss=&quot;toast&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
                                                    &lt;/div&gt;

                                                    &lt;div class=&quot;toast show d-flex align-items-center text-white bg-primary border-0&quot; role=&quot;alert&quot; aria-live=&quot;assertive&quot; aria-atomic=&quot;true&quot;&gt;
                                                        &lt;div class=&quot;toast-body&quot;&gt;
                                                            Hello, world! This is a toast message.
                                                        &lt;/div&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn-close btn-close-white ms-auto me-2&quot; data-bs-dismiss=&quot;toast&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
                                                    &lt;/div&gt;

                                                    &lt;div class=&quot;toast show&quot; role=&quot;alert&quot; aria-live=&quot;assertive&quot; aria-atomic=&quot;true&quot;&gt;
                                                        &lt;div class=&quot;toast-body&quot;&gt;
                                                            Hello, world! This is a toast message.
                                                            &lt;div class=&quot;mt-2 pt-2 border-top&quot;&gt;
                                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-primary btn-sm&quot;&gt;Take action&lt;/button&gt;
                                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary btn-sm&quot; data-bs-dismiss=&quot;toast&quot;&gt;Close&lt;/button&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                    &lt;/div&gt;

                                                    &lt;div class=&quot;toast bg-primary show&quot; role=&quot;alert&quot; aria-live=&quot;assertive&quot; aria-atomic=&quot;true&quot;&gt;
                                                        &lt;div class=&quot;toast-body text-white&quot;&gt;
                                                            Hello, world! This is a toast message.
                                                            &lt;div class=&quot;mt-2 pt-2 border-top&quot;&gt;
                                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-light btn-sm&quot;&gt;Take action&lt;/button&gt;
                                                                &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary btn-sm&quot; data-bs-dismiss=&quot;toast&quot;&gt;Close&lt;/button&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                    &lt;/div&gt;
                                                </span>
                                            </pre> <!-- end highlight-->
                                        </div> <!-- end preview code-->
                                    </div> <!-- end tab-content-->
                                </div> <!-- end card-body-->
                            </div> <!-- end card-->
                        </div> <!-- end col-->
                    
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title">Placement</h4>
                                    <p class="text-muted font-14">Place toasts with custom CSS as you need them. The top
                                        right is often used for notifications, as is the top middle. If you’re only ever
                                        going to show one toast at a time, put the positioning styles right on the
                                        <code>.toast</code>.
                                    </p>
                    
                                    <ul class="nav nav-tabs nav-bordered mb-3">
                                        <li class="nav-item">
                                            <a href="#placement-toast-preview" data-bs-toggle="tab" aria-expanded="false"
                                                class="nav-link active">
                                                Preview
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#placement-toast-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                                Code
                                            </a>
                                        </li>
                                    </ul> <!-- end nav-->
                    
                                    <div class="tab-content">
                                        <div class="tab-pane show active" id="placement-toast-preview">
                                            <form>
                                                <div class="mb-3">
                                                    <label for="selectToastPlacement">Toast placement</label>
                                                    <select class="form-select mt-2" id="selectToastPlacement">
                                                        <option value="" selected>Select a position...</option>
                                                        <option value="top-0 start-0">Top left</option>
                                                        <option value="top-0 start-50 translate-middle-x">Top center</option>
                                                        <option value="top-0 end-0">Top right</option>
                                                        <option value="top-50 start-0 translate-middle-y">Middle left</option>
                                                        <option value="top-50 start-50 translate-middle">Middle center</option>
                                                        <option value="top-50 end-0 translate-middle-y">Middle right</option>
                                                        <option value="bottom-0 start-0">Bottom left</option>
                                                        <option value="bottom-0 start-50 translate-middle-x">Bottom center</option>
                                                        <option value="bottom-0 end-0">Bottom right</option>
                                                    </select>
                                                </div>
                                            </form>
                                            <div aria-live="polite" aria-atomic="true" class="bg-light position-relative bd-example-toasts"
                                                style="min-height:294px">
                                                <div class="toast-container position-absolute p-3" id="toastPlacement">
                                                    <div class="toast show">
                                                        <div class="toast-header">
                                                            <img src="assets/images/logo_sm_dark.png" alt="brand-logo" height="12"
                                                                class="me-1" />
                                                            <strong class="me-auto">Hyper</strong>
                                                            <small>11 mins ago</small>
                                                        </div>
                                                        <div class="toast-body">
                                                            Hello, world! This is a toast message.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="placement-toast-code">
                                            <pre class="mb-0">
                                                <span class="html escape">
                                                    &lt;form&gt;
                                                        &lt;div class=&quot;mb-3&quot;&gt;
                                                            &lt;label for=&quot;selectToastPlacement&quot;&gt;Toast placement&lt;/label&gt;
                                                            &lt;select class=&quot;form-select mt-2&quot; id=&quot;selectToastPlacement&quot;&gt;
                                                                &lt;option value=&quot;&quot; selected&gt;Select a position...&lt;/option&gt;
                                                                &lt;option value=&quot;top-0 start-0&quot;&gt;Top left&lt;/option&gt;
                                                                &lt;option value=&quot;top-0 start-50 translate-middle-x&quot;&gt;Top center&lt;/option&gt;
                                                                &lt;option value=&quot;top-0 end-0&quot;&gt;Top right&lt;/option&gt;
                                                                &lt;option value=&quot;top-50 start-0 translate-middle-y&quot;&gt;Middle left&lt;/option&gt;
                                                                &lt;option value=&quot;top-50 start-50 translate-middle&quot;&gt;Middle center&lt;/option&gt;
                                                                &lt;option value=&quot;top-50 end-0 translate-middle-y&quot;&gt;Middle right&lt;/option&gt;
                                                                &lt;option value=&quot;bottom-0 start-0&quot;&gt;Bottom left&lt;/option&gt;
                                                                &lt;option value=&quot;bottom-0 start-50 translate-middle-x&quot;&gt;Bottom center&lt;/option&gt;
                                                                &lt;option value=&quot;bottom-0 end-0&quot;&gt;Bottom right&lt;/option&gt;
                                                            &lt;/select&gt;
                                                        &lt;/div&gt;
                                                    &lt;/form&gt;
                                                    &lt;div aria-live=&quot;polite&quot; aria-atomic=&quot;true&quot; class=&quot;bg-light position-relative bd-example-toasts&quot; style=&quot;min-height:294px&quot;&gt;
                                                        &lt;div class=&quot;toast-container position-absolute p-3&quot; id=&quot;toastPlacement&quot;&gt;
                                                            &lt;div class=&quot;toast show&quot;&gt;
                                                                &lt;div class=&quot;toast-header&quot;&gt;
                                                                    &lt;img src=&quot;assets/images/logo_sm_dark.png&quot; alt=&quot;brand-logo&quot; height=&quot;12&quot; class=&quot;me-1&quot; /&gt;
                                                                    &lt;strong class=&quot;me-auto&quot;&gt;Hyper&lt;/strong&gt;
                                                                    &lt;small&gt;11 mins ago&lt;/small&gt;
                                                                &lt;/div&gt;
                                                                &lt;div class=&quot;toast-body&quot;&gt;
                                                                    Hello, world! This is a toast message.
                                                                &lt;/div&gt;
                                                            &lt;/div&gt;
                                                        &lt;/div&gt;
                                                    &lt;/div&gt;
                                                </span>
                                            </pre> <!-- end highlight-->
                                        </div> <!-- end preview code-->
                                    </div> <!-- end tab-content-->
                                </div> <!-- end card-body-->
                            </div> <!-- end card-->
                        </div> <!-- end col-->
                    </div><!-- end row-->


                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">

                                    <h4 class="header-title">Jquery Toast</h4>
                                    <p class="text-muted font-14">Toasts based notifications can be used to to show
                                        important alerts or information to users.</p>

                                    <ul class="nav nav-tabs nav-bordered mb-3">
                                        <li class="nav-item">
                                            <a href="#jquery-toast-preview" data-bs-toggle="tab"
                                                aria-expanded="false" class="nav-link active">
                                                Preview
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#jquery-toast-code" data-bs-toggle="tab" aria-expanded="true"
                                                class="nav-link">
                                                Code
                                            </a>
                                        </li>
                                    </ul> <!-- end nav-->
                                    <div class="tab-content">
                                        <div class="tab-pane show active" id="jquery-toast-preview">
                                            <div class="row">
                                                <div class="col-md-3 col-sm-6">
                                                    <div class="text-center p-1 pb-3 p-sm-3">
                                                        <p>Info Example</p>
                                                        <button type="button" class="btn btn-info btn-sm"
                                                            id="toastr-one">Click me</button>
                                                    </div>
                                                </div> <!-- end col-->
                                                <div class="col-md-3 col-sm-6">
                                                    <div class="text-center p-1 pb-3 p-sm-3">
                                                        <p>Warning Example</p>
                                                        <button type="button" class="btn btn-warning btn-sm"
                                                            id="toastr-two">Click me</button>
                                                    </div>
                                                </div> <!-- end col-->
                                                <div class="col-md-3 col-sm-6">
                                                    <div class="text-center p-1 pb-3 p-sm-3">
                                                        <p>Success Example</p>
                                                        <button type="button" class="btn btn-success btn-sm"
                                                            id="toastr-three">Click me</button>
                                                    </div>
                                                </div> <!-- end col-->
                                                <div class="col-md-3 col-sm-6">
                                                    <div class="text-center p-1 pb-3 p-sm-3">
                                                        <p>Danger Example</p>
                                                        <button type="button" class="btn btn-danger btn-sm"
                                                            id="toastr-four">Click me</button>
                                                    </div>
                                                </div> <!-- end col-->
                                            </div>
                                            <!-- end row-->

                                            <div class="row">
                                                <div class="col-md-3 col-sm-6">
                                                    <div class="text-center p-1 pb-3 p-sm-3">
                                                        <p>The text can be an array</p>
                                                        <button type="button" class="btn btn-light btn-sm"
                                                            id="toastr-five">Click me</button>
                                                    </div>
                                                </div> <!-- end col-->
                                                <div class="col-md-3 col-sm-6">
                                                    <div class="text-center p-1 pb-3 p-sm-3">
                                                        <p>Put some HTML in the text</p>
                                                        <button type="button" class="btn btn-light btn-sm"
                                                            id="toastr-six">Click me</button>
                                                    </div>
                                                </div> <!-- end col-->
                                                <div class="col-md-3 col-sm-6">
                                                    <div class="text-center p-1 pb-3 p-sm-3">
                                                        <p>Making them sticky</p>
                                                        <button type="button" class="btn btn-light btn-sm"
                                                            id="toastr-seven">Click me</button>
                                                    </div>
                                                </div> <!-- end col-->
                                                <div class="col-md-3 col-sm-6">
                                                    <div class="text-center p-1 pb-3 p-sm-3">
                                                        <p>Fade transitions</p>
                                                        <button type="button" class="btn btn-light btn-sm"
                                                            id="toastr-eight">Click me</button>
                                                    </div>
                                                </div> <!-- end col-->
                                            </div>
                                            <!-- end row-->
                                        </div> <!-- end preview-->

                                        <div class="tab-pane" id="jquery-toast-code">
                                            <div class="pt-1">
                                                <h5 class="mb-1">How to customize the style of toast?</h5>
                                                <p class="font-13 text-muted">Open file
                                                    <code>src/scss/custom/plugins/_toaster.scss</code> and
                                                    change the different style to change the background, text or
                                                    other
                                                    colors.</p>
                                            </div>
                                            <pre class="mb-0">
                                                <span class="html escape">
                                                    &lt;script&gt;$.NotificationApp.send(&quot;Title&quot;,&quot;Your awesome message text&quot;,&quot;Position&quot;,&quot;Background color&quot;,&quot;Icon&quot;)&lt;/script&gt;
                                                </span>
                                            </pre> <!-- end highlight-->

                                            <p class="mt-2">Following positions for toast are supported at the
                                                moment:</p>
                                            <ul>
                                                <li>
                                                    <code>bottom-left</code> to show the toast at bottom left
                                                    position
                                                </li>
                                                <li>
                                                    <code>bottom-right</code> to show the toast at bottom right
                                                    position
                                                </li>
                                                <li>
                                                    <code>bottom-center</code> to show the toast at bottom center
                                                    position
                                                </li>
                                                <li>
                                                    <code>top-right</code> to show the toast at top right position
                                                </li>
                                                <li>
                                                    <code>top-left</code> to show the toast at top left position
                                                </li>
                                                <li>
                                                    <code>top-center</code> to show the toast at top center position
                                                </li>
                                                <li>
                                                    <code>mid-center</code> to show the toast at middle position
                                                </li>
                                            </ul>

                                            <p>For more options, please refer to official documentation <a
                                                    href="../../../external.html?link=https://kamranahmed.info/toast" target="_blank">here</a>
                                            </p>

                                        </div> <!-- end preview code-->
                                    </div> <!-- end tab-content-->

                                </div> <!-- end card-body-->
                            </div> <!-- end card-->
                        </div> <!-- end col-->
                    </div>
                    <!-- end row-->

                    </div> <!-- container -->

                </div> <!-- content -->

                <!-- Footer Start -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                <script>document.write(new Date().getFullYear())</script> © Hyper - Coderthemes.com
                            </div>
                            <div class="col-md-6">
                                <div class="text-md-end footer-links d-none d-md-block">
                                    <a href="javascript: void(0);">About</a>
                                    <a href="javascript: void(0);">Support</a>
                                    <a href="javascript: void(0);">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->


        <!-- Right Sidebar -->
        <div class="end-bar">

            <div class="rightbar-title">
                <a href="javascript:void(0);" class="end-bar-toggle float-end">
                    <i class="dripicons-cross noti-icon"></i>
                </a>
                <h5 class="m-0">Settings</h5>
            </div>

            <div class="rightbar-content h-100" data-simplebar>

                <div class="p-3">
                    <div class="alert alert-warning" role="alert">
                        <strong>Customize </strong> the overall color scheme, sidebar menu, etc.
                    </div>

                    <!-- Settings -->
                    <h5 class="mt-3">Color Scheme</h5>
                    <hr class="mt-1" />

                    <div class="form-check form-switch mb-1">
                        <input class="form-check-input" type="checkbox" name="color-scheme-mode" value="light" id="light-mode-check" checked>
                        <label class="form-check-label" for="light-mode-check">Light Mode</label>
                    </div>

                    <div class="form-check form-switch mb-1">
                        <input class="form-check-input" type="checkbox" name="color-scheme-mode" value="dark" id="dark-mode-check">
                        <label class="form-check-label" for="dark-mode-check">Dark Mode</label>
                    </div>
       

                    <!-- Width -->
                    <h5 class="mt-4">Width</h5>
                    <hr class="mt-1" />
                    <div class="form-check form-switch mb-1">
                        <input class="form-check-input" type="checkbox" name="width" value="fluid" id="fluid-check" checked>
                        <label class="form-check-label" for="fluid-check">Fluid</label>
                    </div>

                    <div class="form-check form-switch mb-1">
                        <input class="form-check-input" type="checkbox" name="width" value="boxed" id="boxed-check">
                        <label class="form-check-label" for="boxed-check">Boxed</label>
                    </div>
        

                    <!-- Left Sidebar-->
                    <h5 class="mt-4">Left Sidebar</h5>
                    <hr class="mt-1" />
                    <div class="form-check form-switch mb-1">
                        <input class="form-check-input" type="checkbox" name="theme" value="default" id="default-check">
                        <label class="form-check-label" for="default-check">Default</label>
                    </div>

                    <div class="form-check form-switch mb-1">
                        <input class="form-check-input" type="checkbox" name="theme" value="light" id="light-check" checked>
                        <label class="form-check-label" for="light-check">Light</label>
                    </div>

                    <div class="form-check form-switch mb-3">
                        <input class="form-check-input" type="checkbox" name="theme" value="dark" id="dark-check">
                        <label class="form-check-label" for="dark-check">Dark</label>
                    </div>

                    <div class="form-check form-switch mb-1">
                        <input class="form-check-input" type="checkbox" name="compact" value="fixed" id="fixed-check" checked>
                        <label class="form-check-label" for="fixed-check">Fixed</label>
                    </div>

                    <div class="form-check form-switch mb-1">
                        <input class="form-check-input" type="checkbox" name="compact" value="condensed" id="condensed-check">
                        <label class="form-check-label" for="condensed-check">Condensed</label>
                    </div>

                    <div class="form-check form-switch mb-1">
                        <input class="form-check-input" type="checkbox" name="compact" value="scrollable" id="scrollable-check">
                        <label class="form-check-label" for="scrollable-check">Scrollable</label>
                    </div>

                    <div class="d-grid mt-4">
                        <button class="btn btn-primary" id="resetBtn">Reset to Default</button>
            
                        <a href="../../../external.html?link=https://themes.getbootstrap.com/product/hyper-responsive-admin-dashboard-template/"
                            class="btn btn-danger mt-3" target="_blank"><i class="mdi mdi-basket me-1"></i> Purchase Now</a>
                    </div>
                </div> <!-- end padding-->

            </div>
        </div>

        <div class="rightbar-overlay"></div>
        <!-- /End-bar -->


        <!-- bundle -->
        <script src="assets/js/vendor.min.js"></script>
        <script src="assets/js/app.min.js"></script>

        <!-- demo js -->
        <script src="assets/js/pages/demo.toastr.js"></script>
        <!-- -->

</body>


<!-- Mirrored from coderthemes.com/hyper_2/saas/ui-notifications.html by HTTrack Website Copier/3.x [XR&CO'2017], Sun, 19 Dec 2021 00:32:11 GMT -->
</html>