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
                    @forelse ($permissions as $permission)
                        <tr>
                            <td>{{ $permission->title }}</td>
                            <td>
                                <div class="d-flex justify-content-around-space-evenly">
                                    <a href="{{ route('permission.edit', $permission) }}"><i class="fad fa-edit"></i></a>
                                    <a href="{{ route('permission.delete', $permission) }}"><i class="fad fa-trash-alt"></i></a>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="2" class="text-center">НЕТ СОЗДАННЫХ ПРАВ ДОСТУПА</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
                {{ $permissions->links() }}
            </div>
        </div>
    </div>
@endsection
