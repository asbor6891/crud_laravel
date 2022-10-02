@extends('layout')

@section('content')

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <!-- <div class="card-header">
                        <h4><a href="{{ route('users.index') }}" class="btn btn-danger float-end">Назад</a></h4>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label>Имя:</label>
                            <input value="{{ isset($user) ? $user->name : null }}" type="text" name="name" class="form-control" disabled>
                        </div>
                        <div class="mb-3">
                            <label>Email:</label>
                            <input value="{{ isset($user) ? $user->email : null }}" type="email" name="email" class="form-control" disabled>
                        </div>
                    </div> -->

                    <div class="card-header">
                        <h4><a href="{{ route('users.index') }}" class="btn btn-danger float-end">Назад</a></h4>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label>Имя:</label>
                            <input value="{{ isset($user) ? $user->name : null }}" class="form-control" disabled>
                        </div>
                        <div class="mb-3">
                            <label>Email:</label>
                            <input value="{{ isset($user) ? $user->email : null }}" class="form-control" disabled>
                        </div>
                        <div class="mb-3">
                            <label>Дата создания:</label>
                            <input value="{{ isset($user) ? $user->created_at->format('d/m/y H:i:s') : null }}" class="form-control" disabled>
                        </div>
                        <div class="mb-3">
                            <label>Дата обновления:</label>
                            <input value="{{ isset($user) ? $user->updated_at->format('d/m/y H:i:s') : null }}" class="form-control" disabled>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection