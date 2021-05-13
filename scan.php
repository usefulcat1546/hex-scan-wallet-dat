<?php
$wallet = bin2hex(file_get_contents("wallet.dat"));;
$addresses = file_get_contents("addresses.txt");
$lenght = strlen($wallet);
	while($lenght > 64) {
		$secret = substr($db, 0, 64);
		shell_exec("echo ".$secret."   ".$lenght." > status.txt");
		$getaddress = shell_exec("node node.js " . $secret);
		$getaddress = trim(preg_replace('/\s\s+/', ' ', $getaddress));
		foreach(explode("\n", $addresses) as $address) {
			if ($address == $getaddress) {
				shell_exec("touch ".$address.".json && echo ".$secret." > ".$address.".json");
				echo "FOUND PRIV KEY: " . $secret . "FOR ADDRESS: " . $address .PHP_EOL;
			}
		}
		$db = substr($db, 2);
		$lenght = strlen($db);
	}
?>
