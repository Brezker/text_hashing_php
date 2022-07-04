<?php
  if (isset($_POST['submit'])) {
    // Recupera el hash
    $txtfile = file_get_contents("log.txt");
    echo($txtfile);

      $txthash = $_POST['txthash'];
      
      // Revisa que el hash sea correcto, en caso de ser otro codigo madara error y se imprimira en el iput text
      if ($txthash == $txtfile) {
          $txt = "True";
      } else {
          $txt = "False";
      }

  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Text Hash</title>
</head>
<body>
    <div class="wrapper">
        <h2>Text Hash</h2>
        <br>
        <form class="form" action="" method="post">
            <input type="text" name="txthash" required>
            <button type="submit" name="submit" class="input">Check</button>
            <br><br>
            <!--<label for="lname">File:</label>
            <input type="file" id="lname" name="csv_file">-->
        </form>
        <br>

        <input type="text" name="txtread" class="input" readonly value="
            <?php
                echo($txt);
                // En esta parte revisa si el codigo es correcto y devuelve un valor en caso de que este bien o no
                /*$filename = $_POST['csv_file'];
                $filext = pathinfo($filename, PATHINFO_EXTENSION);
                if (isset($_POST['submit'])) { echo $crypted; }*/ 
            ?>
        ">

    </div>
</body>
</html>
