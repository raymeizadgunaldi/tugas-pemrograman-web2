<x-app>

    <x-slot:title>{{ $title }}</x-slot>

    @session('success')
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endsession

    <a class="btn btn-primary mb-3" href="{{ route('transaksi.create') }}" role="button">Create</a>


    <ul class="list-group">
        @foreach ($transaksis as $transaksi)
        <li class="list-group-item">{{ $loop->iteration }}. {{ $transaksi->name }} -- {{ $transaksi->merek->merek_kendaraan }}
             -- {{ $transaksi->tanggal_transaksi }} -- {{ $transaksi->durasi }} -- {{ $transaksi->harga }} -- {{ $transaksi->status }} 
            <a class="btn btn-info btn-sm" href="{{ route('transaksi.show', $transaksi) }}" role="button">Detail</a>
            <a class="btn btn-warning btn-sm" href="{{ route('transaksi.edit', $transaksi) }}" role="button">Edit</a>

            <form action="{{ route('transaksi.destroy', $transaksi) }}" method="POST" class="d-inline">
            @method('DELETE')
            @csrf

                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Anda Yakin?')">Delete</button>

            </form>

        </li>
        @endforeach
    </ul>
   
</x-app>