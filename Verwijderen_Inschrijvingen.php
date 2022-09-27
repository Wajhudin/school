
<?php









$link = mysqli_connect("localhost","trainer","penalty","voetbal_web");

if($link){
    echo "verbinding geslaagd! <br>";
}else{
    echo "Verbinding mislukt";
    echo mysqli_connect_error();
    exit();
}







// tabel laten zien

$sql = "select id, voornaam, naam, ploeg from inschrijving20222023";
$result = mysqli_query($link, $sql);

echo"<p id='paragraph'>";
if (mysqli_num_rows($result) > 0) {
  // output data of each row
  
  while($row = mysqli_fetch_assoc($result)) {
    //echo"<p id='paragraph'>";
    echo"<b>id:</b> " . $row["id"]. " - <b>Naam:</b> " . $row["voornaam"]. " " . $row["naam"]." - <b>Ploeg:</b> ".$row["ploeg"]."<br>";
   
} 
} else {
  echo "0 results";
}
echo"</p>";
if (isset($_GET['id']) && $_GET['id'] !== ""){
    $id_num = $_GET['id'];
    if($id_num == "Geen"){
        echo "Niks is verwijderd";
    }else{
           $query = "delete from inschrijving20222023 where id='$id_num'";
           mysqli_query($link, $query);
            echo "Verwijdering is Gelukt!";
            
    }
 
}else{
    echo'<input type="text" id="text-to-search" placeholder="Enter text to search..">';
    echo'<button onclick="search()">Search</button>';
    echo'<script src="script.js"></script>';
    $query = "select id from inschrijving20222023";
    $result = mysqli_query($link,$query);
    $aantal = mysqli_fetch_all($result);
    echo "<form method=\"get\" action=\"Verwijderen_Inschrijvingen.php\">";
    echo("<select name='id'>");
    echo('<option value="Geen">Geen</option>');
    foreach($aantal as $id){
        echo("<option value=\"".$id[0]."\">".$id[0]."</option>");
   }
   echo("</select>");


    echo "<br>";
    echo "<input type=\"submit\" value=\"Verwijderen\">";
    echo "</form>";

}

    






    

    
  
    //       $query = "delete from inschrijving20222023 where naam='$name' and voornaam='$first_name'
    // and ploeg='$team'";

  

   


  





?>


<!-- echo "<form method=\"get\" action=\"Verwijderen_Inschrijvingen.php\">";
    echo "Naam: <input type=\"text\" name=\"naam\" value=\"$naam\">";
    echo "<br>";
    echo "Voornaam: <input type=\"text\" name=\"voornaam\" value=\"$voornaam\">";
    echo "<br>";
    echo "Ploeg: <input type=\"text\" name=\"ploeg\" value=\"$ploeg\">";
    echo "<br>";
    echo "<input type=\"submit\" value=\"Verwijderen\">";
   
    echo"<br><br>";
    echo "<form method=\"get\" action=\"Verwijderen_Inschrijvingen.php\">";
