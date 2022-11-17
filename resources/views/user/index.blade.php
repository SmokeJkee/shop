@extends('layouts.index')
@section('content')

    <div style="padding: 10px" >
        <a href="{{route('users.create')}}">
            <button style="max-width: 200px" type="button" class="btn btn-block btn-outline-primary">Создать пользователя</button>
        </a>
    </div>
    <div class="card-body table-responsive p-0 col-12">
        <table class="table table-hover text-nowrap">
            <thead>
            <tr>
                <th>ID</th>
                <th>Имя</th>
                <th>Фамилия</th>
                <th>E-mail</th>
                <th>Возраст</th>
                <th>Адрес</th>
                <th>Пол</th>
                <th>Редактировать</th>
                <th>Удалить</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <td><a href="{{route('users.show', $user)}}">{{$user->id}}</a></td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->surname}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->age}}</td>
                    <td>{{$user->address}}</td>
                    <td>{{$user->genderTitle}}</td>
                    <td><a class='text-green' href="{{route('users.edit', $user->id)}}"><i class="fas fa-edit"></i></a></td>
                    <form action="{{route('users.delete', $user->id)}}" method="post">
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
