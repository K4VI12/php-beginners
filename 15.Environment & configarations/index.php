<?php

require 'functions.php';
//require 'router.php';
require 'Database.php';

$db = new Database();
$posts = $db->query("select * from post")->fetchAll(); //" :: " give to acces to static or constant define class

dd($posts);
