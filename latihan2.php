<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan2</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        table {
            width: 45%;
            border: 2px solid black; 
        }
        th {
            background-color: #f2f2f2; 
            border: 2px solid black;   
            padding: 8px;              
            text-align: left;        
        }
        td {
            border: 2px solid black;   
            padding: 8px;              
            text-align: left;     
        }
        h2 {
            font-family:Times;
        }
    </style>
</head>
<body>
<h2>Daftar Nilai Mahasiswa</h2>
    <table>
        <tr>
            <th>NO</th>
            <th>NPM</th>
            <th>NAMA MAHASISWA</th>
            <th>NILAI</th>
            <th>KETERANGAN</th>
        </tr>
        <?php
        // Array data mahasiswa
        $mahasiswa = [
            ["npm" => "001", "nama" => "Chayra", "nilai" => 80],
            ["npm" => "002", "nama" => "Archelia", "nilai" => 75],
            ["npm" => "003", "nama" => "Lalan", "nilai" => 50],
            ["npm" => "004", "nama" => "Fuji", "nilai" => 90],
            ["npm" => "005", "nama" => "Ridwan Taufik", "nilai" => 100]
        ];

        // Tampilkan data ke tabel
        $no = 1;
        foreach ($mahasiswa as $mhs) {
            $keterangan = $mhs["nilai"] >= 60 ? "Lulus" : "Tidak Lulus";
            echo "<tr>";
            echo "<td>$no</td>";
            echo "<td>{$mhs['npm']}</td>";
            echo "<td>{$mhs['nama']}</td>";
            echo "<td>{$mhs['nilai']}</td>";
            echo "<td>$keterangan</td>";
            echo "</tr>";
            $no++;
        }
        ?>
    </table>
</body>
</html>