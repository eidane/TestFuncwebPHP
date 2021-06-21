<?php
session_start();
$host = "localhost"; /* Host name */
$user = "admin"; /* User */
$password = "admin"; /* Password */
$dbname = "blogger_disk"; /* Database name */

$con = mysqli_connect($host, $user, $password,$dbname);
// Check connection
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}
define ('ROOT_PATH', realpath(dirname(__FILE__)));
define('BASE_URL', 'http://localhost/complete-blog-php/');

?>