<?php
//define constants
define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "");
define("DB_NAME", "sounds_store");
//this info that is defined is used internally throughout rest of code

class Connection {

	//attributes
	private $mysqli;

	public function __construct() {
		$this->mysqli = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);
	}

	//Close connection
	public function close() {
		$this->mysqli->close();
	}

	//execute the passed in query and return result
	public function query($sql) {

		//execute query
		$result = $this->mysqli->query($sql);
		return $result;
	}

	// fetch a row from result_set as an associative array
	public function fetch($resultSet) {
		return $resultSet->fetch_assoc();
	}
    
    public function getInsertId() { //gives you the latest autoincrement number.
        return $this->mysqli->insert_id;
    }
}

?>