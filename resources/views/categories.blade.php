@extends('layouts.master')
@section('title', 'Все категории')
@php
    /**  @var \App\Models\Category $category */
@endphp
@section('content')
    @isset($categories)
        @foreach($categories as $category)
            <div class="panel">
                <a href="{{route('category', $category->code)}}">
                    <img src="http://internet-shop.tmweb.ru/storage/categories/mobile.jpg" alt="">
                    <h2>{{$category->name}}</h2>
                </a>
                <p>
                    {{$category->description}}
                </p>
            </div>
        @endforeach
    @endisset
    {{--<div class="panel">
        <a href="/portable">
            <img src="http://internet-shop.tmweb.ru/storage/categories/portable.jpg">
            <h2>Портативная техника</h2>
        </a>
        <p>
            Раздел с портативной техникой.
        </p>
    </div>
    <div class="panel">
        <a href="/appliances">
            <img src="http://internet-shop.tmweb.ru/storage/categories/appliance.jpg">
            <h2>Бытовая техника</h2>
        </a>
        <p>
            Раздел с бытовой техникой
        </p>
    </div>--}}
@endsection
