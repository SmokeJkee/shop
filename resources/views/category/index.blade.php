@extends('layouts.index')
@section('content')

    <div style="padding: 10px" >
        <a href="{{route('categories.create')}}">
            <button style="max-width: 200px" type="button" class="btn btn-block btn-outline-primary">Создать категорию</button>
        </a>
    </div>
    <div class="card-body table-responsive p-0 col-6">
        <table class="table table-hover text-nowrap">
            <thead>
            <tr>
                <th>ID</th>
                <th>Название</th>
                <th>Дата создания</th>
                <th>Редактировать</th>
                <th>Удалить</th>
            </tr>
            </thead>
            <tbody>
            @foreach($categories as $category)
                <tr>
                    <td>{{$category->id}}</td>
                    <td><a href="{{route('categories.show', $category)}}">{{$category->title}}</a></td>
                    <td>{{$category->created_at}}</td>
                    <td><a class='text-green' href="{{route('categories.edit', $category->id)}}"><i class="fas fa-edit"></i></a></td>
                    <form action="{{route('categories.delete', $category->id)}}" method="post">
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
