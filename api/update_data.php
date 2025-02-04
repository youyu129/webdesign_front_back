<?php
include_once "db.php";

$table=trim($_POST['table']);
$db=ucfirst($table);
// dd($table);
// echo $db;
$row=$$db->find(1);

// echo $$db;
$row[$table]=$_POST[$table];
$$db->save($row);

to("../admin.php?do=$table");