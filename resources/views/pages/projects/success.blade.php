@extends('layouts.master')
@section('content')
<main class="mx-auto mt-160 px-60-auto mb-100" style="max-width: 1220px">
    <div class="text-center">
        <h1 class="fs-1 fw-bold">Project submitted successfuly!</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore</p>
    </div>
    <div class="mt-90 row gx-4 gx-lg-5 gy-4 gy-md-0 mx-auto h-100" style="max-width: 900px;">
        <div class="col-md-6">
            <div class="d-flex flex-column justify-content-between bg-white-10 p-30 rounded-3 h-100" style="min-height: 360px">
                <div>
                    <div class='row align-items-center gx-3 pb-3 border-bottom border-1 border-muted'>
                        <p class="text-light col-auto">Free Basic Verification</p>
                        <img src="/assets/images/icons/verified_icon.svg" height="20" alt="" class="col-auto" />
                    </div>
                    <h3 class="fs-32 fw-bold text-primary pt-20 pb-30 border-bottom border-1 border-muted">Free</h3>
                    <p class="mt-3 theme-text-body theme-fw-400 text-light">For FREE Project Verification, you must complete ALL of the following:</p>
                    <ul class='pt-20 list-group'>
                        <li class="text-light mb-3 d-flex theme-text-sm p-0" style="gap: 10px; list-style: none;">
                            <span class="bg-light-30 theme-fw-700 mt-1 text-center rounded-circle d-inline-block" style="line-height: 24px; aspect-ratio: 1; min-width: 24px; height: 24px;">
                                1
                            </span>
                            <span class="theme-fw-400">
                                <span class="theme-fw-700">Verify Twitter.</span>
                                Follow <a class="text-primary" href="https://twitter.com/MoonLanding_M" target="_blank">@moonlanding_m</a> on Twitter, and DM us to confirm.
                            </span>
                        </li>
                        <li class="text-light mb-3 d-flex theme-text-sm p-0" style="gap: 10px; list-style: none;">
                            <span class="bg-light-30 theme-fw-700 mt-1 text-center rounded-circle d-inline-block" style="line-height: 24px; aspect-ratio: 1; min-width: 24px; height: 24px;">
                                2
                            </span>
                            <span class="theme-fw-400">
                                <span class="theme-fw-700">Verify Website.</span>
                                Post <a href="#" class="text-primary" onclick="openImageInNewTab('https://example.com/image.jpg')">this small image</a> in your website's footer or other, hyperlinking back to <a class="text-primary" href="https://moonlanding.media/" target="_blank">https://moonlanding.media/</a>.
                            </span>
                        </li>
                        <li class="text-light mb-3 d-flex theme-text-sm p-0" style="gap: 10px; list-style: none;">
                            <span class="bg-light-30 theme-fw-700 mt-1 text-center rounded-circle d-inline-block" style="line-height: 24px; aspect-ratio: 1; min-width: 24px; height: 24px;">
                                3
                            </span>
                            <span class="theme-fw-400">
                                <span class="theme-fw-700">Verify Collab.</span>
                                Post a tweet announcing you have just submitted your project on <a class="text-primary" href="https://twitter.com/MoonLanding_M" target="_blank">@moonlanding_m</a> upcoming NFT calendar, sharing the good news with your community.
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="d-flex flex-column justify-content-between bg-white-10 p-30 rounded-3 h-100" style="min-height: 360px">
                <div>
                    <div class='row align-items-center gx-3 pb-3 border-bottom border-1 border-muted'>
                        <p class="text-light col-auto">Premium KYC Verification</p>
                        <img src="/assets/images/icons/kyc_icon.svg" height="20" alt="" class="col-auto" />
                    </div>
                    <h3 class="fs-32 fw-bold text-primary pt-20 pb-30 border-bottom border-1 border-muted">0.5 ETH</h3>
                    <p class="mt-3 theme-text-body theme-fw-400 text-light">Add trust and sell more with premium verification. This Gold Standard allows founders to prove to the community they are serious and will not rug or scam, while still remaining anonymous.</p>
                    <p class="pt-20" style="font-size: 11px;">This service is provided by DeFi Link, a registered crypto exchange governed and regulated in Australia in accordance with all applicable laws. DeFi Link will never share your personal details to the public, and may only share your information to relevant authorities in the event of serious illegal activity. Use this to gain the trust of doxing without doxing publicly!</li></p>
                    
                </div>
                <div>
                    <!-- <a href="#" class="w-100 btn-theme mt-4 fs-14 fw-400 line-46">Get KYC Verified</a> -->
                    <!-- <div> -->
                    <!-- <a class="buy-with-crypto w-100 btn-theme mt-4 fs-14 fw-400 line-46" href="https://commerce.coinbase.com/checkout/67b9e57d-5580-4211-bb2c-70698bed78d0"> -->

                    <a class="buy-with-crypto w-100 btn-theme mt-4 fs-14 fw-400 line-46" style="background: #AB4DAB; display: flex; align-items: center;" href="https://commerce.coinbase.com/checkout/67b9e57d-5580-4211-bb2c-70698bed78d0">
                        Get KYC Verified
                    </a>
                    <script src="https://commerce.coinbase.com/v1/checkout.js?version=201807">
                    </script>
                    <!-- </div> -->

                </div>
            </div>
        </div>
    </div>
</main>
@endsection