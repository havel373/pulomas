<x-Auth-Layout title="Login">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xxl-4 col-lg-5">
                <div class="card">

                    <!-- Logo -->
                    <div class="card-header pt-4 pb-4 text-center bg-primary">
                        <a href="index.html">
                            <span><img src="{{asset('assets/images/logo.png')}}" alt="" height="18"></span>
                        </a>
                    </div>

                    <div class="card-body p-4">
                        
                        <div class="text-center w-75 m-auto">
                            <h4 class="text-dark-50 text-center pb-0 fw-bold">Sign In</h4>
                            <p class="text-muted mb-4">Enter your email address and password to access admin panel.</p>
                        </div>

                        <form id="form_login">

                            <div class="mb-3">
                                <label for="emailaddress" class="form-label">Email address</label>
                                <input class="form-control" type="email" id="emailaddress" name="email" placeholder="Enter your email">
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <div class="input-group input-group-merge">
                                    <input type="password" id="password" name="password" class="form-control" placeholder="Enter your password">
                                    <div class="input-group-text" data-password="false">
                                        <span class="password-eye"></span>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3 mb-3">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="checkbox-signin" checked>
                                    <label class="form-check-label" for="checkbox-signin">Remember me</label>
                                </div>
                            </div>

                            <div class="mb-3 mb-0 text-center">
                                <button id="button_login"type="button" onclick="handle_post('#button_login','#form_login','{{route('auth.login')}}');" class="btn btn-primary" type="submit"> Log In </button>
                            </div>

                        </form>
                    </div> <!-- end card-body -->
                </div>
                <!-- end card -->

            </div> <!-- end col -->
        </div>
        <!-- end row -->
    </div>
</x-Auth-Layout>