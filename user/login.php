<?php
include('includes/db.php'); 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Check if email exists in the database
    $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->execute([$email]);
    $user = $stmt->fetch();

    if ($user) {
        // Verify the password
        if (password_verify($password, $user['password_hash'])) {
            // Login successful, create session
            $_SESSION['user_id'] = $user['user_id'];
            $_SESSION['username'] = $user['username'];

            echo "Login successful!";
        } else {
            echo "Incorrect password.";
        }
    } else {
        echo "No user found with that email.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            background-color: #f5f5f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: 'Arial', sans-serif;
        }
        .login-container {
            background-color: #1a1a1a;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 400px;
        }
        .form-control {
            background-color: #333;
            border: none;
            color: #fff;
        }
        .form-control::placeholder {
            color: #aaa;
        }
        .form-check-label {
            color: #fff;
        }
        .btn-login {
            background-color: #F2613F;
            border: none;
            color: #fff;
            font-weight: bold;
            transition: background-color 0.3s;
        }
        .btn-login:hover {
            background-color: #D95A2A;
        }
        .forgot-password, .sign-up {
            color: #F2613F;
            transition: color 0.3s;
        }
        .forgot-password:hover, .sign-up:hover {
            text-decoration: underline;
            color: #D95A2A;
        }
        .input-group-text {
            background-color: #333;
            border: none;
            color: #fff;
        }
        .input-group-text i {
            color: #F2613F;
        }
        .text-white {
            color: #fff;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2 class="text-center text-white mb-4">Login</h2>
        <div id="loginStatus"></div>
        <form id="loginForm" method="POST">
            <div class="mb-3">
                <label for="email" class="form-label text-white">Email</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                    <input type="email" name="email" class="form-control" id="email" placeholder="Enter your email" required>
                </div>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label text-white">Password</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="fas fa-lock"></i></span>
                    <input type="password" name="password" class="form-control" id="password" placeholder="Enter your password" required>
                    <span class="input-group-text"><i class="fas fa-eye-slash"></i></span>
                </div>
                <div class="d-flex justify-content-end">
                    <a href="#" class="forgot-password">Forgot Password?</a>
                </div>
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="rememberMe">
                <label class="form-check-label" for="rememberMe">Remember Me</label>
            </div>
            <button type="submit" class="btn btn-login w-100">Login</button>
            <div class="text-center mt-3">
                <span class="text-white">Don't have an account? <a href="?page=register" class="sign-up">Sign Up</a></span>
            </div>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src=""></script>
    <script src="./../assets/js/main.js"></script>
</body>
</html>