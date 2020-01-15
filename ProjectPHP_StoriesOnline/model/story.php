<?php
	class Story{
		public $id;
		public $name;
		public $author;
		public $type;
		public $img;
		public $details;

		function __construct($id,$name,$author,$type, $img, $details){
			$this->id = $id;
			$this->name = $name;
			$this->author = $author;
			$this->type = $type;
			$this->img = $img;
			$this->details = $details;
	}
	}
?>