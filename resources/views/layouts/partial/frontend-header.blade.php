<!-- Page Header-->
<header class="section page-header">
    <!-- RD Navbar-->
    <div class="rd-navbar-wrap">
        <nav class="rd-navbar rd-navbar-modern" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed"
            data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed"
            data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-fixed"
            data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static"
            data-lg-stick-up-offset="120px" data-xl-stick-up-offset="120px" data-xxl-stick-up-offset="120px"
            data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
            <div class="rd-navbar-aside-outer">
                <div class="rd-navbar-aside">
                    <!-- RD Navbar Panel-->
                    <div class="rd-navbar-panel">
                        <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                        <div class="rd-navbar-brand">
                            <a class="brand" href="{{route('home')}}">
                                <img class="brand-logo-dark" src="{{asset('public/frontend')}}/images/logo-default-121x61.png" alt="" width="121" height="61" srcset="images/logo-default-242x122.png 2x" />
                                <img class="brand-logo-light" src="{{asset('public/frontend')}}/images/logo-inverse-121x61.png" alt="" width="121" height="61" srcset="images/logo-inverse-242x122.png 2x" />
                            </a>
                        </div>
                    </div>
                    <div class="rd-navbar-block">
                        <div class="rd-navbar-collapse-toggle rd-navbar-fixed-element-1" data-rd-navbar-toggle=".rd-navbar-collapse"><span></span></div>
                        <div class="rd-navbar-collapse">
                            <ul class="rd-navbar-aside-list">
                                <li>
                                    <article class="item-1"><span class="icon item-1-icon mdi mdi-phone"></span>
                                        <dl class="item-1-body">
                                            <dt>Client Support:</dt>
                                            <dd><a href="tel:#">0190-9302126</a></dd>
                                        </dl>
                                    </article>
                                </li>
                                <li>
                                    <article class="item-1"><span class="icon item-1-icon mdi mdi-email-outline"></span>
                                        <dl class="item-1-body">
                                            <dt>E-mail</dt>
                                            <dd><a href="mailto:#">info@flatportal.org</a></dd>
                                        </dl>
                                    </article>
                                </li>
                            </ul>
                            @guest
                                <div class="rd-navbar-collapse-item">
                                    <a class="button button-sm button-primary" href="{{ route('login') }}">Login</a>
                                </div>
                            @endguest

                            @auth
                                <div class="rd-navbar-collapse-item">
                                    <a class="button button-sm button-primary" href="{{ route('dashboard') }}">
                                        {{ Auth::user()->name }}
                                    </a>
                                </div>

                                <div class="rd-navbar-aside-item">
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <button type="submit" class="button button-icon button-icon-only button-secondary mt-0">
                                            <span class="icon mdi mdi-logout"></span>
                                        </button>
                                    </form>
                                </div>
                            @endauth

                        </div>
                    </div>
                </div>
            </div>
            <div class="rd-navbar-main-outer">
                <div class="rd-navbar-main rd-navbar-nav-wrap">
                    <!-- RD Navbar Nav-->
                    <ul class="rd-navbar-nav">
                        <li class="rd-nav-item {{ request()->routeIs('home') ? 'active' : '' }}"><a class="rd-nav-link" href="{{route('home')}}">Home</a></li>
                        <li class="rd-nav-item {{ request()->routeIs('properties') ? 'active' : '' }}"><a class="rd-nav-link" href="{{route('properties')}}">Properties</a></li>
                        <li class="rd-nav-item {{ request()->routeIs('about') ? 'active' : '' }}"><a class="rd-nav-link" href="{{route('about')}}">About Us</a></li>
                        <li class="rd-nav-item {{ request()->routeIs('agents') ? 'active' : '' }}"><a class="rd-nav-link" href="{{route('agents')}}">Agents</a></li>
                        <li class="rd-nav-item {{ request()->routeIs('blog') ? 'active' : '' }}"><a class="rd-nav-link" href="{{route('blog')}}">Blog</a></li>
                        <li class="rd-nav-item {{ request()->routeIs('gallery') ? 'active' : '' }}"><a class="rd-nav-link" href="{{route('gallery')}}">Gallery</a></li>
                        <li class="rd-nav-item {{ request()->routeIs('contact') ? 'active' : '' }}"><a class="rd-nav-link" href="{{route('contact')}}">Contact</a></li>
                    </ul>
                    <div class="rd-navbar-main-item">
                        <ul class="list-inline-1">
                            <li><a class="icon fa-facebook" href="#"></a></li>
                            <li><a class="icon fa-twitter" href="#"></a></li>
                            <li><a class="icon fa-google-plus" href="#"></a></li>
                            <li><a class="icon fa-pinterest-p" href="#"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>