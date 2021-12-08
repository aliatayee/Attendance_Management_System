<?php


namespace App\Helpers;


use Rats\Zkteco\Lib\ZKTeco;

class FingerHelper
{
    public function init($ip, $port = 4370): ZKTeco
    {
        return new ZKTeco($ip, $port);
    }

    public function getStatus(ZKTeco $zk): bool
    {
        return $zk->connect();
    }

    public function getStatusFormatted(ZKTeco $zk): bool
    {
        return $zk->connect() ? "Active" : "Deactivate";
    }

    public function getSerial(ZKTeco $zk)
    {
        if ($zk->connect()) {
            return substr(strstr($zk->serialNumber(), '='), 1);
        }
        return false;
    }
}
