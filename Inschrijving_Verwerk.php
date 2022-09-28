<?php



	//-------------------------------DATABASE//START----------------
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

    $query = "select prijs from prijzen where id = 1";
    $result = mysqli_query($link, $query);
    $row = mysqli_fetch_assoc($result);
    $bal = $row['prijs'];


    $query = "select prijs from prijzen where id = 2";
    $result = mysqli_query($link, $query);
    $row = mysqli_fetch_assoc($result);
    $Wedstrijdkledij = $row['prijs'];

    $query = "select prijs from prijzen where id = 3";
    $result = mysqli_query($link, $query);
    $row = mysqli_fetch_assoc($result);
    $trainingspak = $row['prijs'];

    $query = "select prijs from prijzen where id = 4";
    $result = mysqli_query($link, $query);
    $row = mysqli_fetch_assoc($result);
    $inschrijving = $row['prijs'];
   

    
    $totaal= 0;




if(isset($_GET['naam']) && strlen($_GET['naam'])>=1 &&
isset($_GET['voornaam']) && strlen($_GET['voornaam'])>=1 &&
isset($_GET['ploeg']) && 
isset($_GET['kledij']) && 
isset($_GET['voorwaarden'])){
    
    $naam = $_GET['naam'];
    $voornaam = $_GET['voornaam'];
    $team = $_GET['ploeg'];

    echo "<b>NAAM:</b> {$_GET['naam'] } {$_GET['voornaam']}<br>";
    echo "<b>PLOEG:</b> {$_GET['ploeg']}<br>";
    echo "<b>KLEDIJ:</b> {$_GET['kledij']}<br>";
    if (isset($_GET['ball']) && $_GET['ball']== 'on'){
        $bal = $bal;
        $bal_aanwijzing = "JA";
        $items = "bal";
        echo "<b>Bal:</b> JA <br>";
        $totaal += $bal;

    }else{
        echo "<b>Bal:</b> NEE <br>" ;
        $bal_aanwijzing = "NEE";
        $bal = 0;
        $items = "";
    }
    
    if ($_GET['kledij'] == "Wedstrijdkledij"){
        $wedskled = "JA";
        $trainkled = "NEE";
        $totaal += $Wedstrijdkledij;
        $items = $items." wedstrijdkledij";
    }elseif($_GET['kledij'] == "Trainingspak"){
        $trainkled = "JA";
        $wedskled = "NEE";
        $totaal += $trainingspak;
        $items = $items." trainingspak";
    }elseif ($_GET['kledij'] == "Wed+Train"){
        $wedskled = "JA";
        $trainkled = "JA";
        $totaal +=  $trainingspak + $Wedstrijdkledij;
        $items = $items." wedkled + trainkled";
    }else{
        $trainkled = "NEE";
        $wedskled = "NEE";
    }
    $totaal += $inschrijving;
    echo "<b>Total_prijs:</b> ", $totaal ."€ <br>";

    // data naar database wegschrijven

    $query = "insert into inschrijving20222023 (naam,voornaam,ploeg,wedstrijdkledij,trainingspak,bal)
     values ('$naam','$voornaam','$team','$wedskled','$trainkled','$bal_aanwijzing')";
     if(mysqli_query($link, $query)){
		echo "<br>record toegevoegd";
	}else{
		echo "Fout bij het toevoegen:".mysqli_error($link);
        echo'<a href="PHP_voetbal22-23.php">Voetball22-23</a>';
	}

}else{
    echo'<a href="PHP_voetbal22-23.php">Terug naar Voetball22-23</a>';
}










?>