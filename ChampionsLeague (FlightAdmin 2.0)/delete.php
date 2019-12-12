<!-- Länkar till CSS -->
<link rel="stylesheet" href="lab1.css">

<?php 
    //Inkluderar filen "db_connect.php" då delete.php är separat från index.php.
    include_once "db_connect.php";

    //Skapar koppling till databasen genom funktionen connect_db() från sidan db_connect.php.
    $conn = connect_db();
        
    //Hämtar in värdet från variabeln del från box2.php och lägger in i en ny variabel $del.
    $del = $_GET['del'];

    //Skapar och ställer frågan om att radera rad från tabellen land där variabel $del stämmer överens med värdet. Detta blir den rad som radera-länken låg på.
    $sql="DELETE from clubs WHERE klubbid = '$del'";
    $resultat = mysqli_query($conn, $sql);

    ?> 


    <!-- Box för länken Tillbaka till startsidan-->
    <div class="linkToStart">
        <!-- Länkar tillbaka till startsidan -->
        <a href="index.php">Tillbaka till startsidan</a>
    </div>
