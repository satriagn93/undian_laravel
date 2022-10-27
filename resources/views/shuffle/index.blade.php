@extends('layout.template')
@section('title','Home')
@section('content')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <div style="border: 0px;" class="card card-flush pb-0 bgi-position-y-center bgi-no-repeat mb-10">
        <div style="border: 1px;" class="card-header pt-10">
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
                    <h2 class="mb-1">Menu Doorprize</h2>
                    <div class="text-muted fw-bold">
                        <a href="{{url('/shuffle')}}">Dashboard</a>
                        <span class="mx-3">|</span>
                        <a href="{{url('/shuffle')}}">Menu Doorprize</a>
                    </div>
                </div>
            </div>

            <p align="right">
                <a href="{{url('/shuffle')}}" class="btn btn-bg-light btn-icon-danger btn-text-info me-2 mb-2">

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

    <div class="post d-flex flex-column-fluid" id="kt_post">
        <div id="kt_content_container" class="container-xxl">
            <div class="row gy-5 g-xl-8">
                <div class="col-xl-4">
                    <div class="card card-xl-stretch mb-xl-8">
                        <div class="card-header border-2">
                            <h3 class="card-title fw-bold text-dark">List Pemenang</h3>
                            <div class="card-toolbar">
                            </div>
                        </div>
                        <div style="margin-top: 15px;" class="card-body pt-0">
                            <div class="d-flex flex-stack">
                                <img src="{{asset('template')}}/media/icons/winner.svg" class="me-4 w-30px" style="border-radius: 4px" alt="" />
                                <div class="d-flex flex-stack flex-row-fluid d-grid gap-2">
                                    <div class="me-5">
                                        @if(isset($doorprize1->name))
                                        <a style="font-size: medium;" class="text-gray-800 fw-bold ">{{$doorprize1->name}}</a>
                                        <span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">{{$doorprize1->number}}</span>
                                        @endif
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div class="m-0">
                                            <span class="badge badge-light-success fs-base">
                                                <span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
                                                </span>
                                                <a href="#" onclick="dp1()"> Win doorprize 1</a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr style="border-top: 2px dashed grey;">
                            <div class="d-flex flex-stack">
                                <img src="{{asset('template')}}/media/icons/winner.svg" class="me-4 w-30px" style="border-radius: 4px" alt="" />
                                <div class="d-flex flex-stack flex-row-fluid d-grid gap-2">
                                    <div class="me-5">
                                        @if(isset($doorprize2->name))
                                        <a style="font-size: medium;" class="text-gray-800 fw-bold ">{{$doorprize2->name}}</a>
                                        <span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">{{$doorprize2->number}}</span>
                                        @endif
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div class="m-0">
                                            <span class="badge badge-light-success fs-base">
                                                <span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
                                                </span>
                                                <a href="#" onclick="dp2()"> Win doorprize 2</a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <hr style="border-top: 2px dashed grey;">
                            <div class="d-flex flex-stack">
                                <img src="{{asset('template')}}/media/icons/winner.svg" class="me-4 w-30px" style="border-radius: 4px" alt="" />
                                <div class="d-flex flex-stack flex-row-fluid d-grid gap-2">
                                    <div class="me-5">
                                        @if(isset($doorprize3->name))
                                        <a style="font-size: medium;" href="#" class="text-gray-800 fw-bold ">{{$doorprize3->name}}</a>
                                        <span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">{{$doorprize3->number}}</span>
                                        @endif
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div class="m-0">
                                            <span class="badge badge-light-success fs-base">
                                                <span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
                                                </span>
                                                <a href="#" onclick="dp3()"> Win doorprize 3</a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr style="border-top: 2px dashed grey;">
                            <div class="d-flex flex-stack">
                                <img src="{{asset('template')}}/media/icons/winner.svg" class="me-4 w-30px" style="border-radius: 4px" alt="" />
                                <div class="d-flex flex-stack flex-row-fluid d-grid gap-2">
                                    <div class="me-5">
                                        @if(isset($doorprize4->name))
                                        <a style="font-size: medium;" href="#" class="text-gray-800 fw-bold ">{{$doorprize4->name}}</a>
                                        <span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">{{$doorprize4->number}}</span>
                                        @endif
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div class="m-0">
                                            <span class="badge badge-light-success fs-base">
                                                <span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
                                                </span>
                                                <a href="#" onclick="dp4()"> Win doorprize 4</a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr style="border-top: 2px dashed grey;">
                            <div class="d-flex flex-stack">
                                <img src="{{asset('template')}}/media/icons/winner.svg" class="me-4 w-30px" style="border-radius: 4px" alt="" />
                                <div class="d-flex flex-stack flex-row-fluid d-grid gap-2">
                                    <div class="me-5">
                                        @if(isset($doorprize5->name))
                                        <a style="font-size: medium;" href="#" class="text-gray-800 fw-bold ">{{$doorprize5->name}}</a>
                                        <span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">{{$doorprize5->number}}</span>
                                        @endif
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div class="m-0">
                                            <span class="badge badge-light-success fs-base">
                                                <span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
                                                </span>
                                                <a href="#" onclick="dp5()"> Win doorprize 5</a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr style="border-top: 2px dashed grey;">
                            <div class="d-flex flex-stack">
                                <img src="{{asset('template')}}/media/icons/winner.svg" class="me-4 w-30px" style="border-radius: 4px" alt="" />
                                <div class="d-flex flex-stack flex-row-fluid d-grid gap-2">
                                    <div class="me-5">
                                        @if(isset($doorprize6->name))
                                        <a style="font-size: medium;" href="#" class="text-gray-800 fw-bold ">{{$doorprize6->name}}</a>
                                        <span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">{{$doorprize6->number}}</span>
                                        @endif
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div class="m-0">
                                            <span class="badge badge-light-success fs-base">
                                                <span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
                                                </span>
                                                <a href="#" onclick="dp6()"> Win doorprize 6</a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr style="border-top: 2px dashed grey;">
                            <div class="d-flex flex-stack">
                                <img src="{{asset('template')}}/media/icons/winner.svg" class="me-4 w-30px" style="border-radius: 4px" alt="" />
                                <div class="d-flex flex-stack flex-row-fluid d-grid gap-2">
                                    <div class="me-5">
                                        @if(isset($doorprize7->name))
                                        <a style="font-size: medium;" href="#" class="text-gray-800 fw-bold ">{{$doorprize7->name}}</a>
                                        <span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">{{$doorprize7->number}}</span>
                                        @endif
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div class="m-0">
                                            <span class="badge badge-light-success fs-base">
                                                <span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
                                                </span>
                                                <a href="#" onclick="dp7()"> Win doorprize 7</a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr style="border-top: 2px dashed grey;">
                            <div class="d-flex flex-stack">
                                <img src="{{asset('template')}}/media/icons/winner.svg" class="me-4 w-30px" style="border-radius: 4px" alt="" />
                                <div class="d-flex flex-stack flex-row-fluid d-grid gap-2">
                                    <div class="me-5">
                                        @if(isset($doorprize8->name))
                                        <a style="font-size: medium;" href="#" class="text-gray-800 fw-bold ">{{$doorprize8->name}}</a>
                                        <span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">{{$doorprize8->number}}</span>
                                        @endif
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div class="m-0">
                                            <span class="badge badge-light-success fs-base">
                                                <span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
                                                </span>
                                                <a href="#" onclick="dp8()"> Win doorprize 8</a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr style="border-top: 2px dashed grey;">
                            <div class="d-flex flex-stack">
                                <img src="{{asset('template')}}/media/icons/winner.svg" class="me-4 w-30px" style="border-radius: 4px" alt="" />
                                <div class="d-flex flex-stack flex-row-fluid d-grid gap-2">
                                    <div class="me-5">
                                        @if(isset($doorprize9->name))
                                        <a style="font-size: medium;" href="#" class="text-gray-800 fw-bold ">{{$doorprize9->name}}</a>
                                        <span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">{{$doorprize9->number}}</span>
                                        @endif
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div class="m-0">
                                            <span class="badge badge-light-success fs-base">
                                                <span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
                                                </span>
                                                <a href="#" onclick="dp9()"> Win doorprize 9</a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr style="border-top: 2px dashed grey;">
                            <div class="d-flex flex-stack">
                                <img src="{{asset('template')}}/media/icons/winner.svg" class="me-4 w-30px" style="border-radius: 4px" alt="" />
                                <div class="d-flex flex-stack flex-row-fluid d-grid gap-2">
                                    <div class="me-5">
                                        @if(isset($doorprize10->name))
                                        <a style="font-size: medium;" href="#" class="text-gray-800 fw-bold ">{{$doorprize10->name}}</a>
                                        <span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">{{$doorprize10->number}}</span>
                                        @endif
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div class="m-0">
                                            <span class="badge badge-light-success fs-base">
                                                <span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
                                                </span>
                                                <a href="#" onclick="dp10()"> Win doorprize 10</a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr style="border-top: 2px dashed grey;">
                            <div class="d-flex flex-stack">
                                <img src="{{asset('template')}}/media/icons/winner.svg" class="me-4 w-30px" style="border-radius: 4px" alt="" />
                                <div class="d-flex flex-stack flex-row-fluid d-grid gap-2">
                                    <div class="me-5">
                                        @if(isset($doorprize11->name))
                                        <a style="font-size: medium;" href="#" class="text-gray-800 fw-bold ">{{$doorprize11->name}}</a>
                                        <span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">{{$doorprize11->number}}</span>
                                        @endif
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div class="m-0">
                                            <span class="badge badge-light-success fs-base">
                                                <span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
                                                </span>
                                                <a href="#" onclick="dp11()"> Win doorprize 11</a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr style="border-top: 2px dashed grey;">
                            <div class="d-flex flex-stack">
                                <img src="{{asset('template')}}/media/icons/winner.svg" class="me-4 w-30px" style="border-radius: 4px" alt="" />
                                <div class="d-flex flex-stack flex-row-fluid d-grid gap-2">
                                    <div class="me-5">
                                        @if(isset($doorprize12->name))
                                        <a style="font-size: medium;" href="#" class="text-gray-800 fw-bold ">{{$doorprize12->name}}</a>
                                        <span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">{{$doorprize12->number}}</span>
                                        @endif
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div class="m-0">
                                            <span class="badge badge-light-success fs-base">
                                                <span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
                                                </span>
                                                <a href="#" onclick="dp12()"> Win doorprize 12</a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr style="border-top: 2px dashed grey;">
                            <div class="d-flex flex-stack">
                                <img src="{{asset('template')}}/media/icons/winner.svg" class="me-4 w-30px" style="border-radius: 4px" alt="" />
                                <div class="d-flex flex-stack flex-row-fluid d-grid gap-2">
                                    <div class="me-5">
                                        @if(isset($doorprize13->name))
                                        <a style="font-size: medium;" href="#" class="text-gray-800 fw-bold ">{{$doorprize13->name}}</a>
                                        <span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">{{$doorprize13->number}}</span>
                                        @endif
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div class="m-0">
                                            <span class="badge badge-light-success fs-base">
                                                <span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
                                                </span>
                                                <a href="#" onclick="dp13()"> Win doorprize 13</a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr style="border-top: 2px dashed grey;">
                            <div class="d-flex flex-stack">
                                <img src="{{asset('template')}}/media/icons/winner.svg" class="me-4 w-30px" style="border-radius: 4px" alt="" />
                                <div class="d-flex flex-stack flex-row-fluid d-grid gap-2">
                                    <div class="me-5">
                                        @if(isset($doorprize14->name))
                                        <a style="font-size: medium;" href="#" class="text-gray-800 fw-bold ">{{$doorprize14->name}}</a>
                                        <span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">{{$doorprize14->number}}</span>
                                        @endif
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div class="m-0">
                                            <span class="badge badge-light-success fs-base">
                                                <span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
                                                </span>
                                                <a href="#" onclick="dp14()"> Win doorprize 14</a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr style="border-top: 2px dashed grey;">
                            <div class="d-flex flex-stack">
                                <img src="{{asset('template')}}/media/icons/winner.svg" class="me-4 w-30px" style="border-radius: 4px" alt="" />
                                <div class="d-flex flex-stack flex-row-fluid d-grid gap-2">
                                    <div class="me-5">
                                        @if(isset($doorprize15->name))
                                        <a style="font-size: medium;" href="#" class="text-gray-800 fw-bold ">{{$doorprize15->name}}</a>
                                        <span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">{{$doorprize15->number}}</span>
                                        @endif
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div class="m-0">
                                            <span class="badge badge-light-success fs-base">
                                                <span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
                                                </span>
                                                <a href="#" onclick="dp15()"> Win doorprize 15</a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr style="border-top: 2px dashed grey;">
                            <div class="d-flex flex-stack">
                                <img src="{{asset('template')}}/media/icons/winner.svg" class="me-4 w-30px" style="border-radius: 4px" alt="" />
                                <div class="d-flex flex-stack flex-row-fluid d-grid gap-2">
                                    <div class="me-5">
                                        @if(isset($doorprize16->name))
                                        <a style="font-size: medium;" href="#" class="text-gray-800 fw-bold ">{{$doorprize16->name}}</a>
                                        <span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">{{$doorprize16->number}}</span>
                                        @endif
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div class="m-0">
                                            <span class="badge badge-light-success fs-base">
                                                <span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
                                                </span>
                                                <a href="#" onclick="dp16()"> Win doorprize 16</a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end::List Widget 2-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-xl-4">
                    <!--begin::List Widget 6-->
                    <div class="card card-xl-stretch mb-xl-8">
                        <!--begin::Header-->
                        <div class="card-header border-1">
                            <h3 class="card-title fw-bold text-dark"><span class="card-label fw-bold text-gray-800"><b>Form undian <span id="p1value"></span></b></span></h3>
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <br>
                        <input type="text" class="form-control form-control-sm" id="doorprizevalue" name="doorprizevalue" hidden>
                        <div id="formdiv" style="display: none;" class="card-body pt-0">
                            <!--begin::Item-->
                            <div style="height: 80px;" class="d-flex align-items-center bg-light-secondary rounded p-5 mb-7">
                                <div class="flex-grow-1 me-2">
                                    <span class="text-muted fw-semibold d-block">Nomor Participant</span>
                                    <a class="fw-bold text-gray-800 text-hover-primary fs-6">
                                        <p style="font-size: 25px;" class="names" id="divname"></p>
                                    </a>
                                </div>
                            </div>
                            <div style="height: 80px;" class="d-flex align-items-center bg-light-secondary rounded p-5 mb-7">
                                <div class="flex-grow-1 me-2">
                                    <span class="text-muted fw-semibold d-block">Nama Participant</span>
                                    <a class="fw-bold text-gray-800 text-hover-primary fs-6">
                                        <p style="font-size: 25px;" class="numbers" id="divnumber"></p>
                                    </a>
                                </div>
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex align-items-center bg-light-secondary rounded p-5 mb-7">
                                <div class="flex-grow-1 me-2">
                                    <a class="btn btn-sm btn-success roll" id="btn_start">Start</a> &nbsp
                                    <a href="{{url('/shuffle')}}" class="btn btn-sm btn-secondary">Reset</a> &nbsp
                                    <a onclick="addshuffle()" class="btn btn-sm btn-primary" id="btn_ok" style="display: none;">Get Winner</a>
                                </div>
                            </div>
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::List Widget 6-->
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col-xl-4">
                    <!--begin::List Widget 4-->
                    <div class="card card-xl-stretch mb-5 mb-xl-8">
                        <!--begin::Header-->
                        <div class="card-header border-1 pt-5">
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bold text-dark">Hadiah yang didapat</span>
                                <span class="text-muted mt-1 fw-semibold fs-7">&nbsp</span>
                            </h3>
                            <div class="card-toolbar">
                            </div>
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body pt-0">
                            <div class="py-10 text-center">
                                <img style="display: none;" id="gambar1" src="{{asset('template')}}/media/svg/illustrations/easy/4.svg" class="w-200px" alt="">
                                <img style="display: none;" id="gambar2" src="{{asset('template')}}/media/svg/illustrations/easy/4.svg" class="w-200px" alt="">
                                <img style="display: none;" id="gambar3" src="{{asset('template')}}/media/svg/illustrations/easy/4.svg" class="w-200px" alt="">
                                <img style="display: none;" id="gambar4" src="{{asset('template')}}/media/svg/illustrations/easy/4.svg" class="w-200px" alt="">
                                <img style="display: none;" id="gambar5" src="{{asset('template')}}/media/svg/illustrations/easy/4.svg" class="w-200px" alt="">
                                <img style="display: none;" id="gambar6" src="{{asset('template')}}/media/svg/illustrations/easy/4.svg" class="w-200px" alt="">
                                <img style="display: none;" id="gambar7" src="{{asset('template')}}/media/svg/illustrations/easy/4.svg" class="w-200px" alt="">
                                <img style="display: none;" id="gambar8" src="{{asset('template')}}/media/svg/illustrations/easy/4.svg" class="w-200px" alt="">
                                <img style="display: none;" id="gambar9" src="{{asset('template')}}/media/svg/illustrations/easy/4.svg" class="w-200px" alt="">
                                <img style="display: none;" id="gambar10" src="{{asset('template')}}/media/svg/illustrations/easy/4.svg" class="w-200px" alt="">
                                <img style="display: none;" id="gambar11" src="{{asset('template')}}/media/svg/illustrations/easy/4.svg" class="w-200px" alt="">
                                <img style="display: none;" id="gambar12" src="{{asset('template')}}/media/svg/illustrations/easy/4.svg" class="w-200px" alt="">
                                <img style="display: none;" id="gambar13" src="{{asset('template')}}/media/svg/illustrations/easy/4.svg" class="w-200px" alt="">
                                <img style="display: none;" id="gambar14" src="{{asset('template')}}/media/svg/illustrations/easy/4.svg" class="w-200px" alt="">
                                <img style="display: none;" id="gambar15" src="{{asset('template')}}/media/svg/illustrations/easy/4.svg" class="w-200px" alt="">
                                <img style="display: none;" id="gambar16" src="{{asset('template')}}/media/svg/illustrations/easy/4.svg" class="w-200px" alt="">
                            </div>
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::List Widget 4-->
                </div>
                <!--end::Col-->
            </div>
        </div>
    </div>
