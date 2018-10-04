# BPJS Kesehatan Indonesia
PHP package to access BPJS Kesehatan API :ambulance:.
This package is a wrapper of BPJS VClaim Web Service
https://dvlp.bpjs-kesehatan.go.id/VClaim-Katalog

Created because i don't really wanna get my hands dirty coz of using the old php-curl
:shit: example.

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

$referensi = new Nsulistiyawan\Bpjs\VClaim\Referensi($vclaim_conf);
var_dump($referensi->diagnosa('A00'));

//use Peserta service
//https://dvlp.bpjs-kesehatan.go.id/VClaim-Katalog/Peserta

$peserta = new \Nsulistiyawan\Bpjs\VClaim\Peserta($vclaim_conf);
var_dump($peserta->getByNoKartu('123456789','2018-09-16'));
```


#### Supported Services (WIP) :rocket:

- [x] Referensi
- [x] Peserta
- [x] SEP
- [x] Rujukan
- [x] Lembar Pengajuan Klaim
- [x] Monitoring
- [ ] Aplicare


#### Contributions :ok_hand:
Your contribution is always welcome!
