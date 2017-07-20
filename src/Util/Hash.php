<?php


namespace ZuluCrypto\StellarSdk\Util;


class Hash
{
    /**
     * Returns the raw bytes of a sha-256 hash of $data
     *
     * @param $data
     * @return string
     */
    public static function generate($data)
    {
        return hash('sha256', $data, true);
    }
}