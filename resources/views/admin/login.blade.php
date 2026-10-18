
@extends('layouts.app')

@section('title', 'Login Admin - Wahana Bermain')

@section('content')
<style>
    body {
        background: #f1f5f9;
    }

    .login-wrapper {
        min-height: 85vh;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 30px 15px;
    }

    .login-card {
        width: 100%;
        max-width: 420px;
        background: #fff;
        border: none;
        border-radius: 18px;
        box-shadow: 0 12px 35px rgba(0, 0, 0, 0.08);
    }

    .login-heading {
        color: #1f2937;
        font-weight: 700;
    }

    .login-description {
        color: #64748b;
        font-size: 14px;
    }

    .login-card .form-control {
        padding: 12px 14px;
        border-radius: 9px;
    }

    .login-button {
        padding: 12px;
        border: none;
        border-radius: 9px;
        background: #262b40;
        color: white;
        font-weight: 600;
    }

    .login-button:hover {
        background: #3b4261;
        color: white;
    }
</style>

<div class="login-wrapper">
    <div class="card login-card">
        <div class="card-body p-4 p-md-5">

            <div class="text-center mb-4">
                <h2 class="login-heading">Login Admin</h2>
                <p class="login-description">
                    Website Informasi dan Pengelolaan Wahana Bermain
                </p>
            </div>

            @if ($errors->any())
                <div class="alert alert-danger">
                    {{ $errors->first() }}
                </div>
            @endif

            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('admin.login.process') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="email" class="form-label">Email Admin</label>
                    <input
                        type="email"
                        class="form-control"
                        id="email"
                        name="email"
                        value="{{ old('email') }}"
                        placeholder="Masukkan email admin"
                        autocomplete="username"
                        required
                    >
                </div>

                <div class="mb-4">
                    <label for="password" class="form-label">Password</label>
                    <input
                        type="password"
                        class="form-control"
                        id="password"
                        name="password"
                        placeholder="Masukkan password"
                        autocomplete="current-password"
                        required
                    >
                </div>

                <button type="submit" class="btn login-button w-100">
                    Login
                </button>
            </form>

            <p class="text-center login-description mt-4 mb-0">
                &copy; {{ date('Y') }} Wahana Bermain
            </p>

        </div>
    </div>
</div>
@endsection
