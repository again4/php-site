$(document).ready(function() {
    $('#comment-form').submit(function(event) {
        event.preventDefault(); // Prevent default form submission
        var formData = new FormData($(this)[0]); // Create FormData object to handle file upload
        $.ajax({
            url: 'process_comment.php', // Replace with the URL of your server-side script
            method: 'POST',
            data: formData,
            processData: false, // Prevent jQuery from processing data
            contentType: false, // Prevent jQuery from setting contentType
            success: function(response) {
                $('#message').html(response); // Display response message
            },
            error: function(xhr, status, error) {
                console.error(error);
            }
        });
    });
});
