@extends('layouts.admin')

@section('title' , 'Все пользователи')

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="col-md-12">

                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Имя</th>
                        <th scope="col">Email</th>
                        <th scope="col">Роль</th>
                        <th width="100" scope="col">Действия</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse ($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->getRoleNames()[0] }}</td>
                            <td>
                                <div class="d-flex justify-content-around-space-evenly">
                                    <a href="{{ route('user.edit', $user) }}"><i class="fad fa-edit"></i></a>
                                    <a href="{{ route('user.delete', $user) }}"><i class="fad fa-trash-alt"></i></a>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center">НЕТ ПОЛЬЗОВАТЕЛЕЙ</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
                {{ $users->links() }}
            </div>
        </div>
    </div>
@endsection
