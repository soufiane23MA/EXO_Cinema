<?php
class Acteur  extends Personne {

 private array $castings;

public function __construct(string $nom, string $prenom, string $sex, string $dateDeNaissance)
{
	// quant tu passe les argument a la classe parent , tu n'a pas a
	// il faut donner que la valeur de la variable et ne pas priciser 
	// le type de la variable , ce n'ai pas necessaire.
	parent::__construct( $nom , $prenom,  $sex,  $dateDeNaissance);
	$this-> castings = []  ;

}
public function getCastings(): array
{
	return $this->castings;
}

public function setCasting(array $castings)
{
	$this->castings = $castings;

	return $this;
}

public function addCasting(Casting $casting)
{
	$this->castings[] = $casting;
}
/**
 *  la fonction qui permet d'afficher le rôle qu'a joué un acteur dans u filme .
 */
public function affichCasting(){

	$resulte = '<h2>'. $this .' </h2>';
	$resulte.= '<p> A jouer dans: ';
			foreach($this->castings as $casting ){
				$resulte .= '<h2>' .$casting->getFilme().'</h2> <br> le role de :'.$casting->getRole().'<br>';
			}

	return$resulte;
}
/**
 * la fonction qui permet d'afficher la filmographie de l'acteur
 */
public function affichFilms(){
	$resulte = '<h2>' . $this .'</h2>';
		$resulte .= ' <ul>';
		foreach ($this->castings as $casting) {
			$resulte .= '<li> a jouer  le role de : '.$casting->getRole() .' dans '  .$casting->getFilme() . ' en : '. $casting->getFilme()->getDatedeSortie()->format('Y'). '</li>';
		}
		$resulte .= "</ul>";
		return $resulte;
}
	
 

public function __toString()
{
	return $this->nom. ' '. $this->prenom;
}





 
 
}