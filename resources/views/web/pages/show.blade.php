@extends('web.layouts.master')

@section('title')
{{ $page->name }}
@endsection

@section('section')

@if($page->banner)
<div class="container-fluid p-0">
    <img src="{{ asset('storage/images/' . $page->banner) }}" alt="{{ $page->name }}" class="hero-image">
</div>
@endif
<!-- Description Section -->
<div class="container">
    <div class="description">
        <h2 class="text-center">{{ $page->name }}</h2>
        <p class="text-center">
            {!! $page->content !!}
        </p>
    </div>
</div>
@endsection