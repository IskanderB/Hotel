@extends('layouts.layout')

@section('content')
<div class="card">
  <div class="card-header">Добавить новый тип документа</div>

  <div class="card-body">
    <form class="reserv_form" action="/apptypedoc" method="POST">
        @csrf

      <div class="form-group row">
        <label for="full_name" class="col-lg-3 col-md-3 col-form-label text-md-right">Название типа</label>
        <div class="col-lg-6 col-md-8">
          <input type="text" required id="type_doc" class="form-control" name="type_doc" maxlength="30">
        </div>
      </div>

      <div class="col-lg-6 col-md-8 offset-lg-3 offset-md-3 justify-content-start buttons_box">
        <div class="buttons">
          <button type="submit" class="btn btn-primary btn_reserv">
          Добавить
          </button>
        </div>
      </div>
    </form>
  </div>
</div>
@endsection
