<?php
$link = mysqli_connect("localhost","trainer","penalty","voetbal_web");

if($link){
    echo "verbinding geslaagd! <br>";
}else{
    echo "Verbinding mislukt";
    echo mysqli_connect_error();
    exit();
}

// //$query = "SELECT COUNT(id), ploeg
// //FROM inschrijving20222023
// //GROUP BY pleog";

//----------------------------------------------
// aantal spelers per pleog
$query_spelers= "select count(*), ploeg from inschrijving20222023 group by ploeg";
$spelers_result = mysqli_query($link, $query_spelers);
$spelers = mysqli_fetch_all($spelers_result);
foreach ($spelers as $waarde) {
    echo $waarde[0]." => ".$waarde[1]."<br>"; // [0]aantal spelers. [1] welke pleog
}
//---------------------------------

// Aantal traininspak

$query_trainingspak = "select count(*) from inschrijving20222023 where trainingspak = 'JA'";
$trainingspak_result = mysqli_query($link, $query_trainingspak);
$trainingspak = mysqli_fetch_all($trainingspak_result);
echo "Aantal Trainingspak: ".$trainingspak[0][0];

//------------------------------------------------------

// Aantal wedstrijdkledij

$query_wedstrijdkledij = "select count(*) from inschrijving20222023 where wedstrijdkledij = 'JA'";
$wedstrijdkledij_result = mysqli_query($link, $query_wedstrijdkledij);
$wedstrijdkledij = mysqli_fetch_all($wedstrijdkledij_result);
echo "<br>Aantal wedstrijdkledij: ".$wedstrijdkledij[0][0];

//-----------------------------------------------------------


// Aantal bal

$query_bal = "select count(*) from inschrijving20222023 where bal = 'JA'";
$bal_result = mysqli_query($link, $query_bal );
$bal = mysqli_fetch_all($bal_result);
echo "<br>Aantal BAL: ".$bal[0][0];

//-------------------------------------------
//hoeveel inschrijvingsgeld totaal

$query = "select prijs from prijzen where id = 4";
$result = mysqli_query($link, $query);
$row = mysqli_fetch_assoc($result);
$inschrijvingsprijs = $row['prijs']; //inschrijvingsprijs


$query_inschrijving = "select count(id) AS Inshrijvingsgeld from inschrijving20222023";
$inschrijving_result = mysqli_query($link, $query_inschrijving );
$inschrijvingsgeld = mysqli_fetch_all($inschrijving_result);
echo "<br>Totaal Inshrijvingsgeld : ".$inschrijvingsgeld[0][0]*$inschrijvingsprijs;
//--------------------------------------------------------

// totaal aankoop van kledij en ballen

$query = "select prijs from prijzen where id = 1";
$result = mysqli_query($link, $query);
$row = mysqli_fetch_assoc($result);
$balprijs = $row['prijs']; //bal prijs

$query = "select prijs from prijzen where id = 2";
$result = mysqli_query($link, $query);
$row = mysqli_fetch_assoc($result);
$wedskledijprijs = $row['prijs']; //wedstrijdkledij prijs

$query = "select prijs from prijzen where id = 3";
$result = mysqli_query($link, $query);
$row = mysqli_fetch_assoc($result);
$trainingspakprijs = $row['prijs']; //trainingspak prijs

$totaal = ($balprijs * $bal[0][0]) + ($trainingspakprijs * $trainingspak[0][0]) + ($wedskledijprijs*$wedstrijdkledij[0][0]);
echo "<br> Totaal kledij + Ballen: ".$totaal;




?>