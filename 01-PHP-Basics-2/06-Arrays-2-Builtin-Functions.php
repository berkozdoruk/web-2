<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // Basic Array Functions
        $nums = range(0,9) ; 
        echo "<p>" . join(" " , $nums) . "</p>" ;
        
        shuffle($nums) ;
        echo "<p>" . join(" " , $nums) . "</p>" ;
        
        // Adding New Items
        // 1. In front of the array
        array_unshift($nums, 32, 30) ;
        echo "<p>" . join(" " , $nums) . "</p>" ;
        
        // 2. Append ( adding to the end of the array )
        array_push($nums, 45, 46) ;  // as many items as you wish
        $nums[] = 100 ;  // only one item can be added.
        echo "<p>" . join(" " , $nums) . "</p>" ;
        
        // 3. Insert item(s) at a given index position
        array_splice($nums, 3, 0, [98, 99]) ;
        echo "<p>" . join(" " , $nums) . "</p>" ;
        
        // Delete items
        // 1. Removing the first item
        $first = array_shift($nums) ; 
        // 2. Removing the last item
        $last = array_pop($nums) ;
        echo "<p>The first item was $first and the last one was $last</p>";
        // 3. Remove from any index number.
        array_splice($nums, 4, 3) ; 
        echo "<p>" . join(" " , $nums) . "</p>" ;
        
        // Check existence of an item within an array, returns boolean
        $blackIP = ["139.179.33.30", "139.179.33.3", "139.179.33.77"] ;
        echo in_array("139.179.33.39", $blackIP) ? "<p>Blocked IP</p>" : "<p>Granted</p>" ;
        
        // Search and Find an item, returns the index number if it finds, otherwise, false.
        echo "<p>The position of 99 is " . array_search(99, $nums) . "</p>" ;
        
              
        $person = ["name" => "ali", "id" => 1234, "age" => 21] ;
        extract( $person ) ; // it creates variables using keys of assoc. array.
        echo "<p>The name is $name and id is $id and age is $age</p>" ;
        
        // Variable variables
        $var = "city" ;
        $$var = "Ankara" ;  // creates $city since $var is "city"
        echo "<p>City is $city</p>" ;
        
        // let's implement extract() function
        foreach( $person as $k => $v) {
           // if ( !isset($$k))
                $$k = $v ;  // $$k is called variable variables.
        }
        
        // Parsing a string, decompose a string into meaningful parts.
        // "name=ali&id=1234&age=32"
        // find id of the person.
        $data = "name=ali&id=1234&age=32" ;
        $pairs = explode("&", $data ) ;
        var_dump($pairs) ;
        $ids = explode("=", $pairs[1]) ;
        var_dump($ids);
        echo "<p>ID is {$ids[1]} </p>";
		
		// Use built-in function parse_str for this purpose.
		echo parse_str($data)["id"], "<br>" ;
        
        
        ?>
    </body>
</html>
