@extends('layouts.main')
@section('content')

    <main class="shop-page">
        <div class="container">
            <div class="page-header wow fadeInUp">
                <h2 class="page-title">Shop</h2>
                <p class="result-count">Showing 12 results</p>
            </div>
            <div class="row">
                @foreach($products as $product)
                <div class="col-md-4 product-card wow fadeInUp">
                    <div class="product-thumbnail-wrapper">
                        <img src="{{ asset('storage/' . $product->image) }}" alt="product" class="product-thumbnail">
                    </div>
                    <h5 class="product-title">{{ $product->title }}</h5>
                    <p class="product-price">{{ $product->price }}</p>
                    <div class="btn-wrapper"> <button class="btn btn-add-to-cart">Добавить в корзину</button></div>
                </div>
                @endforeach
            </div>
            <div class="row">
                <div class="m-auto">
                    {{ $products->links() }}
                </div>
            </div>
{{--                <div class="col-md-4 product-card wow fadeInUp">--}}
{{--                    <div class="product-thumbnail-wrapper">--}}
{{--                        <img src="{{ asset('assets/images/Shop/shop@2x.jpg') }}" alt="product" class="product-thumbnail">--}}
{{--                    </div>--}}
{{--                    <h5 class="product-title">Flying Ninja</h5>--}}
{{--                    <p class="product-price">£15,00 <del>£12,00</del></p>--}}
{{--                    <div class="btn-wrapper"> <button class="btn btn-add-to-cart">Add to Cart</button></div>--}}
{{--                </div>--}}
{{--                <div class="col-md-4 product-card wow fadeInUp">--}}
{{--                    <div class="product-thumbnail-wrapper">--}}
{{--                        <img src="{{ asset('assets/images/Shop/shop@2x.jpg') }}" alt="product" class="product-thumbnail">--}}
{{--                    </div>--}}
{{--                    <h5 class="product-title">Flying Ninja</h5>--}}
{{--                    <p class="product-price">£15,00 <del>£12,00</del></p>--}}
{{--                    <div class="btn-wrapper"> <button class="btn btn-add-to-cart">Add to Cart</button></div>--}}
{{--                </div>--}}
{{--                <div class="col-md-4 product-card wow fadeInUp">--}}
{{--                    <div class="product-thumbnail-wrapper">--}}
{{--                        <img src="{{ asset('assets/images/Shop/shop@2x.jpg') }}" alt="product" class="product-thumbnail">--}}
{{--                    </div>--}}
{{--                    <h5 class="product-title">Flying Ninja</h5>--}}
{{--                    <p class="product-price">£15,00 <del>£12,00</del></p>--}}
{{--                    <div class="btn-wrapper"> <button class="btn btn-add-to-cart">Add to Cart</button></div>--}}
{{--                </div>--}}
{{--                <div class="col-md-4 product-card wow fadeInUp">--}}
{{--                    <div class="product-thumbnail-wrapper">--}}
{{--                        <img src="{{ asset('assets/images/Shop/shop@2x.jpg') }}" alt="product" class="product-thumbnail">--}}
{{--                    </div>--}}
{{--                    <h5 class="product-title">Flying Ninja</h5>--}}
{{--                    <p class="product-price">£15,00 <del>£12,00</del></p>--}}
{{--                    <div class="btn-wrapper"> <button class="btn btn-add-to-cart">Add to Cart</button></div>--}}
{{--                </div>--}}
{{--                <div class="col-md-4 product-card wow fadeInUp">--}}
{{--                    <div class="product-thumbnail-wrapper">--}}
{{--                        <img src="{{ asset('assets/images/Shop/shop@2x.jpg') }}" alt="product" class="product-thumbnail">--}}
{{--                    </div>--}}
{{--                    <h5 class="product-title">Flying Ninja</h5>--}}
{{--                    <p class="product-price">£15,00 <del>£12,00</del></p>--}}
{{--                    <div class="btn-wrapper"> <button class="btn btn-add-to-cart">Add to Cart</button></div>--}}
{{--                </div>--}}
{{--                <div class="col-md-4 product-card wow fadeInUp">--}}
{{--                    <div class="product-thumbnail-wrapper">--}}
{{--                        <img src="{{ asset('assets/images/Shop/shop@2x.jpg') }}" alt="product" class="product-thumbnail">--}}
{{--                    </div>--}}
{{--                    <h5 class="product-title">Flying Ninja</h5>--}}
{{--                    <p class="product-price">£15,00 <del>£12,00</del></p>--}}
{{--                    <div class="btn-wrapper"> <button class="btn btn-add-to-cart">Add to Cart</button></div>--}}
{{--                </div>--}}
{{--                <div class="col-md-4 product-card wow fadeInUp">--}}
{{--                    <div class="product-thumbnail-wrapper">--}}
{{--                        <img src="{{ asset('assets/images/Shop/shop@2x.jpg') }}" alt="product" class="product-thumbnail">--}}
{{--                    </div>--}}
{{--                    <h5 class="product-title">Flying Ninja</h5>--}}
{{--                    <p class="product-price">£15,00 <del>£12,00</del></p>--}}
{{--                    <div class="btn-wrapper"> <button class="btn btn-add-to-cart">Add to Cart</button></div>--}}
{{--                </div>--}}
{{--                <div class="col-md-4 product-card wow fadeInUp">--}}
{{--                    <div class="product-thumbnail-wrapper">--}}
{{--                        <img src="{{ asset('assets/images/Shop/shop@2x.jpg') }}" alt="product" class="product-thumbnail">--}}
{{--                    </div>--}}
{{--                    <h5 class="product-title">Flying Ninja</h5>--}}
{{--                    <p class="product-price">£15,00 <del>£12,00</del></p>--}}
{{--                    <div class="btn-wrapper"> <button class="btn btn-add-to-cart">Add to Cart</button></div>--}}
{{--                </div>--}}
            </div>
        </div>
    </main>
@endsection
