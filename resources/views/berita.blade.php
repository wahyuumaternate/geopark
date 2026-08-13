@extends('layouts.main')

@section('title', 'Berita | Geopark Ternate')
@section('meta_description', 'Berita terbaru Geopark Ternate tentang konservasi, geosite, kegiatan masyarakat, dan perkembangan UNESCO Global Geopark.')

@section('page_bg', 'frontend/gambar/gamalama.jpeg')
@section('page_title', 'Berita')

@section('content')

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center pb-4">
                <div class="col-md-9 text-center heading-section ftco-animate">
                    <span class="subheading">Geopark Ternate</span>
                    <h2 class="mb-4">Berita Terbaru</h2>
                    <p>Informasi terbaru seputar Geopark Ternate, termasuk kemajuan konservasi, riset geologi, dan aktivitas komunitas lokal.</p>
                </div>
            </div>

            <div class="row d-flex">
                @forelse ($items as $item)
                    <div class="col-md-4 d-flex ftco-animate">
                        <div class="blog-entry justify-content-end w-100">
                            <a href="{{ route('informasi.show', $item) }}" class="block-20"
                                style="background-image: url('{{ $item->gambar ? asset('storage/' . $item->gambar) : asset('frontend/gambar/gamalama.jpeg') }}');"></a>
                            <div class="text">
                                <div class="d-flex align-items-center mb-4 topp">
                                    <div class="one"><span class="day">{{ $item->diterbitkan_pada->format('d') }}</span></div>
                                    <div class="two">
                                        <span class="yr">{{ $item->diterbitkan_pada->format('Y') }}</span>
                                        <span class="mos">{{ $item->diterbitkan_pada->translatedFormat('F') }}</span>
                                    </div>
                                </div>
                                <h3 class="heading"><a href="{{ route('informasi.show', $item) }}">{{ $item->judul }}</a></h3>
                                <p><a href="{{ route('informasi.show', $item) }}" class="btn btn-primary">Baca selengkapnya</a></p>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12 text-center text-muted py-5">
                        Belum ada berita yang diterbitkan.
                    </div>
                @endforelse
            </div>
        </div>
    </section>

@endsection