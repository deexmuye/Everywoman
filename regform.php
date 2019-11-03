<?php 
require 'modules/database.php';

session_start();

if ($_SERVER['REQUEST_METHOD']==GET)
{
http_response_code(405);
		echo "Bad Request Method";
}

 ?>