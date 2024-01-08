
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


const openModalDonates = document.querySelectorAll('button[data-modal=modal-donate]');
const modalDonate = document.getElementById('modal-donate');
const modalDonateCluster = document.querySelector('.modal-donate-cluster');
const closeButtonModalDonate = document.querySelector('.close-button-modal-donate');

if (openModalDonates) {
  openModalDonates.forEach(btn => {
    btn.addEventListener('click', function () {
        let projectId = btn.dataset.id;
        if (projectId) {
            $('form#donateForm').show();
            $('#project_id').val(projectId);
            $('#modal_success_content').html("").hide();
        } else {
            $('form#donateForm').hide();
            $('#modal_success_content').show();
        }
      modalDonate.setAttribute('aria-modal', 'true');
      modalDonateCluster.classList.add('modalFadeUp');
    });
  });
  closeButtonModalDonate.addEventListener('click', () => {
    modalDonate.setAttribute('aria-modal', 'false');
    modalDonateCluster.classList.remove('modalFadeUp');
  });
} // js gọi menu dropdown của nút chia sẻ

$(function (){
    var text = $('.section_desc');
    var wordsCount = 0;
    $.each(text, function(){
      wordsCount = $(this).text().split(' ').length;
      if (wordsCount > 30) {
        $(this).css("text-align","justify");
      } 
    })
   let numberChildOfStatisticShowNumbersDiv = $('#statistic_show_numbers').children().length;
   console.log(numberChildOfStatisticShowNumbersDiv);
   if (numberChildOfStatisticShowNumbersDiv === 3) {
       $('#statistic_show_numbers').addClass("three-cols");
   }
});

