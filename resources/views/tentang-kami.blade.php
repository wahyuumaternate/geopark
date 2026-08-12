@extends('layouts.main')

@section('title', 'Tentang | Geopark Ternate')
@section('meta_description', 'Informasi tentang maksud dan tujuan pengembangan Geopark Ternate.')

@section('page_bg', 'frontend/gambar/benteng-orange.jpg')

{{-- Breadcrumb --}}
@section('breadcrumb_parent', 'Tentang Kami')
@section('breadcrumb_parent_url', url('/tentang-kami'))
@section('page_title', 'Tentang')

@section('content')

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 ftco-animate">

                    {{-- Maksud --}}
                    <div class="mb-5">
                        <h3 class="mb-3">Maksud</h3>

                        <p>
                            Rencana Induk Geopark Ternate disusun sebagai panduan dalam
                            mengembangkan dan mengelola kawasan Geopark Ternate secara
                            terpadu dan berkelanjutan.
                        </p>

                        <p>
                            Rencana ini menjadi arah bersama bagi Pemerintah Kota Ternate,
                            Badan Pengelola Geopark Ternate, masyarakat, komunitas,
                            akademisi, dunia usaha, dan berbagai pihak lainnya dalam
                            menjaga kekayaan alam dan budaya Ternate sekaligus memberikan
                            manfaat bagi masyarakat.
                        </p>

                        <p>
                            Pengembangan Geopark Ternate diarahkan pada keseimbangan antara
                            <strong>konservasi, pendidikan, pariwisata, dan peningkatan
                                ekonomi masyarakat</strong>. Dengan adanya rencana induk ini,
                            setiap program dan kegiatan di kawasan Geopark Ternate dapat
                            berjalan lebih terarah, terintegrasi, dan berkelanjutan.
                        </p>
                    </div>

                    {{-- Tujuan --}}
                    <div class="mb-5">
                        <h3 class="mb-3">Tujuan</h3>

                        <p>
                            Pengembangan Geopark Ternate memiliki beberapa tujuan utama:
                        </p>

                        <div class="row">

                            <div class="col-md-6 mb-4">
                                <div class="p-4 h-100 bg-light rounded">
                                    <h5>
                                        <i class="icon-users mr-2"></i>
                                        Membangun Kolaborasi
                                    </h5>
                                    <p class="mb-0">
                                        Mendorong kerja sama antara pemerintah, masyarakat,
                                        akademisi, dunia usaha, komunitas, dan berbagai
                                        pemangku kepentingan dalam pengembangan Geopark Ternate.
                                    </p>
                                </div>
                            </div>

                            <div class="col-md-6 mb-4">
                                <div class="p-4 h-100 bg-light rounded">
                                    <h5>
                                        <i class="icon-leaf mr-2"></i>
                                        Melestarikan Kekayaan Ternate
                                    </h5>
                                    <p class="mb-0">
                                        Menjaga warisan geologi, keanekaragaman hayati,
                                        serta kekayaan budaya yang menjadi identitas dan
                                        aset penting Geopark Ternate.
                                    </p>
                                </div>
                            </div>

                            <div class="col-md-6 mb-4">
                                <div class="p-4 h-100 bg-light rounded">
                                    <h5>
                                        <i class="icon-globe mr-2"></i>
                                        Pembangunan Berkelanjutan
                                    </h5>
                                    <p class="mb-0">
                                        Mendorong pengembangan program, kegiatan, investasi,
                                        dan pengelolaan kawasan dengan tetap memperhatikan
                                        kelestarian lingkungan dan keberlanjutan.
                                    </p>
                                </div>
                            </div>

                            <div class="col-md-6 mb-4">
                                <div class="p-4 h-100 bg-light rounded">
                                    <h5>
                                        <i class="icon-briefcase mr-2"></i>
                                        Menguatkan Ekonomi Lokal
                                    </h5>
                                    <p class="mb-0">
                                        Mengembangkan pendidikan, penelitian, geowisata,
                                        pemberdayaan masyarakat, serta produk dan usaha
                                        lokal agar manfaat Geopark dapat dirasakan masyarakat.
                                    </p>
                                </div>
                            </div>

                            <div class="col-md-6 mb-4">
                                <div class="p-4 h-100 bg-light rounded">
                                    <h5>
                                        <i class="icon-bar-chart mr-2"></i>
                                        Tata Kelola yang Baik
                                    </h5>
                                    <p class="mb-0">
                                        Mewujudkan pengelolaan Geopark Ternate yang efektif,
                                        kolaboratif, adaptif, dan berkelanjutan sesuai
                                        prinsip pengelolaan Geopark.
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>

                    {{-- Sasaran --}}
                    <div class="mb-5">
                        <h3 class="mb-3">Sasaran</h3>

                        <p>
                            Sasaran utama pengembangan Geopark Ternate adalah terwujudnya
                            kawasan geopark yang dikelola secara terpadu dengan mengutamakan
                            pelestarian alam dan budaya serta memberikan manfaat bagi
                            masyarakat.
                        </p>

                        <p>
                            Melalui perencanaan yang terarah, Geopark Ternate diharapkan
                            dapat menjadi ruang untuk <strong>konservasi, pendidikan,
                                penelitian, geowisata, pemberdayaan masyarakat, dan pengembangan
                                ekonomi lokal</strong>.
                        </p>
                    </div>

                    {{-- Penutup --}}
                    <div class="p-4 rounded" style="background: linear-gradient(135deg, #17a2b8, #17a2b8); color: #fff;">

                        <h4 class="text-white mb-3">
                            Geopark Ternate untuk Masa Depan
                        </h4>

                        <p class="mb-0">
                            Geopark Ternate bukan hanya tentang warisan alam dan budaya,
                            tetapi juga tentang bagaimana kekayaan tersebut dapat dijaga,
                            dipelajari, dinikmati, dan dimanfaatkan secara berkelanjutan
                            untuk generasi sekarang dan yang akan datang.
                        </p>

                    </div>

                </div>
            </div>
        </div>
    </section>

@endsection
