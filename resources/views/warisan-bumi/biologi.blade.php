@extends('layouts.main')

@section('title', 'Warisan Biologi | Geopark Ternate')
@section('meta_description', 'Keanekaragaman hayati Geopark Ternate: flora dan fauna endemik yang hidup di lereng Gunung Gamalama hingga kawasan pesisirnya.')

@section('page_bg', 'frontend/gambar/kuso.jpeg')

@section('breadcrumb_parent', 'Warisan Bumi')
@section('breadcrumb_parent_url', url('/warisan-bumi'))
@section('page_title', 'Warisan Biologi')

@section('content')

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center pb-4">
                <div class="col-md-9 text-center heading-section ftco-animate">
                    <span class="subheading">Geopark Ternate</span>
                    <h2 class="mb-4">Keanekaragaman Hayati</h2>
                    <p>
                        Lereng Gunung Gamalama hingga kawasan pesisir Ternate menyimpan
                        keanekaragaman flora dan fauna yang menjadi bagian penting dari
                        warisan biologi Geopark Ternate, sekaligus penopang ekosistem dan
                        kehidupan masyarakat setempat.
                    </p>
                </div>
            </div>

            <div class="row d-flex">

                <div class="col-md-6 d-flex align-items-stretch ftco-animate">
                    <div class="img d-flex w-100 align-items-center justify-content-center"
                        style="background-image:url('{{ asset('frontend/gambar/soya-soya.jpeg') }}');">
                    </div>
                </div>

                <div class="col-md-6 pl-md-5 py-5 ftco-animate">
                    <span class="subheading">Flora & Fauna</span>
                    <h3 class="mb-3">Ekosistem Hutan Gamalama</h3>
                    <p>
                        Kawasan hutan di lereng Gamalama menjadi habitat berbagai jenis
                        vegetasi tropis serta satwa endemik Maluku Utara, termasuk beberapa
                        jenis burung dan kelelawar buah yang berperan penting dalam
                        penyerbukan dan regenerasi hutan.
                    </p>
                    <p>
                        Perlindungan kawasan ini menjadi bagian dari misi konservasi Geopark
                        Ternate agar keseimbangan ekosistem tetap terjaga di tengah
                        pertumbuhan wilayah perkotaan.
                    </p>
                </div>

            </div>

            <div class="row mt-5">

                <div class="col-md-4 d-flex ftco-animate">
                    <div class="services services-1 color-1 d-block w-100">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="flaticon-map"></span>
                        </div>
                        <div class="media-body">
                            <h3 class="heading mb-3">Ekosistem Pesisir</h3>
                            <p>Terumbu karang dan padang lamun di sepanjang pesisir Ternate
                                yang menopang kehidupan biota laut.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 d-flex ftco-animate">
                    <div class="services services-1 color-2 d-block w-100">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="flaticon-tour-guide"></span>
                        </div>
                        <div class="media-body">
                            <h3 class="heading mb-3">Flora Endemik</h3>
                            <p>Beragam tumbuhan khas, termasuk pala dan cengkih yang menjadi
                                bagian sejarah rempah Ternate.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 d-flex ftco-animate">
                    <div class="services services-1 color-3 d-block w-100">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="flaticon-route"></span>
                        </div>
                        <div class="media-body">
                            <h3 class="heading mb-3">Fauna Endemik</h3>
                            <p>Berbagai jenis burung dan satwa liar yang hidup di kawasan
                                hutan lindung lereng Gamalama.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row justify-content-center pb-4">
                <div class="col-md-9 text-center heading-section ftco-animate">
                    <span class="subheading">Geopark Ternate</span>
                    <h2 class="mb-4">Daftar Keanekaragaman Biologi</h2>
                    <p>Contoh spesies dan lokasi penting di wilayah Geopark Ternate yang menunjukkan nilai konservasi dan keunikan warisan biologis.</p>
                </div>
            </div>

            <div class="row d-flex">
                @php
                    $biologis = [
                        [
                            'nama' => 'Kuskus Matabiru (Phalanger matabiru)',
                            'image' => 'kuso.jpeg',
                            'lokasi' => 'Kel. Takome (Ekowisata Pulo Tareba, sisi barat Danau Tolire); juga tercatat di Kulaba & Kelurahan Sasa',
                            'kecamatan' => 'Ternate Barat; Ternate Selatan',
                        ],
                        [
                            'nama' => 'Burung Kasturi/Nuri Ternate (Lorius garrulus)',
                            'image' => 'burung-nuri.png',
                            'lokasi' => 'Kel. Takome Kawasan Danau Tolire (hutan primer/sekunder ke arah barat) dan sekitar Ngade',
                            'kecamatan' => 'Ternate Barat; Ternate Selatan',
                        ],
                        [
                            'nama' => 'Cengkeh (Syzygium aromaticum L)',
                            'image' => 'bg2.jpeg',
                            'lokasi' => 'Kel. Marikurubu (Dusun/Lingkungan Tongole, kompleks Air Tege-tege) — lokasi cengkeh Afo, cengkeh tertua di dunia; juga tersebar luas di kebun-kebun lereng Gamalama',
                            'kecamatan' => 'Ternate Tengah (cengkeh Afo); tersebar juga di Ternate Pulau, Ternate Barat',
                        ],
                        [
                            'nama' => 'Pala (Myristica fragrans)',
                            'image' => 'peta-geopark.jpg',
                            'lokasi' => 'Kel. Marikurubu dan Kel. Foramadiahi (kebun pala-cengkeh di lereng selatan Gamalama)',
                            'kecamatan' => 'Ternate Tengah; Ternate Pulau',
                        ],
                        [
                            'nama' => 'Bunga Telang (Clitoria ternatea)',
                            'image' => 'soya-soya.jpeg',
                            'lokasi' => 'Tumbuh tersebar (liar/budidaya pekarangan) di berbagai kelurahan — tidak ada sentra lokasi spesifik tercatat',
                            'kecamatan' => 'Tersebar di seluruh kecamatan Kota Ternate',
                        ],
                        [
                            'nama' => 'Tanaman Patah Tulang (Euphorbia tirucalli)',
                            'image' => 'peta-geopark.jpg',
                            'lokasi' => 'Kel. Kulaba (Batu Angus) merupakan tanaman asli dan endemik Pulau Ternate. Tanaman ini mudah ditemukan tumbuh liar atau merambat di pekarangan rumah, pagar, pinggiran hutan, dan dekat tepi kali mati di seluruh wilayah Ternate',
                            'kecamatan' => 'Tersebar di seluruh kecamatan Kota Ternate',
                        ],
                    ];
                @endphp

                @foreach ($biologis as $key => $item)
                    <div class="col-md-4 d-flex ftco-animate mb-4">
                        <div class="blog-entry justify-content-end w-100">
                            <a href="#" class="block-20" style="background-image: url('{{ asset('frontend/gambar/' . $item['image']) }}');">
                            </a>
                            <div class="text">
                                <div class="d-flex align-items-center mb-4 topp">
                                    <div class="one">
                                        <span class="day">{{ $key + 1 }}</span>
                                    </div>
                                    <div class="two">
                                        <span class="yr">Biologi</span>
                                        <span class="mos">{{ $item['kecamatan'] }}</span>
                                    </div>
                                </div>
                                <h3 class="heading"><a href="#">{{ $item['nama'] }}</a></h3>
                                <p>{{ $item['lokasi'] }}</p>
                                <p><a href="#" class="btn btn-primary">Read more</a></p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection
