<?php
session_start();
// define('DB_SERVER','localhost');
// define('DB_USER','u603429269_maindb');
// define('DB_PASS' ,'Mennia123');
// define('DB_NAME', 'u603429269_sonzieOnline');

// define('DB_SERVER','localhost');
// define('DB_USER','mcgnuser');
// define('DB_PASS' ,'mcgnroot');
// define('DB_NAME', 'sonzie_cv');

define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS' ,'root');
define('DB_NAME', 'sonzie_cv');


class DataBase
{
  // public static $con;
 function __construct()
 {
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
$this->dbh=$con;
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }
 }
}