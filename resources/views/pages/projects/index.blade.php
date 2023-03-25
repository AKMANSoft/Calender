@extends('layouts.master')
@section('content')
    <main class="mx-auto mt-150 px-60-auto max-1440">
        <div>
            <h1 class="fs-1 fw-bold">{{ucwords($category)}} Projects</h1>
        </div>
        <div class="my-30 border-muted"></div>
        <div class="">
            <div class="d-flex flex-column flex-lg-row row-cols-2 gap-40">
                <div class="col-12 col-lg-4 wmax-430">
                    <div class="py-20">
                        <p class="theme-text-body mb-3">NFT Calendar</p>
                        <div class="row g-3">
                            <div class="col-auto wmin-100 col-xl-6">
                                <a href="{{route('projects.index', ['category'=>'most popular', 'chain'=>$chain])}}"
                                    class="btn theme-text-sm p-10 w-100 bg-light-10 rounded-pill text-uppercase {{$category == 'most popular' ? 'text-primary' : ''}}">Most
                                    Popular</a>
                            </div>
                            <div class="col-auto wmin-100 col-xl-6">
                                <a href="{{route('projects.index', ['category'=>'upcoming', 'chain'=>$chain])}}"
                                    class="btn theme-text-sm p-10 w-100 bg-light-10 rounded-pill text-uppercase {{$category == 'upcoming' ? 'text-primary' : ''}}">Upcoming</a>
                            </div>
                            <div class="col-auto wmin-100 col-xl-6">
                                <a href="{{route('projects.index', ['category'=>'recently closed', 'chain'=>$chain])}}"
                                    class="btn theme-text-sm p-10 w-100 bg-light-10 rounded-pill text-uppercase {{$category == 'recently closed' ? 'text-primary' : ''}}" >Recently
                                    Closed</a>
                            </div>
                            <div class="col-auto wmin-100 col-xl-6">
                                <a href="{{route('projects.index', ['category'=>'minting soon', 'chain'=>$chain])}}"
                                    class="btn theme-text-sm p-10 w-100 bg-light-10 rounded-pill text-uppercase {{$category == 'minting soon' ? 'text-primary' : ''}}">Minting
                                    Soon</a>
                            </div>
                        </div>
                    </div>
                    <div class="py-20">
                        <p class="theme-text-body mb-3">Blockchain</p>
                        <div class="row g-3">
                            <div class="col-auto wmin-100 col-xl-6">
                                <a href="{{route('projects.index', ['category'=>$category, 'chain'=>'all'])}}"
                                    class="btn theme-text-sm p-10 w-100 bg-light-10 rounded-pill text-uppercase {{$chain == 'all' ? 'text-primary' : ''}}">All</a>
                            </div>
                            <div class="col-auto wmin-100 col-xl-6">
                                <a href="{{route('projects.index', ['category'=>$category, 'chain'=>'ethereum'])}}"
                                    class="btn theme-text-sm p-10 w-100 bg-light-10 rounded-pill text-uppercase {{$chain == 'ethereum' ? 'text-primary' : ''}}">Ethereum</a>
                            </div>
                            <div class="col-auto wmin-100 col-xl-6">
                                <a href="{{route('projects.index', ['category'=>$category, 'chain'=>'solana'])}}"
                                    class="btn theme-text-sm p-10 w-100 bg-light-10 rounded-pill text-uppercase {{$chain == 'solana' ? 'text-primary' : ''}}">Solana</a>
                            </div>
                            <div class="col-auto wmin-100 col-xl-6">
                                <a href="{{route('projects.index', ['category'=>$category, 'chain'=>'flow'])}}"
                                    class="btn theme-text-sm p-10 w-100 bg-light-10 rounded-pill text-uppercase {{$chain == 'flow' ? 'text-primary' : ''}}">Flow</a>
                            </div>
                            <div class="col-auto wmin-100 col-xl-6">
                                <a href="{{route('projects.index', ['category'=>$category, 'chain'=>'polygon'])}}"
                                    class="btn theme-text-sm p-10 w-100 bg-light-10 rounded-pill text-uppercase {{$chain == 'polygon' ? 'text-primary' : ''}}">Polygon</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-8">
                    <div class="row g-4">
                        @forelse ($projects as $project)
                        <div class="col-md-6 col-lg-12 col-xl-6 d-flex gap-20">
                            <img src="{{asset('storage')}}/{{$project->profile_image_path}}" class="nft-project-item-img" alt="">
                            <div class="d-flex flex-column justify-content-between">
                                <div>
                                    <p class="theme-text-body mt-2">{{ $project->minting_status }}</p>
                                    <h5 class="theme-text-lg theme-fw-700 my-2">{{$project->name}}</h5>
                                    @if ($project->is_link_verified)
                                <img src="{{asset('assets')}}/images/icons/verified_icon.svg" width="20" height="20" alt="">
                                @elseif ($project->is_dooxed_kyc_verified)
                                <img src="{{asset('assets')}}/images/icons/golden_badge.png" width="20" height="20" alt="">
                                @endif
                                </div>
                                <div>
                                    <p class="theme-text-body text-light-80">Public-sale: {{date('d M Y', strtotime($project->pre_sale_date))}}</p>
                                    <div class="mt-2 row gx-2">
                                        <img class="col-auto" src="{{asset('assets')}}/images/icons/price_icon.svg" width="12"
                                        height="20" alt="">
                                        <p class="col-auto theme-text-body theme-fw-400 text-uppercase">{{$project->pre_sale_price}} Eth</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @empty
                        <p>no projects to show</p>
                        @endforelse

                        {{ $projects->links('pagination::bootstrap-4') }}
                    </div>
                </div>
            </div>
        </div>
    </main>
    <div class="interaction_card mt-190" style="background-image: url(/public/images/interact_card_stars_large.svg);">
        <div class="inner-container">
            <h2 class="theme-h2 heading theme-fw-700">Are you a project founder? Do you want to get listed?</h2>
            <a href="{{route('projects.create')}}" class="btn-theme-light">
                Submit Project
                <i class="fa-solid fa-chevron-right"></i>
            </a>
        </div>
    </div>
@endsection