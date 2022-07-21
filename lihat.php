<?php
echo "<head><title>PESANAN</title></head>";
$fp = fopen("PESANAN.txt", "r");
echo "<table border='0'>";

while ($isi = fgets($fp))
{
    $pisah = explode("|", $isi);
    echo "<tr><td>Nama </td><td>: $pisah[0]</td></tr>";
    echo "<tr><td>Alamat </td><td>: $pisah[1]</td></tr>";
    echo "<tr><td>Email </td><td>: $pisah[2]</td></tr>";
    echo "<tr><td>NomerHP </td><td>: $pisah[3]</td></tr>";
    echo "<tr><td>PESANAN </td><td>: $pisah[4]</td></tr>";
    echo "<tr><td><br></td><td><br></td></tr>";

}
    echo "</table>";
    ?>
