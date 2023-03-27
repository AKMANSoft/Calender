<div {{ $attributes->merge(['class' => 'col-auto d-flex']) }}>
    <a href="#">
        <img src="{{ asset('storage') }}/{{ $project->profile_image_path }}" class="nft-project-item-img" alt="">
    </a>
    <div class="ms-20 d-flex flex-column justify-content-between">
        <div>
            <p class="theme-text-body mt-3">
                {{ $project->minting_status }}
            </p>
            <h5 class="theme-text-lg theme-fw-700 my-2">{{ $project->name }}</h5>
            @if ($project->is_link_verified && $project->is_dooxed_kyc_verified)
            <img src="{{ asset('assets') }}/images/icons/verified_icon.svg" class="change-on-hover" hover-height="30" hover-src="{{ asset('assets') }}/images/icons/verified_badge.svg" height="20" alt="">
            <img src="{{ asset('assets') }}/images/icons/golden_badge.png" class="change-on-hover" hover-height="30" hover-src="{{ asset('assets') }}/images/icons/verified_badge.svg" height="20" alt="">
            @elseif ($project->is_link_verified)
            <img src="{{ asset('assets') }}/images/icons/verified_icon.svg" class="change-on-hover" hover-height="30" hover-src="{{ asset('assets') }}/images/icons/verified_badge.svg" height="20" alt="">
            @elseif ($project->is_dooxed_kyc_verified)
            <img src="{{ asset('assets') }}/images/icons/golden_badge.png" class="change-on-hover" hover-height="30" hover-src="{{ asset('assets') }}/images/icons/verified_badge.svg" height="20" alt="">
            @endif
        </div>
        <div class="mt-2">
            <p class="theme-text-body text-light-80">Public-sale:
                {{ date('d M Y', strtotime($project->pre_sale_date)) }}
            </p>
            <div class="mt-2 row gx-2 align-items-center">
                <img class="col-auto" src="{{ asset('assets') }}/images/icons/price_icon.svg" width="12" height="20" alt="">
                <p class="col-auto theme-text-body theme-fw-400 text-uppercase">
                    {{ $project->pre_sale_price }} Eth
                </p>
            </div>
        </div>
    </div>
</div>

@section('custom-script')
<script>
    document.querySelectorAll(".change-on-hover").forEach((el) => {
        let originalSrc = el.src;
        let originalHeight = el.height;
        el.addEventListener("mouseenter", () => {
            el.src = el.getAttribute("hover-src");
            el.height = el.getAttribute("hover-height")
        })
        el.addEventListener("mouseleave", () => {
            el.src = originalSrc;
            el.height = originalHeight;
        })
    })
</script>
@endsection
