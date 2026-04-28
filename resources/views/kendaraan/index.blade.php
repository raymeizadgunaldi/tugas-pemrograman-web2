<x-app>

    <x-slot:title>{{ $title }}</x-slot>

    <ul class="list-group">
        @foreach ($kendaraans as $kendaraan)
        <li class="list-group-item">{{ $loop->iteration }}. {{ $kendaraan->merek }} -- {{ $kendaraan->tipe }} -- {{ $kendaraan->warna }} -- {{ $kendaraan->tahun }} -- {{ $kendaraan->platnomor }} -- {{ $kendaraan->bahanbakar }}
        </li>
        @endforeach
    </ul>
   
</x-app>