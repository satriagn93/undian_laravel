@extends('layout.template')
@section('title','Home')
@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" />
<div style="margin-top: 55px;" class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Toolbar-->
    <div class="card card-flush pb-0 bgi-position-y-center bgi-no-repeat mb-10" style="margin-left: 30px;margin-right: 30px;">
        <div class="card-header pt-10">
            <div class="d-flex align-items-center">
                <div class="symbol symbol-circle me-5">
                    <div class="symbol-label bg-transparent text-primary border border-secondary border-dashed">
                        <span class="svg-icon svg-icon-2x svg-icon-primary">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17.302 11.35L12.002 20.55H21.202C21.802 20.55 22.202 19.85 21.902 19.35L17.302 11.35Z" fill="currentColor"></path>
                                <path opacity="0.3" d="M12.002 20.55H2.802C2.202 20.55 1.80202 19.85 2.10202 19.35L6.70203 11.45L12.002 20.55ZM11.302 3.45L6.70203 11.35H17.302L12.702 3.45C12.402 2.85 11.602 2.85 11.302 3.45Z" fill="currentColor"></path>
                            </svg>
                        </span>
                    </div>
                </div>
                <div class="d-flex flex-column">
                    <h2 class="mb-1">Menu Participant</h2>
                    <div class="text-muted fw-bold">
                        <a href="{{url('/shuffle')}}">Dashboard</a>
                        <span class="mx-3">|</span>
                        <a href="{{url('/shuffle')}}">Menu Participant</a>
                    </div>
                </div>
            </div>

            <p align="right">
                <a href="{{url('/shuffle')}}" class="btn btn-bg-light btn-active-icon-danger btn-text-info me-2 mb-2">

                    <span class="svg-icon svg-icon-1">
                        <i style="font-size: 20px;" class="bi bi-gift"></i>
                    </span>
                    Menu Doorprize
                </a>
                <a href="{{url('/participant')}}" class="btn btn-bg-light btn-active-icon-danger btn-text-info me-2 mb-2">
                    <span class="svg-icon svg-icon-1">
                        <i style="font-size: 20px;" class="bi bi-people"></i>
                    </span>
                    Menu Participant
                </a>
            </p>
        </div>
        <div class="card-body pb-0">
        </div>
    </div>
    <!--end::Toolbar-->
    <!--begin::Post-->
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container-xxl">
            <!--begin::Layout Builder Notice-->
            <div class="card mb-10">
                <div class="card-header border-0 pt-6">
                    <!--begin::Card title-->
                    <div class="card-title">

                    </div>
                    <!--begin::Card title-->
                    <!--begin::Card toolbar-->
                    <div class="card-toolbar">
                        <form action="{{ route('upload_participants') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="input-group mb-3">
                                <input type="file" name="file" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2" required>
                                <button class="btn btn-sm btn-primary" type="submit" id="button-addon2">
                                    <span class="svg-icon svg-icon-2">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path opacity="0.3" d="M10 4H21C21.6 4 22 4.4 22 5V7H10V4Z" fill="currentColor"></path>
                                            <path d="M10.4 3.60001L12 6H21C21.6 6 22 6.4 22 7V19C22 19.6 21.6 20 21 20H3C2.4 20 2 19.6 2 19V4C2 3.4 2.4 3 3 3H9.20001C9.70001 3 10.2 3.20001 10.4 3.60001ZM16 11.6L12.7 8.29999C12.3 7.89999 11.7 7.89999 11.3 8.29999L8 11.6H11V17C11 17.6 11.4 18 12 18C12.6 18 13 17.6 13 17V11.6H16Z" fill="currentColor"></path>
                                            <path opacity="0.3" d="M11 11.6V17C11 17.6 11.4 18 12 18C12.6 18 13 17.6 13 17V11.6H11Z" fill="currentColor"></path>
                                        </svg>
                                    </span>
                                    Import
                                </button>
                                &nbsp &nbsp
                                <a href="#" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#modal-participant-create" data-backdrop="static"><span class="svg-icon svg-icon-2">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path opacity="0.3" d="M10 4H21C21.6 4 22 4.4 22 5V7H10V4Z" fill="currentColor"></path>
                                            <path d="M10.4 3.60001L12 6H21C21.6 6 22 6.4 22 7V19C22 19.6 21.6 20 21 20H3C2.4 20 2 19.6 2 19V4C2 3.4 2.4 3 3 3H9.2C9.7 3 10.2 3.20001 10.4 3.60001ZM16 12H13V9C13 8.4 12.6 8 12 8C11.4 8 11 8.4 11 9V12H8C7.4 12 7 12.4 7 13C7 13.6 7.4 14 8 14H11V17C11 17.6 11.4 18 12 18C12.6 18 13 17.6 13 17V14H16C16.6 14 17 13.6 17 13C17 12.4 16.6 12 16 12Z" fill="currentColor"></path>
                                            <path opacity="0.3" d="M11 14H8C7.4 14 7 13.6 7 13C7 12.4 7.4 12 8 12H11V14ZM16 12H13V14H16C16.6 14 17 13.6 17 13C17 12.4 16.6 12 16 12Z" fill="currentColor"></path>
                                        </svg>
                                    </span>
                                    Add Participant
                                </a>
                            </div>
                        </form>
                    </div>
                    <!--end::Card toolbar-->
                </div>
                <div class="card-body">
                    <table id="kt_datatable_dom_positioning" class="table table-striped table-row-bordered gy-5 gs-7 border rounded">
                        <thead>
                            <tr class="fw-bold fs-6 text-gray-800 px-7">
                                <th>No</th>
                                <th>Number</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Barcode</th>
                                <th>Created Date</th>
                                <th>Updated Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($dataparticipant as $dataparticipants)
                            <tr>
                                <td class="text-center"> {{ $loop->iteration }} </td>
                                <td>{{$dataparticipants->number}}</td>
                                <td>{{$dataparticipants->name}}</td>
                                <td>{{$dataparticipants->email}}</td>
                                <td style="width: 20px; height: 20px;">{!! DNS2D::getBarcodeHTML($dataparticipants->url, 'QRCODE',3,3) !!}</td>
                                <td>{{$dataparticipants->created_at}}</td>
                                <td>{{$dataparticipants->updated_at}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <!--end::Card-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Post-->
</div>
@include('sweetalert::alert')
@include('participant.modal-create')
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
<script type="text/javascript">
    $("#kt_datatable_dom_positioning").DataTable({
        "language": {
            "lengthMenu": "Show _MENU_",
        },
        "dom": "<'row'" +
            "<'col-sm-6 d-flex align-items-center justify-conten-start'l>" +
            "<'col-sm-6 d-flex align-items-center justify-content-end'f>" +
            ">" +

            "<'table-responsive'tr>" +

            "<'row'" +
            "<'col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start'i>" +
            "<'col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end'p>" +
            ">"
    });
</script>
@endsection
@push('js')
@endpush