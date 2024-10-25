<?php

class Realisateur extends Personne
{

	private array $filmes;/**
	 * tus ce qui est commentés ici  est ce qu'il faut crée avant d'avoir 
	 * la relation d'heritage entre classe réalisateur et la classe personne.
	 */



	/*private string $nom;
	private string $prenom;
	private string $sex;
	private DateTime $dateDeNaissance;
	

	public function __construct(string $nom, string $prenom, string $sex, string $dateDeNaissance)
	{
		$this->nom = $nom;
		$this->prenom = $prenom;
		$this->sex = $sex;
		$this->dateDeNaissance = new DateTime($dateDeNaissance);


		/**
		 * il faut créer des tableaux pour récuperer l'ensemble des 
		 * filmes et l'ensembles de genrs de filme relisés par les réalisateur
		 * instanciés
		 */
	//}
	public function __construct(string $nom, string $prenom, string $sex, string $dateDeNaissance)
	{
		parent::__construct($nom, $prenom,  $sex,  $dateDeNaissance);
		$this->filmes = [];
	}

	/**
	 * créer les getteurs et les setters
	 */
	/*public function getNom(): string
	{
		return $this->nom;
	}


	public function setNom($nom)
	{
		$this->nom = $nom;

		return $this;
	}


	public function getPrenom(): string
	{
		return $this->prenom;
	}


	public function setPrenom($prenom)
	{
		$this->prenom = $prenom;

		return $this;
	}

	public function getSex()
	{
		return $this->sex;
	}


	public function setSex($sex)
	{
		$this->sex = $sex;

		return $this;
	}

	public function getDateDeNaissance(): DateTime
	{
		return $this->dateDeNaissance;
	}


	public function setDateDeNaissance($dateDeNaissance)
	{
		$this->dateDeNaissance = $dateDeNaissance;

		return $this;
	}*/


	public function getFilmes(): array
	{
		return $this->filmes;
	}

	public function setFilmes($filmes)
	{
		$this->filmes = $filmes;

		return $this;
	}

	/**
	 * la fonction qui permet de rajouter les fimes dans le tableau vide.
	 */

	public function addFilmes(Filme $filme)
	{
		$this->filmes[] = $filme;
		return $this;
	}
	/**
	 * la fonction qui gére l'affichage de la filmographie des réalisateurs
	 */

	public function afficheFilmographie()
	{

		$resulte = '<h2>' . $this . '</h2>  a réalisé : ';
		$resulte .= '<ul>';
		foreach ($this->filmes as $filme) {
			$resulte .= '<li>' . $filme . ' en '. $filme->getDateDeSortie()->format('Y').'</li>';
		}
		$resulte .= "</ul>";
		return $resulte;
	}
	/**
	 * la function qui d'affichage minimum des réalisateurs
	 */
	public function __toString()
	{
		return $this->nom . ' ' . $this->prenom;
	}
}
