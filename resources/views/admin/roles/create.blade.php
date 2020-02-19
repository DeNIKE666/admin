@extends('layouts.admin')

@section('title' , 'Создать роль')

@section('content')

    <div class="card">
        <div class="card-body">
            <form action="{{ route('role.store') }}" method="POST">

                @csrf

                <div class="form-group">
                    <label for="name">Роль</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Придумайте название роли">
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">СОЗДАТЬ</button>
                </div>
            </form>
        </div>
    </div>
@endsection
