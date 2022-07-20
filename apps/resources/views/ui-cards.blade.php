<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from coderthemes.com/hyper_2/saas/ui-cards.html by HTTrack Website Copier/3.x [XR&CO'2017], Sun, 19 Dec 2021 00:32:09 GMT -->
<head>
        <meta charset="utf-8" />
        <title>Cards | Hyper - Responsive Bootstrap 5 Admin Dashboard</title>
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
                                            <li class="breadcrumb-item active">Cards</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Cards</h4>
                                </div>
                            </div>
                        </div>      
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-sm-6 col-lg-3">
                
                                <!-- Simple card -->
                                <div class="card d-block">
                                    <img class="card-img-top" src="assets/images/small/small-1.jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">Some quick example text to build on the card title and make
                                            up the bulk of the card's content. Some quick example text to build on the card title and make up.</p>
                                        <a href="javascript: void(0);" class="btn btn-primary">Button</a>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div><!-- end col -->

                            <div class="col-sm-6 col-lg-3">
                                <div class="card d-block">
                                    <img class="card-img-top" src="assets/images/small/small-2.jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">Some quick example text to build on the card..</p>
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">Cras justo odio</li>
                                    </ul>
                                    <div class="card-body">
                                        <a href="javascript: void(0);" class="card-link text-custom">Card link</a>
                                        <a href="javascript: void(0);" class="card-link text-custom">Another link</a>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div><!-- end col -->

                            <div class="col-sm-6 col-lg-3">
                                <div class="card d-block">
                                    <img class="card-img-top" src="assets/images/small/small-3.jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <p class="card-text">Some quick example text to build on the card title and make
                                            up the bulk of the card's content. Some quick example text to build on the card title and make up.</p>
                                        <a href="javascript: void(0);" class="btn btn-primary">Button</a>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div><!-- end col -->


                            <div class="col-sm-6 col-lg-3">
                                <div class="card d-block">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <h6 class="card-subtitle text-muted">Support card subtitle</h6>
                                    </div>
                                    <img class="img-fluid" src="assets/images/small/small-4.jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <p class="card-text">Some quick example text to build on the card title and make
                                            up the bulk of the card's content.</p>
                                        <a href="javascript: void(0);" class="card-link text-custom">Card link</a>
                                        <a href="javascript: void(0);" class="card-link text-custom">Another link</a>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div><!-- end col -->
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="card card-body">
                                    <h5 class="card-title">Special title treatment</h5>
                                    <p class="card-text">With supporting text below as a natural lead-in to additional
                                        content.</p>
                                    <a href="javascript: void(0);" class="btn btn-primary">Go somewhere</a>
                                </div> <!-- end card-->
                            </div> <!-- end col-->
                            <div class="col-sm-6">
                                <div class="card card-body">
                                    <h5 class="card-title">Special title treatment</h5>
                                    <p class="card-text">With supporting text below as a natural lead-in to additional
                                        content.</p>
                                    <a href="javascript: void(0);" class="btn btn-primary">Go somewhere</a>
                                </div> <!-- end card-->
                            </div> <!-- end col-->
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-md-4">
                                <div class="card">
                                    <h6 class="card-header">Featured</h6>
                                    <div class="card-body">
                                        <h5 class="card-title">Special title treatment</h5>
                                        <p class="card-text">With supporting text below as a natural lead-in to
                                            additional content.</p>
                                        <a href="javascript: void(0);" class="btn btn-primary">Go somewhere</a>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col-->

                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-header">
                                        Quote
                                    </div>
                                    <div class="card-body">
                                        <blockquote class="card-bodyquote">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
                                                erat a ante.</p>
                                            <footer>Someone famous in <cite title="Source Title">Source Title</cite>
                                            </footer>
                                        </blockquote>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col-->

                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-header">
                                        Featured
                                    </div>
                                    <div class="card-body">
                                        <a href="javascript: void(0);" class="btn btn-primary">Go somewhere</a>
                                    </div>
                                    <div class="card-footer text-muted">
                                        2 days ago
                                    </div>
                                </div> <!-- end card-->
                            </div> <!-- end col-->
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-12">
                                <h4 class="mb-4">Card Colored</h4>
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-lg-4 col-sm-6">
                                <div class="card bg-secondary text-white">
                                    <div class="card-body">
                                        <h5 class="card-title">Special title treatment</h5>
                                        <p class="card-text">With supporting text below as a natural lead-in to
                                            additional content.</p>
                                        <a href="javascript: void(0);" class="btn btn-primary btn-sm">Button</a>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col-->

                            <div class="col-lg-4 col-sm-6">
                                <div class="card text-white bg-primary">
                                    <div class="card-body">
                                        <blockquote class="card-bodyquote">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
                                                erat a ante.</p>
                                            <footer>Someone famous in <cite title="Source Title">Source Title</cite>
                                            </footer>
                                        </blockquote>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col-->

                            <div class="col-lg-4 col-sm-6">
                                <div class="card text-white bg-success">
                                    <div class="card-body">
                                        <blockquote class="card-bodyquote">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
                                                erat a ante.</p>
                                            <footer>Someone famous in <cite title="Source Title">Source Title</cite>
                                            </footer>
                                        </blockquote>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col-->

                            <div class="col-lg-4 col-sm-6">
                                <div class="card text-white bg-info">
                                    <div class="card-body">
                                        <blockquote class="card-bodyquote">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
                                                erat a ante.</p>
                                            <footer>Someone famous in <cite title="Source Title">Source Title</cite>
                                            </footer>
                                        </blockquote>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col-->

                            <div class="col-lg-4 col-sm-6">
                                <div class="card text-white bg-warning">
                                    <div class="card-body">
                                        <blockquote class="card-bodyquote">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
                                                erat a ante.</p>
                                            <footer>Someone famous in <cite title="Source Title">Source Title</cite>
                                            </footer>
                                        </blockquote>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col-->

                            <div class="col-lg-4 col-sm-6">
                                <div class="card text-white bg-danger">
                                    <div class="card-body">
                                        <blockquote class="card-bodyquote">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere
                                                erat a ante.</p>
                                            <footer>Someone famous in <cite title="Source Title">Source Title</cite>
                                            </footer>
                                        </blockquote>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col-->
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-12">
                                <h4 class="mb-4">Card Bordered</h4>
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-md-4">
                                <div class="card border-secondary border">
                                    <div class="card-body">
                                        <h5 class="card-title">Special title treatment</h5>
                                        <p class="card-text">With supporting text below as a natural lead-in to
                                            additional content.</p>
                                        <a href="javascript: void(0);" class="btn btn-secondary btn-sm">Button</a>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col-->

                            <div class="col-md-4">
                                <div class="card border-primary border">
                                    <div class="card-body">
                                        <h5 class="card-title text-primary">Special title treatment</h5>
                                        <p class="card-text">With supporting text below as a natural lead-in to
                                            additional content.</p>
                                        <a href="javascript: void(0);" class="btn btn-primary btn-sm">Button</a>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col-->

                            <div class="col-md-4">
                                <div class="card border-success border">
                                    <div class="card-body">
                                        <h5 class="card-title text-success">Special title treatment</h5>
                                        <p class="card-text">With supporting text below as a natural lead-in to
                                            additional content.</p>
                                        <a href="javascript: void(0);" class="btn btn-success btn-sm">Button</a>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col-->
                        </div>
                        <!-- end row -->

                        
                        <div class="row">
                            <div class="col-12">
                                <h4 class="mb-4">Horizontal Card</h4>
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="row g-0 align-items-center">
                                        <div class="col-md-4">
                                            <img src="assets/images/small/small-4.jpg" class="card-img" alt="...">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <h5 class="card-title">Card title</h5>
                                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                            </div> <!-- end card-body-->
                                        </div> <!-- end col -->
                                    </div> <!-- end row-->
                                </div> <!-- end card-->
                            </div> <!-- end col-->
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="row g-0 align-items-center">
                                        <div class="col-md-8">
                                            <div class="card-body">
                                                <h5 class="card-title">Card title</h5>
                                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                            </div> <!-- end card-body -->
                                        </div> <!-- end col -->
                                        <div class="col-md-4">
                                            <img src="assets/images/small/small-1.jpg" class="card-img" alt="...">
                                        </div> <!-- end col -->
                                    </div> <!-- end row-->
                                </div> <!-- end card -->
                            </div> <!-- end col-->
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-12">
                                <h4 class="mb-4">Stretched link</h4>
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-sm-6 col-lg-3">
                                <div class="card">
                                    <img src="assets/images/small/small-2.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Card with stretched link</h5>
                                        <a href="#" class="btn btn-primary mt-2 stretched-link">Go somewhere</a>
                                    </div> <!-- end card-body -->
                                </div> <!-- end card -->
                            </div> <!-- end col-->
                            <div class="col-sm-6 col-lg-3">
                                <div class="card">
                                    <img src="assets/images/small/small-3.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title"><a href="#" class="text-success stretched-link">Card with stretched link</a></h5>
                                        <p class="card-text">
                                            Some quick example text to build on the card up the bulk of the card's content.
                                        </p>
                                    </div> <!-- end card-body -->
                                </div> <!-- end card -->
                            </div> <!-- end col-->
                            <div class="col-sm-6 col-lg-3">
                                <div class="card">
                                    <img src="assets/images/small/small-4.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Card with stretched link</h5>
                                        <a href="#" class="btn btn-info mt-2 stretched-link">Go somewhere</a>
                                    </div> <!-- end card-body -->
                                </div> <!-- end card -->
                            </div> <!-- end col-->
                            <div class="col-sm-6 col-lg-3">
                                <div class="card">
                                    <img src="assets/images/small/small-1.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title"><a href="#" class="stretched-link">Card with stretched link</a></h5>
                                        <p class="card-text">
                                            Some quick example text to build on the card up the bulk of the card's content.
                                        </p>
                                    </div> <!-- end card-body -->
                                </div> <!-- end card -->
                            </div> <!-- end col-->
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-12">
                                <h4 class="mb-4">Card Group</h4>
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->
                        
                        <div class="row">
                            <div class="col-12">
                                <div class="card-group">
                                    <div class="card d-block">
                                        <img class="card-img-top" src="assets/images/small/small-1.jpg" alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                            <p class="card-text">This is a wider card with supporting text below as a
                                                natural lead-in to additional content. This content is a little bit
                                                longer.</p>
                                            <p class="card-text">
                                                <small class="text-muted">Last updated 3 mins ago</small>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="card d-block">
                                        <img class="card-img-top" src="assets/images/small/small-2.jpg" alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                            <p class="card-text">This card has supporting text below as a natural
                                                lead-in to additional content.</p>
                                            <p class="card-text">
                                                <small class="text-muted">Last updated 3 mins ago</small>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="card d-block">
                                        <img class="card-img-top" src="assets/images/small/small-3.jpg" alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                            <p class="card-text">This is a wider card with supporting text below as a
                                                natural lead-in to additional content. This card has even longer content
                                                than the first to show that equal height action.</p>
                                            <p class="card-text">
                                                <small class="text-muted">Last updated 3 mins ago</small>
                                            </p>
                                        </div>
                                    </div>
                                </div> <!-- end card-group-->
                            </div> <!-- end col-->
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-12">
                                <h4 class="mb-4 mt-4">Card Decks</h4>
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-12">
                                <div class="row row-cols-1 row-cols-md-3 g-3">
                                    <div class="col">
                                        <div class="card">
                                            <img src="assets/images/small/small-4.jpg" class="card-img-top" alt="Card image cap">
                                            <div class="card-body">
                                                <h5 class="card-title">Card title</h5>
                                                <p class="card-text">This is a longer card with supporting text below as
                                                    a natural lead-in to additional content. This content is a little
                                                    bit longer.</p>
                                                <p class="card-text">
                                                    <small class="text-muted">Last updated 3 mins ago</small>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card">
                                            <img src="assets/images/small/small-1.jpg" class="card-img-top" alt="Card image cap">
                                            <div class="card-body">
                                                <h5 class="card-title">Card title</h5>
                                                <p class="card-text">This card has supporting text below as a natural
                                                    lead-in to additional content.</p>
                                                <p class="card-text">
                                                    <small class="text-muted">Last updated 3 mins ago</small>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card">
                                            <img src="assets/images/small/small-2.jpg" class="card-img-top" alt="Card image cap">
                                            <div class="card-body">
                                                <h5 class="card-title">Card title</h5>
                                                <p class="card-text">This is a wider card with supporting text below as
                                                    a natural lead-in to additional content. This card has even longer
                                                    content than the first to show that equal height action.</p>
                                                <p class="card-text">
                                                    <small class="text-muted">Last updated 3 mins ago</small>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end col-->
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-12">
                                <h4 class="mb-4 mt-4">Custom Card Portlets</h4>
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <ul class="nav nav-tabs nav-bordered mb-3">
                                            <li class="nav-item">
                                                <a href="#-preview" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                                    Preview
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#-code" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                                    Code
                                                </a>
                                            </li>
                                        </ul> <!-- end nav-->
                                        <div class="tab-content">
                                            <div class="tab-pane show active" id="-preview">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <!-- Portlet card -->
                                                        <div class="card mb-md-0 mb-3">
                                                            <div class="card-body">
                                                                <div class="card-widgets">
                                                                    <a href="javascript:;" data-bs-toggle="reload"><i class="mdi mdi-refresh"></i></a>
                                                                    <a data-bs-toggle="collapse" href="#cardCollpase1" role="button" aria-expanded="false" aria-controls="cardCollpase1"><i class="mdi mdi-minus"></i></a>
                                                                    <a href="#" data-bs-toggle="remove"><i class="mdi mdi-close"></i></a>
                                                                </div>
                                                                <h5 class="card-title mb-0">Card title</h5>
                        
                                                                <div id="cardCollpase1" class="collapse pt-3 show">
                                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
                                                                    non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua
                                                                    put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer
                                                                    labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft
                                                                    beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable
                                                                    VHS.
                                                                </div>
                                                            </div>
                                                        </div> <!-- end card-->
                                                    </div><!-- end col -->
                        
                                                    <div class="col-md-4">
                                                        <!-- Portlet card -->
                                                        <div class="card bg-primary text-white mb-md-0 mb-3">
                                                            <div class="card-body">
                                                                <div class="card-widgets">
                                                                    <a href="javascript:;" data-bs-toggle="reload"><i class="mdi mdi-refresh"></i></a>
                                                                    <a data-bs-toggle="collapse" href="#cardCollpase2" role="button" aria-expanded="false" aria-controls="cardCollpase2"><i class="mdi mdi-minus"></i></a>
                                                                    <a href="#" data-bs-toggle="remove"><i class="mdi mdi-close"></i></a>
                                                                </div>
                                                                <h5 class="card-title mb-0">Card title</h5>
                        
                                                                <div id="cardCollpase2" class="collapse pt-3 show">
                                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
                                                                    non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua
                                                                    put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer
                                                                    labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft
                                                                    beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable
                                                                    VHS.
                                                                </div>
                                                            </div>
                                                        </div> <!-- end card-->
                                                    </div><!-- end col -->
                        
                                                    <div class="col-md-4">
                                                        <!-- Portlet card -->
                                                        <div class="card bg-success text-white mb-0">
                                                            <div class="card-body">
                                                                <div class="card-widgets">
                                                                    <a href="javascript:;" data-bs-toggle="reload"><i class="mdi mdi-refresh"></i></a>
                                                                    <a data-bs-toggle="collapse" href="#cardCollpase3" role="button" aria-expanded="false" aria-controls="cardCollpase3"><i class="mdi mdi-minus"></i></a>
                                                                    <a href="#" data-bs-toggle="remove"><i class="mdi mdi-close"></i></a>
                                                                </div>
                                                                <h5 class="card-title mb-0">Card title</h5>
                        
                                                                <div id="cardCollpase3" class="collapse pt-3 show">
                                                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
                                                                    non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua
                                                                    put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer
                                                                    labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft
                                                                    beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable
                                                                    VHS.
                                                                </div>
                                                            </div>
                                                        </div> <!-- end card-->
                                                    </div><!-- end col -->
                                                </div>
                                                <!-- end row -->          
                                            </div> <!-- end preview-->
                                        
                                            <div class="tab-pane" id="-code">
                                                <pre class="mb-0">
                                                    <span class="html escape">
                                                        &lt;div class=&quot;row&quot;&gt;
                                                            &lt;div class=&quot;col-md-4&quot;&gt;
                                                                &lt;!-- Portlet card --&gt;
                                                                &lt;div class=&quot;card mb-md-0 mb-3&quot;&gt;
                                                                    &lt;div class=&quot;card-body&quot;&gt;
                                                                        &lt;div class=&quot;card-widgets&quot;&gt;
                                                                            &lt;a href=&quot;javascript:;&quot; data-bs-toggle=&quot;reload&quot;&gt;&lt;i class=&quot;mdi mdi-refresh&quot;&gt;&lt;/i&gt;&lt;/a&gt;
                                                                            &lt;a data-bs-toggle=&quot;collapse&quot; href=&quot;#cardCollpase1&quot; role=&quot;button&quot; aria-expanded=&quot;false&quot; aria-controls=&quot;cardCollpase1&quot;&gt;&lt;i class=&quot;mdi mdi-minus&quot;&gt;&lt;/i&gt;&lt;/a&gt;
                                                                            &lt;a href=&quot;#&quot; data-bs-toggle=&quot;remove&quot;&gt;&lt;i class=&quot;mdi mdi-close&quot;&gt;&lt;/i&gt;&lt;/a&gt;
                                                                        &lt;/div&gt;
                                                                        &lt;h5 class=&quot;card-title mb-0&quot;&gt;Card title&lt;/h5&gt;
                                
                                                                        &lt;div id=&quot;cardCollpase1&quot; class=&quot;collapse pt-3 show&quot;&gt;
                                                                            ...
                                                                        &lt;/div&gt;
                                                                    &lt;/div&gt;
                                                                &lt;/div&gt; &lt;!-- end card--&gt;
                                                            &lt;/div&gt;&lt;!-- end col --&gt;
                                
                                                            &lt;div class=&quot;col-md-4&quot;&gt;
                                                                &lt;!-- Portlet card --&gt;
                                                                &lt;div class=&quot;card bg-primary text-white mb-md-0 mb-3&quot;&gt;
                                                                    &lt;div class=&quot;card-body&quot;&gt;
                                                                        &lt;div class=&quot;card-widgets&quot;&gt;
                                                                            &lt;a href=&quot;javascript:;&quot; data-bs-toggle=&quot;reload&quot;&gt;&lt;i class=&quot;mdi mdi-refresh&quot;&gt;&lt;/i&gt;&lt;/a&gt;
                                                                            &lt;a data-bs-toggle=&quot;collapse&quot; href=&quot;#cardCollpase2&quot; role=&quot;button&quot; aria-expanded=&quot;false&quot; aria-controls=&quot;cardCollpase2&quot;&gt;&lt;i class=&quot;mdi mdi-minus&quot;&gt;&lt;/i&gt;&lt;/a&gt;
                                                                            &lt;a href=&quot;#&quot; data-bs-toggle=&quot;remove&quot;&gt;&lt;i class=&quot;mdi mdi-close&quot;&gt;&lt;/i&gt;&lt;/a&gt;
                                                                        &lt;/div&gt;
                                                                        &lt;h5 class=&quot;card-title mb-0&quot;&gt;Card title&lt;/h5&gt;
                                
                                                                        &lt;div id=&quot;cardCollpase2&quot; class=&quot;collapse pt-3 show&quot;&gt;
                                                                            ...
                                                                        &lt;/div&gt;
                                                                    &lt;/div&gt;
                                                                &lt;/div&gt; &lt;!-- end card--&gt;
                                                            &lt;/div&gt;&lt;!-- end col --&gt;
                                
                                                            &lt;div class=&quot;col-md-4&quot;&gt;
                                                                &lt;!-- Portlet card --&gt;
                                                                &lt;div class=&quot;card bg-success text-white mb-0&quot;&gt;
                                                                    &lt;div class=&quot;card-body&quot;&gt;
                                                                        &lt;div class=&quot;card-widgets&quot;&gt;
                                                                            &lt;a href=&quot;javascript:;&quot; data-bs-toggle=&quot;reload&quot;&gt;&lt;i class=&quot;mdi mdi-refresh&quot;&gt;&lt;/i&gt;&lt;/a&gt;
                                                                            &lt;a data-bs-toggle=&quot;collapse&quot; href=&quot;#cardCollpase3&quot; role=&quot;button&quot; aria-expanded=&quot;false&quot; aria-controls=&quot;cardCollpase3&quot;&gt;&lt;i class=&quot;mdi mdi-minus&quot;&gt;&lt;/i&gt;&lt;/a&gt;
                                                                            &lt;a href=&quot;#&quot; data-bs-toggle=&quot;remove&quot;&gt;&lt;i class=&quot;mdi mdi-close&quot;&gt;&lt;/i&gt;&lt;/a&gt;
                                                                        &lt;/div&gt;
                                                                        &lt;h5 class=&quot;card-title mb-0&quot;&gt;Card title&lt;/h5&gt;
                                
                                                                        &lt;div id=&quot;cardCollpase3&quot; class=&quot;collapse pt-3 show&quot;&gt;
                                                                            ...
                                                                        &lt;/div&gt;
                                                                    &lt;/div&gt;
                                                                &lt;/div&gt; &lt;!-- end card--&gt;
                                                            &lt;/div&gt;&lt;!-- end col --&gt;
                                                        &lt;/div&gt;
                                                        &lt;!-- end row --&gt;  
                                                    </span>
                                                </pre> <!-- end highlight-->
                                            </div> <!-- end preview code-->
                                        </div> <!-- end tab-content-->
                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->
                        
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

<!-- Mirrored from coderthemes.com/hyper_2/saas/ui-cards.html by HTTrack Website Copier/3.x [XR&CO'2017], Sun, 19 Dec 2021 00:32:09 GMT -->
</html>
