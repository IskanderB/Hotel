@extends('layouts.layout')

@section('content')
  <div class="content">
    <div class="num_room">
      <h5>Номер {{$room->id}}</h5>
    </div>
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

    <div class="status_box_num d-flex">
      <h5>Статус: </h5>
      @if($room->g_l_id)
      <div class="status status_busy">
        Занят
      </div>
      @else
      <div class="status status_avail">
        Свободен
      </div>
      @endif
    </div>

    <div class="reserv_status_box d-flex">
      <h5>Бронь: </h5>
      <a href="#">
        @if($room->check_reserv)
        <div class="reserv_status reserv_status_busy">
          Забронирован
        </div>
        @else
        <div class="reserv_status reserv_status_avail">
          Не забронирован
        </div>
        @endif
      </a>
    </div>

    <div class="room_btns">
      @if($room->g_l_id)
      <a href="/guest/{{$room->id_guest}}" class="btn btn-primary">Гость</a>
      <a href="/guestlist/{{$room->g_l_id}}" class="btn btn-primary">Guest-лист</a>
      @else
      <a href="/gueststay/{{request()->num_room}}" class="btn btn-primary btn_reserv">Заселение</a>
      @endif
      <a href="/editroompage/{{request()->num_room}}" class="btn btn-primary btn_reserv">Редактировать описание</a>
    </div>
  </div>
@endsection
