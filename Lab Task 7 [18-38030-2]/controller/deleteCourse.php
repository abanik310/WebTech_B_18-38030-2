<?php
require_once '../model/model.php';
if (deleteCourse($_GET['c-id'])) {
    header('Location: ../view/viewAllCourse.php');
    echo "Course deleted";
} else {
    echo 'error';
}
