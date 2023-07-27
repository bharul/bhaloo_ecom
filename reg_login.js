$(document).ready(function() {
  $("#registration_form").submit(function(event) {
    event.preventDefault();
    $(".error-message").text(""); // Clear previous error messages
    $(".form-control").removeClass("error-border");

    // Get the values from the input fields
    var firstName = $("#first_name").val();
    var lastName = $("#last_name").val();
    var email = $("#your_email").val();
    var password = $("#password").val();
    var c_password = $("#c_password").val();
    // Perform email validation using regular expression
    var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    var isValidEmail = emailPattern.test(email);
    
    // Perform password validation using regular expression
    var passwordPattern = /^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/;
    var isValidPassword = passwordPattern.test(password);
    
    // Check if the passwords match
    var passwordsMatch = (password === c_password);
    
    // Perform validation
    var isValid = true;

    if (firstName === "") {
      $("#first_name").next(".error-message").text("Please enter your First Name.");
      $("#first_name").addClass("error-border");
      isValid = false;
    }else if (lastName === ""){
      $("#last_name").next(".error-message").text("Please enter your Last Name.");
      $("#last_name").addClass("error-border");
      isValid = false;
    }else if (!isValidEmail) {
      $("#your_email").next(".error-message").text("Please enter a valid email id.");
      $("#your_email").addClass("error-border");
      isValid = false;
    }else if (!isValidPassword) {
      $("#password").next(".error-message").text("Password should be at least 8 characters, 1 number, 1 alphabet, and 1 special character.");
      $("#password").addClass("error-border");
      isValid = false;
    }else if (!passwordsMatch){
      $("#c_password").next(".error-message").text("Password Not Matched");
      $("#c_password").addClass("error-border");
      isValid = false;
    }
    
    // If the form is valid, you can proceed with the registration process
    if (isValid) {
      $.ajax({
        type : "POST",
        url : "registration.php",
        data: {
          firstName : firstName,
          lastName : lastName,
          email : email,
          password : password,
        },
        success: function(response){
          console.log(response);
        }
      })      
    }
  });


  
});







