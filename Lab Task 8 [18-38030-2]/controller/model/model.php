<?php

//Login

function studentLogin($id, $password)
{
    $jsondata = file_get_contents("../data/student.json");
    $json = json_decode($jsondata, true);
    if (isset($json))
        foreach ($json as $key => $value) {
            if ($value['o-id'] == $id && password_verify($password, $value['password'])) {
                return true;
            }
        }
    return false;
}

function teacherLogin($id, $password)
{
    $jsondata = file_get_contents("../data/teacher.json");
    $json = json_decode($jsondata, true);
    if (isset($json))
        foreach ($json as $key => $value) {
            if ($value['o-id'] == $id && password_verify($password, $value["password"])) {
                return true;
            }
        }

    return false;
}

function adminLogin($id, $password)
{
    $jsondata = file_get_contents("../data/admin.json");
    $json = json_decode($jsondata, true);
    if (isset($json))
        foreach ($json as $key => $value) {
            if ($value['o-id'] == $id && password_verify($password, $value["password"])) {
                return true;
            }
        }
    return false;
}

//Student
function addStudent($data)
{
    $jsondata = file_get_contents("../data/student.json");
    $CurrentJson = json_decode($jsondata, true);
    $student = array(
        "name" => $data["name"],
        "email" => $data["email"],
        "o-id" => $data["o-id"],
        "password" => $data["password"],
        "gender" => $data["gender"],
        "dob" => $data["dob"],
        "user-type" => $data["user-type"]

    );
    $CurrentJson[] = $student;
    $studentJson = json_encode($CurrentJson);
    if (file_put_contents("../data/student.json", $studentJson)) {
        return true;
    } else {
        return false;
    }
}

function fetchAllStudent()
{
    $jsondata = file_get_contents("../data/student.json");
    $json = json_decode($jsondata, true);
    return $json;
}

function deleteStudent($oid)
{
    $jsondata = file_get_contents("../data/student.json");

    $arr_index = array();
    $json = json_decode($jsondata, true);
    foreach ($json as $key => $value) {
        if ($value['o-id'] == $oid) {
            $arr_index[] = $key;
        }
    }
    foreach ($arr_index as $i) {
        unset($json[$i]);
    }
    $json = json_encode($json);
    if (file_put_contents("../data/student.json", $json)) {
        return true;
    } else {
        return false;
    }
}

function checkStudent($oid)
{
    $jsondata = file_get_contents("../data/student.json");
    $json = json_decode($jsondata, true);
    if (isset($json))
        foreach ($json as $key => $value) {
            if ($value['o-id'] == $oid) {
                return true;
            }
        }
    return false;
}

function editStudent($oid, $data)
{
    $jsondata = file_get_contents("../data/student.json");
    $json = json_decode($jsondata, true);
    foreach ($json as $key => $value) {
        if ($value['o-id'] == $oid) {
            $json[$key]['name'] = $data["name"];
            $json[$key]['email'] = $data["email"];
            $json[$key]['o-id'] = $data["o-id"];
            $json[$key]['gender'] = $data["gender"];
            $json[$key]['dob'] = $data["dob"];
            $json[$key]['password'] = $data["password"];
            $json[$key]['user-type'] = $data["user-type"];
        }
    }
    $json = json_encode($json);
    if (file_put_contents("../data/student.json", $json)) {
        return true;
    } else {
        return false;
    }
}


//Teracher
function addTeacher($data)
{
    $jsondata = file_get_contents("../data/teacher.json");
    $CurrentJson = json_decode($jsondata, true);
    $teacher = array(
        "name" => $data["name"],
        "email" => $data["email"],
        "o-id" => $data["o-id"],
        "password" => $data["password"],
        "gender" => $data["gender"],
        "dob" => $data["dob"],
        "user-type" => $data["user-type"]

    );
    $CurrentJson[] = $teacher;
    $teacherJson = json_encode($CurrentJson);
    if (file_put_contents("../data/teacher.json", $teacherJson)) {
        return true;
    } else {
        return false;
    }
}

function fetchAllTeacher()
{
    $jsondata = file_get_contents("../data/teacher.json");
    $json = json_decode($jsondata, true);
    return $json;
}

function deleteTeacher($oid)
{
    $jsondata = file_get_contents("../data/teacher.json");

    $arr_index = array();
    $json = json_decode($jsondata, true);
    foreach ($json as $key => $value) {
        if ($value['o-id'] == $oid) {
            $arr_index[] = $key;
        }
    }
    foreach ($arr_index as $i) {
        unset($json[$i]);
    }
    $json = json_encode($json);
    if (file_put_contents("../data/teacher.json", $json)) {
        return true;
    } else {
        return false;
    }
}

function checkTeacher($oid)
{
    $jsondata = file_get_contents("../data/teacher.json");
    $json = json_decode($jsondata, true);
    if (isset($json))
        foreach ($json as $key => $value) {
            if ($value['o-id'] == $oid) {
                return true;
            }
        }
    return false;
}

