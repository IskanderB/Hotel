@extends('layouts.layout')

@section('content')
<div class="card">
  <div class="card-header">Заселение</div>

  <div class="card-body">
    <form class="reserv_form" action="/" method="POST">
        @csrf
      <div class="form-group row">
        <label for="full_name" class="col-lg-3 col-md-3 col-form-label text-md-right">Номер</label>
        <div class="col-lg-6 col-md-8">
          <input type="text" readonly required id="name" placeholder="{{ request()->num_room }}" class="form-control" name="name" value="{{ request()->num_room }}" maxlength="10" minlength="5">
        </div>
      </div>

      <div class="form-group row">
        <label for="full_name" class="col-lg-3 col-md-3 col-form-label text-md-right">ID гостя</label>
        <div class="col-lg-6 col-md-8">
          <input type="text" required id="number_phone" class="form-control" name="number_phone" value="{{ old('password') }}" maxlength="32"  minlength="8">
        </div>
      </div>

      <div class="form-group row">
        <label for="full_name" class="col-lg-3 col-md-3 col-form-label text-md-right">Дата заселения</label>
        <div class="input_time col-lg-6 col-md-8">
              <input type="date" class="form-control" id="date" name="date" placeholder="Дата">
        </div>
      </div>

      <div class="form-group row">
        <label for="full_name" class="col-lg-3 col-md-3 col-form-label text-md-right">Дата отъезда</label>
        <div class="input_time col-lg-6 col-md-8">
              <input type="date" class="form-control" id="date" name="date" placeholder="Дата">
        </div>
      </div>

      <div class="form-group row">
        <label for="full_name" class="col-lg-3 col-md-3 col-form-label text-md-right">Оплата</label>
        <div class="col-lg-6 col-md-8">
          <input type="text" id="reserv_sum" class="form-control" name="reserv_sum" value="{{ old('number_phone') }}"  maxlength="30">
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
