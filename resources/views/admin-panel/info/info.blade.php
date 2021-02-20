@extends('layouts.app')
@section('title', 'Заявки')
@section('content')
    <h1 class="display-4 container">Заявки:</h1>
    <table class="table table-dark table-striped posts-table mt-4">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Имя</th>
                <th scope="col">Город</th>
                <th scope="col">Номер телефона</th>
                <th scope="col">Email</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @forelse ($infos as $info)
                <tr>
                    <th scope="row">{{ $info->id }}</th>
                    <td>{{ $info->name }}</td>
                    <td>{{ $info->sity }}</td>
                    <td>{{ $info->phone }}</td>
                    <td>{{ $info->email }}</td>
                    <td style="text-align:center">
                        <form style="display: inline-block" method="POST" action="{{ route('admin.info.destroy', $info) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Удалить</button>
                        </form>
                    </td>
                </tr>
            @empty
                <td colspan="7">
                    <h2>Заявок пока нет</h2>
                </td>
            @endforelse
        </tbody>
    </table>
@endsection
