<?php
	//1. git add . 2. git commit -m "lisatud kahe tingimusega if" 3. git push - et lisada githubi
	//Muutujad
	$myName = "Kristo";
	$myFamilyName = "Roots";
	//$practiceStarted = "2017-09-11 8.15";
	$practiceStarted = date("d.m.Y") ." " ."8.15";
	
	//echo strtotime($practiceStarted);
	//echo strtotime("now");
	$timePassed = round((strtotime("now") - strtotime($practiceStarted)) / 60);
	echo $timePassed;
	
	$hourNow = date("H");
	$partOfDay = "";
	
	if ($hourNow < 8){
		$partOfDay = "varane hommik.";
	}
	if ($hourNow >= 8 and $hourNow < 16){
		$partOfDay = "koolipäev.";
	}
	
	if ($hourNow >= 16){
		$partOfDay = "vaba aeg.";
	}
	
	function sum($x, $y) {
		$z = $x + $y;
		return $z;
	}
	
	$hobid = array("korvpall", "jalgpall", "e-sport");

	
	
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Kristo Roots veebiprogemise asjad</title>
</head>
<body>
	<h1>Kristo Roots</h1>
	<p>See veebileht on loodud veebiprogrammeerimise kursusel ning ei sisalda mingisugust tõsiseltvõetavat sisu.</p>
	<p>Olen Kristo Roots, tulen Pärnust.</p>
	<p>Õpin Tallinna Ülikoolis informaatikat.</p>
	
	<?php
		echo "<p>Täna on vastik ilm!</p>";
		echo "<p>Täna on ";
		echo date("d.m.Y");
		echo ".</p>";
		echo "<p>Lehe laadimise hetkel oli kell: " .date("H:i:s") ."</p>";
		echo "Praegu on " . $partOfDay ."";
	?>
	<p>PHP käivitatakse lehe laadimisel ja siis tehakse kogu töö ära. Hiljem, kui vaja midagi jälle "kalkuleerida", siis laetakse kogu leht uuesti.</p>
	<?php
		echo "<p>Lehe autori täisnimi on: ". $myName ." " .$myFamilyName .".</p>";
		echo "5 + 10 = " . sum(5,10) . "<br>";
		echo "7 + 13 = " . sum(7,13) . "<br>";
		echo "2 + 4 = " . sum(2,4);
		echo "<p>Minu hobid on " . $hobid[0] . ", " . $hobid[1] . " ja " . $hobid[2] . ".</p>";
		
	?>
</body>
</html>




