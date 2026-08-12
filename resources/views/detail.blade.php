@extends('layouts.main')

@section('title', 'Detail Informasi | Geopark Ternate')
@section('meta_description', 'Detail informasi Geopark Ternate untuk berita, event, dan youth forum dalam satu halaman ringkas.')

@section('page_bg', 'frontend/gambar/peta-geopark.jpg')
@section('page_title', 'Detail Informasi')

@section('content')

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center pb-4">
                <div class="col-md-9 text-center heading-section ftco-animate">
                    <span class="subheading">Geopark Ternate</span>
                    <h2 class="mb-4">Detail Informasi</h2>
                    <p>Halaman ini menampilkan detail informasi untuk berita, event, atau kegiatan Youth Forum dalam satu tampilan.</p>
                </div>
            </div>

            <div class="row d-flex">
                <div class="col-md-7 ftco-animate">
                    <div class="media d-block mb-4">
                        <div class="img d-flex align-items-end" style="background-image:url('{{ asset('frontend/gambar/batu-angus1.png') }}'); min-height:320px; background-size:cover; background-position:center;"></div>
                    </div>
                    <div class="text pt-4">
                        <p class="text-muted">12 September 2026 | Berita / Events / Youth Forum</p>
                        <h3 class="mb-4">Pelatihan pemandu lokal Geopark Ternate dan program Youth Forum</h3>
                        <p>Geopark Ternate terus mendorong kolaborasi antara komunitas lokal, generasi muda, dan pihak-pihak terkait melalui program pelatihan, event budaya, dan kegiatan Youth Forum.</p>
                        <p>Program ini fokus pada tiga pilar utama: edukasi geologi, pelestarian lingkungan, dan penguatan nilai budaya lokal. Kegiatan mencakup kunjungan lapangan, seminar, serta diskusi bersama pelajar dan mahasiswa.</p>
                        <p>Goal dari halaman detail ini adalah memberikan satu sumber informasi tunggal yang bisa diakses dari menu Berita, Events, atau Youth Forum, sehingga pengguna tetap mendapat pengalaman konsisten.</p>
                        <p><strong>Lokasi:</strong> Ternate, Maluku Utara</p>
                        <p><strong>Jenis:</strong> Informasi Terpadu</p>
                        <p><a href="{{ url('/berita') }}" class="btn btn-primary">Kembali ke Berita</a>
                            <a href="{{ url('/events') }}" class="btn btn-secondary">Kembali ke Events</a>
                            <a href="{{ url('/youth-forum') }}" class="btn btn-info">Kembali ke Youth Forum</a>
                        </p>
                    </div>
                </div>

                <div class="col-md-5 ftco-animate">
                    <div class="bg-white p-4 rounded shadow-sm">
                        <h3 class="mb-4">Ringkasan</h3>
                        <ul class="list-unstyled">
                            <li class="mb-3"><strong>Berita:</strong> update terbaru Geopark Ternate dan perkembangan UNESCO Global Geopark.</li>
                            <li class="mb-3"><strong>Events:</strong> agenda kegiatan konservasi, festival budaya, serta pelatihan geowisata.</li>
                            <li class="mb-3"><strong>Youth Forum:</strong> ruang aksi dan diskusi bagi generasi muda peduli lingkungan dan budaya.</li>
                        </ul>
                        <h3 class="mb-4">Kontak</h3>
                        <p>Untuk informasi lebih detil tentang program, silakan hubungi tim Geopark Ternate.</p>
                        <p class="mb-1"><span class="icon fa fa-phone"></span> +62 921 000 0000</p>
                        <p><span class="icon fa fa-paper-plane"></span> info@ternategeopark.id</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
