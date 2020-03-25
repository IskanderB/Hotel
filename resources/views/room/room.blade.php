@extends('layouts.layout')

@section('content')
  <div class="content">
    <div class="num_room">
      <h5>Номер {{request()->num_room}}</h5>
    </div>
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

    <div class="status_box_num d-flex">
      <h5>Статус: </h5>
      <div class="status">
        Занят
      </div>
    </div>

    <div class="reserv_status_box d-flex">
      <h5>Бронь: </h5>
      <a href="#">
        <div class="reserv_status">
          Забронирован
        </div>
      </a>
    </div>

    <div class="room_btns">
      <a href="/guest/1" class="btn btn-primary">Гость</a>
      <a href="/guestlist/1" class="btn btn-primary">Guest-лист</a>
      <a href="/gueststay/{{request()->num_room}}" class="btn btn-primary btn_reserv">Заселение</a>
    </div>
  </div>
@endsection
