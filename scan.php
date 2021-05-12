<?php
$db = file_get_contents("db.txt");
$lenght = strlen($db);
	while($lenght > 64) {
		$secret = substr($db, 0, 64);
		shell_exec("echo ".$secret."   ".$lenght." > status.txt");
		$getaddress = shell_exec("node node.js " . $secret);
		$getaddress = trim(preg_replace('/\s\s+/', ' ', $getaddress));
		if ($getaddress == "..." || 
				$getaddress == "..." || 
				$getaddress == "..." || 
				$getaddress == "..." || 
				$getaddress == "..." || 
				$getaddress == "..." || 
				$getaddress == "..." || 
				$getaddress == "..." || 
				$getaddress == "..." || 
				$getaddress == "..." || 
				$getaddress == "..." || 
				$getaddress == "..." || 
				$getaddress == "..." || 
				$getaddress == "...") {
          shell_exec("touch ".$address.".json");
					shell_exec("echo ".$secret." > ".$address.".json");
					echo "FOUND " . $secret . PHP_EOL;
			}
		$db = substr($db, 2);
		$lenght = strlen($db);
	}
?>
