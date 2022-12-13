<html>

<head>
	<link href='https://fonts.googleapis.com/css?family=Josefin+Slab:400,700,700italic' rel='stylesheet' type='text/css'>
	<link href='css/style.css' rel='stylesheet' type='text/css'>
	<link href='css/santa.css' rel='stylesheet' type='text/css'>
</head>

<body>
	<?php
	date_default_timezone_set('Asia/Kolkata');
	$date = date('d/m/Y H:i:s a', time());
	$an = date('Y', time());
	echo "<div id='heading'><strong id='secret_santa'> Secret Santa {$an} </strong> <p id='time'>$date</p></div>";
	?>
	<div>
		<div id="content">
			<form action="print" type="get" id="form">
				<input class="input-lung" name="lista" type="text" placeholder="Paste google spreadsheet published CSV" id="inputBox">
				<input type="submit" class="input-submit" value="Tell Santa a secret">
			</form>

			<img src="./img/santalogo1.png" alt="" id="santa_img">
		</div>
	</div>

</body>

</html>