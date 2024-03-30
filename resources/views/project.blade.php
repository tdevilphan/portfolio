@extends('layouts.master')

@section('title', 'DX2 Production')

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
    @if(isset($projectWithVideo))
        <div class="banner-youtube">
            <div class="container">
                <div class="banner-youtube__video">
                    <iframe src={{$projectWithVideo->video}}></iframe>
                </div>
            </div>
        </div>
@endif
    @if(isset($projectsWithoutVideo))
    @if($projectsWithoutVideo->count() > 0)
        <div class="album">
            <div class="container">
                <div class="row album__list">
                    @foreach($projectsWithoutVideo as $project)
                        <div class="col-md-4 album__card">
                            <img src="{{URL::asset('/storage/'. array_values($project->images)[0])}}" alt="">
                            <div class="overlay">
                                <a href="/project/detail" class="button">See more</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @endif
    @endif
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
