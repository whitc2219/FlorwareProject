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

        <!-- Fonts and Codebase framework -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,400i,600,700">
        <link rel="stylesheet" id="css-main" href="assets/css/codebase.min.css">

        <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
        <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/flat.min.css"> -->
        <link rel="stylesheet" id="css-theme" href="assets/css/themes/corporate.min.css">
        <!-- END Stylesheets -->
    </head>
    <body>

        <!-- Page Container -->
        <!--
            Available classes for #page-container:

        GENERIC

            'enable-cookies'                            Remembers active color theme between pages (when set through color theme helper Template._uiHandleTheme())

        SIDEBAR & SIDE OVERLAY

            'sidebar-r'                                 Right Sidebar and left Side Overlay (default is left Sidebar and right Side Overlay)
            'sidebar-mini'                              Mini hoverable Sidebar (screen width > 991px)
            'sidebar-o'                                 Visible Sidebar by default (screen width > 991px)
            'sidebar-o-xs'                              Visible Sidebar by default (screen width < 992px)
            'sidebar-inverse'                           Dark themed sidebar

            'side-overlay-hover'                        Hoverable Side Overlay (screen width > 991px)
            'side-overlay-o'                            Visible Side Overlay by default

            'enable-page-overlay'                       Enables a visible clickable Page Overlay (closes Side Overlay on click) when Side Overlay opens

            'side-scroll'                               Enables custom scrolling on Sidebar and Side Overlay instead of native scrolling (screen width > 991px)

        HEADER

            ''                                          Static Header if no class is added
            'page-header-fixed'                         Fixed Header

        HEADER STYLE

            ''                                          Classic Header style if no class is added
            'page-header-modern'                        Modern Header style
            'page-header-inverse'                       Dark themed Header (works only with classic Header style)
            'page-header-glass'                         Light themed Header with transparency by default
                                                        (absolute position, perfect for light images underneath - solid light background on scroll if the Header is also set as fixed)
            'page-header-glass page-header-inverse'     Dark themed Header with transparency by default
                                                        (absolute position, perfect for dark images underneath - solid dark background on scroll if the Header is also set as fixed)

        MAIN CONTENT LAYOUT

            ''                                          Full width Main Content if no class is added
            'main-content-boxed'                        Full width Main Content with a specific maximum width (screen width > 1200px)
            'main-content-narrow'                       Full width Main Content with a percentage width (screen width > 1200px)
        -->
        <div id="page-container" class="sidebar-inverse side-scroll page-header-fixed page-header-glass page-header-inverse main-content-boxed">

            <!-- Sidebar -->
            <nav id="sidebar">
                <!-- Sidebar Content -->
                <div class="sidebar-content">
                    <!-- Side Header -->
                    <div class="content-header content-header-fullrow bg-black-op-10">
                        <div class="content-header-section text-center align-parent">
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
                    </div>
                    <!-- END Side Header -->

                    <!-- Side Main Navigation -->
                    <div class="content-side content-side-full">
                        <!--
                        Mobile navigation, desktop navigation can be found in #page-header

                        If you would like to use the same navigation in both mobiles and desktops, you can use exactly the same markup inside sidebar and header navigation ul lists
                        -->
                        <ul class="nav-main">
                            <li>
                                <a class="active" href="db_corporate"><i class="si si-rocket"></i>Dashboard</a>
                            </li>
                            <li>
                                <a href=""><i class="si si-settings"></i>Settings</a>
                            </li>
                            <li>
                                <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-layers"></i>Features</a>
                                <ul>
                                    <li>
                                        <a href="">Backend</a>
                                    </li>
                                    <li>
                                        <a href="">Frontend</a>
                                    </li>
                                    <li>
                                        <a class="nav-submenu" data-toggle="nav-submenu" href="#">More</a>
                                        <ul>
                                            <li>
                                                <a href="">Dashboard</a>
                                            </li>
                                            <li>
                                                <a href="">Resources</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- END Side Main Navigation -->
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
                        <!-- Logo -->
                        <div class="content-header-item mr-5">
                            <a class="link-effect font-w600" href="index">
                                <span class="text-dual-primary-dark">code</span><span class="text-primary">base</span>
                            </a>
                        </div>
                        <!-- END Logo -->

                        <!-- Open Search Section -->
                        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                        <button type="button" class="btn btn-rounded btn-dual-secondary" data-toggle="layout" data-action="header_search_on">
                            <i class="fa fa-search mr-5"></i> Search
                        </button>
                        <!-- END Open Search Section -->
                    </div>
                    <!-- END Left Section -->

                    <!-- Right Section -->
                    <div class="content-header-section">
                        <!-- Header Navigation -->
                        <!--
                        Desktop Navigation, mobile navigation can be found in #sidebar

                        If you would like to use the same navigation in both mobiles and desktops, you can use exactly the same markup inside sidebar and header navigation ul lists
                        If your sidebar menu includes headings, they won't be visible in your header navigation by default
                        If your sidebar menu includes icons and you would like to hide them, you can add the class 'nav-main-header-no-icons'
                        -->
                        <ul class="nav-main-header">
                            <li>
                                <a class="active" href="db_corporate"><i class="si si-rocket"></i>Dashboard</a>
                            </li>
                            <li>
                                <a href=""><i class="si si-settings"></i>Settings</a>
                            </li>
                            <li>
                                <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-layers"></i>Features</a>
                                <ul>
                                    <li>
                                        <a href="">Backend</a>
                                    </li>
                                    <li>
                                        <a href="">Frontend</a>
                                    </li>
                                    <li>
                                        <a class="nav-submenu" data-toggle="nav-submenu" href="#">More</a>
                                        <ul>
                                            <li>
                                                <a href="">Dashboard</a>
                                            </li>
                                            <li>
                                                <a href="">Resources</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <!-- END Header Navigation -->

                        <!-- Toggle Sidebar -->
                        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                        <button type="button" class="btn btn-circle btn-dual-secondary d-lg-none" data-toggle="layout" data-action="sidebar_toggle">
                            <i class="fa fa-navicon"></i>
                        </button>
                        <!-- END Toggle Sidebar -->
                    </div>
                    <!-- END Right Section -->
                </div>
                <!-- END Header Content -->

                <!-- Header Search -->
                <div id="page-header-search" class="overlay-header">
                    <div class="content-header content-header-fullrow">
                        <form>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <!-- Close Search Section -->
                                    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                                    <button type="button" class="btn btn-secondary px-15" data-toggle="layout" data-action="header_search_off">
                                        <i class="fa fa-times"></i>
                                    </button>
                                    <!-- END Close Search Section -->
                                </div>
                                <input type="text" class="form-control" placeholder="Search or hit ESC.." id="page-header-search-input" name="page-header-search-input">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-secondary px-15">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- END Header Search -->

                <!-- Header Loader -->
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

                <!-- Header -->
                <div class="bg-primary-dark">
                    <div class="content content-top">
                        <div class="row push">
                            <div class="col-md py-10 d-md-flex align-items-md-center text-center">
                                <h1 class="text-white mb-0">
                                    <span class="font-w300">Dashboard</span>
                                    <span class="font-w400 font-size-lg text-white-op d-none d-md-inline-block">Welcome Admin</span>
                                </h1>
                            </div>
                            <div class="col-md py-10 d-md-flex align-items-md-center justify-content-md-end text-center">
                                <button type="button" class="btn btn-alt-primary">
                                    <i class="fa fa-user-plus mr-5"></i> New Account
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Header -->

                <!-- Page Content -->
                <div class="bg-white">
                    <!-- Breadcrumb -->
                    <div class="content">
                        <nav class="breadcrumb mb-0">
                            <a class="breadcrumb-item" href="javascript:void(0)">Home</a>
                            <span class="breadcrumb-item active">Dashboard</span>
                        </nav>
                    </div>
                    <!-- END Breadcrumb -->

                    <!-- Content -->
                    <div class="content">
                        <!-- Icon Navigation -->
                        <div class="row gutters-tiny push">
                            <div class="col-6 col-md-4 col-xl-2">
                                <a class="block block-rounded block-bordered block-link-shadow text-center" href="javascript:void(0)">
                                    <div class="block-content">
                                        <p class="mt-5">
                                            <i class="si si-home fa-3x text-muted"></i>
                                        </p>
                                        <p class="font-w600">Home</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-6 col-md-4 col-xl-2">
                                <a class="block block-rounded block-bordered block-link-shadow ribbon ribbon-primary text-center" href="javascript:void(0)">
                                    <div class="ribbon-box">5</div>
                                    <div class="block-content">
                                        <p class="mt-5">
                                            <i class="si si-envelope fa-3x text-muted"></i>
                                        </p>
                                        <p class="font-w600">Inbox</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-6 col-md-4 col-xl-2">
                                <a class="block block-rounded block-bordered block-link-shadow text-center" href="javascript:void(0)">
                                    <div class="block-content">
                                        <p class="mt-5">
                                            <i class="si si-bag fa-3x text-muted"></i>
                                        </p>
                                        <p class="font-w600">Cart</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-6 col-md-4 col-xl-2">
                                <a class="block block-rounded block-bordered block-link-shadow text-center" href="javascript:void(0)">
                                    <div class="block-content">
                                        <p class="mt-5">
                                            <i class="si si-bar-chart fa-3x text-muted"></i>
                                        </p>
                                        <p class="font-w600">Statistics</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-6 col-md-4 col-xl-2">
                                <a class="block block-rounded block-bordered block-link-shadow ribbon ribbon-primary text-center" href="javascript:void(0)">
                                    <div class="ribbon-box">3</div>
                                    <div class="block-content">
                                        <p class="mt-5">
                                            <i class="si si-cloud-download fa-3x text-muted"></i>
                                        </p>
                                        <p class="font-w600">Downloads</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-6 col-md-4 col-xl-2">
                                <a class="block block-rounded block-bordered block-link-shadow text-center" href="javascript:void(0)">
                                    <div class="block-content">
                                        <p class="mt-5">
                                            <i class="si si-docs fa-3x text-muted"></i>
                                        </p>
                                        <p class="font-w600">Documents</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- END Icon Navigation -->

                        <!-- Mini Stats -->
                        <div class="row">
                            <div class="col-md-6 col-xl-3">
                                <a class="block block-rounded block-bordered" href="javascript:void(0)">
                                    <div class="block-content p-5">
                                        <div class="py-30 text-center bg-body-light rounded">
                                            <div class="font-size-h2 font-w700 mb-0 text-muted">78</div>
                                            <div class="font-size-sm font-w600 text-uppercase">Sales</div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6 col-xl-3">
                                <a class="block block-rounded block-bordered" href="javascript:void(0)">
                                    <div class="block-content p-5">
                                        <div class="py-30 text-center bg-body-light rounded">
                                            <div class="font-size-h2 font-w700 mb-0 text-muted">$880</div>
                                            <div class="font-size-sm font-w600 text-uppercase">Earnings</div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6 col-xl-3">
                                <a class="block block-rounded block-bordered" href="javascript:void(0)">
                                    <div class="block-content p-5">
                                        <div class="py-30 text-center bg-body-light rounded">
                                            <div class="font-size-h2 font-w700 mb-0 text-muted">$4,500</div>
                                            <div class="font-size-sm font-w600 text-uppercase">Total</div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-6 col-xl-3">
                                <a class="block block-rounded block-bordered" href="javascript:void(0)">
                                    <div class="block-content p-5">
                                        <div class="py-30 text-center bg-body-light rounded">
                                            <div class="font-size-h2 font-w700 mb-0 text-muted">$19,700</div>
                                            <div class="font-size-sm font-w600 text-uppercase">Estimated</div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- END Mini Stats -->

                        <!-- Charts -->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="block block-rounded block-bordered">
                                    <div class="block-header">
                                        <h3 class="block-title text-uppercase">Sales</h3>
                                        <div class="block-options">
                                            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                                <i class="si si-refresh"></i>
                                            </button>
                                            <button type="button" class="btn-block-option">
                                                <i class="si si-wrench"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="block-content p-5">
                                        <!-- Lines Chart Container functionality is initialized in js/pages/db_corporate.min.js which was auto compiled from _es6/pages/db_corporate.js -->
                                        <!-- For more info and examples you can check out http://www.chartjs.org/docs/ -->
                                        <canvas class="js-chartjs-corporate-lines"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="block block-rounded block-bordered">
                                    <div class="block-header">
                                        <h3 class="block-title text-uppercase">Earnings</h3>
                                        <div class="block-options">
                                            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                                <i class="si si-refresh"></i>
                                            </button>
                                            <button type="button" class="btn-block-option">
                                                <i class="si si-wrench"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="block-content p-5">
                                        <!-- Lines Chart Container functionality is initialized in js/pages/db_corporate.min.js which was auto compiled from _es6/pages/db_corporate.js -->
                                        <!-- For more info and examples you can check out http://www.chartjs.org/docs/ -->
                                        <canvas class="js-chartjs-corporate-lines2"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END Charts -->

                        <!-- More Data -->
                        <div class="row">
                            <!-- Latest Orders -->
                            <div class="col-xl-6">
                                <div class="block block-rounded block-bordered">
                                    <div class="block-header">
                                        <h3 class="block-title text-uppercase">Latest Orders</h3>
                                        <div class="block-options">
                                            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                                <i class="si si-refresh"></i>
                                            </button>
                                            <button type="button" class="btn-block-option">
                                                <i class="si si-wrench"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="block-content p-5">
                                        <table class="table table-borderless table-striped mb-0">
                                            <thead>
                                                <tr>
                                                    <th style="width: 100px;">ID</th>
                                                    <th>Status</th>
                                                    <th class="d-none d-sm-table-cell">Customer</th>
                                                    <th class="text-right">Value</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <a class="font-w600" href="javascript:void(0)">ORD.1851</a>
                                                    </td>
                                                    <td>
                                                        <span class="badge badge-danger">Canceled</span>
                                                    </td>
                                                    <td class="d-none d-sm-table-cell">
                                                        <a href="javascript:void(0)">Jose Parker</a>
                                                    </td>
                                                    <td class="text-right">
                                                        <span class="text-black">$203</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a class="font-w600" href="javascript:void(0)">ORD.1850</a>
                                                    </td>
                                                    <td>
                                                        <span class="badge badge-warning">Pending</span>
                                                    </td>
                                                    <td class="d-none d-sm-table-cell">
                                                        <a href="javascript:void(0)">Jose Parker</a>
                                                    </td>
                                                    <td class="text-right">
                                                        <span class="text-black">$842</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a class="font-w600" href="javascript:void(0)">ORD.1849</a>
                                                    </td>
                                                    <td>
                                                        <span class="badge badge-danger">Canceled</span>
                                                    </td>
                                                    <td class="d-none d-sm-table-cell">
                                                        <a href="javascript:void(0)">Betty Kelley</a>
                                                    </td>
                                                    <td class="text-right">
                                                        <span class="text-black">$151</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a class="font-w600" href="javascript:void(0)">ORD.1848</a>
                                                    </td>
                                                    <td>
                                                        <span class="badge badge-success">Completed</span>
                                                    </td>
                                                    <td class="d-none d-sm-table-cell">
                                                        <a href="javascript:void(0)">Barbara Scott</a>
                                                    </td>
                                                    <td class="text-right">
                                                        <span class="text-black">$688</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a class="font-w600" href="javascript:void(0)">ORD.1847</a>
                                                    </td>
                                                    <td>
                                                        <span class="badge badge-danger">Canceled</span>
                                                    </td>
                                                    <td class="d-none d-sm-table-cell">
                                                        <a href="javascript:void(0)">Susan Day</a>
                                                    </td>
                                                    <td class="text-right">
                                                        <span class="text-black">$963</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a class="font-w600" href="javascript:void(0)">ORD.1846</a>
                                                    </td>
                                                    <td>
                                                        <span class="badge badge-success">Completed</span>
                                                    </td>
                                                    <td class="d-none d-sm-table-cell">
                                                        <a href="javascript:void(0)">Susan Day</a>
                                                    </td>
                                                    <td class="text-right">
                                                        <span class="text-black">$836</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a class="font-w600" href="javascript:void(0)">ORD.1845</a>
                                                    </td>
                                                    <td>
                                                        <span class="badge badge-info">Processing</span>
                                                    </td>
                                                    <td class="d-none d-sm-table-cell">
                                                        <a href="javascript:void(0)">Alice Moore</a>
                                                    </td>
                                                    <td class="text-right">
                                                        <span class="text-black">$616</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a class="font-w600" href="javascript:void(0)">ORD.1844</a>
                                                    </td>
                                                    <td>
                                                        <span class="badge badge-warning">Pending</span>
                                                    </td>
                                                    <td class="d-none d-sm-table-cell">
                                                        <a href="javascript:void(0)">Sara Fields</a>
                                                    </td>
                                                    <td class="text-right">
                                                        <span class="text-black">$162</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a class="font-w600" href="javascript:void(0)">ORD.1843</a>
                                                    </td>
                                                    <td>
                                                        <span class="badge badge-info">Processing</span>
                                                    </td>
                                                    <td class="d-none d-sm-table-cell">
                                                        <a href="javascript:void(0)">Betty Kelley</a>
                                                    </td>
                                                    <td class="text-right">
                                                        <span class="text-black">$683</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a class="font-w600" href="javascript:void(0)">ORD.1842</a>
                                                    </td>
                                                    <td>
                                                        <span class="badge badge-info">Processing</span>
                                                    </td>
                                                    <td class="d-none d-sm-table-cell">
                                                        <a href="javascript:void(0)">Megan Fuller</a>
                                                    </td>
                                                    <td class="text-right">
                                                        <span class="text-black">$240</span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- END Latest Orders -->

                            <!-- Top Products -->
                            <div class="col-xl-6">
                                <div class="block block-rounded block-bordered">
                                    <div class="block-header">
                                        <h3 class="block-title text-uppercase">Top Products</h3>
                                        <div class="block-options">
                                            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                                <i class="si si-refresh"></i>
                                            </button>
                                            <button type="button" class="btn-block-option">
                                                <i class="si si-wrench"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="block-content p-5">
                                        <table class="table table-borderless table-striped mb-0">
                                            <thead>
                                                <tr>
                                                    <th class="d-none d-sm-table-cell" style="width: 100px;">ID</th>
                                                    <th>Product</th>
                                                    <th class="text-center">Orders</th>
                                                    <th class="d-none d-sm-table-cell text-center">Rating</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="d-none d-sm-table-cell">
                                                        <a class="font-w600" href="javascript:void(0)">PID.258</a>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0)">Dark Souls III</a>
                                                    </td>
                                                    <td class="text-center">
                                                        <a class="text-gray-dark" href="javascript:void(0)">912</a>
                                                    </td>
                                                    <td class="d-none d-sm-table-cell text-center">
                                                        <div class="text-warning">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="d-none d-sm-table-cell">
                                                        <a class="font-w600" href="javascript:void(0)">PID.198</a>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0)">Bioshock Collection</a>
                                                    </td>
                                                    <td class="text-center">
                                                        <a class="text-gray-dark" href="javascript:void(0)">895</a>
                                                    </td>
                                                    <td class="d-none d-sm-table-cell text-center">
                                                        <div class="text-warning">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="d-none d-sm-table-cell">
                                                        <a class="font-w600" href="javascript:void(0)">PID.852</a>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0)">Alien Isolation</a>
                                                    </td>
                                                    <td class="text-center">
                                                        <a class="text-gray-dark" href="javascript:void(0)">820</a>
                                                    </td>
                                                    <td class="d-none d-sm-table-cell text-center">
                                                        <div class="text-warning">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="d-none d-sm-table-cell">
                                                        <a class="font-w600" href="javascript:void(0)">PID.741</a>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0)">Bloodborne</a>
                                                    </td>
                                                    <td class="text-center">
                                                        <a class="text-gray-dark" href="javascript:void(0)">793</a>
                                                    </td>
                                                    <td class="d-none d-sm-table-cell text-center">
                                                        <div class="text-warning">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="d-none d-sm-table-cell">
                                                        <a class="font-w600" href="javascript:void(0)">PID.985</a>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0)">Forza Motorsport 7</a>
                                                    </td>
                                                    <td class="text-center">
                                                        <a class="text-gray-dark" href="javascript:void(0)">782</a>
                                                    </td>
                                                    <td class="d-none d-sm-table-cell text-center">
                                                        <div class="text-warning">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="d-none d-sm-table-cell">
                                                        <a class="font-w600" href="javascript:void(0)">PID.056</a>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0)">Fifa 18</a>
                                                    </td>
                                                    <td class="text-center">
                                                        <a class="text-gray-dark" href="javascript:void(0)">776</a>
                                                    </td>
                                                    <td class="d-none d-sm-table-cell text-center">
                                                        <div class="text-warning">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="d-none d-sm-table-cell">
                                                        <a class="font-w600" href="javascript:void(0)">PID.036</a>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0)">Gears of War 4</a>
                                                    </td>
                                                    <td class="text-center">
                                                        <a class="text-gray-dark" href="javascript:void(0)">680</a>
                                                    </td>
                                                    <td class="d-none d-sm-table-cell text-center">
                                                        <div class="text-warning">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="d-none d-sm-table-cell">
                                                        <a class="font-w600" href="javascript:void(0)">PID.682</a>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0)">Minecraft</a>
                                                    </td>
                                                    <td class="text-center">
                                                        <a class="text-gray-dark" href="javascript:void(0)">670</a>
                                                    </td>
                                                    <td class="d-none d-sm-table-cell text-center">
                                                        <div class="text-warning">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="d-none d-sm-table-cell">
                                                        <a class="font-w600" href="javascript:void(0)">PID.478</a>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0)">Dishonored 2</a>
                                                    </td>
                                                    <td class="text-center">
                                                        <a class="text-gray-dark" href="javascript:void(0)">640</a>
                                                    </td>
                                                    <td class="d-none d-sm-table-cell text-center">
                                                        <div class="text-warning">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="d-none d-sm-table-cell">
                                                        <a class="font-w600" href="javascript:void(0)">PID.952</a>
                                                    </td>
                                                    <td>
                                                        <a href="javascript:void(0)">Gran Turismo Sport</a>
                                                    </td>
                                                    <td class="text-center">
                                                        <a class="text-gray-dark" href="javascript:void(0)">630</a>
                                                    </td>
                                                    <td class="d-none d-sm-table-cell text-center">
                                                        <div class="text-warning">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- END Top Products -->
                        </div>
                        <!-- END More Data -->
                    </div>
                    <!-- END Content -->
                </div>
                <!-- END Page Content -->

            </main>
            <!-- END Main Container -->

            <!-- Footer -->
            <footer id="page-footer" class="bg-white opacity-0">
                <div class="content py-20 font-size-xs clearfix">
                    <div class="float-right">
                        Crafted with <i class="fa fa-heart text-pulse"></i> by <a class="font-w600" href="https://1.envato.market/ydb" target="_blank">pixelcave</a>
                    </div>
                    <div class="float-left">
                        <a class="font-w600" href="https://1.envato.market/95j" target="_blank">Codebase 3.1</a> &copy; <span class="js-year-copy"></span>
                    </div>
                </div>
            </footer>
            <!-- END Footer -->
        </div>
        <!-- END Page Container -->

        <!--
            Codebase JS Core

            Vital libraries and plugins used in all pages. You can choose to not include this file if you would like
            to handle those dependencies through webpack. Please check out assets/_es6/main/bootstrap.js for more info.

            If you like, you could also include them separately directly from the assets/js/core folder in the following
            order. That can come in handy if you would like to include a few of them (eg jQuery) from a CDN.

            assets/js/core/jquery.min.js
            assets/js/core/bootstrap.bundle.min.js
            assets/js/core/simplebar.min.js
            assets/js/core/jquery-scrollLock.min.js
            assets/js/core/jquery.appear.min.js
            assets/js/core/jquery.countTo.min.js
            assets/js/core/js.cookie.min.js
        -->
        <script src="assets/js/codebase.core.min.js"></script>

        <!--
            Codebase JS

            Custom functionality including Blocks/Layout API as well as other vital and optional helpers
            webpack is putting everything together at assets/_es6/main/app.js
        -->
        <script src="assets/js/codebase.app.min.js"></script>

        <!-- Page JS Plugins -->
        <script src="assets/js/plugins/chartjs/Chart.bundle.min.js"></script>

        <!-- Page JS Code -->
        <script src="assets/js/pages/db_corporate.min.js"></script>
    </body>
</html>