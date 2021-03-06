<?php
    $this->view('Admin/components/header');
?>
    <body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="auth-content-wrapper d-flex align-items-center auth px-0">
                <div class="row w-100 mx-0">
                    <div class="col-lg-4 mx-auto">
                        <div class="auth-form-light text-left py-5 px-4 px-sm-5 shadow-lg">
                            <div class="brand-logo">
                              <img src="<?= base_url();?>assets/images/logo.png" alt="logo">
                            </div>
                            <h4>Hello! let's get started</h4>
                            <h6 class="font-weight-light">Sign in to continue.</h6>
                            <form class="pt-3" action="<?= base_url();?>Authentication/auth_login" method="POST">
                              <div class="form-group shadow">
                                <input type="email" class="form-control" name="panelUsername" id="panelUsername" placeholder="Username">
                                <small class="form-error"><?= form_error('panelUsername');?></small>
                              </div>
                              <div class="form-group shadow">
                                <input type="password" class="form-control" name="panelPassword" id="panelPassword" placeholder="Password">
                                <small class="form-error"><?= form_error('panelPassword');?></small>
                              </div>
                              <div class="mt-3">
                                <button class="shadow btn btn-block btn-primary font-weight-medium auth-form-btn" type="submit">SIGN IN</button>
                              </div>
                              <div class="my-2 text-center">
                                <a href="#" class="auth-link text-white">Forgot password?</a>
                                <a class="text-white  auth-link"> else contact Admin</a>
                              </div>
                            </form>
                         </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
      <!-- page-body-wrapper ends -->
    </div>
<?php
    $this->view('Admin/components/footer');
?>