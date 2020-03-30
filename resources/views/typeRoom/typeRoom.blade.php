@extends('layouts.layout')

@section('content')
<div class="content">
    <div class="card">
      <div class="card-header">Типы номеров</div>

      <div class="card-body">
        <div class="col-lg-10 tasks_box offset-lg-1" id='tasks_box'>
          <ul class="tasks_list">
            @foreach($types as $type)
            <li>
              <div class="task_box type_box d-flex">
                <div class="type_text">
                  {{$type->type_room}}
                </div>
                <a href="/deletetyperoom/{{$type->id}}" class="btn btn-primary btn_reserv">Удалить</a>
              </div>
            </li>
            @endforeach
          </ul>
        </div>
      </div>
    </div>
    <a href="/apptyperoompage" class="btn btn-primary btn_app_type">Добавить тип</a>
</div>
@endsection
