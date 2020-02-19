@extends('layouts.admin')

@section('title' , 'Панель управления')

@section('content')

    <div class="card">
        <div class="card-header">
            ИНФОРМАЦИЯ
        </div>
        <div class="card-body">

            <p>Функционал админ панели построен таким образом, что все разделы зависят напрямую от роли доступа, есть два типа ролей для доступа к админ панели это <b>Администратор</b> и <b>Главный администратор</b> а так же права доступа к разделам.</p>

            <span><b>Аккаунты с ролями для проверки</b></span>
            <br>
            <br>
            gl_admin@mail.ru:123 - имеет доступ ко всем разделам управления <i class="fal fa-check-circle"></i> <br>
            test_admin@mail.ru:123 - имеет доступ только к управлению пользователями <i class="fal fa-check-circle"></i> <br>
            test1_admin@mail.ru:123 - имеет доступ только к управлению пользователями и тарифным планам <i class="fal fa-check-circle"></i> <br>
        </div>
    </div>

    @push('scripts')
        //
    @endpush
@endsection
