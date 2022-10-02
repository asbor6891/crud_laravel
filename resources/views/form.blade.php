@extends('layout')

@section('content')

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4><a href="{{ route('users.index') }}" class="btn btn-danger float-end">Назад</a></h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" 
                            @if (isset($user))
                                action="{{ route('users.update', $user) }}"
                            @else
                                action="{{ route('users.store') }}"
                            @endif>
                            @csrf
                            @isset($user)
                                @method('PUT')
                            @endisset
                            <div class="mb-3">
                                <label>Имя:</label>
                                <input value="{{ isset($user) ? $user->name : null }}" type="text" name="name" class="form-control" required="">
                            </div>
                            <div class="mb-3">
                                <label>Email:</label>
                                <input value="{{ isset($user) ? $user->email : null }}" type="email" name="email" class="form-control" required="">
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-secondary">Сохранить пользователя</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection