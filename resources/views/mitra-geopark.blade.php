@extends('layouts.main')

@section('title', 'Mitra Geopark | Geopark Ternate')
@section('meta_description', 'Daftar mitra dan pemangku kepentingan yang mendukung pengembangan Geopark Ternate.')

@section('page_bg', 'frontend/gambar/edukasi.jpg')
@section('page_title', 'Mitra Geopark')

@section('content')

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center pb-4">
                <div class="col-md-9 text-center heading-section ftco-animate">
                    <span class="subheading">Geopark Ternate</span>
                    <h2 class="mb-4">Mitra Geopark Ternate</h2>
                    <p>
                        Pengembangan Geopark Ternate melibatkan kolaborasi lintas sektor —
                        pemerintah, akademisi, komunitas, pelaku usaha, hingga lembaga
                        internasional — demi mewujudkan geowisata berkelanjutan.
                    </p>
                </div>
            </div>

            <div class="row">

                <div class="col-md-3 col-6 d-flex align-items-stretch ftco-animate mb-4">
                    <div class="services services-1 color-1 d-block w-100 text-center">
                        <div class="media-body">
                            <h3 class="heading mb-2">Pemerintah</h3>
                            <p>Pemerintah Kota Ternate & Provinsi Maluku Utara</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-6 d-flex align-items-stretch ftco-animate mb-4">
                    <div class="services services-1 color-2 d-block w-100 text-center">
                        <div class="media-body">
                            <h3 class="heading mb-2">Akademisi</h3>
                            <p>Perguruan tinggi dan lembaga riset mitra</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-6 d-flex align-items-stretch ftco-animate mb-4">
                    <div class="services services-1 color-3 d-block w-100 text-center">
                        <div class="media-body">
                            <h3 class="heading mb-2">Komunitas</h3>
                            <p>Komunitas lokal, pemandu wisata, dan Youth Forum</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-6 d-flex align-items-stretch ftco-animate mb-4">
                    <div class="services services-1 color-4 d-block w-100 text-center">
                        <div class="media-body">
                            <h3 class="heading mb-2">Pelaku Usaha</h3>
                            <p>UMKM, sektor pariwisata, dan industri kreatif lokal</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection
