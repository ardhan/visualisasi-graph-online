<!DOCTYPE HTML>
<html>
<head>
	<title>Graph</title>
<style>
	#formGraph{
		margin: 0 auto 0 auto;
		padding:20px;
		background-color: #c1c1c1;
		width:500px;
	}
	
	h1{
		text-align:center;
	}
</style>
</head>

<body>
<?php 
	include("../headerDemo.php");
	echo new headerDemo("http://www.rahmanu.com/2017/02/18/visualisasi-graph-online-menggunakan-php-dan-dracula/", "Visualisasi Graph Online Menggunakan PHP dan Dracula");
?>
	<form id="formGraph" action="nodeName.php" method="POST">
		<h1>Membuat Graph</h1>
		<table width="100%">
			<tr>
				<td align="right">Banyaknya Titik</td>
				<td>:</td>
				<td><input type="text" name="jumlahTitik"><input type="submit" value="Lanjut"></td>
			</tr>
		</table>
	</form>
</body>
</html>
