<div style="background-color: rgb(255 255 255 / 94%); background-image:url('{{asset('template')}}/media/doorprize/bggift3.png')" class="modal fade" id="edit-Items" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered mw-1000px">
        <div style="background-color: #38336d; border-color: white; border: 5px;" class="modal-content">
            <div style="text-align: center; margin-top: 20px;">
                <h3 class="modal-title">
                    <p style="font-size: 30px; color: wheat; text-align: center;">
                        <img style="height: 100px;" src="{{asset('template')}}/media/icons/gift.ico" alt="">
                        Selamat anda mendapatkan doorprize
                        <img style="height: 100px;" src="{{asset('template')}}/media/icons/gift.ico" alt="">
                    </p>
                </h3>
            </div>
            <hr style="color: white;">
            <form id="form-create" method="POST" action="{{ route('doorprize.store') }}" enctype="multipart/form-data">
                @csrf
                <div style="color: wheat; text-align: center;" class="modal-body">
                    <!-- <p style="font-size: 20px;">Anda telah terpilih mendapatkan doorprize</p> -->
                    <input style="font-size: 75px; border: #12121b; text-align: center;" type="text" class="form-control form-control-sm" id="number_model" name="number_model" readonly>
                    <input style="font-size: 30px; width: 20px;" type="text" class="form-control form-control-sm" id="doorprize_model" name="doorprize_model" hidden>
                    <input style="font-size: 30px;" type="text" class="form-control form-control-sm" id="email_model" name="email_model" hidden>
                    <input style="font-size: 30px;" type="text" class="form-control form-control-sm" id="company_model" name="company_model" hidden>
                    <input style="font-size: 95px; border: #12121b; text-align: center;" type="text" class="form-control form-control-sm" id="name_model" name="name_model" readonly>
                </div>

                <div class="modal-footer">
                    <a onclick="cancelparticipant()" class="btn btn-sm btn-danger">Cancel</a>
                    <button type="submit" class="btn btn-sm btn-primary">Continue</button>
                </div>
            </form>
        </div>
    </div>
</div>