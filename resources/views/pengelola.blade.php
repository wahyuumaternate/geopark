@extends('layouts.main')

@section('title', 'Badan Pengelola | Geopark Ternate')
@section('meta_description', 'Struktur dan susunan Badan Pengelola Geopark Ternate.')

@section('page_bg', 'frontend/gambar/benteng-orange.jpg')

{{-- breadcrumb bertingkat: Beranda / Tentang Kami / Badan Pengelola --}}
@section('breadcrumb_parent', 'Tentang Kami')
@section('breadcrumb_parent_url', url('/tentang-kami'))
@section('page_title', 'Badan Pengelola')

@section('content')

    <section class="ftco-section">
        <div class="container">
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

            {{-- Apa yang mereka kerjakan --}}
            <div class="row justify-content-center mt-4">
                <div class="col-md-10 ftco-animate">
                    <h3 class="mb-3">Apa Saja yang Dikerjakan Badan Pengelola?</h3>
                    <p>
                        Cakupan kerjanya luas — mulai dari menjaga situs-situs geologi, merawat
                        keanekaragaman hayati, sampai melestarikan budaya lokal. Beberapa hal yang
                        rutin dilakukan antara lain:
                    </p>
                    <ul>
                        <li class="mb-2">Merawat dan menata kawasan di sekitar situs-situs geologi (geosite) bersama para
                            ahli di bidang geologi, biologi, lingkungan, budaya, hingga pariwisata.</li>
                        <li class="mb-2">Memanfaatkan warisan geologi, keragaman hayati, dan budaya secara bertanggung
                            jawab supaya bisa dinikmati terus tanpa merusak.</li>
                        <li class="mb-2">Mengawasi dan mengamankan situs-situs penting dari kerusakan atau ancaman.</li>
                        <li class="mb-2">Menjalankan program konservasi untuk warisan bumi dan budaya.</li>
                        <li class="mb-2">Mendukung kegiatan pendidikan dan penelitian di kawasan geopark.</li>
                        <li class="mb-2">Membantu masyarakat membangun ekonomi lewat produk-produk kreatif lokal.</li>
                        <li class="mb-2">Melestarikan tradisi dan budaya khas Ternate.</li>
                        <li class="mb-2">Mengembangkan destinasi wisata baru di kawasan geopark.</li>
                        <li class="mb-2">Menyiapkan fasilitas dan infrastruktur pendukung wisata.</li>
                        <li class="mb-2">Menyediakan informasi tentang geopark, seperti pusat informasi dan museum, biar
                            pengunjung gampang cari tahu.</li>
                        <li class="mb-2">Membangun kelembagaan yang kuat — dari sumber daya manusia sampai sistem
                            pengelolaannya.</li>
                        <li class="mb-2">Mempromosikan nilai ilmiah geopark untuk wisata, pendidikan, dan riset.</li>
                        <li class="mb-2">Menjalin kerja sama dengan jaringan geopark lain, baik nasional maupun
                            internasional.</li>
                        <li class="mb-2">Melaporkan hasil kerja secara berkala biar semua tetap transparan.</li>
                    </ul>
                </div>
            </div>



        </div>
    </section>

@endsection
