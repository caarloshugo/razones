<?php
/**
 * Access from index.php:
 */


class Default_Controller extends ZP_Controller {
	
	public function __construct() {
		$this->app("default");
		
		$this->Templates = $this->core("Templates");

		$this->Templates->theme();
		
		$this->users = array(
			"donante-numero-1"  => array("name" => "Donante Numero 1", 	  "language" => "es"),
			"donante-numero-2"  => array("name" => "Donante Numero 2", 	  "language" => "es"),
			"donante-numero-3"  => array("name" => "Donante Numero 3", 	  "language" => "es")
		); 
	}
	
	public function index($user = FALSE) {
		if($user != FALSE and isset($this->users[$user])) {
			$vars["user"] = $this->users[$user];
			$vars["view"] = $this->view("home", TRUE);
			
			$this->render("content", $vars);
		}
	}
	
	/*
	horacio-corti      => Horacio Corti
	martin-sigal       => Martín Sigal
	diego-morales      => Diego Morales
	sergio-chaparro    => Sergio Chaparro
	jay-kruus          => Jay Kruus
	elizabeth-missokia => Elizabeth Missokia 
	*/
}
