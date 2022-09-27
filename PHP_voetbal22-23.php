


<html>
<title>Inschrijving seizoen 2022 2023(H1) </title>





<form method='get' action='Inschrijving_Verwerk.php' >





<?php



	//-------------------------------DATABASE//START----------------
	$link = mysqli_connect("localhost","trainer","penalty","voetbal_web");

	if($link){
		
	}else{
		echo "Verbinding mislukt";
		echo mysqli_connect_error();
		exit();
	}


    echo"<lablelp>Naam:</lablel>  <input type='text', name='naam' required> <br><br>";
    echo"<lablel>Voornaam:</lablel>  <input type='text', name='voornaam' required><br><br>";

    $query = "select prijs from prijzen where id = 1";
    $result = mysqli_query($link, $query);
    $row = mysqli_fetch_assoc($result);
    $bal = $row['prijs']; //bal prijs

    $query = "select prijs from prijzen where id = 2";
    $result = mysqli_query($link, $query);
    $row = mysqli_fetch_assoc($result);
    $wedskledij = $row['prijs']; //wedstrijdkledij prijs

    $query = "select prijs from prijzen where id = 3";
    $result = mysqli_query($link, $query);
    $row = mysqli_fetch_assoc($result);
    $trainingspak = $row['prijs']; //trainingspak prijs

    $query = "select prijs from prijzen where id = 4";
    $result = mysqli_query($link, $query);
    $row = mysqli_fetch_assoc($result);
    $inschrijving = $row['prijs']; //inschrijvingsprijs

    $beide = $trainingspak + $wedskledij; // wed+train prijs
    


    echo("<label >PLOEG:</label>");
    echo("<SELECT name='ploeg'>");
    echo("<OPTION Value='U6'>U6</OPTION>");
    echo("<OPTION Value='U7'>U7</OPTION>");
    echo("<OPTION Value='U8'>U8</OPTION>");
    echo("<OPTION Value='U9'>U9</OPTION>");
    echo("<OPTION Value='U10'>U10</OPTION>");
    echo("<OPTION Value='U11'>U11</OPTION>");
    echo("<OPTION Value='U12'>U12</OPTION>");
    echo("<OPTION Value='U13'>U13</OPTION>");
    echo("<OPTION Value='U14'>U14</OPTION>");
    echo("<OPTION Value='U15'>U15</OPTION>");
    echo("<OPTION Value='U16'>U16</OPTION>");
    echo("<OPTION Value='U17'>U17</OPTION>");
    echo("</SELECT>");
    echo("<br><br>");


    echo("<lablel>KLEDIJ:</lablel> ");
    echo("<SELECT name='kledij' >");
    echo("<OPTION Value='Geen'>Geen</OPTION>");
    echo("<OPTION Value='Wedstrijdkledij'>Wedstrijdkledij {$wedskledij}€</OPTION>");
    echo("<OPTION Value='Trainingspak'>Trainingspak {$trainingspak}€ </OPTION>");
    echo("<OPTION Value='Wed+Train'>Wedstrijdkledij + Trainingspak {$beide}€ </OPTION>");
    echo("</SELECT>");
    echo("<br><br>");

    echo("<lablel>Trainingsbal ({$bal}) € </lablel>"); 
    echo("<INPUT TYPE='checkbox' NAME='ball'> <br><br>");
    echo("<lablel> Akkoord met algemeen voorwaarden</lablel>");
    echo("<INPUT TYPE='checkbox' NAME='voorwaarden' required> <br><br>");
    echo("<lablel> <b>Inschrijvings Prijs: {$inschrijving}</lablel><br> <br>");
    echo("<input type='submit' value='Verzenden'> ");

    echo("</form>");





?>
</html>

