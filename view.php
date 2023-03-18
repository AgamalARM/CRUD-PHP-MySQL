<?php
include('config.php');
if ($_GET['id']) {
    $user_id = $_GET['id'];

    $sql = "SELECT * FROM `users` WHERE `id` ='$user_id' ";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $first_name = $row['firstname'];
            $last_name = $row['lastname'];
            $email = $row['email'];
            $password = $row['password'];
            $gender = $row['gender'];
            $id = $row['id'];
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>view user</title>
    <!-- https://www.bootstrapcdn.com/ -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>

<body>
    <center>
    <fieldset>
            <legend>User Information</legend>
    <div class='container'>
<label for="">User ID : <?php echo $id; ?></label> <br><br>
    <label for="">First Name : <?php echo $first_name; ?></label> <br><br>
    <label for="">Last Name : <?php echo $last_name; ?></label> <br><br>
    <label for="">Email : <?php echo $email; ?></label> <br><br>
    <label for="">Gender : <?php echo $gender; ?></label> <br><br>
    </div>
    <div>
    <a class="btn btn-info" href="updateForm.php?id=<?php echo $id; ?>">
                                    Edit</a>&nbsp;<a class="btn btn-danger" href="delete.php?id=<?php echo $id; ?>">
                                    Delete</a><br><br>
                                    <a class="btn btn-info" href="index.php">
                                    Return To Home Page</a>

     </div>
    </fieldset>

</center>

</body>
</html>