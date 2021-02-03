<?php
require('db.php');

$conn = mysqli_connect(HOST, USER, PASSWORD)
OR die( mysqli_connect_error() );

mysqli_set_charset($conn, 'utf8');

$sql = 'create database '. DBNAME;
mysqli_query($conn, $sql);

mysqli_close($conn);

$dbc = mysqli_connect(HOST, USER, PASSWORD, DBNAME)
OR die( mysqli_connect_error() );

mysqli_set_charset($dbc, 'utf8');

$sql = 'create table tcc (p1 varchar(10), p2 varchar(10))';
mysqli_query($dbc, $sql);
$sql = "insert into tcc (p1, p2) values ('', '')";
mysqli_query($dbc, $sql);

mysqli_close($dbc);

?>
