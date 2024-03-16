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
@include('partial.banner-youtube')
@include('partial.album')
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

    //video
    const videos = $(".js-video-text .line-of-work__video")
    videos.each(function() {
      $(this).hover( function() {$(this).find("video")[0].play()}, function() {$(this).find("video")[0].pause()})
    });

    // header
    const $header = $('.header');
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
