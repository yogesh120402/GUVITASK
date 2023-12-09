function submitLoginForm() {
    // Handle login form submission using jQuery AJAX
    $.ajax({
      type: 'POST',
      url: './php/login.php', // Replace with the actual path to your login.php file
      data: $('#loginForm').serialize(),
      success: function (response) {
       // console.log(response); // Log the response for debugging purposes
        // Handle the response from the server
        if (response) {
          // Redirect to the profile page
          window.location.href = './profile.html';
        } else {
          // Handle other cases if needed
          alert('Login failed. Please check your username and password.');
        }
      },
      error: function (error) {
        // Handle errors (e.g., display an error message)
        alert('An error occurred during the login process.');
      }
    });
  }