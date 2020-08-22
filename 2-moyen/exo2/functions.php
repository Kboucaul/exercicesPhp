<?php
	function afficherTableau($tab)
	{
		$i = 0;
		while ($i < count($tab))
		{
			echo $tab[$i];
			$i++;
			if ($i < count($tab))
				echo " - ";
		}
		echo "<br/>";
	}

	function calculerMoyenne($tab)
	{
		$avg = 0;
		$i = 0;

		while ($i < count($tab))
		{
			$avg += $tab[$i];
			$i++;
		}
		if ($avg === 0)
			return 0;
		$avg /= count($tab);
		return "La moyenne est de " . round($avg, 2) . "<br/>";
	}	

	function estTableauPair($tab)
	{
		$i = 0;
		while ($i < count($tab))
		{
			if (($tab[$i] % 2) != 0)
				return false;
			$i++;
		}
		return true;
	}
?>