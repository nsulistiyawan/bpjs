<?php

require_once __DIR__.'/../vendor/autoload.php';

//use your own bpjs config
$vclaim_conf = [
    'cons_id' => '123456',
    'secret_key' => '123456',
    'base_url' => 'https://dvlp.bpjs-kesehatan.go.id',
    'service_name' => 'vclaim-rest'
];


//use referensi service
$referensi = new Nsulistiyawan\Bpjs\VClaim\Referensi($vclaim_conf);
var_dump($referensi->diagnosa('A00'));

//use peserta service
$peserta = new \Nsulistiyawan\Bpjs\VClaim\Peserta($vclaim_conf);
var_dump($peserta->getByNoKartu('123456789','2018-09-16'));
