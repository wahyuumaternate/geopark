@extends('layouts.main')

@section('title', 'Events | Geopark Ternate')
@section('meta_description', 'Agenda dan event Geopark Ternate: kegiatan edukasi, konservasi, festival kebudayaan, dan pertemuan komunitas pemuda.')

@section('page_bg', 'frontend/gambar/edukasi.jpg')
@section('page_title', 'Events')

@section('content')

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center pb-4">
                <div class="col-md-9 text-center heading-section ftco-animate">
                    <span class="subheading">Geopark Ternate</span>
                    <h2 class="mb-4">Agenda Events</h2>
                    <p>Agenda terbaru Geopark Ternate mulai dari kegiatan lapangan, pelatihan, hingga festival budaya dan edukasi generasi muda.</p>
                </div>
            </div>

            <div class="row d-flex">
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry justify-content-end w-100">
                        <a href="{{ url('/detail') }}" class="block-20" style="background-image: url('{{ asset('frontend/gambar/konservasi.jpg') }}');"></a>
                        <div class="text">
                            <div class="d-flex align-items-center mb-4 topp">
                                <div class="one"><span class="day">21</span></div>
                                <div class="two"><span class="yr">2026</span><span class="mos">September</span></div>
                            </div>
                            <h3 class="heading"><a href="{{ url('/detail') }}">Workshop konservasi geosite untuk masyarakat</a></h3>
                            <p><a href="{{ url('/detail') }}" class="btn btn-primary">Detail Event</a></p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry justify-content-end w-100">
                        <a href="{{ url('/detail') }}" class="block-20" style="background-image: url('{{ asset('frontend/gambar/burung-nuri.png') }}');"></a>
                        <div class="text">
                            <div class="d-flex align-items-center mb-4 topp">
                                <div class="one"><span class="day">07</span></div>
                                <div class="two"><span class="yr">2026</span><span class="mos">Oktober</span></div>
                            </div>
                            <h3 class="heading"><a href="{{ url('/detail') }}">Festival rempah dan budaya di benteng Oranje</a></h3>
                            <p><a href="{{ url('/detail') }}" class="btn btn-primary">Detail Event</a></p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry w-100">
                        <a href="{{ url('/detail') }}" class="block-20" style="background-image: url('{{ asset('frontend/gambar/edukasi.jpg') }}');"></a>
                        <div class="text">
                            <div class="d-flex align-items-center mb-4 topp">
                                <div class="one"><span class="day">12</span></div>
                                <div class="two"><span class="yr">2026</span><span class="mos">November</span></div>
                            </div>
                            <h3 class="heading"><a href="{{ url('/detail') }}">Pelatihan pemandu wisata geologi</a></h3>
                            <p><a href="{{ url('/detail') }}" class="btn btn-primary">Detail Event</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
