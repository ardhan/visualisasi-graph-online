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
<script language="javascript" src="jquery.min.js"></script>
<script language="javascript" src="raphael.min.js"></script>
<script language="javascript" src="graffle.js"></script>
<script language="javascript" src="graph.js"></script>
<script language="javascript" src="algorithms.js"></script>
<?php
$nmTitik = explode(",", $_POST["nmTitik"]);
$node = $_POST["node"];

echo '<script language="javascript">';
echo 'var redraw;';
echo 'var height = 300;';
echo 'var width = 700;';
echo 'window.onload = function() {';
echo 'var g = new Graph();';

for($i=1;$i<=count($node);$i++){
	for($j=$i;$j<=count($node);$j++){
		if($node[$j][$i] > 0){
			echo 'g.addEdge("'.$nmTitik[$i-1].'", "'.$nmTitik[$j-1].'", { color : "#38a" , colorbg : "#bdf", label:"'.$node[$j][$i].'" });';
		}
	}
}

echo 'var layouter = new Graph.Layout.Spring(g);';
echo 'layouter.layout();';
echo "var renderer = new Graph.Renderer.Raphael('canvas', g, width, height);";
echo 'renderer.draw();';
echo '};';
echo '</script>';
?>
</head>

<body>
<?php 
	include("../headerDemo.php");
	echo new headerDemo("http://www.rahmanu.com/2017/02/18/visualisasi-graph-online-menggunakan-php-dan-dracula/", "Visualisasi Graph Online Menggunakan PHP dan Dracula");
?>
<div id="canvas" style="border: 1px solid red;"></div>
<div>
<a style="display:block" href="http://demo.rahmanu.com/visualisasi-graph-online-menggunakan-php-dan-dracula/">ULANGI DARI AWAL</a>
<button style="display:block" onClick="history.back()">Kembali</button>
</div>
</body>
</html>
