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
                            <a href="{{route('projects.index', ['category'=>'today', 'chain'=>$chain])}}" class="btn theme-text-sm p-10 w-100 bg-light-10 rounded-pill text-uppercase {{$category == 'today' ? 'text-primary' : ''}}">Today
                            </a>
                        </div>
                        <div class="col-auto wmin-100 col-xl-6">
                            <a href="{{route('projects.index', ['category'=>'most popular', 'chain'=>$chain])}}" class="btn theme-text-sm p-10 w-100 bg-light-10 rounded-pill text-uppercase {{$category == 'most popular' ? 'text-primary' : ''}}">Most
                                Popular</a>
                        </div>
                        <div class="col-auto wmin-100 col-xl-6">
                            <a href="{{route('projects.index', ['category'=>'upcoming', 'chain'=>$chain])}}" class="btn theme-text-sm p-10 w-100 bg-light-10 rounded-pill text-uppercase {{$category == 'upcoming' ? 'text-primary' : ''}}">Upcoming</a>
                        </div>
                        <div class="col-auto wmin-100 col-xl-6">
                            <a href="{{route('projects.index', ['category'=>'recently closed', 'chain'=>$chain])}}" class="btn theme-text-sm p-10 w-100 bg-light-10 rounded-pill text-uppercase {{$category == 'recently closed' ? 'text-primary' : ''}}">Recently
                                Closed</a>
                        </div>
                        <div class="col-auto wmin-100 col-xl-6">
                            <a href="{{route('projects.index', ['category'=>'minting soon', 'chain'=>$chain])}}" class="btn theme-text-sm p-10 w-100 bg-light-10 rounded-pill text-uppercase {{$category == 'minting soon' ? 'text-primary' : ''}}">
                                Minting Soon
                            </a>
                        </div>
                        <div class="col-auto wmin-100 col-xl-6">
                            <a href="{{route('projects.index', ['category'=>'featured', 'chain'=>$chain])}}" class="btn theme-text-sm p-10 w-100 bg-light-10 rounded-pill text-uppercase {{$category == 'featured' ? 'text-primary' : ''}}">
                                Featured
                            </a>
                        </div>
                    </div>
                </div>
                <div class="py-20">
                    <p class="theme-text-body mb-3">Blockchain</p>
                    <div class="row g-3">
                        <div class="col-auto wmin-100 col-xl-6">
                            <a href="{{route('projects.index', ['category'=>$category, 'chain'=>'all'])}}" class="btn theme-text-sm p-10 w-100 bg-light-10 rounded-pill text-uppercase {{$chain == 'all' ? 'text-primary' : ''}}">All</a>
                        </div>
                        <div class="col-auto wmin-100 col-xl-6">
                            <a href="{{route('projects.index', ['category'=>$category, 'chain'=>'ethereum'])}}" class="btn theme-text-sm p-10 w-100 bg-light-10 rounded-pill text-uppercase {{$chain == 'ethereum' ? 'text-primary' : ''}}">Ethereum</a>
                        </div>
                        <div class="col-auto wmin-100 col-xl-6">
                            <a href="{{route('projects.index', ['category'=>$category, 'chain'=>'solana'])}}" class="btn theme-text-sm p-10 w-100 bg-light-10 rounded-pill text-uppercase {{$chain == 'solana' ? 'text-primary' : ''}}">Solana</a>
                        </div>
                        <div class="col-auto wmin-100 col-xl-6">
                            <a href="{{route('projects.index', ['category'=>$category, 'chain'=>'flow'])}}" class="btn theme-text-sm p-10 w-100 bg-light-10 rounded-pill text-uppercase {{$chain == 'flow' ? 'text-primary' : ''}}">Flow</a>
                        </div>
                        <div class="col-auto wmin-100 col-xl-6">
                            <a href="{{route('projects.index', ['category'=>$category, 'chain'=>'polygon'])}}" class="btn theme-text-sm p-10 w-100 bg-light-10 rounded-pill text-uppercase {{$chain == 'polygon' ? 'text-primary' : ''}}">Polygon</a>
                        </div>
                        <div class="col-auto wmin-100 col-xl-6">
                            <a href="{{route('projects.index', ['category'=>$category, 'chain'=>'arbitrum'])}}" class="btn theme-text-sm p-10 w-100 bg-light-10 rounded-pill text-uppercase {{$chain == 'arbitrum' ? 'text-primary' : ''}}">Arbitrum</a>
                        </div>
                        <div class="col-auto wmin-100 col-xl-6">
                            <a href="{{route('projects.index', ['category'=>$category, 'chain'=>'avalanche'])}}" class="btn theme-text-sm p-10 w-100 bg-light-10 rounded-pill text-uppercase {{$chain == 'avalanche' ? 'text-primary' : ''}}">Avalanche</a>
                        </div>
                        <div class="col-auto wmin-100 col-xl-6">
                            <a href="{{route('projects.index', ['category'=>$category, 'chain'=>'bnb'])}}" class="btn theme-text-sm p-10 w-100 bg-light-10 rounded-pill text-uppercase {{$chain == 'bnb-chain' ? 'text-primary' : ''}}">BNB Chain</a>
                        </div>
                        <div class="col-auto wmin-100 col-xl-6">
                            <a href="{{route('projects.index', ['category'=>$category, 'chain'=>'klaytn'])}}" class="btn theme-text-sm p-10 w-100 bg-light-10 rounded-pill text-uppercase {{$chain == 'klaytn' ? 'text-primary' : ''}}">Klaytn</a>
                        </div>
                        <div class="col-auto wmin-100 col-xl-6">
                            <a href="{{route('projects.index', ['category'=>$category, 'chain'=>'optimism'])}}" class="btn theme-text-sm p-10 w-100 bg-light-10 rounded-pill text-uppercase {{$chain == 'optimism' ? 'text-primary' : ''}}">Optimism</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-8">
                <div class="row g-4">
                    @forelse ($projects as $project)
                    <x-nft-project class="col-md-6" :project=$project />
                    @empty
                    <div class="d-flex py-5 w-100 flex-column align-items-center justify-content-center" style="height: 500px;">
                        <img src="{{asset('assets')}}/images/icons/no_projects_icon.svg" width="103" height="115" alt="">
                        <p class="text-center mt-4">No project to show yet in <br /> this category</p>
                    </div>
                    @endforelse
                    <div class="d-flex align-items-center justify-content-center mt-60">
                        {{ $projects->links('pagination::bootstrap-4') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<div class="mt-100">
    @include("partials.interaction", ['variant' => 'primary'])
</div>
@include("partials.newsletter")
@endsection
