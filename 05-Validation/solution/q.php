<?php
  require_once "./db.php" ;
//   var_dump($_POST) ;
  if ( isset($_POST["submit"])) {
    //   echo "You clicked submit button" ;
    extract($_POST) ; // $dept, $reportNo, $message, $submit
    $error = [] ;
    // Validate Report No
    if ( filter_var($reportNo, FILTER_VALIDATE_INT, ["options" => ["min_range" => 1000]]) === false){
        $error[] = "reportNo" ;
    }

    // Validate Departments
    if ( !in_array($dept, $departments)) {
        $error[] = "departments" ;
        // log this action maybe store IP address and track this user.
    }

    // Validate Message
    if ( strlen(trim($message)) === 0) {
        $error[] = "message" ;
    }

    // Sanitize all output
    $message = filter_var($message, FILTER_SANITIZE_FULL_SPECIAL_CHARS) ;
    $dept = filter_var($dept, FILTER_SANITIZE_FULL_SPECIAL_CHARS) ;
    $reportNo = filter_var($reportNo, FILTER_SANITIZE_FULL_SPECIAL_CHARS) ;

    if ( empty($error)) {
        echo "<p>To : <span>$dept</span></p>";
        echo "<p>Report No : <span>$reportNo</span>" ;
        echo "<p>Message : <span>$message</span>" ;
        echo "<p><a href=''>Back to Form</a></p>";
        exit ;
    }
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
        td { padding:10px; border:1px solid #666;}
        .error { font-weight: bold; font-style:italic; color:red; background: #DDD;}
    </style>
</head>
<body>
  <form action="" method="post">
    <table>
        <tr>
            <td>Department :</td>
            <td>
                <select name="dept">
                 <?php
                    $dept = isset($dept) ? $dept : "" ;
                    foreach( $departments as $depts) {
                        echo "<option ";
                        if ( $dept === $depts) {
                            echo " selected" ;
                        }
                        echo ">" . $depts . "</option>" ;
                    }
                 ?>
                </select>
            </td>
        </tr>
        <tr  <?= isset($error) && in_array("reportNo", $error) ? " class='error'": '' ?>  >
            <td>Report No:</td>
            <td>
                <input type="text" name="reportNo" value="<?= isset($reportNo) ? $reportNo : ''?>">
            </td>
        </tr>
        <tr  <?= isset($error) && in_array("message", $error) ? " class='error'": '' ?>>
            <td>Message :</td>
            <td>
                <textarea name="message"  cols="40" rows="5"><?= isset($message)? $message : '' ?></textarea>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="submit" name="submit" value="Send">
            </td>
        </tr>
    </table>


  </form>
</body>
</html>