<div id="modal-top-nhahaotam" class="modal" role="dialog" aria-modal="false" data-reach-dialog-overlay="">
    <div aria-modal="true" role="dialog" tabindex="-1" aria-label="content" class="modal-cluster" data-reach-dialog-content="">
        <button type="button" class="close-button close-top-nhahaotam">
            <img src="/frontend/assets/img/btn-close.png" alt="" class="imgFull lazyload">
        </button>
        <header class="modal-header">
            <h3>{{ trans('home.danh_sach_nha_hao_tam_hang_dau') }}</h3>
        </header>
        <div class="modal-body">
            <div id="scrollableDiv" class="modal-body-container">
                <div class="infinite-scroll-component__outerdiv px-10">
                    <div id="modal_top_hao_tam_content" class="infinite-scroll-component" style="height: auto; overflow: auto;">

                    </div>
                </div>
            </div>
        </div>
        <footer class="modal-footer"><button class="btn-primary close-top-nhahaotam">Đóng</button></footer>
    </div>
</div>

<div id="modal-new-nhahaotam" class="modal" role="dialog" aria-modal="false" data-reach-dialog-overlay="">
    <div aria-modal="true" role="dialog" tabindex="-1" aria-label="content" class="modal-cluster" data-reach-dialog-content="">
        <button type="button" class="close-button close-new-nhahaotam">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true" class="h-6 w-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>
        <header class="modal-header">
            <h3>{{ trans('home.danh_sach_nha_hao_tam_moi_nhat') }}</h3>
        </header>
        <div class="modal-body">
            <div id="scrollableDiv" class="modal-body-container">
                <div class="infinite-scroll-component__outerdiv px-10">
                    <div id="modal_new_hao_tam_content" class="infinite-scroll-component " style="height: auto; overflow: auto;">

                    </div>
                </div>
            </div>
        </div>
        <footer class="modal-footer"><button class="btn-primary close-new-nhahaotam">Đóng</button></footer>
    </div>
</div>
