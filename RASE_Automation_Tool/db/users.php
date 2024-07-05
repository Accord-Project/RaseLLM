<?php
require_once 'mycon.php';


function login($em, $pw){
    global $con;
    $st = $con->prepare("select id, name from users where email=? and password=?");
    $st->bind_param("ss", $em, $pw);
    $st->execute();
    $rs = $st->get_result();
    return $rs;
}

function getName($userid){
    global $con;
    $st = $con->prepare("select name from users where id=?");
    $st->bind_param("i", $userid);
    $st->execute();
    $rs = $st->get_result();
    if($rs->num_rows == 0)
        return "Add";
    else{
        $row = $rs->fetch_assoc();
        return $row["name"];
    }
}

function changePassword($userid, $oldpw, $newpw){
    global $con;
    $oldpwenc = sha1($oldpw);
    $st = $con->prepare("select id from users where id=? and password=?");
    $st->bind_param("is", $userid, $oldpwenc);
    $st->execute();
    $rs = $st->get_result();
    if($rs->num_rows < 0)
        return false;
    else{
        $st = $con->prepare("update users set password=? where id=?");
        $newpwenc = sha1($newpw);
        $st->bind_param("si", $newpwenc ,$userid);
        $st->execute();
        return true;
    } 
}

function signup($em, $pw, $nm){
    global $con;
    $st = $con->prepare("insert into users(email, password, name) values(?,?,?)");
    $st->bind_param("sss", $em, $pw, $nm);
    $st->execute();
    return getUserId($em);
}

function getUserId($email){
    global $con;
    $st = $con->prepare("select id from users where email=?");
    $st->bind_param("s", $email);
    $st->execute();
    $rs = $st->get_result();
    $row = $rs->fetch_assoc();
    return $row["id"];
}





