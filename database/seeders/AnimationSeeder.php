<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Animation;

class AnimationSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            // Amerika Serikat (country_id: 1)
            ['country_id'=>1,'title'=>'Inside Out 2','genre'=>'Komedi, Drama','year'=>2024,'rating'=>7.8,'box_office'=>1700.00,'synopsis'=>'Riley memasuki masa remaja dan emosi-emosi baru bermunculan di dalam kepalanya, memicu kekacauan di Headquarters.','poster_url'=>'https://image.tmdb.org/t/p/w500/vpnVM9B6NMmQpWeZvzLvDESb2QY.jpg','is_recommended'=>true],
            ['country_id'=>1,'title'=>'Zootopia','genre'=>'Petualangan, Komedi','year'=>2016,'rating'=>8.0,'box_office'=>1023.00,'synopsis'=>'Seekor kelinci muda menjadi polisi pertama di kota mamalia modern dan harus mengungkap konspirasi besar.','poster_url'=>'https://image.tmdb.org/t/p/w500/yCzAZzF0Q0yHQFGCqFfvTgHsZPl.jpg','is_recommended'=>true],
            ['country_id'=>1,'title'=>'Moana 2','genre'=>'Petualangan, Musikal','year'=>2024,'rating'=>7.1,'box_office'=>1100.00,'synopsis'=>'Moana berlayar ke lautan yang jauh bersama kru baru untuk memenuhi panggilan leluhurnya.','poster_url'=>'https://image.tmdb.org/t/p/w500/aLVkiINlIeCkcZIzb7XHzPYgO6L.jpg','is_recommended'=>false],
            // Jepang (country_id: 2)
            ['country_id'=>2,'title'=>'Spirited Away','genre'=>'Fantasi, Petualangan','year'=>2001,'rating'=>9.3,'box_office'=>395.00,'synopsis'=>'Seorang gadis kecil terperangkap di dunia roh dan harus bekerja keras untuk menyelamatkan kedua orang tuanya.','poster_url'=>'https://image.tmdb.org/t/p/w500/39wmItIWsg5sZMyRUHLkWBcuVCM.jpg','is_recommended'=>true],
            ['country_id'=>2,'title'=>'Your Name','genre'=>'Romance, Drama','year'=>2016,'rating'=>8.9,'box_office'=>380.00,'synopsis'=>'Dua remaja dari latar belakang berbeda secara misterius bertukar tubuh dan saling jatuh cinta.','poster_url'=>'https://image.tmdb.org/t/p/w500/q719jXXEzOoYaps6babgKnONONX.jpg','is_recommended'=>true],
            ['country_id'=>2,'title'=>'Demon Slayer: Mugen Train','genre'=>'Aksi, Fantasi','year'=>2020,'rating'=>8.2,'box_office'=>500.00,'synopsis'=>'Tanjiro dan kawan-kawan bergabung dengan Flame Hashira dalam misi berbahaya di atas kereta yang dikuasai iblis.','poster_url'=>'https://image.tmdb.org/t/p/w500/h8Rb9gBr48ODIwYUttZNYeMWeUU.jpg','is_recommended'=>true],
            // China (country_id: 3)
            ['country_id'=>3,'title'=>'Ne Zha 2','genre'=>'Aksi, Fantasi','year'=>2025,'rating'=>8.5,'box_office'=>1800.00,'synopsis'=>'Ne Zha kembali menghadapi ancaman lebih besar dan berjuang melawan takdir untuk melindungi dunia.','poster_url'=>'https://image.tmdb.org/t/p/w500/tGaYGMECAFLlGDaRSxUxjnlBXdL.jpg','is_recommended'=>true],
            ['country_id'=>3,'title'=>'Ne Zha','genre'=>'Aksi, Fantasi','year'=>2019,'rating'=>7.9,'box_office'=>726.00,'synopsis'=>'Anak yang dilahirkan dari bola api iblis berjuang melawan takdirnya untuk menjadi pahlawan.','poster_url'=>'https://image.tmdb.org/t/p/w500/v1QQhPBwFEkQQNFTHWMFyFpNLST.jpg','is_recommended'=>true],
            ['country_id'=>3,'title'=>'Monkey King: Hero is Back','genre'=>'Petualangan, Aksi','year'=>2015,'rating'=>7.3,'box_office'=>154.00,'synopsis'=>'Sun Wukong yang tersegel selama 500 tahun kembali bangkit untuk melindungi seorang bocah dari kejahatan.','poster_url'=>'https://image.tmdb.org/t/p/w500/hZer7ZDdSNAjMosPAsJUqrNVMHj.jpg','is_recommended'=>false],
            // Prancis (country_id: 4)
            ['country_id'=>4,'title'=>'The Triplets of Belleville','genre'=>'Komedi, Petualangan','year'=>2003,'rating'=>7.8,'box_office'=>14.00,'synopsis'=>'Seorang nenek gigih mencari cucunya yang diculik mafia selama Tour de France.','poster_url'=>'https://image.tmdb.org/t/p/w500/7BdDJoAFNfSJkSIBkbdRBzQflJ7.jpg','is_recommended'=>false],
            ['country_id'=>4,'title'=>'Persepolis','genre'=>'Drama, Biografi','year'=>2007,'rating'=>8.0,'box_office'=>23.00,'synopsis'=>'Kisah nyata seorang gadis Iran yang tumbuh dewasa di tengah Revolusi Islam.','poster_url'=>'https://image.tmdb.org/t/p/w500/oGmSJHHFuFiVFX6QmDqLBuXIbGB.jpg','is_recommended'=>true],
            ['country_id'=>4,'title'=>'Ernest & Celestine','genre'=>'Petualangan, Keluarga','year'=>2012,'rating'=>7.8,'box_office'=>10.00,'synopsis'=>'Persahabatan tak terduga antara seekor beruang besar dan tikus kecil.','poster_url'=>'https://image.tmdb.org/t/p/w500/fECMiJBsZTtqDMOSECmGMfxriBG.jpg','is_recommended'=>true],
            // Inggris (country_id: 5)
            ['country_id'=>5,'title'=>'Wallace & Gromit: Vengeance Most Fowl','genre'=>'Komedi, Petualangan','year'=>2024,'rating'=>7.6,'box_office'=>50.00,'synopsis'=>'Wallace dan anjingnya Gromit kembali menghadapi ancaman dari musuh lama.','poster_url'=>'https://image.tmdb.org/t/p/w500/bkpPTZUdq31UGDovmszsg2CchiI.jpg','is_recommended'=>true],
            ['country_id'=>5,'title'=>'Shaun the Sheep Movie','genre'=>'Komedi, Keluarga','year'=>2015,'rating'=>7.5,'box_office'=>106.00,'synopsis'=>'Shaun si domba bertualang ke kota besar untuk membawa pulang tuannya yang kehilangan ingatan.','poster_url'=>'https://image.tmdb.org/t/p/w500/lqoGFBMHDfGTgthSyBpEANRGmd8.jpg','is_recommended'=>true],
            ['country_id'=>5,'title'=>'Chicken Run','genre'=>'Komedi, Petualangan','year'=>2000,'rating'=>7.0,'box_office'=>224.00,'synopsis'=>'Sekelompok ayam yang mencoba melarikan diri dari peternakan sebelum dijadikan pai ayam.','poster_url'=>'https://image.tmdb.org/t/p/w500/lBqSB6MRoqJVrZkFXNfOEIVgsOb.jpg','is_recommended'=>false],
            // Kanada (country_id: 6)
            ['country_id'=>6,'title'=>'The Breadwinner','genre'=>'Drama, Petualangan','year'=>2017,'rating'=>7.9,'box_office'=>5.00,'synopsis'=>'Seorang gadis Afghanistan menyamar sebagai anak laki-laki untuk menghidupi keluarganya.','poster_url'=>'https://image.tmdb.org/t/p/w500/4Tz7BEXP8BgOaLVAMCqnxHDFmEI.jpg','is_recommended'=>true],
            ['country_id'=>6,'title'=>'Barbie Diaries','genre'=>'Komedi, Drama','year'=>2006,'rating'=>5.8,'box_office'=>8.00,'synopsis'=>'Barbie menjalani kehidupan SMA penuh drama, persahabatan, dan impian menjadi bintang musik.','poster_url'=>'https://image.tmdb.org/t/p/w500/3bhkMBzNFQgFCLMmQpL1xBBIkGH.jpg','is_recommended'=>false],
            ['country_id'=>6,'title'=>'Rock Dog','genre'=>'Komedi, Musikal','year'=>2016,'rating'=>5.9,'box_office'=>9.00,'synopsis'=>'Seekor anjing Tibet mengejar mimpinya menjadi musisi rock terkenal.','poster_url'=>'https://image.tmdb.org/t/p/w500/ssrQrSaITABsxCJJDKi2FXNQ0qp.jpg','is_recommended'=>false],
            // Korea Selatan (country_id: 7)
            ['country_id'=>7,'title'=>'The King of Pigs','genre'=>'Drama, Thriller','year'=>2011,'rating'=>7.4,'box_office'=>2.00,'synopsis'=>'Dua pria dewasa kembali mengingat masa kelam perundungan di sekolah menengah mereka dulu.','poster_url'=>'https://image.tmdb.org/t/p/w500/kBJHCQBqfHdZPGHJpCdOWHCWRdN.jpg','is_recommended'=>false],
            ['country_id'=>7,'title'=>'Seoul Station','genre'=>'Horror, Drama','year'=>2016,'rating'=>6.6,'box_office'=>3.00,'synopsis'=>'Wabah zombie menyerang Seoul Station dan seorang gadis tunawisma berjuang bertahan hidup.','poster_url'=>'https://image.tmdb.org/t/p/w500/4gVIXKNGJYGKQmMkTMCSJOVtOyD.jpg','is_recommended'=>false],
            ['country_id'=>7,'title'=>'The Satellite Girl and Milk Cow','genre'=>'Romance, Fantasi','year'=>2014,'rating'=>7.0,'box_office'=>1.50,'synopsis'=>'Sebuah satelit tua jatuh ke bumi berubah menjadi gadis dan jatuh cinta dengan seorang pria yang dikutuk jadi sapi.','poster_url'=>'https://image.tmdb.org/t/p/w500/zaSNMqkPqhFpbKLCHNFdGUyFHHC.jpg','is_recommended'=>true],
        ];

        foreach ($data as $item) {
            Animation::create($item);
        }
    }
}
