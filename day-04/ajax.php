<?php

include 'logic.php';


if(isset($_POST['type'])){
    if($_POST['type']==1){
        $n=$_POST['name'];
        $a=$_POST['age'];
        if(insert_details($n,$a)){
            echo json_encode(array("status"=>200));
        }
        else{
            echo json_encode(array("status"=>201));
        }

    }

    if($_POST['type']==2){
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
    
    }

}