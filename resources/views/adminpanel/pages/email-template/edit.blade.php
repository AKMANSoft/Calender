@extends('adminpanel.layouts.master')

@section('other-css')
<!-- Plugins css -->
<link href="{{ asset('assets') }}/libs/flatpickr/flatpickr.min.css" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets') }}/libs/selectize/css/selectize.bootstrap3.css" rel="stylesheet" type="text/css" />



<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<link href="{{ asset('assets') }}/css/styles.css" rel="stylesheet" type="text/css">
<link href="{{ asset('assets') }}/css/custom.css" rel="stylesheet" type="text/css">

<!-- Quill.JS CSS -->
<link href="{{ asset('assets') }}/libs/quill/quill.core.css" rel="stylesheet" type="text/css">
<link href="{{ asset('assets') }}/libs/quill/quill.snow.css" rel="stylesheet" type="text/css">




<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

<style>
    a {
        text-decoration: none;
    }

    .ql-snow .ql-script,
    .ql-snow .ql-strike svg {
        stroke: none !important;
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
                        <h4 class="page-title">Email Template


                        </h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row g-0">
                <div id="email-editor" style="min-height: 400px;"> </div>
                <div class="mt-4 d-flex align-items-center justify-content-end">
                    <form action="{{route('admin.email-templates.update')}}" method="POST">
                        @csrf
                        @method('PUT')
                        <input type="text" value="{{$emailTemplate->data}}" name="data" class="d-none" id="emailTemplateInput" />
                        <button type="submit" class="btn btn-light">
                            Save
                            <i class="mdi mdi-check"></i>
                        </button>
                    </form>
                </div>

            </div>
            <!-- <form action="{{route('admin.email-templates.update')}}" method="POST">
                    @csrf
                    @method('PUT')
                    <textarea name="data" id="" cols="30" rows="10">{{$emailTemplate->data}}</textarea>
                    <button type="submit">Save</button>
                </form> -->
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


<!-- Quill.JS Scripts  -->
<script src="{{ asset('assets') }}/libs/quill/quill.min.js"></script>

<script>
    var toolbarOptions = [
        [{
            'header': [1, 2, 3, 4, 5, 6, false]
        }],
        [{
                'header': 1
            },
            {
                'header': 2
            },
        ],
        ['bold', 'italic', 'underline', 'strike'], // toggled buttons
        [{
            'script': 'sub'
        }, {
            'script': 'super'
        }], // superscript/subscript

        [{
            'list': 'ordered'
        }, {
            'list': 'bullet'
        }],
        [{
            'indent': '-1'
        }, {
            'indent': '+1'
        }], // outdent/indent
        [{
            'align': []
        }],
        [{
            'direction': 'rtl'
        }], // text direction

        [{
            'size': ['small', false, 'large', 'huge']
        }],
        [{
            'font': []
        }],

        [{
            'color': []
        }, {
            'background': []
        }], // dropdown with defaults from theme

        // 'code-block',
        ['blockquote', 'image'],

        ['clean'] // remove formatting button
    ];
    let editorOptions = {
        modules: {
            toolbar: toolbarOptions,
        },
        placeholder: "Type...",
        theme: "snow"
    };
    let editor = new Quill('#email-editor', editorOptions);

    editor.on("text-change", (delta, source) => {
        $("#emailTemplateInput").val($(".ql-editor").html());
        console.log($(".ql-editor").html());
    })

    $(document).ready(() => {
        $(".ql-editor").html($("#emailTemplateInput").val())
    })
</script>


@endsection