<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            table { margin: 20px auto; border-collapse: collapse;}
            td { border-top: 1px solid #aaa; padding: 7px;}
            h1, p { text-align: center;}
        </style>
    </head>
    <body>
        <h1>Hotel Reservation System</h1>
        <form action="reserve.php" method="post">
            <table>
                <tr>
                    <td>Type :</td>
                    <td>
                        <select name="type">
                            <option value="0">Full Board</option>
                            <option value="1">Half Board</option>
                        </select>
                    </td>
                </tr>
                
                <tr>
                    <td>Season :</td>
                    <td>
                        <input type="radio" name="season" value="0"> Hot Season
                        <input type="radio" name="season" value="1"> Normal
                    </td>
                </tr>
                
                <tr>
                    <td>Number of Person:</td>
                    <td><input type="text" name="count" size="2"></td>
                </tr>
                
                <tr>
                    <td>Flight: </td>
                    <td><input type="checkbox" name="flight"></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" name="reserveBtn" value="Reserve">
                    </td>
                </tr>
            </table>
        </form>
       
    </body>
</html>
