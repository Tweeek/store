<?php

require_once '../libraries/config.lib.php';

class Product_Collection{

	public $items = array();
	private $db;

	public function __construct(){
		$this->db = new Database(
			Config::$hostname,
			Config::$username,
			Config::$password,
			Config::$database
		);

		$this->items = $this->db
			->select('*')
			->from('tb_products')
			->get();
	}
}