
@extends('layouts.app')

@section('content')

@include('layouts/template/include/sidebar');


<meta charset="utf-8" />
    <title>Dashboard | UBold - Responsive Admin Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="/assets/images/favicon.ico">


    <!-- Plugins css -->
    <link href=" /assets/libs/flatpickr/flatpickr.min.css" rel="stylesheet" type="text/css" />
    <link href=" /assets/libs/selectize/css/selectize.bootstrap3.css" rel="stylesheet" type="text/css" />

    <!-- Bootstrap css -->
    <link href=" /assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- App css -->
    <link href=" /assets/css/app.min.css" rel="stylesheet" type="text/css" id="app-style" />
    <!-- icons -->
    <link href=" /assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- Head js -->
    <script src=" /assets/js/head.js"></script>

    <link href=" /assets/css/custom.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href=" /assets/css/styles.css" rel="stylesheet" type="text/css">


    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>


<div class="content-page px-0">
            <div class="content">

                <!-- Start Content-->
                <div class="container-fluid p-3">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box">
                                <div class="page-title-right d-none">
                                    <form class="d-flex align-items-center mb-3">
                                        <div class="input-group input-group-sm">
                                            <input type="text" class="form-control bg-transparent border" id="dash-daterange">
                                            <span class="input-group-text bg-blue border-blue text-white">
                                                <i class="mdi mdi-calendar-range"></i>
                                            </span>
                                        </div>
                                        <a href="javascript: void(0);" class="btn btn-blue btn-sm ms-2">
                                            <i class="mdi mdi-autorenew"></i>
                                        </a>
                                        <a href="javascript: void(0);" class="btn btn-blue btn-sm ms-1">
                                            <i class="mdi mdi-filter-variant"></i>
                                        </a>
                                    </form>
                                </div>
                                <h4 class="page-title">Profile 

                                
                                </h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row g-0">
                        <!-- Profile Column  -->
                        <div class="col-lg-4">
                            <div class="widget-rounded-circle card" style="min-height: 750px;">
                                <div class="banner-img">
                                    <img src=" /assets/images/project_banner_image.png" height="160" style="width: 100%; object-fit: cover; object-position: center;" alt="">
                                </div>
                                <div class="profile mx-auto text-center px-30">
                                    <img src=" /assets/images/nft_project.png" width="150" height="150" class="rounded-circle" style="margin-top: -80px;" alt="">
                                    <p class="theme-text-sm theme-fw-400 text-light mt-3">Pre sale: 29 Jan</p>
                                    <h4 class="theme-h4 theme-fw-700 text-light mt-1">Cat Fight P2E NFT</h4>
                                </div>
                                <div class="mt-30 px-30">
                                    <div class="form-check form-switch d-flex justify-content-between p-0 mb-2">
                                        <label class="theme-text-sm text-light-70 theme-fw-400">Super Featured</label>
                                        <input class="form-check-input shadow-none border-0" type="checkbox" checked role="switch">
                                    </div>
                                    <div class="form-check form-switch d-flex justify-content-between p-0 mb-2">
                                        <label class="theme-text-sm text-light-70 theme-fw-400">Featured</label>
                                        <input class="form-check-input shadow-none border-0" type="checkbox" checked role="switch">
                                    </div>
                                    <div class="form-check form-switch d-flex justify-content-between p-0 mb-2">
                                        <label class="theme-text-sm text-light-70 theme-fw-400">Links Verified</label>
                                        <input class="form-check-input shadow-none border-0" type="checkbox" checked role="switch">
                                    </div>
                                    <div class="form-check form-switch d-flex justify-content-between p-0 mb-2">
                                        <label class="theme-text-sm text-light-70 theme-fw-400">Dooxed KYC Verified</label>
                                        <input class="form-check-input shadow-none border-0" type="checkbox" checked role="switch">
                                    </div>
                                    <div class="my-20 divider-light-10"></div>
                                    <div class="mb-20">
                                        <p class="theme-text-sm theme-fw-400 text-light-70">Social Profiles:</p>
                                        <div class="col row g-4 mt-3">
                                            <p class="col-auto theme-text-xsm theme-fw-400 text-light">
                                                <i class="text-primary fa-brands fa-twitter"></i>
                                                <span class="ms-1">Twitter (2.4K)</span>
                                            </p>
                                            <p class="col-auto theme-text-xsm theme-fw-400 text-light">
                                                <i class="text-primary fa-brands fa-discord"></i>
                                                <span class="ms-1">Discord (3.2K)</span>
                                            </p>
                                            <p class="col-auto theme-text-xsm theme-fw-400 text-light">
                                                <i class="text-primary fa-solid fa-globe"></i>
                                                <span class="ms-1">Website</span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="mb-20">
                                        <p class="theme-text-sm theme-fw-400 text-light-70 mb-3">Event Tags:</p>
                                        <div class="col row g-0">

                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end widget-rounded-circle-->
                        </div> <!-- end col-->
                        <!-- Project Detail Form Column -->
                        <div class="col-lg-8 ps-lg-4 pt-4 pt-lg-0">
                            <div class="widget-rounded-circle card p-20 m-0" style="padding-bottom: 200px;">
                                <!-- Project Info Section -->
                                <div class="mt-40">
                                    <div>
                                        <h3 class="theme-text-lg text-light mb-3">Project info</h3>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label theme-text-xsm text-light-70 mb-10">Project name <span class="ms-1 text-danger">*</span></label>
                                            @foreach ($result as $key => $proj)

                                            {{ $proj->project_name }}

                                            @endforeach
                                            <input value="" type="text" class="form-control bg-transparent theme-text-xsm shadow-none" placeholder="" />
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label theme-text-xsm text-light-70 mb-10">Chain <span class="ms-1 text-danger">*</span></label>
                                            <select class="form-select bg-transparent w-100 theme-text-xsm shadow-none">
                                                <option value="" selected>-- Choose your project chain --</option>
                                                <option value="1">One</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label theme-text-xsm text-light-70 mb-10">Total supply <span class="ms-1 text-danger">*</span></label>
                                            <input type="text" class="form-control bg-transparent theme-text-xsm shadow-none" placeholder="" />
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div>
                                            <label class="form-label theme-text-xsm text-light-70 mb-10">Project description <span class="ms-1 text-danger">*</span></label>
                                            <textarea class="form-control bg-transparent theme-text-xsm shadow-none" rows={6} placeholder=""></textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label theme-text-xsm text-light-70 mb-10">Twitter Link (Optional)</label>
                                            <input type="text" class="form-control bg-transparent theme-text-xsm shadow-none" placeholder="Enter URL" />
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label theme-text-xsm text-light-70 mb-10">Discord Link (Optional)</label>
                                            <input type="text" class="form-control bg-transparent theme-text-xsm shadow-none" placeholder="Enter URL" />
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label theme-text-xsm text-light-70 mb-10">Website Link (Optional)</label>
                                            <input type="text" class="form-control bg-transparent theme-text-xsm shadow-none" placeholder="Enter URL" />
                                        </div>
                                    </div>
                                </div>
                                <!-- Images Section -->
                                <div>
                                    <div class="mt-20 mb-3">
                                        <h3 class="theme-text-lg text-light ">Images</h3>
                                    </div>
                                    <div class="row">
                                        <div class="form-control-image-container cursor-pointer col-md-6 mb-3">
                                            <label class=" form-label theme-text-xsm text-light-70 mb-10">Profile Photo <span class="mx-2 text-danger">*</span> Ideal size: 240px X 240px</label>
                                            <input type="file" class="d-none" accept="image/*" />
                                            <div class="form-control-image bg-transparent text-center">
                                                <img src="/assets/images/icons/upload_icon.svg" alt="" />
                                                <p class="theme-text-xsm text-light-70">Drag and drop or browse</p>
                                            </div>
                                        </div>
                                        <div class="form-control-image-container cursor-pointer col-md-6 mb-3">
                                            <label class=" form-label theme-text-xsm text-light-70 mb-10">Banner Image <span class="mx-2">(Optional)</span> Ideal size: 1450px X 320px</label>
                                            <input type="file" class="d-none" accept="image/*" />
                                            <div class="form-control-image bg-transparent text-center">
                                                <img src="/assets/images/icons/upload_icon.svg" alt="" />
                                                <p class="theme-text-xsm text-light-70">Drag and drop or browse</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Pre-Sale Mint Details -->
                                <div class="">
                                    <div>
                                        <h3 class="theme-text-lg text-light mt-20 mb-3">Pre-Sale Mint Details</h3>
                                    </div>
                                    <div class="row">
                                        <div class="col mb-3">
                                            <label class="form-label theme-text-xsm text-light-70 mb-10">Timezone <span class="ms-1 text-danger">*</span></label>
                                            <select class="form-select bg-transparent theme-text-xsm shadow-none">
                                                <option value="" selected>-- Choose timezone --</option>
                                                <option value="1">One</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label theme-text-xsm text-light-70 mb-10">Pre-sale mint date (Optional)</label>
                                            <input type="date" class="form-control bg-transparent theme-text-xsm shadow-none" placeholder="Choose date" />
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label theme-text-xsm text-light-70 mb-10">Pre-sale mint time (Optional)</label>
                                            <input type="time" class="form-control bg-transparent theme-text-xsm shadow-none" placeholder="Choose date" />
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label theme-text-xsm text-light-70 mb-10">Pre-sale price (Optional)</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control bg-transparent theme-text-xsm shadow-none" placeholder="Enter price" />
                                                <span class="input-group-text bg-transparent">ETH</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Mint Details -->
                                <div class="">
                                    <div class="mt-20 mb-3">
                                        <h3 class="theme-text-lg text-light ">Mint Details</h3>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label theme-text-xsm text-light-70 mb-10">Mint date <span class="ms-1 text-danger">*</span></label>
                                            <input type="date" class="form-control bg-transparent theme-text-xsm shadow-none" placeholder="Choose date" />
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label theme-text-xsm text-light-70 mb-10">Mint time <span class="ms-1 text-danger">*</span></label>
                                            <input type="time" class="form-control bg-transparent theme-text-xsm shadow-none" placeholder="Choose date" />
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label theme-text-xsm text-light-70 mb-10">Mint price <span class="ms-1 text-danger">*</span></label>
                                            <div class="input-group">
                                                <input type="text" class="form-control bg-transparent theme-text-xsm shadow-none" placeholder="Enter price" />
                                                <span class="input-group-text bg-transparent">ETH</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Founder Info -->
                                <div class="">
                                    <div class="mt-20 mb-3">
                                        <h3 class="theme-text-lg text-light ">Founder Info</h3>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label theme-text-xsm text-light-70 mb-10">Full name (Optional)</label>
                                            <input type="text" class="form-control bg-transparent theme-text-xsm shadow-none" />
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label theme-text-xsm text-light-70 mb-10">Email <span class="ms-1 text-danger">*</span></label>
                                            <input type="email" class="form-control bg-transparent theme-text-xsm shadow-none" />
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label theme-text-xsm text-light-70 mb-10">Phone no. (Optional)</label>
                                            <input type="text" class="form-control bg-transparent theme-text-xsm shadow-none" />
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex">
                                    <button type="submit" class="btn-theme mt-60 px-60 h-60">Save</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row-->

                </div> <!-- container -->

            </div> <!-- content -->

            <!-- Footer Start -->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            &copy;
                            <script>
                                document.write(new Date().getFullYear())
                            </script>
                        </div>
                        <div class="col-md-6 d-none">
                            <div class="text-md-end footer-links d-none d-sm-block">
                                <a href="javascript:void(0);">About Us</a>
                                <a href="javascript:void(0);">Help</a>
                                <a href="javascript:void(0);">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- end Footer -->

        </div>


            <!-- Vendor js -->
    <!-- <script src="/assets/js/vendor.min.js"></script> -->

<!-- Plugins js-->
<script src=" /assets/libs/flatpickr/flatpickr.min.js"></script>
<script src=" /assets/libs/apexcharts/apexcharts.min.js"></script>

<script src=" /assets/libs/selectize/js/standalone/selectize.min.js"></script>

<!-- Dashboar 1 init js-->
<script src=" /assets/js/pages/dashboard-1.init.js"></script>

<!-- App js-->
<script src=" /assets/js/app.min.js"></script>

<script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>

@stop