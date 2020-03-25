<!DOCTYPE HTML>
<html lang="ru">
<head>
   <meta charset="utf-8">
   <meta name="viewport"
           content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
   <title>Hotel</title>
   <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Fredoka+One&display=swap" rel="stylesheet">
   <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
   rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
   <link rel="stylesheet" href="{{URL::asset('css/bootstrap/bootstrap.min.css')}}">
   <link rel="stylesheet" href="{{URL::asset('css/style.css')}}">
</head>

<body>
  <header class="header">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 logo d-flex">
          <div class="logo_text_icon d-flex">
            <a href="/"> <i class="fa fa-hotel" aria-hidden="true"></i></a>
              <div class="logo_text">
                <a href="/">Hotel</a>
              </div>
          </div>
          <div class="menu_bar" id="menu_bar">
            <i class="fa fa-bars" aria-hidden="true"></i>
          </div>
        </div>

        <!--<div class="col-lg-1">
          <div class="menu_bar">
            <i class="fa fa-bars" aria-hidden="true"></i>
          </div>
        </div>-->

        <div class="col-lg-8 ml-auto col-xl-7">
          <nav id="menu_header" class="menu_header">
            <ul class="menu d-flex justify-content-center">
              <li class="menu__item">
                <a href="/">
                  <div>
                    Главная страница
                  </div>
                </a>
              </li>

              <li class="menu__item">
                <a href="/rooms">
                  <div>
                    Наши номера
                  </div>
                </a>
              </li>

              <li class="menu__item">
                <a href="#">
                  <div>
                    Правила
                  </div>
                </a>
              </li>

              <li class="menu__item">
                <a href="/formal">
                  <div>
                    Оформление
                  </div>
                </a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </header>

  <section class="content_self">
  <div class="container">
    <div class="row" id="app">

      <div class="col-lg-8">
        @yield('content')
      </div>

      <div class="col-lg-4 sitebar">
        <div class="auth_box sidebar_box justify-content-center d-none">
          <div class="label">
            Хотите забронировать номер?
          </div>
          <div class="auth_label">
            Для этого необходимо
          </div>
          <div class="btn_box">
            <a href="#" class="btn btn-primary">Войти</a>
          </div>
          <div class="label">
            или
          </div>
          <div class="btn_box">
            <a href="#" class="btn btn-primary">Зарегистрироваться</a>
          </div>
        </div>
        <div class="reserv_box sidebar_box justify-content-center">
          <div class="btn_box">
            <a href="#" class="btn btn-primary">Выйти</a>
          </div>
          <br>
          <div class="label">
            Бронирование номера:
          </div>
          <br>
          <div class="form_entrance">
            <form class="form_entrance" method="POST" action="/">
              @csrf

              <div class="form-group">
                <label >Имя</label>
                <input name="cust_name" class="form-control" id="cust_name" placeholder="Введите номер комнаты" required>
              </div>

              <div class="form-group">
                <label>Номер телефона</label>
                <input class="form-control" name="num_phone" required id="num_phone" placeholder="Введите срок проживания">
              </div>

              <div class="form-group">
                <label >Номер комнаты</label>
                <input name="num_room" class="form-control" id="num_room" placeholder="Введите номер комнаты" required>
              </div>

              <div class="form-group">
                <label>Срок</label>
                <input class="form-control" name="time_stay" required id="time_stay" placeholder="Введите срок проживания">
              </div>

              <div class="form-group">
                <label>Комментарий</label>
                <input class="form-control" name="comment" id="comment" placeholder="Особые пожелания">
              </div>

              <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="check_rights" name="check_rights" required>
                <label class="form-check-label">Ознакомлен с правилами отеля</label>
              </div>

              <button type="submit" class="btn btn-primary">Забронировать</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<footer class="footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-2">
          <div class="logo_footer">
            <div class="logo_footer_wrap">
              <a href="#">
                <div class="d-flex logo_footer_box">
                  <i class="fa fa-hotel" aria-hidden="true"></i>
                  <div class="logo_text">
                    Hotel
                  </div>
                </div>
              </a>
            </div>
          </div>

        </div>

        <div class="col-lg-7 menu_footer col-xl-6">
          <nav>
            <ul class="menu d-flex justify-content-center">
              <li class="menu__item">
                <a href="/">
                  <div>
                    Главная страница
                  </div>
                </a>
              </li>

              <li class="menu__item">
                <a href="/rooms">
                  <div>
                    Наши номера
                  </div>
                </a>
              </li>

              <li class="menu__item">
                <a href="#">
                  <div>
                    Правила
                  </div>
                </a>
              </li>

              <li class="menu__item">
                <a href="/formal">
                  <div>
                    Оформление
                  </div>
                </a>
              </li>
            </ul>
          </nav>
        </div>



        <div class="col-lg-3 col-xl-4">
          <div class="icons_footer">
            <ul class="d-flex justify-content-center icons_footer_ul">
              <li> <a href="#"><i class="fa fa-vk" aria-hidden="true"></i></a> </li>
              <li> <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a> </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </footer>
</body>

</html>
