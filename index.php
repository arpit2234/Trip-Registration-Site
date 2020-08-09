<?php
if(isset($_POST['Name'])){
$sever="localhost";
$username="root";
$password="";

$con=mysqli_connect($sever,$username,$password);
if(!$con){
    die("connection failed due to".mysqli_connect_error());
}

    echo "success connecting to db";

    $name=$_POST['Name'];
    $age=$_POST['Age'];
    $gender=$_POST['Gender'];
    $email=$_POST['Email'];
    $Mob =$_POST['Mob'];
    $desc=$_POST['Desc'];

    $sql = "INSERT INTO `trip`.`trip` ( `name`, `age`, `gender`, `email`, `Mob`, `Desc`, `dt`) VALUES ('$name','$age', '$gender','$email', '$Mob' , '$desc', current_timestamp());";
    echo $sql;
    if($con->query($sql)==true){
        echo " successfully inserted";
    }
    else{
        echo "erro: $sql <br> $con_error";
    }
    $con->close();
}
   
?>
