@extends('layouts.index')
@section('content')
    <div style="padding: 10px" >
        <a href="{{route('categories.index')}}">
            <button style="max-width: 200px" type="button" class="btn btn-block btn-outline-danger">Назад в категории</button>
        </a>
    </div>
    <table class="table table-hover text-nowrap">
        <thead>
        <tr>
            <th>ID</th>
            <th>Название</th>
            <th>Дата создания</th>

        </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{$category->id}}</td>
                <td>{{$category->title}}</td>
                <td>{{$category->created_at}}</td>
            </tr>
        </tbody>
    </table>
@endsection
