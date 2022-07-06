<?php
    $insert = fasle;

if (isset($_POST['name'])){
    // Set Connection Variables

    $server = "localhost";
    $username = "root";
    $password = "";

    // Create a connection  with database

    $con  = mysqli_connect($server, $username, $password);

    // Check for connection sucess

    if(!$con){
        die("Connection to this database failed due to" . 
        mysqli_connect_error());
    }

    // Collect Post Variables
    
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $desc = $_POST['desc']; 
    

    $sql = "INSERT INTO `trip`.`trip`( `name`, `age`, `gender`, `email`, `phone`, `desc`, `dt`)
     VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp())";

    // echo $sql;

    // Execute the Query

    if($con->query ($sql)==true){
        // echo "Successfully Inserted"; 

        // Flg for sucessful Insertion

        $insert =true;
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }

    // Close the database connection

    $con->close();
       
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Welcome to Travel Form</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <img class="bg" src="lahore.jpg" alt="Lahore tour">

    <div class="container">

        <h3> Welcome to Lahore Trip Form</h3>
        <p>Enter your details and submit this form to confirm your seats in the trip.</p>
        <?php
        if($insert==true){

        echo "<p class='submitMsg'> Thanks to submitting the form. We are happy that you wil join the Lahore trip.</p> ";
        }

        ?>
    

    <!-- Form  -->

    <form action="index.php" method="post">
    <input type="text" name="name" id="name" placeholder="Enter your name">
    <input type="text" name="age" id="age" placeholder="Enter your age">
    <input type="text" name="gender" id="gender" placeholder="gender ">
    <input type="email" name="email" id="email" placeholder="Enter your email">
    <input type="phone" name="phone" id="phone" placeholder="Enter your phone">
    <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter any other information here"></textarea>
    <button class="btn">Submit</button>

</form>
</div>

    <script src="index.js"></script>
    
</body>
</html>
