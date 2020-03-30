@extends('layouts.layout')

@section('content')
<div class="card">
  <div class="card-header">Счёт</div>

  <div class="card-body">
    <form class="reserv_form" action="/createtab" method="POST">
        @csrf
      <div class="form-group row">
        <label for="full_name" class="col-lg-3 col-md-3 col-form-label text-md-right">Номер</label>
        <div class="col-lg-6 col-md-8">
          <input type="text" readonly required id="num_room" class="form-control" name="num_room" value="{{ $guest_list->num_room }}" maxlength="10">
        </div>
      </div>

      <div class="form-group row">
        <label for="full_name" class="col-lg-3 col-md-3 col-form-label text-md-right">ID гостя</label>
        <div class="col-lg-6 col-md-8">
          <input type="text" readonly required id="id_guest" class="form-control" name="id_guest" value="{{ $guest_list->id_guest }}" maxlength="10">
        </div>
      </div>

      <div class="form-group row">
        <label for="full_name" class="col-lg-3 col-md-3 col-form-label text-md-right">Дата прибытия</label>
        <div class="input_time col-lg-6 col-md-8">
              <input type="date" class="form-control" id="time_in" name="time_in" value="{{ $guest_list->time_in }}">
        </div>
      </div>

      <div class="form-group row">
        <label for="full_name" class="col-lg-3 col-md-3 col-form-label text-md-right">Дата отъезда</label>
        <div class="input_time col-lg-6 col-md-8">
              <input type="date" class="form-control" id="time_out" name="time_out" value="{{ $guest_list->time_out }}">
        </div>
      </div>

      <div class="form-group row">
        <label for="full_name" class="col-lg-3 col-md-3 col-form-label text-md-right">Оплачено</label>
        <div class="col-lg-6 col-md-8">
          <input type="text" readonly id="paid" class="form-control" name="paid" value="{{ $guest_list->pay }}"  maxlength="10">
        </div>
      </div>

      <div class="form-group row">
        <label for="full_name" class="col-lg-3 col-md-3 col-form-label text-md-right">Оплата за номер</label>
        <div class="col-lg-6 col-md-8">
          <input type="text" id="basic_pay" class="form-control" name="basic_pay"  maxlength="10">
        </div>
      </div>

      <div class="form-group row">
        <label for="full_name" class="col-lg-3 col-md-3 col-form-label text-md-right">Оплата за доп. услуги</label>
        <div class="col-lg-6 col-md-8">
          <input type="text" id="adit_pay" class="form-control" name="adit_pay"  maxlength="10">
        </div>
      </div>

      <div class="col-lg-6 col-md-8 offset-lg-3 offset-md-3 justify-content-start buttons_box">
        <div class="buttons">
          <button type="submit" class="btn btn-primary btn_reserv">
          Выезд
          </button>
        </div>
      </div>
    </form>
  </div>
</div>
@endsection
