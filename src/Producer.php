<?php

namespace App;


class Producer
{
    public function fire($message)
    {
        $fp = @stream_socket_client('tcp://localhost:4000', $errno, $errstr, 30);
        if ($fp) {
            fwrite($fp, $message);
            fclose($fp);
        }
    }
}