@extends('layouts.layout')

@section('content')
<div class="content">
  <div class="num_room">
    <h5>Информация о госте</h5>
  </div>
  <ul>
    <li>
      <span>ФИО: </span>
      <span>{{'Test'}}</span>
    </li>
    <li>
      <span>Пол: </span>
      <span>{{'Test'}}</span>
    </li>
    <li>
      <span>Документ: </span>
      <span>{{'Test'}}</span>
    </li>
    <li>
      <span>Серия и номер: </span>
      <span>{{'Test'}}</span>
    </li>
    <li>
      <span>Дата рождения: </span>
      <span>{{'Test'}}</span>
    </li>
    <li>
      <span>Адрес: </span>
      <span>{{'Test'}}</span>
    </li>
  </ul>

  <div class="status_box_num d-flex">
    <h5>Статус: </h5>
    <div class="status">
      Отсутствует
    </div>
  </div>
</div>
@endsection
