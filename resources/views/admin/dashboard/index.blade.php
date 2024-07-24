@extends('admin.layouts.master')

@section('section')
<div class="row">
    <!-- Form Section -->
    <div class="col-md-12">
        <h3>Welcome to dashbaord</h3>
        <form>
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <!-- Table Section -->
    <div class="col-md-12">
        <h3>Table Section</h3>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>John Doe</td>
                    <td>john@example.com</td>
                </tr>
                <!-- More rows as needed -->
            </tbody>
        </table>
    </div>
</div>
@endsection