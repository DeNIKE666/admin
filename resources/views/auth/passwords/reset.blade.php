@extends('layouts.account')

@section('content')
    <div class="authfy-panel panel-forgot">
        <div class="row">
            <div class="col-xs-12 col-sm-12">
                <div class="authfy-heading">
                    <h3 class="auth-title">Уставновить новый пароль</h3>
                    <p>Введите новый пароль и подтвердите его</p>
                </div>

                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                @include('partials.cabinet.alert')

                <form method="POST" action="{{ route('password.request') }}">
                    @csrf

                    <input type="hidden" name="token" value="{{ $token }}">

                    <div class="form-group wrap-input">
                        <input type="email" class="form-control" name="email" value="{{ $email ?? old('email') }}"
                               required>
                        <span class="focus-input"></span>
                    </div>

                    <div class="form-group wrap-input">
                        <input type="password" class="form-control" name="password" placeholder="Придумайте пароль" required>
                        <span class="focus-input"></span>
                    </div>

                    <div class="form-group wrap-input">
                        <input type="password" class="form-control" name="password_confirmation" placeholder="Повторите пароль"  required>
                        <span class="focus-input"></span>
                    </div>

                    <div class="form-group">
                        <button class="btn btn-lg btn-primary btn-block" type="submit">Сбросить пароль</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

@endsection
