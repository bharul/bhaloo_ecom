<div class="mask d-flex align-items-center">
  <div class="container h-100 mt-2">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-9 col-lg-5 col-xl-5">
        <div class="card" style="border-radius: 15px;">
          <div class="card-body p-3">
            <h3 class="text-uppercase text-center mb-3"> Create an account </h3>
            <form id="registration_form" method="POST" >
              <input type="hidden" value="<?php echo $nonce; ?>">
              <div class="form-outline mb-3">
                <label class="form-label" for="login_email">  Email Id / Phone</label>
                <input type="email" id="login_email" name="login_email" class="form-control form-control-md" />
                <span class="error-message"></span> <!-- This is the span for the error message -->
              </div>
              <div class="form-outline mb-4">
                <label class="form-label" for="login_password"> Password </label>
                <input type="password" id="login_password" name="login_password" class="form-control form-control-md" />

                <span class="error-message"></span> <!-- This is the span for the error message -->
              </div>
              <div class="d-flex justify-content-center">
                <button type="button" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body" id="register_button"> Login </button>
              </div>
              <p class="text-center text-muted mt-3 mb-0"> Don't have account? <a href="registration.php" class="fw-bold text-body"><u> Register here </u></a></p>
            </form>
          </div>
        </div>
      </div>
    </div>