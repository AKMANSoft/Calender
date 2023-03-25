@extends('layouts.master')
@section('other-css')
<!-- Plugins css -->
<link href="{{ asset('assets') }}/libs/spectrum-colorpicker2/spectrum.min.css" rel="stylesheet" type="text/css">
<link href="{{ asset('assets') }}/libs/flatpickr/flatpickr.min.css" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets') }}/libs/clockpicker/bootstrap-clockpicker.min.css" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets') }}/libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets') }}/libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css" />

@endsection
@section('content')
<main class="mx-auto mt-150 px-60-auto mb-100" style="max-width: 1220px;">
    <div>
        <h1 class="fs-1 fw-bold mb-3">Submit a project</h1>
        <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore</p> -->
    </div>
    <div class="mt-100">
        <!-- Project Info Section -->
        <form class="needs-validation" novalidate method="POST" enctype="multipart/form-data" action="{{ route('projects.store') }}">
            @csrf
            <div>
                <div>
                    <h3 class="fs-30 fw-bold mb-20">Project info</h3>
                </div>
                <div class="row">
                    <div class="col-md-4 mb-20">
                        <label class="form-label fs-14 text-light-70 mb-10">Project name <span class="ms-1 text-danger">*</span></label>
                        <input type="text" name="name" value="{{ old('name') }}" id="projectName" class="form-control bg-transparent fs-14 shadow-none" placeholder="" required />
                        <div id="invalidfeedback" class="text-danger">
                            @error('name')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4 mb-20">
                        <label class="form-label fs-14 text-light-70 mb-10">Chain <span class="ms-1 text-danger">*</span></label>
                        <select class="form-select w-100 fs-14 shadow-none" name="project_category_id" required id="projectChain">
                            <option value="" selected>-- Choose your project chain --</option>
                            @foreach ($categories as $category)
                            @if ($category->id == old('project_category_id'))
                            <option selected value="{{ $category->id }}">{{ $category->name }}</option>
                            @else
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endif
                            @endforeach
                        </select>
                        <div id="invalidfeedback1" class="text-danger">
                            @error('chain')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4 mb-20">
                        <label class="form-label fs-14 text-light-70 mb-10">Total supply <span class="ms-1 text-danger">*</span></label>
                        <input type="number" class="form-control fs-14 shadow-none bg-transparent" placeholder="" name="total_supply" id="totalSupply" required value="{{ old('total_supply') }}" />
                        <div id="invalidfeedback2" class="text-danger">
                            @error('total_supply')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row mb-20">
                    <div>
                        <label class="form-label fs-14 text-light-70 mb-10">Project description <span class="ms-1 text-danger">*</span></label>
                        <textarea class="form-control fs-14 shadow-none bg-transparent" rows="6" placeholder="" name="description" id="projectDesc" required>{{ old('description') }}</textarea>
                        <div id="invalidfeedback3" class="text-danger">
                            @error('description')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 mb-20">
                        <label class="form-label fs-14 text-light-70 mb-10">Twitter Link (Optional)</label>
                        <input type="url" value="{{ old('twitter_link') }}" class="form-control fs-14 shadow-none bg-transparent" pattern="(https?:\/\/(?:www\.|(?!www))[a-zA-Z0-9][a-zA-Z0-9-]+[a-zA-Z0-9]\.[^\s]{2,}|www\.[a-zA-Z0-9][a-zA-Z0-9-]+[a-zA-Z0-9]\.[^\s]{2,}|https?:\/\/(?:www\.|(?!www))[a-zA-Z0-9]+\.[^\s]{2,}|www\.[a-zA-Z0-9]+\.[^\s]{2,})" placeholder="Enter URL" name="twitter_link" />
                        <div id="invalidfeedback3" class="text-danger">
                            @error('twitter_link')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4 mb-20">
                        <label class="form-label fs-14 text-light-70 mb-10">Discord Link (Optional)</label>
                        <input value="{{ old('discord_link') }}" type="url" class="form-control fs-14 shadow-none bg-transparent" pattern="(https?:\/\/(?:www\.|(?!www))[a-zA-Z0-9][a-zA-Z0-9-]+[a-zA-Z0-9]\.[^\s]{2,}|www\.[a-zA-Z0-9][a-zA-Z0-9-]+[a-zA-Z0-9]\.[^\s]{2,}|https?:\/\/(?:www\.|(?!www))[a-zA-Z0-9]+\.[^\s]{2,}|www\.[a-zA-Z0-9]+\.[^\s]{2,})" placeholder="Enter URL" name="discord_link" />
                        <div id="invalidfeedback3" class="text-danger">
                            @error('discord_link')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4 mb-20">
                        <label class="form-label fs-14 text-light-70 mb-10">Website Link (Optional)</label>
                        <input value="{{ old('website_url') }}" type="url" class="form-control fs-14 shadow-none bg-transparent" pattern="(https?:\/\/(?:www\.|(?!www))[a-zA-Z0-9][a-zA-Z0-9-]+[a-zA-Z0-9]\.[^\s]{2,}|www\.[a-zA-Z0-9][a-zA-Z0-9-]+[a-zA-Z0-9]\.[^\s]{2,}|https?:\/\/(?:www\.|(?!www))[a-zA-Z0-9]+\.[^\s]{2,}|www\.[a-zA-Z0-9]+\.[^\s]{2,})" placeholder="Enter URL" name="website_url" />
                        <div id="invalidfeedback3" class="text-danger">
                            @error('website_url')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <!-- Images Section -->
            <div>
                <div class="mt-50 mb-20">
                    <h3 class="fs-30 fw-bold">Images</h3>
                </div>
                <div class="row">
                    <div class="form-control-image-container cursor-pointer col-md-6 mb-20">
                        <label for="profile_image_path" class="form-label fs-14 text-light-70 mb-10">Banner Image <span class="mx-2 text-danger">*</span> Ideal size: 240px X 240px</label>
                        <input type="file" name="profile_image_path" class="d-none" accept="image/*" />
                        <div class="form-control-image position-relative overflow-hidden text-center">
                            <img src="/assets/images/icons/upload_icon.svg" alt="" />
                            <p class="fs-14 text-light-70">Drag and drop or browse</p>
                            <div class="preview-image position-absolute top-0 left-0 w-100 h-100" style="z-index: 0;">
                                <img src="" class="d-none" style="width: 100%; height: 100%; object-fit: contain; object-position: center;" alt="">
                            </div>
                        </div>
                        <div id="invalidfeedback3" class="text-danger">
                            @error('profile_image_path')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>

                    <div class="form-control-image-container cursor-pointer col-md-6 mb-20">
                        <label for="banner_image_path" class="form-label fs-14 text-light-70 mb-10">Banner Image <span class="mx-2">(Optional)</span> Ideal size: 1450px X 320px</label>
                        <input type="file" name="banner_image_path" class="d-none" accept="image/*" />
                        <div class="form-control-image position-relative overflow-hidden text-center">
                            <img src="/assets/images/icons/upload_icon.svg" alt="" />
                            <p class="fs-14 text-light-70">Drag and drop or browse</p>
                            <div class="preview-image position-absolute top-0 left-0 w-100 h-100" style="z-index: 0;">
                                <img src="" class="d-none" style="width: 100%; height: 100%; object-fit: contain; object-position: center;" alt="">
                            </div>
                        </div>
                        <div id="invalidfeedback3" class="text-danger">
                            @error('banner_image_path')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <!-- Pre-Sale Mint Details -->
            <div class="">
                <div>
                    <h3 class="fs-30 fw-bold mt-50 mb-20">Pre-Sale Mint Details</h3>
                </div>
                <div class="row">
                    <div class="col mb-20">
                        <label class="form-label fs-14 text-light-70 mb-10">Timezone <span class="ms-1 text-danger">*</span></label>
                        <select class="form-select fs-14 shadow-none" name="pre_sale_timezone" id="timeZone" required>
                            <option value="" selected>-- Choose timezone --</option>
                            <option value="1">One</option>
                        </select>
                        <div id="invalidfeedback4" class="text-danger">
                            @error('pre_sale_timezone')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 mb-20">
                        <label class="form-label fs-14 text-light-70 mb-10">Pre-sale date (Optional)</label>
                        <input value="{{ old('pre_sale_date') }}" type="date" id="" class="form-control fs-14 shadow-none bg-transparent" placeholder="Choose date" name="pre_sale_date" />
                        <div id="invalidfeedback5" class="text-danger">
                            @error('pre_sale_date')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4 mb-20">
                        <label class="form-label fs-14 text-light-70 mb-10">Pre-sale mint time (Optional)</label>
                        <input value="{{ old('pre_sale_time') }}" type="time" class="form-control fs-14 shadow-none bg-transparent" placeholder="Choose date" name="pre_sale_time" />
                        <div id="invalidfeedback5" class="text-danger">
                            @error('pre_sale_time')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4 mb-20">
                        <label class="form-label fs-14 text-light-70 mb-10">Pre-sale price (Optional)</label>
                        <div class="input-group">
                            <input value="{{ old('pre_sale_price') }}" type="number" class="form-control fs-14 shadow-none bg-transparent" placeholder="Enter price" name="pre_sale_price" />
                            <span class="input-group-text bg-transparent">ETH</span>
                        </div>
                        <div id="invalidfeedback5" class="text-danger">
                            @error('pre_sale_price')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mint Details -->
            <div class="">
                <div class="mt-50 mb-20">
                    <h3 class="fs-30 fw-bold">Mint Details</h3>
                </div>
                <div class="row">
                    <div class="col-md-4 mb-20">
                        <label class="form-label fs-14 text-light-70 mb-10">Mint date <span class="ms-1 text-danger">*</span></label>
                        <input value="{{ old('mint_date') }}" type="date" class="form-control fs-14 shadow-none bg-transparent" placeholder="Choose date" name="mint_date" required />
                        <div id="invalidfeedback5" class="text-danger">
                            @error('mint_date')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4 mb-20">
                        <label class="form-label fs-14 text-light-70 mb-10">Mint time <span class="ms-1 text-danger">*</span></label>
                        <input value="{{ old('mint_time') }}" type="time" class="form-control fs-14 shadow-none bg-transparent" placeholder="Choose date" name="mint_time" id="time" required />
                        <div id="invalidfeedback6" class="text-danger">
                            @error('mint_time')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4 mb-20">
                        <label class="form-label fs-14 text-light-70 mb-10">Mint price <span class="ms-1 text-danger">*</span></label>
                        <div class="input-group">
                            <input value="{{ old('mint_price') }}" type="number" class="form-control fs-14 shadow-none bg-transparent" placeholder="Enter price" name="mint_price" id="price" required />
                            <span class="input-group-text bg-transparent">ETH</span>

                        </div>
                        <div id="invalidfeedback7" class="text-danger">
                            @error('mint_price')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <!-- Founder Info -->
            <div class="">
                <div class="mt-50 mb-20">
                    <h3 class="fs-30 fw-bold">Founder Info</h3>
                </div>
                <div class="row">
                    <div class="col-md-4 mb-20">
                        <label class="form-label fs-14 text-light-70 mb-10">Full name (Optional)</label>
                        <input value="{{ old('founder_name') }}" type="text" class="form-control fs-14 shadow-none bg-transparent" name="founder_name" />
                        <div id="invalidfeedback8" class="text-danger">
                            @error('founder_name')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4 mb-20">
                        <label class="form-label fs-14 text-light-70 mb-10">Email <span class="ms-1 text-danger">*</span></label>
                        <input value="{{ old('founder_email') }}" type="email" class="form-control fs-14 shadow-none bg-transparent" pattern="^[\w]{1,}[\w.+-]{0,}@[\w-]{2,}([.][a-zA-Z]{2,}|[.][\w-]{2,}[.][a-zA-Z]{2,})$" name="founder_email" id="founderEmail" required />
                        <div id="invalidfeedback8" class="text-danger">
                            @error('founder_email')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4 mb-20">
                        <label class="form-label fs-14 text-light-70 mb-10">Phone no. (Optional)</label>
                        <input value="{{ old('founder_phone') }}" type="number" class="form-control fs-14 shadow-none bg-transparent" name="founder_phone" />
                        <div id="invalidfeedback8" class="text-danger">
                            @error('founder_phone')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <!-- Verification Badge -->
            <div class="">
                <div class="mt-50 mb-20">
                    <h3 class="fs-30 fw-bold">Verification Badge</h3>
                    <p class="fs-14">
                        To avail the verification badge, we will ask you to DM us on twitter and also add our logo to
                        your website. after you submit your project.
                    </p>
                </div>
                <div>
                    <img src="/assets/images/recaptcha.png" width="271" height="88" alt="">
                </div>
                <input name="status" class="d-none" value="requested">
                <div class="d-flex">
                    <button type="submit" class="btn-theme fs-18 mt-60 px-60 h-60">Submit</button>
                    {{-- <input name="submit" type="submit" onClick="validate()" class="btn-theme fs-18 mt-60 px-60 h-60">Submit</input> --}}
                </div>
            </div>
        </form>
    </div>
