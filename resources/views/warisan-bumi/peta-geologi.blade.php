@extends('layouts.main')

@section('title', 'Peta Warisan Geologi | Geopark Ternate')
@section('meta_description', 'Peta interaktif sebaran situs warisan geologi di Geopark Ternate.')

@section('page_bg', asset('frontend/gambar/peta-geopark.jpg'))
@section('breadcrumb_parent', 'Warisan Bumi')
@section('breadcrumb_parent_url', url('/warisan-bumi'))
@section('page_title', 'Peta Warisan Geologi')

@push('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.9.4/leaflet.min.css" />
    <style>
        #{{ $mapId }} {
            width: 100%;
            height: 550px;
            border-radius: 6px;
            z-index: 1;
        }

        .peta-list {
            max-height: 550px;
            overflow-y: auto;
        }

        .peta-list .item-card {
            display: block;
            padding: 14px 16px;
            border: 1px solid #eee;
            border-radius: 6px;
            margin-bottom: 10px;
            cursor: pointer;
            transition: 0.2s;
            text-decoration: none;
            color: inherit;
        }

        .peta-list .item-card:hover,
        .peta-list .item-card.active {
            background: #17a2b8;
            color: #fff;
            border-color: #17a2b8;
        }

        .peta-list .item-card h6 {
            margin-bottom: 4px;
        }

        .peta-list .item-card small {
            opacity: 0.8;
        }

        .leaflet-popup-content {
            min-width: 220px;
        }

        .leaflet-popup-content img {
            width: 100%;
            height: 120px;
            object-fit: cover;
            border-radius: 4px;
            margin-bottom: 8px;
        }

        .leaflet-popup-content h6 {
            margin-bottom: 4px;
        }

        .leaflet-popup-content .btn {
            font-size: 12px;
        }
    </style>
@endpush

@section('content')

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center pb-4">
                <div class="col-md-9 text-center heading-section ftco-animate">
                    <span class="subheading">{{ $sectionLabel }}</span>
                    <h2 class="mb-4">Peta Sebaran Warisan Geologi</h2>
                    <p>Jelajahi lokasi geosite, formasi batuan, dan fenomena geologi Geopark Ternate melalui peta interaktif di bawah ini.</p>
                </div>
            </div>

            <div class="row ftco-animate">
                {{-- Sidebar list --}}
                <div class="col-md-4 mb-4 mb-md-0">
                    <div class="peta-list" id="{{ $listId }}">
                        @forelse ($items as $item)
                            <a href="#" class="item-card" data-id="{{ $item->id }}"
                                data-lat="{{ $item->y }}" data-lng="{{ $item->x }}">
                                <h6>{{ $item->nama }}</h6>
                                <small>{{ $item->lokasi ?? $item->kelurahan ?? '-' }}</small>
                            </a>
                        @empty
                            <p class="text-muted">Belum ada data warisan geologi dengan koordinat.</p>
                        @endforelse
                    </div>
                </div>

                {{-- Map --}}
                <div class="col-md-8">
                    <div id="{{ $mapId }}"></div>
                </div>
            </div>
        </div>
    </section>

@endsection

@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.9.4/leaflet.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const items = @json($mapItems);
            const mapId = @json($mapId);
            const listId = @json($listId);

            const defaultCenter = [0.7833, 127.3800];

            const map = L.map(mapId).setView(defaultCenter, 12);

            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                maxZoom: 19,
                attribution: '&copy; OpenStreetMap contributors'
            }).addTo(map);

            const icon = L.icon({
                iconUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.9.4/images/marker-icon.png',
                shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.9.4/images/marker-shadow.png',
                iconSize: [25, 41],
                iconAnchor: [12, 41],
                popupAnchor: [1, -34],
                shadowSize: [41, 41]
            });

            const markers = {};
            const bounds = [];

            items.forEach(function (item) {
                if (!item.lat || !item.lng) return;

                const gmapsUrl = `https://www.google.com/maps/dir/?api=1&destination=${item.lat},${item.lng}`;

                const popupHtml = `
                    ${item.image ? `<img src="${item.image}" alt="${item.nama}">` : ''}
                    <h6>${item.nama}</h6>
                    <p class="mb-1">${item.lokasi ?? item.kelurahan ?? '-'}</p>
                    ${item.deskripsi ? `<p class="mb-2" style="font-size: 13px;">${item.deskripsi}</p>` : ''}
                    <div class="d-flex" style="gap: 6px;">
                        <a href="${item.detail_url}" class="btn btn-sm btn-primary">Lihat Detail</a>
                        <a href="${gmapsUrl}" target="_blank" rel="noopener" class="btn btn-sm btn-outline-secondary">
                            <i class="fa fa-location-arrow"></i> Rute
                        </a>
                    </div>
                `;

                const marker = L.marker([item.lat, item.lng], { icon: icon })
                    .addTo(map)
                    .bindPopup(popupHtml);

                markers[item.id] = marker;
                bounds.push([item.lat, item.lng]);
            });

            if (bounds.length > 0) {
                map.fitBounds(bounds, { padding: [30, 30] });
            }

            document.querySelectorAll('#' + listId + ' .item-card').forEach(function (card) {
                card.addEventListener('click', function (e) {
                    e.preventDefault();

                    const id = this.dataset.id;
                    const lat = parseFloat(this.dataset.lat);
                    const lng = parseFloat(this.dataset.lng);

                    if (!lat || !lng) return;

                    document.querySelectorAll('#' + listId + ' .item-card').forEach(c => c.classList.remove('active'));
                    this.classList.add('active');

                    map.flyTo([lat, lng], 15);

                    if (markers[id]) {
                        markers[id].openPopup();
                    }
                });
            });
        });
    </script>
@endpush