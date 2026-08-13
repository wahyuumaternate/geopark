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
                    <h2 class="mb-4">Daftar Geosite Geopark Ternate</h2>
                </div>
            </div>

            <div class="row">
                @forelse ($items as $key => $item)
                    @php
                        $detailUrl = route('warisan-bumi.detail', [
                            'section' => 'geologi',
                            'slug' => $item->slug,
                        ]);
                    @endphp
                    <div class="col-md-4 d-flex ftco-animate mb-4">
                        <div class="blog-entry w-100 d-flex flex-column h-100">
                            <a href="{{ $detailUrl }}" class="block-20"
                                style="background-image: url('{{ $item->image ? asset('storage/' . $item->image) : asset('frontend/gambar/peta-geopark.jpg') }}');">
                            </a>
                            <div class="text p-4 bg-white d-flex flex-column h-100">
                                <div>
                                    <div class="d-flex align-items-center mb-4 topp">
                                        <div class="one">
                                            <span class="day">{{ $key + 1 }}</span>
                                        </div>
                                        <div class="two">
                                            <span class="yr">{{ $item->jenis ?? 'Geosite' }}</span>
                                            <span class="mos">{{ Str::limit($item->lokasi, 30) }}</span>
                                        </div>
                                    </div>
                                    <h3 class="heading"><a href="{{ $detailUrl }}">{{ $item->nama }}</a></h3>
                                    <p>{{ Str::limit(html_entity_decode(strip_tags($item->deskripsi)), 120) }}</p>
                                </div>
                                <p class="mt-auto mb-0"><a href="{{ $detailUrl }}" class="btn btn-primary">Read more</a>
                                </p>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12 text-center text-muted py-5">
                        Belum ada data warisan geologi.
                    </div>
                @endforelse
            </div>
        </div>
    </section>

@endsection
