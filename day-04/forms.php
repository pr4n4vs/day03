

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

   <?php include 'header.php'?>  
    <title>Form action</title>
  </head>
  <body>
  <?php include 'navbar.php'?>
    <div class="container my-3">
       
    <?php

        if(isset($_POST['submit']) ){
            $n=$_POST['name'];
            $a=$_POST['age'];
            echo "we recived name is ".$n." and age is ".$a;
        }
?>
    
    </div>
    <?php include 'footer.php'?>
  </body>
</html>



    