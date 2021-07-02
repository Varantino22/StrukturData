<?php
$teks = "Kamu maag, minum promaag aja ";
$filter = array(".", ",", "?", "!", "(", ")", "-", "&", "+", "_", "=", ":");
$teksfilter = str_replace($filter, "=", $teks);

$kata   = explode(" ", $teksfilter);
$hasil  = count($kata);
$data   = array_count_values($kata);
echo $teksfilter;
echo "<h3>Teks</h3> <br> $teks 
<br>
<br>
<br>
<strong>1. Ada berapa kata pada berita di atas</strong>
<br>
Jumlah Kata : <strong>$hasil</strong> buah kata 
<br>
<strong> 2.	Mencari dan menghitung kata </strong> ";
foreach ($data as $x => $x_value) {
    echo $x . " = " . $x_value . " kata";
    echo "<br>";
}
echo "<br><b>3.	Urutkan kata kata yang terdapat pada kalimat berita di atas<br> Pengurutan di mulai dari ANGKA, HURUF BESAR, HURUF KECIL</b><br>";
sort($kata);
echo implode(" ", $kata);
?>