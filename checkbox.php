
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

   <?php include 'header.php'?>  
    <title>Forms</title>
  </head>
  <body>
  <?php include 'navbar.php'?>
    <div class="container my-3">
       
    <form  method="post">
        <input type="checkbox" name="check_list[]" value="value 1">a
        <input type="checkbox" name="check_list[]" value="value 2">b
        <input type="checkbox" name="check_list[]" value="value 3">c
        <input type="checkbox" name="check_list[]" value="value 4">d
        <input type="checkbox" name="check_list[]" value="value 5">e
        <input type="submit" >
    </form>
<?php
if(!empty($_POST['check_list'])) {
    foreach($_POST['check_list'] as $check) {
            echo $check; 
    }
}
?>
    
    </div>
    <?php include 'footer.php'?>
  </body>
</html>
