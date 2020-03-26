@extends('layouts.layout')

@section('content')
<div class="content">
  <div class="num_room">
    <h5>Информация о госте(ID {{$guest->id}})</h5>
  </div>
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
      <span>Документ: </span>
      <span>{{$guest->type_doc}}</span>
    </li>
    <li>
      <span>Серия и номер: </span>
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

  <div class="status_box_num d-flex">
    <h5>Статус: </h5>
    <div class="status">
      Отсутствует
    </div>
  </div>
  <a href="/editguestpage/{{$guest->id}}" class="btn btn-primary" id="deleteRoom">Редактировать информацию</a>
  <a href="/deleteguest/{{$guest->id}}" class="btn btn-primary" id="deleteRoom">Удалить гостя</a>
</div>
@endsection
