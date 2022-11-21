@extends('layouts.index')
@section('content')

    <div style="padding: 10px" >
        <a href="{{route('products.create')}}">
            <button style="max-width: 200px" type="button" class="btn btn-block btn-outline-primary">Создать продукт</button>
        </a>
    </div>
    <div class="card-body table-responsive p-0 col-12">
        <table class="table table-hover text-nowrap">
            <thead>
            <tr>
                <th>ID</th>
                <th>Название</th>
                <th>Описание</th>
                <th>Контент</th>
                <th>Цена</th>
                <th>Количество</th>
                <th>Опубликован</th>
                <th>Категория</th>
                <th>Редактировать</th>
                <th>Удалить</th>
            </tr>
            </thead>
            <tbody>
            @foreach($products as $product)
                <tr>
                    <td>{{$product->id}}</td>
                    <td><a href="{{route('products.show', $product)}}">{{$product->title}}</a></td>
                    <td>{{$product->description}}</td>
                    <td>{{mb_substr($product->content, 0, 30)}}...</td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->count}}</td>
                    <td>{{$product->is_published}}</td>
                    <td>{{$product->category_id}}</td>
                    <td><a class='text-green' href="{{route('products.edit', $product->id)}}"><i class="fas fa-edit"></i></a></td>
                    <form action="{{route('products.delete', $product->id)}}" method="post">
                        @csrf
                        @method('delete')
                        <td><button class='border-0 bg-transparent' type="submit"><i class="fas fa-wrench text-danger" role="button"></i></button></td>
                    </form>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
