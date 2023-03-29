@extends('adminpanel.layouts.master')

@section('other-css')
<!-- Plugins css -->
<link href="{{ asset('assets') }}/libs/flatpickr/flatpickr.min.css" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets') }}/libs/selectize/css/selectize.bootstrap3.css" rel="stylesheet" type="text/css" />



<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

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
                            <img src="{{ asset('storage') }}/{{ $project->banner_image_path }}" height="160" style="width: 100%; object-fit: cover; object-position: center;" alt="">
                        </div>

                        <form action="{{ route('admin.projects.update', $project) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="profile mx-auto text-center px-30">
                                <img src="{{ asset('storage') }}/{{ $project->profile_image_path }}" width="150" height="150" class="rounded-circle" style="margin-top: -80px;" alt="">
                                <p class="theme-text-sm theme-fw-400 text-light mt-3">Pre sale:
                                    {{ date('d M', strtotime($project->pre_sale_date)) }}
                                </p>
                                <h4 class="theme-h4 theme-fw-700 text-light mt-1">{{ $project->name }}</h4>
                            </div>

                            <div class="mt-30 px-30">
                                <div class="form-check form-switch d-flex justify-content-between p-0 mb-2">
                                    <label class="theme-text-sm text-light-70 theme-fw-400">Super Featured</label>
                                    <input id="superFeatured" name="is_super_featured" class="form-check-input shadow-none border-0" type="checkbox" {{ $project->is_super_featured ? 'checked' : '' }} role="switch">

                                </div>
                                <div class="form-check form-switch d-flex justify-content-between p-0 mb-2">
                                    <label class="theme-text-sm text-light-70 theme-fw-400">Featured</label>
                                    <input id="featured" name="is_featured" class="form-check-input shadow-none border-0" type="checkbox" role="switch" {{ $project->is_featured ? 'checked' : '' }}>
                                </div>


                                <div class="form-check form-switch d-flex justify-content-between p-0 mb-2">
                                    <label class="theme-text-sm text-light-70 theme-fw-400">Links Verified</label>
                                    <input id="linksVerified" name="is_link_verified" class="form-check-input shadow-none border-0" type="checkbox" role="switch" {{ $project->is_link_verified ? 'checked' : '' }}>
                                </div>

                                <div class="form-check form-switch d-flex justify-content-between p-0 mb-2">
                                    <label class="theme-text-sm text-light-70 theme-fw-400">Dooxed KYC
                                        Verified</label>
                                    <input id="kycVerified" name="is_dooxed_kyc_verified" class="form-check-input shadow-none border-0" type="checkbox" role="switch" {{ $project->is_dooxed_kyc_verified ? 'checked' : '' }}>
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

                    <div>
                        <div class="widget-rounded-circle card p-20 m-0" style="padding-bottom: 50px;">
                            <form>
                                <!-- Project Info Section -->
                                <div class="mt-40">
                                    <div>
                                        <h3 class="theme-text-lg theme-fw-700 text-light mb-3">Project info</h3>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label theme-text-xsm text-light-70 mb-10">Project name <span class="ms-1 text-danger">*</span></label>

                                            <input name="name" value="{{ $project->name }}" type="text" class="form-control bg-transparent theme-text-xsm shadow-none" placeholder="" />
                                            <div id="invalidfeedback8" class="text-danger">
                                                @error('name')
                                                {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label theme-text-xsm text-light-70 mb-10">Chain <span class="ms-1 text-danger">*</span></label>
                                            <select name="project_category_id" class="form-select bg-transparent w-100 theme-text-xsm shadow-none">
                                                @foreach ($categories as $category)
                                                @if ($category->id == $project->project_category_id)
                                                <option selected value="{{ $category->id }}">{{ $category->name }}
                                                </option>
                                                @else
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                @endif
                                                @endforeach

                                            </select>
                                            <div id="invalidfeedback8" class="text-danger">
                                                @error('chain')
                                                {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label theme-text-xsm text-light-70 mb-10">Total supply <span class="ms-1 text-danger">*</span></label>
                                            <input name="total_supply" value="{{ $project->total_supply }}" type="text" class="form-control bg-transparent theme-text-xsm shadow-none" placeholder="" />
                                            <div id="invalidfeedback8" class="text-danger">
                                                @error('total_supply')
                                                {{ $message }}
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
                                            {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label theme-text-xsm text-light-70 mb-10">Twitter Link
                                                (Optional)
                                            </label>
                                            <input name="twitter_link" value="{{ $project->twitter_link }}" type="text" class="form-control bg-transparent theme-text-xsm shadow-none" placeholder="Enter URL" />
                                            <div id="invalidfeedback8" class="text-danger">
                                                @error('twitter_link')
                                                {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label theme-text-xsm text-light-70 mb-10">Discord Link
                                                (Optional)</label>
                                            <input name="discord_link" value="{{ $project->discord_link }}" type="text" class="form-control bg-transparent theme-text-xsm shadow-none" placeholder="Enter URL" />
                                            <div id="invalidfeedback8" class="text-danger">
                                                @error('discord_link')
                                                {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label theme-text-xsm text-light-70 mb-10">Website Link
                                                (Optional)</label>
                                            <input name="website_link" value="{{ $project->website_link }}" type="text" class="form-control bg-transparent theme-text-xsm shadow-none" placeholder="Enter URL" />
                                            <div id="invalidfeedback8" class="text-danger">
                                                @error('website_link')
                                                {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Images Section -->
                                <div>
                                    <div class="mt-20 mb-3">
                                        <h3 class="theme-text-lg theme-fw-700 text-light ">Images</h3>
                                    </div>
                                    <div class="row">
                                        <div class="form-control-image-container cursor-pointer col-md-6 mb-3">
                                            <label class=" form-label theme-text-xsm text-light-70 mb-10">Profile Photo <span class="mx-2 text-danger">*</span> Ideal size: 240px X 240px</label>
                                            <input type="file" name="profile_image_path" class="d-none" accept="image/*" />
                                            <div class="form-control-image bg-transparent text-center">
                                                <img src="{{ asset('assets') }}/images/icons/upload_icon.svg" alt="" />
                                                <p class="theme-text-xsm text-light-70">Drag and drop or browse</p>
                                            </div>
                                            <div id="invalidfeedback8" class="text-danger">
                                                @error('chain')
                                                {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-control-image-container cursor-pointer col-md-6 mb-3">
                                            <label class=" form-label theme-text-xsm text-light-70 mb-10">Banner Image <span class="mx-2">(Optional)</span> Ideal size: 1450px X 320px</label>
                                            <input type="file" name="banner_image_path" class="d-none" accept="image/*" />
                                            <div class="form-control-image bg-transparent text-center">
                                                <img src="{{ asset('assets') }}/images/icons/upload_icon.svg" alt="" />
                                                <p class="theme-text-xsm text-light-70">Drag and drop or browse</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="mt-20 mb-3">
                                        <h3 class="theme-text-lg theme-fw-700 text-light ">Paths</h3>
                                    </div>
                                    <div class="row">
                                        <div class="form-control-image-container cursor-pointer col-md-6 mb-3">
                                            <input name="profile_image_path" type="text" class="form-control bg-transparent theme-text-xsm shadow-none" placeholder="" readonly />
                                        </div>
                                        <!-- <img src="https://mymlbucket100.s3.ap-southeast-2.amazonaws.com/{{ $project->path_image }}" width="100" height="100">  -->
                                        <div class="form-control-image-container cursor-pointer col-md-6 mb-3">
                                            <input name="banner_image_path" type="text" class="form-control bg-transparent theme-text-xsm shadow-none" placeholder="" readonly />
                                        </div>
                                    </div>
                                </div>
                                <!-- Pre-Sale Mint Details -->
                                <div class="">
                                    <div>
                                        <h3 class="theme-text-lg theme-fw-700 text-light mt-20 mb-3">Pre-Sale Mint Details</h3>
                                    </div>
                                    <div class="row">
                                        <div class="col mb-3">
                                            <label class="form-label theme-text-xsm text-light-70 mb-10">Timezone <span class="ms-1 text-danger">*</span></label>
                                            <select name="pre_sale_timezone" class="form-select bg-transparent theme-text-xsm shadow-none">
                                                <option value="{{ $project->pre_sale_timezone }}">
                                                    {{ $project->pre_sale_timezone }}
                                                </option>
                                                <option value="1">One</option>
                                            </select>
                                            <div id="invalidfeedback8" class="text-danger">
                                                @error('pre_sale_timezone')
                                                {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label theme-text-xsm text-light-70 mb-10">Pre-sale mint date
                                                (Optional)</label>
                                            <input name="pre_sale_date" value="{{ $project->pre_sale_date }}" type="date" class="form-control bg-transparent theme-text-xsm shadow-none" placeholder="Choose date" />
                                            <div id="invalidfeedback8" class="text-danger">
                                                @error('pre_sale_date')
                                                {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label theme-text-xsm text-light-70 mb-10">Pre-sale mint time
                                                (Optional)</label>
                                            <input name="pre_sale_time" value="{{ $project->pre_sale_time }}" type="time" class="form-control bg-transparent theme-text-xsm shadow-none" placeholder="Choose date" />
                                            <div id="invalidfeedback8" class="text-danger">
                                                @error('pre_sale_time')
                                                {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label theme-text-xsm text-light-70 mb-10">Pre-sale price
                                                (Optional)</label>
                                            <div class="input-group">
                                                <input name="pre_sale_price" value="{{ $project->pre_sale_price }}" type="text" class="form-control bg-transparent theme-text-xsm shadow-none" placeholder="Enter price" />
                                                <span class="input-group-text bg-transparent" id="chain-category1">ETH</span>
                                            </div>
                                            <div id="invalidfeedback8" class="text-danger">
                                                @error('pre_sale_price')
                                                {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Mint Details -->
                                <div class="">
                                    <div class="mt-20 mb-3">
                                        <h3 class="theme-text-lg theme-fw-700 text-light ">Mint Details</h3>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label theme-text-xsm text-light-70 mb-10">Mint date <span class="ms-1 text-danger">*</span></label>
                                            <input name="mint_date" value="{{ $project->mint_date }}" type="date" class="form-control bg-transparent theme-text-xsm shadow-none" placeholder="Choose date" />
                                            <div id="invalidfeedback8" class="text-danger">
                                                @error('mint_date')
                                                {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label theme-text-xsm text-light-70 mb-10">Mint time <span class="ms-1 text-danger">*</span></label>
                                            <input name="mint_time" value="{{ $project->mint_time }}" type="time" class="form-control bg-transparent theme-text-xsm shadow-none" placeholder="Choose date" />
                                            <div id="invalidfeedback8" class="text-danger">
                                                @error('mint_time')
                                                {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label theme-text-xsm text-light-70 mb-10">Mint price <span class="ms-1 text-danger">*</span></label>
                                            <div class="input-group">
                                                <input name="mint_price" value="{{ $project->mint_price }}" type="text" class="form-control bg-transparent theme-text-xsm shadow-none" placeholder="Enter price" />
                                                <span class="input-group-text bg-transparent" id="chain-category2">ETH</span>
                                            </div>
                                            <div id="invalidfeedback8" class="text-danger">
                                                @error('mint_price')
                                                {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Founder Info -->
                                <div class="">
                                    <div class="mt-20 mb-3">
                                        <h3 class="theme-text-lg theme-fw-700 text-light ">Founder Info</h3>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label theme-text-xsm text-light-70 mb-10">Full name
                                                (Optional)</label>
                                            <input name="founder_name" value="{{ $project->founder_name }}" type="text" class="form-control bg-transparent theme-text-xsm shadow-none" />
                                            <div id="invalidfeedback8" class="text-danger">
                                                @error('founder_name')
                                                {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label theme-text-xsm text-light-70 mb-10">Email <span class="ms-1 text-danger">*</span></label>
                                            <input name="founder_email" value="{{ $project->founder_email }}" type="email" class="form-control bg-transparent theme-text-xsm shadow-none" />
                                            <div id="invalidfeedback8" class="text-danger">
                                                @error('founder_email')
                                                {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label theme-text-xsm text-light-70 mb-10">Phone no.
                                                (Optional)</label>
                                            <input name="founder_phone" value="{{ $project->founder_phone }}" type="text" class="form-control bg-transparent theme-text-xsm shadow-none" />
                                            <div id="invalidfeedback8" class="text-danger">
                                                @error('founder_phone')
                                                {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex">
                                    <input type="submit" class="btn-theme mt-60 px-60 h-60" />
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="theme-text-lg mb-4 theme-fw-700 text-light ">
                                        Registerations
                                        <span class="theme-text-sm theme-fw-400">(10)</span>
                                    </h3>

                                    <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                                        <thead>
                                            <tr>
                                                <th class="theme-text-sm theme-fw-400">Wallet Address</th>
                                                <th class="theme-text-sm theme-fw-400">Twitter username</th>
                                                <th class="theme-text-sm theme-fw-400">Email</th>
                                            </tr>
                                        </thead>


                                        <tbody>
                                            <tr>
                                                <td class="theme-text-sm theme-fw-400">wallet_address</td>
                                                <td class="theme-text-sm theme-fw-400">username</td>
                                                <td class="theme-text-sm theme-fw-400">email</td>
                                            </tr>
                                        </tbody>

                                    </table>

                                </div> <!-- end card body-->
                            </div> <!-- end card -->
                        </div><!-- end col-->
                    </div>
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

<script type="text/javascript">
    $(document).ready(function() {
        $('#projectChain').on('change', function() {
            switch (this.value) {
                case '1':
                    $("#chain-category1").html('ETH');
                    $("#chain-category2").html('ETH');
                    break;
                case '2':
                    $("#chain-category1").html('SOL');
                    $("#chain-category2").html('SOL');
                    break;
                case '3':
                    $("#chain-category1").html('FLOW');
                    $("#chain-category2").html('FLOW');
                    break;
                case '4':
                    $("#chain-category1").html('MATIC');
                    $("#chain-category2").html('MATIC');
                    break;
                default:
                    break;
            }

        });

        var timezones = [
            'Europe/Andorra',
            'Asia/Dubai',
            'Asia/Kabul',
            'Europe/Tirane',
            'Asia/Yerevan',
            'Antarctica/Casey',
            'Antarctica/Davis',
            'Antarctica/DumontDUrville', // https://bugs.chromium.org/p/chromium/issues/detail?id=928068
            'Antarctica/Mawson',
            'Antarctica/Palmer',
            'Antarctica/Rothera',
            'Antarctica/Syowa',
            'Antarctica/Troll',
            'Antarctica/Vostok',
            'America/Argentina/Buenos_Aires',
            'America/Argentina/Cordoba',
            'America/Argentina/Salta',
            'America/Argentina/Jujuy',
            'America/Argentina/Tucuman',
            'America/Argentina/Catamarca',
            'America/Argentina/La_Rioja',
            'America/Argentina/San_Juan',
            'America/Argentina/Mendoza',
            'America/Argentina/San_Luis',
            'America/Argentina/Rio_Gallegos',
            'America/Argentina/Ushuaia',
            'Pacific/Pago_Pago',
            'Europe/Vienna',
            'Australia/Lord_Howe',
            'Antarctica/Macquarie',
            'Australia/Hobart',
            'Australia/Currie',
            'Australia/Melbourne',
            'Australia/Sydney',
            'Australia/Broken_Hill',
            'Australia/Brisbane',
            'Australia/Lindeman',
            'Australia/Adelaide',
            'Australia/Darwin',
            'Australia/Perth',
            'Australia/Eucla',
            'Asia/Baku',
            'America/Barbados',
            'Asia/Dhaka',
            'Europe/Brussels',
            'Europe/Sofia',
            'Atlantic/Bermuda',
            'Asia/Brunei',
            'America/La_Paz',
            'America/Noronha',
            'America/Belem',
            'America/Fortaleza',
            'America/Recife',
            'America/Araguaina',
            'America/Maceio',
            'America/Bahia',
            'America/Sao_Paulo',
            'America/Campo_Grande',
            'America/Cuiaba',
            'America/Santarem',
            'America/Porto_Velho',
            'America/Boa_Vista',
            'America/Manaus',
            'America/Eirunepe',
            'America/Rio_Branco',
            'America/Nassau',
            'Asia/Thimphu',
            'Europe/Minsk',
            'America/Belize',
            'America/St_Johns',
            'America/Halifax',
            'America/Glace_Bay',
            'America/Moncton',
            'America/Goose_Bay',
            'America/Blanc-Sablon',
            'America/Toronto',
            'America/Nipigon',
            'America/Thunder_Bay',
            'America/Iqaluit',
            'America/Pangnirtung',
            'America/Atikokan',
            'America/Winnipeg',
            'America/Rainy_River',
            'America/Resolute',
            'America/Rankin_Inlet',
            'America/Regina',
            'America/Swift_Current',
            'America/Edmonton',
            'America/Cambridge_Bay',
            'America/Yellowknife',
            'America/Inuvik',
            'America/Creston',
            'America/Dawson_Creek',
            'America/Fort_Nelson',
            'America/Vancouver',
            'America/Whitehorse',
            'America/Dawson',
            'Indian/Cocos',
            'Europe/Zurich',
            'Africa/Abidjan',
            'Pacific/Rarotonga',
            'America/Santiago',
            'America/Punta_Arenas',
            'Pacific/Easter',
            'Asia/Shanghai',
            'Asia/Urumqi',
            'America/Bogota',
            'America/Costa_Rica',
            'America/Havana',
            'Atlantic/Cape_Verde',
            'America/Curacao',
            'Indian/Christmas',
            'Asia/Nicosia',
            'Asia/Famagusta',
            'Europe/Prague',
            'Europe/Berlin',
            'Europe/Copenhagen',
            'America/Santo_Domingo',
            'Africa/Algiers',
            'America/Guayaquil',
            'Pacific/Galapagos',
            'Europe/Tallinn',
            'Africa/Cairo',
            'Africa/El_Aaiun',
            'Europe/Madrid',
            'Africa/Ceuta',
            'Atlantic/Canary',
            'Europe/Helsinki',
            'Pacific/Fiji',
            'Atlantic/Stanley',
            'Pacific/Chuuk',
            'Pacific/Pohnpei',
            'Pacific/Kosrae',
            'Atlantic/Faroe',
            'Europe/Paris',
            'Europe/London',
            'Asia/Tbilisi',
            'America/Cayenne',
            'Africa/Accra',
            'Europe/Gibraltar',
            'America/Godthab',
            'America/Danmarkshavn',
            'America/Scoresbysund',
            'America/Thule',
            'Europe/Athens',
            'Atlantic/South_Georgia',
            'America/Guatemala',
            'Pacific/Guam',
            'Africa/Bissau',
            'America/Guyana',
            'Asia/Hong_Kong',
            'America/Tegucigalpa',
            'America/Port-au-Prince',
            'Europe/Budapest',
            'Asia/Jakarta',
            'Asia/Pontianak',
            'Asia/Makassar',
            'Asia/Jayapura',
            'Europe/Dublin',
            'Asia/Jerusalem',
            'Asia/Kolkata',
            'Indian/Chagos',
            'Asia/Baghdad',
            'Asia/Tehran',
            'Atlantic/Reykjavik',
            'Europe/Rome',
            'America/Jamaica',
            'Asia/Amman',
            'Asia/Tokyo',
            'Africa/Nairobi',
            'Asia/Bishkek',
            'Pacific/Tarawa',
            'Pacific/Enderbury',
            'Pacific/Kiritimati',
            'Asia/Pyongyang',
            'Asia/Seoul',
            'Asia/Almaty',
            'Asia/Qyzylorda',
            'Asia/Qostanay', // https://bugs.chromium.org/p/chromium/issues/detail?id=928068
            'Asia/Aqtobe',
            'Asia/Aqtau',
            'Asia/Atyrau',
            'Asia/Oral',
            'Asia/Beirut',
            'Asia/Colombo',
            'Africa/Monrovia',
            'Europe/Vilnius',
            'Europe/Luxembourg',
            'Europe/Riga',
            'Africa/Tripoli',
            'Africa/Casablanca',
            'Europe/Monaco',
            'Europe/Chisinau',
            'Pacific/Majuro',
            'Pacific/Kwajalein',
            'Asia/Yangon',
            'Asia/Ulaanbaatar',
            'Asia/Hovd',
            'Asia/Choibalsan',
            'Asia/Macau',
            'America/Martinique',
            'Europe/Malta',
            'Indian/Mauritius',
            'Indian/Maldives',
            'America/Mexico_City',
            'America/Cancun',
            'America/Merida',
            'America/Monterrey',
            'America/Matamoros',
            'America/Mazatlan',
            'America/Chihuahua',
            'America/Ojinaga',
            'America/Hermosillo',
            'America/Tijuana',
            'America/Bahia_Banderas',
            'Asia/Kuala_Lumpur',
            'Asia/Kuching',
            'Africa/Maputo',
            'Africa/Windhoek',
            'Pacific/Noumea',
            'Pacific/Norfolk',
            'Africa/Lagos',
            'America/Managua',
            'Europe/Amsterdam',
            'Europe/Oslo',
            'Asia/Kathmandu',
            'Pacific/Nauru',
            'Pacific/Niue',
            'Pacific/Auckland',
            'Pacific/Chatham',
            'America/Panama',
            'America/Lima',
            'Pacific/Tahiti',
            'Pacific/Marquesas',
            'Pacific/Gambier',
            'Pacific/Port_Moresby',
            'Pacific/Bougainville',
            'Asia/Manila',
            'Asia/Karachi',
            'Europe/Warsaw',
            'America/Miquelon',
            'Pacific/Pitcairn',
            'America/Puerto_Rico',
            'Asia/Gaza',
            'Asia/Hebron',
            'Europe/Lisbon',
            'Atlantic/Madeira',
            'Atlantic/Azores',
            'Pacific/Palau',
            'America/Asuncion',
            'Asia/Qatar',
            'Indian/Reunion',
            'Europe/Bucharest',
            'Europe/Belgrade',
            'Europe/Kaliningrad',
            'Europe/Moscow',
            'Europe/Simferopol',
            'Europe/Kirov',
            'Europe/Astrakhan',
            'Europe/Volgograd',
            'Europe/Saratov',
            'Europe/Ulyanovsk',
            'Europe/Samara',
            'Asia/Yekaterinburg',
            'Asia/Omsk',
            'Asia/Novosibirsk',
            'Asia/Barnaul',
            'Asia/Tomsk',
            'Asia/Novokuznetsk',
            'Asia/Krasnoyarsk',
            'Asia/Irkutsk',
            'Asia/Chita',
            'Asia/Yakutsk',
            'Asia/Khandyga',
            'Asia/Vladivostok',
            'Asia/Ust-Nera',
            'Asia/Magadan',
            'Asia/Sakhalin',
            'Asia/Srednekolymsk',
            'Asia/Kamchatka',
            'Asia/Anadyr',
            'Asia/Riyadh',
            'Pacific/Guadalcanal',
            'Indian/Mahe',
            'Africa/Khartoum',
            'Europe/Stockholm',
            'Asia/Singapore',
            'America/Paramaribo',
            'Africa/Juba',
            'Africa/Sao_Tome',
            'America/El_Salvador',
            'Asia/Damascus',
            'America/Grand_Turk',
            'Africa/Ndjamena',
            'Indian/Kerguelen',
            'Asia/Bangkok',
            'Asia/Dushanbe',
            'Pacific/Fakaofo',
            'Asia/Dili',
            'Asia/Ashgabat',
            'Africa/Tunis',
            'Pacific/Tongatapu',
            'Europe/Istanbul',
            'America/Port_of_Spain',
            'Pacific/Funafuti',
            'Asia/Taipei',
            'Europe/Kiev',
            'Europe/Uzhgorod',
            'Europe/Zaporozhye',
            'Pacific/Wake',
            'America/New_York',
            'America/Detroit',
            'America/Kentucky/Louisville',
            'America/Kentucky/Monticello',
            'America/Indiana/Indianapolis',
            'America/Indiana/Vincennes',
            'America/Indiana/Winamac',
            'America/Indiana/Marengo',
            'America/Indiana/Petersburg',
            'America/Indiana/Vevay',
            'America/Chicago',
            'America/Indiana/Tell_City',
            'America/Indiana/Knox',
            'America/Menominee',
            'America/North_Dakota/Center',
            'America/North_Dakota/New_Salem',
            'America/North_Dakota/Beulah',
            'America/Denver',
            'America/Boise',
            'America/Phoenix',
            'America/Los_Angeles',
            'America/Anchorage',
            'America/Juneau',
            'America/Sitka',
            'America/Metlakatla',
            'America/Yakutat',
            'America/Nome',
            'America/Adak',
            'Pacific/Honolulu',
            'America/Montevideo',
            'Asia/Samarkand',
            'Asia/Tashkent',
            'America/Caracas',
            'Asia/Ho_Chi_Minh',
            'Pacific/Efate',
            'Pacific/Wallis',
            'Pacific/Apia',
            'Africa/Johannesburg'
        ];

        timezones.forEach(element => {
            $("#timeZone").append(new Option(element, element));
        });
    });
</script>
@endsection