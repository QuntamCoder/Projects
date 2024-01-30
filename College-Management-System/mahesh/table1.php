<?php
require "table.php";
$sql='CREATE TABLE sample sam(id int(5) primary key, name varchar2(15), dept varchar2(10));';
mysqli_query($connection, $sql);
?>