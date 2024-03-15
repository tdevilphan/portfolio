@extends('layouts.master')

@section('title', 'TUD Media')

@section('style-libraries')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/css/bootstrap.min.css"/>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">
@stop

@section('styles')

{{--custom css item suggest search--}}
<style>
  @font-face {
    font-family: "Roboto Slab", serif;
  }
</style>
@stop

@section('content')
@include('partial.banner')
@include('partial.video-carousel')
@include('partial.line-of-work')
@include('partial.brand')
@include('partial.contact')

@stop

@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/all.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>

  $(function () {

    //anchor link
    const anchorLinks = $('.nav-link')
    anchorLinks.on('click', function() {
      $('.nav-link').removeClass('active');
      $(this).addClass('active');
    });
    //button carousel
    const $videoCarousel = $('.js-video-carousel');
    const $brandCarousel = $('.js-brand-carousel');

    // function positionButton(btnNext, btnPrev, componentCarousel) {
    //   const carouselWidth = componentCarousel.width();
    //   const SwiperWidth = componentCarousel.find('.swiper').width();
    //   const positionButton = (carouselWidth - SwiperWidth)/2 - 45;
    //   btnPrev.css('left', positionButton)
    //   btnNext.css('right', positionButton)
    // }

    if ($videoCarousel.length) {
      const videoCarousel = new Swiper('.video-carousel__carousel', {
        allowTouchMove: true,
        navigation: {
          prevEl: '.swiper-button-prev',
          nextEl: '.swiper-button-next',
        },
        slidesPerView: 1,
        spaceBetween: 10,
        breakpoints: {
          640: {
            slidesPerView: 1,
            spaceBetween: 10,
          },
          768: {
            slidesPerView: 2,
            spaceBetween: 20,
          }
        },
      });
      // const $buttonPrev = $videoCarousel.find('.swiper-button-prev');
      // const $buttonNext = $videoCarousel.find('.swiper-button-next');
      // positionButton($buttonNext, $buttonPrev, $videoCarousel);
      // $(window).resize(function(){
      //   positionButton();
      // });
    }

    if ($brandCarousel.length) {
      const brandCarousel = new Swiper('.brand__carousel', {
        loop: true,
        autoplay: {
          delay: 1500,
        },
        allowTouchMove: true,
        slidesPerView: 2,
        spaceBetween: 10,
        breakpoints: {
          500: {
            slidesPerView: 3,
            spaceBetween: 20,
          },
          768: {
            slidesPerView: 3,
            spaceBetween: 30,
          },
          992: {
            slidesPerView: 4,
            spaceBetween: 30,
          },
          1200: {
            slidesPerView: 5,
            spaceBetween: 30,
          }
        },
      });
    }
    //video
    const videos = $(".js-video-text .line-of-work__video")
    $header = $('.header');
    videos.each(function() {
      $(this).hover( function() {$(this).find("video")[0].play()}, function() {$(this).find("video")[0].pause()})
    });

    // header
    $(window).scroll(function() {

      let position = $(this).scrollTop();
      if (position >= 135) {
        $header.find('.header__content').css('display','none');
        $header.css({
          'position':'fixed',
          'padding': '0 0 16px',
          'z-index': '10'
        })
      } else {
        $header.find('.header__content').css('display','block');
        $header.css('position','unset')
      }

    });
  });
</script>
@stop
<!-- /find-tickets?adt=1&chd=3&inf=0&from=HAN&to=SGN&depart=20032024 -->
