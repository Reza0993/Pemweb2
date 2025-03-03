<?php
$siswa = ["ean", "han", 
            "rey", "rei"];

echo "Array awal : <br>";
print_r($siswa);

$orang_terakhir = array_pop($siswa);
echo "<br> Elemen yang akan dihapus " .$orang_terakhir;
echo "<br> Array setelah penghapusan : <br>";
print_r($siswa);
?>














