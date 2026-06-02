<x-app>
<x-slot:title>{{ $title }}</x-slot>

<a class="btn btn-warning mb-3" href="{{ route('merek.index') }}" role="button">Back</a>

{{-- merek --}}
<h6>Data Merek</h6>
<ul class="list-group">
  <li class="list-group-item">Merek Kendaraan: {{ $merek->merek_kendaraan }}</li>
  <li class="list-group-item">Negara: {{ $merek->negara }}</li>
  <li class="list-group-item">Tahun Berdiri: {{ $merek->tahun_berdiri }}</li>
  <li class="list-group-item">Created At: {{ $merek->created_at->format('d F Y H:i:s') }}</li>
  <li class="list-group-item">Last Update: {{ $merek->updated_at->diffForHumans() }}</li>
</ul>


{{-- transaksi --}}
<h6>Data Transaksi</h6>
<ul class="list-group mb-3">
    @foreach ($merek->transaksis as $transaksi)
    <li class="list-group-item">{{ $transaksi->name }}</li>
    @endforeach
</ul>

</x-app>