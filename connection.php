<?php

$database = new mysqli("localhost", "root", "", "Healthcare");
if ($database->connect_error) {
    die("Connection failed:  " . $database->connect_error);
}

?>