@extends('layout.template')

@section('content')
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <!-- FORM PENCARIAN -->
        <div class="pb-3">
            <form class="d-flex" action="{{ url('ecommers') }}" method="get">
                <input class="form-control me-1" type="search" name="katakunci" value="{{ Request::get('katakunci') }}" placeholder="Masukkan kata kunci" aria-label="Search">
                <button class="btn btn-secondary" type="submit">Cari</button>
            </form>
        </div>
        
        <!-- TOMBOL TAMBAH DATA -->
        <div class="pb-3">
            <a href='{{ url('ecommers/create') }}' class="btn btn-primary">+ Tambah Data</a>
            <a href='{{ url('pelanggan') }}' class="btn btn-info">Data Pelanggan</a> <!-- Button to navigate to /pelanggan -->
            <a href='{{ route('roles.create') }}' class="btn btn-success">Tambah Role</a> <!-- Button to navigate to roles.create -->
        </div>
      
        <table class="table table-striped">
            <thead>
                <tr>
                    <th class="col-md-1">No</th>
                    <th class="col-md-1">ID</th>
                    <th class="col-md-3">Title</th>
                    <th class="col-md-2">Description</th>
                    <th class="col-md-2">Harga</th>
                    <th class="col-md-2">Image</th>
                    <th class="col-md-1">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = $data->firstItem(); ?>
                @foreach ($data as $item)
                    <tr>
                        <td>{{ $i }}</td>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->title }}</td>
                        <td>{{ $item->description }}</td>
                        <td>Rp {{ number_format($item->harga, 0, ',', '.') }}</td> <!-- Menambahkan format Rupiah -->
                        <td>
                            @if ($item->image_url)
                                @if (strpos($item->image_url, '\\') !== false)
                                    <img src="http://localhost{{ str_replace('\\', '/', $item->image_url) }}" alt="Gambar" style="max-width: 100px;">
                                @else
                                    <img src="http://localhost/androiddb/Menu/image/{{ $item->image_url }}" alt="Gambar" style="max-width: 100px;">
                                @endif
                            @else
                                <span>Tidak ada gambar</span>
                            @endif
                        </td>
                        <td>
                            <a href='{{ url("ecommers/{$item->id}/edit") }}' class="btn btn-warning btn-sm">Edit</a>
                            <form onsubmit="return confirm('Yakin akan menghapus data?')" class="d-inline" action="{{ url('ecommers/'.$item->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" name="submit" class="btn btn-danger btn-sm">Del</button>
                            </form>
                        </td>
                    </tr>
                    <?php $i++; ?>
                @endforeach
            </tbody>
        </table>
        {{ $data->links() }}
    </div>
@endsection
