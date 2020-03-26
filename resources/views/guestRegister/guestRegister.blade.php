@extends('layouts.layout')

@section('content')
<div class="card">
<div class="card-header">Регистрация гостя</div>

<div class="card-body">
  <form class="reserv_form" action="/guestregisterproc" method="POST">
      @csrf
    <div class="form-group row">
      <label for="full_name" class="col-lg-3 col-md-3 col-form-label text-md-right">ФИО</label>
      <div class="col-lg-6 col-md-8">
        <input type="text"  required id="guest_name" class="form-control" name="guest_name" maxlength="130" minlength="5">
      </div>
    </div>

    <div class="form-group row">
      <label for="full_name" class="col-lg-3 col-md-3 col-form-label text-md-right">Пол</label>
      <div class="col-lg-6 col-md-8">
        <input type="text" required id="sex" class="form-control" name="sex"  maxlength="1"  minlength="1">
      </div>
    </div>

    <div class="form-group row">
      <label for="full_name" class="col-lg-3 col-md-3 col-form-label text-md-right">Документ</label>
      <div class="col-lg-6 col-md-8">
        <input type="text" required id="type_doc" class="form-control" name="type_doc"
         maxlength="32"  minlength="10">
      </div>
    </div>

    <div class="form-group row">
      <label for="full_name" class="col-lg-3 col-md-3 col-form-label text-md-right">Серия и номер</label>
      <div class="col-lg-6 col-md-8">
        <input type="text" required id="num_doc" class="form-control" name="num_doc" maxlength="50"  minlength="10">
      </div>
    </div>

    <div class="form-group row">
      <label for="full_name" class="col-lg-3 col-md-3 col-form-label text-md-right">Дата рождения</label>
      <div class="col-lg-6 col-md-8">
        <input type="date" id="born_date" class="form-control" name="born_date" maxlength="30" required>
      </div>
    </div>

    <div class="form-group row">
      <label for="full_name" class="col-lg-3 col-md-3 col-form-label text-md-right">Адрес</label>
      <div class="col-lg-6 col-md-8">
        <input type="text" required id="address" class="form-control" name="address" maxlength="200" minlength="5">
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
