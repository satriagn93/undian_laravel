<div class="modal fade" id="edit-Items" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-900px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header" style="background-color: #023e9f;">
                <!--begin::Modal title-->
                <h2> </h2>
            </div>
            <!--end::Modal header-->
            <!--begin::Modal body-->
            <div class="modal-body py-lg-10 px-lg-10">
                <div class="mh-475px scroll-y me-n7 pe-7">
                    <div class="text-center mb-13">
                        <h1 style="font-size: 30px;" class="d-flex justify-content-center align-items-center mb-3">

                            <img src="{{asset('template')}}/media/icons/gift.svg" class="me-4 w-65px" style="border-radius: 4px" alt="" />
                            Selamat anda mendapatkan doorprize &nbsp
                            <img src="{{asset('template')}}/media/icons/gift.svg" class="me-4 w-65px" style="border-radius: 4px" alt="" />
                        </h1>
                    </div>
                    <form id="form-create" method="POST" action="{{ route('doorprize.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="border border-hover-primary p-7 rounded mb-7">
                            <!--begin::Info-->
                            <div class="d-flex flex-stack pb-3">
                                <!--begin::Info-->
                                <div class="d-flex">
                                    <img class="mw-100 h-200px me-4 mb-5 mb-lg-0" src="{{asset('template')}}/media/illustrations/sigma-1/11.png">
                                    <!--end::Avatar-->
                                    <!--begin::Details-->
                                    <div style="margin-top: 50px;" class="ms-5">
                                        <!--begin::Name-->
                                        <div class="d-flex align-items-center">
                                            <input style="font-size: 30px;" type="text" class="form-control form-control-sm" id="name_model" name="name_model" readonly>
                                        </div>
                                        <br>
                                        <!--begin::Name-->
                                        <div class="d-flex align-items-center">
                                            <input style="font-size: 20px; color:#6d31ad" type="text" class="form-control form-control-sm" id="number_model" name="number_model" readonly>
                                            <input style="font-size: 30px;" type="text" class="form-control form-control-sm" id="doorprize_model" name="doorprize_model" hidden>
                                        </div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                            </div>
                            <!--end::Info-->
                            <!--begin::Wrapper-->
                            <div class="p-0">
                                <div class="d-flex flex-column">
                                    <!--begin::Separator-->
                                    <div class="separator separator-dashed border-muted my-5"></div>
                                    <!--end::Separator-->
                                    <!--begin::Action-->
                                    <div class="d-flex flex-stack">
                                        <!--begin::Progress-->
                                        <div class="d-flex flex-column mw-200px">
                                            <div class="d-flex align-items-center mb-2">
                                            </div>
                                            <div class="progress h-6px w-200px">
                                                <!-- <div class="progress-bar bg-success" role="progressbar" style="width: 58%" aria-valuenow="58" aria-valuemin="0" aria-valuemax="100"></div> -->
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-sm btn-primary">Continue</button>
                                        <!--end::Button-->
                                    </div>
                                    <!--end::Action-->
                                </div>
                                <!--end::Footer-->
                            </div>
                            <!--end::Wrapper-->
                        </div>
                    </form>
                </div>
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>