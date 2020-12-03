<?php

require_once 'DbConnection.php';

function addEditor($data)
{
    $conn= db_conn();
    $query = "INSERT INTO editor(pass, name, phone, email, city, country, dob, username, gender) VALUES(:pass,:name,:phone,:email,:city,:country,:dob,:username,:gender)";
    try{
        $stmt = $conn->prepare($query);
        $stmt->execute([
            ':pass' => $data['pass'],
            ':name' => $data['name'],
            ':phone' => $data['phone'],
            ':email' => $data['email'],
            ':city' => $data['city'],
            ':country' => $data['country'],
            ':dob' => $data['dob'],
            ':username' => $data['username'],
            ':gender' => $data['gender']
        ]);
    }
    catch(PDOException $e){
        echo $e->getMessage();
    }

    $conn = null;
    return true;

}

function login($data)
{
    $conn = db_conn();
    $query = "SELECT * FROM editor WHERE username = :username AND pass = :password";
    try
    {
        $stmt = $conn->prepare($query);
        $stmt->execute([
            ':username' => $data['username'],
            ':password' => $data['password']
        ]);
    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
    }

    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    return $row;
}

function showInfo($data)
{
    $conn = db_conn();
    $query = "SELECT * FROM editor WHERE username = ?";
    try
    {
        $stmt = $conn->prepare($query);
        $stmt->execute([$data]);
    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
    }

    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    return $row;
}


function editInfo($data){
    $conn = db_conn();
    $selectQuery = "UPDATE editor set name = ?, email = ?, country = ?, city = ?, phone = ? where username = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            $data['name'], $data['email'], $data['country'],$data['city'], $data['phone'], $data['username']
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}


?>