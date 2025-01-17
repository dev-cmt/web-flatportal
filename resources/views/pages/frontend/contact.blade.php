<x-frontend-layout :title="'Contact Us'">
    <!-- Breadcrumbs-->
    <section class="breadcrumbs-custom bg-image context-dark" style="background-image: url({{asset('public/frontend')}}/images/breadcrumbs-bg-07-1920x420.jpg);">
        <div class="container">
            <h2 class="breadcrumbs-custom-title">Contact Us</h2>
        </div>
    </section>
    <section class="section-xs bg-white">
        <div class="container">
            <ul class="breadcrumbs-custom-path">
                <li><a href="{{route('home')}}">Home</a></li>
                <li class="active">Contact Us</li>
            </ul>
        </div>
    </section>
    <div class="divider-section"></div>
    <section class="section section-lg bg-default">
        <div class="container">
            <div class="layout-bordered">
                <div class="layout-bordered-aside">
                    <div class="layout-bordered-aside-inner">
                        <h2>Contact Details</h2>
                        <p>If you have any questions, just fill in the contact form, and we will answer you shortly.
                            If you are living nearby, come visit our office.</p>
                        <div class="layout-bordered-aside-group">
                            <dl class="list-terms-1">
                                <dt>Client Support:</dt>
                                <dd><span class="icon mdi-phone mdi"></span><a class="list-terms-1-link-big" href="tel:#">01909302126</a></dd>
                            </dl>
                            <dl class="list-terms-1">
                                <dt>E-mail:</dt>
                                <dd><span class="icon mdi mdi-email-outline"></span><a href="mailto:#">info@flatportal.org</a></dd>
                            </dl>
                            <dl class="list-terms-1">
                                <dt>Main Office:</dt>
                                <dd><span class="icon mdi mdi-map-marker"></span><a href="#">251/A Tejgaon I/A, Dhaka 1208</a></dd>
                            </dl>
                        </div>
                    </div>
                </div>
                <div class="layout-bordered-main">
                    <div class="layout-bordered-main-inner">
                        <h2>Get in Touch</h2>
                        <!-- RD Mailform-->
                        <form class="rd-form rd-mailform" method="POST" action="{{ route('contact.store') }}">
                            @csrf
                            <div class="row row-20">
                                <div class="col-md-12">
                                    <div class="form-wrap">
                                        <input class="form-input" id="contact-name" type="text" name="name" required>
                                        <label class="form-label" for="contact-name">Your Name</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-wrap">
                                        <input class="form-input" id="contact-email" type="email" name="email" required>
                                        <label class="form-label" for="contact-email">E-mail</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-wrap">
                                        <input class="form-input" id="contact-phone" type="text" name="phone">
                                        <label class="form-label" for="contact-phone">Phone</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-wrap">
                                        <label class="form-label" for="contact-message">Message</label>
                                        <textarea class="form-input" id="contact-message" name="message" required></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <button class="button button-sm button-secondary" type="submit">Send message</button>
                                </div>
                            </div>
                        </form>
                        
                        @if(session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-frontend-layout>