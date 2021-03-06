@extends('layout.enter', ['title' => 'Вход в личный кабинет'])

@section('content')
    <h1>Вход в личный кабинет</h1>
    <form method="post" action="{{ route('auth.auth') }}">
        @csrf
        <div class="form-group">
            <input type="email" class="form-control" name="email" placeholder="Адрес почты"
                   required maxlength="255" autocomplete="off">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Ваш пароль"
                   required maxlength="255" autocomplete="off">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-info text-white">Войти</button>
        </div>
    </form>
@endsection