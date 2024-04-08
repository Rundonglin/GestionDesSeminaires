<?php 

class Intervenant {
    
    private $nom;
    private $prenom;
    private $affectation;
    private $url;

	public function __construct(){
	}

    public function getNom() {return $this->nom;}

	public function getPrenom() {return $this->prenom;}

	public function getAffectation() {return $this->affectation;}

	public function getUrl() {return $this->url;}

    public function setNom( $nom): void {$this->nom = $nom;}

	public function setPrenom( $prenom): void {$this->prenom = $prenom;}

	public function setAffectation( $affectation): void {$this->affectation = $affectation;}

	public function setUrl( $url): void {$this->url = $url;}

	
}