@extends('layouts.admin')

@section('title' , 'Изменить роль')

@section('content')

    <div class="card">
        <div class="card-body">
            <form action="{{ route('role.update', $role) }}" method="POST">

                @csrf

                <div class="form-group">
                    <label for="name">Имя роли</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $role->name }}">
                </div>

                <div class="form-group">
                    <label for="title">Название</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ $role->title }}">
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">РЕДАКТИРОВАТЬ</button>
                </div>
            </form>
        </div>
    </div>
@endsection
