function submitLoginForm() {
    $.ajax({
      type: 'POST',
      url: './php/login.php', 
      data: $('#loginForm').serialize(),
      success: function (response) {
        if (response) {
          // Redirect to the profile page
          window.location.href = './profile.html';
        } else {
          // Handle other cases if needed
          alert('Login failed. Please check your username and password.');
        }
      },
      error: function (error) {
        alert('An error occurred during the login process.');
      }
    });
  }
