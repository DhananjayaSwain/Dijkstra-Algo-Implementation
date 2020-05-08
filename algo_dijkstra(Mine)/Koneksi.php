<?php
class Koneksi{
	public $db = "algo_dijkstra";
	
	public function connect(){
		return mysqli_connect('localhost', 'root', '151996', $this->db);
	}
	
	public function connectPDO(){
		return $conn = new PDO("mysql:host=localhost;dbname=$this->db", 'root', '151996');
	}
}
?>