@extends('admin.layouts.master')

@section('title')
Users
@endsection

@section('section')
<div class="row">
    <!-- Table Section -->
    <div class="col-md-12">
        <form action="{{ route('admin.users.index') }}">
            <div class="row">
                <div class="form-group col-10">
                    <input type="text" class="form-control page-name" id="search" name="search"
                        placeholder="Search Name Email" value="{{ request()->search }}">
                </div>
                <button type="submit" class="btn btn-secondary col-2" style="height: 2.5rem;">Search</button>
            </div>
        </form>

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