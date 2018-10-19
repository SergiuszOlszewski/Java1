<?php if(trim($_GET["firstname"])&&trim($_GET["lastname"]))
	file_put_contents("list", $_GET["firstname"].",".$_GET["lastname"]."\n", FILE_APPEND) or die("nie można zapisać do pliku");
$people=file('list', FILE_IGNORE_NEW_LINES) or die("nie można otworzyć pliku");
foreach($people as $person)
	echo (explode(",", $person)[0].".".explode(",", $person)[1].$occurrenceNum[explode(",", $person)[0].",".explode(",", $person)[1]]++."@company.com<br>\n"); ?>
