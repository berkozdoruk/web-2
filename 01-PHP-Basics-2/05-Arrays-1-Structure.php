<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            table { border-collapse: collapse;}
            td , th{ border: 1px solid black; padding: 5px;}
        </style>
    </head>
    <body>
        <?php
           $colors = ["red", "green", "blue"] ;
           $colors[] = "black" ;
           array_push($colors, "purple", "white") ;
           array_unshift($colors, "magenta") ;
           array_splice($colors,2,0, "yellow") ;
           array_splice($colors,3,1);
           echo join(" , ", $colors) ;
           
           // traversing - 1
           echo "<table><tr>" ;
           for ( $i = 0; $i < count($colors); $i++) {
               echo "<td>" . $colors[$i] . "</td>";
           }
           echo "</tr></table>";
           
           // traversing - 2
           echo "<table><tr>" ;
           foreach ( $colors as $clr ) {
               echo "<td>" . $clr . "</td>";
           }
           echo "</tr></table>";
           
           
           // Associative Array/Hashmap/Dictionary
           $config = [ "cpu" => "Intel i9", "ram" => "16GB", "HDD" => "1TB Seagate" ];
           $config["usb_count"] = 5 ;
           
           echo $config["ram"], "<br>" ;
           // traverse
           foreach( $config as $key => $value) {
               echo $key . " => " . $value . " <br>" ;
           }
           
           
           $students = [
              ["name" => "Ali", "lastname" => "Gül", "cgpa" => "3.11"],  
              ["name" => "Ali", "lastname" => "Gül", "cgpa" => "3.11"],  
              ["name" => "Veli", "lastname" => "Gül", "cgpa" => "3.21"],  
              ["name" => "Ali", "lastname" => "Gül", "cgpa" => "3.11"],  
              ["name" => "Ali", "lastname" => "Gül", "cgpa" => "3.11"]  
           ];
           echo "<table>" ;
           echo "<tr>";
           foreach( $students[0] as $k=> $v) {
               echo "<th>". strtoupper($k) . "</th>" ;
           }
           echo "</tr>";
           foreach( $students as $std) {
               echo "<tr>";
               foreach($std as $k => $v) {
                   echo "<td>$v</td>" ;
               }
               echo "</tr>";
           }
           echo "</table>";
        ?>
    </body>
</html>
