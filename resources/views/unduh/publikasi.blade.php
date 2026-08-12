@extends('layouts.main')

@section('title', 'Publikasi | Geopark Ternate')
@section('meta_description', 'Unduh publikasi ilmiah dan populer terkait Geopark Ternate.')

@section('page_bg', 'frontend/gambar/ngade.jpg')

@section('breadcrumb_parent', 'Unduh')
@section('breadcrumb_parent_url', url('/unduh'))
@section('page_title', 'Publikasi')

@section('content')

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center pb-4">
                <div class="col-md-9 text-center heading-section ftco-animate">
                    <span class="subheading">Unduh</span>
                    <h2 class="mb-4">Publikasi Geopark Ternate</h2>
                    <p>Artikel, buku, dan jurnal terkait warisan geologi, biologi, dan budaya Ternate.</p>
                </div>
            </div>

            <div class="row justify-content-center ftco-animate">
                <div class="col-md-10">
                    <table class="table table-hover bg-white">
                        <thead>
                            <tr>
                                <th style="width: 60px;">No</th>
                                <th>Judul Publikasi</th>
                                <th style="width: 120px;">Tahun</th>
                                <th style="width: 140px;" class="text-center">Unduh</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Kajian Geologi Gunung Gamalama dan Potensi Geowisata</td>
                                <td>2026</td>
                                <td class="text-center"><a href="#" class="btn btn-sm btn-primary">Unduh</a></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Keanekaragaman Hayati Kawasan Geopark Ternate</td>
                                <td>2025</td>
                                <td class="text-center"><a href="#" class="btn btn-sm btn-primary">Unduh</a></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Warisan Budaya Kesultanan Ternate sebagai Aset Geowisata</td>
                                <td>2025</td>
                                <td class="text-center"><a href="#" class="btn btn-sm btn-primary">Unduh</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

@endsection
