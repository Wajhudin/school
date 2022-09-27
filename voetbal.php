<?php




if(isset($_GET['wie'])){
    if ($_GET['wie']=="gebruiker"){
        echo'<a href="PHP_voetbal22-23.php">Inschrijving</a>';
    }elseif($_GET['wie']=="trainer"){
        echo"<form method='get' action='voetbal.php' >";
        echo"<lablel>Username:</lablel> <input type='text', name='username' required> <br><br>";
        echo"<lablel>Wachtwoord:</lablel>  <input type='password', name='password' required><br><br>";
        echo "<input type=\"submit\" value=\"log in\">";
        echo "</form>";
    }elseif($_GET['wie']=="Geen"){
        echo "Please choose a user!";
        echo'<br><a href="voetbal.php">choose a user</a>';
    }
    }else{
        echo"<form method='get' action='voetbal.php' >";
        echo("<SELECT name='wie'>");
        echo("<OPTION Value='Geen'>Geen</OPTION>");
        echo("<OPTION Value='gebruiker'>gebruiker</OPTION>");
        echo("<OPTION Value='trainer'>trainer</OPTION>");
        echo "<input type=\"submit\" value=\"Doorgaan\">";
        echo("</form>");
    
    
    
    }

if(isset($_GET['username']) && isset($_GET['password'])){
    if ($_GET['username']=="trainer" && $_GET['password'] == "penalty"){
        echo'<br><a href="Verwijderen_Inschrijvingen.php">Verwijder speler</a>';
        echo'<br><a href="Wijzig_prijs.php">Prijs Wijzigen</a>';
        echo'<br><a href="overzicht_inschrijving.php">Overzicht</a>';
      
    }else{
        echo"Sorry. Your password or username is wrong!";
        echo'<br><a href="voetbal.php">Please log in again!</a>';
    }
}





























?>