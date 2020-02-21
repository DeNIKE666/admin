@extends('layouts.admin')

@section('title' , 'Настройки проекта')

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('settings.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-12">

                        <div class="form-group">
                            <label for="site_name">Название сайта :</label>
                            <input id="site_name" name="site_name" type="text" class="form-control" value="{{ $settings->site_name ?? 'Не задано' }}">
                        </div>

                        <div class="form-group">
                            <label for="site_description">Описание сайта :</label>
                            <input id="site_description" name="site_description" type="text" class="form-control" value="{{ $settings->site_description ?? 'Не задано' }}">
                        </div>

                        <div class="form-group">
                            <label for="site_keywords">Ключевые слова :</label>
                            <input id="site_keywords" name="site_keywords" type="text" class="form-control" value="{{ $settings->site_keywords ?? 'Не задано' }}">
                        </div>

                        <div class="form-group">

                            <div class="row">
                                <div class="col-md-12">
                                    <label for="site_keywords">Логотип :</label>
                                    <div class="input-group">
                                        <input type="text" id="image_label" class="form-control" name="image" aria-label="Image" aria-describedby="button-image">
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-secondary" type="button" id="button-image">Выбор</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="admin_notify">Админ уведомление панели :</label>
                            <input id="admin_notify" name="admin_notify" type="text" class="form-control" value="{{ $settings->admin_notify ?? 'Не задано' }}">
                        </div>

                        <div class="form-group">
                            <label for="cabinet_notify">Кабинет уведомление панели :</label>
                            <input id="cabinet_notify" name="cabinet_notify" type="text" class="form-control" value="{{ $settings->cabinet_notify ?? 'Не задано' }}">
                        </div>

                        <div class="form-group">
                            <label for="cabinet_notify">Google Anlytics КОД :</label>
                            <textarea id="cabinet_notify" name="google_analytics" class="form-control">{{ $settings->google_analytics ?? 'Не задано' }}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="user_role_name">Имя роли для кабинета :</label>
                            <input id="user_role_name" name="user_role_name" type="text" class="form-control" value="{{ $settings->user_role_name ?? 'Не задано' }}">
                        </div>

                        <div class="form-group">
                            <label for="admin_role_name">Имя роли для админ панели :</label>
                            <input id="admin_role_name" name="admin_role_name" type="text" class="form-control" value="{{ $settings->admin_role_name ?? 'Не задано' }}">
                        </div>

                        <div class="form-group">
                            <label for="site_active">Активность сайта (Да/Нет) :</label>
                            <input id="site_active" name="site_active" type="text" class="form-control" value="{{ $settings->site_active ?? 'Не задано' }}">
                        </div>

                        <div class="form-group">
                            <label for="smtp_host">SMTP Host :</label>
                            <input id="smtp_host" name="smtp_host" type="text" class="form-control" value="{{ $settings->smtp_host ?? 'Не задано' }}">
                        </div>

                        <div class="form-group">
                            <label for="smtp_port">SMTP Port :</label>
                            <input id="smtp_port" name="smtp_port" type="text" class="form-control" value="{{ $settings->smtp_port ?? 'Не задано' }}">
                        </div>

                        <div class="form-group">
                            <label for="smtp_username">SMTP Username :</label>
                            <input id="smtp_username" name="smtp_username" type="text" class="form-control" value="{{ $settings->smtp_username ?? 'Не задано' }}">
                        </div>

                        <div class="form-group">
                            <label for="smtp_password">SMTP Password :</label>
                            <input id="smtp_password" name="smtp_password" type="text" class="form-control" value="{{ $settings->smtp_password ?? 'Не задано' }}">
                        </div>

                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <button class="btn btn-outline-primary" type="submit"> РЕДАКТИРОВАТЬ </button>
                        </div>
                    </div>


                </div>
            </form>
        </div>
    </div>

    @push('scripts')
        <script>
            document.addEventListener("DOMContentLoaded", function() {

                document.getElementById('button-image').addEventListener('click', (event) => {
                    event.preventDefault();

                    window.open('/file-manager/fm-button', 'fm', 'width=1400,height=800');
                });
            });

            // set file link
            function fmSetLink($url) {
                document.getElementById('image_label').value = $url;
            }
        </script>
    @endpush
@endsection
