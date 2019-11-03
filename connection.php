<?php

	try 
	{
		$database = new PDO('mysql: host=localhost; dbname=everywoman', 'root', '');
	}

	catch (PDOException $ex)
	{
		die($ex);
	}
if($database){
	echo "connected";
}

?>