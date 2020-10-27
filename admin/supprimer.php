<?php
include_once "../fonction/admin.php";
require_once "../fonction/bdd.php";
$bdd = bdd();
supprimerMembre();

header("Location: G_membres.php");

