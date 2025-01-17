<x-frontend-layout :title="'Products List'">
    <!-- Breadcrumbs-->
    <section class="breadcrumbs-custom bg-image context-dark" data-opacity="37"
        style="background-image: url({{asset('public/frontend')}}/images/breadcrumbs-bg-06-1922x427.jpg);">
        <div class="container">
            <h2 class="breadcrumbs-custom-title">Properties</h2>
        </div>
    </section>
    <section class="section-xs bg-white">
        <div class="container">
            <ul class="breadcrumbs-custom-path">
                <li><a href="{{route('home')}}">Home</a></li>
                <li>Properties</li>
            </ul>
        </div>
    </section>
    <div class="divider-section"></div>
    <!-- Section Agent Single-->
    <section class="section section-md bg-gray-12">
        <div class="container">
            <div class="row row-50">
                <div class="col-lg-12">
                    <article class="block-property bg-default">
                        <div class="layout-3">
                            <h3>Find Your Property</h3>
                            <div class="layout-3-item">
                                <ul class="list-inline-bordered heading-7">
                                    <li>
                                        <label>
                                            <input name="input-group-radio" value="radio-1" type="radio"
                                                checked><span>For Rent</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input name="input-group-radio" value="radio-2" type="radio"><span>For
                                                sale</span>
                                        </label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <form class="rd-mailform form-property mt-30" data-form-output="form-output-global"
                            data-form-type="contact" method="post" action="bat/rd-mailform.php">
                            <div class="form-wrap form-wrap-validation">
                                <select class="form-input select-filter" data-style="modern"
                                    data-placeholder="Choose Location" data-minimum-results-for-search="Infinity">
                                    <option label="placeholder"></option>
                                    <option value="2">USA</option>
                                    <option value="3">Brazil</option>
                                    <option value="4">Germany</option>
                                    <option value="5">Poland</option>
                                </select>
                            </div>
                            <div class="form-wrap form-wrap-validation">
                                <select class="form-input select-filter" data-style="modern"
                                    data-placeholder="Property Type" data-minimum-results-for-search="Infinity">
                                    <option label="placeholder"></option>
                                    <option value="2">1</option>
                                    <option value="3">2</option>
                                    <option value="4">3</option>
                                    <option value="5">4</option>
                                    <option value="6">5</option>
                                    <option value="7">6</option>
                                </select>
                            </div>
                            <div class="form-wrap form-wrap-validation">
                                <select class="form-input select-filter" data-style="modern"
                                    data-placeholder="Min Beds" data-minimum-results-for-search="Infinity">
                                    <option label="placeholder"></option>
                                    <option value="2">1</option>
                                    <option value="3">2</option>
                                    <option value="4">3</option>
                                    <option value="5">4</option>
                                    <option value="6">5</option>
                                    <option value="7">6</option>
                                </select>
                            </div>
                            <div class="form-wrap form-wrap-validation">
                                <select class="form-input select-filter" data-style="modern"
                                    data-placeholder="Min Baths" data-minimum-results-for-search="Infinity">
                                    <option label="placeholder"></option>
                                    <option value="2">1</option>
                                    <option value="3">2</option>
                                    <option value="4">3</option>
                                    <option value="5">4</option>
                                    <option value="6">5</option>
                                    <option value="7">6</option>
                                </select>
                            </div>
                            <div class="form-wrap form-wrap-validation">
                                <select class="form-input select-filter" data-style="modern"
                                    data-placeholder="Min Price" data-minimum-results-for-search="Infinity">
                                    <option label="placeholder"></option>
                                    <option value="2">1 $</option>
                                    <option value="3">2 $</option>
                                    <option value="4">3 $</option>
                                    <option value="5">4 $</option>
                                    <option value="6">5 $</option>
                                    <option value="7">6 $</option>
                                </select>
                            </div>
                            <div class="form-wrap form-wrap-validation">
                                <select class="form-input select-filter" data-style="modern"
                                    data-placeholder="Max Price" data-minimum-results-for-search="Infinity">
                                    <option label="placeholder"></option>
                                    <option value="2">1 $</option>
                                    <option value="3">2 $</option>
                                    <option value="4">3 $</option>
                                    <option value="5">4 $</option>
                                    <option value="6">5 $</option>
                                    <option value="7">6 $</option>
                                </select>
                            </div>
                            <div class="form-wrap form-wrap-validation">
                                <select class="form-input select-filter" data-style="modern"
                                    data-placeholder="Min Area" data-minimum-results-for-search="Infinity">
                                    <option label="placeholder"></option>
                                    <option value="2">1 Sq Ft</option>
                                    <option value="3">2 Sq Ft</option>
                                    <option value="4">3 Sq Ft</option>
                                    <option value="5">4 Sq Ft</option>
                                    <option value="6">5 Sq Ft</option>
                                    <option value="7">6 Sq Ft</option>
                                </select>
                            </div>
                            <div class="form-wrap form-wrap-validation">
                                <select class="form-input select-filter" data-style="modern"
                                    data-placeholder="Max Area" data-minimum-results-for-search="Infinity">
                                    <option label="placeholder"></option>
                                    <option value="2">1 Sq Ft</option>
                                    <option value="3">2 Sq Ft</option>
                                    <option value="4">3 Sq Ft</option>
                                    <option value="5">4 Sq Ft</option>
                                    <option value="6">5 Sq Ft</option>
                                    <option value="7">6 Sq Ft</option>
                                </select>
                            </div>
                            <div class="form-button">
                                <button class="button button-block button-secondary" type="submit">Search</button>
                            </div>
                        </form>
                        <div class="panel-1">
                            <button class="panel-1-toggle" data-multitoggle="#features"><span
                                    class="panel-1-toggle-icon"></span><span>Look for certain
                                    features</span></button>
                            <div class="panel-1-content" id="features">
                                <ul class="list-inline list-inline-sm">
                                    <li>
                                        <label class="checkbox-inline">
                                            <input name="checkbox-1" value="checkbox-1" type="checkbox">Central
                                            Heating
                                        </label>
                                    </li>
                                    <li>
                                        <label class="checkbox-inline">
                                            <input name="checkbox-2" value="checkbox-2" type="checkbox">Home Theater
                                        </label>
                                    </li>
                                    <li>
                                        <label class="checkbox-inline">
                                            <input name="checkbox-3" value="checkbox-3" type="checkbox">Lawn
                                        </label>
                                    </li>
                                    <li>
                                        <label class="checkbox-inline">
                                            <input name="checkbox-4" value="checkbox-4" type="checkbox">Wi-Fi
                                        </label>
                                    </li>
                                    <li>
                                        <label class="checkbox-inline">
                                            <input name="checkbox-5" value="checkbox-5" type="checkbox">Gym
                                        </label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-lg-7 col-xl-8">
                    <div class="row row-30">
                        <div class="col-sm-12">
                            <div class="row row-50">
                                <div class="col-md-6 col-lg-12 col-xl-6">
                                    <!-- Product classic 2-->
                                    <article class="product-classic product-classic-2">
                                        <h4 class="product-classic-title"><a href="single-property.html">401
                                                Biscayne Boulevard, Miami</a></h4>
                                        <div class="product-classic-media">
                                            <div class="owl-carousel" data-items="1" data-nav="true"
                                                data-stage-padding="0" data-loop="true" data-margin="0"
                                                data-mouse-drag="false"><img
                                                    src="{{asset('public/frontend')}}/images/featured-properties-01-480x287.jpg" alt=""
                                                    width="480" height="287" /><img
                                                    src="{{asset('public/frontend')}}/images/featured-properties-02-480x287.jpg" alt=""
                                                    width="480" height="287" /><img
                                                    src="{{asset('public/frontend')}}/images/featured-properties-03-480x287.jpg" alt=""
                                                    width="480" height="287" /><img
                                                    src="{{asset('public/frontend')}}/images/featured-properties-04-480x287.jpg" alt=""
                                                    width="480" height="287" />
                                            </div>
                                            <div class="product-classic-price"><span>$5000\mo</span></div>
                                        </div>
                                        <ul class="product-classic-list">
                                            <li><span class="icon hotel-icon-10"></span><span>2 Bathrooms</span>
                                            </li>
                                            <li><span class="icon hotel-icon-05"></span><span>2 Bedrooms</span></li>
                                            <li><span class="icon mdi mdi-vector-square"></span><span>480 Sq
                                                    Ft</span></li>
                                            <li><span class="icon hotel-icon-26"></span><span>1 Garage</span></li>
                                        </ul>
                                    </article>
                                </div>
                                <div class="col-md-6 col-lg-12 col-xl-6">
                                    <!-- Product classic 2-->
                                    <article class="product-classic product-classic-2">
                                        <h4 class="product-classic-title"><a href="single-property.html">923 Folsom
                                                St, San Francisco</a></h4>
                                        <div class="product-classic-media">
                                            <div class="owl-carousel" data-items="1" data-nav="true"
                                                data-stage-padding="0" data-loop="true" data-margin="0"
                                                data-mouse-drag="false"><img
                                                    src="{{asset('public/frontend')}}/images/featured-properties-05-480x287.jpg" alt=""
                                                    width="480" height="287" /><img
                                                    src="{{asset('public/frontend')}}/images/featured-properties-06-480x287.jpg" alt=""
                                                    width="480" height="287" /><img
                                                    src="{{asset('public/frontend')}}/images/featured-properties-07-480x287.jpg" alt=""
                                                    width="480" height="287" /><img
                                                    src="{{asset('public/frontend')}}/images/featured-properties-08-480x287.jpg" alt=""
                                                    width="480" height="287" />
                                            </div>
                                            <div class="product-classic-price"><span>$2500\mo</span></div>
                                        </div>
                                        <ul class="product-classic-list">
                                            <li><span class="icon hotel-icon-10"></span><span>2 Bathrooms</span>
                                            </li>
                                            <li><span class="icon hotel-icon-05"></span><span>3 Bedrooms</span></li>
                                            <li><span class="icon mdi mdi-vector-square"></span><span>535 Sq
                                                    Ft</span></li>
                                            <li><span class="icon hotel-icon-26"></span><span>1 Garage</span></li>
                                        </ul>
                                    </article>
                                </div>
                                <div class="col-md-6 col-lg-12 col-xl-6">
                                    <!-- Product classic 2-->
                                    <article class="product-classic product-classic-2">
                                        <h4 class="product-classic-title"><a href="single-property.html">623 Willow
                                                Rd, Dallas</a></h4>
                                        <div class="product-classic-media">
                                            <div class="owl-carousel" data-items="1" data-nav="true"
                                                data-stage-padding="0" data-loop="true" data-margin="0"
                                                data-mouse-drag="false"><img
                                                    src="{{asset('public/frontend')}}/images/featured-properties-09-480x287.jpg" alt=""
                                                    width="480" height="287" /><img
                                                    src="{{asset('public/frontend')}}/images/featured-properties-10-480x287.jpg" alt=""
                                                    width="480" height="287" /><img
                                                    src="{{asset('public/frontend')}}/images/featured-properties-11-480x287.jpg" alt=""
                                                    width="480" height="287" /><img
                                                    src="{{asset('public/frontend')}}/images/featured-properties-12-480x287.jpg" alt=""
                                                    width="480" height="287" />
                                            </div>
                                            <div class="product-classic-price"><span>$5000\mo</span></div>
                                        </div>
                                        <ul class="product-classic-list">
                                            <li><span class="icon hotel-icon-10"></span><span>2 Bathrooms</span>
                                            </li>
                                            <li><span class="icon hotel-icon-05"></span><span>2 Bedrooms</span></li>
                                            <li><span class="icon mdi mdi-vector-square"></span><span>530 Sq
                                                    Ft</span></li>
                                            <li><span class="icon hotel-icon-26"></span><span>2 Garages</span></li>
                                        </ul>
                                    </article>
                                </div>
                                <div class="col-md-6 col-lg-12 col-xl-6">
                                    <!-- Product classic 2-->
                                    <article class="product-classic product-classic-2">
                                        <h4 class="product-classic-title"><a href="single-property.html">225 Maywood
                                                Dr, San Francisco</a></h4>
                                        <div class="product-classic-media">
                                            <div class="owl-carousel" data-items="1" data-nav="true"
                                                data-stage-padding="0" data-loop="true" data-margin="0"
                                                data-mouse-drag="false"><img
                                                    src="{{asset('public/frontend')}}/images/featured-properties-13-480x287.jpg" alt=""
                                                    width="480" height="287" /><img
                                                    src="{{asset('public/frontend')}}/images/featured-properties-14-480x287.jpg" alt=""
                                                    width="480" height="287" /><img
                                                    src="{{asset('public/frontend')}}/images/featured-properties-15-480x287.jpg" alt=""
                                                    width="480" height="287" /><img
                                                    src="{{asset('public/frontend')}}/images/featured-properties-16-480x287.jpg" alt=""
                                                    width="480" height="287" />
                                            </div>
                                            <div class="product-classic-price"><span>$9340\mo</span></div>
                                        </div>
                                        <ul class="product-classic-list">
                                            <li><span class="icon hotel-icon-10"></span><span>1 Bathroom</span></li>
                                            <li><span class="icon hotel-icon-05"></span><span>1 Bedroom</span></li>
                                            <li><span class="icon mdi mdi-vector-square"></span><span>430 Sq
                                                    Ft</span></li>
                                            <li><span class="icon hotel-icon-26"></span><span>1 Garage</span></li>
                                        </ul>
                                    </article>
                                </div>
                                <div class="col-md-6 col-lg-12 col-xl-6">
                                    <!-- Product classic 2-->
                                    <article class="product-classic product-classic-2">
                                        <h4 class="product-classic-title"><a href="single-property.html">2888 Bush
                                                St, San Francisco</a></h4>
                                        <div class="product-classic-media">
                                            <div class="owl-carousel" data-items="1" data-nav="true"
                                                data-stage-padding="0" data-loop="true" data-margin="0"
                                                data-mouse-drag="false"><img
                                                    src="{{asset('public/frontend')}}/images/featured-properties-17-480x287.jpg" alt=""
                                                    width="480" height="287" /><img
                                                    src="{{asset('public/frontend')}}/images/featured-properties-18-480x287.jpg" alt=""
                                                    width="480" height="287" /><img
                                                    src="{{asset('public/frontend')}}/images/featured-properties-19-480x287.jpg" alt=""
                                                    width="480" height="287" /><img
                                                    src="{{asset('public/frontend')}}/images/featured-properties-20-480x287.jpg" alt=""
                                                    width="480" height="287" />
                                            </div>
                                            <div class="product-classic-price"><span>$5000\mo</span></div>
                                        </div>
                                        <ul class="product-classic-list">
                                            <li><span class="icon hotel-icon-10"></span><span>3 Bathrooms</span>
                                            </li>
                                            <li><span class="icon hotel-icon-05"></span><span>2 Bedrooms</span></li>
                                            <li><span class="icon mdi mdi-vector-square"></span><span>570 Sq
                                                    Ft</span></li>
                                            <li><span class="icon hotel-icon-26"></span><span>1 Garage</span></li>
                                        </ul>
                                    </article>
                                </div>
                                <div class="col-md-6 col-lg-12 col-xl-6">
                                    <!-- Product classic 2-->
                                    <article class="product-classic product-classic-2">
                                        <h4 class="product-classic-title"><a href="single-property.html">275 Lake
                                                Ave, Chicago</a></h4>
                                        <div class="product-classic-media">
                                            <div class="owl-carousel" data-items="1" data-nav="true"
                                                data-stage-padding="0" data-loop="true" data-margin="0"
                                                data-mouse-drag="false"><img
                                                    src="{{asset('public/frontend')}}/images/featured-properties-21-480x287.jpg" alt=""
                                                    width="480" height="287" /><img
                                                    src="{{asset('public/frontend')}}/images/featured-properties-22-480x287.jpg" alt=""
                                                    width="480" height="287" /><img
                                                    src="{{asset('public/frontend')}}/images/featured-properties-23-480x287.jpg" alt=""
                                                    width="480" height="287" /><img
                                                    src="{{asset('public/frontend')}}/images/featured-properties-24-480x287.jpg" alt=""
                                                    width="480" height="287" />
                                            </div>
                                            <div class="product-classic-price"><span>$4563\mo</span></div>
                                        </div>
                                        <ul class="product-classic-list">
                                            <li><span class="icon hotel-icon-10"></span><span>2 Bathrooms</span>
                                            </li>
                                            <li><span class="icon hotel-icon-05"></span><span>3 Bedrooms</span></li>
                                            <li><span class="icon mdi mdi-vector-square"></span><span>630 Sq
                                                    Ft</span></li>
                                            <li><span class="icon hotel-icon-26"></span><span>2 Garages</span></li>
                                        </ul>
                                    </article>
                                </div>
                                <div class="col-md-6 col-lg-12 col-xl-6">
                                    <!-- Product classic 2-->
                                    <article class="product-classic product-classic-2">
                                        <h4 class="product-classic-title"><a href="single-property.html">9021
                                                Charter Oak Ln, San Diego</a></h4>
                                        <div class="product-classic-media">
                                            <div class="owl-carousel" data-items="1" data-nav="true"
                                                data-stage-padding="0" data-loop="true" data-margin="0"
                                                data-mouse-drag="false"><img
                                                    src="{{asset('public/frontend')}}/images/featured-properties-25-480x287.jpg" alt=""
                                                    width="480" height="287" /><img
                                                    src="{{asset('public/frontend')}}/images/featured-properties-26-480x287.jpg" alt=""
                                                    width="480" height="287" /><img
                                                    src="{{asset('public/frontend')}}/images/featured-properties-27-480x287.jpg" alt=""
                                                    width="480" height="287" /><img
                                                    src="{{asset('public/frontend')}}/images/featured-properties-28-480x287.jpg" alt=""
                                                    width="480" height="287" />
                                            </div>
                                            <div class="product-classic-price"><span>$5985\mo</span></div>
                                        </div>
                                        <ul class="product-classic-list">
                                            <li><span class="icon hotel-icon-10"></span><span>3 Bathrooms</span>
                                            </li>
                                            <li><span class="icon hotel-icon-05"></span><span>2 Bedrooms</span></li>
                                            <li><span class="icon mdi mdi-vector-square"></span><span>485 Sq
                                                    Ft</span></li>
                                            <li><span class="icon hotel-icon-26"></span><span>2 Garages</span></li>
                                        </ul>
                                    </article>
                                </div>
                                <div class="col-md-6 col-lg-12 col-xl-6">
                                    <!-- Product classic 2-->
                                    <article class="product-classic product-classic-2">
                                        <h4 class="product-classic-title"><a href="single-property.html">3782
                                                Broadway St, San Francisco</a></h4>
                                        <div class="product-classic-media">
                                            <div class="owl-carousel" data-items="1" data-nav="true"
                                                data-stage-padding="0" data-loop="true" data-margin="0"
                                                data-mouse-drag="false"><img
                                                    src="{{asset('public/frontend')}}/images/featured-properties-29-480x287.jpg" alt=""
                                                    width="480" height="287" /><img
                                                    src="{{asset('public/frontend')}}/images/featured-properties-30-480x287.jpg" alt=""
                                                    width="480" height="287" /><img
                                                    src="{{asset('public/frontend')}}/images/featured-properties-31-480x287.jpg" alt=""
                                                    width="480" height="287" /><img
                                                    src="{{asset('public/frontend')}}/images/featured-properties-32-480x287.jpg" alt=""
                                                    width="480" height="287" />
                                            </div>
                                            <div class="product-classic-price"><span>$3045\mo</span></div>
                                        </div>
                                        <ul class="product-classic-list">
                                            <li><span class="icon hotel-icon-10"></span><span>2 Bathrooms</span>
                                            </li>
                                            <li><span class="icon hotel-icon-05"></span><span>1 Bedroom</span></li>
                                            <li><span class="icon mdi mdi-vector-square"></span><span>564 Sq
                                                    Ft</span></li>
                                            <li><span class="icon hotel-icon-26"></span><span>1 Garage</span></li>
                                        </ul>
                                    </article>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <ul class="pagination-custom">
                                <li><a class="active" href="#">1</a></li>
                                <li><a href="#">2</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-xl-4">
                    <!-- include ../components/_agent-sidebar-right-->
                    <div class="row row-50">
                        <div class="col-md-6 col-lg-12">
                            <div class="google-map-container"
                                data-center="9870 St Vincent Place, Glasgow, DC 45 Fr 45."
                                data-icon="{{asset('public/frontend')}}/images/gmap_marker_mini.png"
                                data-icon-active="{{asset('public/frontend')}}/images/gmap_marker_mini_active.png"
                                data-styles="[{&quot;featureType&quot;:&quot;water&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#e9e9e9&quot;},{&quot;lightness&quot;:17}]},{&quot;featureType&quot;:&quot;landscape&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#f5f5f5&quot;},{&quot;lightness&quot;:20}]},{&quot;featureType&quot;:&quot;road.highway&quot;,&quot;elementType&quot;:&quot;geometry.fill&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#ffffff&quot;},{&quot;lightness&quot;:17}]},{&quot;featureType&quot;:&quot;road.highway&quot;,&quot;elementType&quot;:&quot;geometry.stroke&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#ffffff&quot;},{&quot;lightness&quot;:29},{&quot;weight&quot;:0.2}]},{&quot;featureType&quot;:&quot;road.arterial&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#ffffff&quot;},{&quot;lightness&quot;:18}]},{&quot;featureType&quot;:&quot;road.local&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#ffffff&quot;},{&quot;lightness&quot;:16}]},{&quot;featureType&quot;:&quot;poi&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#f5f5f5&quot;},{&quot;lightness&quot;:21}]},{&quot;featureType&quot;:&quot;poi.park&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#dedede&quot;},{&quot;lightness&quot;:21}]},{&quot;elementType&quot;:&quot;labels.text.stroke&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;on&quot;},{&quot;color&quot;:&quot;#ffffff&quot;},{&quot;lightness&quot;:16}]},{&quot;elementType&quot;:&quot;labels.text.fill&quot;,&quot;stylers&quot;:[{&quot;saturation&quot;:36},{&quot;color&quot;:&quot;#333333&quot;},{&quot;lightness&quot;:40}]},{&quot;elementType&quot;:&quot;labels.icon&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;transit&quot;,&quot;elementType&quot;:&quot;geometry&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#f2f2f2&quot;},{&quot;lightness&quot;:19}]},{&quot;featureType&quot;:&quot;administrative&quot;,&quot;elementType&quot;:&quot;geometry.fill&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#fefefe&quot;},{&quot;lightness&quot;:20}]},{&quot;featureType&quot;:&quot;administrative&quot;,&quot;elementType&quot;:&quot;geometry.stroke&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#fefefe&quot;},{&quot;lightness&quot;:17},{&quot;weight&quot;:1.2}]}]"
                                data-zoom="5">
                                <div class="google-map google-map-2"></div>
                                <ul class="google-map-markers">
                                    <li data-location="9870 St Vincent Place, Glasgow"
                                        data-description="9870 St Vincent Place, Glasgow, DC 45 Fr 45."></li>
                                    <li data-location="Buchanan galleries 220 Buchanan St Glasgow G1 2FF"
                                        data-description="Buchanan galleries 220 Buchanan St Glasgow G1 2FF"></li>
                                    <li data-location="178-158 Argyle St Glasgow G2 8BT"
                                        data-description="178-158 Argyle St Glasgow G2 8BT"></li>
                                    <li data-location="Unnamed Road Glasgow G1 5QN"
                                        data-description="Unnamed Road Glasgow G1 5QN"></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-12">
                            <article class="block-callboard">
                                <div class="block-callboard-body">
                                    <h3 class="block-callboard-title">Get a Free Consultation</h3>
                                    <div class="block-callboard-divider"></div>
                                    <div class="block-callboard-text">
                                        <p>If you have any questions, just call or email us, and we will answer you
                                            shortly.</p>
                                    </div>
                                    <ul class="block-callboard-list">
                                        <li>
                                            <div class="block-callboard-tell"><a href="tel:#">+ 123 098 890 76
                                                    56</a></div>
                                        </li>
                                        <li>
                                            <div class="block-callboard-mail"><a
                                                    href="mailto:#">mail@demolink.org</a></div>
                                        </li>
                                    </ul><a class="button button-block button-secondary"
                                        href="contact-us.html">Contact us</a>
                                </div>
                            </article>
                        </div>
                        <div class="col-md-6 col-lg-12">
                            <div class="block-info bg-default">
                                <h3>Mortgage Calculator</h3>
                                <form class="rd-mailform form-select" method="POST" action="{{ route('mortgage.store') }}">
                                    @csrf
                                    <div class="form-wrap">
                                        <input class="form-input" id="contact-1-name" type="number" step="0.01" name="home_value" required>
                                        <label class="form-label" for="contact-1-name">Home Value</label>
                                    </div>
                                    <div class="form-wrap form-wrap-validation">
                                        <select class="form-input select-filter" name="loan_amount" required>
                                            <option value="">Loan Amount</option>
                                            <option value="50000">50,000</option>
                                            <option value="100000">100,000</option>
                                            <option value="200000">200,000</option>
                                            <option value="500000">500,000</option>
                                            <option value="1000000">1,000,000</option>
                                            <option value="1500000">1,500,000</option>
                                        </select>
                                    </div>
                                    <div class="form-wrap form-wrap-validation">
                                        <select class="form-input select-filter" name="term_years" required>
                                            <option value="">Term (Years)</option>
                                            <option value="10">10</option>
                                            <option value="15">15</option>
                                            <option value="20">20</option>
                                            <option value="25">25</option>
                                            <option value="30">30</option>
                                            <option value="40">40</option>
                                        </select>
                                    </div>
                                    <div class="form-wrap form-wrap-validation">
                                        <select class="form-input select-filter" name="interest_rate" required>
                                            <option value="">Interest Rate (%)</option>
                                            <option value="0.1">0.1%</option>
                                            <option value="0.3">0.3%</option>
                                            <option value="0.5">0.5%</option>
                                            <option value="0.7">0.7%</option>
                                            <option value="0.9">0.9%</option>
                                            <option value="1.0">1.0%</option>
                                        </select>
                                    </div>
                                    <div class="form-button">
                                        <button class="button button-block button-secondary" type="submit">Calculate</button>
                                    </div>
                                </form>
                            
                                @if(session('mortgage'))
                                    <div class="mt-4">
                                        <h3>Calculation Results:</h3>
                                        <ul>
                                            <li>Financed Amount: ${{ number_format(session('mortgage')->financed_amount, 2) }}</li>
                                            <li>Mortgage Payments: ${{ number_format(session('mortgage')->mortgage_payments, 2) }} / month</li>
                                            <li>Annual Cost of Loan: ${{ number_format(session('mortgage')->annual_cost_of_loan, 2) }}</li>
                                        </ul>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-frontend-layout>