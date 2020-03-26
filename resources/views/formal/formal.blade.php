@extends('layouts.layout')

@section('content')
  <div class="content">
    <div class="formal_btn_box">
      <a href="/guestregister" class="btn btn-primary">Регистрация гостя</a>
    </div>

    <div class="card">
      <div class="card-header">Бронь</div>

      <div class="card-body">
        <div class="col-lg-10 tasks_box offset-lg-1" id='tasks_box'>
          <ul class="tasks_list">
            @foreach($reservs as $reserv)
            <li>
              <div class="task_box d-flex">
                <div class="info_room_box">
                  <div class="task_name d-flex">
                    <div class="name_and_new d-flex">
                      <h5>
                        <a href="/reserv/{{$reserv->id}}">Номер брони {{$reserv->id}}</a>
                      </h5>
                    </div>
                  </div>

                  <div class="task_text">
                    <ul>
                      <li>
                        <span>Имя: </span>
                        <span>{{$reserv->guest_name}}</span>
                      </li>
                      <li>
                        <span>Номер телефона: </span>
                        <span>{{$reserv->num_phone}}</span>
                      </li>
                      <li>
                        <span>Номер комнаты: </span>
                        <span>{{$reserv->num_room}}</span>
                      </li>
                      <li>
                        <span>Срок: </span>
                        <span>{{$reserv->time_in}}</span>
                        <span>{{' - '}}</span>
                        <span>{{$reserv->time_out}}</span>
                      </li>
                      <li>
                        <span>Сумма брони: </span>
                        <span>{{' - '}}</span>
                      </li>
                      <li>
                        <span>Комментарий: </span>
                        <span>{{$reserv->comment}}</span>
                      </li>
                      <li>
                        <span>Статус брони: </span>
                        <span>{{' - '}}</span>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </li>
            @endforeach
          </ul>
        </div>
      </div>
    </div>

    <br>
    <br>
    <div class="card">
      <div class="card-header">Гости</div>

      <div class="card-body">
        <div class="col-lg-10 tasks_box offset-lg-1" id='tasks_box'>
          <ul class="tasks_list">
            @foreach($guests as $guest)
            <li>
              <div class="task_box d-flex">
                <div class="info_room_box">
                  <div class="task_name d-flex">
                    <div class="name_and_new d-flex">
                      <h5>
                        <a href="/guest/{{$guest->id}}">ID гостя {{$guest->id}}</a>
                      </h5>
                    </div>
                  </div>

                  <div class="task_text">
                    <ul>
                      <li>
                        <span>ФИО: </span>
                        <span>{{$guest->guest_name}}</span>
                      </li>
                      <li>
                        <span>Пол: </span>
                        <span>{{$guest->sex}}</span>
                      </li>
                      <li>
                        <span>Тип документа: </span>
                        <span>{{$guest->type_doc}}</span>
                      </li>
                      <li>
                        <span>Номер документа: </span>
                        <span>{{$guest->num_doc}}</span>
                      </li>
                      <li>
                        <span>Дата рождения: </span>
                        <span>{{$guest->born_date}}</span>
                      </li>
                      <li>
                        <span>Адрес: </span>
                        <span>{{$guest->address}}</span>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </li>
            @endforeach
          </ul>
        </div>
      </div>
    </div>
  </div>
@endsection
