@extends('layouts.master')
@section('content')
    <main class="mx-auto mt-160 px-60-auto mb-100" style="max-width: 1220px">
        <div class="text-center">
            <h1 class="fs-1 fw-bold">Project submitted successfuly!</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore</p>
        </div>
        <div class="mt-90 row gx-4 gx-lg-5 gy-4 gy-md-0 mx-auto h-100" style="max-width: 900px;">
            <div class="col-md-6">
                <div class="d-flex flex-column justify-content-between bg-white-10 p-30 rounded-3 h-100"
                    style="min-height: 360px">
                    <div>
                        <div class='row align-items-center gx-3 pb-3 border-bottom border-1 border-muted'>
                            <p class="text-light col-auto">Free low level verification</p>
                            <img src="/assets/images/icons/verified_icon.svg" height="20" alt=""
                                class="col-auto" />
                        </div>
                        <h3 class="fs-32 fw-bold text-primary pt-20 pb-30 border-bottom border-1 border-muted">Free</h3>
                        <ul class='pt-20 list-group'>
                            <li class="text-light mb-3">Please provide text to be written here. the process the avail this
                                verification</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="d-flex flex-column justify-content-between bg-white-10 p-30 rounded-3 h-100"
                    style="min-height: 360px">
                    <div>
                        <div class='row align-items-center gx-3 pb-3 border-bottom border-1 border-muted'>
                            <p class="text-light col-auto">Free low level verification</p>
                            <img src="/assets/images/icons/kyc_badge.svg" height="30" alt="" class="col-auto" />
                        </div>
                        <h3 class="fs-32 fw-bold text-primary pt-20 pb-30 border-bottom border-1 border-muted">1.0 ETH</h3>
                        <ul class='pt-20 list-group'>
                            <li class="text-light mb-3">Please provide text to be written here. the process the avail this
                                verification</li>
                        </ul>
                    </div>
                    <div>
                        <a href="#" class="w-100 btn-theme mt-4 fs-14 fw-400 line-46">Get KYC Verified</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
