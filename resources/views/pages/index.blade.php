@extends('layouts.master')
@section('content')
    <main class="mt-150">
        <section class="row align-items-center max-1440 mx-auto px-60-auto g-0 gx-lg-3">
            <div class="col-lg-6">
                <div>
                    <div class="wmax-lg-540">
                        <h1 class="theme-fw-700 theme-h1 mb-20">
                            Lorem ipsum dolor sit amet consectetur
                        </h1>
                        <p class="theme-text-body theme-fw-400 text-light-70">Ut enim ad minim veniam, quis nostrud
                            exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                            reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                    </div>
                    <div class="mt-80">
                        <p class="theme-text-body theme-fw-400 text-light-70">
                            <i class="fa-solid fa-plus text-primary"></i>
                            <span class="ms-2">View NFTs</span>
                        </p>
                        <div class="row mt-2 g-2">
                            <div class="col-auto">
                                <a href="{{route('projects.index', 'most popular')}}"
                                    class="btn bg-light-10 text-uppercase rounded-pill py-2 px-3 theme-text-sm theme-fw-400">Most
                                    Popular</a>
                            </div>
                            <div class="col-auto">
                                <a href="{{route('projects.index', 'upcoming')}}"
                                    class="btn bg-light-10 text-uppercase rounded-pill py-2 px-3 theme-text-sm theme-fw-400">Upcoming</button>
                            </div>
                            <div class="col-auto">
                                <a href="{{route('projects.index', 'recently closed')}}"
                                    class="btn bg-light-10 text-uppercase rounded-pill py-2 px-3 theme-text-sm theme-fw-400">Recently
                                    Closed</a>
                            </div>
                            <div class="col-auto">
                                <a href="{{route('projects.index', 'minting soon')}}"
                                    class="btn bg-light-10 text-uppercase rounded-pill py-2 px-3 theme-text-sm theme-fw-400">Minting
                                    Soon</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mt-5 mt-lg-0 d-flex flex-column align-items-center align-items-lg-end p-0">
                <div class="fetured_project_slider_card bg-gradient-light">
                    <div class="featured_tag bg-primary">
                        <span class="text-light theme-text-body">Featured</span>
                    </div>
                    <img src="/assets/images/nft_3.png" width="260" height="260" alt="">
                    <div class="title">
                        <h4 class="theme-fw-700">Cat Fight P2E NFT</h4>
                        <img src="/assets/images/icons/verified_icon.svg" width="20" height="20" alt="">
                        <img src="/assets/images/icons/kyc_icon.svg" width="20" height="20" alt="">
                    </div>
                    <div class="theme-text-body d-flex align-items-center justify-content-center gap-4 mt-2">
                        <span class="text-yellow theme-fw-600">Coming Soon </span>
                        <span class="theme-fw-400">Public-sale: 19 Dec 2022</span>
                    </div>
                    <div class="bg-light px-3 py-2 rounded-pill text-dark mt-3">
                        <img src="/assets/images/icons/price_icon_dark.svg" width="12" height="20" alt="">
                        <span class="ms-2 theme-text-body text-uppercase">0.05 Ethereum</span>
                    </div>
                </div>

                <div class="mt-4 d-flex gap-3 align-items-center wmax-lg-540 justify-content-center w-100">
                    <span class="slider_indicator active"></span>
                    <span class="slider_indicator"></span>
                    <span class="slider_indicator"></span>
                </div>
            </div>
        </section>
        <section class="max-1440 px-60-auto mx-auto mb-80 mt-100">
            <div class="d-flex gap-3 flex-column flex-md-row justify-content-between pb-20 border-bottom-muted">
                <h3 class="theme-h3 theme-fw-700">Featured Projects</h3>
                <div>
                    <a href="{{ route('projects.index', 'featured') }}" class="btn-theme-secondary">
                        Get Featured <i class="fa-solid fa-chevron-right"></i>
                    </a>
                </div>
            </div>
            <div class="mt-40">
                <div class="d-flex gap-40 flex-wrap">
                    @forelse ($featuredProjects as $project)
                        <div class="col-auto d-flex">
                            <img src="{{ asset('storage') }}/{{ $project->profile_image_path }}" class="nft-project-item-img"
                                alt="">
                            <div class="ms-20 d-flex flex-column justify-content-between">
                                <div>
                                    <p class="theme-text-body mt-3">
                                        {{ $project->minting_status }}
                                    </p>
                                    <h5 class="theme-text-lg theme-fw-700 my-2">{{ $project->name }}</h5>
                                    @if ($project->is_link_verified)
                                        <img src="{{ asset('assets') }}/images/icons/verified_icon.svg" width="20"
                                            height="20" alt="">
                                    @elseif ($project->is_dooxed_kyc_verified)
                                        <img src="{{ asset('assets') }}/images/icons/golden_badge.png" width="20"
                                            height="20" alt="">
                                    @endif

                                </div>
                                <div class="mt-2">
                                    <p class="theme-text-body text-light-80">Public-sale:
                                        {{ date('d M Y', strtotime($project->pre_sale_date)) }}</p>
                                    <div class="mt-2 row gx-2">
                                        <img class="col-auto" src="{{ asset('assets') }}/images/icons/price_icon.svg"
                                            width="12" height="20" alt="">
                                        <p class="col-auto theme-text-body theme-fw-400 text-uppercase">
                                            {{ $project->pre_sale_price }} Eth</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <p>no prijects to show</p>
                    @endforelse

                </div>
            </div>
        </section>
        <div class="interaction_card" style="background-image: url(/assets/images/interact_card_stars_large.svg);">
            <div class="inner-container">
                <h2 class="theme-h2 heading theme-fw-700">Are you a project founder? Do you want to get listed?</h2>
                <button type="button" class="btn-theme-light">
                    Submit Project
                    <i class="fa-solid fa-chevron-right"></i>
                </button>
            </div>
        </div>
        <section class="max-1440 px-60-auto mx-auto mb-80 mt-60">
            <div class="mb-20">
                <h3 class="theme-h3 theme-fw-700">Browse by category</h3>
            </div>
            <div class="row row-cols-2 row-cols-lg-4 row-cols-xl-5 g-3 g-lg-4">
                <div class="col">
                    <button type="button" class="btn w-100 rounded-0 bg-light-10 p-3 text-uppercase theme-text-body">Free
                        Mint</button>
                </div>
                <div class="col">
                    <button type="button" class="btn w-100 rounded-0 bg-light-10 p-3 text-uppercase theme-text-body">Free
                        Mint</button>
                </div>
                <div class="col">
                    <button type="button" class="btn w-100 rounded-0 bg-light-10 p-3 text-uppercase theme-text-body">Free
                        Mint</button>
                </div>
                <div class="col">
                    <button type="button" class="btn w-100 rounded-0 bg-light-10 p-3 text-uppercase theme-text-body">Free
                        Mint</button>
                </div>
                <div class="col">
                    <button type="button" class="btn w-100 rounded-0 bg-light-10 p-3 text-uppercase theme-text-body">Free
                        Mint</button>
                </div>
                <div class="col">
                    <button type="button" class="btn w-100 rounded-0 bg-light-10 p-3 text-uppercase theme-text-body">Free
                        Mint</button>
                </div>
                <div class="col">
                    <button type="button" class="btn w-100 rounded-0 bg-light-10 p-3 text-uppercase theme-text-body">Free
                        Mint</button>
                </div>
                <div class="col">
                    <button type="button" class="btn w-100 rounded-0 bg-light-10 p-3 text-uppercase theme-text-body">Free
                        Mint</button>
                </div>
                <div class="col">
                    <button type="button" class="btn w-100 rounded-0 bg-light-10 p-3 text-uppercase theme-text-body">Free
                        Mint</button>
                </div>
                <div class="col">
                    <button type="button" class="btn w-100 rounded-0 bg-light-10 p-3 text-uppercase theme-text-body">Free
                        Mint</button>
                </div>
            </div>
        </section>
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
                        <div class="col-auto d-flex">
                            <img src="{{ asset('storage') }}/{{ $project->profile_image_path }}"
                                class="nft-project-item-img" alt="">
                            <div class="ms-20 d-flex flex-column justify-content-between">
                                <div>
                                    <p class="theme-text-body mt-3">
                                        {{ $project->minting_status }}
                                    </p>
                                    <h5 class="theme-text-lg theme-fw-700 my-2">{{ $project->name }}</h5>
                                    @if ($project->is_link_verified)
                                        <img src="{{ asset('assets') }}/images/icons/verified_icon.svg" width="20"
                                            height="20" alt="">
                                    @elseif ($project->is_dooxed_kyc_verified)
                                        <img src="{{ asset('assets') }}/images/icons/golden_badge.png" width="20"
                                            height="20" alt="">
                                    @endif

                                </div>
                                <div class="mt-2">
                                    <p class="theme-text-body text-light-80">Public-sale:
                                        {{ date('d M Y', strtotime($project->pre_sale_date)) }}</p>
                                    <div class="mt-2 row gx-2">
                                        <img class="col-auto" src="{{ asset('assets') }}/images/icons/price_icon.svg"
                                            width="12" height="20" alt="">
                                        <p class="col-auto theme-text-body theme-fw-400 text-uppercase">
                                            {{ $project->pre_sale_price }} Eth</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <p>no prijects to show</p>
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
                        <div class="col-auto d-flex">
                            <img src="{{ asset('storage') }}/{{ $project->profile_image_path }}"
                                class="nft-project-item-img" alt="">
                            <div class="ms-20 d-flex flex-column justify-content-between">
                                <div>
                                    <p class="theme-text-body mt-3">
                                        {{ $project->minting_status }}
                                    </p>
                                    <h5 class="theme-text-lg theme-fw-700 my-2">{{ $project->name }}</h5>
                                    @if ($project->is_link_verified)
                                        <img src="{{ asset('assets') }}/images/icons/verified_icon.svg" width="20"
                                            height="20" alt="">
                                    @elseif ($project->is_dooxed_kyc_verified)
                                        <img src="{{ asset('assets') }}/images/icons/golden_badge.png" width="20"
                                            height="20" alt="">
                                    @endif

                                </div>
                                <div class="mt-2">
                                    <p class="theme-text-body text-light-80">Public-sale:
                                        {{ date('d M Y', strtotime($project->pre_sale_date)) }}</p>
                                    <div class="mt-2 row gx-2">
                                        <img class="col-auto" src="{{ asset('assets') }}/images/icons/price_icon.svg"
                                            width="12" height="20" alt="">
                                        <p class="col-auto theme-text-body theme-fw-400 text-uppercase">
                                            {{ $project->pre_sale_price }} Eth</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <p>no prijects to show</p>
                    @endforelse
                </div>
            </div>
        </section>
        <div class="interaction_card" style="background-image: url(/assets/images/interact_card_large.svg);">
            <div class="inner-container">
                <h2 class="theme-h2 heading theme-fw-700">Founders: Sellout Your Project</h2>
                <a href="{{route('projects.create')}}" class="btn-theme-light">
                    Submit Project
                    <i class="fa-solid fa-chevron-right"></i>
                </a>
            </div>
        </div>
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
                        <div class="col-auto d-flex">
                            <img src="{{ asset('storage') }}/{{ $project->profile_image_path }}"
                                class="nft-project-item-img" alt="">
                            <div class="ms-20 d-flex flex-column justify-content-between">
                                <div>
                                    <p class="theme-text-body mt-3">
                                        {{ $project->minting_status }}
                                    </p>
                                    <h5 class="theme-text-lg theme-fw-700 my-2">{{ $project->name }}</h5>
                                    @if ($project->is_link_verified)
                                        <img src="{{ asset('assets') }}/images/icons/verified_icon.svg" width="20"
                                            height="20" alt="">
                                    @elseif ($project->is_dooxed_kyc_verified)
                                        <img src="{{ asset('assets') }}/images/icons/golden_badge.png" width="20"
                                            height="20" alt="">
                                    @endif

                                </div>
                                <div class="mt-2">
                                    <p class="theme-text-body text-light-80">Public-sale:
                                        {{ date('d M Y', strtotime($project->pre_sale_date)) }}</p>
                                    <div class="mt-2 row gx-2">
                                        <img class="col-auto" src="{{ asset('assets') }}/images/icons/price_icon.svg"
                                            width="12" height="20" alt="">
                                        <p class="col-auto theme-text-body theme-fw-400 text-uppercase">
                                            {{ $project->pre_sale_price }} Eth</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <p>no prijects to show</p>
                    @endforelse
                </div>
            </div>
        </section>
        <div class="interaction_card" style="background-image: url(/assets/images/interact_card_stars_large.svg);">
            <div class="inner-container">
                <h2 class="theme-h2 heading theme-fw-700">Are you a project founder? Do you want to get listed?</h2>
                <button type="button" class="btn-theme-light">
                    Submit Project
                    <i class="fa-solid fa-chevron-right"></i>
                </button>
            </div>
        </div>
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
@endsection
