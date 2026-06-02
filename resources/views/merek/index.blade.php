<x-app>

    <x-slot:title>{{ $title }}</x-slot>

    @session('success')
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endsession

    <a class="btn btn-primary mb-3" href="{{ route('merek.create') }}" role="button">Create</a>


    <ul class="list-group">
        @foreach ($mereks as $merek)
        <li class="list-group-item">{{ $loop->iteration }}. {{ $merek->merek_kendaraan }} -- {{ $merek->negara }} -- {{ $merek->tahun_berdiri }} 
            <a class="btn btn-warning btn-sm" href="{{ route('merek.edit', $merek) }}" role="button">Edit</a>

            <form action="{{ route('merek.destroy', $merek) }}" method="POST" class="d-inline">
            @method('DELETE')
            @csrf

                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Anda Yakin?')">Delete</button>

            </form>

        </li>
        @endforeach
    </ul>
   
</x-app>