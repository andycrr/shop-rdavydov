@extends('master')

@section('title', 'Корзина')
@php
/**
 * @var \App\Models\Product $product
 */
@endphp
@section('content')
    <div class="starter-template">
        <h1>Корзина</h1>
        <p>Оформление заказа</p>
        <div class="panel">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Название</th>
                    <th>Кол-во</th>
                    <th>Цена</th>
                    <th>Стоимость</th>
                </tr>
                </thead>
                <tbody>
                @foreach($order->products as $product)
                <tr>
                    <td>
                        <a href="{{route('product', ['category' => $product->category->code,'product' => $product->code])}}">
                            <img height="56px" src="http://laravel-diplom-1.rdavydov.ru/storage/products/iphone_x.jpg" alt="">
                            {{$product->name}}
                        </a>
                    </td>
                    <td><span class="badge">{{$product->pivot->count}}</span>
                        <div class="btn-group">
                            <form action="{{route('basket-add', $product->id)}}" method="post">
                                @csrf
                                <button type="submit" class="btn btn-success" href="#"><span
                                        class="glyphicon glyphicon-plus" aria-hidden="true"></span></button>
                            </form>
                            <form action="{{route('basket-remove', $product->id)}}" method="post">
                                @csrf
                                <button type="submit" class="btn btn-danger"><span
                                        class="glyphicon glyphicon-minus" aria-hidden="true"></span></button>
                            </form>
                        </div>
                    </td>
                    <td>{{$product->price}}</td>
                    <td>{{$product->getPriceForCount()}}</td>
                </tr>
                @endforeach
                <tr>
                    <td colspan="3">Общая стоимость:</td>
                    <td>{{$order->getFullPrice()}}</td>
                </tr>
                </tbody>
            </table>
            <br>
            <div class="btn-group pull-right" role="group">
                <a type="button" class="btn btn-success" href="http://laravel-diplom-1.rdavydov.ru/basket/place">Оформить заказ</a>
            </div>
        </div>
    </div>
@endsection
