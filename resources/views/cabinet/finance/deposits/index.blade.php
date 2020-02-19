@extends('layouts.cabinet')

@section('title', 'Мои депозиты')

@section('content')
    <div class="card">
        <div class="card-body">

            <a class="btn btn-outline-primary mb-3" href="{{ route('deposits.create') }}">СОЗДАТЬ ДЕПОЗИТ</a>

            <table class="table table-head-bg-primary">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Название</th>
                    <th scope="col">Дни депозита</th>
                    <th scope="col">Процент</th>
                    <th scope="col">Сумма</th>
                    <th scope="col">Прибыль</th>
                    <th scope="col">Дата создания</th>
                    <th scope="col">Дата Окончания</th>
                    <th scope="col">Статус</th>
                </tr>
                </thead>
                <tbody>

                @forelse ($deposits as $deposit)
                    <tr>
                        <td>{{ $deposit->id }}</td>
                        <td>{{ $deposit->plan->title }}</td>
                        <td>{{ $deposit->plan->days }}</td>
                        <td>{{ $deposit->plan->percent }}</td>
                        <td>{{ $deposit->amount }}</td>
                        <td>{{ $deposit->amount * $deposit->plan->percent / 100 }}</td>
                        <td>{{ $deposit->created_at }}</td>
                        <td>{{ $deposit->created_at->addDays($deposit->plan->days)->isoFormat('D MMMM YYYY в h:mm:s')}}</td>
                        <td>{{ $deposit->status == 1 ? 'активно' : 'завершено' }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="9" class="text-center">НЕТ СОЗДАННЫХ ДЕПОЗИТОВ</td>
                    </tr>

                @endforelse
                </tbody>
            </table>

            {{ $deposits->links() }}
        </div>
    </div>
@endsection
