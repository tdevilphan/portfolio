<div class="video-carousel js-video-carousel">
  <div class="container" data-aos="fade-up">
    <div class="swiper video-carousel__carousel">
      <div class="swiper-wrapper">
          @if(isset($projects))
              @foreach($projects as $project)
                  <div class="swiper-slide">
                      <div class="video-carousel__video">
                          @if(isset($project->video) && $project->video != '')
                              {!!$project->video!!}
                          @else
                              <img src="{{$projects->images[0]}}" alt="">
                          @endif
                      </div>
                      <div class="video-carousel__content">
                          <div class="video-carousel__title">{{$project->name}}</div>
                          <div class="video-carousel__subtitle">{{$project->description}}</div>
                      </div>
                  </div>
              @endforeach
          @endif
      </div>
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </div>
</div>
