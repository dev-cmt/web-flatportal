<!-- Page Footer-->
<footer class="footer-modern section bg-gray-31 context-dark">
    <div class="container">
        <div class="row row-40 justify-content-md-between">
            <div class="col-md-6 col-lg-4 col-xl-3"><a class="brand" href="#"><img class="brand-logo-dark"
                        src="{{asset('public/frontend')}}/images/logo-default-121x61.png" alt="" width="121" height="61"
                        srcset="images/logo-default-242x122.png 2x" /><img class="brand-logo-light"
                        src="{{asset('public/frontend')}}/images/logo-inverse-2-121x61.png" alt="" width="121" height="61"
                        srcset="images/logo-inverse-2-242x122.png 2x" /></a>
                <p class="footer-txt">We are a dedicated team of truly passionate, property professionals who
                    understand our clients’ needs.</p>
                <div class="link-with-icon heading-4 text-spacing-150 font-sec" data-item=".icon"><span
                        class="icon icon-1 icon-secondary mdi mdi-phone"></span><a
                        href="tel:#">01909302126</a></div>
                <div class="link-with-icon text-spacing-100" data-item=".icon"><span
                        class="icon icon-2 icon-secondary mdi mdi-email-outline"></span><a
                        href="mailto:#">info@flatportal.org</a></div>
                <ul class="list-inline-1">
                    <li><a class="icon fa-facebook" href="#"></a></li>
                    <li><a class="icon fa-twitter" href="#"></a></li>
                    <li><a class="icon fa-google-plus" href="#"></a></li>
                    <li><a class="icon fa-pinterest-p" href="#"></a></li>
                </ul>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-3">
                <h3>Popular Locations</h3>
                <ul class="list-1">
                    <li><span class="icon mdi mdi-map-marker"></span><a href="#">Bayonne, New Jersey</a></li>
                    <li><span class="icon mdi mdi-map-marker"></span><a href="#">Greenville, New Jersey</a></li>
                    <li><span class="icon mdi mdi-map-marker"></span><a href="#">The Heights, New Jersey</a></li>
                    <li><span class="icon mdi mdi-map-marker"></span><a href="#">West Side, New York</a></li>
                    <li><span class="icon mdi mdi-map-marker"></span><a href="#">Upper East Side, New York</a></li>
                    <li><span class="icon mdi mdi-map-marker"></span><a href="#">West Side, New York</a></li>
                </ul>
            </div>
            <div class="col-md-6 col-lg-4">
                <h3>Get in Touch</h3>
                <form class="rd-form" method="POST" action="{{ route('contact.store') }}">
                    @csrf
                    <div class="row row-20">
                        <div class="col-12">
                            <div class="form-wrap">
                                <input class="form-input" id="footer-contact-email" type="email" name="email" required>
                                <label class="form-label" for="footer-contact-email">E-mail</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-wrap">
                                <label class="form-label" for="footer-contact-message">Message</label>
                                <textarea class="form-input" id="footer-contact-message" name="message" required style="height: 101px"></textarea>
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="button button-secondary" type="submit">Send message</button>
                        </div>
                    </div>
                </form>
                
                @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                
            </div>
        </div>
        <hr>
        <div class="row row-10 justify-content-sm-between">
            <div class="col-sm-6">
                <!-- Rights-->
                <p class="rights"><span>Real Estate</span> <span>&copy;&nbsp;</span><span class="copyright-year"></span><span>&nbsp;</span><a href="privacy-policy.html">Privacy Policy</a></p>
            </div>
            <div class="col-sm-6 text-sm-end"><a class="lefts" href="#">Client Support</a></div>
        </div>
    </div>
</footer>