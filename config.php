<?php

define('DB_SERVER', 'ec2-174-129-220-12.compute-1.amazonaws.com');
define('DB_USERNAME', 'juxilfxgkkpcew');
define('DB_PASSWORD', '05e5b6f59a768f05287a64b42b44d45da5fb69e7571c73b6254f777b4efbbd81');
define('DB_NAME', 'daak2jhu7qfbn7');
 
/* Attempt to connect to MySQL database */
$link = pg_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . pg_last_error());
}
?>
