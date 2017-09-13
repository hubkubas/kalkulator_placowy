<?php

if(isset($_POST['pensjaBrutto'])){
	$pensjaBrutto = $_POST['pensjaBrutto'];
	$pensjaNetto = $pensjaBrutto * 0.7034;
	$sklzdr = $pensjaBrutto * 0.078;
	$ubechor = $pensjaBrutto * 0.025;
	$uberent = $pensjaBrutto * 0.015;
	$ubeemer = $pensjaBrutto * 0.098;
	$zalpit = $pensjaBrutto * 0.0818;
	$ubrut = $pensjaBrutto * 1.206;
	echo "<table align=center style=text-align:center border=5>
	<tr> <td><font color=blue>Wynagrodzenie brutto</td> <td><font color=blue>$pensjaBrutto PLN</font></td></tr>
	<tr> <td><font color=red><b>Wynagrodzenie netto</b></td> <td><font color=red><b>$pensjaNetto PLN</b></font></td></tr>
	<tr> <td><font color=black>Składka zdrowotna</td> <td>$sklzdr PLN</font></td></tr>
	<tr> <td><font color=black>Ubezpieczenie chorobowe</td> <td>$ubechor PLN</font></td></tr>
	<tr> <td><font color=black>Ubezpieczenie rentowe</td> <td>$uberent PLN</font></td></tr>
	<tr> <td><font color=black>Ubezpieczenie emerytalne</td> <td>$ubeemer PLN</font></td></tr>
	<tr> <td><font color=black>Zaliczka na PIT</td> <td>$zalpit PLN</font></td></tr>
	<tr> <td><font color=green>Koszt pracodawcy</td> <td><font color=green>$ubrut PLN</font></td></tr>
	</table>";
}
if( isset( $_POST['pensjaNett'] ) ){
$pensjaNett = $_POST['pensjaNett'];
$pensjaBrut = $pensjaNett * 1.4256;
$sklzdr = $pensjaNett * 0.1100;
$ubechor = $pensjaNett * 0.0349;
$uberent = $pensjaNett * 0.0213;
$ubeemer = $pensjaNett * 0.1391;
$zalpit = $pensjaNett * 0.1195;
$ubrut = $pensjaBrut * 1.206;

echo "<table align=center style=text-align:center border=5>
<tr> <td><font color=blue>Wynagrodzenie netto</td> <td><font color=blue>$pensjaNett PLN</font></td></tr>
<tr> <td><font color=red><b>Wynagrodzenie Brutto</b></td> <td><font color=red><b>$pensjaBrut PLN</b></font></td></tr>
<tr> <td><font color=black>Składka zdrowotna</td> <td>$sklzdr PLN</font></td></tr>
<tr> <td><font color=black>Ubezpieczenie chorobowe</td> <td>$ubechor PLN</font></td></tr>
<tr> <td><font color=black>Ubezpieczenie rentowe</td> <td>$uberent PLN</font></td></tr>
<tr> <td><font color=black>Ubezpieczenie emerytalne</td> <td>$ubeemer PLN</font></td></tr>
<tr> <td><font color=black>Zaliczka na PIT</td> <td>$zalpit PLN</font></td></tr>
<tr> <td><font color=green>Koszt pracodawcy</td> <td><font color=green>$ubrut PLN</font></td></tr>
</table>";
}
?>