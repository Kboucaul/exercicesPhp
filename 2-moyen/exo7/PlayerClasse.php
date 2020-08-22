<?php 
class Player{
    private $nom;
    private $force;
    private $pv;
    private $idArme;

    public function __construct($nom, $force, $pv, $arme){
        $this->setNom($nom);
        $this->setForce($force);
        $this->setPv($pv);
        $this->setArme($arme);
    }

    public function getNom(){return $this->nom;}
    public function getForce(){return $this->force;}
    public function getPV(){return $this->pv;}
    public function getArme(){return $this->idArme;}

    public function setNom($nom){$this->nom = $nom;}
    public function setForce($force){$this->force = $force;}
    public function setPV($pv){$this->pv = $pv;}
    public function setArme($idArme){$this->idArme = $idArme;}

    public function __toString(){
        $arme = Arme::recupererArme($this->getArme());
        $txt = "Nom : ". $this->getNom() . "<br />";
        $txt .= "Force : ". $this->getForce() . "<br />";
        $txt .= "PV : ". $this->getPv() . "<br />";
        $txt .= "Arme : ". $this->getArme() . "<br />";
        $txt .= $arme;
        return $txt;
    }
}