<!doctype html>
<html lang="en">

<head>
    <?= view('components/portal/head'); ?>
</head>

<body>
    <div class="auth-bg d-flex min-vh-100 justify-content-center align-items-start">
        <div class="row g-0 justify-content-center w-100 m-xxl-5 px-xxl-4 m-3">
            <div class="col-xl-4 col-lg-5 col-md-6">
                <div class="card overflow-hidden text-center p-xxl-4 p-3 mb-0">
                    <a href="<?=base_url('')?>" class="auth-brand mb-4">
                        <img src="<?= base_url('back/images/logo-dark.png') ?>" alt="dark logo" height="26" class="logo-dark">
                        <img src="<?= base_url('back/images/logo.png') ?>" alt="logo light" height="26" class="logo-light">
                    </a>

                    <h4 class="fw-semibold mb-2 fs-18">Log In to your account</h4>

                    <p class="text-muted mb-4">Enter your email address and password to access admin panel.</p>

                    <form method="post" class="text-start">
                        <div class="mb-3">
                            <label class="form-label" for="example-email">Username</label>
                            <input type="text" class="form-control" id="username" placeholder="Enter username" name="username">
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="example-password">Password</label>
                            <input type="password" class="form-control" placeholder="Enter password" aria-label="Password" aria-describedby="password-addon" name="password">
                        </div>

                        <div class="d-flex justify-content-between mb-3">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="checkbox-signin">
                                <label class="form-check-label" for="checkbox-signin">Remember me</label>
                            </div>

                            <a href="" class="text-muted border-bottom border-dashed">Forget Password</a>
                        </div>

                        <div class="d-grid">
                            <button class="btn btn-primary fw-semibold" type="submit">Log In</button>
                        </div>
                    </form>

                </div>

                <div class="text-center mt-3">
                    <p class="fs-14 mb-4">Don't have an account? <a href="#" class="fw-semibold text-danger ms-1">Sign Up !</a></p>

                    <p class="mt-auto mb-0">
                        <script>document.write(new Date().getFullYear())</script> © Zircos - By <a href="https://1.envato.market/coderthemes" target="_blank" class="fw-bold text-decoration-underline text-uppercase text-reset fs-12">Coderthemes</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- end account-pages -->

    <?= view('components/portal/script'); ?>
</body>


</html>