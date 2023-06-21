@extends('layouts.main')
@section('content')

    <main class="shop-page">
        <div class="container">
            <div class="text-center mb-3">
                <h1>Корзина товаров</h1>
            </div>
            @php
                $basketCost = 0;
            @endphp
            <div class="page-header wow fadeInUp">
                <h3 class="page-title">Ваши товары</h3>
            </div>
            <div class="row">
                <table class="table table-hover text-nowrap">
                    <thead>
                    <tr>
                        <th>№</th>
                        <th>Название товара</th>
                        <th>Цена</th>
                        <th>Кол-во товара</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($property as $prop)
                        @php
                            $itemPrice = $prop->price;
                            $itemQuantity =  $prop->quantity;
                            $itemCost = $itemPrice * $itemQuantity;
                            $basketCost = $basketCost + $itemCost;
                        @endphp
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{$prop->product_title}}</td>
                            <td>{{$prop->price}} $</td>
                            <td>{{$prop->quantity}}</td>
                        </tr>
                    @endforeach
                    <tr>
                        <th colspan="4" class="text-right">Итого</th>
                        <th>{{ number_format($basketCost, 2, '.', '') }}</th>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="text-right mr-xl-5">
                <button class="btn btn-info">Купить</button>
            </div>
        </div>
    </main>
@endsection
