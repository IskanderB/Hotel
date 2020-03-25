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
            <?php
              for($i=1;$i<=10;$i++){
            ?>
            <li>
              <div class="task_box d-flex">
                <div class="info_room_box">
                  <div class="task_name d-flex">
                    <div class="name_and_new d-flex">
                      <h5>
                        <a href="/reserv/{{$i}}">Номер брони {{$i}}</a>
                      </h5>
                    </div>
                  </div>

                  <div class="task_text">
                    <ul>
                      <li>
                        <span>Имя: </span>
                        <span>{{'Test'}}</span>
                      </li>
                      <li>
                        <span>Номер телефона: </span>
                        <span>{{'Test'}}</span>
                      </li>
                      <li>
                        <span>Номер комнаты: </span>
                        <span>{{'Test'}}</span>
                      </li>
                      <li>
                        <span>Срок: </span>
                        <span>{{'Test'}}</span>
                      </li>
                      <li>
                        <span>Сумма брони: </span>
                        <span>{{'Test'}}</span>
                      </li>
                      <li>
                        <span>Комментарий: </span>
                        <span>{{'Test'}}</span>
                      </li>
                      <li>
                        <span>Статус брони: </span>
                        <span>{{'Test'}}</span>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </li>
            <?php
          }
            ?>
          </ul>
        </div>
      </div>
    </div>
  </div>
@endsection
