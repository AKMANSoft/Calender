<?php include("./includes/header.php") ?>
<main class="mx-auto mt-150 px-60-auto mb-100" style="max-width: 1220px;">
    <div>
        <h1 class="fs-1 fw-bold mb-3">Submit a project</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore</p>
    </div>
    <div class="mt-100">
        <!-- Project Info Section -->
        <div>
            <div>
                <h3 class="fs-30 fw-bold mb-20">Project info</h3>
            </div>
            <div class="row">
                <div class="col-md-4 mb-20">
                    <label class="form-label fs-14 text-light-70 mb-10">Project name <span class="ms-1 text-danger">*</span></label>
                    <input type="text" class="form-control fs-14 shadow-none" placeholder="" />
                </div>
                <div class="col-md-4 mb-20">
                    <label class="form-label fs-14 text-light-70 mb-10">Chain <span class="ms-1 text-danger">*</span></label>
                    <select class="form-select w-100 fs-14 shadow-none">
                        <option value="" selected>-- Choose your project chain --</option>
                        <option value="1">One</option>
                    </select>
                </div>
                <div class="col-md-4 mb-20">
                    <label class="form-label fs-14 text-light-70 mb-10">Total supply <span class="ms-1 text-danger">*</span></label>
                    <input type="text" class="form-control fs-14 shadow-none" placeholder="" />
                </div>
            </div>
            <div class="row mb-20">
                <div>
                    <label class="form-label fs-14 text-light-70 mb-10">Project description <span class="ms-1 text-danger">*</span></label>
                    <textarea class="form-control fs-14 shadow-none" rows={6} placeholder=""></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mb-20">
                    <label class="form-label fs-14 text-light-70 mb-10">Twitter Link (Optional)</label>
                    <input type="text" class="form-control fs-14 shadow-none" placeholder="Enter URL" />
                </div>
                <div class="col-md-4 mb-20">
                    <label class="form-label fs-14 text-light-70 mb-10">Discord Link (Optional)</label>
                    <input type="text" class="form-control fs-14 shadow-none" placeholder="Enter URL" />
                </div>
                <div class="col-md-4 mb-20">
                    <label class="form-label fs-14 text-light-70 mb-10">Website Link (Optional)</label>
                    <input type="text" class="form-control fs-14 shadow-none" placeholder="Enter URL" />
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
                    <label class=" form-label fs-14 text-light-70 mb-10">Profile Photo <span class="mx-2 text-danger">*</span> Ideal size: 240px X 240px</label>
                    <input type="file" class="d-none" accept="image/*" />
                    <div class="form-control-image text-center">
                        <img src="/assets/images/icons/upload_icon.svg" alt="" />
                        <p class="fs-14 text-light-70">Drag and drop or browse</p>
                    </div>
                </div>
                <div class="form-control-image-container cursor-pointer col-md-6 mb-20">
                    <label class=" form-label fs-14 text-light-70 mb-10">Banner Image <span class="mx-2">(Optional)</span> Ideal size: 1450px X 320px</label>
                    <input type="file" class="d-none" accept="image/*" />
                    <div class="form-control-image text-center">
                        <img src="/assets/images/icons/upload_icon.svg" alt="" />
                        <p class="fs-14 text-light-70">Drag and drop or browse</p>
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
                    <select class="form-select fs-14 shadow-none">
                        <option value="" selected>-- Choose timezone --</option>
                        <option value="1">One</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mb-20">
                    <label class="form-label fs-14 text-light-70 mb-10">Pre-sale mint date (Optional)</label>
                    <input type="date" class="form-control fs-14 shadow-none" placeholder="Choose date" />
                </div>
                <div class="col-md-4 mb-20">
                    <label class="form-label fs-14 text-light-70 mb-10">Pre-sale mint time (Optional)</label>
                    <input type="time" class="form-control fs-14 shadow-none" placeholder="Choose date" />
                </div>
                <div class="col-md-4 mb-20">
                    <label class="form-label fs-14 text-light-70 mb-10">Pre-sale price (Optional)</label>
                    <div class="input-group">
                        <input type="text" class="form-control fs-14 shadow-none" placeholder="Enter price" />
                        <span class="input-group-text bg-transparent">ETH</span>
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
                    <input type="date" class="form-control fs-14 shadow-none" placeholder="Choose date" />
                </div>
                <div class="col-md-4 mb-20">
                    <label class="form-label fs-14 text-light-70 mb-10">Mint time <span class="ms-1 text-danger">*</span></label>
                    <input type="time" class="form-control fs-14 shadow-none" placeholder="Choose date" />
                </div>
                <div class="col-md-4 mb-20">
                    <label class="form-label fs-14 text-light-70 mb-10">Mint price <span class="ms-1 text-danger">*</span></label>
                    <div class="input-group">
                        <input type="text" class="form-control fs-14 shadow-none" placeholder="Enter price" />
                        <span class="input-group-text bg-transparent">ETH</span>
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
                    <input type="text" class="form-control fs-14 shadow-none" />
                </div>
                <div class="col-md-4 mb-20">
                    <label class="form-label fs-14 text-light-70 mb-10">Email <span class="ms-1 text-danger">*</span></label>
                    <input type="email" class="form-control fs-14 shadow-none" />
                </div>
                <div class="col-md-4 mb-20">
                    <label class="form-label fs-14 text-light-70 mb-10">Phone no. (Optional)</label>
                    <input type="text" class="form-control fs-14 shadow-none" />
                </div>
            </div>
        </div>
        <!-- Verification Badge -->
        <div class="">
            <div class="mt-50 mb-20">
                <h3 class="fs-30 fw-bold">Verification Badge</h3>
                <p class="fs-14">
                    To avail the verification badge, we will ask you to DM us on twitter and also add our logo to your website. after you submit your project.
                </p>
            </div>
            <div>
                <img src="/assets/images/recaptcha.png" width="271" height="88" alt="">
            </div>
            <div class="d-flex">
                <a href="/success-page.php" class="btn-theme fs-18 mt-60 px-60 h-60">Submit</a>
            </div>
        </div>
    </div>
</main>
<script>
    document.querySelectorAll(".form-control-image-container").forEach((el) => {
        el.addEventListener("click", () => el.querySelector("input").click())
    })
</script>
<?php include("./includes/footer.php") ?>