@extends('layouts.app')

@section('content')
    <section class="pq-breadcrumb-style-1 wow fadeIn">
        <div class="container-fluid">
            <div class="pq-breadcrumb">
                <h1 class="pq-breadcrumb-title text-center"></h1>
                {{-- <img src="images/stander/breadcrumb/portfolio_img_010-600x650.webp" alt=""> --}}
            </div>
        </div>
    </section>

    <section class="pq-gallery-section">
        <div class="container">
            <div class="pq-section-title text-center">
                <div class="pq-title">
                    <h5 class="pq-title-heading">HIGHLIGHTS FROM AN EPIC EVENT
                        <span class="pq-title-last-word"> GALLERY
                            <svg class="svg" height="100%" width="100%" viewBox="0 0 100 100" preserveAspectRatio="none">
                                <path d="M0 0 H 100 V 100 H 0 Z" fill="transparent" stroke="black"
                                    vector-effect="non-scaling-stroke" stroke-dasharray="400">
                                </path>
                            </svg>
                            <span class="pq-svg-dot"></span>
                        </span>
                    </h5>
                </div>
            </div>
            <div class="pq-image-gallery-block ">
                <div class="gallery wow fadeInUp">
                    {{-- <div class="pq-gallry-image-left-wrapper"> --}}
                    <div>
                        <a href="images/gallery/image_gallery_002.webp"><img src="images/gallery/image_gallery_002.webp"
                                alt="">
                        </a>
                    </div>
                    <div>
                        <iframe width="440" height="290" src="https://www.youtube.com/embed/Xbu4fP2ZH_o"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; 
                            encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen>
                        </iframe>
                    </div>

                    <div>
                        <a href="images/gallery/image_gallery_003.webp"><img src="images/gallery/image_gallery_003.webp"
                                alt=""></a>
                    </div>
                    <div>
                        <a href="images/gallery/image_gallery_003.webp"><img src="images/gallery/image_gallery_003.webp"
                                alt=""></a>
                    </div>
                    {{-- </div> --}}
                    {{-- <div class="pq-gallry-image-center-wrapper">
                        <div class="pq-gallery-image-div">
                            <a href="images/gallery/image_gallery_001.webp"><img src="images/gallery/image_gallery_001.webp" alt=""></a>
                        </div>                         
                    </div> --}}
                    {{-- <div class="pq-gallry-image-right-wrapper">
                        <div class="pq-gallery-image-div">
                            <a href="images/gallery/image_gallery_004.webp"><img src="images/gallery/image_gallery_004.webp" alt=""></a>
                        </div>
                         <div class="pq-gallery-image-div">
                            <a href="images/gallery/image_gallery_005.webp"><img src="images/gallery/image_gallery_005.webp" alt=""></a>
                         </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </section>
    
    <section class="pq-blog-section">
        <div class="container ">
            <div class="row">
                <div class="col-lg-5 col-sm-12 pe-0 pe-lg-5">
                    <div class="pq-blog-left-side wow fadeInLeft">
                        <div class="pq-section-title">
                            <div class="pq-title">
                                <h5 class="pq-title-heading">check latest
                                    <span class="pq-title-last-word"> news
                                        <svg class="svg" height="100%" width="100%" viewBox="0 0 100 100"
                                            preserveAspectRatio="none">
                                            <path d="M0 0 H 100 V 100 H 0 Z" fill="transparent" stroke="black"
                                                vector-effect="non-scaling-stroke" stroke-dasharray="400">
                                            </path>
                                        </svg>
                                        <span class="pq-svg-dot"></span>
                                    </span>
                                </h5>
                                <p class="pq-title-description">Check latest news for event updates, schedule changes,
                                    important announcements, and all the essential details you need to know.</p>
                            </div>
                        </div>
                        <div class="pq-btn-container">
                            <a href="#" class="pq-button pq-button-flat">
                                <span>GET IN TOUCH</span>
                                <svg class="svg" height="100%" width="100%" viewBox="0 0 100 100"
                                    preserveAspectRatio="none">
                                    <path d="M0 0 H 100 V 100 H 00 Z" fill="transparent" stroke="black"
                                        vector-effect="non-scaling-stroke" stroke-dasharray="400"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-sm-12">
                    <div class="pq-blog-1-list wow fadeInRight">
                        <div class="pq-blog-post pq-list pq-item-list pq-active">
                            <div class="pq-blog-contain">
                                <div class="pq-post-category">
                                    <a href="blog-details.html">Accessibility</a>
                                </div>
                                <h5 class="pq-blog-title"><a href="blog-details.html">Dive
                                        Into Workshops, Keynotes, and Networking at Fest</a></h5>
                            </div>
                            <div class="pq-post-media">
                                <img decoding="async" src="images/page1/blog/blog-image-1.webp" alt="img">
                            </div>
                        </div>
                        <div class="pq-blog-post pq-list pq-item-list">
                            <div class="pq-blog-contain">
                                <div class="pq-post-category">
                                    <a href="blog-details.html">Creativity</a>
                                </div>
                                <h5 class="pq-blog-title"><a href="blog-details.html">Join
                                        Industry Leaders for Three Days of Innovation</a></h5>
                            </div>
                            <div class="pq-post-media">
                                <img decoding="async" src="images/page1/blog/blog-image-2.webp" alt="img">
                            </div>
                        </div>
                        <div class="pq-blog-post pq-list pq-item-list">
                            <div class="pq-blog-contain">
                                <div class="pq-post-category">
                                    <a href="blog-details.html">Storytelling</a>
                                </div>
                                <h5 class="pq-blog-title"><a href="blog-details.html">Step Into
                                        the World of Technology and Innovation</a></h5>
                            </div>
                            <div class="pq-post-media">
                                <img decoding="async" src="images/page1/blog/blog-image-3.webp" alt="img">
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
