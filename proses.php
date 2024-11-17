<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Proses</title>
   <link rel="stylesheet" href="proses.css">
</head>
<body>
    <div class="container">
    <?php

if (!isset($_POST['submit'])) {
    header("Location: index.php");
    exit;
}

$username = trim($_POST["username"]);
$email = trim($_POST["email"]);
$password = trim($_POST["password"]);
$repassword = trim($_POST["repassword"]);
$nama = trim($_POST["nama"]);
$nim = trim($_POST["nim"]);
$tgl = trim($_POST["tgl"]);
$bln = trim($_POST["bln"]);
$thn = trim($_POST["thn"]);
$alamat = trim($_POST["alamat"]);
$kelamin = isset($_POST["kel"]) ? trim($_POST["kel"]) : "";
$target1 = isset($_POST["target1"]) ? trim($_POST["target1"]) : "";
$target2 = isset($_POST["target2"]) ? trim($_POST["target2"]) : "";
$target3 = isset($_POST["target3"]) ? trim($_POST["target3"]) : "";

$errors = [];

if (empty($nama)) {
    $errors[] = "Nama wajib diisi.";
}

if (empty($nim)) {
    $errors[] = "NIS wajib diisi.";
}

if (empty($tgl) || empty($bln) || empty($thn)) {
    $errors[] = "Tanggal lahir harus lengkap (tanggal, bulan, dan tahun).";
}

if (empty($alamat)) {
    $errors[] = "Alamat wajib diisi.";
}

if (empty($kelamin)) {
    $errors[] = "Jenis kelamin harus dipilih.";
}

if (empty($username)) {
    $errors[] = "Username wajib diisi.";
}

if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = "Email tidak valid.";
}

if (empty($password)) {
    $errors[] = "Password wajib diisi.";
}

if ($password !== $repassword) {
    $errors[] = "Konfirmasi password tidak cocok.";
}

if (empty($target1) || empty($target2) || empty($target3)) {
    $errors[] = "Resolusi tahun ini harus dicentang semua.";
}

if (!empty($errors)) {
    $pesan = implode(", ", $errors);
    header("Location: index.php?pesan=" . urlencode($pesan));
    exit();
}

echo "<h1> Hai, " . htmlspecialchars($nama) . "</h1>";
echo "<p><span class='highlight'>Nama:</span> " . htmlspecialchars($nama) . "</p>";
echo "<p><span class='highlight'>NIS:</span> " . htmlspecialchars($nim) . "</p>";
echo "<p><span class='highlight'>Tanggal Lahir:</span> " . htmlspecialchars($tgl) . " - " . htmlspecialchars($bln) . " - " . htmlspecialchars($thn) . "</p>";
echo "<p><span class='highlight'>Alamat:</span> " . htmlspecialchars($alamat) . "</p>";
echo "<p><span class='highlight'>Jenis Kelamin:</span> " . htmlspecialchars($kelamin) . "</p>";
echo "<p><span class='highlight'>Username:</span> " . htmlspecialchars($username) . "</p>";
echo "<p><span class='highlight'>Alamat Email:</span> " . htmlspecialchars($email) . "</p>";
echo "<p><span class='highlight'>Password:</span> " . htmlspecialchars($password) . "</p>";
echo "<p><span class='highlight'>Konfirmasi Password:</span> " . htmlspecialchars($repassword) . "</p>";
echo "<p><span class='highlight'>Target1:</span> " . htmlspecialchars($target1) . "</p>";
echo "<p><span class='highlight'>Target2:</span> " . htmlspecialchars($target2) . "</p>";
echo "<p><span class='highlight'>Target3:</span> " . htmlspecialchars($target3) . "</p>";

?>

    </div>
</body>
</html>