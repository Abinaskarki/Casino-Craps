
<?php session_start() ?>

<?php 
	$dice1 = rand(1,6);
	$dice2= rand(1,6);
	$firstRoll =  $dice1 + $dice2;
	$_SESSION["firstRoll"] = "$firstRoll";

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Dice Game</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	
	<form action="<?php 
			if ($firstRoll == '7' || $firstRoll == '11') {
	 			echo "http://localhost/Dice_Game/start.html";
	 		}
	 		else if($firstRoll == '2' || $firstRoll =='3' || $firstRoll == '12'){
	 			echo "http://localhost/Dice_Game/start.html";
	 		}
	 		else{
		 		echo "http://localhost/Dice_Game/secondRoll.php";
	 		} 
	 	?>" method="post">	
	
	<!-- Heading Row -->
	<div class="row">
  		<div class="column">
  			<img id="casino" src="https://i.gifer.com/BVDZ.gif">
  		</div>
  		<div class="column">
  			<h1>Casino Craps</h1>
  		</div>
  		<div class="column">
  			<img id="casino" src="https://i.gifer.com/BVDZ.gif">
  		</div>
  	</div>
  		<!-- Heading Row Ends -->
	
	<!-- Main Game Row -->
	<div class="row1">
  		<div class="left">
  			<div class="dice">
	  			<label class="label">DICE 1</label>
	  			<br>
	  			<p class="dice1" name="dice1"><?php 
	  			echo $dice1; ?></p> 
  			</div>
  		</div>
  		<div style="color: yellow" class="middle">
  			<?php
 				
 		if ($firstRoll == '7' || $firstRoll == '11') {
	 			echo '<img src="https://media1.tenor.com/images/3989185b9b65c712c5be71ee45b1bc28/tenor.gif?itemid=5280259" >';
	 			echo "<br>";
	 			echo "YOU WIN";
	 		}
	 	else if($firstRoll == '2' || $firstRoll =='3' || $firstRoll == '12'){
	 			echo '<img src="https://media1.giphy.com/media/Wmo02aWg2Ozi8/giphy.gif" >';
	 			echo "<br>";
	 			echo "YOU LOSE";
	 		}
	 	else{
	 		echo '<img src="https://media1.tenor.com/images/bfaeceee33534565cd413b59d89d6fe6/tenor.gif?itemid=4717865" >';
	 		echo "<br>";
	 		echo " ROLL AGAIN TO PLAY";
	 	}
 ?>
  			
  		</div>
  		<div class="right">
  			<div class="dice">
	  			<label class="label">DICE 2</label>
	  			<br>
	  			<p class="dice1" name="dice1"><?php 
	  			echo $dice2; ?></p> 
  			</div>
  		</div>
	</div>
	<!-- Main Game Row Ends -->

	<div class="row2">
		<div class="roll_left">
			<p class="rleft"><?php
			echo "FIRST ROLL = ".$firstRoll;
			 ?></p>
			<p class="rleft"></p>
		</div>
	</div>
	<br>
	<!-- SUBMIT AND RESET BUTTON ROW -->
		<div>
			<input id="button" type="submit" name="submit" value="<?php 
			if ($firstRoll == '7' || $firstRoll == '11') {
	 			echo "PLAY AGAIN";
	 		}
	 		else if($firstRoll == '2' || $firstRoll =='3' || $firstRoll == '12'){
	 			echo "PLAY AGAIN";
	 		}
	 		else{
		 		echo " ROLL AGAIN";
	 		} 
	 	?>">
		</div>
	</form>
</body>
</html>
