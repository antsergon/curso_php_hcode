<?php
session_id('srem076vnohpib8jlj21ertu95');
require_once('config.php');

session_regenerate_id();

echo session_id();

echo "<br>";
var_dump($_SESSION);