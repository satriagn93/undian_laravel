<div style="margin-top: 20px;" id="kt_aside" class="aside py-9" data-kt-drawer="true" data-kt-drawer-name="aside" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_toggle">
    <!--begin::Aside menu-->
    <div class="aside-menu flex-column-fluid ps-5 pe-3 mb-7" id="kt_aside_menu">
        <!--begin::Aside Menu-->
        <div class="w-100 hover-scroll-overlay-y d-flex pe-2" id="kt_aside_menu_wrapper" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_aside_footer, #kt_header" data-kt-scroll-wrappers="#kt_aside, #kt_aside_menu, #kt_aside_menu_wrapper" data-kt-scroll-offset="102">
            <!--begin::Menu-->
            <div class="menu menu-column menu-rounded menu-sub-indention menu-active-bg fw-semibold" id="#kt_aside_menu" data-kt-menu="true">
                <div class="menu-item">
                    <!--begin:Menu link-->
                    <a class="menu-link {{ request()->is('shuffle') ? 'menu-link active' : '' }}" href="{{url('/shuffle')}}">
                        <span class="menu-icon">
                            <i class="bi bi-dice-5 fs-3"></i>
                        </span>
                        <span class="menu-title">&nbsp Doorprize</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <div class="menu-item">
                    <a class="menu-link {{ request()->is('participant') ? 'menu-link active' : '' }}" href="{{url('/participant')}}">
                        <span class="menu-icon">
                            <i class="bi bi-people fs-3"></i>
                        </span>
                        <span class="menu-title">&nbsp Participant</span>
                    </a>
                </div>

                <!-- <div class="menu-item" style="margin-top: 20px">
                    <div class="py-10 text-center">
                        <img src="http://127.0.0.1:8000/template/media/illustrations/sigma-1/11.png" class="w-200px" alt="">
                    </div>
                </div> -->

            </div>
            <!--end::Menu-->
        </div>
        <!--end::Aside Menu-->
    </div>
    <!--end::Aside menu-->
    <!--begin::Footer-->
    <div class="aside-footer flex-column-auto px-9" id="kt_aside_menu">
        <!--begin::User panel-->
        <div class="d-flex flex-stack">
            <!--begin::Wrapper-->
            <div class="d-flex align-items-center">
                <!--begin::Avatar-->
                <div class="symbol symbol-circle symbol-40px">
                    <img src="{{asset('template')}}/media/avatars/300-1.jpg" alt="photo" />
                </div>
                <!--end::Avatar-->
                <!--begin::User info-->
                <div class="ms-2">
                    <!--begin::Name-->
                    <a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bold lh-1">
                    </a>
                    <!--end::Name-->
                    <!--begin::Major-->
                    <span class="text-muted fw-semibold d-block fs-7 lh-1">Admin</span>
                    <!--end::Major-->
                </div>
                <!--end::User info-->
            </div>
            <!--end::Wrapper-->
            <!--begin::User menu-->

            <!--end::User menu-->
        </div>
        <!--end::User panel-->
    </div>
    <!--end::Footer-->
</div>
<!--end::Aside-->