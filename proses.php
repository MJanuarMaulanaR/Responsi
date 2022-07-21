
<?php
echo "<head><title>PESANAN</head></title>";
$fp =fopen("pesanan.txt","a+");
$nama = $_POST ['nama'];
$alamat = $_POST ['alamat'];
$email  = $_POST ['email'];
$nomerHP  = $_POST ['nomerHP'];
$PESANAN = $_POST ['PESANAN'];
fputs($fp, "$nama|$alamat|$email|$nomerHP|$PESANAN\n");
fclose($fp);

echo "Terima Kasih <br>";
echo "<a href=lihat.php> Lihat PESANAN </a><br>";
?>