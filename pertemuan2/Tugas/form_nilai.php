<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container mt-5">
        <h1>Form Nilai Siswa</h1>

        <?php
        //periksa metode pengiriman data (POST atau GET)
         if ($_SERVER["REQUEST_METHOD"] == "POST"){
            //ambil data dari POST
            $nama = isset($_POST['nama']) ? $_POST['nama'] : '';
            $matkul = isset($_POST['matkul']) ? $_POST['matkul'] : '';
            $nilaiuts = isset($_POST['nilaiuts']) ? $_POST['nilaiuts'] : '';
            $nilaiuas = isset($_POST['nilaiuas']) ? $_POST['nilaiuas'] : '';
            $tugas = isset($_POST['tugas']) ? $_POST['tugas'] : '';

        $datauser = array(
                "nama" => $nama,
                "matkul" => $matkul,
                "nilaiuts" => $nilaiuts,
                "nilaiuas" => $nilaiuas,
                "tugas" => $tugas,
                );

        echo "<h2> Data yang dikirim melalui POST : </h2>";
        echo '<ul class= "list-group">';  

        foreach ($datauser as $key => $value){
            if (!empty($value)){
                echo '<li class="list-group-item"><strong>'
                .ucfirst($key) . '</strong>' .htmlspecialchars($value) . '</li>';
            }
            else {
                echo '<li class="list-group-item"><strong>' 
                .ucfirst($key) .'</strong> Data Kosong</li>';
            }
        }      
    }

        ?>

    </div>
</body>
</html>