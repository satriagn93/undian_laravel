@extends('layout.template')
@section('title','Home')
@section('content')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="toolbar d-flex flex-stack mb-3 mb-lg-5" id="kt_toolbar">
        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack flex-wrap">
            <!--begin::Page title-->
            <div class="page-title d-flex flex-column me-5 py-2">
                <!--begin::Title-->
                <h1 class="d-flex flex-column text-dark fw-bold fs-3 mb-0">Raffles</h1>
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
                    <li class="breadcrumb-item text-dark">Raffles</li>
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
                                <span class="card-label fw-bold text-gray-800">List Winners</span>
                                <span class="text-gray-400 mt-1 fw-semibold fs-6">Total 16</span>
                            </h3>
                        </div>
                        <div class="card-body pt-0">
                            <div class="d-flex flex-stack">
                                <img src="{{asset('template')}}/media/icons/winner.svg" class="me-4 w-25px" style="border-radius: 4px" alt="" />
                                <div class="d-flex flex-stack flex-row-fluid d-grid gap-2">
                                    <div class="me-5">
                                        <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Satria Girinanda</a>
                                        <span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">123812381238</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div class="m-0">
                                            <span class="badge badge-light-success fs-base">
                                                <span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
                                                </span>
                                                <a> Win doorprize 1</a>
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
                                        <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Satria Girinanda</a>
                                        <span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">123812381238</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div class="m-0">
                                            <span class="badge badge-light-success fs-base">
                                                <span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
                                                </span>
                                                <a> Win doorprize 2</a>
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
                                        <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Satria Girinanda</a>
                                        <span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">123812381238</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div class="m-0">
                                            <span class="badge badge-light-success fs-base">
                                                <span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
                                                </span>
                                                <a> Win doorprize 3</a>
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
                                        <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Satria Girinanda</a>
                                        <span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">123812381238</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div class="m-0">
                                            <span class="badge badge-light-success fs-base">
                                                <span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
                                                </span>
                                                <a> Win doorprize 1</a>
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
                                        <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Satria Girinanda</a>
                                        <span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">123812381238</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div class="m-0">
                                            <span class="badge badge-light-success fs-base">
                                                <span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
                                                </span>
                                                <a> Win doorprize 1</a>
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
                                        <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Satria Girinanda</a>
                                        <span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">123812381238</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div class="m-0">
                                            <span class="badge badge-light-success fs-base">
                                                <span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
                                                </span>
                                                <a> Win doorprize 1</a>
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
                                        <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Satria Girinanda</a>
                                        <span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">123812381238</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div class="m-0">
                                            <span class="badge badge-light-success fs-base">
                                                <span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
                                                </span>
                                                <a> Win doorprize 1</a>
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
                                        <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Satria Girinanda</a>
                                        <span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">123812381238</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div class="m-0">
                                            <span class="badge badge-light-success fs-base">
                                                <span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
                                                </span>
                                                <a> Win doorprize 1</a>
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
                                        <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Satria Girinanda</a>
                                        <span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">123812381238</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div class="m-0">
                                            <span class="badge badge-light-success fs-base">
                                                <span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
                                                </span>
                                                <a> Win doorprize 1</a>
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
                                        <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Satria Girinanda</a>
                                        <span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">123812381238</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div class="m-0">
                                            <span class="badge badge-light-success fs-base">
                                                <span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
                                                </span>
                                                <a> Win doorprize 1</a>
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
                                        <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Satria Girinanda</a>
                                        <span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">123812381238</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div class="m-0">
                                            <span class="badge badge-light-success fs-base">
                                                <span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
                                                </span>
                                                <a> Win doorprize 1</a>
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
                                        <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Satria Girinanda</a>
                                        <span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">123812381238</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div class="m-0">
                                            <span class="badge badge-light-success fs-base">
                                                <span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
                                                </span>
                                                <a> Win doorprize 1</a>
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
                                        <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Satria Girinanda</a>
                                        <span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">123812381238</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div class="m-0">
                                            <span class="badge badge-light-success fs-base">
                                                <span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
                                                </span>
                                                <a> Win doorprize 1</a>
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
                                        <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Satria Girinanda</a>
                                        <span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">123812381238</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div class="m-0">
                                            <span class="badge badge-light-success fs-base">
                                                <span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
                                                </span>
                                                <a> Win doorprize 1</a>
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
                                        <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Satria Girinanda</a>
                                        <span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">123812381238</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div class="m-0">
                                            <span class="badge badge-light-success fs-base">
                                                <span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
                                                </span>
                                                <a> Win doorprize 1</a>
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
                                        <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Satria Girinanda</a>
                                        <span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">123812381238</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div class="m-0">
                                            <span class="badge badge-light-success fs-base">
                                                <span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
                                                </span>
                                                <a> Win doorprize 1</a>
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
                                        <span class="card-label fw-bold text-gray-800">Form Raffle</span>
                                        <span class="text-gray-400 mt-1 fw-semibold fs-6"> </span>
                                    </h3>
                                </div>
                                <div class="card-body pt-0">
                                    <label for="exampleFormControlInput1" class="required form-label">Nomor Undian</label>
                                    <div style="background-color: #eae9e9; width: 320px; height: 50px; font-size: 30px;border-radius: 4px; text-align: center; vertical-align: center;" class="names"></div>
                                    <br>
                                    <div class="card-toolbar">
                                        <a class="btn btn-sm btn-success roll" id="btn_start">Start</a> &nbsp &nbsp
                                        <!-- <a class="btn btn-sm btn-success roll" id="referal" onclick="rollClick()">Start</a> &nbsp &nbsp -->
                                        <a href=" ../../demo10/dist/apps/ecommerce/sales/listing.html" class="btn btn-sm btn-primary">OK!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-6 mb-5 mb-xl-0">
                            <div class="card card-flush h-lg-100">
                                <div class="card-header pt-7 mb-5">
                                    <h3 class="card-title align-items-start flex-column">
                                        <span class="card-label fw-bold text-gray-800">Doorprize</span>
                                        <span class="text-gray-400 mt-1 fw-semibold fs-6">Doorprize 1</span>
                                    </h3>
                                </div>
                                <div class="card-body pt-0">
                                    <div class="py-10 text-center">
                                        <img src="{{asset('template')}}/media/svg/illustrations/easy/4.svg" class="w-200px" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script>
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    $('#btn_start').click(function() {
        $.ajax({
            url: 'getabsent',
            type: 'post',
            data: {
                _token: CSRF_TOKEN,
            },
            dataType: 'json',
            success: function(response) {
                trigerabsent(response);
            }
        });
    });

    const ENTRANTSS = ["19293818238", "281828381283", "38128371273817", "41273127381237", "5182381283127", "612837162371237", "718237128317238"];



    const rollEl = document.querySelector(".roll");
    const namesEl = document.querySelector(".names");

    function randomName() {
        const rand = Math.floor(Math.random() * ENTRANTSS.length);
        const name = ENTRANTSS[rand];
        namesEl.innerText = name;
    }

    function trigerabsent() {
        rollEl.classList.add("hide");
        namesEl.classList.remove("hide");

        setDeceleratingTimeout(randomName, 0, 500000);
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
</script>
@endsection
@push('js')
@endpush