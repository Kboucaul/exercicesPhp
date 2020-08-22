<?php ob_start(); //NE PAS MODIFIER 
$titre = "Exo 14 : Tableaux et fonctions (Partie 2)"; //Mettre le nom du titre de la page que vous voulez
?>
<!-- mettre ici le code -->
<?php
	function display($arr)
	{
		echo "<p>";
			$i = 0;
			while ($i < count($arr))
			{
				//$eleve $ $i + 1;
				echo "La moyenne des notes de l'élève <strong>". ($i + 1). "</strong> est de <strong>". $arr[$i]."</strong>.<br/>";
				$i++;
			}
		echo '</p>';
	}
	$moy = [13, 9.86, 7.5, 8.5];
	display($moy);
?>

<?php
/************************
 * NE PAS MODIFIER
 * PERMET d INCLURE LE MENU ET LE TEMPLATE
 ************************/
    $content = ob_get_clean();
    require "../../global/common/template.php";
?>
