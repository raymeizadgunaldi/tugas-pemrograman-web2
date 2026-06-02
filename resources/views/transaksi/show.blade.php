<x-app>

    <x-slot:title>{{ $title }}</x-slot>


    <a class="btn btn-warning mb-3" href="{{ route('transaksi.index') }}" role="button">Back</a>

{{-- traksaksi --}}

<h6>Data Traksaksi</h6>
<ul class="list-group">
  <li class="list-group-item">Name: {{ $transaksi->name }}</li>
  <li class="list-group-item">Created At: {{ $transaksi->created_at->format('d F Y H:i:s') }}</li>
  <li class="list-group-item">Last Update: {{ $transaksi->updated_at->diffForHumans() }}</li>   
</ul>

   
</x-app>