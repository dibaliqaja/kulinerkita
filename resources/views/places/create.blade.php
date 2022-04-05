<x-templates.default>
    <x-slot name="title">Tempat Kuliner</x-slot>

    <div class="card">
        <div class="card-header">
          <h3 class="card-title">Tambah Data Tempat Kuliner</h3>
        </div>
        <div class="card-body">
          <form action="{{ route('places.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group mb-3">
                <label class="form-label">Nama</label>
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Masukkan nama tempat kuliner" value="{{ old('name') }}">
                @error('name')
                    <small class="invalid-feedback"><strong>{{ $message }}</strong></small>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label class="form-label">Deskripsi</label>
                <textarea name="description" class="form-control @error('description') is-invalid @enderror" placeholder="Masukkan deskripsi tempat kuliner">{{ old('description') }}</textarea>
                @error('description')
                    <small class="invalid-feedback"><strong>{{ $message }}</strong></small>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label class="form-label">Kecamatan</label>
                <select name="sub_district_id" class="form-select @error('sub_district_id') is-invalid @enderror">
                    @foreach ($subDistricts as $subDistrict)
                        <option value="{{ $subDistrict->id }}">{{ $subDistrict->name }}</option>
                    @endforeach
                </select>
                @error('sub_district_id')
                    <small class="invalid-feedback"><strong>{{ $message }}</strong></small>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label class="form-label">Alamat</label>
                <textarea name="address" class="form-control @error('address') is-invalid @enderror" placeholder="Masukkan alamat tempat kuliner">{{ old('address') }}</textarea>
                @error('address')
                    <small class="invalid-feedback"><strong>{{ $message }}</strong></small>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label class="form-label">No. Handphone</label>
                <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror" placeholder="Masukkan nomor handphone" value="{{ old('phone') }}">
                @error('phone')
                    <small class="invalid-feedback"><strong>{{ $message }}</strong></small>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label class="form-label">Gambar</label>
                <input type="file" name="image" class="form-control-file @error('image') is-invalid @enderror">
                @error('image')
                    <small class="invalid-feedback"><strong>{{ $message }}</strong></small>
                @enderror
            </div>
            <div class="form-group mb-3">
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <div id="map"></div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Latitude</label>
                        <input type="text" name="latitude" id="latitude" class="form-control @error('latitude') is-invalid @enderror" value="{{ old('latitude') }}" readonly>
                        @error('latitude')
                            <small class="invalid-feedback"><strong>{{ $message }}</strong></small>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Longitude</label>
                        <input type="text" name="longitude" id="longitude" class="form-control @error('longitude') is-invalid @enderror" value="{{ old('longitude') }}" readonly>
                        @error('longitude')
                            <small class="invalid-feedback"><strong>{{ $message }}</strong></small>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="form-footer">
              <a href="{{ route('places.index') }}" class="btn btn-white">Back</a>
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>

    @push('styles')
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
            integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
            crossorigin=""/>

        <style>
            #map { height: 500px; }
        </style>
    @endpush

    @push('scripts')
        <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
            integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
            crossorigin=""></script>

        <script>
            var map = L.map('map').fitWorld();
            L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
                attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
                maxZoom: 18,
                id: 'mapbox/streets-v11',
                tileSize: 512,
                zoomOffset: -1,
                accessToken: 'pk.eyJ1IjoiZGFuZGFuZyIsImEiOiJjbDFseHB4N2owZjRxM2RyejBvcnJyMmI1In0.1KOJunnAnLVr74MO2S0FRA'
            }).addTo(map);

            function onLocationFound(e) {
                var radius = e.accuracy;

                $('#latitude').val(e.latlng.lat);
                $('#longitude').val(e.latlng.lng);

                let locationMarker = L.marker(e.latlng, { draggable: 'true' }).addTo(map);
                locationMarker.on('dragend', function (event) {
                    let marker = event.target;
                    let position = marker.getLatLng();
                    marker.setLatLng(position, {draggable: 'true'}).update();
                    $('#latitude').val(position.lat);
                    $('#longitude').val(position.lng);
                });
            }

            function onLocationError(e) {
                alert(e.message);
            }

            map.on('locationfound', onLocationFound);
            map.on('locationerror', onLocationError);
            map.locate({setView: true, maxZoom: 16});
        </script>
    @endpush
</x-templates.default>
