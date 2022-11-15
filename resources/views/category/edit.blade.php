@extends('layouts.index')
@section('content')
    <div style="padding: 10px" >
        <a href="{{route('categories.index')}}">
            <button style="max-width: 200px" type="button" class="btn btn-block btn-outline-danger">Назад в категории</button>
        </a>
    </div>
    <form class="col-3" action="{{route('categories.update', $category->id)}}" method="post">
        @csrf
        @method('patch')
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Редактировать категорию</label>
                <input type="text" class="form-control" placeholder="{{$category->title}}" name="title">
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Редактировать</button>
        </div>
    </form>
@endsection
