<?php

namespace BitWasp\Bitcoin\Tests\Bech32\Provider;

class ValidAddresses
{
    /**
     * @var array
     */
    private static $fixtures = [

        [
            "bc",
            "BC1QW508D6QEJXTDG4Y5R3ZARVARY0C5XW7KV8F3T4",
            "0014751e76e8199196d454941c45d1b3a323f1433bd6"
        ],
        [
            "tb",
            "tb1qrp33g0q5c5txsp9arysrx4k6zdkfs4nce4xj0gdcccefvpysxf3q0sl5k7",
            "00201863143c14c5166804bd19203356da136c985678cd4d27a1b8c6329604903262"
        ],
        [
            "bc",
            "bc1pw508d6qejxtdg4y5r3zarvary0c5xw7kw508d6qejxtdg4y5r3zarvary0c5xw7kt5nd6y",
            "5128751e76e8199196d454941c45d1b3a323f1433bd6751e76e8199196d454941c45d1b3a323f1433bd6"
        ],
        [
            "bc",
            "BC1SW50QGDZ25J",
            "6002751e"
        ],
        [
            "bc",
            "bc1zw508d6qejxtdg4y5r3zarvaryvaxxpcs",
            "5210751e76e8199196d454941c45d1b3a323"
        ],
        [
            "tb",
            "tb1qqqqqp399et2xygdj5xreqhjjvcmzhxw4aywxecjdzew6hylgvsesrxh6hy",
            "0020000000c4a5cad46221b2a187905e5266362b99d5e91c6ce24d165dab93e86433"
        ],
        [
            "tb",
            "tb1pqqqqp399et2xygdj5xreqhjjvcmzhxw4aywxecjdzew6hylgvsesf3hn0c",
            "5120000000c4a5cad46221b2a187905e5266362b99d5e91c6ce24d165dab93e86433"
        ],
        [
            "bc",
            "bc1p0xlxvlhemja6c4dqv22uapctqupfhlxm9h8z3k2e72q4k9hcz7vqzk5jj0",
            "512079be667ef9dcbbac55a06295ce870b07029bfcdb2dce28d959f2815b16f81798"
        ],
        
    ];

    /**
     * @return array
     */
    public static function load()
    {
        return self::$fixtures;
    }
}
