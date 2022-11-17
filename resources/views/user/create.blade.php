@extends('layouts.index')
@section('content')
    <form class="col-3" method="post" action="{{route('users.store')}}">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="name">Имя</label>
                <input type="text" class="form-control" placeholder="Имя" name="name" value="{{old('name')}}">
            </div>
            @error('name')
            <div class="text-danger">Это поле должно быть заполнено</div>
            @enderror
            <div class="form-group">
                <label for="surname">Фамилия</label>
                <input type="text" class="form-control" placeholder="Фамилия" name="surname" value="{{old('surname')}}">
            </div>
            @error('surname')
            <div class="text-danger">Это поле должно быть заполнено</div>
            @enderror
            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" class="form-control" placeholder="E-mail" name="email" value="{{old('email')}}">
            </div>
            @error('email')
            <div class="text-danger">Это поле должно быть заполнено</div>
            @enderror
            <div class="form-group">
                <label for="age">Возраст</label>
                <input type="text" class="form-control" placeholder="Возраст" name="age" value="{{old('age')}}">
            </div>
            @error('age')
            <div class="text-danger">Это поле должно быть заполнено</div>
            @enderror
            <div class="form-group">
                <label for="address">Адрес</label>
                <input type="text" class="form-control" placeholder="Адрес" name="address" value="{{old('address')}}">
            </div>
            @error('address')
            <div class="text-danger">Это поле должно быть заполнено</div>
            @enderror
            <div class="form-group">
                <label for="password">Пароль</label>
                <input type="password" class="form-control" placeholder="Пароль" name="password">
            </div>
            @error('password')
            <div class="text-danger">Это поле должно быть заполнено</div>
            @enderror
            <div class="form-group">
                <label for="password_confirmation">Подтвердите пароль</label>
                <input type="password" class="form-control" placeholder="Подтвердите пароль" name="password_confirmation">
            </div>
            @error('password_confirmation')
            <div class="text-danger">Это поле должно быть заполнено</div>
            @enderror
            <div class="form-group">
                <label>Пол</label>
                <select class="form-control select2" style="width: 100%;" name="gender">
                    <option disabled selected>Выберите пол</option>
                    <option {{old('gender' == 2 ? 'selected' : '')}} value="2">Женский</option>
                    <option {{old('gender' == 1 ? 'selected' : '')}} value="1">Мужской</option>
                </select>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Создать</button>
        </div>
    </form>
@endsection
