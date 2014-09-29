<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<h2>Booleans</h2>
  <?php
  	$result_1 = True;
  	$result_2 = False;
  	echo $result_1;
  	echo "<br>";
  	echo $result_2;
  	echo "<br>";
  	echo "Result 1:". $result_1;
  	echo "<br>";
  	echo "Result 2:". $result_2;
  	echo "<br>";
  	echo "Kas result 1 on boolean?"." ".is_bool($result_1);
  	echo "<br>";
  	echo "Kas result 2 on boolean?"." ".is_bool($result_2);
  	echo "<br>";
  	$result_3 = "Boolean?";
  	echo "Kas result 3 on boolean?"." ".is_bool($result_3);
  	echo "<br>";
  ?>
  <h2>Andmetüüpide olekud</h2>
  <h3>NULL</h3>
  <?php 
  	$var1 = null;
  	$var2 = "";
  	$var3 = 0;
  	$var4;
  	echo "Kas var 1 on NULL?"." ".is_null($var1);
  	echo "<br>";
  	echo "Kas var 2 on NULL?"." ".is_null($var2);
  	echo "<br>";
  	echo "Kas var 3 on NULL?"." ".is_null($var3);
  	echo "<br>";
  	echo "Kas var 4 on NULL?"." ".is_null($var4);
  	echo "<br>"

  ?>

  <h3>Set</h3>
  

</body>
</html>