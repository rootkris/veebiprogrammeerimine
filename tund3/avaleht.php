<?php
	//Muutujad
	$myName = "Kristo";
	$myFamilyName = "Roots";
	$myAge = 0;
	$myBirthYear;
	$myLivedYearsList = "";
	
	
	$monthNamesEt = ["jaanuar", "veebruar", "märts", "aprill", "mai", "juuni", "juuli", "august",
	"september", "oktoober", "november", "detsember"];
	
	//var_dump($monthNamesEt);
	//echo $monthNamesEt[8];
	
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
	
	//Nüüd vaatame, kas ja mida kasutaja sisestas
	//var_dump($_POST);
	if (isset($_POST["yearBirth"])){
		$myBirthYear = $_POST["yearBirth"];
		$myAge = date("Y") - $_POST["yearBirth"];
		
		//tekitame loendi kõigist elatud aastatest
		$myLivedYearsList .= "<ol> \n";
		for ($i = $myBirthYear; $i <= date("Y"); $i++){
			//echo $i;
			$myLivedYearsList .= "<li>" . $i ."</li> \n";
		}	
		$myLivedYearsList .= "</ol> \n";	
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
		$monthIndex = date("n") - 1;    //n on kuu ilma lisanullita ees
		echo date("d. ") .$monthNamesEt[$monthIndex] .date(" Y");
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
	<h2>Vanus</h2>
	<p>Järgnevalt palume sisestada oma sünniaasta!</p>
	<form method="POST">
		<label>Teie sünniaasta: </label>
		<input id="yearBirth" name="yearBirth" type="number" min="1900" max="2017" value="<?php echo $myBirthYear; ?>">
		<input id="submitYearBirth" name="submitYearBirth" type="submit" value="Kinnita">
	</form>
	<p>Teie vanus on <?php echo $myAge; ?> aastat.</p>
	<?php 
		if ($myLivedYearsList != ""){
			echo "<h3>Oled elanud järgnevatel aastatel</h3> \n";
			echo $myLivedYearsList;
		}	
	
	?>
	<h2>Paar linki</h2>
	<p>Õpime <a href="http://www.tlu.ee" target="_blank">Tallinna Ülikoolis<a/>.</p>
	<p>Minu esimene php leht on <a href="../esimene.php" target="_blank">siin</a>.</p>
	<p>Minu sõbra Markus teeb veebi<a href="../../../~heinmark/webprog" target="_blank"> siin</a>.</p>
	<p>Pilti ülikoolist näeb <a href="foto.php" target="_blank">siin</a>.</p>
</body>
</html>




