<?php
require('db.php');
$db = new PDO(DB. ':host='. HOST. ';dbname='. DBNAME, USER, PASSWORD);
echo json_encode($db->query('select p1, p2 from tcc')->fetchAll(PDO::FETCH_ASSOC),
   JSON_UNESCAPED_UNICODE);
?>
