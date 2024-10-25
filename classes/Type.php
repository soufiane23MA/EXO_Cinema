<?php

class Type {
	private string $type;
	private array $filmes;

	public function __construct(string $type){
		$this -> type = $type;
		$this ->filmes = [];



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
	/**
 * création getter et setter du tableau filmes
 */
 
	public function getFilmes():array
	{
		return $this->filmes;
	}
	 
	public function setFilmes($filmes)
	{
		$this->filmes = $filmes;

		return $this;
	}

	public function addFilmes(Filme $filme)
	{
		$this->filmes[] = $filme;
		return $this;
	}

	public function affichType ()
	{
		
	$resulte = '<p><h2>' . $this . ':</h2>  Est associé aux filmes suivants:<br> </p>';
	$resulte .= '<ul>';
	foreach ($this->filmes as $filme) {
		$resulte .= '<li>' . $filme . ', date de sortie : '. $filme->getDateDeSortie()->format('Y').'</li>';
	}
	$resulte .= "</ul>";

	return $resulte;
	}
	public function __toString()
	{
		return $this->type;
	}

}