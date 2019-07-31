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
        <link rel="shortcut icon" href="/public/assets_temp/media/favicons/favicon.png">
        <link rel="icon" type="image/png" sizes="192x192" href="/public/assets_temp/media/favicons/favicon-192x192.png">
        <link rel="apple-touch-icon" sizes="180x180" href="/public/assets_temp/media/favicons/apple-touch-icon-180x180.png">
        <!-- END Icons -->

        <!-- Stylesheets -->

        <!-- Fonts and Codebase framework -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,400i,600,700">
        <!-- <link rel="stylesheet" id="css-main" href="/public/assets_temp/css/codebase.min.css"> -->
        <link rel="stylesheet" id="css-main" href="{{ asset('css/codebase.min.css') }}">

        <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
        <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/flat.min.css"> -->
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
        <div id="page-container" class="sidebar-inverse side-scroll page-header-fixed page-header-inverse main-content-boxed">

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
                                <a href="bd_dashboard"><i class="si si-compass"></i>Dashboard</a>
                            </li>
                            <li class="nav-main-heading">Layout</li>
                            <li>
                                <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-puzzle"></i>Variations</a>
                                <ul>
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
                                    <li>
                                        <a class="nav-submenu" data-toggle="nav-submenu" href="#">More Options</a>
                                        <ul>
                                            <li>
                                                <a href="javascript:void(0)">Another Link</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">Another Link</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">Another Link</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-main-heading">Other Pages</li>
                            <li>
                                <a class="active" href="bd_search"><i class="si si-magnifier"></i>Search</a>
                            </li>
                            <li>
                                <a href="be_pages_dashboard"><i class="si si-action-undo"></i>Go Back</a>
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
                        <div class="content-header-item">
                            <a class="link-effect font-w700 mr-5" href="index">
                                <i class="si si-fire text-primary"></i>
                                <span class="font-size-xl text-dual-primary-dark">code</span><span class="font-size-xl text-primary">base</span>
                            </a>
                        </div>
                        <!-- END Logo -->
                    </div>
                    <!-- END Left Section -->

                    <!-- Middle Section -->
                    <div class="content-header-section d-none d-lg-block">
                        <!-- Header Navigation -->
                        <!--
                        Desktop Navigation, mobile navigation can be found in #sidebar

                        If you would like to use the same navigation in both mobiles and desktops, you can use exactly the same markup inside sidebar and header navigation ul lists
                        If your sidebar menu includes headings, they won't be visible in your header navigation by default
                        If your sidebar menu includes icons and you would like to hide them, you can add the class 'nav-main-header-no-icons'
                        -->
                        <ul class="nav-main-header">
                            <li>
                                <a href="bd_dashboard"><i class="si si-compass"></i>Dashboard</a>
                            </li>
                            <li>
                                <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-puzzle"></i>Variations</a>
                                <ul>
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
                                    <li>
                                        <a class="nav-submenu" data-toggle="nav-submenu" href="#">More Options</a>
                                        <ul>
                                            <li>
                                                <a href="javascript:void(0)">Another Link</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">Another Link</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">Another Link</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="active" href="bd_search"><i class="si si-magnifier"></i>Search</a>
                            </li>
                            <li>
                                <a href="be_pages_dashboard"><i class="si si-action-undo"></i>Go Back</a>
                            </li>
                        </ul>
                        <!-- END Header Navigation -->
                    </div>
                    <!-- END Middle Section -->

                    <!-- Right Section -->
                    <div class="content-header-section">
                        <!-- Color Themes + A few of the many header options (used just for demonstration) -->
                        <!-- Themes functionality initialized in Template._uiHandleTheme() -->
                        <div class="btn-group ml-5" role="group">
                            <button type="button" class="btn btn-circle btn-dual-secondary" id="page-header-themes-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-paint-brush"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right min-width-150" aria-labelledby="page-header-themes-dropdown">
                                <h6 class="dropdown-header text-center">Color Themes</h6>
                                <div class="row no-gutters text-center">
                                    <div class="col-4 mb-5">
                                        <a class="text-default" data-toggle="theme" data-theme="default" href="javascript:void(0)">
                                            <i class="fa fa-2x fa-circle"></i>
                                        </a>
                                    </div>
                                    <div class="col-4 mb-5">
                                        <a class="text-elegance" data-toggle="theme" data-theme="assets/css/themes/elegance.min.css" href="javascript:void(0)">
                                            <i class="fa fa-2x fa-circle"></i>
                                        </a>
                                    </div>
                                    <div class="col-4 mb-5">
                                        <a class="text-pulse" data-toggle="theme" data-theme="assets/css/themes/pulse.min.css" href="javascript:void(0)">
                                            <i class="fa fa-2x fa-circle"></i>
                                        </a>
                                    </div>
                                    <div class="col-4 mb-5">
                                        <a class="text-flat" data-toggle="theme" data-theme="assets/css/themes/flat.min.css" href="javascript:void(0)">
                                            <i class="fa fa-2x fa-circle"></i>
                                        </a>
                                    </div>
                                    <div class="col-4 mb-5">
                                        <a class="text-corporate" data-toggle="theme" data-theme="assets/css/themes/corporate.min.css" href="javascript:void(0)">
                                            <i class="fa fa-2x fa-circle"></i>
                                        </a>
                                    </div>
                                    <div class="col-4 mb-5">
                                        <a class="text-earth" data-toggle="theme" data-theme="assets/css/themes/earth.min.css" href="javascript:void(0)">
                                            <i class="fa fa-2x fa-circle"></i>
                                        </a>
                                    </div>
                                </div>
                                <h6 class="dropdown-header text-center">Header</h6>
                                <button type="button" class="btn btn-sm btn-block btn-alt-secondary" data-toggle="layout" data-action="header_fixed_toggle">Fixed Mode</button>
                                <button type="button" class="btn btn-sm btn-block btn-alt-secondary mb-10" data-toggle="layout" data-action="header_style_inverse_toggle">Style</button>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="be_layout_api">
                                    <i class="si si-chemistry"></i> All Options (API)
                                </a>
                            </div>
                        </div>
                        <!-- END Color Themes + A few of the many header options -->

                        <!-- Open Search Section -->
                        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                        <button type="button" class="btn btn-circle btn-dual-secondary" data-toggle="layout" data-action="header_search_on">
                            <i class="fa fa-search"></i>
                        </button>
                        <!-- END Open Search Section -->

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
                        <form action="bd_search" method="post">
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
                    <!-- Search -->
                    <form class="push" action="bd_search" method="post">
                        <div class="input-group input-group-lg">
                            <input type="text" class="form-control" placeholder="Search web app..">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-secondary">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                    <!-- END Search -->

                    <!-- Results -->
                    <div class="block">
                        <ul class="nav nav-tabs nav-tabs-block" data-toggle="tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" href="#search-classic">Classic</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#search-photos">Photos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#search-users">Users</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#search-projects">Projects</a>
                            </li>
                        </ul>
                        <div class="block-content block-content-full tab-content overflow-hidden">
                            <!-- Classic -->
                            <div class="tab-pane fade show active" id="search-classic" role="tabpanel">
                                <div class="font-size-h3 font-w600 py-30 mb-20 text-center border-b">
                                    <span class="text-primary font-w700">10</span> sites found for <mark class="text-danger">codebase</mark>
                                </div>
                                <div class="row items-push">
                                    <div class="col-lg-6">
                                        <h4 class="h5 mb-5">
                                            <a href="javascript:void(0)">Codebase - Bootstrap 4 UI Framework</a>
                                        </h4>
                                        <div class="font-sm text-earth mb-5">https://pixelcave.com/codebase/</div>
                                        <p class="font-sm text-muted">Tristique lobortis est ut metus lobortis tortor tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti himenaeos habitant quis in sit varius lorem quis dictumst proin odio sagittis..</p>
                                    </div>
                                    <div class="col-lg-6">
                                        <h4 class="h5 mb-5">
                                            <a href="javascript:void(0)">Codebase - Bootstrap 4 UI Framework</a>
                                        </h4>
                                        <div class="font-sm text-earth mb-5">https://pixelcave.com/codebase/</div>
                                        <p class="font-sm text-muted">Tristique lobortis est ut metus lobortis tortor tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti himenaeos habitant quis in sit varius lorem quis dictumst proin odio sagittis..</p>
                                    </div>
                                    <div class="col-lg-6">
                                        <h4 class="h5 mb-5">
                                            <a href="javascript:void(0)">Codebase - Bootstrap 4 UI Framework</a>
                                        </h4>
                                        <div class="font-sm text-earth mb-5">https://pixelcave.com/codebase/</div>
                                        <p class="font-sm text-muted">Tristique lobortis est ut metus lobortis tortor tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti himenaeos habitant quis in sit varius lorem quis dictumst proin odio sagittis..</p>
                                    </div>
                                    <div class="col-lg-6">
                                        <h4 class="h5 mb-5">
                                            <a href="javascript:void(0)">Codebase - Bootstrap 4 UI Framework</a>
                                        </h4>
                                        <div class="font-sm text-earth mb-5">https://pixelcave.com/codebase/</div>
                                        <p class="font-sm text-muted">Tristique lobortis est ut metus lobortis tortor tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti himenaeos habitant quis in sit varius lorem quis dictumst proin odio sagittis..</p>
                                    </div>
                                    <div class="col-lg-6">
                                        <h4 class="h5 mb-5">
                                            <a href="javascript:void(0)">Codebase - Bootstrap 4 UI Framework</a>
                                        </h4>
                                        <div class="font-sm text-earth mb-5">https://pixelcave.com/codebase/</div>
                                        <p class="font-sm text-muted">Tristique lobortis est ut metus lobortis tortor tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti himenaeos habitant quis in sit varius lorem quis dictumst proin odio sagittis..</p>
                                    </div>
                                    <div class="col-lg-6">
                                        <h4 class="h5 mb-5">
                                            <a href="javascript:void(0)">Codebase - Bootstrap 4 UI Framework</a>
                                        </h4>
                                        <div class="font-sm text-earth mb-5">https://pixelcave.com/codebase/</div>
                                        <p class="font-sm text-muted">Tristique lobortis est ut metus lobortis tortor tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti himenaeos habitant quis in sit varius lorem quis dictumst proin odio sagittis..</p>
                                    </div>
                                    <div class="col-lg-6">
                                        <h4 class="h5 mb-5">
                                            <a href="javascript:void(0)">Codebase - Bootstrap 4 UI Framework</a>
                                        </h4>
                                        <div class="font-sm text-earth mb-5">https://pixelcave.com/codebase/</div>
                                        <p class="font-sm text-muted">Tristique lobortis est ut metus lobortis tortor tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti himenaeos habitant quis in sit varius lorem quis dictumst proin odio sagittis..</p>
                                    </div>
                                    <div class="col-lg-6">
                                        <h4 class="h5 mb-5">
                                            <a href="javascript:void(0)">Codebase - Bootstrap 4 UI Framework</a>
                                        </h4>
                                        <div class="font-sm text-earth mb-5">https://pixelcave.com/codebase/</div>
                                        <p class="font-sm text-muted">Tristique lobortis est ut metus lobortis tortor tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti himenaeos habitant quis in sit varius lorem quis dictumst proin odio sagittis..</p>
                                    </div>
                                    <div class="col-lg-6">
                                        <h4 class="h5 mb-5">
                                            <a href="javascript:void(0)">Codebase - Bootstrap 4 UI Framework</a>
                                        </h4>
                                        <div class="font-sm text-earth mb-5">https://pixelcave.com/codebase/</div>
                                        <p class="font-sm text-muted">Tristique lobortis est ut metus lobortis tortor tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti himenaeos habitant quis in sit varius lorem quis dictumst proin odio sagittis..</p>
                                    </div>
                                    <div class="col-lg-6">
                                        <h4 class="h5 mb-5">
                                            <a href="javascript:void(0)">Codebase - Bootstrap 4 UI Framework</a>
                                        </h4>
                                        <div class="font-sm text-earth mb-5">https://pixelcave.com/codebase/</div>
                                        <p class="font-sm text-muted">Tristique lobortis est ut metus lobortis tortor tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti himenaeos habitant quis in sit varius lorem quis dictumst proin odio sagittis..</p>
                                    </div>
                                </div>
                            </div>
                            <!-- END Classic -->

                            <!-- Photos -->
                            <div class="tab-pane fade" id="search-photos" role="tabpanel">
                                <div class="font-size-h3 font-w600 py-30 mb-20 text-center border-b">
                                    <span class="text-primary font-w700">9</span> images found for <mark class="text-danger">mountain</mark>
                                </div>
                                <div class="row gutters-tiny">
                                    <div class="col-md-6 col-lg-4 push">
                                        <img class="img-fluid" src="assets/media/photos/photo1.jpg" alt="">
                                    </div>
                                    <div class="col-md-6 col-lg-4 push">
                                        <img class="img-fluid" src="assets/media/photos/photo2.jpg" alt="">
                                    </div>
                                    <div class="col-md-6 col-lg-4 push">
                                        <img class="img-fluid" src="assets/media/photos/photo6.jpg" alt="">
                                    </div>
                                    <div class="col-md-6 col-lg-4 push">
                                        <img class="img-fluid" src="assets/media/photos/photo21.jpg" alt="">
                                    </div>
                                    <div class="col-md-6 col-lg-4 push">
                                        <img class="img-fluid" src="assets/media/photos/photo22.jpg" alt="">
                                    </div>
                                    <div class="col-md-6 col-lg-4 push">
                                        <img class="img-fluid" src="assets/media/photos/photo9.jpg" alt="">
                                    </div>
                                    <div class="col-md-6 col-lg-4 push">
                                        <img class="img-fluid" src="assets/media/photos/photo23.jpg" alt="">
                                    </div>
                                    <div class="col-md-6 col-lg-4 push">
                                        <img class="img-fluid" src="assets/media/photos/photo24.jpg" alt="">
                                    </div>
                                    <div class="col-md-6 col-lg-4 push">
                                        <img class="img-fluid" src="assets/media/photos/photo25.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <!-- END Photos -->

                            <!-- Users -->
                            <div class="tab-pane fade" id="search-users" role="tabpanel">
                                <div class="font-size-h3 font-w600 py-30 mb-20 text-center border-b">
                                    <span class="text-primary font-w700">10</span> users found for <mark class="text-danger">client</mark>
                                </div>
                                <table class="table table-striped table-borderless table-hover table-vcenter">
                                    <thead class="thead-light">
                                        <tr>
                                            <th class="d-none d-sm-table-cell text-center" style="width: 40px;">#</th>
                                            <th class="text-center" style="width: 70px;"><i class="si si-user"></i></th>
                                            <th>Name</th>
                                            <th class="d-none d-sm-table-cell">Email</th>
                                            <th class="d-none d-lg-table-cell" style="width: 15%;">Access</th>
                                            <th class="text-center" style="width: 80px;">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="d-none d-sm-table-cell text-center">
                                                <span class="badge badge-pill badge-primary">1</span>
                                            </td>
                                            <td class="text-center">
                                                <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar9.jpg" alt="">
                                            </td>
                                            <td class="font-w600">
                                                <a href="javascript:void(0)">Jose Wagner</a>
                                            </td>
                                            <td class="d-none d-sm-table-cell">
                                                client1@example.com
                                            </td>
                                            <td class="d-none d-lg-table-cell">
                                                <span class="badge badge-danger">Disabled</span>
                                            </td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="Edit">
                                                        <i class="fa fa-pencil"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="Delete">
                                                        <i class="fa fa-times"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="d-none d-sm-table-cell text-center">
                                                <span class="badge badge-pill badge-primary">2</span>
                                            </td>
                                            <td class="text-center">
                                                <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar14.jpg" alt="">
                                            </td>
                                            <td class="font-w600">
                                                <a href="javascript:void(0)">Carl Wells</a>
                                            </td>
                                            <td class="d-none d-sm-table-cell">
                                                client2@example.com
                                            </td>
                                            <td class="d-none d-lg-table-cell">
                                                <span class="badge badge-danger">Disabled</span>
                                            </td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="Edit">
                                                        <i class="fa fa-pencil"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="Delete">
                                                        <i class="fa fa-times"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="d-none d-sm-table-cell text-center">
                                                <span class="badge badge-pill badge-primary">3</span>
                                            </td>
                                            <td class="text-center">
                                                <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar8.jpg" alt="">
                                            </td>
                                            <td class="font-w600">
                                                <a href="javascript:void(0)">Lori Moore</a>
                                            </td>
                                            <td class="d-none d-sm-table-cell">
                                                client3@example.com
                                            </td>
                                            <td class="d-none d-lg-table-cell">
                                                <span class="badge badge-danger">Disabled</span>
                                            </td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="Edit">
                                                        <i class="fa fa-pencil"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="Delete">
                                                        <i class="fa fa-times"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="d-none d-sm-table-cell text-center">
                                                <span class="badge badge-pill badge-primary">4</span>
                                            </td>
                                            <td class="text-center">
                                                <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar2.jpg" alt="">
                                            </td>
                                            <td class="font-w600">
                                                <a href="javascript:void(0)">Lori Grant</a>
                                            </td>
                                            <td class="d-none d-sm-table-cell">
                                                client4@example.com
                                            </td>
                                            <td class="d-none d-lg-table-cell">
                                                <span class="badge badge-info">Business</span>
                                            </td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="Edit">
                                                        <i class="fa fa-pencil"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="Delete">
                                                        <i class="fa fa-times"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="d-none d-sm-table-cell text-center">
                                                <span class="badge badge-pill badge-primary">5</span>
                                            </td>
                                            <td class="text-center">
                                                <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar2.jpg" alt="">
                                            </td>
                                            <td class="font-w600">
                                                <a href="javascript:void(0)">Alice Moore</a>
                                            </td>
                                            <td class="d-none d-sm-table-cell">
                                                client5@example.com
                                            </td>
                                            <td class="d-none d-lg-table-cell">
                                                <span class="badge badge-primary">Personal</span>
                                            </td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="Edit">
                                                        <i class="fa fa-pencil"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="Delete">
                                                        <i class="fa fa-times"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="d-none d-sm-table-cell text-center">
                                                <span class="badge badge-pill badge-primary">6</span>
                                            </td>
                                            <td class="text-center">
                                                <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar9.jpg" alt="">
                                            </td>
                                            <td class="font-w600">
                                                <a href="javascript:void(0)">Brian Cruz</a>
                                            </td>
                                            <td class="d-none d-sm-table-cell">
                                                client6@example.com
                                            </td>
                                            <td class="d-none d-lg-table-cell">
                                                <span class="badge badge-success">VIP</span>
                                            </td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="Edit">
                                                        <i class="fa fa-pencil"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="Delete">
                                                        <i class="fa fa-times"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="d-none d-sm-table-cell text-center">
                                                <span class="badge badge-pill badge-primary">7</span>
                                            </td>
                                            <td class="text-center">
                                                <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar16.jpg" alt="">
                                            </td>
                                            <td class="font-w600">
                                                <a href="javascript:void(0)">Henry Harrison</a>
                                            </td>
                                            <td class="d-none d-sm-table-cell">
                                                client7@example.com
                                            </td>
                                            <td class="d-none d-lg-table-cell">
                                                <span class="badge badge-success">VIP</span>
                                            </td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="Edit">
                                                        <i class="fa fa-pencil"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="Delete">
                                                        <i class="fa fa-times"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="d-none d-sm-table-cell text-center">
                                                <span class="badge badge-pill badge-primary">8</span>
                                            </td>
                                            <td class="text-center">
                                                <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar14.jpg" alt="">
                                            </td>
                                            <td class="font-w600">
                                                <a href="javascript:void(0)">David Fuller</a>
                                            </td>
                                            <td class="d-none d-sm-table-cell">
                                                client8@example.com
                                            </td>
                                            <td class="d-none d-lg-table-cell">
                                                <span class="badge badge-warning">Trial</span>
                                            </td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="Edit">
                                                        <i class="fa fa-pencil"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="Delete">
                                                        <i class="fa fa-times"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="d-none d-sm-table-cell text-center">
                                                <span class="badge badge-pill badge-primary">9</span>
                                            </td>
                                            <td class="text-center">
                                                <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar15.jpg" alt="">
                                            </td>
                                            <td class="font-w600">
                                                <a href="javascript:void(0)">Ralph Murray</a>
                                            </td>
                                            <td class="d-none d-sm-table-cell">
                                                client9@example.com
                                            </td>
                                            <td class="d-none d-lg-table-cell">
                                                <span class="badge badge-primary">Personal</span>
                                            </td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="Edit">
                                                        <i class="fa fa-pencil"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="Delete">
                                                        <i class="fa fa-times"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="d-none d-sm-table-cell text-center">
                                                <span class="badge badge-pill badge-primary">10</span>
                                            </td>
                                            <td class="text-center">
                                                <img class="img-avatar img-avatar48" src="assets/media/avatars/avatar8.jpg" alt="">
                                            </td>
                                            <td class="font-w600">
                                                <a href="javascript:void(0)">Susan Day</a>
                                            </td>
                                            <td class="d-none d-sm-table-cell">
                                                client10@example.com
                                            </td>
                                            <td class="d-none d-lg-table-cell">
                                                <span class="badge badge-warning">Trial</span>
                                            </td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="Edit">
                                                        <i class="fa fa-pencil"></i>
                                                    </button>
                                                    <button type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="Delete">
                                                        <i class="fa fa-times"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- END Users -->

                            <!-- Projects -->
                            <div class="tab-pane fade" id="search-projects" role="tabpanel">
                                <div class="font-size-h3 font-w600 py-30 mb-20 text-center border-b">
                                    <span class="text-primary font-w700">6</span> projects found for <mark class="text-danger">creativity</mark>
                                </div>
                                <table class="table table-striped table-borderless table-hover table-vcenter">
                                    <thead class="thead-light">
                                        <tr>
                                            <th style="width: 50%;">Project</th>
                                            <th class="d-none d-lg-table-cell text-center" style="width: 15%;">Status</th>
                                            <th class="d-none d-lg-table-cell text-center" style="width: 15%;">Sales</th>
                                            <th class="text-center" style="width: 20%;">Earnings</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <h4 class="h5 mt-15 mb-5">
                                                    <a href="javascript:void(0)">Web Application Framework</a>
                                                </h4>
                                                <p class="d-none d-sm-block text-muted">
                                                    Your web applications have never been so easy to create and publish.
                                                </p>
                                            </td>
                                            <td class="d-none d-lg-table-cell text-center">
                                                <span class="badge badge-success">Completed</span>
                                            </td>
                                            <td class="d-none d-lg-table-cell font-size-xl text-center font-w600">1795</td>
                                            <td class="font-size-xl text-center font-w600">$ 21,987</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h4 class="h5 mt-15 mb-5">
                                                    <a href="javascript:void(0)">WP Theme</a>
                                                </h4>
                                                <p class="d-none d-sm-block text-muted">
                                                    Create a fully functional website with just a few clicks.
                                                </p>
                                            </td>
                                            <td class="d-none d-lg-table-cell text-center">
                                                <span class="badge badge-warning">In Progress</span>
                                            </td>
                                            <td class="d-none d-lg-table-cell font-size-xl text-center font-w600">1680</td>
                                            <td class="font-size-xl text-center font-w600">$ 11,350</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h4 class="h5 mt-15 mb-5">
                                                    <a href="javascript:void(0)">Dashboard Template</a>
                                                </h4>
                                                <p class="d-none d-sm-block text-muted">
                                                    Explore new designs with this new and fresh dashboard admin template.
                                                </p>
                                            </td>
                                            <td class="d-none d-lg-table-cell text-center">
                                                <span class="badge badge-success">Completed</span>
                                            </td>
                                            <td class="d-none d-lg-table-cell font-size-xl text-center font-w600">3500</td>
                                            <td class="font-size-xl text-center font-w600">$ 16,218</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h4 class="h5 mt-15 mb-5">
                                                    <a href="javascript:void(0)">Flaticon Set</a>
                                                </h4>
                                                <p class="d-none d-sm-block text-muted">
                                                    A beatifully and and crafted icon set including more than 3000 icons.
                                                </p>
                                            </td>
                                            <td class="d-none d-lg-table-cell text-center">
                                                <span class="badge badge-success">Completed</span>
                                            </td>
                                            <td class="d-none d-lg-table-cell font-size-xl text-center font-w600">2500</td>
                                            <td class="font-size-xl text-center font-w600">$ 18,800</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h4 class="h5 mt-15 mb-5">
                                                    <a href="javascript:void(0)">iOS UI Kit</a>
                                                </h4>
                                                <p class="d-none d-sm-block text-muted">
                                                    Create your app wireframes easily with this new UI Kit featuring iOS based designs.
                                                </p>
                                            </td>
                                            <td class="d-none d-lg-table-cell text-center">
                                                <span class="badge badge-danger">Cancelled</span>
                                            </td>
                                            <td class="d-none d-lg-table-cell font-size-xl text-center font-w600">2690</td>
                                            <td class="font-size-xl text-center font-w600">$ 10,002</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h4 class="h5 mt-15 mb-5">
                                                    <a href="javascript:void(0)">Mobile App Framework</a>
                                                </h4>
                                                <p class="d-none d-sm-block text-muted">
                                                    Create your iOS and Android applications with this powerful and modern framework.
                                                </p>
                                            </td>
                                            <td class="d-none d-lg-table-cell text-center">
                                                <span class="badge badge-success">Completed</span>
                                            </td>
                                            <td class="d-none d-lg-table-cell font-size-xl text-center font-w600">1980</td>
                                            <td class="font-size-xl text-center font-w600">$ 25,985</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- END Projects -->
                        </div>
                    </div>
                    <!-- END Results -->
                </div>
                <!-- END Page Content -->

            </main>
            <!-- END Main Container -->

            <!-- Footer -->
            <footer id="page-footer" class="opacity-0">
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
        <!-- <script src="assets/js/codebase.core.min.js"></script> -->
        <script src="{{ asset('css/codebase.min.css') }}"></script>

        <!--
            Codebase JS

            Custom functionality including Blocks/Layout API as well as other vital and optional helpers
            webpack is putting everything together at assets/_es6/main/app.js
        -->
        <! -- <script src="assets/js/codebase.app.min.js"></script> -->
        <script src="{{ asset('css/codebase.app.min.css') }}"></script>
    </body>
</html>