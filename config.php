<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'ec2-184-73-209-230.compute-1.amazonaws.com');
define('DB_USERNAME', 'mtycxjjccxmeee');
define('DB_PASSWORD', 'f0dd25aaa62a3a7a83d3934915c681f6ddfac747814e5a3668945ea34017c6ce');
define('DB_NAME', 'd35915da8p1v65');
 
/* Attempt to connect to MySQL database */
$link = pg_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . pg_last_error());
}
?>
