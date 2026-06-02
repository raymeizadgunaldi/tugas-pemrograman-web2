<x-app>

    <x-slot:title>{{ $title }}</x-slot>

    @session('success')
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endsession

    <a class="btn btn-primary mb-3" href="{{ route('merek.create') }}" role="button">Create</a>

    {{-- TAMBAHKAN FORM SEARCH DI SINI --}}
    <form action="">
        <div class="row g-3 mb-3">
            <div class="col-md-8">
                <input type="text" class="form-control" name="keyword" placeholder="Search merek ..." value="{{ request('keyword') }}">
            </div>
            <div class="col-md-4">
                <button type="submit" class="btn btn-success">Search</button>
            </div>
        </div>
    </form>

    <ul class="list-group">
        @foreach ($mereks as $merek)
        <li class="list-group-item">{{ $mereks->firstItem() + $loop->index }}. {{ $merek->merek_kendaraan }} -- {{ $merek->negara }} -- {{ $merek->tahun_berdiri }} 
            <a class="btn btn-warning btn-sm" href="{{ route('merek.edit', $merek) }}" role="button">Edit</a>

            <form action="{{ route('merek.destroy', $merek) }}" method="POST" class="d-inline">
            @method('DELETE')
            @csrf

                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Anda Yakin?')">Delete</button>

            </form>

        </li>
        @endforeach
    </ul>

    {{-- TAMBAHKAN PAGINATION DI SINI --}}
    {{ $mereks->links() }}
   
</x-app>