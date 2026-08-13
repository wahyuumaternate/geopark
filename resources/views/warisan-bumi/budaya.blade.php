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
                @forelse ($items as $key => $item)
                    @php
                        $detailUrl = route('warisan-bumi.detail', [
                            'section' => 'budaya',
                            'slug' => $item->slug,
                        ]);
                    @endphp
                    <div class="col-md-4 d-flex ftco-animate mb-4">
                        <div class="blog-entry w-100 d-flex flex-column h-100">
                            <a href="{{ $detailUrl }}" class="block-20"
                                style="background-image: url('{{ $item->image ? asset('storage/' . $item->image) : asset('frontend/gambar/benteng.jpg') }}');">
                            </a>
                            <div class="text p-4 d-flex flex-column h-100">
                                <div>
                                    <div class="d-flex align-items-center mb-4 topp">
                                        <div class="one">
                                            <span class="day">{{ $key + 1 }}</span>
                                        </div>
                                        <div class="two">
                                            <span class="mos">{{ $item->kecamatan ?? $item->lokasi }}</span>
                                        </div>
                                    </div>
                                    <h3 class="heading"><a href="{{ $detailUrl }}">{{ $item->nama }}</a></h3>
                                    <p>{{ Str::limit($item->lokasi, 100) }}</p>
                                </div>
                                <p class="mt-auto mb-0"><a href="{{ $detailUrl }}" class="btn btn-primary">Read more</a>
                                </p>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12 text-center text-muted py-5">
                        Belum ada data warisan budaya.
                    </div>
                @endforelse
            </div>
        </div>
    </section>

@endsection
