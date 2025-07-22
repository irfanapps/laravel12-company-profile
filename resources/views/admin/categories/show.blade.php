@extends('admin.layouts.admin')

@section('title', $category->name)

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">{{ $category->name }}</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('admin.categories.index') }}">Categories</a></li>
            <li class="breadcrumb-item active">{{ $category->name }}</li>
        </ol>

        <div class="card mb-4">
            <div class="card-header">
                <div class="d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Category Details</h5>
                    <div>
                        <a href="{{ route('admin.categories.edit', $category) }}" class="btn btn-sm btn-primary">
                            <i class="fas fa-edit me-1"></i> Edit
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-8">
                        <table class="table table-bordered">
                            <tr>
                                <th width="30%">Name</th>
                                <td>{{ $category->name }}</td>
                            </tr>
                            <tr>
                                <th>Slug</th>
                                <td>{{ $category->slug }}</td>
                            </tr>
                            <tr>
                                <th>Description</th>
                                <td>{{ $category->description ?? 'N/A' }}</td>
                            </tr>
                            <tr>
                                <th>Status</th>
                                <td>
                                    <span class="badge bg-{{ $category->is_active ? 'success' : 'danger' }}">
                                        {{ $category->is_active ? 'Active' : 'Inactive' }}
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <th>Order</th>
                                <td>{{ $category->order }}</td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header bg-primary text-white">
                                SEO Information
                            </div>
                            <div class="card-body">
                                <p><strong>Meta Title:</strong> {{ $category->meta_title ?? 'N/A' }}</p>
                                <p><strong>Meta Description:</strong> {{ $category->meta_description ?? 'N/A' }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- <div class="card mb-4">
            <div class="card-header">
                <h5 class="mb-0">Blogs in this Category ({{ $blogs->total() }})</h5>
            </div>
            <div class="card-body">
                @if ($blogs->count() > 0)
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Author</th>
                                    <th>Published At</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($blogs as $blog)
                                    <tr>
                                        <td>{{ $blog->title }}</td>
                                        <td>{{ $blog->author->name }}</td>
                                        <td>{{ $blog->published_at?->format('M d, Y') ?? 'Draft' }}</td>
                                        <td>
                                            <span class="badge bg-{{ $blog->is_published ? 'success' : 'warning' }}">
                                                {{ $blog->is_published ? 'Published' : 'Draft' }}
                                            </span>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    {{ $blogs->links() }}
                @else
                    <div class="alert alert-info">No blogs found in this category.</div>
                @endif
            </div>
        </div> --}}
    </div>
@endsection
