@extends('layout.site', ['title' => 'Личный кабинет'])

@section('content')
    <div class="col-md-12" align="center">
        <h1>Личный кабинет</h1>
        <p>Добрый день {{ auth()->user()->name }}!</p>
        <p>Пожалуйста, заполните форму обратной связи!</p>
    </div>
@endsection