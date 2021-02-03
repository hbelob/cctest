<?php
require('db.php');
$post = json_decode(file_get_contents("php://input"), true);
$db = new PDO(DB. ':host='. HOST. ';dbname='. DBNAME, USER, PASSWORD);
$stat = $db->prepare('update tcc set p1 = :p1, p2 = :p2');
$stat->execute([':p1' => $post['p1'], ':p2' => $post['p2']]);
?>
