@extends('layouts.main')

@section('title', 'Youth Forum | Geopark Ternate')
@section('meta_description', 'Berita, agenda kegiatan, dan Youth Forum Geopark Ternate — ruang kolaborasi generasi muda untuk edukasi dan konservasi Geopark Ternate.')

@section('page_bg', 'frontend/gambar/tari-lenso.jpeg')
@section('page_title', 'Youth Forum')

@section('content')

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center pb-4">
                <div class="col-md-9 text-center heading-section ftco-animate">
                    <span class="subheading">Geopark Ternate</span>
                    <h2 class="mb-4">Youth Forum Geopark Ternate</h2>
                    <p>
                        Youth Forum Geopark Ternate adalah ruang kolaborasi generasi muda untuk
                        belajar, berbagi ide, dan bergerak bersama dalam edukasi serta konservasi
                        Geopark Ternate.
                    </p>
                </div>
            </div>

            <div class="row d-flex">

                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry justify-content-end">
                        <a href="{{ url('/detail') }}" class="block-20"
                            style="background-image: url('{{ asset('frontend/images/image_1.jpg') }}');">
                        </a>
                        <div class="text">
                            <div class="d-flex align-items-center mb-4 topp">
                                <div class="one">
                                    <span class="day">11</span>
                                </div>
                                <div class="two">
                                    <span class="yr">2026</span>
                                    <span class="mos">Agustus</span>
                                </div>
                            </div>
                            <h3 class="heading"><a href="{{ url('/detail') }}">Menuju UNESCO Global Geopark, Ini Progres 19 Geosite
                                    Ternate</a></h3>
                            <p><a href="{{ url('/detail') }}" class="btn btn-primary">Baca selengkapnya</a></p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry justify-content-end">
                        <a href="{{ url('/detail') }}" class="block-20"
                            style="background-image: url('{{ asset('frontend/images/image_2.jpg') }}');">
                        </a>
                        <div class="text">
                            <div class="d-flex align-items-center mb-4 topp">
                                <div class="one">
                                    <span class="day">05</span>
                                </div>
                                <div class="two">
                                    <span class="yr">2026</span>
                                    <span class="mos">Agustus</span>
                                </div>
                            </div>
                            <h3 class="heading"><a href="{{ url('/detail') }}">Youth Forum Geopark Ternate Ajak Pelajar Peduli
                                    Lingkungan</a></h3>
                            <p><a href="{{ url('/detail') }}" class="btn btn-primary">Baca selengkapnya</a></p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry">
                        <a href="{{ url('/detail') }}" class="block-20"
                            style="background-image: url('{{ asset('frontend/images/image_3.jpg') }}');">
                        </a>
                        <div class="text">
                            <div class="d-flex align-items-center mb-4 topp">
                                <div class="one">
                                    <span class="day">28</span>
                                </div>
                                <div class="two">
                                    <span class="yr">2026</span>
                                    <span class="mos">Juli</span>
                                </div>
                            </div>
                            <h3 class="heading"><a href="{{ url('/detail') }}">Volcano and Spice Island: Identitas Baru Kota
                                    Ternate</a></h3>
                            <p><a href="{{ url('/detail') }}" class="btn btn-primary">Baca selengkapnya</a></p>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row justify-content-center pt-5">
                <div class="col-md-9 text-center heading-section ftco-animate">
                    <span class="subheading">Youth Forum</span>
                    <h2 class="mb-4">Bergabung Bersama Youth Forum</h2>
                    <p>
                        Youth Forum Geopark Ternate terbuka bagi pelajar, mahasiswa, dan
                        komunitas muda yang ingin terlibat dalam kegiatan edukasi, kampanye
                        lingkungan, serta pengembangan geowisata berkelanjutan.
                    </p>
                    <p>
                        <a href="{{ url('/berita-dan-informasi') }}" class="btn btn-primary py-3 px-4">Hubungi
                            Kami</a>
                    </p>
                </div>
            </div>
        </div>
    </section>

@endsection
