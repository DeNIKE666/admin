@extends('layouts.admin')

@section('title' , 'Создание плана')

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('plans.store') }}" method="POST">
                @CSRF
                <div class="form-group">
                    <label for="title">Название</label>
                    <input type="text" class="form-control" name="title" id="title" placeholder="План 1">
                </div>

                <div class="form-group">
                    <label for="days">Дни вклада</label>
                    <input class="form-control" name="days" id="days" placeholder="1">
                </div>

                <div class="form-group">
                    <label for="percent">Процент вклада</label>
                    <input class="form-control" name="percent" id="percent" placeholder="2.5">
                </div>

                <div class="form-check">
                    <label class="form-radio-label">
                        <input class="form-radio-input" type="radio" name="status" value="enable" checked="">
                        <span class="form-radio-sign">АКТИВЕН</span>
                    </label>
                    <label class="form-radio-label ml-3">
                        <input class="form-radio-input" type="radio" name="status" value="disable">
                        <span class="form-radio-sign">НЕ АКТИВЕН</span>
                    </label>
                </div>

                <div class="form-group">
                    <button class="btn btn-outline-primary" type="submit">СОЗДАТЬ</button>
                </div>
            </form>
        </div>
    </div>
@endsection
