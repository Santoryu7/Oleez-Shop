@extends('layouts.main')
@section('content')
    <main class="blog-post-single">
        <div class="container">
            <h4 class="post-title wow fadeInUp"
                style="visibility: visible; animation-name: fadeInUp;">{{ $product->title }}</h4>
            <div class="row mb-5">
                <div class="col-md-8 blog-post-wrapper">
                    <div class="post-header wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                        <img src="{{ asset('storage/' . $product->image) }}" alt="blog post"
                             class="post-featured-image">
                    </div>
                    <div class="post-content wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                        <div class="mb-3">
                            <h2>Описание товара</h2>
                        </div>
                        <h4>{{ $product->description }}</h4>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="sidebar-widget wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                        <h3>Цена</h3>
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
                        <div class="shop-page p-0 m-0">
                            <h3>Категория</h3>
                            <h5 class="widget-title">@foreach($category as $cat) {{ $cat->title }} @endforeach</h5>
                        </div>
                    </div>
                    <div class="sidebar-widget wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                        <h5 class="widget-title">Количество товара на складе</h5>
                        <p>{{ $product->count }}</p>
                    </div>
                </div>
            </div>
            <div class="mb-5">
                <h3>Похожие товары</h3>
            </div>
            <div class="row">
                @foreach($relatedProducts as $oneProduct)
                    <div class="shop-page p-0 mr-xl-5">
                        <div class="post-header wow fadeInUp mb-3">
                            <div class="product-card">
                                <a class="text-decoration-none text-dark"
                                   href="{{ route('product.show', $oneProduct->id) }}">
                                    <div class="product-thumbnail-wrapper">
                                        <img src="{{ asset('storage/' . $oneProduct->image) }}" alt="product"
                                             class="product-thumbnail">
                                    </div>
                                    <h5 class="product-title">{{ $oneProduct->title }}</h5>
                                    <p class="product-price">{{ $oneProduct->price . ' $' }}</p>
                                    <div class="btn-wrapper">
                                        <button class="btn btn-add-to-cart">Добавить в корзину</button>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row">
                <section class="comment-list mb-3">
                    <div class="title">
                        <h2>Отзывы ({{ $comments->count() }})</h2>
                    </div>
                    @foreach($comments as $comment)
                        <div class="comment-text mt-3">
                        <span class="username">
                            <h5>
                                {{ $comment->user->name }}
                            </h5>
                            <span
                                class="text-muted float-right ml-2">{{ $comment->dateAsCarbon->diffForHumans() }}</span>
                        </span>
                            {{ $comment->message }}
                        </div>
                    @endforeach
                </section>
            </div>
            @auth()
                <div class="comment-text mb-3">
                    <form action="{{ route('product.comment.store', $product->id ) }}" method="POST">
                        @csrf
                        @method('POST')
                        <div class="form-group w-75">
                            <input name="message" type="text" class="form-control"
                                   placeholder="Оставьте свой комментарий">
                        </div>
                        <input type="submit" value="Отправить" class="btn btn-warning">
                    </form>
                </div>
            @endauth
        </div>
    </main>
@endsection
