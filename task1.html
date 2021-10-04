<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Name Field </title>
</head>

<body>
	<form method="get" action="#">
		<fieldset>
			<legend>NAME</legend>
			<input type="text" name="myname" value="">
			<hr>
			<input type="submit" name="submit" value="Submit">
			<p>

				<?php

				function hasTwoWord($name)
				{
					for ($i = 0; $i < strlen($name); ++$i) {
						if ($i != strlen($name) - 1 && $name[$i] == " ") {
							return true;
						}
					}
					return false;
				}

				function hasAllowedCharOnly($name)
				{
					for ($i = 0; $i < strlen($name); ++$i) {
						$c = ord(strtolower($name)[$i]);
						if ($c < 97 || $c > 122) {
							if ($c != 46 && $c != 45 && $c!=32) {
								return false;
							}
						}
					}
					return true;
				}



				if (isset($_REQUEST['submit'])) {
					$name = $_REQUEST['myname'];
					if ($name == "") {
						echo "Name can not be empty";
						return;
					}

					if (!hasTwoWord($name)) {
						echo $name . ' does not contain two word';
						return;
					}

					if (ord(strtolower($name)) < 97 || ord(strtolower($name)) > 122) {
						echo $name . ' does not start with a letter';
						return;
					}

					if (!hasAllowedCharOnly($name)) {
						echo $name . ' contains invalid character';
						return;
					}

					echo $name . ' submited successfylly';
				}

				?>
			</p>
		</fieldset>
	</form>
</body>

</html>