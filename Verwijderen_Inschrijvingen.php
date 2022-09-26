
<?php









$link = mysqli_connect("localhost","trainer","penalty","voetbal_web");

if($link){
    echo "verbinding geslaagd! <br>";
}else{
    echo "Verbinding mislukt";
    echo mysqli_connect_error();
    exit();
}




if(isset($_GET['inschrijf_prijs'])  &&
isset($_GET['bal_prijs']) && 
isset($_GET['weds_prijs']) &&
isset($_GET['train_prijs']) ){


   $inschrijf_price = $_GET['inschrijf_prijs'];
   $bal_price = $_GET['bal_prijs'];
   $weds_price = $_GET['weds_prijs'];
   $trainingspak_price = $_GET['train_prijs'];

   if(strlen($_GET['bal_prijs'])>=1){
       $query_bal = "update inschrijving20222023 set prijs = '$bal_price' where id = 1";
   }
   if(strlen($_GET['weds_prijs'])>=1){
       $query_weds_prijs = "update inschrijving20222023 set prijs = '$weds_price' where id = 2";
   }
   if(strlen($_GET['train_prijs'])>=1){
       $query_train_prijs = "update inschrijving20222023 set prijs = '$trainingspak_price' where id = 3";
   }
   if(strlen($_GET['inschrijf_prijs'])>=1){
       $query_inschrijf_prijs = "update inschrijving20222023 set prijs = '$inschrijf_price' where id = 4";
   }

 


}


if(isset($_GET['inschrijf_prijs'])  && strlen($_GET['inschrijf_prijs'])>=1){
    $inschrijf_price = $_GET['inschrijf_prijs'];
    $query_inschrijf_prijs = "update prijzen set prijs = '$inschrijf_price' where id = 4";
}

if(isset($_GET['bal_prijs']) && strlen($_GET['bal_prijs'])>=1){
    $bal_price = $_GET['bal_prijs'];
    echo $bal_price;
    $query_bal = "update prijzen set prijs = '$bal_price' where id = 1";

}
if(isset($_GET['weds_prijs']) && strlen($_GET['weds_prijs'])>=1){
    $weds_price = $_GET['weds_prijs'];
    $query_weds_prijs = "update prijzen set prijs = '$weds_price' where id = 2";
}
if(isset($_GET['train_prijs']) && strlen($_GET['train_prijs'])>=1){
    $trainingspak_price = $_GET['train_prijs'];
    $query_train_prijs = "update prijzen set prijs = '$trainingspak_price' where id = 3";
}
    
if(mysqli_query($link, $query_bal)){
    echo"Gelukt!!";
}else{
    echo"Mislukt";
}





if(isset($_GET['naam']) && strlen($_GET['naam'])>=1 &&
isset($_GET['voornaam']) && strlen($_GET['voornaam'])>=1 &&
isset($_GET['ploeg']) && strlen($_GET['ploeg'])>=1
){

    $name = $_GET['naam'];
    $first_name = $_GET['voornaam'];
    $team = $_GET['ploeg'];

    

    $query = "delete from inschrijving20222023 where naam='$name' and voornaam='$first_name'
    and ploeg='$team'";

    if(mysqli_query($link, $query)){
        echo"Gelukt!!";
    }else{
        echo"Mislukt";
    }


}else{

    if(isset($_GET['naam'])){
        $naam = $_GET['naam'];
    }
    else{
        $naam = '';
    }
    if(isset($_GET['voornaam'])){
        $voornaam = $_GET['voornaam'];
    }
    else{
        $voornaam = '';
    }
    if(isset($_GET['ploeg'])){
        $ploeg = $_GET['ploeg'];
    }
    else{
        $ploeg = '';
    }


  


    echo "<form method=\"get\" action=\"Verwijderen_Inschrijvingen.php\">";
    echo "Naam: <input type=\"text\" name=\"naam\" value=\"$naam\">";
    echo "<br>";
    echo "Voornaam: <input type=\"text\" name=\"voornaam\" value=\"$voornaam\">";
    echo "<br>";
    echo "Ploeg: <input type=\"text\" name=\"ploeg\" value=\"$ploeg\">";
    echo "<br>";
    echo "<input type=\"submit\" value=\"Verwijderen\">";
    echo "</form>";
    echo"<br><br>";
    echo "<form method=\"get\" action=\"Verwijderen_Inschrijvingen.php\">";

    echo "inschrijvingsPRIJS: <input type=\"text\" name=\"inschrijf_prijs\" >";
    echo "<br>";
    echo "BAL_PRIJS: <input type=\"text\" name=\"bal_prijs\" >";
    echo "<br>";
    echo "Trainingspak_PRIJS: <input type=\"text\" name=\"train_prijs\" >";
    echo "<br>";
    echo "Wedstrijdkledij_PRIJS: <input type=\"text\" name=\"weds_prijs\" >";
    echo "<br>";
    echo "<br>";
    echo "<input type=\"submit\" value=\"Veranderen\">";
    
    echo "</form>";

}



?>