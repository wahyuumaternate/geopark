@extends('layouts.main')

@section('title', 'Peraturan | Geopark Ternate')
@section('meta_description', 'Unduh peraturan dan regulasi terkait pengelolaan Geopark Ternate.')

@section('page_bg', 'frontend/gambar/ngade.jpg')

@section('breadcrumb_parent', 'Unduh')
@section('breadcrumb_parent_url', url('/unduh'))
@section('page_title', 'Peraturan')

@section('content')

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center pb-4">
                <div class="col-md-9 text-center heading-section ftco-animate">
                    <span class="subheading">Unduh</span>
                    <h2 class="mb-4">Peraturan Geopark Ternate</h2>
                    <p>Peraturan daerah dan regulasi lain yang menjadi dasar hukum pengelolaan Geopark Ternate.</p>
                </div>
            </div>

            <div class="row justify-content-center ftco-animate">
                <div class="col-md-10">
                    <table class="table table-hover bg-white">
                        <thead>
                            <tr>
                                <th style="width: 60px;">No</th>
                                <th>Nama Peraturan</th>
                                <th style="width: 120px;">Tahun</th>
                                <th style="width: 140px;" class="text-center">Unduh</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($items as $item)
                                <tr>
                                    <td>{{ $loop->iteration + ($items->currentPage() - 1) * $items->perPage() }}</td>
                                    <td>{{ $item->judul }}</td>
                                    <td>{{ $item->diterbitkan_pada?->format('Y') ?? '-' }}</td>
                                    <td class="text-center">
                                        <a href="{{ asset('storage/' . $item->file) }}" target="_blank" class="btn btn-sm btn-primary">Unduh</a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="text-center">Belum ada data peraturan.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>

                    <div class="d-flex justify-content-center">
                        {{ $items->links() }}
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection