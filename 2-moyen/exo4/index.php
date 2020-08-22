<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 4 : Les tableaux objets"; //Mettre le nom du titre de la page que vous voulez
?>

<!-- mettre ici le code -->
<?php
	
	function createForm()
	{
		echo "<form method='get'>";
			echo "<input type='submit' name='tous' value='tous' class='btn btn-info mr-2'>";
			echo "<input type='submit' name='chats' value='chats' class='btn btn-info mr-2'>"; 
			echo "<input type='submit' name='chiens' value='chiens' class='btn btn-info mr-2'>"; 
		echo "</form>";
	}

	function printEntity($objArr)
	{
		$i = 0;
		while ($i < count($objArr))
		{
			$objArr[$i]->displayInfos();
			$i++;
			if ($i < count($objArr))
				echo "--------------<br/>";
		}
	}

	class Animal {
		private $nom;
		private $age;
		private $type;

		public function __construct($nom, $age, $type)
		{
			$this->setNom($nom);
			$this->setAge($age);
			$this->setType($type);
		}

		public function setNom($nom)
		{
			$this->nom = $nom;
		}
		public function getNom()
		{
			return $this->nom;
		}

		public function setAge($age)
		{
			$this->age = $age;
		}
		public function getAge()
		{
			return $this->age;
		}

		public function setType($type)
		{
			$this->type = $type;
		}
		public function getType()
		{
			return $this->type;
		}

		public function displayInfos()
		{
			echo "Nom : " . $this->getNom() . "<br/>";
			echo "Age : " . $this->getAge() . "<br/>";
			echo "Type : " . $this->getType() . "<br/>";
		}
	}
	// On crée nos objets
	$chat1 = new Animal("Grosminet", 5, "chat");
	$chat2 = new Animal("Jerry", 2, "chat");
	$chien1 = new Animal("Milou", 10, "chien");
	$chien2 = new Animal("Bill", 1, "chien");

	// On crée nos tableaux d'objets
	$chats = [];
	$chiens = [];

	//tableau de chats
	array_push($chats, $chat1);
	array_push($chats, $chat2);
	//tableau de chiens
	array_push($chiens, $chien1);
	array_push($chiens, $chien2);


	//crée le formulaire
	createForm();

	//Traitement en fonctyion du formulaire
	if (isset($_GET))
	{
		if (isset($_GET['tous']))
		{
			printEntity($chats);
			echo "=============</br>";
			printEntity($chiens);
		}
		else if (isset($_GET['chats']))
		{
			printEntity($chats);
		}
		else if (isset($_GET['chiens']))
		{
			printEntity($chiens);
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
