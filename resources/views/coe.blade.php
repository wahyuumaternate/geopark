@extends('layouts.main')

@section('title', 'COE | Geopark Ternate')
@section('meta_description', 'Center of Excellence (COE) Geopark Ternate — pusat riset, edukasi, dan pengembangan kapasitas geowisata berkelanjutan.')

@section('page_bg', 'frontend/gambar/sulamadaha.jpg')
@section('page_title', 'Center of Excellence')

@section('content')

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center pb-4">
                <div class="col-md-9 text-center heading-section ftco-animate">
                    <span class="subheading">Geopark Ternate</span>
                    <h2 class="mb-4">Center of Excellence (COE)</h2>
                    <p>
                        COE Geopark Ternate merupakan pusat unggulan yang berperan dalam riset,
                        edukasi, pelatihan, dan pengembangan kapasitas bagi masyarakat, pelaku
                        wisata, serta akademisi dalam mendukung pengelolaan Geopark Ternate
                        secara berkelanjutan.
                    </p>
                </div>
            </div>

            <div class="row">

                <div class="col-md-4 d-flex ftco-animate">
                    <div class="services services-1 color-1 d-block w-100">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="flaticon-map"></span>
                        </div>
                        <div class="media-body">
                            <h3 class="heading mb-3">Riset & Kajian</h3>
                            <p>Mendukung penelitian geologi, biologi, dan budaya sebagai dasar
                                pengelolaan kawasan berbasis data.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 d-flex ftco-animate">
                    <div class="services services-1 color-2 d-block w-100">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="flaticon-tour-guide"></span>
                        </div>
                        <div class="media-body">
                            <h3 class="heading mb-3">Pelatihan & Edukasi</h3>
                            <p>Menyelenggarakan pelatihan bagi pemandu wisata, pelaku UMKM,
                                dan tenaga pendidik terkait geopark.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 d-flex ftco-animate">
                    <div class="services services-1 color-3 d-block w-100">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="flaticon-route"></span>
                        </div>
                        <div class="media-body">
                            <h3 class="heading mb-3">Kolaborasi</h3>
                            <p>Menjembatani kerja sama dengan perguruan tinggi, lembaga
                                penelitian, dan mitra internasional.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection
