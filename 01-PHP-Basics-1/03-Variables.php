<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>
        <style>
            table { border-collapse: collapse;}
            td, th { border: 1px solid black; padding: 7px;}
        </style>
    </head>
    <body>
        <?php
        // PHP is a loosely-typed language, you don't need to specify the type
        // explicitly.
        // Primitive Types : integer, float, boolean, string, null
        // all variables start with a "$" sign.
        $age = 32 ;  // integer
        $cgpa = 3.12 ; // float
        $done = false ; // boolean
        $points = null; // null means "no data available yet", used for flags.
        
        // string without replacement
        $name = "Ali Gül" ;
        $text = 'This is an ordinary static text' ;
        // "dot" operator is used for concatenation.
        $text = '<p>Ali\'s age is ' . $age . '</p>' ;
        echo $text ;
        // within single quoted string, use escape character before ' (single quote)
        // and \ (back slash)
        $text = 'The file is under C:\\docs\\study, see you.' ;
        echo $text ;
        
        // string with replacement
        // you can insert variables value into the string, {$age}
        $text = "<p>Ali's age is {$age}</p>" ;
        echo $text ;
        
        $text = "<p>The player \"king\" is back</p>" ; // use escape before " (double quotes)
        echo $text ;
        
        // special characters are valid only within double quoted string.
        // "\n" means new line, "\t" is tab. You can not use those control character
        // in single quoted strings.
        $text = "This is first line\n This is the second line\n The last line" ;
        
        // utf-8 character codes can be inserted in double quoted strings.
        // For summation symbol, its utf-8 code is E2 88 91 in hex notation.
        // It takes three bytes. Use "\x" before each hex numbers.
        $text = "<p>\xE2\x88\x91 x = 5</p>" ;
        echo $text ;
        
        // for long strings, use "heredoc" method, TABLE is any descriptor,
        // after TABLE and TABLE; there will be no space/characters, and
        // TABLE; must be at the beginning of its line.
        $table = <<<TABLE
            <table>
                <tr>
                  <th>Name</th>
                  <th>Age</th>
                </tr>
                <tr>
                  <td>$name</td>
                  <td>$age</td>
                </tr>
             </table>
TABLE;
        echo $table ;        
        
        // Composite Types : array and object.
        $colors = ["red", "green", "blue"] ;
        $now = new DateTime() ;
        
        
        // var_dump() is a built-in function to debug variables.
        // you can analyze the structure of the variables.
        var_dump($age);
        var_dump($colors) ;
        var_dump($now);
        ?>
    </body>
</html>
