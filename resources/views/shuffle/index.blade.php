@extends('layout.template')
@section('title','Home')
@section('content')
<div style="margin-top: 20px;" class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="toolbar d-flex flex-stack mb-3 mb-lg-5" id="kt_toolbar">
        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack flex-wrap">
            <!--begin::Page title-->
            <div class="page-title d-flex flex-column me-5 py-2">
                <!--begin::Title-->
                <h1 class="d-flex flex-column text-dark fw-bold fs-3 mb-0">Doorprize</h1>
                <!--end::Title-->
                <!--begin::Breadcrumb-->
                <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 pt-1">
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">
                        <a href="../../demo10/dist/index.html" class="text-muted text-hover-primary">Home</a>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-200 w-5px h-2px"></span>
                    </li>
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-200 w-5px h-2px"></span>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-dark">Doorprize</li>
                    <!--end::Item-->
                </ul>
            </div>
        </div>
    </div>
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <div id="kt_content_container" class="container-xxl">
            <div class="row gy-5 g-xl-10">
                <div class="col-xl-4 mb-xl-10">
                    <div class="card card-flush h-lg-100">
                        <div class="card-header pt-7">
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bold text-gray-800">List Pemenang</span>
                                <span class="text-gray-400 mt-1 fw-semibold fs-6">Total 16</span>
                            </h3>
                        </div>
                        <div style="margin-top: 15px;" class="card-body pt-0">
                            <div class="d-flex flex-stack">
                                <img src="{{asset('template')}}/media/icons/winner.svg" class="me-4 w-25px" style="border-radius: 4px" alt="" />
                                <div class="d-flex flex-stack flex-row-fluid d-grid gap-2">
                                    <div class="me-5">
                                        @if(isset($doorprize1->name))
                                        <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">{{$doorprize1->name}}</a>
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
                                <img src="{{asset('template')}}/media/icons/winner.svg" class="me-4 w-25px" style="border-radius: 4px" alt="" />
                                <div class="d-flex flex-stack flex-row-fluid d-grid gap-2">
                                    <div class="me-5">
                                        @if(isset($doorprize2->name))
                                        <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">{{$doorprize2->name}}</a>
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
                                <img src="{{asset('template')}}/media/icons/winner.svg" class="me-4 w-25px" style="border-radius: 4px" alt="" />
                                <div class="d-flex flex-stack flex-row-fluid d-grid gap-2">
                                    <div class="me-5">
                                        @if(isset($doorprize3->name))
                                        <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">{{$doorprize3->name}}</a>
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
                                <img src="{{asset('template')}}/media/icons/winner.svg" class="me-4 w-25px" style="border-radius: 4px" alt="" />
                                <div class="d-flex flex-stack flex-row-fluid d-grid gap-2">
                                    <div class="me-5">
                                        @if(isset($doorprize4->name))
                                        <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">{{$doorprize4->name}}</a>
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
                                <img src="{{asset('template')}}/media/icons/winner.svg" class="me-4 w-25px" style="border-radius: 4px" alt="" />
                                <div class="d-flex flex-stack flex-row-fluid d-grid gap-2">
                                    <div class="me-5">
                                        @if(isset($doorprize5->name))
                                        <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">{{$doorprize5->name}}</a>
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
                                <img src="{{asset('template')}}/media/icons/winner.svg" class="me-4 w-25px" style="border-radius: 4px" alt="" />
                                <div class="d-flex flex-stack flex-row-fluid d-grid gap-2">
                                    <div class="me-5">
                                        @if(isset($doorprize6->name))
                                        <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">{{$doorprize6->name}}</a>
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
                                <img src="{{asset('template')}}/media/icons/winner.svg" class="me-4 w-25px" style="border-radius: 4px" alt="" />
                                <div class="d-flex flex-stack flex-row-fluid d-grid gap-2">
                                    <div class="me-5">
                                        @if(isset($doorprize7->name))
                                        <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">{{$doorprize7->name}}</a>
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
                                <img src="{{asset('template')}}/media/icons/winner.svg" class="me-4 w-25px" style="border-radius: 4px" alt="" />
                                <div class="d-flex flex-stack flex-row-fluid d-grid gap-2">
                                    <div class="me-5">
                                        @if(isset($doorprize8->name))
                                        <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">{{$doorprize8->name}}</a>
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
                                <img src="{{asset('template')}}/media/icons/winner.svg" class="me-4 w-25px" style="border-radius: 4px" alt="" />
                                <div class="d-flex flex-stack flex-row-fluid d-grid gap-2">
                                    <div class="me-5">
                                        @if(isset($doorprize9->name))
                                        <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">{{$doorprize9->name}}</a>
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
                                <img src="{{asset('template')}}/media/icons/winner.svg" class="me-4 w-25px" style="border-radius: 4px" alt="" />
                                <div class="d-flex flex-stack flex-row-fluid d-grid gap-2">
                                    <div class="me-5">
                                        @if(isset($doorprize10->name))
                                        <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">{{$doorprize10->name}}</a>
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
                                <img src="{{asset('template')}}/media/icons/winner.svg" class="me-4 w-25px" style="border-radius: 4px" alt="" />
                                <div class="d-flex flex-stack flex-row-fluid d-grid gap-2">
                                    <div class="me-5">
                                        @if(isset($doorprize11->name))
                                        <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">{{$doorprize11->name}}</a>
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
                                <img src="{{asset('template')}}/media/icons/winner.svg" class="me-4 w-25px" style="border-radius: 4px" alt="" />
                                <div class="d-flex flex-stack flex-row-fluid d-grid gap-2">
                                    <div class="me-5">
                                        @if(isset($doorprize12->name))
                                        <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">{{$doorprize12->name}}</a>
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
                                <img src="{{asset('template')}}/media/icons/winner.svg" class="me-4 w-25px" style="border-radius: 4px" alt="" />
                                <div class="d-flex flex-stack flex-row-fluid d-grid gap-2">
                                    <div class="me-5">
                                        @if(isset($doorprize13->name))
                                        <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">{{$doorprize13->name}}</a>
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
                                <img src="{{asset('template')}}/media/icons/winner.svg" class="me-4 w-25px" style="border-radius: 4px" alt="" />
                                <div class="d-flex flex-stack flex-row-fluid d-grid gap-2">
                                    <div class="me-5">
                                        @if(isset($doorprize14->name))
                                        <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">{{$doorprize14->name}}</a>
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
                                <img src="{{asset('template')}}/media/icons/winner.svg" class="me-4 w-25px" style="border-radius: 4px" alt="" />
                                <div class="d-flex flex-stack flex-row-fluid d-grid gap-2">
                                    <div class="me-5">
                                        @if(isset($doorprize15->name))
                                        <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">{{$doorprize15->name}}</a>
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
                                <img src="{{asset('template')}}/media/icons/winner.svg" class="me-4 w-25px" style="border-radius: 4px" alt="" />
                                <div class="d-flex flex-stack flex-row-fluid d-grid gap-2">
                                    <div class="me-5">
                                        @if(isset($doorprize16->name))
                                        <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">{{$doorprize16->name}}</a>
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
                </div>
                <div class="col-xl-8 mb-5 mb-xl-10">
                    <div class="row g-5 g-xl-10 h-xxl-50 mb-0 mb-xl-10">
                        <div class="col-xxl-6">
                            <div class="card card-flush h-lg-100">
                                <div class="card-header py-7 mb-3">
                                    <h3 class="card-title align-items-start flex-column">
                                        <span class="card-label fw-bold text-gray-800"><b>Form undian <span id="p1value"></span></b></span>
                                        <span class="text-gray-400 mt-1 fw-semibold fs-6"> </span>
                                    </h3>
                                </div>
                                <input type="text" class="form-control form-control-sm" id="doorprizevalue" name="doorprizevalue" hidden>
                                <div id="formdiv" style="display: none;" class="card-body pt-0">
                                    <label for="exampleFormControlInput1" class="form-label">Nomor Undian</label>
                                    <div style="background-color: #eae9e9; width: 320px; height: 50px; font-size: 30px;border-radius: 4px; text-align: center; vertical-align: center;" class="names" id="divname"></div>
                                    <div style="background-color: #eae9e9; width: 320px; height: 50px; font-size: 30px;border-radius: 4px; text-align: center; vertical-align: center;" class="numbers" id="divnumber"></div>
                                    <br>
                                    <div class="card-toolbar">
                                        <a class="btn btn-sm btn-success roll" id="btn_start">Start</a> &nbsp &nbsp
                                        <a href="{{url('/shuffle')}}" class="btn btn-sm btn-secondary">Reset</a> &nbsp &nbsp
                                        <a onclick="addshuffle()" class="btn btn-sm btn-primary" id="btn_ok" style="display: none;">Get Winner</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=" col-xxl-6 mb-5 mb-xl-0">
                            <div class="card card-flush h-lg-100">
                                <div class="card-header pt-7 mb-5">
                                    <h3 class="card-title align-items-start flex-column">
                                        <span class="card-label fw-bold text-gray-800">Hadiah yang didapat</span>
                                        <!-- <span class="text-gray-400 mt-1 fw-semibold fs-6">Doorprize 1</span> -->
                                    </h3>
                                </div>
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
                            </div>
                        </div>

                        <!-- <div class="col-xxl-12">
                            <div class="card card-flush h-lg-100">
                                <div class="card-header py-7 mb-3">
                                    <h3 class="card-title align-items-start flex-column">
                                        <span class="card-label fw-bold text-gray-800"><b>List Hadiah <span id="p1value"></span></b></span>
                                        <span class="text-gray-400 mt-1 fw-semibold fs-6"> </span>
                                    </h3>
                                </div>
                                <div class="tns tns-default">
                                    <div data-tns="true" data-tns-loop="true" data-tns-swipe-angle="false" data-tns-speed="2000" data-tns-autoplay="true" data-tns-autoplay-timeout="18000" data-tns-controls="true" data-tns-nav="false" data-tns-items="3" data-tns-center="false" data-tns-dots="false" data-tns-prev-button="#kt_team_slider_prev1" data-tns-next-button="#kt_team_slider_next1">

                                        <div class="text-center px-5 py-5">
                                            <img src="{{asset('template')}}/media/stock/600x400/img-1.jpg" class="card-rounded mw-100" alt="" />
                                        </div>
                                        ...
                                    </div>
                                    <button class="btn btn-icon btn-active-color-primary" id="kt_team_slider_prev1">
                                        <span class="svg-icon svg-icon-3x">
                                            ...
                                        </span>
                                    </button>
                                    <button class="btn btn-icon btn-active-color-primary" id="kt_team_slider_next1">
                                        <span class="svg-icon svg-icon-3x">
                                            ...
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
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