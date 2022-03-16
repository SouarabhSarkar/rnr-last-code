<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title>RatingNReview &amp; UI Framework</title>

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
    <link rel="shortcut icon" href="assets/media/favicons/r.jpg">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/media/favicons/r.jpg">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/media/favicons/r.jpg">
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

    RTL

        'rtl-support'                               Provides vital RTL styles to get you started
    -->
    <div id="page-container" class="sidebar-r sidebar-inverse side-scroll page-header-fixed page-header-glass page-header-inverse main-content-boxed rtl-support">

      <!-- Sidebar -->
      <nav id="sidebar">
        <!-- Sidebar Content -->
        <div class="sidebar-content">
          <!-- Side Header -->
          <div class="content-header content-header-fullrow bg-black-op-10">
            <div class="content-header-section text-center align-parent">
              <!-- Close Sidebar, Visible only on mobile screens -->
              <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
              <button type="button" class="btn btn-circle btn-dual-secondary d-lg-none align-v-l" data-toggle="layout" data-action="sidebar_close">
                <i class="fa fa-times text-danger"></i>
              </button>
              <!-- END Close Sidebar -->

              <!-- Logo -->
              <div class="content-header-item">
                <a class="link-effect font-w700" href="">
                  <i class="si si-fire text-primary"></i>
                  <span class="font-size-xl text-dual-primary-dark">Rating</span><span class="font-size-xl text-primary">NReview</span>
                </a>
              </div>
              <!-- END Logo -->
            </div>
          </div>
          <!-- END Side Header -->

          <!-- Sidebar Scrolling -->
          <div class="js-sidebar-scroll">
            <!-- Side Main Navigation -->
            <div class="content-side content-side-full">
              <!--
              Mobile navigation, desktop navigation can be found in #page-header

              If you would like to use the same navigation in both mobiles and desktops, you can use exactly the same markup inside sidebar and header navigation ul lists
              -->
              <ul class="nav-main">
                <li>
                  <a href="gs_landing.html"><i class="si si-cup"></i>Home</a>
                </li>
                <li class="nav-main-heading">Heading</li>
                <li>
                  <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-puzzle"></i>Dropdown</a>
                  <ul>
                    <li>
                      <a href="javascript:void(0)">Link #1</a>
                    </li>
                    <li>
                      <a href="javascript:void(0)">Link #2</a>
                    </li>
                    <li>
                      <a class="nav-submenu" data-toggle="nav-submenu" href="#">Dropdown</a>
                      <ul>
                        <li>
                          <a href="javascript:void(0)">Link #1</a>
                        </li>
                        <li>
                          <a href="javascript:void(0)">Link #2</a>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li class="nav-main-heading">Vital</li>
                <li>
                  <a href="javascript:void(0)"><i class="si si-wrench"></i>Page</a>
                </li>
                <li>
                  <a href="javascript:void(0)"><i class="si si-wrench"></i>Page</a>
                </li>
                <li>
                  <a href="javascript:void(0)"><i class="si si-wrench"></i>Page</a>
                </li>
              </ul>
            </div>
            <!-- END Side Main Navigation -->
          </div>
          <!-- END Sidebar Scrolling -->
        </div>
        <!-- Sidebar Content -->
      </nav>
      <!-- END Sidebar -->

      <!-- Header -->
      <header id="page-header">
        <!-- Header Content -->
        <div class="content-header">
          <!-- Right Section -->
          <div class="content-header-section">
            <!-- Logo -->
            <div class="content-header-item">
              <a class="link-effect font-w700 mr-5" href="https://thereadbettercompany.com/">
                <!-- <i class="si si-fire text-primary"><img src="/images/yes.png" alt="error"></i> -->
                <span class="font-size-xl text-dual-primary-dark">TheRead</span><span class="font-size-xl text-dual-primary-dark">BetterCompany</span>
              </a>
            </div>
            <!-- END Logo -->
          </div>
          <!-- END Right Section -->

          <!-- Left Section -->
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
                <a href="gs_landing.html">Partners</a>
              </li>
              <li>
                <a href="javascript:void(0)">Blogs</a>
              </li>
              <li>
                <a href="/aboutus">About Us</a>
              </li>
              <li>
                <a href="/welcome">Home</a>
              </li>
            </ul>
            <!-- END Header Navigation -->

            <!-- Color Themes (used just for demonstration) -->
            <!-- Themes functionality initialized in Codebase() -> uiHandleTheme() -->
            <!-- <div class="btn-group mr-5" role="group"> -->
              <!-- <button type="button" class="btn btn-circle btn-dual-secondary" id="page-header-themes-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-paint-brush"></i>
              </button> -->
              <!-- <div class="dropdown-menu min-width-150" aria-labelledby="page-header-themes-dropdown"> -->
                <!-- <h6 class="dropdown-header text-center">Color Themes</h6>
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
                </div> -->
              <!-- </div>
            </div> -->
            <!-- END Color Themes -->

            <!-- Open Search Section -->
            <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
            <!-- <button type="button" class="btn btn-circle btn-dual-secondary" data-toggle="layout" data-action="header_search_on">
              <i class="fa fa-search"></i>
            </button> -->
            <!-- END Open Search Section -->

            <!-- Toggle Sidebar -->
            <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
            <button type="button" class="btn btn-circle btn-dual-secondary d-lg-none" data-toggle="layout" data-action="sidebar_toggle">
              <i class="fa fa-navicon"></i>
            </button>
            <!-- END Toggle Sidebar -->
          </div>
          <!-- END Left Section -->
        </div>
        <!-- END Header Content -->

        <!-- Header Search -->
        <div id="page-header-search" class="overlay-header">
          <div class="content-header content-header-fullrow">
            <form onsubmit="return false;">
              <div class="input-group">
                <div class="input-group-append">
                  <!-- Close Search Section -->
                  <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
                  <button type="button" class="btn btn-square btn-secondary px-15" data-toggle="layout" data-action="header_search_off">
                    <i class="fa fa-times"></i>
                  </button>
                  <!-- END Close Search Section -->
                </div>
                <input type="text" class="form-control" placeholder="Search or hit ESC.." id="page-header-search-input" name="page-header-search-input">
                <div class="input-group-prepend">
                  <button type="submit" class="btn btn-square btn-secondary px-15">
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
        <!-- Hero -->
        <div class="bg-gd-primary overflow-hidden">
          <div class="hero bg-black-op-25">
            <div class="hero-inner">
              <div class="content content-full text-center">
                <h1 class="display-3 font-w700 text-white mb-10 invisible" data-toggle="appear" data-class="animated fadeInDown">Rating-N-Review</h1>
                <h2 class="font-w400 text-white-op mb-50 invisible" data-toggle="appear" data-class="animated fadeInDown">By The ReadBetter Company</h2>
                <a class="btn btn-hero btn-noborder btn-rounded btn-success ml-5 mb-10 invisible" data-toggle="appear" data-class="animated fadeInUp" href="/signup">
                  <i class="fa fa-rocket ml-10" ></i> Sign Up
                </a>
                <a class="btn btn-hero btn-noborder btn-rounded btn-primary mb-10 invisible" data-toggle="appear" data-class="animated fadeInUp" href="/login">
                  <i class="fa fa-rocket ml-10"></i> Log In
                </a>
              </div>
            </div>
          </div>
        </div>
        <!-- END Hero -->

        <!-- Content #1 -->
        <div class="bg-white">
          <div class="content content-full">
            <div class="py-50 text-center">
              <h3 class="font-w700 mb-10">About Rating-N_Review</h3>
              <h4 class="font-w400 text-muted mb-0">The problem with many About Us pages is they’re an      afterthought—a link buried in the footer of a website that leads to a few hastily written paragraphs about a company.
                                 What an About Us page should be is a goal-oriented sales page, one that focuses on highlighting the biggest selling points of your story and brand, making a strong impression on curious customers.</h4>
            </div>
          </div>
        </div>
        <!-- END Content #1 -->

        <!-- Content #2 -->
        <div class="bg-body-light">
          <div class="content content-full">
            <div class="py-50 text-center">
              <h3 class="font-w700 mb-10">The TheReadBetterCompany</h3>
              <h4 class="font-w400 text-muted mb-0">The ReadBetter Company's technology platform guides parents & educators to help children inculcate reading habits, to discover books they can read, to enjoy reading and to ultimately reap the life-long benefits learning. .
              We firmly believe that a child who reads becomes an adult who thinks. Our scientific method encourages reading, carefully guides to improve comprehension, and coaches to expand reading ability and horizons.  
              ReadBetterTM was created out of a parent's desire to help their child discover the magic of reading. Reading is an essential skill and like any other, practice makes you better at it.</h4>
            </div>
          </div>
        </div>
        <!-- END Content #2 -->

        <!-- Content #3 -->
        <div class="bg-white">
          <div class="content content-full">
            <div class="py-50 text-center">
              <h3 class="font-w700 mb-10">PARTNER WITH US</h3>
              <h4 class="font-w400 text-muted mb-0">We're keen to partner with individuals & institutions, large  or small who can join hands with us in encouraging our current & next generations to be readers. ReadBetter has created a scientific method that guides, encourages and promotes readers to love reading.</h4>
            </div>
          </div>
        </div>
        <!-- END Content #3 -->

        <!-- Call to Action -->
        <!-- <div class="bg-body-light">
          <div class="content content-full text-center">
            <div class="py-50">
              <h3 class="font-w700 mb-10">Title</h3>
              <h4 class="font-w400 text-muted mb-30">Subtitle.</h4>
              <a class="btn btn-hero btn-rounded btn-alt-primary" href="">Call to Action</a>
            </div>
          </div>
        </div> -->
        <!-- END Call to Action -->
      </main>
      <!-- END Main Container -->

      <!-- Footer -->
      <footer id="page-footer" class="bg-white">
        <div class="content content-full">
          <!-- Footer Navigation -->
          <div class="row items-push-2x mt-30">
            <div class="col-6 col-md-4">
              <h3 class="h1 font-w700">Follow us in</h3>
              <ul class="list list-simple-mini font-size-sm">
                <li>
                  <h5><a href="#" class="fa fa-facebook">facebook</a></h>
                </li>
                <li>
                  <h5><a  href="#" class="fa fa-instagram">instagram</a></h5>
                  </li>
                <li>
                  <h5><a href="#" class="fa fa-youtube">youtube</a></h5>
                </li>
                <li>
                  <h5><a href="#" class="fa fa-linkedin">Linkedin</a></h5>
                </li>
                <li>
                  <h5> <a href="#" class="fa fa-twitter">tweeter</a></h5>
                </li>
              </ul>
            </div>
            <div class="col-6 col-md-4">
              <!-- <h3 class="h5 font-w700">Heading</h3> -->
              <!-- <ul class="list list-simple-mini font-size-sm">
                <li>
                  <a class="link-effect font-w600" href="javascript:void(0)">Link #1</a>
                </li>
                <li>
                  <a class="link-effect font-w600" href="javascript:void(0)">Link #2</a>
                </li>
                <li>
                  <a class="link-effect font-w600" href="javascript:void(0)">Link #3</a>
                </li>
                <li>
                  <a class="link-effect font-w600" href="javascript:void(0)">Link #4</a>
                </li>
                <li>
                  <a class="link-effect font-w600" href="javascript:void(0)">Link #5</a>
                </li>
                <li>
                  <a class="link-effect font-w600" href="javascript:void(0)">Link #6</a>
                </li>
              </ul> -->
            </div>
            <div class="col-md-4">
              <h3 class="h5 font-w700">The ReadBetter Company LTD</h3>
              <div class="font-size-sm mb-30">
              Prem Sagar, 57 swastik chs ltd, Narsee Monjee Rd,<br>
              Mumbai, Maharashtra 400056<br>
                <abbr title="Phone">P:</abbr> (123) 456-7890
              </div>
              <!-- <h3 class="h5 font-w700">Our Newsletter</h3>
              <form>
                <div class="input-group">
                  <input type="email" class="form-control rounded-0" id="ld-subscribe-email" name="ld-subscribe-email" placeholder="Your email..">
                  <div class="input-group-prepend">
                    <button type="submit" class="btn btn-square btn-secondary">Subscribe</button>
                  </div>
                </div>
              </form> -->
            </div>
          </div>
          <!-- END Footer Navigation -->

          <!-- Copyright Info -->
          <div class="font-size-sm clearfix border-t pt-20 pb-10">
            <div class="float-right">
              <a class="font-w600" href="https://1.envato.market/95j" target="_blank">TheReadBetterCompany</a> &copy; <span class="js-year-copy"></span>
            </div>
            <div class="float-left">
              Crafted with <i class="fa fa-heart text-pulse"></i> by <a class="font-w600" href="https://thereadbettercompany.com/" target="_blank">TheReadBetterCompany</a>
            </div>
          </div>
          <!-- END Copyright Info -->
        </div>
      </footer>
      <!-- END Footer -->
    </div>
    <!-- END Page Container -->

    <!-- Codebase JS -->
    <script src="assets/js/codebase.core.min.js"></script>
    <script src="assets/js/codebase.app.min.js"></script>
  </body>
</html>