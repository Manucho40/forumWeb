<?php
include_once "fonction/admin.php";
require_once "fonction/bdd.php";
$bdd = bdd();
supprimer();

header("Location: posts.php");

