@extends('dashboard')

@section('content')
    <main class="login-form">
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card shadow-lg">
                        <div class="card-header bg-info text-white text-center">
                            <h4>User Information</h4>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-hover">
                                <thead class="table-dark">
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Address</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{$messi->id}}</td>
                                        <td>{{$messi->name}}</td>
                                        <td>{{$messi->email}}</td>
                                        <td>{{$messi->phone}}</td>
                                        <td>{{$messi->address}}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
