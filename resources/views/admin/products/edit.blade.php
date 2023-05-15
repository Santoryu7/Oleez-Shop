@extends('admin.layouts.main')
@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Редактировать товар</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard v1</li>
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
                        <form action="{{ route('admin.product.update', $product->id) }}" class="w-25" method="POST">
                            @csrf
                            @method('Patch')
                            <div class="form-group">
                                <input type="text" class="form-control" name="title" placeholder="Название товара"
                                       value="{{ $product->title }}">
                            </div>
                            @error('title')
                            <div class="mb-3 text-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group">
                                <textarea class="form-control" name="description"
                                          placeholder="описание">{{ $product->descriprion }}</textarea>
                            </div>
                            @error('description')
                            <div class="mb-3 text-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group">
                                <input type="text" value="{{ $product->price }}" class="form-control" name="price"
                                       placeholder="Цена">
                            </div>
                            @error('price')
                            <div class="mb-3 text-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group">
                                <input type="text" value="{{ $product->count }}" class="form-control" name="count"
                                       placeholder="Кол-во на складе">
                            </div>
                            @error('count')
                            <div class="mb-3 text-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group">
                                <input type="text" value="{{ $product->category_id }}" class="form-control"
                                       name="category_id" placeholder="Категория">
                            </div>
                            @error('category_id')
                            <div class="mb-3 text-danger">{{ $message }}</div>
                            @enderror
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
