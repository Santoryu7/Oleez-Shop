@extends('admin.layouts.main')
@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Редактировать пользователя</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.main.index') }}">Главная</a></li>
                            <li class="breadcrumb-item active">{{ $user->name }}</li>
                            <li class="breadcrumb-item active">Редактирование пользователя</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-12">
                        <form action="{{ route('admin.user.update', $user->id) }}" class="w-25" method="POST">
                            @csrf
                            @method('Patch')
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" placeholder="Имя пользователя"
                                       value="{{ $user->name }}">
                            </div>
                            @error('name')
                            <div class="mb-3 text-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group">
                                <input type="text" class="form-control" name="email" placeholder="Email"
                                       value="{{ $user->email }}">
                            </div>
                            @error('email')
                            <div class="mb-3 text-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group">
                                <label for="category_id">Выберите роль</label>
                                <select class="form-select" name="role">
                                    @foreach($roles as $id => $role)
                                        <option {{ $user->role == $id ? ' selected': '' }}
                                                value="{{ $id }}">{{ $role }}</option>
                                    @endforeach
                                </select>
                            </div>
                            @error('role')
                            <div class="mb-3 text-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group">
                                <input type="hidden" name="user_id" value="{{ $user->id }}">
                            </div>
                            <input type="submit" class="btn btn-primary" value="Редактировать">
                        </form>
                    </div>
                    <!-- ./col -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
