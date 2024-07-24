@extends('admin.layouts.master')


@section('title')
Page Create
@endsection

@section('section')
<div class="row">
    <!-- Form Section -->
    <div class="col-md-12">
        <h3>Create new Page</h3>
        <form action="{{ route('admin.pages.store') }}" enctype="multipart/form-data" method="POST">
            @csrf
            <div class="form-group">
                <label for="name" class="required">Page Name:</label>
                <input type="text" class="form-control page-name" id="name" name="name">
                @if ($errors->has('name'))
                <p class="text-danger">
                    <strong>{{ $errors->first('name') }}</strong>
                </p>
                @endif
            </div>

            <div class="form-group">
                <label for="slug" class="required">Page Slug:</label>
                <input type="text" class="form-control page-slug" id="slug" name="slug" readonly>
                @if ($errors->has('slug'))
                <p class="text-danger">
                    <strong>{{ $errors->first('slug') }}</strong>
                </p>
                @endif
            </div>

            <div class="form-group">
                <label for="display_on_menu" class="required">Display On Menu:</label>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="display_on_menu" name="display_on_menu"
                        value="1" checked>
                    <label class="form-check-label" for="display_on_menu">Yes</label>
                </div>
                @if ($errors->has('display_on_menu'))
                <p class="text-danger">
                    <strong>{{ $errors->first('display_on_menu') }}</strong>
                </p>
                @endif
            </div>

            <div class="form-group">
                <label for="banner">Banner:</label>
                <input type="file" class="form-control" id="banner" name="banner">
                @if ($errors->has('banner'))
                <p class="text-danger">
                    <strong>{{ $errors->first('banner') }}</strong>
                </p>
                @endif
            </div>

            <div class="form-group">
                <label for="slug" class="required">Page Content:</label>
                <textarea name="content" class="form-control summernote" style="height: 300px;"></textarea>
                @if ($errors->has('slug'))
                <p class="text-danger">
                    <strong>{{ $errors->first('slug') }}</strong>
                </p>
                @endif
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection