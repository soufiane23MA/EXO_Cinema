 <?php

 /**
	* creation de la classe filme et les attributs 
	*/

 class Filme {
	private string $titre ;
	private DateTime $dateDeSortie;
	private int $duree;
	private string $synopsis;
	private Realisateur $realisateur;
	private Type $type;
	 

	public function __construct(string $titre,string $dateDeSortie, int $duree, string $synopsis, Realisateur $realisateur,Type $type ){
		$this ->titre = $titre;
		$this ->dateDeSortie = new DateTime($dateDeSortie);
		$this ->duree = $duree;
		$this -> synopsis = $synopsis;
		$this -> realisateur = $realisateur;
		$this-> type = $type;

	}
		    
	public function getTitre():string
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

	public function getDuree():int
	{
			return $this->duree;
	}
	
	public function setDuree($duree)
	{
			$this->duree = $duree;

			return $this;
	}
		
	public function getSynopsis()
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
	/**
	 * affichage de la classe filme 
	 *
	 */
	 
	public function __toString()
	{
		return  $this. 'est réaliser par :' .$this->realisateur ;

	}

	
 }