<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>RANDOM 3</title>
</head>
<body>
	<p>Endevina el nombre:</p>
	<?php
		session_start();
        if(!isset($_SESSION['ocult'])){
            $_SESSION['ocult'] = random_int(1,100);
        }
		if(!isset($_GET['endevina'])){
			?>
				<form>
					<label>ENDEVINA</label>
					<input type="number" name="endevina">
					<input type="submit">
				</form>
			<?php
		}else{
			if($_SESSION['ocult'] > $_GET['endevina']){
				echo "<p>El numero a endevinar es major</p>";
							?>
				<form>
					<label>ENDEVINA</label>
					<input type="number" name="endevina">
					<input type="submit">
				</form>
			<?php

			}else if($_SESSION['ocult'] < $_GET['endevina']){
				echo "<p>El numero a endevinar es menor</p>";
				?>
				<form>
					<label>ENDEVINA</label>
					<input type="number" name="endevina">
					<input type="submit">
				</form>
			<?php
			}else{
				echo "<p>As encertat el numero!!</p>";
				echo "<a href='ex41pagina3Random.php'>Tornar a jugar</a>";
                $_SESSION['ocult'] = random_int(1,100);
			}
		}
	?>
</body>
</html>