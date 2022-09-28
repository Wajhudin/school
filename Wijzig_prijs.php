<?php






$link = mysqli_connect("localhost","trainer","penalty","voetbal_web");

if($link){
    
}else{
    echo "Verbinding mislukt";
    echo mysqli_connect_error();
    exit();
}

$gewijzigd = false;

if(isset($_GET['inschrijf_prijs'])  &&
isset($_GET['bal_prijs']) && 
isset($_GET['weds_prijs']) &&
isset($_GET['train_prijs'])){



   $inschrijf_price = $_GET['inschrijf_prijs'];
   $bal_price = $_GET['bal_prijs'];
   $weds_price = $_GET['weds_prijs'];
   $trainingspak_price = $_GET['train_prijs'];

   if($bal_price!=""){
       $query = "update prijzen set prijs = $bal_price where id = 1";
       mysqli_query($link, $query);
       $gewijzigd = true;
   }
   if($_GET['weds_prijs']!=""){
       $query = "update prijzen set prijs = $weds_price where id = 2";
       mysqli_query($link, $query);
       $gewijzigd = true;
   }
   if($_GET['train_prijs']!=""){
       $query = "update prijzen set prijs = $trainingspak_price where id = 3";
       mysqli_query($link, $query);
       $gewijzigd = true;
   }
   if($_GET['inschrijf_prijs']!=""){
       $query = "update prijzen set prijs = $_GET[inschrijf_prijs] where id = 4";
       mysqli_query($link, $query);
       $gewijzigd = true;
   }
   if($gewijzigd){
    echo "Prijs is Gewijzig";
   }else{
    echo "Niks is Gewijzigd!";
   }
  
   


}else{
    echo "<form method=\"get\" action=\"Wijzig_prijs.php\">";
    echo "inschrijvingsPRIJS: <input type=\"number\" name=\"inschrijf_prijs\" >"." €";
    echo "<br>";
    echo "BAL_PRIJS: <input type=\"number\" name=\"bal_prijs\" >"." €";
    echo "<br>";
    echo "Trainingspak_PRIJS: <input type=\"number\" name=\"train_prijs\" >"." €";
    echo "<br>";
    echo "Wedstrijdkledij_PRIJS: <input type=\"number\" name=\"weds_prijs\" >"." €";
    echo "<br>";
    echo "<br>";
    echo "<input type=\"submit\" value=\"Prijs Wijzijgen\">";
    
    echo "</form>";

}
    





?>
