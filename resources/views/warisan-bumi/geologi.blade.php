@extends('layouts.main')

@section('title', 'Warisan Geologi | Geopark Ternate')
@section('meta_description',
    'Warisan geologi Geopark Ternate: 19 geosite gunung api Ternate, mulai dari aliran lava,
    maar, tebing breksi, hingga endapan paleotsunami.')

@section('page_bg', 'frontend/gambar/batu-angus.jpg')

@section('breadcrumb_parent', 'Warisan Bumi')
@section('breadcrumb_parent_url', url('/warisan-bumi'))
@section('page_title', 'Warisan Geologi')

@section('content')

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center pb-4">
                <div class="col-md-9 text-center heading-section ftco-animate">
                    <span class="subheading">Geopark Ternate</span>
                    <h2 class="mb-4">Warisan Geologi Gunung Api Ternate</h2>
                    <p>
                        Pulau Ternate terbentuk dari aktivitas Gunung Api Gamalama yang
                        hingga kini masih aktif. Jejak letusan dari berbagai periode
                        meninggalkan bentang alam vulkanik yang khas, mulai dari aliran
                        lava, maar, tebing breksi, hingga endapan piroklastik dan
                        paleotsunami. Keragaman geologi ini tersebar di 19 geosite yang
                        menjadi bagian penting dari Geopark Ternate.
                    </p>
                </div>
            </div>

            <div class="row d-flex">

                <div class="col-md-6 pr-md-5 py-5 order-md-first ftco-animate">
                    <span class="subheading">Vulkanologi</span>
                    <h3 class="mb-3">Jejak Letusan Gamalama</h3>
                    <p>
                        Beberapa geosite di Ternate merekam jejak letusan besar Gunung
                        Gamalama, seperti aliran lava erupsi tahun 1907 di Tubo, erupsi
                        1737 di Batu Angus, dan erupsi 1763 yang tersingkap di Pantai
                        Masirete dan Pantai Jikomalomo. Struktur lava pahoehoe di
                        Sulamadaha juga menjadi bukti karakter erupsi efusif gunung ini.
                    </p>

                </div>

                <div class="col-md-6 d-flex align-items-stretch order-md-last ftco-animate">
                    <div class="img d-flex w-100 align-items-center justify-content-center"
                        style="background-image:url('{{ asset('frontend/gambar/batuangus.png') }}');">
                    </div>
                </div>

            </div>

            <div class="row d-flex mt-5">

                <div class="col-md-6 d-flex align-items-stretch ftco-animate">
                    <div class="img d-flex w-100 align-items-center justify-content-center"
                        style="background-image:url('{{ asset('frontend/gambar/tolire1.jpg') }}');">
                    </div>
                </div>

                <div class="col-md-6 pl-md-5 py-5 ftco-animate">
                    <span class="subheading">Bentang Alam</span>
                    <h3 class="mb-3">Maar, Tebing, dan Endapan Purba</h3>
                    <p>
                        Formasi unik lainnya meliputi Maar Tolire yang legendaris,
                        tebing breksi di Togafo, endapan paleotsunami di Loto, hingga
                        singkapan ketidakselarasan dan kekar lembar di kawasan Sasa. Di
                        Pulau Hiri, keberadaan lava Mujiumajiko dan ignimbrit Gurabala
                        Tomajiko melengkapi catatan sejarah vulkanik kawasan ini.
                    </p>

                </div>

            </div>
        </div>
    </section>

    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row justify-content-center pb-4">
                <div class="col-md-9 text-center heading-section ftco-animate">
                    <span class="subheading">Data Geosite</span>
                    <h2 class="mb-4">Daftar 19 Geosite Geopark Ternate</h2>
                </div>
            </div>

            <div class="row">
                @php
                    $geosites = [
                        [
                            'nama' => 'Lava Erupsi 1907 Tubo',
                            'image' => 'tubo.jpg',
                            'lokasi' => 'Kelurahan Tubo, Ternate Utara, Kota Ternate',
                            'deskripsi' =>
                                'Sisa aliran lava dari letusan 1907 yang masih menampilkan struktur basaltik keras dan lapisan lava beku.',
                        ],
                        [
                            'nama' => 'Lava Erupsi 1737 Batu Angus',
                            'image' => 'batuangus.png',
                            'lokasi' => 'Kelurahan Kulaba, Ternate Barat, Kota Ternate',
                            'deskripsi' =>
                                'Singkapan lava dan tufa hasil letusan besar 1737, nama Batu Angus muncul karena warna hitam pekat yang terbakar.',
                        ],
                        [
                            'nama' => 'Teras Pantai Tobololo',
                            'image' => 'peta-geopark.jpg',
                            'lokasi' => 'Kelurahan Tobololo, Ternate Barat, Kota Ternate',
                            'deskripsi' =>
                                'Formasi teras pantai yang terbentuk dari kombinasi endapan volkanik dan gerusan laut, mencerminkan dinamika geologi pesisir.',
                        ],
                        [
                            'nama' => 'Lava Erupsi 1763 Pantai Masirete',
                            'image' => 'sulamadaha.jpg',
                            'lokasi' => 'Kelurahan Sulamadaha, Ternate Barat, Kota Ternate',
                            'deskripsi' =>
                                'Aliran lava tua dari letusan 1763 yang mengubah morfologi pantai Masirete menjadi hamparan batuan vulkanik.',
                        ],
                        [
                            'nama' => 'Lava Pahoehoe Sulamadaha',
                            'image' => 'sulamadaha.jpg',
                            'lokasi' => 'Kelurahan Sulamadaha, Ternate Barat, Kota Ternate',
                            'deskripsi' =>
                                'Permukaan lava halus pahoehoe yang khas, menunjukkan aliran magma yang relatif lama dan efusif.',
                        ],
                        [
                            'nama' => 'Lava Erupsi 1763 Pantai Jikomalomo',
                            'image' => 'peta-geopark.jpg',
                            'lokasi' => 'Kelurahan Takome, Ternate Barat, Kota Ternate',
                            'deskripsi' =>
                                'Endapan lava dan material vulkanik dari erupsi 1763 yang masih terlihat di garis pantai barat.',
                        ],
                        [
                            'nama' => 'Maar Tolire',
                            'image' => 'tolire1.jpg',
                            'lokasi' => 'Kelurahan Takome, Ternate Barat, Kota Ternate',
                            'deskripsi' =>
                                'Kawah maar freatomagmatik yang terisi air, terkenal dengan legenda lokal dan nilai ilmiah sebagai situs letusan air-magma.',
                        ],
                        [
                            'nama' => 'Endapan Paleotsunami Loto',
                            'image' => 'peta-geopark.jpg',
                            'lokasi' => 'Kelurahan Loto, Ternate Barat, Kota Ternate',
                            'deskripsi' =>
                                'Lapisan sedimen pantai yang menunjukkan jejak tsunami purba, penting untuk memahami sejarah bencana geologi.',
                        ],
                        [
                            'nama' => 'Tebing Breksi Togafo',
                            'image' => 'benteng.jpg',
                            'lokasi' => 'Kelurahan Togafo, Ternate Barat, Kota Ternate',
                            'deskripsi' =>
                                'Tebing breksi vulkanik dengan fragmen batuan beragam, merekam ledakan kuat dari aktivitas magmatik masa lalu.',
                        ],
                        [
                            'nama' => 'Endapan Piroklastik Bukit Afe Taduma',
                            'image' => 'peta-geopark.jpg',
                            'lokasi' => 'Kelurahan Afe Taduma, Pulau Ternate, Kota Ternate',
                            'deskripsi' =>
                                'Lapisan piroklastik tebal yang tersusun dari abu panas dan bongkah batu, bukti runtuhan awan panas masa lalu.',
                        ],
                        [
                            'nama' => 'Endapan Lahar Kastela',
                            'image' => 'peta-geopark.jpg',
                            'lokasi' => 'Kelurahan Kastela, Pulau Ternate, Kota Ternate',
                            'deskripsi' =>
                                'Areal lahar yang terbentuk saat aliran material vulkanik bercampur air, mengalir sampai pesisir dan mengubah lanskap.',
                        ],
                        [
                            'nama' => 'Sumbat Lava Foramadiahi',
                            'image' => 'peta-geopark.jpg',
                            'lokasi' => 'Kelurahan Foramadiahi, Pulau Ternate, Kota Ternate',
                            'deskripsi' =>
                                'Sumbat lava yang mengisi saluran magma dan kemudian terangkat, memperlihatkan proses intrusi magmatik.',
                        ],
                        [
                            'nama' => 'Kekar Lembar Sasa',
                            'image' => 'peta-geopark.jpg',
                            'lokasi' => 'Kelurahan Sasa, Ternate Selatan, Kota Ternate',
                            'deskripsi' =>
                                'Kekar lembar pada lava yang tergores dan terpisah, menunjukkan pendinginan cepat dan kontraksi batuan.',
                        ],
                        [
                            'nama' => 'Ketidakselarasan Sasa',
                            'image' => 'peta-geopark.jpg',
                            'lokasi' => 'Kelurahan Sasa, Ternate Selatan, Kota Ternate',
                            'deskripsi' =>
                                'Singkapan ketidakselarasan stratigrafi yang mengindikasikan perubahan lingkungan pengendapan sejak masa lalu.',
                        ],
                        [
                            'nama' => 'Lapisan Batuapung Fitu',
                            'image' => 'peta-geopark.jpg',
                            'lokasi' => 'Kelurahan Fitu, Ternate Selatan, Kota Ternate',
                            'deskripsi' =>
                                'Lapisan batuapung yang menunjukkan letusan eksplosif, biasanya terbentuk dari abu dan fragmen ringan.',
                        ],
                        [
                            'nama' => 'Maar Ngade',
                            'image' => 'ngade.jpg',
                            'lokasi' => 'Kelurahan Ngade, Ternate Selatan, Kota Ternate',
                            'deskripsi' =>
                                'Kawah maar dangkal dengan karakter freatomagmatik, terbentuk oleh kontak antara air tanah dan magma.',
                        ],
                        [
                            'nama' => 'Endapan Freatomagmatik Kalumata',
                            'image' => 'peta-geopark.jpg',
                            'lokasi' => 'Kelurahan Kalumata, Ternate Selatan, Kota Ternate',
                            'deskripsi' =>
                                'Deposit freatomagmatik kaya akan fragmen kaca vulkanik dan pasir, bukti kontak letusan antara air dan magma.',
                        ],
                        [
                            'nama' => 'Lava Mujiumajiko',
                            'image' => 'peta-geopark.jpg',
                            'lokasi' => 'Kelurahan Faudu, Pulau Hiri, Kota Ternate',
                            'deskripsi' =>
                                'Aliran lava tua di Pulau Hiri, menunjukkan ekspansi aktivitas vulkanik luar Pulau Ternate utama.',
                        ],
                        [
                            'nama' => 'Ignimbrite Gurabala Tomajiko',
                            'image' => 'peta-geopark.jpg',
                            'lokasi' => 'Kelurahan Tomajiko, Pulau Hiri, Kota Ternate',
                            'deskripsi' =>
                                'Lapisan ignimbrite tebal dari runtuhan awan panas vulkanik, merekam aliran material panas yang luas.',
                        ],
                    ];
                @endphp

                @foreach ($geosites as $key => $geosite)
                    @php
                        $detailUrl = route('warisan-bumi.detail', [
                            'section' => 'geologi',
                            'slug' => \Illuminate\Support\Str::slug($geosite['nama']),
                        ]);
                    @endphp
                    <div class="col-md-4 d-flex ftco-animate mb-4">
                        <div class="blog-entry justify-content-end w-100">
                            <a href="{{ $detailUrl }}" class="block-20"
                                style="background-image: url('{{ asset('frontend/gambar/' . $geosite['image']) }}');">
                            </a>
                            <div class="text p-4 bg-white">
                                <div class="d-flex align-items-center mb-4 topp">
                                    <div class="one">
                                        <span class="day">{{ $key + 1 }}</span>
                                    </div>
                                    <div class="two">
                                        <span class="yr">Geosite</span>
                                        <span class="mos">{{ $geosite['lokasi'] }}</span>
                                    </div>
                                </div>
                                <h3 class="heading"><a href="{{ $detailUrl }}">{{ $geosite['nama'] }}</a></h3>
                                <p>{{ $geosite['deskripsi'] }}</p>
                                <p><a href="{{ $detailUrl }}" class="btn btn-primary">Read more</a></p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection
