<?php
session_start();

if ($_SERVER['request_method'] == 'post') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    if ($username == 'admin' && $password == '123') {
        $_SESSION['username'] = $username;
        $_SESSION['role'] = 'dosen';
        header("location: dashboard.php");
        exit;
    } else {
        $error = "username atau password salah!";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
        <title>login</title>
</head>
<body>
<h2>form login</h2>
        <?php if (!empty($error)) echo "<p style='color:red; '>$error</p>"; ?>
    <form method="post">
        username: <input type="text" name="username" required><br><br>
        password: <input type="password" name="password" required><br><br>
        <button type="submit">login</button>
</form>
</body>
</html>