<?php
require_once '../model/model.php';
function viewAllCourse()
{
    return fetchAllCourse();
}

function viewCourse($cid)
{
    $flag = false;
    $courses = fetchAllCourse();
    foreach ($courses as $key => $data) {
        if ($data["c-id"] == $cid) {
            $course = array(
                "name" => $data["name"],
                "c-id" => $data["c-id"],
                "t-id" => $data["t-id"],
                "section" => $data["section"],
            );
            $flag = true;
        }
    }
    if ($flag == true) {
        return $course;
    } else
        return false;
}
