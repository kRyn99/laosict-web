/*!
 *
 *
 *
 * @author Thuclfc
 * @version
 * Copyright 2023. MIT licensed.
 */$(function () {
  const swiper = new Swiper('.swiper', {
    slidesPerView: 'auto',
    spaceBetween: 20,
    // Navigation arrows
    speed: 700,
    threshold: "10px",
    slidesPerGroup: 1,
    breakpoints: {
      768: {
        slidesPerView: 2,
        slidesPerGroup: 1,
        spaceBetween: 20
      },
      1024: {
        slidesPerView: 3,
        slidesPerGroup: 1,
        spaceBetween: 20
      }
    },
    navigation: {
      nextEl: '.button-next',
      prevEl: '.button-prev'
    }
  });
  $('div[role=tablist] button').click(function () {
    var tabControl = $(this).data('reach-tab');
    $(this).attr('aria-selected', true);
    $(this).siblings().attr('aria-selected', false);
    $(tabControl).attr('aria-selected', true);
    $(tabControl).siblings().attr('aria-selected', false);
  });
  $('div[role=tabs] a').click(function () {
    $(this).addClass('is-active');
    $(this).siblings().removeClass('is-active');
  });
  $('.article-question>div').on('click', function () {
    $(this).toggleClass('open');
    $(this).siblings().removeClass('open');
  });
  $('li[data-reach-accordion-item]').on('click', function () {
    $(this).toggleClass('is-open');
    $(this).siblings().removeClass('open');
  }); // js cho phần thu gọn và xem thêm của mục Khi thiện nguyện là nguồn hạnh phúc

  let originalContent = '';

  if (document.querySelector('.page-content')) {
    originalContent = document.querySelector('.page-content').innerHTML;
  }

  const content = document.querySelector('.page-content');
  let parentElement = document.querySelector('.service-page-long-content');
  let buttonShow = document.querySelector('.button-show');
  let button = '';

  if (document.querySelector('.button-show')) {
    button = document.querySelector('.button-show').querySelector('button');
  }

  let isContentShown = 0;

  if (buttonShow) {
    buttonShow.addEventListener('click', function (event) {
      event.preventDefault();
      event.stopPropagation();
      document.querySelector('#section-html').scrollIntoView();

      if (isContentShown === 0) {
        content.parentNode.removeChild(content);
        parentElement.innerHTML = originalContent;
        parentElement.appendChild(buttonShow);
        button.innerHTML = '{{ trans("home.thu_gon")}} <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="jsx-df4f07e142feb149 relative inline-block h-5 w-5 rotate-180 transform"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" class="jsx-df4f07e142feb149"></path></svg>';
        isContentShown++;
      } else {
        parentElement.innerHTML = '';
        parentElement.appendChild(buttonShow);
        parentElement.insertBefore(content, buttonShow);
        button.innerHTML = '{{trans("home.section_article1_xem_them")}} <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="relative inline-block h-5 w-5">\n' + '                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" class="jsx-df4f07e142feb149"></path>\n' + '                </svg>';
        isContentShown--;
      }
    });
  } //js để hiện menu trên mobile


  $("#btn-toggle-menu").click(function () {
    var o = $(this).data("toggle");
    $(this).toggleClass("active"), $(o).toggleClass("active"), $("body").toggleClass("modal-open");
  }); // click vào nút lên đầu trang

  const buttonBackToTop = document.querySelector('.back-to-top-button');
  const buttonNuoiVoi = document.querySelector('.footer-cta');
  window.addEventListener('scroll', () => {
    const scrollPosition = window.scrollY;

    if (scrollPosition > 500) {
      buttonBackToTop.classList.add('translate-y-0', 'opacity-100');
      buttonBackToTop.classList.remove('pointer-events-none', 'translate-y-full');

      if (buttonNuoiVoi) {
        buttonNuoiVoi.classList.add('translate-y-0', 'opacity-100');
        buttonNuoiVoi.classList.remove('translate-y-10', 'opacity-0');
      }
    } else {
      buttonBackToTop.classList.remove('translate-y-0', 'opacity-100');
      buttonBackToTop.classList.add('pointer-events-none', 'translate-y-full');

      if (buttonNuoiVoi) {
        buttonNuoiVoi.classList.remove('translate-y-0', 'opacity-100');
        buttonNuoiVoi.classList.add('translate-y-10', 'opacity-0');
      }
    }
  });
  buttonBackToTop.addEventListener('click', () => {
    window.scrollTo({
      top: 0,
      behavior: 'smooth'
    });
  }); // click vào mũi tên để chọn tab ở trang Hoàn cảnh quyên góp

  const gradSliderContainer = document.getElementById('grad-slider-container');
  const buttonGrad = document.getElementById('button-grad-right');
  let countButtonGradClick = 0;

  if (buttonGrad) {
    buttonGrad.addEventListener('click', () => {
      if (countButtonGradClick == 0) {
        buttonGrad.classList.add('grad-left', 'left-0', 'pr-10');
        buttonGrad.classList.remove('right-0', 'grad', 'pl-10');
        gradSliderContainer.scrollTo({
          left: gradSliderContainer.scrollWidth,
          behavior: 'smooth'
        });
        countButtonGradClick++;
      } else {
        buttonGrad.classList.add('grad', 'right-0', 'pl-10');
        buttonGrad.classList.remove('left-0', 'grad-left', 'pr-10');
        gradSliderContainer.scrollTo({
          left: -gradSliderContainer.scrollWidth,
          behavior: 'smooth'
        });
        countButtonGradClick--;
      }
    });
  } // js gọi modal tin tức cộng đồng


  // const openModalBtns = document.querySelectorAll('div[data-modal=modal-article]');
  // const modalArticle = document.querySelector('#modal-article');
  // const modalCluster = document.querySelector('.modal-cluster');
  // const closeButtonModalArticle = document.querySelector('.close-button-modal-article');
  //
  // if (openModalBtns) {
  //   openModalBtns.forEach(btn => {
  //     btn.addEventListener('click', () => {
  //       modalArticle.setAttribute('aria-modal', 'true');
  //       modalCluster.classList.add('modalFadeUp');
  //     });
  //   });
  //   closeButtonModalArticle.addEventListener('click', () => {
  //     modalArticle.setAttribute('aria-modal', 'false');
  //     modalCluster.classList.remove('modalFadeUp');
  //   });
  // } // js gọi modal donate tin tức cộng đồng


  // const openModalDonates = document.querySelectorAll('button[data-modal=modal-donate]');
  // const modalDonate = document.getElementById('modal-donate');
  // const modalDonateCluster = document.querySelector('.modal-donate-cluster');
  // const closeButtonModalDonate = document.querySelector('.close-button-modal-donate');
  //
  // if (openModalDonates) {
  //   openModalDonates.forEach(btn => {
  //     btn.addEventListener('click', function () {
  //       modalDonate.setAttribute('aria-modal', 'true');
  //       modalDonateCluster.classList.add('modalFadeUp');
  //     });
  //   });
  //   closeButtonModalDonate.addEventListener('click', () => {
  //     modalDonate.setAttribute('aria-modal', 'false');
  //     modalDonateCluster.classList.remove('modalFadeUp');
  //   });
  // } // js gọi gallery slider


  let galleryContainer = document.getElementById("lightgallery");

  if (galleryContainer) {
    lightGallery(galleryContainer, {
      speed: 500,
      plugins: [lgZoom],
      download: true,
      closable: true,
      closeOnTap: true
    });
  } // $('a').attr('href','bai-viet-du-an.html');
  // $('a').attr('target','_blank');
  // $('.swiper-slide a').attr('href','#');

});
