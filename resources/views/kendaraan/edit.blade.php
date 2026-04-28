<x-app>

    <x-slot:title>{{ $title }}</x-slot>

    <form method="POST" action="{{ route('kendaraan.update', $kendaraan) }}">
    @csrf
    @method('PUT')

        <div class="mb-3">
            <label for="merek" class="form-label">Merek</label>
            <input type="text" class="form-control @error('merek') is-invalid @enderror" id="merek" name="merek" value="{{ old('merek', $kendaraan->merek) }}">
             @error('merek')
             <div class="invalid-feedback">{{ $message }}</div>
             @enderror

        </div>

        <div class="mb-3">
            <label for="tipe" class="form-label">Tipe</label>
            <input type="text" class="form-control @error('tipe') is-invalid @enderror" id="tipe" name="tipe" value="{{ old('tipe', $kendaraan->tipe) }}">
             @error('tipe')
             <div class="invalid-feedback">{{ $message }}</div>
             @enderror
        </div>

        <div class="mb-3">
            <label for="warna" class="form-label">Warna</label>
            <input type="text" class="form-control @error('warna') is-invalid @enderror" id="warna" name="warna" value="{{ old('warna', $kendaraan->warna) }}">
             @error('warna')
             <div class="invalid-feedback">{{ $message }}</div>
             @enderror
        </div>

        <div class="mb-3">
            <label for="tahun" class="form-label">Tahun</label>
            <input type="number" class="form-control @error('tahun') is-invalid @enderror" id="tahun" name="tahun" value="{{ old('tahun', $kendaraan->tahun) }}">
             @error('tahun')
             <div class="invalid-feedback">{{ $message }}</div>
             @enderror
        </div>

        <div class="mb-3">
            <label for="platnomor" class="form-label">Plat Nomor</label>
            <input type="text" class="form-control @error('platnomor') is-invalid @enderror" id="platnomor" name="platnomor" value="{{ old('platnomor', $kendaraan->platnomor) }}">
             @error('platnomor')
             <div class="invalid-feedback">{{ $message }}</div>
             @enderror
        </div>

        <div class="mb-3">
            <label for="bahanbakar" class="form-label">Bahan Bakar</label>
            <input type="text" class="form-control @error('bahanbakar') is-invalid @enderror" id="bahanbakar" name="bahanbakar" value="{{ old('bahanbakar', $kendaraan->bahanbakar) }}">
             @error('bahanbakar')
             <div class="invalid-feedback">{{ $message }}</div>
             @enderror
        </div>
       
    <a class="btn btn-warning" href="{{ route('kendaraan.index') }}" role="button">Cancel</a>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
   
</x-app>