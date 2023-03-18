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
    <title>Signup Form</title>
</head>

<body>
    <h1>Update Form</h1>

    <form action="update.php" method="post">
        <fieldset>
            <legend>Personal Information</legend>
            First Name : <br>
            <input type="text" name="firstname" value="<?php echo $first_name; ?>">
            <input type="hidden" name="user_id" value="<?php echo $id; ?>">
            <br>
            Last Name : <br>
            <input type="text" name="lastname" value="<?php echo $last_name; ?>">
            <br>
            Email : <br>
            <input type="text" name="email" value="<?php echo $email; ?>">
            <br>
            Password : <br>
            <input type="password" name="password" value="<?php echo $password; ?>">
            <br>
            Gender : <br>
            <input type="radio" name="gender" value="Male" <?php if ($gender == 'Male') {
                                                                        echo 'Checked';
                                                                    } ?>>Male
            <input type="radio" name="gender" value="Female" <?php if ($gender == 'Female') {
                                                                    echo 'Checked';
                                                                } ?>>Female
            <br><br>
            <input type="submit" name='update' value="update">

        </fieldset>
    </form>


</body>

</html>