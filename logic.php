<?php
//CRUD
//C-> Create (Insert)
//R-> Read 
//U-> Update
//D-> Delete

function db(){
    $conn=mysqli_connect("localhost","root","","php-tut");
    //mysqli_connect($server,$username,$pass,$db_name)
    return $conn;
}


//Create
function insert_details($name,$age){
    $conn=db();
    //sql statement
    $sql="Insert into details (name,age) values('$name',$age)";
    $query=mysqli_query($conn,$sql);
    if($query){
        echo "Inserted Successfully";
    }
    else{
        echo "Error";
    }
}

//Read
function view(){
    $conn=db();
    $sql="Select * from details ";
    $query=mysqli_query($conn,$sql);
    return $query;
}

//Update
function update($id,$name,$age){
    $conn=db();
    $sql="update details set name='$name', age=$age where details.id=$id";
    $query=mysqli_query($conn,$sql);
    if($query){
        echo "Upadated Successfully";
    }
    else{
        echo "Error";
    }
}

//fetch
function fetch($id){
    $conn=db();
    $sql="Select * from details where id=$id ";
    $query=mysqli_query($conn,$sql);
    return $query;
}

//Delete
function delete($id){
    $conn=db();
    $sql="delete from details where id=$id";
    $query=mysqli_query($conn,$sql);
    if($query){
        header("Location: index.php");
        exit();
    }
    else{
        echo "Error";
    }
}
