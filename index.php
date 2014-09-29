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
  	echo "<br>";
  	echo "<h3>Set</h3>";
  	echo "<br>";
  	echo "Kas var 1 on väärtustatud?"." ".isset($var1);
  	echo "<br>";
  	echo "Kas var 2 on väärtustatud?"." ".isset($var2);
  	echo "<br>";
  	echo "Kas var 3 on väärtustatud?"." ".isset($var3);
  	echo "<br>";
  	echo "Kas var 4 on väärtustatud?"." ".isset($var4);
  	echo "<br>";

  	$var5 = array();
  	$var6 = "0";
  	$var7 = 0.0;
  	$var8 = True;

  	echo "Kas var 1 on empty?"." ".empty($var1);
  	echo "<br>";
  	echo "Kas var 2 on empty?"." ".empty($var2);
  	echo "<br>";
  	echo "Kas var 3 on empty?"." ".empty($var3);
  	echo "<br>";
  	echo "Kas var 4 on empty?"." ".empty($var4);
  	echo "<br>";
  	echo "Kas var 5 on empty?"." ".empty($var5);
  	echo "<br>";
  	echo "Kas var 6 on empty?"." ".empty($var6);
  	echo "<br>";
  	echo "Kas var 7 on empty?"." ".empty($var7);
  	echo "<br>";
  	echo "Kas var 8 on empty?"." ".empty($var8);
  	echo "<br>";

  ?>

  <h2>Andmetüübi teisendamine</h2>

  <?php 
  	 $count = 2;
  	 echo $count;
  	 echo "<br>";
  	 echo gettype($count);
  	 echo "<br>";
  	 settype($count, "string");
  	 echo settype($count, "string");
  	 echo "<br>";
  	 echo gettype($count);
  	 echo "<br>";
  	 echo settype($count, "float");
  	 echo "<br>";
  	 echo gettype($count);
  	 echo "<br>";
  	 settype($count, "array");
  	 print_r($count, "array");
  	 echo "<br>";
  	 echo gettype($count);
  	  echo "<br>";
  	 echo settype($count, "boolean");
  	 echo "<br>";
  	 echo gettype($count);

  ?>

  <h2>Konstandid</h2>
  <?php
   define("MAX_WIDTH", 980); 
   echo MAX_WIDTH;
   echo "<br>";
   define("MAX_WITDH", 500);
   echo MAX_WIDTH;
   echo "<br>";
    

  ?>

</body>
</html>