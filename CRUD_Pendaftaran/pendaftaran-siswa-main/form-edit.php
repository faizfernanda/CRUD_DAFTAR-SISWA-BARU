<?php

include("config.php");

// kalau tidak ada id di query string
if( !isset($_GET['id']) ){
    header('Location: list-siswa.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM siswa WHERE id=$id";
$query = mysqli_query($db, $sql);
$siswa = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Edit Siswa | SMK Coding</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .wrapper {
            max-width: 600px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        header {
            text-align: center;
            background-color: #333;
            color: #fff;
            padding: 10px;
        }

        h3 {
            margin: 0;
        }

        a {
            color: #333;
            text-decoration: none;
            display: block;
            margin-bottom: 10px;
        }

        .registration-form {
            display: flex;
            flex-direction: column;
        }

        p {
            margin: 10px 0;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input,
        textarea,
        select {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #333;
            color: #fff;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <header>
            <h3>Formulir Edit Siswa</h3>
            <a href="index.php">Kembali</a>
        </header>
        
        <form action="proses-edit.php" method="POST" class="registration-form">

            <fieldset>
                
                <input type="hidden" name="id" value="<?php echo $siswa['id'] ?>" />
                
                <p>
                    <label for="nama">Nama: </label>
                    <input type="text" name="nama" placeholder="Nama lengkap" value="<?php echo $siswa['nama'] ?>" />
                </p>
                <p>
                    <label for="alamat">Alamat: </label>
                    <textarea name="alamat" placeholder="Masukkan alamat"><?php echo $siswa['alamat'] ?></textarea>
                </p>
                <p>
                    <label for="jenis_kelamin">Jenis Kelamin: </label>
                    <?php $jk = $siswa['jenis_kelamin']; ?>
                    <label><input type="radio" name="jenis_kelamin" value="laki-laki" <?php echo ($jk == 'laki-laki') ? "checked": "" ?>> Laki-laki</label>
                    <label><input type="radio" name="jenis_kelamin" value="perempuan" <?php echo ($jk == 'perempuan') ? "checked": "" ?>> Perempuan</label>
                </p>
                <p>
                    <label for="agama">Agama: </label>
                    <?php $agama = $siswa['agama']; ?>
                    <select name="agama">
                        <option <?php echo ($agama == 'Islam') ? "selected": "" ?>>Islam</option>
                        <option <?php echo ($agama == 'Kristen') ? "selected": "" ?>>Kristen</option>
                        <option <?php echo ($agama == 'Hindu') ? "selected": "" ?>>Hindu</option>
                        <option <?php echo ($agama == 'Budha') ? "selected": "" ?>>Budha</option>
                        <option <?php echo ($agama == 'Atheis') ? "selected": "" ?>>Atheis</option>
                    </select>
                </p>
                <p>
                    <label for="sekolah_asal">Sekolah Asal: </label>
                    <input type="text" name="sekolah_asal" placeholder="Nama sekolah" value="<?php echo $siswa['sekolah_asal'] ?>" />
                </p>
                <p>
                    <input type="submit" value="Simpan" name="simpan" />
                </p>
                
            </fieldset>
            
        </form>
    </div>
</body>
</html>
