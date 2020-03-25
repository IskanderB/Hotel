@extends('layouts.layout')

@section('content')
<div class="content">
  <div class="num_room">
    <h5>Guest-лист</h5>
  </div>
  <ul>
    <li>
      <span>ID Guest-лист: </span>
      <span>{{'Test'}}</span>
    </li>
    <li>
      <span>Номер комнаты: </span>
      <span><a href="#">{{'Test'}}</a></span>
    </li>
    <li>
      <span>ID гостя: </span>
      <span><a href="#">{{'Test'}}</a></span>
    </li>
    <li>
      <span>Дата заселения: </span>
      <span>{{'Test'}}</span>
    </li>
    <li>
      <span>Дата отъезда: </span>
      <span>{{'Test'}}</span>
    </li>
    <li>
      <span>Оплачено: </span>
      <span>{{'Test'}}</span>
    </li>
  </ul>

  <a href="/pay/{{request()->num_list}}" class="btn btn-primary btn_g_list">Сформировать счёт</a>

</div>
@endsection
