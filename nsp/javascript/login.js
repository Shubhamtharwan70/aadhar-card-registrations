
  
  document.getElementById('login-form').addEventListener('submit', function(e) {
    e.preventDefault();
  
    // Retrieve form data
    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;
  
    // Perform login logic (e.g., AJAX request)
    // For this example, let's assume the login is successful
    var isLoggedIn = true;
  
    if (isLoggedIn) {
      // Redirect to another page
      window.location.href = 'chat.php';
    } else {
      // Show error message or handle authentication failure
      alert('Login failed. Please try again.');
    }
  });
  