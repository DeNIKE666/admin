@extends('layouts.cabinet')

@section('title' , 'Мой профиль')

@section('content')
    <div class="card">
        <div class="card-body">

            <div class="p-1">
                <p># Номер счёта: {{ \Auth::user()->id }}</p>
                <p>Дата регистрации: {{ \Auth::user()->created_at->diffForHumans()}}</p>
                <p>Баланс: {{ \Auth::user()->balance }} руб. </p>
            </div>

            <hr>

            <form action="{{ route('user.update.profile', Auth::user()) }}" method="POST">

                @csrf

                <div class="form-group">
                    <label for="name">Имя</label>
                    <input type="text" class="form-control" name="name" value="{{ Auth::user()->name ?? old('name') }}">
                </div>

                <div class="form-group">
                    <label for="name">Почта</label>
                    <input type="text" class="form-control" name="email" value="{{ Auth::user()->email ?? old('email') }}">
                </div>

                <div class="form-group">
                    <label for="name">Новый пароль</label>
                    <input type="password" class="form-control" name="password">
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Обновить профиль</button>
                </div>

            </form>
        </div>
    </div>
@endsection
