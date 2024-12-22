<?php
include('./../includes/db.php'); 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $fullname = filter_input(INPUT_POST, 'fullname', FILTER_SANITIZE_STRING);
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    $errors = [];

    if (empty($fullname) || empty($username) || empty($email) || empty($password) || empty($confirm_password)) {
        $errors[] = "All fields are required.";
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format.";
    } else if (strlen($password) < 8) {
        $errors[] = "Password must be at least 8 characters long.";
    } else if ($password !== $confirm_password) {
        $errors[] = "Passwords do not match. Please try again.";
    }


    if (empty($errors)) {
        $stmt = $pdo->prepare("SELECT COUNT(*) FROM users WHERE username = ?");
        $stmt->execute([$username]);
        $userExists = $stmt->fetchColumn();
        if ($userExists) {
            $errors[] = "Username already exists. Please choose a different one.";
        }
    }

   
    if (empty($errors)) {
        $stmt = $pdo->prepare("SELECT COUNT(*) FROM users WHERE email = ?");
        $stmt->execute([$email]);
        $emailExists = $stmt->fetchColumn();
        if ($emailExists) {
            $errors[] = "Email already in use. Please use a different email address.";
        }
    }

    // If there are validation errors, return them as JSON
    if (!empty($errors)) {
        echo json_encode([
            'success' => false,
            'errors' => $errors
        ]);
        exit;
    }

    // Hash the password
    $password_hash = password_hash($password, PASSWORD_DEFAULT);

    // Insert user into the database
    try {
        $stmt = $pdo->prepare("INSERT INTO users (full_name, username, email, password_hash) VALUES (?, ?, ?, ?)");
        if ($stmt->execute([$fullname, $username, $email, $password_hash])) {
            echo json_encode([
                'success' => true,
                'message' => "Signup successful! You can now log in."
            ]);
        } else {
            echo json_encode([
                'success' => false,
                'message' => "Error: Could not create account. Please try again later."
            ]);
        }
    } catch (PDOException $e) {
        echo json_encode([
            'success' => false,
            'message' => "Database error: " . $e->getMessage()
        ]);
    }
}
?>
