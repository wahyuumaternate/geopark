@extends('layouts.main')

@section('title', 'Warisan Budaya | Geopark Ternate')
@section('meta_description', 'Warisan budaya Geopark Ternate: sejarah Kesultanan Ternate, tradisi rempah, hingga kesenian khas seperti tari Soya-soya dan Lenso.')

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
                    <h3 class="mb-3">Kesultanan Ternate</h3>
                    <p>
                        Benteng Oranje menjadi salah satu peninggalan penting dari masa
                        kolonial dan Kesultanan Ternate, saksi bisu jalur rempah yang pernah
                        menjadikan Ternate rebutan bangsa-bangsa Eropa.
                    </p>
                    <p>
                        Hingga kini, struktur adat dan tradisi Kesultanan Ternate masih
                        dijaga dan menjadi bagian penting dari identitas masyarakat.
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
                        style="background-image:url('{{ asset('frontend/gambar/tari-lenso.jpeg') }}');">
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
                    <p>
                        Kuliner rempah khas Ternate, seperti olahan pala dan cengkih, turut
                        melengkapi kekayaan warisan budaya yang dapat dinikmati wisatawan.
                    </p>
                </div>

            </div>
        </div>
    </section>

@endsection
