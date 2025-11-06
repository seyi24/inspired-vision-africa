@extends('layouts.app')

@section('content')
    {{-- <section class="pq-breadcrumb-style-1 wow fadeIn">
        <div class="container-fluid">
            <div class="pq-breadcrumb">
                <h1 class="pq-breadcrumb-title text-center">IMAGE GALLERY</h1>
                <img src="images/stander/breadcrumb/portfolio_img_010-600x650.webp" alt="">
            </div>
        </div>
    </section> --}}

    <section class="pq-gallery-section">
        <div class="container">
            <div class="pq-section-title text-center">
                <div class="pq-title">
                    <h5 class="pq-title-heading">HIGHLIGHTS FROM AN EPIC EVENT
                        <span class="pq-title-last-word"> JOURNEY
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
            <div class="pq-image-gallery-block">
                <div class="gallery wow fadeInUp">
                    {{-- <div class="pq-gallry-image-left-wrapper"> --}}
                    <div class="pq-gallery-image-div">
                        <a href="images/gallery/image_gallery_002.webp"><img src="images/gallery/image_gallery_002.webp"
                                alt="">
                        </a>
                    </div>
                    <div class="pq-gallery-image-div">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/Xbu4fP2ZH_o"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; 
                            encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen>
                        </iframe>
                    </div>

                    <div class="pq-gallery-image-div">
                        <a href="images/gallery/image_gallery_003.webp"><img src="images/gallery/image_gallery_003.webp"
                                alt=""></a>
                    </div>
                    <div class="pq-gallery-image-div">
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
    <section class="pq-speaker-team-section">
        <div class="container">
            <div class="pq-section-title text-center">
                <div class="pq-title">
                    <h5 class="pq-title-heading text-center">meet our best
                        <span class="pq-title-last-word">speaker
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
            <div class="pq-team-2-list wow fadeInUp text-left">
                <div class="pq-team pq-style-2 pq-item-list">
                    <div class="pq-team-info">
                        <h5 class="pq-member-name">Christian Grant</h5>
                        <span class="pq-team-designation">design director</span>
                        <div class="pq-team-media">
                            <img decoding="async" src="images/page2/team/team_002.webp" alt="team-image">
                        </div>
                    </div>
                </div>
                <div class="pq-team pq-style-2 pq-item-list">
                    <div class="pq-team-info">
                        <h5 class="pq-member-name">Andrew Simon</h5>
                        <span class="pq-team-designation">Manager Operator</span>
                        <div class="pq-team-media">
                            <img decoding="async" src="images/page2/team/team_004.webp" alt="team-image">
                        </div>
                    </div>
                </div>
                <div class="pq-team pq-style-2 pq-item-list pq-active">
                    <div class="pq-team-info">
                        <h5 class="pq-member-name">James Milner</h5>

                        <span class="pq-team-designation">founder &amp; ceo</span>
                        <div class="pq-team-media">
                            <img decoding="async" src="images/page2/team/team_005.webp" alt="team-image">
                        </div>
                    </div>
                </div>
                <div class="pq-team pq-style-2 pq-item-list">
                    <div class="pq-team-info">
                        <h5 class="pq-member-name">Devon Lane</h5>
                        <span class="pq-team-designation">system engineer</span>
                        <div class="pq-team-media">
                            <img decoding="async" src="images/page2/team/team_006.webp" alt="team-image">
                        </div>
                    </div>
                </div>
                <div class="pq-team pq-style-2 pq-item-list">
                    <div class="pq-team-info">
                        <h5 class="pq-member-name">Kaylor Navas</h5>
                        <span class="pq-team-designation">chef master</span>
                        <div class="pq-team-media">
                            <img decoding="async" src="images/page2/team/team_008.webp" alt="team-image">
                        </div>
                    </div>
                </div>
                <div class="pq-team pq-style-2 pq-item-list">
                    <div class="pq-team-info">
                        <h5 class="pq-member-name">Carlo Ancelotti</h5>
                        <span class="pq-team-designation">founder &amp; ceo</span>
                        <div class="pq-team-media">
                            <img decoding="async" src="images/page2/team/team_002.webp" alt="team-image">
                        </div>
                    </div>
                </div>
            </div>
            <div class="pq-btn-container text-center ">
                <a href="#" class="pq-button pq-button-flat">
                    <span>BUY TICKETS </span>
                    <svg class="svg" height="100%" width="100%" viewBox="0 0 100 100" preserveAspectRatio="none">
                        <path d="M0 0 H 100 V 100 H 00 Z" fill="transparent" stroke="black"
                            vector-effect="non-scaling-stroke" stroke-dasharray="400"></path>
                    </svg>
                </a>
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
