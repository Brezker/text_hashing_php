<?php
    if (isset($_POST['submit'])) {
        $txt = $_POST['txt'];
        $file = $_POST['csv_file'];
        $type = $_POST['enc'];
        
        if ($type == "sha1") {
            $crypted = sha1($txt);
        } else {
            $crypted = md5($txt);
        }

        // Seccion para crear archivo en txt
        
        //$arch = fopen('practica1.txt', 'a+') or die ("error creating file");
        //fwrite($arch, $crypted);
        $arch = "log.txt";
        file_put_contents($arch, $crypted);
        echo('<script>alert("Your hash has been sabed")</script>');
        //fclose($arch);
    }
    /*
    $variable=$crypted;
    echo($variable);

    if (isset($_POST['submit2'])) {
      // Recupera el hash
      $txtres = $_POST['txtres'];
      echo($txtres);
      //echo($crypted=$_GET['txtread']);
      //$crypted = $crypted;
      // Revisa que el hash sea correcto, en caso de ser otro codigo madara error y se imprimira en el iput text
      if ($txtres == $variable) {
          $txtdehash = "True";
      } else {
          $txtdehash = "False";
      }

    }
    */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Hash Generator</title>
</head>
<body>
    <div class="wrapper">
        <h2>Hash Generator</h2>
        <br>
        <form class="form" action="" method="post">
            <select name="enc" id="enc">
                <option value="md5">MD5</option>
                <option value="sha1">SHA1</option>
            </select>
            <input type="text" name="txt" required>
            <button type="submit" name="submit">Generate</button>
            <br><br>
            <!--<label for="lname">File:</label> <input type="file" id="lname" name="csv_file">-->
        </form>
        <br>
        <input type="text" name="txtread" readonly value="
            <?php
                echo($crypted);

                /*$filename = $_POST['csv_file'];
                $filext = pathinfo($filename, PATHINFO_EXTENSION);
                if (isset($_POST['submit'])) { echo $crypted; }*/ 
            ?>
        ">
        <br>
        <!--
        <h2>Dehash</h2>
        <br>
        <form class="form" action="" method="post">
            <input type="text" name="txtres" required>
            <button type="submit" name="submit2">Dehash</button>
            <br><br>
        <input type="text" name="txtdehash" readonly value="
            <?php
                //echo($txtdehash);

                /*$filename = $_POST['csv_file'];
                $filext = pathinfo($filename, PATHINFO_EXTENSION);
                if (isset($_POST['submit'])) { echo $crypted; }*/ 
            ?>
        ">

            label for="lname">File:</label>
            <input type="file" id="lname" name="csv_file"> 
         </form>
        -->
    </div>
</body>
</html>
