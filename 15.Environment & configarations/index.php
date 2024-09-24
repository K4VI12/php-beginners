<?php

require 'functions.php';
//require 'router.php';
require 'Database.php';

$config = require('config.php');
$db = new Database($config['database']);

$posts = $db->query("select * from post")->fetchAll();

dd($posts);
