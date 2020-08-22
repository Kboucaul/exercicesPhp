<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 6 : Attributs statiques"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php
	class Maison {
		private static $increment = 1;
		private $id;
		private $date;
		private $chambres;
		private $surface;

		public function __construct($date, $chambres, $surface)
		{
			$this->id = self::$increment;
			self::$increment++;
			$this->setDate($date);
			$this->setChambres($chambres);
			$this->setSurface($surface);
		}

		public function getId()
		{
			return $this->id;
		}

		public function setDate($date)
		{
			$this->date = $date;
		}
		public function getDate()
		{
			return $this->date;
		}

		public function setChambres($chambres)
		{
			$this->chambres = $chambres;
		}
		public function getChambres()
		{
			return $this->chambres;
		}

		public function setSurface($surface)
		{
			$this->surface = $surface;
		}
		public function getSurface()
		{
			return $this->surface;
		}

		public function displayInfos()
		{
			echo "<tr>";
				echo "<td># : "  	. $this->getId() . "</td>";
				echo "<td>Date : " 	. $this->getDate() . "</td>";
				echo "<td>Chambres : " 	. $this->getChambres() . "</td>";
				echo "<td>Surface : " 	. $this->getSurface() . " m² </td>";
			echo "</tr>";
		}
	}

	$maison1 = new Maison(2001, 3, 150);
	$maison2 = new Maison(2002, 1, 40);
	$maison3 = new Maison(1995, 2, 100);
	$maison4 = new Maison(2008, 1, 25);
	$maison5 = new Maison(2015, 5, 300);

	$objTab = [];
	array_push($objTab, $maison1);
	array_push($objTab, $maison2);
	array_push($objTab, $maison3);
	array_push($objTab, $maison4);
	array_push($objTab, $maison5);

	$i = 0;
	echo "<table class='table table-success'>";
	while ($i < count($objTab))
	{
		$objTab[$i]->displayInfos();
		$i++;
	}
	echo "</table>";
	
?>


<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
