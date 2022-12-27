<?php
session_start();

$data = [
    'name' => '',
    'email' => '',
    'product' => '',
    'price' => '',
];

if (!empty($_POST)){
    require_once 'vendor/connect.db';
    $data = load($data);
    debug($data);
}

function load($data){
    foreach($_POST as $k => $v){
        if(array_key_exists($k, $data)){
            $data[$k] = $v;
        }
    }
    return $data;
}

function debug($data){
    echo '<pre>' ,
    print_r($data),
    '</pre>';
}
?>