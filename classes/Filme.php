 <?php

	/**
	 * creation de la classe filme et les attributs 
	 */

	class Filme
{
		private string $titre;
		private DateTime $dateDeSortie;
		private int $duree;
		private string $synopsis;
		private Realisateur $realisateur;
		private Type $type;
		private array $castings;

/**
 * créer le constructeur de la classe 
 */

	public function __construct(string $titre, string $dateDeSortie, int $duree, string $synopsis, Realisateur $realisateur, Type $type,)
	{
		$this->titre = $titre;
		$this->dateDeSortie = new DateTime($dateDeSortie);
		$this->duree = $duree;
		$this->synopsis = $synopsis;
		$this->realisateur = $realisateur;
		$this->realisateur->addFilmes($this);
		$this->type = $type;
		$this->type->addFilmes($this);
		$this->castings = [];

	}
	/**
	 * créer les setters et getters
	 */

	public function getTitre(): string
	{
		return $this->titre;
	}


	public function setTitre($titre)
	{
		$this->titre = $titre;

		return $this;
	}
	public function getDateDeSortie(): DateTime
	{
		return $this->dateDeSortie;
	}

	public function setDateDeSortie($dateDeSortie)
	{
		$this->dateDeSortie = $dateDeSortie;

		return $this;
	}

	public function getDuree(): int
	{
		return $this->duree;
	}

	public function setDuree($duree)
	{
		$this->duree = $duree;

		return $this;
	}

	public function getSynopsis(): string
	{
		return $this->synopsis;
	}

	public function setSynopsis($synopsis)
	{
		$this->synopsis = $synopsis;

		return $this;
	}
	public function getRealisateur(): Realisateur
	{
		return $this->realisateur;
	}

	public function setRealisateur($realisateur)
	{
		$this->realisateur = $realisateur;

		return $this;
	}


	public function getType(): Type
	{
		return $this->type;
	}

	public function setType($type)
	{
		$this->type = $type;

		return $this;
	}
	

	public function getCastings()
	{
		return $this->castings;
	}

	public function setCastings($castings)
	{
		$this->castings = $castings;

		return $this;
	}
	/**
	 * là c'est la fonction qui permet de rajouter les castiing à un filme 
	 */


	public function addCasting(Casting $casting)
	{
		$this->castings[] = $casting;
	}
	public function affichCasting()
	{
		$resulte = 'Dans :  ' .$this;
		foreach ($this->castings as $casting) {
			$resulte .= '<li>' . $casting->getRole().' et incarné par '.$casting->getActeur(). '</li>';
		}
		$resulte .= "</ul>";
		return $resulte;

	}/**
	 * la tostring permet l'affichage de l'essentiel du filme
	 */

	public function __toString()
	{
		return  $this->titre;
	}


		

	
	}
