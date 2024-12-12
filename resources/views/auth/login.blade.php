<x-guest-layout>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Session Status -->
    <x-auth-session-status class="alert alert-success" :status="session('status')" />

    {{-- <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-5"> <!-- Perbaikan lebar kolom -->
                <div class="card shadow"> --}}
                    <div class="card-body p-4"> <!-- Tambahkan padding -->
                        <div class="text-center mb-4">
                            <img src="{{ URL('images/LogoTK.jpg') }}" alt="Logo" class="img-fluid mb-2 mx-auto" style="max-width: 150px;" />
                            <h4 class="admin-title">TK ISLAM KINASIH</h4>
                        </div>

                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <!-- Email Address -->
                            <div class="mb-3">
                                <label for="email" class="form-label">{{ __('Email') }}</label>
                                <input id="email" type="email" name="email" class="form-control" :value="old('email')" required autofocus>
                                @error('email')
                                    <div class="text-danger mt-1">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Password -->
                            <div class="mb-3">
                                <label for="password" class="form-label">{{ __('Password') }}</label>
                                <input id="password" type="password" name="password" class="form-control" required>
                                @error('password')
                                    <div class="text-danger mt-1">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Remember Me -->
                            <div class="form-check mb-3">
                                <input id="remember_me" type="checkbox" class="form-check-input" name="remember">
                                <label for="remember_me" class="form-check-label">
                                    {{ __('Remember me') }}
                                </label>
                            </div>

                            <div class="d-flex justify-content-between align-items-center">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Log in') }}
                                </button>
                            </div>
                        </form>
                    </div>
                {{-- </div>
            </div>
        </div>
    </div> --}}

    <style>
        .admin-title {
            font-size: 1.25rem;
            font-weight: bold;
            color: #333;
        }
    </style>
</x-guest-layout>
