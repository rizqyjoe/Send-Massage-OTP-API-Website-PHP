<?php
include "koneksi.php";

echo "<h1>WHATSAPP SEND MESSAGE</h1>";
for($i=0;$i<$_POST['jumlah'];$i++){
	$urut = $i+1;
	$no = $_POST['no'.$i];
	$pesan= $_POST['pesan'.$i];
	if(trim($no)!="" and trim($pesan)!=""){
		$query = "insert into WAMESSAGE(NO,PESAN)values('$no','$pesan')";
		$mysqli->query($query);
		
		echo $urut.". No. Whatsapp : ".$no ." , Pesan : ".$pesan. "\t";
?>
		<input type="submit" name="kirimwa" value="KIRIM" onclick="window.open('https://api.whatsapp.com/send?phone=<?php echo $no; ?>&text=<?php echo $pesan; ?>')"/>
		<br /> <br />
<?php
	}
}
?>
<input type=button onclick="window.location.href='m_index.html';" value="Buat Form Baru"/>
<?php
$mysqli->close();
?>