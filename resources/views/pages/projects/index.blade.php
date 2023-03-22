@extends('layouts.master')
@section('content')
    <main class="mx-auto mt-150 px-60-auto max-1440">
        <div>
            <h1 class="fs-1 fw-bold">Upcoming Projects</h1>
        </div>
        <div class="my-30 border-muted"></div>
        <div class="">
            <div class="d-flex flex-column flex-lg-row row-cols-2 gap-40">
                <div class="col-12 col-lg-4 wmax-430">
                    <div class="py-20">
                        <p class="theme-text-body mb-3">NFT Calendar</p>
                        <div class="row g-3">
                            <div class="col-auto wmin-100 col-xl-6">
                                <button type="button"
                                    class="btn theme-text-sm p-10 w-100 bg-light-10 rounded-pill text-uppercase">Most
                                    Popular</button>
                            </div>
                            <div class="col-auto wmin-100 col-xl-6">
                                <button type="button"
                                    class="btn theme-text-sm p-10 w-100 bg-light-10 rounded-pill text-uppercase text-primary">Upcoming</button>
                            </div>
                            <div class="col-auto wmin-100 col-xl-6">
                                <button type="button"
                                    class="btn theme-text-sm p-10 w-100 bg-light-10 rounded-pill text-uppercase">Recently
                                    Closed</button>
                            </div>
                            <div class="col-auto wmin-100 col-xl-6">
                                <button type="button"
                                    class="btn theme-text-sm p-10 w-100 bg-light-10 rounded-pill text-uppercase">Minting
                                    Soon</button>
                            </div>
                        </div>
                    </div>
                    <div class="py-20">
                        <p class="theme-text-body mb-3">Blockchain</p>
                        <div class="row g-3">
                            <div class="col-auto wmin-100 col-xl-6">
                                <button type="button"
                                    class="btn theme-text-sm p-10 w-100 bg-light-10 rounded-pill text-uppercase">All</button>
                            </div>
                            <div class="col-auto wmin-100 col-xl-6">
                                <button type="button"
                                    class="btn theme-text-sm p-10 w-100 bg-light-10 rounded-pill text-uppercase">Ethereum</button>
                            </div>
                            <div class="col-auto wmin-100 col-xl-6">
                                <button type="button"
                                    class="btn theme-text-sm p-10 w-100 bg-light-10 rounded-pill text-uppercase">Solana</button>
                            </div>
                            <div class="col-auto wmin-100 col-xl-6">
                                <button type="button"
                                    class="btn theme-text-sm p-10 w-100 bg-light-10 rounded-pill text-uppercase">Flow</button>
                            </div>
                            <div class="col-auto wmin-100 col-xl-6">
                                <button type="button"
                                    class="btn theme-text-sm p-10 w-100 bg-light-10 rounded-pill text-uppercase">Polygon</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-8">
                    <div class="row g-4">
                        <div class="col-md-6 col-lg-12 col-xl-6 d-flex gap-20">
                            <img src="../public/images/nft_2.png" class="nft-project-item-img" alt="">
                            <div class="d-flex flex-column justify-content-between">
                                <div>
                                    <p class="theme-text-body mt-2">Feb 22, 2023</p>
                                    <h5 class="theme-text-lg theme-fw-700 my-2">xHamsterNFT</h5>
                                    <img src="../public/images/icons/verified_icon.svg" width="20" height="20"
                                        alt="">
                                </div>
                                <div>
                                    <p class="theme-text-body text-light-80">Public-sale: 19 Dec 2022</p>
                                    <div class="mt-2 row gx-2">
                                        <img class="col-auto" src="../public/images/icons/price_icon.svg" width="12"
                                            height="20" alt="">
                                        <p class="col-auto theme-text-body theme-fw-400 text-uppercase">1.0 Eth</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-12 col-xl-6 d-flex gap-20">
                            <img src="../public/images/nft_2.png" class="nft-project-item-img" alt="">
                            <div class="d-flex flex-column justify-content-between">
                                <div>
                                    <p class="theme-text-body mt-2">Feb 22, 2023</p>
                                    <h5 class="theme-text-lg theme-fw-700 my-2">xHamsterNFT</h5>
                                    <img src="../public/images/icons/verified_icon.svg" width="20" height="20"
                                        alt="">
                                </div>
                                <div>
                                    <p class="theme-text-body text-light-80">Public-sale: 19 Dec 2022</p>
                                    <div class="mt-2 row gx-2">
                                        <img class="col-auto" src="../public/images/icons/price_icon.svg" width="12"
                                            height="20" alt="">
                                        <p class="col-auto theme-text-body theme-fw-400 text-uppercase">1.0 Eth</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-12 col-xl-6 d-flex gap-20">
                            <img src="../public/images/nft_2.png" class="nft-project-item-img" alt="">
                            <div class="d-flex flex-column justify-content-between">
                                <div>
                                    <p class="theme-text-body mt-2">Feb 22, 2023</p>
                                    <h5 class="theme-text-lg theme-fw-700 my-2">xHamsterNFT</h5>
                                    <img src="../public/images/icons/verified_icon.svg" width="20" height="20"
                                        alt="">
                                </div>
                                <div>
                                    <p class="theme-text-body text-light-80">Public-sale: 19 Dec 2022</p>
                                    <div class="mt-2 row gx-2">
                                        <img class="col-auto" src="../public/images/icons/price_icon.svg" width="12"
                                            height="20" alt="">
                                        <p class="col-auto theme-text-body theme-fw-400 text-uppercase">1.0 Eth</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-12 col-xl-6 d-flex gap-20">
                            <img src="../public/images/nft_2.png" class="nft-project-item-img" alt="">
                            <div class="d-flex flex-column justify-content-between">
                                <div>
                                    <p class="theme-text-body mt-2">Feb 22, 2023</p>
                                    <h5 class="theme-text-lg theme-fw-700 my-2">xHamsterNFT</h5>
                                    <img src="../public/images/icons/verified_icon.svg" width="20" height="20"
                                        alt="">
                                </div>
                                <div>
                                    <p class="theme-text-body text-light-80">Public-sale: 19 Dec 2022</p>
                                    <div class="mt-2 row gx-2">
                                        <img class="col-auto" src="../public/images/icons/price_icon.svg" width="12"
                                            height="20" alt="">
                                        <p class="col-auto theme-text-body theme-fw-400 text-uppercase">1.0 Eth</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-12 col-xl-6 d-flex gap-20">
                            <img src="../public/images/nft_2.png" class="nft-project-item-img" alt="">
                            <div class="d-flex flex-column justify-content-between">
                                <div>
                                    <p class="theme-text-body mt-2">Feb 22, 2023</p>
                                    <h5 class="theme-text-lg theme-fw-700 my-2">xHamsterNFT</h5>
                                    <img src="../public/images/icons/verified_icon.svg" width="20" height="20"
                                        alt="">
                                </div>
                                <div>
                                    <p class="theme-text-body text-light-80">Public-sale: 19 Dec 2022</p>
                                    <div class="mt-2 row gx-2">
                                        <img class="col-auto" src="../public/images/icons/price_icon.svg" width="12"
                                            height="20" alt="">
                                        <p class="col-auto theme-text-body theme-fw-400 text-uppercase">1.0 Eth</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-12 col-xl-6 d-flex gap-20">
                            <img src="../public/images/nft_2.png" class="nft-project-item-img"
                                style="max-width: 200px; aspect-ratio: 1;" alt="">
                            <div class="d-flex flex-column justify-content-between">
                                <div>
                                    <p class="theme-text-body mt-2">Feb 22, 2023</p>
                                    <h5 class="theme-text-lg theme-fw-700 my-2">xHamsterNFT</h5>
                                    <img src="../public/images/icons/verified_icon.svg" width="20" height="20"
                                        alt="">
                                </div>
                                <div>
                                    <p class="theme-text-body text-light-80">Public-sale: 19 Dec 2022</p>
                                    <div class="mt-2 row gx-2">
                                        <img class="col-auto" src="../public/images/icons/price_icon.svg" width="12"
                                            height="20" alt="">
                                        <p class="col-auto theme-text-body theme-fw-400 text-uppercase">1.0 Eth</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-12 col-xl-6 d-flex gap-20">
                            <img src="../public/images/nft_2.png" class="nft-project-item-img" alt="">
                            <div class="d-flex flex-column justify-content-between">
                                <div>
                                    <p class="theme-text-body mt-2">Feb 22, 2023</p>
                                    <h5 class="theme-text-lg theme-fw-700 my-2">xHamsterNFT</h5>
                                    <img src="../public/images/icons/verified_icon.svg" width="20" height="20"
                                        alt="">
                                </div>
                                <div>
                                    <p class="theme-text-body text-light-80">Public-sale: 19 Dec 2022</p>
                                    <div class="mt-2 row gx-2">
                                        <img class="col-auto" src="../public/images/icons/price_icon.svg" width="12"
                                            height="20" alt="">
                                        <p class="col-auto theme-text-body theme-fw-400 text-uppercase">1.0 Eth</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-12 col-xl-6 d-flex gap-20">
                            <img src="../public/images/nft_2.png" class="nft-project-item-img"
                                style="max-width: 200px; aspect-ratio: 1;" alt="">
                            <div class="d-flex flex-column justify-content-between">
                                <div>
                                    <p class="theme-text-body mt-2">Feb 22, 2023</p>
                                    <h5 class="theme-text-lg theme-fw-700 my-2">xHamsterNFT</h5>
                                    <img src="../public/images/icons/verified_icon.svg" width="20" height="20"
                                        alt="">
                                </div>
                                <div>
                                    <p class="theme-text-body text-light-80">Public-sale: 19 Dec 2022</p>
                                    <div class="mt-2 row gx-2">
                                        <img class="col-auto" src="../public/images/icons/price_icon.svg" width="12"
                                            height="20" alt="">
                                        <p class="col-auto theme-text-body theme-fw-400 text-uppercase">1.0 Eth</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <div class="interaction_card mt-190" style="background-image: url(/public/images/interact_card_stars_large.svg);">
        <div class="inner-container">
            <h2 class="theme-h2 heading theme-fw-700">Are you a project founder? Do you want to get listed?</h2>
            <button type="button" class="btn-theme-light">
                Submit Project
                <i class="fa-solid fa-chevron-right"></i>
            </button>
        </div>
    </div>
@endsection
