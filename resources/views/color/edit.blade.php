@extends('layouts.index')
@section('content')
    <div style="padding: 10px" >
        <a href="{{route('colors.index')}}">
            <button style="max-width: 200px" type="button" class="btn btn-block btn-outline-danger">Назад к цветам</button>
        </a>
    </div>
    <form class="col-3" action="{{route('colors.update', $color->id)}}" method="post">
        @csrf
        @method('patch')
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Редактировать цвет</label>
                <input type="text" class="form-control" placeholder="{{$color->title}}" name="title">
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Редактировать</button>
        </div>
    </form>
@endsection
