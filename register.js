function submitForm() {
    // Handle form submission using jQuery AJAX
    $.ajax({
      type: 'POST',
      url: './php/register.php', // Replace with the actual path to your signup.php file
      data: $('#signupForm').serialize(),
      success: function (response) {
        // Handle the response from the server 
        window.location.href = 'login.html';
        console.log(response);
      },
      error: function (error) {
        // Handle errors (e.g., display an error message)
        console.error(error);
      }
      
    });
  }