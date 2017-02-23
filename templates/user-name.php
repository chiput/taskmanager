<html>
	<head>
	<title><?=@$title?></title>
	</head>
	<body>
		<?php
			if(isset($names)) {
				echo $names;
			} else {
				echo "Selamat Datang.";
			}

		?>
	</body>
</html>