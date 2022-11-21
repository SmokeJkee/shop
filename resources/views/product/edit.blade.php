@extends('layouts.index')
@section('content')
    <div style="padding: 10px" >
        <a href="{{route('products.index')}}">
            <button style="max-width: 200px" type="button" class="btn btn-block btn-outline-danger">Назад в категории</button>
        </a>
    </div>
    <form class="col-3" action="{{route('products.update', $product->id)}}" method="post">
        @csrf
        @method('patch')
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Редактировать продукта</label>
                <input type="text" class="form-control" placeholder="{{$product->title}}" name="title">
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Редактировать</button>
        </div>
    </form>
@endsection
