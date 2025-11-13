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
            <h5 class="pq-title-heading">
               HIGHLIGHTS FROM AN EPIC EVENT
               <span class="pq-title-last-word">
                  GALLERY
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
      <div class="pq-image-gallery-block ">
         <div class="gallery wow fadeInUp">
             <div>
               <img src="images/gallery/greatness.jpg" alt="">
            </div>
            <div>
               <img src="images/gallery/nov.jpg" alt="">
            </div>
            <div>
               <img src="images/gallery/startingline.jpg" alt="">
            </div>
            <div>
               <img src="images/gallery/skill.jpg" alt="">
            </div>
            <div class="pq-gallery-image-div">
               <img src="images/gallery/confidence.jpg" alt="">
            </div>
            {{-- 
            <div>
               <iframe width="440" height="290" src="https://www.youtube.com/embed/Xbu4fP2ZH_o"
                  title="YouTube video player" frameborder="0"
                  allow="accelerometer; autoplay; clipboard-write; 
                  encrypted-media; gyroscope; picture-in-picture; web-share"
                  allowfullscreen>
               </iframe>
            </div>
            --}}
            <div>
               <img src="images/gallery/dream.jpg" alt="">
            </div>
            <div>
               <img src="images/gallery/success.jpg" alt="">
            </div>
            <div>
               <img src="images/gallery/gifted.jpg" alt="">
            </div>
         </div>
      </div>
   </div>
</section>
@endsection