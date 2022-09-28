<?php

$link = mysqli_connect("localhost","trainer","penalty","voetbal_web");

	if($link){
		echo "-------------------------<br>";
		echo "Verbinding geslaagd";
		echo "<br>-------------------------<br>";
	}else{
		echo "Verbinding mislukt";
		echo mysqli_connect_error();
		exit();
	}

  $datum2 = "3/09/2021";  
echo "Today is " . $datum2 . "<br>";
//$datum = date("d/m/2021");

$query_teamA = "select TeamA,DatumWedstrijd from php_voetbalsite_wedstrijden group by  where DatumWedstrijd in ('$datum2')";
$result = mysqli_query($link,$query_teamA);
$teamA = mysqli_fetch_all($result);
echo"<b>TeamA </b><br>";
foreach($teamA as $ploegen){
    echo $ploegen[0]."<br>";
}
$datum2 = 	"3/09/2021";
$query_teamB = "select TeamB,DatumWedstrijd from php_voetbalsite_wedstrijden where DatumWedstrijd in ('$datum2')";
$result = mysqli_query($link,$query_teamA);
$teamB = mysqli_fetch_all($result);
echo"<b>TeamB</b> <br>";
foreach($teamB as $ploegen){
    echo $ploegen[0]."<br>";
}





echo date("d/m/2021");



?>