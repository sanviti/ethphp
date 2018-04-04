<?php

require 'ethereum.php';
// create a new object
$ethereum = new Ethereum('127.0.0.1', 8545);

// do your thing
echo $ethereum->net_version();
echo "\n";
//echo $ethereum->personal_newAccount('passphrase');
echo json_encode($ethereum->eth_accounts());
echo "\n";
//echo json_encode($ethereum->personal_listAccounts());
//echo "\n";
echo json_encode($ethereum->eth_getBalance(['0x627306090abaB3A6e1400e9345bC60c78a8BEf57', 'latest']));

