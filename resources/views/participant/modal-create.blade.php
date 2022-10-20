<div class="modal fade" tabindex="-1" id="modal-participant-create" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Form create participant</h3>

                <!--begin::Close-->
                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                    <span class="svg-icon svg-icon-1"></span>
                </div>
                <!--end::Close-->
            </div>
            <form id="form-create" method="POST" action="{{ route('participant.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="mb-10">
                        <label for="exampleFormControlInput1" class="required form-label">Name</label>
                        <input type="text" name="name" class="form-control form-control-solid" placeholder="Participant name" required />
                    </div>
                    <div class="mb-10">
                        <label for="exampleFormControlInput1" class="required form-label">Email</label>
                        <input type="text" name="email" class="form-control form-control-solid" placeholder="example@gmail.com" required />
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>