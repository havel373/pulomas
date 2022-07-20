<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from coderthemes.com/hyper_2/saas/ui-modals.html by HTTrack Website Copier/3.x [XR&CO'2017], Sun, 19 Dec 2021 00:32:11 GMT -->
<head>
        <meta charset="utf-8" />
        <title>Modals | Hyper - Responsive Bootstrap 5 Admin Dashboard</title>
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

    <body class="loading" data-layout-config='{"leftSideBarTheme":"dark","layoutBoxed":false, "leftSidebarCondensed":false, "leftSidebarScrollable":false,"darkMode":false, "showRightSidebarOnStart": true}'>
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
                                            <li class="breadcrumb-item active">Modals</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Modals</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Bootstrap Modals</h4>

                                        <p class="text-muted font-14">
                                            A rendered modal with header, body, and set of actions in the footer.
                                        </p>

                                        <ul class="nav nav-tabs nav-bordered mb-3">
                                            <li class="nav-item">
                                                <a href="#bs-modals-preview" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                                    Preview
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#bs-modals-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                                    Code
                                                </a>
                                            </li>
                                        </ul> <!-- end nav-->
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="bs-modals-preview">

                                                <!-- Standard modal content -->
                                                <div id="standard-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="standard-modalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title" id="standard-modalLabel">Modal Heading</h4>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <h6>Text in a modal</h6>
                                                                <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
                                                                <hr>
                                                                <h6>Overflowing text to show scroll behavior</h6>
                                                                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                                                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                                                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                                                <button type="button" class="btn btn-primary">Save changes</button>
                                                            </div>
                                                        </div><!-- /.modal-content -->
                                                    </div><!-- /.modal-dialog -->
                                                </div><!-- /.modal -->
            
                                                <!--  Modal content for the Large example -->
                                                <div class="modal fade" id="bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title" id="myLargeModalLabel">Large modal</h4>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                ...
                                                            </div>
                                                        </div><!-- /.modal-content -->
                                                    </div><!-- /.modal-dialog -->
                                                </div><!-- /.modal -->
            
                                                <div class="modal fade" id="bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-sm">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title" id="mySmallModalLabel">Small modal</h4>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                ...
                                                            </div>
                                                        </div><!-- /.modal-content -->
                                                    </div><!-- /.modal-dialog -->
                                                </div><!-- /.modal -->
        
                                                <!-- Full width modal content -->
                                                <div id="full-width-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="fullWidthModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-full-width">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title" id="fullWidthModalLabel">Modal Heading</h4>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <h6>Text in a modal</h6>
                                                                <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
                                                                <hr>
                                                                <h6>Overflowing text to show scroll behavior</h6>
                                                                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                                                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                                                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                                                <button type="button" class="btn btn-primary">Save changes</button>
                                                            </div>
                                                        </div><!-- /.modal-content -->
                                                    </div><!-- /.modal-dialog -->
                                                </div><!-- /.modal -->
        
                                                <!-- Long Content Scroll Modal -->
                                                <div class="modal fade" id="scrollable-modal" tabindex="-1" role="dialog"
                                                    aria-labelledby="scrollableModalTitle" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-scrollable" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="scrollableModalTitle">Modal title</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas
                                                                    eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                                                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue
                                                                    laoreet rutrum faucibus dolor auctor.</p>
                                                                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl
                                                                    consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                                                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas
                                                                    eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                                                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue
                                                                    laoreet rutrum faucibus dolor auctor.</p>
                                                                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl
                                                                    consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                                                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas
                                                                    eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                                                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue
                                                                    laoreet rutrum faucibus dolor auctor.</p>
                                                                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl
                                                                    consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                                                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas
                                                                    eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                                                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue
                                                                    laoreet rutrum faucibus dolor auctor.</p>
                                                                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl
                                                                    consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                                                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas
                                                                    eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                                                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue
                                                                    laoreet rutrum faucibus dolor auctor.</p>
                                                                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl
                                                                    consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                                                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas
                                                                    eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                                                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue
                                                                    laoreet rutrum faucibus dolor auctor.</p>
                                                                <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl
                                                                    consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                <button type="button" class="btn btn-primary">Save changes</button>
                                                            </div>
                                                        </div><!-- /.modal-content -->
                                                    </div><!-- /.modal-dialog -->
                                                </div><!-- /.modal -->  
                                                
                                                <div class="button-list">
                                                    <!-- Standard  modal -->
                                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#standard-modal">Standard Modal</button>
                                                    <!-- Large modal -->
                                                    <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#bs-example-modal-lg">Large Modal</button>
                                                    <!-- Small modal -->
                                                    <button  type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#bs-example-modal-sm">Small Modal</button>
                                                    <!-- Full width modal -->
                                                    <button  type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#full-width-modal">Full width Modal</button>
                                                    <!-- Scrollable modal -->
                                                    <button  type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#scrollable-modal">Scrollable Modal</button>
                                                </div>

                                            </div> <!-- end preview-->
                                        
                                            <div class="tab-pane" id="bs-modals-code">
                                                <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;!-- Standard modal --&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot; data-bs-toggle=&quot;modal&quot; data-bs-target=&quot;#standard-modal&quot;&gt;Standard Modal&lt;/button&gt;
                                                        &lt;div id=&quot;standard-modal&quot; class=&quot;modal fade&quot; tabindex=&quot;-1&quot; role=&quot;dialog&quot; aria-labelledby=&quot;standard-modalLabel&quot; aria-hidden=&quot;true&quot;&gt;
                                                            &lt;div class=&quot;modal-dialog&quot;&gt;
                                                                &lt;div class=&quot;modal-content&quot;&gt;
                                                                    &lt;div class=&quot;modal-header&quot;&gt;
                                                                        &lt;h4 class=&quot;modal-title&quot; id=&quot;standard-modalLabel&quot;&gt;Modal Heading&lt;/h4&gt;
                                                                        &lt;button type=&quot;button&quot; class=&quot;btn-close&quot; data-bs-dismiss=&quot;modal&quot; aria-hidden=&quot;true&quot;&gt;&lt;/button&gt;
                                                                    &lt;/div&gt;
                                                                    &lt;div class=&quot;modal-body&quot;&gt;
                                                                        ...
                                                                    &lt;/div&gt;
                                                                    &lt;div class=&quot;modal-footer&quot;&gt;
                                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-light&quot; data-bs-dismiss=&quot;modal&quot;&gt;Close&lt;/button&gt;
                                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;Save changes&lt;/button&gt;
                                                                    &lt;/div&gt;
                                                                &lt;/div&gt;&lt;!-- /.modal-content --&gt;
                                                            &lt;/div&gt;&lt;!-- /.modal-dialog --&gt;
                                                        &lt;/div&gt;&lt;!-- /.modal --&gt;
                                                        
                                                        &lt;!-- Large modal --&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-info&quot; data-bs-toggle=&quot;modal&quot; data-bs-target=&quot;#bs-example-modal-lg&quot;&gt;Large Modal&lt;/button&gt;
                                                        &lt;div class=&quot;modal fade&quot; id=&quot;bs-example-modal-lg&quot; tabindex=&quot;-1&quot; role=&quot;dialog&quot; aria-labelledby=&quot;myLargeModalLabel&quot; aria-hidden=&quot;true&quot;&gt;
                                                            &lt;div class=&quot;modal-dialog modal-lg&quot;&gt;
                                                                &lt;div class=&quot;modal-content&quot;&gt;
                                                                    &lt;div class=&quot;modal-header&quot;&gt;
                                                                        &lt;h4 class=&quot;modal-title&quot; id=&quot;myLargeModalLabel&quot;&gt;Large modal&lt;/h4&gt;
                                                                        &lt;button type=&quot;button&quot; class=&quot;btn-close&quot; data-bs-dismiss=&quot;modal&quot; aria-hidden=&quot;true&quot;&gt;&lt;/button&gt;
                                                                    &lt;/div&gt;
                                                                    &lt;div class=&quot;modal-body&quot;&gt;
                                                                        ...
                                                                    &lt;/div&gt;
                                                                &lt;/div&gt;&lt;!-- /.modal-content --&gt;
                                                            &lt;/div&gt;&lt;!-- /.modal-dialog --&gt;
                                                        &lt;/div&gt;&lt;!-- /.modal --&gt;
                                                        
                                                        &lt;!-- Small modal --&gt;
                                                        &lt;button  type=&quot;button&quot; class=&quot;btn btn-success&quot; data-bs-toggle=&quot;modal&quot; data-bs-target=&quot;#bs-example-modal-sm&quot;&gt;Small Modal&lt;/button&gt;
                                                        &lt;div class=&quot;modal fade&quot; id=&quot;bs-example-modal-sm&quot; tabindex=&quot;-1&quot; role=&quot;dialog&quot; aria-labelledby=&quot;mySmallModalLabel&quot; aria-hidden=&quot;true&quot;&gt;
                                                            &lt;div class=&quot;modal-dialog modal-sm&quot;&gt;
                                                                &lt;div class=&quot;modal-content&quot;&gt;
                                                                    &lt;div class=&quot;modal-header&quot;&gt;
                                                                        &lt;h4 class=&quot;modal-title&quot; id=&quot;mySmallModalLabel&quot;&gt;Small modal&lt;/h4&gt;
                                                                        &lt;button type=&quot;button&quot; class=&quot;btn-close&quot; data-bs-dismiss=&quot;modal&quot; aria-hidden=&quot;true&quot;&gt;&lt;/button&gt;
                                                                    &lt;/div&gt;
                                                                    &lt;div class=&quot;modal-body&quot;&gt;
                                                                        ...
                                                                    &lt;/div&gt;
                                                                &lt;/div&gt;&lt;!-- /.modal-content --&gt;
                                                            &lt;/div&gt;&lt;!-- /.modal-dialog --&gt;
                                                        &lt;/div&gt;&lt;!-- /.modal --&gt;
                                                        
                                                        &lt;!-- Full width modal --&gt;
                                                        &lt;button  type=&quot;button&quot; class=&quot;btn btn-primary&quot; data-bs-toggle=&quot;modal&quot; data-bs-target=&quot;#full-width-modal&quot;&gt;Full width Modal&lt;/button&gt;
                                                        &lt;div id=&quot;full-width-modal&quot; class=&quot;modal fade&quot; tabindex=&quot;-1&quot; role=&quot;dialog&quot; aria-labelledby=&quot;fullWidthModalLabel&quot; aria-hidden=&quot;true&quot;&gt;
                                                            &lt;div class=&quot;modal-dialog modal-full-width&quot;&gt;
                                                                &lt;div class=&quot;modal-content&quot;&gt;
                                                                    &lt;div class=&quot;modal-header&quot;&gt;
                                                                        &lt;h4 class=&quot;modal-title&quot; id=&quot;fullWidthModalLabel&quot;&gt;Modal Heading&lt;/h4&gt;
                                                                        &lt;button type=&quot;button&quot; class=&quot;btn-close&quot; data-bs-dismiss=&quot;modal&quot; aria-hidden=&quot;true&quot;&gt;&lt;/button&gt;
                                                                    &lt;/div&gt;
                                                                    &lt;div class=&quot;modal-body&quot;&gt;
                                                                        ...
                                                                    &lt;/div&gt;
                                                                    &lt;div class=&quot;modal-footer&quot;&gt;
                                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-light&quot; data-bs-dismiss=&quot;modal&quot;&gt;Close&lt;/button&gt;
                                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;Save changes&lt;/button&gt;
                                                                    &lt;/div&gt;
                                                                &lt;/div&gt;&lt;!-- /.modal-content --&gt;
                                                            &lt;/div&gt;&lt;!-- /.modal-dialog --&gt;
                                                        &lt;/div&gt;&lt;!-- /.modal --&gt;
                                                        
                                                        &lt;!-- Scrollable modal --&gt;
                                                        &lt;button  type=&quot;button&quot; class=&quot;btn btn-secondary&quot; data-bs-toggle=&quot;modal&quot; data-bs-target=&quot;#scrollable-modal&quot;&gt;Scrollable Modal&lt;/button&gt;
                                                        &lt;div class=&quot;modal fade&quot; id=&quot;scrollable-modal&quot; tabindex=&quot;-1&quot; role=&quot;dialog&quot; aria-labelledby=&quot;scrollableModalTitle&quot; aria-hidden=&quot;true&quot;&gt;
                                                            &lt;div class=&quot;modal-dialog modal-dialog-scrollable&quot; role=&quot;document&quot;&gt;
                                                                &lt;div class=&quot;modal-content&quot;&gt;
                                                                    &lt;div class=&quot;modal-header&quot;&gt;
                                                                        &lt;h5 class=&quot;modal-title&quot; id=&quot;scrollableModalTitle&quot;&gt;Modal title&lt;/h5&gt;
                                                                        &lt;button type=&quot;button&quot; class=&quot;btn-close&quot; data-bs-dismiss=&quot;modal&quot; aria-hidden=&quot;true&quot;&gt;&lt;/button&gt;
                                                                    &lt;/div&gt;
                                                                    &lt;div class=&quot;modal-body&quot;&gt;
                                                                        ...
                                                                    &lt;/div&gt;
                                                                    &lt;div class=&quot;modal-footer&quot;&gt;
                                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot; data-bs-dismiss=&quot;modal&quot;&gt;Close&lt;/button&gt;
                                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;Save changes&lt;/button&gt;
                                                                    &lt;/div&gt;
                                                                &lt;/div&gt;&lt;!-- /.modal-content --&gt;
                                                            &lt;/div&gt;&lt;!-- /.modal-dialog --&gt;
                                                        &lt;/div&gt;&lt;!-- /.modal --&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->
                                            </div> <!-- end preview code-->
                                        </div> <!-- end tab-content-->
                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->
                            </div> <!-- end col -->

                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Modal with Pages</h4>
                                        <p class="text-muted font-14">Examples of custom modals.</p>

                                        <ul class="nav nav-tabs nav-bordered mb-3">
                                            <li class="nav-item">
                                                <a href="#modal-pages-preview" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                                    Preview
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#modal-pages-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                                    Code
                                                </a>
                                            </li>
                                        </ul> <!-- end nav-->
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="modal-pages-preview">
                                                <!-- Signup modal content -->
                                                <div id="signup-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
            
                                                            <div class="modal-body">
                                                                <div class="text-center mt-2 mb-4">
                                                                    <a href="index.html" class="text-success">
                                                                        <span><img src="assets/images/logo-dark.png" alt="" height="18"></span>
                                                                    </a>
                                                                </div>
            
                                                                <form class="ps-3 pe-3" action="#">
            
                                                                    <div class="mb-3">
                                                                        <label for="username" class="form-label">Name</label>
                                                                        <input class="form-control" type="email" id="username" required="" placeholder="Michael Zenaty">
                                                                    </div>
            
                                                                    <div class="mb-3">
                                                                        <label for="emailaddress" class="form-label">Email address</label>
                                                                        <input class="form-control" type="email" id="emailaddress" required="" placeholder="john@deo.com">
                                                                    </div>
            
                                                                    <div class="mb-3">
                                                                        <label for="password" class="form-label">Password</label>
                                                                        <input class="form-control" type="password" required="" id="password" placeholder="Enter your password">
                                                                    </div>
            
                                                                    <div class="mb-3">
                                                                        <div class="form-check">
                                                                            <input type="checkbox" class="form-check-input" id="customCheck1">
                                                                            <label class="form-check-label" for="customCheck1">I accept <a href="#">Terms and Conditions</a></label>
                                                                        </div> 
                                                                    </div>
            
                                                                    <div class="mb-3 text-center">
                                                                        <button class="btn btn-primary" type="submit">Sign Up Free</button>
                                                                    </div>
            
                                                                </form>
            
                                                            </div>
                                                        </div><!-- /.modal-content -->
                                                    </div><!-- /.modal-dialog -->
                                                </div><!-- /.modal -->
            
            
                                                <!-- SignIn modal content -->
                                                <div id="login-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-body">
                                                                <div class="text-center mt-2 mb-4">
                                                                    <a href="index.html" class="text-success">
                                                                        <span><img src="assets/images/logo-dark.png" alt="" height="18"></span>
                                                                    </a>
                                                                </div>
            
                                                                <form action="#" class="ps-3 pe-3">
                                                                    <div class="mb-3">
                                                                        <label for="emailaddress1" class="form-label">Email address</label>
                                                                        <input class="form-control" type="email" id="emailaddress1" required="" placeholder="john@deo.com">
                                                                    </div>
            
                                                                    <div class="mb-3">
                                                                        <label for="password1" class="form-label">Password</label>
                                                                        <input class="form-control" type="password" required="" id="password1" placeholder="Enter your password">
                                                                    </div>
            
                                                                    <div class="mb-3">
                                                                        <div class="form-check">
                                                                            <input type="checkbox" class="form-check-input" id="customCheck2">
                                                                            <label class="form-check-label" for="customCheck2">Remember me</label>
                                                                        </div>
                                                                    </div>
            
                                                                    <div class="mb-3 text-center">
                                                                        <button class="btn rounded-pill btn-primary" type="submit">Sign In</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div><!-- /.modal-content -->
                                                    </div><!-- /.modal-dialog -->
                                                </div><!-- /.modal -->
            
                                                <div class="button-list">
                                                    <!-- Sign Up modal -->
                                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#signup-modal">Sign Up Modal</button>
                                                    <!-- Log In modal -->
                                                    <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#login-modal">Log In Modal</button>
                                                </div>                                       
                                            </div> <!-- end preview-->
                                        
                                            <div class="tab-pane" id="modal-pages-code">
                                                <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;!-- Signup modal--&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot; data-bs-toggle=&quot;modal&quot; data-bs-target=&quot;#signup-modal&quot;&gt;Sign Up Modal&lt;/button&gt;
                                                        &lt;div id=&quot;signup-modal&quot; class=&quot;modal fade&quot; tabindex=&quot;-1&quot; role=&quot;dialog&quot; aria-hidden=&quot;true&quot;&gt;
                                                            &lt;div class=&quot;modal-dialog&quot;&gt;
                                                                &lt;div class=&quot;modal-content&quot;&gt;
                                                        
                                                                    &lt;div class=&quot;modal-body&quot;&gt;
                                                                        &lt;div class=&quot;text-center mt-2 mb-4&quot;&gt;
                                                                            &lt;a href=&quot;index.html&quot; class=&quot;text-success&quot;&gt;
                                                                                &lt;span&gt;&lt;img src=&quot;assets/images/logo-dark.png&quot; alt=&quot;&quot; height=&quot;18&quot;&gt;&lt;/span&gt;
                                                                            &lt;/a&gt;
                                                                        &lt;/div&gt;
                                                        
                                                                        &lt;form class=&quot;ps-3 pe-3&quot; action=&quot;#&quot;&gt;
                                                        
                                                                            &lt;div class=&quot;mb-3&quot;&gt;
                                                                                &lt;label for=&quot;username&quot; class=&quot;form-label&quot;&gt;Name&lt;/label&gt;
                                                                                &lt;input class=&quot;form-control&quot; type=&quot;email&quot; id=&quot;username&quot; required=&quot;&quot; placeholder=&quot;Michael Zenaty&quot;&gt;
                                                                            &lt;/div&gt;
                                                        
                                                                            &lt;div class=&quot;mb-3&quot;&gt;
                                                                                &lt;label for=&quot;emailaddress&quot; class=&quot;form-label&quot;&gt;Email address&lt;/label&gt;
                                                                                &lt;input class=&quot;form-control&quot; type=&quot;email&quot; id=&quot;emailaddress&quot; required=&quot;&quot; placeholder=&quot;john@deo.com&quot;&gt;
                                                                            &lt;/div&gt;
                                                        
                                                                            &lt;div class=&quot;mb-3&quot;&gt;
                                                                                &lt;label for=&quot;password&quot; class=&quot;form-label&quot;&gt;Password&lt;/label&gt;
                                                                                &lt;input class=&quot;form-control&quot; type=&quot;password&quot; required=&quot;&quot; id=&quot;password&quot; placeholder=&quot;Enter your password&quot;&gt;
                                                                            &lt;/div&gt;
                                                        
                                                                            &lt;div class=&quot;mb-3&quot;&gt;
                                                                                &lt;div class=&quot;form-check&quot;&gt;
                                                                                    &lt;input type=&quot;checkbox&quot; class=&quot;form-check-input&quot; id=&quot;customCheck1&quot;&gt;
                                                                                    &lt;label class=&quot;form-check-label&quot; for=&quot;customCheck1&quot;&gt;I accept &lt;a href=&quot;#&quot;&gt;Terms and Conditions&lt;/a&gt;&lt;/label&gt;
                                                                                &lt;/div&gt; 
                                                                            &lt;/div&gt;
                                                        
                                                                            &lt;div class=&quot;mb-3 text-center&quot;&gt;
                                                                                &lt;button class=&quot;btn btn-primary&quot; type=&quot;submit&quot;&gt;Sign Up Free&lt;/button&gt;
                                                                            &lt;/div&gt;
                                                        
                                                                        &lt;/form&gt;
                                                        
                                                                    &lt;/div&gt;
                                                                &lt;/div&gt;&lt;!-- /.modal-content --&gt;
                                                            &lt;/div&gt;&lt;!-- /.modal-dialog --&gt;
                                                        &lt;/div&gt;&lt;!-- /.modal --&gt;
                                                        
                                                        &lt;!-- Login modal --&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-info&quot; data-bs-toggle=&quot;modal&quot; data-bs-target=&quot;#login-modal&quot;&gt;Log In Modal&lt;/button&gt;
                                                        &lt;div id=&quot;login-modal&quot; class=&quot;modal fade&quot; tabindex=&quot;-1&quot; role=&quot;dialog&quot; aria-hidden=&quot;true&quot;&gt;
                                                            &lt;div class=&quot;modal-dialog&quot;&gt;
                                                                &lt;div class=&quot;modal-content&quot;&gt;
                                                                    &lt;div class=&quot;modal-body&quot;&gt;
                                                                        &lt;div class=&quot;text-center mt-2 mb-4&quot;&gt;
                                                                            &lt;a href=&quot;index.html&quot; class=&quot;text-success&quot;&gt;
                                                                                &lt;span&gt;&lt;img src=&quot;assets/images/logo-dark.png&quot; alt=&quot;&quot; height=&quot;18&quot;&gt;&lt;/span&gt;
                                                                            &lt;/a&gt;
                                                                        &lt;/div&gt;
                                                        
                                                                        &lt;form action=&quot;#&quot; class=&quot;ps-3 pe-3&quot;&gt;
                                                        
                                                                            &lt;div class=&quot;mb-3&quot;&gt;
                                                                                &lt;label for=&quot;emailaddress1&quot; class=&quot;form-label&quot;&gt;Email address&lt;/label&gt;
                                                                                &lt;input class=&quot;form-control&quot; type=&quot;email&quot; id=&quot;emailaddress1&quot; required=&quot;&quot; placeholder=&quot;john@deo.com&quot;&gt;
                                                                            &lt;/div&gt;
                                                        
                                                                            &lt;div class=&quot;mb-3&quot;&gt;
                                                                                &lt;label for=&quot;password1&quot; class=&quot;form-label&quot;&gt;Password&lt;/label&gt;
                                                                                &lt;input class=&quot;form-control&quot; type=&quot;password&quot; required=&quot;&quot; id=&quot;password1&quot; placeholder=&quot;Enter your password&quot;&gt;
                                                                            &lt;/div&gt;
                                                        
                                                                            &lt;div class=&quot;mb-3&quot;&gt;
                                                                                &lt;div class=&quot;form-check&quot;&gt;
                                                                                    &lt;input type=&quot;checkbox&quot; class=&quot;form-check-input&quot; id=&quot;customCheck2&quot;&gt;
                                                                                    &lt;label class=&quot;form-check-label&quot; for=&quot;customCheck2&quot;&gt;Remember me&lt;/label&gt;
                                                                                &lt;/div&gt;
                                                                            &lt;/div&gt;
                                                        
                                                                            &lt;div class=&quot;mb-3 text-center&quot;&gt;
                                                                                &lt;button class=&quot;btn rounded-pill btn-primary&quot; type=&quot;submit&quot;&gt;Sign In&lt;/button&gt;
                                                                            &lt;/div&gt;
                                                        
                                                                        &lt;/form&gt;
                                                        
                                                                    &lt;/div&gt;
                                                                &lt;/div&gt;&lt;!-- /.modal-content --&gt;
                                                            &lt;/div&gt;&lt;!-- /.modal-dialog --&gt;
                                                        &lt;/div&gt;&lt;!-- /.modal --&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->
                                            </div> <!-- end preview code-->
                                        </div> <!-- end tab-content-->
                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Modal based Alerts</h4>
                                        <p class="text-muted font-14">Show different contexual alert messages using modal component</p>
                        
                                        <ul class="nav nav-tabs nav-bordered mb-3">
                                            <li class="nav-item">
                                                <a href="#modal-alerts-preview" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                                    Preview
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#modal-alerts-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                                    Code
                                                </a>
                                            </li>
                                        </ul> <!-- end nav-->
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="modal-alerts-preview">
                                                <!-- Success Alert Modal -->
                                                <div id="success-alert-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                                                    <div class="modal-dialog modal-sm">
                                                        <div class="modal-content modal-filled bg-success">
                                                            <div class="modal-body p-4">
                                                                <div class="text-center">
                                                                    <i class="dripicons-checkmark h1"></i>
                                                                    <h4 class="mt-2">Well Done!</h4>
                                                                    <p class="mt-3">Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>
                                                                    <button type="button" class="btn btn-light my-2" data-bs-dismiss="modal">Continue</button>
                                                                </div>
                                                            </div>
                                                        </div><!-- /.modal-content -->
                                                    </div><!-- /.modal-dialog -->
                                                </div><!-- /.modal -->
        
                                                <!-- Info Alert Modal -->
                                                <div id="info-alert-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                                                    <div class="modal-dialog modal-sm">
                                                        <div class="modal-content">
                                                            <div class="modal-body p-4">
                                                                <div class="text-center">
                                                                    <i class="dripicons-information h1 text-info"></i>
                                                                    <h4 class="mt-2">Heads up!</h4>
                                                                    <p class="mt-3">Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>
                                                                    <button type="button" class="btn btn-info my-2" data-bs-dismiss="modal">Continue</button>
                                                                </div>
                                                            </div>
                                                        </div><!-- /.modal-content -->
                                                    </div><!-- /.modal-dialog -->
                                                </div><!-- /.modal -->
        
                                                <!-- Warning Alert Modal -->
                                                <div id="warning-alert-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                                                    <div class="modal-dialog modal-sm">
                                                        <div class="modal-content">
                                                            <div class="modal-body p-4">
                                                                <div class="text-center">
                                                                    <i class="dripicons-warning h1 text-warning"></i>
                                                                    <h4 class="mt-2">Incorrect Information</h4>
                                                                    <p class="mt-3">Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>
                                                                    <button type="button" class="btn btn-warning my-2" data-bs-dismiss="modal">Continue</button>
                                                                </div>
                                                            </div>
                                                        </div><!-- /.modal-content -->
                                                    </div><!-- /.modal-dialog -->
                                                </div><!-- /.modal -->
        
                                                <!-- Danger Alert Modal -->
                                                <div id="danger-alert-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                                                    <div class="modal-dialog modal-sm">
                                                        <div class="modal-content modal-filled bg-danger">
                                                            <div class="modal-body p-4">
                                                                <div class="text-center">
                                                                    <i class="dripicons-wrong h1"></i>
                                                                    <h4 class="mt-2">Oh snap!</h4>
                                                                    <p class="mt-3">Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>
                                                                    <button type="button" class="btn btn-light my-2" data-bs-dismiss="modal">Continue</button>
                                                                </div>
                                                            </div>
                                                        </div><!-- /.modal-content -->
                                                    </div><!-- /.modal-dialog -->
                                                </div><!-- /.modal -->
        
                                                <div class="button-list">
                                                    <!-- Success Alert modal -->
                                                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#success-alert-modal">Success Alert</button>
                                                    <!-- Info Alert modal -->
                                                    <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#info-alert-modal">Info Alert</button>
                                                    <!-- Warning Alert modal -->
                                                    <button  type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#warning-alert-modal">Warning Alert</button>
                                                    <!-- Danger Alert modal -->
                                                    <button  type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#danger-alert-modal">Danger Alert</button>
                                                </div>
                                                
                                            </div> <!-- end preview-->
                                        
                                            <div class="tab-pane" id="modal-alerts-code">
                                                <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;!-- Success Alert Modal --&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-success&quot; data-bs-toggle=&quot;modal&quot; data-bs-target=&quot;#success-alert-modal&quot;&gt;Success Alert&lt;/button&gt;
                                                        &lt;div id=&quot;success-alert-modal&quot; class=&quot;modal fade&quot; tabindex=&quot;-1&quot; role=&quot;dialog&quot; aria-hidden=&quot;true&quot;&gt;
                                                            &lt;div class=&quot;modal-dialog modal-sm&quot;&gt;
                                                                &lt;div class=&quot;modal-content modal-filled bg-success&quot;&gt;
                                                                    &lt;div class=&quot;modal-body p-4&quot;&gt;
                                                                        &lt;div class=&quot;text-center&quot;&gt;
                                                                            &lt;i class=&quot;dripicons-checkmark h1&quot;&gt;&lt;/i&gt;
                                                                            &lt;h4 class=&quot;mt-2&quot;&gt;Well Done!&lt;/h4&gt;
                                                                            &lt;p class=&quot;mt-3&quot;&gt;Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam.&lt;/p&gt;
                                                                            &lt;button type=&quot;button&quot; class=&quot;btn btn-light my-2&quot; data-bs-dismiss=&quot;modal&quot;&gt;Continue&lt;/button&gt;
                                                                        &lt;/div&gt;
                                                                    &lt;/div&gt;
                                                                &lt;/div&gt;&lt;!-- /.modal-content --&gt;
                                                            &lt;/div&gt;&lt;!-- /.modal-dialog --&gt;
                                                        &lt;/div&gt;&lt;!-- /.modal --&gt;
                                                        
                                                        &lt;!-- Info Alert Modal --&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-info&quot; data-bs-toggle=&quot;modal&quot; data-bs-target=&quot;#info-alert-modal&quot;&gt;Info Alert&lt;/button&gt;
                                                        &lt;div id=&quot;info-alert-modal&quot; class=&quot;modal fade&quot; tabindex=&quot;-1&quot; role=&quot;dialog&quot; aria-hidden=&quot;true&quot;&gt;
                                                            &lt;div class=&quot;modal-dialog modal-sm&quot;&gt;
                                                                &lt;div class=&quot;modal-content&quot;&gt;
                                                                    &lt;div class=&quot;modal-body p-4&quot;&gt;
                                                                        &lt;div class=&quot;text-center&quot;&gt;
                                                                            &lt;i class=&quot;dripicons-information h1 text-info&quot;&gt;&lt;/i&gt;
                                                                            &lt;h4 class=&quot;mt-2&quot;&gt;Heads up!&lt;/h4&gt;
                                                                            &lt;p class=&quot;mt-3&quot;&gt;Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam.&lt;/p&gt;
                                                                            &lt;button type=&quot;button&quot; class=&quot;btn btn-info my-2&quot; data-bs-dismiss=&quot;modal&quot;&gt;Continue&lt;/button&gt;
                                                                        &lt;/div&gt;
                                                                    &lt;/div&gt;
                                                                &lt;/div&gt;&lt;!-- /.modal-content --&gt;
                                                            &lt;/div&gt;&lt;!-- /.modal-dialog --&gt;
                                                        &lt;/div&gt;&lt;!-- /.modal --&gt;
                                                        
                                                        &lt;!-- Warning Alert Modal --&gt;
                                                        &lt;button  type=&quot;button&quot; class=&quot;btn btn-warning&quot; data-bs-toggle=&quot;modal&quot; data-bs-target=&quot;#warning-alert-modal&quot;&gt;Warning Alert&lt;/button&gt;
                                                        &lt;div id=&quot;warning-alert-modal&quot; class=&quot;modal fade&quot; tabindex=&quot;-1&quot; role=&quot;dialog&quot; aria-hidden=&quot;true&quot;&gt;
                                                            &lt;div class=&quot;modal-dialog modal-sm&quot;&gt;
                                                                &lt;div class=&quot;modal-content&quot;&gt;
                                                                    &lt;div class=&quot;modal-body p-4&quot;&gt;
                                                                        &lt;div class=&quot;text-center&quot;&gt;
                                                                            &lt;i class=&quot;dripicons-warning h1 text-warning&quot;&gt;&lt;/i&gt;
                                                                            &lt;h4 class=&quot;mt-2&quot;&gt;Incorrect Information&lt;/h4&gt;
                                                                            &lt;p class=&quot;mt-3&quot;&gt;Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam.&lt;/p&gt;
                                                                            &lt;button type=&quot;button&quot; class=&quot;btn btn-warning my-2&quot; data-bs-dismiss=&quot;modal&quot;&gt;Continue&lt;/button&gt;
                                                                        &lt;/div&gt;
                                                                    &lt;/div&gt;
                                                                &lt;/div&gt;&lt;!-- /.modal-content --&gt;
                                                            &lt;/div&gt;&lt;!-- /.modal-dialog --&gt;
                                                        &lt;/div&gt;&lt;!-- /.modal --&gt;
                                                        
                                                        &lt;!-- Danger Alert Modal --&gt;
                                                        &lt;button  type=&quot;button&quot; class=&quot;btn btn-danger&quot; data-bs-toggle=&quot;modal&quot; data-bs-target=&quot;#danger-alert-modal&quot;&gt;Danger Alert&lt;/button&gt;
                                                        &lt;div id=&quot;danger-alert-modal&quot; class=&quot;modal fade&quot; tabindex=&quot;-1&quot; role=&quot;dialog&quot; aria-hidden=&quot;true&quot;&gt;
                                                            &lt;div class=&quot;modal-dialog modal-sm&quot;&gt;
                                                                &lt;div class=&quot;modal-content modal-filled bg-danger&quot;&gt;
                                                                    &lt;div class=&quot;modal-body p-4&quot;&gt;
                                                                        &lt;div class=&quot;text-center&quot;&gt;
                                                                            &lt;i class=&quot;dripicons-wrong h1&quot;&gt;&lt;/i&gt;
                                                                            &lt;h4 class=&quot;mt-2&quot;&gt;Oh snap!&lt;/h4&gt;
                                                                            &lt;p class=&quot;mt-3&quot;&gt;Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam.&lt;/p&gt;
                                                                            &lt;button type=&quot;button&quot; class=&quot;btn btn-light my-2&quot; data-bs-dismiss=&quot;modal&quot;&gt;Continue&lt;/button&gt;
                                                                        &lt;/div&gt;
                                                                    &lt;/div&gt;
                                                                &lt;/div&gt;&lt;!-- /.modal-content --&gt;
                                                            &lt;/div&gt;&lt;!-- /.modal-dialog --&gt;
                                                        &lt;/div&gt;&lt;!-- /.modal --&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->
                                            </div> <!-- end preview code-->
                                        </div> <!-- end tab-content-->
                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->
                            </div> <!-- end col -->
                        
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Modal Position</h4>
                                        <p class="text-muted font-14">Specify the position for the modal. You can display modal at top, bottom, center or right of page by specifying 
                                                classes <code>modal-top</code>, <code>modal-bottom</code>, <code>modal-dialog-centered</code> and <code>modal-right</code>
                                                respectively.</p>
                        
                                        <ul class="nav nav-tabs nav-bordered mb-3">
                                            <li class="nav-item">
                                                <a href="#modal-position-preview" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                                    Preview
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#modal-position-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                                    Code
                                                </a>
                                            </li>
                                        </ul> <!-- end nav-->
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="modal-position-preview">
                                                <!-- Top modal content -->
                                                <div id="top-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                                                    <div class="modal-dialog modal-top">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title" id="topModalLabel">Modal Heading</h4>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <h5>Text in a modal</h5>
                                                                <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                                                <button type="button" class="btn btn-primary">Save changes</button>
                                                            </div>
                                                        </div><!-- /.modal-content -->
                                                    </div><!-- /.modal-dialog -->
                                                </div><!-- /.modal -->
        
                                                <!-- Right modal content -->
                                                <div id="right-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                                                    <div class="modal-dialog modal-sm modal-right">
                                                        <div class="modal-content">
                                                            <div class="modal-header border-0">
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="text-center">
                                                                    <h4 class="mt-0">Text in a modal</h4>
                                                                    <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
                                                                    <button type="button" class="btn btn-danger btn-sm" data-bs-dismiss="modal">Close</button>
                                                                </div>
                                                            </div>
                                                        </div><!-- /.modal-content -->
                                                    </div><!-- /.modal-dialog -->
                                                </div><!-- /.modal -->
        
                                                <!-- Bottom modal content -->
                                                <div id="bottom-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                                                    <div class="modal-dialog modal-sm modal-bottom">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title" id="bottomModalLabel">Modal Heading</h4>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <h5>Text in a modal</h5>
                                                                <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                                                <button type="button" class="btn btn-primary">Save changes</button>
                                                            </div>
                                                        </div><!-- /.modal-content -->
                                                    </div><!-- /.modal-dialog -->
                                                </div><!-- /.modal -->
        
                                                <!-- Center modal content -->
                                                <div class="modal fade" id="centermodal" tabindex="-1" role="dialog" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title" id="myCenterModalLabel">Center modal</h4>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <h5>Overflowing text to show scroll behavior</h5>
                                                                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                                                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                                            </div>
                                                        </div><!-- /.modal-content -->
                                                    </div><!-- /.modal-dialog -->
                                                </div><!-- /.modal -->
            
                                                <div class="button-list">
                                                    <!-- Top modal -->
                                                    <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#top-modal">Top Modal</button>
                                                    <!-- Bottom modal -->
                                                    <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#bottom-modal">Bottom Modal</button>
                                                    <!-- Center modal -->
                                                    <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#centermodal">Center modal</button>
                                                    <!-- Right modal -->
                                                    <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#right-modal">Rightbar Modal</button>
                                                </div>
                                               
                                            </div> <!-- end preview-->
                                        
                                            <div class="tab-pane" id="modal-position-code">
                                                <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;!-- Top modal --&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot; data-bs-toggle=&quot;modal&quot; data-bs-target=&quot;#top-modal&quot;&gt;Top Modal&lt;/button&gt;
                                                        &lt;div id=&quot;top-modal&quot; class=&quot;modal fade&quot; tabindex=&quot;-1&quot; role=&quot;dialog&quot; aria-hidden=&quot;true&quot;&gt;
                                                            &lt;div class=&quot;modal-dialog modal-top&quot;&gt;
                                                                &lt;div class=&quot;modal-content&quot;&gt;
                                                                    &lt;div class=&quot;modal-header&quot;&gt;
                                                                        &lt;h4 class=&quot;modal-title&quot; id=&quot;topModalLabel&quot;&gt;Modal Heading&lt;/h4&gt;
                                                                        &lt;button type=&quot;button&quot; class=&quot;btn-close&quot; data-bs-dismiss=&quot;modal&quot; aria-hidden=&quot;true&quot;&gt;&lt;/button&gt;
                                                                    &lt;/div&gt;
                                                                    &lt;div class=&quot;modal-body&quot;&gt;
                                                                        ...
                                                                    &lt;/div&gt;
                                                                    &lt;div class=&quot;modal-footer&quot;&gt;
                                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-light&quot; data-bs-dismiss=&quot;modal&quot;&gt;Close&lt;/button&gt;
                                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;Save changes&lt;/button&gt;
                                                                    &lt;/div&gt;
                                                                &lt;/div&gt;&lt;!-- /.modal-content --&gt;
                                                            &lt;/div&gt;&lt;!-- /.modal-dialog --&gt;
                                                        &lt;/div&gt;&lt;!-- /.modal --&gt;
                                                        
                                                        &lt;!-- Right modal --&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot; data-bs-toggle=&quot;modal&quot; data-bs-target=&quot;#right-modal&quot;&gt;Rightbar Modal&lt;/button&gt;
                                                        &lt;div id=&quot;right-modal&quot; class=&quot;modal fade&quot; tabindex=&quot;-1&quot; role=&quot;dialog&quot; aria-hidden=&quot;true&quot;&gt;
                                                            &lt;div class=&quot;modal-dialog modal-sm modal-right&quot;&gt;
                                                                &lt;div class=&quot;modal-content&quot;&gt;
                                                                    &lt;div class=&quot;modal-header border-0&quot;&gt;
                                                                        &lt;button type=&quot;button&quot; class=&quot;btn-close&quot; data-bs-dismiss=&quot;modal&quot; aria-hidden=&quot;true&quot;&gt;&lt;/button&gt;
                                                                    &lt;/div&gt;
                                                                    &lt;div class=&quot;modal-body&quot;&gt;
                                                                        &lt;div class=&quot;text-center&quot;&gt;
                                                                            ...
                                                                        &lt;/div&gt;
                                                                    &lt;/div&gt;
                                                                &lt;/div&gt;&lt;!-- /.modal-content --&gt;
                                                            &lt;/div&gt;&lt;!-- /.modal-dialog --&gt;
                                                        &lt;/div&gt;&lt;!-- /.modal --&gt;
                                                        
                                                        &lt;!-- Bottom modal --&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot; data-bs-toggle=&quot;modal&quot; data-bs-target=&quot;#bottom-modal&quot;&gt;Bottom Modal&lt;/button&gt;
                                                        &lt;div id=&quot;bottom-modal&quot; class=&quot;modal fade&quot; tabindex=&quot;-1&quot; role=&quot;dialog&quot; aria-hidden=&quot;true&quot;&gt;
                                                            &lt;div class=&quot;modal-dialog modal-sm modal-bottom&quot;&gt;
                                                                &lt;div class=&quot;modal-content&quot;&gt;
                                                                    &lt;div class=&quot;modal-header&quot;&gt;
                                                                        &lt;h4 class=&quot;modal-title&quot; id=&quot;bottomModalLabel&quot;&gt;Modal Heading&lt;/h4&gt;
                                                                        &lt;button type=&quot;button&quot; class=&quot;btn-close&quot; data-bs-dismiss=&quot;modal&quot; aria-hidden=&quot;true&quot;&gt;&lt;/button&gt;
                                                                    &lt;/div&gt;
                                                                    &lt;div class=&quot;modal-body&quot;&gt;
                                                                        ...
                                                                    &lt;/div&gt;
                                                                    &lt;div class=&quot;modal-footer&quot;&gt;
                                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-light&quot; data-bs-dismiss=&quot;modal&quot;&gt;Close&lt;/button&gt;
                                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;Save changes&lt;/button&gt;
                                                                    &lt;/div&gt;
                                                                &lt;/div&gt;&lt;!-- /.modal-content --&gt;
                                                            &lt;/div&gt;&lt;!-- /.modal-dialog --&gt;
                                                        &lt;/div&gt;&lt;!-- /.modal --&gt;
                                                        
                                                        &lt;!-- Center modal --&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot; data-bs-toggle=&quot;modal&quot; data-bs-target=&quot;#centermodal&quot;&gt;Center modal&lt;/button&gt;
                                                        &lt;div class=&quot;modal fade&quot; id=&quot;centermodal&quot; tabindex=&quot;-1&quot; role=&quot;dialog&quot; aria-hidden=&quot;true&quot;&gt;
                                                            &lt;div class=&quot;modal-dialog modal-dialog-centered&quot;&gt;
                                                                &lt;div class=&quot;modal-content&quot;&gt;
                                                                    &lt;div class=&quot;modal-header&quot;&gt;
                                                                        &lt;h4 class=&quot;modal-title&quot; id=&quot;myCenterModalLabel&quot;&gt;Center modal&lt;/h4&gt;
                                                                        &lt;button type=&quot;button&quot; class=&quot;btn-close&quot; data-bs-dismiss=&quot;modal&quot; aria-hidden=&quot;true&quot;&gt;&lt;/button&gt;
                                                                    &lt;/div&gt;
                                                                    &lt;div class=&quot;modal-body&quot;&gt;
                                                                        ...
                                                                    &lt;/div&gt;
                                                                &lt;/div&gt;&lt;!-- /.modal-content --&gt;
                                                            &lt;/div&gt;&lt;!-- /.modal-dialog --&gt;
                                                        &lt;/div&gt;&lt;!-- /.modal --&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->
                                            </div> <!-- end preview code-->
                                        </div> <!-- end tab-content-->
                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Colored Header Modals</h4>
                                        <p class="text-muted font-14">A rendered modal with header having contexual background color.</p>
                        
                                        <ul class="nav nav-tabs nav-bordered mb-3">
                                            <li class="nav-item">
                                                <a href="#modal-colored-preview" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                                    Preview
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#modal-colored-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                                    Code
                                                </a>
                                            </li>
                                        </ul> <!-- end nav-->
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="modal-colored-preview">
                                                <!-- Primary Header Modal -->
                                                <div id="primary-header-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="primary-header-modalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header modal-colored-header bg-primary">
                                                                <h4 class="modal-title" id="primary-header-modalLabel">Modal Heading</h4>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <h5 class="mt-0">Primary Background</h5>
                                                                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                                                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                                                <button type="button" class="btn btn-primary">Save changes</button>
                                                            </div>
                                                        </div><!-- /.modal-content -->
                                                    </div><!-- /.modal-dialog -->
                                                </div><!-- /.modal -->
            
                                                <!-- Success Header Modal -->
                                                <div id="success-header-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="success-header-modalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header modal-colored-header bg-success">
                                                                <h4 class="modal-title" id="success-header-modalLabel">Modal Heading</h4>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <h5 class="mt-0">Success Background</h5>
                                                                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                                                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                                                <button type="button" class="btn btn-success">Save changes</button>
                                                            </div>
                                                        </div><!-- /.modal-content -->
                                                    </div><!-- /.modal-dialog -->
                                                </div><!-- /.modal -->
        
                                                <!-- Info Header Modal -->
                                                <div id="info-header-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="info-header-modalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header modal-colored-header bg-info">
                                                                <h4 class="modal-title" id="info-header-modalLabel">Modal Heading</h4>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <h5 class="mt-0">Info Background</h5>
                                                                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                                                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                                                <button type="button" class="btn btn-info">Save changes</button>
                                                            </div>
                                                        </div><!-- /.modal-content -->
                                                    </div><!-- /.modal-dialog -->
                                                </div><!-- /.modal -->
        
                                                <!-- Warning Header Modal -->
                                                <div id="warning-header-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="warning-header-modalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header modal-colored-header bg-warning">
                                                                <h4 class="modal-title" id="warning-header-modalLabel">Modal Heading</h4>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <h5 class="mt-0">Warning Background</h5>
                                                                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                                                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                                                <button type="button" class="btn btn-warning">Save changes</button>
                                                            </div>
                                                        </div><!-- /.modal-content -->
                                                    </div><!-- /.modal-dialog -->
                                                </div><!-- /.modal -->
        
                                                <!-- Danger Header Modal -->
                                                <div id="danger-header-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="danger-header-modalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header modal-colored-header bg-danger">
                                                                <h4 class="modal-title" id="danger-header-modalLabel">Modal Heading</h4>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <h5 class="mt-0">Danger Background</h5>
                                                                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                                                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                                                <button type="button" class="btn btn-danger">Save changes</button>
                                                            </div>
                                                        </div><!-- /.modal-content -->
                                                    </div><!-- /.modal-dialog -->
                                                </div><!-- /.modal -->
        
                                                <!-- Dark Header Modal -->
                                                <div id="dark-header-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="dark-header-modalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header modal-colored-header bg-dark">
                                                                <h4 class="modal-title" id="dark-header-modalLabel">Modal Heading</h4>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <h5 class="mt-0">Dark Background</h5>
                                                                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                                                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                                                <button type="button" class="btn btn-dark">Save changes</button>
                                                            </div>
                                                        </div><!-- /.modal-content -->
                                                    </div><!-- /.modal-dialog -->
                                                </div><!-- /.modal -->
        
                                                <div class="button-list">
                                                    <!-- Primary header modal -->
                                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#primary-header-modal">Primary Header</button>
                                                    <!-- Success header modal -->
                                                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#success-header-modal">Success Header</button>
                                                    <!-- Info header modal -->
                                                    <button  type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#info-header-modal">Info Header</button>
                                                    <!-- Warning header modal -->
                                                    <button  type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#warning-header-modal">Warning Header</button>
                                                    <!-- Danger header modal -->
                                                    <button  type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#danger-header-modal">Danger Header</button>
                                                    <!-- Dark header modal -->
                                                    <button  type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#dark-header-modal">Dark Header</button>
                                                </div>
                                                
                                            </div> <!-- end preview-->
                                        
                                            <div class="tab-pane" id="modal-colored-code">
                                                <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;!-- Primary Header Modal --&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot; data-bs-toggle=&quot;modal&quot; data-bs-target=&quot;#primary-header-modal&quot;&gt;Primary Header&lt;/button&gt;
                                                        &lt;div id=&quot;primary-header-modal&quot; class=&quot;modal fade&quot; tabindex=&quot;-1&quot; role=&quot;dialog&quot; aria-labelledby=&quot;primary-header-modalLabel&quot; aria-hidden=&quot;true&quot;&gt;
                                                            &lt;div class=&quot;modal-dialog&quot;&gt;
                                                                &lt;div class=&quot;modal-content&quot;&gt;
                                                                    &lt;div class=&quot;modal-header modal-colored-header bg-primary&quot;&gt;
                                                                        &lt;h4 class=&quot;modal-title&quot; id=&quot;primary-header-modalLabel&quot;&gt;Modal Heading&lt;/h4&gt;
                                                                        &lt;button type=&quot;button&quot; class=&quot;btn-close&quot; data-bs-dismiss=&quot;modal&quot; aria-hidden=&quot;true&quot;&gt;&lt;/button&gt;
                                                                    &lt;/div&gt;
                                                                    &lt;div class=&quot;modal-body&quot;&gt;
                                                                        ...
                                                                    &lt;/div&gt;
                                                                    &lt;div class=&quot;modal-footer&quot;&gt;
                                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-light&quot; data-bs-dismiss=&quot;modal&quot;&gt;Close&lt;/button&gt;
                                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;Save changes&lt;/button&gt;
                                                                    &lt;/div&gt;
                                                                &lt;/div&gt;&lt;!-- /.modal-content --&gt;
                                                            &lt;/div&gt;&lt;!-- /.modal-dialog --&gt;
                                                        &lt;/div&gt;&lt;!-- /.modal --&gt;
                                                        
                                                        &lt;!-- Success Header Modal --&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-success&quot; data-bs-toggle=&quot;modal&quot; data-bs-target=&quot;#success-header-modal&quot;&gt;Success Header&lt;/button&gt;
                                                        &lt;div id=&quot;success-header-modal&quot; class=&quot;modal fade&quot; tabindex=&quot;-1&quot; role=&quot;dialog&quot; aria-labelledby=&quot;success-header-modalLabel&quot; aria-hidden=&quot;true&quot;&gt;
                                                            &lt;div class=&quot;modal-dialog&quot;&gt;
                                                                &lt;div class=&quot;modal-content&quot;&gt;
                                                                    &lt;div class=&quot;modal-header modal-colored-header bg-success&quot;&gt;
                                                                        &lt;h4 class=&quot;modal-title&quot; id=&quot;success-header-modalLabel&quot;&gt;Modal Heading&lt;/h4&gt;
                                                                        &lt;button type=&quot;button&quot; class=&quot;btn-close&quot; data-bs-dismiss=&quot;modal&quot; aria-hidden=&quot;true&quot;&gt;&lt;/button&gt;
                                                                    &lt;/div&gt;
                                                                    &lt;div class=&quot;modal-body&quot;&gt;
                                                                        ...
                                                                    &lt;/div&gt;
                                                                    &lt;div class=&quot;modal-footer&quot;&gt;
                                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-light&quot; data-bs-dismiss=&quot;modal&quot;&gt;Close&lt;/button&gt;
                                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-success&quot;&gt;Save changes&lt;/button&gt;
                                                                    &lt;/div&gt;
                                                                &lt;/div&gt;&lt;!-- /.modal-content --&gt;
                                                            &lt;/div&gt;&lt;!-- /.modal-dialog --&gt;
                                                        &lt;/div&gt;&lt;!-- /.modal --&gt;
                                                        
                                                        &lt;!-- Info Header Modal --&gt;
                                                        &lt;button  type=&quot;button&quot; class=&quot;btn btn-info&quot; data-bs-toggle=&quot;modal&quot; data-bs-target=&quot;#info-header-modal&quot;&gt;Info Header&lt;/button&gt;
                                                        &lt;div id=&quot;info-header-modal&quot; class=&quot;modal fade&quot; tabindex=&quot;-1&quot; role=&quot;dialog&quot; aria-labelledby=&quot;info-header-modalLabel&quot; aria-hidden=&quot;true&quot;&gt;
                                                            &lt;div class=&quot;modal-dialog&quot;&gt;
                                                                &lt;div class=&quot;modal-content&quot;&gt;
                                                                    &lt;div class=&quot;modal-header modal-colored-header bg-info&quot;&gt;
                                                                        &lt;h4 class=&quot;modal-title&quot; id=&quot;info-header-modalLabel&quot;&gt;Modal Heading&lt;/h4&gt;
                                                                        &lt;button type=&quot;button&quot; class=&quot;btn-close&quot; data-bs-dismiss=&quot;modal&quot; aria-hidden=&quot;true&quot;&gt;&lt;/button&gt;
                                                                    &lt;/div&gt;
                                                                    &lt;div class=&quot;modal-body&quot;&gt;
                                                                        ...
                                                                    &lt;/div&gt;
                                                                    &lt;div class=&quot;modal-footer&quot;&gt;
                                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-light&quot; data-bs-dismiss=&quot;modal&quot;&gt;Close&lt;/button&gt;
                                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-info&quot;&gt;Save changes&lt;/button&gt;
                                                                    &lt;/div&gt;
                                                                &lt;/div&gt;&lt;!-- /.modal-content --&gt;
                                                            &lt;/div&gt;&lt;!-- /.modal-dialog --&gt;
                                                        &lt;/div&gt;&lt;!-- /.modal --&gt;
                                                        
                                                        &lt;!-- Warning Header Modal --&gt;
                                                        &lt;button  type=&quot;button&quot; class=&quot;btn btn-warning&quot; data-bs-toggle=&quot;modal&quot; data-bs-target=&quot;#warning-header-modal&quot;&gt;Warning Header&lt;/button&gt;
                                                        &lt;div id=&quot;warning-header-modal&quot; class=&quot;modal fade&quot; tabindex=&quot;-1&quot; role=&quot;dialog&quot; aria-labelledby=&quot;warning-header-modalLabel&quot; aria-hidden=&quot;true&quot;&gt;
                                                            &lt;div class=&quot;modal-dialog&quot;&gt;
                                                                &lt;div class=&quot;modal-content&quot;&gt;
                                                                    &lt;div class=&quot;modal-header modal-colored-header bg-warning&quot;&gt;
                                                                        &lt;h4 class=&quot;modal-title&quot; id=&quot;warning-header-modalLabel&quot;&gt;Modal Heading&lt;/h4&gt;
                                                                        &lt;button type=&quot;button&quot; class=&quot;btn-close&quot; data-bs-dismiss=&quot;modal&quot; aria-hidden=&quot;true&quot;&gt;&lt;/button&gt;
                                                                    &lt;/div&gt;
                                                                    &lt;div class=&quot;modal-body&quot;&gt;
                                                                        ...
                                                                    &lt;/div&gt;
                                                                    &lt;div class=&quot;modal-footer&quot;&gt;
                                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-light&quot; data-bs-dismiss=&quot;modal&quot;&gt;Close&lt;/button&gt;
                                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-warning&quot;&gt;Save changes&lt;/button&gt;
                                                                    &lt;/div&gt;
                                                                &lt;/div&gt;&lt;!-- /.modal-content --&gt;
                                                            &lt;/div&gt;&lt;!-- /.modal-dialog --&gt;
                                                        &lt;/div&gt;&lt;!-- /.modal --&gt;
                                                        
                                                        &lt;!-- Danger Header Modal --&gt;
                                                        &lt;button  type=&quot;button&quot; class=&quot;btn btn-danger&quot; data-bs-toggle=&quot;modal&quot; data-bs-target=&quot;#danger-header-modal&quot;&gt;Danger Header&lt;/button&gt;
                                                        &lt;div id=&quot;danger-header-modal&quot; class=&quot;modal fade&quot; tabindex=&quot;-1&quot; role=&quot;dialog&quot; aria-labelledby=&quot;danger-header-modalLabel&quot; aria-hidden=&quot;true&quot;&gt;
                                                            &lt;div class=&quot;modal-dialog&quot;&gt;
                                                                &lt;div class=&quot;modal-content&quot;&gt;
                                                                    &lt;div class=&quot;modal-header modal-colored-header bg-danger&quot;&gt;
                                                                        &lt;h4 class=&quot;modal-title&quot; id=&quot;danger-header-modalLabel&quot;&gt;Modal Heading&lt;/h4&gt;
                                                                        &lt;button type=&quot;button&quot; class=&quot;btn-close&quot; data-bs-dismiss=&quot;modal&quot; aria-hidden=&quot;true&quot;&gt;&lt;/button&gt;
                                                                    &lt;/div&gt;
                                                                    &lt;div class=&quot;modal-body&quot;&gt;
                                                                        ...
                                                                    &lt;/div&gt;
                                                                    &lt;div class=&quot;modal-footer&quot;&gt;
                                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-light&quot; data-bs-dismiss=&quot;modal&quot;&gt;Close&lt;/button&gt;
                                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-danger&quot;&gt;Save changes&lt;/button&gt;
                                                                    &lt;/div&gt;
                                                                &lt;/div&gt;&lt;!-- /.modal-content --&gt;
                                                            &lt;/div&gt;&lt;!-- /.modal-dialog --&gt;
                                                        &lt;/div&gt;&lt;!-- /.modal --&gt;
                                                        
                                                        &lt;!-- Dark Header Modal --&gt;
                                                        &lt;button  type=&quot;button&quot; class=&quot;btn btn-dark&quot; data-bs-toggle=&quot;modal&quot; data-bs-target=&quot;#dark-header-modal&quot;&gt;Dark Header&lt;/button&gt;
                                                        &lt;div id=&quot;dark-header-modal&quot; class=&quot;modal fade&quot; tabindex=&quot;-1&quot; role=&quot;dialog&quot; aria-labelledby=&quot;dark-header-modalLabel&quot; aria-hidden=&quot;true&quot;&gt;
                                                            &lt;div class=&quot;modal-dialog&quot;&gt;
                                                                &lt;div class=&quot;modal-content&quot;&gt;
                                                                    &lt;div class=&quot;modal-header modal-colored-header bg-dark&quot;&gt;
                                                                        &lt;h4 class=&quot;modal-title&quot; id=&quot;dark-header-modalLabel&quot;&gt;Modal Heading&lt;/h4&gt;
                                                                        &lt;button type=&quot;button&quot; class=&quot;btn-close&quot; data-bs-dismiss=&quot;modal&quot; aria-hidden=&quot;true&quot;&gt;&lt;/button&gt;
                                                                    &lt;/div&gt;
                                                                    &lt;div class=&quot;modal-body&quot;&gt;
                                                                        ...
                                                                    &lt;/div&gt;
                                                                    &lt;div class=&quot;modal-footer&quot;&gt;
                                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-light&quot; data-bs-dismiss=&quot;modal&quot;&gt;Close&lt;/button&gt;
                                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-dark&quot;&gt;Save changes&lt;/button&gt;
                                                                    &lt;/div&gt;
                                                                &lt;/div&gt;&lt;!-- /.modal-content --&gt;
                                                            &lt;/div&gt;&lt;!-- /.modal-dialog --&gt;
                                                        &lt;/div&gt;&lt;!-- /.modal --&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->
                                            </div> <!-- end preview code-->
                                        </div> <!-- end tab-content-->
                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->
                            </div> <!-- end col -->
                        
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Filled Modals</h4>
                                        <p class="text-muted font-14">A rendered modal with header, body and footer having contexual background color.</p>
                        
                                        <ul class="nav nav-tabs nav-bordered mb-3">
                                            <li class="nav-item">
                                                <a href="#modal-filled-preview" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                                    Preview
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#modal-filled-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                                    Code
                                                </a>
                                            </li>
                                        </ul> <!-- end nav-->
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="modal-filled-preview">
                                                <!-- Primary Filled Modal -->
                                                <div id="fill-primary-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="fill-primary-modalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content modal-filled bg-primary">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title" id="fill-primary-modalLabel">Primary Filled Modal</h4>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                                                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                                                <button type="button" class="btn btn-outline-light">Save changes</button>
                                                            </div>
                                                        </div><!-- /.modal-content -->
                                                    </div><!-- /.modal-dialog -->
                                                </div><!-- /.modal -->
            
                                                <!-- Success Filled Modal -->
                                                <div id="fill-success-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="fill-success-modalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content modal-filled bg-success">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title" id="fill-success-modalLabel">Success Filled Modal</h4>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                                                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                                                <button type="button" class="btn btn-outline-light">Save changes</button>
                                                            </div>
                                                        </div><!-- /.modal-content -->
                                                    </div><!-- /.modal-dialog -->
                                                </div><!-- /.modal -->
        
                                                <!-- Info Filled Modal -->
                                                <div id="fill-info-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="fill-info-modalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content modal-filled bg-info">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title" id="fill-info-modalLabel">Info Filled Modal</h4>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                                                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                                                <button type="button" class="btn btn-outline-light">Save changes</button>
                                                            </div>
                                                        </div><!-- /.modal-content -->
                                                    </div><!-- /.modal-dialog -->
                                                </div><!-- /.modal -->
        
                                                <!-- Warning Filled Modal -->
                                                <div id="fill-warning-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="fill-warning-modalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content modal-filled bg-warning">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title" id="fill-warning-modalLabel">Warning Filled Modal</h4>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                                                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                                                <button type="button" class="btn btn-outline-light">Save changes</button>
                                                            </div>
                                                        </div><!-- /.modal-content -->
                                                    </div><!-- /.modal-dialog -->
                                                </div><!-- /.modal -->
        
                                                <!-- Danger Filled Modal -->
                                                <div id="fill-danger-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="fill-danger-modalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content modal-filled bg-danger">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title" id="fill-danger-modalLabel">Danger Filled Modal</h4>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                                                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                                                <button type="button" class="btn btn-outline-light">Save changes</button>
                                                            </div>
                                                        </div><!-- /.modal-content -->
                                                    </div><!-- /.modal-dialog -->
                                                </div><!-- /.modal -->
        
                                                <!-- Dark Filled Modal -->
                                                <div id="fill-dark-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="fill-dark-modalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content modal-filled bg-dark">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title" id="fill-dark-modalLabel">Dark Filled Modal</h4>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                                                                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                                                <button type="button" class="btn btn-outline-light">Save changes</button>
                                                            </div>
                                                        </div><!-- /.modal-content -->
                                                    </div><!-- /.modal-dialog -->
                                                </div><!-- /.modal -->
                                                
        
                                                <div class="button-list">
                                                    <!-- Primary header modal -->
                                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#fill-primary-modal">Primary Filled</button>
                                                    <!-- Success header modal -->
                                                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#fill-success-modal">Success Filled</button>
                                                    <!-- Info header modal -->
                                                    <button  type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#fill-info-modal">Info Filled</button>
                                                    <!-- Warning header modal -->
                                                    <button  type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#fill-warning-modal">Warning Filled</button>
                                                    <!-- Danger header modal -->
                                                    <button  type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#fill-danger-modal">Danger Filled</button>
                                                    <!-- Dark header modal -->
                                                    <button  type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#fill-dark-modal">Dark Filled</button>
                                                </div>
                                               
                                            </div> <!-- end preview-->
                                        
                                            <div class="tab-pane" id="modal-filled-code">
                                                <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;!-- Primary Filled Modal --&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot; data-bs-toggle=&quot;modal&quot; data-bs-target=&quot;#fill-primary-modal&quot;&gt;Primary Filled&lt;/button&gt;
                                                        &lt;div id=&quot;fill-primary-modal&quot; class=&quot;modal fade&quot; tabindex=&quot;-1&quot; role=&quot;dialog&quot; aria-labelledby=&quot;fill-primary-modalLabel&quot; aria-hidden=&quot;true&quot;&gt;
                                                            &lt;div class=&quot;modal-dialog&quot;&gt;
                                                                &lt;div class=&quot;modal-content modal-filled bg-primary&quot;&gt;
                                                                    &lt;div class=&quot;modal-header&quot;&gt;
                                                                        &lt;h4 class=&quot;modal-title&quot; id=&quot;fill-primary-modalLabel&quot;&gt;Primary Filled Modal&lt;/h4&gt;
                                                                        &lt;button type=&quot;button&quot; class=&quot;btn-close&quot; data-bs-dismiss=&quot;modal&quot; aria-hidden=&quot;true&quot;&gt;&lt;/button&gt;
                                                                    &lt;/div&gt;
                                                                    &lt;div class=&quot;modal-body&quot;&gt;
                                                                        ...
                                                                    &lt;/div&gt;
                                                                    &lt;div class=&quot;modal-footer&quot;&gt;
                                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-light&quot; data-bs-dismiss=&quot;modal&quot;&gt;Close&lt;/button&gt;
                                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-light&quot;&gt;Save changes&lt;/button&gt;
                                                                    &lt;/div&gt;
                                                                &lt;/div&gt;&lt;!-- /.modal-content --&gt;
                                                            &lt;/div&gt;&lt;!-- /.modal-dialog --&gt;
                                                        &lt;/div&gt;&lt;!-- /.modal --&gt;
                                                        
                                                        &lt;!-- Success Filled Modal --&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-success&quot; data-bs-toggle=&quot;modal&quot; data-bs-target=&quot;#fill-success-modal&quot;&gt;Success Filled&lt;/button&gt;
                                                        &lt;div id=&quot;fill-success-modal&quot; class=&quot;modal fade&quot; tabindex=&quot;-1&quot; role=&quot;dialog&quot; aria-labelledby=&quot;fill-success-modalLabel&quot; aria-hidden=&quot;true&quot;&gt;
                                                            &lt;div class=&quot;modal-dialog&quot;&gt;
                                                                &lt;div class=&quot;modal-content modal-filled bg-success&quot;&gt;
                                                                    &lt;div class=&quot;modal-header&quot;&gt;
                                                                        &lt;h4 class=&quot;modal-title&quot; id=&quot;fill-success-modalLabel&quot;&gt;Success Filled Modal&lt;/h4&gt;
                                                                        &lt;button type=&quot;button&quot; class=&quot;btn-close&quot; data-bs-dismiss=&quot;modal&quot; aria-hidden=&quot;true&quot;&gt;&lt;/button&gt;
                                                                    &lt;/div&gt;
                                                                    &lt;div class=&quot;modal-body&quot;&gt;
                                                                        ...
                                                                    &lt;/div&gt;
                                                                    &lt;div class=&quot;modal-footer&quot;&gt;
                                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-light&quot; data-bs-dismiss=&quot;modal&quot;&gt;Close&lt;/button&gt;
                                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-light&quot;&gt;Save changes&lt;/button&gt;
                                                                    &lt;/div&gt;
                                                                &lt;/div&gt;&lt;!-- /.modal-content --&gt;
                                                            &lt;/div&gt;&lt;!-- /.modal-dialog --&gt;
                                                        &lt;/div&gt;&lt;!-- /.modal --&gt;
                                                        
                                                        &lt;!-- Info Filled Modal --&gt;
                                                        &lt;button  type=&quot;button&quot; class=&quot;btn btn-info&quot; data-bs-toggle=&quot;modal&quot; data-bs-target=&quot;#fill-info-modal&quot;&gt;Info Filled&lt;/button&gt;
                                                        &lt;div id=&quot;fill-info-modal&quot; class=&quot;modal fade&quot; tabindex=&quot;-1&quot; role=&quot;dialog&quot; aria-labelledby=&quot;fill-info-modalLabel&quot; aria-hidden=&quot;true&quot;&gt;
                                                            &lt;div class=&quot;modal-dialog&quot;&gt;
                                                                &lt;div class=&quot;modal-content modal-filled bg-info&quot;&gt;
                                                                    &lt;div class=&quot;modal-header&quot;&gt;
                                                                        &lt;h4 class=&quot;modal-title&quot; id=&quot;fill-info-modalLabel&quot;&gt;Info Filled Modal&lt;/h4&gt;
                                                                        &lt;button type=&quot;button&quot; class=&quot;btn-close&quot; data-bs-dismiss=&quot;modal&quot; aria-hidden=&quot;true&quot;&gt;&lt;/button&gt;
                                                                    &lt;/div&gt;
                                                                    &lt;div class=&quot;modal-body&quot;&gt;
                                                                        ...
                                                                    &lt;/div&gt;
                                                                    &lt;div class=&quot;modal-footer&quot;&gt;
                                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-light&quot; data-bs-dismiss=&quot;modal&quot;&gt;Close&lt;/button&gt;
                                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-light&quot;&gt;Save changes&lt;/button&gt;
                                                                    &lt;/div&gt;
                                                                &lt;/div&gt;&lt;!-- /.modal-content --&gt;
                                                            &lt;/div&gt;&lt;!-- /.modal-dialog --&gt;
                                                        &lt;/div&gt;&lt;!-- /.modal --&gt;
                                                        
                                                        &lt;!-- Warning Filled Modal --&gt;
                                                        &lt;button  type=&quot;button&quot; class=&quot;btn btn-warning&quot; data-bs-toggle=&quot;modal&quot; data-bs-target=&quot;#fill-warning-modal&quot;&gt;Warning Filled&lt;/button&gt;
                                                        &lt;div id=&quot;fill-warning-modal&quot; class=&quot;modal fade&quot; tabindex=&quot;-1&quot; role=&quot;dialog&quot; aria-labelledby=&quot;fill-warning-modalLabel&quot; aria-hidden=&quot;true&quot;&gt;
                                                            &lt;div class=&quot;modal-dialog&quot;&gt;
                                                                &lt;div class=&quot;modal-content modal-filled bg-warning&quot;&gt;
                                                                    &lt;div class=&quot;modal-header&quot;&gt;
                                                                        &lt;h4 class=&quot;modal-title&quot; id=&quot;fill-warning-modalLabel&quot;&gt;Warning Filled Modal&lt;/h4&gt;
                                                                        &lt;button type=&quot;button&quot; class=&quot;btn-close&quot; data-bs-dismiss=&quot;modal&quot; aria-hidden=&quot;true&quot;&gt;&lt;/button&gt;
                                                                    &lt;/div&gt;
                                                                    &lt;div class=&quot;modal-body&quot;&gt;
                                                                        ...
                                                                    &lt;/div&gt;
                                                                    &lt;div class=&quot;modal-footer&quot;&gt;
                                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-light&quot; data-bs-dismiss=&quot;modal&quot;&gt;Close&lt;/button&gt;
                                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-light&quot;&gt;Save changes&lt;/button&gt;
                                                                    &lt;/div&gt;
                                                                &lt;/div&gt;&lt;!-- /.modal-content --&gt;
                                                            &lt;/div&gt;&lt;!-- /.modal-dialog --&gt;
                                                        &lt;/div&gt;&lt;!-- /.modal --&gt;
                                                        
                                                        &lt;!-- Danger Filled Modal --&gt;
                                                        &lt;button  type=&quot;button&quot; class=&quot;btn btn-danger&quot; data-bs-toggle=&quot;modal&quot; data-bs-target=&quot;#fill-danger-modal&quot;&gt;Danger Filled&lt;/button&gt;
                                                        &lt;div id=&quot;fill-danger-modal&quot; class=&quot;modal fade&quot; tabindex=&quot;-1&quot; role=&quot;dialog&quot; aria-labelledby=&quot;fill-danger-modalLabel&quot; aria-hidden=&quot;true&quot;&gt;
                                                            &lt;div class=&quot;modal-dialog&quot;&gt;
                                                                &lt;div class=&quot;modal-content modal-filled bg-danger&quot;&gt;
                                                                    &lt;div class=&quot;modal-header&quot;&gt;
                                                                        &lt;h4 class=&quot;modal-title&quot; id=&quot;fill-danger-modalLabel&quot;&gt;Danger Filled Modal&lt;/h4&gt;
                                                                        &lt;button type=&quot;button&quot; class=&quot;btn-close&quot; data-bs-dismiss=&quot;modal&quot; aria-hidden=&quot;true&quot;&gt;&lt;/button&gt;
                                                                    &lt;/div&gt;
                                                                    &lt;div class=&quot;modal-body&quot;&gt;
                                                                        ...
                                                                    &lt;/div&gt;
                                                                    &lt;div class=&quot;modal-footer&quot;&gt;
                                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-light&quot; data-bs-dismiss=&quot;modal&quot;&gt;Close&lt;/button&gt;
                                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-light&quot;&gt;Save changes&lt;/button&gt;
                                                                    &lt;/div&gt;
                                                                &lt;/div&gt;&lt;!-- /.modal-content --&gt;
                                                            &lt;/div&gt;&lt;!-- /.modal-dialog --&gt;
                                                        &lt;/div&gt;&lt;!-- /.modal --&gt;
                                                        
                                                        &lt;!-- Dark Filled Modal --&gt;
                                                        &lt;button  type=&quot;button&quot; class=&quot;btn btn-dark&quot; data-bs-toggle=&quot;modal&quot; data-bs-target=&quot;#fill-dark-modal&quot;&gt;Dark Filled&lt;/button&gt;
                                                        &lt;div id=&quot;fill-dark-modal&quot; class=&quot;modal fade&quot; tabindex=&quot;-1&quot; role=&quot;dialog&quot; aria-labelledby=&quot;fill-dark-modalLabel&quot; aria-hidden=&quot;true&quot;&gt;
                                                            &lt;div class=&quot;modal-dialog&quot;&gt;
                                                                &lt;div class=&quot;modal-content modal-filled bg-dark&quot;&gt;
                                                                    &lt;div class=&quot;modal-header&quot;&gt;
                                                                        &lt;h4 class=&quot;modal-title&quot; id=&quot;fill-dark-modalLabel&quot;&gt;Dark Filled Modal&lt;/h4&gt;
                                                                        &lt;button type=&quot;button&quot; class=&quot;btn-close&quot; data-bs-dismiss=&quot;modal&quot; aria-hidden=&quot;true&quot;&gt;&lt;/button&gt;
                                                                    &lt;/div&gt;
                                                                    &lt;div class=&quot;modal-body&quot;&gt;
                                                                        ...
                                                                    &lt;/div&gt;
                                                                    &lt;div class=&quot;modal-footer&quot;&gt;
                                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-light&quot; data-bs-dismiss=&quot;modal&quot;&gt;Close&lt;/button&gt;
                                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-light&quot;&gt;Save changes&lt;/button&gt;
                                                                    &lt;/div&gt;
                                                                &lt;/div&gt;&lt;!-- /.modal-content --&gt;
                                                            &lt;/div&gt;&lt;!-- /.modal-dialog --&gt;
                                                        &lt;/div&gt;&lt;!-- /.modal --&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->
                                            </div> <!-- end preview code-->
                                        </div> <!-- end tab-content-->
                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Multiple Modal</h4>
                                        <p class="text-muted font-14">Display a series of modals one by one to guide your users on multiple aspects or take step wise input.</p>
                        
                                        <ul class="nav nav-tabs nav-bordered mb-3">
                                            <li class="nav-item">
                                                <a href="#modal-multiple-preview" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                                    Preview
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#modal-multiple-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                                    Code
                                                </a>
                                            </li>
                                        </ul> <!-- end nav-->
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="modal-multiple-preview">

                                                <!-- Modal -->
                                                <div id="multiple-one" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="multiple-oneModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title" id="multiple-oneModalLabel">Modal Heading</h4>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <h5 class="mt-0">Text in a modal</h5>
                                                                <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-primary" data-bs-target="#multiple-two" data-bs-toggle="modal" data-bs-dismiss="modal">Next</button>
                                                            </div>
                                                        </div><!-- /.modal-content -->
                                                    </div><!-- /.modal-dialog -->
                                                </div><!-- /.modal -->

                                                <!-- Modal -->
                                                <div id="multiple-two" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="multiple-twoModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title" id="multiple-twoModalLabel">Modal Heading</h4>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <h5 class="mt-0">Text in a modal</h5>
                                                                <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                                                            </div>
                                                        </div><!-- /.modal-content -->
                                                    </div><!-- /.modal-dialog -->
                                                </div><!-- /.modal -->
            
                                                <div class="button-list">
                                                    <!-- Multiple modal -->
                                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#multiple-one">Multiple Modal</button>
                                                </div>
                                            </div> <!-- end preview-->
                                        
                                            <div class="tab-pane" id="modal-multiple-code">
                                                <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;!-- Modal --&gt;
                                                        &lt;div id=&quot;multiple-one&quot; class=&quot;modal fade&quot; tabindex=&quot;-1&quot; role=&quot;dialog&quot; aria-labelledby=&quot;multiple-oneModalLabel&quot; aria-hidden=&quot;true&quot;&gt;
                                                            &lt;div class=&quot;modal-dialog&quot;&gt;
                                                                &lt;div class=&quot;modal-content&quot;&gt;
                                                                    &lt;div class=&quot;modal-header&quot;&gt;
                                                                        &lt;h4 class=&quot;modal-title&quot; id=&quot;multiple-oneModalLabel&quot;&gt;Modal Heading&lt;/h4&gt;
                                                                        &lt;button type=&quot;button&quot; class=&quot;btn-close&quot; data-bs-dismiss=&quot;modal&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
                                                                    &lt;/div&gt;
                                                                    &lt;div class=&quot;modal-body&quot;&gt;
                                                                        &lt;h5 class=&quot;mt-0&quot;&gt;Text in a modal&lt;/h5&gt;
                                                                        &lt;p&gt;Duis mollis, est non commodo luctus, nisi erat porttitor ligula.&lt;/p&gt;
                                                                    &lt;/div&gt;
                                                                    &lt;div class=&quot;modal-footer&quot;&gt;
                                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot; data-bs-target=&quot;#multiple-two&quot; data-bs-toggle=&quot;modal&quot; data-bs-dismiss=&quot;modal&quot;&gt;Next&lt;/button&gt;
                                                                    &lt;/div&gt;
                                                                &lt;/div&gt;&lt;!-- /.modal-content --&gt;
                                                            &lt;/div&gt;&lt;!-- /.modal-dialog --&gt;
                                                        &lt;/div&gt;&lt;!-- /.modal --&gt;

                                                        &lt;!-- Modal --&gt;
                                                        &lt;div id=&quot;multiple-two&quot; class=&quot;modal fade&quot; tabindex=&quot;-1&quot; role=&quot;dialog&quot; aria-labelledby=&quot;multiple-twoModalLabel&quot; aria-hidden=&quot;true&quot;&gt;
                                                            &lt;div class=&quot;modal-dialog&quot;&gt;
                                                                &lt;div class=&quot;modal-content&quot;&gt;
                                                                    &lt;div class=&quot;modal-header&quot;&gt;
                                                                        &lt;h4 class=&quot;modal-title&quot; id=&quot;multiple-twoModalLabel&quot;&gt;Modal Heading&lt;/h4&gt;
                                                                        &lt;button type=&quot;button&quot; class=&quot;btn-close&quot; data-bs-dismiss=&quot;modal&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
                                                                    &lt;/div&gt;
                                                                    &lt;div class=&quot;modal-body&quot;&gt;
                                                                        &lt;h5 class=&quot;mt-0&quot;&gt;Text in a modal&lt;/h5&gt;
                                                                        &lt;p&gt;Duis mollis, est non commodo luctus, nisi erat porttitor ligula.&lt;/p&gt;
                                                                    &lt;/div&gt;
                                                                    &lt;div class=&quot;modal-footer&quot;&gt;
                                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot; data-bs-dismiss=&quot;modal&quot;&gt;Close&lt;/button&gt;
                                                                    &lt;/div&gt;
                                                                &lt;/div&gt;&lt;!-- /.modal-content --&gt;
                                                            &lt;/div&gt;&lt;!-- /.modal-dialog --&gt;
                                                        &lt;/div&gt;&lt;!-- /.modal --&gt;
                    
                                                        &lt;div class=&quot;button-list&quot;&gt;
                                                            &lt;!-- Multiple modal --&gt;
                                                            &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot; data-bs-toggle=&quot;modal&quot; data-bs-target=&quot;#multiple-one&quot;&gt;Multiple Modal&lt;/button&gt;
                                                        &lt;/div&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->
                                            </div> <!-- end preview code-->
                                        </div> <!-- end tab-content-->
                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->
                            </div> <!-- end col -->

                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Toggle Between Modals</h4>
                                        <p class="text-muted font-14">Toggle between multiple modals with some clever placement of the <code>data-bs-target</code> and <code>data-bs-toggle</code> attributes.</p>
                        
                                        <ul class="nav nav-tabs nav-bordered mb-3">
                                            <li class="nav-item">
                                                <a href="#modal-toggle-preview" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                                    Preview
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#modal-toggle-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                                    Code
                                                </a>
                                            </li>
                                        </ul> <!-- end nav-->
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="modal-toggle-preview">
                                                <!-- Modal -->
                                                <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel"
                                                    tabindex="-1">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalToggleLabel">Modal 1</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                Show a second modal and hide this one with the button below.
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal"
                                                                    data-bs-dismiss="modal">Open second modal</button>
                                                            </div>
                                                        </div><!-- /.modal-content -->
                                                    </div><!-- /.modal-dialog -->
                                                </div><!-- /.modal -->
        
                                                <!-- Modal -->
                                                <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2"
                                                    tabindex="-1">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalToggleLabel2">Modal 2</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                Hide this modal and show the first with the button below.
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal"
                                                                    data-bs-dismiss="modal">Back to first</button>
                                                            </div>
                                                        </div><!-- /.modal-content -->
                                                    </div><!-- /.modal-dialog -->
                                                </div><!-- /.modal -->
            
                                                <a class="btn btn-secondary" data-bs-toggle="modal" href="#exampleModalToggle" role="button">Open first modal</a>
                                                
                                            </div> <!-- end preview-->
                                        
                                            <div class="tab-pane" id="modal-toggle-code">
                                                <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;!-- Modal --&gt;
                                                        &lt;div class=&quot;modal fade&quot; id=&quot;exampleModalToggle&quot; aria-hidden=&quot;true&quot; aria-labelledby=&quot;exampleModalToggleLabel&quot;
                                                            tabindex=&quot;-1&quot;&gt;
                                                            &lt;div class=&quot;modal-dialog modal-dialog-centered&quot;&gt;
                                                                &lt;div class=&quot;modal-content&quot;&gt;
                                                                    &lt;div class=&quot;modal-header&quot;&gt;
                                                                        &lt;h5 class=&quot;modal-title&quot; id=&quot;exampleModalToggleLabel&quot;&gt;Modal 1&lt;/h5&gt;
                                                                        &lt;button type=&quot;button&quot; class=&quot;btn-close&quot; data-bs-dismiss=&quot;modal&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
                                                                    &lt;/div&gt;
                                                                    &lt;div class=&quot;modal-body&quot;&gt;
                                                                        Show a second modal and hide this one with the button below.
                                                                    &lt;/div&gt;
                                                                    &lt;div class=&quot;modal-footer&quot;&gt;
                                                                        &lt;button class=&quot;btn btn-primary&quot; data-bs-target=&quot;#exampleModalToggle2&quot; data-bs-toggle=&quot;modal&quot;
                                                                            data-bs-dismiss=&quot;modal&quot;&gt;Open second modal&lt;/button&gt;
                                                                    &lt;/div&gt;
                                                                &lt;/div&gt;&lt;!-- /.modal-content --&gt;
                                                            &lt;/div&gt;&lt;!-- /.modal-dialog --&gt;
                                                        &lt;/div&gt;&lt;!-- /.modal --&gt;
                
                                                        &lt;!-- Modal --&gt;
                                                        &lt;div class=&quot;modal fade&quot; id=&quot;exampleModalToggle2&quot; aria-hidden=&quot;true&quot; aria-labelledby=&quot;exampleModalToggleLabel2&quot;
                                                            tabindex=&quot;-1&quot;&gt;
                                                            &lt;div class=&quot;modal-dialog modal-dialog-centered&quot;&gt;
                                                                &lt;div class=&quot;modal-content&quot;&gt;
                                                                    &lt;div class=&quot;modal-header&quot;&gt;
                                                                        &lt;h5 class=&quot;modal-title&quot; id=&quot;exampleModalToggleLabel2&quot;&gt;Modal 2&lt;/h5&gt;
                                                                        &lt;button type=&quot;button&quot; class=&quot;btn-close&quot; data-bs-dismiss=&quot;modal&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
                                                                    &lt;/div&gt;
                                                                    &lt;div class=&quot;modal-body&quot;&gt;
                                                                        Hide this modal and show the first with the button below.
                                                                    &lt;/div&gt;
                                                                    &lt;div class=&quot;modal-footer&quot;&gt;
                                                                        &lt;button class=&quot;btn btn-primary&quot; data-bs-target=&quot;#exampleModalToggle&quot; data-bs-toggle=&quot;modal&quot;
                                                                            data-bs-dismiss=&quot;modal&quot;&gt;Back to first&lt;/button&gt;
                                                                    &lt;/div&gt;
                                                                &lt;/div&gt;&lt;!-- /.modal-content --&gt;
                                                            &lt;/div&gt;&lt;!-- /.modal-dialog --&gt;
                                                        &lt;/div&gt;&lt;!-- /.modal --&gt;
                    
                                                        &lt;a class=&quot;btn btn-secondary&quot; data-bs-toggle=&quot;modal&quot; href=&quot;#exampleModalToggle&quot; role=&quot;button&quot;&gt;Open first modal&lt;/a&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->
                                            </div> <!-- end preview code-->
                                        </div> <!-- end tab-content-->
                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Static Backdrop</h4>
                                        <p class="text-muted font-14">When backdrop is set to static, the modal will not close when clicking outside it. Click the button below to try it.</p>
                        
                                        <ul class="nav nav-tabs nav-bordered mb-3">
                                            <li class="nav-item">
                                                <a href="#modal-static-preview" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                                    Preview
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#modal-static-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                                    Code
                                                </a>
                                            </li>
                                        </ul> <!-- end nav-->
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="modal-static-preview">
                                                <div class="button-list">
                                                    <!-- Static Backdrop modal -->
                                                    <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                                        Static Backdrop
                                                    </button>
                                                </div> <!-- btn list -->

                                                <!-- Modal -->
                                                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div> <!-- end modal header -->
                                                            <div class="modal-body">
                                                                <p class="m-0">I will not close if you click outside me. Don't even try to press escape key.</p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                <button type="button" class="btn btn-primary">Understood</button>
                                                            </div> <!-- end modal footer -->
                                                        </div> <!-- end modal content-->
                                                    </div> <!-- end modal dialog-->
                                                </div> <!-- end modal-->
                                                
                                            </div> <!-- end preview-->
                                        
                                            <div class="tab-pane" id="modal-static-code">
                                                <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;!-- Static Backdrop modal --&gt;
                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-info&quot; data-bs-toggle=&quot;modal&quot; data-bs-target=&quot;#staticBackdrop&quot;&gt;
                                                            Static Backdrop
                                                        &lt;/button&gt;

                                                        &lt;!-- Modal --&gt;
                                                        &lt;div class=&quot;modal fade&quot; id=&quot;staticBackdrop&quot; data-bs-backdrop=&quot;static&quot; data-bs-keyboard=&quot;false&quot; tabindex=&quot;-1&quot; aria-labelledby=&quot;staticBackdropLabel&quot; aria-hidden=&quot;true&quot;&gt;
                                                            &lt;div class=&quot;modal-dialog&quot;&gt;
                                                                &lt;div class=&quot;modal-content&quot;&gt;
                                                                    &lt;div class=&quot;modal-header&quot;&gt;
                                                                        &lt;h5 class=&quot;modal-title&quot; id=&quot;staticBackdropLabel&quot;&gt;Modal title&lt;/h5&gt;
                                                                        &lt;button type=&quot;button&quot; class=&quot;btn-close&quot; data-bs-dismiss=&quot;modal&quot; aria-hidden=&quot;true&quot;&gt;&lt;/button&gt;
                                                                    &lt;/div&gt; &lt;!-- end modal header --&gt;
                                                                    &lt;div class=&quot;modal-body&quot;&gt;
                                                                        ...
                                                                    &lt;/div&gt;
                                                                    &lt;div class=&quot;modal-footer&quot;&gt;
                                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot; data-bs-dismiss=&quot;modal&quot;&gt;Close&lt;/button&gt;
                                                                        &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;Understood&lt;/button&gt;
                                                                    &lt;/div&gt; &lt;!-- end modal footer --&gt;
                                                                &lt;/div&gt; &lt;!-- end modal content--&gt;
                                                            &lt;/div&gt; &lt;!-- end modal dialog--&gt;
                                                        &lt;/div&gt; &lt;!-- end modal--&gt;
                                                    </span>
                                                </pre> <!-- end highlight-->
                                            </div> <!-- end preview code-->
                                        </div> <!-- end tab-content-->
                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->
                            </div> <!-- end col -->
                        </div> <!-- end row -->
                        
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
        
    </body>

<!-- Mirrored from coderthemes.com/hyper_2/saas/ui-modals.html by HTTrack Website Copier/3.x [XR&CO'2017], Sun, 19 Dec 2021 00:32:11 GMT -->
</html>
