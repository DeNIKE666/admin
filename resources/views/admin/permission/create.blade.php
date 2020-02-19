@extends('layouts.admin')

@section('title' , 'Создать роль')

@section('content')

    <div class="card">
        <div class="card-body">
            <form action="{{ route('permission.store') }}" method="POST">

                @csrf

                <div class="form-group">
                    <label for="name">Право доступа</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Придумайте право доступа">
                </div>

                <div class="form-group">
                    <label for="title">Название</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Придумайте название">
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">СОЗДАТЬ</button>
                </div>
            </form>
        </div>
    </div>
@endsection
