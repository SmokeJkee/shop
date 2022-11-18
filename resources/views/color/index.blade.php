@extends('layouts.index')
@section('content')

    <div style="padding: 10px" >
        <a href="{{route('colors.create')}}">
            <button style="max-width: 200px" type="button" class="btn btn-block btn-outline-primary">Создать цвет</button>
        </a>
    </div>
    <div class="card-body table-responsive p-0 col-6">
        <table class="table table-hover text-nowrap">
            <thead>
            <tr>
                <th>ID</th>
                <th>Название</th>
                <th>Дата создания</th>
                <th>Цвет</th>
                <th>Редактировать</th>
                <th>Удалить</th>
            </tr>
            </thead>
            <tbody>
            @foreach($colors as $color)
                <tr>
                    <td>{{$color->id}}</td>
                    <td><a href="{{route('colors.show', $color)}}">{{$color->title}}</a></td>
                    <td>{{$color->created_at}}</td>
                    <td><div style="width: 25px; height: 25px; background: {{$color->title}}"></div></td>
                    <td><a class='text-green' href="{{route('colors.edit', $color->id)}}"><i class="fas fa-edit"></i></a></td>
                    <form action="{{route('colors.delete', $color->id)}}" method="post">
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
