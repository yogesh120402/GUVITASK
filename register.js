function submitForm() {
    $.ajax({
      type: 'POST',
      url: './php/register.php', 
      data: $('#signupForm').serialize(),
      success: function (response) {
        window.location.href = 'login.html';
        console.log(response);
      },
      error: function (error) {
        console.error(error);
      }
      
    });
  }
