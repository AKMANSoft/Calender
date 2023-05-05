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
                        Upcoming NFT & Web3 Projects
                    </h1>
                    <p class="theme-text-body theme-fw-400 text-light-70">
                        The home of up and coming Web3 Projects, Web3 News, and Web3 Marketing. View the <a class="text-primary" href="{{ route('projects.index', ['category' => 'upcoming', 'chain' => 'all']) }}" >Upcoming Launches</a>, <a class="text-primary" href="https://moonlanding.media/news" >Latest News</a>, or get <a class="text-primary" href="https://moonlanding.media/marketing/">Marketing Support</a> for your project!
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
                                <!-- <div class="featured_tag bg-primary">
                                    <span class="text-light theme-text-body">{{ $project->minting_status }}</span>
                                </div> -->
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
                                <div class="theme-text-body d-flex align-items-center flex-wrap justify-content-center mt-2" style="column-gap: 24px;">
                                    <span class="text-yellow theme-fw-600">Coming Soon</span>
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
        <div class="d-flex gap-3 flex-column flex-md-row justify-content-between align-items-start align-items-md-center pb-20 border-bottom-muted">
            <h3 class="theme-h3 theme-fw-700">Featured Projects</h3>
            <div>
                <div>
                    <a class="buy-with-crypto btn-theme-secondary d-flex" style="background: linear-gradient(270deg, rgba(255, 255, 255, 0.3) 0%, rgba(255, 255, 255, 0.1) 100%); display: flex; align-items: center;" href="https://commerce.coinbase.com/checkout/526c3f9e-7c75-47c3-8e79-9d7f0c2cbf2f">
                    <span>Get Featured</span><i class="fa-solid fa-chevron-right"></i>
                    </a>
                    <script src="https://commerce.coinbase.com/v1/checkout.js?version=201807">
                    </script>
                </div>
                <!-- <a href="{{ route('projects.index', 'featured') }}" class="btn-theme-secondary">
                    Get Featured <i class="fa-solid fa-chevron-right"></i> -->
                <!-- </a> -->
            </div>
        </div>
        <div class="mt-40">
            <div class="row" style="row-gap: 40px;">
                @forelse ($featuredProjects as $project)
                <x-nft-project class="col-12 col-xl-4 col-lg-6" :project=$project />
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
        <div class="d-flex gap-3 flex-column flex-md-row justify-content-between align-items-start align-items-md-center pb-20 border-bottom-muted">
            <h3 class="theme-h3 theme-fw-700">Most Popular</h3>
            <div>
                <a href="{{ route('projects.index', 'most popular') }}" class="btn-theme-secondary">
                    View All <i class="fa-solid fa-chevron-right"></i>
                </a>
            </div>
        </div>
        <div class="mt-40">
            <div class="row" style="row-gap: 40px;">
                @forelse ($popularProjects as $project)
                <x-nft-project class="col-12 col-xl-4 col-lg-6" :project=$project />
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
        <div class="d-flex gap-3 flex-column flex-md-row justify-content-between align-items-start align-items-md-center pb-20 border-bottom-muted">
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
                <x-nft-project class="col-12 col-xl-4 col-lg-6" :project=$project />
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
        <div class="d-flex gap-3 flex-column flex-md-row justify-content-between align-items-start align-items-md-center pb-20 border-bottom-muted">
            <h3 class="theme-h3 theme-fw-700">Verified</h3>
            <div>
                <a href="{{ route('projects.index', 'verified') }}" class="btn-theme-secondary">
                    View All<i class="fa-solid fa-chevron-right"></i>
                </a>
            </div>
        </div>
        <div class="mt-40">
            <div class="row" style="row-gap: 40px;">
                @forelse ($popularProjects as $project)
                <x-nft-project class="col-12 col-xl-4 col-lg-6" :project=$project />
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