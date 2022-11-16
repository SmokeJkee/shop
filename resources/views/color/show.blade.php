@extends('layouts.index')
@section('content')
    <div style="padding: 10px" >
        <a href="{{route('colors.index')}}">
            <button style="max-width: 200px" type="button" class="btn btn-block btn-outline-danger">Назад к цветам</button>
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
                <td>{{$color->id}}</td>
                <td>{{$color->title}}</td>
                <td>{{$color->created_at}}</td>
            </tr>
        </tbody>
    </table>
@endsection
