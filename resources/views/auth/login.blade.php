<x-laravel-ui-adminlte::adminlte-layout>

    <body class="hold-transition login-page" style="background-color: #5a189a;">
        <div class="login-box">
            <div class="login-logo">
                <a href="{{ url('/dashboard') }}">
                    <img src="{{ asset('img/wardrobe-logo.png') }}" alt="Wardrobe Logo" width="120">
                </a>
                <h2 style="color: #fff; font-weight: bold;">Wardrobe Manager</h2>
            </div>
            
            <div class="card shadow-lg" style="border-radius: 15px;">
                <div class="card-body login-card-body" style="border-radius: 15px;">
                    <p class="login-box-msg text-muted">Organize your outfits effortlessly</p>

                    <form method="post" action="{{ url('/login') }}">
                        @csrf

                        <div class="input-group mb-3">
                            <input type="email" name="email" value="{{ old('email') }}" placeholder="Email"
                                class="form-control @error('email') is-invalid @enderror" style="border-radius: 10px;">
                            <div class="input-group-append">
                                <div class="input-group-text" style="border-radius: 10px;">
                                    <span class="fas fa-envelope"></span>
                                </div>
                            </div>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="input-group mb-3">
                            <input type="password" name="password" placeholder="Password"
                                class="form-control @error('password') is-invalid @enderror" style="border-radius: 10px;">
                            <div class="input-group-append">
                                <div class="input-group-text" style="border-radius: 10px;">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="row">
                            <div class="col-8">
                                <div class="icheck-primary">
                                    <input type="checkbox" id="remember">
                                    <label for="remember" style="color: white;">Remember Me</label>
                                </div>
                            </div>
                            <div class="col-4">
                                <button type="submit" class="btn btn-primary btn-block" style="border-radius: 10px; background: #f8c4ff; border: none; color: #5a189a;">
                                    Sign In
                                </button>
                            </div>
                        </div>
                    </form>

                    <p class="mb-1">
                        <a href="{{ route('password.request') }}" style="color: #f8c4ff;">I forgot my password</a>
                    </p>
                    <p class="mb-0">
                        <a href="{{ route('register') }}" class="text-center" style="color: #f8c4ff;">Register a new membership</a>
                    </p>
                </div>
            </div>
        </div>
    </body>
</x-laravel-ui-adminlte::adminlte-layout>
