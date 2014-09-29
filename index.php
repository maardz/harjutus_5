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

</body>
</html>