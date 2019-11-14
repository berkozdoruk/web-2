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
        <form action="addNumbers.php" method="POST">
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
