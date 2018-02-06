<div class="form-group">
  <label for="published" class="col-sm-2 control-label">Опубликовано</label>
  <div class="col-sm-10">
    <select class="form-control" name="published" id="published">
      @if(isset($category->id))
        <option value="0"@if($category->published == 0) selected="" @endif>Не опубликовано</option>
        <option value="1"@if($category->published == 1) selected="" @endif>Опубликовано</option>
      @else
        <option value="0">Не опубликовано</option>
        <option value="1">Опубликовано</option>
      @endif
    </select>
  </div>
</div>

<div class="form-group">
  <label for="title" class="col-sm-2 control-label">Найемнование</label>
  <div class="col-sm-10">
    <input type="text" name="title" class="form-control" id="title" placeholder="Найемнование" value="{{$category->title or ""}}">
  </div>
</div>

<div class="form-group">
  <label for="slug" class="col-sm-2 control-label">Slug</label>
  <div class="col-sm-10">
    <input type="text" name="slug" class="form-control" id="slug" placeholder="Автоматическая генерация" value="{{$category->slug or ""}}" readonly>
  </div>
</div>

<div class="form-group">
  <label for="parent_id" class="col-sm-2 control-label">Родительськая категория</label>
  <div class="col-sm-10">
    <select class="form-control" name="parent_id" id="parent_id">
      <option value="0">-- без родительськой категории --</option>
      @include('admin.categories.partials.categories')
    </select>
  </div>
</div>

<div class="form-group">
  <div class="col-sm-offset-2 col-sm-10">
    <button type="submit" class="btn btn-default">Sign in</button>
  </div>
</div>
