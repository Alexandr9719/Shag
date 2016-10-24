<?php
	class DB
	{
		private $username = "root";
		private $password = "";
		private $dbName = "news";
		public $db;

		function __construct()
		{
			$this->db = $this->dbConnection();
		}

		private function dbConnection()
		{
			return new PDO('mysql:host=localhost;dbName='.$this->dbName,$this->username,$this->password);
		}
	}

?>
