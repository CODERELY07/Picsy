<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="robots" content="noindex, nofollow">
    <title>Sign Up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="./assets/css/main.css">
</head>
<body>
    <div class="signup-container">
        <div id="registerStatus"></div>
        <h2 class="text-center text-white mb-4">Sign Up</h2>
        <form id="registerForm" method="POST" autocomplete="off">

            <div class="mb-3">
                <label for="fullname" class="form-label text-white">Full Name</label>
                <input type="text" name="fullname" class="form-control" id="fullname" placeholder="Enter your full name" pattern="^[A-Za-z\s]{3,100}$" title="Full Name should be 3-100 characters long and can only contain letters and spaces.">
            </div>

            <div class="mb-3">
                <label for="username" class="form-label text-white">Username</label>
                <input type="text" name="username" class="form-control" id="username" placeholder="Enter your username" pattern="^[A-Za-z0-9_]{3,20}$" title="Username must be 3-20 characters and can include letters, numbers, and underscores.">
            </div>

            <div class="mb-3">
                <label for="email" class="form-label text-white">Email</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="Enter your email">
            </div>

            <div class="mb-3">
                <label for="password" class="form-label text-white">Password</label>
                <input type="password" name="password" class="form-control" id="password" placeholder="Enter your password" minlength="8" title="Password must be at least 8 characters long.">
            </div>

            <div class="mb-3">
                <label for="confirm_password" class="form-label text-white">Confirm Password</label>
                <input type="password" name="confirm_password" class="form-control" id="confirm_password" placeholder="Confirm your password" minlength="8">
            </div>

            <button type="submit" class="btn btn-signup w-100">Sign Up</button>

            <div class="text-center mt-3">
                <span class="text-white">Already have an account? <a href="login.php" class="sign-up">Log In</a></span>
            </div>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="./assets/js/main.js"></script>
</body>
</html>
