@extends('web.layouts.master')

@section('section')
<div class="container">
    <div class="description text-center">
        <h1>404</h1>
        <h4>Welcome to {{ config('app.name') }} CMS</h4>
        @if(Auth::User()->role == 'admin')
        <a href="{{ route('admin.dashboard') }}">Go Back To Dashboard</a>
        @else
        <p>
            This page is not found. Please navigate through other menus.
        </p>
        @endif
    </div>
</div>
@endsection