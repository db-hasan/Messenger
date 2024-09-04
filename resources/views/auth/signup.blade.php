@include('backend.header');
<body>
    <main>
        <div class="container">
            <section
                class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
                            <div class="d-flex justify-content-center py-4">
                                <a href="#" class="logo d-flex align-items-center w-auto">
                                    <img src="backend/img/logo.png" alt="">
                                    <span class="d-none d-lg-block">SOFTxONE</span>
                                </a>
                            </div>
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="pt-4 pb-2">
                                        <h5 class="card-title text-center pb-0 fs-4">Create Your Account</h5>
                                    </div>
                                    <form method="POST" action="{{ route('user.signup') }}" class="row g-3">
                                        @csrf
                                        @method('POST')
                                        @if (Session::has('success'))
                                            <div class="alert alert-success">
                                                {{ Session::get('success') }}
                                            </div>
                                        @endif
                                        @if (Session::has('error'))
                                            <div class="alert alert-danger">
                                                {{ Session::get('error') }}
                                            </div>
                                        @endif
                                        <div class="col-md-12">
                                            <label for="name" class="form-label">Name</label>
                                            <input type="text" class="form-control" id="name" name="name"
                                                required>
                                            @error('name')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-12">
                                            <label for="email" class="form-label">Email</label>
                                            <input type="email" class="form-control" id="email" name="email"
                                                required>
                                            @error('email')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        
                                        <div class="col-md-12">
                                            <label for="password" class="form-label">Password</label>
                                            <input type="password" class="form-control" id="password" name="password"
                                                required>
                                            @error('password')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-12">
                                            <label for="password_confirmation" class="form-label">Confirmation</label>
                                            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation"
                                                required>
                                            @error('password_confirmation')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-12">
                                            <div class="">
                                                <label class="form-check-label" for="">Are you have Account ?</label>
                                                <a href="{{route('login')}}">Signin Now</a>
                                            </div>
                                        </div>
                                        <div class="col-12 pb-4">
                                            <button class="btn btn-primary w-100" type="submit">Login</button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </section>

        </div>
    </main><!-- End #main -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    @include('backend.footer');
</body>

</html>
