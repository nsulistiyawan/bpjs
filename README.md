# BPJS Kesehatan Indonesia
PHP package to access BPJS Kesehatan API. 
This package is a wrapper of 
https://dvlp.bpjs-kesehatan.go.id/VClaim-Katalog 

Created because i don't really wanna get my hands dirty because of using the old php-curl
:shit:.

#### Installation :fire:

`composer require nsulistiyawan/bpjs`

#### Example Usage :confetti_ball:
```php
//use your own bpjs config
$vclaim_conf = [
    'cons_id' => '123456',
    'secret_key' => '123456',
    'base_url' => 'https://dvlp.bpjs-kesehatan.go.id',
    'service_name' => 'vclaim-rest'
];

// use Referensi service 
// https://dvlp.bpjs-kesehatan.go.id/VClaim-Katalog/Referensi

$referensi = new Nsulistiyawan\Bpjs\VClaim\Referensi();
$referensi->configure($vclaim_conf);
var_dump($referensi->diagnosa('A00'));

//use Peserta service
//https://dvlp.bpjs-kesehatan.go.id/VClaim-Katalog/Peserta

$peserta = new \Nsulistiyawan\Bpjs\VClaim\Peserta();
$peserta->configure($vclaim_conf);
var_dump($peserta->getByNoKartu('123456789','2018-09-16'));
```


#### Supported Services (WIP) :rocket:

- [x] Referensi
- [x] Peserta
- [x] SEP
- [ ] Rujukan
- [ ] Lembar Pengajuan Klaim
- [ ] Monitoring


#### Contributions :ok_hand:
Your contribution is always welcome!