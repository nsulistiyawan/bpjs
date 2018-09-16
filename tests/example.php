<?php

require_once __DIR__.'/../vendor/autoload.php';

//use your own config
$conf_vclaim = [
    'cons_id' => '12345',
    'secret_key' => 'reallysecretkey',
    'base_url' => 'https://dvlp.bpjs-kesehatan.go.id',
    'service_name' => 'vclaim-rest'
];

$referensi = new Nsulistiyawan\Bpjs\VClaim\Referensi();
$referensi->configure($conf_vclaim);
var_dump($referensi->diagnosa('A00'));




