<?php
// Kode ini akan menyimpan data login ke dalam database

$servername = "nama_server";
$username = "nama_pengguna";
$password = "kata_sandi";
$dbname = "nama_database";

// Mendapatkan data dari halaman login
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
}

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Melakukan penyimpanan data ke dalam tabel 'users'
$sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";

if ($conn->query($sql) === TRUE) {
    echo "Data login berhasil disimpan ke dalam database";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
