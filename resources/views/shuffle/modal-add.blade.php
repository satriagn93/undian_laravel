<div style="background-color: rgb(18 18 27 / 52%);" class="modal fade" id="edit-Items" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <div style="background-color: #12121b; border-color: white; border: 5px;" class="modal-content">
            <div class="modal-header" style="text-align: center;">
                <h3 class="modal-title"><img style="text-align: center;vertical-align: middle;" src="{{asset('template')}}/media/doorprize/congrat2.png" alt="Paris" width="90%" ;></h3>
            </div>
            <form id="form-create" method="POST" action="{{ route('doorprize.store') }}" enctype="multipart/form-data">
                @csrf
                <div style="color: wheat; text-align: center;" class="modal-body">
                    <p style="font-size: 20px;">Anda telah terpilih mendapatkan doorprize</p>
                    <input style="font-size: 35px; border: #12121b; text-align: center;" type="text" class="form-control form-control-sm" id="number_model" name="number_model" readonly>
                    <input style="font-size: 30px; width: 20px;" type="text" class="form-control form-control-sm" id="doorprize_model" name="doorprize_model" hidden>
                    <input style="font-size: 30px;" type="text" class="form-control form-control-sm" id="email_model" name="email_model" hidden>
                    <input style="font-size: 30px;" type="text" class="form-control form-control-sm" id="company_model" name="company_model" hidden>
                    <input style="font-size: 45px; border: #12121b; text-align: center;" type="text" class="form-control form-control-sm" id="name_model" name="name_model" readonly>
                </div>

                <div class="modal-footer">
                    <a onclick="cancelparticipant()" class="btn btn-sm btn-danger">Cancel</a>
                    <button type="submit" class="btn btn-sm btn-primary">Continue</button>
                </div>
            </form>
        </div>
    </div>
</div>