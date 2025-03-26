@extends('dashboard')

@section('content')
    <main class="user-list">
        <div class="container mt-4">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="card shadow-lg border-0 rounded">
                        <h3 class="card-header text-center bg-dark text-white">User List</h3>
                        <div class="card-body bg-white">
                            <table class="table table-bordered table-hover text-center">
                                <thead class="table-dark">
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Address</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($users as $user)
                                        <tr>
                                            <td>{{ $user->id }}</td>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->phone }}</td>
                                            <td>{{ $user->address }}</td>
                                            <td>
                                                <a href="{{ route('user.readUser', ['id' => $user->id]) }}" class="btn btn-sm btn-primary ">
                                                    <i class="bi bi-eye"></i> View
                                                </a>
                                                <a href="{{ route('user.updateUser', ['id' => $user->id]) }}" class="btn btn-sm btn-warning ">
                                                    <i class="bi bi-pencil-square"></i> Edit
                                                </a>
                                                <a href="{{ route('user.deleteUser', ['id' => $user->id]) }}" class="btn btn-sm btn-danger " 
                                                   onclick="return confirm('Are you sure you want to delete this user?');">
                                                    <i class="bi bi-trash"></i> Delete
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="text-center mt-3">
                                <a href="{{ route('user.createUser') }}" class="btn btn-success">
                                    <i class="bi bi-person-plus"></i> Add New User
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection