@extends('layouts.layout')

@section('content')
<div class="content">
  <div class="card">
    <div class="card-header">Номера</div>

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
                      <a href="/room/{{$i}}">Номер {{$i}}</a>
                    </h5>
                  </div>
                </div>

                <div class="task_text">
                  <ul>
                    <li>
                      <span>Тип номера: </span>
                      <span>{{'Test'}}</span>
                    </li>
                    <li>
                      <span>Количество комнат: </span>
                      <span>{{'Test'}}</span>
                    </li>
                    <li>
                      <span>Этаж: </span>
                      <span>{{'Test'}}</span>
                    </li>
                    <li>
                      <span>Вместимость: </span>
                      <span>{{'Test'}}</span>
                    </li>
                    <li>
                      <span>Стоимость: </span>
                      <span>{{'Test'}}</span>
                    </li>
                  </ul>
                </div>
              </div>

              <div class="status_box justify-content-center">
                <div class="status status_busy justify-content-center d-none">
                  <div class="status_text">
                    Занят
                  </div>
                </div>

                <div class="status status_avail justify-content-center d-none">
                  <div class="status_text">
                    Свободен
                  </div>
                </div>

                <div class="status status_reserv justify-content-center">
                  <div class="status_text">
                    Бронь
                  </div>
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
