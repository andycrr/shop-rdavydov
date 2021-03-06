@extends('layouts.master')
@php
    /**  @var \App\Models\Category $category */
@endphp
@section('title', 'Категория ' . $category->name) {{$category->products->count()}}
@section('content')
    <h1>
        {{$category->name}} {{$category->products->count()}}
    </h1>
    <p>
        {{ $category->description }}
    </p>
    <div class="row">
        @foreach($category->products as $product)
            @include('card', ['category' => $category])
        @endforeach
    </div>
@endsection
