@extends('layouts.main')

@section('title', 'Hubungi Kami | Geopark Ternate')
@section('meta_description', 'Hubungi tim Geopark Ternate untuk informasi, kerja sama, atau pertanyaan seputar Geopark Ternate.')

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
                        Geopark Ternate, silakan hubungi kami melalui kontak di bawah ini
                        atau kirimkan pesan melalui formulir.
                    </p>
                </div>
            </div>

            <div class="row">

                <div class="col-md-5 ftco-animate">
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

                <div class="col-md-7 ftco-animate">
                    <form action="#" method="post" class="bg-white p-4 p-md-5">
                        @csrf
                        <div class="form-group">
                            <label for="name">Nama</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Nama Anda">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email"
                                placeholder="Email Anda">
                        </div>
                        <div class="form-group">
                            <label for="message">Pesan</label>
                            <textarea class="form-control" id="message" name="message" rows="5"
                                placeholder="Tulis pesan Anda"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary py-3 px-4">Kirim Pesan</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </section>

@endsection
