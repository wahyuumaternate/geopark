@extends('layouts.main')

@section('title', 'Badan Pengelola | Geopark Ternate')
@section('meta_description', 'Struktur dan susunan Badan Pengelola Geopark Ternate.')

@section('page_bg', 'frontend/gambar/benteng-orange.jpg')

{{-- Breadcrumb --}}
@section('breadcrumb_parent', 'Tentang Kami')
@section('breadcrumb_parent_url', url('/tentang-kami'))
@section('page_title', 'Badan Pengelola')

@section('content')

    <section class="ftco-section">

        <div class="container">

            {{-- Intro --}}
            <div class="row justify-content-center">
                <div class="col-md-10 ftco-animate">

                    <p>
                        Geopark Ternate nggak berjalan sendiri. Ada Badan Pengelola Geopark
                        Ternate yang dibentuk resmi lewat Peraturan Walikota Ternate Nomor 18.A
                        Tahun 2022, yang bertugas menjaga, mengelola, dan mengembangkan kawasan
                        geopark ini supaya tetap lestari dan bisa dinikmati sampai ke generasi
                        selanjutnya.
                    </p>

                </div>
            </div>


            {{-- Tugas Badan Pengelola --}}
            <div class="row justify-content-center mt-4">

                <div class="col-md-10 ftco-animate">

                    <h3 class="mb-3">
                        Apa Saja yang Dikerjakan Badan Pengelola?
                    </h3>

                    <p>
                        Cakupan kerjanya luas — mulai dari menjaga situs-situs geologi,
                        merawat keanekaragaman hayati, sampai melestarikan budaya lokal.
                        Beberapa hal yang rutin dilakukan antara lain:
                    </p>

                    <ul>

                        <li class="mb-2">
                            Merawat dan menata kawasan di sekitar situs-situs geologi
                            (geosite) bersama para ahli di bidang geologi, biologi,
                            lingkungan, budaya, hingga pariwisata.
                        </li>

                        <li class="mb-2">
                            Memanfaatkan warisan geologi, keragaman hayati, dan budaya
                            secara bertanggung jawab supaya bisa dinikmati terus tanpa merusak.
                        </li>

                        <li class="mb-2">
                            Mengawasi dan mengamankan situs-situs penting dari kerusakan
                            atau ancaman.
                        </li>

                        <li class="mb-2">
                            Menjalankan program konservasi untuk warisan bumi dan budaya.
                        </li>

                        <li class="mb-2">
                            Mendukung kegiatan pendidikan dan penelitian di kawasan geopark.
                        </li>

                        <li class="mb-2">
                            Membantu masyarakat membangun ekonomi lewat produk-produk kreatif lokal.
                        </li>

                        <li class="mb-2">
                            Melestarikan tradisi dan budaya khas Ternate.
                        </li>

                        <li class="mb-2">
                            Mengembangkan destinasi wisata baru di kawasan geopark.
                        </li>

                        <li class="mb-2">
                            Menyiapkan fasilitas dan infrastruktur pendukung wisata.
                        </li>

                        <li class="mb-2">
                            Menyediakan informasi tentang geopark, seperti pusat informasi
                            dan museum, agar pengunjung mudah mendapatkan informasi.
                        </li>

                        <li class="mb-2">
                            Membangun kelembagaan yang kuat, mulai dari sumber daya manusia
                            hingga sistem pengelolaannya.
                        </li>

                        <li class="mb-2">
                            Mempromosikan nilai ilmiah geopark untuk wisata, pendidikan,
                            dan penelitian.
                        </li>

                        <li class="mb-2">
                            Menjalin kerja sama dengan jaringan geopark lain, baik nasional
                            maupun internasional.
                        </li>

                        <li class="mb-2">
                            Melaporkan hasil kerja secara berkala agar pengelolaan tetap
                            transparan.
                        </li>

                    </ul>

                </div>

            </div>


            {{-- ================================================== --}}
            {{-- STRUKTUR ORGANISASI --}}
            {{-- ================================================== --}}

            <div class="row justify-content-center mt-5">

                <div class="col-md-12 ftco-animate">

                    <div class="text-center mb-4">

                        <span class="subheading">
                            Badan Pengelola Geopark Ternate
                        </span>

                        <h3 class="mb-3">
                            Struktur Organisasi
                        </h3>

                        <p class="text-muted">
                            Struktur organisasi Badan Pengelola Geopark Ternate
                            dalam menjalankan fungsi pengelolaan kawasan geopark.
                        </p>

                    </div>


                    {{-- SVG --}}
                    <div class="struktur-organisasi-wrapper text-center">

                        <img src="{{ asset('struktur-organisasi-geopark.svg') }}"
                            alt="Struktur Organisasi Badan Pengelola Geopark Ternate"
                            class="img-fluid struktur-organisasi-svg">

                    </div>

                </div>

            </div>

        </div>

    </section>


    {{-- CSS khusus struktur organisasi --}}
    <style>
        .struktur-organisasi-wrapper {
            width: 100%;
            padding: 20px 0;
            overflow-x: auto;
        }

        .struktur-organisasi-svg {
            width: 50%;
            max-width: 1000px;
            height: auto;
            display: inline-block;
        }

        @media (max-width: 768px) {

            .struktur-organisasi-wrapper {
                padding: 10px 0;
            }

            .struktur-organisasi-svg {
                width: 350px;
                max-width: none;
            }

        }
    </style>

@endsection
