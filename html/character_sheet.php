
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Character Sheet</title>
  <link rel="stylesheet" href="character_sheet.css">
  <link rel="stylesheet" href="stupid.css">
</head>
<body>
	<div id="namePlate">
		<div id="innerbox">
		<!--	<input style="height: 80%;" type="text" name="charname" placeholder="Character Name"> -->
			<form id="nameform">
				<label style="font-size: 14px;"> Player Name: </label>
				<input type="text" placeholder="Player Name">
				<label style="font-size: 14px;">Character Name: </label>
				<input type="text" placeholder="Character Name">
				<label style="font-size: 14px;"> Class & Level: </label>
				<input type="text" placeholder="Class & Level">
				<label style="font-size: 14px;"> Race: </label>
				<input type="text" placeholder="Race">
				<label style="font-size: 14px;"> Alignment: </label>
				<input type="text" placeholder="Alignment">
				<label style="font-size: 14px;"> Experience Points: </label>
				<input type="number" placeholder="Experience Points">
			</form>
		</div>
	</div>
	<div class="column">
	
		<!-- inspiration and proficiency bonus -->
		<div id="insp-prof-background">
			<div id="insp-prof"> 
				<input for="inspiration" type="checkbox">
				<label style="font-size: 20px">Inspiration</label>
			</div>
			<div id="insp-prof"> 
				<input type="number">
				<label style="font-size: 20px;">Proficiency Bonus</label>
			</div>
		</div>
		
		<!-- stats left column -->
		<div id="stats">
			<!-- stats boxes -->
			<div id="statsboxLeftCol">
				<h4> Strength </h4>
				<input type="number">
				<input type="number" style="width: 50px; margin-top: 2px;">
			</div>
			<div id="statsboxLeftCol">
				<h4> Dexterity </h4>
				<input type="number">
				<input type="number" style="width: 50px; margin-top: 2px;">
			</div>
			<div id="statsboxLeftCol">
				<h4> Constitution </h4>
				<input type="number">
				<input type="number" style="width: 50px; margin-top: 2px;">
			</div>
			<div id="statsboxLeftCol">
				<h4> Intelligence </h4>
				<input type="number">
				<input type="number" style="width: 50px; margin-top: 2px;">
			</div>
			<div id="statsboxLeftCol">
				<h4> Wisdom </h4>
				<input type="number">
				<input type="number" style="width: 50px; margin-top: 2px;">
			</div>
			<div id="statsboxLeftCol">
				<h4> Charisma </h4>
				<input type="number">
				<input type="number" style="width: 50px; margin-top: 2px;">
			</div>
		</div>
		
		<!-- saving throws -->
		<div id="savingThrowsBackground">
			<div id="savingThrows">
				<form id="ST-form">
					<input id="ST-form-checkbox" type="checkbox"> <input type="number" id="ST-form-spacing" style="width: 20px;"> Strength <br>
					<input id="ST-form-checkbox" type="checkbox"> <input type="number" id="ST-form-spacing" style="width: 20px;"> Dexterity <br>
					<input id="ST-form-checkbox" type="checkbox"> <input type="number" id="ST-form-spacing" style="width: 20px;"> Constitution <br>
					<input id="ST-form-checkbox" type="checkbox"> <input type="number" id="ST-form-spacing" style="width: 20px;"> Intelligence <br>
					<input id="ST-form-checkbox" type="checkbox"> <input type="number" id="ST-form-spacing" style="width: 20px;"> Wisdom <br>
					<input id="ST-form-checkbox" type="checkbox"> <input type="number" id="ST-form-spacing" style="width: 20px;"> Charisma <br>
				</form>
			</div>
		</div>
		
		<div id="passiveWisdom">
			<p>This is the last color in the color pallete that I had generated. I think it is neat too.</p>
		</div>
	</div>
	<div class="column">
		<div class = "container">
			<!--AC/Initiative/Speed Block -->
			<div class = "third">
				<div class = "imgTextOverlay">
					<img class = "center" src="img/Sheild2.png"/>
					<input type="sheildTextBox" placeholder="AC" style="width:30px; text-align: center;">
					<div class = "imgTextBot">
						<b>Armor<br>
						Class</b>
					</div>
				</div>
			</div>
			<div class = "third">
				<div class = "imgTextOverlay">
					<img class = "center" src="img/TextBox.png"/>
					<input type="speedBox" style="width:30px; text-align: center;">
					<div class = "imgTextBot2">
						<b>Initiative</b>
					</div>
				</div>
			</div>
			
			<div class = "third">
				<div class = "imgTextOverlay">
					<img class = "center" src="img/TextBox.png"/>
					<input type="speedBox" style="width:30px; text-align: center;">
					<div class = "imgTextBot2">
						<b>Speed</b>
					</div>
				</div>
			</div>
		</div>
		<div id="stats2">
			<!--HP Block-->
			<div id="genericHpBox">
				<div class = "container">
					<div class = "quarter right">
						<h6><font size = "-1"> Maximum Hp </font></h6>
					</div>
					<div class = "threequarters">
						<input type="number" margin-top: 2px;>
					</div>
				</div>
				<div class = "shortenAndCenter">
					<input type="number" style="text-align: center;">
				</div>
				<div class = "center">
					<h6><font size = "-1"> Current Hitpoints </font></h6>
				</div>
			</div>
			<!--Temp HP Block-->
			<div id="genericHpBox">
				<br>
				<br>
				<div class="shortenAndCenter">
					<input type="number" style="text-align: center;">
				</div>
				<div class = "center">
					<h6><font size = "-1"> Temporary Hitpoints </font></h6>
				</div>
			</div>
			<!--Hit Dice/Death Saves Block-->
			<!--This I referenced W3Schools to make this code-->
			<div class = "container">
				<div class = "half">
					<div class="container" id="genericHpBox">
						<div class = "third right">
							<h6><font size = "-1"> Hit Dice </font></h6>
						</div>
						<div class = "twothirds">
							<input type="number" margin-top: 2px;>
						</div>
						<div class = "shortenAndCenter2">
							<input type="number" style="text-align: center; margin-top: 2px;">
						</div>
						<div class="center">
							<h6><font size = "-1"> Current Hit Dice </font></h6>
						</div>
					</div>
				</div>
				<div class = "half">
					<div id="genericHpBox">
						<br>
						<div class = "container">
							<div class = "halvesBoxes">
								Successes
							</div>
							<div class = "halvesBoxes">
								<form action="/action_page.php">
									<input type="checkbox">
									<input type="checkbox">
									<input type="checkbox">
							</div>
							<div class = "halvesBoxes">
							<br>
								Failures
							</div>
							<div class = "halvesBoxes">
								<form action="/action_page.php">
								<br>
									<input type="checkbox">
									<input type="checkbox">
									<input type="checkbox">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="column">
		<p>Content here</p>
	</div>
</body>
</html>