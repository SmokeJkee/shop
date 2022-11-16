@extends('layouts.index')
@section('content')
    <form class="col-3" method="post" action="{{route('categories.store')}}">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Создать категорию</label>
                <input type="text" class="form-control" placeholder="Название" name="title">
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Создать</button>
        </div>
    </form>
@endsection
