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
    
   
@endsection
