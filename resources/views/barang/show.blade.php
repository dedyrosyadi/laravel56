@extends('master')
@section('content')

	<a class="btn btn-primary" href="{{ Route('create') }}">Tambah Data</a>
	<br><br>

	<table class="table table-bordered table-responsive">
    <thead>
      <tr>
        <th>ID Barang</th>
        <th>Nama Barang</th>
        <th>Stok</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>

      @foreach ($barang as $databarang)
        {{-- expr --}}
        <tr>
          <td>{{$databarang->kode_barang}}</td>
          <td>{{$databarang->nama_barang}}</td>
          <td>{{$databarang->stok}}</td>
          <td>
            <a href="{{ Route('delete', ['id' => $databarang->id]) }}" class="btn btn-danger btn-xs">Hapus</a>
            {{-- <a href="{{ Route('delete')}}" class="btn btn-danger btn-xs">Hapus</a> --}}
						<a href="{{ Route('edit', ['id' => $databarang->id]) }}" class="btn btn-warning btn-xs">Edit</a>
            {{-- <button class="btn btn-xs btn-danger" type="submit" onclick="return confirm('Yakin ingin menghapus data?')">Delete</button>
             --}}

          </td>
        </tr>

      @endforeach
      {{-- <tr>
        <td>-</td>
        <td>-</td>
        <td>-</td>
        <td><a href="#" class="btn btn-danger btn-xs">Hapus</a>
        	<a href="#" class="btn btn-warning btn-xs">Edit</a></td>
      </tr>
      <tr>
        <td>-</td>
        <td>-</td>
        <td>-</td>
        <td><a href="#" class="btn btn-danger btn-xs">Hapus</a>
        	<a href="#" class="btn btn-warning btn-xs">Edit</a></td>
      </tr>
      <tr>
        <td>-</td>
        <td>-</td>
        <td>-</td>
        <td><a href="#" class="btn btn-danger btn-xs">Hapus</a>
        	<a href="#" class="btn btn-warning btn-xs">Edit</a></td>
      </tr>
      <tr>
        <td>-</td>
        <td>-</td>
        <td>-</td>
        <td><a href="#" class="btn btn-danger btn-xs">Hapus</a>
        	<a href="#" class="btn btn-warning btn-xs">Edit</a></td>
      </tr> --}}
    </tbody>
  </table>
@endsection


{{-- @extends('master')
@section('content')
  <a class="btn btn-primary" href="{{ Route('create') }}">Tambah Data</a>
  <br><br>
  <table border="1">
    <thead>
      <tr>
        <th>ID Barang</th>
        <th>Nama Barang</th>
        <th>Stok</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>-</td>
        <td>-</td>
        <td>-</td>
      </tr>
      <tr>
        <td>-</td>
        <td>-</td>
        <td>-</td>
      </tr>
      <tr>
        <td>-</td>
        <td>-</td>
        <td>-</td>
      </tr>
      <tr>
        <td>-</td>
        <td>-</td>
        <td>-</td>
      </tr>
    </tbody>
  </table>
  <br><br>
@endsection
 --}}
