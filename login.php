<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include_once 'connection.php';
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM user WHERE email = :email AND password = :password";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $password);
    $stmt->execute();
    if ($stmt->rowCount() > 0) {
        $_SESSION['user_email'] = $email;
        echo "<script>alert('Login successful!');window.location = 'index.php';</script>";
    } else {
        echo "<script>alert('Login failed! Email or Password is incorrect.');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Login</title>
</head>

<body>
    <div class="wrapper">
        <div class="formcontainer">
            <form action="" method="post">
                <h1>Login</h1>
                <div class="input-box">
                    <input type="email" name="email" placeholder="Email" required>
                </div>
                <div class="input-box">
                    <input type="password" name="password" placeholder="Password" required>
                </div>
                <div class="remember-forgot">
                    <label><input type="checkbox"> Remember me</label>
                </div>
                <button type="submit" class="btn">Login</button>
            </form>
            <div class="links">
                <p>New user? <a href="signup.html">Create an account.</a></p>
            </div>
        </div>
    </div>
</body>

</html>