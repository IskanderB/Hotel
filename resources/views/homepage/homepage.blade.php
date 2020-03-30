@extends('layouts.layout')

@section('content')
  <div class="content">
    <div class="images_content d-flex">
      <div class="image_box"><img src="{{URL::asset('css/images/img_1.jpg')}}" alt=""></div>
      <div class="image_box"><img src="{{URL::asset('css/images/img_2.jpg')}}" alt=""></div>
      <div class="image_box"><img src="{{URL::asset('css/images/img_3.jpg')}}" alt=""></div>
    </div>

    <div class="text_content">
      <h5>Здравствуйте! Рады приветствовать вас на сайте прекрасной гостиницы Алые Паруса!</h5>
      <div class="">
        На нашем сайте вы можете ознакомится с информацией о наших номерах!
        Для этого нужно перейти в раздел "Наши номера" в главном или вспомогательном меню.
      </div>
      <br>
      <div class="">
        Когда вы подберёте подходящий для вас номер, можете забронировать его на нашем сайте,
        воспользовавшись формой справа или позвонить по телефону:
      </div>
      <h5>+78310000000</h5>
      <div class="">
        Перед бронирование не забудьте ознакомится с правилами нашего заведения в разделе "Правила"
      </div>
    </div>
  </div>
@endsection
