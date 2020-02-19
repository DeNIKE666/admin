@extends('layouts.account')

@section('title', 'Регистрация')

@section('content')
    <!-- panel-signup start -->
    <div class="authfy-panel panel-signup text-center">
        <div class="row">
            <div class="col-xs-12 col-sm-12">
                <div class="authfy-heading">
                    <h3 class="auth-title">Создать новый аккаунт</h3>
                </div>

                @include('partials.cabinet.alert')

                <form class="signupForm" action="{{ route('register') }}" method="POST">
                    @csrf
                    <div class="form-group wrap-input">
                        <input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Имя">
                        <span class="focus-input"></span>
                    </div>
                    <div class="form-group wrap-input">
                        <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Почта">
                        <span class="focus-input"></span>
                    </div>
                    <div class="form-group wrap-input">
                        <div class="pwdMask">
                            <input type="password" class="form-control" name="password" placeholder="Пароль">
                            <span class="focus-input"></span>
                            <span class="fa fa-eye-slash pwd-toggle"></span>
                        </div>
                    </div>
                    <div class="form-group wrap-input">
                        <div class="pwdMask">
                            <input type="password" class="form-control" name="password_confirmation" placeholder="Повторите пароль">
                            <span class="focus-input"></span>
                            <span class="fa fa-eye-slash pwd-toggle"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-lg btn-primary btn-block" type="submit">Создать аккаунт</button>
                    </div>
                </form>
                <a href="{{ route('login') }}">Войти</a>
            </div>
        </div>
    </div> <!-- ./panel-signup -->
@endsection
