<?php

namespace Database\Seeders;

use App\Models\Subdistrict;
use App\Models\Village;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MasterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sukapura = Subdistrict::create([
            'code' => '010',
            'name' => 'Sukapura'
        ]);

        Village::create([
            'name' => 'Ngadisari',
            'code' => '001',
            'subdistrict_id' => $sukapura->id
        ]);
        Village::create([
            'name' => 'Sariwani',
            'code' => '002',
            'subdistrict_id' => $sukapura->id
        ]);
        Village::create([
            'name' => 'Kedasih',
            'code' => '003',
            'subdistrict_id' => $sukapura->id
        ]);
        Village::create([
            'name' => 'Pakel',
            'code' => '004',
            'subdistrict_id' => $sukapura->id
        ]);
        Village::create([
            'name' => 'Ngepung',
            'code' => '005',
            'subdistrict_id' => $sukapura->id
        ]);
        Village::create([
            'name' => 'Sukapura',
            'code' => '006',
            'subdistrict_id' => $sukapura->id
        ]);
        Village::create([
            'name' => 'Sapikerep',
            'code' => '007',
            'subdistrict_id' => $sukapura->id
        ]);
        Village::create([
            'name' => 'Wonokerto',
            'code' => '008',
            'subdistrict_id' => $sukapura->id
        ]);
        Village::create([
            'name' => 'Ngadirejo',
            'code' => '009',
            'subdistrict_id' => $sukapura->id
        ]);
        Village::create([
            'name' => 'Ngadas',
            'code' => '010',
            'subdistrict_id' => $sukapura->id
        ]);
        Village::create([
            'name' => 'Jetak',
            'code' => '011',
            'subdistrict_id' => $sukapura->id
        ]);
        Village::create([
            'name' => 'Wonoroto',
            'code' => '012',
            'subdistrict_id' => $sukapura->id
        ]);

        $sumber = Subdistrict::create([
            'code' => '020',
            'name' => 'Sumber'
        ]);
        Village::create([
            'name' => 'Ledokombo',
            'code' => '001',
            'subdistrict_id' => $sumber->id
        ]);
        Village::create([
            'name' => 'Pandansari',
            'code' => '002',
            'subdistrict_id' => $sumber->id
        ]);
        Village::create([
            'name' => 'Sumberanom',
            'code' => '003',
            'subdistrict_id' => $sumber->id
        ]);
        Village::create([
            'name' => 'Wonokerso',
            'code' => '004',
            'subdistrict_id' => $sumber->id
        ]);
        Village::create([
            'name' => 'Gemito',
            'code' => '005',
            'subdistrict_id' => $sumber->id
        ]);
        Village::create([
            'name' => 'Tukul',
            'code' => '006',
            'subdistrict_id' => $sumber->id
        ]);
        Village::create([
            'name' => 'Sumber',
            'code' => '007',
            'subdistrict_id' => $sumber->id
        ]);
        Village::create([
            'name' => 'Cepoko',
            'code' => '008',
            'subdistrict_id' => $sumber->id
        ]);
        Village::create([
            'name' => 'Rambaan',
            'code' => '009',
            'subdistrict_id' => $sumber->id
        ]);

        $kuripan = Subdistrict::create([
            'code' => '030',
            'name' => 'Kuripan'
        ]);
        Village::create([
            'name' => 'Wonosari',
            'code' => '001',
            'subdistrict_id' => $kuripan->id
        ]);
        Village::create([
            'name' => 'Jatisari',
            'code' => '002',
            'subdistrict_id' => $kuripan->id
        ]);
        Village::create([
            'name' => 'Kedawung',
            'code' => '003',
            'subdistrict_id' => $kuripan->id
        ]);
        Village::create([
            'name' => 'Karangrejo',
            'code' => '004',
            'subdistrict_id' => $kuripan->id
        ]);
        Village::create([
            'name' => 'Resongo',
            'code' => '005',
            'subdistrict_id' => $kuripan->id
        ]);
        Village::create([
            'name' => 'Wringinanom',
            'code' => '006',
            'subdistrict_id' => $kuripan->id
        ]);
        Village::create([
            'name' => 'Menyono',
            'code' => '007',
            'subdistrict_id' => $kuripan->id
        ]);

        $bantaran = Subdistrict::create([
            'code' => '040',
            'name' => 'Bantaran'
        ]);
        Village::create([
            'name' => 'Karanganyar',
            'code' => '001',
            'subdistrict_id' => $bantaran->id
        ]);
        Village::create([
            'name' => 'Bantaran',
            'code' => '002',
            'subdistrict_id' => $bantaran->id
        ]);
        Village::create([
            'name' => 'Gunung Tugel',
            'code' => '003',
            'subdistrict_id' => $bantaran->id
        ]);
        Village::create([
            'name' => 'Kedungrejo',
            'code' => '004',
            'subdistrict_id' => $bantaran->id
        ]);
        Village::create([
            'name' => 'Besuk',
            'code' => '005',
            'subdistrict_id' => $bantaran->id
        ]);
        Village::create([
            'name' => 'Patokan',
            'code' => '006',
            'subdistrict_id' => $bantaran->id
        ]);
        Village::create([
            'name' => 'Legundi',
            'code' => '007',
            'subdistrict_id' => $bantaran->id
        ]);
        Village::create([
            'name' => 'Tempuran',
            'code' => '008',
            'subdistrict_id' => $bantaran->id
        ]);
        Village::create([
            'name' => 'Kropak',
            'code' => '009',
            'subdistrict_id' => $bantaran->id
        ]);
        Village::create([
            'name' => 'Kramatagung',
            'code' => '010',
            'subdistrict_id' => $bantaran->id
        ]);
        $leces = Subdistrict::create([
            'code' => '050',
            'name' => 'Leces'
        ]);
        Village::create([
            'name' => 'Tigasan Kulon',
            'code' => '001',
            'subdistrict_id' => $leces->id
        ]);
        Village::create([
            'name' => 'Tigasan Wetan',
            'code' => '002',
            'subdistrict_id' => $leces->id
        ]);
        Village::create([
            'name' => 'Malasan Kulon',
            'code' => '003',
            'subdistrict_id' => $leces->id
        ]);
        Village::create([
            'name' => 'Leces',
            'code' => '004',
            'subdistrict_id' => $leces->id
        ]);
        Village::create([
            'name' => 'Pondok Wuluh',
            'code' => '005',
            'subdistrict_id' => $leces->id
        ]);
        Village::create([
            'name' => 'Kerpangan',
            'code' => '006',
            'subdistrict_id' => $leces->id
        ]);
        Village::create([
            'name' => 'Sumber Kedawung',
            'code' => '007',
            'subdistrict_id' => $leces->id
        ]);
        Village::create([
            'name' => 'Clarak',
            'code' => '008',
            'subdistrict_id' => $leces->id
        ]);
        Village::create([
            'name' => 'Jorongan',
            'code' => '009',
            'subdistrict_id' => $leces->id
        ]);
        Village::create([
            'name' => 'Warujinggo',
            'code' => '010',
            'subdistrict_id' => $leces->id
        ]);
        $tegalsiwalan = Subdistrict::create([
            'code' => '060',
            'name' => 'Tegal Siwalan'
        ]);
        Village::create([
            'name' => 'Malasan Wetan',
            'code' => '001',
            'subdistrict_id' => $tegalsiwalan->id
        ]);
        Village::create([
            'name' => 'Gunung Bekel',
            'code' => '002',
            'subdistrict_id' => $tegalsiwalan->id
        ]);
        Village::create([
            'name' => 'Tegalsono',
            'code' => '003',
            'subdistrict_id' => $tegalsiwalan->id
        ]);
        Village::create([
            'name' => 'Bulujaran Kidul',
            'code' => '004',
            'subdistrict_id' => $tegalsiwalan->id
        ]);
        Village::create([
            'name' => 'Bulujaran Lor',
            'code' => '005',
            'subdistrict_id' => $tegalsiwalan->id
        ]);
        Village::create([
            'name' => 'Paras',
            'code' => '006',
            'subdistrict_id' => $tegalsiwalan->id
        ]);
        Village::create([
            'name' => 'Tegalsiwalan',
            'code' => '007',
            'subdistrict_id' => $tegalsiwalan->id
        ]);
        Village::create([
            'name' => 'Banjarsawah',
            'code' => '008',
            'subdistrict_id' => $tegalsiwalan->id
        ]);
        Village::create([
            'name' => 'Sumber Bulu',
            'code' => '009',
            'subdistrict_id' => $tegalsiwalan->id
        ]);
        Village::create([
            'name' => 'Sumber Kledung',
            'code' => '010',
            'subdistrict_id' => $tegalsiwalan->id
        ]);
        Village::create([
            'name' => 'Blado Kulon',
            'code' => '011',
            'subdistrict_id' => $tegalsiwalan->id
        ]);
        Village::create([
            'name' => 'Tegal Mojo',
            'code' => '012',
            'subdistrict_id' => $tegalsiwalan->id
        ]);
        $banyuanyar = Subdistrict::create([
            'code' => '070',
            'name' => 'Banyuanyar'
        ]);
        Village::create([
            'name' => 'Gunung Geni',
            'code' => '001',
            'subdistrict_id' => $banyuanyar->id
        ]);
        Village::create([
            'name' => 'Liprak Kidul',
            'code' => '002',
            'subdistrict_id' => $banyuanyar->id
        ]);
        Village::create([
            'name' => 'Sentulan',
            'code' => '003',
            'subdistrict_id' => $banyuanyar->id
        ]);
        Village::create([
            'name' => 'Gading Kulon',
            'code' => '004',
            'subdistrict_id' => $banyuanyar->id
        ]);
        Village::create([
            'name' => 'Klenang Kidul',
            'code' => '005',
            'subdistrict_id' => $banyuanyar->id
        ]);
        Village::create([
            'name' => 'Klenang Lor',
            'code' => '006',
            'subdistrict_id' => $banyuanyar->id
        ]);
        Village::create([
            'name' => 'Tarokan',
            'code' => '007',
            'subdistrict_id' => $banyuanyar->id
        ]);
        Village::create([
            'name' => 'Liprak Wetan',
            'code' => '008',
            'subdistrict_id' => $banyuanyar->id
        ]);
        Village::create([
            'name' => 'Liprak Kulon',
            'code' => '009',
            'subdistrict_id' => $banyuanyar->id
        ]);
        Village::create([
            'name' => 'Banyuanyar Kidul',
            'code' => '010',
            'subdistrict_id' => $banyuanyar->id
        ]);
        Village::create([
            'name' => 'Blado Wetan',
            'code' => '011',
            'subdistrict_id' => $banyuanyar->id
        ]);
        Village::create([
            'name' => 'Banyuanyar Tengah',
            'code' => '012',
            'subdistrict_id' => $banyuanyar->id
        ]);
        Village::create([
            'name' => 'Pendil',
            'code' => '013',
            'subdistrict_id' => $banyuanyar->id
        ]);
        Village::create([
            'name' => 'Alas Sapi',
            'code' => '014',
            'subdistrict_id' => $banyuanyar->id
        ]);

        $tiris = Subdistrict::create([
            'code' => '080',
            'name' => 'Tiris'
        ]);
        Village::create([
            'name' => 'Tlogosari',
            'code' => '001',
            'subdistrict_id' => $tiris->id
        ]);
        Village::create([
            'name' => 'Andungsari',
            'code' => '002',
            'subdistrict_id' => $tiris->id
        ]);
        Village::create([
            'name' => 'Tlogoargo',
            'code' => '003',
            'subdistrict_id' => $tiris->id
        ]);
        Village::create([
            'name' => 'Andungbiru',
            'code' => '004',
            'subdistrict_id' => $tiris->id
        ]);
        Village::create([
            'name' => 'Tiris',
            'code' => '005',
            'subdistrict_id' => $tiris->id
        ]);
        Village::create([
            'name' => 'Ranuagung',
            'code' => '006',
            'subdistrict_id' => $tiris->id
        ]);
        Village::create([
            'name' => 'Segaran',
            'code' => '007',
            'subdistrict_id' => $tiris->id
        ]);
        Village::create([
            'name' => 'Ranugedang',
            'code' => '008',
            'subdistrict_id' => $tiris->id
        ]);
        Village::create([
            'name' => 'Jangkang',
            'code' => '009',
            'subdistrict_id' => $tiris->id
        ]);
        Village::create([
            'name' => 'Wedusan',
            'code' => '010',
            'subdistrict_id' => $tiris->id
        ]);
        Village::create([
            'name' => 'Racek',
            'code' => '011',
            'subdistrict_id' => $tiris->id
        ]);
        Village::create([
            'name' => 'Pesawahan',
            'code' => '012',
            'subdistrict_id' => $tiris->id
        ]);
        Village::create([
            'name' => 'Pedagangan',
            'code' => '013',
            'subdistrict_id' => $tiris->id
        ]);
        Village::create([
            'name' => 'Rejing',
            'code' => '014',
            'subdistrict_id' => $tiris->id
        ]);
        Village::create([
            'name' => 'Tegalwatu',
            'code' => '015',
            'subdistrict_id' => $tiris->id
        ]);
        Village::create([
            'name' => 'Tulupari',
            'code' => '016',
            'subdistrict_id' => $tiris->id
        ]);
        $krucil = Subdistrict::create([
            'code' => '090',
            'name' => 'Krucil'
        ]);
        Village::create([
            'name' => 'Sumberduren',
            'code' => '001',
            'subdistrict_id' => $krucil->id
        ]);
        Village::create([
            'name' => 'Roto',
            'code' => '002',
            'subdistrict_id' => $krucil->id
        ]);
        Village::create([
            'name' => 'Kertosuko',
            'code' => '003',
            'subdistrict_id' => $krucil->id
        ]);
        Village::create([
            'name' => 'Tambelang',
            'code' => '004',
            'subdistrict_id' => $krucil->id
        ]);
        Village::create([
            'name' => 'Krucil',
            'code' => '005',
            'subdistrict_id' => $krucil->id
        ]);
        Village::create([
            'name' => 'Bermi',
            'code' => '006',
            'subdistrict_id' => $krucil->id
        ]);
        Village::create([
            'name' => 'Kalianan',
            'code' => '007',
            'subdistrict_id' => $krucil->id
        ]);
        Village::create([
            'name' => 'Watu Panjang',
            'code' => '008',
            'subdistrict_id' => $krucil->id
        ]);
        Village::create([
            'name' => 'Guyangan',
            'code' => '009',
            'subdistrict_id' => $krucil->id
        ]);
        Village::create([
            'name' => 'Betek',
            'code' => '010',
            'subdistrict_id' => $krucil->id
        ]);
        Village::create([
            'name' => 'Krobongan',
            'code' => '011',
            'subdistrict_id' => $krucil->id
        ]);
        Village::create([
            'name' => 'Seneng',
            'code' => '012',
            'subdistrict_id' => $krucil->id
        ]);
        Village::create([
            'name' => 'Pandanlaras',
            'code' => '013',
            'subdistrict_id' => $krucil->id
        ]);
        Village::create([
            'name' => 'Plaosan',
            'code' => '014',
            'subdistrict_id' => $krucil->id
        ]);
        $gading = Subdistrict::create([
            'code' => '100',
            'name' => 'Gading'
        ]);
        Village::create([
            'name' => 'Condong',
            'code' => '001',
            'subdistrict_id' => $gading->id
        ]);
        Village::create([
            'name' => 'Jurangrejo',
            'code' => '002',
            'subdistrict_id' => $gading->id
        ]);
        Village::create([
            'name' => 'Ranuwurung',
            'code' => '003',
            'subdistrict_id' => $gading->id
        ]);
        Village::create([
            'name' => 'Gading Wetan',
            'code' => '004',
            'subdistrict_id' => $gading->id
        ]);
        Village::create([
            'name' => 'Bulupandak',
            'code' => '005',
            'subdistrict_id' => $gading->id
        ]);
        Village::create([
            'name' => 'Keben',
            'code' => '006',
            'subdistrict_id' => $gading->id
        ]);
        Village::create([
            'name' => 'Renteng',
            'code' => '007',
            'subdistrict_id' => $gading->id
        ]);
        Village::create([
            'name' => 'Duren',
            'code' => '008',
            'subdistrict_id' => $gading->id
        ]);
        Village::create([
            'name' => 'Betek Taman',
            'code' => '009',
            'subdistrict_id' => $gading->id
        ]);
        Village::create([
            'name' => 'Batur',
            'code' => '010',
            'subdistrict_id' => $gading->id
        ]);
        Village::create([
            'name' => 'Sentul',
            'code' => '011',
            'subdistrict_id' => $gading->id
        ]);
        Village::create([
            'name' => 'Dandang',
            'code' => '012',
            'subdistrict_id' => $gading->id
        ]);
        Village::create([
            'name' => 'Kertosono',
            'code' => '013',
            'subdistrict_id' => $gading->id
        ]);
        Village::create([
            'name' => 'Prasi',
            'code' => '014',
            'subdistrict_id' => $gading->id
        ]);
        Village::create([
            'name' => 'Nogosaren',
            'code' => '015',
            'subdistrict_id' => $gading->id
        ]);
        Village::create([
            'name' => 'Wangkal',
            'code' => '016',
            'subdistrict_id' => $gading->id
        ]);
        Village::create([
            'name' => 'Mojolegi',
            'code' => '017',
            'subdistrict_id' => $gading->id
        ]);
        Village::create([
            'name' => 'Kaliacar',
            'code' => '018',
            'subdistrict_id' => $gading->id
        ]);
        Village::create([
            'name' => 'Sumbersecang',
            'code' => '019',
            'subdistrict_id' => $gading->id
        ]);
        $pakuniran = Subdistrict::create([
            'code' => '110',
            'name' => 'Pakuniran'
        ]);
        Village::create([
            'name' => 'Ranon',
            'code' => '001',
            'subdistrict_id' => $pakuniran->id
        ]);
        Village::create([
            'name' => 'Kedungsumur',
            'code' => '002',
            'subdistrict_id' => $pakuniran->id
        ]);
        Village::create([
            'name' => 'Gunggungan Kidul',
            'code' => '003',
            'subdistrict_id' => $pakuniran->id
        ]);
        Village::create([
            'name' => 'Kalidandan',
            'code' => '004',
            'subdistrict_id' => $pakuniran->id
        ]);
        Village::create([
            'name' => 'Blimbing',
            'code' => '005',
            'subdistrict_id' => $pakuniran->id
        ]);
        Village::create([
            'name' => 'Gondosuli',
            'code' => '006',
            'subdistrict_id' => $pakuniran->id
        ]);
        Village::create([
            'name' => 'Kertonegoro',
            'code' => '007',
            'subdistrict_id' => $pakuniran->id
        ]);
        Village::create([
            'name' => 'Bimo',
            'code' => '008',
            'subdistrict_id' => $pakuniran->id
        ]);
        Village::create([
            'name' => 'Pakuniran',
            'code' => '009',
            'subdistrict_id' => $pakuniran->id
        ]);
        Village::create([
            'name' => 'Patemon',
            'code' => '010',
            'subdistrict_id' => $pakuniran->id
        ]);
        Village::create([
            'name' => 'Gunggungan Lor',
            'code' => '011',
            'subdistrict_id' => $pakuniran->id
        ]);
        Village::create([
            'name' => 'Sogaan',
            'code' => '012',
            'subdistrict_id' => $pakuniran->id
        ]);
        Village::create([
            'name' => 'Sumberkembar',
            'code' => '013',
            'subdistrict_id' => $pakuniran->id
        ]);
        Village::create([
            'name' => 'Alaspandan',
            'code' => '014',
            'subdistrict_id' => $pakuniran->id
        ]);
        Village::create([
            'name' => 'Bucor Wetan',
            'code' => '015',
            'subdistrict_id' => $pakuniran->id
        ]);
        Village::create([
            'name' => 'Bucor Kulon',
            'code' => '016',
            'subdistrict_id' => $pakuniran->id
        ]);
        Village::create([
            'name' => 'Glagah',
            'code' => '017',
            'subdistrict_id' => $pakuniran->id
        ]);
        $kotaanyar = Subdistrict::create([
            'code' => '120',
            'name' => 'Kota Anyar'
        ]);
        Village::create([
            'name' => 'Sumbercenteng',
            'code' => '001',
            'subdistrict_id' => $kotaanyar->id
        ]);
        Village::create([
            'name' => 'Sambirapak Kidul',
            'code' => '002',
            'subdistrict_id' => $kotaanyar->id
        ]);
        Village::create([
            'name' => 'Sidomulyo',
            'code' => '003',
            'subdistrict_id' => $kotaanyar->id
        ]);
        Village::create([
            'name' => 'Tambakukir',
            'code' => '004',
            'subdistrict_id' => $kotaanyar->id
        ]);
        Village::create([
            'name' => 'Curahtemu',
            'code' => '005',
            'subdistrict_id' => $kotaanyar->id
        ]);
        Village::create([
            'name' => 'Pasembon',
            'code' => '006',
            'subdistrict_id' => $kotaanyar->id
        ]);
        Village::create([
            'name' => 'Sidorejo',
            'code' => '007',
            'subdistrict_id' => $kotaanyar->id
        ]);
        Village::create([
            'name' => 'Sambirampak Lor',
            'code' => '008',
            'subdistrict_id' => $kotaanyar->id
        ]);
        Village::create([
            'name' => 'Sukorejo',
            'code' => '009',
            'subdistrict_id' => $kotaanyar->id
        ]);
        Village::create([
            'name' => 'Talkandang',
            'code' => '010',
            'subdistrict_id' => $kotaanyar->id
        ]);
        Village::create([
            'name' => 'Kedungrejoso',
            'code' => '011',
            'subdistrict_id' => $kotaanyar->id
        ]);
        Village::create([
            'name' => 'Triwungan',
            'code' => '012',
            'subdistrict_id' => $kotaanyar->id
        ]);
        Village::create([
            'name' => 'Kotaanyar',
            'code' => '013',
            'subdistrict_id' => $kotaanyar->id
        ]);
        $paiton = Subdistrict::create([
            'code' => '130',
            'name' => 'Paiton'
        ]);
        Village::create([
            'name' => 'Jabungwetan',
            'code' => '001',
            'subdistrict_id' => $paiton->id
        ]);
        Village::create([
            'name' => 'Kalikajar Kulon',
            'code' => '002',
            'subdistrict_id' => $paiton->id
        ]);
        Village::create([
            'name' => 'Kalikajar Wetan',
            'code' => '003',
            'subdistrict_id' => $paiton->id
        ]);
        Village::create([
            'name' => 'Alas Tengah',
            'code' => '004',
            'subdistrict_id' => $paiton->id
        ]);
        Village::create([
            'name' => 'Pandean',
            'code' => '005',
            'subdistrict_id' => $paiton->id
        ]);
        Village::create([
            'name' => 'Patunjungan',
            'code' => '006',
            'subdistrict_id' => $paiton->id
        ]);
        Village::create([
            'name' => 'Taman',
            'code' => '007',
            'subdistrict_id' => $paiton->id
        ]);
        Village::create([
            'name' => 'Plampang',
            'code' => '008',
            'subdistrict_id' => $paiton->id
        ]);
        Village::create([
            'name' => 'Sidodadi',
            'code' => '009',
            'subdistrict_id' => $paiton->id
        ]);
        Village::create([
            'name' => 'Jabung Candi',
            'code' => '010',
            'subdistrict_id' => $paiton->id
        ]);
        Village::create([
            'name' => 'Jabung Sisir',
            'code' => '011',
            'subdistrict_id' => $paiton->id
        ]);
        Village::create([
            'name' => 'Randumerak',
            'code' => '012',
            'subdistrict_id' => $paiton->id
        ]);
        Village::create([
            'name' => 'Randudatah',
            'code' => '013',
            'subdistrict_id' => $paiton->id
        ]);
        Village::create([
            'name' => 'Karanganyar',
            'code' => '014',
            'subdistrict_id' => $paiton->id
        ]);
        Village::create([
            'name' => 'Pondok Kelor',
            'code' => '015',
            'subdistrict_id' => $paiton->id
        ]);
        Village::create([
            'name' => 'Sukodadi',
            'code' => '016',
            'subdistrict_id' => $paiton->id
        ]);
        Village::create([
            'name' => 'Paiton',
            'code' => '017',
            'subdistrict_id' => $paiton->id
        ]);
        Village::create([
            'name' => 'Sumberanyar',
            'code' => '018',
            'subdistrict_id' => $paiton->id
        ]);
        Village::create([
            'name' => 'Sumberejo',
            'code' => '019',
            'subdistrict_id' => $paiton->id
        ]);
        Village::create([
            'name' => 'Bhinar',
            'code' => '020',
            'subdistrict_id' => $paiton->id
        ]);
        $besuk = Subdistrict::create([
            'code' => '140',
            'name' => 'Besuk'
        ]);
        Village::create([
            'name' => 'Matekan',
            'code' => '001',
            'subdistrict_id' => $besuk->id
        ]);
        Village::create([
            'name' => 'Krampilan',
            'code' => '002',
            'subdistrict_id' => $besuk->id
        ]);
        Village::create([
            'name' => 'Klampokan',
            'code' => '003',
            'subdistrict_id' => $besuk->id
        ]);
        Village::create([
            'name' => 'Jambangan',
            'code' => '004',
            'subdistrict_id' => $besuk->id
        ]);
        Village::create([
            'name' => 'Kecik',
            'code' => '005',
            'subdistrict_id' => $besuk->id
        ]);
        Village::create([
            'name' => 'Bago',
            'code' => '006',
            'subdistrict_id' => $besuk->id
        ]);
        Village::create([
            'name' => 'Alasnyiur',
            'code' => '007',
            'subdistrict_id' => $besuk->id
        ]);
        Village::create([
            'name' => 'Sindetanyar',
            'code' => '008',
            'subdistrict_id' => $besuk->id
        ]);
        Village::create([
            'name' => 'Sindetlami',
            'code' => '009',
            'subdistrict_id' => $besuk->id
        ]);
        Village::create([
            'name' => 'Sumurdalam',
            'code' => '010',
            'subdistrict_id' => $besuk->id
        ]);
        Village::create([
            'name' => 'Besuk Kidul',
            'code' => '011',
            'subdistrict_id' => $besuk->id
        ]);
        Village::create([
            'name' => 'Besuk Agung',
            'code' => '012',
            'subdistrict_id' => $besuk->id
        ]);
        Village::create([
            'name' => 'Randujalak',
            'code' => '013',
            'subdistrict_id' => $besuk->id
        ]);
        Village::create([
            'name' => 'Alas Tengah',
            'code' => '014',
            'subdistrict_id' => $besuk->id
        ]);
        Village::create([
            'name' => 'Alas Kandang',
            'code' => '015',
            'subdistrict_id' => $besuk->id
        ]);
        Village::create([
            'name' => 'Alas Sumur Lor',
            'code' => '016',
            'subdistrict_id' => $besuk->id
        ]);
        Village::create([
            'name' => 'Sumberan',
            'code' => '017',
            'subdistrict_id' => $besuk->id
        ]);
        $kraksaan = Subdistrict::create([
            'code' => '150',
            'name' => 'Kraksaan'
        ]);
        Village::create([
            'name' => 'Kregenan',
            'code' => '001',
            'subdistrict_id' => $kraksaan->id
        ]);
        Village::create([
            'name' => 'Rondokuning',
            'code' => '002',
            'subdistrict_id' => $kraksaan->id
        ]);
        Village::create([
            'name' => 'Semampir',
            'code' => '003',
            'subdistrict_id' => $kraksaan->id
        ]);
        Village::create([
            'name' => 'Bulu',
            'code' => '004',
            'subdistrict_id' => $kraksaan->id
        ]);
        Village::create([
            'name' => 'Sidomukti',
            'code' => '005',
            'subdistrict_id' => $kraksaan->id
        ]);
        Village::create([
            'name' => 'Kraksaan Wetan',
            'code' => '006',
            'subdistrict_id' => $kraksaan->id
        ]);
        Village::create([
            'name' => 'Rangkang',
            'code' => '007',
            'subdistrict_id' => $kraksaan->id
        ]);
        Village::create([
            'name' => 'Kandangjati Kulon',
            'code' => '008',
            'subdistrict_id' => $kraksaan->id
        ]);
        Village::create([
            'name' => 'Kandangjati Wetan',
            'code' => '009',
            'subdistrict_id' => $kraksaan->id
        ]);
        Village::create([
            'name' => 'Alassumur Kulon',
            'code' => '010',
            'subdistrict_id' => $kraksaan->id
        ]);
        Village::create([
            'name' => 'Sumberlele',
            'code' => '011',
            'subdistrict_id' => $kraksaan->id
        ]);
        Village::create([
            'name' => 'Taman Sari',
            'code' => '012',
            'subdistrict_id' => $kraksaan->id
        ]);
        Village::create([
            'name' => 'Asembakor',
            'code' => '013',
            'subdistrict_id' => $kraksaan->id
        ]);
        Village::create([
            'name' => 'Kebon Agung',
            'code' => '014',
            'subdistrict_id' => $kraksaan->id
        ]);
        Village::create([
            'name' => 'Sidopekso',
            'code' => '015',
            'subdistrict_id' => $kraksaan->id
        ]);
        Village::create([
            'name' => 'Patokan',
            'code' => '016',
            'subdistrict_id' => $kraksaan->id
        ]);
        Village::create([
            'name' => 'Asembagus',
            'code' => '017',
            'subdistrict_id' => $kraksaan->id
        ]);
        Village::create([
            'name' => 'Kalibuntu',
            'code' => '018',
            'subdistrict_id' => $kraksaan->id
        ]);
        $krejengan = Subdistrict::create([
            'code' => '160',
            'name' => 'Krejengan'
        ]);
        Village::create([
            'name' => 'Opo Opo',
            'code' => '001',
            'subdistrict_id' => $krejengan->id
        ]);
        Village::create([
            'name' => 'Rawan',
            'code' => '002',
            'subdistrict_id' => $krejengan->id
        ]);
        Village::create([
            'name' => 'Seboro',
            'code' => '003',
            'subdistrict_id' => $krejengan->id
        ]);
        Village::create([
            'name' => 'Karangren',
            'code' => '004',
            'subdistrict_id' => $krejengan->id
        ]);
        Village::create([
            'name' => 'Kedungcaluk',
            'code' => '005',
            'subdistrict_id' => $krejengan->id
        ]);
        Village::create([
            'name' => 'Sokaan',
            'code' => '006',
            'subdistrict_id' => $krejengan->id
        ]);
        Village::create([
            'name' => 'Dawuhan',
            'code' => '007',
            'subdistrict_id' => $krejengan->id
        ]);
        Village::create([
            'name' => 'Gebangan',
            'code' => '008',
            'subdistrict_id' => $krejengan->id
        ]);
        Village::create([
            'name' => 'Widoro',
            'code' => '009',
            'subdistrict_id' => $krejengan->id
        ]);
        Village::create([
            'name' => 'Sumberkatimoho',
            'code' => '010',
            'subdistrict_id' => $krejengan->id
        ]);
        Village::create([
            'name' => 'Krejengan',
            'code' => '011',
            'subdistrict_id' => $krejengan->id
        ]);
        Village::create([
            'name' => 'Kamalkuning',
            'code' => '012',
            'subdistrict_id' => $krejengan->id
        ]);
        Village::create([
            'name' => 'Tanjungsari',
            'code' => '013',
            'subdistrict_id' => $krejengan->id
        ]);
        Village::create([
            'name' => 'Patemon',
            'code' => '014',
            'subdistrict_id' => $krejengan->id
        ]);
        Village::create([
            'name' => 'Temenggungan',
            'code' => '015',
            'subdistrict_id' => $krejengan->id
        ]);
        Village::create([
            'name' => 'Jatiurip',
            'code' => '016',
            'subdistrict_id' => $krejengan->id
        ]);
        Village::create([
            'name' => 'Sentong',
            'code' => '017',
            'subdistrict_id' => $krejengan->id
        ]);
        $pajarakan = Subdistrict::create([
            'code' => '170',
            'name' => 'Pajarakan'
        ]);
        Village::create([
            'name' => 'Seloguding Kulon',
            'code' => '001',
            'subdistrict_id' => $pajarakan->id
        ]);
        Village::create([
            'name' => 'Seloguding Wetan',
            'code' => '002',
            'subdistrict_id' => $pajarakan->id
        ]);
        Village::create([
            'name' => 'Ketompen',
            'code' => '003',
            'subdistrict_id' => $pajarakan->id
        ]);
        Village::create([
            'name' => 'Karangbong',
            'code' => '004',
            'subdistrict_id' => $pajarakan->id
        ]);
        Village::create([
            'name' => 'Karang Pranti',
            'code' => '005',
            'subdistrict_id' => $pajarakan->id
        ]);
        Village::create([
            'name' => 'Gejugan',
            'code' => '006',
            'subdistrict_id' => $pajarakan->id
        ]);
        Village::create([
            'name' => 'Karanggeger',
            'code' => '007',
            'subdistrict_id' => $pajarakan->id
        ]);
        Village::create([
            'name' => 'Tanjung',
            'code' => '008',
            'subdistrict_id' => $pajarakan->id
        ]);
        Village::create([
            'name' => 'Pajarakan Kulon',
            'code' => '009',
            'subdistrict_id' => $pajarakan->id
        ]);
        Village::create([
            'name' => 'Sukokerto',
            'code' => '010',
            'subdistrict_id' => $pajarakan->id
        ]);
        Village::create([
            'name' => 'Sukomulyo',
            'code' => '011',
            'subdistrict_id' => $pajarakan->id
        ]);
        Village::create([
            'name' => 'Penambangan',
            'code' => '012',
            'subdistrict_id' => $pajarakan->id
        ]);
        $maron = Subdistrict::create([
            'code' => '180',
            'name' => 'Maron'
        ]);
        Village::create([
            'name' => 'Sumberpoh',
            'code' => '001',
            'subdistrict_id' => $maron->id
        ]);
        Village::create([
            'name' => 'Sumberdawe',
            'code' => '002',
            'subdistrict_id' => $maron->id
        ]);
        Village::create([
            'name' => 'Brabe',
            'code' => '003',
            'subdistrict_id' => $maron->id
        ]);
        Village::create([
            'name' => 'Maron Kidul',
            'code' => '004',
            'subdistrict_id' => $maron->id
        ]);
        Village::create([
            'name' => 'Gerongan',
            'code' => '005',
            'subdistrict_id' => $maron->id
        ]);
        Village::create([
            'name' => 'Satrean',
            'code' => '006',
            'subdistrict_id' => $maron->id
        ]);
        Village::create([
            'name' => 'Brani Wetan',
            'code' => '007',
            'subdistrict_id' => $maron->id
        ]);
        Village::create([
            'name' => 'Brani Kulon',
            'code' => '008',
            'subdistrict_id' => $maron->id
        ]);
        Village::create([
            'name' => 'Maron Wetan',
            'code' => '009',
            'subdistrict_id' => $maron->id
        ]);
        Village::create([
            'name' => 'Maron Kulon',
            'code' => '010',
            'subdistrict_id' => $maron->id
        ]);
        Village::create([
            'name' => 'Kedungsari',
            'code' => '011',
            'subdistrict_id' => $maron->id
        ]);
        Village::create([
            'name' => 'Pegalangan Kidul',
            'code' => '012',
            'subdistrict_id' => $maron->id
        ]);
        Village::create([
            'name' => 'Burmbungan Kidul',
            'code' => '013',
            'subdistrict_id' => $maron->id
        ]);
        Village::create([
            'name' => 'Wonorejo',
            'code' => '014',
            'subdistrict_id' => $maron->id
        ]);
        Village::create([
            'name' => 'Puspan',
            'code' => '015',
            'subdistrict_id' => $maron->id
        ]);
        Village::create([
            'name' => 'Ganting Wetan',
            'code' => '016',
            'subdistrict_id' => $maron->id
        ]);
        Village::create([
            'name' => 'Ganting Kulon',
            'code' => '017',
            'subdistrict_id' => $maron->id
        ]);
        Village::create([
            'name' => 'Suko',
            'code' => '018',
            'subdistrict_id' => $maron->id
        ]);
        $gending = Subdistrict::create([
            'code' => '190',
            'name' => 'Gending'
        ]);
        Village::create([
            'name' => 'Banyuanyar Lor',
            'code' => '001',
            'subdistrict_id' => $gending->id
        ]);
        Village::create([
            'name' => 'Sumber Kerang',
            'code' => '002',
            'subdistrict_id' => $gending->id
        ]);
        Village::create([
            'name' => 'Sebaung',
            'code' => '003',
            'subdistrict_id' => $gending->id
        ]);
        Village::create([
            'name' => 'Pikatan',
            'code' => '004',
            'subdistrict_id' => $gending->id
        ]);
        Village::create([
            'name' => 'Bulang',
            'code' => '005',
            'subdistrict_id' => $gending->id
        ]);
        Village::create([
            'name' => 'Brumbungan Lor',
            'code' => '006',
            'subdistrict_id' => $gending->id
        ]);
        Village::create([
            'name' => 'Jatiadi',
            'code' => '007',
            'subdistrict_id' => $gending->id
        ]);
        Village::create([
            'name' => 'Klaseman',
            'code' => '008',
            'subdistrict_id' => $gending->id
        ]);
        Village::create([
            'name' => 'Pesisir',
            'code' => '009',
            'subdistrict_id' => $gending->id
        ]);
        Village::create([
            'name' => 'Randupitu',
            'code' => '010',
            'subdistrict_id' => $gending->id
        ]);
        Village::create([
            'name' => 'Gending',
            'code' => '011',
            'subdistrict_id' => $gending->id
        ]);
        Village::create([
            'name' => 'Pajurangan',
            'code' => '012',
            'subdistrict_id' => $gending->id
        ]);
        Village::create([
            'name' => 'Curahsawo',
            'code' => '013',
            'subdistrict_id' => $gending->id
        ]);
        $dringu = Subdistrict::create([
            'code' => '200',
            'name' => 'Dringu'
        ]);
        Village::create([
            'name' => 'Ngepoh',
            'code' => '001',
            'subdistrict_id' => $dringu->id
        ]);
        Village::create([
            'name' => 'Sumberagung',
            'code' => '002',
            'subdistrict_id' => $dringu->id
        ]);
        Village::create([
            'name' => 'Sumbersuko',
            'code' => '003',
            'subdistrict_id' => $dringu->id
        ]);
        Village::create([
            'name' => 'Watuwungkuk',
            'code' => '004',
            'subdistrict_id' => $dringu->id
        ]);
        Village::create([
            'name' => 'Sekarkare',
            'code' => '005',
            'subdistrict_id' => $dringu->id
        ]);
        Village::create([
            'name' => 'Mranggonlawang',
            'code' => '006',
            'subdistrict_id' => $dringu->id
        ]);
        Village::create([
            'name' => 'Tegalrejo',
            'code' => '007',
            'subdistrict_id' => $dringu->id
        ]);
        Village::create([
            'name' => 'Kalirejo',
            'code' => '008',
            'subdistrict_id' => $dringu->id
        ]);
        Village::create([
            'name' => 'Kedungdalem',
            'code' => '009',
            'subdistrict_id' => $dringu->id
        ]);
        Village::create([
            'name' => 'Tamansari',
            'code' => '010',
            'subdistrict_id' => $dringu->id
        ]);
        Village::create([
            'name' => 'Randuputih',
            'code' => '011',
            'subdistrict_id' => $dringu->id
        ]);
        Village::create([
            'name' => 'Kalisalam',
            'code' => '012',
            'subdistrict_id' => $dringu->id
        ]);
        Village::create([
            'name' => 'Dringu',
            'code' => '013',
            'subdistrict_id' => $dringu->id
        ]);
        Village::create([
            'name' => 'Pabean',
            'code' => '014',
            'subdistrict_id' => $dringu->id
        ]);
        $wonomerto = Subdistrict::create([
            'code' => '210',
            'name' => 'Wonomerto'
        ]);
        Village::create([
            'name' => 'Patalan',
            'code' => '001',
            'subdistrict_id' => $wonomerto->id
        ]);
        Village::create([
            'name' => 'Jrebeng',
            'code' => '002',
            'subdistrict_id' => $wonomerto->id
        ]);
        Village::create([
            'name' => 'Wonorejo',
            'code' => '003',
            'subdistrict_id' => $wonomerto->id
        ]);
        Village::create([
            'name' => 'Tunggak Creme',
            'code' => '004',
            'subdistrict_id' => $wonomerto->id
        ]);
        Village::create([
            'name' => 'Pohsangit Tengah',
            'code' => '005',
            'subdistrict_id' => $wonomerto->id
        ]);
        Village::create([
            'name' => 'Kareng Kidul',
            'code' => '006',
            'subdistrict_id' => $wonomerto->id
        ]);
        Village::create([
            'name' => 'Kedungsupit',
            'code' => '007',
            'subdistrict_id' => $wonomerto->id
        ]);
        Village::create([
            'name' => 'Pohsangit Lor',
            'code' => '008',
            'subdistrict_id' => $wonomerto->id
        ]);
        Village::create([
            'name' => 'Pohsangit Ngisor',
            'code' => '009',
            'subdistrict_id' => $wonomerto->id
        ]);
        Village::create([
            'name' => 'Sepuhgempol',
            'code' => '010',
            'subdistrict_id' => $wonomerto->id
        ]);
        Village::create([
            'name' => 'Sumberkare',
            'code' => '011',
            'subdistrict_id' => $wonomerto->id
        ]);
        $lumbang = Subdistrict::create([
            'code' => '220',
            'name' => 'Lumbang'
        ]);
        Village::create([
            'name' => 'Sapih',
            'code' => '001',
            'subdistrict_id' => $lumbang->id
        ]);
        Village::create([
            'name' => 'Negororejo',
            'code' => '002',
            'subdistrict_id' => $lumbang->id
        ]);
        Village::create([
            'name' => 'Branggah',
            'code' => '003',
            'subdistrict_id' => $lumbang->id
        ]);
        Village::create([
            'name' => 'Lambangkuning',
            'code' => '004',
            'subdistrict_id' => $lumbang->id
        ]);
        Village::create([
            'name' => 'Palangbesi',
            'code' => '005',
            'subdistrict_id' => $lumbang->id
        ]);
        Village::create([
            'name' => 'Boto',
            'code' => '006',
            'subdistrict_id' => $lumbang->id
        ]);
        Village::create([
            'name' => 'Wonogoro',
            'code' => '007',
            'subdistrict_id' => $lumbang->id
        ]);
        Village::create([
            'name' => 'Lumbang',
            'code' => '008',
            'subdistrict_id' => $lumbang->id
        ]);
        Village::create([
            'name' => 'Tandon Sentul',
            'code' => '009',
            'subdistrict_id' => $lumbang->id
        ]);
        Village::create([
            'name' => 'Purut',
            'code' => '010',
            'subdistrict_id' => $lumbang->id
        ]);
        $tongas = Subdistrict::create([
            'code' => '230',
            'name' => 'Tongas'
        ]);
        Village::create([
            'name' => 'Pamatan',
            'code' => '001',
            'subdistrict_id' => $tongas->id
        ]);
        Village::create([
            'name' => 'Sumberkramat',
            'code' => '002',
            'subdistrict_id' => $tongas->id
        ]);
        Village::create([
            'name' => 'Seumberrejo',
            'code' => '003',
            'subdistrict_id' => $tongas->id
        ]);
        Village::create([
            'name' => 'Sumendi',
            'code' => '004',
            'subdistrict_id' => $tongas->id
        ]);
        Village::create([
            'name' => 'Bayeman',
            'code' => '005',
            'subdistrict_id' => $tongas->id
        ]);
        Village::create([
            'name' => 'Dungun',
            'code' => '006',
            'subdistrict_id' => $tongas->id
        ]);
        Village::create([
            'name' => 'Curahdringu',
            'code' => '007',
            'subdistrict_id' => $tongas->id
        ]);
        Village::create([
            'name' => 'Wringinanom',
            'code' => '008',
            'subdistrict_id' => $tongas->id
        ]);
        Village::create([
            'name' => 'Tongas Wetan',
            'code' => '009',
            'subdistrict_id' => $tongas->id
        ]);
        Village::create([
            'name' => 'Tongas Kulon',
            'code' => '010',
            'subdistrict_id' => $tongas->id
        ]);
        Village::create([
            'name' => 'Curah Tulis',
            'code' => '011',
            'subdistrict_id' => $tongas->id
        ]);
        Village::create([
            'name' => 'Klampok',
            'code' => '012',
            'subdistrict_id' => $tongas->id
        ]);
        Village::create([
            'name' => 'Tanjungrejo',
            'code' => '013',
            'subdistrict_id' => $tongas->id
        ]);
        Village::create([
            'name' => 'Tambakrejo',
            'code' => '014',
            'subdistrict_id' => $tongas->id
        ]);
        $sumberasih = Subdistrict::create([
            'code' => '240',
            'name' => 'Sumberasih'
        ]);
        Village::create([
            'name' => 'Munengkidul',
            'code' => '001',
            'subdistrict_id' => $sumberasih->id
        ]);
        Village::create([
            'name' => 'Pohsangitleres',
            'code' => '002',
            'subdistrict_id' => $sumberasih->id
        ]);
        Village::create([
            'name' => 'Laweyan',
            'code' => '003',
            'subdistrict_id' => $sumberasih->id
        ]);
        Village::create([
            'name' => 'Muneng',
            'code' => '004',
            'subdistrict_id' => $sumberasih->id
        ]);
        Village::create([
            'name' => 'Jangur',
            'code' => '005',
            'subdistrict_id' => $sumberasih->id
        ]);
        Village::create([
            'name' => 'Sumberbendo',
            'code' => '006',
            'subdistrict_id' => $sumberasih->id
        ]);
        Village::create([
            'name' => 'Mentor',
            'code' => '007',
            'subdistrict_id' => $sumberasih->id
        ]);
        Village::create([
            'name' => 'Sumurmati',
            'code' => '008',
            'subdistrict_id' => $sumberasih->id
        ]);
        Village::create([
            'name' => 'Pesisir',
            'code' => '009',
            'subdistrict_id' => $sumberasih->id
        ]);
        Village::create([
            'name' => 'Lemahkembar',
            'code' => '010',
            'subdistrict_id' => $sumberasih->id
        ]);
        Village::create([
            'name' => 'Ambulu',
            'code' => '011',
            'subdistrict_id' => $sumberasih->id
        ]);
        Village::create([
            'name' => 'Banjarsari',
            'code' => '012',
            'subdistrict_id' => $sumberasih->id
        ]);
        Village::create([
            'name' => 'Gili Ketapang',
            'code' => '013',
            'subdistrict_id' => $sumberasih->id
        ]);
    }
}
