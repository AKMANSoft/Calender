<div {{ $attributes->merge(['class' => 'col-auto d-flex']) }}>
    <a href="{{route('projects.show', $project)}}">
        <img src="{{ asset('storage') }}/{{ $project->profile_image_path }}" class="nft-project-item-img" alt="">
    </a>
    <div class="ms-20 d-flex flex-column justify-content-between">
        <div>
            <p class="theme-text-body mt-3">
                {{ $project->minting_status }}
            </p>
            <h5 class="theme-text-lg text-decoration-none text-light d-block theme-fw-700 my-2">{{ $project->name }}</h5>

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
                
            </div>
        </div>
    </div>
</div>

@section('custom-script')
<script>
    $(document).ready(function() {
        $("body").tooltip({
            selector: '[data-bs-toggle=tooltip]'
        });
    });
</script>
@endsection
