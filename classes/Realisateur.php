<?php

class Realisateur {

	private string $nom;
	private string $prenom;
	private string $sex;
	private DateTime $dateDeNaissance;
	private array $filmes;
	private array $types;

	public function __construct(string $nom, string $prenom, string $sex, string $dateDeNaissance){
		$this-> nom = $nom;
		$this->prenom = $prenom;
		$this->sex = $sex;
		$this->dateDeNaissance = new DateTime($dateDeNaissance);/**
		 * il faut créer des tableaux pour récuperer l'ensemble des 
		 * filmes et l'ensembles de genrs de filme relisés par les réalisateur
		 * instanciés
		 */
		$this->filmes = [];
		$this->types = [];


	}
	/**
	 * créer les getteurs et les setters
	 */
	public function getNom():string
	{
		return $this->nom;
	}


	public function setNom($nom)
	{
		$this->nom = $nom;

		return $this;
	}


	public function getPrenom():string
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
	}
	
	 
	public function getFilmes(): array
	{
		return $this->filmes;
	}

	 
	public function setFilmes($filmes)
	{
		$this->filmes = $filmes;

		return $this;
	}

	  
	public function getTypes(): array
	{
		return $this->types;
	}

 
	public function setTypes($types)
	{
		$this->types = $types;

		return $this;
	}
	/**
	 * la fonction qui permet de rajouter les fimes
	 */
	public function addFilmes(Filme $filme){
		$this ->filmes [] = $filme;
		return $this;
	}
	public function afficheFilmographie(){
		$resulte = '<p>'.$this. ' a réalisé: </p><ul>' ;
		foreach($this ->filmes as $filme){
			$resulte .= '<li>'.$filme.'</li>' ;
			$resulte .=  '</ul>';
			/**
			 * ça n'affiche rien du tous creuse encore :(
			 */
				
		}

		return $resulte;
		
	}
	public function __toString()
	{
		return $this ->nom.' '. $this->prenom;
	}

	 
	

	 

 };
