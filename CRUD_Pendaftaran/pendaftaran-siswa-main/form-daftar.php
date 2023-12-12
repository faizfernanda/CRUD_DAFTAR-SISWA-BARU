<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pendaftaran Siswa Baru | SMK Coding</title>
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
            color: #fff;
            text-decoration: none;
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
            <h3>Formulir Pendaftaran Siswa Baru</h3>
            <a href="index.php">Kembali</a>
        </header>
        
        <form action="proses-pendaftaran.php" method="POST" class="registration-form">
            
            <fieldset>
                
                <p>
                    <label for="nama">Nama: </label>
                    <input type="text" name="nama" placeholder="Masukkan nama" />
                </p>
                <p>
                    <label for="alamat">Alamat: </label>
                    <textarea name="alamat" placeholder="Masukkan alamat"></textarea>
                </p>
                <p>
                    <label for="jenis_kelamin">Jenis Kelamin: </label>
                    <label><input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-laki</label>
                    <label><input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan</label>
                </p>
                <p>
                    <label for="agama">Agama: </label>
                    <select name="agama">
                        <option>Islam</option>
                        <option>Kristen</option>
                        <option>Hindu</option>
                        <option>Budha</option>
                        <option>Khonghucu</option>
                    </select>
                </p>
                <p>
                    <label for="sekolah_asal">Sekolah Asal: </label>
                    <input type="text" name="sekolah_asal" placeholder="Masukkan nama sekolah" />
                </p>
                <p>
                    <input type="submit" value="Daftar" name="daftar" />
                </p>
                
            </fieldset>
            
        </form>
    </div>
</body>
</html>
