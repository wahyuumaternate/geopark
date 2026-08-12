@extends('layouts.main')

@section('title', 'Warisan Budaya | Geopark Ternate')
@section('meta_description',
    'Warisan budaya Geopark Ternate: sejarah Kesultanan Ternate, tradisi rempah, hingga
    kesenian khas seperti tari Soya-soya dan Lenso.')

@section('page_bg', 'frontend/gambar/benteng-orange.jpg')

@section('breadcrumb_parent', 'Warisan Bumi')
@section('breadcrumb_parent_url', url('/warisan-bumi'))
@section('page_title', 'Warisan Budaya')

@section('content')

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center pb-4">
                <div class="col-md-9 text-center heading-section ftco-animate">
                    <span class="subheading">Geopark Ternate</span>
                    <h2 class="mb-4">Warisan Budaya Kota Rempah</h2>
                    <p>
                        Ternate dikenal sebagai pusat Kesultanan Ternate dan Kota Rempah yang
                        memainkan peran penting dalam sejarah perdagangan dunia. Warisan
                        budaya ini hidup berdampingan dengan warisan geologi dan biologi
                        sebagai satu kesatuan identitas Geopark Ternate.
                    </p>
                </div>
            </div>

            <div class="row d-flex">

                <div class="col-md-6 pr-md-5 py-5 order-md-first ftco-animate">
                    <span class="subheading">Sejarah</span>
                    <h3 class="mb-3">Benteng Oranje</h3>
                    <p>
                        Benteng Oranje merupakan salah satu bangunan bersejarah yang menjadi bagian penting dari perjalanan
                        Kota Ternate. Benteng ini berdiri sebagai saksi perkembangan Ternate pada masa perdagangan
                        rempah-rempah, ketika wilayah Maluku Utara memiliki posisi strategis dalam jalur perdagangan dunia.
                    </p>
                    {{-- <p>
                        Keberadaan Benteng Oranje hingga saat ini memperlihatkan jejak sejarah pertahanan, perdagangan, dan
                        hubungan Ternate dengan berbagai bangsa yang datang ke kawasan Maluku. Benteng ini menjadi salah
                        satu peninggalan bersejarah yang memperkaya nilai budaya dan sejarah Kota Ternate.
                    </p> --}}

                </div>

                <div class="col-md-6 d-flex align-items-stretch order-md-last ftco-animate">
                    <div class="img d-flex w-100 align-items-center justify-content-center"
                        style="background-image:url('{{ asset('frontend/gambar/benteng-orange.jpg') }}');">
                    </div>
                </div>

            </div>

            <div class="row d-flex mt-5">

                <div class="col-md-6 d-flex align-items-stretch ftco-animate">
                    <div class="img d-flex w-100 align-items-center justify-content-center"
                        style="background-image:url('{{ asset('frontend/gambar/soya-soya.png') }}');">
                    </div>
                </div>

                <div class="col-md-6 pl-md-5 py-5 ftco-animate">
                    <span class="subheading">Kesenian</span>
                    <h3 class="mb-3">Tari Soya-soya & Tari Lenso</h3>
                    <p>
                        Tari Soya-soya menggambarkan semangat juang masyarakat Ternate,
                        sementara Tari Lenso menjadi simbol keramahan dalam menyambut tamu.
                        Kedua kesenian ini rutin ditampilkan dalam berbagai acara adat dan
                        kunjungan wisata budaya.
                    </p>
                    {{-- <p>
                        Kuliner rempah khas Ternate, seperti olahan pala dan cengkih, turut
                        melengkapi kekayaan warisan budaya yang dapat dinikmati wisatawan.
                    </p> --}}
                </div>

            </div>
        </div>
    </section>

    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row justify-content-center pb-4">
                <div class="col-md-9 text-center heading-section ftco-animate">
                    <span class="subheading">Geopark Ternate</span>
                    <h2 class="mb-4">Daftar Warisan Budaya</h2>
                    <p>Temukan warisan benda dan tak benda Geopark Ternate yang tersebar di berbagai kelurahan.</p>
                </div>
            </div>

            <div class="row d-flex">
                @php
                    $budayas = [
                        [
                            'nama' => 'Benteng Kastela',
                            'image' => 'benteng.jpg',
                            'lokasi' => 'Kel. Kastela',
                            'kecamatan' => 'Pulau Ternate',
                            'jenis' => 'Benda',
                        ],
                        [
                            'nama' => 'Benteng Fuerza Nueva',
                            'image' => 'benteng.jpg',
                            'lokasi' => 'Kel. Kastela',
                            'kecamatan' => 'Pulau Ternate',
                            'jenis' => 'Benda',
                        ],
                        [
                            'nama' => 'Benteng Kota Janji',
                            'image' => 'benteng.jpg',
                            'lokasi' => 'Kel. Kalumata / Ngade',
                            'kecamatan' => 'Ternate Selatan',
                            'jenis' => 'Benda',
                        ],
                        [
                            'nama' => 'Benteng Kalamata',
                            'image' => 'benteng.jpg',
                            'lokasi' => 'Kel. Kayu Merah',
                            'kecamatan' => 'Ternate Selatan',
                            'jenis' => 'Benda',
                        ],
                        [
                            'nama' => 'Benteng Talangame',
                            'image' => 'benteng.jpg',
                            'lokasi' => 'Sebutan lain/lokasi asal Benteng Kalamata',
                            'kecamatan' => 'Ternate Selatan',
                            'jenis' => 'Benda',
                        ],
                        [
                            'nama' => 'Benteng Callaboeka',
                            'image' => 'benteng.jpg',
                            'lokasi' => 'Kel. Sangaji (dekat Benteng Toloko)',
                            'kecamatan' => 'Ternate Utara',
                            'jenis' => 'Benda',
                        ],
                        [
                            'nama' => 'Benteng Voorbrught',
                            'image' => 'benteng.jpg',
                            'lokasi' => 'Area Benteng Oranje',
                            'kecamatan' => 'Ternate Tengah',
                            'jenis' => 'Benda',
                        ],
                        [
                            'nama' => 'Benteng Oranje',
                            'image' => 'benteng-orange.jpg',
                            'lokasi' => 'Kel. Gamalama',
                            'kecamatan' => 'Ternate Tengah',
                            'jenis' => 'Benda',
                        ],
                        [
                            'nama' => 'Kedaton Kesultanan',
                            'image' => 'peta-geopark.jpg',
                            'lokasi' => 'Kel. Salero',
                            'kecamatan' => 'Ternate Utara',
                            'jenis' => 'Benda',
                        ],
                        [
                            'nama' => 'Benteng Kotanaka',
                            'image' => 'benteng.jpg',
                            'lokasi' => 'Benteng Sentosa (samping Kedaton Sultan)',
                            'kecamatan' => 'Ternate Utara',
                            'jenis' => 'Benda',
                        ],
                        [
                            'nama' => 'Benteng Toloko',
                            'image' => 'benteng.jpg',
                            'lokasi' => 'Kel. Sangaji Utara',
                            'kecamatan' => 'Ternate Utara',
                            'jenis' => 'Benda',
                        ],
                        [
                            'nama' => 'Benteng Willemstad',
                            'image' => 'benteng.jpg',
                            'lokasi' => 'Benteng Takome, Kel. Takome',
                            'kecamatan' => 'Barat Laut Ternate / Pulau Ternate',
                            'jenis' => 'Benda',
                        ],
                        [
                            'nama' => 'Klenteng Thian Hou Kiong',
                            'image' => 'peta-geopark.jpg',
                            'lokasi' => 'Kel. Gamalama',
                            'kecamatan' => 'Ternate Tengah',
                            'jenis' => 'Benda',
                        ],
                        [
                            'nama' => 'Gereja St. Willibrordus',
                            'image' => 'peta-geopark.jpg',
                            'lokasi' => 'Kel. Tanah Raja',
                            'kecamatan' => 'Ternate Tengah',
                            'jenis' => 'Benda',
                        ],
                        [
                            'nama' => 'Mesjid Sultan',
                            'image' => 'peta-geopark.jpg',
                            'lokasi' => 'Sigi Lamo, Kel. Soa Sio',
                            'kecamatan' => 'Ternate Utara',
                            'jenis' => 'Benda',
                        ],
                        [
                            'nama' => 'Kuburan Keramat/ Jere Kulaba',
                            'image' => 'peta-geopark.jpg',
                            'lokasi' => 'Kel. Kulaba',
                            'kecamatan' => 'Ternate Barat',
                            'jenis' => 'Benda',
                        ],
                        [
                            'nama' => 'Ritual Uci Dowong',
                            'image' => 'tari-lenso.jpeg',
                            'lokasi' => 'Kel. Sulamadaha',
                            'kecamatan' => 'Ternate Barat',
                            'jenis' => 'Tak Benda - Ritual/ Tradisi',
                        ],
                        [
                            'nama' => 'Ritual Kololi Kie Mote Ngolo',
                            'image' => 'peta-geopark.jpg',
                            'lokasi' => 'Kel. Salero',
                            'kecamatan' => 'Ternate Utara',
                            'jenis' => 'Tak Benda - Ritual/ Tradisi',
                        ],
                        [
                            'nama' => 'Tradisi Ela-Ela',
                            'image' => 'peta-geopark.jpg',
                            'lokasi' => 'Kedaton Kesultanan Ternate Kel. Salero',
                            'kecamatan' => 'Ternate Utara',
                            'jenis' => 'Tak Benda - Ritual/ Tradisi',
                        ],
                        [
                            'nama' => 'Tradisi Ziarah Jere',
                            'image' => 'peta-geopark.jpg',
                            'lokasi' => 'Kel. Kulaba',
                            'kecamatan' => 'Ternate Barat',
                            'jenis' => 'Tak Benda - Ritual/ Tradisi',
                        ],
                        [
                            'nama' => 'Upacara Joko Kaha',
                            'image' => 'peta-geopark.jpg',
                            'lokasi' => 'Kedaton Kesultanan Ternate Kel. Salero',
                            'kecamatan' => 'Ternate Utara',
                            'jenis' => 'Tak Benda - Ritual/ Tradisi',
                        ],
                        [
                            'nama' => 'Tari Soya-Soya',
                            'image' => 'soya-soya.jpeg',
                            'lokasi' => 'Panggung Sunyie Lamo Lapangan Ngara Lamo Kel. Soa-Sio',
                            'kecamatan' => 'Ternate Utara',
                            'jenis' => 'Tak Benda - Tarian',
                        ],
                        [
                            'nama' => 'Tari Tide-Tide',
                            'image' => 'benteng-orange.jpg',
                            'lokasi' => 'Panggung Pertunjukan Batu Angus Kel. Kulaba',
                            'kecamatan' => 'Ternate Barat',
                            'jenis' => 'Tak Benda - Tarian',
                        ],
                        [
                            'nama' => 'Tari Salai Jin',
                            'image' => 'peta-geopark.jpg',
                            'lokasi' => 'Kedaton Kesultanan Ternate Kel. Salero',
                            'kecamatan' => 'Ternate Utara',
                            'jenis' => 'Tak Benda - Tarian',
                        ],
                        [
                            'nama' => 'Tari Lalayon',
                            'image' => 'tari-lenso.jpeg',
                            'lokasi' => 'Pendopo Benteng Fort Oranje Kel. Gamalama',
                            'kecamatan' => 'Ternate Tengah',
                            'jenis' => 'Tak Benda - Tarian',
                        ],
                    ];
                @endphp

                @foreach ($budayas as $key => $item)
                    @php
                        $detailUrl = route('warisan-bumi.detail', [
                            'section' => 'budaya',
                            'slug' => \Illuminate\Support\Str::slug($item['nama']),
                        ]);
                    @endphp
                    <div class="col-md-4 d-flex ftco-animate mb-4">
                        <div class="blog-entry justify-content-end w-100">
                            <a href="{{ $detailUrl }}" class="block-20"
                                style="background-image: url('{{ asset('frontend/gambar/' . $item['image']) }}');">
                            </a>
                            <div class="text">
                                <div class="d-flex align-items-center mb-4 topp">
                                    <div class="one">
                                        <span class="day">{{ $key + 1 }}</span>
                                    </div>
                                    <div class="two">
                                        <span class="yr">{{ $item['jenis'] }}</span>
                                        <span class="mos">{{ $item['kecamatan'] }}</span>
                                    </div>
                                </div>
                                <h3 class="heading"><a href="{{ $detailUrl }}">{{ $item['nama'] }}</a></h3>
                                <p>{{ $item['lokasi'] }}</p>
                                <p><a href="{{ $detailUrl }}" class="btn btn-primary">Read more</a></p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection
