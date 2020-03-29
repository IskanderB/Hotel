@extends('layouts.layout')

@section('content')
<div class="content">
  <div class="num_room">
    <h5>Guest-лист</h5>
  </div>
  <ul>
    <li>
      <span>ID Guest-лист: </span>
      <span>{{$guest_list->id}}</span>
    </li>
    <li>
      <span>Номер комнаты: </span>
      <span><a href="/room/{{$guest_list->num_room}}">{{$guest_list->num_room}}</a></span>
    </li>
    <li>
      <span>ID гостя: </span>
      <span><a href="/guest/{{$guest_list->id_guest}}">{{$guest_list->id_guest}}</a></span>
    </li>
    <li>
      <span>Дата заселения: </span>
      <span>{{$guest_list->time_in}}</span>
    </li>
    <li>
      <span>Дата отъезда: </span>
      <span>{{$guest_list->time_out}}</span>
    </li>
    <li>
      <span>Оплачено: </span>
      <span>{{$guest_list->pay}}</span>
    </li>
  </ul>

  <a href="/editguestlistpage/{{$guest_list->id}}" class="btn btn-primary btn_g_list">Редактировать данные</a>
  <a href="/pay/{{$guest_list->id}}" class="btn btn-primary btn_g_list">Сформировать счёт</a>

</div>
@endsection
