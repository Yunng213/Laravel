@extends('dashboard')

@section('content')
    <main class="signup-form">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-5">
                    <div class="card shadow-lg border-0 rounded">
                        <h3 class="card-header text-center bg-dark text-white">Create User</h3>
                        <div class="card-body bg-white">
                            <form action="{{ route('user.postUser') }}" method="POST">
                                @csrf

                                <div class="form-group mb-3">
                                    <label for="name" class="fw-bold">Name</label>
                                    <div class="input-group">
                                        <span class="input-group-text bg-light"><i class="bi bi-person"></i></span>
                                        <input type="text" placeholder="Enter your name" id="name"
                                            class="form-control rounded-end" name="name" required autofocus>
                                    </div>
                                    @if ($errors->has('name'))
                                        <span class="text-danger small">
                                            {{ $errors->first('name') }}
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group mb-3">
                                    <label for="age" class="fw-bold">Age</label>
                                    <div class="input-group">
                                        <span class="input-group-text bg-light"><i
                                                class="bi bi-person-bounding-box"></i></i>
                                            </i></span>
                                        <input type="age" placeholder="Enter your Age" id="age"
                                            class="form-control rounded-end" name="age" required>
                                    </div>
                                    @if ($errors->has('email'))
                                        <span class="text-danger small">
                                            {{ $errors->first('email') }}
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group mb-3">
                                    <label for="email_address" class="fw-bold">Email</label>
                                    <div class="input-group">
                                        <span class="input-group-text bg-light"><i class="bi bi-envelope"></i></span>
                                        <input type="email" placeholder="Enter your email" id="email_address"
                                            class="form-control rounded-end" name="email" required>
                                    </div>
                                    @if ($errors->has('email'))
                                        <span class="text-danger small">
                                            {{ $errors->first('email') }}
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group mb-3">
                                    <label for="phone" class="fw-bold">Phone</label>
                                    <div class="input-group">
                                        <span class="input-group-text bg-light"><i class="bi bi-telephone"></i></span>
                                        <input type="text" placeholder="Enter your phone number" id="phone"
                                            class="form-control rounded-end" name="phone" required>
                                    </div>
                                    @if ($errors->has('phone'))
                                        <span class="text-danger small">
                                            {{ $errors->first('phone') }}
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group mb-3">
                                    <label for="address" class="fw-bold">Address</label>
                                    <div class="input-group">
                                        <span class="input-group-text bg-light"><i class="bi bi-geo-alt"></i></span>
                                        <input type="text" placeholder="Enter your address" id="address"
                                            class="form-control rounded-end" name="address" required>
                                    </div>
                                    @if ($errors->has('address'))
                                        <span class="text-danger small">
                                            {{ $errors->first('address') }}
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group mb-3">
                                    <label for="password" class="fw-bold">Password</label>
                                    <div class="input-group">
                                        <span class="input-group-text bg-light"><i class="bi bi-lock"></i></span>
                                        <input type="password" placeholder="Enter password" id="password"
                                            class="form-control rounded-end" name="password" required>
                                    </div>
                                    @if ($errors->has('password'))
                                        <span class="text-danger small">
                                            {{ $errors->first('password') }}
                                        </span>
                                    @endif
                                </div>

                                <div class="d-grid mx-auto">
                                    <button type="submit" class="btn btn-dark btn-block">
                                        <i class="bi bi-check-circle"></i> Submit
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection