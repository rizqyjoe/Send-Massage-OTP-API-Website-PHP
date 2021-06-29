<?php
include "koneksi.php";

echo "<h1>WHATSAPP SEND OTP</h1>";
for($i=0;$i<$_POST['jumlah'];$i++){
	$urut = $i+1;
	$no = $_POST['no'.$i];
	$otp= rand(100000, 999999);
	if(trim($no)!=""){
		$query = "insert into WAOTP(NO,OTP)values('$no','$otp')";
		$mysqli->query($query);
		
		echo $urut.". No. Whatsapp : ".$no ." , OTP : ".$otp. "\t";
?>
		<input type="submit" name="kirimotp" value="KIRIM" onclick="window.open('https://api.whatsapp.com/send?phone=<?php echo $no; ?>&text=Kode OTP anda: <?php echo $otp; ?> . Mohon untuk dirahasiakan, jangan berikan kode OTP kepada siapapun.')"/>
		<br /> <br />
<?php
	}
}
?>
<input type=button onclick="window.location.href='o_index.html';" value="Buat Form Baru"/>
<?php
$mysqli->close();
?>