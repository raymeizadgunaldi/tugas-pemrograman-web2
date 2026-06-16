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

                <form action="{{ route('kendaraan.restore', $kendaraan) }}" method="POST" class="d-inline">
                    @method('PUT')
                    @csrf
                    <button type="submit" class="btn btn-warning btn-sm" onclick="return confirm('Anda Yakin Ingin Mengembalikan Data')">Restore</button>
                </form>

            </li>
        @endforeach

    </ul>

</x-app>