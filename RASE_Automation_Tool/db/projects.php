<?php
require_once 'mycon.php';

function addProject($name, $userid, $txt_file){
    global $con;
    $st = $con->prepare("insert into projects(name, userid, text_file) values(?,?,?)");
    $st->bind_param("sis", $name, $userid, $txt_file);
    $st->execute();
}

function showProjects($userid){
    global $con;
    $st = $con->prepare("select * from projects where userid=?");
    $st->bind_param("i", $userid);
    $st->execute();
    $rs = $st->get_result();
    return $rs;
}

function showProject($projectid){
    global $con;
    $st = $con->prepare("select * from projects where id=?");
    $st->bind_param("i", $projectid);
    $st->execute();
    $rs = $st->get_result();
    $row = $rs->fetch_assoc();
    return $row;
}

function deleteProject($id){
    global $con;
    $st = $con->prepare("delete from projects where id=?");
    $st->bind_param("i", $id);
    $st->execute();
}



