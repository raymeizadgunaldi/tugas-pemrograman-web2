<x-app>

    <x-slot:title>{{ $title }}</x-slot>

    @session('success')
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endsession

    <a class="btn btn-primary mb-3" href="{{ route('kendaraan.create') }}" role="button">Create</a>


    <ul class="list-group">
        @foreach ($kendaraans as $kendaraan)
        <li class="list-group-item">{{ $loop->iteration }}. {{ $kendaraan->merek }} -- {{ $kendaraan->tipe }} -- {{ $kendaraan->warna }} -- {{ $kendaraan->tahun }} -- {{ $kendaraan->platnomor }} -- {{ $kendaraan->bahanbakar }}
        </li>
        @endforeach
    </ul>
   
</x-app>