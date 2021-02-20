@extends('layouts.app')
@section('content')
<div class="container">
    <h1 class="display-4">Добавить услугу:</h1>
    <form action="{{route('admin.product.update', $product)}}" method="POST" enctype="multipart/form-data">
        @csrf
		  @method('PUT')

        <div class="mb-3">
            <label for="title" class="form-label">Название:</label>
            <input name="title" type="text" class="form-control" id="title" value="{{ $product->title }}">
        </div>

        <div class="mb-3 form-floating">
            <label for="description">Описание:</label>
            <textarea name="description" class="form-control" id="description" style="height: 150px; resize: none">{{ $product->description }}</textarea>
        </div>

        <div class="example-3">
            <label for="custom-file-upload" class="filupp">
                <span class="filupp-file-name js-value">Загрузить изображение</span>
                <input type="file" name="img" id="custom-file-upload">
            </label>
        </div>

        <button type="submit" class="btn btn-primary">Добавить</button>
		  
    </form>
	 </div>
@endsection
