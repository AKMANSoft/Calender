<div {{ $attributes->merge(['class' => 'd-flex px-3']) }}>
    <a href="{{route('projects.show', $project)}}">
        <img src="{{ asset('storage') }}/{{ $project->profile_image_path }}" class="nft-project-item-img" alt="">
    </a>
    <div class="ms-20 d-flex flex-column justify-content-between">
        <div>
            <p class="theme-text-body mt-3">
                {{ $project->minting_status }}
            </p>
            <h5 class="theme-text-lg text-decoration-none text-light d-block theme-fw-700 my-2" style="max-width: 80%; text-overflow: ellipsis; overflow: hidden; white-space: nowrap;">
                {{ $project->name }}
            </h5>

            @if ($project->is_link_verified)
            <img src="{{ asset('assets') }}/images/icons/verified_icon.svg" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Links Verified" data-bs-custom-class="verification-tooltip" height="20" alt="">
            @endif
            @if ($project->is_dooxed_kyc_verified)
            <img src="{{ asset('assets') }}/images/icons/kyc_icon.svg" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Doxxed KYC Verified" data-bs-custom-class="verification-tooltip kyc" height="20" alt="">
            @endif
        </div>
        <div class="mt-2">
            <p class="theme-text-body text-light-80">
                Public-sale:
                {{ date('d M Y', strtotime($project->pre_sale_date)) }}
            </p>
            <div class="mt-2 row gx-2 align-items-center">
                <img class="col-auto" src="{{ asset('assets') }}/images/icons/{{ $project->category->slug }}_price_icon.svg" width="12" height="20" alt="">
                <p class="col-auto theme-text-body theme-fw-400 text-uppercase">
                    {{ $project->pre_sale_price . ' ' . $project->category->short_name  }}
                </p>
            </div>
        </div>
    </div>
</div>

@section('custom-script')
<script>
    
</script>
@endsection