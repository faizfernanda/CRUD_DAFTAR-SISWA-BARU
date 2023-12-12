<?php include("config.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Siswa Baru | SMK Coding</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .wrapper {
            max-width: 800px;
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

        nav {
            text-align: center;
        }

        nav a {
            text-decoration: none;
            color: #333;
            margin: 10px;
            padding: 5px 10px;
            border: 1px solid #333;
            border-radius: 5px;
            background-color: #fff;
            transition: background-color 0.3s, color 0.3s;
        }

        nav a:hover {
            background-color: #333;
            color: #fff;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #333;
            color: #fff;
        }

        tbody tr:hover {
            background-color: #f5f5f5;
        }

        p {
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <div class="wrapper">

        <header>
            <h3>Siswa yang sudah mendaftar</h3>
        </header>
        
        <nav>
            <a href="index.php">Kembali</a>
            <a href="form-daftar.php">[+] Tambah Baru</a>
        </nav>
        
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Jenis Kelamin</th>
                    <th>Agama</th>
                    <th>Sekolah Asal</th>
                    <th>Tindakan</th>
                </tr>
            </thead>
            <tbody>
                
                <?php
                $sql = "SELECT * FROM siswa";
                $query = mysqli_query($db, $sql);
                
                while($siswa = mysqli_fetch_array($query)){
                    echo "<tr>";
                    
                    echo "<td>".$siswa['id']."</td>";
                    echo "<td>".$siswa['nama']."</td>";
                    echo "<td>".$siswa['alamat']."</td>";
                    echo "<td>".$siswa['jenis_kelamin']."</td>";
                    echo "<td>".$siswa['agama']."</td>";
                    echo "<td>".$siswa['sekolah_asal']."</td>";
                    
                    echo "<td>";
                    echo "<a href='form-edit.php?id=".$siswa['id']."'>Edit</a> | ";
                    echo "<a href='hapus.php?id=".$siswa['id']."'>Hapus</a>";
                    echo "</td>";
                    
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>

        <p>Total: <?php echo mysqli_num_rows($query) ?></p>

    </div>
</body>
</html>
