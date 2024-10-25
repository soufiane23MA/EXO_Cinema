<?php
/**
 * créer la nouvelle classe casting qui joue l'intermidiaire entre 
 * les 3 entitées  auteur, role et filme, 
 */

Class Casting {

	private Filme $filme;
	private Acteur $acteur;
	private Role $role;

	public function __construct(Filme $filme, Acteur $acteur, Role $role)
	{
		$this -> filme = $filme;
		$this-> acteur = $acteur;
		$this -> role = $role;
		/**
		 * ici on crée la relation entre les 3 entités ," acteur " , " filme" et rôle"
		 */
		$this ->filme->addCasting($this);
		$this->acteur->addCasting($this);
		$this->role->addCasting($this);
	}
	 
	public function getFilme():Filme
	{
		return $this->filme;
	}
 
	public function setFilme($filme)
	{
		$this->filme = $filme;

		return $this;
	}
 
	public function getActeur(): Acteur
	{
		return $this->acteur;
	}
 
	public function setActeur($acteur)
	{
		$this->acteur = $acteur;

		return $this;
	}
	 
	public function getRole():Role
	{
			return $this->role;
	}

	
	public function setRole($role)
	{
			$this->role = $role;

			return $this;
	}
	/*public function affichCasting(){
		 $this->getFilme() . $this->getRole().'incarné par'.
 $this->getActeur().'.' ;
	}*/
	/**
	 *  ici l'affichge des castings
	  
	 */
	public function __toString(){
		return '(Dans ' .$this ;

	}

		
} 