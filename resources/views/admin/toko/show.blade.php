@extends('admin.layouts.main')

@section('container')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="text-center my-3">
                @if($tokos[0]->image)
                <img src="{{ asset('storage/'. $tokos[0]->image) }}" class="card-img-top" alt="{{ $tokos[0]->nama }}">
                @else
                <img src="https://source.unsplash.com/1200x400?{{ $tokos[0]->nama }}" class="card-img-top" alt="{{ $tokos[0]->nama }}">
                @endif
                <div class="card-body">
                    <h5 class="card-title">{{ $tokos[0]->nama }}</h5>
                    <p class="card-text">{{ $tokos[0]->alamat }}</p>
                    <div class="row">
                        <p class="card-text col-md-6"><small class="text-dark"><i data-feather="clock"></i> Jam buka : {!! \Carbon\Carbon::parse($tokos[0]->jam_buka)->format('H:i') !!} WITA</small></p>
                        <p class="card-text col-md-6"><small class="text-dark"><i data-feather="clock"></i> Jam tutup : {!! Carbon\Carbon::parse($tokos[0]->jam_tutup)->format('H:i') !!} WITA</small></p>
                    </div>
                    <div class="row">
                        <p class="card-text col-md-6"><small class="text-muted"><i data-feather="plus"></i> {{ $tokos[0]->created_at->diffForHumans() }}</small></p>
                        <p class="card-text col-md-6"><small class="text-muted"><i data-feather="edit"></i> {{ $tokos[0]->updated_at->diffForHumans() }}</small></p>
                    </div>
                </div>
                </div>
            </div>

            <div id="map" style="height: 500px; margin: 50px;">
                <script>
                    // var map = L.map('map').setView([-0.471852, 117.160556], 13);
                    var curLocation = [0, 0];
                    if (curLocation[0] == 0 && curLocation[1] == 0) {
                        curLocation = [<?= $tokos[0]->x ?>, <?= $tokos[0]->y ?>]
                    }
                    var osmUrl = 'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',
                        osmAttrib = '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
                        osm = L.tileLayer(osmUrl, {
                            maxZoom: 18,
                            attribution: osmAttrib
                        });
                    var map = L.map('map').setView([<?= $tokos[0]->x ?>, <?= $tokos[0]->y ?>], 15).addLayer(osm);

                </script>
                @foreach ($tokos as $data)
                    <script>
                        var markerLayers = L.marker([<?= $data->x ?>, <?= $data->y ?>]).addTo(map);
                    </script>
                @endforeach
            </div>
        </div>
    </div>
@endsection
