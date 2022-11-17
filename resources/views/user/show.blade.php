@extends('layouts.index')
@section('content')
    <div style="padding: 10px" >
        <a href="{{route('users.index')}}">
            <button style="max-width: 200px" type="button" class="btn btn-block btn-outline-danger">Назад к пользователям</button>
        </a>
    </div>
    <table class="table table-hover text-nowrap">
        <thead>
        <tr>
            <th>ID</th>
            <th>Имя</th>
            <th>Фамилия</th>
            <th>E-mail</th>
            <th>Возраст</th>
            <th>Пол</th>
            <th>Адрес</th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->surname}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->age}}</td>
                <td>{{$user->address}}</td>
                <td>{{$user->genderTitle}}</td>
            </tr>
        </tbody>
    </table>
@endsection
