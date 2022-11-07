<div style="background-color: #610000; background-image: url('{{asset('template')}}/media/auth/bg_merah_kecil.jpg'" class="modal fade" tabindex="-1" aria-hidden="true" id="modalshuffle">
    <div class="modal-dialog modal-dialog-centered mw-1000px">
        <div style="background-color: #c23030" class="modal-content shadow-none">
            <div style="height: 100px;">
                <h1 style="font-size: 40px; text-align: center; vertical-align: middle; margin-top: 10px; color: white;" class="modal-title">
                    <img style="height: 100px; border-radius: 50%;" src="{{asset('template')}}/media/logos/bulet.jpeg" alt="">
                    Get Random Participant
                    <img style="height: 100px; border-radius: 50%;" src="{{asset('template')}}/media/logos/bulet.jpeg" alt="">
                </h1>
            </div>

            <div class="modal-body">
                <input type="text" class="form-control form-control-sm" id="doorprizevalue" name="doorprizevalue" hidden>
                <!-- <p>Modal body text goes here.</p> -->
                <div style="height: 120px;" class="d-flex align-items-center bg-light-secondary rounded p-5 mb-7">
                    <div class="flex-grow-1 me-2">
                        <!-- <span style="text-align: center;" class="text-muted fw-semibold d-block">Nomor Participant</span> -->
                        <a class="fw-bold text-gray-800 text-hover-primary fs-6">
                            <p style="font-size: 65px; text-align: center;" class="names" id="divname"></p>
                        </a>
                    </div>
                </div>
                <div style="height: 120px;" class="d-flex align-items-center bg-light-secondary rounded p-5 mb-7">
                    <div class="flex-grow-1 me-2">
                        <!-- <span style="text-align: center;" class="text-muted fw-semibold d-block">Nama Participant</span> -->
                        <a class="fw-bold text-gray-800 text-hover-primary fs-6">
                            <p style="font-size: 85px; text-align: center;" class="numbers" id="divnumber"></p>
                        </a>
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <a onclick="addshuffle()" class="btn btn-primary" id="btn_ok" style="display: none;">Get Winner</a>
            </div>
        </div>
    </div>
</div>