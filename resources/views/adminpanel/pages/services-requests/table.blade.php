@extends('adminpanel.layouts.master')

@section('content')
<!-- ============================================================== -->
<!-- Start Page Content here -->
<!-- ============================================================== -->

<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Admin</a></li>
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Services Requests</a></li>
                                <li class="breadcrumb-item active">Get Gold Verification (KYC Verified)</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Services Requests</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title">Get Gold Verification (KYC Verified)</h4>
                            <p class="text-muted font-13 mb-4">
                                <!-- DataTables has most features enabled by default, so all you need to do to use it with your own tables is to call the construction
                                            function: -->
                                <!-- <code>$().DataTable();</code>. -->
                            </p>

                            <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Amount Paid</th>
                                        <th>Date & Time</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td>Name</td>
                                        <td>Email</td>
                                        <td>Amount Paid</td>
                                        <td>Date & Time</td>
                                    </tr>
                                </tbody>

                            </table>

                        </div> <!-- end card body-->
                    </div> <!-- end card -->
                </div><!-- end col-->
            </div>
            <!-- end row-->

        </div>
    </div>
</div>

<!-- ============================================================== -->
<!-- End Page content -->
<!-- ============================================================== -->
@endsection