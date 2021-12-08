@extends('layouts/signin_up')

@section('Body')
    <div class="col-lg-6 d-flex justify-content-center align-items-center border-0 rounded-lg auth-h100">
        <div class="w-100 p-3 p-md-5 card border-0 bg-dark text-light" style="max-width: 32rem;">
            <!-- Form -->
            <form class="row g-1 p-3 p-md-4 needs-validation" id="formSignup" novalidate>
                @csrf
                <div class="col-12 text-center mb-1 mb-lg-3 mt-lg-2">
                    <h1 class="mt-lg-5">Create your account</h1>
                    <span>Free access to our dashboard.</span>
                </div>
                <div class="col-6">
                    <div class="mb-2">
                        <label for="firstName" class="form-label">Full name</label>
                        <input type="text" name="firstName" id="firstName" class="form-control form-control-lg" placeholder="John" required>
                        <div class="invalid-feedback">
                            Please fill out this field.
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-2">
                        <label for="lastName" class="form-label">&nbsp;</label>
                        <input type="text" name="lastName" class="form-control form-control-lg" id="lastName" placeholder="Parker">
                    </div>
                </div>
                <div class="col-12">
                    <div class="mb-2">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control form-control-lg" id="email" placeholder="name@example.com" required>
                        <div class="invalid-feedback">
                            Please fill out this field.
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="mb-2">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control form-control-lg" id="password" placeholder="8+ characters" required>
                        <div class="invalid-feedback">
                            Please fill out this field.
                        </div>
                        <div class="invalid-password-length">Password min 8 characters</div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="mb-2">
                        <label for="repeatPassword" class="form-label">Confirm password</label>
                        <input type="password" name="repeatPassword" class="form-control form-control-lg" id="repeatPassword" placeholder="8+ characters" required>
                        <div class="invalid-feedback">
                            Please fill out this field.
                        </div>
                        <div class="invalid-password-match">Password do not match</div>
                    </div>
                </div>
                <div class="col-12 text-center mt-4">
                    <button type="submit" class="btn btn-lg btn-block btn-light lift text-uppercase" alt="SIGNUP">SIGN UP</button>
                </div>
                <div class="col-12 text-center mt-4">
                    <span class="text-muted">Already have an account? <a href="{{ url('signin') }}" title="Sign in" class="text-secondary">Sign in here</a></span>
                </div>
            </form>
            <!-- End Form -->
            
        </div>
    </div>
@endsection

@section('JqueryCoreJs')
    <script src="../assets/bundles/auth-signup/libscripts.bundle.js"></script>
@endsection

@section('PluginJs')
    <script src="{{ asset('assets/plugin/sweetalert2/dist/sweetalert2.all.min.js') }}"></script>
@endsection

@section('JsCustom')
    @include('signup/js_signup')
@endsection