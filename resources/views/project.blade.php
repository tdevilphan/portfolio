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
  .banner-youtube__video iframe {
      height: 360px;
  }
</style>
@stop

@section('content')
    @if(isset($category))
        @if($category->category_type == 1)
            <div class="container">
                <div class="row">
                    @foreach($projects as $project)
                        <div class="col-6">
                            <div class="banner-youtube">
                                <div class="">
                                    <p>{{$project->name}}</p>
                                    <div class="banner-youtube__video">
                                        {{$project->video}}
                                    </div>
                                    <div class="album__card">
                                        @foreach($project->images as $image)
                                            <div class="album__card-image">
                                                <img src="{{URL::asset('/storage/'. $image)}}" alt="">
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @else
            <div class="container">
                @foreach($projects as $project)
                    <div class="album__card">
                        @foreach($project->images as $image)
                            <div class="album__card-image">
                                <img src="{{URL::asset('/storage/'. $image)}}" alt="">
                            </div>
                        @endforeach
                    </div>
                @endforeach
            </div>
        @endif
    @endif
@stop

@section('scripts')
    <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
<script>
    $('.album__card').masonry({
        // options
        itemSelector: '.album__card-image',
        columnWidth: '.album__card-image',
        percentPosition: true,
        gutter: 16
    });
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
