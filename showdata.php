
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include 'coneection.php' ?>
</head>
<body>
    <div>
        <h1>this is data</h1>
    </div>

    <div>
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Gender</th>
                    <th>Email</th>
                    <th>Mob</th>
                    <th>DEsc</th>
                    <th>dt</th>
                </tr>
            </thead>
            <tbody>
            <?php
        
       $selectquery = " select * from `trip`.`trip` ";

$query = mysqli_query($con,$selectquery);

$num = mysqli_num_rows($query);

// $res = mysqli_fetch_array($query);


while($res =mysqli_fetch_array($query)){

  ?> 
   <!-- // echo $res['name']."<br>"; -->
    <tr>
    <td><?php echo $res['Sr.no']; ?></td>
    <td><?php echo $res['name']; ?></td>
    <td><?php echo $res['age']; ?></td>
    <td><?php echo $res['gender']; ?></td>
    <td><?php echo $res['email']; ?></td>
    <td><?php echo $res['Mob']; ?></td>
    <td><?php echo $res['Desc']; ?></td>
    <td><?php echo $res['dt']; ?></td>
    
</tr>
<?php

}

?>




               
            </tbody>
        </table>
    </div>
    
</body>
</html>