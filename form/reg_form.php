<div class="row d-flex justify-content-center align-items-center h-100">
  <div class="col-12 col-md-9 col-lg-5 col-xl-5">
    <div class="card" style="border-radius: 15px;">
      <div class="card-body p-3">
        <h3 class="text-uppercase text-center mb-3"> Create an account </h3>
        <form id="registration_form">
          <div class="form-outline mb-3">
            <label class="form-label" for="first_name"> First Name </label>
            <input type="text" id="first_name" name="first_name" class="form-control form-control-md" />
            <span class="error-message"></span> <!-- This is the span for the error message -->
            </div>
          <div class="form-outline mb-3">
            <label class="form-label" for="last_name"> Last Name </label>
            <input type="text" id="last_name" name="last_name" class="form-control form-control-md" />
            <span class="error-message"></span> <!-- This is the span for the error message -->
            </div>
          <div class="form-outline mb-3">
            <label class="form-label" for="your_email"> Your Email </label>
            <input type="email" id="your_email" name="your_email" class="form-control form-control-md" />
            <span class="error-message"></span> <!-- This is the span for the error message -->
            </div>
          <div class="form-outline mb-4">
            <label class="form-label" for="password"> Password </label>
            <input type="password" id="password" name="password" class="form-control form-control-md" />
            
            <span class="error-message"></span> <!-- This is the span for the error message -->
            </div>
          <div class="form-outline mb-5">
            <label class="form-label" for="c_password"> Confirm password </label>
            <input type="password" id="c_password" name="c_password" class="form-control form-control-md" />
            <span class="error-message"></span> <!-- This is the span for the error message -->
            </div>
          <div class="d-flex justify-content-center">
            <button type="submit"
              class="btn btn-success btn-block btn-lg gradient-custom-4 text-body" id="register_button"> Register </button>
            </div>
          <p class="text-center text-muted mt-3 mb-0"> Have already an account? <a href="login.php"
              class="fw-bold text-body"><u> Login here </u></a></p>
        </form>
      </div>
    </div>
  </div>
</div>



