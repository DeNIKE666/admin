@extends('layouts.admin')

@section('title' , 'Редактировать право доступа')

@section('content')

    <div class="card">
        <div class="card-body">
            <form action="{{ route('permission.update', $permission) }}" method="POST">

                @csrf

                <div class="form-group">
                    <label for="name">Право доступа</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $permission->name }}">
                </div>

                <div class="form-group">
                    <label for="title">Название</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ $permission->title }}">
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">РЕДАКТИРОВАТЬ</button>
                </div>
            </form>
        </div>
    </div>
@endsection