</main>
@endsection

@section('custom-script')
<!-- Vendor js -->
<script src="{{ asset('assets') }}/js/vendor.min.js"></script>

<!-- Plugins js-->
<script src="{{ asset('assets') }}/libs/flatpickr/flatpickr.min.js"></script>
<script src="{{ asset('assets') }}/libs/spectrum-colorpicker2/spectrum.min.js"></script>
<script src="{{ asset('assets') }}/libs/clockpicker/bootstrap-clockpicker.min.js"></script>
<script src="{{ asset('assets') }}/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>


<!-- Init js-->
<script src="{{ asset('assets') }}/js/pages/form-pickers.init.js"></script>

<!-- App js -->
<script src="{{ asset('assets') }}/js/app.min.js"></script>
<script>
    document.querySelectorAll(".form-control-image-container").forEach((container) => {
        container.addEventListener("click", () => container.querySelector("input").click())
        let imgInput = container.querySelector("input");
        let previewImageEl = container.querySelector(".preview-image > img");

        let imgDropArea = container.querySelector(".form-control-image");
        imgDropArea.addEventListener("dragover", (e) => {
            e.preventDefault();
            imgDropArea.classList.add("active")
        });
        imgDropArea.addEventListener("dragleave", () => {
            imgDropArea.classList.remove("active")
        });
        imgDropArea.addEventListener("drop", (e) => {
            imgDropArea.classList.remove("active")
            e.preventDefault();
            imgInput.files = e.dataTransfer.files;
            showImage(imgInput.files);
        });
        imgInput.addEventListener("change", (e) => showImage(e.target.files));

        function showImage(files) {
            if (files.length > 0) previewImageEl.classList.remove("d-none");
            else previewImageEl.classList.add("d-none");
            previewImageEl.src = window.URL.createObjectURL(files[0]);
        }
    })
</script>
@endsection