<!-- ========== App Menu ========== -->
<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="{{route('home')}}" class="logo logo-dark">
            <span class="logo-sm">
                <img src="{{asset('public')}}/images/logo1.png" alt="" height="40">
                {{-- <img src="{{asset('public/backend')}}/images/logo-sm.png" alt="" height="22"> --}}
            </span>
            <span class="logo-lg">
                <img src="{{asset('public')}}/images/logo.png" alt="" height="40">
                {{-- <img src="{{asset('public/backend')}}/images/logo-dark.png" alt="" height="17"> --}}
            </span>
        </a>
        <!-- Light Logo-->
        <a href="{{route('home')}}" class="logo logo-light">
            <span class="logo-sm">
                <img src="{{asset('public')}}/images/logo1.png" alt="" height="40">
                {{-- <img src="{{asset('public/backend')}}/images/logo-sm.png" alt="" height="22"> --}}
            </span>
            <span class="logo-lg">
                <img src="{{asset('public')}}/images/logo.png" alt="" height="40">
                {{-- <img src="{{asset('public/backend')}}/images/logo-light.png" alt="" height="17"> --}}
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div class="dropdown sidebar-user m-1 rounded">
        <button type="button" class="btn material-shadow-none" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="d-flex align-items-center gap-2">
                <img class="rounded header-profile-user" src="{{asset('public/backend')}}/images/users/avatar-1.jpg" alt="Header Avatar">
                <span class="text-start">
                    <span class="d-block fw-medium sidebar-user-name-text">Anna Adame</span>
                    <span class="d-block fs-14 sidebar-user-name-sub-text"><i class="ri ri-circle-line fs-10 text-success align-baseline"></i> <span class="align-middle">Online</span></span>
                </span>
            </span>
        </button>
        <div class="dropdown-menu dropdown-menu-end">
            <!-- item-->
            <h6 class="dropdown-header">Welcome Anna!</h6>
            <a class="dropdown-item" href="pages-profile.html"><i class="mdi mdi-account-circle text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Profile</span></a>
            <a class="dropdown-item" href="apps-chat.html"><i class="mdi mdi-message-text-outline text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Messages</span></a>
            <a class="dropdown-item" href="apps-tasks-kanban.html"><i class="mdi mdi-calendar-check-outline text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Taskboard</span></a>
            <a class="dropdown-item" href="pages-faqs.html"><i class="mdi mdi-lifebuoy text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Help</span></a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="pages-profile.html"><i class="mdi mdi-wallet text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Balance : <b>$5971.67</b></span></a>
            <a class="dropdown-item" href="pages-profile-settings.html"><span class="badge bg-success-subtle text-success mt-1 float-end">New</span><i class="mdi mdi-cog-outline text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Settings</span></a>
            <a class="dropdown-item" href="auth-lockscreen-basic.html"><i class="mdi mdi-lock text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Lock screen</span></a>
            <a class="dropdown-item" href="auth-logout-basic.html"><i class="mdi mdi-logout text-muted fs-16 align-middle me-1"></i> <span class="align-middle" data-key="t-logout">Logout</span></a>
        </div>
    </div>
    <div id="scrollbar">
        <div class="container-fluid">
            <div id="two-column-menu"></div>

            <ul class="navbar-nav" id="navbar-nav">
                <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                <!-- Dashboard Menu -->
                <li class="nav-item">
                    <a class="nav-link menu-link" href="widgets.html">
                        <i class="ri-dashboard-2-line"></i> <span data-key="t-widgets">Dashboard</span>
                    </a>
                </li>

                <!-- Working Activation -->
                <li class="nav-item">
                    <a class="nav-link menu-link {{ request()->routeIs('property.create') ? 'active' : '' }}" href="{{route('property.create')}}">
                        <i class="ri-product-hunt-line"></i> <span data-key="t-widgets">Add Property</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link {{ request()->routeIs('property.index') ? 'active' : '' }}" href="{{route('property.index')}}">
                        <i class="ri-list-settings-line"></i> <span data-key="t-widgets">Property List</span>
                    </a>
                </li>


                <!-- Blog Menu -->
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#Blog" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarApps">
                        <i class="ri-brush-line"></i> <span data-key="t-blog">Blog</span>
                    </a>
                    <div class="collapse menu-dropdown {{ request()->routeIs('home') ? 'show' : '' }}" id="Blog">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="#" class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" data-key="t-blog">Categories</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" data-key="t-blog">Posts</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" data-key="t-blog">Blog Settings</a>
                            </li>
                        </ul>
                    </div>                    
                </li>

                <!-- Email Settings Menu -->
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#Email" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarApps">
                        <i class="ri-mail-star-line"></i> <span data-key="t-email">Email Template</span>
                    </a>
                    <div class="collapse menu-dropdown {{ request()->routeIs('home') ? 'show' : '' }}" id="Email">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="#" class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" data-key="t-email">Email Configurations</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" data-key="t-email">Group Email</a>
                            </li>
                        </ul>
                    </div>                    
                </li>

                <!-- Payment Settings Menu -->
                {{-- <li class="nav-item">
                    <a class="nav-link menu-link" href="#Payment" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarApps">
                        <i class="ri-secure-payment-line"></i> <span data-key="t-payment">Payment Settings</span>
                    </a>
                    <div class="collapse menu-dropdown {{ request()->routeIs('home') ? 'show' : '' }}" id="Payment">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="#" class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" data-key="t-payment">Payment Information</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" data-key="t-payment">Payment Gateways</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" data-key="t-payment">Currencies</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" data-key="t-payment">Reward Information</a>
                            </li>
                        </ul>
                    </div>                    
                </li> --}}

                <!-- Social Settings Menu -->
                {{-- <li class="nav-item">
                    <a class="nav-link menu-link" href="#Social" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarApps">
                        <i class="ri-send-plane-line"></i> <span data-key="t-social">Social Settings</span>
                    </a>
                    <div class="collapse menu-dropdown {{ request()->routeIs('home') ? 'show' : '' }}" id="Social">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="#" class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" data-key="t-social">Social Links</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" data-key="t-social">Facebook Login</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" data-key="t-social">Google Login</a>
                            </li>
                        </ul>
                    </div>                    
                </li> --}}
                
                <!-- Manage Staffs Menu -->
                <li class="nav-item">
                    <a class="nav-link menu-link {{ request()->routeIs('home') ? 'active' : '' }}" href="#">
                        <i class="ri-user-settings-line"></i> <span data-key="t-widgets">Manage Agents</span>
                    </a>
                </li>

                <!-- Clear Cache Menu -->
                <li class="nav-item">
                    <a class="nav-link menu-link {{ request()->routeIs('home') ? 'active' : '' }}" href="#">
                        <i class="ri-leaf-line"></i> <span data-key="t-clear">Clear Cache</span>
                    </a>
                </li>

                <li class="menu-title"><i class="ri-more-line"></i> <span data-key="t-pages">Pages</span></li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarMultilevel" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarMultilevel">
                        <i class="ri-share-line"></i> <span data-key="t-multi-level">Multi Level</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarMultilevel">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="#" class="nav-link" data-key="t-level-1.1"> Level 1.1 </a>
                            </li>
                            <li class="nav-item">
                                <a href="#sidebarAccount" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarAccount" data-key="t-level-1.2"> Level
                                    1.2
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarAccount">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="#" class="nav-link" data-key="t-level-2.1"> Level 2.1 </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#sidebarCrm" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarCrm" data-key="t-level-2.2"> Level 2.2
                                            </a>
                                            <div class="collapse menu-dropdown" id="sidebarCrm">
                                                <ul class="nav nav-sm flex-column">
                                                    <li class="nav-item">
                                                        <a href="{{ route('categories.index') }}" class="nav-link" data-key="t-level-3.1" data-target="colors"> Level 3.1 categories
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="#" class="nav-link" data-key="t-level-3.2"> Level 3.2
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>

    <div class="sidebar-background"></div>
</div>
<!-- Left Sidebar End -->