</div>
@include('sweetalert::alert')
@include('shuffle.modal-add')
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script>
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    $('#btn_start').click(function() {
        $("#btn_ok").show('');
        $.ajax({
            url: 'getparticipant',
            type: 'post',
            data: {
                _token: CSRF_TOKEN,
            },
            dataType: 'json',
            success: function(response) {
                var values = Object.values(response);

                trigerabsent()
                const ENTRANTSS = values;
                const rollEl = document.querySelector(".roll");
                const namesEl = document.querySelector(".names");

                function randomName() {
                    const rand = Math.floor(Math.random() * ENTRANTSS.length);
                    const name = ENTRANTSS[rand];
                    namesEl.innerText = name;
                }

                function trigerabsent() {
                    setDeceleratingTimeout(randomName, -2, 500000);
                }

                function setDeceleratingTimeout(callback, factor, times) {
                    const internalCallback = ((t, counter) => {
                        return () => {
                            if (--t > 0) {
                                setTimeout(internalCallback, ++counter * factor);
                                callback();
                            }
                        };
                    })(times, 0);
                    setTimeout(internalCallback, factor);
                }
            }
        });

        $.ajax({
            url: 'nameparticipant',
            type: 'post',
            data: {
                _token: CSRF_TOKEN,
            },
            dataType: 'json',
            success: function(response) {
                var values = Object.values(response);

                trigerabsent()
                const ENTRANTSS = values;
                const rollEl = document.querySelector(".roll");
                const namesEl = document.querySelector(".numbers");

                function randomName() {
                    const rand = Math.floor(Math.random() * ENTRANTSS.length);
                    const name = ENTRANTSS[rand];
                    namesEl.innerText = name;
                }

                function trigerabsent() {
                    setDeceleratingTimeout(randomName, -2, 500000);
                }

                function setDeceleratingTimeout(callback, factor, times) {
                    const internalCallback = ((t, counter) => {
                        return () => {
                            if (--t > 0) {
                                setTimeout(internalCallback, ++counter * factor);
                                callback();
                            }
                        };
                    })(times, 0);
                    setTimeout(internalCallback, factor);
                }
            }
        });
    });
</script>
@endsection
@push('js')
<script src="{{ asset('management/shuffle.js') }}"></script>
<script>
    $(document).ready(function() {
        $("#edit-Items").modal({
            show: false,
            backdrop: 'static'
        });
    });
</script>
@endpush