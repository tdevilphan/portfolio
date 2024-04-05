<div class="brand js-brand-carousel" id="clients">
  <div class="container">
    <div class="brand__title title" data-aos="fade-right">Featured Clients</div>
    <div class="brand__desc" data-aos="fade-left">Who we work with</div>
    <div class="swiper mySwiper brand__carousel">
      <div class="swiper-wrapper">
          @foreach($testimonials as $testimonial)
              <div class="swiper-slide">
                  <div class="brand__logo">
                      <img src="{{URL::asset('/storage/'. $testimonial->image)}}" alt="">
                  </div>
              </div>
          @endforeach
      </div>

        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
  </div>
</div>
