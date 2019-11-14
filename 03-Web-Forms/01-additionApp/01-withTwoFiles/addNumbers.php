<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // 1. Get Form Data
        // $_POST has all form data
        //var_dump($_POST) ;
       /* $num1 = $_POST["num1"] ;
        $num2 = $_POST["num2"] ; */
        
        extract($_POST) ;
        
        // 2. Processing (Save into db, calculate )
        $sum = $num1 + $num2 ;
        
        // 3. Output
        echo "<p>The sum of $num1  and $num2 is equal to $sum</p>";
        
        ?>
        <p><a href="addForm.php">Go Back to Form</a></p>
    </body>
</html>
