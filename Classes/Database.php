<?php
	class Database extends mysqli{
		protected $host;
		protected $user;
		protected $password;
		protected $db;
		public function __construct(){
			$this->host = "localhost";
			$this->user = "root";
			$this->password = "";
			$this->db = "db";
			parent::__construct($this->host,$this->user,$this->password,$this->db);
		}
		public function select($rows,$table,$where=null){
			$query = "select ".$rows." from ".$table;
			if(!is_null($where)){
				$query .= $where;
			}
			$result = parent::query($query);
			$final_result = [];
			while($data = $result->fetch_assoc()){
				$final_result[] = $data;
			}
			return $final_result;
		}
		public function insert($table,$data){
			$rows = "";
			$values = "";
			foreach ($data as $key => $value) {
				$rows .= ",".$key;
				$values .= ",'".$value."'";
			}
			$rows = "(".substr($rows, 1).")";
			$values = " values(".substr($values, 1).")";
			$query = "insert into ".$table.$rows.$values;
			$product = parent::query($query);
			return $product;
		}
	}

?>