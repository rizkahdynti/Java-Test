<?php
$koneksi = new mysqli("localhost", "root", "","data_cust");
$hasil = $koneksi -> query("SELECT * FROM customer");
$output = "";
while($rs = $hasil->fetch_array(MYSQLI_ASSOC)) {
    if ($output != "") {$output .= ",";}
    $output .= '{"ID":"' .$rs{"CUST_ID"}   .'",';
    $output .= '"Nama":"' .$rs{"NAMA"}   .'",';
    $output .= '"Alamat":"' .$rs{"ALAMAT"}   .'",';
    $output .= '"Kota":"' .$rs{"ID_KOTA"}   .'",';
    $output .= '"Pendapatan":"' .$rs{"PENDAPATAN"}   .'",';
}
$output ='{"costumerx":['.$output.']}';
$koneksi->close();
echo($output);
?>