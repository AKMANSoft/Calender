@extends('layouts.app')

@section('content')



<!-- ============================================================== -->
<!-- Start Page Content here -->
<!-- ============================================================== -->


                        <form action="{{ url('/') }}/project-rejected-submit" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="d-none widget-rounded-circle card p-20 m-0" style="padding-bottom: 200px;">
                                <!-- Project Info Section -->
                                <div class="mt-40">
                                    <div>
                                        <h3 class="theme-text-lg text-light mb-3">Project info</h3>
                                    </div>
                                    <div class="row">
                                        <input name="id" value="{{ Session::get('id') }}" type="number" class="d-none">
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label theme-text-xsm text-light-70 mb-10">Project name <span class="ms-1 text-danger">*</span></label>
                                            @foreach ($result as $key => $proj)                                                                            
                                            <input name="projectName" value="{{ $proj->project_name }}" type="text" class="form-control bg-transparent theme-text-xsm shadow-none" placeholder="" />
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label theme-text-xsm text-light-70 mb-10">Chain <span class="ms-1 text-danger">*</span></label>
                                            <select name="projectChain" class="form-select bg-transparent w-100 theme-text-xsm shadow-none">
                                                <option value="{{ $proj->proj_chain }}" selected>{{ $proj->proj_chain }}</option>
                                                <option value="1">One</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label theme-text-xsm text-light-70 mb-10">Total supply <span class="ms-1 text-danger">*</span></label>
                                            <input name="totalSupply" value="{{ $proj->total_supply }}" type="text" class="form-control bg-transparent theme-text-xsm shadow-none" placeholder="" />
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div>
                                            <label class="form-label theme-text-xsm text-light-70 mb-10">Project description <span class="ms-1 text-danger">*</span></label>
                                            
                                            <textarea name="projectDesc" class="form-control bg-transparent theme-text-xsm shadow-none" rows={6}> {{ $proj->proj_description }} </textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label theme-text-xsm text-light-70 mb-10">Twitter Link (Optional)</label>
                                            <input name="twitter" value="{{ $proj->twitter }}" type="text" class="form-control bg-transparent theme-text-xsm shadow-none" placeholder="Enter URL" />
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label theme-text-xsm text-light-70 mb-10">Discord Link (Optional)</label>
                                            <input name="discord" value="{{ $proj->discord }}" type="text" class="form-control bg-transparent theme-text-xsm shadow-none" placeholder="Enter URL" />
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label theme-text-xsm text-light-70 mb-10">Website Link (Optional)</label>
                                            <input name="url" value="{{ $proj->url }}" type="text" class="form-control bg-transparent theme-text-xsm shadow-none" placeholder="Enter URL" />
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
                                            <select name="timeZone" class="form-select bg-transparent theme-text-xsm shadow-none">
                                                <option value="{{ $proj->time_zone }}"> {{ $proj->time_zone }} </option>
                                                <option value="1">One</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label theme-text-xsm text-light-70 mb-10">Pre-sale mint date (Optional)</label>
                                            <input name="preDate" value="{{ $proj->pre_sale_date }}" type="date" class="form-control bg-transparent theme-text-xsm shadow-none" placeholder="Choose date" />
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label theme-text-xsm text-light-70 mb-10">Pre-sale mint time (Optional)</label>
                                            <input name="preTime" value="{{ $proj->pre_sale_time }}" type="time" class="form-control bg-transparent theme-text-xsm shadow-none" placeholder="Choose date" />
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label theme-text-xsm text-light-70 mb-10">Pre-sale price (Optional)</label>
                                            <div class="input-group">
                                                <input name="prePrice" value="{{ $proj->pre_sale_price }}" type="text" class="form-control bg-transparent theme-text-xsm shadow-none" placeholder="Enter price" />
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
                                            <input name="date" value="{{ $proj->date }}" type="date" class="form-control bg-transparent theme-text-xsm shadow-none" placeholder="Choose date" />
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label theme-text-xsm text-light-70 mb-10">Mint time <span class="ms-1 text-danger">*</span></label>
                                            <input name="time" value="{{ $proj->time }}" type="time" class="form-control bg-transparent theme-text-xsm shadow-none" placeholder="Choose date" />
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label theme-text-xsm text-light-70 mb-10">Mint price <span class="ms-1 text-danger">*</span></label>
                                            <div class="input-group">
                                                <input name="price" value="{{ $proj->price }}" type="text" class="form-control bg-transparent theme-text-xsm shadow-none" placeholder="Enter price" />
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
                                            <input name="founderName" value="{{ $proj->founder_name }}" type="text" class="form-control bg-transparent theme-text-xsm shadow-none" />
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label theme-text-xsm text-light-70 mb-10">Email <span class="ms-1 text-danger">*</span></label>
                                            <input name="founderEmail" value="{{ $proj->founder_email }}" type="email" class="form-control bg-transparent theme-text-xsm shadow-none" />
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label class="form-label theme-text-xsm text-light-70 mb-10">Phone no. (Optional)</label>
                                            <input name="founderPhone" value="{{ $proj->founder_phone }}" type="text" class="form-control bg-transparent theme-text-xsm shadow-none" />
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex">
                                    
                                </div>
                            </div>
                            <center><input type="submit" name="submit" class="btn btn-primary" style="position: relative; margin-top: 200px; padding: 40px; border-radius: 200px; font-size: 25px;" value="Continue"/></center>
                                    @endforeach
                        </form>


@stop