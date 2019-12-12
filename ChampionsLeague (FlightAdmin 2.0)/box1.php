<?php
//Box 1

//Skapar funktionen.
function box1(){
    
   
        //Skapar en variabel med en tom sträng.
        $out="";
    
        //Skapar koppling till databasen genom funktionen connect_db() från sidan db_connect.php.
        $conn = connect_db();
        
        //Skapar och ställer frågan om att hämta all informationen från tabellen avgang från ett specifikt datum, sorterat efter tid, begränsat till fyra rader. 
        //$sql = "SELECT * FROM avgang WHERE datum='2017-09-20' ORDER BY tid LIMIT 4";
        $sql = "SELECT * FROM skytteliga ORDER BY goals DESC";
        $resultat = mysqli_query($conn, $sql);
        
        //Skapar en tabell och lägger in den i strängen.
        $out.='<table id="table_id" class="display">';
        
        $out.='<thead>';
    
        $out.='<tr>';
            
        //Skapar rubriker till kolumner. Lägger in i sträng.
        $out.='<th>Placering</th><th>Spelare</th><th>Lag</th><th>Mål</th>';
    
        $out.='</tr>';
    
        $out.='</thead>';
        
        $out.='<tbody>';
        
        //Skapar en variabel som får värdet av resultaten i tabellen.
        while($row = mysqli_fetch_array($resultat))
        {   
            //Skapar tabellrad och lägger in den i strängen.
            $out.='<tr>';
            
            //Skapar tabellcell. 
            $out.='<td>';
            //Hittar kolumnen flygnr och lägger till i strängen.
            $out.=$row['placering'];
            //Stänger tabellcellen.
            $out.='</td>';
            
            //Samma som föregående cell men hittar kolumnen airport istället. 
            $out.='<td>';
            $out.=$row['spelare'];
            $out.='</td>';
            
            //Samma som föregående cell men hittar kolumnen tid istället.
            $out.='<td>';
            $out.=$row['lag'];
            $out.='</td>';
            
            //Samma som föregående cell men hittar kolumnen gate istället.
            $out.='<td>';
            $out.=$row['goals'];
            $out.='</td>';
            
            //Stänger tabellraden
            $out.='</tr>';
        }
    
        $out.='</tbody>';
        
        //Stänger tabell
        $out.='</table>';
    
    ?> 


    <?php
    
        //returnerar strängen.
        return $out;
    
}

?>
