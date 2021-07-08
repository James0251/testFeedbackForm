@extends('layout.site')

@section('content')
    <div class="col-md-12" align="center">
        <h1>Обратная связь</h1>
        <h6>Всего заявок: {{ $count }}</h6>

        @include('error.response')

        <table class="table">
            <thead>
            <tr>
                <th>№</th>
                <th>Имя пользователя</th>
                <th>Email</th>
                <th>Телефон</th>
                <th>Заявка</th>
            </tr>
            </thead>
            <tbody>
            @foreach($feeds as $feed)
                <tr>
                    <td>{{ $feed->id  }}</td>
                    <td>{{ $feed->name  }}</td>
                    <td>{{ $feed->email  }}</td>
                    <td>{{ $feed->phone  }}</td>
                    <td>{{ $feed->message  }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>


@endsection
