<?php include ('logic.php'); ?>

<div class="container">
	<h2> Flavio xkcd Password Generator</h2>

    <h2> Generate your password </h2>

    <h2> Your current password is: </h2>

    <p>Your password is: </p>


	<form method="post" action="/p2/index.php"> 

		<label name="count">Number of words</label>
		<input type="text" id="count" name="count"/><br />

		<label name="uppercase">Upercase first letter</label>
		<input type="checkbox" name="uppercase" value="checkbox"/><br />

		<label name="symbol">Use a symbol?</label>
		<input type="checkbox" name="symbol" value="symbol"/><br />

		<label name="number">Include a number</label>
		<input type="checkbox" name="number" value="number"/><br />
		
		<input type="submit" name="submit" value="submit"/>

	</form>


</div>