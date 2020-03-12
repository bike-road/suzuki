<?php

class Syouhin{
	private $name;

	public function __container($name) {
		$this->$name = $name;
	}

	public function getName() {
		return $this->name;
	}


}


?>