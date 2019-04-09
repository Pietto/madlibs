<!DOCTYPE html>
<html lang="en">
<head>
	<title>Onkunde</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="b-styles.css">
</head>
<body>

	<div id='madlibs'>
		<h1>MAD LIBS</h1>
	</div>

	<nav class="navbar navbar-default">
    	<ul class="nav navbar-nav">
      		<li><a href="paniek.php">Er heerst paniek...</a></li>
      		<li><a href="Onkunde.php">Onkunde</a></li>
    	</ul>
	</nav>

	<?php
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
	        $wannado = $_POST['wannado'];
	        $person = strip_tags($_POST['person']);
	        $number = strip_tags($_POST['number']);
	        $item = strip_tags($_POST['item']);
	        $upside = strip_tags($_POST['upside']);
	        $downside = strip_tags($_POST['downside']);
	        $worst = strip_tags($_POST['worst']);
	    }
    ?>
<div class="container">
		<h1>Onkunde</h1>

		<form method='post'>
			<div class='form-group row'>
				<p class="col-sm-6">Wat zou je graag willen kunnen?</p>
				<input class="col-sm-6" type="text" name="wannado" value='<?php echo $wannado; ?>' maxlength='1000'>
			</div>
			<div class='form-group row'>
				<p class="col-sm-6">Met welke persoon kun je goed opschieten?</p>
				<input   class="col-sm-6" type="text" name="person" value='<?php echo $person; ?>' maxlength='16'>
			</div>
			<div class='form-group row'>
				<p class="col-sm-6">Wat is je favoriete getal?</p>
				<input class="col-sm-6" type="text" name="number" value='<?php echo $number; ?>' maxlength='16'>
			</div>
			<div class='form-group row'>
				<p class="col-sm-6">Wat heb je altijd bij je als je op vakantie gaat?</p>
				<input class="col-sm-6" type="text" name="item" value='<?php echo $item; ?>' maxlength='16'><br>
			</div>
			<div class='form-group row'>
				<p class="col-sm-6">Wat is je beste persoonlijke eigenschap?</p>
				<input class="col-sm-6" type="text" name="upside" value='<?php echo $upside; ?>' maxlength='16'><br>
			</div>
			<div class='form-group row'>
				<p class="col-sm-6">Wat is je slechtste persoonlijke eigenschap?</p>
				<input class="col-sm-6" type="text" name="downside" value='<?php echo $downside; ?>' maxlength='16'><br>
			</div>
			<div class='form-group row'>
				<p class="col-sm-6">Wat is het ergste dat je kan overkomen?</p>
				<input class="col-sm-6" type="text" name="worst" value='<?php echo $worst; ?>' maxlength='16'><br>
			</div>
				<input type='submit' id='submit'>
		</form>
</div>
	<div id='footer'>
		<h1>&copy;2019 Pieterjan van Dijk</h1>

         <div id="result">
            <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    if(empty($_POST["wannado"]) || empty($_POST["person"]) || empty($_POST["number"]) || empty($_POST["item"]) || empty($_POST["upside"]) ||empty($_POST["downside"]) || empty($_POST["worst"])){
                        echo "<h1 id='pls'>Gelieve alle verplichte velden invullen</h1>";
                    }else{
                    	echo '<p id="text"><br>';
                    	echo 'Er zijn veel mensen die niet kunnen ',$wannado,'. Neem nou ',$person,'. Zelfs met de hulp van een ',$item,' of zelfs ',$number,' kan ',$person,' niet ',$wannado,'. Dat heeft niet te maken met een gebrek aan ',$upside,', maar met een te veel aan ',$downside,'. Te veel ',$downside,' leidt tot ',$worst,' en dat is niet goed als je wilt ',$wannado,'. Helaas voor ',$person,'.';
                        echo '</p>';
                    }
                }
            ?>
        </div>
	</div>
</body>
</html>