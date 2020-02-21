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


            <textarea name="editor-id" id="editor-id">Редактор...</textarea>

            @push('scripts')
                <script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>

                <script>
                    CKEDITOR.replace('editor-id', {filebrowserImageBrowseUrl: '/file-manager/ckeditor'});
                </script>
            @endpush

        </div>
    </div>

    @push('scripts')
        <script>
            $.notify({
                icon: 'fal fa-check',
                title: 'Добро пожаловать',
                message: 'Вас приветствует демо версия панели управления',
            }, {
                type: 'success',
                placement: {
                    from: "top",
                    align: "right"
                },
                delay: 10000,
            });

        </script>
    @endpush
@endsection
