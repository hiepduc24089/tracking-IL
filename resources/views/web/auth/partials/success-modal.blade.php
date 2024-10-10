<div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog d-flex m-auto align-items-center h-100">
        <div class="modal-content">
            <div class="success-image-wrapper">
                <img src="{{asset('assets/images/web/success.png')}}" alt="Success" />
            </div>
            <div class="modal-body text-center d-flex flex-column">
                <span class="text-color-secondary text-size-bold-large" id="successModalMessage"></span>
                <a class="redirect-success-route text-color-secondary text-size-normal" href="{{'login'}}">Đăng nhập</a>
            </div>
        </div>
    </div>
</div>
