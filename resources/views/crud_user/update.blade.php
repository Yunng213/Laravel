@extends('dashboard')

@section('content')
    <main class="signup-form">
        <div class="container d-flex justify-content-center align-items-center vh-100">
            <div class="col-md-6">
                <div class="card shadow-lg p-4 rounded">
                    <h3 class="card-header text-center bg-dark text-white py-3 rounded">Update User</h3>
                    <div class="card-body">
                        <form action="{{ route('user.postUpdateUser') }}" method="POST">
                            @csrf
                            <input name="id" type="hidden" value="{{ $user->id }}">

                            <div class="form-group mb-3">
                                <label for="name" class="fw-bold">Name</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-person"></i></span>
                                    <input type="text" placeholder="Name" id="name" class="form-control" name="name"
                                           value="{{ $user->name }}" required autofocus>
                                </div>
                                @if ($errors->has('name'))
                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif
                            </div>

                            <div class="form-group mb-3">
                                <label for="email" class="fw-bold">Email</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                                    <input type="text" placeholder="Email" id="email" class="form-control" name="email"
                                           value="{{ $user->email }}" required autofocus>
                                </div>
                                @if ($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>

                            <div class="form-group mb-3">
                                <label for="phone" class="fw-bold">Phone</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-telephone"></i></span>
                                    <input type="text" placeholder="Phone" id="phone" class="form-control" name="phone"
                                           required autofocus>
                                </div>
                                @if ($errors->has('phone'))
                                    <span class="text-danger">{{ $errors->first('phone') }}</span>
                                @endif
                            </div>

                            <div class="form-group mb-3">
                                <label for="address" class="fw-bold">Address</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-geo-alt"></i></span>
                                    <input type="text" placeholder="Address" id="address" class="form-control" name="address"
                                           required autofocus>
                                </div>
                                @if ($errors->has('address'))
                                    <span class="text-danger">{{ $errors->first('address') }}</span>
                                @endif
                            </div>

                            <div class="form-group mb-3">
                                <label for="password" class="fw-bold">Password</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="bi bi-lock"></i></span>
                                    <input type="password" placeholder="Password" id="password" class="form-control"
                                           name="password" required>
                                </div>
                                @if ($errors->has('password'))
                                    <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                            </div>

                            <div class="d-grid mx-auto">
                                <button type="submit" class="btn btn-dark btn-lg">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>

    
   
@endsection