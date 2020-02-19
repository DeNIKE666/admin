@extends('layouts.admin')

@section('title' , 'Планы')

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="col-md-12">
                <a class="btn btn-outline-primary mb-3" href="{{ route('plans.create') }}">СОЗДАТЬ ПЛАН ДЕПОЗИТА</a>
                <table class="table table-head-bg-primary">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Название</th>
                        <th scope="col">Дни депозита</th>
                        <th scope="col">Процент</th>
                        <th scope="col">Статус</th>
                        <th scope="col"></th>
                    </tr>
                    </thead>
                    <tbody>

                    @forelse ($plans as $planItem)
                        <tr>
                            <td>{{ $planItem->id }}</td>
                            <td>{{ $planItem->title }}</td>
                            <td>{{ $planItem->days }}</td>
                            <td>{{ $planItem->percent }}</td>
                            <td>{{ $planItem->status == 1 ? 'активен' : 'не активен' }}</td>
                            <td>
                                <div class="d-flex justify-content-around-space-evenly">
                                    <a href="{{ route('plan.edit', $planItem) }}"><i class="fad fa-edit"></i></a>
                                    <a href="{{ route('plan.delete', $planItem) }}"><i class="fad fa-trash-alt"></i></a>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center">НЕТ СОЗДАННЫХ ПЛАНОВ</td>
                        </tr>

                    @endforelse
                    </tbody>
                </table>
                {{ $plans->links() }}
            </div>
        </div>
    </div>
@endsection
