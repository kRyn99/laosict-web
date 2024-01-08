
// rewrite js modal block for css javascript

const openModalBtns = document.querySelectorAll('div[data-modal=modal-article]');
const modalArticle = document.querySelector('#modal-article');
const modalCluster = document.querySelector('.modal-cluster');
const closeButtonModalArticle = document.querySelector('.close-button-modal-article');

if (openModalBtns) {
    openModalBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            let postId = btn.dataset.id;
            $.post('/ajaxLoadPost', { post_id : postId}, function(res) {
                if (!res.error) {
                    $('#post-content').html(res.html);
                    modalArticle.setAttribute('aria-modal', 'true');
                    modalCluster.classList.add('modalFadeUp');
                }
                return false;
            });
        });
    });
    closeButtonModalArticle.addEventListener('click', () => {
        modalArticle.setAttribute('aria-modal', 'false');
        modalCluster.classList.remove('modalFadeUp');
        $('#post-content').html("");
    });
} // js gọi modal donate tin tức cộng đồng
