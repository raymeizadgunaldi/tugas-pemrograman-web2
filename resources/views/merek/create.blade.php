<x-app>

    <x-slot:title>{{ $title }}</x-slot>

    <form method="POST" action="{{ route('merek.store') }}">
    @csrf

        <div class="mb-3">
            <label for="merek_kendaraan" class="form-label">Merek Kendaraan</label>
            <input type="text" class="form-control @error('merek_kendaraan') is-invalid @enderror" id="merek_kendaraan" name="merek_kendaraan" value="{{ old('merek_kendaraan') }}">
            @error('merek_kendaraan')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="negara" class="form-label">Negara</label>
            <input type="text" class="form-control @error('negara') is-invalid @enderror" id="negara" name="negara" value="{{ old('negara') }}">
            @error('negara')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="tahun_berdiri" class="form-label">Tahun Berdiri</label>
            <input type="number" class="form-control @error('tahun_berdiri') is-invalid @enderror" id="tahun_berdiri" name="tahun_berdiri" value="{{ old('tahun_berdiri') }}">
            @error('tahun_berdiri')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

    <a class="btn btn-warning" href="{{ route('merek.index') }}" role="button">Cancel</a>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>

</x-app>