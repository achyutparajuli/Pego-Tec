@extends('admin.layouts.master')

@section('title')
Pages
@endsection

@section('section')
<div class="row mb-3">
    <div class="col-md-12">
        <a href="{{ route('admin.pages.create') }}" class="btn btn-primary">Create New Page</a>
    </div>
</div>

<div class="row">
    <!-- Table Section -->
    <div class="col-md-12">
        <h3>Pages</h3>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Slug</th>
                    <th>Display On Menu</th>
                    <th>Created By</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @if(count($pages) > 0)
                @foreach($pages as $page)
                <tr>
                    <td>{{ $page->id }}</td>
                    <td>{{ $page->name }}</td>
                    <td>{{ $page->slug }}</td>
                    <td>
                        @if($page->display_on_menu) Yes @else No @endif
                    </td>
                    <td>
                        {{ $page->user->name ?? 'N/A' }}
                    </td>
                    <td>
                        <a href="{{ route('admin.pages.edit', $page->slug) }}" class="btn btn-warning btn-sm">Edit</a>

                        <a href="{{ route('admin.pages.destroy', $page->slug) }}"
                            class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
                @endforeach
                @else
                <tr>
                    <td colspan="6" class="text-center">No data to display, create a new one.</td>
                </tr>
                @endif
            </tbody>
        </table>


        {{ $pages->links() }}
    </div>
</div>
@endsection