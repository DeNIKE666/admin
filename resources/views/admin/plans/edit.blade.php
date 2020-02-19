@extends('layouts.admin')

@section('title' , 'Редактирование ' . $plan->title)

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('plan.update', $plan) }}" method="POST">
                @CSRF
                <div class="form-group">
                    <label for="title">Название</label>
                    <input type="text" class="form-control" name="title" id="title" value="{{ $plan->title }}">
                </div>

                <div class="form-group">
                    <label for="days">Дни вклада</label>
                    <input class="form-control" name="days" id="days"value="{{ $plan->days }}">
                </div>

                <div class="form-group">
                    <label for="percent">Процент вклада</label>
                    <input class="form-control" name="percent" id="percent" value="{{ $plan->percent }}">
                </div>

                <div class="form-check">
                    <label class="form-radio-label">
                        <input class="form-radio-input" type="radio" name="status" value="enable" @if ($plan->status == 1) checked="" @endif>
                        <span class="form-radio-sign">АКТИВЕН</span>
                    </label>
                    <label class="form-radio-label ml-3">
                        <input class="form-radio-input" type="radio" name="status" value="disable" @if ($plan->status == 0) checked="" @endif >
                        <span class="form-radio-sign">НЕ АКТИВЕН</span>
                    </label>
                </div>

                <div class="form-group">
                    <button class="btn btn-outline-primary" type="submit">ИЗМЕНИТЬ</button>
                </div>
            </form>
        </div>
    </div>
@endsection
