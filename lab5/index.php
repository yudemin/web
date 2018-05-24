<!doctype html>
<html lang="en">
  <head>
    <title>lab5</title>
    <link href="css/style.css" rel="stylesheet">

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    

<input type="button" value="STARTUEM" onclick="prind()">
<input type="button" value="clear" onclick="clear()">
	<br>
	<script>
	var p = 10;
		$("h1").text('JQuery');
	function prind(){
	for (i =0; i <10; i = i+1){$('div.jstest').append(i + ':' + p + '<br>');
	}
	}
	function clear(){
		$('div.jstest').empty;
	}
	</script>
  </head>
  <body>
<div class="jstest"></div>
  	
    <h1>SHIAWASE</h1>



	<div>
 	<span class="one"></span>
 	<span class="two"></span>
 	<span class="three"></span>
 	<span class="four"></span>
 	</div>

  
	<?php
		echo "kuku";
		$name = "<br>halp";
		for ($i = 1; $i <= 10; $i++) {
   			echo $name;
   		}
	?>

	
  </body>
</html>