<?php 
	/**
	 * Method chaining: is another process introduced in PHP5 by which you can directly
	 access the methods and attributes of an object when it is returened by any function.
	 It is something like the following:

	 $SomeOjbect->getObjectOne()->getObjectTwo()->callMethodOfObjectTwo();
	 */

	 class DBManager
	 {
	 	private $selectables = array();
	 	private $table;
	 	private $whereClause;
	 	private $limit;

	 	public function select()
	 	{
	 		$this->selecttables=func_get_args();
	 		return $this;
	 	}

	 	public function from($table)
	 	{
	 		$this->table = $table;
	 		return $this;
	 	}

	 	public function where($clause)
	 	{
	 		$this->whereClause = $clause;
	 		return $this;
	 	}

	 	public function limit($limit)
	 	{
	 		$this->limit = $limit;
	 		return $this;
	 	}

	 	public function result()
	 	{
	 		$query = "SELECT ".join(",",$this->selecttables)." FROM ".$this->table;

	 		if (!empty($this->whereClause)) {
	 			$query .= " WHERE ".$this->whereClause;
	 		}

	 		if (!empty($this->limit)) {
	 			$query .= " LIMIT ".$this->limit;
	 		}

	 		echo "The generated Query is: \r\n".$query."\r\n";
	 	}
	 }

	 $db = new DBManager();
	 $db->select("id","name")->from("users")->where("id=1")->limit(1)->result();
 ?>