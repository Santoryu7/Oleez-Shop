@extends('admin.layouts.main')
@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Добавить пользователя</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.main.index') }}">Главная</a></li>
                            <li class="breadcrumb-item active">Добавление пользователя</li>
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
                        <form action="{{ route('admin.user.store') }}" class="w-25" method="POST">
                            @csrf
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" placeholder="Имя пользователя">
                            </div>
                                @error('name')
                                <div class="mb-3 text-danger">{{ $message }}</div>
                                @enderror
                            <div class="form-group">
                                <input type="text" class="form-control" name="email" placeholder="Email">
                            </div>
                                @error('email')
                                <div class="mb-3 text-danger">{{ $message }}</div>
                                @enderror
                            <div class="form-group">
                                <input type="text" class="form-control" name="password" placeholder="Пароль">
                            </div>
                                @error('password')
                                <div class="mb-3 text-danger">{{ $message }}</div>
                                @enderror
                            <div class="form-group">
                                <label for="category_id">Выберите роль</label>
                                <select class="form-select" name="role">
                                    @foreach($roles as $id => $role)
                                        <option {{ old('role_id') == $id ? ' selected': '' }}
                                                value="{{ $id }}">{{ $role }}</option>
                                    @endforeach
                                </select>
                            </div>
                            @error('role')
                            <div class="mb-3 text-danger">{{ $message }}</div>
                            @enderror
                            <input type="submit" class="btn btn-primary" value="Добавить">
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
