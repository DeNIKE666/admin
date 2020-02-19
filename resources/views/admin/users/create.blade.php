@extends('layouts.admin')

@section('title' , 'Создать пользователя')

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('user.store') }}" method="POST">

                @csrf

                <div class="form-group">
                    <label for="name">Имя пользователя</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>

                <div class="form-group">
                    <label for="password">Пароль</label>
                    <input type="text" class="form-control" id="password" name="password">
                </div>


                <div class="form-check">
                    <span>Роли</span> <br> <br>
                    @foreach ($roles as $role)
                        <div class="custom-control custom-radio">
                            <input type="radio" id="role_{{ $role->id }}" name="role" value="{{ $role->name }}" class="custom-control-input">
                            <label class="custom-control-label" for="role_{{ $role->id }}">{{ $role->title }}</label>
                        </div>
                    @endforeach

                    <hr>

                    <div id="permissions">
                        <span>Права доступа</span> <br> <br>
                        @foreach ($permissions as $permission)
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" id="permission_{{ $permission->id }}" name="permission[]" value="{{ $permission->name }}" class="custom-control-input">
                                <label class="custom-control-label" for="permission_{{ $permission->id }}">{{ $permission->title }}</label>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">СОЗДАТЬ</button>
                </div>
            </form>
        </div>
    </div>

    @push('scripts')
        <script>
            // Если выбран главный админ выбираем все права
            $("input[type=radio]").change(function ()
            {
                if ($(this).val() == 'GlAdmin') {
                    $('input[type=checkbox]').each(function (index, value) {
                        $(this).attr('checked', true);
                    });
                } else {
                    $('input[type=checkbox]').each(function (index, value) {
                        $(this).attr('checked', false);
                    });
                }
                $(this).val() == 'investor' ? $('#permissions').hide() : $('#permissions').show();
            });
        </script>
    @endpush
@endsection
