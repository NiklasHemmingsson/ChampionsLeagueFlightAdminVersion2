<?php
//Box 3

//Skapar funktionen.
function box3(){
        
        //Skapar en variabel med en tom sträng.
        $out="";
    
        //Skapar koppling till databasen genom funktionen connect_db() från sidan db_connect.php.
        $conn = connect_db();
        
        //Skapar och ställer frågan om att hämta all information från tabellen passagerare när värdet inom kolumnen klass är ekonomi. Begränsat till fyra rader.
        $sql = "SELECT * FROM assistliga ORDER BY assists";
        $resultat = mysqli_query($conn, $sql);
        
        //Skapar en tabell och lägger in den i strängen.
        $out.='<table id="table_id3" class="display">';
    
        $out.='<thead>';
    
        $out.='<tr>';
    
        //Skapar rubriker till kolumner. Lägger in i sträng.
        $out.='<th>Placering</th><th>Spelare</th><th>Lag</th><th>Assists</th>';
        
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
            //Hittar kolumnen fornamn och lägger till i strängen.
            $out.=$row['placering'];
            //Stänger tabellcellen.
            $out.='</td>';
            
            //Samma som föregående men hittar kolumnen efternamn istället.
            $out.='<td>';
            $out.=$row['spelare'];
            $out.='</td>';
            
            //Samma som föregående men hittar kolumnen klass istället.
            $out.='<td>';
            $out.=$row['lag'];
            $out.='</td>';
            
            //Samma som föregående men hittar kolumnen sittplats istället.
            $out.='<td>';
            $out.=$row['assists'];
            $out.='</td>';
            
            
            //Stänger tabellraden.
            $out.='</tr>';
            
        }
    
         $out.='</tbody>';    
    
        //Stänger tabellen.
        $out.='</table>';
    
        //Returnerar strängen.
        return $out;
    
}
?>
