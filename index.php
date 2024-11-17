<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
<div class="container">
    <h1>Form Registrasi</h1>
    <?php
    if (isset($_GET['pesan'])) {
        echo "<p style='color:red;'>" . htmlspecialchars($_GET['pesan']) . "</p>";
    }
    ?>
    <form action="proses.php" method="post">
        <fieldset>
            <legend>Biodata</legend>
            <p>
                <label for="nama">Nama : </label>
                <input type="text" name="nama" id="nama" placeholder="Masukkan nama Anda">
            </p>
            <p>
                <label for="nim">NIS : </label>
                <input type="text" name="nim" id="nim" placeholder="Masukkan NIS Anda">
            </p>
            <p>
                <label for="tgl">Tanggal Lahir : </label>
                <select name="tgl" id="tgl">
                    <?php
                    for ($i = 1; $i <= 31; $i++) {
                        echo "<option value='$i'>" . str_pad($i, 2, "0", STR_PAD_LEFT) . "</option>";
                    }
                    ?>
                </select>
                <select name="bln">
                    <option value="1">Januari</option>
                    <option value="2">Februari</option>
                    <option value="3">Maret</option>
                    <option value="4">April</option>
                    <option value="5">Mei</option>
                    <option value="6">Juni</option>
                    <option value="7">Juli</option>
                    <option value="8">Agustus</option>
                    <option value="9">September</option>
                    <option value="10">Oktober</option>
                    <option value="11">Nopember</option>
                    <option value="12">Desember</option>
                </select>
                <select name="thn">
                    <?php
                    for ($i = 1980; $i <= 2016; $i++) {
                        echo "<option value='$i'>$i</option>";
                    }
                    ?>
                </select>
            </p>
            <p>
                <label for="alamat">Alamat </label>
                <textarea name="alamat" id="alamat" cols="25" placeholder="Masukkan alamat Anda"></textarea>
            </p>
            <p>
                <label>Jenis kelamin</label>
                <label><input type="radio" name="kel" value="laki2"> Laki-laki</label>
                <label><input type="radio" name="kel" value="perempuan"> Perempuan</label>
            </p>
        </fieldset>

        <fieldset>
            <legend align="">User Account</legend>
            <p>
                <label for="username">Username</label>
                <input type="text" name="username" id="username" placeholder="Masukkan username Anda"/>
            </p>
            <p>
                <label for="email">Email </label>
                <input type="text" name="email" id="email" placeholder="Masukkan email Anda" />
            </p>
            <p>
                <label for="pass">Password</label>
                <input type="password" name="password" id="pass" placeholder="Masukkan password Anda" />
            </p>
            <p>
                <label for="repass">Ulangi Password</label>
                <input type="password" name="repassword" id="repass" placeholder="Ulangi password Anda" />
            </p>
        </fieldset>
        <fieldset>
            <legend>Resolusi Tahun Ini</legend>
            <div class="wrapper">
            <p class="remember-forgot">
                <input type="checkbox" name="target1" value="HTML" id="html">
                <label for="html"> Menguasai HTML</label>
            </p>
            <p class="remember-forgot">
                <input type="checkbox" name="target2" value="CSS" id="css">
                <label for="css"> Paham CSS</label>
            </p>
            <p class="remember-forgot">
                <input type="checkbox" name="target3" value="PHP" id="php">
                <label for="php"> Mastering PHP</label>
            </p>
            </div>

        </fieldset>
        <br>
        <p>
            <input type="submit" name="submit" value="Kirim Data">
            <input type="reset" value="Reset Data">
        </p>
     
    </form>
</div>
</body>
</html>
