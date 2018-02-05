@extends('admin.layouts.app_admin')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-sm-3">
        <div class="jumbotron">
          <p><span class="label label-primary">Категорий 0</span></p>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="jumbotron">
          <p><span class="label label-primary">Материалов 0</span></p>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="jumbotron">
          <p><span class="label label-primary">Поситителей 0</span></p>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="jumbotron">
          <p><span class="label label-primary">Сегодне 0</span></p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-6">
        <div class="list-group">
          <a href="#" class="btn btn-default btn-block">Создать категорию</a>
          <a href="#" class="list-group-item">
            <h4 class="list-group-item-heading">Категория первая</h4>
            <p class="list-group-iten-text">Количество материалов</p>
          </a>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="list-group">
          <a href="#" class="btn btn-default btn-block">Создать материал</a>
          <a href="#" class="list-group-item">
            <h4 class="list-group-item-heading">Материад первий</h4>
            <p class="list-group-iten-text">Категория</p>
          </a>
        </div>
      </div>
    </div>
  </div>
@endsection
