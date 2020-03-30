@extends('layouts.layout')

@section('content')
  <div class="content">
    <div class="card">
    <div class="card-header">Добавление номера</div>

    <div class="card-body">
      <form class="reserv_form" action="/appendroom" method="POST">
          @csrf

        <div class="form-group row">
          <label for="full_name" class="col-lg-3 col-md-3 col-form-label text-md-right">Номер</label>
          <div class="col-lg-6 col-md-8">
            <input type="text" required id="id" class="form-control" name="id" maxlength="10">
          </div>
        </div>

        <div class="form-group row">
          <label for="full_name" class="col-lg-3 col-md-3 col-form-label text-md-right">Тип номера</label>
          <div class="col-lg-6 col-md-8">
            <select name="type_room">
              @foreach($types as $type)
              <option>{{$type->type_room}}</option>
              @endforeach
            </select>
            <!-- <input type="text"  required id="type_room" class="form-control" name="type_room" maxlength="130" minlength="5"> -->
          </div>
        </div>

        <div class="form-group row">
          <label for="full_name" class="col-lg-3 col-md-3 col-form-label text-md-right">Количество комнат</label>
          <div class="col-lg-6 col-md-8">
            <input type="text" required id="place_num" class="form-control" name="place_num"  maxlength="2"  minlength="1">
          </div>
        </div>

        <div class="form-group row">
          <label for="full_name" class="col-lg-3 col-md-3 col-form-label text-md-right">Этаж</label>
          <div class="col-lg-6 col-md-8">
            <input type="text" required id="floor" class="form-control" name="floor"
             maxlength="3"  minlength="1">
          </div>
        </div>

        <div class="form-group row">
          <label for="full_name" class="col-lg-3 col-md-3 col-form-label text-md-right">Телефон</label>
          <div class="col-lg-6 col-md-8">
            <input type="text" required id="num_phone" class="form-control" name="num_phone" maxlength="30"  minlength="5">
          </div>
        </div>

        <div class="form-group row">
          <label for="full_name" class="col-lg-3 col-md-3 col-form-label text-md-right">Стоимость</label>
          <div class="col-lg-6 col-md-8">
            <input type="text" id="price" class="form-control" name="price" maxlength="200" required>
          </div>
        </div>

        <div class="form-group row">
          <label for="full_name" class="col-lg-3 col-md-3 col-form-label text-md-right">Вместимость</label>
          <div class="col-lg-6 col-md-8">
            <input type="text" required id="size" class="form-control" name="size" maxlength="2" minlength="1">
          </div>
        </div>

        <div class="col-lg-6 col-md-8 offset-lg-3 offset-md-3 justify-content-start">
          <div class="buttons">
            <button type="submit" class="btn btn-primary">
            Добавить
            </button>
          </div>
        </div>
      </form>
    </div>
    </div>

  </div>
@endsection
