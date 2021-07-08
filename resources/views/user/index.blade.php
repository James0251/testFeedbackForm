@extends('layout.site', ['title' => 'Личный кабинет'])

@section('content')
    @if(auth()->check())
        <div class="col-md-12" align="center">
            <h1>Личный кабинет</h1>
            <p>Добрый день {{ auth()->user()->name }}!</p>
            <p>Пожалуйста, заполните форму обратной связи!</p>

            @include('error.response')

            <form method="post" action="{{ route('feedback.store') }}">
                @csrf
                @include('feedback.create')
            </form>
        </div>
    @endif
@endsection