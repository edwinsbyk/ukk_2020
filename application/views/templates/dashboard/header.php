<!doctype html>
<html lang="en" class="no-focus">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title><?= $title; ?></title>

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
    <link rel="shortcut icon" href="<?= base_url('assets/vendor'); ?>/media/favicons/favicon.png">
    <link rel="icon" type="image/png" sizes="192x192" href="<?= base_url('assets/vendor'); ?>/media/favicons/favicon-192x192.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url('assets/vendor'); ?>/media/favicons/apple-touch-icon-180x180.png">
    <!-- END Icons -->

    <!-- Stylesheets -->

    <!-- Fonts and Codebase framework -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,400i,600,700">
    <link rel="stylesheet" id="css-main" href="<?= base_url('assets/vendor'); ?>/css/codebase.min.css">

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
                        <a class="img-link mr-5" href="be_pages_generic_profile.html">
                            <img class="img-avatar img-avatar32" src="<?= base_url('assets/vendor'); ?>/media/avatars/avatar15.jpg" alt="">
                        </a>
                        <a class="align-middle link-effect text-primary-dark font-w600" href="be_pages_generic_profile.html">John Smith</a>
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
                        <form action="be_pages_generic_search.html" method="post">
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
                                <a href="be_pages_generic_profile.html">
                                    <img class="img-avatar" src="<?= base_url('assets/vendor'); ?>/media/avatars/avatar3.jpg" alt="">
                                    <i class="fa fa-circle text-success"></i> Laura Carr
                                    <div class="font-w400 font-size-xs text-muted">Photographer</div>
                                </a>
                            </li>
                            <li>
                                <a href="be_pages_generic_profile.html">
                                    <img class="img-avatar" src="<?= base_url('assets/vendor'); ?>/media/avatars/avatar13.jpg" alt="">
                                    <i class="fa fa-circle text-success"></i> Jeffrey Shaw
                                    <div class="font-w400 font-size-xs text-muted">Web Designer</div>
                                </a>
                            </li>
                            <li>
                                <a href="be_pages_generic_profile.html">
                                    <img class="img-avatar" src="<?= base_url('assets/vendor'); ?>/media/avatars/avatar6.jpg" alt="">
                                    <i class="fa fa-circle text-warning"></i> Danielle Jones
                                    <div class="font-w400 font-size-xs text-muted">UI Designer</div>
                                </a>
                            </li>
                            <li>
                                <a href="be_pages_generic_profile.html">
                                    <img class="img-avatar" src="<?= base_url('assets/vendor'); ?>/media/avatars/avatar16.jpg" alt="">
                                    <i class="fa fa-circle text-danger"></i> Jose Parker
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
                        <form action="be_pages_dashboard.html" method="post" onsubmit="return false;">
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
            </div>
        </aside>