<?php

class DB
{
	protected $pdo;

	public function __construct()
	{
		$DNS         	= 'mysql:host=127.0.0.1;dbname=cms';
		$USER 	    	= 'root';
		$PASSWORD 		= '';

		try
		{
			$this->pdo = new PDO($DNS , $USER , $PASSWORD);
			$this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);	
			$this->pdo->query("SET NAMES 'utf8' COLLATE 'utf8_polish_ci'");
		}
		catch(PDOException $e)
		{
			die($e->getMessage());
		}

	}



	public  function select($sql,$fetch = 'obj',$num = 0) 
	{
		try
			{
			$query = $this->pdo->prepare($sql);
			$query->execute();
			$count = $query->rowCount();
			}
			catch(Exception $e)
			{
				echo '<pre>';
				echo 'ERROR:  '.$sql;
				echo '</pre>';			
				echo $e->getMessage();
				die;
			}	


		if($fetch == 'column')
		{
			$dane = $query->fetchAll(PDO::FETCH_COLUMN,$num);
		}
		else if($fetch == 'obj')
		{
			$dane = $query->fetchAll(PDO::FETCH_OBJ);
		}
		
		
		return $dane;
	}




	public  function insert($sql) 
	{
		try
			{
			$query = $this->pdo->prepare($sql);
			$query->execute();
			}
			catch(Exception $e)
			{
				echo '<pre>';
				echo 'ERROR:  '.$sql;
				echo '</pre>';			
				echo $e->getMessage();
				die;
			}	
	}


	public  function update($sql) 
	{
		try
			{
			$query = $this->pdo->prepare($sql);
			$query->execute();
			}
			catch(Exception $e)
			{
				echo '<pre>';
				echo 'ERROR:  '.$sql;
				echo '</pre>';			
				echo $e->getMessage();
				die;
			}	
	}



	public  function delete($sql) 
	{
		try
			{
			$query = $this->pdo->prepare($sql);
			$query->execute();
			}
			catch(Exception $e)
			{
				echo '<pre>';
				echo 'ERROR:  '.$sql;
				echo '</pre>';			
				echo $e->getMessage();
				die;
			}	
	}




}//END CLASS