<?php
	class Arme {
		private $arme;
		private $levelArme;
		private $picture;
		private $levelMax;
		private static $nbElem = 1;
		private $id = 0;

		public function __construct($arme, $levelArme, $levelMax)
		{
			$this->setArmeName($arme);
			$this->setLevelMax($levelMax);
			$this->setLevelArme($levelArme);
			$this->id = self::$nbElem++;
			$this->picture = $this->correspondingPicture();
		}

		public function getArmeName()
		{
			return $this->arme;
		}
		public function setArmeName($arme)
		{
			if ($arme != "Epée" && $arme != "Arc" && $arme != "Hache" && $arme != "Fléau")
				$this->arme = "Epée";
			else
				$this->arme = $arme;
		}

		public function getLevelArme()
		{
			return $this->levelArme;
		}

		public function setLevelArme($levelArme)
		{

			if ($levelArme > $this->getLevelMax())
				$this->levelArme = $this->levelMax;
			else
				$this->levelArme = $levelArme;
		}

		public function getId()
		{
			return $this->id;
		}

		public function setLevelMax($levelMax)
		{
			$this->levelMax = $levelMax;
		}

		public function getLevelMax()
		{
			return $this->levelMax;
		}

		public function correspondingPicture()
		{
			if ($this->getArmeName() === "Hache")
				$armeRepo = "hache";
			else if ($this->getArmeName() === "Arc")
				$armeRepo = "arc";
			else if ($this->getArmeName() === "Fléau")
				$armeRepo = "fleau";
			else
				$armeRepo = "epee";
			$url = "./sources/" . $armeRepo . "/" . $armeRepo . $this->getLevelArme() . ".png";
			return $url;
		}

		public function getPicture()
		{
			return $this->picture;
		}
		public function setPicture()
		{
			$this->picture = $this->correspondingPicture();
		}

		function getAssociatifArray()
		{
			$tab = [];
			$tab['id'] = $this->getid();
			$tab['arme'] = $this->getArmeName();
			$tab['level'] = $this->getlevelArme();
			$tab['picture'] = $this->getPicture();
			return $tab;
		}

		public function __toString()
		{
			$result = "";
			$result = "Arme ";
			$result .= $this->getId() . " : ";
			$result .= $this->getArmeName();
			if ($this->picture)
				$result .= $this->displayPicture();
			$result .= "<br/>";
			$result .= "<form action='' method='get'>";
			$result .=  '<select onChange="submit()" name="level'. $this->getArmeName().'">';
			for($i = 1; $i <= $this->getLevelMax(); $i++)
			{
				$result .= "<option value='" . $i ."'>";
					$result .= $i;
				$result .= "</option>";
			}
			$result .= '</select>';

			$result .= "</form>"; 
			return $result;
		}
		public function displayPicture()
		{
			return "<img style ='width: 50px;
					height: 50px;'
					src='".$this->picture."'/img>";
		}
	}
?>