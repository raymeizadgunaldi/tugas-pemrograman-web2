<x-app>

    <x-slot:title>{{ $title }}</x-slot>

    <form method="POST" action="{{ route('transaksi.store') }}">
    @csrf

         <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}">
             @error('name')
             <div class="invalid-feedback">{{ $message }}</div>
             @enderror
        </div>

        <div class="mb-3">
            <label for="merek_id" class="form-label">Merek</label>

            <select class="form-select @error('merek_id') is-invalid @enderror" id="merek_id" name="merek_id">
            <option value="">Choose Merek</option>
            @foreach ( $mereks as $merek )
            <option value="{{ $merek->id }}"
            @selected(old('merek_id') == $merek->id)>
            {{ $merek->merek_kendaraan }}
            </option>
            @endforeach
            </select>

             @error('merek_id')
             <div class="invalid-feedback">{{ $message }}</div>
             @enderror
        </div>  


        <div class="mb-3">
            <label for="tanggal_transaksi" class="form-label">Tanggal transaksi</label>
            <input type="number" class="form-control @error('tanggal_transaksi') is-invalid @enderror" id="tanggal_transaksi" name="tanggal_transaksi" value="{{ old('tanggal_transaksi') }}">
             @error('tanggal_transaksi')
             <div class="invalid-feedback">{{ $message }}</div>
             @enderror
        </div>


        <div class="mb-3">
            <label for="durasi" class="form-label">Durasi</label>
            <input type="text" class="form-control @error('durasi') is-invalid @enderror" id="durasi" name="durasi" value="{{ old('durasi') }}">
             @error('durasi')
             <div class="invalid-feedback">{{ $message }}</div>
             @enderror
        </div>

        <div class="mb-3">
            <label for="harga" class="form-label">Harga</label>
            <input type="text" class="form-control @error('harga') is-invalid @enderror" id="harga" name="harga" value="{{ old('harga') }}">
             @error('harga')
             <div class="invalid-feedback">{{ $message }}</div>
             @enderror
        </div>

        <div class="mb-3">
            <label for="status" class="form-label">status</label>
            <input type="text" class="form-control @error('status') is-invalid @enderror" id="status" name="status" value="{{ old('status') }}">
             @error('status')
             <div class="invalid-feedback">{{ $message }}</div>
             @enderror
        </div>
       
    <a class="btn btn-warning" href="{{ route('transaksi.index') }}" role="button">Cancel</a>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
   
</x-app>