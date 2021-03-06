<?php
namespace site\model;

class CookMother {
	public $id_cuisinier;
    public $nom;
    public $prenom;
    public $photo;
    public $date_inscription;
    public $photoAdresse;


  // **********GETTER D'INFORMATIONS DE RECETTE*********
	public function getId_cuisinier() {
		return $this->id_cuisinier;
	}
	public function getNom() {
		return $this->nom;
	}
	public function getPrenom() {
		return $this->prenom;
	}
	public function getPhoto() {
		return $this->photo;
	}
	public function getPhotoAdresse() {
		return $this->photoAdresse;
	}
	public function getDate_inscription() {
		return $this->date_inscription;
	}

  //////////////////////////////////////////////////////
  // **********SETTER D'INFORMATIONS DE RECETTE*********
	public function setId_cuisinier($id_cuisinier) {
		if($id_cuisinier > 0) {
			$this->id_cuisinier = $id_cuisinier;
		}
	}
	public function setNom($nom) {
		if(is_string($nom)) {
			$this->nom = $nom;
		}
	}
	public function setPrenom($prenom) {
		if(is_string($prenom)) {
			$this->prenom = $prenom;
		}
	}
	public function setPhoto($photo) {
		if(is_string($photo)) {
			$this->photo = $photo;
		}
	}
	public function setPhotoAdresse($photo) {
		if(is_string($photo)) {
			$photoAdresse = '/img/photos_cuisinier/'.$photo;
			$this->photoAdresse =  $photoAdresse ;
		}
	}
	public function setDate_inscription($date_inscription) {
		if(is_numeric($date_inscription)) {
			$this->date_inscription = $date_inscription;
		}
	}
}