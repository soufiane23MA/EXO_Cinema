<?php

/**
 * c'est la classe parent pour les réalisateurs et les acteurs.
 */

class Personne {
	/**
	 * ici tous les attributs doivent êtres en protected
	 */

	protected string $nom;
	protected string $prenom;
	protected string $sex;
	protected DateTime $dateDeNaissance;

	public function __construct(string $nom, string $prenom, string $sex, string $dateDeNaissance)
	{
		$this->nom = $nom;
		$this->prenom = $prenom;
		$this->sex = $sex;
		$this->dateDeNaissance = new DateTime($dateDeNaissance);
	}
	public function getNom(): string
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

	public function getSex(): string
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
	}
	/**
	 * fonction d'affichage de la classe- attention il faut mettre le minimum, 
	 */
	public function __toString()
	{
		return $this->nom . ' ' . $this->prenom;
	}

}