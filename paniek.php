<!DOCTYPE html>
<html lang="en">
<head>
	<title>panicc attacc</title>
	<link rel="stylesheet" type="text/css" href="paniek.css">
</head>
<body>
	<div id='madlibs'>
		<h1>MAD LIBS</h1>
	</div>
	<div id='menu'>
		<ul>
			<li><a href='paniek.php'>Er heerst paniek...</a></li>
			<li><a href='Onkunde.php'>Onkunde</a></li>
		</ul>
	</div>

	<?php
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
	        $pet = strip_tags($_POST['pet']);
	        $person = strip_tags($_POST['person']);
	        $country = strip_tags($_POST['country']);
	        $boringhobby = strip_tags($_POST['boringhobby']);
	        $toy = strip_tags($_POST['toy']);
	        $teacher = strip_tags($_POST['teacher']);
	        $money = strip_tags($_POST['money']);
	        $hobby =strip_tags( $_POST['hobby']);
	    }
    ?>

	<div id='maincontent'>
		<h1>Er heerst paniek</h1>
		<div id='questions'>
			<p>Welk dier zou je nooit als huisdier willen hebben?</p>
			<p>Wie is de belangrijkste persoon in je leven?</p>
			<p>In welk land zou je graag willen wonen?</p>
			<p>Wat doe je als je je verveelt?</p>
			<p>Met welk speelgoed speelde je als kind het meest?</p>
			<p>Bij welke docent spijbel je het liefst?</p>
			<p>Als je &euro;100.000,- had, wat zou je dan kopen?</p>
			<p>Wat is je favoriete bezigheid?</p>
		</div>
		<div id='inputs'>
			<form method='post'>
				<input type="text" name="pet" value='<?php echo $pet;?>' maxlength='16'><br>
				<input type="text" name="person" value='<?php echo $person;?>' maxlength='16'><br>
				<input type="text" name="country" value='<?php echo $country;?>' maxlength='16'><br>
				<input type="text" name="boringhobby" value='<?php echo $boringhobby;?>' maxlength='10'><br>
				<input type="text" name="toy" value='<?php echo $toy;?>' maxlength='16'><br>
				<input type="text" name="teacher" value='<?php echo $teacher;?>' maxlength='16'><br>
				<input type="text" name="money" value='<?php echo $money;?>' maxlength='16'><br>
				<input type="text" name="hobby" value='<?php echo $hobby;?>' maxlength='16'><br>
				<input type='submit' id='submit'>
			</form>
		</div>
	</div>

	<div id='footer'>
		<h1>&copy;2019 Pieterjan van Dijk</h1>

         <div id="result">
            <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    if(empty($_POST["pet"]) || empty($_POST["person"]) || empty($_POST["country"]) || empty($_POST["boringhobby"]) || empty($_POST["toy"]) ||empty($_POST["teacher"]) || empty($_POST["money"]) || empty($_POST["hobby"])){
                        echo "<h1 id='pls'>Gelieve alle verplichte velden invullen</h1>";
                    }else{
                    	echo '<p id="text">';
                        echo 'Er heerst paniek in het koningkrijk ',$country,'. Koning ',$teacher,' is ten einde raad en als koning ',$teacher,' ten einde raad is, dan roept hij zijn ten-einde-raadsheer ',$person,'.','<br>';
                        echo '"',$person,'! Het is een ramp! Het is een schande!"','<br>';
                        echo '"Sire, Majesteit, Uwe luidruchtighed, wat is er aan de hand?"','<br>';
                        echo '"Mijn ',$pet,' is verdwenen! Zo maar, zonder waarschuwing. En ik had net ',$toy,' voor hem gekocht!"','<br>';
                        echo '"Majesteit, uw ',$pet,' komt vast vanzelf weer terug?"','<br>';
                        echo '"Ja, da\'s leuk en aardag, maar hoe moet ik hem in de tussentijd ',$hobby,' leren?"','<br>';
                        echo '"Maar Sire, daar kunt u toch uw ',$money,' voor gebruiken."','<br>';
                        echo '"',$person,', je hebt helemaal gelijk! Wat zou ik doen als ik jou niet had."','<br>';
                        echo 'Mij ',$boringhobby,', Sire."';
                        echo '</p>';
                    }
                }
            ?>
        </div>
	</div>
</body>
</html>