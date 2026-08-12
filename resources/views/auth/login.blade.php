<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Login - Geopark Ternate</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    {{-- =========================
         FAVICON
    ========================== --}}
    <link rel="icon" type="image/png" href="{{ asset('frontend/gambar/logo1.png') }}">

    <link rel="apple-touch-icon" href="{{ asset('frontend/gambar/logo1.png') }}">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('admin/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/vendor/remixicon/remixicon.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('admin/css/style.css') }}" rel="stylesheet">

    @notifyCss

    <style>
        body {
            background: #f6f9ff;
        }

        .login-logo img {
            max-height: 90px;
        }

        .card {
            border: none;
            box-shadow: 0 5px 20px rgba(0, 0, 0, .08);
        }

        .invalid-feedback {
            display: block;
        }

        .btn-login {
            background-color: #17a2b8;
            border-color: #17a2b8;
        }

        .btn-login:hover {
            background-color: #17a2b8;
            border-color: #17a2b8;
        }
    </style>
</head>

<body>

    <main>
        <div class="container">
            <section
                class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                            <div class="d-flex justify-content-center py-4 login-logo">
                                <a href="{{ url('/') }}" class="logo d-flex align-items-center w-auto">
                                    <img src="{{ asset('frontend/gambar/logo1.png') }}" alt="Geopark Ternate"
                                        onerror="this.style.display='none'">
                                    <span class="d-lg-block">GEOPARK <br>TERNATE</span>
                                </a>
                            </div><!-- End Logo -->

                            <div class="card mb-3 w-100">
                                <div class="card-body">

                                    <div class="pt-4 pb-2">
                                        <h5 class="card-title text-center pb-0 fs-4">Masuk ke Akun Anda</h5>
                                        <p class="text-center small">Masukkan email &amp; password untuk login</p>
                                    </div>

                                    {{-- Session Status --}}
                                    @if (session('status'))
                                        <div class="alert alert-success">
                                            {{ session('status') }}
                                        </div>
                                    @endif

                                    <form class="row g-3" method="POST" action="{{ route('login') }}">
                                        @csrf

                                        <!-- Email Address -->
                                        <div class="col-12">
                                            <label for="email" class="form-label">Email</label>
                                            <input type="email" name="email" value="{{ old('email') }}"
                                                class="form-control @error('email') is-invalid @enderror" id="email"
                                                required autofocus autocomplete="username">
                                            @error('email')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <!-- Password -->
                                        <div class="col-12">
                                            <label for="password" class="form-label">Password</label>
                                            <input type="password" name="password"
                                                class="form-control @error('password') is-invalid @enderror"
                                                id="password" required autocomplete="current-password">
                                            @error('password')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>




                                        <div class="col-12">
                                            <button class="btn btn-login text-white w-100" type="submit">Login</button>
                                        </div>
                                    </form>

                                </div>
                            </div>

                            <div class="credits">
                                &copy; {{ date('Y') }} Saloi Ternate. All rights reserved.
                            </div>

                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>

    <!-- Vendor JS Files -->
    <script src="{{ asset('admin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('admin/js/main.js') }}"></script>

    <x-notify::notify />
    @notifyJs

</body>

</html>
