<?php
    if ( isset($_POST["addBtn"])) {
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
        
        //exit ;
    }
 
        
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            table { margin: 20px auto; border-collapse: collapse;}
            td { border-top: 1px solid #aaa; padding: 7px;}
            h1 { text-align: center;}
        </style>
    </head>
    <body>
        <h1>Addition Web Form</h1>
		<!-- if action is empty string, it means use the current file name "addSingle.php" -->
        <form action="" method="POST">
            <table>
                <tr>
                    <td>Number 1:</td>
                    <td><input type="text" name="num1"></td>
                </tr>
                <tr>
                    <td>Number 2:</td>
                    <td><input type="text" name="num2"></td>
                </tr>
                <tr>
                  <td colspan="2">
                      <input type="submit" name="addBtn" value="ADD">
                  </td>
                </tr>
            </table>
        </form>
        
    </body>
</html>