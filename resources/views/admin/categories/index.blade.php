@extends('layouts.app')

@section('content')
    <div class="container">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Slug</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Azioni</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                    <tr>
                        <th scope="row">{{ $category->id }}</th>
                        <td>{{ $category->slug }}</td>
                        <td>
                            {{ $category->name }}
                        </td>
                        <td>
                            <a href="{{ route('admin.categories.show', ['category' => $category]) }}" class="btn btn-primary">Visita</a>
                        </td>
                        <td>
                            <a href="{{ route('admin.categories.edit', ['category' => $category]) }}" class="btn btn-warning">Edita</a>
                        </td>
                        {{-- <td>
                            <button class="btn btn-danger btn-delete-me" data-id="{{ $category->id }}">Elimina</button>
                        </td> --}}
                        <td>
                            <form action="{{ route('admin.categories.destroy', ['category' => $category]) }}" method="category">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-danger btn-delete-me">Elimina</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{ $categories->links() }}
    </div>
@endsection
