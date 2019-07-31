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
        <div id="page-container" class="sidebar-inverse side-scroll page-header-fixed main-content-boxed">

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
                                <a class="active" href="db_social"><i class="si si-compass"></i>Home</a>
                            </li>
                            <li>
                                <a href=""><i class="si si-flag"></i>Notifications</a>
                            </li>
                            <li>
                                <a href=""><i class="si si-envelope"></i>Messages</a>
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
                    <div class="content-header-section w-100">
                        <div class="row no-gutters">
                            <div class="col">
                                <!-- Toggle Sidebar -->
                                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                                <button type="button" class="btn btn-dual-secondary d-lg-none" data-toggle="layout" data-action="sidebar_toggle">
                                    <i class="fa fa-navicon"></i>
                                </button>
                                <!-- END Toggle Sidebar -->

                                <!-- Header Navigation -->
                                <!--
                                Desktop Navigation, mobile navigation can be found in #sidebar

                                If you would like to use the same navigation in both mobiles and desktops, you can use exactly the same markup inside sidebar and header navigation ul lists
                                If your sidebar menu includes headings, they won't be visible in your header navigation by default
                                If your sidebar menu includes icons and you would like to hide them, you can add the class 'nav-main-header-no-icons'
                                -->
                                <ul class="nav-main-header">
                                    <li>
                                        <a class="active" href="javascript:void(0)">
                                            <i class="si si-home d-none d-xl-inline-block"></i> Home
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">
                                            <i class="si si-flag d-none d-xl-inline-block"></i> Notifications
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">
                                            <i class="si si-envelope d-none d-xl-inline-block"></i> Messages
                                        </a>
                                    </li>
                                </ul>
                                <!-- END Header Navigation -->
                            </div>
                            <div class="col-3 text-center">
                                <!-- Logo -->
                                <div class="content-header-item">
                                    <a class="link-effect font-w700" href="index">
                                        <i class="si si-fire text-primary"></i>
                                        <span class="d-none d-md-inline-block">
                                            <span class="font-size-xl text-dual-primary-dark">code</span><span class="font-size-xl text-primary">base</span>
                                        </span>
                                    </a>
                                </div>
                                <!-- END Logo -->
                            </div>
                            <div class="col text-right">
                                <!-- Open Search Section -->
                                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                                <button type="button" class="btn btn-dual-secondary" data-toggle="layout" data-action="header_search_on">
                                    <i class="fa fa-search"></i>
                                </button>
                                <!-- END Open Search Section -->

                                <!-- Compose -->
                                <button type="button" class="btn btn-alt-success ml-5">
                                    <i class="fa fa-pencil-square-o"></i>
                                    <span class="d-none d-sm-inline">Compose</span>
                                </button>
                                <!-- END Compose -->
                            </div>
                        </div>
                    </div>
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

                <!-- Page Content -->
                <div class="content">
                    <div class="row">
                        <!-- User -->
                        <div class="col-lg-4 col-xl-3">
                            <!-- Account -->
                            <div class="block block-rounded text-center font-w600">
                                <div class="block-content block-content-full bg-gd-sea">
                                    <img class="img-avatar img-avatar-thumb" src="assets/media/avatars/avatar5.jpg" alt="">
                                </div>
                                <div class="block-content block-content-full">
                                    <div class="border-b pb-15 mb-15">
                                        Andrea Gardner<br>
                                        <a class="text-muted font-w400" href="javascript:void(0)">@andrea</a>
                                    </div>
                                    <div class="row gutters-tiny">
                                        <div class="col-4">
                                            <div class="font-size-xs text-muted">Updates</div>
                                            <a class="font-size-lg" href="javascript:void(0)">750</a>
                                        </div>
                                        <div class="col-4">
                                            <div class="font-size-xs text-muted">Following</div>
                                            <a class="font-size-lg" href="javascript:void(0)">230</a>
                                        </div>
                                        <div class="col-4">
                                            <div class="font-size-xs text-muted">Followers</div>
                                            <a class="font-size-lg" href="javascript:void(0)">1,680</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END Account -->

                            <!-- Worldwide Trends -->
                            <div class="block block-rounded">
                                <div class="block-header">
                                    <h3 class="block-title font-w600">Worldwide Trends</h3>
                                    <div class="block-options">
                                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                            <i class="si si-refresh"></i>
                                        </button>
                                        <button type="button" class="btn-block-option">
                                            <i class="si si-wrench"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="block-content">
                                    <a class="font-w600" href="javascript:void(0)">#laravelnews</a>
                                    <p class="text-muted">29.3k Updates</p>
                                    <a class="font-w600" href="javascript:void(0)">#reactjs</a>
                                    <p class="text-muted">25.8k Updates</p>
                                    <a class="font-w600" href="javascript:void(0)">#angular</a>
                                    <p class="text-muted">19.3k Updates</p>
                                    <a class="font-w600" href="javascript:void(0)">#pcnews</a>
                                    <p class="text-muted">18.6k Updates</p>
                                    <a class="font-w600" href="javascript:void(0)">#webdesign2018</a>
                                    <p class="text-muted">17.2k Updates</p>
                                </div>
                            </div>
                            <!-- END Worldwide Trends -->
                        </div>
                        <!-- END User -->

                        <!-- Updates -->
                        <div class="col-lg-4 col-xl-6">
                            <div class="block block-rounded">
                                <div class="block-content block-content-full bg-primary-light">
                                    <form>
                                        <div class="input-group">
                                            <input type="text" class="form-control border-0" placeholder="What’s happening?">
                                            <div class="input-group-append">
                                                <button type="submit" class="btn btn-primary border-0">
                                                    <i class="fa fa-pencil-square-o mr-5"></i> Post
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="block-content block-content-full">
                                    <div class="media">
                                        <img class="img-avatar img-avatar48 mr-20" src="assets/media/avatars/avatar13.jpg" alt="">
                                        <div class="media-body">
                                            <p class="mb-0">
                                                <a class="font-w600" href="javascript:void(0)">Wayne Garcia</a>
                                                <a class="text-muted" href="javascript:void(0)">@waynegarcia</a>
                                                <em class="text-muted">&bull; 30m</em>
                                            </p>
                                            <p>
                                                In gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                            </p>
                                            <button type="button" class="btn btn-sm btn-rounded btn-alt-secondary mr-10">
                                                <i class="fa fa-fw fa-comment-o"></i>
                                            </button>
                                            <button type="button" class="btn btn-sm btn-rounded btn-alt-secondary mr-10">
                                                <i class="fa fa-fw fa-retweet"></i>
                                            </button>
                                            <button type="button" class="btn btn-sm btn-rounded btn-alt-secondary mr-10">
                                                <i class="fa fa-fw fa-heart-o"></i>
                                            </button>
                                            <button type="button" class="btn btn-sm btn-rounded btn-alt-secondary mr-10">
                                                <i class="fa fa-fw fa-envelope-o"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="block-content block-content-full border-t">
                                    <div class="media">
                                        <img class="img-avatar img-avatar48 mr-20" src="assets/media/avatars/avatar9.jpg" alt="">
                                        <div class="media-body">
                                            <p class="mb-0">
                                                <a class="font-w600" href="javascript:void(0)">John Smith</a>
                                                <a class="text-muted" href="javascript:void(0)">@j.smith</a>
                                                <em class="text-muted">&bull; 35m</em>
                                            </p>
                                            <p>
                                                Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                            </p>
                                            <img class="img-fluid push" src="assets/media/photos/photo13.jpg" alt="">
                                            <button type="button" class="btn btn-sm btn-rounded btn-alt-secondary mr-10">
                                                <i class="fa fa-fw fa-comment-o"></i>
                                            </button>
                                            <button type="button" class="btn btn-sm btn-rounded btn-alt-secondary mr-10">
                                                <i class="fa fa-fw fa-retweet"></i>
                                            </button>
                                            <button type="button" class="btn btn-sm btn-rounded btn-alt-secondary mr-10">
                                                <i class="fa fa-fw fa-heart-o"></i>
                                            </button>
                                            <button type="button" class="btn btn-sm btn-rounded btn-alt-secondary mr-10">
                                                <i class="fa fa-fw fa-envelope-o"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="block-content block-content-full border-t">
                                    <div class="media">
                                        <img class="img-avatar img-avatar48 mr-20" src="assets/media/avatars/avatar10.jpg" alt="">
                                        <div class="media-body">
                                            <p class="mb-0">
                                                <a class="font-w600" href="javascript:void(0)">John Doe</a>
                                                <a class="text-muted" href="javascript:void(0)">@j.doe</a>
                                                <em class="text-muted">&bull; 50m</em>
                                            </p>
                                            <p>
                                                Maecenas ultrices, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor. Vestibulum ullamcorper, odio sed rhoncus imperdiet, enim elit sollicitudin orci, eget dictum leo mi nec lectus.
                                            </p>
                                            <button type="button" class="btn btn-sm btn-rounded btn-alt-secondary mr-10">
                                                <i class="fa fa-fw fa-comment-o"></i>
                                            </button>
                                            <button type="button" class="btn btn-sm btn-rounded btn-alt-secondary mr-10">
                                                <i class="fa fa-fw fa-retweet"></i>
                                            </button>
                                            <button type="button" class="btn btn-sm btn-rounded btn-alt-secondary mr-10">
                                                <i class="fa fa-fw fa-heart-o"></i>
                                            </button>
                                            <button type="button" class="btn btn-sm btn-rounded btn-alt-secondary mr-10">
                                                <i class="fa fa-fw fa-envelope-o"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="block-content block-content-full border-t">
                                    <div class="media">
                                        <img class="img-avatar img-avatar48 mr-20" src="assets/media/avatars/avatar3.jpg" alt="">
                                        <div class="media-body">
                                            <p class="mb-0">
                                                <a class="font-w600" href="javascript:void(0)">Lisa Ray</a>
                                                <a class="text-muted" href="javascript:void(0)">@l.ray</a>
                                                <em class="text-muted">&bull; 3d</em>
                                            </p>
                                            <p>
                                                Sed tincidunt scelerisque ligula, et facilisis nulla hendrerit non. Suspendisse potenti. Pellentesque non accumsan orci. Praesent at lacinia dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                            </p>
                                            <img class="img-fluid push" src="assets/media/photos/photo3.jpg" alt="">
                                            <button type="button" class="btn btn-sm btn-rounded btn-alt-secondary mr-10">
                                                <i class="fa fa-fw fa-comment-o"></i>
                                            </button>
                                            <button type="button" class="btn btn-sm btn-rounded btn-alt-secondary mr-10">
                                                <i class="fa fa-fw fa-retweet"></i>
                                            </button>
                                            <button type="button" class="btn btn-sm btn-rounded btn-alt-secondary mr-10">
                                                <i class="fa fa-fw fa-heart-o"></i>
                                            </button>
                                            <button type="button" class="btn btn-sm btn-rounded btn-alt-secondary mr-10">
                                                <i class="fa fa-fw fa-envelope-o"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="block-content block-content-full border-t">
                                    <div class="media">
                                        <img class="img-avatar img-avatar48 mr-20" src="assets/media/avatars/avatar2.jpg" alt="">
                                        <div class="media-body">
                                            <p class="mb-0">
                                                <a class="font-w600" href="javascript:void(0)">Laura Taylor</a>
                                                <a class="text-muted" href="javascript:void(0)">@l.taylor</a>
                                                <em class="text-muted">&bull; 5d</em>
                                            </p>
                                            <p>
                                                Donec lacinia venenatis metus at bibendum? In hac habitasse platea dictumst. Proin ac nibh rutrum lectus rhoncus eleifend. Sed porttitor pretium venenatis. Suspendisse potenti. Aliquam quis ligula elit. Aliquam at orci ac neque semper dictum. Sed tincidunt scelerisque ligula, et facilisis nulla hendrerit non. Suspendisse potenti. Pellentesque non accumsan orci. Praesent at lacinia dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                            </p>
                                            <button type="button" class="btn btn-sm btn-rounded btn-alt-secondary mr-10">
                                                <i class="fa fa-fw fa-comment-o"></i>
                                            </button>
                                            <button type="button" class="btn btn-sm btn-rounded btn-alt-secondary mr-10">
                                                <i class="fa fa-fw fa-retweet"></i>
                                            </button>
                                            <button type="button" class="btn btn-sm btn-rounded btn-alt-secondary mr-10">
                                                <i class="fa fa-fw fa-heart-o"></i>
                                            </button>
                                            <button type="button" class="btn btn-sm btn-rounded btn-alt-secondary mr-10">
                                                <i class="fa fa-fw fa-envelope-o"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END Updates -->

                        <!-- Extra -->
                        <div class="col-lg-4 col-xl-3">
                            <!-- Who to follow -->
                            <div class="block block-rounded">
                                <div class="block-header">
                                    <h3 class="block-title font-w600">Who to Follow</h3>
                                    <div class="block-options">
                                        <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                            <i class="si si-refresh"></i>
                                        </button>
                                        <button type="button" class="btn-block-option">
                                            <i class="si si-wrench"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="block-content block-content-full">
                                    <ul class="nav-users pull-all">
                                        <li>
                                            <a href="javascript:void(0)">
                                                <img class="img-avatar" src="assets/media/avatars/avatar5.jpg" alt="">
                                                <i class="fa fa-circle text-success"></i> Helen Jacobs
                                                <div class="font-w400 font-size-xs text-muted">Web Designer</div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <img class="img-avatar" src="assets/media/avatars/avatar6.jpg" alt="">
                                                <i class="fa fa-circle text-success"></i> Carol Ray
                                                <div class="font-w400 font-size-xs text-muted">Photographer</div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <img class="img-avatar" src="assets/media/avatars/avatar11.jpg" alt="">
                                                <i class="fa fa-circle text-success"></i> Justin Hunt
                                                <div class="font-w400 font-size-xs text-muted">Copywriter</div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <img class="img-avatar" src="assets/media/avatars/avatar9.jpg" alt="">
                                                <i class="fa fa-circle text-success"></i> Thomas Riley
                                                <div class="font-w400 font-size-xs text-muted">UI Designer</div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="block-content block-content-full border-t">
                                    <a href="javascript:void(0)">
                                        <i class="fa fa-users mr-5"></i> Find people you know
                                    </a>
                                </div>
                            </div>
                            <!-- END Who to follow -->

                            <!-- About -->
                            <div class="block block-rounded">
                                <div class="block-content block-content-full text-muted font-size-sm">
                                    &copy; <span class="js-year-copy"></span>
                                    <a class="text-muted ml-5" href="javascript:void(0)">About Us</a>
                                    <a class="text-muted ml-5" href="javascript:void(0)">Copyright</a>
                                </div>
                                <div class="block-content block-content-full border-t">
                                    <a href="javascript:void(0)">
                                        <i class="fa fa-external-link-square mr-5"></i> Advertise with Us
                                    </a>
                                </div>
                            </div>
                            <!-- END About -->
                        </div>
                        <!-- END Extra -->
                    </div>
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
    </body>
</html>