function editTeacher($oid, $data)
{
    $jsondata = file_get_contents("../data/teacher.json");
    $json = json_decode($jsondata, true);
    foreach ($json as $key => $value) {
        if ($value['o-id'] == $oid) {
            $json[$key]['name'] = $data["name"];
            $json[$key]['email'] = $data["email"];
            $json[$key]['o-id'] = $data["o-id"];
            $json[$key]['gender'] = $data["gender"];
            $json[$key]['dob'] = $data["dob"];
            $json[$key]['password'] = $data["password"];
            $json[$key]['user-type'] = $data["user-type"];
        }
    }
    $json = json_encode($json);
    if (file_put_contents("../data/teacher.json", $json)) {
        return true;
    } else {
        return false;
    }
}

//Admin
function addAdmin($data)
{
    $jsondata = file_get_contents("../data/admin.json");
    $CurrentJson = json_decode($jsondata, true);
    $admin = array(
        "name" => $data["name"],
        "email" => $data["email"],
        "o-id" => $data["o-id"],
        "password" => $data["password"],
        "gender" => $data["gender"],
        "dob" => $data["dob"],
        "user-type" => $data["user-type"]

    );
    $CurrentJson[] = $admin;
    $adminJson = json_encode($CurrentJson);
    if (file_put_contents("../data/admin.json", $adminJson)) {
        return true;
    } else {
        return false;
    }
}

function fetchAllAdmin()
{
    $jsondata = file_get_contents("../data/admin.json");
    $json = json_decode($jsondata, true);
    return $json;
}


function deleteAdmin($oid)
{
    $jsondata = file_get_contents("../data/admin.json");

    $arr_index = array();
    $json = json_decode($jsondata, true);
    foreach ($json as $key => $value) {
        if ($value['o-id'] == $oid) {
            $arr_index[] = $key;
        }
    }
    foreach ($arr_index as $i) {
        unset($json[$i]);
    }
    $json = json_encode($json);
    if (file_put_contents("../data/admin.json", $json)) {
        return true;
    } else {
        return false;
    }
}


function checkAdmin($oid)
{
    $jsondata = file_get_contents("../data/admin.json");
    $json = json_decode($jsondata, true);
    if (isset($json))
        foreach ($json as $key => $value) {
            if ($value['o-id'] == $oid) {
                return true;
            }
        }
    return false;
}


function editAdmin($oid, $data)
{
    $jsondata = file_get_contents("../data/admin.json");
    $json = json_decode($jsondata, true);
    foreach ($json as $key => $value) {
        if ($value['o-id'] == $oid) {
            $json[$key]['name'] = $data["name"];
            $json[$key]['email'] = $data["email"];
            $json[$key]['o-id'] = $data["o-id"];
            $json[$key]['gender'] = $data["gender"];
            $json[$key]['dob'] = $data["dob"];
            $json[$key]['password'] = $data["password"];
            $json[$key]['user-type'] = $data["user-type"];
        }
    }
    $json = json_encode($json);
    if (file_put_contents("../data/admin.json", $json)) {
        return true;
    } else {
        return false;
    }
}

//Course 
function addCourse($data)
{
    $jsondata = file_get_contents("../data/course.json");
    $CurrentJson = json_decode($jsondata, true);
    $course = array(
        "name" => $data["name"],
        "c-id" => $data["c-id"],
        "t-id" => $data["t-id"],
        "section" => $data["section"],

    );
    $CurrentJson[] = $course;
    $coursetJson = json_encode($CurrentJson);
    if (file_put_contents("../data/course.json", $coursetJson)) {
        return true;
    } else {
        return false;
    }
}

function checkSection($cid, $section)
{
    $jsondata = file_get_contents("../data/course.json");
    $json = json_decode($jsondata, true);
    if (isset($json))
        foreach ($json as $key => $value) {
            if ($value['c-id'] == $cid  && $value['section'] == $section) {
                return true;
            }
        }
    return false;
}

function editCourse($cid, $data)
{
    $jsondata = file_get_contents("../data/course.json");
    $json = json_decode($jsondata, true);
    foreach ($json as $key => $value) {
        if ($value['c-id'] == $cid) {
            $json[$key]['name'] = $data["name"];
            $json[$key]['email'] = $data["email"];
            $json[$key]['o-id'] = $data["o-id"];
            $json[$key]['gender'] = $data["gender"];
        }
    }
    $json = json_encode($json);
    if (file_put_contents("../data/course.json", $json)) {
        return true;
    } else {
        return false;
    }
}


function fetchAllCourse()
{
    $jsondata = file_get_contents("../data/course.json");
    $json = json_decode($jsondata, true);
    return $json;
}

function deleteCourse($cid)
{
    $jsondata = file_get_contents("../data/course.json");

    $arr_index = array();
    $json = json_decode($jsondata, true);
    foreach ($json as $key => $value) {
        if ($value['c-id'] == $cid) {
            $arr_index[] = $key;
        }
    }
    foreach ($arr_index as $i) {
        unset($json[$i]);
    }
    $json = json_encode($json);
    if (file_put_contents("../data/course.json", $json)) {
        return true;
    } else {
        return false;
    }
}

// L
