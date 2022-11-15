@extends('layouts.index')
@section('content')

    <div style="padding: 10px" >
        <a href="{{route('tags.create')}}">
            <button style="max-width: 200px" type="button" class="btn btn-block btn-outline-primary">Создать тег</button>
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
            @foreach($tags as $tag)
                <tr>
                    <td>{{$tag->id}}</td>
                    <td><a href="{{route('tags.show', $tag)}}">{{$tag->title}}</a></td>
                    <td>{{$tag->created_at}}</td>
                    <td><a class='text-green' href="{{route('tags.edit', $tag->id)}}"><i class="fas fa-edit"></i></a></td>
                    <form action="{{route('tags.delete', $tag->id)}}" method="post">
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
