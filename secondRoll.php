
<?php session_start() ?>

<?php 
	$dice1 = rand(1,6);
	$dice2= rand(1,6);
	$firstRoll = $_SESSION["firstRoll"];
	$secondRoll =  $dice1 + $dice2;
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Dice Game</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	
	<form action="<?php 
			if ($firstRoll == $secondRoll) {
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
 				
 		if ($firstRoll == $secondRoll) {
	 			echo '<img src="https://media1.tenor.com/images/3989185b9b65c712c5be71ee45b1bc28/tenor.gif?itemid=5280259" >';
	 			echo "<br>";
	 			echo "YOU WIN";
	 		}
	 	else if($secondRoll == '7'){
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
			<p class="rleft">First Roll   </p>
			<p class="rleft"><?php 
			 
			 echo $firstRoll;
			 ?></p>
		</div>
		<div class="roll_right">
			<p class="rright">Second Roll   </p>
			<p class="rright"><?php  
			echo $secondRoll;?></p>
		</div>
	</div>
		<input type="submit" name="submit" value="<?php 
			if ($firstRoll == $secondRoll) {
	 			echo "PLAY AGAIN";
	 		}
	 		else if($SecondRoll == '7'){
	 			echo "PLAY AGAIN";
	 		}
	 		else{
		 		echo " ROLL AGAIN";
	 		} 
	 	?>">
	</form>
</body>
</html>
