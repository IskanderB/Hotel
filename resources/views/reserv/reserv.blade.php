@extends('layouts.layout')

@section('content')
<div class="card">
<div class="card-header">Бронь №{{request()->reserv_id}}</div>

<div class="card-body">
  <form class="reserv_form" action="/reservedit" method="POST">
      @csrf

      <div class="form-group row">
        <label for="full_name" class="col-lg-3 col-md-3 col-form-label text-md-right">ID брони</label>
        <div class="col-lg-6 col-md-8">
          <input type="text" readonly required id="id" class="form-control" name="id" value="{{ request()->reserv_id }}" maxlength="130" minlength="5">
        </div>
      </div>

    <div class="form-group row">
      <label for="full_name" class="col-lg-3 col-md-3 col-form-label text-md-right">ФИО</label>
      <div class="col-lg-6 col-md-8">
        <input type="text"  required id="guest_name" class="form-control" name="guest_name" value="{{ $reserv->guest_name }}" maxlength="130" minlength="5">
      </div>
    </div>

    <div class="form-group row">
      <label for="full_name" class="col-lg-3 col-md-3 col-form-label text-md-right">Номер телефона</label>
      <div class="col-lg-6 col-md-8">
        <input type="text" required id="num_phone" class="form-control" name="num_phone" value="{{ $reserv->num_phone }}" maxlength="20"  minlength="3">
      </div>
    </div>

    <div class="form-group row">
      <label for="full_name" class="col-lg-3 col-md-3 col-form-label text-md-right">Номер комнаты</label>
      <div class="col-lg-6 col-md-8">
        <input type="text" required id="num_room" class="form-control" name="num_room" value="{{ $reserv->num_room }}"
         maxlength="5"  minlength="1">
      </div>
    </div>

    <div class="form-group row">
      <label for="full_name" class="col-lg-3 col-md-3 col-form-label text-md-right">Дата прибытия</label>
      <div class="col-lg-6 col-md-8">
        <input type="date" class="form-control" name="time_in" required id="time_in" maxlength="130" value="{{ $reserv->time_in }}">
      </div>
    </div>

    <div class="form-group row">
      <label for="full_name" class="col-lg-3 col-md-3 col-form-label text-md-right">Дата отъезда</label>
      <div class="col-lg-6 col-md-8">
        <input type="date" class="form-control" name="time_out" required id="time_out" maxlength="130" value="{{ $reserv->time_out }}">
      </div>
    </div>

    <div class="form-group row">
      <label for="full_name" class="col-lg-3 col-md-3 col-form-label text-md-right">Сумма брони</label>
      <div class="col-lg-6 col-md-8">
        <input type="text" id="reserv_sum" class="form-control" name="reserv_sum" value="{{ $reserv->reserv_sum }}"  maxlength="30">
      </div>
    </div>

    <div class="form-group row">
      <label for="full_name" class="col-lg-3 col-md-3 col-form-label text-md-right">Комментарий</label>
      <div class="col-lg-6 col-md-8">
        <input type="text" id="comment" class="form-control" name="comment" value="{{ $reserv->comment }}" maxlength="300">
      </div>
    </div>

    @if($reserv->check_reserv)
    <div class="form-group row">
      <label for="full_name" class="col-lg-3 col-md-3 col-form-label text-md-right">Подтверждение</label>
      <div class="col-lg-6 col-md-8">
        <input type="text" readonly id="check_reserv" class="form-control" name="check_reserv" value="Подтверждено" maxlength="300">
      </div>
    </div>
    @else
    <div class="form-group row check_reserv_wrap">
      <label for="full_name" class="col-lg-3 col-md-3 col-form-label text-md-right">Подтверждение</label>
      <div class="col-lg-6 col-md-8 check_reserv_box">
        <input type="checkbox" id="check_reserv" class="" name="check_reserv">
      </div>
    </div>
    @endif
    <div class="col-lg-6 col-md-8 offset-lg-3 offset-md-3 justify-content-start buttons_box">
      <div class="buttons">
        <button type="submit" class="btn btn-primary btn_reserv">
        Сохранить
        </button>
        <a href="#" class="btn btn-primary btn_reserv">Номер</a>
        <a href="#" class="btn btn-primary btn_reserv">Удалить бронь</a>
      </div>
    </div>
  </form>
</div>
</div>
@endsection
