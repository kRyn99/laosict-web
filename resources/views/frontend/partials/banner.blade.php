<div class="swiper swiper_banner mySwiper">
    <div class="swiper-wrapper">
      <div class="swiper-slide banner" style="width: 100%;height:100%">
        <img style=" width: 100%;
        height: 100%;
        object-fit: fill;" src="/uploads/banner_dung.png" />
      </div>
      <div class="swiper-slide banner"  style="width: 100%;height:100%" >
       <img style=" width: 100%;
        height: 100%;
        object-fit: fill;" src="/uploads/banner_dung_1.png" />
      </div>
      <div class="swiper-slide banner"  style="width: 100%;height:100%">
        <img style=" width: 100%;
        height: 100%;
        object-fit: fill;" src="/uploads/banner_dung_2.png" />
      </div>
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.7/js/swiper.min.js"></script>
<script>
    const swiper = new Swiper(".mySwiper", {
        loop:true,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        autoplay: {
            delay: 2000,
        },
    });

</script>
