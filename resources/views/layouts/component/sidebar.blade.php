{{--  Sidebar  --}}
<div class="site-menubar">
    <div class="site-menubar-body">
        <div>
            <div>
                <ul class="site-menu" data-plugin="menu">
                    @if (Auth::user()->role_id == 4)
                        <li class="site-menu-category">General</li>
                        <li class="site-menu-item ">
                            <a class="animsition-link" href="{{ route('finance.dashboard') }}">
                                <i class="site-menu-icon md-view-dashboard" aria-hidden="true"></i>
                                <span class="site-menu-title">Dashboard</span>
                            </a>
                        </li>
                        <li class="site-menu-item has-sub">
                            <a class="animsition-link" href="{{ route('finance.allEmployess') }}">
                                <i class="site-menu-icon icon wb-users md-view-compact" aria-hidden="true"></i>
                                <span class="site-menu-title">All Employess</span>
                            </a>
                        </li>
                        {{-- <li class="site-menu-category">Payroll</li> --}}
                        <li class="site-menu-item ">
                            <a class="animsition-link" href="{{ route('finance.createSalaryStructure') }}">
                                <i class="site-menu-icon md-view-compact" aria-hidden="true"></i>
                                <span class="site-menu-title">Payroll</span>
                            </a>
                        </li>
                    @endif

                    @if (Auth::user()->role_id == 3)
                        <li class="site-menu-category">General</li>
                        <li class="site-menu-item ">
                            <a class="animsition-link" href="{{ route('hr.dashboard') }}">
                                <i class="site-menu-icon md-view-dashboard" aria-hidden="true"></i>
                                <span class="site-menu-title">Dashboard</span>
                            </a>
                        </li>
                        <li class="site-menu-category">Employees</li>
                        <li class="site-menu-item ">
                            <a class="animsition-link" href="{{ route('hr.employee-list') }}">
                                <i class="site-menu-icon md-view-dashboard" aria-hidden="true"></i>
                                <span class="site-menu-title ">All Employees</span>
                            </a>
                        </li>
                        <li class="site-menu-item ">
                            <a class="animsition-link" href="{{ route('hr.employee-add') }}">
                                <i class="site-menu-icon md-view-dashboard" aria-hidden="true"></i>
                                <span class="site-menu-title">Add Emp</span>
                            </a>
                        </li>
                        <li class="site-menu-item ">
                            <a class="animsition-link" href="{{ route('hr.attendance') }}">
                                <i class="site-menu-icon md-view-dashboard" aria-hidden="true"></i>
                                <span class="site-menu-title">Employee Attendance</span>
                            </a>
                        </li>
                    @endif



                    {{-- <li class="site-menu-item has-sub">
                        <a href="javascript:void(0)">
                            <i class="site-menu-icon md-view-compact" aria-hidden="true"></i>
                            <span class="site-menu-title">Layouts</span>
                            <span class="site-menu-arrow"></span>
                        </a>
                        <ul class="site-menu-sub">
                            <li class="site-menu-item">
                                <a class="animsition-link" href="layouts/menu-collapsed.html">
                                    <span class="site-menu-title">Menu Collapsed</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="layouts/menu-expended.html">
                                    <span class="site-menu-title">Menu Expended</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="layouts/grids.html">
                                    <span class="site-menu-title">Grid Scaffolding</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="layouts/layout-grid.html">
                                    <span class="site-menu-title">Layout Grid</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="layouts/headers.html">
                                    <span class="site-menu-title">Different Headers</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="layouts/panel-transition.html">
                                    <span class="site-menu-title">Panel Transition</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="layouts/boxed.html">
                                    <span class="site-menu-title">Boxed Layout</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="layouts/two-columns.html">
                                    <span class="site-menu-title">Two Columns</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="layouts/bordered-header.html">
                                    <span class="site-menu-title">Bordered Header</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="layouts/menubar-flipped.html">
                                    <span class="site-menu-title">Menubar Flipped</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="layouts/menubar-native-scrolling.html">
                                    <span class="site-menu-title">Menubar Native Scrolling</span>
                                </a>
                            </li>
                            <li class="site-menu-item has-sub">
                                <a href="javascript:void(0)">
                                    <span class="site-menu-title">Page Aside</span>
                                    <span class="site-menu-arrow"></span>
                                </a>
                                <ul class="site-menu-sub">
                                    <li class="site-menu-item">
                                        <a class="animsition-link" href="layouts/aside-left-static.html">
                                            <span class="site-menu-title">Left Static</span>
                                        </a>
                                    </li>
                                    <li class="site-menu-item">
                                        <a class="animsition-link" href="layouts/aside-right-static.html">
                                            <span class="site-menu-title">Right Static</span>
                                        </a>
                                    </li>
                                    <li class="site-menu-item">
                                        <a class="animsition-link" href="layouts/aside-left-fixed.html">
                                            <span class="site-menu-title">Left Fixed</span>
                                        </a>
                                    </li>
                                    <li class="site-menu-item">
                                        <a class="animsition-link" href="layouts/aside-right-fixed.html">
                                            <span class="site-menu-title">Right Fixed</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li> --}}
                    {{-- <li class="site-menu-item has-sub">
                        <a href="javascript:void(0)">
                            <i class="site-menu-icon md-google-pages" aria-hidden="true"></i>
                            <span class="site-menu-title">Pages</span>
                            <span class="site-menu-arrow"></span>
                        </a>
                        <ul class="site-menu-sub">
                            <li class="site-menu-item has-sub">
                                <a href="javascript:void(0)">
                                    <span class="site-menu-title">Errors</span>
                                    <span class="site-menu-arrow"></span>
                                </a>
                                <ul class="site-menu-sub">
                                    <li class="site-menu-item">
                                        <a class="animsition-link" href="pages/error-400.html">
                                            <span class="site-menu-title">400</span>
                                        </a>
                                    </li>
                                    <li class="site-menu-item">
                                        <a class="animsition-link" href="pages/error-403.html">
                                            <span class="site-menu-title">403</span>
                                        </a>
                                    </li>
                                    <li class="site-menu-item">
                                        <a class="animsition-link" href="pages/error-404.html">
                                            <span class="site-menu-title">404</span>
                                        </a>
                                    </li>
                                    <li class="site-menu-item">
                                        <a class="animsition-link" href="pages/error-500.html">
                                            <span class="site-menu-title">500</span>
                                        </a>
                                    </li>
                                    <li class="site-menu-item">
                                        <a class="animsition-link" href="pages/error-503.html">
                                            <span class="site-menu-title">503</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="pages/faq.html">
                                    <span class="site-menu-title">FAQ</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="pages/gallery.html">
                                    <span class="site-menu-title">Gallery</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="pages/gallery-grid.html">
                                    <span class="site-menu-title">Gallery Grid</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="pages/search-result.html">
                                    <span class="site-menu-title">Search Result</span>
                                </a>
                            </li>
                            <li class="site-menu-item has-sub">
                                <a href="javascript:void(0)">
                                    <span class="site-menu-title">Maps</span>
                                    <span class="site-menu-arrow"></span>
                                </a>
                                <ul class="site-menu-sub">
                                    <li class="site-menu-item">
                                        <a class="animsition-link" href="pages/map-google.html">
                                            <span class="site-menu-title">Google Maps</span>
                                        </a>
                                    </li>
                                    <li class="site-menu-item">
                                        <a class="animsition-link" href="pages/map-vector.html">
                                            <span class="site-menu-title">Vector Maps</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="pages/maintenance.html">
                                    <span class="site-menu-title">Maintenance</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="pages/forgot-password.html">
                                    <span class="site-menu-title">Forgot Password</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="pages/lockscreen.html">
                                    <span class="site-menu-title">Lockscreen</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="pages/login.html">
                                    <span class="site-menu-title">Login</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="pages/register.html">
                                    <span class="site-menu-title">Register</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="pages/login-v2.html">
                                    <span class="site-menu-title">Login V2</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="pages/register-v2.html">
                                    <span class="site-menu-title">Register V2</span>
                                    <div class="site-menu-label">
                                        <span class="badge badge-info badge-round">new</span>
                                    </div>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="pages/login-v3.html">
                                    <span class="site-menu-title">Login V3</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="pages/register-v3.html">
                                    <span class="site-menu-title">Register V3</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="pages/user.html">
                                    <span class="site-menu-title">User List</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="pages/invoice.html">
                                    <span class="site-menu-title">Invoice</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="pages/blank.html">
                                    <span class="site-menu-title">Blank Page</span>
                                </a>
                            </li>
                            <li class="site-menu-item has-sub">
                                <a href="javascript:void(0)">
                                    <span class="site-menu-title">Email</span>
                                    <span class="site-menu-arrow"></span>
                                </a>
                                <ul class="site-menu-sub">
                                    <li class="site-menu-item">
                                        <a class="animsition-link" href="pages/email-articles.html">
                                            <span class="site-menu-title">Articles</span>
                                        </a>
                                    </li>
                                    <li class="site-menu-item">
                                        <a class="animsition-link" href="pages/email-welcome.html">
                                            <span class="site-menu-title">Welcome</span>
                                        </a>
                                    </li>
                                    <li class="site-menu-item">
                                        <a class="animsition-link" href="pages/email-post.html">
                                            <span class="site-menu-title">Post</span>
                                        </a>
                                    </li>
                                    <li class="site-menu-item">
                                        <a class="animsition-link" href="pages/email-thumbnail.html">
                                            <span class="site-menu-title">Thumbnail</span>
                                        </a>
                                    </li>
                                    <li class="site-menu-item">
                                        <a class="animsition-link" href="pages/email-news.html">
                                            <span class="site-menu-title">News</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="pages/code-editor.html">
                                    <span class="site-menu-title">Code Editor</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="pages/profile.html">
                                    <span class="site-menu-title">Profile</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="pages/profile-v2.html">
                                    <span class="site-menu-title">Profile V2</span>
                                    <div class="site-menu-label">
                                        <span class="badge badge-info badge-round">new</span>
                                    </div>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="pages/profile-v3.html">
                                    <span class="site-menu-title">Profile V3</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="pages/site-map.html">
                                    <span class="site-menu-title">Sitemap</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="pages/project.html">
                                    <span class="site-menu-title">Project</span>
                                </a>
                            </li>
                        </ul>
                    </li> --}}
                    {{-- <li class="site-menu-category">Elements</li> --}}
                    {{-- <li class="site-menu-item has-sub">
                        <a href="javascript:void(0)">
                            <i class="site-menu-icon md-palette" aria-hidden="true"></i>
                            <span class="site-menu-title">Basic UI</span>
                            <span class="site-menu-arrow"></span>
                        </a>
                        <ul class="site-menu-sub">
                            <li class="site-menu-item has-sub">
                                <a href="javascript:void(0)">
                                    <span class="site-menu-title">Panel</span>
                                    <span class="site-menu-arrow"></span>
                                </a>
                                <ul class="site-menu-sub">
                                    <li class="site-menu-item">
                                        <a class="animsition-link" href="uikit/panel-structure.html">
                                            <span class="site-menu-title">Panel Structure</span>
                                        </a>
                                    </li>
                                    <li class="site-menu-item">
                                        <a class="animsition-link" href="uikit/panel-actions.html">
                                            <span class="site-menu-title">Panel Actions</span>
                                        </a>
                                    </li>
                                    <li class="site-menu-item">
                                        <a class="animsition-link" href="uikit/panel-portlets.html">
                                            <span class="site-menu-title">Panel Portlets</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="uikit/buttons.html">
                                    <span class="site-menu-title">Buttons</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="uikit/cards.html">
                                    <span class="site-menu-title">Cards</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="uikit/dropdowns.html">
                                    <span class="site-menu-title">Dropdowns</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="uikit/icons.html">
                                    <span class="site-menu-title">Icons</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="uikit/list.html">
                                    <span class="site-menu-title">List</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="uikit/tooltip-popover.html">
                                    <span class="site-menu-title">Tooltip &amp; Popover</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="uikit/modals.html">
                                    <span class="site-menu-title">Modals</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="uikit/tabs-accordions.html">
                                    <span class="site-menu-title">Tabs &amp; Accordions</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="uikit/images.html">
                                    <span class="site-menu-title">Images</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="uikit/badges.html">
                                    <span class="site-menu-title">Badges</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="uikit/progress-bars.html">
                                    <span class="site-menu-title">Progress Bars</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="uikit/carousel.html">
                                    <span class="site-menu-title">Carousel</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="uikit/typography.html">
                                    <span class="site-menu-title">Typography</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="uikit/colors.html">
                                    <span class="site-menu-title">Colors</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="uikit/utilities.html">
                                    <span class="site-menu-title">Utilties</span>
                                </a>
                            </li>
                        </ul>
                    </li> --}}
                    {{-- <li class="site-menu-item has-sub">
                        <a href="javascript:void(0)">
                            <i class="site-menu-icon md-format-color-fill" aria-hidden="true"></i>
                            <span class="site-menu-title">Advanced UI</span>
                            <span class="site-menu-arrow"></span>
                        </a>
                        <ul class="site-menu-sub">
                            <li class="site-menu-item hidden-sm-down site-tour-trigger">
                                <a href="javascript:void(0)">
                                    <span class="site-menu-title">Tour</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="advanced/animation.html">
                                    <span class="site-menu-title">Animation</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="advanced/highlight.html">
                                    <span class="site-menu-title">Highlight</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="advanced/lightbox.html">
                                    <span class="site-menu-title">Lightbox</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="advanced/scrollable.html">
                                    <span class="site-menu-title">Scrollable</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="advanced/rating.html">
                                    <span class="site-menu-title">Rating</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="advanced/context-menu.html">
                                    <span class="site-menu-title">Context Menu</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="advanced/alertify.html">
                                    <span class="site-menu-title">Alertify</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="advanced/masonry.html">
                                    <span class="site-menu-title">Masonry</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="advanced/treeview.html">
                                    <span class="site-menu-title">Treeview</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="advanced/toastr.html">
                                    <span class="site-menu-title">Toastr</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="advanced/maps-vector.html">
                                    <span class="site-menu-title">Vector Maps</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="advanced/maps-google.html">
                                    <span class="site-menu-title">Google Maps</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="advanced/sortable-nestable.html">
                                    <span class="site-menu-title">Sortable &amp; Nestable</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="advanced/bootbox-sweetalert.html">
                                    <span class="site-menu-title">Bootbox &amp; Sweetalert</span>
                                </a>
                            </li>
                        </ul>
                    </li> --}}
                    {{-- <li class="site-menu-item has-sub">
                        <a href="javascript:void(0)">
                            <i class="site-menu-icon md-puzzle-piece" aria-hidden="true"></i>
                            <span class="site-menu-title">Structure</span>
                            <span class="site-menu-arrow"></span>
                        </a>
                        <ul class="site-menu-sub">
                            <li class="site-menu-item">
                                <a class="animsition-link" href="structure/alerts.html">
                                    <span class="site-menu-title">Alerts</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="structure/ribbon.html">
                                    <span class="site-menu-title">Ribbon</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="structure/pricing-tables.html">
                                    <span class="site-menu-title">Pricing Tables</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="structure/overlay.html">
                                    <span class="site-menu-title">Overlay</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="structure/cover.html">
                                    <span class="site-menu-title">Cover</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="structure/timeline-simple.html">
                                    <span class="site-menu-title">Simple Timeline</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="structure/timeline.html">
                                    <span class="site-menu-title">Timeline</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="structure/step.html">
                                    <span class="site-menu-title">Step</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="structure/comments.html">
                                    <span class="site-menu-title">Comments</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="structure/media.html">
                                    <span class="site-menu-title">Media</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="structure/chat.html">
                                    <span class="site-menu-title">Chat</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="structure/testimonials.html">
                                    <span class="site-menu-title">Testimonials</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="structure/nav.html">
                                    <span class="site-menu-title">Nav</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="structure/navbars.html">
                                    <span class="site-menu-title">Navbars</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="structure/blockquotes.html">
                                    <span class="site-menu-title">Blockquotes</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="structure/pagination.html">
                                    <span class="site-menu-title">Pagination</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="structure/breadcrumbs.html">
                                    <span class="site-menu-title">Breadcrumbs</span>
                                </a>
                            </li>
                        </ul>
                    </li> --}}
                    {{-- <li class="site-menu-item has-sub">
                        <a href="javascript:void(0)">
                            <i class="site-menu-icon md-widgets" aria-hidden="true"></i>
                            <span class="site-menu-title">Widgets</span>
                            <span class="site-menu-arrow"></span>
                        </a>
                        <ul class="site-menu-sub">
                            <li class="site-menu-item">
                                <a class="animsition-link" href="widgets/statistics.html">
                                    <span class="site-menu-title">Statistics Widgets</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="widgets/data.html">
                                    <span class="site-menu-title">Data Widgets</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="widgets/blog.html">
                                    <span class="site-menu-title">Blog Widgets</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="widgets/chart.html">
                                    <span class="site-menu-title">Chart Widgets</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="widgets/social.html">
                                    <span class="site-menu-title">Social Widgets</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="widgets/weather.html">
                                    <span class="site-menu-title">Weather Widgets</span>
                                </a>
                            </li>
                        </ul>
                    </li> --}}
                    {{-- <li class="site-menu-item has-sub">
                        <a href="javascript:void(0)">
                            <i class="site-menu-icon md-comment-alt-text" aria-hidden="true"></i>
                            <span class="site-menu-title">Forms</span>
                            <span class="site-menu-arrow"></span>
                        </a>
                        <ul class="site-menu-sub">
                            <li class="site-menu-item">
                                <a class="animsition-link" href="forms/general.html">
                                    <span class="site-menu-title">General Elements</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="forms/material.html">
                                    <span class="site-menu-title">Material Elements</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="forms/advanced.html">
                                    <span class="site-menu-title">Advanced Elements</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="forms/layouts.html">
                                    <span class="site-menu-title">Form Layouts</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="forms/wizard.html">
                                    <span class="site-menu-title">Form Wizard</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="forms/validation.html">
                                    <span class="site-menu-title">Form Validation</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="forms/masks.html">
                                    <span class="site-menu-title">Form Masks</span>
                                </a>
                            </li>
                            <li class="site-menu-item has-sub">
                                <a href="javascript:void(0)">
                                    <span class="site-menu-title">Editors</span>
                                    <span class="site-menu-arrow"></span>
                                </a>
                                <ul class="site-menu-sub">
                                    <li class="site-menu-item">
                                        <a class="animsition-link" href="forms/editor-summernote.html">
                                            <span class="site-menu-title">Summernote</span>
                                        </a>
                                    </li>
                                    <li class="site-menu-item">
                                        <a class="animsition-link" href="forms/editor-markdown.html">
                                            <span class="site-menu-title">Markdown</span>
                                        </a>
                                    </li>
                                    <li class="site-menu-item">
                                        <a class="animsition-link" href="forms/editor-ace.html">
                                            <span class="site-menu-title">Ace Editor</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="forms/image-cropping.html">
                                    <span class="site-menu-title">Image Cropping</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="forms/file-uploads.html">
                                    <span class="site-menu-title">File Uploads</span>
                                </a>
                            </li>
                        </ul>
                    </li> --}}
                    {{-- <li class="site-menu-item has-sub">
                        <a href="javascript:void(0)">
                            <i class="site-menu-icon md-border-all" aria-hidden="true"></i>
                            <span class="site-menu-title">Tables</span>
                            <span class="site-menu-arrow"></span>
                        </a>
                        <ul class="site-menu-sub">
                            <li class="site-menu-item">
                                <a class="animsition-link" href="tables/basic.html">
                                    <span class="site-menu-title">Basic Tables</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="tables/bootstrap.html">
                                    <span class="site-menu-title">Bootstrap Tables</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="tables/floatthead.html">
                                    <span class="site-menu-title">floatThead</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="tables/responsive.html">
                                    <span class="site-menu-title">Responsive Tables</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="tables/editable.html">
                                    <span class="site-menu-title">Editable Tables</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="tables/jsgrid.html">
                                    <span class="site-menu-title">jsGrid</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="tables/footable.html">
                                    <span class="site-menu-title">FooTable</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="tables/datatable.html">
                                    <span class="site-menu-title">DataTables</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="tables/jqtabledit.html">
                                    <span class="site-menu-title">Jquery Tabledit</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="tables/table-dragger.html">
                                    <span class="site-menu-title">Table Dragger</span>
                                </a>
                            </li>
                        </ul>
                    </li> --}}
                    {{-- <li class="site-menu-item has-sub">
                        <a href="javascript:void(0)">
                            <i class="site-menu-icon md-chart" aria-hidden="true"></i>
                            <span class="site-menu-title">Chart</span>
                            <span class="site-menu-arrow"></span>
                        </a>
                        <ul class="site-menu-sub">
                            <li class="site-menu-item">
                                <a class="animsition-link" href="charts/chartjs.html">
                                    <span class="site-menu-title">Chart.js</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="charts/gauges.html">
                                    <span class="site-menu-title">Gauges</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="charts/flot.html">
                                    <span class="site-menu-title">Flot</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="charts/peity.html">
                                    <span class="site-menu-title">Peity</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="charts/sparkline.html">
                                    <span class="site-menu-title">Sparkline</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="charts/morris.html">
                                    <span class="site-menu-title">Morris</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="charts/chartist.html">
                                    <span class="site-menu-title">Chartist.js</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="charts/rickshaw.html">
                                    <span class="site-menu-title">Rickshaw</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="charts/pie-progress.html">
                                    <span class="site-menu-title">Pie Progress</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="charts/c3.html">
                                    <span class="site-menu-title">C3</span>
                                </a>
                            </li>
                        </ul>
                    </li> --}}
                    {{-- <li class="site-menu-category">Apps</li>
                    <li class="site-menu-item has-sub">
                        <a href="javascript:void(0)">
                            <i class="site-menu-icon md-apps" aria-hidden="true"></i>
                            <span class="site-menu-title">Apps</span>
                            <span class="site-menu-arrow"></span>
                        </a>
                        <ul class="site-menu-sub">
                            <li class="site-menu-item">
                                <a class="animsition-link" href="apps/contacts/contacts.html">
                                    <span class="site-menu-title">Contacts</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="apps/calendar/calendar.html">
                                    <span class="site-menu-title">Calendar</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="apps/notebook/notebook.html">
                                    <span class="site-menu-title">Notebook</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="apps/taskboard/taskboard.html">
                                    <span class="site-menu-title">Taskboard</span>
                                </a>
                            </li>
                            <li class="site-menu-item has-sub">
                                <a href="javascript:void(0)">
                                    <span class="site-menu-title">Documents</span>
                                    <span class="site-menu-arrow"></span>
                                </a>
                                <ul class="site-menu-sub">
                                    <li class="site-menu-item">
                                        <a class="animsition-link" href="apps/documents/articles.html">
                                            <span class="site-menu-title">Articles</span>
                                        </a>
                                    </li>
                                    <li class="site-menu-item">
                                        <a class="animsition-link" href="apps/documents/categories.html">
                                            <span class="site-menu-title">Categories</span>
                                        </a>
                                    </li>
                                    <li class="site-menu-item">
                                        <a class="animsition-link" href="apps/documents/article.html">
                                            <span class="site-menu-title">Article</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="apps/forum/forum.html">
                                    <span class="site-menu-title">Forum</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="apps/message/message.html">
                                    <span class="site-menu-title">Message</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="apps/projects/projects.html">
                                    <span class="site-menu-title">Projects</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="apps/mailbox/mailbox.html">
                                    <span class="site-menu-title">Mailbox</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="apps/media/overview.html">
                                    <span class="site-menu-title">Media</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="apps/work/work.html">
                                    <span class="site-menu-title">Work</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="apps/location/location.html">
                                    <span class="site-menu-title">Location</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="apps/travel/travel.html">
                                    <span class="site-menu-title">Travel</span>
                                </a>
                            </li>
                        </ul>
                    </li> --}}
                </ul>
                {{-- <div class="site-menubar-section">
                    <h5>
                        Milestone
                        <span class="float-right">30%</span>
                    </h5>
                    <div class="progress progress-xs">
                        <div class="progress-bar active" style="width: 30%;" role="progressbar"></div>
                    </div>
                    <h5>
                        Release
                        <span class="float-right">60%</span>
                    </h5>
                    <div class="progress progress-xs">
                        <div class="progress-bar progress-bar-warning" style="width: 60%;" role="progressbar"></div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
    <div class="site-menubar-footer">
        <a href="javascript: void(0);" class="fold-show" data-placement="top" data-toggle="tooltip"
            data-original-title="Settings">
            <span class="icon md-settings" aria-hidden="true"></span>
        </a>
        <a href="javascript: void(0);" data-placement="top" data-toggle="tooltip" data-original-title="Lock">
            <span class="icon md-eye-off" aria-hidden="true"></span>
        </a>
        <a href="{{ route('logout') }}"
            onclick="event.preventDefault();
       document.getElementById('logout-form').submit();"
            data-placement="top" data-toggle="tooltip" data-original-title="Logout">
            <span class="icon md-power" aria-hidden="true"></span>
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </div>
</div>

<div class="site-gridmenu">
    <div>
        <div>
            <ul>
                <li>
                    <a href="apps/mailbox/mailbox.html">
                        <i class="icon md-email"></i>
                        <span>Mailbox</span>
                    </a>
                </li>
                <li>
                    <a href="apps/calendar/calendar.html">
                        <i class="icon md-calendar"></i>
                        <span>Calendar</span>
                    </a>
                </li>
                <li>
                    <a href="apps/contacts/contacts.html">
                        <i class="icon md-account"></i>
                        <span>Contacts</span>
                    </a>
                </li>
                <li>
                    <a href="apps/media/overview.html">
                        <i class="icon md-videocam"></i>
                        <span>Media</span>
                    </a>
                </li>
                <li>
                    <a href="apps/documents/categories.html">
                        <i class="icon md-receipt"></i>
                        <span>Documents</span>
                    </a>
                </li>
                <li>
                    <a href="apps/projects/projects.html">
                        <i class="icon md-image"></i>
                        <span>Project</span>
                    </a>
                </li>
                <li>
                    <a href="apps/forum/forum.html">
                        <i class="icon md-comments"></i>
                        <span>Forum</span>
                    </a>
                </li>
                <li>
                    <a href="index.html">
                        <i class="icon md-view-dashboard"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
{{--  Sidebar  --}}
