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
        
    }
    
}