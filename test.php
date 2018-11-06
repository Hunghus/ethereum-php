<?php
require 'ethereum.php';

// create a new object
$ethereum = new Ethereum('127.0.0.1', 8545);

// do your thing
echo $ethereum->eth_accounts()[1];