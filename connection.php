<?php
class Database
{
	private $db_host='localhost';
	private $db_user='root';
	private $db_pass='akki';
	private $db_name='test';

private $result=array();
#Roots to Select Function
private function tableExists($table)
{
	$tablesInDb=@mysql_query('SHOW TABLES FROM'.$this->db_name.'LIKE"'.$table.'"');
	if($tablesInDb)
	{
		if(mysql_num_rows($tablesInDb)==1)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
}	

	public function connect()
	{
		if(!$this->con)
		{
			$myconn=@mysql_connect($this->db_host, $this->db_user, $this->db_pass);
			if($myconn)
			{
				$seldb=@mysql_select_db($this->db_name, $myconn);
				if($seldb)
				{
					$this->con=true;
					return true;
				}
				else
				{
					return false;
				}
			}
			else
			{
				return false;
			}
		}
		else
		{
			return true;
		}
	}
	public function disconnect()
	{
		if($this->con)
		{
			if(@mysql_close())
			{
				$this->con=false;
				return true;
			}
			else
			{
				return false;
			}
		}
	}
	public function select()
	{

	}
	public function insert()
	{

	} 
	public function delete()
	{

	}
	public function update()
	{

	}
}
?>