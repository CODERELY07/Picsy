$(document).ready(function () {
    $('#registerForm').on('submit', function (e) {
        e.preventDefault();
        var formData = $(this).serialize();
    
        $.ajax({
            url: 'auth/signup_action.php',
            type: 'POST',
            data: formData,
            dataType: 'json', 
            success: function (response) {
                if (response.success) {
                    $('#registerForm')[0].reset();
                    $('#registerStatus').html('<div class="alert alert-success">' + response.message + '</div>');
                } else {
                    var errorMessages = '<div class="alert alert-danger"><ul>';
                    if (response.errors) {
                        response.errors.forEach(function (error) {
                            errorMessages += '<li>' + error + '</li>';
                        });
                    } else {
                        errorMessages += '<li>' + response.message + '</li>';
                    }
                    errorMessages += '</ul></div>';
                    $('#registerStatus').html(errorMessages);
                }
            },
            error: function () {
                $('#registerStatus').html('<div class="alert alert-danger">Error during registration. Please try again.</div>');
            }
        });
    });
    
    

    $('#uploadForm').on('submit', function (e) {
        e.preventDefault();
        var formData = new FormData(this);

        $.ajax({
            url: 'user/upload_photo.php',
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function (response) {
                $('#uploadStatus').html(response);
            },
            error: function () {
                $('#uploadStatus').html("Error uploading photo.");
            }
        });
    });
});

$(document).ready(function () {
    let page = 1;

    // Load photos when the page loads
    loadPhotos(page);

    // Load more photos on button click
    $('#loadMore').on('click', function () {
        page++;
        loadPhotos(page);
    });

    function loadPhotos(page) {
        $.ajax({
            url: 'user/load_photos.php',
            type: 'GET',
            data: { page: page },
            success: function (response) {
                $('#photoContainer').append(response);
            }
        });
    }
});
$(document).ready(function () {
    $('#orderForm').on('submit', function (e) {
        e.preventDefault();
        var formData = $(this).serialize();

        $.ajax({
            url: 'user/order.php',
            type: 'POST',
            data: formData,
            success: function (response) {
                $('#orderStatus').html(response);
            },
            error: function () {
                $('#orderStatus').html("Error placing order.");
            }
        });
    });
});
$(document).ready(function () {
    $('#loginForm').on('submit', function (e) {
        e.preventDefault();
        var formData = $(this).serialize();

        $.ajax({
            url: 'user/login.php',
            type: 'POST',
            data: formData,
            success: function (response) {
                $('#loginStatus').html(response);
            },
            error: function () {
                $('#loginStatus').html("Error during login.");
            }
        });
    });
});
