<?php include ('logic.php'); ?>

<div class="container">
      <div class="header">
        <h3 class="text-muted">Flavio Project Password XKCD</h3>
      </div>

      <div class="jumbotron">
     	<h2><?php echo $password; ?></h2>
      </div>

	<div class="jumbotron">
      <p class="lead"> Select the options below:</p>
	   <form method="post" action="/p2/index.php"> 
	
		 <label name="words">Number of words</label>
		<select id="words" name="words">
			<option value="1">1</option>
        	<option value="2">2</option>
        	<option value="3">3</option>
        	<option value="4">4</option>
        </select><br />

		<label name="number">Include a number</label>
		<input type="checkbox" name="number" value="number"/><br />

		<label name="symbol">Use a symbol</label>
		<input type="checkbox" name="symbol" value="symbol"/><br />
		
		<input type="submit" name="submit" value="Generate your Password"/>

	</form>

	</div>
<p class='details'>
			<a href='http://xkcd.com/936/'>xkcd password strength</a><br>
		
			<a href='http://xkcd.com/936/'>
				<img class='comic' src='http://imgs.xkcd.com/comics/password_strength.png' alt='xkcd style passwords'>
			</a>
			<br>
		</p>

</div>