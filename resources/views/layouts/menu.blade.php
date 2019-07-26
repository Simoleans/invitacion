 <div class="wrapper">
      <!-- main menu-->
      <!--.main-menu(class="#{menuColor} #{menuOpenType}", class=(menuShadow == true ? 'menu-shadow' : ''))-->
      <div data-active-color="white" data-background-color="black" data-image="app-assets/img/sidebar-bg/01.jpg" class="app-sidebar">
        <!-- main menu header-->
        <!-- Sidebar Header starts-->
        <div class="sidebar-header">
          <div class="logo clearfix"><a href="{{route('dashboard')}}" class="logo-text float-left">
             <!--  <div class="logo-img"><img src="app-assets/img/logo.png"/></div> --><span class="text align-middle">Invitaciones</span></a><a id="sidebarToggle" href="javascript:;" class="nav-toggle d-none d-sm-none d-md-none d-lg-block"><!-- <i data-toggle="expanded" class="toggle-icon ft-toggle-right"></i></a><a id="sidebarClose" href="javascript:;" class="nav-close d-block d-md-block d-lg-none d-xl-none"><i class="ft-x"></i> --></a></div>
        </div>
        <!-- Sidebar Header Ends-->
        <!-- / main menu header-->
        <!-- main menu content-->
        <div class="sidebar-content">
          <div class="nav-container">
            <ul id="main-menu-navigation" data-menu="menu-navigation" data-scroll-to-active="true" class="navigation navigation-main">
              <li class="has-sub nav-item"><a href="#"><i class="icon-user-follow"></i><span data-i18n="" class="menu-title">Usuarios</span></a>
                <ul class="menu-content">
                  <li><a href="{{route('user.index')}}" class="menu-item">Ver Usuarios</a>
                  </li>
                  <li><a href="{{route('user.create')}}" class="menu-item">Crear Usuario</a>
                  </li>
                </ul>
              </li>
              <li class="has-sub nav-item"><a href="#"><i class="ft-alert-octagon"></i><span data-i18n="" class="menu-title">Invitacion</span></a>
                <ul class="menu-content">
                  <li><a href="{{route('invitacion.index')}}" class="menu-item">Ver Invitaciones</a>
                  </li>
                  <li><a href="{{route('invitacion.create')}}" class="menu-item">Crear Invitacion</a>
                  </li>
                </ul>
              </li>
              <!-- <li class=" nav-item"><a href="color-palette.html"><i class="ft-droplet"></i><span data-i18n="" class="menu-title">Menu</span></a>
              </li>
              <li class=" nav-item"><a href="inbox.html"><i class="ft-mail"></i><span data-i18n="" class="menu-title">Inbox</span></a>
              </li>
              </li>
              <li class="has-sub nav-item"><a href="#"><i class="ft-aperture"></i><span data-i18n="" class="menu-title">UI Kit</span></a>
                <ul class="menu-content">
                  <li><a href="grids.html" class="menu-item">Grid</a>
                  </li>
                  </li>
                  <li class="has-sub"><a href="#" class="menu-item">Icons</a>
                    <ul class="menu-content">
                      <li><a href="feather.html" class="menu-item">Feather Icon</a>
                      </li>
                      <li><a href="font-awesome.html" class="menu-item">Font Awesome Icon</a>
                      </li>
                      <li><a href="simple-line.html" class="menu-item">Simple Line Icon</a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li class="has-sub nav-item"><a href="#"><i class="ft-box"></i><span data-i18n="" class="menu-title">Components</span></a>
                <ul class="menu-content">
                  <li class="has-sub"><a href="#" class="menu-item">Bootstrap</a>
                    <ul class="menu-content">
                      <li><a href="components-lists.html" class="menu-item">List</a>
                      </li>
                      <li><a href="components-buttons.html" class="menu-item">Buttons</a>
                      </li>
                      <li><a href="components-alerts.html" class="menu-item">Alerts</a>
                      </li>
                      <li><a href="components-badges.html" class="menu-item">Badges</a>
                      </li>
                      <li><a href="components-dropdowns.html" class="menu-item">Dropdowns</a>
                      </li>
                      <li><a href="components-media-objects.html" class="menu-item">Media Objects</a>
                      </li>
                      <li><a href="components-pagination.html" class="menu-item">Pagination</a>
                      </li>
                      <li><a href="components-progress.html" class="menu-item">Progress Bars</a>
                      </li>
                      <li><a href="components-modals.html" class="menu-item">Modals</a>
                      </li>
                      <li><a href="components-collapse.html" class="menu-item">Collapse</a>
                      </li>
                      <li><a href="components-accordion.html" class="menu-item">Accordion</a>
                      </li>
                      <li><a href="components-carousel.html" class="menu-item">Carousel</a>
                      </li>
                      <li><a href="components-datepicker.html" class="menu-item">Datepicker</a>
                      </li>
                      <li><a href="components-popover.html" class="menu-item">Popover</a>
                      </li>
                      <li><a href="components-tabs.html" class="menu-item">Tabs</a>
                      </li>
                      <li><a href="components-tooltip.html" class="menu-item">Tooltip</a>
                      </li>
                      <li><a href="components-spinner.html" class="menu-item">Spinner</a>
                      </li>
                      <li><a href="components-toast.html" class="menu-item">Toast</a>
                      </li>
                      <li><a href="components-radio-checkboxes.html" class="menu-item">Radio &amp; Checkboxes</a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li class=" nav-item"><a href="https://pixinvent.com/apex-angular-4-bootstrap-admin-template/documentation"><i class="ft-book"></i><span data-i18n="" class="menu-title">Documentation</span></a>
              </li>
              <li class=" nav-item"><a href="https://pixinvent.ticksy.com/"><i class="ft-life-buoy"></i><span data-i18n="" class="menu-title">Support</span></a>
              </li>
            </ul> -->
          </div>
        </div>
        <!-- main menu content-->
        <div class="sidebar-background"></div>
        <!-- main menu footer-->
        <!-- include includes/menu-footer-->
        <!-- main menu footer-->
      </div>
      <!-- / main menu-->
