<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $emailParts = explode('@', $email);
    $domain = count($emailParts) == 2 ? $emailParts[1] : "";

    if ($password === $domain) {
        $_SESSION['email'] = $email;
        header("Location: form.php");
        exit();
    } else {
        $error = "Email atau password salah!";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body { 
            font-family: Arial, sans-serif; 
            text-align: center; 
            height: 100vh; 
            display: flex; 
            justify-content: center; 
            align-items: center; 
            margin: 0;
            background: url('asset/3409297.jpg') no-repeat center center fixed;
            background-size: cover;
        }

        .container { 
            background: rgba(255, 255, 255, 0.2); 
            padding: 30px; 
            border-radius: 10px; 
            box-shadow: 0 4px 10px rgba(255, 255, 255, 0.2); 
            width: 350px; 
            text-align: left;
            backdrop-filter: blur(10px);
        }

        h2 {
            text-align: center;
            color: white;
        }

        label {
            color: white;
            font-weight: bold;
        }

        input {
            width: 100%; 
            padding: 10px; 
            margin: 10px 0; 
            border: 1px solid #ccc; 
            border-radius: 5px;
        }

        button {
            width: 100%; 
            background: #1e3c72; 
            color: white; 
            border: none; 
            padding: 10px; 
            border-radius: 5px; 
            cursor: pointer;
        }

        button:hover { 
            background: #2a5298; 
        }

        .error {
            color: red;
            text-align: center;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Login</h2>
        <?php if (!empty($error)) echo "<p class='error'>$error</p>"; ?>
        <form method="POST">
            <label>Email:</label>
            <input type="email" name="email" required>
            <label>Password:</label>
            <input type="password" name="password" required>
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>
