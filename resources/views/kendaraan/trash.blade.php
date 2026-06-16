<x-app>

    <x-slot:title>{{ $title }}</x-slot>

    @session('success')
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endsession

    <a class="btn btn-primary mb-3" href="{{ route('kendaraan.index') }}" role="button">Back</a>

    <ul class="list-group">

        @foreach ($kendaraans as $kendaraan)
            <li class="list-group-item">

                {{ $loop->iteration }}.
                {{ $kendaraan->tipe }} --
                {{ $kendaraan->warna }} --
                {{ $kendaraan->tahun }} --
                {{ $kendaraan->platnomor }} --
                {{ $kendaraan->bahanbakar }} --
                {{ $kendaraan->negara_asal }}

                <form action="{{ route('kendaraan.restore', $kendaraan->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('PUT')
                    <button type="submit" class="btn btn-warning btn-sm">Restore</button>
                </form>

                <form action="{{ route('kendaraan.forceDelete', $kendaraan->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus permanen?')">Force Delete</button>
                </form>

            </li>
        @endforeach

    </ul>

</x-app>