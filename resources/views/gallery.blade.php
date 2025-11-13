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
                        <img src="images/gallery/greatnessfr.jpg" alt="">
                    </div>
                    <div>
                        <img src="images/gallery/partner.jpg" alt="">
                    </div>
                    <div>
                        <img src="images/gallery/volunteer.jpg" alt="">
                    </div>
                    <div>
                        <img src="images/gallery/startingline.jpg" alt="">
                    </div>
                    <div>
                        <img src="images/gallery/skill.jpg" alt="">
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
                    <div class="pq-gallery-image-div">
                        <img src="images/gallery/confidence.jpg" alt="">
                    </div>
                    <div>
                        <img src="images/gallery/gifted.jpg" alt="">
                    </div>
                    <div>
                        <img src="images/gallery/nov.jpg" alt="">
                    </div>
                    <div>
                        <img src="images/gallery/success.jpg" alt="">
                    </div>
                    <div>
                        <img src="images/gallery/october.jpg" alt="">
                    </div>
                    <div>
                        <img src="images/gallery/mission.jpg" alt="">
                    </div>
                    <div>
                        <img src="images/gallery/vision.jpg" alt="">
                    </div>
                    <div>
                        <img src="images/gallery/introduce.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div id="lightbox" class="lightbox">
            <span class="close">&times;</span>
            <img class="lightbox-content" id="lightbox-img">
        </div>

  <div id="lightbox" class="lightbox">
    <span class="close">&times;</span>
    <img class="lightbox-content" id="lightbox-img">
  </div>

  <script>
    // Get modal elements
    const lightbox = document.getElementById("lightbox");
    const lightboxImg = document.getElementById("lightbox-img");
    const closeBtn = document.querySelector(".close");

    let galleryImages = [];
    let currentIndex = 0;

    // Collect gallery images and attach open handler
    document.querySelectorAll(".gallery img").forEach((img, index) => {
      galleryImages.push(img.src);
      img.dataset.index = index;
      img.addEventListener("click", () => {
        openLightbox(index);
      });
    });

    function openLightbox(index) {
      currentIndex = index;
      lightboxImg.src = galleryImages[currentIndex];
      lightbox.style.display = "block";
      // reset swipe trackers
      startX = null;
      isPointerDown = false;
    }

    // Close modal
    closeBtn.addEventListener("click", () => {
      lightbox.style.display = "none";
    });

    // Close when clicking outside image
    lightbox.addEventListener("click", (e) => {
      if (e.target === lightbox) {
        lightbox.style.display = "none";
      }
    });

    // prevent clicks on image from closing lightbox
    lightboxImg.addEventListener("click", (e) => {
      e.stopPropagation();
    });

    // Navigation functions
    function showIndex(i) {
      currentIndex = (i + galleryImages.length) % galleryImages.length;
      lightboxImg.src = galleryImages[currentIndex];
    }
    function next() { showIndex(currentIndex + 1); }
    function prev() { showIndex(currentIndex - 1); }

    // --- Swipe (touch & pointer) support ---
    let startX = null;
    let currentX = null;
    let isPointerDown = false;
    const SWIPE_THRESHOLD = 50; // pixels

    // Touch events
    lightbox.addEventListener("touchstart", (e) => {
      if (!e.touches || e.touches.length > 1) return;
      startX = e.touches[0].clientX;
      currentX = startX;
    }, { passive: true });

    lightbox.addEventListener("touchmove", (e) => {
      if (!startX || !e.touches || e.touches.length > 1) return;
      currentX = e.touches[0].clientX;
    }, { passive: true });

    lightbox.addEventListener("touchend", (e) => {
      if (startX === null) return;
      const dx = currentX - startX;
      if (Math.abs(dx) > SWIPE_THRESHOLD) {
        if (dx < 0) next(); else prev();
      }
      startX = null;
      currentX = null;
    });

    // Pointer events for mouse drag (desktop)
    lightbox.addEventListener("pointerdown", (e) => {
      // only left button
      if (e.pointerType === "mouse" && e.button !== 0) return;
      isPointerDown = true;
      startX = e.clientX;
      lightbox.setPointerCapture?.(e.pointerId);
    });

    lightbox.addEventListener("pointermove", (e) => {
      if (!isPointerDown) return;
      currentX = e.clientX;
    });

    lightbox.addEventListener("pointerup", (e) => {
      if (!isPointerDown) return;
      const dx = currentX - startX;
      if (Math.abs(dx) > SWIPE_THRESHOLD) {
        if (dx < 0) next(); else prev();
      }
      isPointerDown = false;
      startX = null;
      currentX = null;
      lightbox.releasePointerCapture?.(e.pointerId);
    });

    // Optional: keyboard arrows (left/right) — still no visible arrows
    document.addEventListener("keydown", (e) => {
      if (lightbox.style.display !== "block") return;
      if (e.key === "ArrowRight") next();
      if (e.key === "ArrowLeft") prev();
      if (e.key === "Escape") lightbox.style.display = "none";
    });

  </script>


    </section>
@endsection
