@extends('admin.layouts.master')

@section('title')
Users
@endsection

@section('section')
<div class="row">
    <!-- Table Section -->
    <div class="col-md-12">
        <h3>Users</h3>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <span class="badge @if($user->role =='admin') badge-primary @else badge-secondary @endif">
                            {{ strtoupper($user->role) }}</span>
                    </td>
                    <td>
                        <span class="badge @if($user->status) badge-success @else badge-danger @endif">
                            @if($user->status) Active @else Inactive @endif
                        </span>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>


        {{ $users->links() }}
    </div>
</div>
@endsection