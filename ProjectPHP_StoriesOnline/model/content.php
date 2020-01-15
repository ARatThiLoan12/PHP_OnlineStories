<?php
	class Content{
		public $id;
		public $name;
		public $noChapter;
		public $story;
		public $content;

		function __construct($id,$name,$noChapter,$content,$story){
			$this->id = $id;
			$this->name = $name;
			$this->noChapter = $noChapter;
			$this->content = $content;
			$this->story = $story;
		}
	}
?>