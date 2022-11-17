@extends('layouts.index')
@section('content')
    <form class="col-3" method="post" action="{{route('users.update', $user->id)}}">
        @method('patch')
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="name">Имя</label>
                <input type="text" class="form-control" placeholder="Имя" name="name" value="{{$user->name ?? old('name')}}">
            </div>
            <div class="form-group">
                <label for="surname">Фамилия</label>
                <input type="text" class="form-control" placeholder="Фамилия" name="surname" value="{{$user->surname ?? old('surname')}}">
            </div>
            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" class="form-control" placeholder="E-mail" name="email" value="{{$user->email ?? old('email')}}">
            </div>
            <div class="form-group">
                <label for="age">Возраст</label>
                <input type="text" class="form-control" placeholder="Возраст" name="age" value="{{$user->age ?? old('age')}}">
            </div>
            <div class="form-group">
                <label for="address">Адрес</label>
                <input type="text" class="form-control" placeholder="Адрес" name="address" value="{{$user->address ?? old('address')}}">
            </div>
            <div class="form-group">
                <label>Пол</label>
                <select class="form-control select2" style="width: 100%;" name="gender">
                        <option disabled selected value="{{$user->gender}}">Сейчас ваш пол:  {{$user->genderTitle}}</option>
                        <option  value="1">Мужчина</option>
                        <option  value="2">Женщина</option>
                </select>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Редактировать</button>
        </div>
    </form>
@endsection
