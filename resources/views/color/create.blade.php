@extends('layouts.index')
@section('content')
    <form class="col-3" method="post" action="{{route('colors.store')}}">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Цвет</label>
                <input type="text" class="form-control" placeholder="ID" name="title">
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Создать</button>
        </div>
    </form>
@endsection
