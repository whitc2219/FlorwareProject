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
        <link rel="stylesheet" id="css-theme" href="assets/css/themes/earth.min.css">
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
        <div id="page-container" class="sidebar-inverse side-scroll main-content-boxed">

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
                                <a href=""><i class="si si-cup"></i>Dashboard</a>
                            </li>
                            <li>
                                <a href=""><i class="si si-rocket"></i>Features</a>
                            </li>
                            <li>
                                <a href=""><i class="si si-wallet"></i>Pricing</a>
                            </li>
                            <li>
                                <a href=""><i class="si si-grid"></i>Plan</a>
                            </li>
                            <li>
                                <a href=""><i class="si si-user"></i>Account</a>
                            </li>
                            <li>
                                <a href=""><i class="si si-logout"></i>Logout</a>
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
                            <a class="link-effect font-w700" href="index">
                                <i class="si si-fire text-primary"></i>
                                <span class="font-size-xl text-dual-primary-dark">code</span><span class="font-size-xl text-primary">base</span>
                            </a>
                        </div>
                        <!-- END Logo -->
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
                                <a class="nav-submenu" data-toggle="nav-submenu" href="#">
                                    <i class="si si-layers"></i> Menu
                                </a>
                                <ul>
                                    <li>
                                        <a href=""><i class="si si-cup"></i>Dashboard</a>
                                    </li>
                                    <li>
                                        <a href=""><i class="si si-rocket"></i>Features</a>
                                    </li>
                                    <li>
                                        <a href=""><i class="si si-wallet"></i>Pricing</a>
                                    </li>
                                    <li>
                                        <a href=""><i class="si si-grid"></i>Plan</a>
                                    </li>
                                    <li>
                                        <a href=""><i class="si si-user"></i>Account</a>
                                    </li>
                                    <li>
                                        <a href=""><i class="si si-logout"></i>Logout</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <!-- END Header Navigation -->

                        <!-- Toggle Sidebar -->
                        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                        <button type="button" class="btn btn-dual-secondary d-lg-none" data-toggle="layout" data-action="sidebar_toggle">
                            Menu <i class="fa fa-navicon ml-5"></i>
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
                <div class="bg-white">
                    <div class="content content-full">
                        <div class="pt-50 pb-30 text-center">
                            <h1 class="font-w300 mb-10">Dashboard</h1>
                            <h2 class="h4 text-muted font-w300 mb-0">Welcome <strong>Admin</strong>, everything looks good.</h2>
                        </div>
                    </div>
                </div>
                <!-- END Header -->

                <!-- Page Content -->
                <div class="content">
                    <!-- Mini Stats -->
                    <div class="row">
                        <div class="col-6 col-xl-3">
                            <a class="block block-rounded" href="javascript:void(0)">
                                <div class="block-content block-content-full">
                                    <div class="py-20 text-center">
                                        <div class="font-size-h2 font-w700 mb-0 text-primary-dark">869</div>
                                        <div class="font-size-sm font-w600 text-primary-light">Sales</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-6 col-xl-3">
                            <a class="block block-rounded" href="javascript:void(0)">
                                <div class="block-content block-content-full">
                                    <div class="py-20 text-center">
                                        <div class="font-size-h2 font-w700 mb-0 text-primary-dark">$1,360</div>
                                        <div class="font-size-sm font-w600 text-primary-light">Earnings</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-6 col-xl-3">
                            <a class="block block-rounded" href="javascript:void(0)">
                                <div class="block-content block-content-full">
                                    <div class="py-20 text-center">
                                        <div class="font-size-h2 font-w700 mb-0 text-primary-dark">$15,500</div>
                                        <div class="font-size-sm font-w600 text-primary-light">Total</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-6 col-xl-3">
                            <a class="block block-rounded" href="javascript:void(0)">
                                <div class="block-content block-content-full">
                                    <div class="py-20 text-center">
                                        <div class="font-size-h2 font-w700 mb-0 text-primary-dark">$19,600</div>
                                        <div class="font-size-sm font-w600 text-primary-light">Estimated</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- END Mini Stats -->

                    <!-- Charts -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="block block-rounded">
                                <div class="block-header">
                                    <h3 class="block-title font-w600">Sales</h3>
                                </div>
                                <div class="block-content">
                                    <div class="pull-all">
                                        <!-- Lines Chart Container functionality is initialized in js/pages/db_minimal.min.js which was auto compiled from _es6/pages/db_minimal.js -->
                                        <!-- For more info and examples you can check out http://www.chartjs.org/docs/ -->
                                        <canvas class="js-chartjs-minimal-lines"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="block block-rounded">
                                <div class="block-header">
                                    <h3 class="block-title font-w600">Earnings</h3>
                                </div>
                                <div class="block-content">
                                    <div class="pull-all">
                                        <!-- Lines Chart Container functionality is initialized in js/pages/db_minimal.min.js which was auto compiled from _es6/pages/db_minimal.js -->
                                        <!-- For more info and examples you can check out http://www.chartjs.org/docs/ -->
                                        <canvas class="js-chartjs-minimal-lines2"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END Charts -->

                    <!-- Progress -->
                    <div class="row">
                        <div class="col-md-4">
                            <div class="block">
                                <div class="block-content block-content-full">
                                    <div class="py-20 text-center">
                                        <div class="mb-20">
                                            <i class="fa fa-coffee fa-3x"></i>
                                        </div>
                                        <div class="font-size-h4 font-w600">Pro Plan</div>
                                        <div class="text-muted">Active plan.</div>
                                        <div class="pt-20">
                                            <a class="btn btn-rounded btn-alt-primary" href="javascript:void(0)">
                                                <i class="fa fa-arrow-up mr-5"></i> Upgrade to VIP
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="block">
                                <div class="block-content block-content-full">
                                    <div class="py-20 text-center">
                                        <div class="mb-20">
                                            <i class="fa fa-twitter fa-3x"></i>
                                        </div>
                                        <div class="font-size-h4 font-w600">+107 followers</div>
                                        <div class="text-muted">Awesome!</div>
                                        <div class="pt-20">
                                            <a class="btn btn-rounded btn-alt-primary" href="javascript:void(0)">
                                                <i class="fa fa-link mr-5"></i> Check them out
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="block">
                                <div class="block-content block-content-full">
                                    <div class="py-20 text-center">
                                        <div class="mb-20">
                                            <i class="fa fa-envelope-open fa-3x"></i>
                                        </div>
                                        <div class="font-size-h4 font-w600">10,000 Subscribers</div>
                                        <div class="text-muted">Keep it up!</div>
                                        <div class="pt-20">
                                            <a class="btn btn-rounded btn-alt-primary" href="javascript:void(0)">
                                                <i class="fa fa-cog mr-5"></i> Manage list
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END Progress -->

                    <!-- More Data -->
                    <div class="row">
                        <div class="col-md-6">
                            <a class="block block-rounded" href="javascript:void(0)">
                                <div class="block-content block-content-full">
                                    <i class="si si-graph fa-2x text-body-bg-dark"></i>
                                    <div class="row pt-10 pb-30 text-center">
                                        <div class="col-6 border-r">
                                            <div class="font-size-h3 font-w600">5</div>
                                            <div class="font-w600 text-primary-light">Plans</div>
                                        </div>
                                        <div class="col-6">
                                            <div class="font-size-h3 font-w600">17,890</div>
                                            <div class="font-w600 text-primary-light">Subscriptions</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-6">
                            <a class="block block-rounded" href="javascript:void(0)">
                                <div class="block-content block-content-full">
                                    <div class="text-right">
                                        <i class="si si-wallet fa-2x text-body-bg-dark"></i>
                                    </div>
                                    <div class="row pt-10 pb-30 text-center font-w600">
                                        <div class="col-6 border-r">
                                            <div class="font-size-h3">$1,360</div>
                                            <div class="font-size-sm text-primary-light">Today</div>
                                        </div>
                                        <div class="col-6">
                                            <div class="font-size-h3">$5,680</div>
                                            <div class="font-size-sm text-primary-light">Last Week</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- END More Data -->
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
        <script src="assets/js/pages/db_minimal.min.js"></script>
    </body>
</html>