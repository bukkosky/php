<?php 

	abstract class FileData {

		public $file;
		public $entity;
		public $data;

		public function load() {
			return $this->$file;
		}
		
		public function update() {
			file_put_contents($file, $this->$data)
		}	
		
		public function _construct() {

		}	
		public function getMode() {
			return $this->$data;
		}

		public function setMode($file){
			$this->data = $data;
		}
	}

	$user = new FileData();




 ?>