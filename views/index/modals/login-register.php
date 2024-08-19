<div id="Login-Register" class="modal fade" data-bs-backdrop="static" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body px-5">
                <p class="display-4 mb-5">
                    Welcome to <span class="fw-bold text-danger">BiOP</span>!
                </p>
                <div class="row">
                    <div class="col-md-6">
                        <h4 class="fw-light text-danger">
                            Login
                        </h4>
                        <p class="text-muted text-sm my-3">
                            Please provide your Account Credentials.
                        </p>
                        <form method="post" action="functions/account.php">
                            <input name="Method" type="hidden" value="Login" />
                            <div class="mb-3">
                                <label class="form-label">Email Address</label>
                                <input name="EmailAddress" type="email" class="form-control focus-ring" required />
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Password</label>
                                <input name="Password" type="password" class="form-control focus-ring" required />
                                <a href="#Forgot-Password" class="text-primary"><small>Forgot Password?</small></a>
                            </div>
                            <div class="mb-3 text-end">
                                <button type="submit" class="btn btn-danger text-light px-4">Login</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-6">
                        <h4 class="fw-light text-danger">
                            Register
                        </h4>
                        <p class="text-muted text-sm my-3">
                            Please fill out all of the required fields (<span class="text-danger">*</span>)
                        </p>
                        <form method="post" action="functions/account.php">
                            <input name="Method" type="hidden" value="Register" />
                            <div class="mb-3">
                                <label class="form-label">Full Name <span class="text-danger">*</span></label>
                                <input name="Name" type="text" class="form-control focus-ring" required />
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Email Address <span class="text-danger">*</span></label>
                                <input name="EmailAddress" type="email" class="form-control focus-ring" required />
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Password <span class="text-danger">*</span></label>
                                <input name="Password" type="password" class="form-control focus-ring" required />
                            </div>
                            <div class="mb-3 text-end">
                                <button type="submit" class="btn btn-danger text-light">Register</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
