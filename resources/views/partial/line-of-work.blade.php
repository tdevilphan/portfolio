<div class="line-of-work js-video-text" id="services"  data-aos="fade-up">
  <div class="line-of-work__banner">
    <div class="line-of-work__banner-content">
      <div class="line-of-work__banner-title title" data-aos="fade-left">Our line of work</div>
      <div class="line-of-work__banner-desc" data-aos="fade-right">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam aperiam architecto at atque dolores enim ipsum iusto laudantium optio placeat quis quisquam rerum, ullam vitae voluptate! Aliquid ducimus esse voluptate!</div>
    </div>
  </div>
  <div class="container">
    <div class="line-of-work__videos row">
        @php
            $aos_left_values = ['fade-down-right', 'fade-up-right'];
            $aos_right_values = ['fade-down-left', 'fade-up-left'];
            $aos_left_index = 0;
            $aos_right_index = 0;
        @endphp
      <div class="col-md-6 col-left">
          @foreach($categories as $category)
            @if($loop->index % 2 == 0)
                  <div class="line-of-work__video" data-aos={{$aos_left_values[$aos_left_index % 2]}}>
                      <img src="{{URL::asset('/storage/'. $category->image)}}" alt="">
                      <div class="overlay">
                          <div class="line-of-work__video-title">{{$category->name}}</div>
                          <a href="/project" class="button">Let's see</a>
                      </div>
                  </div>
              @endif
              @php
                  $aos_left_index++
              @endphp
          @endforeach
      </div>
      <div class="col-md-6 col-right">
          @foreach($categories as $category)
              @if($loop->index % 2 == 1)
                  <div class="line-of-work__video" data-aos={{$aos_right_values[$aos_right_index % 2]}}>
                      <img src="{{URL::asset('/storage/'. $category->image)}}" alt="">
                      <div class="overlay">
                          <div class="line-of-work__video-title">{{$category->name}}</div>
                          <a href="/project" class="button">Let's see</a>
                      </div>
                  </div>
              @endif
              @php
                  $aos_right_index++
              @endphp
          @endforeach
      </div>
    </div>
  </div>
</div>
