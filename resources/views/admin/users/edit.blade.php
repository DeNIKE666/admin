@extends('layouts.admin')

@section('title' , 'Создать пользователя')

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('user.update', $user) }}" method="POST">

                @csrf

                <div class="form-group">
                    <label for="name">Имя пользователя</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}">
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}">
                </div>

                <div class="form-group">
                    <label for="password">Пароль</label>
                    <input type="password" class="form-control" id="password" name="password" >
                </div>

                <div class="form-check">

                    @can('roles')
                        <span>Роли</span> <br> <br>
                        @foreach ($roles as $role)
                            <div class="custom-control custom-radio">
                                <input type="radio" id="role_{{ $role->name }}" name="role" value="{{ $role->name }}" class="custom-control-input">
                                <label class="custom-control-label" for="role_{{ $role->name }}">{{ $role->title }}</label>
                            </div>
                        @endforeach
                        <hr>
                    @endcan

                    @can('permissions')
                        <div id="permissions">
                            <span>Права доступа к разделам</span> <br> <br>
                            @forelse ($permissions as $permission)
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" id="permission_{{ $permission->name }}" name="permission[]" value="{{ $permission->name }}" class="custom-control-input">
                                    <label class="custom-control-label" for="permission_{{ $permission->name }}">{{ $permission->title }}</label>
                                </div>
                            @empty
                                <b>НЕ CОЗДАНЫ ПРАВА ДОСТУПА</b>
                            @endforelse
                        </div>
                    @endcan

                </div>


                <div class="form-group">
                    <button type="submit" class="btn btn-primary">РЕДАКТИРОВАТЬ</button>
                </div>

            </form>
        </div>
    </div>

        @push('scripts')
            <script>
                $(function () {
                    // Если выбран главный админ выбираем все права

                    $("input[type=radio]").change(function ()
                    {
                        if ($(this).val() == 'GlAdmin') {
                            $('input[type=checkbox]').each(function (index, value) {
                                $(this).attr('checked', true)
                            });
                        } else {
                            $('input[type=checkbox]').each(function (index, value) {
                                $(this).attr('checked', false);
                            });
                        }
                        $(this).val() == 'investor' ? $('#permissions').hide() : $('#permissions').show();
                    });

                    $.ajax({
                        url: '/ajax/permissions?id={{ $user->id }}',
                        success: function (data)
                        {
                            // Устанавливаем роль Checked
                            $('input[id=role_' + data.currentRoles.name).attr('checked', true);

                            // Покрасим в активные все права которые имеет пользователь
                            $.each(data.currentPermissions, function (index, value) {
                                $('input[id=permission_' + value).attr('checked', true);
                            });

                        }
                    });
                })
            </script>
        @endpush
@endsection
