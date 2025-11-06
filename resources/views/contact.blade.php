@extends('layouts.app')

@section('content')
    <section class="pq-breadcrumb-style-1 wow fadeIn">
        <div class="container-fluid">
            <div class="pq-breadcrumb">
                <h1 class="pq-breadcrumb-title text-center">Contact Us</h1>
                {{-- <img src="images/stander/breadcrumb/portfolio_img_010-600x650.webp" alt="img"> --}}
            </div>
        </div>
    </section>
    <section class="pq-contactus-page">
        <div class="pq-contact-page-3">
            <div class="container">

                <div class="pq-contact-section-wrapper">
                    <div class="pq-contact-box-div wow fadeInLeft ">
                        <div class="pq-contact-left-box">
                            <div class="pq-contact-box pt-2">
                                <div class="pq-contact-box-icon-div">
                                    <i aria-hidden="true" class=" flaticon-phone-call"></i>
                                </div>
                                <div class="pq-contact-box-description">
                                    <h3 class="pq-contect-box-description-title">
                                        Call Us
                                    </h3>
                                    <a href="#" class="pq-contact-number">
                                        +225 unavailable
                                    </a>
                                </div>
                            </div>
                            <div class="pq-contact-box">
                                <div class="pq-contact-box-icon-div">
                                    <i aria-hidden="true" class="  flaticon-email-1"></i>
                                </div>
                                <div class="pq-contact-box-description">
                                    <h3 class="pq-contect-box-description-title">
                                        Write To Us
                                    </h3>
                                    <a href="#" class="pq-contact-email">
                                        Info@inspirvisionafrica.com
                                    </a>
                                </div>
                            </div>
                            <div class="pq-image-box-div">
                                <img src="images/contact/callus.png" alt="img">
                            </div>
                        </div>
                    </div>
                    <div class="pq-form-wrapper wow fadeInRight  ">
                        <div class="pq-section-title text-left">
                            <div class="pq-title">
                                <h5 class="pq-title-heading">GET IN TOUCH
                                    <span class="pq-title-last-word"> with us
                                        <svg class="svg" height="100%" width="100%" viewBox="0 0 100 100"
                                            preserveAspectRatio="none">
                                            <path d="M0 0 H 100 V 100 H 0 Z" fill="transparent" stroke="black"
                                                vector-effect="non-scaling-stroke" stroke-dasharray="400">
                                            </path>
                                        </svg>
                                        <span class="pq-svg-dot"></span>
                                    </span>
                                </h5>
                            </div>
                        </div>
                        <div class="pq-contact-form">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="pq-form-input-div">
                                        <input type="text" placeholder="Your Name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="pq-form-input-div">
                                        <input type="email" placeholder="Your Email">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="pq-form-input-div">
                                        <input type="tel" placeholder="Phone Number">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="pq-form-input-div">
                                        <input type="text" placeholder="Select Subjct">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="pq-form-input-div">
                                        <textarea cols="30" rows="10" placeholder="Your Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="pq-btn-container">
                                        <a href="#" class="pq-button pq-button-flat">
                                            <span>send message</span>
                                            <svg class="svg" height="100%" width="100%" viewBox="0 0 100 100"
                                                preserveAspectRatio="none">
                                                <path d="M0 0 H 100 V 100 H 00 Z" fill="transparent" stroke="black"
                                                    vector-effect="non-scaling-stroke" stroke-dasharray="400"></path>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
