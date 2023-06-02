
  
  document.getElementById('login-form').addEventListener('submit', function(e) {
    e.preventDefault();
  
    // Retrieve form data
    var fullname = document.getElementById('fullname').value;
    var email = document.getElementById('email').value;
    var phonenumber = document.getElementById('text').value;
    var password = document.getElementById('password').value;
   
    // Perform login logic (e.g., AJAX request)
    // For this example, let's assume the login is successful
    var isSignedIn = true;
  
    if (isSignedIn) {
      // Redirect to another page
      window.location.href = 'loginpage.php';
   
    }
  });
  