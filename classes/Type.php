<?php

class Type {
	private string $type;

	public function __construct(string $type){
		$this -> type = $type;


	}
	public function getType()
	{
		return $this->type;
	}
	
	public function setType($type)
	{
		$this->type = $type;

		return $this;
	}
	public function __toString()
	{
		return $this->type;
	}
}