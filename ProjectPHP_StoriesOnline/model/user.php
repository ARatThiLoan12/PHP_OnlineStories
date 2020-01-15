<?php
class User{
	public $id;
	public $userName;
	public $password;
	public $position;

	function __construct($id,$userName,$password,$position){
			$this->id = $id;
			$this->userName = $userName;
			$this->password = $password;
			$this->position = $position;
	}
	function canManage(){
		return $this->position == "Admin";
	}
	function canRead(){
		return $this->position == "User";
	}
	
}
?>