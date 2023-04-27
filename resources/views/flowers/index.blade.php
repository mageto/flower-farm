@extends('layouts.app')

@section('content')
    <div class="container">

        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Flowers</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Flowers</li>
                    </ol>
                </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <section class="content">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">{{ __('Flowers') }}</h3>
                    <div class="card-tools">
                        <a href="add-flower" class="btn btn-md btn-primary" title="Add Flower">
                            Add Flower
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($flowers as $flower)
                                <tr>
                                    <td>{{ $flower->id }}</td>
                                    <td>{{ $flower->name }}</td>
                                    <td>{{ $flower->description }}</td>
                                    <td>
                                        @if ($flower->image_name)
                                            <img src="{{ asset('images/' . $flower->image_name) }}" alt="{{ $flower->name }}" style="max-width: 100px;">
                                        @else
                                            No Image
                                        @endif
                                    </td>
                                    <td>
                                        <a href="edit-flower/{{ $flower->id }}" class="btn btn-primary">Edit</a>
                                        <form action="{{ route('destroy-flower', $flower->id) }}" method="POST" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="d-flex justify-content-center">
                        {{ $flowers->links() }}
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
