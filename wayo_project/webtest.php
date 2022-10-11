


<?php

$link = mysqli_connect("localhost","trainer","penalty","esp32test");



if (isset($_GET['esp1H'],$_GET['esp1T'])){
    $Hwaarde = $_GET['esp1H'];
	$Twaarde = $_GET['esp1T'];
	$query = "insert into dht11 (Tempratuur,Vochtheid,esp) values ('$Twaarde', '$Hwaarde',1)";
	if(mysqli_query($link, $query)){
		echo "H: {$Hwaarde} T: {$Twaarde} ";
	}else{
		echo "Fout bij het toevoegen:".mysqli_error($link);
	}
}


?>