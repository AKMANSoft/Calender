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
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Projects</a></li>
                                <li class="breadcrumb-item active">{{ucwords($status)}}</li>
                            </ol>
                        </div>
                        <h4 class="page-title">Projects</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title">{{ucwords($status)}}</h4>
                            <p class="text-muted font-13 mb-4">
                                <!-- DataTables has most features enabled by default, so all you need to do to use it with your own tables is to call the construction
                                            function: -->
                                <!-- <code>$().DataTable();</code>. -->
                            </p>

                            <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Request Date</th>
                                        <th>Chain</th>
                                        <th>Total Supply</th>
                                        <th>Pre-sale Date</th>
                                        <th>Pre-sale Price</th>
                                        <th>Mint Date</th>
                                        <th>Mint Price</th>
                                        <th>Founder Email</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>


                                <tbody>
                                    @foreach ($projects as $key => $project)
                                    <tr id="project-row-{{$project->id}}">
                                        <td>{{ $project->name }}</td>
                                        <td>{{ date('d M, Y', strtotime($project->created_at)) }}</td>
                                        <td>{{ $project->chain }}</td>
                                        <td>{{ $project->total_supply }}</td>
                                        <td>{{ date('d M, Y', strtotime($project->pre_sale_date)) }} </td>
                                        <td>{{ $project->pre_sale_price }}</td>
                                        <td>{{ date('d M, Y', strtotime($project->mint_date)) }}</td>
                                        <td>{{ $project->mint_price }}</td>
                                        <td>{{ $project->founder_email }}</td>
                                        <td>

                                            <a href="{{ route('admin.projects.edit', $project->id) }}" class="p-1  btn" style="cursor: pointer;">
                                                <i class="fe-eye"></i>
                                            </a>
                                            <a class="text-success p-1 btn" style="cursor: pointer;" onclick="updateStatus({{ $project->id }}, 'published')">
                                                <i class="fe-check"></i>
                                            </a>
                                            <a class="text-danger p-1 btn" style="cursor: pointer;" onclick="updateStatus({{ $project->id }}, 'offline')">
                                                <i class="fe-x"></i>
                                            </a>
                                            {{-- @if ($project->status == 'published')
                                            <!-- TODO -->
                                            @elseif ($project->status == 'requested')

                                            @else
                                            <!-- TODO -->
                                            @endif --}}

                                        </td>


                                    </tr>
                                    @endforeach
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

@section('custom-script')
<script>
    function updateStatus(id, status) {

        $.ajax({
            method: 'PUT',
            data: {
                "_token": "{{ csrf_token() }}",
                "status": status,
            },
            url: "{{ route('admin.projects.update', '') }}/" + id,
            success: function(response) {
                if (response.success) {
                    alert(response.success)
                    $("#project-row-" + id).remove();
                } else if (response.error) {
                    alert(response.error)
                } else {
                    alert('Server Error');
                }

            },
            error: function(response) {
                alert('Server Error');
            }
        });
    }
</script>
@endsection