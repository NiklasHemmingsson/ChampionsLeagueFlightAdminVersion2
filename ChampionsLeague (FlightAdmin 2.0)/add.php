<!-- Länkar till CSS -->
<link rel="stylesheet" href="lab1.css">

<?php  

        //Inkluderar filen "db_connect.php" då add.php är separat från index.php. Skapar koppling till databasen genom funktionen connect_db() från sidan db_connect.php.
        include_once "db_connect.php";
        $conn = connect_db();
            
         //Om man tryckt på knappen add körs följande script.
        if(isset($_POST['Add']))
        {   
       
            //Hämtar det man skrivit i inmatningsfälten.
            $newClub = $_POST['Club'];
            $newCountry = $_POST['Country'];
            
            //Skapar och ställer frågan om att i tabellen land lägga till ny rad med värdena från variablerna $newAirport, $newCountry in i kolumnerna airport och land.
            $sql="INSERT INTO clubs (klubb, land)
            VALUES ('$newClub', '$newCountry')";
            $resultat = mysqli_query($conn, $sql);
        
        }
        else {
        ?>
            <!-- Skapar ett formulär -->
            <form action="" method="post">
        
            <!--Skapar rubrik-->
            <label>Lägg till en ny klubb</label><br>
        
            <!--Två inmatningsfält för land och flygplatskod -->
            Land: <input type="text" name="Country"><br>
            Klubb:<input type="text" name="Club"><br>
        
            <!-- Ändra-knappen -->
            <input type="submit" name= "Add" value="Add" class="skicka">
        
            <!-- Stänger formuläret-->
            </form>
        <?php
        
       }

?>
        <!-- Box för länken Tillbaka till startsidan-->
        <div class="linkToStart">
            <!-- Länkar tillbaka till startsidan -->
            <a href="index.php">Tillbaka till startsidan</a>
        </div>
        
    