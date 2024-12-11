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
                            <div class="rd-navbar-brand"><a class="brand" href="index.html"><img
                                        class="brand-logo-dark" src="{{asset('public/frontend')}}/images/logo-default-121x61.png" alt=""
                                        width="121" height="61" srcset="{{asset('public/frontend')}}/images/logo-default-242x122.png 2x" /><img
                                        class="brand-logo-light" src="{{asset('public/frontend')}}/images/logo-inverse-121x61.png" alt=""
                                        width="121" height="61" srcset="{{asset('public/frontend')}}/images/logo-inverse-242x122.png 2x" /></a>
                            </div>
                        </div>
                        <div class="rd-navbar-block">
                            <div class="rd-navbar-collapse-toggle rd-navbar-fixed-element-1"
                                data-rd-navbar-toggle=".rd-navbar-collapse"><span></span></div>
                            <div class="rd-navbar-collapse">
                                <ul class="rd-navbar-aside-list">
                                    <li>
                                        <article class="item-1"><span class="icon item-1-icon mdi mdi-phone"></span>
                                            <dl class="item-1-body">
                                                <dt>Client Support:</dt>
                                                <dd><a href="tel:#">0182-8926-281</a></dd>
                                            </dl>
                                        </article>
                                    </li>
                                    <li>
                                        <article class="item-1"><span
                                                class="icon item-1-icon mdi mdi-email-outline"></span>
                                            <dl class="item-1-body">
                                                <dt>E-mail</dt>
                                                <dd><a href="mailto:#">info@seu.edu.bd</a></dd>
                                            </dl>
                                        </article>
                                    </li>
                                </ul>
                                <div class="rd-navbar-collapse-item"><a class="button button-sm button-primary" href="submit-property.html">Submit property</a></div>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit">
                                        <i class="mdi mdi-logout text-muted fs-16 align-middle me-1"></i> 
                                        <span class="align-middle" data-key="t-logout">Logout</span>
                                    </button>
                                </form>
                            </div>
                            <div class="rd-navbar-aside-item">
                                <button class="button button-icon button-icon-only button-secondary" data-rd-navbar-toggle="#navbar-login-register"><span class="icon mdi mdi-login"></span></button>
                                <article class="rd-navbar-popup" id="navbar-login-register">
                                    <!-- Bootstrap tabs-->
                                    <div class="tabs-custom tabs-horizontal tabs-line" id="navbar-tabs">
                                        <!-- Nav tabs-->
                                        <ul class="nav nav-tabs">
                                            <li class="nav-item" role="presentation"><a class="nav-link active" href="#navbar-tabs-1" data-bs-toggle="tab">Login</a></li>
                                            <li class="nav-item" role="presentation"><a class="nav-link" href="#navbar-tabs-2" data-bs-toggle="tab">Register</a></li>
                                        </ul>
                                        <!-- Tab panes-->
                                        <div class="tab-content">
                                            <div class="tab-pane fade show active" id="navbar-tabs-1">
                                                <form method="POST" action="{{ route('login') }}" class="rd-form form-1">
                                                    @csrf
                                                    <div class="form-wrap">
                                                        <input class="form-input" type="email" name="email" value="{{old('email')}}" required autofocus autocomplete="email" id="email" placeholder="Enter username">
                                                        <label class="form-label" for="email">E-mail</label>
                                                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                                    </div>
                                                    <div class="form-wrap">
                                                        <input class="form-input" type="password" name="password" id="password" required autocomplete="current-password" placeholder="Min. 6 character">
                                                        <label class="form-label" for="login-password">Password</label>
                                                    </div>
                                                    <div class="tp-login-suggetions d-sm-flex align-items-center justify-content-between mb-20">
                                                        <div class="tp-login-remeber">
                                                            <input id="remeber" type="checkbox">
                                                            <label for="remeber">Remember me</label>
                                                        </div>
                                                        <div class="tp-login-forgot">
                                                            @if (Route::has('password.request'))
                                                                <a href="{{ route('password.request') }}">Forgot Password?</a>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="form-wrap">
                                                        <button class="button button-sm button-primary button-block" type="submit">Sign in</button>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="tab-pane fade" id="navbar-tabs-2">
                                                <!-- Session Status -->
                                                <x-auth-session-status class="mb-4" :status="session('status')" />
                                                <form method="POST" action="{{ route('register') }}">
                                                    @csrf
                                                    <div class="form-wrap">
                                                        <input class="form-input" type="text" name="name" value="{{old('name')}}" required autofocus autocomplete="name" id="name" placeholder="Enter name">
                                                        <label class="form-label" for="register-name">Username</label>
                                                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                                    </div>
                                                    <div class="form-wrap">
                                                        <input class="form-input" type="email" name="email" value="{{old('email')}}" required autofocus autocomplete="email" id="email" placeholder="Enter email">
                                                        <label class="form-label" for="register-email">E-mail</label>
                                                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                                    </div>
                                                    <div class="form-wrap">
                                                        <input class="form-input" type="password" name="password" id="tp_password" onpaste="return false" placeholder="Min. 6 character" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" autocomplete="new-password">
                                                        <label class="form-label" for="register-password">Password</label>
                                                        <x-input-error :messages="$errors->get('password')" class="mt-2"/>
                                                    </div>
                                                    <div class="form-wrap">
                                                        <input class="form-input" type="password" name="password_confirmation" onpaste="return false" placeholder="Confirm password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" autocomplete="new-password">
                                                        <label class="form-label" for="register-password-confirm">Confirm Password</label>
                                                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                                    </div>
                                                    <div class="form-wrap">
                                                        <button class="button button-sm button-primary button-block" type="submit">Create an Account</button>
                                                    </div>
                                                    <div class="form-wrap">
                                                        <div class="text-decoration-lines"><span class="text-decoration-lines-content">or enter with</span></div>
                                                    </div>
                                                    <div class="form-wrap">
                                                        <div class="button-group">
                                                            <a class="button button-facebook button-icon button-icon-only"  href="{{ route('social.login', 'facebook') }}" aria-label="Facebook">
                                                                <span class="icon mdi mdi mdi-facebook"></span>
                                                            </a>
                                                            {{-- <a class="button button-twitter button-icon button-icon-only" href="#" aria-label="Twitter">
                                                                <span class="icon mdi mdi-twitter"></span>
                                                            </a> --}}
                                                            <a class="button button-google button-icon button-icon-only" href="{{ route('social.login', 'google') }}" aria-label="Google+">
                                                                <span class="icon mdi mdi-google"></span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="rd-navbar-main-outer">
                    <div class="rd-navbar-main rd-navbar-nav-wrap">
                        <!-- RD Navbar Nav-->
                        <ul class="rd-navbar-nav">
                            <li class="rd-nav-item"><a class="rd-nav-link" href="index.html">Home</a></li>
                            <li class="rd-nav-item"><a class="rd-nav-link" href="{{route('properties')}}">Properties</a></li>
                            <li class="rd-nav-item"><a class="rd-nav-link" href="about-us.html">About Us</a></li>
                            <li class="rd-nav-item"><a class="rd-nav-link" href="blog.html">Blog</a></li>
                            <li class="rd-nav-item active"><a class="rd-nav-link" href="#">Pages</a>
                                <!-- RD Navbar Megamenu-->
                                <ul class="rd-menu rd-navbar-megamenu">
                                    <li class="rd-megamenu-item">
                                        <h6 class="rd-megamenu-title">Pages 1</h6>
                                        <ul class="rd-megamenu-list">
                                            <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link"
                                                    href="agents.html">Agents</a></li>
                                            <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link"
                                                    href="agents-2.html">Agents 2</a></li>
                                            <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link"
                                                    href="agent-single-page.html">Agent Single Page</a></li>
                                            <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link"
                                                    href="testimonials.html">Testimonials</a></li>
                                            <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link"
                                                    href="careers.html">Careers</a></li>
                                            <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link"
                                                    href="faq.html">FAQ</a></li>
                                            <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link"
                                                    href="gallery-grid.html">Gallery Grid</a></li>
                                        </ul>
                                    </li>
                                    <li class="rd-megamenu-item">
                                        <h6 class="rd-megamenu-title">Pages 2</h6>
                                        <ul class="rd-megamenu-list">
                                            <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link"
                                                    href="search-results.html">Search results</a></li>
                                            <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link"
                                                    href="search-results-2.html">Search results 2</a></li>
                                            <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link"
                                                    href="coming-soon.html">Coming Soon</a></li>
                                            <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link"
                                                    href="maintenance.html">Maintenance</a></li>
                                            <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link"
                                                    href="503.html">503</a></li>
                                            <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link"
                                                    href="404.html">404</a></li>
                                            <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link"
                                                    href="privacy-policy.html">Privacy Policy</a></li>
                                        </ul>
                                    </li>
                                    <li class="rd-megamenu-item">
                                        <h6 class="rd-megamenu-title">Elements</h6>
                                        <ul class="rd-megamenu-list">
                                            <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link"
                                                    href="typography.html">Typography</a></li>
                                            <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link"
                                                    href="buttons.html">Buttons</a></li>
                                            <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link"
                                                    href="forms.html">Forms</a></li>
                                            <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link"
                                                    href="tabs-and-accordions.html">Tabs and accordions</a></li>
                                            <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link"
                                                    href="progress-bars.html">Progress bars</a></li>
                                            <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link"
                                                    href="tables.html">Tables</a></li>
                                            <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link"
                                                    href="grid-system.html">Grid System</a></li>
                                        </ul>
                                    </li>
                                    <li class="rd-megamenu-item">
                                        <h6 class="rd-megamenu-title">Layouts</h6>
                                        <ul class="rd-megamenu-list">
                                            <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link"
                                                    href="real-estate-1.html">Real Estate 1</a></li>
                                            <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link"
                                                    href="real-estate-2.html">Layout #2 </a></li>
                                            <li class="rd-megamenu-list-item"><a class="rd-megamenu-list-link"
                                                    href="real-estate-3.html">Layout #3</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="rd-nav-item"><a class="rd-nav-link" href="contact-us.html">Contact Us</a></li>
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