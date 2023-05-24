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
                            <li class="breadcrumb-item"><a href="{{ route('admin.main.index') }}">Главная</a></li>
                            <li class="breadcrumb-item active">{{ $product->title }}</li>
                            <li class="breadcrumb-item active">Редактирование товара</li>
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
                        <form action="{{ route('admin.product.update', $product->id) }}" class="w-25" method="POST" enctype="multipart/form-data">
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
                                          placeholder="описание">{{ $product->description }}</textarea>
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
                                <div class="w-25">
                                    <img src="{{ asset('storage/' . $product->image) }}" alt="picture" class="w-100">
                                </div>
                                <label for="formFile" class="form-label">Выбор изображения</label>
                                <input class="form-control" type="file" id="formFile" name="image">
                            </div>
                            @error('image')
                            <div class="mb-3 text-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group">
                                <label for="category_id">Выбор категории</label>
                                <select class="form-select" id="category" name="category_id">
                                    @foreach($categories as $category)
                                        <option
                                            {{ $category->id == $product->category_id ? ' selected' : ''}}
                                            value="{{ $category->id }}">{{ $category->title }}</option>
                                    @endforeach
                                </select>
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
