<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Testimonial;
use App\Models\Tourism;

class HomeController extends Controller
{

    public function index(){
        $cities = [
            [
                "id" => 1,
                "name" => "Yogyakarta",
                "description" => "Yogyakarta adalah kota budaya di Indonesia yang kaya akan sejarah, seni, dan tradisi Jawa. Terkenal dengan Keraton, Malioboro dan candi-candi lainnya.",
                "image" => "1731756957.webp",
                "founded_at" => "13 Maret 1755",
                "population" => "3.185,80 km²",
                "area" => "3.710.229 jiwa",
                "latitude" => "-7.7956",
                "longitude" => "110.3695"
            ],
            [
                "id" => 2,
                "name" => "Bali",
                "description" => "Bali adalah pulau di Indonesia terkenal dengan pantai indah, budaya kaya, seni, dan pariwisata yang memikat wisatawan dari seluruh dunia.",
                "image" => "1731759194.webp",
                "founded_at" => "14 Agustus 1958",
                "population" => "4.361.106 jiwa",
                "area" => "5.780,06 km²",
                "latitude" => "-8.650000",
                "longitude" => "115.216667"
            ],
            [
                "id" => 3,
                "name" => "Bandung",
                "description" => "Bandung adalah ibu kota Jawa Barat, terkenal dengan suhu sejuk, pemandangan alam indah, kuliner khas, serta kekayaan budaya. Kota ini juga menjadi pusat pendidikan dan kreativitas di Indonesia.",
                "image" => "1731759570.webp",
                "founded_at" => "25 September 1810",
                "population" => "2.569.107 jiwa",
                "area" => "167,31 km²",
                "latitude" => "-6.9175",
                "longitude" => "107.6191"
            ],
            [
                "id" => 4,
                "name" => "Palembang",
                "description" => "Palembang adalah ibu kota Provinsi Sumatra Selatan yang dikenal sebagai \"Venesia dari Timur\" dan telah menjadi pusat wisata air, tuan rumah SEA Games 2011, serta Asian Games 2018.",
                "image" => "1731759738.webp",
                "founded_at" => "17 Juni 683",
                "population" => "1.781.672 jiwa",
                "area" => "400,61 km²",
                "latitude" => "-2.9909",
                "longitude" => "104.7563"
            ],
            [
                "id" => 5,
                "name" => "Malang",
                "description" => "Kota Malang merupakan kota terbesar kedua di Jawa Timur setelah Surabaya. Bersama dengan Kabupaten Malang dan Kota Batu, Kota Malang merupakan bagian dari kesatuan wilayah yang dikenal dengan Malang Raya. Kota Malang memiliki luas 110,06 Km².",
                "image" => "1731834102.webp",
                "founded_at" => "14 Agustus 1950",
                "population" => "874.660 jiwa",
                "area" => "110,06 km²",
                "latitude" => "-7.983908",
                "longitude" => "112.621391"
            ],
            [
                "id" => 6,
                "name" => "Makassar",
                "description" => "Makassar adalah ibu kota provinsi Sulawesi Selatan, Indonesia. Sebelumnya, kota Makassar lebih dulu daripada yang sejak 1971 hingga 1999 sebagai Ujung Pandang yang kemudian dikembalikan nama Makassar untuk menghormati tuan rumah Makassar Asli dan merupakan kota terbesar di wilayah Indonesia Timur dan pusat kota terbesar ketiga di Indonesia dari jumlah penduduk setelah Jakarta, Surabaya, Makassar.",
                "image" => "1731895615.webp",
                "founded_at" => "1906",
                "population" => "1.474.000 jiwa",
                "area" => "175,8 km²",
                "latitude" => "-5.135399",
                "longitude" => "119.423790"
            ],
            [
                "id" => 7,
                "name" => "Bengkulu",
                "description" => "Kota Bengkulu adalah sebuah kota sekaligus menjadi ibu kota provinsi di Provinsi Bengkulu, Indonesia. Kota ini merupakan kota terbesar kedua di pantai barat Pulau Sumatra, setelah Kota Padang.",
                "image" => "1731895935.webp",
                "founded_at" => "1967",
                "population" => "391.117 jiwa",
                "area" => "151,70 km²",
                "latitude" => "-3.788892",
                "longitude" => "102.266579"
            ]
        ];
        
        return view('home',[
            // "cities" => $cities,
            "cities" => City::orderBy('id', 'ASC')->get(),
            // "tourisms" => Tourism::orderBy('name', 'ASC')->get(),
            // "testimonials" => Testimonial::orderBy('updated_at', 'DESC')->get(),
        ]);
    }

}
