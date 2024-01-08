<div id="modal-article"
     class="modal modal-article"
     role="dialog"
     aria-modal="false"
     data-reach-dialog-overlay="">
    <div
        aria-modal="true"
        role="dialog"
        tabindex="-1"
        aria-label="content"
        class="modal-cluster"
        data-reach-dialog-content="">
        <button type="button" class="close-button close-button-modal-article">
            <img src="/frontend/assets/img/btn-close.png" alt="" class="imgFull lazyload">
        </button>
        <header class="modal-header">
            <h3>{{ trans('home.modal_header_tin_tuc') }}</h3>
        </header>
        <div class="modal-body">
            <div class="modal-body-container" id="post-content"></div>
        </div>
        <footer class="modal-footer">
            <div>
                <div>
                    <button class="btn-primary" onclick="window.location.herf = '{{ \App\Helpers::goToHoancanhQuyenGop() }}';">{{ trans('home.button_quyen_gop') }}</button>
                </div>
            </div>
        </footer>
    </div>
</div>
