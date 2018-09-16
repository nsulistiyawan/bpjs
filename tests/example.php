<?php

require_once __DIR__.'/../vendor/autoload.php';

//use your own config
$conf_vclaim = [
    'cons_id' => '30700',
    'secret_key' => '1wO9108530',
    'base_url' => 'http://dvlp.bpjs-kesehatan.go.id',
    'service_name' => 'vclaim-rest'
];

$referensi = new Nsulistiyawan\Bpjs\VClaim\Referensi();
$referensi->configure($conf_vclaim);
print_r($referensi->diagnosa('A00'));




