<!-- CDN
include -> files included as permanent
include_once -> inlcude file one time
required -> complusry file
-->

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
  <?php 
  include 'navbar.php';
  include 'logic.php';
  
  ?>
    <div class="container my-3">
        <form method="POST" id="form">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Name</label>
                <input type="text" class="form-control " name="name" id="name" aria-describedby="emailHelp">
                
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Age</label>
                <input type="number" class="form-control" name="age" id="age">
            </div>
            
            <button  name="submit" id="btn-submit" class="btn btn-primary">Submit</button>
        </form>


        <table class="table">
          <thead>
            <tr>
              
              <th scope="col">ID</th>
              <th scope="col">Name</th>
              <th scope="col">Age</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $result=view();
            if(mysqli_num_rows($result)==0){
              echo "No data";
            }
            else{
              
              while($data=mysqli_fetch_array($result)){
                ?>
               
                
                <tr>
                  <th scope="row"><?=$data['id']?></th>
                  <td><?=$data['name']?></td>
                  <td><?=$data['age']?></td>
                  <td><a href="edit.php?id=<?=$data['id']?>">Edit </a> <a href="delete.php?id=<?=$data['id']?>">Delete </a></td>
                  
                </tr>

                <?php
              }
            }
            ?>
            
            
          </tbody>
        </table>
    <hr>

    </div>
    <?php include 'footer.php'?>
  </body>
</html>
