<!DOCTYPE html>
<html>
    <head>
        <title>Data History</title>
        <style type="text/css">
        table{
            border-collapse:collapse;
            width:100%;
            color:#d96459;
            font-family:monospace;
            font-size:25px;
            text-align:left;
            border:1px solid black;
        }

        th{
            background-color:$588c7e;
            color:white;
            border:1px solid black;
        }
        tr:nth-child(even){
            background-color:#f2f2f2
        }
        </style>
    </head>
<body>
<h1>SHOW DATA HISTORY</h1>
    
	<input type=button onclick="window.location.href='index.php';" value="Kembali ke Menu"/> <br><br>

<h2>WA MESSAGE DATA</h2>
<table>
    <style>
    th{
        color:black;
    }   
    </style>
    <tr>
        <th>ID</th>
        <th>No. Whatsapp</th>
        <th>Pesan</th>
    </tr>
	
    <?php

include "koneksi.php";
 
	$sql="SELECT M_ID,NO,PESAN from WAMESSAGE";
    $result = $mysqli-> query($sql);

    if($result-> num_rows>0){
        while($row = $result->fetch_assoc()){
            echo "<tr><td>".$row["M_ID"]."</td><td>". $row["NO"]."</td><td>".$row["PESAN"]."</td></tr>";
        }
        echo "</table>";
    }
    else {
        echo "0 result";
    }
?>
</table>

<br><br>

<h2>WA OTP DATA</h2>
<table>
    <style>
    th{
        color:black;
    }   
    </style>
	<tr>
        <th>ID</th>
        <th>No. Whatsapp</th>
        <th>OTP</th>
    </tr>
<?php

	$sql="SELECT O_ID,NO,OTP from WAOTP";
    $result = $mysqli-> query($sql);

    if($result-> num_rows>0){
        while($row = $result->fetch_assoc()){
            echo "<tr><td>".$row["O_ID"]."</td><td>". $row["NO"]."</td><td>".$row["OTP"]."</td></tr>";
        }
        echo "</table>";
    }
    else {
        echo "0 result";
    }

    $mysqli-> close();
    ?>
</table>
</body>
</html>