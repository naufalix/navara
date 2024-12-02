<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Testimonial;
use App\Models\Tourism;

class HomeController extends Controller
{

    public function index(){
			return view('home',[
				"cities" => City::orderBy('id', 'ASC')->get(),
				"title" => "Navara Nusantara",
				// "tourisms" => Tourism::orderBy('name', 'ASC')->get(),
				// "testimonials" => Testimonial::orderBy('updated_at', 'DESC')->get(),
			]);
    }

    public function history(){
        
			$marines = [
				[
					'title' => 'Sejarah Penerapan di Indonesia',
					'icon' => 'fa fa-history',
					'year' => '1945',
					'body' => 'Ketika Soekarno dan Hatta atas nama bangsa Indonesia memproklamasikan kemerdekaan Indonesia tanggal 17 Agustus 1945, wilayah nengara Indonesia tidak seperti yang kita kenal saat ini. Berdasarkan <a class="text-info fw-bold" href="https://kompaspedia.kompas.id/baca/paparan-topik/sidang-bpupki-dinamika-penentuan-bentuk-dan-wilayah-indonesia-merdeka" target="_blank">Sidang BPUPKI 11 Juli 1945</a>, diputuskan bahwa yang masuk dalam Indonesia Merdeka adalah wilayah Hindia Belanda ditambah dengan Malaka, Borneo Utara, Papua, Timor dan kepulauan sekelilingnya.',
				],
				[
					'title' => 'Deklarasi Djuanda',
					'icon' => 'fa fa-flag',
					'year' => '1957',
					'body' => 'Pada tanggal 13 Desember 1957, Perdana Menteri Ir. Djuanda Kartawijaya mendeklarasikan “Pengumuman Pemerintah mengenai Perairan Negara Republik Indonesia” yang kelak dikenal sebagai “Deklarasi Djuanda”. Deklarasi itu menyatakan bahwa semua perairan di sekitar, di antara, dan yang menghubungkan pulau-pulau atau bagian pulau-pulau yang termasuk daratan Negara Republik Indonesia, dengan tidak memandang luas atau lebarnya, adalah bagian dari wilayah Negara Republik Indonesia dan dengan demikian merupakan bagian dari perairan nasional yang berada di bawah kedaulatan mutlak Negara Republik Indonesia.',
				],
				[
					'title' => 'UNCLOS 1982',
					'icon' => 'fa fa-gavel',
					'year' => '1982',
					'body' => 'Pada pertemuan Konvensi Hukum Laut PBB ke-3 (United Nation Convention on the Law of the Sea/UNCLOS) tanggal 10 Desember 1982, konsep Wawasan Nusantara akhirnya diakui dunia sebagai The Archipelagic Nation Concept. Di situ ditetapkan laut teritorial negara kepulauan adalah selebar 12 mil dari garis dasar atau base line terluar pulau-pulau dan ZEE selebar 200 mil dari dari garis dasar. Melalui UNCLOS 1982, luas laut Indonesia bertambah, dari sebelumnya kurang dari satu juta kilometer persegi menjadi 5,8 juta kilometer persegi. Luas tersebut terdiri dari laut teritorial dan perairan pedalaman seluas 3,1 juta kilometer persegi dan ZEE seluas 2,7 juta kilometer persegi.',
				],
				[
					'title' => 'Dukungan Peraturan',
					'icon' => 'fa fa-balance-scale',
					'year' => '1996',
					'body' => 'Dalam perkembangannya, ketentuan mengenai wilayah kedaulatan maritim Indonesia juga diatur dalam <a class="text-info fw-bold" href="https://peraturan.bpk.go.id/Details/46096/uu-no-6-tahun-1996" target="_blank">Undang-Undang Nomor 6 Tahun 1996 tentang Perairan Indonesia</a>. Di pasal 4 disebutkan bahwa Kedaulatan Negara Republik Indonesia di perairan Indonesia meliputi laut teritorial, perairan kepulauan, dan perairan pedalaman serta ruang udara di atas laut teritorial, perairan kepulauan, dan perairan pedalaman serta dasar laut dan tanah di bawahnya termasuk sumber kekayaan alam yang terkandung di dalamnya. Berdasarkan Undang-Undang tersebut, luas wilayah perairan Indonesia bertambah menjadi kurang lebih sebesar 3.166.163 kilometer persegi. Dengan demikian, luas wilayah bertambah, dari 2.027.087 kilometer persegi (daratan) bertambah menjadi 5.193.250 kilometer persegi (darat dan laut).',
				],
				[
					'title' => 'Pelayaran di Ruang Maritim',
					'icon' => 'fa fa-anchor',
					'year' => '2008',
					'body' => 'Terkait dengan kedaulatan maritimnya, Indonesia juga mengatur pelayaran di ruang maritim. Dalam <a class="text-info fw-bold" href="https://peraturan.bpk.go.id/Home/Download/28451/UU%20Nomor%2017%20Tahun%202008.pdf" target="_blank">Undang-Undang Nomor 17 Tahun 2008 tentang Pelayaran</a> Pasal 11 ayat (1) ditegaskan bahwa kegiatan angkutan laut dari dan ke luar negeri dilakukan oleh perusahaan angkutan laut nasional atau perusahaan angkutan laut asing dengan menggunakan kapal berbendera Indonesia atau kapal asing (Pasal 11 UU 17/2008). Sedangkan, ketentuan mengenai kegiatan angkutan laut luar negeri terdapat dalam Peraturan Pemerintah Nomor 31 Tahun 2021 Tentang Penyelenggaraan Bidang Pelayaran.',
				],
			];

			return view('history',[
				"cities" => City::orderBy('id', 'ASC')->get(),
				"marines" => $marines,
				"title" => "Sejarah Maritim Indonesia",
				// "tourisms" => Tourism::orderBy('name', 'ASC')->get(),
				// "testimonials" => Testimonial::orderBy('updated_at', 'DESC')->get(),
			]);
    }

}
