@extends('layouts.layout')

@section('content')
<div class="card">
<div class="card-header">Регистрация гостя</div>

<div class="card-body">
  <form class="reserv_form" action="/" method="POST">
      @csrf
    <div class="form-group row">
      <label for="full_name" class="col-lg-3 col-md-3 col-form-label text-md-right">ФИО</label>
      <div class="col-lg-6 col-md-8">
        <input type="text"  required id="name" class="form-control" name="name" value="{{ old('name') }}" maxlength="10" minlength="5">
      </div>
    </div>

    <div class="form-group row">
      <label for="full_name" class="col-lg-3 col-md-3 col-form-label text-md-right">Пол</label>
      <div class="col-lg-6 col-md-8">
        <input type="text" required id="number_phone" class="form-control" name="number_phone" value="{{ old('password') }}" maxlength="32"  minlength="8">
      </div>
    </div>

    <div class="form-group row">
      <label for="full_name" class="col-lg-3 col-md-3 col-form-label text-md-right">Документ</label>
      <div class="col-lg-6 col-md-8">
        <input type="text" required id="number_room" class="form-control" name="number_room" value="{{ old('password_confirmation') }}"
         maxlength="32"  minlength="8">
      </div>
    </div>

    <div class="form-group row">
      <label for="full_name" class="col-lg-3 col-md-3 col-form-label text-md-right">Серия и номер</label>
      <div class="col-lg-6 col-md-8">
        <input type="text" required id="time_stay" class="form-control" name="time_stay" value="{{ old('email') }}">
      </div>
    </div>

    <div class="form-group row">
      <label for="full_name" class="col-lg-3 col-md-3 col-form-label text-md-right">Дата рождения</label>
      <div class="col-lg-6 col-md-8">
        <input type="text" id="reserv_sum" class="form-control" name="reserv_sum" value="{{ old('number_phone') }}"  maxlength="30">
      </div>
    </div>

    <div class="form-group row">
      <label for="full_name" class="col-lg-3 col-md-3 col-form-label text-md-right">Адрес</label>
      <div class="col-lg-6 col-md-8">
        <input type="text" required id="comment" class="form-control" name="comment" value="{{ old('full_name') }}" maxlength="50">
      </div>
    </div>

    <div class="col-lg-6 col-md-8 offset-lg-3 offset-md-3 justify-content-start">
      <div class="buttons">
        <button type="submit" class="btn btn-primary">
        Зарегистрировать
        </button>
      </div>
    </div>
  </form>
</div>
</div>

@endsection
