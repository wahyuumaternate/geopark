```blade
@extends('layouts.main')

@section('title', 'Warisan Geologi | Geopark Ternate')
@section('meta_description', 'Warisan geologi Geopark Ternate yang terbentuk dari aktivitas vulkanik Gunung Gamalama dan
    proses geologi yang membentuk Pulau Ternate.')

@section('page_bg', 'frontend/gambar/kuso.jpeg')

@section('breadcrumb_parent', 'Warisan Bumi')
@section('breadcrumb_parent_url', url('/warisan-bumi'))
@section('page_title', 'Warisan Geologi')

@section('content')

    <section class="ftco-section">
        <div class="container">

            {{-- Intro --}}
            <div class="row justify-content-center pb-4">
                <div class="col-md-9 text-center heading-section ftco-animate">

                    <span class="subheading">Geopark Ternate</span>

                    <h2 class="mb-4">Warisan Geologi</h2>

                    <p>
                        Geopark Ternate memiliki kekayaan geologi yang terbentuk melalui
                        proses vulkanisme dan dinamika alam selama jutaan tahun. Gunung
                        Gamalama sebagai gunung api aktif menjadi salah satu unsur utama
                        yang membentuk bentang alam, batuan, dan karakter Pulau Ternate.
                    </p>

                </div>
            </div>

            {{-- Gunung Gamalama --}}
            <div class="row d-flex">

                <div class="col-md-6 d-flex align-items-stretch ftco-animate">

                    <div class="img d-flex w-100 align-items-center justify-content-center"
                        style="background-image:url('{{ asset('frontend/gambar/gamalama.jpeg') }}');">
                    </div>

                </div>

                <div class="col-md-6 pl-md-5 py-5 ftco-animate">

                    <span class="subheading">Bentang Alam Vulkanik</span>

                    <h3 class="mb-3">Gunung Gamalama</h3>

                    <p>
                        Gunung Gamalama merupakan gunung api yang menjadi bagian penting
                        dari bentang alam Pulau Ternate. Aktivitas vulkaniknya membentuk
                        berbagai karakteristik geologi dan morfologi yang dapat ditemukan
                        mulai dari kawasan puncak hingga wilayah pesisir.
                    </p>

                    <p>
                        Proses erupsi, aliran lava, material vulkanik, serta proses erosi
                        dan pelapukan secara terus-menerus membentuk bentang alam yang
                        menjadi bagian dari kekayaan geologi Geopark Ternate.
                    </p>

                </div>

            </div>

            {{-- Geosite --}}
            <div class="row mt-5">

                <div class="col-md-4 d-flex ftco-animate">

                    <div class="services services-1 color-1 d-block w-100">

                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="flaticon-map"></span>
                        </div>

                        <div class="media-body">

                            <h3 class="heading mb-3">
                                Bentang Alam Vulkanik
                            </h3>

                            <p>
                                Bentang alam Pulau Ternate terbentuk oleh aktivitas
                                vulkanik Gunung Gamalama dan berbagai proses geologi
                                yang berlangsung dari waktu ke waktu.
                            </p>

                        </div>

                    </div>

                </div>


                <div class="col-md-4 d-flex ftco-animate">

                    <div class="services services-1 color-2 d-block w-100">

                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="flaticon-tour-guide"></span>
                        </div>

                        <div class="media-body">

                            <h3 class="heading mb-3">
                                Batuan Vulkanik
                            </h3>

                            <p>
                                Berbagai material dan batuan hasil aktivitas vulkanik
                                menjadi rekaman proses pembentukan Pulau Ternate serta
                                memberikan nilai edukasi bagi pengunjung.
                            </p>

                        </div>

                    </div>

                </div>


                <div class="col-md-4 d-flex ftco-animate">

                    <div class="services services-1 color-3 d-block w-100">

                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="flaticon-route"></span>
                        </div>

                        <div class="media-body">

                            <h3 class="heading mb-3">
                                Pesisir dan Proses Geologi
                            </h3>

                            <p>
                                Kawasan pesisir Ternate memperlihatkan hubungan antara
                                proses vulkanik, erosi, sedimentasi, dan dinamika laut
                                dalam membentuk bentang alam pulau.
                            </p>

                        </div>

                    </div>

                </div>

            </div>

            {{-- Nilai Geologi --}}
            <div class="row justify-content-center mt-5">

                <div class="col-md-10 ftco-animate">

                    <div class="p-4 p-md-5 bg-light">

                        <span class="subheading">
                            Nilai Penting
                        </span>

                        <h3 class="mb-3">
                            Mengenal Sejarah Bumi Melalui Geopark
                        </h3>

                        <p>
                            Warisan geologi Geopark Ternate menjadi ruang untuk mengenal
                            proses alam yang membentuk pulau dan lingkungan di sekitarnya.
                            Keberadaan situs-situs geologi memiliki nilai penting tidak
                            hanya untuk konservasi, tetapi juga untuk pendidikan, penelitian,
                            dan pengembangan geowisata.
                        </p>

                        <p class="mb-0">
                            Melalui pemanfaatan yang bertanggung jawab, warisan geologi
                            dapat menjadi sumber pengetahuan sekaligus memberikan manfaat
                            ekonomi bagi masyarakat tanpa mengabaikan kelestarian lingkungan.
                        </p>

                    </div>

                </div>

            </div>

        </div>
    </section>

@endsection
```
