@extends('layouts.app')
@section('title', 'Услуги')
@section('content')
    <h1 class="display-4 container">Услуги:</h1>
    <table style="table-layout: fixed; width:100%; " class="table table-dark table-striped posts-table mt-4">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Изображение</th>
                <th scope="col">Название</th>
                <th scope="col">Описание</th>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @forelse ($products as $product)
                <tr>
                    <th scope="">{{ $product->id }}</th>
                    <th scope=""><img width="170px" src="{{ Storage::url($product->img) }}" alt=""></th>
                    <td>{{ $product->title }}</td>
                    <td style="word-wrap:break-word;" colspan="2">{{ $product->description }}</td>
                    <td colspan="3" nowrap style="text-align:center">
                        <a class="btn btn-success" href="{{ route('services') }}">Показкать</a>
                        <a class="btn btn-primary" href="{{ route('admin.product.edit', $product) }}">Редактировать</a>
                        <form method="POST" enctype="multipart/form-data" style="display: inline-block"
                            action="{{ route('admin.product.destroy', $product) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Удалить</button>
                        </form>
                    </td>
                </tr>
            @empty
                <td colspan="7">
                    <h2>Услуг пока нет</h2>
                </td>
            @endforelse
        </tbody>
    </table>
@endsection
