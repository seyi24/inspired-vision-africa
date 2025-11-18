@extends('layouts.app')

@section('content')
   
    <section class="pq-contactus-page">
        <div class="pq-contact-page-3">
            <div class="container">

                <div class="pq-contact-section-wrapper">
                    <div class="pq-contact-box-div wow fadeInLeft " style="background: linear-gradient(135deg, #ff3a00, #ffc000);">
                        <div class="pq-contact-left-box" > 
                            <div class="pq-contact-box pt-2">
                                <div class="pq-contact-box-icon-div">
                                    <i aria-hidden="true" class=" flaticon-phone-call"></i>
                                </div>
                                <div class="pq-contact-box-description">
                                    <h3 class="pq-contect-box-description-title">
                                        Call/Chat Us
                                    </h3>
                                    <a href="https://wa.me/2250797090846" class="pq-contact-number">
                                        +225 07 97 09 0846
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
                                    <a href="mailto:inspiredvisionafrica@gmail.com" class="pq-contact-email">
                                        inspiredvisionafrica@gmail.com
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
                            @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <form action="{{ route('contact.submit') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="pq-form-input-div">
                                            <input type="text" name="name" placeholder="Your Name" required
                                                value="{{ old('name') }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="pq-form-input-div">
                                            <input type="email" name="email" placeholder="Your Email" required
                                                value="{{ old('email') }}">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="pq-form-input-div">
                                            <input type="text" name="subject" placeholder="Subject" required
                                                value="{{ old('subject') }}">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="pq-form-input-div">
                                            <textarea name="message" cols="30" rows="10" placeholder="Your Message" required>{{ old('message') }}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="pq-btn-container">
                                            <button type="submit" class="pq-button pq-button-flat">
                                                <span>send message</span>
                                                <svg class="svg" height="100%" width="100%" viewBox="0 0 100 100"
                                                    preserveAspectRatio="none">
                                                    <path d="M0 0 H 100 V 100 H 00 Z" fill="transparent" stroke="black"
                                                        vector-effect="non-scaling-stroke" stroke-dasharray="400"></path>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
