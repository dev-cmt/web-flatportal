<x-frontend-layout :title="'Products List'">
    <!-- Breadcrumbs-->
    <section class="breadcrumbs-custom bg-image context-dark" data-opacity="37"
        style="background-image: url({{asset('public/frontend')}}/images/breadcrumbs-bg-06-1922x427.jpg);">
        <div class="container">
            <h2 class="breadcrumbs-custom-title">401 Biscayne Boulevard, Miami</h2>
        </div>
    </section>
    <section class="section-xs bg-white">
        <div class="container">
            <ul class="breadcrumbs-custom-path">
                <li><a href="index.html">Home</a></li>
                <li><a href="#">Properties</a></li>
                <li class="active">Single Property</li>
            </ul>
        </div>
    </section>
    <div class="divider-section"></div>
    <section class="section section-md bg-gray-12">
        <div class="container">
            <div class="row row-50">
                <div class="col-lg-7 col-xl-8">
                    <!-- Slick Carousel-->
                    <div class="slick-slider-1">
                        <div class="slick-slider-price">{{$data->price}} ৳</div>
                        <div class="slick-slider carousel-parent" id="parent-carousel" data-arrows="true"
                            data-loop="true" data-dots="false" data-swipe="true" data-fade="true" data-items="1"
                            data-child="#child-carousel" data-for="#child-carousel">
                            <div class="item"><img src="{{asset('public')}}/{{$data->image_path}}" alt="" width="763" height="443" />
                            </div>
                        </div>
                        <div class="slick-slider carousel-child" id="child-carousel" data-arrows="true"
                            data-loop="true" data-dots="false" data-swipe="true" data-items="1" data-sm-items="3"
                            data-md-items="4" data-lg-items="4" data-xl-items="5" data-slide-to-scroll="1"
                            data-for="#parent-carousel">
                            @foreach ($data->propertyImages as $image)
                                <img class="slick-slide-inner"  style="background-image: url({{asset('public')}}/{{$image->property_image}});" alt="" width="480" height="287"/>
                            @endforeach
                            
                        </div>
                    </div>
                    <div class="features-block">
                        <div class="features-block-inner">
                            <div class="features-block-item">
                                <ul class="features-block-list">
                                    <li><span class="icon hotel-icon-10"></span><span>{{$data->bedroom_count}} Bedrooms</span></li>
                                    <li><span class="icon hotel-icon-05"></span><span>{{$data->dining_room_count}} Diningooms</span></li>
                                    <li><span class="icon mdi mdi-vector-square"></span><span>{{$data->area_size}} Sq Ft</span></li>
                                    <li><span class="icon hotel-icon-26"></span><span>{{$data->bathroom_count}} Bathrooms</span></li>
                                </ul>
                            </div>
                            <div class="features-block-item"><a class="link link-1" href="#"><span
                                        class="icon mdi mdi-heart-outline"></span>Add to Favorites</a></div>
                        </div>
                    </div>
                    <p>Choose this property if you are looking for a modern house near the ocean shore. With 2
                        bathrooms and 2 bedrooms as well as a single garage, it is a perfect option for a small
                        family.</p>
                    <p>This home has been completely renovated within the past year and features amazing views and
                        sunsets of the local lake, solid wood cabinets (and loads of them), granite counters with
                        colored glass backsplash, sliding glass doors across the entire family room allowing
                        beautiful views of the lake etc. Its affordable price serves as a great bonus for a family
                        looking for an opportunity to save money on Miami real estate.</p>
                    <!-- Bootstrap collapse-->
                    <div class="card-group-custom card-group-corporate" id="accordion1" role="tablist"
                        aria-multiselectable="false">
                        <!-- Bootstrap card-->
                        <article class="card card-custom card-corporate">
                            <div class="card-header" id="accordion1-heading-1" role="tab">
                                <div class="card-title"><a class="card-link" role="button" data-bs-toggle="collapse"
                                        href="#accordion1-collapse-1" aria-controls="accordion1-collapse-1"
                                        aria-expanded="true"><span>Address</span>
                                        <div class="card-arrow"></div>
                                    </a></div>
                            </div>
                            <div class="collapse show" id="accordion1-collapse-1" role="tabpanel"
                                aria-labelledby="accordion1-heading-1" data-parent="#accordion1">
                                <div class="card-body">
                                    <div class="layout-1">
                                        <dl class="list-terms-inline">
                                            <dt>Address:</dt>
                                            <dd>Biscayne Blvd</dd>
                                        </dl>
                                        <dl class="list-terms-inline">
                                            <dt>State/County:</dt>
                                            <dd>Florida</dd>
                                        </dl>
                                        <dl class="list-terms-inline">
                                            <dt>City:</dt>
                                            <dd>Miami</dd>
                                        </dl>
                                        <dl class="list-terms-inline">
                                            <dt>Zip:</dt>
                                            <dd>8322</dd>
                                        </dl>
                                        <dl class="list-terms-inline">
                                            <dt>Country:</dt>
                                            <dd>United States</dd>
                                        </dl>
                                        <dl class="list-terms-inline">
                                            <dt>Area:</dt>
                                            <dd>Lake Worth</dd>
                                        </dl>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                    <!-- Bootstrap collapse-->
                    <div class="card-group-custom card-group-corporate" id="accordion2" role="tablist"
                        aria-multiselectable="false">
                        <!-- Bootstrap card-->
                        <article class="card card-custom card-corporate">
                            <div class="card-header" id="accordion2-heading-1" role="tab">
                                <div class="card-title"><a class="card-link" role="button" data-bs-toggle="collapse"
                                        href="#accordion2-collapse-1" aria-controls="accordion2-collapse-1"
                                        aria-expanded="true"><span>Features</span>
                                        <div class="card-arrow"></div>
                                    </a></div>
                            </div>
                            <div class="collapse show" id="accordion2-collapse-1" role="tabpanel"
                                aria-labelledby="accordion2-heading-1" data-parent="#accordion2">
                                <div class="card-body">
                                    <ul class="list-marked-2 layout-2">
                                        <li>2 Stories</li>
                                        <li>Basketball Court</li>
                                        <li>Lawn</li>
                                        <li>Gym</li>
                                        <li>Fireplace</li>
                                        <li>Sprinklers</li>
                                        <li>Private Space</li>
                                        <li>Balcony</li>
                                        <li>Laundry</li>
                                        <li>Ocean View</li>
                                    </ul>
                                </div>
                            </div>
                        </article>
                    </div>
                    <!-- Bootstrap collapse-->
                    <div class="card-group-custom card-group-corporate" id="accordion3" role="tablist"
                        aria-multiselectable="false">
                        <!-- Bootstrap card-->
                        <article class="card card-custom card-corporate">
                            <div class="card-header" id="accordion3-heading-1" role="tab">
                                <div class="card-title"><a class="card-link" role="button" data-bs-toggle="collapse"
                                        href="#accordion3-collapse-1" aria-controls="accordion3-collapse-1"
                                        aria-expanded="true"><span>Floor Plan</span>
                                        <div class="card-arrow"></div>
                                    </a></div>
                            </div>
                            <div class="collapse show" id="accordion3-collapse-1" role="tabpanel"
                                aria-labelledby="accordion3-heading-1" data-parent="#accordion3">
                                <div class="card-body"><a class="d-block text-center"
                                        href="{{asset('public/frontend')}}/images/single-property-1-570x447.png" data-lightgallery="item"><img
                                            src="{{asset('public/frontend')}}/images/single-property-1-570x447.png" alt="" width="570"
                                            height="447" /></a>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="block-group-item">
                        <h3>Property Map</h3>
                        <div class="google-map-container mt-20"
                            data-center="9870 St Vincent Place, Glasgow, DC 45 Fr 45."
                            data-icon="{{asset('public/frontend')}}/images/gmap_marker_mini.png"
                            data-icon-active="{{asset('public/frontend')}}/images/gmap_marker_mini_active.png"
                            data-styles="[{&quot;featureType&quot;:&quot;water&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#e9e9e9&quot;},{&quot;lightness&quot;:17}]},{&quot;featureType&quot;:&quot;landscape&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#f5f5f5&quot;},{&quot;lightness&quot;:20}]},{&quot;featureType&quot;:&quot;road.highway&quot;,&quot;elementType&quot;:&quot;geometry.fill&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#ffffff&quot;},{&quot;lightness&quot;:17}]},{&quot;featureType&quot;:&quot;road.highway&quot;,&quot;elementType&quot;:&quot;geometry.stroke&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#ffffff&quot;},{&quot;lightness&quot;:29},{&quot;weight&quot;:0.2}]},{&quot;featureType&quot;:&quot;road.arterial&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#ffffff&quot;},{&quot;lightness&quot;:18}]},{&quot;featureType&quot;:&quot;road.local&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#ffffff&quot;},{&quot;lightness&quot;:16}]},{&quot;featureType&quot;:&quot;poi&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#f5f5f5&quot;},{&quot;lightness&quot;:21}]},{&quot;featureType&quot;:&quot;poi.park&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#dedede&quot;},{&quot;lightness&quot;:21}]},{&quot;elementType&quot;:&quot;labels.text.stroke&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;on&quot;},{&quot;color&quot;:&quot;#ffffff&quot;},{&quot;lightness&quot;:16}]},{&quot;elementType&quot;:&quot;labels.text.fill&quot;,&quot;stylers&quot;:[{&quot;saturation&quot;:36},{&quot;color&quot;:&quot;#333333&quot;},{&quot;lightness&quot;:40}]},{&quot;elementType&quot;:&quot;labels.icon&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;transit&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#f2f2f2&quot;},{&quot;lightness&quot;:19}]},{&quot;featureType&quot;:&quot;administrative&quot;,&quot;elementType&quot;:&quot;geometry.fill&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#fefefe&quot;},{&quot;lightness&quot;:20}]},{&quot;featureType&quot;:&quot;administrative&quot;,&quot;elementType&quot;:&quot;geometry.stroke&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#fefefe&quot;},{&quot;lightness&quot;:17},{&quot;weight&quot;:1.2}]}]"
                            data-zoom="5">
                            <div class="google-map google-map-1"></div>
                            <ul class="google-map-markers">
                                <li data-location="9870 St Vincent Place, Glasgow"
                                    data-description="9870 St Vincent Place, Glasgow, DC 45 Fr 45."></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Post Share and Links-->
                    <div class="blog-post-solo-footer mt-20">
                        <div class="blog-post-solo-footer-left">
                            <ul class="blog-post-solo-footer-list">
                                <li><span class="icon mdi mdi-clock"></span><a href="#">February 10, 2023</a></li>
                            </ul>
                        </div>
                        <div class="blog-post-solo-footer-right">
                            <ul class="blog-post-solo-footer-list-1">
                                <li><span>Share this post</span></li>
                                <li>
                                    <ul class="list-inline-1">
                                        <li><a class="icon link-default fa-facebook" href="#"></a></li>
                                        <li><a class="icon link-default fa-twitter" href="#"></a></li>
                                        <li><a class="icon link-default fa-google-plus" href="#"></a></li>
                                        <li><a class="icon link-default fa-pinterest-p" href="#"></a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="mt-35 mt-md-50 mt-lg-60">
                        <article class="block-person">
                            <div class="block-person-left"><img src="{{asset('public/frontend')}}/images/agent-page-01-650x756.jpg" alt=""
                                    width="650" height="756" />
                            </div>
                            <div class="block-person-body">
                                <h3 class="block-person-title">Sam Wilson</h3>
                                <p class="block-person-cite">Real Estate Broker</p>
                                <ul class="block-person-list">
                                    <li>
                                        <div class="block-person-link"><span class="icon mdi mdi-phone"></span><a
                                                href="tel:#">+ 123 098 890 76 56</a></div>
                                    </li>
                                    <li>
                                        <div class="block-person-link"><span
                                                class="icon mdi mdi-email-outline"></span><a class="text-spacing-50"
                                                href="mailto:#">info@demolink.org</a></div>
                                    </li>
                                    <li>
                                        <ul class="list-inline-1">
                                            <li><a class="icon fa-facebook" href="#"></a></li>
                                            <li><a class="icon fa-twitter" href="#"></a></li>
                                            <li><a class="icon fa-google-plus" href="#"></a></li>
                                            <li><a class="icon fa-pinterest-p" href="#"></a></li>
                                        </ul>
                                    </li>
                                </ul>
                                <p>Being a full time real estate broker for over 15 years has given Sam the
                                    opportunity to work with the most wonderful clients.</p><a
                                    class="button button-primary" href="contact-us.html">Get in Touch</a>
                            </div>
                        </article>
                    </div>
                    <div class="block-group-item">
                        <h3>Similar Properties</h3>
                        <div class="row row-50 mt-10">
                            <div class="col-md-6 col-lg-12 col-xl-6">
                                <!-- Product Classic-->
                                <article class="product-classic">
                                    <div class="product-classic-media">
                                        <div class="owl-carousel" data-items="1" data-nav="true"
                                            data-stage-padding="0" data-loop="false" data-margin="0"
                                            data-mouse-drag="false"><img
                                                src="{{asset('public/frontend')}}/images/featured-properties-01-480x287.jpg" alt="" width="480"
                                                height="287" /><img src="{{asset('public/frontend')}}/images/featured-properties-02-480x287.jpg"
                                                alt="" width="480" height="287" /><img
                                                src="{{asset('public/frontend')}}/images/featured-properties-03-480x287.jpg" alt="" width="480"
                                                height="287" /><img src="{{asset('public/frontend')}}/images/featured-properties-04-480x287.jpg"
                                                alt="" width="480" height="287" />
                                        </div>
                                        <div class="product-classic-price"><span>$5000\mo</span></div>
                                    </div>
                                    <h4 class="product-classic-title"><a href="single-property.html">401 Biscayne
                                            Boulevard, Miami</a></h4>
                                    <div class="product-classic-divider"></div>
                                    <ul class="product-classic-list">
                                        <li><span class="icon mdi mdi-vector-square"></span><span>480 Sq Ft</span>
                                        </li>
                                        <li><span class="icon hotel-icon-10"></span><span>2 Bathrooms</span></li>
                                        <li><span class="icon hotel-icon-05"></span><span>2 Bedrooms</span></li>
                                        <li><span class="icon hotel-icon-26"></span><span>1 Garage</span></li>
                                    </ul>
                                </article>
                            </div>
                            <div class="col-md-6 col-lg-12 col-xl-6">
                                <!-- Product Classic-->
                                <article class="product-classic">
                                    <div class="product-classic-media">
                                        <div class="owl-carousel" data-items="1" data-nav="true"
                                            data-stage-padding="0" data-loop="false" data-margin="0"
                                            data-mouse-drag="false"><img
                                                src="{{asset('public/frontend')}}/images/featured-properties-05-480x287.jpg" alt="" width="480"
                                                height="287" /><img src="{{asset('public/frontend')}}/images/featured-properties-06-480x287.jpg"
                                                alt="" width="480" height="287" /><img
                                                src="{{asset('public/frontend')}}/images/featured-properties-07-480x287.jpg" alt="" width="480"
                                                height="287" /><img src="{{asset('public/frontend')}}/images/featured-properties-08-480x287.jpg"
                                                alt="" width="480" height="287" />
                                        </div>
                                        <div class="product-classic-price"><span>$2500\mo</span></div>
                                    </div>
                                    <h4 class="product-classic-title"><a href="single-property.html">15 Apartments
                                            Of Type B</a></h4>
                                    <div class="product-classic-divider"></div>
                                    <ul class="product-classic-list">
                                        <li><span class="icon mdi mdi-vector-square"></span><span>430 Sq Ft</span>
                                        </li>
                                        <li><span class="icon hotel-icon-10"></span><span>2 Bathrooms</span></li>
                                        <li><span class="icon hotel-icon-05"></span><span>2 Bedrooms</span></li>
                                        <li><span class="icon hotel-icon-26"></span><span>1 Garage</span></li>
                                    </ul>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-xl-4">
                    <div class="row row-50">
                        <div class="col-md-6 col-lg-12">
                            <div class="block-info">
                                <h3>Find Your Property</h3>
                                <form class="rd-mailform form-select" data-form-output="form-output-global"
                                    data-form-type="contact" method="post" action="bat/rd-mailform.php">
                                    <div class="form-wrap form-wrap-validation">
                                        <select class="form-input select-filter" data-style="modern"
                                            data-placeholder="Choose Location">
                                            <option label="placeholder"></option>
                                            <option value="2">Alaska</option>
                                            <option value="3">Arizona</option>
                                            <option value="4">Arkansas</option>
                                            <option value="5">California</option>
                                            <option value="6">Colorado</option>
                                            <option value="7">Connecticut</option>
                                            <option value="8">Delaware</option>
                                            <option value="9">Florida</option>
                                        </select><span class="select-arrow"></span>
                                    </div>
                                    <div class="form-wrap form-wrap-validation">
                                        <select class="form-input select-filter" data-style="modern"
                                            data-placeholder="Property Status">
                                            <option label="placeholder"></option>
                                            <option value="2">Low</option>
                                            <option value="3">Middle</option>
                                            <option value="4">Primary</option>
                                        </select><span class="select-arrow"></span>
                                    </div>
                                    <div class="form-wrap form-wrap-validation">
                                        <select class="form-input select-filter" data-style="modern"
                                            data-placeholder="Property Type">
                                            <option label="placeholder"></option>
                                            <option value="2">Low</option>
                                            <option value="3">Middle</option>
                                            <option value="4">Primary</option>
                                        </select><span class="select-arrow"></span>
                                    </div>
                                    <div class="form-wrap-group">
                                        <div class="form-wrap form-wrap-validation">
                                            <select class="form-input select-filter" data-style="modern"
                                                data-placeholder="Min Price">
                                                <option label="placeholder"></option>
                                                <option value="2">100 $</option>
                                                <option value="3">200 $</option>
                                                <option value="4">300 $</option>
                                            </select><span class="select-arrow"></span>
                                        </div>
                                        <div class="form-wrap form-wrap-validation">
                                            <select class="form-input select-filter" data-style="modern"
                                                data-placeholder="Max Price">
                                                <option label="placeholder"></option>
                                                <option value="2">1000 $</option>
                                                <option value="3">2000 $</option>
                                                <option value="4">3000 $</option>
                                            </select><span class="select-arrow"></span>
                                        </div>
                                    </div>
                                    <div class="form-wrap-group">
                                        <div class="form-wrap form-wrap-validation">
                                            <select class="form-input select-filter" data-style="modern"
                                                data-placeholder="Min Area">
                                                <option label="placeholder"></option>
                                                <option value="2">100 Sq Ft</option>
                                                <option value="3">200 Sq Ft</option>
                                                <option value="4">300 Sq Ft</option>
                                            </select><span class="select-arrow"></span>
                                        </div>
                                        <div class="form-wrap form-wrap-validation">
                                            <select class="form-input select-filter" data-style="modern"
                                                data-placeholder="Max Area">
                                                <option label="placeholder"></option>
                                                <option value="2">1000 Sq Ft</option>
                                                <option value="3">2000 Sq Ft</option>
                                                <option value="4">3000 Sq Ft</option>
                                            </select><span class="select-arrow"></span>
                                        </div>
                                    </div>
                                    <div class="form-wrap-group">
                                        <div class="form-wrap form-wrap-validation">
                                            <select class="form-input select-filter" data-style="modern"
                                                data-placeholder="Min Resint">
                                                <option label="placeholder"></option>
                                                <option value="2">100</option>
                                                <option value="3">200</option>
                                                <option value="4">300</option>
                                            </select><span class="select-arrow"></span>
                                        </div>
                                        <div class="form-wrap form-wrap-validation">
                                            <select class="form-input select-filter" data-style="modern"
                                                data-placeholder="Max Resint">
                                                <option label="placeholder"></option>
                                                <option value="2">1000</option>
                                                <option value="3">2000</option>
                                                <option value="4">3000</option>
                                            </select><span class="select-arrow"></span>
                                        </div>
                                    </div>
                                    <div class="form-button">
                                        <button class="button button-block button-secondary"
                                            type="submit">Search</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-12">
                            <article class="block-callboard">
                                <div class="block-callboard-body">
                                    <h3 class="block-callboard-title">Request a Showing</h3>
                                    <!-- RD Mailform-->
                                    <form class="rd-form rd-mailform" data-form-output="form-output-global"
                                        data-form-type="contact" method="post" action="bat/rd-mailform.php">
                                        <div class="row row-20">
                                            <div class="col-12">
                                                <div class="form-wrap">
                                                    <input class="form-input" id="contact-name" type="text">
                                                    <label class="form-label" for="contact-name">Your Name</label>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-wrap">
                                                    <input class="form-input" id="contact-email" type="email">
                                                    <label class="form-label" for="contact-email">E-mail</label>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-wrap">
                                                    <input class="form-input" id="contact-phone" type="text">
                                                    <label class="form-label" for="contact-phone">Phone</label>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-wrap">
                                                    <label class="form-label" for="contact-message">Message</label>
                                                    <textarea class="form-input" id="contact-message" name="message"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <button class="button button-block button-secondary"
                                                    type="submit">Send message</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </article>
                        </div>
                        <div class="col-md-6 col-lg-12">
                            <div class="block-info bg-default">
                                <h3>Mortgage Calculator</h3>
                                <form class="rd-mailform form-select" data-form-output="form-output-global"
                                    data-form-type="contact" method="post" action="bat/rd-mailform.php">
                                    <div class="form-wrap">
                                        <input class="form-input" id="contact-1-name" type="text" name="name">
                                        <label class="form-label" for="contact-1-name">Home Value</label>
                                    </div>
                                    <div class="form-wrap form-wrap-validation">
                                        <select class="form-input select-filter" data-style="modern"
                                            data-placeholder="Loan Amount">
                                            <option label="placeholder"></option>
                                            <option value="2">50000</option>
                                            <option value="3">100000</option>
                                            <option value="4">200000</option>
                                            <option value="5">500000</option>
                                            <option value="6">1000000</option>
                                            <option value="7">1500000</option>
                                        </select>
                                    </div>
                                    <div class="form-wrap form-wrap-validation">
                                        <select class="form-input select-filter" data-style="modern"
                                            data-placeholder="Term (Years)">
                                            <option label="placeholder"></option>
                                            <option value="2">10</option>
                                            <option value="3">15</option>
                                            <option value="4">20</option>
                                            <option value="5">25</option>
                                            <option value="6">30</option>
                                            <option value="7">40</option>
                                        </select>
                                    </div>
                                    <div class="form-wrap form-wrap-validation">
                                        <select class="form-input select-filter" data-style="modern"
                                            data-placeholder="Interest Rate in %">
                                            <option label="placeholder"></option>
                                            <option value="2">0.1%</option>
                                            <option value="3">0.3%</option>
                                            <option value="4">0.5%</option>
                                            <option value="5">0.7%</option>
                                            <option value="6">0.9%</option>
                                            <option value="7">1%</option>
                                        </select>
                                    </div>
                                    <ul class="form-wrap-list">
                                        <li>Financed Amount: <span>0</span>
                                        </li>
                                        <li>Mortgage Payments: <span>0</span>
                                        </li>
                                        <li>Annual Cost of Loan: <span>0</span>
                                        </li>
                                    </ul>
                                    <div class="form-button">
                                        <button class="button button-block button-secondary"
                                            type="submit">Calculate</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-frontend-layout>