<?php
require_once '../controller/viewCourse.php';
if (isset($_GET["c-id"]))
    $course = viewCourse($_GET["c-id"]);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course</title>
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
                <th>Course ID</th>
                <th>Teacher ID</th>
                <th>Section</th>
            </tr>
        </thead>
        <tbody>
            </tr>
            <td><a href="viewCourse.php?c-id=<?php if (isset($course)) echo $course['c-id'] ?>"><?php if (isset($course)) echo $course['name'] ?></a></td>
            <td><?php if (isset($course)) echo $course['c-id'] ?></td>
            <td><?php if (isset($course)) echo $course['t-id'] ?></td>
            <td><?php if (isset($course)) echo $course['section'] ?></td>
            <td><a href="editCourse.php?c-id=<?php if (isset($course)) echo $course['c-id'] ?>">Edit</a>&nbsp<a href="controller/deleteCourse.php?id=<?php if (isset($course)) echo $course['c-id'] ?>">Delete</a></td>
            </tr>
        </tbody>
    </table>
</body>

</html>