<div class="popup-modal modal fade" tabindex="-1" id="sg-modal-add">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="d-flex justify-content-end m-1">
                <button type="button" class="btn-close text-right p-0" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body pt-0">
                <div class="row">
                    <div class="col-lg-6">
                        <img src="{{asset('public')}}/images/modal.png" alt="Image" class="img-fluid">
                    </div>
                    <div class="col-lg-6">
                        <h2>Get <span class="text-info">25%</span> Discount</h2>
                        <p>Subscribe to the yoori shop newsletter to receive updates on special offers.</p>
                        <form action="#">
                            <div class="tp-subscribe-input">
                                <input type="email" placeholder="Enter Your Email" class="rounded-0">
                                <button type="submit" class="rounded-0">Subscribe</button>
                            </div>
                        </form>
                        <div class="tp-footer-social text-center my-4">
                            <a href="#" class="rounded-0"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="#" class="rounded-0"><i class="fa-brands fa-twitter"></i></a>
                            <a href="#" class="rounded-0"><i class="fa-brands fa-linkedin-in"></i></a>
                            <a href="#" class="rounded-0"><i class="fa-brands fa-vimeo-v"></i></a>
                        </div>
                        <div class="form-group text-center">
                            <input type="checkbox" name="tnc" id="tnc">
                            <label for="tnc">Don't show this popup again</label>
                        </div>
                    </div>
                </div><!-- /.row -->
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

{{-- <script>
    document.addEventListener('DOMContentLoaded', function() {
        var modal = new bootstrap.Modal(document.getElementById('sg-modal-add'));
        modal.show();
    });
</script> --}}
<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Check if the modal has been shown before using sessionStorage
        if (!sessionStorage.getItem('modalShown')) {
            // Show the modal
            var myModal = new bootstrap.Modal(document.getElementById('sg-modal-add'), {
                backdrop: 'static',
                keyboard: false
            });
            myModal.show();

            // Store the flag in sessionStorage so that it doesn't show again
            sessionStorage.setItem('modalShown', 'true');
        }

        // Handle the "Don't show this popup again" checkbox
        document.getElementById('tnc').addEventListener('change', function () {
            if (this.checked) {
                sessionStorage.setItem('modalShown', 'true');
                myModal.hide();
            }
        });
    });
</script>


















