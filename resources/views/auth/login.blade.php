<x-frontend-layout :title="'Login'">
    {{-- <!-- breadcrumb area start -->
    <section class="breadcrumb__area include-bg text-center pt-95 pb-50">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="breadcrumb__content p-relative z-index-1">
                        <h3 class="breadcrumb__title">My account</h3>
                        <div class="breadcrumb__list">
                            <span><a href="#">Home</a></span>
                            <span>My account</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb area end --> --}}

    <!-- login area start -->
    <section class="tp-login-area pt-20 pb-140 p-relative z-index-1 fix">
        <div class="tp-login-shape">
            <img class="tp-login-shape-1" src="{{asset('public/frontend')}}/img/login/login-shape-1.png" alt="">
            <img class="tp-login-shape-2" src="{{asset('public/frontend')}}/img/login/login-shape-2.png" alt="">
            <img class="tp-login-shape-3" src="{{asset('public/frontend')}}/img/login/login-shape-3.png" alt="">
            <img class="tp-login-shape-4" src="{{asset('public/frontend')}}/img/login/login-shape-4.png" alt="">
        </div>
        <div class="container">

            <div class="row justify-content-md-center my-5">
                <div class="col-md-9 col-lg-8 col-xl-6">
                    <div class="mw-510 block-center">
                        <div class="tp-login-top text-center mb-30">
                            <h3 class="tp-login-title">Login</h3>
                            <p>Don’t have an account? <span><a href="{{route('register')}}">Create a free account</a></span></p>
                        </div>
                        <div class="group-sm group-sm-justify buttons-group">
                            <div><a class="button button-facebook button-icon button-icon-left button-round"  href="{{ route('social.login', 'facebook') }}"><span class="icon fa fa-facebook"></span>Facebook</a></div>
                            {{-- <div><a class="button button-twitter button-icon button-icon-left button-round" href="#"><span class="icon fa fa-twitter"></span>Twitter</a></div> --}}
                            <div><a class="button button-google button-icon button-icon-left button-round" href="{{ route('social.login', 'google') }}"><span class="icon fa fa-google-plus"></span>Google+</a></div>
                        </div>
                        <div class="text-decoration-lines"><span class="text-decoration-lines-content">or</span></div>
                        <!-- RD Mailform-->
                        <x-auth-session-status class="mb-4" :status="session('status')" />
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-wrap">
                                <input type="email" name="email" value="{{old('email')}}" class="form-input form-control-has-validation" id="login-email" required autofocus autocomplete="username" id="username" placeholder="Enter username">
                                <span class="form-validation"></span>
                                <label class="form-label rd-input-label" for="login-email">E-mail</label>
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>
                            <div class="form-wrap">
                                <input type="password" name="password" required autocomplete="current-password" class="form-input form-control-has-validation" id="login-password">
                                <span class="form-validation"></span>
                                <label class="form-label rd-input-label" for="login-password">Password</label>
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
                            <button class="button button-block button-primary" type="submit" style="letter-spacing: .12em">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- login area end -->
</x-frontend-layout>