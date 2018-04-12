## ethphp
A PHP lib for access to Ethereum Geth API via Json-RPC.

## Usage
    // include the lib file
    require 'ethereum.php';
    
    // create a new eth object
    $ethereum = new Ethereum('127.0.0.1', 8545);

    // print test accounts here
    echo json_encode($ethereum->eth_accounts());
        
See `test/testgeth.php` for a complete example. 

## Function documentation
For documentation on Json-RPC, see the [Ethereum Wiki Json-RPC](https://github.com/ethereum/wiki/wiki/JSON-RPC#json-rpc-methods)
