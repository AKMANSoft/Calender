@extends('layouts.master')
@section('other-css')
<!-- Plugins css -->
<link href="{{ asset('assets') }}/libs/glidejs/glide.min.css" rel="stylesheet" type="text/css">
@endsection
@section('content')
<main class="mt-150">
    <section class="row align-items-center justify-content-between max-1440 mx-auto px-60-auto g-0 gx-lg-3">
        <div class="col-lg-6">
            <div>
                <div class="wmax-lg-540">
                    <h1 class="theme-fw-700 theme-h1 mb-20">
                        Lorem ipsum dolor sit amet consectetur
                    </h1>
                    <p class="theme-text-body theme-fw-400 text-light-70">
                        Ut enim ad minim veniam, quis nostrud
                        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                        reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                    </p>
                </div>
                <div class="mt-80">
                    <p class="theme-text-body theme-fw-400 text-light-70">
                        <i class="fa-solid fa-plus text-primary"></i>
                        <span class="ms-2">View NFTs</span>
                    </p>
                    <div class="row mt-2 g-2">
                        <div class="col-auto">
                            <a href="{{ route('projects.index', ['category' => 'most popular', 'chain' => 'all']) }}" class="btn bg-light-10 text-uppercase rounded-pill py-2 px-3 theme-text-sm theme-fw-400">
                                Most Popular
                            </a>
                        </div>
                        <div class="col-auto">
                            <a href="{{ route('projects.index', ['category' => 'upcoming', 'chain' => 'all']) }}" class="btn bg-light-10 text-uppercase rounded-pill py-2 px-3 theme-text-sm theme-fw-400">
                                Upcoming
                            </a>
                        </div>
                        <div class="col-auto">
                            <a href="{{ route('projects.index', ['category' => 'recently closed', 'chain' => 'all']) }}" class="btn bg-light-10 text-uppercase rounded-pill py-2 px-3 theme-text-sm theme-fw-400">
                                Recently Closed
                            </a>
                        </div>
                        <div class="col-auto">
                            <a href="{{ route('projects.index', ['category' => 'minting soon', 'chain' => 'all']) }}" class="btn bg-light-10 text-uppercase rounded-pill py-2 px-3 theme-text-sm theme-fw-400">
                                Minting Soon
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 mt-5 mt-lg-0 d-flex flex-column align-items-center align-items-lg-end p-0">
            <div class="nft-cards-carousel w-100 wmax-lg-540">
                <div class="glide__track" data-glide-el="track">
                    <ul class="glide__slides">
                        @forelse ($superFeaturedProjects as $project)
                        <!-- NFT Slide  -->
                        <li class="glide__slide">
                            <div class="fetured_project_slider_card bg-gradient-light">
                                <div class="featured_tag bg-primary">
                                    <span class="text-light theme-text-body">{{ $project->minting_status }}</span>
                                </div>
                                <a href="{{route('projects.show', $project)}}">
                                    <img src="{{ asset('storage') }}/{{ $project->profile_image_path }}" width="260" height="260" alt="">
                                </a>
                                <div class="title">
                                    <h4 class="theme-fw-700">{{ $project->name }}</h4>
                                    @if ($project->is_link_verified && $project->is_dooxed_kyc_verified)
                                    <img src="{{ asset('assets') }}/images/icons/verified_icon.svg" class="change-on-hover" hover-height="30" hover-src="{{ asset('assets') }}/images/icons/verified_badge.svg" height="20" alt="">
                                    <img src="{{ asset('assets') }}/images/icons/kyc_icon.svg" class="change-on-hover" hover-height="30" hover-src="{{ asset('assets') }}/images/icons/kyc_badge.svg" height="20" alt="">
                                    @elseif ($project->is_link_verified)
                                    <img src="{{ asset('assets') }}/images/icons/verified_icon.svg" class="change-on-hover" hover-height="30" hover-src="{{ asset('assets') }}/images/icons/verified_badge.svg" height="20" alt="">
                                    @elseif ($project->is_dooxed_kyc_verified)
                                    <img src="{{ asset('assets') }}/images/icons/kyc_icon.svg" class="change-on-hover" hover-height="30" hover-src="{{ asset('assets') }}/images/icons/kyc_badge.svg" height="20" alt="">
                                    @endif
                                </div>
                                <div class="theme-text-body d-flex align-items-center justify-content-center gap-4 mt-2">
                                    <span class="text-yellow theme-fw-600">Coming Soon </span>
                                    <span class="theme-fw-400">Public-sale:
                                        {{ date('d M Y', strtotime($project->pre_sale_date)) }}</span>
                                </div>
                                <div class="bg-light px-3 py-2 rounded-pill text-dark mt-3">
                                    <img src="/assets/images/icons/price_icon_dark.svg" width="12" height="20" alt="">
                                    <span class="ms-2 theme-text-body text-uppercase">{{ $project->pre_sale_price }}
                                        Ethereum</span>
                                </div>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                    <div class="mt-4 d-flex gap-3 align-items-center wmax-lg-540 justify-content-center w-100 glide__bullets" data-glide-el="controls[nav]">
                        @forelse ($superFeaturedProjects as $key => $project)
                        <span class="glide__bullet" data-glide-dir="={{$key}}"></span>
                        @endforeach
                    </div>
                </div>
            </div>


        </div>
    </section>
    <section class="max-1440 px-60-auto mx-auto mb-80 mt-100">
        <div class="d-flex gap-3 flex-column flex-md-row justify-content-between pb-20 border-bottom-muted">
            <h3 class="theme-h3 theme-fw-700">Featured Projects</h3>
            <div>
                <a href="https://commerce.coinbase.com/checkout/3afa7c3d-e230-4b2e-9840-f70deec9b4a9" class="btn-theme-secondary buy-with-crypto">
                    Get Featured <i class="fa-solid fa-chevron-right"></i>
                </a>
                <script src="https://commerce.coinbase.com/v1/checkout.js?version=201807">
                </script>
            </div>
        </div>
        <div class="mt-40">
            <div class="d-flex gap-40 flex-wrap">
                @forelse ($featuredProjects as $project)
                <x-nft-project :project=$project />
                @empty
                <div class="d-flex py-5 w-100 flex-column align-items-center justify-content-center">
                    <img src="{{asset('assets')}}/images/icons/no_projects_icon.svg" width="103" height="115" alt="">
                    <p class="text-center mt-4">No project to show yet in <br /> this category</p>
                </div>
                @endforelse

            </div>
        </div>
    </section>
    @include("partials.interaction", ['variant' => 'primary'])
    <section class="max-1440 px-60-auto mx-auto mb-80 mt-80">
        <div class="d-flex gap-3 flex-column flex-md-row justify-content-between pb-20 border-bottom-muted">
            <h3 class="theme-h3 theme-fw-700">Most Popular</h3>
            <div>
                <a href="{{ route('projects.index', 'most popular') }}" class="btn-theme-secondary">
                    View All <i class="fa-solid fa-chevron-right"></i>
                </a>
            </div>
        </div>
        <div class="mt-40">
            <div class="d-flex gap-40 flex-wrap">
                @forelse ($popularProjects as $project)
                <x-nft-project :project=$project />
                @empty
                <div class="d-flex py-5 w-100 flex-column align-items-center justify-content-center">
                    <img src="{{asset('assets')}}/images/icons/no_projects_icon.svg" width="103" height="115" alt="">
                    <p class="text-center mt-4">No project to show yet in <br /> this category</p>
                </div>
                @endforelse
            </div>
        </div>
    </section>
    <section class="max-1440 px-60-auto mx-auto mb-80 mt-100">
        <div class="d-flex gap-3 flex-column flex-md-row justify-content-between pb-20 border-bottom-muted">
            <h3 class="theme-h3 theme-fw-700">Upcoming</h3>
            <div>
                <a href="{{ route('projects.index', 'upcoming') }}" class="btn-theme-secondary">
                    View All <i class="fa-solid fa-chevron-right"></i>
                </a>
            </div>
        </div>
        <div class="mt-40">
            <div class="d-flex gap-40 flex-wrap">
                @forelse ($upcomingProjects as $project)
                <x-nft-project :project=$project />
                @empty
                <div class="d-flex py-5 w-100 flex-column align-items-center justify-content-center">
                    <img src="{{asset('assets')}}/images/icons/no_projects_icon.svg" width="103" height="115" alt="">
                    <p class="text-center mt-4">No project to show yet in <br /> this category</p>
                </div>
                @endforelse
            </div>
        </div>
    </section>
    @include("partials.interaction", ['variant' => 'secondary'])
    <section class="max-1440 px-60-auto mx-auto mb-80 mt-100">
        <div class="d-flex gap-3 flex-column flex-md-row justify-content-between pb-20 border-bottom-muted">
            <h3 class="theme-h3 theme-fw-700">Verified</h3>
            <div>
                <a href="{{ route('projects.index', 'verified') }}" class="btn-theme-secondary">
                    View All<i class="fa-solid fa-chevron-right"></i>
                </a>
            </div>
        </div>
        <div class="mt-40">
            <div class="d-flex gap-40 flex-wrap">
                @forelse ($popularProjects as $project)
                <x-nft-project :project=$project />
                @empty
                <div class="d-flex py-5 w-100 flex-column align-items-center justify-content-center">
                    <img src="{{asset('assets')}}/images/icons/no_projects_icon.svg" width="103" height="115" alt="">
                    <p class="text-center mt-4">No project to show yet in <br /> this category</p>
                </div>
                @endforelse
            </div>
        </div>
    </section>
    @include("partials.interaction", ['variant' => 'primary'])
    <section class="max-1440 px-60-auto mx-auto mt-100">
        <h3 class="theme-h3 theme-fw-700 mb-40 text-center">Latest News</h3>
        <div class="nft-news-list">
            <div class="col nft-news-item">
                <img src="/assets/images/nft_3.png" class="img-fluid" alt="">
                <h5 class="mt-20 theme-text-lg theme-fw-700">Ut enim ad minim veniam, quis nostrud exercitation ullamc
                    oculpa qui officia deserunt</h5>
            </div>
            <div class="col nft-news-item">
                <img src="/assets/images/nft_3.png" class="img-fluid" alt="">
                <h5 class="mt-20 theme-text-lg theme-fw-700">Ut enim ad minim veniam, quis nostrud exercitation ullamc
                    oculpa qui officia deserunt</h5>
            </div>
            <div class="col nft-news-item">
                <img src="/assets/images/nft_3.png" class="img-fluid" alt="">
                <h5 class="mt-20 theme-text-lg theme-fw-700">Ut enim ad minim veniam, quis nostrud exercitation ullamc
                    oculpa qui officia deserunt</h5>
            </div>
            <div class="col nft-news-item">
                <img src="/assets/images/nft_3.png" class="img-fluid" alt="">
                <h5 class="mt-20 theme-text-lg theme-fw-700">Ut enim ad minim veniam, quis nostrud exercitation ullamc
                    oculpa qui officia deserunt</h5>
            </div>

        </div>
    </section>
</main>
@include("partials.newsletter")
@endsection

@section('custom-script')
<!-- Plugins js-->
<script src="{{ asset('assets') }}/libs/glidejs/glide.min.js"></script>
<script>
    new Glide('.nft-cards-carousel', {
        type: "carousel",
        autoplay: 2500,
        animationDuration: 1000
    }).mount();
</script>
@endsection
