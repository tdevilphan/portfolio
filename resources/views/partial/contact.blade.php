<div class="contact" id="contact">
  <div class="container">
    <div class="row no-gutters block-9">
      <div class="col-md-6 contact__content" data-aos="fade-right">
        <div class="contact__title title">Let's talk</div>
        <ul class="contact__info-wrap">
          <li class="contact__info">
            <span class="contact__info-title">Email:</span>
            <span class="contact__info-info"><a href="mailto:dx2production247@gmail.com">dx2production247@gmail.com</a></span>
          </li>
          <li class="contact__info">
            <span class="contact__info-title">Phone:</span>
            <span class="contact__info-info"><a href="tel:0777392445">0777392445</a></span>
          </li>
          <li class="contact__info">
            <span class="contact__info-title">Address:</span>
            <span class="contact__info-info">Thanh Xuân, Hà Nội</span>
          </li>
        </ul>
        <div class="contact__form">
          <form action="{{route('contact.store')}}" method="POST" class="bg-light contact__form-container">
              @csrf
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Your Name" name="name">
                @if ($errors->has('name'))
                    <div class="error">
                        {{ $errors->first('name') }}
                    </div>
                @endif
            </div>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Your Email" name="email">
                @if ($errors->has('email'))
                    <div class="error">
                        {{ $errors->first('email') }}
                    </div>
                @endif
            </div>
            <div class="form-group">
              <textarea cols="30" rows="4" class="form-control" placeholder="Message" name="message"></textarea>
                @if ($errors->has('message'))
                    <div class="error">
                        {{ $errors->first('message') }}
                    </div>
                @endif
            </div>
            <div class="form-group">
              <input type="submit" value="Submit" class="button contact__button">
            </div>
          </form>
        </div>
      </div>
      <div class="col-md-6 d-flex contact__image" data-aos="fade-left">
        <div class="img" style="background-image: url('https://cdn.vjshop.vn/tin-tuc/cach-hoat-dong-cua-may-anh-phim/may-anh-phim-5.jpg');"></div>
        <div class="img-mobile"><img src="https://cdn.vjshop.vn/tin-tuc/cach-hoat-dong-cua-may-anh-phim/may-anh-phim-5.jpg" alt=""></div>
      </div>
    </div>

  </div>
</div>
