<?php
require_once('config.php');

$sql = "SELECT * FROM users";
$result = $conn->query($sql);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>view all records</title>
    <!-- https://www.bootstrapcdn.com/ -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h2>List of users</h2>
        <div><a class="btn btn-info" href="createForm.php">
                Create New user</a></div>
        <table class="table">
            <?php
            if ($result->num_rows > 0) {
            ?>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Gender</th>
                        <th>Action</th>
                    </tr>
                </thead>
            <?php
            }
            ?>
            <tbody>
                <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {

                ?>

                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['firstname']; ?></td>
                            <td><?php echo $row['lastname']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['gender']; ?></td>
                            <td><a class="btn btn-info" href="view.php?id=<?php echo $row['id']; ?>">
                                    View</a>&nbsp;<a class="btn btn-info" href="updateForm.php?id=<?php echo $row['id']; ?>">
                                    Edit</a>&nbsp;<a class="btn btn-danger" href="delete.php?id=<?php echo $row['id']; ?>">
                                    Delete</a></td>
                        </tr>
                <?php
                    } //close of while loop
                }     // close of if
                ?>
            </tbody>

        </table>
    </div>

</body>

</html>