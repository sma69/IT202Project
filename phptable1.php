#!/usr/bin/php
<?php

$db = new mysqli("localhost","root","speeding","it202");
/*
	In here we can access the DB if it worked
*/

if ($db->connect_errno > 0 )
{
   echo __FILE__.__LINE__." ERROR: ".$db->connect_error.PHP_EOL;
   exit(-1);
}

// sql to create table
$sql = "CREATE TABLE listColor (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
lastname VARCHAR(30) NOT NULL,
firstname VARCHAR(30) NOT NULL,
color VARCHAR(50),

)";






