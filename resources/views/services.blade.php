@extends('layouts.page-layouts')

@section('title', 'Услуги')

@section('content')
    <main class="main">

        <section>
            <div class="block-6">
                <div class="container-2">
                    <h2 class="block-two__title">Услуги:</h2>
                    <div class="products__wrapper">
                        @foreach ($products as $product)
                            <div class="products__card df">
                                <img width="200px" height="200px" src="{{ Storage::url($product->img) }}"
                                    style="margin: 10px 37px; height: 200px; border: 0;">
                                <div class="products__content">
                                    <div class="products__title">{{ $product->title }}</div>
                                    <div class="products__description">{{ $product->description }}
                                    </div>
                                    <a href="">
                                        <div class="products__btn">Подробнее...</div>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
        </section>
    </main>
@endsection
