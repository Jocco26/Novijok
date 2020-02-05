<?php
//config.php

require_once 'vendor/autoload.php';
//check if the session is already created if not start the session
if(!session_id())
{
    session_start();
}
//calling facebook api

$facebook = new \Facebook\facebook([
    'app_id'                => '322171602020895',
    'app_secret'            => 'b89fbb6ee2f149e369dd46ad29047705',
    'default_graph_version' => 'v3.0'
]);

?>