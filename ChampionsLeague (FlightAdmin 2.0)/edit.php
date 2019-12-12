<!-- Länkar till CSS -->
<link rel="stylesheet" href="lab1.css">

<?php
        
        //Inkluderar filen "db_connect.php" då edit.php är separat från index.php. Skapar koppling till databasen genom funktionen connect_db() från sidan db_connect.php.
        include_once "db_connect.php";
        $conn = connect_db();

        
        //Om man tryckt på knappen Change kör följande script.
        if(isset($_POST['Change']))
        {   
            //Sparar det man skriver in i inmatningfältet.
            $klubb2 = $_POST['Club'];
            $land2 = $_POST['Country'];
            
            //Sparar värdet från input type=hidden.
            $klubbid = $_POST['klubbid'];
            
            //Skapar och ställer frågan om att uppdatera tabellen land. Specifikt det land vars rad man har tryckt på. Detta ersätts med värdet på $land2.
            $sql="UPDATE clubs SET land='$land2', klubb='$klubb2' WHERE klubbid='$klubbid'";
            $resultat = mysqli_query($conn, $sql);
        }
        //Annars körs detta Script.
        //Här står det som syns direkt när man kommer in på sidan.
        else {
            
            //Hämtar värdet på edit från box2.php och lägger in i en ny variabel.
            $klubbid = $_GET['edit'];
        
            $sql = "SELECT * FROM clubs WHERE klubbid = '$klubbid'";
            $resultat = mysqli_query($conn, $sql);
            
            //Loop som hämtar klubb samt land utifrån värdet på klubbid.
            while($row = mysqli_fetch_array($resultat)){
             
             $klubbnamn = $row['klubb'];
             $land = $row['land'];
            }
            
        ?>

            <!-- Skapar formulär -->
            <form action="" method="POST">
         
            <!-- Skapar rubrik -->
            <label>Redigera Land</label><br>
        
            <!-- Två inmatningsfält som presenterar innehållet i $land samt $klubbnamn -->
            Land: <input type="text" name="Country" value="<?php echo $land; ?>">
                     <br>
            Klubb: <input type="text" name="Club" value="<?php echo $klubbnamn; ?>"><br>
            
            <!--Skapar en gömd input med värdet på $klubbid-->
            <input type=hidden name=klubbid value="<?php echo $klubbid;?>">
        
            <!--Ändra-knappen -->
            <input type="submit" name= "Change" value="Change" class="skicka">
            
            <!-- Stänger formuläret -->
            </form>
        <?php
            
            }
        
        ?>
            <!-- Box för länken Tillbaka till startsidan-->
            <div class="linkToStart">
                <!-- Länkar tillbaka till startsidan -->
                <a href="index.php">Tillbaka till startsidan</a>
            </div>
                
                
                
                
                
                