<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 5 : Private et getters"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php
	function createForm($editionTab, $dateTab)
	{
		echo "<form method='post'>";
			
			echo '
				<span>
		        	<label for="edition">Edition :</label>
		        	<select id="edition" name="edition">';
		          		$i = 0;
		          		while ($i < count($editionTab))
		          		{
		          			echo '<option>' . $editionTab[$i] . '</option>';
		          			$i++;
		          		}
		        	echo '</select>
		      	</span><br/>';
			echo '
				<span>
		        	<label for="date">Date de parution :</label>
		        	<select id="date" name="date">';
		        	$i = 0;
		        	while ($i < count($dateTab))
		        	{
		          		echo '<option>' . $dateTab[$i] .'</option>';
		          		$i++;
		        	}
		        	echo '</select>
		      	</span><br/>';

			echo "<input type='submit' value='Envoyer' class='btn btn-success'>";
		echo "</form>";
	}

	function createEditionTab($livreObj)
	{
		$tab = [];
		$i = 0;

		while ($i < count($livreObj))
		{
			array_push($tab, $livreObj[$i]->getEdition());
			$i++;
		}
		array_push($tab, "tous");
		return $tab;
	}

	function createDateTab($livreObj)
	{
		$tab = [];
		$i = 0;

		while ($i < count($livreObj))
		{
			array_push($tab, $livreObj[$i]->getDate());
			$i++;
		}
		array_push($tab, "tous");
		return $tab;
	}

	function createLivresTab($livre1, $livre2, $livre3,
							$livre4, $livre5)
	{
		$tab = [];
		array_push($tab, $livre1);
		array_push($tab, $livre2);
		array_push($tab, $livre3);
		array_push($tab, $livre4);
		array_push($tab, $livre5);
		return $tab;
	}

	class Livre {
		private $nom;
		private $auteur;
		private $date;
		private $edition;

		public function __construct($nom, $auteur, $edition, $date)
		{
			$this->setNom($nom);
			$this->setAuteur($auteur);
			$this->setDate($date);
			$this->setEdition($edition);
		}

		public function setNom($nom)
		{
			$this->nom = $nom;
		}
		public function getNom()
		{
			return $this->nom;
		}

		public function setAuteur($auteur)
		{
			$this->auteur = $auteur;
		}
		public function getAuteur()
		{
			return $this->auteur;
		}

		public function setEdition($edition)
		{
			$this->edition = $edition;
		}
		public function getEdition()
		{
			return $this->edition;
		}

		public function setDate($date)
		{
			$this->date = $date;
		}
		public function getDate()
		{
			return $this->date;
		}

		public function displayInfos()
		{
			echo "<p>";
				echo "Titre : "  	. $this->getNom() . "<br/>";
				echo "Auteur : " 	. $this->getAuteur() . "<br/>";
				echo "Edition : " 	. $this->getEdition() . "<br/>";
				echo "Titre : " 	. $this->getDate() . "<br/>";
			echo "</p>";
		}
	}

	$livre1 = new Livre("titre1", "aaaa", "Jog", 2001);
	$livre2 = new Livre("titre2", "zzzz", "Lui", 1990);
	$livre3 = new Livre("titre3", "bbbb", "Moi", 2016);
	$livre4 = new Livre("titre4", "aaaa", "Jose", 2003);
	$livre5 = new Livre("titre5", "rrrr", "Raul", 1995);

	$tabEdition = [];
	$tabDate 	= [];

	$livreObj 	= createLivresTab($livre1, $livre2, $livre3, $livre4, $livre5);

	$editionTab = createEditionTab($livreObj);
	$dateTab 	= createDateTab($livreObj);


	createForm($editionTab, $dateTab);

	if (isset($_POST) && isset($_POST['edition']) && isset($_POST['date']))
	{
		$date 		= $_POST['date'];
		$edition 	= $_POST['edition'];

		if ($date === 'tous' && $edition === 'tous')
		{
			$i = 0;

			while ($i < count($livreObj))
			{
				$livreObj[$i]->displayInfos();
				$i++;
			}
		}

		else if ($date === 'tous' && $edition !== 'tous')
		{
			$i = 0;

			while ($i < count($livreObj))
			{
				if ($edition === $livreObj[$i]->getEdition())
					$livreObj[$i]->displayInfos();
				$i++;
			}
		}
		else if ($date !== 'tous' && $edition == 'tous')
		{
			$i = 0;

			while ($i < count($livreObj))
			{
				if ($date === $livreObj[$i]->getDate())
					$livreObj[$i]->displayInfos();
				$i++;
			}
		}
		else
		{
			$i = 0;

			while ($i < count($livreObj))
			{
				if (($date == $livreObj[$i]->getDate()) &&
					($edition == $livreObj[$i]->getEdition()))
					$livreObj[$i]->displayInfos();
				$i++;
			}
		}

	}

?>


<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