<!-- PANEL-->
<div class="layout-panel-wrap">
    <div class="layout-panel">
        <button class="layout-panel-toggle" data-multitoggle=".layout-panel-wrap"
            data-scope=".layout-panel-wrap"><span></span></button>
        <div class="layout-panel-content scroll-wrap">
            <div class="layout-panel-inner isotope-wrap">
                <div class="layout-panel-header"><a
                        class="button button-sm button-icon button-secondary button-winona button-block button-icon-left"
                        href="https://www.templatemonster.com/website-templates/real-estate-multipurpose-html5-website-template-73337.html"
                        target="_blank"><span class="icon mdi mdi-cart"></span>Buy template</a>
                    <div class="layout-panel-element">
                        <div class="brand"> <a class="brand" href="index.html"><img class="brand-logo-dark"
                                    src="images/logo-default-121x61.png" alt="" width="121" height="61"
                                    srcset="images/logo-default-242x122.png 2x" /><img class="brand-logo-light"
                                    src="images/logo-inverse-121x61.png" alt="" width="121" height="61"
                                    srcset="images/logo-inverse-242x122.png 2x" /></a>
                        </div>
                    </div>
                    <!-- Isotope Content-->
                </div>
                <div class="layout-panel-main isotope-wrap">
                    <div class="isotope" data-isotope-layout="masonry">
                        <div class="isotope-item"><a class="thumbnail-small" href="real-estate-1.html">
                                <div class="thumbnail-small-image"
                                    style="background-image: url(images/layout-panel/real-estate-1.jpg);"></div>
                                <div class="thumbnail-small-hover-media">
                                    <div class="thumbnail-small-hover-image"
                                        style="background-image: url(images/layout-panel/real-estate-1.jpg);"></div>
                                </div>
                                <div class="thumbnail-small-caption">
                                    <p class="thumbnail-small-header">Real Estate 1</p>
                                </div>
                            </a>
                        </div>
                        <div class="isotope-item"><a class="thumbnail-small" href="real-estate-2.html">
                                <div class="thumbnail-small-image"
                                    style="background-image: url(images/layout-panel/real-estate-2.jpg);"></div>
                                <div class="thumbnail-small-hover-media">
                                    <div class="thumbnail-small-hover-image"
                                        style="background-image: url(images/layout-panel/real-estate-2.jpg);"></div>
                                </div>
                                <div class="thumbnail-small-caption">
                                    <p class="thumbnail-small-header">Real Estate 2</p>
                                </div>
                            </a>
                        </div>
                        <div class="isotope-item"><a class="thumbnail-small" href="real-estate-3.html">
                                <div class="thumbnail-small-image"
                                    style="background-image: url(images/layout-panel/real-estate-3.jpg);"></div>
                                <div class="thumbnail-small-hover-media">
                                    <div class="thumbnail-small-hover-image"
                                        style="background-image: url(images/layout-panel/real-estate-3.jpg);"></div>
                                </div>
                                <div class="thumbnail-small-caption">
                                    <p class="thumbnail-small-header">Real Estate 3</p>
                                </div>
                            </a>
                        </div>
                        <div class="isotope-item"><a class="thumbnail-small" href="about-us.html">
                                <div class="thumbnail-small-image"
                                    style="background-image: url(images/layout-panel/about-us.jpg);"></div>
                                <div class="thumbnail-small-hover-media">
                                    <div class="thumbnail-small-hover-image"
                                        style="background-image: url(images/layout-panel/about-us.jpg);"></div>
                                </div>
                                <div class="thumbnail-small-caption">
                                    <p class="thumbnail-small-header">About Us</p>
                                </div>
                            </a>
                        </div>
                        <div class="isotope-item"><a class="thumbnail-small" href="properties-grid.html">
                                <div class="thumbnail-small-image"
                                    style="background-image: url(images/layout-panel/properties-grid.jpg);"></div>
                                <div class="thumbnail-small-hover-media">
                                    <div class="thumbnail-small-hover-image"
                                        style="background-image: url(images/layout-panel/properties-grid.jpg);">
                                    </div>
                                </div>
                                <div class="thumbnail-small-caption">
                                    <p class="thumbnail-small-header">Properties Grid</p>
                                </div>
                            </a>
                        </div>
                        <div class="isotope-item"><a class="thumbnail-small" href="properties-grid-2.html">
                                <div class="thumbnail-small-image"
                                    style="background-image: url(images/layout-panel/properties-grid-2.jpg);"></div>
                                <div class="thumbnail-small-hover-media">
                                    <div class="thumbnail-small-hover-image"
                                        style="background-image: url(images/layout-panel/properties-grid-2.jpg);">
                                    </div>
                                </div>
                                <div class="thumbnail-small-caption">
                                    <p class="thumbnail-small-header">Properties Grid 2</p>
                                </div>
                            </a>
                        </div>
                        <div class="isotope-item"><a class="thumbnail-small" href="properties-list.html">
                                <div class="thumbnail-small-image"
                                    style="background-image: url(images/layout-panel/properties-list.jpg);"></div>
                                <div class="thumbnail-small-hover-media">
                                    <div class="thumbnail-small-hover-image"
                                        style="background-image: url(images/layout-panel/properties-list.jpg);">
                                    </div>
                                </div>
                                <div class="thumbnail-small-caption">
                                    <p class="thumbnail-small-header">Properties List</p>
                                </div>
                            </a>
                        </div>
                        <div class="isotope-item"><a class="thumbnail-small" href="single-property.html">
                                <div class="thumbnail-small-image"
                                    style="background-image: url(images/layout-panel/single-property.jpg);"></div>
                                <div class="thumbnail-small-hover-media">
                                    <div class="thumbnail-small-hover-image"
                                        style="background-image: url(images/layout-panel/single-property.jpg);">
                                    </div>
                                </div>
                                <div class="thumbnail-small-caption">
                                    <p class="thumbnail-small-header">Single Property</p>
                                </div>
                            </a>
                        </div>
                        <div class="isotope-item"><a class="thumbnail-small" href="submit-property.html">
                                <div class="thumbnail-small-image"
                                    style="background-image: url(images/layout-panel/submit-property.jpg);"></div>
                                <div class="thumbnail-small-hover-media">
                                    <div class="thumbnail-small-hover-image"
                                        style="background-image: url(images/layout-panel/submit-property.jpg);">
                                    </div>
                                </div>
                                <div class="thumbnail-small-caption">
                                    <p class="thumbnail-small-header">Submit Property</p>
                                </div>
                            </a>
                        </div>
                        <div class="isotope-item"><a class="thumbnail-small" href="blog.html">
                                <div class="thumbnail-small-image"
                                    style="background-image: url(images/layout-panel/blog.jpg);"></div>
                                <div class="thumbnail-small-hover-media">
                                    <div class="thumbnail-small-hover-image"
                                        style="background-image: url(images/layout-panel/blog.jpg);"></div>
                                </div>
                                <div class="thumbnail-small-caption">
                                    <p class="thumbnail-small-header">Blog</p>
                                </div>
                            </a>
                        </div>
                        <div class="isotope-item"><a class="thumbnail-small" href="blog-post.html">
                                <div class="thumbnail-small-image"
                                    style="background-image: url(images/layout-panel/blog-post.jpg);"></div>
                                <div class="thumbnail-small-hover-media">
                                    <div class="thumbnail-small-hover-image"
                                        style="background-image: url(images/layout-panel/blog-post.jpg);"></div>
                                </div>
                                <div class="thumbnail-small-caption">
                                    <p class="thumbnail-small-header">Blog post</p>
                                </div>
                            </a>
                        </div>
                        <div class="isotope-item"><a class="thumbnail-small" href="agents.html">
                                <div class="thumbnail-small-image"
                                    style="background-image: url(images/layout-panel/agents.jpg);"></div>
                                <div class="thumbnail-small-hover-media">
                                    <div class="thumbnail-small-hover-image"
                                        style="background-image: url(images/layout-panel/agents.jpg);"></div>
                                </div>
                                <div class="thumbnail-small-caption">
                                    <p class="thumbnail-small-header">Agents</p>
                                </div>
                            </a>
                        </div>
                        <div class="isotope-item"><a class="thumbnail-small" href="agents-2.html">
                                <div class="thumbnail-small-image"
                                    style="background-image: url(images/layout-panel/agents-2.jpg);"></div>
                                <div class="thumbnail-small-hover-media">
                                    <div class="thumbnail-small-hover-image"
                                        style="background-image: url(images/layout-panel/agents-2.jpg);"></div>
                                </div>
                                <div class="thumbnail-small-caption">
                                    <p class="thumbnail-small-header">Agents 2</p>
                                </div>
                            </a>
                        </div>
                        <div class="isotope-item"><a class="thumbnail-small" href="agent-single-page.html">
                                <div class="thumbnail-small-image"
                                    style="background-image: url(images/layout-panel/agent-single-page.jpg);"></div>
                                <div class="thumbnail-small-hover-media">
                                    <div class="thumbnail-small-hover-image"
                                        style="background-image: url(images/layout-panel/agent-single-page.jpg);">
                                    </div>
                                </div>
                                <div class="thumbnail-small-caption">
                                    <p class="thumbnail-small-header">Agent Single Page</p>
                                </div>
                            </a>
                        </div>
                        <div class="isotope-item"><a class="thumbnail-small" href="testimonials.html">
                                <div class="thumbnail-small-image"
                                    style="background-image: url(images/layout-panel/testimonials.jpg);"></div>
                                <div class="thumbnail-small-hover-media">
                                    <div class="thumbnail-small-hover-image"
                                        style="background-image: url(images/layout-panel/testimonials.jpg);"></div>
                                </div>
                                <div class="thumbnail-small-caption">
                                    <p class="thumbnail-small-header">Testimonials</p>
                                </div>
                            </a>
                        </div>
                        <div class="isotope-item"><a class="thumbnail-small" href="careers.html">
                                <div class="thumbnail-small-image"
                                    style="background-image: url(images/layout-panel/careers.jpg);"></div>
                                <div class="thumbnail-small-hover-media">
                                    <div class="thumbnail-small-hover-image"
                                        style="background-image: url(images/layout-panel/careers.jpg);"></div>
                                </div>
                                <div class="thumbnail-small-caption">
                                    <p class="thumbnail-small-header">Careers</p>
                                </div>
                            </a>
                        </div>
                        <div class="isotope-item"><a class="thumbnail-small" href="faq.html">
                                <div class="thumbnail-small-image"
                                    style="background-image: url(images/layout-panel/faq.jpg);"></div>
                                <div class="thumbnail-small-hover-media">
                                    <div class="thumbnail-small-hover-image"
                                        style="background-image: url(images/layout-panel/faq.jpg);"></div>
                                </div>
                                <div class="thumbnail-small-caption">
                                    <p class="thumbnail-small-header">FAQ</p>
                                </div>
                            </a>
                        </div>
                        <div class="isotope-item"><a class="thumbnail-small" href="gallery-grid.html">
                                <div class="thumbnail-small-image"
                                    style="background-image: url(images/layout-panel/gallery-grid.jpg);"></div>
                                <div class="thumbnail-small-hover-media">
                                    <div class="thumbnail-small-hover-image"
                                        style="background-image: url(images/layout-panel/gallery-grid.jpg);"></div>
                                </div>
                                <div class="thumbnail-small-caption">
                                    <p class="thumbnail-small-header">Gallery Grid</p>
                                </div>
                            </a>
                        </div>
                        <div class="isotope-item"><a class="thumbnail-small" href="search-results.html">
                                <div class="thumbnail-small-image"
                                    style="background-image: url(images/layout-panel/search-results.jpg);"></div>
                                <div class="thumbnail-small-hover-media">
                                    <div class="thumbnail-small-hover-image"
                                        style="background-image: url(images/layout-panel/search-results.jpg);">
                                    </div>
                                </div>
                                <div class="thumbnail-small-caption">
                                    <p class="thumbnail-small-header">Search results</p>
                                </div>
                            </a>
                        </div>
                        <div class="isotope-item"><a class="thumbnail-small" href="search-results-2.html">
                                <div class="thumbnail-small-image"
                                    style="background-image: url(images/layout-panel/search-results-2.jpg);"></div>
                                <div class="thumbnail-small-hover-media">
                                    <div class="thumbnail-small-hover-image"
                                        style="background-image: url(images/layout-panel/search-results-2.jpg);">
                                    </div>
                                </div>
                                <div class="thumbnail-small-caption">
                                    <p class="thumbnail-small-header">Search results 2</p>
                                </div>
                            </a>
                        </div>
                        <div class="isotope-item"><a class="thumbnail-small" href="contact-us.html">
                                <div class="thumbnail-small-image"
                                    style="background-image: url(images/layout-panel/contact-us.jpg);"></div>
                                <div class="thumbnail-small-hover-media">
                                    <div class="thumbnail-small-hover-image"
                                        style="background-image: url(images/layout-panel/contact-us.jpg);"></div>
                                </div>
                                <div class="thumbnail-small-caption">
                                    <p class="thumbnail-small-header">Contact Us</p>
                                </div>
                            </a>
                        </div>
                        <div class="isotope-item"><a class="thumbnail-small" href="coming-soon.html">
                                <div class="thumbnail-small-image"
                                    style="background-image: url(images/layout-panel/coming-soon.jpg);"></div>
                                <div class="thumbnail-small-hover-media">
                                    <div class="thumbnail-small-hover-image"
                                        style="background-image: url(images/layout-panel/coming-soon.jpg);"></div>
                                </div>
                                <div class="thumbnail-small-caption">
                                    <p class="thumbnail-small-header">Coming Soon</p>
                                </div>
                            </a>
                        </div>
                        <div class="isotope-item"><a class="thumbnail-small" href="maintenance.html">
                                <div class="thumbnail-small-image"
                                    style="background-image: url(images/layout-panel/maintenance.jpg);"></div>
                                <div class="thumbnail-small-hover-media">
                                    <div class="thumbnail-small-hover-image"
                                        style="background-image: url(images/layout-panel/maintenance.jpg);"></div>
                                </div>
                                <div class="thumbnail-small-caption">
                                    <p class="thumbnail-small-header">Maintenance</p>
                                </div>
                            </a>
                        </div>
                        <div class="isotope-item"><a class="thumbnail-small" href="503.html">
                                <div class="thumbnail-small-image"
                                    style="background-image: url(images/layout-panel/503.jpg);"></div>
                                <div class="thumbnail-small-hover-media">
                                    <div class="thumbnail-small-hover-image"
                                        style="background-image: url(images/layout-panel/503.jpg);"></div>
                                </div>
                                <div class="thumbnail-small-caption">
                                    <p class="thumbnail-small-header">503</p>
                                </div>
                            </a>
                        </div>
                        <div class="isotope-item"><a class="thumbnail-small" href="404.html">
                                <div class="thumbnail-small-image"
                                    style="background-image: url(images/layout-panel/404.jpg);"></div>
                                <div class="thumbnail-small-hover-media">
                                    <div class="thumbnail-small-hover-image"
                                        style="background-image: url(images/layout-panel/404.jpg);"></div>
                                </div>
                                <div class="thumbnail-small-caption">
                                    <p class="thumbnail-small-header">404</p>
                                </div>
                            </a>
                        </div>
                        <div class="isotope-item"><a class="thumbnail-small" href="privacy-policy.html">
                                <div class="thumbnail-small-image"
                                    style="background-image: url(images/layout-panel/privacy-policy.jpg);"></div>
                                <div class="thumbnail-small-hover-media">
                                    <div class="thumbnail-small-hover-image"
                                        style="background-image: url(images/layout-panel/privacy-policy.jpg);">
                                    </div>
                                </div>
                                <div class="thumbnail-small-caption">
                                    <p class="thumbnail-small-header">Privacy Policy</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Global Mailform Output -->
<div class="snackbars" id="form-output-global"></div>