@extends('layouts.master')
@section('content')
<main>
    <section class="mt-80 poition-relative project-detail-profile-section">
        <div>
            @if ($project->banner_image_path)
            <img src="{{ asset('storage') . '/' . $project->banner_image_path }}" class="banner-img" height="320" alt="">
            @else
            <img src="{{ asset('assets')}}/images/project_banner_image.png" class="banner-img" height="320" alt="project_banner_image">
            @endif
        </div>
        <div class="theme-layout">
            <div class=" nft-profile ms-xl-110">
                <img src="{{ asset('storage') . '/'. $project->profile_image_path}}" class="rounded-circle profile-img" width="260" height="260" alt="">
                <div class="details">
                    <h5 class="theme-text-lg theme-fw-400">Pre sale:
                        {{ date('d M Y', strtotime($project->pre_sale_date)) }}
                    </h5>
                    <div class="d-flex align-items-center gap-3 flex-wrap">
                        <h3 class="col-12 col-md-auto theme-h3 theme-fw-700">{{ $project->name }}</h3>
                        <div class="col-auto d-inline-flex gap-2">
                            @if ($project->is_link_verified && $project->is_dooxed_kyc_verified)
                            <img src="{{ asset('assets') }}/images/icons/verified_badge.svg" height="30" alt="">
                            <img src="{{ asset('assets') }}/images/icons/doxxed_kyc_badge.png" height="30" alt="">
                            @elseif ($project->is_link_verified)
                            <img src="{{ asset('assets') }}/images/icons/verified_badge.svg" height="30" alt="">
                            @elseif ($project->is_dooxed_kyc_verified)
                            <img src="{{ asset('assets') }}/images/icons/doxxed_kyc_badge.png" height="30" alt="">
                            @endif

                        </div>
                    </div>
                    <div class="d-flex mt-4">
                        <div class="bg-light px-3 py-2 rounded-pill text-dark d-flex align-items-center gap-2">
                            <img src="{{ asset('assets') }}/images/icons/{{ $project->category->slug }}_price_icon_dark.svg" width="12" height="20" alt="">
                            <span class="theme-text-body theme-fw-400 text-uppercase">{{ $project->category->name }}</span>
                        </div>
                        <div class="vertical-divider mx-20"></div>
                        <div class="bg-light-10 px-3 py-2 rounded-pill text-light d-flex align-items-center gap-2">
                            <span class="theme-text-body theme-fw-400">{{ $project->total_supply }} Total Supply</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-gradient-secondary">
            <div class="theme-layout py-75 my-60">
                <div class="ms-xl-110 row row-cols-1 row-cols-md-2 row-cols-lg-4 row-gap-40 g-0">
                    <div class="col text-center">
                        <p class="theme-text-body text-light theme-fw-400">Pre-sale Date:</p>
                        <p class="theme-text-body text-light theme-fw-600">
                            {{ date('d M Y', strtotime($project->pre_sale_date)) }}-{{ date('h:i a', strtotime($project->pre_sale_date)) }}
                            (UTC)
                        </p>
                    </div>
                    <div class="col text-center">
                        <p class="theme-text-body text-light theme-fw-400">Pre-sale Price:</p>
                        <p class="theme-text-body text-light theme-fw-600">{{ $project->pre_sale_price . ' ' . $project->category->short_name }}</p>
                    </div>
                    <div class="col text-center">
                        <p class="theme-text-body text-light theme-fw-400">Public Mint Date:</p>
                        <p class="theme-text-body text-light theme-fw-600">
                            {{ date('d M Y-H:i a', strtotime($project->mint_time)) }} (UTC)
                        </p>
                    </div>
                    <div class="col text-center">
                        <p class="theme-text-body text-light theme-fw-400">Mint Price:</p>
                        <p class="theme-text-body text-light theme-fw-600">{{ $project->mint_price . ' ' . $project->category->short_name }}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="theme-layout">
            <div class="mx-xl-110 row justify-content-between mb-100 g-0">
                <div class="col-lg-8" style="max-width: 700px;">
                    <div class="pb-3 border-bottom-muted">
                        <p class="theme-text-body theme-fw-600 text-primary">Overview</p>
                    </div>
                    <div class="mt-20">
                        <div class="row">
                            <p class="col-3 theme-text-body theme-fw-400 text-light-70" style="max-width: 140px; min-width: 90px;">Description</p>
                            <p class="col theme-text-body theme-fw-400 text-light">
                                {{$project->description}}
                            </p>
                        </div>
                        <div class="row mt-80 align-items-center">
                            <p class="col-3 theme-text-body theme-fw-400 text-light-70" style="max-width: 145px; min-width: 90px;">Social Profiles:</p>
                            <div class="col row g-0">
                                <p class="col-auto theme-text-sm theme-fw-400 text-light">
                                    <i class="text-primary fa-brands fa-twitter"></i>
                                    <span class="ms-2">Twitter (2.4K)</span>
                                </p>
                                <p class="col-auto ms-4 theme-text-sm theme-fw-400 text-light">
                                    <i class="text-primary fa-brands fa-discord"></i>
                                    <span class="ms-2">Discord (3.2K)</span>
                                </p>
                                <p class="col-auto ms-4 theme-text-sm theme-fw-400 text-light">
                                    <i class="text-primary fa-solid fa-globe"></i>
                                    <span class="ms-2">Website : {{$project->website_link}}</span>
                                </p>
                            </div>
                        </div>
                        <div class="row mt-30 align-items-center">
                            <p class="col-3 theme-text-body theme-fw-400 text-light-70" style="max-width: 145px; min-width: 90px;">Event Tags:</p>
                            <div class="col row g-0">
                                <p class="col-auto theme-text-sm theme-fw-400 text-light">#FreeMint</p>
                                <p class="col-auto ms-4 theme-text-sm theme-fw-400 text-light">Metaverse</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-none d-lg-block ps-3 ps-xxl-0 col-lg-4" style="max-width: 300px;">
                    <div class="pb-3 border-bottom-muted">
                        <p class="theme-text-body theme-fw-600 text-primary">Register for this event</p>
                    </div>

                    <div class="mt-20">
                        <form action="{{route('event-registraion.store')}}" method="POST">
                            @csrf
                            <input type="hidden" name="project_id" value="{{$project->id}}">
                            <div class="w-100 mb-20">
                                <label class="form-label fs-14 text-light-70 mb-10">Wallet address</label>
                                <input type="text" name="wallet_address" value="{{old('wallet_address')}}" class="form-control fs-14 shadow-none" placeholder="" />
                                @error('wallet_address')
                                <p style="color: red">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="w-100 mb-20">
                                <label class="form-label fs-14 text-light-70 mb-10">Twitter username</label>
                                <input type="text" name="twitter_username" value="{{old('twitter_username')}}" class="form-control fs-14 shadow-none" placeholder="" />
                                @error('twitter_username')
                                <p style="color: red">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="w-100 mb-20">
                                <label class="form-label fs-14 text-light-70 mb-10">Email</label>
                                <input type="email" name="email" value="{{old('email')}}" class="form-control fs-14 shadow-none" placeholder="" />
                                @error('email')
                                <p style="color: red">{{$message}}</p>
                                @enderror
                            </div>
                            @if (\Session::has('success'))
                            <div class="alert alert-success">
                                <p style="color: green">{!! \Session::get('success') !!}</p>
                            </div>
                            @endif
                            <div class="d-flex">
                                <button type="submit" class="btn-theme px-5 h-46">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
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
            <h3 class="theme-h3 theme-fw-700">Minting Soon</h3>
            <div>
                <a href="{{ route('projects.index', 'minging soon') }}" class="btn-theme-secondary">
                    View All <i class="fa-solid fa-chevron-right"></i>
                </a>
            </div>
        </div>
        <div class="mt-40">
            <div class="d-flex gap-40 flex-wrap">
                @forelse ($mintingSoonProjects as $project)
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
</main>
@include("partials.newsletter")
@endsection
