@extends('layouts.layout')

@section('content')
<div class="card">
  <div class="card-header">Заселение</div>

  <div class="card-body">
    <form class="reserv_form" action="/goin" method="POST">
        @csrf
      <div class="form-group row">
        <label for="full_name" class="col-lg-3 col-md-3 col-form-label text-md-right">Номер</label>
        <div class="col-lg-6 col-md-8">
          <input type="text" readonly required id="num_room" placeholder="{{ request()->num_room }}" class="form-control" name="num_room" value="{{ request()->num_room }}" maxlength="10">
        </div>
      </div>

      <div class="form-group row">
        <label for="full_name" class="col-lg-3 col-md-3 col-form-label text-md-right">ID гостя</label>
        <div class="col-lg-6 col-md-8">
          <input type="text" required id="id_guest" class="form-control" name="id_guest" maxlength="10">
        </div>
      </div>

      <div class="form-group row">
        <label for="full_name" class="col-lg-3 col-md-3 col-form-label text-md-right">Дата заселения</label>
        <div class="input_time col-lg-6 col-md-8">
              <input type="date" class="form-control" id="time_in" name="time_in" required maxlength="30">
        </div>
      </div>

      <div class="form-group row">
        <label for="full_name" class="col-lg-3 col-md-3 col-form-label text-md-right">Дата отъезда</label>
        <div class="input_time col-lg-6 col-md-8">
              <input type="date" class="form-control" id="time_out" name="time_out" required maxlength="30">
        </div>
      </div>

      <div class="form-group row">
        <label for="full_name" class="col-lg-3 col-md-3 col-form-label text-md-right">Оплата</label>
        <div class="col-lg-6 col-md-8">
          <input type="text" id="pay" class="form-control" name="pay" maxlength="30">
        </div>
      </div>

      <div class="col-lg-6 col-md-8 offset-lg-3 offset-md-3 justify-content-start buttons_box">
        <div class="buttons">
          <button type="submit" class="btn btn-primary btn_reserv">
          Заселить
          </button>
        </div>
      </div>
    </form>
  </div>
</div>
@endsection
