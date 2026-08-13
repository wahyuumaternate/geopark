@extends('layouts.main')

@section('title', 'Hubungi Kami | Geopark Ternate')
@section('meta_description', 'Hubungi tim Geopark Ternate untuk informasi, kerja sama, atau pertanyaan seputar Geopark
    Ternate.')

@section('page_bg', 'frontend/gambar/tolire1.jpg')
@section('page_title', 'Hubungi Kami')

@push('styles')
    <style>
        .contact-info-list li {
            display: flex;
            align-items: flex-start;
            margin-bottom: 18px;
        }

        .contact-info-list .icon {
            width: 40px;
            height: 40px;
            flex-shrink: 0;
            border-radius: 50%;
            background: #17a2b8;
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
        }
    </style>
@endpush

@section('content')

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center pb-4">
                <div class="col-md-9 text-center heading-section ftco-animate">
                    <span class="subheading">Geopark Ternate</span>
                    <h2 class="mb-4">Ada Pertanyaan? Hubungi Kami</h2>
                    <p>
                        Untuk informasi lebih lanjut, kerja sama, atau pertanyaan seputar
                        Geopark Ternate, silakan hubungi kami melalui kontak di bawah ini.
                    </p>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-6 ftco-animate">
                    <ul class="list-unstyled contact-info-list">
                        <li>
                            <span class="icon"><span class="fa fa-map-marker"></span></span>
                            <span>Kota Ternate, Maluku Utara, Indonesia</span>
                        </li>
                        <li>
                            <span class="icon"><span class="fa fa-phone"></span></span>
                            <span>+62 921 000 0000</span>
                        </li>
                        <li>
                            <span class="icon"><span class="fa fa-paper-plane"></span></span>
                            <span>info@ternategeopark.id</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

@endsection
