@extends('layouts.dashboard')

@section('content')
        <!-- Header -->
        <header id="page-header">
        <!-- Header Content -->
        <div class="content-header">
          <!-- Left Section -->
          <div class="content-header-section">
            <!-- Toggle Sidebar -->
            <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
            <button type="button" class="btn btn-circle btn-dual-secondary" data-toggle="layout" data-action="sidebar_toggle">
              <i class="fa fa-navicon"></i>
            </button>
            <!-- END Toggle Sidebar -->

            <!-- Open Search Section -->
            <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
            <button type="button" class="btn btn-circle btn-dual-secondary" data-toggle="layout" data-action="header_search_on">
              <i class="fa fa-search"></i>
            </button>
            <!-- END Open Search Section -->

            <!-- Color Themes (used just for demonstration) -->
            <!-- Themes functionality initialized in Codebase() -> uiHandleTheme() -->
            <div class="btn-group" role="group">

              <a class="link-effect text-dual-primary-dark font-size-sm font-w600 text-uppercase" href=""></a>
              <i class="fa fa-money" aria-hidden="true"></i>
            </div>
            <!-- END Color Themes -->
          </div>
          <!-- END Left Section -->

          <!-- Right Section -->
          <div class="content-header-section">
            <!-- User Dropdown -->
            <div class="btn-group" role="group">
                <?php
                    $GlobalService = new GlobalService;
                    $user_details = $GlobalService->user_details();
                ?>
              <button type="button" class="btn btn-rounded btn-dual-secondary" id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              {{ $user_details->name }}<i class="fa fa-angle-down ml-5"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-right min-width-150" aria-labelledby="page-header-user-dropdown">
                <a class="dropdown-item" href="">
                  <i class="si si-user mr-5"></i> Profile
                </a>
                <a class="dropdown-item d-flex align-items-center justify-content-between" href="">
                  <span><i class="si si-envelope-open mr-5"></i> Inbox</span>
                  <span class="badge badge-primary">3</span>
                </a>
                <a class="dropdown-item" href="/account">
                  <i class="si si-note mr-5"></i> Invoices
                </a>
                <div class="dropdown-divider"></div>

                <!-- Toggle Side Overlay -->
                <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
                <a class="dropdown-item" href="/profile" data-toggle="layout" data-action="side_overlay_toggle">
                  <i class="si si-wrench mr-5"></i> Settings
                </a>
                <!-- END Side Overlay -->

                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="/logout">
                  <i class="si si-logout mr-5"></i> Sign Out
                </a>
              </div>
            </div>
            <!-- END User Dropdown -->

            <!-- Toggle Side Overlay -->
            <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
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
            <form onsubmit="return false;">
              <div class="input-group">
                <div class="input-group-prepend">
                  <!-- Close Search Section -->
                  <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
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
@endsection

@section('footer')
      <footer id="page-footer">
        <div class="content py-20 font-size-sm clearfix">
          <div class="float-right">
            Crafted with <i class="fa fa-heart text-pulse"></i> by <a class="font-w600" href="https://1.envato.market/ydb" target="_blank">pixelcave</a>
          </div>
          <div class="float-left">
            <a class="font-w600" href="https://1.envato.market/95j" target="_blank">Codebase</a> &copy; <span class="js-year-copy"></span>
          </div>
        </div>
      </footer>
@endsection