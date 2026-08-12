@extends('layouts.main')

@section('title', 'Badan Pengelola | Geopark Ternate')
@section('meta_description', 'Struktur dan susunan Badan Pengelola Geopark Ternate.')

@section('page_bg', 'frontend/gambar/benteng-orange.jpg')

{{-- breadcrumb bertingkat: Beranda / Tentang Kami / Badan Pengelola --}}
@section('breadcrumb_parent', 'Tentang Kami')
@section('breadcrumb_parent_url', url('/tentang-kami'))
@section('page_title', 'Badan Pengelola')

@section('content')
    <div class="hero-wrap js-fullheight" style="background-image: url('{{ asset('frontend/gambar/tolire1.jpg') }}');">
        <div class="overlay2"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center" data-scrollax-parent="true">
                <div class="col-md-7 ftco-animate">

                    <h1 class="mb-4">Jelajahi Warisan Geologi Pulau Rempah</h1>
                    <p class="caps">Menyusuri jejak vulkanik Gunung Gamalama hingga pesona bahari Kota Ternate, sang
                        Volcano and Spice Island</p>
                </div>
            </div>
        </div>
    </div>
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 ftco-animate">
                    <p>
                        Badan Pengelola Geopark Ternate bertanggung jawab atas pengelolaan,
                        konservasi, dan pengembangan kawasan Geopark Ternate secara berkelanjutan.
                    </p>
                </div>
            </div>
        </div>
    </section>

@endsection
