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
                        <th>Удаление</th>
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
                            <td>
                                <form action="{{ route('cart.delete', $prop->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="border-0 bg-transparent">
                                        <img width="20" height="20" src="{{ asset('img/trash-solid.svg') }}" alt="">
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    <tr>
                        <th colspan="4" class="text-right">Итого</th>
                        <th>{{ number_format($basketCost, 2, '.', '') }} $</th>
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
