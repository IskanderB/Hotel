@extends('layouts.layout')

@section('content')
<div class="content">
  <a href="/roomcreate" class="btn btn-primary btn_reserv">Добавить номер</a>
  <div class="card">
    <div class="card-header">Номера</div>

    <div class="card-body">
      <div class="col-lg-10 tasks_box offset-lg-1" id='tasks_box'>
        <ul class="tasks_list">
          @foreach($rooms as $room)
          <li>
            <div class="task_box d-flex">
              <div class="info_room_box">
                <div class="task_name d-flex">
                  <div class="name_and_new d-flex">
                    <h5>
                      <a href="/room/{{$room->id}}">Номер {{$room->id}}</a>
                    </h5>
                  </div>
                </div>

                <div class="task_text">
                  <ul>
                    <li>
                      <span>Тип номера: </span>
                      <span>{{$room->type_room}}</span>
                    </li>
                    <li>
                      <span>Количество комнат: </span>
                      <span>{{$room->place_num}}</span>
                    </li>
                    <li>
                      <span>Этаж: </span>
                      <span>{{$room->floor}}</span>
                    </li>
                    <li>
                      <span>Телефон: </span>
                      <span>{{$room->num_phone}}</span>
                    </li>
                    <li>
                      <span>Вместимость: </span>
                      <span>{{$room->size}}</span>
                    </li>
                    <li>
                      <span>Стоимость: </span>
                      <span>{{$room->price}}</span>
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
          @endforeach
        </ul>
      </div>
    </div>
  </div>
</div>
@endsection
