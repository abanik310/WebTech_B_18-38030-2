<?php
require_once '../controller/viewStudent.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $student = viewStudent($_POST["o-id"]);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Students</title>
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

    input[type=text],
    select {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        border-color: blue;
    }

    input[type=submit] {
        width: 20%;
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        border-color: whitesmoke;
        font-size: 20px;
    }

    input[type=submit]:hover {
        background-color: #45a049;

    }
</style>


<body>
    <?php include_once "nav-login.php" ?>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
        Search Student<input type="text" name="o-id">
        <input type="submit" name="Search">
    </form>
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
            <td><a href="viewStudent.php?o-id=<?php if (isset($student['o-id'])) echo $student['o-id'] ?>"><?php if (isset($student['o-id'])) echo $student['name'] ?></a></td>
            <td><?php if (isset($student['email'])) echo $student['email'] ?></td>
            <td><?php if (isset($student['password'])) echo $student['password'] ?></td>
            <td><?php if (isset($student['o-id'])) echo $student['o-id'] ?></td>
            <td><?php if (isset($student['dob'])) echo $student['dob'] ?></td>
            <td><?php if (isset($student['gender'])) echo $student['gender'] ?></td>
            <td><a href="editStudent.php?id=<?php echo $student['o-id'] ?>">Edit</a>&nbsp<a href="controller/deleteStudent.php?id=<?php echo $student['o-id'] ?>">Delete</a></td>
            </tr>
        </tbody>


    </table>
</body>
</body>


</html>