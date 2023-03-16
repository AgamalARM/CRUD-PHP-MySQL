<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Form</title>
</head>

<body>
    <h1>Create Form</h1>

    <form action="create.php" method="post">
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