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
         <table>
            <tr>
                <td>Reserve Type:</td>
                <td><?= $str_type[$type]; ?></td>
            </tr>
            <tr>
                <td>Season:</td>
                <td><?= $str_season[$season]; ?></td>
            </tr>
            <tr>
                <td>The number of person:</td>
                <td><?= $count; ?></td>
            </tr>
            <tr>
                <td>Flight:</td>
                <td><?= isset($flight) ? "YES" : "NO"; ?></td>
            </tr>
            <tr>
                <td>Price:</td>
                <td><?= $price; ?></td>
            </tr>
        </table>
        <p><a href="reserveForm.php">Go back to form</a></p>
    </body>
</html>
