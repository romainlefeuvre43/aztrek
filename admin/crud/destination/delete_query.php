<?php

require_once '../../../model/database.php';

$id = $_GET["id"];

deleteEntity("destination", $id);

//header("Location: index.php");