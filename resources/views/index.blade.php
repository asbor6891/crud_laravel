@extends('layout')

@section('content')
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4><a href="{{ route('users.create') }}" class="btn btn-warning float-end">Добавить пользователя</a></h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Имя</th>
                                    <th>Email</th>
                                    <th>Действия</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <td>{{ $user->id }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>
                                            <form action="{{ route('users.destroy', $user) }}" method="POST">
                                                <a href="{{ route('users.show', $user) }}" class="btn btn-secondary btn-sm">Просмотр</a>
                                                <a href="{{ route('users.edit', $user) }}" class="btn btn-secondary btn-sm">Редактировать</a>
                                                @csrf 
                                                @method('DELETE')
                                                <button onclick="return confirm('Удалить запись?')" class="btn btn-danger btn-sm">Удалить</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection