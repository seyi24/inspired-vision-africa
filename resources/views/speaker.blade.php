@extends('layouts.app')
@section('content')
    <section class="pq-breadcrumb-style-1 wow fadeIn">
        <div class="container-fluid">
            <div class="pq-breadcrumb">
                <h1 class="pq-breadcrumb-title text-center"></h1>
            </div>
        </div>
    </section>

    <section class="pq-speaker-team-section">
        <div class="container">
            <div class="pq-section-title text-center">
                <div class="pq-title">
                    <h5 class="pq-title-heading text-center">meet our
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
                    @foreach ($speakers as $speaker)                            
                    <div class="pq-team-info">
                        <h5 class="pq-member-name">{{ $speaker->name ?? '' }}</h5>
                        <span class="pq-team-designation">{{ $speaker->position ?? '' }}</span>
                        <div class="pq-team-media">
                            <img decoding="async" src="{{ asset('storage/' . $speaker->image) }}"  alt="team-image">
                        </div>
                    </div>
                       @endforeach
                </div>

            </div>
          
        </div>
    </section>

    <section class="pq-breadcrumb-style-1 wow fadeIn">
        <div class="container-fluid">
            <div class="pq-breadcrumb">
                <h1 class="pq-breadcrumb-title text-center"></h1>
            </div>
        </div>
    </section>
@endsection