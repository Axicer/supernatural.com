<?php
	require_once File::build_path(array("model", "Model.php"));

	class Categorie{

		private $id;
		private $nom;

		public function __construct($data){
		    //TODO
		}


		public function __get($att){
			return $this->$att;
		}

		public function __set($att,$val){
			$this->$att = $val;
		}


	}



?>