<?php

require_once './db/projects.php';

deleteProject($_GET["projectid"]);

echo '<script> window.location="home.php"; </script>';