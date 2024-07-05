<?php
require_once './db/mycon.php';

$st = $con->prepare("update projects set rating=? where id=?");
$st->bind_param("ii", $_POST['rating'], $_POST['id']);
$st->execute();