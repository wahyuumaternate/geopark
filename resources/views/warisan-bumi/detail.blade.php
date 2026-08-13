@extends('layouts.main')

@section('title', $item->nama . ' | Geopark Ternate')
@section('meta_description', 'Detail warisan bumi Geopark Ternate untuk ' . $item->nama . '.')

@section('page_bg', $item->image ? asset('storage/' . $item->image) : asset('frontend/gambar/peta-geopark.jpg'))
@section('breadcrumb_parent', 'Warisan Bumi')
@section('breadcrumb_parent_url', url('/warisan-bumi'))
@section('page_title', $item->nama)

@section('content')
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center pb-4">
                <div class="col-md-9 text-center heading-section ftco-animate">
                    <span class="subheading">{{ $sectionLabel }}</span>
                    <h2 class="mb-4">{{ $item->nama }}</h2>
                    <p>{{ Str::limit(trim(strip_tags($item->deskripsi ?? 'Informasi detail tentang warisan bumi di Geopark Ternate.')), 120) }}
                    </p>
                </div>
            </div>

            <div class="row d-flex">
                <div class="col-md-6 d-flex align-items-stretch ftco-animate">
                    <div class="img d-flex w-100 align-items-center justify-content-center"
                        style="background-image:url('{{ $item->image ? asset('storage/' . $item->image) : asset('frontend/gambar/peta-geopark.jpg') }}'); min-height: 350px; background-size: cover; background-position: center;">
                    </div>
                </div>

                <div class="col-md-6 pl-md-5 py-5 ftco-animate">
                    <div class="bg-white p-4 rounded shadow-sm">
                        <h3 class="mb-4">Detail Lokasi</h3>
                        <p><strong>Nama:</strong> {{ $item->nama }}</p>
                        <p><strong>Lokasi:</strong> {{ $item->lokasi }}</p>
                        @if ($item->kelurahan)
                            <p><strong>Kelurahan:</strong> {{ $item->kelurahan }}</p>
                        @endif
                        @if ($item->kecamatan)
                            <p><strong>Kecamatan:</strong> {{ $item->kecamatan }}</p>
                        @endif
                        @if ($item->kota)
                            <p><strong>Kota:</strong> {{ $item->kota }}</p>
                        @endif
                        @if ($item->jenis)
                            <p><strong>Jenis:</strong> {{ $item->jenis }}</p>
                        @endif
                        @if ($item->x && $item->y)
                            <p><strong>Koordinat:</strong> {{ $item->x }}, {{ $item->y }}</p>
                        @endif
                        <p class="mb-0">
                            <a href="{{ url('/warisan-bumi/' . $section) }}" class="btn btn-primary">
                                Kembali ke {{ $sectionLabel }}
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
