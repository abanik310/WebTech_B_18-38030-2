<?php
require_once "dataAccess.php";

function fetchAdminData($oid)
{
    $selectQuery = "select * from admin where `o-id` = " . $oid . "";
    $conn = dataAccess();
    try {
        $stmt = $conn->query($selectQuery);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}

function checkAdmin($oid)
{
    $rows = fetchAdminData($oid);
    if ($rows == null)
        return false;
    return true;
}

function fetchAllAdmin()
{
    $selectQuery = "select * from admin ";
    $conn = dataAccess();
    try {
        $stmt = $conn->query($selectQuery);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}

function adminLogin($id, $password)
{
    $row = fetchAdminData($id);
    if (password_verify($password, $row["password"]))
        return true;
    else
        return false;
}



function addAdmin($data)
{
    $conn = dataAccess();
    $selectQuery = "INSERT INTO `Admin` (`Name`,`O-ID`, `Email`, `Password`, `Gender`, `DOB`, `Photo`)
    VALUES (:name, :email, :password, :o-id, :gender, :dob, :photo)";
    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            ':o-id' => $data['o-id'],
            ':name' => $data['name'],
            ':email' => $data['email'],
            ':password' => $data['password'],
            ':gender' => $data['gender'],
            ':dob' => $data['password'],
            ':photo' => $data['photo']
        ]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $conn = null;
    return true;
}

function deleteAdmin($oid)
{
    $conn = dataAccess();
    $selectQuery = "DELETE FROM `student` WHERE `o-id` = ?";
    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$oid]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $conn = null;

    return true;
}


function editAdmin($oid, $data)
{
    $conn = dataAccess();
    $selectQuery = "UPDATE admin set `name`, `email`, `password`, `gender`, `dob`, `photo` where o-id = ?";
    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            $data['name'], $data['email'], $data['password'], $data['gender'], $data['dob'], $data['photo'], $oid
        ]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }

    $conn = null;
    return true;
}