<?php
class User{
	public $userName;
	public $password;
	public $position;

	function getName(){
		$spacePos = strpos($this->fullName, ' ');
		if($spacePos){
			return substr($this->fullName, 0, $spacePos);
		}
		return $this->fullName;
	}
	function canManage(){
		return $this->position == "admin";
	}
	function canRead(){
		return $this->position == "user";
	}
	
}
?>