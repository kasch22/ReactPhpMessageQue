<?php

function consume($message, $filename)
{
    $data = sprintf("%s: Message: %s\n", date('H:i:s'), $message);
    file_put_contents($filename, $data, FILE_APPEND);
    sleep(3);
}

$message = stripslashes($_SERVER['argv'][1]);
consume($message, "message.log");
