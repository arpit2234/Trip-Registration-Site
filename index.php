<?php
  include 'coneection.php'; 

if(isset($_POST['Name'])){


    // echo "success connecting to db";

    $name=$_POST['Name'];
    $age=$_POST['Age'];
    $gender=$_POST['Gender'];
    $email=$_POST['Email'];
    $Mob =$_POST['Mob'];
    $desc=$_POST['Desc'];

    $sql = "INSERT INTO `trip`.`trip` ( `name`, `age`, `gender`, `email`, `Mob`, `Desc`, `dt`) VALUES ('$name','$age', '$gender','$email', '$Mob' , '$desc', current_timestamp());";
    // echo $sql;
    if($con->query($sql)==true){
        // echo " successfully inserted";
    }
    else{
        // echo "erro: $sql <br> $con_error";
    }
    $con->close();
}
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://fonts.googleapis.com/css2?family=Abel&display=swap" rel="stylesheet">
</head>
<body>
  <div class="container">
    <h3>Welcome to kampri - narmada dam trip</h3>
    <p>Enter your detail and submit the form  for your participation</p>
    <form action="index.php" method="POST">
      <input type="text" name="Name" id="name"placeholder="Enter your name">
      <input type="text" name="Age" id="Age" placeholder="Age">
      <input type="text" name="Gender" id="gender" placeholder="Enter your gende">
      <input type="text" name="Email" id="email" placeholder="Enter your email">
      <input type="text" name="Mob" id="mob" placeholder="Enter your num">
      <textarea name="Desc" id="Desc" cols="30" rows="10" placeholder="Enter any other informationzz1"></textarea>
      <button class="btn">Submit</button>
     
        </form>
        <div>
         <a href="showdata.php"><button class="btn" >Show data</button></a> 
        </div>
  </div>
  <!-- INSERT INTO `trip` (`Sr.no`, `name`, `age`, `gender`, `email`, `Mob no.`, `Desc`, `dt`) VALUES ('1', 'testname', '23', 'male', 'this@this.com', '123456789', 'others desc', current_timestamp());
   -->
</body>
</html>

