<html>
<head>
	<title>WA Message</title>
</head>
<body>
	<h1>WHATSAPP SEND MESSAGE</h1>
	<form method="post" action="m_multi_insert.php">
<?php
		for($i=0;$i<$_POST['angka'];$i++){
?>
			<label>No. Whatsapp : </label> <input type="text" name="no<?php echo $i?>"/> 
			<label>Pesan : </label> <input type="text" name="pesan<?php echo $i?>"/> <br/>
<?php
		}
?>
		<br/>
		<input type="hidden" name="jumlah" value="<?php echo $_POST['angka']?>"/>
		<input type=button onclick="window.location.href='m_index.html';" value="Kembali"/> <span class="tab"> <input type="submit" value="Submit"/>
	</form>
</body>
</html>
