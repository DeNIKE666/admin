@extends('layouts.account')

@section('content')

    <!-- panel-forget start -->
    <div class="authfy-panel panel-forgot">
        <div class="row">
            <div class="col-xs-12 col-sm-12">
                <div class="authfy-heading">
                    <h3 class="auth-title">Сбросить пароль</h3>
                    <p>Введите ниже свой адрес электронной почты, и мы вышлем вам письмо с дальнейшими инструкциями.</p>
                </div>

                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                @include('partials.cabinet.alert')

                <form method="POST" action="{{ route('password.email') }}">
                    @csrf
                    <div class="form-group wrap-input">
                        <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Почта">
                        <span class="focus-input"></span>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-lg btn-primary btn-block" type="submit">Сбросить пароль</button>
                    </div>
                </form>
            </div>
        </div>
    </div> <!-- ./panel-forgot -->
@endsection
