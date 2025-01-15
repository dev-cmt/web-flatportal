<x-frontend-layout :title="'Register'">
    {{-- <!-- breadcrumb area start -->
    <section class="breadcrumb__area include-bg text-center pt-95 pb-50">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="breadcrumb__content p-relative z-index-1">
                        <h3 class="breadcrumb__title">Register Now</h3>
                        <div class="breadcrumb__list">
                            <span><a href="#">Home</a></span>
                            <span>Register</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb area end --> --}}



    <div class="row justify-content-md-center mb-4">
        <div class="col-md-9 col-lg-7 col-xl-5">
            <div class="tp-login-top text-center">
                <h3 class="tp-login-title">Sign Up Shofy.</h3>
                <p>Already have an account? <span><a href="{{ route('login') }}">Sign In</a></span></p>
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

            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="row row-20">
                    <div class="col-12">
                        <div class="form-wrap">
                            <input class="form-input form-control" name="name" value="{{old('name')}}" required autofocus autocomplete="name" id="contact-name-re">
                            <label class="form-label rd-input-label" for="contact-name-re">Your Name</label>
                            <x-input-error :messages="$errors->get('name')" class="mt-2"/>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-wrap">
                            <input class="form-input form-control" type="email" name="email" value="{{old('email')}}" required autofocus autocomplete="email" id="contact-email-re">
                            <label class="form-label rd-input-label" for="contact-email-re">E-mail</label>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-wrap">
                            <input class="form-input form-control" id="contact-phone-re" type="text" name="phone">
                            <label class="form-label rd-input-label" for="contact-phone-re">Phone</label>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-wrap">
                            <input class="form-input form-control" type="password" name="password" id="password-re" onpaste="return false" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" autocomplete="new-password">
                            <label class="form-label rd-input-label" for="password-re">Password</label>
                            <x-input-error :messages="$errors->get('password')" class="mt-2"/>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-wrap">
                            <input class="form-input form-control" type="password" name="password_confirmation" id="password-confirmation-re" onpaste="return false" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" autocomplete="new-password">
                            <label class="form-label rd-input-label" for="password-confirmation-re">Confirmation Password</label>
                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                        </div>
                    </div>
                    <div class="col-12 text-center">
                        <button class="button button-secondary" type="submit">Create Account</button>
                    </div>
                </div>
            </form>
        </div>
    </div>


</x-frontend-layout>