<?php 

class Seminaire {
    
    private $idSeminaire;
    private $titre;
    private $resume;
    private $dateInscription;
    private $dateDerniere;

	public function __construct(){
	}

    public function getIdSeminaire() {return $this->idSeminaire;}

	public function getTitre() {return $this->titre;}

	public function getResume() {return $this->resume;}

	public function getDateInscription() {return $this->dateInscription;}

	public function getDateDerniere() {return $this->dateDerniere;}

    public function setIdSeminaire( $idSeminaire): void {$this->idSeminaire = $idSeminaire;}

	public function setTitre( $titre): void {$this->titre = $titre;}

	public function setResume( $resume): void {$this->resume = $resume;}

	public function setDateInscription( $dateInscription): void {$this->dateInscription = $dateInscription;}

	public function setDateDerniere( $dateDerniere): void {$this->dateDerniere = $dateDerniere;}

	
	
}