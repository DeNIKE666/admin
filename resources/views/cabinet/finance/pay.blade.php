@extends('layouts.cabinet')

@section('title', 'Пополнение баланса')

@section('content')
    <div class="card">
        <div class="card-body">

            <button type="button" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Tooltip on top">
                Tooltip on top
            </button>

            <form action="">
                <div class="form-group">
                    <label for="amount">Сумма</label>
                    <input type="text" class="form-control" id="amount" placeholder="Введите сумму которую хотите пополнить">
                </div>
                <div class="form-group">
                    <button class="btn btn-primary">
                        <span class="btn-label"><i class="fal fa-paper-plane"></i></span>
                        Пополнить
                    </button>
                </div>
            </form>
        </div>
    </div>

@endsection
