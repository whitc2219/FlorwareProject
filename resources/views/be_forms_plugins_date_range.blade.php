<!doctype html>
<html lang="en" class="no-focus">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title>Codebase - Bootstrap 4 Admin Template &amp; UI Framework</title>

    <meta name="description" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">

    <!-- Open Graph Meta -->
    <meta property="og:title" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework">
    <meta property="og:site_name" content="Codebase">
    <meta property="og:description" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="">

    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="assets/media/favicons/favicon.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/media/favicons/favicon-192x192.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/media/favicons/apple-touch-icon-180x180.png">
    <!-- END Icons -->

    <!-- Stylesheets -->

    <!-- Page JS Plugins CSS -->
    <link rel="stylesheet" href="assets/js/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css">
    <link rel="stylesheet" href="assets/js/plugins/select2/css/select2.min.css">

    <!-- Fonts and Codebase framework -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,400i,600,700">
    <link rel="stylesheet" id="css-main" href="assets/css/codebase.min.css">

    <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
    <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/flat.min.css"> -->
    <!-- END Stylesheets -->
</head>
<body>



<div id="page-container" class="sidebar-o enable-page-overlay side-scroll page-header-modern main-content-boxed">
    <!-- Side Overlay-->
    <aside id="side-overlay">
        <!-- Side Header -->
        <div class="content-header content-header-fullrow">
            <div class="content-header-section align-parent">
                <!-- Close Side Overlay -->
                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                <button type="button" class="btn btn-circle btn-dual-secondary align-v-r" data-toggle="layout" data-action="side_overlay_close">
                    <i class="fa fa-times text-danger"></i>
                </button>
                <!-- END Close Side Overlay -->

                <!-- User Info -->
                <div class="content-header-item">
                    <a class="img-link mr-5" href="be_pages_generic_profile">
                        <img class="img-avatar img-avatar32" src="assets/media/avatars/avatar15.jpg" alt="">
                    </a>
                    <a class="align-middle link-effect text-primary-dark font-w600" href="be_pages_generic_profile">John Smith</a>
                </div>
                <!-- END User Info -->
            </div>
        </div>
        <!-- END Side Header -->

        <!-- Side Content -->
        <div class="content-side">
            <!-- Search -->
            <div class="block pull-t pull-r-l">
                <div class="block-content block-content-full block-content-sm bg-body-light">
                    <form action="be_pages_generic_search" method="post">
                        <div class="input-group">
                            <input type="text" class="form-control" id="side-overlay-search" name="side-overlay-search" placeholder="Search..">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-secondary px-10">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- END Search -->

            <!-- Mini Stats -->
            <div class="block pull-r-l">
                <div class="block-content block-content-full block-content-sm bg-body-light">
                    <div class="row">
                        <div class="col-4">
                            <div class="font-size-sm font-w600 text-uppercase text-muted">Clients</div>
                            <div class="font-size-h4">460</div>
                        </div>
                        <div class="col-4">
                            <div class="font-size-sm font-w600 text-uppercase text-muted">Sales</div>
                            <div class="font-size-h4">728</div>
                        </div>
                        <div class="col-4">
                            <div class="font-size-sm font-w600 text-uppercase text-muted">Earnings</div>
                            <div class="font-size-h4">$7,860</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Mini Stats -->

            <!-- Friends -->
            <div class="block pull-r-l">
                <div class="block-header bg-body-light">
                    <h3 class="block-title"><i class="fa fa-fw fa-users font-size-default mr-5"></i>Friends</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                            <i class="si si-refresh"></i>
                        </button>
                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                    </div>
                </div>
                <div class="block-content">
                    <ul class="nav-users push">
                        <li>
                            <a href="be_pages_generic_profile">
                                <img class="img-avatar" src="assets/media/avatars/avatar7.jpg" alt="">
                                <i class="fa fa-circle text-success"></i> Helen Jacobs
                                <div class="font-w400 font-size-xs text-muted">Photographer</div>
                            </a>
                        </li>
                        <li>
                            <a href="be_pages_generic_profile">
                                <img class="img-avatar" src="assets/media/avatars/avatar12.jpg" alt="">
                                <i class="fa fa-circle text-success"></i> Henry Harrison
                                <div class="font-w400 font-size-xs text-muted">Web Designer</div>
                            </a>
                        </li>
                        <li>
                            <a href="be_pages_generic_profile">
                                <img class="img-avatar" src="assets/media/avatars/avatar8.jpg" alt="">
                                <i class="fa fa-circle text-warning"></i> Susan Day
                                <div class="font-w400 font-size-xs text-muted">UI Designer</div>
                            </a>
                        </li>
                        <li>
                            <a href="be_pages_generic_profile">
                                <img class="img-avatar" src="assets/media/avatars/avatar12.jpg" alt="">
                                <i class="fa fa-circle text-danger"></i> Albert Ray
                                <div class="font-w400 font-size-xs text-muted">Copywriter</div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- END Friends -->

            <!-- Activity -->
            <div class="block pull-r-l">
                <div class="block-header bg-body-light">
                    <h3 class="block-title">
                        <i class="fa fa-fw fa-clock-o font-size-default mr-5"></i>Activity
                    </h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                            <i class="si si-refresh"></i>
                        </button>
                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                    </div>
                </div>
                <div class="block-content">
                    <ul class="list list-activity">
                        <li>
                            <i class="si si-wallet text-success"></i>
                            <div class="font-w600">+$29 New sale</div>
                            <div>
                                <a href="javascript:void(0)">Admin Template</a>
                            </div>
                            <div class="font-size-xs text-muted">5 min ago</div>
                        </li>
                        <li>
                            <i class="si si-close text-danger"></i>
                            <div class="font-w600">Project removed</div>
                            <div>
                                <a href="javascript:void(0)">Best Icon Set</a>
                            </div>
                            <div class="font-size-xs text-muted">26 min ago</div>
                        </li>
                        <li>
                            <i class="si si-pencil text-info"></i>
                            <div class="font-w600">You edited the file</div>
                            <div>
                                <a href="javascript:void(0)">
                                    <i class="fa fa-file-text-o"></i> Docs.doc
                                </a>
                            </div>
                            <div class="font-size-xs text-muted">3 hours ago</div>
                        </li>
                        <li>
                            <i class="si si-plus text-success"></i>
                            <div class="font-w600">New user</div>
                            <div>
                                <a href="javascript:void(0)">StudioWeb - View Profile</a>
                            </div>
                            <div class="font-size-xs text-muted">5 hours ago</div>
                        </li>
                        <li>
                            <i class="si si-wrench text-warning"></i>
                            <div class="font-w600">App v5.5 is available</div>
                            <div>
                                <a href="javascript:void(0)">Update now</a>
                            </div>
                            <div class="font-size-xs text-muted">8 hours ago</div>
                        </li>
                        <li>
                            <i class="si si-user-follow text-pulse"></i>
                            <div class="font-w600">+1 Friend Request</div>
                            <div>
                                <a href="javascript:void(0)">Accept</a>
                            </div>
                            <div class="font-size-xs text-muted">1 day ago</div>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- END Activity -->

            <!-- Profile -->
            <div class="block pull-r-l">
                <div class="block-header bg-body-light">
                    <h3 class="block-title">
                        <i class="fa fa-fw fa-pencil font-size-default mr-5"></i>Profile
                    </h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                    </div>
                </div>
                <div class="block-content">
                    <form action="be_pages_dashboard" method="post" onsubmit="return false;">
                        <div class="form-group mb-15">
                            <label for="side-overlay-profile-name">Name</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="side-overlay-profile-name" name="side-overlay-profile-name" placeholder="Your name.." value="John Smith">
                                <div class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="fa fa-user"></i>
                                            </span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-15">
                            <label for="side-overlay-profile-email">Email</label>
                            <div class="input-group">
                                <input type="email" class="form-control" id="side-overlay-profile-email" name="side-overlay-profile-email" placeholder="Your email.." value="john.smith@example.com">
                                <div class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="fa fa-envelope"></i>
                                            </span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-15">
                            <label for="side-overlay-profile-password">New Password</label>
                            <div class="input-group">
                                <input type="password" class="form-control" id="side-overlay-profile-password" name="side-overlay-profile-password" placeholder="New Password..">
                                <div class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="fa fa-asterisk"></i>
                                            </span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-15">
                            <label for="side-overlay-profile-password-confirm">Confirm New Password</label>
                            <div class="input-group">
                                <input type="password" class="form-control" id="side-overlay-profile-password-confirm" name="side-overlay-profile-password-confirm" placeholder="Confirm New Password..">
                                <div class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="fa fa-asterisk"></i>
                                            </span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-6">
                                <button type="submit" class="btn btn-block btn-alt-primary">
                                    <i class="fa fa-refresh mr-5"></i> Update
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- END Profile -->

            <!-- Settings -->
            <div class="block pull-r-l">
                <div class="block-header bg-body-light">
                    <h3 class="block-title">
                        <i class="fa fa-fw fa-wrench font-size-default mr-5"></i>Settings
                    </h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                    </div>
                </div>
                <div class="block-content">
                    <div class="row gutters-tiny">
                        <div class="col-6">
                            <div class="custom-control custom-checkbox mb-5">
                                <input type="checkbox" class="custom-control-input" id="side-overlay-settings-status" name="side-overlay-settings-status" value="1" checked>
                                <label class="custom-control-label" for="side-overlay-settings-status">Online Status</label>
                            </div>
                            <div class="custom-control custom-checkbox mb-5">
                                <input type="checkbox" class="custom-control-input" id="side-overlay-settings-public-profile" name="side-overlay-settings-public-profile" value="1">
                                <label class="custom-control-label" for="side-overlay-settings-public-profile">Public Profile</label>
                            </div>
                            <div class="custom-control custom-checkbox mb-5">
                                <input type="checkbox" class="custom-control-input" id="side-overlay-settings-notifications" name="side-overlay-settings-notifications" value="1" checked>
                                <label class="custom-control-label" for="side-overlay-settings-notifications">Notifications</label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="custom-control custom-checkbox mb-5">
                                <input type="checkbox" class="custom-control-input" id="side-overlay-settings-updates" name="side-overlay-settings-updates" value="1">
                                <label class="custom-control-label" for="side-overlay-settings-updates">Auto updates</label>
                            </div>
                            <div class="custom-control custom-checkbox mb-5">
                                <input type="checkbox" class="custom-control-input" id="side-overlay-settings-api-access" name="side-overlay-settings-api-access" value="1" checked>
                                <label class="custom-control-label" for="side-overlay-settings-api-access">API Access</label>
                            </div>
                            <div class="custom-control custom-checkbox mb-5">
                                <input type="checkbox" class="custom-control-input" id="side-overlay-settings-limit-requests" name="side-overlay-settings-limit-requests" value="1">
                                <label class="custom-control-label" for="side-overlay-settings-limit-requests">API Requests</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Settings -->
        </div>
        <!-- END Side Content -->
    </aside>
    <!-- END Side Overlay -->

    <!-- Sidebar -->
    <!--
        Helper classes

        Adding .sidebar-mini-hide to an element will make it invisible (opacity: 0) when the sidebar is in mini mode
        Adding .sidebar-mini-show to an element will make it visible (opacity: 1) when the sidebar is in mini mode
            If you would like to disable the transition, just add the .sidebar-mini-notrans along with one of the previous 2 classes

        Adding .sidebar-mini-hidden to an element will hide it when the sidebar is in mini mode
        Adding .sidebar-mini-visible to an element will show it only when the sidebar is in mini mode
            - use .sidebar-mini-visible-b if you would like to be a block when visible (display: block)
    -->
    <nav id="sidebar">
        <!-- Sidebar Content -->
        <div class="sidebar-content">
            <!-- Side Header -->
            <div class="content-header content-header-fullrow px-15">
                <!-- Mini Mode -->
                <div class="content-header-section sidebar-mini-visible-b">
                    <!-- Logo -->
                    <span class="content-header-item font-w700 font-size-xl float-left animated fadeIn">
                                <span class="text-dual-primary-dark">c</span><span class="text-primary">b</span>
                            </span>
                    <!-- END Logo -->
                </div>
                <!-- END Mini Mode -->

                <!-- Normal Mode -->
                <div class="content-header-section text-center align-parent sidebar-mini-hidden">
                    <!-- Close Sidebar, Visible only on mobile screens -->
                    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                    <button type="button" class="btn btn-circle btn-dual-secondary d-lg-none align-v-r" data-toggle="layout" data-action="sidebar_close">
                        <i class="fa fa-times text-danger"></i>
                    </button>
                    <!-- END Close Sidebar -->

                    <!-- Logo -->
                    <div class="content-header-item">
                        <a class="link-effect font-w700" href="index">
                            <i class="si si-fire text-primary"></i>
                            <span class="font-size-xl text-dual-primary-dark">code</span><span class="font-size-xl text-primary">base</span>
                        </a>
                    </div>
                    <!-- END Logo -->
                </div>
                <!-- END Normal Mode -->
            </div>
            <!-- END Side Header -->

            <!-- Side User -->
            <div class="content-side content-side-full content-side-user px-10 align-parent">
                <!-- Visible only in mini mode -->
                <div class="sidebar-mini-visible-b align-v animated fadeIn">
                    <img class="img-avatar img-avatar32" src="assets/media/avatars/avatar15.jpg" alt="">
                </div>
                <!-- END Visible only in mini mode -->

                <!-- Visible only in normal mode -->
                <div class="sidebar-mini-hidden-b text-center">
                    <a class="img-link" href="be_pages_generic_profile">
                        <img class="img-avatar" src="assets/media/avatars/avatar15.jpg" alt="">
                    </a>
                    <ul class="list-inline mt-10">
                        <li class="list-inline-item">
                            <a class="link-effect text-dual-primary-dark font-size-xs font-w600 text-uppercase" href="be_pages_generic_profile">J. Smith</a>
                        </li>
                        <li class="list-inline-item">
                            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                            <a class="link-effect text-dual-primary-dark" data-toggle="layout" data-action="sidebar_style_inverse_toggle" href="javascript:void(0)">
                                <i class="si si-drop"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a class="link-effect text-dual-primary-dark" href="op_auth_signin">
                                <i class="si si-logout"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- END Visible only in normal mode -->
            </div>
            <!-- END Side User -->

            <!-- Side Navigation -->
            <div class="content-side content-side-full">
                <ul class="nav-main">
                    <li>
                        <a href="be_pages_dashboard"><i class="si si-cup"></i><span class="sidebar-mini-hide">Dashboard</span></a>
                    </li>
                    <li>
                        <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-badge"></i><span class="sidebar-mini-hide">Page Kits</span></a>
                        <ul>
                            <li>
                                <a class="nav-submenu" data-toggle="nav-submenu" href="#"><span class="sidebar-mini-hide">Dashboards</span></a>
                                <ul>
                                    <li>
                                        <a href="be_pages_dashboard2"><span class="sidebar-mini-hide">Dashboard 2</span></a>
                                    </li>
                                    <li>
                                        <a href="be_pages_dashboard3"><span class="sidebar-mini-hide">Dashboard 3</span></a>
                                    </li>
                                    <li>
                                        <a href="be_pages_dashboard4"><span class="sidebar-mini-hide">Dashboard 4</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="nav-submenu" data-toggle="nav-submenu" href="#"><span class="sidebar-mini-hide">Real Estate</span></a>
                                <ul>
                                    <li>
                                        <a href="be_pages_real_estate_dashboard">Dashboard</a>
                                    </li>
                                    <li>
                                        <a href="be_pages_real_estate_listing">Listing</a>
                                    </li>
                                    <li>
                                        <a href="be_pages_real_estate_listing_new">Add New Listing</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="nav-submenu" data-toggle="nav-submenu" href="#"><span class="sidebar-mini-hide">Crypto</span></a>
                                <ul>
                                    <li>
                                        <a href="be_pages_crypto_dashboard">Dashboard</a>
                                    </li>
                                    <li>
                                        <a href="be_pages_crypto_buy_sell">Buy/Sell</a>
                                    </li>
                                    <li>
                                        <a href="be_pages_crypto_wallets">Wallets</a>
                                    </li>
                                    <li>
                                        <a href="be_pages_crypto_settings">Settings</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="nav-submenu" data-toggle="nav-submenu" href="#"><span class="sidebar-mini-hide">e-Commerce</span></a>
                                <ul>
                                    <li>
                                        <a href="be_pages_ecom_dashboard">Dashboard</a>
                                    </li>
                                    <li>
                                        <a href="be_pages_ecom_orders">Orders</a>
                                    </li>
                                    <li>
                                        <a href="be_pages_ecom_order">Order</a>
                                    </li>
                                    <li>
                                        <a href="be_pages_ecom_products">Products</a>
                                    </li>
                                    <li>
                                        <a href="be_pages_ecom_product_edit">Product Edit</a>
                                    </li>
                                    <li>
                                        <a href="be_pages_ecom_customer">Customer</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="nav-submenu" data-toggle="nav-submenu" href="#"><span class="sidebar-mini-hide">e-Learning</span></a>
                                <ul>
                                    <li>
                                        <a href="be_pages_elearning_courses">Courses</a>
                                    </li>
                                    <li>
                                        <a href="be_pages_elearning_course">Course</a>
                                    </li>
                                    <li>
                                        <a href="be_pages_elearning_lesson">Lesson</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="nav-submenu" data-toggle="nav-submenu" href="#"><span class="sidebar-mini-hide">Forum</span></a>
                                <ul>
                                    <li>
                                        <a href="be_pages_forum_categories">Categories</a>
                                    </li>
                                    <li>
                                        <a href="be_pages_forum_topics">Topics</a>
                                    </li>
                                    <li>
                                        <a href="be_pages_forum_discussion">Discussion</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="nav-submenu" data-toggle="nav-submenu" href="#"><span class="sidebar-mini-hide">Alternative Dashboards</span></a>
                                <ul>
                                    <li>
                                        <a href="db_classic"><span class="sidebar-mini-hide">Classic</span></a>
                                    </li>
                                    <li>
                                        <a href="db_clean"><span class="sidebar-mini-hide">Clean</span></a>
                                    </li>
                                    <li>
                                        <a href="db_social"><span class="sidebar-mini-hide">Social</span></a>
                                    </li>
                                    <li>
                                        <a href="db_corporate"><span class="sidebar-mini-hide">Corporate</span></a>
                                    </li>
                                    <li>
                                        <a href="db_minimal"><span class="sidebar-mini-hide">Minimal</span></a>
                                    </li>
                                    <li>
                                        <a href="db_pop"><span class="sidebar-mini-hide">Pop</span></a>
                                    </li>
                                    <li>
                                        <a href="db_dark"><span class="sidebar-mini-hide">Dark</span></a>
                                    </li>
                                    <li>
                                        <a href="db_medical"><span class="sidebar-mini-hide">Medical</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="nav-submenu" data-toggle="nav-submenu" href="#"><span class="sidebar-mini-hide">Boxed Backend</span></a>
                                <ul>
                                    <li>
                                        <a href="bd_dashboard">Dashboard</a>
                                    </li>
                                    <li>
                                        <a href="bd_search">Search</a>
                                    </li>
                                    <li>
                                        <a href="bd_variations_hero_simple_1">Hero Simple 1</a>
                                    </li>
                                    <li>
                                        <a href="bd_variations_hero_simple_2">Hero Simple 2</a>
                                    </li>
                                    <li>
                                        <a href="bd_variations_hero_simple_3">Hero Simple 3</a>
                                    </li>
                                    <li>
                                        <a href="bd_variations_hero_simple_4">Hero Simple 4</a>
                                    </li>
                                    <li>
                                        <a href="bd_variations_hero_image_1">Hero Image 1</a>
                                    </li>
                                    <li>
                                        <a href="bd_variations_hero_image_2">Hero Image 2</a>
                                    </li>
                                    <li>
                                        <a href="bd_variations_hero_image_3">Hero Image 3</a>
                                    </li>
                                    <li>
                                        <a href="bd_variations_hero_image_4">Hero Image 4</a>
                                    </li>
                                    <li>
                                        <a href="bd_variations_hero_video_1">Hero Video 1</a>
                                    </li>
                                    <li>
                                        <a href="bd_variations_hero_video_2">Hero Video 2</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-main-heading"><span class="sidebar-mini-visible">UI</span><span class="sidebar-mini-hidden">User Interface</span></li>
                    <li>
                        <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-puzzle"></i><span class="sidebar-mini-hide">Blocks</span></a>
                        <ul>
                            <li>
                                <a href="be_blocks">Styles</a>
                            </li>
                            <li>
                                <a href="be_blocks_tiles">Tiles</a>
                            </li>
                            <li>
                                <a href="be_blocks_draggable">Draggable</a>
                            </li>
                            <li>
                                <a href="be_blocks_api">API</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-moustache"></i><span class="sidebar-mini-hide">Widgets</span></a>
                        <ul>
                            <li>
                                <a href="be_blocks_widgets_users">Users</a>
                            </li>
                            <li>
                                <a href="be_blocks_widgets_stats">Statistics</a>
                            </li>
                            <li>
                                <a href="be_blocks_widgets_media">Media</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-energy"></i><span class="sidebar-mini-hide">Elements</span></a>
                        <ul>
                            <li>
                                <a href="be_ui_grid">Grid</a>
                            </li>
                            <li>
                                <a href="be_ui_icons">Icons</a>
                            </li>
                            <li>
                                <a href="be_ui_typography">Typography</a>
                            </li>
                            <li>
                                <a href="be_ui_activity">Activity</a>
                            </li>
                            <li>
                                <a href="be_ui_buttons">Buttons</a>
                            </li>
                            <li>
                                <a href="be_ui_navigation">Navigation</a>
                            </li>
                            <li>
                                <a href="be_ui_tabs">Tabs</a>
                            </li>
                            <li>
                                <a href="be_ui_modals_tooltips">Modals &amp; Tooltips</a>
                            </li>
                            <li>
                                <a href="be_ui_images">Images</a>
                            </li>
                            <li>
                                <a href="be_ui_animations">Animations</a>
                            </li>
                            <li>
                                <a href="be_ui_ribbons">Ribbons</a>
                            </li>
                            <li>
                                <a href="be_ui_timeline">Timeline</a>
                            </li>
                            <li>
                                <a href="be_ui_accordion">Accordion</a>
                            </li>
                            <li>
                                <a href="be_ui_color_themes">Color Themes</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-layers"></i><span class="sidebar-mini-hide">Tables</span></a>
                        <ul>
                            <li>
                                <a href="be_tables_styles">Styles</a>
                            </li>
                            <li>
                                <a href="be_tables_responsive">Responsive</a>
                            </li>
                            <li>
                                <a href="be_tables_helpers">Helpers</a>
                            </li>
                            <li>
                                <a href="be_tables_pricing">Pricing</a>
                            </li>
                            <li>
                                <a href="be_tables_datatables">DataTables</a>
                            </li>
                        </ul>
                    </li>
                    <li class="open">
                        <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-note"></i><span class="sidebar-mini-hide">Forms</span></a>
                        <ul>
                            <li>
                                <a href="be_forms_elements_bootstrap">Bootstrap Elements</a>
                            </li>
                            <li>
                                <a href="be_forms_elements_material">Material Elements</a>
                            </li>
                            <li>
                                <a href="be_forms_css_inputs">CSS Inputs</a>
                            </li>
                            <li>
                                <a class="active" href="be_forms_plugins">Plugins</a>
                            </li>
                            <li>
                                <a href="be_forms_editors">Editors</a>
                            </li>
                            <li>
                                <a href="be_forms_validation">Validation</a>
                            </li>
                            <li>
                                <a href="be_forms_wizard">Wizard</a>
                            </li>
                            <li>
                                <a href="be_forms_premade">Pre-made</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-main-heading"><span class="sidebar-mini-visible">BD</span><span class="sidebar-mini-hidden">Build</span></li>
                    <li>
                        <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-vector"></i><span class="sidebar-mini-hide">Layout</span></a>
                        <ul>
                            <li>
                                <a class="nav-submenu" data-toggle="nav-submenu" href="#">General</a>
                                <ul>
                                    <li>
                                        <a href="be_layout_default">Default</a>
                                    </li>
                                    <li>
                                        <a href="be_layout_flipped">Flipped</a>
                                    </li>
                                    <li>
                                        <a href="be_layout_native_scrolling">Native Scrolling</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="nav-submenu" data-toggle="nav-submenu" href="#">Header</a>
                                <ul>
                                    <li>
                                        <a class="nav-submenu" data-toggle="nav-submenu" href="#">Static</a>
                                        <ul>
                                            <li>
                                                <a href="be_layout_header_modern">Modern</a>
                                            </li>
                                            <li>
                                                <a href="be_layout_header_classic">Classic</a>
                                            </li>
                                            <li>
                                                <a href="be_layout_header_classic_inverse">Classic Inverse</a>
                                            </li>
                                            <li>
                                                <a href="be_layout_header_glass">Glass</a>
                                            </li>
                                            <li>
                                                <a href="be_layout_header_glass_inverse">Glass Inverse</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="nav-submenu" data-toggle="nav-submenu" href="#">Fixed</a>
                                        <ul>
                                            <li>
                                                <a href="be_layout_header_fixed_modern">Modern</a>
                                            </li>
                                            <li>
                                                <a href="be_layout_header_fixed_classic">Classic</a>
                                            </li>
                                            <li>
                                                <a href="be_layout_header_fixed_classic_inverse">Classic Inverse</a>
                                            </li>
                                            <li>
                                                <a href="be_layout_header_fixed_glass">Glass</a>
                                            </li>
                                            <li>
                                                <a href="be_layout_header_fixed_glass_inverse">Glass Inverse</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="nav-submenu" data-toggle="nav-submenu" href="#">Sidebar</a>
                                <ul>
                                    <li>
                                        <a href="be_layout_sidebar_inverse">Inverse</a>
                                    </li>
                                    <li>
                                        <a href="be_layout_sidebar_hidden">Hidden</a>
                                    </li>
                                    <li>
                                        <a href="be_layout_sidebar_mini">Mini</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="nav-submenu" data-toggle="nav-submenu" href="#">Side Overlay</a>
                                <ul>
                                    <li>
                                        <a href="be_layout_side_overlay_visible">Visible</a>
                                    </li>
                                    <li>
                                        <a href="be_layout_side_overlay_hoverable">Hoverable</a>
                                    </li>
                                    <li>
                                        <a href="be_layout_side_overlay_no_page_overlay">No Page Overlay</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="nav-submenu" data-toggle="nav-submenu" href="#">Main Content</a>
                                <ul>
                                    <li>
                                        <a href="be_layout_content_boxed">Boxed</a>
                                    </li>
                                    <li>
                                        <a href="be_layout_content_narrow">Narrow</a>
                                    </li>
                                    <li>
                                        <a href="be_layout_content_full_width">Full Width</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="nav-submenu" data-toggle="nav-submenu" href="#">Hero</a>
                                <ul>
                                    <li>
                                        <a href="be_layout_hero_color">Color</a>
                                    </li>
                                    <li>
                                        <a href="be_layout_hero_bubbles">Bubbles</a>
                                    </li>
                                    <li>
                                        <a href="be_layout_hero_image">Image</a>
                                    </li>
                                    <li>
                                        <a href="be_layout_hero_video">Video</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="be_layout_api">API</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-trophy"></i><span class="sidebar-mini-hide">Components</span></a>
                        <ul>
                            <li>
                                <a class="nav-submenu" data-toggle="nav-submenu" href="#"><span class="sidebar-mini-hide">Main Menu</span></a>
                                <ul>
                                    <li>
                                        <a href="#">Link 1-1</a>
                                    </li>
                                    <li>
                                        <a href="#">Link 1-2</a>
                                    </li>
                                    <li>
                                        <a class="nav-submenu" data-toggle="nav-submenu" href="#">Sub Level 2</a>
                                        <ul>
                                            <li>
                                                <a href="#">Link 2-1</a>
                                            </li>
                                            <li>
                                                <a href="#">Link 2-2</a>
                                            </li>
                                            <li>
                                                <a class="nav-submenu" data-toggle="nav-submenu" href="#">Sub Level 3</a>
                                                <ul>
                                                    <li>
                                                        <a href="#">Link 3-1</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Link 3-2</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="nav-submenu" data-toggle="nav-submenu" href="#">Chat</a>
                                <ul>
                                    <li>
                                        <a href="be_comp_chat_multiple">Multiple</a>
                                    </li>
                                    <li>
                                        <a href="be_comp_chat_single">Single</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="be_comp_charts">Charts</a>
                            </li>
                            <li>
                                <a href="be_comp_nestable">Nestable</a>
                            </li>
                            <li>
                                <a href="be_comp_gallery">Gallery</a>
                            </li>
                            <li>
                                <a href="be_comp_sliders">Sliders</a>
                            </li>
                            <li>
                                <a href="be_comp_scrolling">Scrolling</a>
                            </li>
                            <li>
                                <a href="be_comp_rating">Rating</a>
                            </li>
                            <li>
                                <a href="be_comp_filtering">Filtering</a>
                            </li>
                            <li>
                                <a href="be_comp_appear">Appear</a>
                            </li>
                            <li>
                                <a href="be_comp_countto">CountTo</a>
                            </li>
                            <li>
                                <a href="be_comp_calendar">Calendar</a>
                            </li>
                            <li>
                                <a href="be_comp_image_cropper">Image Cropper</a>
                            </li>
                            <li>
                                <a href="be_comp_maps_google">Google Maps</a>
                            </li>
                            <li>
                                <a href="be_comp_maps_vector">Vector Maps</a>
                            </li>
                            <li>
                                <a href="be_comp_syntax_highlighting">Syntax Highlighting</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-main-heading"><span class="sidebar-mini-visible">PG</span><span class="sidebar-mini-hidden">Pages</span></li>
                    <li>
                        <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-globe-alt"></i><span class="sidebar-mini-hide">Generic</span></a>
                        <ul>
                            <li>
                                <a href="be_pages_generic_blank">Blank</a>
                            </li>
                            <li>
                                <a href="be_pages_generic_blank_block">Blank (Block)</a>
                            </li>
                            <li>
                                <a href="be_pages_generic_blank_breadcrumb">Blank (Breadcrumb)</a>
                            </li>
                            <li>
                                <a href="be_pages_generic_scrumboard">Scrum Board</a>
                            </li>
                            <li>
                                <a href="be_pages_generic_search">Search</a>
                            </li>
                            <li>
                                <a href="be_pages_generic_profile">Profile</a>
                            </li>
                            <li>
                                <a href="be_pages_generic_inbox">Inbox</a>
                            </li>
                            <li>
                                <a href="be_pages_generic_invoice">Invoice</a>
                            </li>
                            <li>
                                <a href="be_pages_generic_faq">FAQ</a>
                            </li>
                            <li>
                                <a href="be_pages_generic_blog">Blog</a>
                            </li>
                            <li>
                                <a href="be_pages_generic_story">Story</a>
                            </li>
                            <li>
                                <a href="be_pages_generic_project_list">Project List</a>
                            </li>
                            <li>
                                <a href="be_pages_generic_project">Project</a>
                            </li>
                            <li>
                                <a href="be_pages_generic_upgrade_plan">Upgrade Plan</a>
                            </li>
                            <li>
                                <a href="be_pages_generic_team">Team</a>
                            </li>
                            <li>
                                <a href="be_pages_generic_contact">Contact</a>
                            </li>
                            <li>
                                <a href="be_pages_generic_todo">Todo</a>
                            </li>
                            <li>
                                <a href="op_coming_soon">Coming Soon</a>
                            </li>
                            <li>
                                <a href="op_maintenance">Maintenance</a>
                            </li>
                            <li>
                                <a href="op_status">Status</a>
                            </li>
                            <li>
                                <a href="op_installation">Installation</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-lock"></i><span class="sidebar-mini-hide">Authentication</span></a>
                        <ul>
                            <li>
                                <a href="be_pages_auth_all">All</a>
                            </li>
                            <li>
                                <a href="op_auth_signin">Sign In</a>
                            </li>
                            <li>
                                <a href="op_auth_signin2">Sign In 2</a>
                            </li>
                            <li>
                                <a href="op_auth_signin3">Sign In 3</a>
                            </li>
                            <li>
                                <a href="op_auth_signup">Sign Up</a>
                            </li>
                            <li>
                                <a href="op_auth_signup2">Sign Up 2</a>
                            </li>
                            <li>
                                <a href="op_auth_signup3">Sign Up 3</a>
                            </li>
                            <li>
                                <a href="op_auth_lock">Lock Screen</a>
                            </li>
                            <li>
                                <a href="op_auth_lock2">Lock Screen 2</a>
                            </li>
                            <li>
                                <a href="op_auth_lock3">Lock Screen 3</a>
                            </li>
                            <li>
                                <a href="op_auth_reminder">Pass Reminder</a>
                            </li>
                            <li>
                                <a href="op_auth_reminder2">Pass Reminder 2</a>
                            </li>
                            <li>
                                <a href="op_auth_reminder3">Pass Reminder 3</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-flag"></i><span class="sidebar-mini-hide">Error</span></a>
                        <ul>
                            <li>
                                <a href="be_pages_error_all">All</a>
                            </li>
                            <li>
                                <a href="op_error_400">400</a>
                            </li>
                            <li>
                                <a href="op_error_401">401</a>
                            </li>
                            <li>
                                <a href="op_error_403">403</a>
                            </li>
                            <li>
                                <a href="op_error_404">404</a>
                            </li>
                            <li>
                                <a href="op_error_500">500</a>
                            </li>
                            <li>
                                <a href="op_error_503">503</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- END Side Navigation -->
        </div>
        <!-- Sidebar Content -->
    </nav>
    <!-- END Sidebar -->

    <!-- Header -->
    <header id="page-header">
        <!-- Header Content -->
        <div class="content-header">
            <!-- Left Section -->
            <div class="content-header-section">
                <!-- Toggle Sidebar -->
                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                <button type="button" class="btn btn-circle btn-dual-secondary" data-toggle="layout" data-action="sidebar_toggle">
                    <i class="fa fa-navicon"></i>
                </button>
                <!-- END Toggle Sidebar -->

                <!-- Open Search Section -->
                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                <button type="button" class="btn btn-circle btn-dual-secondary" data-toggle="layout" data-action="header_search_on">
                    <i class="fa fa-search"></i>
                </button>
                <!-- END Open Search Section -->

                <!-- Layout Options (used just for demonstration) -->
                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                <div class="btn-group" role="group">
                    <button type="button" class="btn btn-circle btn-dual-secondary" id="page-header-options-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-wrench"></i>
                    </button>
                    <div class="dropdown-menu min-width-300" aria-labelledby="page-header-options-dropdown">
                        <h5 class="h6 text-center py-10 mb-10 border-b text-uppercase">Settings</h5>
                        <h6 class="dropdown-header">Color Themes</h6>
                        <div class="row no-gutters text-center mb-5">
                            <div class="col-2 mb-5">
                                <a class="text-default" data-toggle="theme" data-theme="default" href="javascript:void(0)">
                                    <i class="fa fa-2x fa-circle"></i>
                                </a>
                            </div>
                            <div class="col-2 mb-5">
                                <a class="text-elegance" data-toggle="theme" data-theme="assets/css/themes/elegance.min.css" href="javascript:void(0)">
                                    <i class="fa fa-2x fa-circle"></i>
                                </a>
                            </div>
                            <div class="col-2 mb-5">
                                <a class="text-pulse" data-toggle="theme" data-theme="assets/css/themes/pulse.min.css" href="javascript:void(0)">
                                    <i class="fa fa-2x fa-circle"></i>
                                </a>
                            </div>
                            <div class="col-2 mb-5">
                                <a class="text-flat" data-toggle="theme" data-theme="assets/css/themes/flat.min.css" href="javascript:void(0)">
                                    <i class="fa fa-2x fa-circle"></i>
                                </a>
                            </div>
                            <div class="col-2 mb-5">
                                <a class="text-corporate" data-toggle="theme" data-theme="assets/css/themes/corporate.min.css" href="javascript:void(0)">
                                    <i class="fa fa-2x fa-circle"></i>
                                </a>
                            </div>
                            <div class="col-2 mb-5">
                                <a class="text-earth" data-toggle="theme" data-theme="assets/css/themes/earth.min.css" href="javascript:void(0)">
                                    <i class="fa fa-2x fa-circle"></i>
                                </a>
                            </div>
                        </div>
                        <h6 class="dropdown-header">Header</h6>
                        <div class="row gutters-tiny text-center mb-5">
                            <div class="col-6">
                                <button type="button" class="btn btn-sm btn-block btn-alt-secondary" data-toggle="layout" data-action="header_fixed_toggle">Fixed Mode</button>
                            </div>
                            <div class="col-6">
                                <button type="button" class="btn btn-sm btn-block btn-alt-secondary d-none d-lg-block mb-10" data-toggle="layout" data-action="header_style_classic">Classic Style</button>
                            </div>
                        </div>
                        <h6 class="dropdown-header">Sidebar</h6>
                        <div class="row gutters-tiny text-center mb-5">
                            <div class="col-6">
                                <button type="button" class="btn btn-sm btn-block btn-alt-secondary mb-10" data-toggle="layout" data-action="sidebar_style_inverse_off">Light</button>
                            </div>
                            <div class="col-6">
                                <button type="button" class="btn btn-sm btn-block btn-alt-secondary mb-10" data-toggle="layout" data-action="sidebar_style_inverse_on">Dark</button>
                            </div>
                        </div>
                        <div class="d-none d-xl-block">
                            <h6 class="dropdown-header">Main Content</h6>
                            <button type="button" class="btn btn-sm btn-block btn-alt-secondary mb-10" data-toggle="layout" data-action="content_layout_toggle">Toggle Layout</button>
                        </div>
                        <div class="dropdown-divider"></div>
                        <div class="row gutters-tiny text-center">
                            <div class="col-6">
                                <a class="dropdown-item mb-0" href="be_layout_api">
                                    <i class="si si-chemistry mr-5"></i> Layout API
                                </a>
                            </div>
                            <div class="col-6">
                                <a class="dropdown-item mb-0" href="be_ui_color_themes">
                                    <i class="fa fa-paint-brush mr-5"></i> Color Themes
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Layout Options -->
            </div>
            <!-- END Left Section -->

            <!-- Right Section -->
            <div class="content-header-section">
                <!-- User Dropdown -->
                <div class="btn-group" role="group">
                    <button type="button" class="btn btn-rounded btn-dual-secondary" id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-user d-sm-none"></i>
                        <span class="d-none d-sm-inline-block">J. Smith</span>
                        <i class="fa fa-angle-down ml-5"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right min-width-200" aria-labelledby="page-header-user-dropdown">
                        <h5 class="h6 text-center py-10 mb-5 border-b text-uppercase">User</h5>
                        <a class="dropdown-item" href="be_pages_generic_profile">
                            <i class="si si-user mr-5"></i> Profile
                        </a>
                        <a class="dropdown-item d-flex align-items-center justify-content-between" href="be_pages_generic_inbox">
                            <span><i class="si si-envelope-open mr-5"></i> Inbox</span>
                            <span class="badge badge-primary">3</span>
                        </a>
                        <a class="dropdown-item" href="be_pages_generic_invoice">
                            <i class="si si-note mr-5"></i> Invoices
                        </a>
                        <div class="dropdown-divider"></div>

                        <!-- Toggle Side Overlay -->
                        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                        <a class="dropdown-item" href="javascript:void(0)" data-toggle="layout" data-action="side_overlay_toggle">
                            <i class="si si-wrench mr-5"></i> Settings
                        </a>
                        <!-- END Side Overlay -->

                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="op_auth_signin">
                            <i class="si si-logout mr-5"></i> Sign Out
                        </a>
                    </div>
                </div>
                <!-- END User Dropdown -->

                <!-- Notifications -->
                <div class="btn-group" role="group">
                    <button type="button" class="btn btn-rounded btn-dual-secondary" id="page-header-notifications" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-flag"></i>
                        <span class="badge badge-primary badge-pill">5</span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right min-width-300" aria-labelledby="page-header-notifications">
                        <h5 class="h6 text-center py-10 mb-0 border-b text-uppercase">Notifications</h5>
                        <ul class="list-unstyled my-20">
                            <li>
                                <a class="text-body-color-dark media mb-15" href="javascript:void(0)">
                                    <div class="ml-5 mr-15">
                                        <i class="fa fa-fw fa-check text-success"></i>
                                    </div>
                                    <div class="media-body pr-10">
                                        <p class="mb-0">You’ve upgraded to a VIP account successfully!</p>
                                        <div class="text-muted font-size-sm font-italic">15 min ago</div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="text-body-color-dark media mb-15" href="javascript:void(0)">
                                    <div class="ml-5 mr-15">
                                        <i class="fa fa-fw fa-exclamation-triangle text-warning"></i>
                                    </div>
                                    <div class="media-body pr-10">
                                        <p class="mb-0">Please check your payment info since we can’t validate them!</p>
                                        <div class="text-muted font-size-sm font-italic">50 min ago</div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="text-body-color-dark media mb-15" href="javascript:void(0)">
                                    <div class="ml-5 mr-15">
                                        <i class="fa fa-fw fa-times text-danger"></i>
                                    </div>
                                    <div class="media-body pr-10">
                                        <p class="mb-0">Web server stopped responding and it was automatically restarted!</p>
                                        <div class="text-muted font-size-sm font-italic">4 hours ago</div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="text-body-color-dark media mb-15" href="javascript:void(0)">
                                    <div class="ml-5 mr-15">
                                        <i class="fa fa-fw fa-exclamation-triangle text-warning"></i>
                                    </div>
                                    <div class="media-body pr-10">
                                        <p class="mb-0">Please consider upgrading your plan. You are running out of space.</p>
                                        <div class="text-muted font-size-sm font-italic">16 hours ago</div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a class="text-body-color-dark media mb-15" href="javascript:void(0)">
                                    <div class="ml-5 mr-15">
                                        <i class="fa fa-fw fa-plus text-primary"></i>
                                    </div>
                                    <div class="media-body pr-10">
                                        <p class="mb-0">New purchases! +$250</p>
                                        <div class="text-muted font-size-sm font-italic">1 day ago</div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item text-center mb-0" href="javascript:void(0)">
                            <i class="fa fa-flag mr-5"></i> View All
                        </a>
                    </div>
                </div>
                <!-- END Notifications -->

                <!-- Toggle Side Overlay -->
                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                <button type="button" class="btn btn-circle btn-dual-secondary" data-toggle="layout" data-action="side_overlay_toggle">
                    <i class="fa fa-tasks"></i>
                </button>
                <!-- END Toggle Side Overlay -->
            </div>
            <!-- END Right Section -->
        </div>
        <!-- END Header Content -->

        <!-- Header Search -->
        <div id="page-header-search" class="overlay-header">
            <div class="content-header content-header-fullrow">
                <form action="be_pages_generic_search" method="post">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <!-- Close Search Section -->
                            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                            <button type="button" class="btn btn-secondary" data-toggle="layout" data-action="header_search_off">
                                <i class="fa fa-times"></i>
                            </button>
                            <!-- END Close Search Section -->
                        </div>
                        <input type="text" class="form-control" placeholder="Search or hit ESC.." id="page-header-search-input" name="page-header-search-input">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-secondary">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- END Header Search -->

        <!-- Header Loader -->
        <!-- Please check out the Activity page under Elements category to see examples of showing/hiding it -->
        <div id="page-header-loader" class="overlay-header bg-primary">
            <div class="content-header content-header-fullrow text-center">
                <div class="content-header-item">
                    <i class="fa fa-sun-o fa-spin text-white"></i>
                </div>
            </div>
        </div>
        <!-- END Header Loader -->
    </header>
    <!-- END Header -->

    <!-- Main Container -->
    <main id="main-container">

        <!-- Page Content -->
        <div class="content">
            <!-- Bootstrap Datepicker (.js-datepicker and .input-daterange class is initialized in Helpers.datepicker()) -->
            <!-- For more info and examples you can check out https://github.com/eternicode/bootstrap-datepicker -->
            <h2 class="content-heading">Bootstrap Datepicker</h2>
            <div class="block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Examples</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option">
                            <i class="si si-wrench"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content">
                    <div class="row items-push">
                        <!-- Datepicker (Bootstrap forms) -->
                        <div class="col-xl-6">
                            <form action="be_forms_plugins" method="post" onsubmit="return false;">
                                <div class="form-group row">
                                    <label class="col-12" for="example-datepicker1">Datepicker</label>
                                    <div class="col-lg-8">
                                        <input type="text" class="js-datepicker form-control" id="example-datepicker1" name="example-datepicker1" data-week-start="1" data-autoclose="true" data-today-highlight="true" data-date-format="mm/dd/yy" placeholder="mm/dd/yy">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-8">
                                        <input type="text" class="js-datepicker form-control" id="example-datepicker2" name="example-datepicker2" data-week-start="1" data-autoclose="true" data-today-highlight="true" data-date-format="dd/mm/yy" placeholder="dd/mm/yy">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-8">
                                        <input type="text" class="js-datepicker form-control" id="example-datepicker3" name="example-datepicker3" data-week-start="1" data-autoclose="true" data-today-highlight="true" data-date-format="dd-mm-yyyy" placeholder="dd-mm-yyyy">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-12" for="example-daterange1">Date Range</label>
                                    <div class="col-lg-8">
                                        <div class="input-daterange input-group" data-date-format="mm/dd/yyyy" data-week-start="1" data-autoclose="true" data-today-highlight="true">
                                            <input type="text" class="form-control" id="example-daterange1" name="example-daterange1" placeholder="From" data-week-start="1" data-autoclose="true" data-today-highlight="true">
                                            <div class="input-group-prepend input-group-append">
                                                <span class="input-group-text font-w600">to</span>
                                            </div>
                                            <input type="text" class="form-control" id="example-daterange2" name="example-daterange2" placeholder="To" data-week-start="1" data-autoclose="true" data-today-highlight="true">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-12">Inline Datepicker</label>
                                    <div class="col-12">
                                        <div class="js-datepicker" data-week-start="1" data-today-highlight="true"></div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- END Datepicker (Bootstrap forms) -->





                    </div>
                </div>
            </div>
            <!-- END Masked Inputs -->

        </div>
        <!-- END Page Content -->

    </main>
    <!-- END Main Container -->

</div>
<!-- END Page Container -->


<script src="assets/js/codebase.core.min.js"></script>

<!--
    Codebase JS

    Custom functionality including Blocks/Layout API as well as other vital and optional helpers
    webpack is putting everything together at assets/_es6/main/app.js
-->
<script src="assets/js/codebase.app.min.js"></script>

<!-- Page JS Plugins -->
<script src="assets/js/plugins/pwstrength-bootstrap/pwstrength-bootstrap.min.js"></script>
<script src="assets/js/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<script src="assets/js/plugins/select2/js/select2.full.min.js"></script>

<!-- Page JS Code -->
<script src="assets/js/pages/be_forms_plugins.min.js"></script>

<!-- Page JS Helpers (BS Datepicker + BS Colorpicker + BS Maxlength + Select2 + Masked Input + Range Sliders + Tags Inputs plugins) -->
<script>jQuery(function(){ Codebase.helpers(['datepicker']); });</script>
</body>
</html>