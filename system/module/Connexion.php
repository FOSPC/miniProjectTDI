<?php
	/**
	* pour la connexion a la base de donnees
	*/
	class Connexion 
	{

		private $db;
		public  $host="localhost";
		public  $user="root";		
		public  $pwd="root";
		public  $dbname="test";

		public  function __construct(){}


		public function getPDO()
		{
			try 
			{
				$this->db=new PDO("mysql:host={$this->host};charset=utf8;dbname=".$this->dbname,$this->user,$this->pwd);
			    return $this->db;
			} 
			catch (Exception $e) 
			{
				echo $e->getMessage();
			}
		} 
	}
?>
