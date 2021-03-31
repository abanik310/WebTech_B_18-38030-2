<?php
require_once '../controller/viewStudent.php';
$student = viewStudent($_GET["o-id"]);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student</title>
</head>
<style>
    #students {
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    #students td,
    #students th {
        border: 1px solid #ddd;
        padding: 8px;
    }

    #students tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    #students tr:hover {
        background-color: #ddd;
    }

    #students th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #4CAF50;
        color: white;
    }
</style>

<body>
    <?php include_once "nav-login.php" ?>
    <table id="students">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>ID</th>
                <th>Date of Birth</th>
                <th>Gender</th>
            </tr>
        </thead>
        <tbody>
            </tr>
            <td><a href="viewStudent.php?o-id=<?php echo $student['o-id'] ?>"><?php echo $student['name'] ?></a></td>
            <td><?php echo $student['email'] ?></td>
            <td><?php echo $student['password'] ?></td>
            <td><?php echo $student['o-id'] ?></td>
            <td><?php echo $student['dob'] ?></td>
            <td><?php echo $student['gender'] ?></td>
            <td><a href="editStudent.php?o-id=<?php echo $student['o-id'] ?>">Edit</a>&nbsp<a href="controller/deleteStudent.php?id=<?php echo $student['o-id'] ?>">Delete</a></td>
            </tr>
        </tbody>
    </table>
</body>

</html>