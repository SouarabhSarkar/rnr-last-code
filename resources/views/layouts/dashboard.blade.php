<!doctype html>
<html lang="en">
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
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,400i,600,700&display=swap">
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
    <div id="page-container" class="sidebar-o enable-page-overlay side-scroll page-header-modern main-content-boxed">
      <!-- Side Overlay-->
      <aside id="side-overlay">
        <!-- Side Header -->
        <div class="content-header content-header-fullrow">
          <div class="content-header-section align-parent">
            <!-- Close Side Overlay -->
            <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
            <button type="button" class="btn btn-circle btn-dual-secondary align-v-r" data-toggle="layout" data-action="side_overlay_close">
              <i class="fa fa-times text-danger"></i>
            </button>
            <!-- END Close Side Overlay -->

            <!-- User Info -->
            <div class="content-header-item">
              <a class="img-link mr-5" href="">
                <img class="img-avatar img-avatar32" src="assets/media/avatars/avatar0.jpg" alt="">
              </a>
              <?php
                $GlobalService = new GlobalService;
                $user_details = $GlobalService->user_details();
              ?>
              <a class="align-middle link-effect text-primary-dark font-w600" href="">{{ $user_details->name }}</a>
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
              <form>
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
                <div id="storedcompany" class="col-4">
                  <div class="font-size-sm font-w600 text-uppercase text-muted"><button class="btn btn-primary mr-3">Companies</button></div>

                  <!-- foreach aayega -->
                    <div class="font-size-h4"></div>
                  <!-- endforeach aayega -->
                </div>
                <div class="col-4">
                  <div class="font-size-sm font-w600 text-uppercase text-muted">credits</div>
                  <div class="font-size-h4">200</div>
                </div>
                <!-- <div class="col-4">
                  <div class="font-size-sm font-w600 text-uppercase text-muted">Stat</div>
                  <div class="font-size-h4">300</div>
                </div> -->
              </div>
            </div>
          </div>
          <!-- END Mini Stats -->

          <!-- Block -->
          <div class="block pull-r-l">
            <div class="block-header bg-body-light">
              <h3 class="block-title">Title</h3>
              <div class="block-options">
                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                  <i class="si si-refresh"></i>
                </button>
                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
              </div>
            </div>
            <div class="block-content">
              <p>Content...</p>
            </div>
          </div>
          <!-- END Block -->
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
              <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
              <button type="button" class="btn btn-circle btn-dual-secondary d-lg-none align-v-r" data-toggle="layout" data-action="sidebar_close">
                <i class="fa fa-times text-danger"></i>
              </button>
              <!-- END Close Sidebar -->

              <!-- Logo -->
              <div class="content-header-item">
                <a class="link-effect font-w700" href="">
                  <i class="si si-fire text-primary"></i>
                  <span class="font-size-xl text-dual-primary-light">Rating</span><span class="font-size-xl text-primary-light/logout">NReview</span>
                </a>
              </div>
              <!-- END Logo -->
            </div>
            <!-- END Normal Mode -->
          </div>
          <!-- END Side Header -->

          <!-- Sidebar Scrolling -->
          <div class="js-sidebar-scroll">
            <!-- Side User -->
            <div class="content-side content-side-full content-side-user px-10 align-parent">
              <!-- Visible only in mini mode -->
              <div class="sidebar-mini-visible-b align-v animated fadeIn">
                <img class="img-avatar img-avatar32" src="assets/media/avatars/avatar0.jpg" alt="">
              </div>
              <!-- END Visible only in mini mode -->

              <!-- Visible only in normal mode -->
              <div class="sidebar-mini-hidden-b text-center">
                <a class="img-link" href="">
                  <img class="img-avatar" src="assets/media/avatars/avatar0.jpg" alt="">
                </a>
                <ul class="list-inline mt-10">
                  <li class="list-inline-item">
                    <?php
                        $GlobalService = new GlobalService;
                        $user_details = $GlobalService->user_details();
                    ?>
                    <a class="link-effect text-dual-primary-dark font-size-sm font-w600 text-uppercase" href="{{ $user_details->name }}"></a>
                  </li>
                  <li class="list-inline-item">
                    <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
                    <a class="link-effect text-dual-primary-dark" data-toggle="layout" data-action="sidebar_style_inverse_toggle" href="javascript:void(0)">
                      <i class="si si-drop"></i>
                    </a>
                  </li>
                  <li class="list-inline-item">
                    <a class="link-effect text-dual-primary-dark" href="/logout">
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
                  <!-- write dashboard link -->
                  <a class="active" href="/navbar"><i class="si si-cup"></i><span class="sidebar-mini-hide">Dashboard</span></a>
                </li>
                <li class="nav-main-heading"><span class="sidebar-mini-visible">HD</span><span class="sidebar-mini-hidden">Heading</span></li>
                <li class="sidebar-item">
                  <a
                    class="sidebar-link waves-effect waves-dark sidebar-link"
                    href="/addcompany"
                    aria-expanded="false">
                    <i class="fas fa-plus"></i>
                    <!-- <i class="mdi mdi-chart-bar"></i> -->
                    <span class="hide-menu">Add Company</span></a
                  >
                </li>
                <li class="sidebar-item">
                  <a
                    class="sidebar-link waves-effect waves-dark sidebar-link"
                    href="/addcontact"
                    aria-expanded="false">
                    <i class="fas fa-plus"></i>
                    <!-- <i class="mdi mdi-chart-bar"></i> -->
                    <span class="hide-menu">Add Contact</span></a
                  >
                </li>
                <!-- <li class="sidebar-item">
                  <a
                    class="sidebar-link waves-effect waves-dark sidebar-link"
                    href="/findcontact"
                    aria-expanded="false">
                    <i class="fas fa-plus"></i> -->
                    <!-- <i class="mdi mdi-chart-bar"></i> -->
                    <!-- <span class="hide-menu">find Contact</span></a
                  >
                </li> -->
                <li class="sidebar-item">
                  <a
                    class="sidebar-link waves-effect waves-dark sidebar-link"
                    href="/viewcontact"
                    aria-expanded="false">
                    <i class="fas fa-plus"></i>
                    <!-- <i class="mdi mdi-chart-bar"></i> -->
                    <span class="hide-menu">View Contact</span></a
                  >
                </li>
                <li class="sidebar-item">
                  <a
                    class="sidebar-link waves-effect waves-dark sidebar-link"
                    href="/review"
                    aria-expanded="false">
                    <i class="fas fa-plus"></i>
                    <!-- <i class="mdi mdi-chart-bar"></i> -->
                    <span class="hide-menu">Review</span></a
                  >
                </li>  
                <li class="nav-main-heading"><span class="sidebar-mini-visible">HD</span><span class="sidebar-mini-hidden" >Settings</span></li>
                <li class="sidebar-item">
                  <a
                    class="sidebar-link waves-effect waves-dark sidebar-link"
                    href="/profile"
                    aria-expanded="false">
                    <i class="fas fa-plus"></i>
                    <!-- <i class="mdi mdi-chart-bar"></i> -->
                    <span class="hide-menu">Profile</span></a
                  >
                </li>
                <li class="sidebar-item">
                  <a
                    class="sidebar-link waves-effect waves-dark sidebar-link"
                    href="/account"
                    aria-expanded="false">
                    <i class="fas fa-plus"></i>
                    <!-- <i class="mdi mdi-chart-bar"></i> -->
                    <span class="hide-menu">Account</span></a
                  >
                </li>
              </ul>
            </div>
            <!-- END Side Navigation -->
          </div>
          <!-- END Sidebar Scrolling -->
        </div>
        <!-- Sidebar Content -->
      </nav>
      <!-- END Sidebar -->

      <!-- <header> -->
        @yield('content')
      <!-- </header> -->
      <!-- Main Container -->
      <main id="main-container">
        <!-- Page Content -->
        <!-- <div class="content">
          <div class="block">
            <div class="block-header block-header-default">
              <h3 class="block-title">Blank <small>Get Started</small></h3>
              <div class="block-options">
                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="fullscreen_toggle"></button>
                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="pinned_toggle">
                  <i class="si si-pin"></i>
                </button>
                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                  <i class="si si-refresh"></i>
                </button>
                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="close">
                  <i class="si si-close"></i>
                </button>
              </div>
            </div>
            <div class="block-content">
              <p>Create your own awesome project!</p>
            </div>
          </div>
        </div> -->
        <!-- END Page Content -->
      </main>
      <!-- END Main Container -->

      <!-- Footer -->
          @yield('footer')
      <!-- END Footer -->
    </div>
    <!-- END Page Container -->

    <!-- Codebase JS -->
    <script src="assets/js/codebase.core.min.js"></script>
    <script src="assets/js/codebase.app.min.js"></script>

  </body>
</html>
