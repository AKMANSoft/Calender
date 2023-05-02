<div class="interaction_card" style="background-image: url('{{$variant == "primary" ? "/assets/images/interact_card_stars_large.svg" : "/assets/images/interact_card_large.svg"}}');">
    <div class="inner-container">
        <h2 class="theme-h2 heading theme-fw-700">
            {{$variant == "primary" ? "Project Founders: Get Listed FREE." : "Founders: Sellout Your Project"}}
        </h2>
        @if($variant=="primary")
        <a href="{{route('projects.create')}}" class="btn-theme-light">
            Submit Project
            <i class="fa-solid fa-chevron-right"></i>
        </a>
        @else
        <a href="https://moonlanding.media/marketing/" class="btn-theme-light">
            Pro Marketing
            <i class="fa-solid fa-chevron-right"></i>
        </a>
        @endif
    </div>
</div>