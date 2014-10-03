<?php include ('logic.php'); ?>

<div class="container">
      <div class="header">
        <h1 class="text-muted">DWA-15: Flavio xkcd Password Generator</h1>
        <p class="lead"> 
        The Generate Password button below will generate a random password where you can choose between one word until
        four words, one number, one symbol and all words with the first letter in uppercase.
        The idea is to create a strong password making it hard to guess even by brute force.
        </p>
      </div>

      <div class="jumbotron">
      	<h2> Your password is: </h2>
     	<h3 class="pwd"><?php echo $password; ?></h3>
      </div>

	<div class="jumbotron">
      <p class="lead"> Select the options below:</p>
	   <form method="post" action="index.php"> 
	
	    <label> Number of words</label>
		<input type="number" name="words" value=<?=$count?> min=1 max=4 >(max=4)<br />
		
		<label> Include a number</label>
		<input type="checkbox" name="number" value="number"/><br />

		<label> Use a symbol</label>
		<input type="checkbox" name="symbol" value="symbol"/><br />

		<label> First letter Uppercase</label>
		<input type="checkbox" name="upper" value="upper"/><br />
		
		<input type="submit" name="submit" value="Generate your Password"/>

	</form>

	</div>
	<p class='lead'>
		This is the comic that inspired this tool. More information: <a href='http://xkcd.com/936/'>xkcd password</a>	
		<a href='http://xkcd.com/936/'>
			<img src='images/password_strength.png' alt='xkcd style passwords'>
		</a>
		<br>
	</p>
</div>