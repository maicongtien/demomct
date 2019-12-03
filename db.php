<?php
	$hostname = 'ec2-174-129-220-12.compute-1.amazonaws.com';
	$port = '5432';
	$database = 'daak2jhu7qfbn7';
	$username = 'juxilfxgkkpcew';
	$password = '05e5b6f59a768f05287a64b42b44d45da5fb69e7571c73b6254f777b4efbbd81';
	
	//$conn = mysqli_connect($hostname, $username, $password, $database);

	$conn = pg_connect("host=ec2-184-73-209-230.compute-1.amazonaws.com dbname=d35915da8p1v65 user=mtycxjjccxmeee password=f0dd25aaa62a3a7a83d3934915c681f6ddfac747814e5a3668945ea34017c6ce")
		or die('Could not connect: ' . pg_last_error());
?>     

?>




