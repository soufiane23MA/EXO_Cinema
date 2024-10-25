<?php

class Role {

private string $role;
private array $castings;

/**
 * fonction constructeur des rôles,
 */

public function __construct(string $role)
{
	$this -> role = $role;
	$this -> castings = [];
}
/**
 * ici l'enssemble des getters et des setters.
 */
  
public function getRole()
{
return $this->role;
}
  
public function setRole($role)
{
$this->role = $role;

return $this;
}

  
public function getCastings()
{
return $this->castings;
}
  
public function setCastings($castings)
{
$this->castings  = $castings;

return $this;
}
public function addCasting(Casting $casting){
	$this -> castings []= $casting;
}

/**
 * cette fonction permet d'afficher les acteurs qui on jouer un rôle precis.
 */
public function affichActeur(){

	$resulte = '<h3>'.$this .'</h3> Est incarné par ';
	$resulte.= '<ul>';
		foreach ($this->castings as $casting) {
			$resulte .= '<li>' . $casting->getActeur().'  dans  : '.$casting->getFilme() .'</li>';
		}
		$resulte .= '</ul>';
		return $resulte ;
}
/**
 * l'affichge des différentes rôles
 */
public function __toString()
{
	return $this->role;
} 
	

}