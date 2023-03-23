@extends('adminpanel.layouts.master')

@section('other-css')
    <!-- Plugins css -->
    <link href="{{ asset('assets') }}/libs/flatpickr/flatpickr.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets') }}/libs/selectize/css/selectize.bootstrap3.css" rel="stylesheet" type="text/css" />



    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="{{ asset('assets') }}/css/styles.css" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets') }}/css/custom.css" rel="stylesheet" type="text/css">


    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

    <style>
        a {
            text-decoration: none;
        }
    </style>
@endsection

@section('content')

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
                                        <input type="text" class="form-control bg-transparent border"
                                            id="dash-daterange">
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
                                <img src="{{ asset('storage') }}/{{ $project->banner_image_path }}" height="160"
                                    style="width: 100%; object-fit: cover; object-position: center;" alt="">
                            </div>

                            <form action="{{route('admin.projects.update', $project)}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="profile mx-auto text-center px-30">
                                    <img src="{{ asset('storage') }}/{{ $project->profile_image_path }}" width="150"
                                        height="150" class="rounded-circle" style="margin-top: -80px;" alt="">
                                    <p class="theme-text-sm theme-fw-400 text-light mt-3">Pre sale:
                                        {{ date('d M', strtotime($project->pre_sale_date)) }}</p>
                                    <h4 class="theme-h4 theme-fw-700 text-light mt-1">{{ $project->name }}</h4>
                                </div>

                                <div class="mt-30 px-30">
                                    <div class="form-check form-switch d-flex justify-content-between p-0 mb-2">
                                        <label class="theme-text-sm text-light-70 theme-fw-400">Super Featured</label>
                                        <input id="superFeatured" name="is_super_featured"
                                            class="form-check-input shadow-none border-0" type="checkbox" {{$project->is_super_featured ? 'checked' : ''}}
                                            role="switch">

                                    </div>
                                    <div class="form-check form-switch d-flex justify-content-between p-0 mb-2">
                                        <label class="theme-text-sm text-light-70 theme-fw-400">Featured</label>
                                        <input id="featured"  name="is_featured" class="form-check-input shadow-none border-0"
                                            type="checkbox" role="switch" {{$project->is_featured ? 'checked' : ''}}>
                                    </div>


                                    <div class="form-check form-switch d-flex justify-content-between p-0 mb-2">
                                        <label class="theme-text-sm text-light-70 theme-fw-400">Links Verified</label>
                                        <input id="linksVerified"  name="is_link_verified"
                                            class="form-check-input shadow-none border-0" type="checkbox" role="switch" {{$project->is_link_verified ? 'checked' : ''}}>
                                    </div>

                                    <div class="form-check form-switch d-flex justify-content-between p-0 mb-2">
                                        <label class="theme-text-sm text-light-70 theme-fw-400">Dooxed KYC
                                            Verified</label>
                                        <input id="kycVerified"  name="is_dooxed_kyc_verified"
                                            class="form-check-input shadow-none border-0" type="checkbox" role="switch" {{$project->is_dooxed_kyc_verified ? 'checked' : ''}}>
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
                                                <span class="ms-1">Website: {{ $project->website_link }} </span>

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
                                        <label class="form-label theme-text-xsm text-light-70 mb-10">Project name <span
                                                class="ms-1 text-danger">*</span></label>

                                        <input name="name" value="{{ $project->name }}" type="text"
                                            class="form-control bg-transparent theme-text-xsm shadow-none"
                                            placeholder="" />
                                            <div id="invalidfeedback8" class="text-danger">
                                                @error('name')
                                                {{$message}}
                                                @enderror
                                            </div>
                                    </div>


                                    <div class="col-md-4 mb-3">
                                        <label class="form-label theme-text-xsm text-light-70 mb-10">Chain <span
                                                class="ms-1 text-danger">*</span></label>
                                        <select name="project_category_id"
                                            class="form-select bg-transparent w-100 theme-text-xsm shadow-none">
                                            @foreach ($categories as $category)

                                            @if ($category->id == $project->project_category_id)
                                            <option selected value="{{$category->id}}">{{$category->name}}</option>
                                            @else
                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                            @endif
                                            @endforeach

                                        </select>
                                        <div id="invalidfeedback8" class="text-danger">
                                            @error('chain')
                                            {{$message}}
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label class="form-label theme-text-xsm text-light-70 mb-10">Total supply <span
                                                class="ms-1 text-danger">*</span></label>
                                        <input name="total_supply" value="{{ $project->total_supply }}" type="text"
                                            class="form-control bg-transparent theme-text-xsm shadow-none"
                                            placeholder="" />
                                            <div id="invalidfeedback8" class="text-danger">
                                                @error('total_supply')
                                                {{$message}}
                                                @enderror
                                            </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div>
                                        <label class="form-label theme-text-xsm text-light-70 mb-10">Project description
                                            <span class="ms-1 text-danger">*</span></label>

                                        <textarea name="description" class="form-control bg-transparent theme-text-xsm shadow-none" rows={6}> {{ $project->description }} </textarea>
                                    </div>
                                    <div id="invalidfeedback8" class="text-danger">
                                        @error('description')
                                        {{$message}}
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 mb-3">
                                        <label class="form-label theme-text-xsm text-light-70 mb-10">Twitter Link
                                            (Optional)
                                        </label>
                                        <input name="twitter_link" value="{{ $project->twitter_link }}" type="text"
                                            class="form-control bg-transparent theme-text-xsm shadow-none"
                                            placeholder="Enter URL" />
                                            <div id="invalidfeedback8" class="text-danger">
                                                @error('twitter_link')
                                                {{$message}}
                                                @enderror
                                            </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label class="form-label theme-text-xsm text-light-70 mb-10">Discord Link
                                            (Optional)</label>
                                        <input name="discord_link" value="{{ $project->discord_link }}" type="text"
                                            class="form-control bg-transparent theme-text-xsm shadow-none"
                                            placeholder="Enter URL" />
                                            <div id="invalidfeedback8" class="text-danger">
                                                @error('discord_link')
                                                {{$message}}
                                                @enderror
                                            </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label class="form-label theme-text-xsm text-light-70 mb-10">Website Link
                                            (Optional)</label>
                                        <input name="website_link" value="{{ $project->website_link }}" type="text"
                                            class="form-control bg-transparent theme-text-xsm shadow-none"
                                            placeholder="Enter URL" />
                                            <div id="invalidfeedback8" class="text-danger">
                                                @error('website_link')
                                                {{$message}}
                                                @enderror
                                            </div>
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
                                        <label class=" form-label theme-text-xsm text-light-70 mb-10">Profile Photo <span
                                                class="mx-2 text-danger">*</span> Ideal size: 240px X 240px</label>
                                        <input type="file" name="profile_image_path" class="d-none" accept="image/*" />
                                        <div class="form-control-image bg-transparent text-center">
                                            <img src="{{ asset('assets') }}/images/icons/upload_icon.svg"
                                                alt="" />
                                            <p class="theme-text-xsm text-light-70">Drag and drop or browse</p>
                                        </div>
                                        <div id="invalidfeedback8" class="text-danger">
                                            @error('chain')
                                            {{$message}}
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-control-image-container cursor-pointer col-md-6 mb-3">
                                        <label class=" form-label theme-text-xsm text-light-70 mb-10">Banner Image <span
                                                class="mx-2">(Optional)</span> Ideal size: 1450px X 320px</label>
                                        <input type="file" name="banner_image_path" class="d-none" accept="image/*" />
                                        <div class="form-control-image bg-transparent text-center">
                                            <img src="{{ asset('assets') }}/images/icons/upload_icon.svg"
                                                alt="" />
                                            <p class="theme-text-xsm text-light-70">Drag and drop or browse</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="mt-20 mb-3">
                                    <h3 class="theme-text-lg text-light ">Paths</h3>
                                </div>
                                <div class="row">
                                    <div class="form-control-image-container cursor-pointer col-md-6 mb-3">
                                        <input name="profile_image_path" type="text"
                                            class="form-control bg-transparent theme-text-xsm shadow-none" placeholder=""
                                            readonly />
                                    </div>
                                    <!-- <img src="https://mymlbucket100.s3.ap-southeast-2.amazonaws.com/{{ $project->path_image }}" width="100" height="100">  -->
                                    <div class="form-control-image-container cursor-pointer col-md-6 mb-3">
                                        <input name="banner_image_path" type="text"
                                            class="form-control bg-transparent theme-text-xsm shadow-none" placeholder=""
                                            readonly />
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
                                        <label class="form-label theme-text-xsm text-light-70 mb-10">Timezone <span
                                                class="ms-1 text-danger">*</span></label>
                                        <select name="pre_sale_timezone"
                                            class="form-select bg-transparent theme-text-xsm shadow-none">
                                            <option value="{{ $project->pre_sale_timezone }}">
                                                {{ $project->pre_sale_timezone }} </option>
                                            <option value="1">One</option>
                                        </select>
                                        <div id="invalidfeedback8" class="text-danger">
                                            @error('pre_sale_timezone')
                                            {{$message}}
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 mb-3">
                                        <label class="form-label theme-text-xsm text-light-70 mb-10">Pre-sale mint date
                                            (Optional)</label>
                                        <input name="pre_sale_date" value="{{ $project->pre_sale_date }}" type="date"
                                            class="form-control bg-transparent theme-text-xsm shadow-none"
                                            placeholder="Choose date" />
                                            <div id="invalidfeedback8" class="text-danger">
                                                @error('pre_sale_date')
                                                {{$message}}
                                                @enderror
                                            </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label class="form-label theme-text-xsm text-light-70 mb-10">Pre-sale mint time
                                            (Optional)</label>
                                        <input name="pre_sale_time" value="{{ $project->pre_sale_time }}" type="time"
                                            class="form-control bg-transparent theme-text-xsm shadow-none"
                                            placeholder="Choose date" />
                                            <div id="invalidfeedback8" class="text-danger">
                                                @error('pre_sale_time')
                                                {{$message}}
                                                @enderror
                                            </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label class="form-label theme-text-xsm text-light-70 mb-10">Pre-sale price
                                            (Optional)</label>
                                        <div class="input-group">
                                            <input name="pre_sale_price" value="{{ $project->pre_sale_price }}" type="text"
                                                class="form-control bg-transparent theme-text-xsm shadow-none"
                                                placeholder="Enter price" />
                                            <span class="input-group-text bg-transparent">ETH</span>
                                        </div>
                                        <div id="invalidfeedback8" class="text-danger">
                                            @error('pre_sale_price')
                                            {{$message}}
                                            @enderror
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
                                        <label class="form-label theme-text-xsm text-light-70 mb-10">Mint date <span
                                                class="ms-1 text-danger">*</span></label>
                                        <input name="mint_date" value="{{ $project->mint_date }}" type="date"
                                            class="form-control bg-transparent theme-text-xsm shadow-none"
                                            placeholder="Choose date" />
                                            <div id="invalidfeedback8" class="text-danger">
                                                @error('mint_date')
                                                {{$message}}
                                                @enderror
                                            </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label class="form-label theme-text-xsm text-light-70 mb-10">Mint time <span
                                                class="ms-1 text-danger">*</span></label>
                                        <input name="mint_time" value="{{ $project->mint_time }}" type="time"
                                            class="form-control bg-transparent theme-text-xsm shadow-none"
                                            placeholder="Choose date" />
                                            <div id="invalidfeedback8" class="text-danger">
                                                @error('mint_time')
                                                {{$message}}
                                                @enderror
                                            </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label class="form-label theme-text-xsm text-light-70 mb-10">Mint price <span
                                                class="ms-1 text-danger">*</span></label>
                                        <div class="input-group">
                                            <input name="mint_price" value="{{ $project->mint_price }}" type="text"
                                                class="form-control bg-transparent theme-text-xsm shadow-none"
                                                placeholder="Enter price" />
                                            <span class="input-group-text bg-transparent">ETH</span>
                                        </div>
                                        <div id="invalidfeedback8" class="text-danger">
                                            @error('mint_price')
                                            {{$message}}
                                            @enderror
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
                                        <label class="form-label theme-text-xsm text-light-70 mb-10">Full name
                                            (Optional)</label>
                                        <input name="founder_name" value="{{ $project->founder_name }}" type="text"
                                            class="form-control bg-transparent theme-text-xsm shadow-none" />
                                            <div id="invalidfeedback8" class="text-danger">
                                                @error('founder_name')
                                                {{$message}}
                                                @enderror
                                            </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label class="form-label theme-text-xsm text-light-70 mb-10">Email <span
                                                class="ms-1 text-danger">*</span></label>
                                        <input name="founder_email" value="{{ $project->founder_email }}" type="email"
                                            class="form-control bg-transparent theme-text-xsm shadow-none" />
                                            <div id="invalidfeedback8" class="text-danger">
                                                @error('founder_email')
                                                {{$message}}
                                                @enderror
                                            </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label class="form-label theme-text-xsm text-light-70 mb-10">Phone no.
                                            (Optional)</label>
                                        <input name="founder_phone" value="{{ $project->founder_phone }}" type="text"
                                            class="form-control bg-transparent theme-text-xsm shadow-none" />
                                            <div id="invalidfeedback8" class="text-danger">
                                                @error('founder_phone')
                                                {{$message}}
                                                @enderror
                                            </div>
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex">
                                <input type="submit" class="btn-theme mt-60 px-60 h-60" />
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
                <!-- end row-->

            </div> <!-- container -->

        </div> <!-- content -->

        @include('adminpanel.partials.footer')

    </div>




@stop

@section('custom-script')
    <!-- Vendor js -->
    <!-- <script src="{{ asset('assets') }}/js/vendor.min.js"></script> -->

    <!-- Plugins js-->
    <script src="{{ asset('assets') }}/libs/flatpickr/flatpickr.min.js"></script>
    <script src="{{ asset('assets') }}/libs/apexcharts/apexcharts.min.js"></script>

    <script src="{{ asset('assets') }}/libs/selectize/js/standalone/selectize.min.js"></script>

    <!-- Dashboar 1 init js-->
    <script src="{{ asset('assets') }}/js/pages/dashboard-1.init.js"></script>

    <!-- App js-->
    <script src="{{ asset('assets') }}/js/app.min.js"></script>

    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
@endsection
