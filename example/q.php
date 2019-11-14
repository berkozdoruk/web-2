<?php
  //var_dump($_POST) ;
  if ( isset($_POST["count"])) {
      // echo "<p>POST method</p>" ;
      extract( $_POST); /* $flower, $count, $message */

      $flowers = [ "rose" => 15,  "daisy" => 10,  "tulip" => 25] ;
      if ( !isset($flower)) die("You should select a flower type");
      
      $price = $flowers[$flower] * $count ;
      echo "<p>You selected $count x $flower</p>" ;
      echo "<p>Price : $price</p>";
      echo "<p>Message is $message</p>";

  } 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    table { border-collapse: collapse; margin: 30px auto;}
    table td { border-top: 1px solid #DDD; padding: 5px;}
    h1 { text-align: center;}

    </style>
</head>
<body>
   <form action="" method="post">
     <h1>Flower Shop</h1>
     <h1 id="intro"></h1>
     
     <table>
         <tr>
             <td>
                <img src="rose.jpg" alt=""><br>
                <input type="radio" name="flower" value="rose" id="rose" 
                <?php
                    if ( isset($flower) && $flower == "rose") echo " checked" ;
                 ?>
                >
                <label for="rose">Rose</label>
             </td>
             <td>
             <img src="daisy.jpg" alt=""><br>
                <input type="radio" name="flower" value="daisy" id="daisy"
                <?php
                    if ( isset($flower) && $flower == "daisy") echo " checked" ;
                 ?>
                >
                <label for="daisy">Daisy</label>
             </td>
             <td>
             <img src="tulip.jpg" alt=""><br>
                <input type="radio" name="flower" value="tulip" id="tulip"
                 <?php
                    if ( isset($flower) && $flower == "tulip") echo " checked" ;
                 ?>
                
                >
                <label for="tulip">Tulip</label>
             </td>
         </tr>
         <tr>
             <td>Quantity :</td>
             <td colspan="2">
                 <input type="text" name="count" size=2 value="<?=  isset($count) ? $count : '' ?>">
             </td>
         </tr>
         <tr>
             <td>Message :</td>
             <td colspan="2">
                 <textarea name="message" id="" cols="20" rows="3"><?=  isset($message) ? $message : '' ?></textarea>
             </td>
         </tr>
         <tr>
             <td colspan="3">
                 <input type="submit" value="BUY">
             </td>
         </tr>
     </table>


   </form>
</body>
</html>