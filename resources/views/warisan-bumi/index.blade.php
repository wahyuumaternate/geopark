@extends('layouts.main')

@section('title', 'Warisan Bumi | Geopark Ternate')
@section('meta_description', 'Warisan Bumi Geopark Ternate: portal utama untuk menjelajahi geologi, biologi, dan budaya Ternate.')

@section('page_bg', 'frontend/gambar/peta-geopark.jpg')

@section('breadcrumb_parent', 'Warisan Bumi')
@section('breadcrumb_parent_url', url('/warisan-bumi'))
@section('page_title', 'Warisan Bumi')

@section('content')
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center pb-4">
                <div class="col-md-9 text-center heading-section ftco-animate">
                    <span class="subheading">Geopark Ternate</span>
                    <h2 class="mb-4">Warisan Bumi Geopark Ternate</h2>
                    <p>Warisan Bumi mencakup kekayaan geologi, keanekaragaman hayati, dan budaya yang membentuk identitas Pulau Ternate. Jelajahi tiga pilar utama warisan Geopark Ternate.</p>
                </div>
            </div>

            <div class="row d-flex">
                <div class="col-md-6 col-lg-4 d-flex ftco-animate">
                    <div class="services services-1 color-1 d-block w-100">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="flaticon-volcano"></span>
                        </div>
                        <div class="media-body">
                            <h3 class="heading mb-3">Warisan Geologi</h3>
                            <p>Temukan geosite 19 lokasi di Ternate, mulai dari aliran lava, maar, sampai tebing breksi dan endapan paleotsunami.</p>
                            <p><a href="{{ url('/warisan-bumi/geologi') }}" class="btn btn-primary">Pelajari Geologi</a></p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 d-flex ftco-animate">
                    <div class="services services-1 color-2 d-block w-100">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="flaticon-tree"></span>
                        </div>
                        <div class="media-body">
                            <h3 class="heading mb-3">Warisan Biologi</h3>
                            <p>Kenali flora dan fauna endemik Ternate, dari cengkeh Afo hingga satwa khas yang hidup di lereng Gamalama.</p>
                            <p><a href="{{ url('/warisan-bumi/biologi') }}" class="btn btn-primary">Pelajari Biologi</a></p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 d-flex ftco-animate">
                    <div class="services services-1 color-3 d-block w-100">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="flaticon-museum"></span>
                        </div>
                        <div class="media-body">
                            <h3 class="heading mb-3">Warisan Budaya</h3>
                            <p>Pelajari sejarah Kesultanan Ternate, benteng-benteng kuno, tradisi lokal, dan kesenian khas Ternate.</p>
                            <p><a href="{{ url('/warisan-bumi/budaya') }}" class="btn btn-primary">Pelajari Budaya</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
