@extends('layouts.index')
@section('content')
    <form class="col-3" method="post" action="{{route('products.store')}}" enctype="multipart/form-data">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="title">Название</label>
                <input name='title' type="text" class="form-control" placeholder="Название">
            </div>
            <div class="form-group">
                <label for="description">Описание</label>
                <input name='description' type="text" class="form-control" placeholder="Описание">
            </div>
            <div class="form-group">
                <label for="content">Контент</label>
                <textarea name="content" cols="47" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label for="price">Цена</label>
                <input name='price' type="text" class="form-control" placeholder="Цена">
            </div>
            <div class="form-group">
                <label for="count">Количество товара</label>
                <input name='count' type="text" class="form-control" placeholder="Количество">
            </div>
            <div class="form-group">
                <label for="exampleInputFile">Картинка</label>
                <div class="input-group">
                    <div class="custom-file">
                        <input name="preview_image" type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Файл</label>
                    </div>
                    <div class="input-group-append">
                        <span class="input-group-text">Загрузка</span>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label>Тег</label>
                <select class="select2" name="colors[]" multiple="multiple" data-placeholder="Select a color" style="width: 100%;">
                    @foreach($colors as $color)
                        <option value="{{$color->id}}">{{$color->title}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label>Тег</label>
                <select class="select2" name="tags[]" multiple="multiple" data-placeholder="Select a tag" style="width: 100%;">
                    @foreach($tags as $tag)
                    <option value="{{$tag->id}}">{{$tag->title}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label>Категория</label>
                <select class="form-control select" style="width: 100%;" name="category_id">
                    <option disabled selected>Выберите категорию</option>
                    @foreach($categories as $id => $category)
                    <option value="{{$category->id}}">{{$category->title}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Создать</button>
        </div>
    </form>
@endsection
