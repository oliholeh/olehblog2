@extends('admin.layouts.app_admin')

@section('content')
  <div class="container">
    @component('admin.components.breadcrumb')
      @slot('title') Список категорий @endslot
      @slot('parent') Главная @endslot
      @slot('active') Категории @endslot
    @endcomponent
    <hr>
    <a href="{{route('admin.category.create')}}" class=" btn btn-primary btn-md pull-right "><i class="fa fa-plus-square-o"></i> Создать категорию</a>
    <div class="table-responsive">
      <table class="table table-striped ">
        <caption>List of categories</caption>
        <thead class="thead-light">
          <tr>
            <th>Наименование</th>
            <th>Опубликовано</th>
            <th class="text-right">Действия</th>
          </tr>
        </thead>
        <tbody>
          @forelse ($categories as $category)
            <tr>
              <td>{{$category->published}}</td>
              <td>{{$category->title}}</td>
              <td><a href="{{route('admin.category.edit', ['id' => $category->id ])}}"><i class="fa fa-edit"></i>Изменить категорию</a></td>
            </tr>
          @empty
            <tr>
              <td colspan="3" class="text-center"><h3>Данные отсуствуют</h3></td>
            </tr>
          @endforelse
          <tr>
            <td></td>
          </tr>
        </tbody>
        <tfoot>
          <tr>
            <td colspan="3">
              <ul class="pagination pull-right">
                {{$categories->links()}}
              </ul>
            </td>
          </tr>
        </tfoot>
      </table>
    </div>
  </div>
@endsection