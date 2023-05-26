@extends('layouts.main')
@section('content')
    <main class="blog-post-single">
        <div class="container">
            <h4 class="post-title wow fadeInUp"
                style="visibility: visible; animation-name: fadeInUp;">{{ $product->category_id }}</h4>
            <div class="row mb-5">
                <div class="col-md-8 blog-post-wrapper">
                    <div class="post-header wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                        <img src="{{ asset('storage/' . $product->image) }}" alt="blog post"
                             class="post-featured-image">
                    </div>
                    <div class="post-content wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                        <h4>Описание товара</h4>
                        <p>{{ $product->description }}</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="sidebar-widget wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                        <h5 class="widget-title">{{ $product->title }}</h5>
                        <div class="widget-content">
                            <div>
                                {{ '$ ' . $product->price }}
                            </div>
                        </div>
                    </div>
                    <div class="sidebar-widget wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                        <div class="shop-page p-0 m-0">
                            <div class="product-card m-5">
                                <div class="btn-wrapper">
                                    <button class="btn btn-add-to-cart">Добавить в корзину</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar-widget wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                        <h5 class="widget-title">Количество товара на складе</h5>
                        <p class="post-tag">{{ $product->count }}</p>
                    </div>
                </div>
            </div>
            <div class="mb-5">
                <h3>Похожие товары</h3>
            </div>
            <div class="row">
                @foreach($relatedProducts as $product)
                    <div class="shop-page mr-xl-5">
                        <div class="post-header wow fadeInUp mb-3">
                            <div class="product-card">
                                <a href="{{ route('product.show', $product->id) }}">
                                    <div class="product-thumbnail-wrapper">
                                        <img src="{{ asset('storage/' . $product->image) }}" alt="product"
                                             class="product-thumbnail">
                                    </div>
                                    <h5 class="product-title">{{ $product->title }}</h5>
                                    <p class="product-price">{{ $product->price . ' $' }}</p>
                                    <div class="btn-wrapper">
                                        <button class="btn btn-add-to-cart">Добавить в корзину</button>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
        </div>
    </main>
@endsection
