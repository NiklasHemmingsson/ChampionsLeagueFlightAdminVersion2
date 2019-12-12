<!DOCTYPE html>
<html lang="en">
  <head>
      
      <title>Champions League</title>
      
      <!-- Aktiverar JQuery-->
      <script src="DataTables/jQuery-3.2.1/jquery-3.2.1.min.js"></script>
      <meta charset="utf-8">
      <!-- Aktiverar Datatables' CSS. -->
      <link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css">
      
      <!-- Aktiverar Datatables.js plug-in. -->
      <script src="DataTables/datatables.min.js"></script>
      
      <!-- Inuti denna aktiverar vi tabellerna med Datatables.js Plug-in. -->
      <script>
            //Aktiverar tabell i box1. 
            $(document).ready( function () {
                $('#table_id').DataTable( {
                  //Avaktiverar funktionen sök som inkluderas genom Datatables.js
                  "searching": false,
                  //Avaktiverar funktionen paging som inkluderas genom Datatables.js
                  "paging": false,
                    //Tabellen ordnas efter kolumn 4 med descending.
                    "order": [[ 3, "desc" ]]
    
              } );
               //Aktiverar tabell i box2.
               $('#table_id2').DataTable( {
                  "searching": false,
                   "paging": false,
                   //Avaktiverar ordning. Det man senast lagt till ska synas längst ner i tabellen.
                    "order": false
              } );
              //Aktiverar tabell i box3.
              $('#table_id3').DataTable( {
                  "searching": false,
                  "paging": false,
                "order": [[ 3, "desc" ]]
              } );
            
                
            });
      </script>
      
   
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      
    <!-- Länkar till CSS -->
    <link rel="stylesheet" type="text/css" href="lab1.css">
    
  </head>
    
    
  <body class="skytteliga">
    <?php
include_once "db_connect.php";
include_once "box1.php";
include_once "box2.php";
include_once "box3.php";
include_once "box4.php";
if($noerror=connect_db()){
  }
?>
      <!-- Rad för Headern -->
      <div class="row">
      
          <div class="col-100" id="header">
                <h1>Champions League</h1>
          </div>
      
      </div>

    <!-- Skapar en rad för box1 och box2.-->
    <div class="row">
          
          <!-- Kolumn med width:47,5% för Ruta 1 (övrevänster)-->
          <div class="col-475">
                <h2>Skytteliga</h2>
        
                <?php
                //Skriver ut funktionen box1() ur sida box1.php.
                echo box1();
        
                ?>
          </div>
          
          <!-- Används som margin mellan Box1 och Box2. -->
          <div class="col-5"></div>
        
          <!-- Kolumn med width:47,5% för Ruta 2 (övrehöger)-->
          <div class="col-475">
                <h2>Lag</h2>
                <?php
                //Skriver ut funktionen box2() ur sida box2.php.
                echo box2();
                ?>
                <br>
                <!-- Länk till sidan add.php där man kan lägga till en klubb i tabellen.  -->
              <a href="add.php">Lägg till en ny klubb</a>
          </div>
        
    </div>
  



    

      <!-- Skapar en rad för box3 och box4-->
      <div class="row">
          
            <!-- Kolumn med width:47,5% för Ruta 3 (nedrevänster) -->
            <div class="col-475">
                
                <h2>Assistliga</h2>
                <?php
                //Skriver ut funktionen box3() ur sida box3.php.
                echo box3();
                ?>
                
            </div> 
            
            <!-- Används som margin mellan Box4 och Box4. -->
            <div class="col-5"></div>
        
            <!-- Kolumn med width:47,5% för Ruta 4 (nedrehöger) -->
            <div class="col-475">
                
                <?php
                //Använder funktionen box4search() ur sida box4.php.
                box4search();    
                ?>
                
            </div>
          
      </div>
    
      
     <!-- Skapar en rad för footern -->
      <div class="row">

            <div class="col-100">
                <div id="footer">
                    <!-- Länk till W3C HTML Validator-->
                    <a href="https://validator.w3.org/nu/?doc=http%3A%2F%2Fhome.mi.sh.se%2F~sh17hp1695%2Findividuell%2Findex.php">Validera HTML</a>
                    <!-- Länk till W3C CSS Validator-->
                    <a href="https://jigsaw.w3.org/css-validator/validator?uri=http%3A%2F%2Fhome.mi.sh.se%2F~sh17hp1695%2Findividuell%2Findex.php&profile=css3svg&usermedium=all&warning=1&vextwarning=&lang=sv">Validera CSS</a>
                </div>
            </div>
          
      </div>


  
  </body>
</html>
