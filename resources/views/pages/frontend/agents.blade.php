<x-frontend-layout :title="'About-Us'">
    <!-- Breadcrumbs-->
    <section class="breadcrumbs-custom bg-image context-dark" data-opacity="59" style="background-image: url({{asset('public/frontend')}}/images/breadcrumbs-bg-01-1922x291.jpg);">
        <div class="container">
            <h2 class="breadcrumbs-custom-title">About Us</h2>
        </div>
    </section>
    <section class="section-xs bg-white">
        <div class="container">
            <ul class="breadcrumbs-custom-path">
                <li><a href="index.html">Home</a></li>
                <li class="active">About Us</li>
            </ul>
        </div>
    </section>
    <div class="divider-section"></div>
    <!-- Shortly About Us-->
    <section class="section section-md bg-default">
        <div class="container">
            <!-- Box Info-->
            <article class="box-info box-info-1">
                <div class="box-info-aside">
                    <div class="image-block-1" style="background-image: url({{asset('public/frontend')}}/images/about-us-1-599x535.jpg);"></div>
                </div>
                <div class="box-info-main context-dark">
                    <div class="box-info-main-inner">
                        <h2 class="f1">Experience since 1999</h2>
                        <div class="divider-small"></div>
                        <!-- Bootstrap tabs-->
                        <div class="tabs-custom tabs-horizontal tabs-line" id="tabs-1">
                            <!-- Nav tabs-->
                            <ul class="nav nav-tabs">
                                <li class="nav-item" role="presentation"><a class="nav-link active" href="#tabs-1-1" data-bs-toggle="tab">Our goal</a></li>
                                <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-1-2" data-bs-toggle="tab">About Us</a></li>
                                <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-1-3" data-bs-toggle="tab">Our Mission</a></li>
                            </ul>
                            <!-- Tab panes-->
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="tabs-1-1">
                                    <p>We have been working since 1999 to be sure you are getting the best real estate service possible.</p>
                                    <p>Real Estate aims to unite real estate brokers to provide their clients and partners with the top-notch level of brokerage services throughout the USA.</p>
                                </div>
                                <div class="tab-pane fade" id="tabs-1-2">
                                    <p>Real Estate is a full-service, luxury real estate brokerage company representing clients worldwide.</p>
                                    <ul class="list-marked-1 cols-2">
                                        <li>More Listings</li>
                                        <li>Property for Rent and Sale</li>
                                        <li>Top Rated Agents</li>
                                        <li>Home Estimates</li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="tabs-1-3">
                                    <p>Our mission is to be the most successful real estate firm in the local states
                                        and beyond.</p>
                                    <p>Real Estate incorporates proven, professional state of-the-art techniques
                                        specializing in the marketing, listing and selling of new and resale luxury
                                        homes.</p>
                                </div>
                            </div>
                        </div><a class="button button-sm button-secondary" href="contact-us.html">Get in Touch</a>
                    </div>
                </div>
            </article>
        </div>
    </section>
    <!-- Features-->
    <section class="section section-lg bg-default">
        <div class="container">
            <div class="row row-flex row-30 justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <!-- Box Modern-->
                    <article class="box-modern"><span class="icon box-modern-icon fl-bigmug-line-big104"></span>
                        <div class="box-modern-main">
                            <h4 class="box-modern-title">Various Locations</h4>
                            <p>We have lots of properties in various locations available for purchase.</p>
                        </div>
                    </article>
                </div>
                <div class="col-md-6 col-lg-4">
                    <!-- Box Modern-->
                    <article class="box-modern"><span class="icon box-modern-icon fl-bigmug-line-wallet26"></span>
                        <div class="box-modern-main">
                            <h4 class="box-modern-title">No Commission</h4>
                            <p>Opportunity to acquire a quality apartment for rent without having to pay any
                                commission.</p>
                        </div>
                    </article>
                </div>
                <div class="col-md-6 col-lg-4">
                    <!-- Box Modern-->
                    <article class="box-modern"><span class="icon box-modern-icon fl-bigmug-line-search74"></span>
                        <div class="box-modern-main">
                            <h4 class="box-modern-title">View Apartments</h4>
                            <p>View apartment listings with photos, HD videos, virtual tours, 3D floor plans etc.
                            </p>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>
    <!-- Agents-->
    <section class="section section-md bg-default">
        <div class="container">
            <h2 class="heading-decoration-1"><span class="heading-inner">Our Agents</span></h2>
            <div class="row row-30">
                <div class="col-sm-6 col-lg-3">
                    <!-- Block Agent--><a class="block-agent" href="agent-single-page.html"><img
                            src="{{asset('public/frontend')}}/images/agents-01-540x460.jpg" alt="" width="540" height="460" />
                        <div class="block-agent-body">
                            <h3 class="block-agent-title">Michael Rutter</h3>
                            <p>Certified Real Estate Broker</p>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <!-- Block Agent--><a class="block-agent" href="agent-single-page.html"><img
                            src="{{asset('public/frontend')}}/images/agents-02-540x460.jpg" alt="" width="540" height="460" />
                        <div class="block-agent-body">
                            <h3 class="block-agent-title">Janet Richmond</h3>
                            <p>Residential Real Estate Broker</p>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <!-- Block Agent--><a class="block-agent" href="agent-single-page.html"><img
                            src="{{asset('public/frontend')}}/images/agents-03-540x460.jpg" alt="" width="540" height="460" />
                        <div class="block-agent-body">
                            <h3 class="block-agent-title">Sam Wilson</h3>
                            <p>Real Estate Broker</p>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <!-- Block Agent--><a class="block-agent" href="agent-single-page.html"><img
                            src="{{asset('public/frontend')}}/images/agents-04-540x460.jpg" alt="" width="540" height="460" />
                        <div class="block-agent-body">
                            <h3 class="block-agent-title">Mary Peterson</h3>
                            <p>Real Estate Broker</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Subscribe to Our Newsletter-->
    <section class="section parallax-container" data-parallax-img="{{asset('public/frontend')}}/images/bg-01-1920x653.jpg">
        <div class="parallax-content section-lg context-dark text-center bg-darkblue-2">
            <div class="container">
                <div class="row justify-content-md-center">
                    <div class="col-md-9 col-lg-8 col-xl-7">
                        <div class="divider divider-secondary"></div>
                        <h2>Subscribe to Our Newsletter</h2>
                        <p class="mw-540 block-center">Sign up to our newsletter and be the first to know about the
                            latest company news, special offers, events, and discounts.</p>
                        <!-- RD Mailform-->
                        <form class="rd-form rd-mailform rd-form-inline" data-form-output="form-output-global"
                            data-form-type="subscribe" method="post" action="bat/rd-mailform.php">
                            <div class="form-wrap">
                                <input class="form-input" id="subscribe-form-0-email" type="email" name="email">
                                <label class="form-label" for="subscribe-form-0-email">Your E-mail</label>
                            </div>
                            <div class="form-button">
                                <button class="button button-secondary" type="submit">Subscribe</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Partners-->
    <section class="section section-lg bg-default">
        <div class="container">
            <!-- Owl Carousel-->
            <div class="owl-carousel owl-carousel-stretch" data-items="1" data-sm-items="2" data-md-items="4"
                data-dots="true" data-nav="false" data-stage-padding="1" data-loop="false" data-margin="30"
                data-autoplay="true" data-autoplay-speed="3000" data-mouse-drag="false">
                <a class="link-corporate" href="#"><img src="{{asset('public/frontend')}}/images/brand-1-183x44.png" alt="" width="183" height="44" /></a>
                <a class="link-corporate" href="#"><img src="{{asset('public/frontend')}}/images/brand-2-118x82.png" alt="" width="118" height="82" /></a>
                <a class="link-corporate" href="#"><img src="{{asset('public/frontend')}}/images/brand-3-137x39.png" alt="" width="137" height="39" /></a>
                <a class="link-corporate" href="#"><img src="{{asset('public/frontend')}}/images/brand-4-133x77.png" alt="" width="133" height="77" /></a>
                <a class="link-corporate" href="#"><img src="{{asset('public/frontend')}}/images/brand-5-145x35.png" alt="" width="145" height="35" /></a>
            </div>
        </div>
    </section>
</x-frontend-layout>