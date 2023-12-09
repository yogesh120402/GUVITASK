function updateProfile() {
            
    $.ajax({
        type: 'POST',
        url: './php/profile.php', // Replace with the actual path to your update_profile.php file
        data: $('#profileForm').serialize(),
        success: function (response) {
       
            alert('Profile updated successfully!');
        },
        error: function (error) {
            // Handle errors (e.g., display an error message)
           // console.error(error);
            alert('An error occurred while updating the profile.');
        }
    });
}