<?php

$conn = new PDO ('mysql:host=localhost;dbname=rpg', 'developer', 'dev123');
$conn->exec("set names utf8");