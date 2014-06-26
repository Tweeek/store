<?php

class User{

	# Properties -----------------------------------

	public $id         = 0;
	public $email      = '';
	public $password   = '';
	private $db        = null;

	# Magic Methods --------------------------------

	function __construct($id = 0){
		$this->db = new Database(
			'localhost',
			'conorduf_admin',
			'admin',
			'conorduf_login'
		);

		if($id){
			$result = $this->db
				->select('id, email, password')
				->from('tbusers')
				->where('id', $id)
				->get_one();

			$this->id         = $result['id'];
			$this->email      = $result['email'];
			$this->password   = $result['password'];
		}
	}

	# Normal Methods --------------------------------

	public function authenticate(){

		$user = $this->db
				->select('salt')
				->from('tbusers')
				->where('email', $this->email)
				->get_one();

		$encrypted_pw = Hash::encrypt($this->password, $user['salt']);


		$result = $this->db
					->select('id')
					->from('tbusers')
					->where('password', $encrypted_pw)
					->get_one();
	

	if($result['id']){
		$this->id = $result['id'];
		return true;
	}else{
		return false;
	}

	}


	public function save(){
		# If this id is 0, then no subject has already been loaded
		if($this->id == 0){
			$success = $this->db
				->set(array(
					'email'       => $this->email,
					'password'    => Hash::make_password($this->password),
					'salt'        => Hash::salt()
				))
				->insert('tbusers');
		}else{
			$success = $this->db
				->set(array(
					'email'       => $this->email,
					'password'    => Hash::make_password($this->password),
					'salt'        => Hash::salt()
				))
				->where('id', $this->id)
				->update('tbusers');
		}
		return $success;
	}

	public function delete(){
		$this->deleted = 1;
		$this->save();
	}

}