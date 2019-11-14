<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
         <style>
        table { width: 500px; margin: 20px auto;  border-collapse: collapse;}
            .course { background: #bbb;}
            .title { font-weight: bold; font-style: italic;}
             h1 { text-align: center;}
            .title td { border-bottom: 4px double black;}
        </style>
    </head>
    <body>
        <h1>Class Rosters</h1>
        <?php
        $now = new DateTime();
        require_once './db.php' ;    
        echo "<table>" ;
        foreach( $courses as $course_code => $course_data) {
        echo "<tr>";
        echo "<th colspan='4' class='course'>";
        echo "$course_code : {$course_data['name']}";
        echo "</th>";
        echo "</tr>" ;
        echo "<tr class='title'>";
        echo "<td>Name</td><td>Surname</td><td>CGPA</td><td>Age</td>" ;
        echo "</tr>" ;
        foreach( $registers as $item) {
            if ( $item['course_id'] == $course_code) {
                $std = getStudent($item['id']) ;
                echo "<tr>" ;
                echo "<td>{$std['name']}</td>";
                echo "<td>{$std['surname']}</td>";
                echo "<td>{$std['cgpa']}</td>";
                // Calculate the age of a student
                $bday = DateTime::createFromFormat("d-m-Y", $std["bday"]);
                $diff = $bday->diff($now) ; // returns difference in DateInterval object
                $age = $diff->y ;  // get number of years
                echo "<td>$age</td>";
                echo "</tr>" ;
            }
        }
        }
        echo "</table>";
        
        // Find student info using the id.
        function getStudent($id) {
            global $students ;
            foreach( $students as $std) {
                if ( $std['id'] == $id) return $std ;
            }
        }
        ?>
    </body>
</html>
