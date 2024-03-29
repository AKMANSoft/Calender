@extends('layouts.master')
@section('content')
<main class="mx-auto mt-150 px-60-auto max-1440">
    <div>
        <h1 class="theme-h1 text-light theme-fw-700">Search results for: {{ $keyword }}</h1>
        <form action="{{ route('projects.search') }}" method="GET">
            <div class="my-30 rounded-pill bg-gradient-light w-100 d-flex">
                <input type="text" required class="h-46 form-control bg-transparent text-light-70 border-0 shadow-none px-4 py-2" placeholder="Project name, type" name="keyword" value="{{ $keyword }}">
                <button type="submit" class="h-46 btn btn-light rounded-pill px-40 d-flex align-items-center justify-content-center theme-fw-700">Search</button>
            </div>
        </form>
    </div>
    <section>
        <div class="row" style="row-gap: 40px;">
            @forelse ($projects as $project)
            <x-nft-project class="col-12 col-xl-4 col-lg-6" :project=$project />
            @empty
            <div class="d-flex py-5 w-100 flex-column align-items-center justify-content-center" style="height: 500px;">
                <img src="{{ asset('assets') }}/images/icons/no_projects_icon.svg" width="103" height="115" alt="">
                <p class="text-center mt-4">No project to show yet in <br /> this category</p>
            </div>
            @endforelse
            <div class="d-flex align-items-center justify-content-center mt-60">
                {{ $projects->links('pagination::bootstrap-4') }}
            </div>
        </div>

        <!-- No Result Found -->
        <!-- <div class="d-flex w-100 text-center align-items-center justify-content-center" style="height: 300px;">
                    <h2 class="theme-h2 text-light-70 theme-fw-700">No result found for <br /> “herman”</h2>
                </div> -->
    </section>
</main>
<div class="mt-190">
    @include("partials.interaction", ['variant' => 'primary'])
</div>
@include("partials.newsletter")
@endsection