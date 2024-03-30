@extends('layouts.master')

@section('title', 'DX2 Production')

@section('style-libraries')
@stop

@section('styles')

{{--custom css item suggest search--}}
@stop

@section('content')
@include('partial.pictures')
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
