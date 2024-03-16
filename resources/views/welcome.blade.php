@extends('layouts.master')

@section('title', 'TUD Media')

@section('style-libraries')
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
