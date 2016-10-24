<?php
	$module = "index";
	$action = "index";
	$params = array();
	if ($_SERVER['REQUEST_URI'] != '/') {
		try {
			$ur = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
			$tr = explode('/', trim($ur, '/'));
			if (count($tr)%2) {
				throw new Exception();
			}
			$module = array_shift($tr);
			$action = array_shift($tr);
			for ($i=0; $i < count($tr); $i++) {
				$params[$tr[$i]] = $tr[++$i];
			}
		} catch (Exception $e) {
			$module='404';
			$action='index';
		}
	}
