@extends('layouts.main')

@section('title', 'Berita | Geopark Ternate')
@section('meta_description', 'Berita terbaru Geopark Ternate tentang konservasi, geosite, kegiatan masyarakat, dan perkembangan UNESCO Global Geopark.')

@section('page_bg', 'frontend/gambar/gamalama.jpeg')
@section('page_title', 'Berita')

@section('content')

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center pb-4">
                <div class="col-md-9 text-center heading-section ftco-animate">
                    <span class="subheading">Geopark Ternate</span>
                    <h2 class="mb-4">Berita Terbaru</h2>
                    <p>Informasi terbaru seputar Geopark Ternate, termasuk kemajuan konservasi, riset geologi, dan aktivitas komunitas lokal.</p>
                </div>
            </div>

            <div class="row d-flex">
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry justify-content-end w-100">
                        <a href="#" class="block-20" style="background-image: url('{{ asset('frontend/gambar/batu-angus1.png') }}');"></a>
                        <div class="text">
                            <div class="d-flex align-items-center mb-4 topp">
                                <div class="one"><span class="day">10</span></div>
                                <div class="two"><span class="yr">2026</span><span class="mos">Agustus</span></div>
                            </div>
                            <h3 class="heading"><a href="{{ url('/detail') }}">Pelatihan pemandu lokal untuk geowisata Ternate</a></h3>
                            <p><a href="{{ url('/detail') }}" class="btn btn-primary">Baca selengkapnya</a></p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry justify-content-end w-100">
                        <a href="#" class="block-20" style="background-image: url('{{ asset('frontend/gambar/peta-geopark.png') }}');"></a>
                        <div class="text">
                            <div class="d-flex align-items-center mb-4 topp">
                                <div class="one"><span class="day">05</span></div>
                                <div class="two"><span class="yr">2026</span><span class="mos">Agustus</span></div>
                            </div>
                            <h3 class="heading"><a href="{{ url('/detail') }}">Geopark Ternate maju di proses UNESCO Global Geopark</a></h3>
                            <p><a href="{{ url('/detail') }}" class="btn btn-primary">Baca selengkapnya</a></p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry w-100">
                        <a href="#" class="block-20" style="background-image: url('{{ asset('frontend/gambar/soya-soya.jpeg') }}');"></a>
                        <div class="text">
                            <div class="d-flex align-items-center mb-4 topp">
                                <div class="one"><span class="day">28</span></div>
                                <div class="two"><span class="yr">2026</span><span class="mos">Juli</span></div>
                            </div>
                            <h3 class="heading"><a href="{{ url('/detail') }}">Komunitas pemuda Ternate gelar aksi bersih pantai</a></h3>
                            <p><a href="{{ url('/detail') }}" class="btn btn-primary">Baca selengkapnya</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
