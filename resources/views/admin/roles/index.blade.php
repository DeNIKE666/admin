@extends('layouts.admin')

@section('title' , 'Все роли')

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="col-md-12">
                <table class="table table-head-bg-primary">
                    <thead>
                    <tr>
                        <th scope="col">Название</th>
                        <th width="100" scope="col">Действия</th>
                    </tr>
                    </thead>
                    <tbody>

                    @forelse ($roles as $role)
                        <tr>
                            <td>{{ $role->title }}</td>
                            <td>
                                <div class="d-flex justify-content-around-space-evenly">
                                    <a href="{{ route('role.edit', $role) }}"><i class="fad fa-edit"></i></a>
                                    <a href="{{ route('role.delete', $role) }}"><i class="fad fa-trash-alt"></i></a>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center">НЕТ СОЗДАННЫХ РОЛЕЙ</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
                {{ $roles->links() }}
            </div>
        </div>
    </div>
@endsection
