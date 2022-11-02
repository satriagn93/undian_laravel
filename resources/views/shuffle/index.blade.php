@extends('layout.template')
@section('title','Home')
@section('content')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <div style="border: 0px;" class="card card-flush pb-0 bgi-position-y-center bgi-no-repeat mb-10">
        <!-- <div style="border: 1px;" class="card-header pt-10">
            <div class="d-flex align-items-center">
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
        </div> -->
    </div>

    <div class="post d-flex flex-column-fluid" id="kt_post">
        <div id="kt_content_container" class="container-xxl">
            <div class="row gy-5 g-xl-8">
                <div class="col-xl-8">
                    <div class="scroll h-550px px-5 card card-xl-stretch mb-xl-8">
                        <div class="card-header border-2">
                            <h3 style="font-size: 30px; color: wheat;" class="card-title fw-bold text-dark">List Pemenang</h3>
                            <div class="card-toolbar">
                            </div>
                        </div>
                        <div style="margin-top: 15px;" class="card-body pt-0">
                            <div class="d-flex flex-stack">
                                <img src="{{asset('template')}}/media/icons/winner.svg" class="me-4 w-60px" style="border-radius: 4px" alt="" />
                                <div class="d-flex flex-stack flex-row-fluid d-grid gap-2">
                                    <div class="me-5">
                                        @if(isset($doorprize1->name))
                                        <a style="font-size: 40px;" class="text-gray-800 fw-bold ">{{$doorprize1->name}}</a>
                                        <!-- <span style="font-size: 20px;" class="text-gray-400 fw-semibold d-block text-start ps-0">{{$doorprize1->number}}</span> -->
                                        @endif
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div class="m-0">
                                            <span class="badge badge-light-success fs-base">
                                                <span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
                                                </span>
                                                <a style="font-size: 30px;" href="#" onclick="dp1()"> Win doorprize 1</a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr style="border-top: 2px dashed grey;">
                            <div class="d-flex flex-stack">
                                <img src="{{asset('template')}}/media/icons/winner.svg" class="me-4 w-60px" style="border-radius: 4px" alt="" />
                                <div class="d-flex flex-stack flex-row-fluid d-grid gap-2">
                                    <div class="me-5">
                                        @if(isset($doorprize2->name))
                                        <a style="font-size: 40px;" class="text-gray-800 fw-bold ">{{$doorprize2->name}}</a>
                                        <!-- <span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">{{$doorprize2->number}}</span> -->
                                        @endif
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div class="m-0">
                                            <span class="badge badge-light-success fs-base">
                                                <span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
                                                </span>
                                                <a style="font-size: 30px;" href="#" onclick="dp2()"> Win doorprize 2</a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <hr style="border-top: 2px dashed grey;">
                            <div class="d-flex flex-stack">
                                <img src="{{asset('template')}}/media/icons/winner.svg" class="me-4 w-60px" style="border-radius: 4px" alt="" />
                                <div class="d-flex flex-stack flex-row-fluid d-grid gap-2">
                                    <div class="me-5">
                                        @if(isset($doorprize3->name))
                                        <a style="font-size: 40px;" href="#" class="text-gray-800 fw-bold ">{{$doorprize3->name}}</a>
                                        <!-- <span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">{{$doorprize3->number}}</span> -->
                                        @endif
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div class="m-0">
                                            <span class="badge badge-light-success fs-base">
                                                <span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
                                                </span>
                                                <a style="font-size: 30px;" href="#" onclick="dp3()"> Win doorprize 3</a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr style="border-top: 2px dashed grey;">
                            <div class="d-flex flex-stack">
                                <img src="{{asset('template')}}/media/icons/winner.svg" class="me-4 w-60px" style="border-radius: 4px" alt="" />
                                <div class="d-flex flex-stack flex-row-fluid d-grid gap-2">
                                    <div class="me-5">
                                        @if(isset($doorprize4->name))
                                        <a style="font-size: 40px;" href="#" class="text-gray-800 fw-bold ">{{$doorprize4->name}}</a>
                                        <!-- <span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">{{$doorprize4->number}}</span> -->
                                        @endif
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div class="m-0">
                                            <span class="badge badge-light-success fs-base">
                                                <span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
                                                </span>
                                                <a style="font-size: 30px;" href="#" onclick="dp4()"> Win doorprize 4</a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr style="border-top: 2px dashed grey;">
                            <div class="d-flex flex-stack">
                                <img src="{{asset('template')}}/media/icons/winner.svg" class="me-4 w-60px" style="border-radius: 4px" alt="" />
                                <div class="d-flex flex-stack flex-row-fluid d-grid gap-2">
                                    <div class="me-5">
                                        @if(isset($doorprize5->name))
                                        <a style="font-size: 40px;" href="#" class="text-gray-800 fw-bold ">{{$doorprize5->name}}</a>
                                        <!-- <span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">{{$doorprize5->number}}</span> -->
                                        @endif
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div class="m-0">
                                            <span class="badge badge-light-success fs-base">
                                                <span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
                                                </span>
                                                <a style="font-size: 30px;" href="#" onclick="dp5()"> Win doorprize 5</a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr style="border-top: 2px dashed grey;">
                            <div class="d-flex flex-stack">
                                <img src="{{asset('template')}}/media/icons/winner.svg" class="me-4 w-60px" style="border-radius: 4px" alt="" />
                                <div class="d-flex flex-stack flex-row-fluid d-grid gap-2">
                                    <div class="me-5">
                                        @if(isset($doorprize6->name))
                                        <a style="font-size: 40px;" href="#" class="text-gray-800 fw-bold ">{{$doorprize6->name}}</a>
                                        <!-- <span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">{{$doorprize6->number}}</span> -->
                                        @endif
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div class="m-0">
                                            <span class="badge badge-light-success fs-base">
                                                <span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
                                                </span>
                                                <a style="font-size: 30px;" href="#" onclick="dp6()"> Win doorprize 6</a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr style="border-top: 2px dashed grey;">
                            <div class="d-flex flex-stack">
                                <img src="{{asset('template')}}/media/icons/winner.svg" class="me-4 w-60px" style="border-radius: 4px" alt="" />
                                <div class="d-flex flex-stack flex-row-fluid d-grid gap-2">
                                    <div class="me-5">
                                        @if(isset($doorprize7->name))
                                        <a style="font-size: 40px;" href="#" class="text-gray-800 fw-bold ">{{$doorprize7->name}}</a>
                                        <!-- <span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">{{$doorprize7->number}}</span> -->
                                        @endif
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div class="m-0">
                                            <span class="badge badge-light-success fs-base">
                                                <span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
                                                </span>
                                                <a style="font-size: 30px;" href="#" onclick="dp7()"> Win doorprize 7</a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr style="border-top: 2px dashed grey;">
                            <div class="d-flex flex-stack">
                                <img src="{{asset('template')}}/media/icons/winner.svg" class="me-4 w-60px" style="border-radius: 4px" alt="" />
                                <div class="d-flex flex-stack flex-row-fluid d-grid gap-2">
                                    <div class="me-5">
                                        @if(isset($doorprize8->name))
                                        <a style="font-size: 40px;" href="#" class="text-gray-800 fw-bold ">{{$doorprize8->name}}</a>
                                        <!-- <span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">{{$doorprize8->number}}</span> -->
                                        @endif
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div class="m-0">
                                            <span class="badge badge-light-success fs-base">
                                                <span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
                                                </span>
                                                <a style="font-size: 30px;" href="#" onclick="dp8()"> Win doorprize 8</a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr style="border-top: 2px dashed grey;">
                            <div class="d-flex flex-stack">
                                <img src="{{asset('template')}}/media/icons/winner.svg" class="me-4 w-60px" style="border-radius: 4px" alt="" />
                                <div class="d-flex flex-stack flex-row-fluid d-grid gap-2">
                                    <div class="me-5">
                                        @if(isset($doorprize9->name))
                                        <a style="font-size: 40px;" href="#" class="text-gray-800 fw-bold ">{{$doorprize9->name}}</a>
                                        <!-- <span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">{{$doorprize9->number}}</span> -->
                                        @endif
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div class="m-0">
                                            <span class="badge badge-light-success fs-base">
                                                <span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
                                                </span>
                                                <a style="font-size: 30px;" href="#" onclick="dp9()"> Win doorprize 9</a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr style="border-top: 2px dashed grey;">
                            <div class="d-flex flex-stack">
                                <img src="{{asset('template')}}/media/icons/winner.svg" class="me-4 w-60px" style="border-radius: 4px" alt="" />
                                <div class="d-flex flex-stack flex-row-fluid d-grid gap-2">
                                    <div class="me-5">
                                        @if(isset($doorprize10->name))
                                        <a style="font-size: 40px;" href="#" class="text-gray-800 fw-bold ">{{$doorprize10->name}}</a>
                                        <!-- <span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">{{$doorprize10->number}}</span> -->
                                        @endif
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div class="m-0">
                                            <span class="badge badge-light-success fs-base">
                                                <span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
                                                </span>
                                                <a style="font-size: 30px;" href="#" onclick="dp10()"> Win doorprize 10</a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr style="border-top: 2px dashed grey;">
                            <div class="d-flex flex-stack">
                                <img src="{{asset('template')}}/media/icons/winner.svg" class="me-4 w-60px" style="border-radius: 4px" alt="" />
                                <div class="d-flex flex-stack flex-row-fluid d-grid gap-2">
                                    <div class="me-5">
                                        @if(isset($doorprize11->name))
                                        <a style="font-size: 40px;" href="#" class="text-gray-800 fw-bold ">{{$doorprize11->name}}</a>
                                        <!-- <span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">{{$doorprize11->number}}</span> -->
                                        @endif
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div class="m-0">
                                            <span class="badge badge-light-success fs-base">
                                                <span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
                                                </span>
                                                <a style="font-size: 30px;" href="#" onclick="dp11()"> Win doorprize 11</a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr style="border-top: 2px dashed grey;">
                            <div class="d-flex flex-stack">
                                <img src="{{asset('template')}}/media/icons/winner.svg" class="me-4 w-60px" style="border-radius: 4px" alt="" />
                                <div class="d-flex flex-stack flex-row-fluid d-grid gap-2">
                                    <div class="me-5">
                                        @if(isset($doorprize12->name))
                                        <a style="font-size: 40px;" href="#" class="text-gray-800 fw-bold ">{{$doorprize12->name}}</a>
                                        <!-- <span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">{{$doorprize12->number}}</span> -->
                                        @endif
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div class="m-0">
                                            <span class="badge badge-light-success fs-base">
                                                <span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
                                                </span>
                                                <a style="font-size: 30px;" href="#" onclick="dp12()"> Win doorprize 12</a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr style="border-top: 2px dashed grey;">
                            <div class="d-flex flex-stack">
                                <img src="{{asset('template')}}/media/icons/winner.svg" class="me-4 w-60px" style="border-radius: 4px" alt="" />
                                <div class="d-flex flex-stack flex-row-fluid d-grid gap-2">
                                    <div class="me-5">
                                        @if(isset($doorprize13->name))
                                        <a style="font-size: 40px;" href="#" class="text-gray-800 fw-bold ">{{$doorprize13->name}}</a>
                                        <!-- <span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">{{$doorprize13->number}}</span> -->
                                        @endif
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div class="m-0">
                                            <span class="badge badge-light-success fs-base">
                                                <span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
                                                </span>
                                                <a style="font-size: 30px;" href="#" onclick="dp13()"> Win doorprize 13</a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr style="border-top: 2px dashed grey;">
                            <div class="d-flex flex-stack">
                                <img src="{{asset('template')}}/media/icons/winner.svg" class="me-4 w-60px" style="border-radius: 4px" alt="" />
                                <div class="d-flex flex-stack flex-row-fluid d-grid gap-2">
                                    <div class="me-5">
                                        @if(isset($doorprize14->name))
                                        <a style="font-size: 40px;" href="#" class="text-gray-800 fw-bold ">{{$doorprize14->name}}</a>
                                        <!-- <span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">{{$doorprize14->number}}</span> -->
                                        @endif
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div class="m-0">
                                            <span class="badge badge-light-success fs-base">
                                                <span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
                                                </span>
                                                <a style="font-size: 30px;" href="#" onclick="dp14()"> Win doorprize 14</a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr style="border-top: 2px dashed grey;">
                            <div class="d-flex flex-stack">
                                <img src="{{asset('template')}}/media/icons/winner.svg" class="me-4 w-60px" style="border-radius: 4px" alt="" />
                                <div class="d-flex flex-stack flex-row-fluid d-grid gap-2">
                                    <div class="me-5">
                                        @if(isset($doorprize15->name))
                                        <a style="font-size: 40px;" href="#" class="text-gray-800 fw-bold ">{{$doorprize15->name}}</a>
                                        <!-- <span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">{{$doorprize15->number}}</span> -->
                                        @endif
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div class="m-0">
                                            <span class="badge badge-light-success fs-base">
                                                <span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
                                                </span>
                                                <a style="font-size: 30px;" href="#" onclick="dp15()"> Win doorprize 15</a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr style="border-top: 2px dashed grey;">
                            <div class="d-flex flex-stack">
                                <img src="{{asset('template')}}/media/icons/winner.svg" class="me-4 w-60px" style="border-radius: 4px" alt="" />
                                <div class="d-flex flex-stack flex-row-fluid d-grid gap-2">
                                    <div class="me-5">
                                        @if(isset($doorprize16->name))
                                        <a style="font-size: 40px;" href="#" class="text-gray-800 fw-bold ">{{$doorprize16->name}}</a>
                                        <!-- <span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">{{$doorprize16->number}}</span> -->
                                        @endif
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div class="m-0">
                                            <span class="badge badge-light-success fs-base">
                                                <span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
                                                </span>
                                                <a style="font-size: 30px;" href="#" onclick="dp16()"> Win doorprize 16</a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr style="border-top: 2px dashed grey;">
                            <div class="d-flex flex-stack">
                                <img src="{{asset('template')}}/media/icons/winner.svg" class="me-4 w-60px" style="border-radius: 4px" alt="" />
                                <div class="d-flex flex-stack flex-row-fluid d-grid gap-2">
                                    <div class="me-5">
                                        @if(isset($doorprize17->name))
                                        <a style="font-size: 40px;" href="#" class="text-gray-800 fw-bold ">{{$doorprize17->name}}</a>
                                        <!-- <span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">{{$doorprize17->number}}</span> -->
                                        @endif
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div class="m-0">
                                            <span class="badge badge-light-success fs-base">
                                                <span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
                                                </span>
                                                <a style="font-size: 30px;" href="#" onclick="dp17()"> Win doorprize 17</a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr style="border-top: 2px dashed grey;">
                            <div class="d-flex flex-stack">
                                <img src="{{asset('template')}}/media/icons/winner.svg" class="me-4 w-60px" style="border-radius: 4px" alt="" />
                                <div class="d-flex flex-stack flex-row-fluid d-grid gap-2">
                                    <div class="me-5">
                                        @if(isset($doorprize18->name))
                                        <a style="font-size: 40px;" href="#" class="text-gray-800 fw-bold ">{{$doorprize18->name}}</a>
                                        <!-- <span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">{{$doorprize18->number}}</span> -->
                                        @endif
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div class="m-0">
                                            <span class="badge badge-light-success fs-base">
                                                <span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
                                                </span>
                                                <a style="font-size: 30px;" href="#" onclick="dp18()"> Win doorprize 18</a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr style="border-top: 2px dashed grey;">
                            <div class="d-flex flex-stack">
                                <img src="{{asset('template')}}/media/icons/winner.svg" class="me-4 w-60px" style="border-radius: 4px" alt="" />
                                <div class="d-flex flex-stack flex-row-fluid d-grid gap-2">
                                    <div class="me-5">
                                        @if(isset($doorprize19->name))
                                        <a style="font-size: 40px;" href="#" class="text-gray-800 fw-bold ">{{$doorprize19->name}}</a>
                                        <!-- <span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">{{$doorprize19->number}}</span> -->
                                        @endif
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div class="m-0">
                                            <span class="badge badge-light-success fs-base">
                                                <span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
                                                </span>
                                                <a style="font-size: 30px;" href="#" onclick="dp19()"> Win doorprize 19</a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4">
                    <div class="card card-xl-stretch mb-5 mb-xl-8">
                        <div class="card-header border-1 pt-5">
                            <h3 class="card-title align-items-start flex-column">
                                <span style="font-size: 30px;" class="card-label fw-bold text-dark">Doorprize <span id="p1value"></span></span>
                                <span class="text-muted mt-1 fw-semibold fs-7">&nbsp </span>
                            </h3>
                            <div class="card-toolbar">
                                <a class="btn btn-primary fw-semibold roll" id="btn_start" style="display: none;">Start Doorprize</a>
                            </div>
                        </div>
                        <div class="card-body pt-0">
                            <div class="py-10 text-center">
                                <img style="display: none;" id="gambar1" src="{{asset('template')}}/media/doorprize/t-1.jpg" class="w-350px" alt="">
                                <img style="display: none;" id="gambar2" src="{{asset('template')}}/media/doorprize/t-2.jpg" class="w-350px" alt="">
                                <img style="display: none;" id="gambar3" src="{{asset('template')}}/media/doorprize/t-3.jpg" class="w-350px" alt="">
                                <img style="display: none;" id="gambar4" src="{{asset('template')}}/media/doorprize/t-4.jpg" class="w-350px" alt="">
                                <img style="display: none;" id="gambar5" src="{{asset('template')}}/media/doorprize/t-5.jpg" class="w-350px" alt="">
                                <img style="display: none;" id="gambar6" src="{{asset('template')}}/media/doorprize/t-6.jpg" class="w-350px" alt="">
                                <img style="display: none;" id="gambar7" src="{{asset('template')}}/media/doorprize/t-7.jpg" class="w-350px" alt="">
                                <img style="display: none;" id="gambar8" src="{{asset('template')}}/media/doorprize/t-8.jpg" class="w-350px" alt="">
                                <img style="display: none;" id="gambar9" src="{{asset('template')}}/media/doorprize/t-9.jpg" class="w-350px" alt="">
                                <img style="display: none;" id="gambar10" src="{{asset('template')}}/media/doorprize/t-10.jpg" class="w-350px" alt="">
                                <img style="display: none;" id="gambar11" src="{{asset('template')}}/media/doorprize/t-11.jpg" class="w-350px" alt="">
                                <img style="display: none;" id="gambar12" src="{{asset('template')}}/media/doorprize/t-12.jpg" class="w-350px" alt="">
                                <img style="display: none;" id="gambar13" src="{{asset('template')}}/media/doorprize/t-13.jpg" class="w-350px" alt="">
                                <img style="display: none;" id="gambar14" src="{{asset('template')}}/media/doorprize/t-14.jpg" class="w-350px" alt="">
                                <img style="display: none;" id="gambar15" src="{{asset('template')}}/media/doorprize/t-15.jpg" class="w-350px" alt="">
                                <img style="display: none;" id="gambar16" src="{{asset('template')}}/media/doorprize/t-16.jpg" class="w-350px" alt="">
                                <img style="display: none;" id="gambar17" src="{{asset('template')}}/media/doorprize/t-17.jpg" class="w-350px" alt="">
                                <img style="display: none;" id="gambar18" src="{{asset('template')}}/media/doorprize/t-18.jpg" class="w-350px" alt="">
                                <img style="display: none;" id="gambar19" src="{{asset('template')}}/media/doorprize/t-19.jpg" class="w-350px" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>
@include('sweetalert::alert')
@include('shuffle.modal-add')
@include('shuffle.modal-shuffle')
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script>
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    $('#btn_start').click(function() {
        id = $("#doorprizevalue").val();
        $.ajax({
            type: "GET",
            url: "/participantbyid/" + id,
            success: function(data) {
                if (data.detail == null) {
                    Swal.fire('Data Participant kosong')
                } else {

                    $("#btn_ok").show('');
                    $("#modalshuffle").modal('show');
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