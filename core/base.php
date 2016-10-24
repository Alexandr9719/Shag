<?php
	define('UserName', 'root');
	define('Password', '');
	define('DBname', 'news');

	function DB()
	{

		/*$link = mysql_connect('localhost', UserName, Password);
		if (!$link) {
		    die('Could not connect: ' . mysql_error());
		}


		// make foo the current db
		$db_selected = mysql_select_db('news', $link);
		if (!$db_selected) {
		    die ('Can\'t use foo : ' . mysql_error());
		}

		echo 'Connected successfully';
		mysql_close($link);*/
		return new PDO('mysql:host=localhost;dbName='.DBname, UserName, Password);
	}
