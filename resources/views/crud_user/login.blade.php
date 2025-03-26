@extends('dashboard')

@section('content')
    <main class="login-form">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="card shadow-lg border-0 rounded">
                        <h3 class="card-header text-center bg-dark text-white">Login</h3>
                        <div class="card-body bg-white">
                            <form method="POST" action="{{ route('user.authUser') }}">
                                @csrf

                                <div class="form-group mb-3">
                                    <label for="email" class="fw-bold">Email</label>
                                    <div class="input-group">
                                        <span class="input-group-text bg-light"><i class="bi bi-envelope"></i></span>
                                        <input type="text" placeholder="Enter your email" id="email"
                                               class="form-control rounded-end" name="email" required autofocus>
                                    </div>
                                    @if ($errors->has('email'))
                                        <span class="text-danger small">{{ $errors->first('email') }}</span>
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
                                        <span class="text-danger small">{{ $errors->first('password') }}</span>
                                    @endif
                                </div>

                                <div class="form-group mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="remember" name="remember">
                                    <label class="form-check-label" for="remember">Remember Me</label>
                                </div>

                                <div class="d-grid mx-auto">
                                    <button type="submit" class="btn btn-dark btn-block">
                                        <i class="bi bi-box-arrow-in-right"></i> Sign In
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
