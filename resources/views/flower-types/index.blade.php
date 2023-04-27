@extends('layouts.app')

@section('content')
    <div class="container">

        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Flower Types</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Flower Types</li>
                    </ol>
                </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <section class="content">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">{{ __('Flower Types') }}</h3>
                        <div class="card-tools">
                            <a href="add-flower-type" class="btn btn-md btn-primary" title="Add Flower Types">
                                Add Flower Types
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
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($flower_types as $flower_type)
                                    <tr>
                                        <td>{{ $flower_type->id }}</td>
                                        <td>{{ $flower_type->name }}</td>
                                        <td>{{ $flower_type->description }}</td>
                                        <td>
                                            <a href="/edit-flower-type/{{ $flower_type->id }}" class="btn btn-sm btn-primary">Edit</a>
                                            <form action="/destroy-flower-type/{{ $flower_type->id }}" method="POST" style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="button" class="btn btn-sm btn-danger" onclick="confirmDelete('{{ $flower_type->id }}')">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="d-flex justify-content-center">
                            {{ $flower_types->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <script>
        function confirmDelete(id) {
            if (confirm("Are you sure you want to delete this item?")) {
                document.getElementById('delete-form-' + id).submit();
            }
        }
    </script>
@endsection
