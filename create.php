<?php
require_once('config.php');

if(isset($_POST['submit'])){
    $first_name = $_POST['firstname'];
    $last_name = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['pasword'];
    $gender = $_POST['gender'];
}

$sql = "INSERT INTO `users`('firstname','lastname','email','password','gender') VALUES ('$first_name','$last_name','$email','$password','$gender')";
$result = $conn->query($sql);

if($result == TRUE){
    echo 'New record created succesfully';
}else{
    echo 'Error : '.$sql.'<br>'.$conn->error ;
}

$conn->close();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Form</title>
</head>
<body>
    <h1>Signup Form</h1>

    <form action="" method="post">
        <fieldset>
            <legend>Personal Information</legend>
            First Name : <br>
            <input type="text" name="firstname">
            <br>
            Last Name : <br>
            <input type="text" name="lastname">
            <br>
            Email : <br>
            <input type="text" name="email">
            <br>
            Password : <br>
            <input type="password" name="password">
            <br>
            Gender : <br>
            <input type="radio" name="gender" value="Male">Male
            <input type="radio" name="gender" value="Female">Female
            <br><br>
            <input type="submit" name='submit' value="submit">

        </fieldset>
    </form>





</body>
</html>