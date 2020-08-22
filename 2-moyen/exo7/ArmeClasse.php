<?php

class Arme{
    private static $increment = 1;
    private static $armes = [];

    private $id;
    private $nom;
    private $degat;

    public function __construct($nom,$degat){
        $this->setId();
        $this->setNom($nom);
        $this->setDegat($degat);
        //on ajoute l'arme nouvellement créee dans le tableau des armes
        self::$armes[] = $this;
    }

    public function getId(){return $this->id;}
    public function getNom(){return $this->nom;}
    public function getDegat(){return $this->degat;}

    //on incremente automatiquement l'id de l'arme ainsi
    public function setId()
    {
    	$this->id = self::$increment;
    	self::$increment++;
    }
    public function setNom($nom){$this->nom = $nom;}
    public function setDegat($degat){$this->degat = $degat;}

    public function __toString(){
        $txt = "ID : ". $this->getId() . "<br />";
        $txt .= "Nom : ". $this->getNom() . "<br />";
        $txt .= "Degat : ". $this->getDegat() . "<br />";
        return $txt;
    }
    //Ici on recupere une arme du tableau statique des armes grace a l'id. On arrive ainsi a retrouver l'arme du player dans ce tableau. 
    public static function recupererArme($id){
        foreach(self::$armes as $arme){
            if($id === $arme->getId()){
                return $arme;
            }
        }
    }
}