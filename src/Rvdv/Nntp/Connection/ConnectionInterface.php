<?php

namespace Rvdv\Nntp\Connection;

interface ConnectionInterface
{
    function connect($host, $port, $secure = false, $timeout = 15);

    function disconnect();

    function sendCommand($command);
}
