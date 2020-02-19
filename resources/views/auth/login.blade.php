@extends('layouts.account')

@section('title', 'Авторизация')

@section('content')
    <!-- panel-login start -->
    <div class="authfy-panel panel-login text-center active">
        <div class="authfy-heading">
            <h3 class="auth-title">Войдите в свой аккаунт</h3>
            <p>У вас нет аккаунта? <a href="{{ route('register') }}">Создать аккаунт!</a></p>
        </div>

        @include('partials.cabinet.alert')

        <div class="row">
            <div class="col-xs-12 col-sm-12">
                <form name="loginForm" class="loginForm" action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="form-group wrap-input">
                        <input type="email" class="form-control" name="email" placeholder="Почта" value="{{ old('email') }}" required autocomplete="email">
                    </div>
                    <div class="form-group wrap-input">
                        <div class="pwdMask">
                            <input type="password" class="form-control password" name="password" placeholder="Пароль">
                            <span class="focus-input"></span>
                            <span class="fa fa-eye-slash pwd-toggle"></span>
                        </div>
                    </div>
                    <div class="row remember-row">
                        <div class="col-xs-6 col-sm-6">
                            <label class="checkbox text-left">
                                <input type="checkbox" value="remember-me"><span
                                    class="label-text">Запомнить меня</span>
                            </label>
                        </div>
                        <div class="col-xs-6 col-sm-6">
                            <p class="forgotPwd">
                                <a href="{{ route('password.request') }}">Забыли пароль?</a>
                            </p>
                        </div>
                    </div> <!-- ./remember-row -->
                    <div class="form-group">
                        <button class="btn btn-lg btn-primary btn-block" type="submit">Войти</button>
                    </div>
                </form>
            </div>
        </div>
    </div> <!-- ./panel-login -->
@endsection
